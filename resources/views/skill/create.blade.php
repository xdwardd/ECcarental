@extends('layouts.app')
@section('content')

    <div class="container mt-4">
        <h1>Skills</h1>
        <form action="/skill" method="POST">
         @csrf
         <div class="form-group">
             <input type="text"
              name="name" 
              class="form-control" 
              placeholder="Skill Name"
              value="{{ old('name') }}"
              >
         </div>
         <div class="form-group">
            <input type="text"
             name="rating" 
             class="form-control" 
             placeholder="Skill Rating"
             value="{{ old('rating') }}"
             >
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Save Skill</button>
        </div>
        </form>
    </div>
@endsection