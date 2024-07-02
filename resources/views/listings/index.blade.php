<!-- resources/views/listings/index.blade.php -->

@extends('layouts.app') {{-- Assuming you have a layout file --}}

@section('content')
<style>
  .d-flex {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    gap: 50px;
    justify-content: center;
}
@media screen and (max-width:992px) {
  .item{
    max-width:300px;
    width: 100%;
  }
}
</style>
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="{{ url('/') }}">Home</a> / Buy, Sale & Rent</span>
    <h2>Buy, Sale & Rent</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">

  <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
    <input type="text" class="form-control" placeholder="Search of Properties">
    <div class="row">
            <div class="col-lg-5">
              <select class="form-control">
                <option>Buy</option>
                <option>Rent</option>
                <option>Sale</option>
              </select>
            </div>
            <div class="col-lg-7">
              <select class="form-control">
                <option>Price</option>
                <option>$150,000 - $200,000</option>
                <option>$200,000 - $250,000</option>
                <option>$250,000 - $300,000</option>
                <option>$300,000 - above</option>
              </select>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-12">
              <select class="form-control">
                <option>Property Type</option>
                <option>Apartment</option>
                <option>Building</option>
                <option>Office Space</option>
              </select>
              </div>
          </div>
          <button class="btn btn-primary">Find Now</button>

  </div>


</div>

<div class="col-lg-9 col-sm-8 ">
  <div class="d-flex col-lg-12 ">
  @php
    $categories = App\Models\Category::get();
  @endphp
    @foreach ($categories as $category)
        <div class="item">
            <div class="properties">
                <div class="image-holder">
                    <img src="{{ asset('uploads/category/' . $category->image) }}" alt="Category Image" style="width:200px;height:130px;">
                </div>
                <h4>
                    <a href="{{ url('tutorial/' . $category->slug) }}">{{ $category->slug }}</a>
                </h4>
                <p class="price">{{ $category->meta_title }}</p>
                <div class="listing-detail">
                    <p class="price">{{ $category->meta_description }}</p>
                </div>
                <a class="btn btn-primary" href="{{ url('tutorial/' . $category->slug) }}">View Details</a>
            </div>
        </div>
    @endforeach
    
  
</div>
</div>
</div>
</div>
@endsection