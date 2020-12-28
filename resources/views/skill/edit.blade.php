@extends('layouts.app')
@section('content')

    <div class="container mt-4">
        <h1> Edit Skills</h1>
            <form action="{{route('skill.update',$skill)}}" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="">Skill Name</label>
                    <input type="text" name="name" class="form-control" value="{{$skill->name}}" placeholder="Skill">
                </div>
                <div class="form-group">
                    <label for="">Skill Rating</label>
                    <input type="text" name="rating" class="form-control" value="{{$skill->rating}}" placeholder="Rating">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Save Skill</button>
                </div>
            </form>
    </div>
@endsection