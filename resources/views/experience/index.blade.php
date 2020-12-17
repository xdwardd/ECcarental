@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        @include('include.breadcrumb')
        <h1> Work Experience</h1>

        @foreach ($experiences as $exp)
            <div class="card mb-2" style="border-bottom: 2px solid gray">
            
                <div class="card-body">
                    <h4 class="card-title">
                        {{$exp->job_title}} - {{$exp->employer}} ({{$exp->address}})
                    </h4>
                    <small>{{$exp->start_date}}</small>
                    <br>
                    <small>{{$exp->end_date}}</small>

                    <div style="display: flex;">

                      
                        <div>
                            <a href="{{route('experience.edit', $exp)}}" class="btn btn-sm btn-success" style="padding-right:1rem;padding-left:1rem">Edit</a>
                        </div>  
    
                        <form action="{{route('experience.destroy',$exp)}}" method="POST">
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
                    <a href="experience/create" class=""> + Add Experience</a>
                </div>
                <div >
                    <a href="skill/create" class="btn btn-primary"> Next Section </a>
                </div>
            </div>
    </div>
    
@endsection