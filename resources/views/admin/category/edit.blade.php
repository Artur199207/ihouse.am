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

            <form action="{{ url('admin/update-category/' . $category->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name">Շինության տիպ</label>
                    <input type="text" name="name" class="form-control"
                        value="{{ old('name', $category->name ?? '') }}">
                </div>

                <div class="mb-3">
                    <label for="name1">Նորակառույց</label>
                    <input type="text" name="name1" class="form-control"
                        value="{{ old('name1', $category->name1 ?? '') }}">
                </div>

                <div class="mb-3">
                    <label for="name2">Վերելակ</label>
                    <input type="text" name="name2" class="form-control"
                        value="{{ old('name2', $category->name2 ?? '') }}">
                </div>

                <div class="mb-3">
                    <label for="name3">Հարկերի քանակ</label>
                    <input type="number" name="name3" class="form-control"
                        value="{{ old('name3', $category->name3 ?? '') }}">
                </div>

                <div class="mb-3">
                    <label for="name4">Հարկը</label>
                    <input type="number" name="name4" class="form-control"
                        value="{{ old('name4', $category->name4 ?? '') }}">
                </div>

                <div class="mb-3">
                    <label for="name5">Կայանատեղի</label>
                    <input type="text" name="name5" class="form-control"
                        value="{{ old('name5', $category->name5 ?? '') }}">
                </div>

                <div class="mb-3">
                    <label for="name6">Սենյակների քանակ</label>
                    <input type="number" name="name6" class="form-control"
                        value="{{ old('name6', $category->name6 ?? '') }}">
                </div>

                <div class="mb-3">
                    <label for="name7">Սանհանգույցի քանակ</label>
                    <input type="number" name="name7" class="form-control"
                        value="{{ old('name7', $category->name7 ?? '') }}">
                </div>

                <div class="mb-3">
                    <label for="name8">Պատշգամբ</label>
                    <input type="text" name="name8" class="form-control"
                        value="{{ old('name8', $category->name8 ?? '') }}">
                </div>

                <div class="mb-3">
                    <label for="name9">Առաստաղի բարձրություն</label>
                    <input type="text" name="name9" class="form-control"
                        value="{{ old('name9', $category->name9 ?? '') }}">
                </div>

                <div class="mb-3">
                    <label for="name10">Կահույք</label>
                    <input type="text" name="name10" class="form-control"
                        value="{{ old('name10', $category->name10 ?? '') }}">
                </div>

                <div class="mb-3">
                    <label for="name11">Ընդհանուր մակերես</label>
                    <input type="text" name="name11" class="form-control"
                        value="{{ old('name11', $category->name11 ?? '') }}">
                </div>

                <div class="mb-3">
                    <label for="name12">Վերանորոգված</label>
                    <input type="text" name="name12" class="form-control"
                        value="{{ old('name12', $category->name12 ?? '') }}">
                </div>

                <div class="mb-3">
                    <label for="slug">Գին</label>
                    <input type="text" name="slug" class="form-control"
                        value="{{ old('slug', $category->slug ?? '') }}">
                </div>

                <div class="mb-3">
                    <label for="slug1">Տարադրամ</label>
                    <input type="text" name="slug1" class="form-control"
                        value="{{ old('slug1', $category->slug1 ?? '') }}">
                </div>

                <div class="mb-3">
                    <label for="description">Տեսարան</label>
                    <textarea name="description"
                        class="form-control">{{ old('description', $category->description ?? '') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control">
                    @if (isset($category) && $category->image)
                        <img src="{{ asset('uploads/category/' . $category->image) }}" width="100" height="100"
                            alt="Category Image">
                    @else
                        <p>No image uploaded</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="meta_title">Տարածաշրջան</label>
                    <input type="text" name="meta_title" class="form-control"
                        value="{{ old('meta_title', $category->meta_title ?? '') }}">
                </div>

                <div class="mb-3">
                    <label for="meta_description">Կենցաղային տեխնիկա</label>
                    <textarea rows="3" name="meta_description"
                        class="form-control">{{ old('meta_description', $category->meta_description ?? '') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="meta_keywords">Գործակալ</label>
                    <textarea rows="3" name="meta_keywords"
                        class="form-control">{{ old('meta_keywords', $category->meta_keywords ?? '') }}</textarea>
                </div>

                <!-- <button type="submit" class="btn btn-primary">{{ isset($category) ? 'Update' : 'Submit' }}</button> -->

                <!-- <div class="mb-3">
                    <label for="meta_title">Կոդ ՝</label>
                    <input type="text" name="meta_title" class="form-control" value="{{ $category->meta_title }}">
                </div> -->
                <!-- <div class="mb-3">
                    <label for="meta_description">Շինության տիպը`</label>
                    <textarea rows="3" name="meta_description" class="form-control">{{ $category->meta_description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="meta_keywords">Տեսակը`</label>
                    <textarea rows="3" name="meta_keywords" class="form-control">{{ $category->meta_keywords }}</textarea>
                </div> -->
                @php
                    $decodedImages = json_decode($category->image1, true);
                    
                @endphp
                <div class="mb-3">
                    <label>Existing Images</label><br>
                    @if($category)
                   
                    @if (!empty($category->image1) && json_decode($category->image1, true))
                        @foreach (json_decode($category->image1, true) as $image)
                            @if (Storage::disk('public')->exists('uploads/category/' . $image))
                                <img src="{{ asset('storage/uploads/category/' . $image) }}" alt="Category Image"
                                    style="max-width: 300px; margin-bottom: 10px;">
                                <br>
                            @else
                                <p>Image not found: {{ $image }}</p>
                            @endif
                        @endforeach
                    @else
                        <p>No images uploaded.</p>
                    @endif
                    @endif
                </div>


                <div class="mb-3">
                    <label for="image1">Additional Images (multiple)</label>
                    <input type="file" name="image1[]" class="form-control" id="image1" multiple>
                    @error('image1.*')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                <div class="mb-3">
                    <label for="des">Նկարագիր</label>
                    <textarea rows="3" name="des" class="form-control">{{ $category->des }}</textarea>
                </div>
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