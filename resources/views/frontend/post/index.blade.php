@extends('layouts.app')

@section('content')


    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <style>
        .swiper-slide img {
            height: 550px !important;
            object-fit: contain;
        }

        /* Container style */
        .swiper-container {
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
            /* Hide overflow */
        }

        /* Slide style */
        .swiper-slide {
            overflow: hidden;
            /* Hide overflow in slides */
        }

        /* Image style */
        .swiper-slide img {
            width: 100%;
            height: auto;
            display: block;
            /* Remove extra space below images */
        }

        /* Navigation buttons */
        .swiper-button-prev,
        .swiper-button-next {
            color: #fff;
            /* White color for buttons */
            z-index: 10;
            /* Ensure buttons are on top */
        }

        /* Pagination bullets */
        .swiper-pagination {
            bottom: 10px;
            /* Adjust position as needed */
        }

        /* Close icon style */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: none;
            /* Hide modal by default */
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            max-width: 90%;
            max-height: 80%;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 30px;
            color: #fff;
            cursor: pointer;
        }

        .prev,
        .next {
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: #fff;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            cursor: pointer;
            border-radius: 3px;
        }

        .next {
            right: 0;
        }

        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
        .property-single-page{
            margin-top: 60px;
        }
    </style>
    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="{{ url('/') }}">Home</a> / Բնակարաններ</span>
            <h2>Բնակարաններ</h2>
        </div>
    </div>

    <div class="property-single-page">

        <main class="main">
            <section id="real-estate-2" class="real-estate-2 section">

                <div class="container" data-aos="fade-up">

                    @if (!empty($category->image1))
                        @php
                            $images = json_decode($category->image1, true);
                        @endphp
                        <div class="col-lg-12 col-md-12">
                            <div class="swiper-container portfolio-details-slider init-swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($images as $image)
                                        <div class="swiper-slide">
                                            <img src="{{ asset($image) }}" alt="Category Image" class="contnet_image">
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-9">
                            <p>No images available.</p>
                        </div>
                    @endif

                    <!-- Modal for images -->
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img01">
                        <div id="caption"></div>
                        <a class="prev">&#10094;</a>
                        <a class="next">&#10095;</a>
                    </div>


                    <div class="row justify-content-between gy-4 mt-4">

                        <div class="col-lg-8" data-aos="fade-up">

                            <div class="portfolio-description">
                                <h2>Նկարագիր</h2>
                                <p>
                                    {{ $category->des }}
                                </p>
                            </div>

                            <!-- Tabs -->
                            <ul class="nav nav-pills mb-3">
                                <li><a class="nav-link active" data-bs-toggle="pill" href="#real-estate-2-tab1">Նկարագիր</a>
                                </li>
                                <li><a class="nav-link" data-bs-toggle="pill" href="#real-estate-2-tab2">Floor Plans</a>
                                </li>
                                <li><a class="nav-link" data-bs-toggle="pill" href="#real-estate-2-tab3">Location</a></li>
                            </ul><!-- End Tabs -->

                            <!-- Tab Content -->
                            <div class="tab-content">

                                <div class="tab-pane fade show active" id="real-estate-2-tab1">
                                    <h2>Նկարագիր</h2>
                                    
                                </div>

                                <div class="tab-pane fade" id="real-estate-2-tab2">
                                    <img src="assets/img/floor-plan.jpg" alt="" class="img-fluid">
                                </div><!-- End Tab 2 Content -->

                                <div class="tab-pane fade" id="real-estate-2-tab3">
                                    <iframe style="border:0; width: 100%; height: 400px;"
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
                                        frameborder="0" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div><!-- End Tab 3 Content -->

                            </div><!-- End Tab Content -->

                        </div>

                        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="portfolio-info">
                                <h3>Բնակարաններ</h3>
                                <ul>
                                    <li><strong>Կոդ:</strong>{{ $category->description }} </li>
                                    <li><strong>Գին:</strong>{{ $category->slug }} </li>
                                    <li><strong>Գործակալ:</strong> {{ $category->meta_keywords }}</li>
                                    <li><strong>Գործակալի Հեռ․՝:</strong> {{ $category->meta_title }}</li>
                                    <li><strong>Զանգահարել:</strong> <a href="tel:{{ $category->meta_title }}" class="btn-tel">
                                        <button>Զանգահարել</button>
                                    </a></li>
                                </ul>
                            </div>
                            <div class="portfolio-info">
                                <h3>Շենքի մասին</h3>
                                <ul>
                                    <li><strong>Հասցէ՝:</strong>{{ $category->name }} </li>
                                    <li><strong>Շինության տիպ:</strong>{{ $category->name2 }} </li>
                                    <li><strong>Նորակառույց:</strong> {{ $category->name3 }}</li>
                                    <li><strong>Վերելակ:</strong> {{ $category->name4 }}</li>
                                    <li><strong>Կայանատեղի:</strong> {{ $category->name6 }}</li>
                                    <li><strong>Հարկերի քանակ:</strong> {{ $category->name5 }}</li>
                                </ul>
                            </div>
                            <div class="portfolio-info">
                                <h3>Բնակարանի մասին</h3>
                                <ul>
                                    <li><strong>Ընդհանուր մակերես:</strong>{{ $category->name7 }} </li>
                                    <li><strong>Սենյակների քանակ:</strong>{{ $category->name8 }} </li>
                                    <li><strong>Սանհանգույցների քանակ:</strong> {{ $category->name9 }}</li>
                                    <li><strong>Առաստաղի բարձրություն:</strong> {{ $category->name10 }}</li>
                                    <li><strong>Հարկ:</strong> {{ $category->name11 }}</li>
                                    <li><strong>Պատշգամբ:</strong> {{ $category->name12 }}</li>
                                    <li><strong>Կահույք:</strong> {{ $category->name13 }}</li>
                                    <li><strong>Վերանորոգում:</strong> {{ $category->name14 }}</li>
                                    <li><strong>Հարմարություններ:</strong> {{ $category->name15 }}</li>
                                    <li><strong>Տեսարան պատուհանից:</strong> {{ $category->name17 }}</li>
                                    <li><strong>Կենցաղային տեխնիկա:</strong> {{ $category->name16 }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </section><!-- /Real Estate 2 Section -->

        </main>


        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper('.init-swiper', {
                loop: true,
                speed: 600,
                autoplay: {
                    delay: 5000
                },
                slidesPerView: 'auto',
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                    clickable: true
                }
            });

            // Handle modal image display
            var modal = document.getElementById('myModal');
            var close = document.querySelector('.modal .close');

            close.onclick = function() {
                modal.style.display = "none";
            }

            // Example of how to open the modal and display an image
            document.querySelectorAll('.swiper-slide img').forEach(img => {
                img.onclick = function() {
                    var modalImg = document.getElementById('img01');
                    var captionText = document.getElementById('caption');
                    modal.style.display = "flex";
                    modalImg.src = this.src;
                    captionText.innerHTML = this.alt;
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById('myModal');
            var modalImg = document.getElementById('img01');
            var captionText = document.getElementById('caption');
            var close = document.querySelector('.modal .close');
            var prev = document.querySelector('.prev');
            var next = document.querySelector('.next');

            var currentIndex = 0;
            var images = Array.from(document.querySelectorAll('.swiper-slide img'));

            function openModal(index) {
                modal.style.display = "flex";
                modalImg.src = images[index].src;
                captionText.innerHTML = images[index].alt;
                currentIndex = index;
            }

            function showNextImage() {
                currentIndex = (currentIndex + 1) % images.length;
                openModal(currentIndex);
            }

            function showPrevImage() {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                openModal(currentIndex);
            }

            images.forEach((img, index) => {
                img.onclick = function() {
                    openModal(index);
                }
            });

            close.onclick = function() {
                modal.style.display = "none";
            }

            prev.onclick = showPrevImage;
            next.onclick = showNextImage;

            // Keyboard navigation
            document.addEventListener('keydown', function(event) {
                if (modal.style.display === "flex") {
                    if (event.key === 'ArrowRight') {
                        showNextImage();
                    } else if (event.key === 'ArrowLeft') {
                        showPrevImage();
                    }
                }
            });
        });
    </script>
    </script>


@endsection
