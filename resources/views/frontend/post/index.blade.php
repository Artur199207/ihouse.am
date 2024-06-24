@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
  .content_swiper{
    position: relative;
    height: 100%;
  }

    .swiper {
      width: 100%;
      height: 100%;
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
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
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
          <h4>Advertisements</h4>
          <img src="{{ asset('assets/images/1.jpg') }}" class="img-responsive" alt="advertisement">

        </div>

      </div>

      <!-- <div class="col-lg-9 col-sm-8 ">

        <h2>2 room and 1 kitchen apartment</h2>
        <div class="row">
          <div class="col-lg-8">
            <div class="property-images">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
             
                <ol class="carousel-indicators hidden-xs">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                </ol>
                <div class="carousel-inner">
              
                  <div class="item active">
                    <img src="{{ asset('assets/images/1.jpg') }}" class="properties" alt="properties" />
                  </div>
                
                  <div class="item">
                    <img src="{{ asset('assets/images/2.jpg') }}" class="properties" alt="properties" />

                  </div>
                  <div class="item">
                    <img src="{{ asset('assets/images/3.jpg') }}" class="properties" alt="properties" />

                  </div>
                  <div class="item">
                    <img src="{{ asset('assets/images/4.jpg') }}" class="properties" alt="properties" />

                  </div>
                 
                  <div class="item">
                    <img src="{{ asset('assets/images/3.jpg') }}" class="properties" alt="properties" />
                  </div>
               
                  <div class="item ">
                    <img src="{{ asset('assets/images/4.jpg') }}" class="properties" alt="properties" />

                  </div>
                 
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span
                    class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><span
                    class="glyphicon glyphicon-chevron-right"></span></a>
              </div>


            </div>




            <div class="spacer">
              <h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
              <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely
                deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional
                solutions.</p>
              <p>Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate
                one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service
                for state of the art customer service</p>

            </div>
            <div>
              <h4><span class="glyphicon glyphicon-map-marker"></span> Location</h4>
              <div class="well"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0"
                  marginwidth="0"
                  src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Pulchowk,+Patan,+Central+Region,+Nepal&amp;aq=0&amp;oq=pulch&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Pulchowk,+Patan+Dhoka,+Patan,+Bagmati,+Central+Region,+Nepal&amp;ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed"></iframe>
              </div>
            </div>

          </div>
          <div class="col-lg-4">
            <div class="col-lg-12  col-sm-6">
              <div class="property-info">
                <p class="price">$ 200,000,000</p>
                <p class="area"><span class="glyphicon glyphicon-map-marker"></span> 344 Villa, Syndey, Australia</p>

                <div class="profile">
                  <span class="glyphicon glyphicon-user"></span> Agent Details
                  <p>John Parker<br>009 229 2929</p>
                </div>
              </div>

              <h6><span class="glyphicon glyphicon-home"></span> Availabilty</h6>
              <div class="listing-detail">
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span
                  data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span
                  data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span
                  data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span>
              </div>

            </div>
            <div class="col-lg-12 col-sm-6 ">

            </div>
          </div>
        </div>
      </div> -->
      <div class="content_swiper">
      <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  <div thumbsSlider="" class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
      </div>
    </div>
  </div>
      </div>
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