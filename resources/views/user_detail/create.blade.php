@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <h1>About Yourself</h1>
         <form action="/user_detail" method="POST">
          @csrf
         
          <div class="form-group">
            <label for="">Fullname</label>
              <input 
              type="text" name="fullname" 
              id="fullname" class="form-control" 
              placeholder="Fullname"  
              value="{{ old('fullname') }}">
          </div>

          <div class="form-group"> 
            <label for="">Email</label>                 
            <input type="email" name="email" 
            class="form-control" 
            id="email"
           
            placeholder="Email"
            value="{{ old('email') }}">
           
          </div>

          <div class="form-group">
            <label for="">Phone No.</label>
            <input type="number" name="phone"
             class="form-control"
             id="phone"
            
              placeholder="Phone"
              value="{{ old('phone') }}">
     
          </div>

          <div class="form-group">
            <label for="">Address</label>
            <input type="text"  name="address" 
            class="form-control"
            id="address"
           
             placeholder="Address"
             value="{{ old('address') }}">
           
          </div>

          <div class="form-group">
            <label for="">Objective</label>
            <textarea name="objective"  cols="30" rows="4" 
            class="form-control"
            id="objective"
        
             >
             {{ old('objective') }}
            </textarea>
            
          
          </div>

          <div>
            <button class="btn btn-primary mb-2">Save</button>    
          </div>   
        </form> 
       
    </div>    
@endsection