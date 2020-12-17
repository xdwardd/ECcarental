@extends('layouts.app')
@section('content')

    <div class="container mt-4">
        <h1>Education</h1>
        <form action="/education" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="school_name"
                 class="form-control" 
                 placeholder="School Name"
                 value="{{ old('school_name') }}">
                 
            </div>
            <div class="form-group">
                <input type="text" name="school_location" 
                class="form-control" 
                placeholder="School Address"
                value="{{ old('school_location') }}">
       
            </div>
            <div class="form-group">
                <input type="text" name="degree" 
                class="form-control" 
                placeholder="Degree"
                value="{{ old('degree') }}">
           
            </div>
            <div class="form-group">
                <input type="date" name="sy_start" 
                class="form-control"
                value="{{ old('sy_start') }}">
          
            </div>
            <div class="form-group">
                <input type="date" name="sy_end" 
                class="form-control"
                value="{{ old('sy_end') }}">
         
            </div>

            <button type="submit" class="btn btn-primary">Save Education</button>
        </form>
    </div>
    
@endsection