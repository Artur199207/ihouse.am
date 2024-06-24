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
                    <label for="name">Շինության տիպ</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name1">Նորակառույց</label>
                    <input type="text" name="name1" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name2">Վերելակ</label>
                    <input type="text" name="name2" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name3">Հարկերի քանակ</label>
                    <input type="number" name="name3" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name4">Հարկը</label>
                    <input type="number" name="name4" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name5">Կայանատեղի</label>
                    <input type="text" name="name5" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name6">Սենյակների քանակ </label>
                    <input type="number" name="name6" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name7">Սանհանգույցի քանակ </label>
                    <input type="number" name="name7" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name8">Պատշգամբ</label>
                    <input type="text" name="name8" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name9">Առաստաղի բարձրություն </label>
                    <input type="text" name="name9" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name10">Կահույք </label>
                    <input type="text" name="name10" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name11">Ընդհանուր մակերես </label>
                    <input type="text" name="name11" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name12">Վերանորոգված </label>
                    <input type="text" name="name12" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="slug">Գին</label>
                    <input type="text" name="slug" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="slug1">Տարադրամ</label>
                    <input type="text" name="slug1" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="description">Տեսարան</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="meta_title">Տարածաշրջան</label>
                    <input type="text" name="meta_title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="meta_description">Կենցաղային տեխնիկա</label>
                    <textarea rows="3" name="meta_description" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="meta_keywords">Գործակալ</label>
                    <textarea rows="3" name="meta_keywords" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="image1">Նոր նկարներ (մուլտիմեդիա)</label>
                    <input type="file" name="image1[]" class="form-control" id="image1" aria-describedby="emailHelp"
                        multiple>
                    @error('image1')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div id="image-preview" class="mt-3"></div>

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
<script>
    document.getElementById('image1').addEventListener('change', function (event) {
        var previewContainer = document.getElementById('image-preview');
        previewContainer.innerHTML = ''; // Clear previous previews

        var files = event.target.files;
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var reader = new FileReader();

            reader.onload = function (e) {
                var imgElement = document.createElement('img');
                imgElement.className = 'img-thumbnail mr-2 mb-2';
                imgElement.style.maxWidth = '150px';
                imgElement.style.maxHeight = '150px';
                imgElement.src = e.target.result;
                previewContainer.appendChild(imgElement);
            }

            reader.readAsDataURL(file);
        }
    });
</script>
@endsection