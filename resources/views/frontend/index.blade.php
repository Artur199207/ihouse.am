@extends('layouts.app')
@section('content')

<style>
  .content_flex {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
</style>



<div class="">


  <div id="slider" class="sl-slider-wrapper">

    <div class="sl-slider">

      <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25"
        data-slice1-scale="2" data-slice2-scale="2">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-1"></div>
          <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
          <blockquote>
            <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
            <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
            <cite>$ 20,000,000</cite>
          </blockquote>
        </div>
      </div>

      <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15"
        data-slice1-scale="1.5" data-slice2-scale="1.5">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-2"></div>
          <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
          <blockquote>
            <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
            <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
            <cite>$ 20,000,000</cite>
          </blockquote>
        </div>
      </div>

      <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3"
        data-slice1-scale="2" data-slice2-scale="1">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-3"></div>
          <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
          <blockquote>
            <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
            <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
            <cite>$ 20,000,000</cite>
          </blockquote>
        </div>
      </div>

      <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25"
        data-slice1-scale="2" data-slice2-scale="1">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-4"></div>
          <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
          <blockquote>
            <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
            <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
            <cite>$ 20,000,000</cite>
          </blockquote>
        </div>
      </div>

      <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10"
        data-slice1-scale="2" data-slice2-scale="1">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-5"></div>
          <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
          <blockquote>
            <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
            <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
            <cite>$ 20,000,000</cite>
          </blockquote>
        </div>
      </div>
    </div>



    <nav id="nav-dots" class="nav-dots">
      <span class="nav-dot-current"></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </nav>
  </div>
</div>
</div>



<div class="banner-search">
  <div class="container">
    <!-- banner -->
    <h3>Buy, Sale & Rent</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
          <input type="text" class="form-control" placeholder="Search of Properties">
          <div class="row">
            <div class="col-lg-3 col-sm-3 ">
              <select class="form-control">
                <option>Buy</option>
                <option>Rent</option>
                <option>Sale</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
              <select class="form-control">
                <option>Price</option>
                <option>$150,000 - $200,000</option>
                <option>$200,000 - $250,000</option>
                <option>$250,000 - $300,000</option>
                <option>$300,000 - above</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
              <select class="form-control">
                <option>Property</option>
                <option>Apartment</option>
                <option>Building</option>
                <option>Office Space</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
              <button class="btn btn-success" onclick="window.location.href='buysalerent.php'">Find Now</button>
            </div>
          </div>


        </div>
        <!-- <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
          <p>Join now and get updated with all the properties deals.</p>
          <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Login</button>        
        </div>  -->
      </div>
    </div>
  </div>
</div>
<!-- banner -->
<div class="container">
  <div class="properties-listing spacer">
 
<div class="content_flex">
<h2>Featured Properties</h2>
    @php
    $categories = App\Models\Category::get();
  @endphp
    <a href="{{ route('listings.index') }}">View Listings</a>
</div>
  

 
    <div id="owl-example" class="owl-carousel">
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
  <div class="spacer">
    <div class="row">
      <div class="col-lg-6 col-sm-9 recent-view">
        <h3>About Us</h3>
        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections
          1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original
          form, accompanied by English versions from the 1914 translation by H. Rackham.<br><a href="about.php">Learn
            More</a></p>

      </div>
      
    </div>
  </div>
</div>



@endsection