@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
      @media (min-width: 1440px) {
    .container {
        width: 1440px;
    }
}
      .rowwing{
        padding-inline: 25px;
        margin-top: 10px;
      }
      .md_mb-5{
        margin-top: 25px;
      }
      p{
        text-align: right;
        margin-bottom: 15px !important;
      }
        .mb-3.d-flexisi {
            display: flex;
            max-width: 300px;
            width: 100%;
            justify-content: space-between;
        }

        h2 {
            font-family: 'Mardoto-Regular';
            font-size: 18px
        }

        .hot-properties.hidden-xs {
            height: 550px;
            overflow-y: scroll;
            overflow-x: hidden;
        }

        .lSAction>a {
            z-index: 1 !important;
        }

        .demo {
            width: 850px;
            margin: 0 auto;
        }

        .header>a {
            display: inline-block;
        }

        .contnet_image {
            display: block;
            height: auto;
            width: 100%;
        }

        @media screen and (max-width:1210px) {
            .hidden-xs {
                display: none !important;
            }
        }

        @media screen and (max-width:1000px) {
            .demo {
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
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 60%;
        }

        .modal-content,
        #caption {
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
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

        .prev,
        .next {
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

        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
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
                @if (!empty($category->image1))
                    @php
                        $images = json_decode($category->image1, true);
                    @endphp
                    <div class="col-lg-9 col-md-12">
                        <div class="demo">
                            <ul id="lightSlider">
                                @foreach ($images as $image)
                                    <li data-thumb="{{ asset($image) }}">
                                        <img src="{{ asset($image) }}" alt="Category Image" class="contnet_image">
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="mb-3 md_mb-5">
                            <h2>Նկարագիր</h2>
                            <span>{{ $category->des }}</span>
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
            
                <div class="col-lg-3 col-sm-4">
                    <div class="row rowwing">
                        @foreach (['name' => 'Շինության տիպ', 'name1' => 'Նորակառույց', 'name2' => 'Վերելակ', 'name3' => 'Հարկերի քանակ', 'name4' => 'Հարկը', 'name5' => 'Կայանատեղի', 'name6' => 'Սենյակների քանակ', 'name7' => 'Սանհանգույցի քանակ', 'name8' => 'Պատշգամբ', 'name9' => 'Առաստաղի բարձրություն', 'name10' => 'Կահույք', 'name11' => 'Ընդհանուր մակերես', 'name12' => 'Վերանորոգված', 'slug' => 'Գին', 'slug1' => 'Տեսարան', 'description' => 'Կոդ', 'meta_title' => 'Տարածաշրջան', 'meta_description' => 'Կենցաղային տեխնիկա', 'meta_keywords' => 'Գործակալ'] as $key => $label)
                            @if (!empty($category->$key))
                                <div class="mb-3 d-flexisi">
                                    <h2>{{ $label }}</h2>
                                    @if ($key == 'slug')
                                        @php
                                            $priceInDram = $category->slug;
                                            $priceInDollar = round($priceInDram * 395, 2);
                                        @endphp
                                        <p>{{ $priceInDollar }} AMD  /  {{ $priceInDram }}USD </p>
                                     
                                    @else
                                        <p>{{ $category->$key }}</p>
                                    @endif
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                
                
            </div>
            
            {{-- <div class="row">

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
                        <div class="mb-3 md_mb-5">
                            <h2>Նկարագիր</h2>
                            <span>{{ $category->des }}</span>
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
                <div class="col-lg-3 col-sm-4">
                    <div class="row rowwing">
                        <div class="mb-3 d-flexisi">
                            <h2>Շինության տիպ</h2>
                            <p>{{ $category->name }}</p>
                        </div>
                        <div class="mb-3 d-flexisi">
                            <h2>Նորակառույց</h2>
                            <p>{{ $category->name1 }}</p>
                        </div>
                        <div class="mb-3 d-flexisi">
                            <h2>Վերելակ</h2>
                            <p>{{ $category->name2 }}</p>
                        </div>
                        <div class="mb-3 d-flexisi">
                            <h2>Հարկերի քանակ</h2>
                            <p>{{ $category->name3 }}</p>
                        </div>
                        <div class="mb-3 d-flexisi">
                            <h2>Հարկը</h2>
                            <p>{{ $category->name4 }}</p>
                        </div>
                        <div class="mb-3 d-flexisi">
                            <h2>Կայանատեղի</h2>
                            <p>{{ $category->name5 }}</p>
                        </div>

                        <div class="mb-3 d-flexisi">
                            <h2>Սենյակների քանակ</h2>
                            <p>{{ $category->name6 }}</p>
                        </div>
                        <div class="mb-3 d-flexisi">
                            <h2>Սանհանգույցի քանակ</h2>
                            <p>{{ $category->name7 }}</p>
                        </div>
                        <div class="mb-3 d-flexisi">
                            <h2>Պատշգամբ</h2>
                            <p>{{ $category->name8 }}</p>
                        </div>
                        <div class="mb-3 d-flexisi">
                            <h2>Առաստաղի բարձրություն</h2>
                            <p>{{ $category->name9 }}</p>
                        </div>
                        <div class="mb-3 d-flexisi">
                            <h2>Կահույք</h2>
                            <p>{{ $category->name10 }}</p>
                        </div>
                        <div class="mb-3 d-flexisi">
                            <h2>Ընդհանուր մակերես </h2>
                            <p>{{ $category->name11 }}</p>
                        </div>
                        <div class="mb-3 d-flexisi">
                            <h2>Վերանորոգված</h2>
                            <p>{{ $category->name12 }}</p>
                        </div>
                        <div class="mb-3 d-flexisi">
                            <h2>Գին</h2>
                            <p>{{ $category->slug }}</p>
                        </div>
                        <div class="mb-3 d-flexisi">
                            <h2>Տարադրամ</h2>
                            <p>{{ $category->slug1 }}</p>
                        </div>
                        <div class="mb-3 d-flexisi">
                            <h2>Տեսարան</h2>
                            <p>{{ $category->description }}</p>
                        </div>
                        <div class="mb-3 d-flexisi">
                            <h2>Տարածաշրջան</h2>
                            <p>{{ $category->meta_title }}</p>
                        </div>
                        <div class="mb-3 d-flexisi">
                            <h2>Կենցաղային տեխնիկա</h2>
                            <p>{{ $category->meta_description }}</p>
                        </div>
                        <div class="mb-3 d-flexisi">
                            <h2>Գործակալ</h2>
                            <p>{{ $category->meta_keywords }}</p>
                        </div>
                    </div>
                </div>
            </div> --}}
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
                img.onclick = function() {
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
                if (index >= slides.length) {
                    currentSlideIndex = 0
                }
                if (index < 0) {
                    currentSlideIndex = slides.length - 1
                }
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
