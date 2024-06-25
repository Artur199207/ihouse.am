@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
  .demo {
      width: 850px; /* Adjusted width */
      margin: 0 auto; /* Center align the container */
    }
    .header>a{
      display:inline-block;
    }
    .contnet_image {
      display: block;
      height: auto;
      width: 100%;
    }
    @media screen and (max-width:1210px) {
      .hidden-xs{
        display:none !important;
      }
      .demo{

      }
    }
</style>
<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="{{ url('/') }}">Home</a> / Buy</span>
    <h2>Buy</h2>
  </div>
</div>
<div class="container">
  <div class="properties-listing spacer">

    <div class="row">
      <div class="col-lg-3 col-sm-4 hidden-xs">

        <div class="hot-properties hidden-xs">
          <h4>Hot Properties</h4>
          <div class="row">
            <div class="col-lg-4 col-sm-5"><img src="{{ asset('assets/images/1.jpg') }}"
                class="img-responsive img-circle" alt="properties">
            </div>
            <div class="col-lg-8 col-sm-7">
              <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
              <p class="price">$300,000</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-sm-5"><img src="{{ asset('assets/images/2.jpg') }}"
                class="img-responsive img-circle" alt="properties" /></div>
            <div class="col-lg-8 col-sm-7">
              <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
              <p class="price">$300,000</p>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-sm-5"><img src="{{ asset('assets/images/3.jpg') }}"
                class="img-responsive img-circle" alt="properties" /></div>
            <div class="col-lg-8 col-sm-7">
              <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
              <p class="price">$300,000</p>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-sm-5"><img src="{{ asset('assets/images/4.jpg') }}"
                class="img-responsive img-circle" alt="properties" /></div>
            <div class="col-lg-8 col-sm-7">
              <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
              <p class="price">$300,000</p>
            </div>
          </div>

        </div>



        <div class="advertisement">
          <h4>{{ $category->meta_keywords }}</h4>
          <img src="{{ asset('uploads/category/' . $category->image) }}" alt="Category Image"
            style="width:200px;height:130px;">
        </div>
      </div>



      @if (!empty($category->image1))
    @php
        $images = json_decode($category->image1, true); 
    @endphp

    <div class="col-lg-9 col-sm-4">
        <div class="demo">
            <ul id="lightSlider">
                @foreach ($images as $image)
                    <li data-thumb="{{ asset($image) }}">
                        <img src="{{ asset($image) }}" alt="Category Image" class='contnet_image'>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

      
@else
    <div class="col-lg-9">
        <p>No images available.</p>
    </div>
@endif

     






    </div>
  </div>
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <img id="modal-img" src="" />
      <div class="content__btn">
        <button id="prevBtn">Previous</button>
        <button id="nextBtn">Next</button>
      </div>
    </div>


  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    $('#lightSlider').lightSlider({
    gallery: true,
    item: 1,
    loop:true,
    slideMargin: 0,
    thumbItem: 9
});
  </script>

  @endsection