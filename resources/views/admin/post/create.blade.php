@extends('layouts.master')

@section('title', 'Ihouse')

@section('content')
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>Ավելացնել կատեգորիան</h4>
            <a href="{{ url('admin/add-posts') }}" class="btn btn-primary float-end">Ավելացնել կատեգորիան</a>
        </div>
        <div class="card-body">
        @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

           <form action="{{url('admin/add-posts')}}" method='POST'>
            @csrf
                <div class="mb-3">
                    <label for="building">Շինության տիպ</label>
                    <input type="text" name='building' class='form-control'>
                </div>
                <div class="mb-3">
                    <label for="condition">Վիճակ</label>
                    <input type="text" name='condition' class='form-control'>
                </div>
                <div class="mb-3">
                    <label for="types">Տեսակ</label>
                    <input type="text" name='types' class='form-control'>
                </div>
                <div class="mb-3">
                    <label for="taxes">Հարկերի քանակ</label>
                    <input type="text" name='taxes' class='form-control'>
                </div>
                <div class="mb-3">
                    <label for="living">Սենյակների քանակ </label>
                    <input type="text" name='living' class='form-control'>
                </div>
                <div class="mb-3">
                    <label for="cars">Ավտոտնակ </label>
                    <input type="text" name='cars' class='form-control'>
                </div>
                <div class="mb-3">
                    <label for="bathrooms">Սանհանգույցի քանակ </label>
                    <input type="text" name='bathrooms' class='form-control'>
                </div>
                <div class="mb-3">
                    <label for="ceiling">Առաստաղի բարձրություն </label>
                    <input type="text" name='ceiling' class='form-control'>
                </div>
                <div class="mb-3">
                    <label for="old">Ընդհանուր մակերես</label>
                    <input type="text" name='old' class='form-control'>
                </div>
                <div class="mb-3">
                    <label for="land">Հողատարածքի մակերես</label>
                    <input type="text" name='land' class='form-control'>
                </div>
                <div class="mb-3">
                    <label for="repair">Վերանորոգում</label>
                    <input type="text" name='repair' class='form-control'>
                </div>
                <div class="mb-3">
                    <label for="mony">Գին</label>
                    <input type="text" name='mony' class='form-control'>
                </div>
                <div class="mb-3">
                    <label for="change">Տարադրամ</label>
                    <input type="text" name='change' class='form-control'>
                </div>
                <div class="mb-3">
                    <label for="amenities:">Հարմարություններ</label>
                    <input type="text" name='amenities' class='form-control'>
                </div>
                <div class="mb-3">
                    <label for="communications">Կոմունիկացիաներ</label>
                    <input type="text" name='communications' class='form-control'>
                </div>
                <div class="mb-3">
                    <label for="region">Տարածաշրջան</label>
                    <input type="text" name='region' class='form-control'>
                </div>
                <div class="mb-3">
                    <label for="appliances">Կենցաղային տեխնիկա</label>
                    <input type="text" name='appliances' class='form-control'>
                </div>
                <div class="mb-3">
                    <label for="agent">Գործակալ</label>
                    <input type="text" name='agent' class='form-control'>
                </div>
                <div class="mb-3">
                    <label for="desi">Նկարագիր</label>
                    <textarea rows="3" name="desi" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="image">գլխավոր նկար</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="image2">Նկարների ցանկ</label>
                    <input type="file" name="image2" class="form-control">
                </div>
                <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Պահպանել կատեգորիան</button>
                    </div>
           </form>
        </div>
    </div>
</div>
@endsection
