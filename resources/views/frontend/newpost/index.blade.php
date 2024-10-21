@extends('layouts.app')

@section('content')

<style>

#contentImageOne {
    height: 68px !important;
    width: 150px !important;
}
  .pandapp-slider {
    position: relative;
    width: 100%;
    overflow: hidden;
  }

  .pandapp-wrapper {
    display: flex;
    transition: transform 0.5s ease;
  }

  .pandapp-slide {
    flex: 0 0 100%;
    box-sizing: border-box;
    text-align: center;
    background-color: #f0f0f0;
  }

  .pandapp-slide img {
    width: 100%;
    height: auto;
    object-fit: cover;
    height: 550px;
  }

  .pandapp-pagination {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
  }

  .pandapp-pagination-bullet {
    width: 10px;
    height: 10px;
    background-color: #aaa;
    border-radius: 50%;
    margin: 0 5px;
    cursor: pointer;
  }

  .pandapp-pagination-bullet-active {
    background-color: #333;
  }

  .pandapp-button-prev,
  .pandapp-button-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 40px;
    height: 40px;
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;
    font-size: 24px;
    text-align: center;
    line-height: 40px;
    cursor: pointer;
    user-select: none;
  }

  .pandapp-button-prev {
    left: 10px;
  }

  .pandapp-button-next {
    right: 10px;
  }

  /* Modal */
  .modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.8);
  }

  .modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 550px;
    height: 550px;
    top: 87px;
  }

  .modal-prev,
  .modal-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;
    font-size: 24px;
    border: none;
    cursor: pointer;
    padding: 10px;
  }

  .modal-prev {
    left: 10px;
  }

  .modal-next {
    right: 10px;
  }

  .modal-close {
    position: absolute;
    top: 10px;
    right: 25px;
    color: #fff;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
  }
 
  @media screen and (max-width:570px){
      .pandapp-slide img{
          height:350px;
      }
      .modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 550px;
    height: 350px;
    top: 142px;
}
  }
   .listing_hidden {
            display: none ;
        }
