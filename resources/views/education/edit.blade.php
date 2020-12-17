@extends('layouts.app')
@section('content')

    <div class="container mt-4">
        <h1>Edit Education</h1>
        <form action="{{route('education.update',$education)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="text" name="school_name" value="{{$education->school_name}}" class="form-control" placeholder="School Name">
            </div>
            <div class="form-group">
                <input type="text" name="school_location" value="{{$education->school_location}}" class="form-control" placeholder="School Address">
            </div>
            <div class="form-group">
                <input type="text" name="degree" value="{{$education->degree}}" class="form-control" placeholder="Degree">
            </div>
            <div class="form-group">
                <input type="date" name="sy_start" value="{{$education->sy_start}}" class="form-control">
            </div>
            <div class="form-group">
                <input type="date" name="sy_end" value="{{$education->sy_end}}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Save Education</button>
        </form>
    </div>
    
@endsection