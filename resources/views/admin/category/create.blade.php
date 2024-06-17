@extends('layouts.master')
@section('title', 'Կարգավիճակ')

@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h1 class="">Ավելացնել կատեգորիան</h1>
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{ url('admin/add-category') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name">Անուն</label>
                    <input type="text" name="name" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="slug">Հասցէ՝</label>
                    <input type="text" name="slug" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="description">Տեղեկատվություն</label>
                    <textarea name="description" class="form-control" ></textarea>
                </div>
                <div class="mb-3">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" >
                </div>
                <h6>SEO Tags</h6>
                <div class="mb-3">
                    <label for="meta_title">Կոդ ՝</label>
                    <input type="text" name="meta_title" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="meta_description">Շինության տիպը`</label>
                    <textarea rows="3" name="meta_description" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="meta_keywords">Տեսակը`</label>
                    <textarea rows="3" name="meta_keywords" class="form-control"></textarea>
                </div>
                <h6>Status Mode</h6>
                <div class="row">
                    <!-- <div class="col-md-3 mb-3">
                        <label for="navbar_status">Navbar Status</label>
                        <input type="checkbox" name="navbar_status" >
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="status">Status</label>
                        <input type="checkbox" name="status" >
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