@media screen and (max-width: 678px) {
    .d-listingNone {
        display: none;
    }

    .listing_hidden {
        display: flex;
        margin-top: 25px;
        position: fixed;
        bottom: 0;
        z-index: 10;
        width: 100%;
    }

    .listing_row {
        display: flex;
        width: 100%;
        justify-content: space-between;
        padding: 10px;
        border-bottom: 1px solid #ddd;
        margin-bottom: 0;
    }

    .content-left {
        flex: 1;
    }

    .content-rigth {
    flex: 4;
    width: 100%;
    display: flex;
    justify-content: flex-end;
}
ul.dropdown-menu.show {
    width: 400px !important;
    min-width: unset !important;
    left: 0px !important;
            padding-inline: 20px;
}
ul.dropdown-menu.show p {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.btn-group.dropup,p.btn{
                   width: 165px;
        height: 44px;

}
p.btn{
    display: flex;
        justify-content: center;
        align-items: center;
        font-size:18px;
}
button.btn.btn-secondary.dropdown-toggle {
    font-size: 18px;
}

    .call-text {
        font-weight: bold;
        margin-bottom: 10px;
        font-size: 16px;
        cursor: pointer;
    }

    .content_number {
        position: absolute;
        bottom: 75px; /* Adjusted from 100% to 75px to align properly */
        left: 0;
        width: 100%;
        background-color: #fff;
        border: 1px solid #ddd;
        padding: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0s ease 0.3s; /* Smooth transition */
    }

    .show-content {
        opacity: 1;
        visibility: visible;
        transition: opacity 0.3s ease, visibility 0s ease 0s;
    }

    .btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    .content_number p {
        margin: 0;
        font-size: 16px;
        width: 100%;
        display: flex;
        justify-content: center;
        gap: 25px;
    }

    .content_number a {
        color: #007bff;
        text-decoration: none;
    }

    .content_number a:hover {
        text-decoration: underline;
    }
}



</style>
   

    

    

    <main class="main__content_wrapper">
        
         <!-- Hero section -->
         <section class="listing__hero--section">
    <!-- Main Swiper Slider -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
          <div id="mySlider" class="pandapp-slider">
            <div class="pandapp-wrapper">
              @if (!empty($newcategory->image1))
                @php
            $images = json_decode($newcategory->image1, true);
        @endphp
                @foreach ($images as $index => $image)
          <div class="pandapp-slide">
          <img src="{{ asset($image) }}" alt="Category Image" class="contnet_image"  data-index="{{ $index }}">
          </div>
        @endforeach
        @else
        <div class="pandapp-slide">
        <p>No images available.</p>
        </div>
      @endif
            </div>
            <!-- Navigation Buttons -->
            <button class="pandapp-button-prev">‹</button>
            <button class="pandapp-button-next">›</button>
            <!-- Pagination -->
            <div class="pandapp-pagination"></div>
          </div>

          <!-- Modal -->
          <div id="imageModal" class="modal">
            <span class="modal-close">&times;</span>
            <button class="modal-prev">‹</button>
            <img class="modal-content" id="modalImage">
            <button class="modal-next">›</button>
            <div id="caption"></div>
          </div>
        </div>
           <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 d-listingNone">
          <div class="listing__widget">
            <div class="widget__admin--profile text-center mb-30">
            <div class="admin__profile--thumbnail">
                <img src="{{asset('public/assets/image/logoihouse.svg')}}" alt="img">
              </div>
              <div class="admin__profile--content">
                <h3 class="admin__profile--name">  {{ $newcategory->name20 }}</h3>
                
              <p>Հեռ․՝
              <a  href="tel:{{ $newcategory->name21 }}">{{ $newcategory->name21 }}</a>
              </p>
                <p class="admin__profile--desc">ihouse <br />անշարժ գույքի գործակալության գործակալ</p>
                <a class="admin__profile--email" href="mailto:info@ihouse.am">info@ihouse.am</a>

                <ul class=" profile__social d-flex align-items-center justify-content-center">
                
                  <li class="profile__social--list">
                    <a class="profile__social--icon" target="_blank" href="tel:{{ $newcategory->name22 }}">
                    
<svg version="1.1" baseProfile="basic" id="&#x421;&#x43B;&#x43E;&#x439;_1"
	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64"
	 xml:space="preserve">
<ellipse style="opacity:0.3;" cx="32" cy="61" rx="19" ry="3"/>
<path style="fill:#9C34C2;" d="M21.405,56.751c-0.503,0.532-1.398,0.178-1.399-0.555c-0.004-1.798-0.003-3.958,0.013-5.336
	c0.017-1.447-0.94-2.015-1.653-2.35c-0.482-0.227-1.039-0.428-1.63-0.64c-0.834-0.3-1.696-0.61-2.269-0.976
	c-2.535-1.617-4.253-4.121-5.257-7.657c-1.103-3.891-1.45-8.11-1.062-12.899c0.171-2.108,0.469-4.328,0.909-6.784
	c0.825-4.593,3.433-7.854,7.975-9.97c2.408-1.122,5.074-1.821,8.642-2.264c1.587-0.197,3.238-0.296,4.909-0.296
	c2.389,0,4.841,0.195,7.493,0.596c3.312,0.501,6.799,1.259,9.862,3.399c2.309,1.614,3.887,3.903,4.687,6.807
	c1.301,4.713,1.673,9.949,1.138,16.003c-0.294,3.337-1.075,6.272-2.386,8.971c-1.163,2.391-3.037,4.107-5.73,5.248
	c-3.103,1.313-6.502,1.597-9.444,1.76c-2.538,0.14-5.171,0.288-7.597,0.288c-1.19,0.024-1.601,0.5-2.077,1.05l-0.229,0.26
	C25.245,52.578,23.08,54.979,21.405,56.751z"/>
<path style="fill:none;stroke:#FFFFFF;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" d="
	M12.502,20.171c0.627-3.485,2.479-5.772,6.009-7.416"/>
<g>
	<path style="opacity:0.15;" d="M53.991,28.85c-2.667-0.128-4.972,1.862-5.208,4.541c-0.239,2.717-0.861,5.08-1.901,7.222
		c-0.628,1.291-1.61,2.164-3.183,2.83c-2.364,1.001-5.25,1.233-7.77,1.372c-2.744,0.151-4.846,2.488-4.715,5.23
		c1.65-0.055,3.338-0.146,4.99-0.237c2.942-0.163,6.341-0.447,9.444-1.76c2.693-1.141,4.566-2.857,5.73-5.248
		c1.311-2.699,2.092-5.633,2.386-8.971C53.916,32.102,53.987,30.45,53.991,28.85z"/>
	<path style="opacity:0.3;fill:#FFFFFF;" d="M19.144,14.114c2.331-1.086,3.406-3.737,2.604-6.118
		c-1.752,0.403-3.282,0.918-4.716,1.586c-4.542,2.116-7.15,5.376-7.975,9.97c-0.441,2.456-0.739,4.675-0.909,6.784
		c-0.141,1.737-0.182,3.396-0.128,4.995c0.044,0.001,0.09,0.005,0.134,0.005c2.578,0,4.766-1.981,4.978-4.596
		c0.158-1.945,0.436-4.008,0.848-6.305C14.517,17.441,16.062,15.551,19.144,14.114z"/>
</g>
<path style="fill:#FFA1AC;" d="M16.944,21.454c0.056-2.548,2.009-3.981,3.983-4.415c0.754-0.167,1.421,0.099,1.982,0.634
	c1.549,1.478,2.772,3.191,3.695,5.114c0.405,0.843,0.223,1.589-0.465,2.216c-0.142,0.13-0.291,0.251-0.445,0.368
	c-1.567,1.18-1.799,2.071-0.963,3.846c1.424,3.021,3.784,5.048,6.839,6.306c0.806,0.332,1.562,0.168,2.179-0.485
	c0.082-0.087,0.176-0.171,0.237-0.272c1.205-2.009,2.951-1.81,4.563-0.664c1.06,0.753,2.089,1.547,3.137,2.315
	c1.596,1.172,1.582,2.274,0.611,3.86c-0.709,1.159-1.77,1.961-3.021,2.484c-0.913,0.382-1.846,0.301-2.745-0.081
	c-7.555-3.196-13.478-8.235-17.394-15.477c-0.807-1.492-1.369-3.116-2.012-4.692C16.993,22.188,17,21.808,16.944,21.454z"/>
<path style="fill:#FFA1AC;" d="M35.467,29.004c-0.549,0-0.994-0.444-0.994-0.994c0-1.843-1.5-3.343-3.343-3.343
	c-0.549,0-0.994-0.444-0.994-0.994c0-0.55,0.445-0.994,0.994-0.994c2.94,0,5.33,2.391,5.33,5.33
	C36.461,28.56,36.015,29.004,35.467,29.004z"/>
<path style="fill:#FFA1AC;" d="M39.624,28.907c-0.055,0-0.111-0.005-0.167-0.014c-0.544-0.092-0.912-0.608-0.819-1.152
	c0.059-0.353,0.089-0.716,0.089-1.08c0-3.573-2.907-6.48-6.48-6.48c-0.364,0-0.728,0.03-1.081,0.09
	c-0.545,0.085-1.061-0.276-1.152-0.82c-0.091-0.545,0.275-1.061,0.82-1.152c0.462-0.078,0.938-0.117,1.413-0.117
	c4.676,0,8.48,3.805,8.48,8.48c0,0.476-0.04,0.95-0.118,1.412C40.527,28.561,40.104,28.907,39.624,28.907z"/>
<path style="fill:#FFA1AC;" d="M43.71,28.999c-0.073,0-0.147-0.008-0.222-0.024c-0.539-0.122-0.876-0.657-0.755-1.196
	c0.16-0.706,0.241-1.433,0.241-2.16c0-5.354-4.356-9.71-9.71-9.71c-0.727,0-1.454,0.081-2.16,0.24
	c-0.54,0.119-1.074-0.217-1.196-0.756c-0.122-0.538,0.217-1.073,0.755-1.195c0.851-0.191,1.726-0.289,2.601-0.289
	c6.457,0,11.71,5.253,11.71,11.71c0,0.876-0.098,1.751-0.29,2.602C44.58,28.683,44.167,28.999,43.71,28.999z"/>
</svg>
                      <span class="visually-hidden">Viber</span>
                    </a>
                  </li>
                  <li class="profile__social--list">
                    <a class="profile__social--icon" target="_blank" href="tel:{{ $newcategory->name22 }}">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" width="48px" height="48px"><path style="fill:#FFFFFF;" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"/><g ><path style="fill:#FFFFFF;" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"/><path style="fill:#CFD8DC;" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"/></g><path style="fill:#40C351;" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"/><path  style="fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"/></svg>
                      <span class="visually-hidden">Whatsapp</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
         <div class="col-lg-12 listing_hidden">
                        <div class="listing_row">
                            <div class="content-left">
                                <a href="">
                                   <p class=" btn">Գրել</p>
                                </a>
                            </div>
                            <div class="content-rigth">
                                <div class="btn-group dropup">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Զանգել
  </button>
  <ul class="dropdown-menu">
  
                                <p>Հեռ․՝
                                    <a href="tel:{{ $newcategory->meta_title }}">{{ $newcategory->name21 }}</a>
                                </p>
                                <p>Հեռ․՝
                                    <a href="tel:{{ $newcategory->name18 }}">{{ $newcategory->name22 }}</a>
                                </p>
                                <p>Telegram: 
                                    <a href="https://t.me/{{ $newcategory->name22 }}" target="_blank"> {{ $newcategory->name22 }}</a>
                                </p>
                                <p>WhatsApp: 
    <a href="https://wa.me/{{ $newcategory->name22 }}" target="_blank">
    {{ $newcategory->name22 }}
    </a>
</p>
                                <p>Viber: 
                                    <a href="viber://chat?number={{ $newcategory->name22 }}" target="_blank"> {{ $newcategory->name22 }}</a>
                                </p>
                              
  </ul>
</div>
                            
                             
                            </div>
                        </div>
                    </div>
      </div>
    </div>
  </section>

        <!-- Hero section .\ -->

        <!-- Listing details section -->
        <section class="listing__details--section section--padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="listing__details--wrapper">
                            <div class="listing__details--content">
                                
                                <div class="listing__details--content__step">
                                    
                                    <div class="listing__details--price__id d-flex align-items-center">
                                        <div class="listing__details--price d-flex">
                                            <span class="listing__details--price__new">{{ $newcategory->name18}}</span>
                                         
                                        </div>
                                        <span class="listing__details--property__id">Կոդ : {{ $newcategory->name19}}</span>
                                    </div>
                                    <p class="listing__details--location__text"><svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z" fill="#FA4B4A"/>
                                        </svg>
                                         {{ $newcategory->name23}}</p>
                                </div>
                            </div>
                            <div class="listing__details--main__content">
                                <div class="listing__details--content__step mb-80">
                                       <div class="apartment__info listing__d--info">
                                        <div class="apartment__info--wrapper d-flex">
                                            <div class="apartment__info--list">
                                                <span class="apartment__info--icon"><img src="{{asset('public/assets/img/icon/bed-realistic.png')}}" alt="img"></span>
                                                <p>
                                                   
                                                    <span class="apartment__info--count">{{ $newcategory->name6}}</span>
                                                    <span class="apartment__info--title">Սենյակ</span>
                                                </p>
                                            </div>
                                            <div class="apartment__info--list">
                                                <span class="apartment__info--icon"><img src="{{asset('public/assets/img/icon/modern-car.png')}}" alt="img"></span>
                                                <p>
                                                    
                                                    <span class="apartment__info--count">{{ $newcategory->name11}}</span>
                                                    <span class="apartment__info--title"> Կայանատեղի </span>
                                                </p>
                                            </div>
                                            <div class="apartment__info--list">
                                                <span class="apartment__info--icon"><img src="{{asset('public/assets/img/icon/set-square.png')}}" alt="img"></span>
                                                <p>
                                                    <span class="apartment__info--count">{{ $newcategory->name3}}</span>
                                                    <span class="apartment__info--title">Ընդհանուր մակերես </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                        <h3 class="listing__details--content__title mb-40">Տան մասին</h3>
                                        <ul class="properties__details--info__wrapper d-flex">
                                            @if($newcategory->name1)
                                                <li class="properties__details--info__list d-flex justify-content-between">
                                                    <span class="properties__details--info__title">Շինության տիպ:</span>
                                                    <span class="properties__details--info__subtitle">{{ $newcategory->name1 }}</span>
                                                </li>
                                            @endif
                                        
                                            @if($newcategory->name2)
                                                <li class="properties__details--info__list d-flex justify-content-between">
                                                    <span class="properties__details--info__title">Տեսակ</span>
                                                    <span class="properties__details--info__subtitle">{{ $newcategory->name2 }}</span>
                                                </li>
                                            @endif
                                        
                                            @if($newcategory->name3)
                                                <li class="properties__details--info__list d-flex justify-content-between">
                                                    <span class="properties__details--info__title">Տան մակերես</span>
                                                    <span class="properties__details--info__subtitle">{{ $newcategory->name3 }}</span>
                                                </li>
                                            @endif
                                        
                                            @if($newcategory->name5)
                                                <li class="properties__details--info__list d-flex justify-content-between">
                                                    <span class="properties__details--info__title">Հարկերի քանակ</span>
                                                    <span class="properties__details--info__subtitle">{{ $newcategory->name5 }}</span>
                                                </li>
                                            @endif
                                        
                                            @if($newcategory->name7)
                                                <li class="properties__details--info__list d-flex justify-content-between">
                                                    <span class="properties__details--info__title">Սանհանգույցի քանակ</span>
                                                    <span class="properties__details--info__subtitle">{{ $newcategory->name7 }}</span>
                                                </li>
                                            @endif
                                        
                                            @if($newcategory->name9)
                                                <li class="properties__details--info__list d-flex justify-content-between">
                                                    <span class="properties__details--info__title">Կահույք</span>
                                                    <span class="properties__details--info__subtitle">{{ $newcategory->name9 }}</span>
                                                </li>
                                            @endif
                                        
                                            @if($newcategory->name10)
                                                <li class="properties__details--info__list d-flex justify-content-between">
                                                    <span class="properties__details--info__title">Ավտոտնակ</span>
                                                    <span class="properties__details--info__subtitle">{{ $newcategory->name10 }}</span>
                                                </li>
                                            @endif
                                        
                                            @if($newcategory->name12)
                                                <li class="properties__details--info__list d-flex justify-content-between">
                                                    <span class="properties__details--info__title">Առաստաղի բարձրություն</span>
                                                    <span class="properties__details--info__subtitle">{{ $newcategory->name12 }}</span>
                                                </li>
                                            @endif
                                        
                                            @if($newcategory->name13)
                                                <li class="properties__details--info__list d-flex justify-content-between">
                                                    <span class="properties__details--info__title">Վերանորոգում</span>
                                                    <span class="properties__details--info__subtitle">{{ $newcategory->name13 }}</span>
                                                </li>
                                            @endif
                                        
                                            @if($newcategory->name14)
                                                <li class="properties__details--info__list d-flex justify-content-between">
                                                    <span class="properties__details--info__title">Հարմարություններ</span>
                                                    <span class="properties__details--info__subtitle">{{ $newcategory->name14 }}</span>
                                                </li>
                                            @endif
                                        
                                            @if($newcategory->name15)
                                                <li class="properties__details--info__list d-flex justify-content-between">
                                                    <span class="properties__details--info__title">Կոմունիկացիաներ</span>
                                                    <span class="properties__details--info__subtitle">{{ $newcategory->name15 }}</span>
                                                </li>
                                            @endif
                                        
                                            @if($newcategory->name16)
                                                <li class="properties__details--info__list d-flex justify-content-between">
                                                    <span class="properties__details--info__title">Պարսպապատում</span>
                                                    <span class="properties__details--info__subtitle">{{ $newcategory->name16 }}</span>
                                                </li>
                                            @endif
                                        </ul>
                                        
                                        <h3 class="listing__details--content__title mb-40">Տեղեկություններ հողատարածքի մասին</h3>
                                    <ul class="properties__details--info__wrapper d-flex">
                                         <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Հողատարածքի մակերես</span>
                                            <span class="properties__details--info__subtitle">{{ $newcategory->name4}}</span>
                                        </li>
                                        
                                    </ul>
                                 
                                </div>
                                <div class="listing__details--content__step properties__info mb-80">
                                    <h3 class="listing__details--content__title">Նկարագիր:</h3>
                                    <p class="listing__details--content__desc">{{ $newcategory->name25}}</p>
                                </div>
                              
                                
                                <div class="listing__details--content__step mb-80">
                                    <div class="listing__details--location__header d-flex justify-content-between mb-40">
                                        <div class="listing__details--location__header--left">
                                            <h3 class="listing__details--content__title m-0">Տեղադիրք և Google Քարտեզ</h3>
                                        </div>
                                        <div class="location__google--maps">
                                            <details>
                                                <summary>Բացեք Google Քարտեզը</summary>
                                               <iframe 
    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAWM0XzxujknxaImMPST8aZLwrgLa973pE&q={{ urlencode($newcategory->name17) }}" 
    allowfullscreen 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
</iframe>

                                            </details>
                                        </div>
                                    </div>
                                   
                                </div>
                               
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="listing__widget">
                            
                            
                            <div class="widget__step mb-30">
                                <h2 class="widget__step--title">Ուղարկել հաղորդագրություն</h2>
                                <div class="widget__form">
                                    @if (session()->has('message'))
                                    <div class="alert alert-success">Ձեր Հաղորդագրությունը հաջողությամբ ուղարկվե է </div>
                                @endif
                                    <form action="{{ route('send.email') }}" method="post">
                                        @csrf 
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="widget__form--input mb-20"><label for="inputName">Անուն</label><input type="text"
                                                        name="name" class="widget__form--input__field" placeholder="Անուն">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }} </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6" style="display: none">
                                                <div class="widget__form--input mb-20"><label for="inputEmail">Email</label><input type="email"
                                                        name="email" class="widget__form--input__field" placeholder="Enter Email"
                                                        value="ihouse.agency2024@gmail.com">
                                                    @error('email')
                                                        <span class="text-danger">{{ $message }} </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget__form--input mb-20"><label for="inputSubject">էլ․հասցե</label><input type="text"
                                                name="subject" class="widget__form--input__field" placeholder="էլ․հասցե">
                                            @error('subject')
                                                <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="widget__form--input mb-20"><label for="inputMessage">Հաղորդագրություն</label>
                                            <textarea name="content" rows="5" class="widget__form--textarea__field" placeholder="Հաղորդագրություն"></textarea>
                                            @error('content')
                                                <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="text-center"><button class="widget__form--btn solid__btn" type="submit"><i
                                                    class="fa fa-paper-plane"></i>ՈՒղղարկել</button></div>
                                    </form>
                                </div>
                            </div>

                           
                            <div class="widget__step mb-30">
                             
                                <h2 class="widget__step--title"></h2>
                                <div class="widget__featured--properties">
                                    <div class="widget__featured--properties__thumbnail position-relative">
                                        <img src="{{ asset('public/uploads/category/' . $newcategory->image) }}" alt="img">
                                        <div class="featured__badge">
                                            <span class="badge__field">{{ $newcategory->name19}}</span>
                                        </div>
                                    </div>
                                    <div class="widget__featured--properties__content">
                                        <div class="widget__featured--properties__content--top d-flex align-items-center justify-content-between">
                                            <div class="widget__featured--properties__author">
                                               
                                            </div>
                                           
                                        </div>
                                        <p class="widget__featured--properties__desc"><svg width="11" height="17" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z" fill="#F23B3B"></path>
                                            </svg>
                                             {{ $newcategory->name18 }}</p>
                                       
                                        <div class="widget__featured--propertie__price d-flex">
                                            <span class="new__price">{{ $newcategory->name18}}</span>
                                            
                                        </div>    
                                    </div>
                                </div>
                                
                            </div>

                            <div class="widget__step">
    <h2 class="widget__step--title">Նմանատիպ հայտարարություններ</h2>
    <div class="widget__featured">
        <div class="widget__featured--items d-flex">
              @php
    $newcategory = App\Models\NewCategory::get();
