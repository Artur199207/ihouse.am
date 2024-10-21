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

        @media screen and (max-width:570px) {
            .pandapp-slide img {
                height: 350px;
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
            display: none;
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

            .btn-group.dropup,
            p.btn {
                width: 165px;
                height: 44px;

            }

            p.btn {
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 18px;
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
                bottom: 75px;
                /* Adjusted from 100% to 75px to align properly */
                left: 0;
                width: 100%;
                background-color: #fff;
                border: 1px solid #ddd;
                padding: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                opacity: 0;
                visibility: hidden;
                transition: opacity 0.3s ease, visibility 0s ease 0.3s;
                /* Smooth transition */
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
                                @if (!empty($banner->image1))
                                    @php
                                        $images = json_decode($banner->image1, true);
                                    @endphp
                                    @foreach ($images as $index => $image)
                                        <div class="pandapp-slide">
                                            <img src="{{ asset($image) }}" alt="Category Image" class="contnet_image"
                                                data-index="{{ $index }}">
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
                                    <img src="{{ asset('public/assets/image/logoihouse.svg') }}" alt="img">
                                </div>
                                <div class="admin__profile--content">
                                    <h3 class="admin__profile--name"> {{ $banner->meta_keywords }}</h3>

                                    <p>Հեռ․՝
                                        <a href="tel:{{ $banner->meta_title }}">{{ $banner->meta_title }}</a>
                                    </p>
                                    <p class="admin__profile--desc">ihouse <br />անշարժ գույքի գործակալության գործակալ</p>
                                    <a class="admin__profile--email" href="mailto:info@ihouse.am">info@ihouse.am</a>

                                    <ul class=" profile__social d-flex align-items-center justify-content-center">

                                        <li class="profile__social--list">
                                            <a class="profile__social--icon" target="_blank"
                                                href="tel:{{ $banner->meta_title }}">

                                                <svg version="1.1" baseProfile="basic" id="&#x421;&#x43B;&#x43E;&#x439;_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 64 64" xml:space="preserve">
                                                    <ellipse style="opacity:0.3;" cx="32" cy="61"
                                                        rx="19" ry="3" />
                                                    <path style="fill:#9C34C2;" d="M21.405,56.751c-0.503,0.532-1.398,0.178-1.399-0.555c-0.004-1.798-0.003-3.958,0.013-5.336
     c0.017-1.447-0.94-2.015-1.653-2.35c-0.482-0.227-1.039-0.428-1.63-0.64c-0.834-0.3-1.696-0.61-2.269-0.976
     c-2.535-1.617-4.253-4.121-5.257-7.657c-1.103-3.891-1.45-8.11-1.062-12.899c0.171-2.108,0.469-4.328,0.909-6.784
     c0.825-4.593,3.433-7.854,7.975-9.97c2.408-1.122,5.074-1.821,8.642-2.264c1.587-0.197,3.238-0.296,4.909-0.296
     c2.389,0,4.841,0.195,7.493,0.596c3.312,0.501,6.799,1.259,9.862,3.399c2.309,1.614,3.887,3.903,4.687,6.807
     c1.301,4.713,1.673,9.949,1.138,16.003c-0.294,3.337-1.075,6.272-2.386,8.971c-1.163,2.391-3.037,4.107-5.73,5.248
     c-3.103,1.313-6.502,1.597-9.444,1.76c-2.538,0.14-5.171,0.288-7.597,0.288c-1.19,0.024-1.601,0.5-2.077,1.05l-0.229,0.26
     C25.245,52.578,23.08,54.979,21.405,56.751z" />
                                                    <path
                                                        style="fill:none;stroke:#FFFFFF;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                                        d="
     M12.502,20.171c0.627-3.485,2.479-5.772,6.009-7.416" />
                                                    <g>
                                                        <path style="opacity:0.15;" d="M53.991,28.85c-2.667-0.128-4.972,1.862-5.208,4.541c-0.239,2.717-0.861,5.08-1.901,7.222
      c-0.628,1.291-1.61,2.164-3.183,2.83c-2.364,1.001-5.25,1.233-7.77,1.372c-2.744,0.151-4.846,2.488-4.715,5.23
      c1.65-0.055,3.338-0.146,4.99-0.237c2.942-0.163,6.341-0.447,9.444-1.76c2.693-1.141,4.566-2.857,5.73-5.248
      c1.311-2.699,2.092-5.633,2.386-8.971C53.916,32.102,53.987,30.45,53.991,28.85z" />
                                                        <path style="opacity:0.3;fill:#FFFFFF;" d="M19.144,14.114c2.331-1.086,3.406-3.737,2.604-6.118
      c-1.752,0.403-3.282,0.918-4.716,1.586c-4.542,2.116-7.15,5.376-7.975,9.97c-0.441,2.456-0.739,4.675-0.909,6.784
      c-0.141,1.737-0.182,3.396-0.128,4.995c0.044,0.001,0.09,0.005,0.134,0.005c2.578,0,4.766-1.981,4.978-4.596
      c0.158-1.945,0.436-4.008,0.848-6.305C14.517,17.441,16.062,15.551,19.144,14.114z" />
                                                    </g>
                                                    <path style="fill:#FFA1AC;"
                                                        d="M16.944,21.454c0.056-2.548,2.009-3.981,3.983-4.415c0.754-0.167,1.421,0.099,1.982,0.634
     c1.549,1.478,2.772,3.191,3.695,5.114c0.405,0.843,0.223,1.589-0.465,2.216c-0.142,0.13-0.291,0.251-0.445,0.368
     c-1.567,1.18-1.799,2.071-0.963,3.846c1.424,3.021,3.784,5.048,6.839,6.306c0.806,0.332,1.562,0.168,2.179-0.485
     c0.082-0.087,0.176-0.171,0.237-0.272c1.205-2.009,2.951-1.81,4.563-0.664c1.06,0.753,2.089,1.547,3.137,2.315
     c1.596,1.172,1.582,2.274,0.611,3.86c-0.709,1.159-1.77,1.961-3.021,2.484c-0.913,0.382-1.846,0.301-2.745-0.081
     c-7.555-3.196-13.478-8.235-17.394-15.477c-0.807-1.492-1.369-3.116-2.012-4.692C16.993,22.188,17,21.808,16.944,21.454z" />
                                                    <path style="fill:#FFA1AC;" d="M35.467,29.004c-0.549,0-0.994-0.444-0.994-0.994c0-1.843-1.5-3.343-3.343-3.343
     c-0.549,0-0.994-0.444-0.994-0.994c0-0.55,0.445-0.994,0.994-0.994c2.94,0,5.33,2.391,5.33,5.33
     C36.461,28.56,36.015,29.004,35.467,29.004z" />
                                                    <path style="fill:#FFA1AC;" d="M39.624,28.907c-0.055,0-0.111-0.005-0.167-0.014c-0.544-0.092-0.912-0.608-0.819-1.152
     c0.059-0.353,0.089-0.716,0.089-1.08c0-3.573-2.907-6.48-6.48-6.48c-0.364,0-0.728,0.03-1.081,0.09
     c-0.545,0.085-1.061-0.276-1.152-0.82c-0.091-0.545,0.275-1.061,0.82-1.152c0.462-0.078,0.938-0.117,1.413-0.117
     c4.676,0,8.48,3.805,8.48,8.48c0,0.476-0.04,0.95-0.118,1.412C40.527,28.561,40.104,28.907,39.624,28.907z" />
                                                    <path style="fill:#FFA1AC;" d="M43.71,28.999c-0.073,0-0.147-0.008-0.222-0.024c-0.539-0.122-0.876-0.657-0.755-1.196
     c0.16-0.706,0.241-1.433,0.241-2.16c0-5.354-4.356-9.71-9.71-9.71c-0.727,0-1.454,0.081-2.16,0.24
     c-0.54,0.119-1.074-0.217-1.196-0.756c-0.122-0.538,0.217-1.073,0.755-1.195c0.851-0.191,1.726-0.289,2.601-0.289
     c6.457,0,11.71,5.253,11.71,11.71c0,0.876-0.098,1.751-0.29,2.602C44.58,28.683,44.167,28.999,43.71,28.999z" />
                                                </svg>
                                                <span class="visually-hidden">Viber</span>
                                            </a>
                                        </li>
                                        <li class="profile__social--list">
                                            <a class="profile__social--icon" target="_blank"
                                                href="tel:{{ $banner->meta_title }}">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48"
                                                    width="48px" height="48px">
                                                    <path style="fill:#FFFFFF;"
                                                        d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z" />
                                                    <g>
                                                        <path style="fill:#FFFFFF;"
                                                            d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z" />
                                                        <path style="fill:#CFD8DC;"
                                                            d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z" />
                                                    </g>
                                                    <path style="fill:#40C351;"
                                                        d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z" />
                                                    <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;"
                                                        d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" />
                                                </svg>
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
                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Զանգել
                                    </button>
                                    <ul class="dropdown-menu">

                                        <p>Հեռ․՝
                                            <a href="tel:{{ $banner->meta_title }}">{{ $banner->meta_title }}</a>
                                        </p>
                                        <p>Հեռ․՝
                                            <a href="tel:{{ $banner->name18 }}">{{ $banner->name18 }}</a>
                                        </p>
                                        <p>Telegram:
                                            <a href="https://t.me/{{ $banner->name18 }}" target="_blank">
                                                {{ $banner->name18 }}</a>
                                        </p>
                                        <p>WhatsApp:
                                            <a href="https://wa.me/{{ $banner->name18 }}" target="_blank">
                                                {{ $banner->name18 }}
                                            </a>
                                        </p>
                                        <p>Viber:
                                            <a href="viber://chat?number={{ $banner->name18 }}" target="_blank">
                                                {{ $banner->name18 }}</a>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="listing__details--wrapper">
                            <div class="listing__details--content">

                                <div class="listing__details--content__step">

                                    <div class="listing__details--price__id d-flex align-items-center">
                                        <div class="listing__details--price d-flex">
                                            <span class="listing__details--price__new">{{ $banner->slug }}</span>

                                        </div>
                                        <span class="listing__details--property__id">Կոդ :
                                            {{ $banner->description }}</span>
                                    </div>
                                    <p class="listing__details--location__text"><svg width="11" height="17"
                                            viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z"
                                                fill="#FA4B4A" />
                                        </svg>
                                        {{ $banner->name1 }}</p>
                                </div>
                            </div>
                            <div class="listing__details--main__content">
                                <div class="listing__details--content__step mb-80">
                                    <div class="apartment__info listing__d--info">
                                        <div class="apartment__info--wrapper d-flex">
                                            <div class="apartment__info--list">
                                                <span class="apartment__info--icon"><img
                                                        src="{{ asset('public/assets/img/icon/bed-realistic.png') }}"
                                                        alt="img"></span>
                                                <p>

                                                    <span class="apartment__info--count">{{ $banner->name8 }}</span>
                                                    <span class="apartment__info--title">Սենյակ</span>
                                                </p>
                                            </div>
                                            <div class="apartment__info--list">
                                                <span class="apartment__info--icon"><img
                                                        src="{{ asset('public/assets/img/icon/modern-car.png') }}"
                                                        alt="img"></span>
                                                <p>

                                                    <span class="apartment__info--count">{{ $banner->name6 }}</span>
                                                    <span class="apartment__info--title"> Կայանատեղի </span>
                                                </p>
                                            </div>
                                            <div class="apartment__info--list">
                                                <span class="apartment__info--icon"><img
                                                        src="{{ asset('public/assets/img/icon/set-square.png') }}"
                                                        alt="img"></span>
                                                <p>
                                                    <span class="apartment__info--count">{{ $banner->name7 }}</span>
                                                    <span class="apartment__info--title">Ընդհանուր մակերես </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <h3 class="listing__details--content__title mb-40">Շենքի մասին</h3>
                                    <ul class="properties__details--info__wrapper d-flex">
                                        <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Շինության տիպ:</span>
                                            <span
                                                class="properties__details--info__subtitle">{{ $banner->name2 }}</span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Նորակառույց:</span>
                                            <span
                                                class="properties__details--info__subtitle">{{ $banner->name3 }}</span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Վերելակ:</span>
                                            <span
                                                class="properties__details--info__subtitle">{{ $banner->name4 }}</span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Հարկերի քանակ:</span>
                                            <span
                                                class="properties__details--info__subtitle">{{ $banner->name5 }}</span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Կայանատեղի:</span>
                                            <span
                                                class="properties__details--info__subtitle">{{ $banner->name6 }}</span>
                                        </li>
                                    </ul>
                                    <h3 class="listing__details--content__title mb-40">Բնակարանի մասին</h3>
                                    <ul class="properties__details--info__wrapper d-flex">
                                        <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Ընդհանուր մակերես:</span>
                                            <span
                                                class="properties__details--info__subtitle">{{ $banner->name7 }}</span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Սենյակների քանակ:</span>
                                            <span
                                                class="properties__details--info__subtitle">{{ $banner->name8 }}</span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Սանհանգույցների քանակ:</span>
                                            <span
                                                class="properties__details--info__subtitle">{{ $banner->name9 }}</span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Առաստաղի բարձրություն:</span>
                                            <span
                                                class="properties__details--info__subtitle">{{ $banner->name10 }}</span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Հարկ:</span>
                                            <span
                                                class="properties__details--info__subtitle">{{ $banner->name11 }}</span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Պատշգամբ:</span>
                                            <span
                                                class="properties__details--info__subtitle">{{ $banner->name12 }}</span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Կահույք:</span>
                                            <span
                                                class="properties__details--info__subtitle">{{ $banner->name13 }}</span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Վերանորոգում:</span>
                                            <span
                                                class="properties__details--info__subtitle">{{ $banner->name14 }}</span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Կենցաղային տեխնիկա:</span>
                                            <span
                                                class="properties__details--info__subtitle">{{ $banner->name16 }}</span>
                                        </li>
                                        <li class="properties__details--info__list d-flex justify-content-between">
                                            <span class="properties__details--info__title">Տեսարաններ պատուհաններից:</span>
                                            <span
                                                class="properties__details--info__subtitle">{{ $banner->name17 }}</span>
                                        </li>

                                    </ul>

                                </div>
                                <div class="listing__details--content__step properties__info mb-80">
                                    <h3 class="listing__details--content__title">Նկարագիր:</h3>
                                    <p class="listing__details--content__desc">{{ $banner->des }}</p>
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
                                                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAWM0XzxujknxaImMPST8aZLwrgLa973pE&q={{ urlencode($banner->name) }}"
                                                    allowfullscreen loading="lazy"
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
                                        <div class="alert alert-success">Ձեր Հաղորդագրությունը հաջողությամբ ուղարկվե է
                                        </div>
                                    @endif
                                    <form action="{{ route('send.email') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="widget__form--input mb-20"><label
                                                        for="inputName">Անուն</label><input type="text" name="name"
                                                        class="widget__form--input__field" placeholder="Անուն">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }} </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6" style="display: none">
                                                <div class="widget__form--input mb-20"><label
                                                        for="inputEmail">Email</label><input type="email"
                                                        name="email" class="widget__form--input__field"
                                                        placeholder="Enter Email" value="ihouse.agency2024@gmail.com">
                                                    @error('email')
                                                        <span class="text-danger">{{ $message }} </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget__form--input mb-20"><label
                                                for="inputSubject">էլ․հասցե</label><input type="text" name="subject"
                                                class="widget__form--input__field" placeholder="էլ․հասցե">
                                            @error('subject')
                                                <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="widget__form--input mb-20"><label
                                                for="inputMessage">Հաղորդագրություն</label>
                                            <textarea name="content" rows="5" class="widget__form--textarea__field" placeholder="Հաղորդագրություն"></textarea>
                                            @error('content')
                                                <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="text-center"><button class="widget__form--btn solid__btn"
                                                type="submit"><i class="fa fa-paper-plane"></i>ՈՒղղարկել</button></div>
                                    </form>
                                </div>
                            </div>


                            <div class="widget__step mb-30">

                                <h2 class="widget__step--title"></h2>
                                <div class="widget__featured--properties">
                                    <div class="widget__featured--properties__thumbnail position-relative">
                                        <img src="{{ asset('public/uploads/category/' . $banner->image) }}"
                                            alt="img">
                                        <div class="featured__badge">
                                            <span class="badge__field">{{ $banner->description }}</span>
                                        </div>
                                    </div>
                                    <div class="widget__featured--properties__content">
                                        <div
                                            class="widget__featured--properties__content--top d-flex align-items-center justify-content-between">
                                            <div class="widget__featured--properties__author">

                                            </div>

                                        </div>
                                        <p class="widget__featured--properties__desc"><svg width="11" height="17"
                                                viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z"
                                                    fill="#F23B3B"></path>
                                            </svg>
                                            {{ $banner->name1 }}</p>

                                        <div class="widget__featured--propertie__price d-flex">
                                            <span class="new__price">{{ $banner->slug }}</span>

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




        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            (function($) {
                $.fn.pandappSlider = function(options) {
                    return this.each(function() {
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

                        this.options = $.extend({
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
                            $(bullet).toggleClass("pandapp-pagination-bullet-active", index === this
                                .currentSlide);
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

            $(document).ready(function() {
                $("#mySlider").pandappSlider({
                    autoPlay: true,
                    autoPlayInterval: 5000,
                    paginationEnabled: true,
                    navigationEnabled: true
                });
            });
        </script>


    @endsection
