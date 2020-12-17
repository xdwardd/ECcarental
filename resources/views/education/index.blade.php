@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        @include('include.breadcrumb')
        <h1>Education Details</h1>
        
        @foreach ($education as $edu)
            <div class="card mb-2" style="border-bottom: 2px solid gray"> 
                <div class="card-body">
                    <h4 class="card-title">
                        {{$edu->degree}} {{$edu->school_name}} 
                    </h4>
                    <small>
                        {{$edu->school_location}}
                    </small>
                    <br>
                    <small>
                        SY:{{$edu->sy_start}} - {{$edu->sy_end}}
                    </small>
                  
                     <div style="display: flex;">

                      
                        <div>
                            <a href="{{route('education.edit',$edu)}}" class="btn btn-sm btn-success" style="padding-right:1rem;padding-left:1rem">Edit</a>
                        </div>  

                        <form action="{{route('education.destroy',$edu)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div style="padding-left:0.9rem">
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </div>
                        </form>
                     </div>
                </div>
            </div>
           
        @endforeach
       
        <div style="display: flex; justify-content: space-between">
            <div >
                <a href="education/create" class=""> + Add Education</a>
            </div>
            <div >
                <a href="{{route('experience.create')}}" class="btn btn-primary"> Next Section</a>
            </div>
        </div>
    </div>
@endsection