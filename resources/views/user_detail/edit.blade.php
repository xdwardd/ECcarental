@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <h1>Edit Personal Information</h1>
         <form action="{{route('user_detail.update',$userDetail)}}" method="POST">
          @csrf
         @method('PUT')
          <div class="form-group">
              <input type="text" name="fullname" value="{{$userDetail->fullname}}" class="form-control" placeholder="Fullname">
              
          </div>
          <div class="form-group">                  
            <input type="email" name="email" value="{{$userDetail->email}}" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="number" name="phone" value="{{$userDetail->phone}}" class="form-control" placeholder="Phone">
          </div>
          <div class="form-group">
            <input type="text" name="address" value="{{$userDetail->address}}" class="form-control" placeholder="Address">
          </div>
          <div class="form-group">
            <textarea name="objective" id="" cols="30" rows="4" class="form-control">
                {{$userDetail->objective}}
             </textarea>
          </div>


          <div>
            <button class="btn btn-primary">Save</button>    
        </div>   
        </form> 
       
    </div>    
@endsection