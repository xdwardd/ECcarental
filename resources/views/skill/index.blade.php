@extends('layouts.app')
@section('content')
        <div class="container mt-4">
            @include('include.breadcrumb')
            <h1>Skills</h1>
            
            @foreach ($skills as $skill)
            <div class="card mb-2" style="border-bottom: 2px solid gray"> 
                    <div class="card-body ">
                        <h4 class="card-title">{{$skill->name}}</h4>
                        <p class="card-text">{{$skill->rating}}</p>

                        <div style="display: flex;">

                      
                            <div>
                                <a href="{{route('skill.edit', $skill)}}" class="btn btn-sm btn-success" style="padding-right:1rem;padding-left:1rem">Edit</a>
                            </div>  
        
                            <form action="{{route('skill.destroy',$skill)}}" method="POST">
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
                    <a href="skill/create" class=""> + Add Skills</a>
                </div>
                <a class="btn btn-primary" href="{{route('resume.view')}}">View All</a>
            </div>
        </div>
@endsection