@endphp
<div class="widget__featured">
      @foreach ($newcategory->take(3) as $category)
    <div class="widget__featured--items d-flex">
        <div class="widget__featured--thumb">
 <a class="featured__thumbnail--link" href="{{ url('tutorial/' . $category->slug) }}">
  <img src="{{ asset('public/uploads/category/' . $category->image) }}" alt="{{ $category->name }}" class="contnet_image" id='contentImageOne'>
                                                                    </a>
        </div>
        <div class="widget__featured--content">
            <h3 class="widget__featured--title">
                <a href="{{ url('tutorial/' . $category->slug) }}">{{ $category->name1 }}</a>
            </h3>
            <span class="widget__featured--price">{{ $category->slug }}</span>
        </div>
    </div>
    @endforeach
</div>




        </div>
    </div>
</div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Listing page section . -->

       <!-- Social share section -->
       <div class="social__media--area bg__style">
            <ul class="social__media--wrapper d-flex">
                <li class="social__media--list"><a class="social__media--link" target="_blank" href="https://www.facebook.com/"> <svg width="9" height="18" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.52148 5.07812L6.29297 7.3125H4.49023V13.8125H1.82422V7.3125H0.478516V5.07812H1.79883V3.73242C1.79883 3.27539 1.84115 2.86914 1.92578 2.51367C2.02734 2.14128 2.19661 1.83659 2.43359 1.59961C2.67057 1.3457 2.9668 1.15104 3.32227 1.01562C3.69466 0.880208 4.15169 0.8125 4.69336 0.8125H6.49609V3.04688H5.37891C5.15885 3.04688 4.98958 3.07227 4.87109 3.12305C4.7526 3.1569 4.65951 3.21615 4.5918 3.30078C4.54102 3.36849 4.50716 3.46159 4.49023 3.58008C4.47331 3.68164 4.46484 3.80859 4.46484 3.96094V5.07812H6.49609H6.52148Z" fill="currentColor" fill-opacity="1"/>
                    </svg>
                    <span>Facebook</span>
                    </a>
                </li>
                <li class="social__media--list"><a class="social__media--link" target="_blank"  href="https://twitter.com"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"></path>
                  </svg>
                  <span>Twitter</span>
                    </a>
                </li>
                <li class="social__media--list"><a class="social__media--link" target="_blank" href="https://www.instagram.com"> <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.27881 4.20703C10.4937 4.20703 12.3218 6.03516 12.3218 8.25C12.3218 10.5 10.4937 12.293 8.27881 12.293C6.02881 12.293 4.23584 10.5 4.23584 8.25C4.23584 6.03516 6.02881 4.20703 8.27881 4.20703ZM8.27881 10.8867C9.72021 10.8867 10.8804 9.72656 10.8804 8.25C10.8804 6.80859 9.72021 5.64844 8.27881 5.64844C6.80225 5.64844 5.64209 6.80859 5.64209 8.25C5.64209 9.72656 6.8374 10.8867 8.27881 10.8867ZM13.4116 4.06641C13.4116 4.59375 12.9897 5.01562 12.4624 5.01562C11.9351 5.01562 11.5132 4.59375 11.5132 4.06641C11.5132 3.53906 11.9351 3.11719 12.4624 3.11719C12.9897 3.11719 13.4116 3.53906 13.4116 4.06641ZM16.0835 5.01562C16.1538 6.31641 16.1538 10.2188 16.0835 11.5195C16.0132 12.7852 15.7319 13.875 14.8179 14.8242C13.9038 15.7383 12.7788 16.0195 11.5132 16.0898C10.2124 16.1602 6.31006 16.1602 5.00928 16.0898C3.74365 16.0195 2.65381 15.7383 1.70459 14.8242C0.790527 13.875 0.509277 12.7852 0.438965 11.5195C0.368652 10.2188 0.368652 6.31641 0.438965 5.01562C0.509277 3.75 0.790527 2.625 1.70459 1.71094C2.65381 0.796875 3.74365 0.515625 5.00928 0.445312C6.31006 0.375 10.2124 0.375 11.5132 0.445312C12.7788 0.515625 13.9038 0.796875 14.8179 1.71094C15.7319 2.625 16.0132 3.75 16.0835 5.01562ZM14.396 12.8906C14.8179 11.8711 14.7124 9.41016 14.7124 8.25C14.7124 7.125 14.8179 4.66406 14.396 3.60938C14.1147 2.94141 13.5874 2.37891 12.9194 2.13281C11.8647 1.71094 9.40381 1.81641 8.27881 1.81641C7.11865 1.81641 4.65771 1.71094 3.63818 2.13281C2.93506 2.41406 2.40771 2.94141 2.12646 3.60938C1.70459 4.66406 1.81006 7.125 1.81006 8.25C1.81006 9.41016 1.70459 11.8711 2.12646 12.8906C2.40771 13.5938 2.93506 14.1211 3.63818 14.4023C4.65771 14.8242 7.11865 14.7188 8.27881 14.7188C9.40381 14.7188 11.8647 14.8242 12.9194 14.4023C13.5874 14.1211 14.1499 13.5938 14.396 12.8906Z" fill="currentColor"/>
                    </svg>  
                    <span>Instagram</span>                                                      
                    </a>
                </li>
                <li class="social__media--list"><a class="social__media--link" target="_blank" href="https://www.youtube.com"> <svg width="21" height="15" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.5673 2.30071C20.3252 1.40109 19.616 0.691976 18.7165 0.449728C17.0732 0 10.4998 0 10.4998 0C10.4998 0 3.92659 0 2.28325 0.432585C1.40109 0.674672 0.674512 1.40125 0.432425 2.30071C0 3.94389 0 7.3517 0 7.3517C0 7.3517 0 10.7767 0.432425 12.4027C0.674672 13.3021 1.38379 14.0114 2.28341 14.2537C3.94389 14.7034 10.5 14.7034 10.5 14.7034C10.5 14.7034 17.0732 14.7034 18.7165 14.2708C19.6161 14.0287 20.3252 13.3195 20.5675 12.42C20.9999 10.7767 20.9999 7.369 20.9999 7.369C20.9999 7.369 21.0172 3.94389 20.5673 2.30071Z" fill="currentColor"/>
                    <path d="M8.40625 10.4996L13.8724 7.35138L8.40625 4.20312V10.4996Z" fill="white"/>
                    </svg>  
                    <span>Youtube</span>                                                 
                    </a>
                </li>
                <li class="social__media--list"><a class="social__media--link" target="_blank" href="https://www.whatsapp.com"> <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.5 10C18.5 5.71875 15.0312 2.25 10.75 2.25C6.46875 2.25 3 5.71875 3 10C3 13.3125 5.03125 16.0938 7.90625 17.2188C7.84375 16.625 7.78125 15.6875 7.9375 15C8.09375 14.4062 8.84375 11.1562 8.84375 11.1562C8.84375 11.1562 8.625 10.6875 8.625 10C8.625 8.9375 9.25 8.125 10.0312 8.125C10.6875 8.125 11 8.625 11 9.21875C11 9.875 10.5625 10.875 10.3438 11.8125C10.1875 12.5625 10.75 13.1875 11.5 13.1875C12.875 13.1875 13.9375 11.75 13.9375 9.65625C13.9375 7.78125 12.5938 6.5 10.7188 6.5C8.5 6.5 7.21875 8.15625 7.21875 9.84375C7.21875 10.5312 7.46875 11.25 7.78125 11.625C7.84375 11.6875 7.84375 11.7812 7.84375 11.8438C7.78125 12.0938 7.625 12.625 7.625 12.7188C7.59375 12.875 7.5 12.9062 7.34375 12.8438C6.375 12.375 5.78125 10.9688 5.78125 9.8125C5.78125 7.375 7.5625 5.125 10.9062 5.125C13.5938 5.125 15.6875 7.0625 15.6875 9.625C15.6875 12.2812 14 14.4375 11.6562 14.4375C10.875 14.4375 10.125 14.0312 9.875 13.5312C9.875 13.5312 9.5 15.0312 9.40625 15.375C9.21875 16.0625 8.75 16.9062 8.4375 17.4062C9.15625 17.6562 9.9375 17.75 10.75 17.75C15.0312 17.75 18.5 14.2812 18.5 10Z" fill="#FFB966"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 22H5.5C4.04133 21.9999 2.64242 21.4205 1.61098 20.389C0.579547 19.3576 6.38127e-05 17.9587 0 16.5L0 5.5C6.38127e-05 4.04133 0.579547 2.64242 1.61098 1.61098C2.64242 0.579547 4.04133 6.38127e-05 5.5 0L16.5 0C17.9587 0 19.3576 0.579463 20.3891 1.61091C21.4205 2.64236 22 4.04131 22 5.5V16.5C22 17.9587 21.4205 19.3576 20.3891 20.3891C19.3576 21.4205 17.9587 22 16.5 22Z" fill="#00D264"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3125 6.1875H16.5C17.2931 6.18745 18.0559 5.88282 18.6309 5.33652C19.2059 4.79021 19.5491 4.04396 19.5897 3.25188C19.6303 2.45979 19.3652 1.68237 18.849 1.08015C18.3329 0.47794 17.6052 0.0969313 16.8163 0.0158125C16.7111 0.00996875 16.6069 0 16.5 0H5.5C4.04133 6.38127e-05 2.64242 0.579547 1.61098 1.61098C0.579547 2.64242 6.38127e-05 4.04133 0 5.5L0 16.5C6.3815e-05 13.765 1.08658 11.142 3.02053 9.20803C4.95449 7.27408 7.57748 6.18757 10.3125 6.1875Z" fill="#00EB78"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 11C15.4122 11 14.3488 11.3226 13.4444 11.9269C12.5399 12.5313 11.8349 13.3902 11.4187 14.3952C11.0024 15.4002 10.8935 16.5061 11.1057 17.573C11.3179 18.6399 11.8417 19.6199 12.6109 20.3891C13.3801 21.1583 14.3601 21.6821 15.427 21.8943C16.4939 22.1065 17.5998 21.9976 18.6048 21.5813C19.6098 21.1651 20.4687 20.4601 21.0731 19.5556C21.6774 18.6512 22 17.5878 22 16.5V5.5C22 6.95869 21.4205 8.35764 20.3891 9.38909C19.3576 10.4205 17.9587 11 16.5 11Z" fill="#00B950"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.45011 16.1883C7.54161 16.1623 7.63751 16.1555 7.73176 16.1684C7.82601 16.1813 7.91656 16.2136 7.99771 16.2632C9.36447 17.0775 10.9817 17.3644 12.5451 17.0698C14.1086 16.7753 15.5105 15.9197 16.4874 14.6639C17.4642 13.4082 17.9485 11.8387 17.8492 10.2509C17.75 8.66304 17.074 7.16616 15.9485 6.04178C14.8229 4.91741 13.3253 4.24302 11.7373 4.14547C10.1494 4.04791 8.58047 4.53391 7.32574 5.51206C6.071 6.4902 5.21688 7.89308 4.92402 9.45685C4.63116 11.0206 4.91974 12.6375 5.73549 14.0034C5.78495 14.0843 5.81709 14.1746 5.82987 14.2686C5.84265 14.3625 5.8358 14.4581 5.80974 14.5493C5.61827 15.2268 5.15627 16.8438 5.15627 16.8438C5.15627 16.8438 6.77327 16.3818 7.45011 16.1883ZM4.54405 14.6899C3.56124 13.0332 3.21704 11.0746 3.57607 9.1821C3.9351 7.28956 4.97267 5.59318 6.49394 4.41151C8.01522 3.22984 9.91554 2.64416 11.8381 2.76447C13.7606 2.88477 15.5731 3.70277 16.9352 5.06487C18.2973 6.42697 19.1153 8.23946 19.2356 10.162C19.3559 12.0845 18.7702 13.9849 17.5886 15.5061C16.4069 17.0274 14.7105 18.065 12.818 18.424C10.9254 18.783 8.96692 18.4388 7.31021 17.456C7.31021 17.456 5.11811 18.0823 4.03255 18.3927C3.97358 18.4095 3.91119 18.4102 3.85185 18.3948C3.7925 18.3794 3.73835 18.3484 3.69499 18.3051C3.65164 18.2617 3.62065 18.2076 3.60524 18.1482C3.58983 18.0889 3.59055 18.0265 3.60733 17.9675C3.91774 16.882 4.54405 14.6899 4.54405 14.6899Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.55649 8.5207C7.66343 10.0599 8.32036 11.5094 9.40733 12.6044C10.4943 13.6995 11.9388 14.3671 13.4772 14.4855H13.4779C13.7235 14.5045 13.9704 14.4701 14.2014 14.3846C14.4325 14.2992 14.6423 14.1647 14.8165 13.9905L15.0564 13.7505C15.1697 13.6372 15.2334 13.4835 15.2335 13.3232V12.8138C15.2334 12.7499 15.2157 12.6873 15.1821 12.633C15.1485 12.5787 15.1005 12.5347 15.0434 12.5061C14.6814 12.3253 13.8956 11.9324 13.5106 11.7399C13.446 11.7076 13.3729 11.6965 13.3017 11.708C13.2304 11.7195 13.1646 11.7532 13.1135 11.8042C12.9217 11.996 12.6185 12.2995 12.4467 12.4711C12.4067 12.5111 12.3574 12.5406 12.3033 12.557C12.2491 12.5735 12.1918 12.5763 12.1363 12.5653L12.1332 12.5646C11.4677 12.4315 10.8565 12.1044 10.3766 11.6245C9.89667 11.1446 9.56956 10.5334 9.43646 9.86786L9.43577 9.86477C9.42474 9.80927 9.42756 9.75191 9.44399 9.69777C9.46042 9.64362 9.48995 9.59437 9.52996 9.55436C9.70149 9.38248 10.005 9.0793 10.1968 8.88748C10.2478 8.83641 10.2815 8.77059 10.293 8.69934C10.3046 8.62809 10.2934 8.55501 10.2611 8.49045C10.0686 8.10545 9.67571 7.31964 9.49489 6.95767C9.46631 6.90056 9.42239 6.85252 9.36805 6.81895C9.31371 6.78538 9.25111 6.76759 9.18724 6.76758H8.75411C8.65126 6.76761 8.54957 6.78923 8.45559 6.83103C8.36162 6.87284 8.27747 6.9339 8.20858 7.01027C8.13949 7.08727 8.06008 7.17527 7.98033 7.26395C7.83024 7.43051 7.71521 7.62558 7.6421 7.83754C7.56899 8.04949 7.53929 8.274 7.55477 8.49767C7.55546 8.50523 7.5558 8.5128 7.55649 8.5207Z" fill="white"/>
                    </svg>    
                    <span>Whatsapp</span>                                                                  
                    </a>
                </li>
                <li class="social__media--list"><a class="social__media--link" target="_blank" href="https://www.pinterest.com"> <svg width="14" height="16" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.502 4.56055C10.502 5.28841 10.4004 5.96549 10.1973 6.5918C10.0111 7.2181 9.74023 7.75977 9.38477 8.2168C9.0293 8.6569 8.60612 9.01237 8.11523 9.2832C7.62435 9.53711 7.08268 9.6556 6.49023 9.63867C6.28711 9.6556 6.08398 9.63867 5.88086 9.58789C5.69466 9.52018 5.51693 9.45247 5.34766 9.38477C5.19531 9.30013 5.0599 9.19857 4.94141 9.08008C4.82292 8.96159 4.72982 8.85156 4.66211 8.75C4.56055 9.15625 4.47591 9.49479 4.4082 9.76562C4.34049 10.0365 4.28125 10.248 4.23047 10.4004C4.19661 10.5358 4.17122 10.6374 4.1543 10.7051C4.1543 10.7559 4.1543 10.7728 4.1543 10.7559C4.10352 10.9082 4.05273 11.0521 4.00195 11.1875C3.95117 11.3229 3.89193 11.4668 3.82422 11.6191C3.75651 11.7546 3.68034 11.8815 3.5957 12C3.52799 12.1185 3.46029 12.237 3.39258 12.3555C3.18945 12.4909 3.02865 12.5501 2.91016 12.5332C2.80859 12.5332 2.72396 12.4909 2.65625 12.4062C2.60547 12.3216 2.57161 12.237 2.55469 12.1523C2.53776 12.0846 2.5293 12.0423 2.5293 12.0254C2.51237 11.9069 2.50391 11.7799 2.50391 11.6445C2.50391 11.4922 2.50391 11.3483 2.50391 11.2129C2.52083 11.0605 2.53776 10.9082 2.55469 10.7559C2.58854 10.6035 2.6224 10.4681 2.65625 10.3496C2.65625 10.3327 2.66471 10.2819 2.68164 10.1973C2.71549 10.0957 2.76628 9.90104 2.83398 9.61328C2.90169 9.30859 2.99479 8.89388 3.11328 8.36914C3.23177 7.8444 3.39258 7.15039 3.5957 6.28711C3.54492 6.18555 3.5026 6.05859 3.46875 5.90625C3.4349 5.75391 3.40951 5.62695 3.39258 5.52539C3.37565 5.4069 3.36719 5.30534 3.36719 5.2207C3.36719 5.13607 3.36719 5.10221 3.36719 5.11914C3.36719 4.83138 3.40104 4.57747 3.46875 4.35742C3.55339 4.12044 3.65495 3.91732 3.77344 3.74805C3.90885 3.56185 4.0612 3.42643 4.23047 3.3418C4.41667 3.24023 4.60286 3.18099 4.78906 3.16406C4.95833 3.18099 5.10221 3.21484 5.2207 3.26562C5.35612 3.31641 5.46615 3.40104 5.55078 3.51953C5.63542 3.63802 5.69466 3.76497 5.72852 3.90039C5.7793 4.01888 5.80469 4.16276 5.80469 4.33203C5.80469 4.48438 5.7793 4.67057 5.72852 4.89062C5.67773 5.09375 5.61849 5.30534 5.55078 5.52539C5.48307 5.74544 5.4069 5.98242 5.32227 6.23633C5.25456 6.47331 5.19531 6.70182 5.14453 6.92188C5.09375 7.14193 5.08529 7.33659 5.11914 7.50586C5.16992 7.6582 5.24609 7.81055 5.34766 7.96289C5.46615 8.09831 5.61003 8.19987 5.7793 8.26758C5.94857 8.33529 6.1263 8.3776 6.3125 8.39453C6.66797 8.3776 6.98958 8.26758 7.27734 8.06445C7.5651 7.86133 7.81055 7.57357 8.01367 7.20117C8.23372 6.82878 8.39453 6.41406 8.49609 5.95703C8.61458 5.48307 8.67383 4.9668 8.67383 4.4082C8.67383 4.01888 8.60612 3.64648 8.4707 3.29102C8.33529 2.93555 8.13216 2.63932 7.86133 2.40234C7.60742 2.14844 7.28581 1.94531 6.89648 1.79297C6.52409 1.64062 6.08398 1.57292 5.57617 1.58984C5.01758 1.57292 4.50977 1.66602 4.05273 1.86914C3.61263 2.07227 3.23177 2.33464 2.91016 2.65625C2.58854 2.97786 2.3431 3.35872 2.17383 3.79883C2.00456 4.22201 1.91992 4.66211 1.91992 5.11914C1.91992 5.30534 1.92839 5.46615 1.94531 5.60156C1.97917 5.72005 2.01302 5.84701 2.04688 5.98242C2.09766 6.10091 2.14844 6.21094 2.19922 6.3125C2.26693 6.39714 2.3431 6.4987 2.42773 6.61719C2.46159 6.63411 2.48698 6.66797 2.50391 6.71875C2.52083 6.7526 2.5293 6.77799 2.5293 6.79492C2.54622 6.81185 2.55469 6.8457 2.55469 6.89648C2.55469 6.93034 2.54622 6.96419 2.5293 6.99805C2.51237 7.04883 2.49544 7.09961 2.47852 7.15039C2.47852 7.18424 2.47005 7.23503 2.45312 7.30273C2.4362 7.37044 2.41927 7.42969 2.40234 7.48047C2.38542 7.51432 2.37695 7.55664 2.37695 7.60742C2.36003 7.64128 2.33464 7.68359 2.30078 7.73438C2.28385 7.76823 2.25846 7.79362 2.22461 7.81055C2.19076 7.81055 2.1569 7.81901 2.12305 7.83594C2.08919 7.83594 2.04688 7.81901 1.99609 7.78516C1.74219 7.68359 1.51367 7.53971 1.31055 7.35352C1.12435 7.15039 0.972005 6.93034 0.853516 6.69336C0.735026 6.45638 0.641927 6.18555 0.574219 5.88086C0.50651 5.57617 0.472656 5.27148 0.472656 4.9668C0.472656 4.42513 0.582682 3.88346 0.802734 3.3418C1.03971 2.80013 1.37826 2.30078 1.81836 1.84375C2.25846 1.38672 2.80859 1.02279 3.46875 0.751953C4.12891 0.464193 4.89909 0.311849 5.7793 0.294922C6.49023 0.311849 7.13346 0.438802 7.70898 0.675781C8.30143 0.895833 8.80078 1.20898 9.20703 1.61523C9.61328 2.02148 9.92643 2.47852 10.1465 2.98633C10.3835 3.47721 10.502 4.00195 10.502 4.56055Z" fill="currentColor"/>
                    </svg>    
                    <span>Pinterest</span>                                                                                                            
                    </a>
                </li>
            </ul>
       </div>
       <!-- Social share section .\ -->


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    (function ($) {
      $.fn.pandappSlider = function (options) {
        return this.each(function () {
          const slider = new PandappSlider(this, options);
          slider.init();
        });
      };

      class PandappSlider {
        constructor(element, options) {
          this.sliderContainer = $(element);
          this.slidesWrapper = this.sliderContainer.find(".pandapp-wrapper");
          this.slides = this.slidesWrapper.find(".pandapp-slide");
          this.totalSlides = this.slides.length;
          this.currentSlide = 0;
          this.autoPlayInterval = null;
          this.pagination = this.sliderContainer.find(".pandapp-pagination");
          this.prevButton = this.sliderContainer.find(".pandapp-button-prev");
          this.nextButton = this.sliderContainer.find(".pandapp-button-next");

          // Modal elements
          this.modal = $('#imageModal');
          this.modalImage = $('#modalImage');
          this.modalClose = $('.modal-close');
          this.modalPrev = $('.modal-prev');
          this.modalNext = $('.modal-next');

          this.options = $.extend(
            {
              autoPlay: false,
              autoPlayInterval: 5000,
              paginationEnabled: true,
              navigationEnabled: true
            },
            options
          );
        }

        init() {
          if (this.options.paginationEnabled) {
            this.addPagination();
          }

          if (this.options.navigationEnabled) {
            this.addNavigation();
          }

          if (this.options.autoPlay) {
            this.startAutoPlay();
            this.sliderContainer.on("mouseenter", this.pauseAutoPlay.bind(this));
            this.sliderContainer.on("mouseleave", this.startAutoPlay.bind(this));
          }

          $(window).on("resize", this.handleResponsive.bind(this));
          this.showSlide();

          // Event listeners for modal
          this.slides.find('img').on('click', this.openModal.bind(this));
          this.modalClose.on('click', this.closeModal.bind(this));
          this.modalPrev.on('click', this.prevModalSlide.bind(this));
          this.modalNext.on('click', this.nextModalSlide.bind(this));
          $(window).on('keydown', this.handleKeyboard.bind(this));
        }

        addNavigation() {
          this.prevButton.on("click", () => this.prevSlide());
          this.nextButton.on("click", () => this.nextSlide());
        }

        addPagination() {
          for (let i = 0; i < this.totalSlides; i++) {
            const bullet = $("<div class='pandapp-pagination-bullet'></div>");
            bullet.on("click", () => this.goToSlide(i));
            this.pagination.append(bullet);
          }
          this.updatePagination();
        }

        updatePagination() {
          const bullets = this.pagination.find(".pandapp-pagination-bullet");
          bullets.each((index, bullet) => {
            $(bullet).toggleClass("pandapp-pagination-bullet-active", index === this.currentSlide);
          });
        }

        goToSlide(slideIndex) {
          this.currentSlide = slideIndex;
          this.showSlide();
        }

        nextSlide() {
          this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
          this.showSlide();
        }

        prevSlide() {
          this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
          this.showSlide();
        }

        showSlide() {
          this.slidesWrapper.css("transform", `translateX(-${this.currentSlide * 100}%)`);
          this.updatePagination();
        }

        startAutoPlay() {
          this.autoPlayInterval = setInterval(() => this.nextSlide(), this.options.autoPlayInterval);
        }

        pauseAutoPlay() {
          clearInterval(this.autoPlayInterval);
        }

        handleResponsive() {
          // Implement responsive handling if needed
        }

        openModal(event) {
          const img = $(event.target);
          this.currentSlide = img.data('index'); // Set currentSlide based on the clicked image
          this.updateModalImage();
          this.modal.show();
        }

        closeModal() {
          this.modal.hide();
        }

        nextModalSlide() {
          this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
          this.updateModalImage();
        }

        prevModalSlide() {
          this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
          this.updateModalImage();
        }

        updateModalImage() {
          const img = this.slides.eq(this.currentSlide).find('img');
          this.modalImage.attr('src', img.attr('src'));
          this.modalImage.attr('alt', `Slide ${this.currentSlide + 1}`);
        }

        handleKeyboard(event) {
          switch (event.key) {
            case 'ArrowLeft':
              if (this.modal.is(':visible')) {
                this.prevModalSlide();
              } else {
                this.prevSlide();
              }
              break;
            case 'ArrowRight':
              if (this.modal.is(':visible')) {
                this.nextModalSlide();
              } else {
                this.nextSlide();
              }
              break;
            case 'Escape':
              if (this.modal.is(':visible')) {
                this.closeModal();
              }
              break;
          }
        }
      }
    })(jQuery);

    $(document).ready(function () {
      $("#mySlider").pandappSlider({
        autoPlay: true,
        autoPlayInterval: 5000,
        paginationEnabled: true,
        navigationEnabled: true
      });
    });


  </script>

  
@endsection
