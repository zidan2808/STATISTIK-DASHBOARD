@extends('layouts.admin')

@section('content')

<div class="card-header">
    <a href="{{ route('dashboard')}}">Admin
    </a>
    /
    <span>
        <a href="{{ route('tags.index')}}">Class
        </a>
    </span>
</div>
<div class="card">
    <div class="card-header">
        <h3>Create Class List
            <a href="{{ route('tags.index')}}" class="btn btn-primary float-right">
                Go Back
            </a>
        </h3>
    </div>
    <div class="card-body">
        <form action="{{ route('tags.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
<br>
@endsection
