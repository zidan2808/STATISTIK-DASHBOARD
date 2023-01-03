@extends('layouts.admin')

@section('content')

<div class="card-header">
    <a href="{{ route('dashboard')}}">Admin
    </a>
    /
    <span>
        <a href="{{ route('categories.index')}}">Study Program
        </a>
    </span>
</div>
<div class="card">
    <div class="card-header">
        <h3>Study Program
            <a href="{{ route('categories.create')}}" class="btn btn-primary float-right">
                Create
            </a>
        </h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <!-- <th>Slug</th> -->
                        <th>Student Count</th>
                        <!-- <th>Image</th> -->
                        <!-- <th>Parent</th> -->
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$category->name}}</td>
                        <!-- <td>{{$category->slug}}</td> -->
                        <td>{{$category->products_count}}</td>
                        <!-- <td>
                            @if($category->photo)
                            <a href="{{ $category->photo->getUrl() }}" target="_blank">
                                <img src="{{ $category->photo->getUrl() }}" width="50px" height="50px">
                            </a>
                            @else
                            <span class="badge badge-warning">No Image</span>
                            @endif
                        </td> -->
                        <!-- <td>{{$category->parent->name ?? 'Null'}}</td> -->
                        <td>
                            <div class="btn-group ">
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form onclick="return confirm('Are you sure ? ')" action="{{ route('categories.destroy', $category->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type='submit' class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>


@endsection
