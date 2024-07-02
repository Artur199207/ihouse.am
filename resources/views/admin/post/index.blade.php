@extends('layouts.master')

@section('title', 'Ihouse')

@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4>Posts</h4>
                <a href="{{ url('admin/add-post') }}" class="btn btn-primary float-end">Add Post</a>
            </div>
            <div class="card-body">
                @foreach ($posts as $post)
                    <p>{{ $post->name }}</p> <!-- Example display of post name -->
                @endforeach
            </div>
        </div>
    </div>
@endsection
