
@extends('layouts.app') 
 
@section('content') 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> 
<style> 
.lSAction>a{
  z-index: 1 !important;
}
  .demo { 
      width: 850px;  
      margin: 0 auto;  
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
    } 
    @media screen and (max-width:1000px) { 
      .demo{ 
        width: 100%; 
      } 
    } 
    .modal { 
      display: none; 
      position: fixed; 
      z-index: 1; 
      padding-top: 60px; 
      left: 0; 
      top: 0; 
      width: 100%; 
      height: 100%; 
      overflow: auto; 
      background-color: rgb(0,0,0); 
      background-color: rgba(0,0,0,0.9); 
    } 
    .modal-content { 
      margin: auto; 
      display: block; 
      width: 80%; 
    } 
    .modal-content, #caption {   
      animation-name: zoom; 
      animation-duration: 0.6s; 
    } 
    @keyframes zoom { 
      from {transform:scale(0)}  
      to {transform:scale(1)} 
    } 
    .close { 
      position: absolute; 
      top: 15px; 
      right: 35px; 
      color: #f1f1f1; 
      font-size: 40px; 
      font-weight: bold; 
      transition: 0.3s; 
    } 
    .close:hover, 
    .close:focus { 
      color: #bbb; 
      text-decoration: none; 
      cursor: pointer; 
    } 
    .prev, .next { 
      cursor: pointer; 
      position: absolute; 
      top: 50%; 
      width: auto; 
      padding: 16px; 
      margin-top: -22px; 
      color: white; 
      font-weight: bold; 
      font-size: 20px; 
      transition: 0.6s ease; 
      border-radius: 0 3px 3px 0; 
      user-select: none; 
    } 
    .next { 
      right: 0; 
      border-radius: 3px 0 0 3px; 
    } 
    .prev { 
      left: 0; 
      border-radius: 3px 0 0 3px; 
    } 
    .prev:hover, .next:hover { 
      background-color: rgba(0,0,0,0.8); 
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

Armen Barkhudaryan, [01.07.2024 16:49]
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
    <div class=" col-lg-9 col-md-12"> 
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
    <div id="myModal" class="modal"> 
      <span class="close">&times;</span> 
      <img class="modal-content" id="img01"> 
      <div id="caption"></div> 
      <a class="prev">&#10094;</a> 
      <a class="next">&#10095;</a> 
    </div> 
@else 
    <div class="col-lg-9"> 
        <p>No images available.</p> 
    </div> 
@endif 
   
    </div> 
  </div> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script> 
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> 
  <script> 
  $('#lightSlider').lightSlider({ 
    gallery: true, 
    item: 1, 
    loop: true, 
    slideMargin: 0, 
    thumbItem: 9, 
    auto: true, 
    pause: 4000,  
    pauseOnHover: true 
}); 
 
var modal = document.getElementById("myModal"); 
var modalImg = document.getElementById("img01"); 
var captionText = document.getElementById("caption"); 
 
document.querySelectorAll('.contnet_image').forEach(img => { 
  img.onclick = function(){ 
    modal.style.display = "block"; 
    modalImg.src = this.src; 
    captionText.innerHTML = this.alt; 
  } 
}); 
 
var span = document.getElementsByClassName("close")[0]; 
span.onclick = function() {  
  modal.style.display = "none"; 
} 
 
var currentSlideIndex = 0; 
var slides = document.querySelectorAll('.contnet_image'); 
 
function showSlide(index) { 
  if (index >= slides.length) { currentSlideIndex = 0 } 
  if (index < 0) { currentSlideIndex = slides.length - 1 } 
  modalImg.src = slides[currentSlideIndex].src; 
} 
 
document.querySelector('.prev').onclick = function() { 
  currentSlideIndex--; 
  showSlide(currentSlideIndex); 
} 
 
document.querySelector('.next').onclick = function() { 
  currentSlideIndex++; 
  showSlide(currentSlideIndex); 
} 
 
document.onkeydown = function(e) { 
  switch (e.keyCode) { 
    case 37: 
      currentSlideIndex--; 
      showSlide(currentSlideIndex); 
      break; 
    case 39: 
      currentSlideIndex++; 
      showSlide(currentSlideIndex); 
      break; 
    case 27: 
      modal.style.display = "none"; 
      break; 
  } 
} 
</script> 
 
@endsection