@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
  .content_swiper {
    position: relative;
    height: 100%;
  }

  .swiper {
    width: 100%;
    height: 100%;
  }

  .swiper-container {
    position: relative;
    overflow: hidden;
    width: 100%;
    height: 100%;
  }

  .swiper-wrapper {
    position: relative;
    width: 100%;
    height: 100%;
    z-index: 1;
    display: flex;
    transition-property: transform;
    box-sizing: content-box;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .swiper-slide img {
    width: 100%;
    height: auto;
    max-height: 400px;
    object-fit: cover;/
  }



  .swiper {
    width: 48%;
    height: 300px;
    margin-left: auto;
    margin-right: auto;
  }

  .swiper-slide {
    background-size: cover;
    background-position: center;
  }

  .mySwiper2 {
    height: 80%;
    width: 48%;
  }

  .mySwiper {
    height: 20%;
    box-sizing: border-box;
    padding: 10px 0;
  }

  .mySwiper .swiper-slide {
    width: 25%;
    height: 100%;
    opacity: 0.4;
  }

  .mySwiper .swiper-slide-thumb-active {
    opacity: 1;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .modal {
    display: none;
    position: fixed;
    z-index: 9999;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    overflow: auto;
    justify-content: center;
    align-items: center;
  }

  .modal-content {
    position: relative;
    background-color: #fefefe;
    padding: 20px;
    border: 1px solid #888;
    overflow: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 55%;
  }

  .content__btn {
    width: 100%;
    position: absolute;
    display: flex;
    justify-content: space-between;
    padding-inline: 10px;
  }

  .modal-content img {
    max-width: 57%;
    max-height: 93%;
    object-fit: contain;
  }

  .close {
    position: absolute;
    top: 15px;
    right: 25px;
    font-size: 30px;
    font-weight: bold;
    color: #aaa;
    cursor: pointer;
    z-index: 1;
  }

  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }

  @media screen and (max-width:1200px) {
    .modal-content {
      width: 80%;
    }

    .swiper {
      width: 80%;
    }

  }

  @media screen and (max-width:768px) {
    .mySwiper2 {
      height: 80%;
      width: 80%;
    }
  }


  @media screen and (max-width:678px) {
    .modal-content {
      width: 80%;
      height: 80%;
    }

    .modal-content img {
      max-width: 100%;
      max-height: 100%;
      object-fit: contain;
    }

    .content__btn {
      width: 100%;
      position: absolute;
      display: flex;
      justify-content: space-between;
      padding-inline: 10px;
      height: 100%;
      align-items: flex-end;
      margin-bottom: 20px;
    }
  }

  @media screen and (max-width:500px) {
    .modal-content {
      width: 80%;
      height: 45%;
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

        <div class="content_swiper col-lg-9 col-sm-8">
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
          <div class="swiper-wrapper">
          @foreach ($images as $image)
        <div class="swiper-slide">
        <img src="{{ asset($image) }}" alt="Category Image">
        </div>
      @endforeach
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div thumbsSlider="" class="swiper mySwiper">
          <div class="swiper-wrapper">
          @foreach ($images as $image)
        <div class="swiper-slide">
        <img src="{{ asset($image) }}" alt="Category Image">
        </div>
      @endforeach
          </div>
        </div>
        </div>

    @else
      <p>No images available.</p>
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

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });

    var swiper2 = new Swiper(".mySwiper2", {
      loop: true,
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });

    // Modal functionality
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("modal-img");
    var slides = document.querySelectorAll(".mySwiper2 .swiper-slide img");
    var currentSlideIndex = 0;

    // Function to show modal with specific slide
    function showModal(index) {
      modal.style.display = "flex";
      modalImg.src = slides[index].src;
      currentSlideIndex = index;
    }

    // Click event listeners for each slide in main swiper
    slides.forEach(function (slide, index) {
      slide.addEventListener("click", function () {
        showModal(index);
      });
    });

    // Close modal functionality
    var closeModal = document.getElementsByClassName("close")[0];
    closeModal.onclick = function () {
      modal.style.display = "none";
    };

    // Close modal when clicking outside of the modal content
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    };

    // Next and Previous buttons
    var nextButton = document.getElementById("nextBtn");
    var prevButton = document.getElementById("prevBtn");

    nextButton.addEventListener("click", function () {
      currentSlideIndex = (currentSlideIndex + 1) % slides.length;
      showModal(currentSlideIndex);
    });

    prevButton.addEventListener("click", function () {
      currentSlideIndex = (currentSlideIndex - 1 + slides.length) % slides.length;
      showModal(currentSlideIndex);
    });

    // Keyboard navigation
    document.addEventListener("keydown", function (event) {
      if (modal.style.display === "flex") {
        if (event.key === "ArrowRight" || event.key === "ArrowDown") {
          currentSlideIndex = (currentSlideIndex + 1) % slides.length;
          showModal(currentSlideIndex);
        } else if (event.key === "ArrowLeft" || event.key === "ArrowUp") {
          currentSlideIndex = (currentSlideIndex - 1 + slides.length) % slides.length;
          showModal(currentSlideIndex);
        } else if (event.key === "Escape") {
          modal.style.display = "none";
        }
      }
    });
  </script>

  @endsection