@extends('layouts.master')
@section('title', 'Կարգավիճակ')

@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h1 class="">Հեռացնել կատեգորիան</h1>
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ url('admin/update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name">Անուն</label>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="slug">Հասցէ՝</label>
                    <input type="text" name="slug" value="{{ $category->slug }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="description">Տեղեկատվություն</label>
                    <textarea name="description" class="form-control">{{ $category->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control">
                    @if ($category->image)
                        <img src="{{ asset('uploads/category/' . $category->image) }}" width="100" height="100" alt="Category Image">
                    @else
                        <p>No image uploaded</p>
                    @endif
                </div>

                <h6>SEO Tags</h6>
                <div class="mb-3">
                    <label for="meta_title">Կոդ ՝</label>
                    <input type="text" name="meta_title" class="form-control" value="{{ $category->meta_title }}">
                </div>
                <div class="mb-3">
                    <label for="meta_description">Շինության տիպը`</label>
                    <textarea rows="3" name="meta_description" class="form-control">{{ $category->meta_description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="meta_keywords">Տեսակը`</label>
                    <textarea rows="3" name="meta_keywords" class="form-control">{{ $category->meta_keywords }}</textarea>
                </div>

                <h6>Status Mode</h6>
                <div class="row">
                    <!-- <div class="col-md-3 mb-3">
                        <label for="navbar_status">Navbar Status</label>
                        <input type="checkbox" name="navbar_status" {{ $category->navbar_status == 1 ? 'checked' : '' }}>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="status">Status</label>
                        <input type="checkbox" name="status" {{ $category->status == 1 ? 'checked' : '' }}>
                    </div> -->
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Պահպանել կատեգորիան</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
