@extends('layouts.app')
@section('content')
    <div class="container mt-4">

        <h1>Work Experience</h1> 
        
        <form action="/experience" method="POST">
        @csrf
            <div class="form-group">
                <label for="">Job Title</label>
                <input type="text"
                name="job_title" 
                class="form-control" 
                placeholder="Job Title"
                value="{{ old('job_title') }}"
                >
            </div>
            <div class="form-group">
                <label for="">Employer</label>
                <input type="text" 
                name="employer" 
                class="form-control" 
                placeholder="Employer"
                value="{{ old('employer') }}"
                >
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text"
                 name="address" 
                 class="form-control"
                 placeholder="Address"
                 value="{{ old('address') }}"
                 >
            </div>
            <div class="form-group">
                <label for="">Date Started</label>
                <input type="date" 
                 name="start_date" 
                 class="form-control"
                 value="{{ old('start_date') }}"
                 >
            </div>
            <div class="form-group">
                <label for="">Date End</label>
                <input type="date"
                 name="end_date" 
                 class="form-control"
                 value="{{ old('end_date') }}"
                 >
            </div>

            <div>
                <button type="submit" class="btn btn-primary mb-2">Save Work</button>
            </div>
        </form>
    </div>    
@endsection