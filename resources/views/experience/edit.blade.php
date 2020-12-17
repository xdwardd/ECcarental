@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <h1>Edit Work Experience</h1> 
        
        <form action="{{route('experience.update',$experience)}}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group">
                <input type="text" name="job_title" value="{{$experience->job_title}}" class="form-control" placeholder="Job Title">
            </div>
            <div class="form-group">
                <input type="text"  name="employer" value="{{$experience->employer}}" class="form-control" placeholder="Employer">
            </div>
            <div class="form-group">
                <input type="text" name="address" value="{{$experience->address}}" class="form-control" placeholder="Address">
            </div>
            <div class="form-group">
                <input type="date" name="start_date" value="{{$experience->start_date}}" class="form-control">
            </div>
            <div class="form-group">
                <input type="date" name="end_date" value="{{$experience->end_date}}" class="form-control">
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Save Work</button>
            </div>
        </form>
    </div>    
@endsection