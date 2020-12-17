@extends('layouts.app')
@section('content')

    <div class="container mt-4">
        @include('include.breadcrumb')
        <h1>User Detail</h1>

      
            <div class="card mb-2">
                
                    <div class="card-body "  style="border-bottom: 2px solid gray">
                        <h4 class="card-title">{{$details->fullname}}</h4>
                        <p class="card-text"> Email: {{$details->email}}
                                             <br>
                                              Phone: {{$details->phone}}
                                             <br>
                                              Address: {{$details->address}}
                                              <br>
                                            
                         </p>
                         <p class="card-text"> 
                                              Objective: {{$details->objective}}
                         </p>

              
                    <div style="display: flex;">

                      
                        <div>
                            <a href="{{route('user_detail.edit', $details)}}" class="btn btn-sm btn-success" style="padding-right:1rem;padding-left:1rem">Edit</a>
                        </div>  
    
                        <form action="{{route('user_detail.destroy',$details)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div style="padding-left:0.9rem">
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </div>
                        </form>
                     </div>
                </div>
            </div>
            <div class="container">
                <div class="text-right" >
                    <a href="education/create" class="btn btn-primary"> Next Section </a>
                </div>
            </div>
            
    </div>
    
@endsection