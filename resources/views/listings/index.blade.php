<!-- resources/views/listings/index.blade.php -->

@extends('layouts.app') {{-- Assuming you have a layout file --}}

@section('content')
    <style>
        img.contnet_image {
            height: 290px;
            width: 410px;
        }
    </style>
    <main class="main__content_wrapper">

        <section class="breadcrumb__section section--padding">
            <div class="container">
                <div class="breadcrumb__content text-center" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                    <h1 class="breadcrumb__title h2"><span>Listing</span> Page</h1>
                    <ul class="breadcrumb__menu d-flex justify-content-center">
                        <li class="breadcrumb__menu--items"><a class="breadcrumb__menu--link" href="./index.html">Home</a>
                        </li>
                        <li><span><svg width="6" height="10" viewBox="0 0 6 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.22321 4.65179C5.28274 4.71131 5.3125 4.77976 5.3125 4.85714C5.3125 4.93452 5.28274 5.00298 5.22321 5.0625L1.0625 9.22321C1.00298 9.28274 0.934524 9.3125 0.857143 9.3125C0.779762 9.3125 0.71131 9.28274 0.651786 9.22321L0.205357 8.77679C0.145833 8.71726 0.116071 8.64881 0.116071 8.57143C0.116071 8.49405 0.145833 8.4256 0.205357 8.36607L3.71429 4.85714L0.205357 1.34821C0.145833 1.28869 0.116071 1.22024 0.116071 1.14286C0.116071 1.06548 0.145833 0.997023 0.205357 0.9375L0.651786 0.491071C0.71131 0.431547 0.779762 0.401785 0.857143 0.401785C0.934524 0.401785 1.00298 0.431547 1.0625 0.491071L5.22321 4.65179Z"
                                        fill="#706C6C" />
                                </svg>
                            </span></li>
                        <li><span class="breadcrumb__menu--text">Listing Page </span></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="listing__page--section section--padding">
            <div class="container">
                <div class="row column-reverse-md">
                    <div class="col-lg-4">
                        <div class="listing__widget">
                            <div class="widget__search mb-30" data-aos="fade-up" data-aos-duration="1200"
                                data-aos-delay="100">
                                <div class="widget__search--input position-relative">
                                    <input class="widget__search--input__field" placeholder="Search product" type="text">
                                    <button class="widget__search--btn"><svg width="16" height="17"
                                            viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.10714 9.54464C9.89286 8.75893 10.2857 7.81548 10.2857 6.71429C10.2857 5.61309 9.89286 4.67262 9.10714 3.89286C8.32738 3.10714 7.38691 2.71428 6.28571 2.71428C5.18452 2.71428 4.24107 3.10714 3.45536 3.89286C2.6756 4.67262 2.28571 5.61309 2.28571 6.71429C2.28571 7.81548 2.6756 8.75893 3.45536 9.54464C4.24107 10.3244 5.18452 10.7143 6.28571 10.7143C7.38691 10.7143 8.32738 10.3244 9.10714 9.54464ZM14.8571 14.1429C14.8571 14.4524 14.744 14.7202 14.5179 14.9464C14.2917 15.1726 14.0238 15.2857 13.7143 15.2857C13.3929 15.2857 13.125 15.1726 12.9107 14.9464L9.84822 11.8929C8.78274 12.631 7.59524 13 6.28571 13C5.43452 13 4.61905 12.8363 3.83929 12.5089C3.06548 12.1756 2.39583 11.7292 1.83036 11.1696C1.27083 10.6042 0.824405 9.93452 0.491071 9.16071C0.16369 8.38095 0 7.56548 0 6.71429C0 5.86309 0.16369 5.05059 0.491071 4.27678C0.824405 3.49702 1.27083 2.82738 1.83036 2.26786C2.39583 1.70238 3.06548 1.25595 3.83929 0.928571C4.61905 0.595237 5.43452 0.428571 6.28571 0.428571C7.13691 0.428571 7.94941 0.595237 8.72322 0.928571C9.50298 1.25595 10.1726 1.70238 10.7321 2.26786C11.2976 2.82738 11.744 3.49702 12.0714 4.27678C12.4048 5.05059 12.5714 5.86309 12.5714 6.71429C12.5714 8.02381 12.2024 9.21131 11.4643 10.2768L14.5268 13.3393C14.747 13.5595 14.8571 13.8274 14.8571 14.1429Z"
                                                fill="currentColor" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="listing__widget--inner" data-aos="fade-up" data-aos-duration="1200"
                                data-aos-delay="150">
                                <div class="widget__list mb-30">
                                    <h2 class="widget__title mb-15">Product Catagories</h2>
                                    <ul class="widget__catagories">
                                        <li class="widget__catagories__list">
                                            <label class="widget__catagories--label" for="check1">Apartment (8)</label>
                                            <input class="widget__catagories--input" id="check1" type="checkbox">
                                            <span class="widget__catagories--checkmark"></span>
                                        </li>
                                        <li class="widget__catagories__list">
                                            <label class="widget__catagories--label" for="check2">container home (5)
                                            </label>
                                            <input class="widget__catagories--input" id="check2" type="checkbox">
                                            <span class="widget__catagories--checkmark"></span>
                                        </li>
                                        <li class="widget__catagories__list">
                                            <label class="widget__catagories--label" for="check3">Tiny home (5) </label>
                                            <input class="widget__catagories--input" id="check3" type="checkbox">
                                            <span class="widget__catagories--checkmark"></span>
                                        </li>
                                        <li class="widget__catagories__list">
                                            <label class="widget__catagories--label" for="check4">Duplex Modern Houses
                                                (7)</label>
                                            <input class="widget__catagories--input" id="check4" type="checkbox">
                                            <span class="widget__catagories--checkmark"></span>
                                        </li>
                                        <li class="widget__catagories__list">
                                            <label class="widget__catagories--label" for="check5">Villa Type (1)</label>
                                            <input class="widget__catagories--input" id="check5" type="checkbox">
                                            <span class="widget__catagories--checkmark"></span>
                                        </li>
                                        <li class="widget__catagories__list">
                                            <label class="widget__catagories--label" for="check6">Cosmetics (6)</label>
                                            <input class="widget__catagories--input" id="check6" type="checkbox">
                                            <span class="widget__catagories--checkmark"></span>
                                        </li>
                                        <li class="widget__catagories__list">
                                            <label class="widget__catagories--label" for="check7">condo (2)</label>
                                            <input class="widget__catagories--input" id="check7" type="checkbox">
                                            <span class="widget__catagories--checkmark"></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget__list mb-40">
                                    <h2 class="widget__title mb-30">Price Filtering</h2>
                                    <div class="widget__price--filtering">
                                        <div class="price-input">
                                            <input type="number" class="input-min" value="2500">
                                            <div class="separator">-</div>
                                            <input type="number" class="input-max" min="7500" value="10000000">
                                        </div>
                                        <div class="price-slider">
                                            <div class="progress"></div>
                                        </div>
                                        <div class="range-input">
                                            <input type="range" class="range-min" min="0" max="10000"
                                                value="2500" step="100">
                                            <input type="range" class="range-max" min="0" max="10000"
                                                value="7500" step="100">
                                        </div>
                                        <button class="price__filtering--btn">Filter</button>
                                    </div>
                                </div>
                                <div class="widget__list mb-40">
                                    <div class="widget__thumbnail">
                                        <a class="widget__thumbnail--link" href="./listing-details.html"><img
                                                class="widget__thumbnail--media"
                                                src="./assets/img/other/sidebar-widget-thumb.png" alt="img">

                                            <div class="widget__thumbnail--text">
                                                <h3 class="widget__thumbnail--title">California</h3>
                                                <span class="widget__thumbnail--subtitle">13 Properties <svg
                                                        width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.4219 1.62805L17.3926 13.9757C17.3918 14.3282 17.2595 14.6594 17.0207 14.9093C16.7816 15.1594 16.4657 15.2964 16.1306 15.2957L15.0639 15.2927C14.729 15.292 14.4135 15.1531 14.1757 14.9019C13.938 14.6508 13.8 14.3105 13.801 13.9585L13.8106 6.74716L2.89752 18.1612C2.40548 18.6758 1.63343 18.6776 1.14372 18.1602L0.391553 17.3656C-0.0981567 16.8482 -0.131297 15.9959 0.360739 15.4813L11.3128 4.02645L4.39453 4.02088C4.05935 4.01986 3.74986 3.88742 3.51206 3.6362C3.27453 3.38526 3.14693 3.05595 3.14777 2.70376L3.15202 1.58437C3.15286 1.2319 3.28561 0.901459 3.52473 0.651356C3.76359 0.401531 4.07993 0.264768 4.41525 0.26565L16.1618 0.296578C16.4981 0.297602 16.8147 0.437285 17.0521 0.689475C17.2914 0.941255 17.423 1.27475 17.4219 1.62805Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="widget__list mb-40">
                                    <h2 class="widget__title mb-30">Find By Location</h2>
                                    <ul class="widget__location">
                                        <li class="widget__location--list">
                                            <label class="widget__location--label" for="check8">Australia</label>
                                            <input class="widget__catagories--input" id="check8" type="checkbox">
                                            <span class="widget__catagories--checkmark"></span>
                                        </li>
                                        <li class="widget__location--list">
                                            <label class="widget__location--label" for="check9">Swezarland </label>
                                            <input class="widget__catagories--input" id="check9" type="checkbox">
                                            <span class="widget__catagories--checkmark"></span>
                                        </li>
                                        <li class="widget__location--list">
                                            <label class="widget__location--label" for="check10">India </label>
                                            <input class="widget__catagories--input" id="check10" type="checkbox">
                                            <span class="widget__catagories--checkmark"></span>
                                        </li>
                                        <li class="widget__location--list">
                                            <label class="widget__location--label" for="check11">California</label>
                                            <input class="widget__catagories--input" id="check11" type="checkbox">
                                            <span class="widget__catagories--checkmark"></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget__list">
                                    <h2 class="widget__title mb-30">Featured Items</h2>
                                    <div class="widget__featured">
                                        <div class="widget__featured--items d-flex">
                                            <div class="widget__featured--thumb">
                                                <a class="widget__featured--thumb__link"
                                                    href="./listing-details.html"><img class="widget__featured--media"
                                                        src="./assets/img/property/featured1.jpg" alt="img"></a>
                                            </div>
                                            <div class="widget__featured--content">
                                                <h3 class="widget__featured--title"><a href="./listing-details.html">am
                                                        tempus turpis at
                                                        metus</a></h3>
                                                <span class="widget__featured--price">$2,745 /mo</span>
                                            </div>
                                        </div>
                                        <div class="widget__featured--items d-flex">
                                            <div class="widget__featured--thumb">
                                                <a class="widget__featured--thumb__link"
                                                    href="./listing-details.html"><img class="widget__featured--media"
                                                        src="./assets/img/property/featured2.jpg" alt="img"></a>
                                            </div>
                                            <div class="widget__featured--content">
                                                <h3 class="widget__featured--title"><a href="./listing-details.html">tos
                                                        lobortis des mollis ut risus</a></h3>
                                                <span class="widget__featured--price">$4,749 /mo</span>
                                            </div>
                                        </div>
                                        <div class="widget__featured--items d-flex">
                                            <div class="widget__featured--thumb">
                                                <a class="widget__featured--thumb__link"
                                                    href="./listing-details.html"><img class="widget__featured--media"
                                                        src="./assets/img/property/featured3.jpg" alt="img"></a>
                                            </div>
                                            <div class="widget__featured--content">
                                                <h3 class="widget__featured--title"><a href="./listing-details.html">ut
                                                        labore et dolore magna aliqua.</a></h3>
                                                <span class="widget__featured--price">$2,745 /mo</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="listing__page--wrapper">
                            <div class="listing__header d-flex justify-content-between align-items-center"
                                data-aos="fade-up" data-aos-duration="1200" data-aos-delay="50">

                                <div class="listing__header--right d-flex align-items-center">

                                    <ul class="nav listing__tab--btn">
                                        <li class="nav-item listing__tab--btn__list">
                                            <button class="listing__tab--btn__field " data-bs-toggle="tab"
                                                data-bs-target="#list" type="button"> <svg width="21"
                                                    height="21" viewBox="0 0 21 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_393_19356)">
                                                        <path
                                                            d="M19.9528 18.125H5.91016C5.33139 18.125 4.8623 17.6559 4.8623 17.0771C4.8623 16.4984 5.33139 16.0293 5.91016 16.0293H19.9524C20.5312 16.0293 21.0003 16.4984 21.0003 17.0771C21.0003 17.6559 20.5315 18.125 19.9528 18.125Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M19.9528 11.5479H5.91016C5.33139 11.5479 4.8623 11.0788 4.8623 10.5C4.8623 9.92124 5.33139 9.45215 5.91016 9.45215H19.9524C20.5312 9.45215 21.0003 9.92124 21.0003 10.5C21.0006 11.0788 20.5315 11.5479 19.9528 11.5479Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M19.9528 4.9707H5.91016C5.33139 4.9707 4.8623 4.50162 4.8623 3.92285C4.8623 3.34409 5.33139 2.875 5.91016 2.875H19.9524C20.5312 2.875 21.0003 3.34409 21.0003 3.92285C21.0003 4.50162 20.5315 4.9707 19.9528 4.9707Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M1.40726 5.41121C2.18448 5.41121 2.81453 4.78116 2.81453 4.00394C2.81453 3.22673 2.18448 2.59668 1.40726 2.59668C0.630054 2.59668 0 3.22673 0 4.00394C0 4.78116 0.630054 5.41121 1.40726 5.41121Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M1.40726 11.9073C2.18448 11.9073 2.81453 11.2772 2.81453 10.5C2.81453 9.72283 2.18448 9.09277 1.40726 9.09277C0.630054 9.09277 0 9.72283 0 10.5C0 11.2772 0.630054 11.9073 1.40726 11.9073Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M1.40726 18.4034C2.18448 18.4034 2.81453 17.7733 2.81453 16.9961C2.81453 16.2189 2.18448 15.5889 1.40726 15.5889C0.630054 15.5889 0 16.2189 0 16.9961C0 17.7733 0.630054 18.4034 1.40726 18.4034Z"
                                                            fill="currentColor" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_393_19356">
                                                            <rect width="21" height="21" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </button>
                                        </li>
                                        <li class="nav-item listing__tab--btn__list">
                                            <button class="listing__tab--btn__field active" data-bs-toggle="tab"
                                                data-bs-target="#grid" type="button">
                                                <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.15776 0H2.06224C0.925133 0 0 0.972462 0 2.16775V6.47278C0 7.66806 0.925133 8.64052 2.06224 8.64052H6.15776C7.29487 8.64052 8.22 7.66806 8.22 6.47278V2.16775C8.22 0.972462 7.29487 0 6.15776 0ZM6.82678 6.47278C6.82678 6.86054 6.52665 7.17603 6.15776 7.17603H2.06224C1.69335 7.17603 1.39322 6.86054 1.39322 6.47278V2.16775C1.39322 1.77998 1.69335 1.4645 2.06224 1.4645H6.15776C6.52665 1.4645 6.82678 1.77998 6.82678 2.16775V6.47278Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M16.9114 0H12.8711C11.7187 0 10.7812 0.985459 10.7812 2.19674V6.44378C10.7812 7.65506 11.7187 8.64052 12.8711 8.64052H16.9114C18.0638 8.64052 19.0013 7.65506 19.0013 6.44378V2.19674C19.0013 0.985459 18.0638 0 16.9114 0ZM17.608 6.44378C17.608 6.84754 17.2955 7.17603 16.9114 7.17603H12.8711C12.487 7.17603 12.1745 6.84754 12.1745 6.44378V2.19674C12.1745 1.79298 12.487 1.4645 12.8711 1.4645H16.9114C17.2955 1.4645 17.608 1.79298 17.608 2.19674V6.44378Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M6.15776 11.333H2.06224C0.925133 11.333 0 12.3055 0 13.5008V17.8058C0 19.0011 0.925133 19.9735 2.06224 19.9735H6.15776C7.29487 19.9735 8.22 19.0011 8.22 17.8058V13.5008C8.22 12.3055 7.29487 11.333 6.15776 11.333ZM6.82678 17.8058C6.82678 18.1935 6.52665 18.509 6.15776 18.509H2.06224C1.69335 18.509 1.39322 18.1935 1.39322 17.8058V13.5008C1.39322 13.113 1.69335 12.7975 2.06224 12.7975H6.15776C6.52665 12.7975 6.82678 13.113 6.82678 13.5008V17.8058Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M16.9114 11.333H12.8711C11.7187 11.333 10.7812 12.3185 10.7812 13.5298V17.7768C10.7812 18.9881 11.7187 19.9735 12.8711 19.9735H16.9114C18.0638 19.9735 19.0013 18.9881 19.0013 17.7768V13.5298C19.0013 12.3185 18.0638 11.333 16.9114 11.333ZM17.608 17.7768C17.608 18.1805 17.2955 18.509 16.9114 18.509H12.8711C12.487 18.509 12.1745 18.1805 12.1745 17.7768V13.5298C12.1745 13.126 12.487 12.7975 12.8711 12.7975H16.9114C17.2955 12.7975 17.608 13.126 17.608 13.5298V17.7768Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="listing__main--content">
                                <div class="tab-content">

                                    {{-- one last --}}
                                    <div class="tab-pane fade show active" id="grid">
                                        <div class="listing__featured--grid">
                                            @php
                                                $categories = App\Models\Category::paginate(2);
                                            @endphp
                                            <div class="row mb--n30">
                                                @foreach ($categories as $category)
                                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30" data-aos="fade-up"
                                                        data-aos-duration="1200" data-aos-delay="150">
                                                        <article class="featured__card">
                                                            <div class="featured__thumbnail position-relative">
                                                                <div class="media">
                                                                    <a class="featured__thumbnail--link"
                                                                        href="{{ url('tutorial/' . $category->slug) }}">
                                                                        <img src="{{ asset('public/uploads/category/' . $category->image) }}"
                                                                            alt="{{ $category->name }}"
                                                                            class="contnet_image">
                                                                    </a>
                                                                </div>


                                                            </div>
                                                            <div class="featured__content">
                                                                <div
                                                                    class="featured__content--top d-flex align-items-center justify-content-between">
                                                                    <h3 class="featured__card--title"><a
                                                                            href="{{ url('tutorial/' . $category->slug) }}">{{ $category->name }}</a></h3>
                                                                    <span class="featured__card--price">{{ $category->slug }}</span>
                                                                </div>
                                                                <p class="featured__content--desc"><svg width="11"
                                                                        height="17" viewBox="0 0 11 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z"
                                                                            fill="#F23B3B" />
                                                                    </svg>
                                                                    {{ $category->name1 }}</p>
                                                                <ul class="featured__info d-flex">
                                                                    <li class="featured__info--items">
                                                                        <span class="featured__info--icon">
                                                                            {{ $category->name8 }}
                                                                            <svg width="25" height="21"
                                                                                viewBox="0 0 25 17" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.26832 3.08576H9.70875C10.1912 3.08576 10.6311 3.28308 10.9488 3.6009C11.2667 3.91871 11.464 4.35756 11.464 4.841V6.17302H13.5385V4.841C13.5385 4.35996 13.7358 3.92185 14.0536 3.6033L14.056 3.60091C14.3745 3.28402 14.8119 3.08672 15.293 3.08672H18.7334C19.2145 3.08672 19.6533 3.28404 19.9719 3.60185C20.2912 3.92113 20.4885 4.35941 20.4885 4.84195V6.17398H21.9693V1.9459C21.9693 1.62975 21.8395 1.34125 21.6302 1.13212C21.4211 0.923008 21.1325 0.792937 20.8164 0.792937H4.18422C3.86807 0.792937 3.57882 0.922824 3.36969 1.13212C3.16058 1.34123 3.03051 1.62975 3.03051 1.9459V6.17398H4.51139V4.84195C4.51139 4.36016 4.7087 3.92205 5.02652 3.6035C5.3458 3.28422 5.78408 3.08691 6.26662 3.08691L6.26832 3.08576ZM0.792967 11.167H24.2084V7.96014C24.2084 7.686 24.0967 7.43638 23.916 7.25654C23.7362 7.07672 23.4865 6.96415 23.2124 6.96415H1.78733C1.51319 6.96415 1.26357 7.0758 1.08373 7.25654C0.903913 7.43635 0.791345 7.686 0.791345 7.96014V11.167H0.792967ZM24.2084 11.9594H0.792967V12.5607C0.792967 12.8341 0.905536 13.0828 1.08535 13.2636C1.26443 13.4443 1.51407 13.556 1.7882 13.556H23.2132C23.4787 13.556 23.7212 13.4506 23.8995 13.2811L23.9161 13.2636C24.0969 13.0828 24.2085 12.8341 24.2085 12.5607V11.9594H24.2084ZM22.7615 6.1718H23.2124C23.7028 6.1718 24.1498 6.37298 24.4738 6.69632C24.7986 7.02204 25 7.46883 25 7.95943V12.56C25 13.0521 24.7988 13.4989 24.4755 13.8231L24.451 13.8462C24.1293 14.1561 23.6919 14.3477 23.2125 14.3477H22.1602V16.3936C22.1602 16.6123 21.9828 16.7897 21.7641 16.7897H20.1603C19.9867 16.7881 19.8283 16.674 19.78 16.499L19.1811 14.3477H5.81838L5.22014 16.499C5.17187 16.674 5.01251 16.789 4.83987 16.789L3.23608 16.7907C3.0174 16.7907 2.83998 16.6132 2.83998 16.3945V14.3486H1.78764C1.29722 14.3486 0.850239 14.1474 0.52617 13.8241C0.201361 13.5007 0 13.053 0 12.561V7.96037C0 7.46995 0.201186 7.02297 0.524519 6.6989C0.850248 6.37409 1.29703 6.17273 1.78764 6.17273H2.2392V1.94465C2.2392 1.40909 2.45789 0.922494 2.8098 0.570599C3.16169 0.218707 3.649 0 4.18456 0H20.8167C21.3523 0 21.8389 0.218689 22.1908 0.570599C22.5427 0.922509 22.7614 1.4098 22.7614 1.94465V6.17273L22.7615 6.1718ZM21.3685 14.3473H20.0017L20.4604 15.997H21.3686L21.3685 14.3473ZM4.99954 14.3473H3.63342V15.997H4.54058L4.99933 14.3473H4.99954ZM18.7339 3.87771H15.2935C15.028 3.87771 14.7872 3.98622 14.6144 4.15977C14.4394 4.3348 14.3316 4.57578 14.3316 4.84036V6.17239H19.6975V4.84036C19.6975 4.5758 19.589 4.3348 19.4155 4.16053C19.2412 3.98698 18.9994 3.87846 18.7349 3.87846L18.7339 3.87771ZM9.70847 3.87771H6.26804C6.00347 3.87771 5.76248 3.98622 5.5882 4.15977C5.41392 4.33406 5.30614 4.57505 5.30614 4.83961V6.17163H10.6721V4.83961C10.6721 4.57578 10.5635 4.3348 10.3893 4.16053C10.215 3.98624 9.97399 3.87772 9.71018 3.87772L9.70847 3.87771Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <span class="featured__info--text">Սենյակներ</span>
                                                                    </li>
                                                                    <li class="featured__info--items">
                                                                        <span class="featured__info--icon">
                                                                            {{ $category->name9 }}
                                                                            <svg width="21" height="21"
                                                                                viewBox="0 0 21 21" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M2.87033 9.45423V3.54819C2.87033 2.43102 3.73649 1.51634 4.83385 1.43913C4.87698 1.43607 5.08911 1.43607 5.12932 1.43913C6.14116 1.51271 6.93955 2.35728 6.93955 3.38837V3.93384C6.93955 4.11392 7.08583 4.2602 7.2659 4.2602C7.44583 4.2602 7.59225 4.11392 7.59225 3.93384V3.38837C7.59225 2.01288 6.52708 0.886385 5.17665 0.78818C5.12376 0.784247 4.84491 0.784101 4.78809 0.788035C3.35199 0.889144 2.21777 2.08632 2.21777 3.54834V9.45438C2.21777 9.63446 2.36405 9.78074 2.54413 9.78074C2.7242 9.78074 2.87048 9.63446 2.87048 9.45438L2.87033 9.45423Z"
                                                                                    fill="black"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M5.30288 6.37703C6.11936 6.37703 8.41341 6.37703 9.2303 6.37397C9.40411 6.37397 9.5686 6.28918 9.67 6.1464C9.7714 6.00362 9.79748 5.82048 9.73978 5.65512C9.7392 5.65337 9.73847 5.65162 9.73789 5.64987C9.3215 4.51741 8.364 3.74219 7.26608 3.74219C6.16842 3.74219 5.21107 4.51697 4.79121 5.64786C4.79063 5.64975 4.78975 5.65194 4.78902 5.65398C4.73118 5.82036 4.75726 6.00451 4.85925 6.14832C4.96153 6.29197 5.12689 6.37691 5.30301 6.37691H5.30287L5.30288 6.37703ZM9.06358 5.72172L8.85815 5.72216C8.32726 5.72303 7.79618 5.72347 7.26529 5.7239L5.46409 5.72434C5.80719 4.9424 6.47944 4.39502 7.266 4.39502C8.05115 4.39502 8.72235 4.94065 9.06355 5.72169L9.06358 5.72172Z"
                                                                                    fill="black"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M15.9459 16.6811L16.6041 19.2054C16.6295 19.3032 16.6081 19.4073 16.5464 19.4872C16.4846 19.5673 16.3893 19.6141 16.288 19.6141H15.9611C15.8393 19.6141 15.7274 19.5462 15.6713 19.4378L14.4251 17.0308C14.3422 16.8708 14.145 16.8082 13.9851 16.8911C13.8251 16.974 13.7625 17.1711 13.8454 17.3311L15.0916 19.738C15.26 20.0629 15.5953 20.2668 15.961 20.2668H16.2879C16.5912 20.2668 16.8772 20.1265 17.0627 19.8865C17.248 19.6466 17.3118 19.3343 17.2355 19.0408L16.5774 16.5165C16.5319 16.3422 16.3534 16.2376 16.1792 16.2831C16.0049 16.3285 15.9003 16.507 15.9458 16.6813L15.9459 16.6811ZM3.75081 17.8145L3.43101 19.0406C3.35467 19.3342 3.41834 19.6463 3.60381 19.8864C3.78913 20.1263 4.07528 20.2666 4.37858 20.2666H4.70552C5.07121 20.2666 5.4066 20.0628 5.57488 19.7379L6.82114 17.3309C6.90404 17.1709 6.84139 16.9738 6.68142 16.8909C6.52145 16.808 6.32433 16.8707 6.24142 17.0306L4.99517 19.4376C4.93907 19.546 4.82718 19.6139 4.70538 19.6139H4.37845C4.27734 19.6139 4.18206 19.5671 4.12014 19.487C4.05836 19.4072 4.03709 19.303 4.06244 19.2052L4.38224 17.9791C4.42769 17.8048 4.32309 17.6264 4.14884 17.5809C3.97459 17.5354 3.79611 17.64 3.75065 17.8143L3.75081 17.8145Z"
                                                                                    fill="black"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M1.39897 12.6334C1.66763 15.3711 3.97615 17.51 6.78435 17.51H13.8888C16.8772 17.51 19.3002 15.0871 19.3002 12.0985V11.3C19.3002 11.1199 19.154 10.9736 18.9739 10.9736C18.7938 10.9736 18.6475 11.1199 18.6475 11.3V12.0985C18.6475 14.7265 16.5169 16.8573 13.8888 16.8573H6.78435C4.31515 16.8573 2.28516 14.9767 2.0487 12.5696C2.03107 12.3902 1.8711 12.2591 1.69189 12.2767C1.51255 12.2944 1.38142 12.4541 1.39905 12.6334L1.39897 12.6334Z"
                                                                                    fill="black"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M11.9141 9.54315V13.757C11.9141 14.2977 12.3523 14.7361 12.8931 14.7361H15.9913C16.5319 14.7361 16.9703 14.2977 16.9703 13.757V9.54315C16.9703 9.36307 16.8239 9.2168 16.644 9.2168C16.4639 9.2168 16.3176 9.36307 16.3176 9.54315V13.757C16.3176 13.9371 16.1713 14.0834 15.9913 14.0834H12.8931C12.7128 14.0834 12.5668 13.9371 12.5668 13.757V9.54315C12.5668 9.36307 12.4203 9.2168 12.2404 9.2168C12.0603 9.2168 11.9141 9.36307 11.9141 9.54315Z"
                                                                                    fill="black"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M16.6441 12.7197H12.2404C12.0603 12.7197 11.9141 12.866 11.9141 13.0461C11.9141 13.2262 12.0603 13.3724 12.2404 13.3724H16.6441C16.824 13.3724 16.9705 13.2262 16.9705 13.0461C16.9705 12.866 16.824 12.7197 16.6441 12.7197Z"
                                                                                    fill="black"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M5.13137 7.14457L4.58925 8.12975C4.50242 8.28753 4.56011 8.48611 4.7179 8.57295C4.87568 8.65993 5.07426 8.60238 5.1611 8.4446L5.70352 7.45927C5.79035 7.30149 5.73266 7.10291 5.57487 7.01607C5.41694 6.92924 5.21822 6.98664 5.13152 7.14472L5.13137 7.14457Z"
                                                                                    fill="black"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M8.83241 7.45932L9.37453 8.44464C9.46136 8.60243 9.65994 8.65998 9.81773 8.573C9.97552 8.48617 10.0331 8.28759 9.94638 8.12979L9.40426 7.14462C9.31743 6.98669 9.11885 6.92929 8.96091 7.01598C8.80312 7.10281 8.74557 7.30139 8.83255 7.45918L8.83241 7.45932Z"
                                                                                    fill="black"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M6.93945 7.30194V8.28711C6.93945 8.46719 7.08573 8.61346 7.26581 8.61346C7.44574 8.61346 7.59216 8.46719 7.59216 8.28711V7.30194C7.59216 7.12186 7.44574 6.97559 7.26581 6.97559C7.08573 6.97559 6.93945 7.12186 6.93945 7.30194Z"
                                                                                    fill="black"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M19.6243 4.06633V0.761705C19.6243 0.559628 19.5441 0.366017 19.4013 0.223206C19.2584 0.0802819 19.0647 0.000148467 18.8628 0.000148467H18.2895C18.0876 0.000148467 17.8938 0.0802782 17.751 0.223206C17.6082 0.365984 17.5279 0.559609 17.5279 0.761705V4.06633C17.5279 4.2464 17.6742 4.39268 17.8543 4.39268C18.0344 4.39268 18.1806 4.2464 18.1806 4.06633V0.761705C18.1806 0.732713 18.192 0.705177 18.2124 0.684634C18.2328 0.664237 18.2605 0.652873 18.2895 0.652873H18.8628C18.8918 0.652873 18.9193 0.664237 18.9395 0.684634C18.9599 0.705031 18.9716 0.732714 18.9716 0.761705V4.06633C18.9716 4.2464 19.1179 4.39268 19.2979 4.39268C19.478 4.39268 19.6243 4.2464 19.6243 4.06633H19.6243ZM17.061 4.06633V2.02881C17.061 1.60821 16.7201 1.26727 16.2995 1.26727H16.2951C16.2664 1.26727 16.2387 1.25576 16.2183 1.23522C16.1979 1.21482 16.1863 1.18714 16.1863 1.15844V0.761557C16.1863 0.55948 16.1061 0.365869 15.9632 0.223057C15.8204 0.0801335 15.6268 0 15.4247 0H14.8619C14.66 0 14.4662 0.0801297 14.3234 0.223057C14.1806 0.365835 14.1003 0.559461 14.1003 0.761557V1.15844C14.1003 1.18714 14.0888 1.21482 14.0683 1.23522C14.048 1.25562 14.0202 1.26727 13.9915 1.26727H13.9871C13.5665 1.26727 13.2256 1.60819 13.2256 2.02881V4.06633C13.2256 4.2464 13.3719 4.39268 13.5519 4.39268C13.732 4.39268 13.8783 4.2464 13.8783 4.06633V2.02881C13.8783 1.96849 13.9271 1.91998 13.9871 1.91998H13.9915C14.1934 1.91998 14.387 1.8397 14.53 1.69677C14.6728 1.554 14.7531 1.36037 14.7531 1.15842V0.761541C14.7531 0.732548 14.7646 0.705013 14.7848 0.68447C14.8052 0.664073 14.8329 0.652709 14.8619 0.652709H15.4247C15.4537 0.652709 15.4812 0.664073 15.5018 0.68447C15.5222 0.704867 15.5335 0.73255 15.5335 0.761541V1.15842C15.5335 1.36035 15.6138 1.55396 15.7567 1.69677C15.8995 1.8397 16.0931 1.91998 16.2951 1.91998H16.2995C16.3595 1.91998 16.4083 1.96849 16.4083 2.02852V4.06634C16.4083 4.24641 16.5546 4.39269 16.7346 4.39269C16.9147 4.39269 17.061 4.24641 17.061 4.06634L17.061 4.06633Z"
                                                                                    fill="black"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M20.6706 4.50374C20.6706 4.30167 20.5904 4.10806 20.4476 3.96524C20.3046 3.82232 20.111 3.74219 19.9091 3.74219H12.8241C12.622 3.74219 12.4284 3.82232 12.2856 3.96524C12.1426 4.10802 12.0625 4.30165 12.0625 4.50374V5.07704C12.0625 5.27897 12.1426 5.47258 12.2856 5.61554C12.4283 5.75832 12.622 5.8386 12.8241 5.8386H19.9091C20.111 5.8386 20.3046 5.75832 20.4476 5.61554C20.5903 5.47262 20.6706 5.27899 20.6706 5.07704V4.50374ZM20.0179 4.50374V5.07704C20.0179 5.10574 20.0064 5.13357 19.9862 5.15382C19.9658 5.17422 19.9381 5.18588 19.9091 5.18588H12.8241C12.7951 5.18588 12.7675 5.17437 12.747 5.15382C12.7266 5.13357 12.7152 5.10574 12.7152 5.07704V4.50374C12.7152 4.47475 12.7266 4.44722 12.747 4.42667C12.7674 4.40628 12.7951 4.39491 12.8241 4.39491H19.9091C19.9381 4.39491 19.9656 4.40628 19.9862 4.42667C20.0064 4.44707 20.0179 4.47475 20.0179 4.50374Z"
                                                                                    fill="black"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M17.7962 11.6283H19.69C19.9496 11.6283 20.1986 11.5251 20.3823 11.3415C20.5659 11.158 20.6691 10.9088 20.6691 10.6492V10.1958C20.6691 9.93607 20.5659 9.68691 20.3823 9.50352C20.1988 9.31995 19.9496 9.2168 19.69 9.2168H0.979038C0.719414 9.2168 0.470413 9.31995 0.286724 9.50352C0.10315 9.68695 0 9.9361 0 10.1958V10.6492C0 10.9088 0.10315 11.1578 0.286724 11.3415C0.470298 11.5251 0.719448 11.6283 0.979038 11.6283H11.0691C11.2492 11.6283 11.3955 11.482 11.3955 11.3019C11.3955 11.1218 11.2492 10.9756 11.0691 10.9756H0.979038C0.892497 10.9756 0.809596 10.9412 0.74826 10.8798C0.68707 10.8186 0.652686 10.7357 0.652686 10.6492V10.1958C0.652686 10.1093 0.687069 10.0261 0.74826 9.96504C0.809596 9.90385 0.892497 9.86946 0.979038 9.86946H19.69C19.7766 9.86946 19.8595 9.90385 19.9208 9.96504C19.982 10.0262 20.0164 10.1093 20.0164 10.1958V10.6492C20.0164 10.7357 19.982 10.8186 19.9208 10.8798C19.8595 10.9412 19.7766 10.9756 19.69 10.9756H17.7962C17.6161 10.9756 17.4698 11.1218 17.4698 11.3019C17.4698 11.482 17.6161 11.6283 17.7962 11.6283Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <span class="featured__info--text">Սանհանգույց</span>
                                                                    </li>
                                                                    <li class="featured__info--items">
                                                                        <span class="featured__info--icon">
                                                                            {{ $category->name7 }}
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 18 18" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M17.8417 17.2754L0.685046 0.116923C0.569917 0.00263286 0.39646 -0.0311375 0.247421 0.0301228C0.097685 0.0938982 0 0.239308 0 0.401336L0.00181414 17.593C0.00181414 17.8144 0.178622 17.994 0.400928 17.994H17.5973C17.8196 17.994 18 17.8145 18 17.593C17.9997 17.4634 17.9371 17.3485 17.8419 17.2756L17.8417 17.2754ZM0.80258 17.1915V1.36951L2.73813 3.30506L1.77607 4.26741C1.62006 4.42384 1.62006 4.67906 1.77607 4.83525C1.85366 4.91284 1.95735 4.95289 2.06019 4.95289C2.16207 4.95289 2.26491 4.91284 2.3425 4.83525L3.30595 3.87265L5.02184 5.58868L4.0602 6.55113C3.90419 6.70854 3.90419 6.96168 4.0602 7.11783C4.13779 7.19639 4.24064 7.23547 4.34433 7.23547C4.44717 7.23547 4.55002 7.19625 4.62761 7.11783L5.58996 6.15677L7.29369 7.86011L6.33135 8.82396C6.17547 8.97956 6.17547 9.23407 6.33135 9.39094C6.41061 9.46937 6.5136 9.50858 6.61547 9.50858C6.71832 9.50858 6.82116 9.46937 6.89959 9.39094L7.86194 8.42835L9.56639 10.1331L8.60351 11.0957C8.4493 11.2517 8.4493 11.5062 8.60351 11.6631C8.68277 11.7415 8.78576 11.7807 8.88944 11.7807C8.99229 11.7807 9.09248 11.7415 9.17273 11.6621L10.1339 10.7001L11.8393 12.4053L10.8773 13.3677C10.7203 13.5237 10.7203 13.7782 10.8773 13.9342C10.9549 14.0136 11.0576 14.0531 11.1611 14.0531C11.2641 14.0531 11.3658 14.0139 11.4434 13.9342L12.4063 12.9726L14.1117 14.6779L13.1491 15.6395C12.9921 15.7945 12.9921 16.0492 13.1491 16.2083C13.2267 16.2859 13.3301 16.3241 13.433 16.3241C13.535 16.3241 13.6373 16.2859 13.7154 16.2083L14.6787 15.2454L16.625 17.1917L0.80258 17.1915Z"
                                                                                    fill="black"></path>
                                                                                <path
                                                                                    d="M3.52378 9.14585C3.40949 9.02946 3.23715 8.99583 3.08726 9.05821C2.93823 9.11961 2.83984 9.26544 2.83984 9.42871V14.7534C2.83984 14.9755 3.0193 15.1552 3.2416 15.1552H8.5717C8.794 15.1552 8.97442 14.9757 8.97442 14.7534C8.97442 14.6242 8.91176 14.5098 8.81673 14.4365L3.52378 9.14585ZM3.64324 14.353L3.64142 10.3976L7.59863 14.3534L3.64324 14.353Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <span class="featured__info--text">Քմ</span>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </article>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        {{-- Categs --}}
                                        <div class="listing__featured--grid">
                                            <div class="row mb--n30">
                                                {{-- @php
                                                    $newcategory = App\Models\NewCategory::paginate(2);
                                                @endphp --}}
                                                @foreach ($newcategory as $categ)
                                                    <!-- Iterate over all categs -->
                                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30 mt-30" data-aos="fade-up"
                                                        data-aos-duration="1200" data-aos-delay="150">
                                                        <article class="featured__card">
                                                            <div class="featured__thumbnail position-relative">
                                                                <div class="media">
                                                                    <a class="featured__thumbnail--link"
                                                                        href="{{ route('listings.show', $categ->id) }}">
                                                                        <img src="{{ asset('public/uploads/category/' . $categ->image) }}"
                                                                            alt="{{ $categ->name }}"
                                                                            class="contnet_image">
                                                                    </a>
                                                                </div>


                                                            </div>
                                                            <div class="featured__content">
                                                                <div
                                                                    class="featured__content--top d-flex align-items-center justify-content-between">
                                                                    <h3 class="featured__card--title"><a
                                                                            href="{{ route('listings.show', $categ->id) }}">{{ $categ->name }}</a></h3>
                                                                    <span
                                                                        class="featured__card--price">{{ $categ->name18 }}</span>
                                                                </div>
                                                                <p class="featured__content--desc"><svg width="11"
                                                                        height="17" viewBox="0 0 11 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z"
                                                                            fill="#F23B3B" />
                                                                    </svg>
                                                                    {{ $categ->name23 }}</p>
                                                                <ul class="featured__info d-flex">
                                                                    <li class="featured__info--items">
                                                                        <span class="featured__info--icon">
                                                                            {{ $categ->name6}}
                                                                            <svg width="25" height="21"
                                                                                viewBox="0 0 25 17" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M6.26832 3.08576H9.70875C10.1912 3.08576 10.6311 3.28308 10.9488 3.6009C11.2667 3.91871 11.464 4.35756 11.464 4.841V6.17302H13.5385V4.841C13.5385 4.35996 13.7358 3.92185 14.0536 3.6033L14.056 3.60091C14.3745 3.28402 14.8119 3.08672 15.293 3.08672H18.7334C19.2145 3.08672 19.6533 3.28404 19.9719 3.60185C20.2912 3.92113 20.4885 4.35941 20.4885 4.84195V6.17398H21.9693V1.9459C21.9693 1.62975 21.8395 1.34125 21.6302 1.13212C21.4211 0.923008 21.1325 0.792937 20.8164 0.792937H4.18422C3.86807 0.792937 3.57882 0.922824 3.36969 1.13212C3.16058 1.34123 3.03051 1.62975 3.03051 1.9459V6.17398H4.51139V4.84195C4.51139 4.36016 4.7087 3.92205 5.02652 3.6035C5.3458 3.28422 5.78408 3.08691 6.26662 3.08691L6.26832 3.08576ZM0.792967 11.167H24.2084V7.96014C24.2084 7.686 24.0967 7.43638 23.916 7.25654C23.7362 7.07672 23.4865 6.96415 23.2124 6.96415H1.78733C1.51319 6.96415 1.26357 7.0758 1.08373 7.25654C0.903913 7.43635 0.791345 7.686 0.791345 7.96014V11.167H0.792967ZM24.2084 11.9594H0.792967V12.5607C0.792967 12.8341 0.905536 13.0828 1.08535 13.2636C1.26443 13.4443 1.51407 13.556 1.7882 13.556H23.2132C23.4787 13.556 23.7212 13.4506 23.8995 13.2811L23.9161 13.2636C24.0969 13.0828 24.2085 12.8341 24.2085 12.5607V11.9594H24.2084ZM22.7615 6.1718H23.2124C23.7028 6.1718 24.1498 6.37298 24.4738 6.69632C24.7986 7.02204 25 7.46883 25 7.95943V12.56C25 13.0521 24.7988 13.4989 24.4755 13.8231L24.451 13.8462C24.1293 14.1561 23.6919 14.3477 23.2125 14.3477H22.1602V16.3936C22.1602 16.6123 21.9828 16.7897 21.7641 16.7897H20.1603C19.9867 16.7881 19.8283 16.674 19.78 16.499L19.1811 14.3477H5.81838L5.22014 16.499C5.17187 16.674 5.01251 16.789 4.83987 16.789L3.23608 16.7907C3.0174 16.7907 2.83998 16.6132 2.83998 16.3945V14.3486H1.78764C1.29722 14.3486 0.850239 14.1474 0.52617 13.8241C0.201361 13.5007 0 13.053 0 12.561V7.96037C0 7.46995 0.201186 7.02297 0.524519 6.6989C0.850248 6.37409 1.29703 6.17273 1.78764 6.17273H2.2392V1.94465C2.2392 1.40909 2.45789 0.922494 2.8098 0.570599C3.16169 0.218707 3.649 0 4.18456 0H20.8167C21.3523 0 21.8389 0.218689 22.1908 0.570599C22.5427 0.922509 22.7614 1.4098 22.7614 1.94465V6.17273L22.7615 6.1718ZM21.3685 14.3473H20.0017L20.4604 15.997H21.3686L21.3685 14.3473ZM4.99954 14.3473H3.63342V15.997H4.54058L4.99933 14.3473H4.99954ZM18.7339 3.87771H15.2935C15.028 3.87771 14.7872 3.98622 14.6144 4.15977C14.4394 4.3348 14.3316 4.57578 14.3316 4.84036V6.17239H19.6975V4.84036C19.6975 4.5758 19.589 4.3348 19.4155 4.16053C19.2412 3.98698 18.9994 3.87846 18.7349 3.87846L18.7339 3.87771ZM9.70847 3.87771H6.26804C6.00347 3.87771 5.76248 3.98622 5.5882 4.15977C5.41392 4.33406 5.30614 4.57505 5.30614 4.83961V6.17163H10.6721V4.83961C10.6721 4.57578 10.5635 4.3348 10.3893 4.16053C10.215 3.98624 9.97399 3.87772 9.71018 3.87772L9.70847 3.87771Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <span class="featured__info--text">Սենյակներ</span>
                                                                    </li>
                                                                    <li class="featured__info--items">
                                                                        <span class="featured__info--icon">
                                                                            Սանհանգույցի քանակ
                                                                            <svg width="21" height="21"
                                                                                viewBox="0 0 21 21" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M2.87033 9.45423V3.54819C2.87033 2.43102 3.73649 1.51634 4.83385 1.43913C4.87698 1.43607 5.08911 1.43607 5.12932 1.43913C6.14116 1.51271 6.93955 2.35728 6.93955 3.38837V3.93384C6.93955 4.11392 7.08583 4.2602 7.2659 4.2602C7.44583 4.2602 7.59225 4.11392 7.59225 3.93384V3.38837C7.59225 2.01288 6.52708 0.886385 5.17665 0.78818C5.12376 0.784247 4.84491 0.784101 4.78809 0.788035C3.35199 0.889144 2.21777 2.08632 2.21777 3.54834V9.45438C2.21777 9.63446 2.36405 9.78074 2.54413 9.78074C2.7242 9.78074 2.87048 9.63446 2.87048 9.45438L2.87033 9.45423Z"
                                                                                    fill="black"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M5.30288 6.37703C6.11936 6.37703 8.41341 6.37703 9.2303 6.37397C9.40411 6.37397 9.5686 6.28918 9.67 6.1464C9.7714 6.00362 9.79748 5.82048 9.73978 5.65512C9.7392 5.65337 9.73847 5.65162 9.73789 5.64987C9.3215 4.51741 8.364 3.74219 7.26608 3.74219C6.16842 3.74219 5.21107 4.51697 4.79121 5.64786C4.79063 5.64975 4.78975 5.65194 4.78902 5.65398C4.73118 5.82036 4.75726 6.00451 4.85925 6.14832C4.96153 6.29197 5.12689 6.37691 5.30301 6.37691H5.30287L5.30288 6.37703ZM9.06358 5.72172L8.85815 5.72216C8.32726 5.72303 7.79618 5.72347 7.26529 5.7239L5.46409 5.72434C5.80719 4.9424 6.47944 4.39502 7.266 4.39502C8.05115 4.39502 8.72235 4.94065 9.06355 5.72169L9.06358 5.72172Z"
                                                                                    fill="black"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M15.9459 16.6811L16.6041 19.2054C16.6295 19.3032 16.6081 19.4073 16.5464 19.4872C16.4846 19.5673 16.3893 19.6141 16.288 19.6141H15.9611C15.8393 19.6141 15.7274 19.5462 15.6713 19.4378L14.4251 17.0308C14.3422 16.8708 14.145 16.8082 13.9851 16.8911C13.8251 16.974 13.7625 17.1711 13.8454 17.3311L15.0916 19.738C15.26 20.0629 15.5953 20.2668 15.961 20.2668H16.2879C16.5912 20.2668 16.8772 20.1265 17.0627 19.8865C17.248 19.6466 17.3118 19.3343 17.2355 19.0408L16.5774 16.5165C16.5319 16.3422 16.3534 16.2376 16.1792 16.2831C16.0049 16.3285 15.9003 16.507 15.9458 16.6813L15.9459 16.6811ZM3.75081 17.8145L3.43101 19.0406C3.35467 19.3342 3.41834 19.6463 3.60381 19.8864C3.78913 20.1263 4.07528 20.2666 4.37858 20.2666H4.70552C5.07121 20.2666 5.4066 20.0628 5.57488 19.7379L6.82114 17.3309C6.90404 17.1709 6.84139 16.9738 6.68142 16.8909C6.52145 16.808 6.32433 16.8707 6.24142 17.0306L4.99517 19.4376C4.93907 19.546 4.82718 19.6139 4.70538 19.6139H4.37845C4.27734 19.6139 4.18206 19.5671 4.12014 19.487C4.05836 19.4072 4.03709 19.303 4.06244 19.2052L4.38224 17.9791C4.42769 17.8048 4.32309 17.6264 4.14884 17.5809C3.97459 17.5354 3.79611 17.64 3.75065 17.8143L3.75081 17.8145Z"
                                                                                    fill="black"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M1.39897 12.6334C1.66763 15.3711 3.97615 17.51 6.78435 17.51H13.8888C16.8772 17.51 19.3002 15.0871 19.3002 12.0985V11.3C19.3002 11.1199 19.154 10.9736 18.9739 10.9736C18.7938 10.9736 18.6475 11.1199 18.6475 11.3V12.0985C18.6475 14.7265 16.5169 16.8573 13.8888 16.8573H6.78435C4.31515 16.8573 2.28516 14.9767 2.0487 12.5696C2.03107 12.3902 1.8711 12.2591 1.69189 12.2767C1.51255 12.2944 1.38142 12.4541 1.39905 12.6334L1.39897 12.6334Z"
                                                                                    fill="black"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M11.9141 9.54315V13.757C11.9141 14.2977 12.3523 14.7361 12.8931 14.7361H15.9913C16.5319 14.7361 16.9703 14.2977 16.9703 13.757V9.54315C16.9703 9.36307 16.8239 9.2168 16.644 9.2168C16.4639 9.2168 16.3176 9.36307 16.3176 9.54315V13.757C16.3176 13.9371 16.1713 14.0834 15.9913 14.0834H12.8931C12.7128 14.0834 12.5668 13.9371 12.5668 13.757V9.54315C12.5668 9.36307 12.4203 9.2168 12.2404 9.2168C12.0603 9.2168 11.9141 9.36307 11.9141 9.54315Z"
                                                                                    fill="black"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M16.6441 12.7197H12.2404C12.0603 12.7197 11.9141 12.866 11.9141 13.0461C11.9141 13.2262 12.0603 13.3724 12.2404 13.3724H16.6441C16.824 13.3724 16.9705 13.2262 16.9705 13.0461C16.9705 12.866 16.824 12.7197 16.6441 12.7197Z"
                                                                                    fill="black"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M5.13137 7.14457L4.58925 8.12975C4.50242 8.28753 4.56011 8.48611 4.7179 8.57295C4.87568 8.65993 5.07426 8.60238 5.1611 8.4446L5.70352 7.45927C5.79035 7.30149 5.73266 7.10291 5.57487 7.01607C5.41694 6.92924 5.21822 6.98664 5.13152 7.14472L5.13137 7.14457Z"
                                                                                    fill="black"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M8.83241 7.45932L9.37453 8.44464C9.46136 8.60243 9.65994 8.65998 9.81773 8.573C9.97552 8.48617 10.0331 8.28759 9.94638 8.12979L9.40426 7.14462C9.31743 6.98669 9.11885 6.92929 8.96091 7.01598C8.80312 7.10281 8.74557 7.30139 8.83255 7.45918L8.83241 7.45932Z"
                                                                                    fill="black"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M6.93945 7.30194V8.28711C6.93945 8.46719 7.08573 8.61346 7.26581 8.61346C7.44574 8.61346 7.59216 8.46719 7.59216 8.28711V7.30194C7.59216 7.12186 7.44574 6.97559 7.26581 6.97559C7.08573 6.97559 6.93945 7.12186 6.93945 7.30194Z"
                                                                                    fill="black"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M19.6243 4.06633V0.761705C19.6243 0.559628 19.5441 0.366017 19.4013 0.223206C19.2584 0.0802819 19.0647 0.000148467 18.8628 0.000148467H18.2895C18.0876 0.000148467 17.8938 0.0802782 17.751 0.223206C17.6082 0.365984 17.5279 0.559609 17.5279 0.761705V4.06633C17.5279 4.2464 17.6742 4.39268 17.8543 4.39268C18.0344 4.39268 18.1806 4.2464 18.1806 4.06633V0.761705C18.1806 0.732713 18.192 0.705177 18.2124 0.684634C18.2328 0.664237 18.2605 0.652873 18.2895 0.652873H18.8628C18.8918 0.652873 18.9193 0.664237 18.9395 0.684634C18.9599 0.705031 18.9716 0.732714 18.9716 0.761705V4.06633C18.9716 4.2464 19.1179 4.39268 19.2979 4.39268C19.478 4.39268 19.6243 4.2464 19.6243 4.06633H19.6243ZM17.061 4.06633V2.02881C17.061 1.60821 16.7201 1.26727 16.2995 1.26727H16.2951C16.2664 1.26727 16.2387 1.25576 16.2183 1.23522C16.1979 1.21482 16.1863 1.18714 16.1863 1.15844V0.761557C16.1863 0.55948 16.1061 0.365869 15.9632 0.223057C15.8204 0.0801335 15.6268 0 15.4247 0H14.8619C14.66 0 14.4662 0.0801297 14.3234 0.223057C14.1806 0.365835 14.1003 0.559461 14.1003 0.761557V1.15844C14.1003 1.18714 14.0888 1.21482 14.0683 1.23522C14.048 1.25562 14.0202 1.26727 13.9915 1.26727H13.9871C13.5665 1.26727 13.2256 1.60819 13.2256 2.02881V4.06633C13.2256 4.2464 13.3719 4.39268 13.5519 4.39268C13.732 4.39268 13.8783 4.2464 13.8783 4.06633V2.02881C13.8783 1.96849 13.9271 1.91998 13.9871 1.91998H13.9915C14.1934 1.91998 14.387 1.8397 14.53 1.69677C14.6728 1.554 14.7531 1.36037 14.7531 1.15842V0.761541C14.7531 0.732548 14.7646 0.705013 14.7848 0.68447C14.8052 0.664073 14.8329 0.652709 14.8619 0.652709H15.4247C15.4537 0.652709 15.4812 0.664073 15.5018 0.68447C15.5222 0.704867 15.5335 0.73255 15.5335 0.761541V1.15842C15.5335 1.36035 15.6138 1.55396 15.7567 1.69677C15.8995 1.8397 16.0931 1.91998 16.2951 1.91998H16.2995C16.3595 1.91998 16.4083 1.96849 16.4083 2.02852V4.06634C16.4083 4.24641 16.5546 4.39269 16.7346 4.39269C16.9147 4.39269 17.061 4.24641 17.061 4.06634L17.061 4.06633Z"
                                                                                    fill="black"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M20.6706 4.50374C20.6706 4.30167 20.5904 4.10806 20.4476 3.96524C20.3046 3.82232 20.111 3.74219 19.9091 3.74219H12.8241C12.622 3.74219 12.4284 3.82232 12.2856 3.96524C12.1426 4.10802 12.0625 4.30165 12.0625 4.50374V5.07704C12.0625 5.27897 12.1426 5.47258 12.2856 5.61554C12.4283 5.75832 12.622 5.8386 12.8241 5.8386H19.9091C20.111 5.8386 20.3046 5.75832 20.4476 5.61554C20.5903 5.47262 20.6706 5.27899 20.6706 5.07704V4.50374ZM20.0179 4.50374V5.07704C20.0179 5.10574 20.0064 5.13357 19.9862 5.15382C19.9658 5.17422 19.9381 5.18588 19.9091 5.18588H12.8241C12.7951 5.18588 12.7675 5.17437 12.747 5.15382C12.7266 5.13357 12.7152 5.10574 12.7152 5.07704V4.50374C12.7152 4.47475 12.7266 4.44722 12.747 4.42667C12.7674 4.40628 12.7951 4.39491 12.8241 4.39491H19.9091C19.9381 4.39491 19.9656 4.40628 19.9862 4.42667C20.0064 4.44707 20.0179 4.47475 20.0179 4.50374Z"
                                                                                    fill="black"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M17.7962 11.6283H19.69C19.9496 11.6283 20.1986 11.5251 20.3823 11.3415C20.5659 11.158 20.6691 10.9088 20.6691 10.6492V10.1958C20.6691 9.93607 20.5659 9.68691 20.3823 9.50352C20.1988 9.31995 19.9496 9.2168 19.69 9.2168H0.979038C0.719414 9.2168 0.470413 9.31995 0.286724 9.50352C0.10315 9.68695 0 9.9361 0 10.1958V10.6492C0 10.9088 0.10315 11.1578 0.286724 11.3415C0.470298 11.5251 0.719448 11.6283 0.979038 11.6283H11.0691C11.2492 11.6283 11.3955 11.482 11.3955 11.3019C11.3955 11.1218 11.2492 10.9756 11.0691 10.9756H0.979038C0.892497 10.9756 0.809596 10.9412 0.74826 10.8798C0.68707 10.8186 0.652686 10.7357 0.652686 10.6492V10.1958C0.652686 10.1093 0.687069 10.0261 0.74826 9.96504C0.809596 9.90385 0.892497 9.86946 0.979038 9.86946H19.69C19.7766 9.86946 19.8595 9.90385 19.9208 9.96504C19.982 10.0262 20.0164 10.1093 20.0164 10.1958V10.6492C20.0164 10.7357 19.982 10.8186 19.9208 10.8798C19.8595 10.9412 19.7766 10.9756 19.69 10.9756H17.7962C17.6161 10.9756 17.4698 11.1218 17.4698 11.3019C17.4698 11.482 17.6161 11.6283 17.7962 11.6283Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <span class="featured__info--text">Սանհանգույց</span>
                                                                    </li>
                                                                    <li class="featured__info--items">
                                                                        <span class="featured__info--icon">
                                                                            {{ $categ->name3}}
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 18 18" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M17.8417 17.2754L0.685046 0.116923C0.569917 0.00263286 0.39646 -0.0311375 0.247421 0.0301228C0.097685 0.0938982 0 0.239308 0 0.401336L0.00181414 17.593C0.00181414 17.8144 0.178622 17.994 0.400928 17.994H17.5973C17.8196 17.994 18 17.8145 18 17.593C17.9997 17.4634 17.9371 17.3485 17.8419 17.2756L17.8417 17.2754ZM0.80258 17.1915V1.36951L2.73813 3.30506L1.77607 4.26741C1.62006 4.42384 1.62006 4.67906 1.77607 4.83525C1.85366 4.91284 1.95735 4.95289 2.06019 4.95289C2.16207 4.95289 2.26491 4.91284 2.3425 4.83525L3.30595 3.87265L5.02184 5.58868L4.0602 6.55113C3.90419 6.70854 3.90419 6.96168 4.0602 7.11783C4.13779 7.19639 4.24064 7.23547 4.34433 7.23547C4.44717 7.23547 4.55002 7.19625 4.62761 7.11783L5.58996 6.15677L7.29369 7.86011L6.33135 8.82396C6.17547 8.97956 6.17547 9.23407 6.33135 9.39094C6.41061 9.46937 6.5136 9.50858 6.61547 9.50858C6.71832 9.50858 6.82116 9.46937 6.89959 9.39094L7.86194 8.42835L9.56639 10.1331L8.60351 11.0957C8.4493 11.2517 8.4493 11.5062 8.60351 11.6631C8.68277 11.7415 8.78576 11.7807 8.88944 11.7807C8.99229 11.7807 9.09248 11.7415 9.17273 11.6621L10.1339 10.7001L11.8393 12.4053L10.8773 13.3677C10.7203 13.5237 10.7203 13.7782 10.8773 13.9342C10.9549 14.0136 11.0576 14.0531 11.1611 14.0531C11.2641 14.0531 11.3658 14.0139 11.4434 13.9342L12.4063 12.9726L14.1117 14.6779L13.1491 15.6395C12.9921 15.7945 12.9921 16.0492 13.1491 16.2083C13.2267 16.2859 13.3301 16.3241 13.433 16.3241C13.535 16.3241 13.6373 16.2859 13.7154 16.2083L14.6787 15.2454L16.625 17.1917L0.80258 17.1915Z"
                                                                                    fill="black"></path>
                                                                                <path
                                                                                    d="M3.52378 9.14585C3.40949 9.02946 3.23715 8.99583 3.08726 9.05821C2.93823 9.11961 2.83984 9.26544 2.83984 9.42871V14.7534C2.83984 14.9755 3.0193 15.1552 3.2416 15.1552H8.5717C8.794 15.1552 8.97442 14.9757 8.97442 14.7534C8.97442 14.6242 8.91176 14.5098 8.81673 14.4365L3.52378 9.14585ZM3.64324 14.353L3.64142 10.3976L7.59863 14.3534L3.64324 14.353Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <span class="featured__info--text">Քմ</span>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </article>
                                                    </div>
                                                
                                                @endforeach
                                            </div>
                                        </div>

{{-- land --}}
                                        <div class="listing__featured--grid">
                                            <div class="row mb--n30">
                                                {{-- @php
                                                    $newcategory = App\Models\NewCategory::paginate(2);
                                                @endphp --}}
                                                @foreach ($land as $categ)
                                                    <!-- Iterate over all categs -->
                                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-30 mt-30" data-aos="fade-up"
                                                        data-aos-duration="1200" data-aos-delay="150">
                                                        <article class="featured__card">
                                                            <div class="featured__thumbnail position-relative">
                                                                <div class="media">
                                                                   
                                                                    <a class="featured__thumbnail--link"
                                                                        href="{{ route('land.show', ['slug' => $categ->slug]) }}">
                                                                        <img src="{{ asset('public/uploads/category/' . $categ->image) }}"
                                                                            alt="{{ $categ->name }}"
                                                                            class="contnet_image">
                                                                    </a>
                                                                </div>


                                                            </div>
                                                            <div class="featured__content">
                                                                <div
                                                                    class="featured__content--top d-flex align-items-center justify-content-between">
                                                                    <h3 class="featured__card--title"><a
                                                                            href="{{ route('land.show', ['slug' => $categ->slug]) }}">{{ $categ->name }}</a></h3>
                                                                    <span
                                                                        class="featured__card--price">{{ $categ->slug }}</span>
                                                                </div>
                                                                <p class="featured__content--desc"><svg width="11"
                                                                        height="17" viewBox="0 0 11 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z"
                                                                            fill="#F23B3B" />
                                                                    </svg>
                                                                    {{ $categ->name23 }}</p>
                                                                <ul class="featured__info d-flex">
                                                                   
                                                                   
                                                                    <li class="featured__info--items">
                                                                        <span class="featured__info--icon">
                                                                            {{ $categ->name3}}
                                                                            <svg width="19" height="20"
                                                                                viewBox="0 0 18 18" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M17.8417 17.2754L0.685046 0.116923C0.569917 0.00263286 0.39646 -0.0311375 0.247421 0.0301228C0.097685 0.0938982 0 0.239308 0 0.401336L0.00181414 17.593C0.00181414 17.8144 0.178622 17.994 0.400928 17.994H17.5973C17.8196 17.994 18 17.8145 18 17.593C17.9997 17.4634 17.9371 17.3485 17.8419 17.2756L17.8417 17.2754ZM0.80258 17.1915V1.36951L2.73813 3.30506L1.77607 4.26741C1.62006 4.42384 1.62006 4.67906 1.77607 4.83525C1.85366 4.91284 1.95735 4.95289 2.06019 4.95289C2.16207 4.95289 2.26491 4.91284 2.3425 4.83525L3.30595 3.87265L5.02184 5.58868L4.0602 6.55113C3.90419 6.70854 3.90419 6.96168 4.0602 7.11783C4.13779 7.19639 4.24064 7.23547 4.34433 7.23547C4.44717 7.23547 4.55002 7.19625 4.62761 7.11783L5.58996 6.15677L7.29369 7.86011L6.33135 8.82396C6.17547 8.97956 6.17547 9.23407 6.33135 9.39094C6.41061 9.46937 6.5136 9.50858 6.61547 9.50858C6.71832 9.50858 6.82116 9.46937 6.89959 9.39094L7.86194 8.42835L9.56639 10.1331L8.60351 11.0957C8.4493 11.2517 8.4493 11.5062 8.60351 11.6631C8.68277 11.7415 8.78576 11.7807 8.88944 11.7807C8.99229 11.7807 9.09248 11.7415 9.17273 11.6621L10.1339 10.7001L11.8393 12.4053L10.8773 13.3677C10.7203 13.5237 10.7203 13.7782 10.8773 13.9342C10.9549 14.0136 11.0576 14.0531 11.1611 14.0531C11.2641 14.0531 11.3658 14.0139 11.4434 13.9342L12.4063 12.9726L14.1117 14.6779L13.1491 15.6395C12.9921 15.7945 12.9921 16.0492 13.1491 16.2083C13.2267 16.2859 13.3301 16.3241 13.433 16.3241C13.535 16.3241 13.6373 16.2859 13.7154 16.2083L14.6787 15.2454L16.625 17.1917L0.80258 17.1915Z"
                                                                                    fill="black"></path>
                                                                                <path
                                                                                    d="M3.52378 9.14585C3.40949 9.02946 3.23715 8.99583 3.08726 9.05821C2.93823 9.11961 2.83984 9.26544 2.83984 9.42871V14.7534C2.83984 14.9755 3.0193 15.1552 3.2416 15.1552H8.5717C8.794 15.1552 8.97442 14.9757 8.97442 14.7534C8.97442 14.6242 8.91176 14.5098 8.81673 14.4365L3.52378 9.14585ZM3.64324 14.353L3.64142 10.3976L7.59863 14.3534L3.64324 14.353Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <span class="featured__info--text">Քմ</span>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </article>
                                                    </div>
                                                
                                                @endforeach
                                            </div>
                                        </div>
{{-- land end --}}
                                    </div>




                                    {{-- two last --}}

                                    <div class="tab-pane fade " id="list">


                                        <div class="listing__featured--list">
                                            {{-- @php
                                                $categories = App\Models\Category::get();
                                            @endphp --}}
                                            @foreach ($categories as $category)
                                                <article class="featured__card--list d-flex align-items-center">
                                                    <div class="listing__featured--thumbnail position-relative">
                                                        <div class="media">
                                                            <a class="featured__thumbnail--link"
                                                                href="{{ url('tutorial/' . $category->slug) }}">
                                                                <img src="{{ asset('public/uploads/category/' . $category->image) }}"
                                                                    alt="{{ $category->name }}" class="contnet_image">
                                                            </a>
                                                        </div>
                                                        
                                                       
                                                    </div>
                                                    <div class="listing__featured--content">
                                                        <div
                                                            class="featured__content--list__top d-flex justify-content-between">
                                                            <h3 class="featured__card--title"><a
                                                                    href="{{ url('tutorial/' . $category->slug) }}">{{$category->name1}}</a>
                                                            </h3>
                                                          
                                                        </div>
                                                        <span class="featured__card--price">{{$category->slug}}</span>
                                                        <ul class="listing__featured--info d-flex">
                                                            <li class="listing__featured--info__items">
                                                                <span class="listing__featured--info__icon">
                                                                    <svg width="25" height="21"
                                                                        viewBox="0 0 25 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M6.26832 3.08576H9.70875C10.1912 3.08576 10.6311 3.28308 10.9488 3.6009C11.2667 3.91871 11.464 4.35756 11.464 4.841V6.17302H13.5385V4.841C13.5385 4.35996 13.7358 3.92185 14.0536 3.6033L14.056 3.60091C14.3745 3.28402 14.8119 3.08672 15.293 3.08672H18.7334C19.2145 3.08672 19.6533 3.28404 19.9719 3.60185C20.2912 3.92113 20.4885 4.35941 20.4885 4.84195V6.17398H21.9693V1.9459C21.9693 1.62975 21.8395 1.34125 21.6302 1.13212C21.4211 0.923008 21.1325 0.792937 20.8164 0.792937H4.18422C3.86807 0.792937 3.57882 0.922824 3.36969 1.13212C3.16058 1.34123 3.03051 1.62975 3.03051 1.9459V6.17398H4.51139V4.84195C4.51139 4.36016 4.7087 3.92205 5.02652 3.6035C5.3458 3.28422 5.78408 3.08691 6.26662 3.08691L6.26832 3.08576ZM0.792967 11.167H24.2084V7.96014C24.2084 7.686 24.0967 7.43638 23.916 7.25654C23.7362 7.07672 23.4865 6.96415 23.2124 6.96415H1.78733C1.51319 6.96415 1.26357 7.0758 1.08373 7.25654C0.903913 7.43635 0.791345 7.686 0.791345 7.96014V11.167H0.792967ZM24.2084 11.9594H0.792967V12.5607C0.792967 12.8341 0.905536 13.0828 1.08535 13.2636C1.26443 13.4443 1.51407 13.556 1.7882 13.556H23.2132C23.4787 13.556 23.7212 13.4506 23.8995 13.2811L23.9161 13.2636C24.0969 13.0828 24.2085 12.8341 24.2085 12.5607V11.9594H24.2084ZM22.7615 6.1718H23.2124C23.7028 6.1718 24.1498 6.37298 24.4738 6.69632C24.7986 7.02204 25 7.46883 25 7.95943V12.56C25 13.0521 24.7988 13.4989 24.4755 13.8231L24.451 13.8462C24.1293 14.1561 23.6919 14.3477 23.2125 14.3477H22.1602V16.3936C22.1602 16.6123 21.9828 16.7897 21.7641 16.7897H20.1603C19.9867 16.7881 19.8283 16.674 19.78 16.499L19.1811 14.3477H5.81838L5.22014 16.499C5.17187 16.674 5.01251 16.789 4.83987 16.789L3.23608 16.7907C3.0174 16.7907 2.83998 16.6132 2.83998 16.3945V14.3486H1.78764C1.29722 14.3486 0.850239 14.1474 0.52617 13.8241C0.201361 13.5007 0 13.053 0 12.561V7.96037C0 7.46995 0.201186 7.02297 0.524519 6.6989C0.850248 6.37409 1.29703 6.17273 1.78764 6.17273H2.2392V1.94465C2.2392 1.40909 2.45789 0.922494 2.8098 0.570599C3.16169 0.218707 3.649 0 4.18456 0H20.8167C21.3523 0 21.8389 0.218689 22.1908 0.570599C22.5427 0.922509 22.7614 1.4098 22.7614 1.94465V6.17273L22.7615 6.1718ZM21.3685 14.3473H20.0017L20.4604 15.997H21.3686L21.3685 14.3473ZM4.99954 14.3473H3.63342V15.997H4.54058L4.99933 14.3473H4.99954ZM18.7339 3.87771H15.2935C15.028 3.87771 14.7872 3.98622 14.6144 4.15977C14.4394 4.3348 14.3316 4.57578 14.3316 4.84036V6.17239H19.6975V4.84036C19.6975 4.5758 19.589 4.3348 19.4155 4.16053C19.2412 3.98698 18.9994 3.87846 18.7349 3.87846L18.7339 3.87771ZM9.70847 3.87771H6.26804C6.00347 3.87771 5.76248 3.98622 5.5882 4.15977C5.41392 4.33406 5.30614 4.57505 5.30614 4.83961V6.17163H10.6721V4.83961C10.6721 4.57578 10.5635 4.3348 10.3893 4.16053C10.215 3.98624 9.97399 3.87772 9.71018 3.87772L9.70847 3.87771Z"
                                                                            fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                                <span class="listing__featured--info__text">             {{ $category->name8 }}</span>
                                                            </li>
                                                            <li class="listing__featured--info__items">
                                                                <span class="listing__featured--info__icon">
                                                                    <svg width="21" height="21"
                                                                        viewBox="0 0 21 21" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M2.87033 9.45423V3.54819C2.87033 2.43102 3.73649 1.51634 4.83385 1.43913C4.87698 1.43607 5.08911 1.43607 5.12932 1.43913C6.14116 1.51271 6.93955 2.35728 6.93955 3.38837V3.93384C6.93955 4.11392 7.08583 4.2602 7.2659 4.2602C7.44583 4.2602 7.59225 4.11392 7.59225 3.93384V3.38837C7.59225 2.01288 6.52708 0.886385 5.17665 0.78818C5.12376 0.784247 4.84491 0.784101 4.78809 0.788035C3.35199 0.889144 2.21777 2.08632 2.21777 3.54834V9.45438C2.21777 9.63446 2.36405 9.78074 2.54413 9.78074C2.7242 9.78074 2.87048 9.63446 2.87048 9.45438L2.87033 9.45423Z"
                                                                            fill="black"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M5.30288 6.37703C6.11936 6.37703 8.41341 6.37703 9.2303 6.37397C9.40411 6.37397 9.5686 6.28918 9.67 6.1464C9.7714 6.00362 9.79748 5.82048 9.73978 5.65512C9.7392 5.65337 9.73847 5.65162 9.73789 5.64987C9.3215 4.51741 8.364 3.74219 7.26608 3.74219C6.16842 3.74219 5.21107 4.51697 4.79121 5.64786C4.79063 5.64975 4.78975 5.65194 4.78902 5.65398C4.73118 5.82036 4.75726 6.00451 4.85925 6.14832C4.96153 6.29197 5.12689 6.37691 5.30301 6.37691H5.30287L5.30288 6.37703ZM9.06358 5.72172L8.85815 5.72216C8.32726 5.72303 7.79618 5.72347 7.26529 5.7239L5.46409 5.72434C5.80719 4.9424 6.47944 4.39502 7.266 4.39502C8.05115 4.39502 8.72235 4.94065 9.06355 5.72169L9.06358 5.72172Z"
                                                                            fill="black"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M15.9459 16.6811L16.6041 19.2054C16.6295 19.3032 16.6081 19.4073 16.5464 19.4872C16.4846 19.5673 16.3893 19.6141 16.288 19.6141H15.9611C15.8393 19.6141 15.7274 19.5462 15.6713 19.4378L14.4251 17.0308C14.3422 16.8708 14.145 16.8082 13.9851 16.8911C13.8251 16.974 13.7625 17.1711 13.8454 17.3311L15.0916 19.738C15.26 20.0629 15.5953 20.2668 15.961 20.2668H16.2879C16.5912 20.2668 16.8772 20.1265 17.0627 19.8865C17.248 19.6466 17.3118 19.3343 17.2355 19.0408L16.5774 16.5165C16.5319 16.3422 16.3534 16.2376 16.1792 16.2831C16.0049 16.3285 15.9003 16.507 15.9458 16.6813L15.9459 16.6811ZM3.75081 17.8145L3.43101 19.0406C3.35467 19.3342 3.41834 19.6463 3.60381 19.8864C3.78913 20.1263 4.07528 20.2666 4.37858 20.2666H4.70552C5.07121 20.2666 5.4066 20.0628 5.57488 19.7379L6.82114 17.3309C6.90404 17.1709 6.84139 16.9738 6.68142 16.8909C6.52145 16.808 6.32433 16.8707 6.24142 17.0306L4.99517 19.4376C4.93907 19.546 4.82718 19.6139 4.70538 19.6139H4.37845C4.27734 19.6139 4.18206 19.5671 4.12014 19.487C4.05836 19.4072 4.03709 19.303 4.06244 19.2052L4.38224 17.9791C4.42769 17.8048 4.32309 17.6264 4.14884 17.5809C3.97459 17.5354 3.79611 17.64 3.75065 17.8143L3.75081 17.8145Z"
                                                                            fill="black"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M1.39897 12.6334C1.66763 15.3711 3.97615 17.51 6.78435 17.51H13.8888C16.8772 17.51 19.3002 15.0871 19.3002 12.0985V11.3C19.3002 11.1199 19.154 10.9736 18.9739 10.9736C18.7938 10.9736 18.6475 11.1199 18.6475 11.3V12.0985C18.6475 14.7265 16.5169 16.8573 13.8888 16.8573H6.78435C4.31515 16.8573 2.28516 14.9767 2.0487 12.5696C2.03107 12.3902 1.8711 12.2591 1.69189 12.2767C1.51255 12.2944 1.38142 12.4541 1.39905 12.6334L1.39897 12.6334Z"
                                                                            fill="black"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M11.9141 9.54315V13.757C11.9141 14.2977 12.3523 14.7361 12.8931 14.7361H15.9913C16.5319 14.7361 16.9703 14.2977 16.9703 13.757V9.54315C16.9703 9.36307 16.8239 9.2168 16.644 9.2168C16.4639 9.2168 16.3176 9.36307 16.3176 9.54315V13.757C16.3176 13.9371 16.1713 14.0834 15.9913 14.0834H12.8931C12.7128 14.0834 12.5668 13.9371 12.5668 13.757V9.54315C12.5668 9.36307 12.4203 9.2168 12.2404 9.2168C12.0603 9.2168 11.9141 9.36307 11.9141 9.54315Z"
                                                                            fill="black"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M16.6441 12.7197H12.2404C12.0603 12.7197 11.9141 12.866 11.9141 13.0461C11.9141 13.2262 12.0603 13.3724 12.2404 13.3724H16.6441C16.824 13.3724 16.9705 13.2262 16.9705 13.0461C16.9705 12.866 16.824 12.7197 16.6441 12.7197Z"
                                                                            fill="black"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M5.13137 7.14457L4.58925 8.12975C4.50242 8.28753 4.56011 8.48611 4.7179 8.57295C4.87568 8.65993 5.07426 8.60238 5.1611 8.4446L5.70352 7.45927C5.79035 7.30149 5.73266 7.10291 5.57487 7.01607C5.41694 6.92924 5.21822 6.98664 5.13152 7.14472L5.13137 7.14457Z"
                                                                            fill="black"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M8.83241 7.45932L9.37453 8.44464C9.46136 8.60243 9.65994 8.65998 9.81773 8.573C9.97552 8.48617 10.0331 8.28759 9.94638 8.12979L9.40426 7.14462C9.31743 6.98669 9.11885 6.92929 8.96091 7.01598C8.80312 7.10281 8.74557 7.30139 8.83255 7.45918L8.83241 7.45932Z"
                                                                            fill="black"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M6.93945 7.30194V8.28711C6.93945 8.46719 7.08573 8.61346 7.26581 8.61346C7.44574 8.61346 7.59216 8.46719 7.59216 8.28711V7.30194C7.59216 7.12186 7.44574 6.97559 7.26581 6.97559C7.08573 6.97559 6.93945 7.12186 6.93945 7.30194Z"
                                                                            fill="black"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M19.6243 4.06633V0.761705C19.6243 0.559628 19.5441 0.366017 19.4013 0.223206C19.2584 0.0802819 19.0647 0.000148467 18.8628 0.000148467H18.2895C18.0876 0.000148467 17.8938 0.0802782 17.751 0.223206C17.6082 0.365984 17.5279 0.559609 17.5279 0.761705V4.06633C17.5279 4.2464 17.6742 4.39268 17.8543 4.39268C18.0344 4.39268 18.1806 4.2464 18.1806 4.06633V0.761705C18.1806 0.732713 18.192 0.705177 18.2124 0.684634C18.2328 0.664237 18.2605 0.652873 18.2895 0.652873H18.8628C18.8918 0.652873 18.9193 0.664237 18.9395 0.684634C18.9599 0.705031 18.9716 0.732714 18.9716 0.761705V4.06633C18.9716 4.2464 19.1179 4.39268 19.2979 4.39268C19.478 4.39268 19.6243 4.2464 19.6243 4.06633H19.6243ZM17.061 4.06633V2.02881C17.061 1.60821 16.7201 1.26727 16.2995 1.26727H16.2951C16.2664 1.26727 16.2387 1.25576 16.2183 1.23522C16.1979 1.21482 16.1863 1.18714 16.1863 1.15844V0.761557C16.1863 0.55948 16.1061 0.365869 15.9632 0.223057C15.8204 0.0801335 15.6268 0 15.4247 0H14.8619C14.66 0 14.4662 0.0801297 14.3234 0.223057C14.1806 0.365835 14.1003 0.559461 14.1003 0.761557V1.15844C14.1003 1.18714 14.0888 1.21482 14.0683 1.23522C14.048 1.25562 14.0202 1.26727 13.9915 1.26727H13.9871C13.5665 1.26727 13.2256 1.60819 13.2256 2.02881V4.06633C13.2256 4.2464 13.3719 4.39268 13.5519 4.39268C13.732 4.39268 13.8783 4.2464 13.8783 4.06633V2.02881C13.8783 1.96849 13.9271 1.91998 13.9871 1.91998H13.9915C14.1934 1.91998 14.387 1.8397 14.53 1.69677C14.6728 1.554 14.7531 1.36037 14.7531 1.15842V0.761541C14.7531 0.732548 14.7646 0.705013 14.7848 0.68447C14.8052 0.664073 14.8329 0.652709 14.8619 0.652709H15.4247C15.4537 0.652709 15.4812 0.664073 15.5018 0.68447C15.5222 0.704867 15.5335 0.73255 15.5335 0.761541V1.15842C15.5335 1.36035 15.6138 1.55396 15.7567 1.69677C15.8995 1.8397 16.0931 1.91998 16.2951 1.91998H16.2995C16.3595 1.91998 16.4083 1.96849 16.4083 2.02852V4.06634C16.4083 4.24641 16.5546 4.39269 16.7346 4.39269C16.9147 4.39269 17.061 4.24641 17.061 4.06634L17.061 4.06633Z"
                                                                            fill="black"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M20.6706 4.50374C20.6706 4.30167 20.5904 4.10806 20.4476 3.96524C20.3046 3.82232 20.111 3.74219 19.9091 3.74219H12.8241C12.622 3.74219 12.4284 3.82232 12.2856 3.96524C12.1426 4.10802 12.0625 4.30165 12.0625 4.50374V5.07704C12.0625 5.27897 12.1426 5.47258 12.2856 5.61554C12.4283 5.75832 12.622 5.8386 12.8241 5.8386H19.9091C20.111 5.8386 20.3046 5.75832 20.4476 5.61554C20.5903 5.47262 20.6706 5.27899 20.6706 5.07704V4.50374ZM20.0179 4.50374V5.07704C20.0179 5.10574 20.0064 5.13357 19.9862 5.15382C19.9658 5.17422 19.9381 5.18588 19.9091 5.18588H12.8241C12.7951 5.18588 12.7675 5.17437 12.747 5.15382C12.7266 5.13357 12.7152 5.10574 12.7152 5.07704V4.50374C12.7152 4.47475 12.7266 4.44722 12.747 4.42667C12.7674 4.40628 12.7951 4.39491 12.8241 4.39491H19.9091C19.9381 4.39491 19.9656 4.40628 19.9862 4.42667C20.0064 4.44707 20.0179 4.47475 20.0179 4.50374Z"
                                                                            fill="black"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M17.7962 11.6283H19.69C19.9496 11.6283 20.1986 11.5251 20.3823 11.3415C20.5659 11.158 20.6691 10.9088 20.6691 10.6492V10.1958C20.6691 9.93607 20.5659 9.68691 20.3823 9.50352C20.1988 9.31995 19.9496 9.2168 19.69 9.2168H0.979038C0.719414 9.2168 0.470413 9.31995 0.286724 9.50352C0.10315 9.68695 0 9.9361 0 10.1958V10.6492C0 10.9088 0.10315 11.1578 0.286724 11.3415C0.470298 11.5251 0.719448 11.6283 0.979038 11.6283H11.0691C11.2492 11.6283 11.3955 11.482 11.3955 11.3019C11.3955 11.1218 11.2492 10.9756 11.0691 10.9756H0.979038C0.892497 10.9756 0.809596 10.9412 0.74826 10.8798C0.68707 10.8186 0.652686 10.7357 0.652686 10.6492V10.1958C0.652686 10.1093 0.687069 10.0261 0.74826 9.96504C0.809596 9.90385 0.892497 9.86946 0.979038 9.86946H19.69C19.7766 9.86946 19.8595 9.90385 19.9208 9.96504C19.982 10.0262 20.0164 10.1093 20.0164 10.1958V10.6492C20.0164 10.7357 19.982 10.8186 19.9208 10.8798C19.8595 10.9412 19.7766 10.9756 19.69 10.9756H17.7962C17.6161 10.9756 17.4698 11.1218 17.4698 11.3019C17.4698 11.482 17.6161 11.6283 17.7962 11.6283Z"
                                                                            fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                                <span class="listing__featured--info__text">        {{ $category->name9 }}</span>
                                                            </li>
                                                            <li class="listing__featured--info__items">
                                                                <span class="listing__featured--info__icon">
                                                                    <svg width="19" height="20"
                                                                        viewBox="0 0 18 18" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M17.8417 17.2754L0.685046 0.116923C0.569917 0.00263286 0.39646 -0.0311375 0.247421 0.0301228C0.097685 0.0938982 0 0.239308 0 0.401336L0.00181414 17.593C0.00181414 17.8144 0.178622 17.994 0.400928 17.994H17.5973C17.8196 17.994 18 17.8145 18 17.593C17.9997 17.4634 17.9371 17.3485 17.8419 17.2756L17.8417 17.2754ZM0.80258 17.1915V1.36951L2.73813 3.30506L1.77607 4.26741C1.62006 4.42384 1.62006 4.67906 1.77607 4.83525C1.85366 4.91284 1.95735 4.95289 2.06019 4.95289C2.16207 4.95289 2.26491 4.91284 2.3425 4.83525L3.30595 3.87265L5.02184 5.58868L4.0602 6.55113C3.90419 6.70854 3.90419 6.96168 4.0602 7.11783C4.13779 7.19639 4.24064 7.23547 4.34433 7.23547C4.44717 7.23547 4.55002 7.19625 4.62761 7.11783L5.58996 6.15677L7.29369 7.86011L6.33135 8.82396C6.17547 8.97956 6.17547 9.23407 6.33135 9.39094C6.41061 9.46937 6.5136 9.50858 6.61547 9.50858C6.71832 9.50858 6.82116 9.46937 6.89959 9.39094L7.86194 8.42835L9.56639 10.1331L8.60351 11.0957C8.4493 11.2517 8.4493 11.5062 8.60351 11.6631C8.68277 11.7415 8.78576 11.7807 8.88944 11.7807C8.99229 11.7807 9.09248 11.7415 9.17273 11.6621L10.1339 10.7001L11.8393 12.4053L10.8773 13.3677C10.7203 13.5237 10.7203 13.7782 10.8773 13.9342C10.9549 14.0136 11.0576 14.0531 11.1611 14.0531C11.2641 14.0531 11.3658 14.0139 11.4434 13.9342L12.4063 12.9726L14.1117 14.6779L13.1491 15.6395C12.9921 15.7945 12.9921 16.0492 13.1491 16.2083C13.2267 16.2859 13.3301 16.3241 13.433 16.3241C13.535 16.3241 13.6373 16.2859 13.7154 16.2083L14.6787 15.2454L16.625 17.1917L0.80258 17.1915Z"
                                                                            fill="black"></path>
                                                                        <path
                                                                            d="M3.52378 9.14585C3.40949 9.02946 3.23715 8.99583 3.08726 9.05821C2.93823 9.11961 2.83984 9.26544 2.83984 9.42871V14.7534C2.83984 14.9755 3.0193 15.1552 3.2416 15.1552H8.5717C8.794 15.1552 8.97442 14.9757 8.97442 14.7534C8.97442 14.6242 8.91176 14.5098 8.81673 14.4365L3.52378 9.14585ZM3.64324 14.353L3.64142 10.3976L7.59863 14.3534L3.64324 14.353Z"
                                                                            fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                                <span class="listing__featured--info__text">    {{ $category->name7 }}</span>
                                                            </li>
                                                        </ul>
                                                        <div
                                                            class="featured__content--list__footer d-flex justify-content-between">
                                                            <p class="featured__content--desc listing__style m-0"><svg
                                                                    width="11" height="17" viewBox="0 0 11 17"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z"
                                                                        fill="#F23B3B" />
                                                                </svg>
                                                                {{ $category->name1 }}</p>
                                                            <a class="listing__details--btn"
                                                                href="{{ url('tutorial/' . $category->slug) }}"> Տեսնել ավելին</a>
                                                        </div>

                                                    </div>
                                                </article>
                                            @endforeach
                                        </div>


                                        <div class="listing__featured--list">
                                            @foreach ($newcategory as $categ)
                                                <article class="featured__card--list d-flex align-items-center">
                                                    <div class="listing__featured--thumbnail position-relative">
                                                        <div class="media">
                                                            <a class="featured__thumbnail--link"
                                                            href="{{ route('listings.show', $categ->id) }}">
                                                                <img src="{{ asset('/public/uploads/category/' . $categ->image) }}"
                                                                    alt="{{ $categ->name }}" class="contnet_image">
                                                            </a>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="listing__featured--content">
                                                        <div
                                                            class="featured__content--list__top d-flex justify-content-between">
                                                            <h3 class="featured__card--title"><a
                                                                    href="{{ route('listings.show', $categ->id) }}">{{$categ->name23}}</a>
                                                            </h3>
                                                          
                                                        </div>
                                                        <span class="featured__card--price">{{ $categ->name18 }}</span>
                                                        <ul class="listing__featured--info d-flex">
                                                            <li class="listing__featured--info__items">
                                                                <span class="listing__featured--info__icon">
                                                                    <svg width="25" height="21"
                                                                        viewBox="0 0 25 17" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M6.26832 3.08576H9.70875C10.1912 3.08576 10.6311 3.28308 10.9488 3.6009C11.2667 3.91871 11.464 4.35756 11.464 4.841V6.17302H13.5385V4.841C13.5385 4.35996 13.7358 3.92185 14.0536 3.6033L14.056 3.60091C14.3745 3.28402 14.8119 3.08672 15.293 3.08672H18.7334C19.2145 3.08672 19.6533 3.28404 19.9719 3.60185C20.2912 3.92113 20.4885 4.35941 20.4885 4.84195V6.17398H21.9693V1.9459C21.9693 1.62975 21.8395 1.34125 21.6302 1.13212C21.4211 0.923008 21.1325 0.792937 20.8164 0.792937H4.18422C3.86807 0.792937 3.57882 0.922824 3.36969 1.13212C3.16058 1.34123 3.03051 1.62975 3.03051 1.9459V6.17398H4.51139V4.84195C4.51139 4.36016 4.7087 3.92205 5.02652 3.6035C5.3458 3.28422 5.78408 3.08691 6.26662 3.08691L6.26832 3.08576ZM0.792967 11.167H24.2084V7.96014C24.2084 7.686 24.0967 7.43638 23.916 7.25654C23.7362 7.07672 23.4865 6.96415 23.2124 6.96415H1.78733C1.51319 6.96415 1.26357 7.0758 1.08373 7.25654C0.903913 7.43635 0.791345 7.686 0.791345 7.96014V11.167H0.792967ZM24.2084 11.9594H0.792967V12.5607C0.792967 12.8341 0.905536 13.0828 1.08535 13.2636C1.26443 13.4443 1.51407 13.556 1.7882 13.556H23.2132C23.4787 13.556 23.7212 13.4506 23.8995 13.2811L23.9161 13.2636C24.0969 13.0828 24.2085 12.8341 24.2085 12.5607V11.9594H24.2084ZM22.7615 6.1718H23.2124C23.7028 6.1718 24.1498 6.37298 24.4738 6.69632C24.7986 7.02204 25 7.46883 25 7.95943V12.56C25 13.0521 24.7988 13.4989 24.4755 13.8231L24.451 13.8462C24.1293 14.1561 23.6919 14.3477 23.2125 14.3477H22.1602V16.3936C22.1602 16.6123 21.9828 16.7897 21.7641 16.7897H20.1603C19.9867 16.7881 19.8283 16.674 19.78 16.499L19.1811 14.3477H5.81838L5.22014 16.499C5.17187 16.674 5.01251 16.789 4.83987 16.789L3.23608 16.7907C3.0174 16.7907 2.83998 16.6132 2.83998 16.3945V14.3486H1.78764C1.29722 14.3486 0.850239 14.1474 0.52617 13.8241C0.201361 13.5007 0 13.053 0 12.561V7.96037C0 7.46995 0.201186 7.02297 0.524519 6.6989C0.850248 6.37409 1.29703 6.17273 1.78764 6.17273H2.2392V1.94465C2.2392 1.40909 2.45789 0.922494 2.8098 0.570599C3.16169 0.218707 3.649 0 4.18456 0H20.8167C21.3523 0 21.8389 0.218689 22.1908 0.570599C22.5427 0.922509 22.7614 1.4098 22.7614 1.94465V6.17273L22.7615 6.1718ZM21.3685 14.3473H20.0017L20.4604 15.997H21.3686L21.3685 14.3473ZM4.99954 14.3473H3.63342V15.997H4.54058L4.99933 14.3473H4.99954ZM18.7339 3.87771H15.2935C15.028 3.87771 14.7872 3.98622 14.6144 4.15977C14.4394 4.3348 14.3316 4.57578 14.3316 4.84036V6.17239H19.6975V4.84036C19.6975 4.5758 19.589 4.3348 19.4155 4.16053C19.2412 3.98698 18.9994 3.87846 18.7349 3.87846L18.7339 3.87771ZM9.70847 3.87771H6.26804C6.00347 3.87771 5.76248 3.98622 5.5882 4.15977C5.41392 4.33406 5.30614 4.57505 5.30614 4.83961V6.17163H10.6721V4.83961C10.6721 4.57578 10.5635 4.3348 10.3893 4.16053C10.215 3.98624 9.97399 3.87772 9.71018 3.87772L9.70847 3.87771Z"
                                                                            fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                                <span class="listing__featured--info__text">{{ $categ->name6}}</span>
                                                            </li>
                                                            <li class="listing__featured--info__items">
                                                                <span class="listing__featured--info__icon">
                                                                    <svg width="21" height="21"
                                                                        viewBox="0 0 21 21" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M2.87033 9.45423V3.54819C2.87033 2.43102 3.73649 1.51634 4.83385 1.43913C4.87698 1.43607 5.08911 1.43607 5.12932 1.43913C6.14116 1.51271 6.93955 2.35728 6.93955 3.38837V3.93384C6.93955 4.11392 7.08583 4.2602 7.2659 4.2602C7.44583 4.2602 7.59225 4.11392 7.59225 3.93384V3.38837C7.59225 2.01288 6.52708 0.886385 5.17665 0.78818C5.12376 0.784247 4.84491 0.784101 4.78809 0.788035C3.35199 0.889144 2.21777 2.08632 2.21777 3.54834V9.45438C2.21777 9.63446 2.36405 9.78074 2.54413 9.78074C2.7242 9.78074 2.87048 9.63446 2.87048 9.45438L2.87033 9.45423Z"
                                                                            fill="black"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M5.30288 6.37703C6.11936 6.37703 8.41341 6.37703 9.2303 6.37397C9.40411 6.37397 9.5686 6.28918 9.67 6.1464C9.7714 6.00362 9.79748 5.82048 9.73978 5.65512C9.7392 5.65337 9.73847 5.65162 9.73789 5.64987C9.3215 4.51741 8.364 3.74219 7.26608 3.74219C6.16842 3.74219 5.21107 4.51697 4.79121 5.64786C4.79063 5.64975 4.78975 5.65194 4.78902 5.65398C4.73118 5.82036 4.75726 6.00451 4.85925 6.14832C4.96153 6.29197 5.12689 6.37691 5.30301 6.37691H5.30287L5.30288 6.37703ZM9.06358 5.72172L8.85815 5.72216C8.32726 5.72303 7.79618 5.72347 7.26529 5.7239L5.46409 5.72434C5.80719 4.9424 6.47944 4.39502 7.266 4.39502C8.05115 4.39502 8.72235 4.94065 9.06355 5.72169L9.06358 5.72172Z"
                                                                            fill="black"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M15.9459 16.6811L16.6041 19.2054C16.6295 19.3032 16.6081 19.4073 16.5464 19.4872C16.4846 19.5673 16.3893 19.6141 16.288 19.6141H15.9611C15.8393 19.6141 15.7274 19.5462 15.6713 19.4378L14.4251 17.0308C14.3422 16.8708 14.145 16.8082 13.9851 16.8911C13.8251 16.974 13.7625 17.1711 13.8454 17.3311L15.0916 19.738C15.26 20.0629 15.5953 20.2668 15.961 20.2668H16.2879C16.5912 20.2668 16.8772 20.1265 17.0627 19.8865C17.248 19.6466 17.3118 19.3343 17.2355 19.0408L16.5774 16.5165C16.5319 16.3422 16.3534 16.2376 16.1792 16.2831C16.0049 16.3285 15.9003 16.507 15.9458 16.6813L15.9459 16.6811ZM3.75081 17.8145L3.43101 19.0406C3.35467 19.3342 3.41834 19.6463 3.60381 19.8864C3.78913 20.1263 4.07528 20.2666 4.37858 20.2666H4.70552C5.07121 20.2666 5.4066 20.0628 5.57488 19.7379L6.82114 17.3309C6.90404 17.1709 6.84139 16.9738 6.68142 16.8909C6.52145 16.808 6.32433 16.8707 6.24142 17.0306L4.99517 19.4376C4.93907 19.546 4.82718 19.6139 4.70538 19.6139H4.37845C4.27734 19.6139 4.18206 19.5671 4.12014 19.487C4.05836 19.4072 4.03709 19.303 4.06244 19.2052L4.38224 17.9791C4.42769 17.8048 4.32309 17.6264 4.14884 17.5809C3.97459 17.5354 3.79611 17.64 3.75065 17.8143L3.75081 17.8145Z"
                                                                            fill="black"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M1.39897 12.6334C1.66763 15.3711 3.97615 17.51 6.78435 17.51H13.8888C16.8772 17.51 19.3002 15.0871 19.3002 12.0985V11.3C19.3002 11.1199 19.154 10.9736 18.9739 10.9736C18.7938 10.9736 18.6475 11.1199 18.6475 11.3V12.0985C18.6475 14.7265 16.5169 16.8573 13.8888 16.8573H6.78435C4.31515 16.8573 2.28516 14.9767 2.0487 12.5696C2.03107 12.3902 1.8711 12.2591 1.69189 12.2767C1.51255 12.2944 1.38142 12.4541 1.39905 12.6334L1.39897 12.6334Z"
                                                                            fill="black"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M11.9141 9.54315V13.757C11.9141 14.2977 12.3523 14.7361 12.8931 14.7361H15.9913C16.5319 14.7361 16.9703 14.2977 16.9703 13.757V9.54315C16.9703 9.36307 16.8239 9.2168 16.644 9.2168C16.4639 9.2168 16.3176 9.36307 16.3176 9.54315V13.757C16.3176 13.9371 16.1713 14.0834 15.9913 14.0834H12.8931C12.7128 14.0834 12.5668 13.9371 12.5668 13.757V9.54315C12.5668 9.36307 12.4203 9.2168 12.2404 9.2168C12.0603 9.2168 11.9141 9.36307 11.9141 9.54315Z"
                                                                            fill="black"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M16.6441 12.7197H12.2404C12.0603 12.7197 11.9141 12.866 11.9141 13.0461C11.9141 13.2262 12.0603 13.3724 12.2404 13.3724H16.6441C16.824 13.3724 16.9705 13.2262 16.9705 13.0461C16.9705 12.866 16.824 12.7197 16.6441 12.7197Z"
                                                                            fill="black"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M5.13137 7.14457L4.58925 8.12975C4.50242 8.28753 4.56011 8.48611 4.7179 8.57295C4.87568 8.65993 5.07426 8.60238 5.1611 8.4446L5.70352 7.45927C5.79035 7.30149 5.73266 7.10291 5.57487 7.01607C5.41694 6.92924 5.21822 6.98664 5.13152 7.14472L5.13137 7.14457Z"
                                                                            fill="black"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M8.83241 7.45932L9.37453 8.44464C9.46136 8.60243 9.65994 8.65998 9.81773 8.573C9.97552 8.48617 10.0331 8.28759 9.94638 8.12979L9.40426 7.14462C9.31743 6.98669 9.11885 6.92929 8.96091 7.01598C8.80312 7.10281 8.74557 7.30139 8.83255 7.45918L8.83241 7.45932Z"
                                                                            fill="black"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M6.93945 7.30194V8.28711C6.93945 8.46719 7.08573 8.61346 7.26581 8.61346C7.44574 8.61346 7.59216 8.46719 7.59216 8.28711V7.30194C7.59216 7.12186 7.44574 6.97559 7.26581 6.97559C7.08573 6.97559 6.93945 7.12186 6.93945 7.30194Z"
                                                                            fill="black"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M19.6243 4.06633V0.761705C19.6243 0.559628 19.5441 0.366017 19.4013 0.223206C19.2584 0.0802819 19.0647 0.000148467 18.8628 0.000148467H18.2895C18.0876 0.000148467 17.8938 0.0802782 17.751 0.223206C17.6082 0.365984 17.5279 0.559609 17.5279 0.761705V4.06633C17.5279 4.2464 17.6742 4.39268 17.8543 4.39268C18.0344 4.39268 18.1806 4.2464 18.1806 4.06633V0.761705C18.1806 0.732713 18.192 0.705177 18.2124 0.684634C18.2328 0.664237 18.2605 0.652873 18.2895 0.652873H18.8628C18.8918 0.652873 18.9193 0.664237 18.9395 0.684634C18.9599 0.705031 18.9716 0.732714 18.9716 0.761705V4.06633C18.9716 4.2464 19.1179 4.39268 19.2979 4.39268C19.478 4.39268 19.6243 4.2464 19.6243 4.06633H19.6243ZM17.061 4.06633V2.02881C17.061 1.60821 16.7201 1.26727 16.2995 1.26727H16.2951C16.2664 1.26727 16.2387 1.25576 16.2183 1.23522C16.1979 1.21482 16.1863 1.18714 16.1863 1.15844V0.761557C16.1863 0.55948 16.1061 0.365869 15.9632 0.223057C15.8204 0.0801335 15.6268 0 15.4247 0H14.8619C14.66 0 14.4662 0.0801297 14.3234 0.223057C14.1806 0.365835 14.1003 0.559461 14.1003 0.761557V1.15844C14.1003 1.18714 14.0888 1.21482 14.0683 1.23522C14.048 1.25562 14.0202 1.26727 13.9915 1.26727H13.9871C13.5665 1.26727 13.2256 1.60819 13.2256 2.02881V4.06633C13.2256 4.2464 13.3719 4.39268 13.5519 4.39268C13.732 4.39268 13.8783 4.2464 13.8783 4.06633V2.02881C13.8783 1.96849 13.9271 1.91998 13.9871 1.91998H13.9915C14.1934 1.91998 14.387 1.8397 14.53 1.69677C14.6728 1.554 14.7531 1.36037 14.7531 1.15842V0.761541C14.7531 0.732548 14.7646 0.705013 14.7848 0.68447C14.8052 0.664073 14.8329 0.652709 14.8619 0.652709H15.4247C15.4537 0.652709 15.4812 0.664073 15.5018 0.68447C15.5222 0.704867 15.5335 0.73255 15.5335 0.761541V1.15842C15.5335 1.36035 15.6138 1.55396 15.7567 1.69677C15.8995 1.8397 16.0931 1.91998 16.2951 1.91998H16.2995C16.3595 1.91998 16.4083 1.96849 16.4083 2.02852V4.06634C16.4083 4.24641 16.5546 4.39269 16.7346 4.39269C16.9147 4.39269 17.061 4.24641 17.061 4.06634L17.061 4.06633Z"
                                                                            fill="black"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M20.6706 4.50374C20.6706 4.30167 20.5904 4.10806 20.4476 3.96524C20.3046 3.82232 20.111 3.74219 19.9091 3.74219H12.8241C12.622 3.74219 12.4284 3.82232 12.2856 3.96524C12.1426 4.10802 12.0625 4.30165 12.0625 4.50374V5.07704C12.0625 5.27897 12.1426 5.47258 12.2856 5.61554C12.4283 5.75832 12.622 5.8386 12.8241 5.8386H19.9091C20.111 5.8386 20.3046 5.75832 20.4476 5.61554C20.5903 5.47262 20.6706 5.27899 20.6706 5.07704V4.50374ZM20.0179 4.50374V5.07704C20.0179 5.10574 20.0064 5.13357 19.9862 5.15382C19.9658 5.17422 19.9381 5.18588 19.9091 5.18588H12.8241C12.7951 5.18588 12.7675 5.17437 12.747 5.15382C12.7266 5.13357 12.7152 5.10574 12.7152 5.07704V4.50374C12.7152 4.47475 12.7266 4.44722 12.747 4.42667C12.7674 4.40628 12.7951 4.39491 12.8241 4.39491H19.9091C19.9381 4.39491 19.9656 4.40628 19.9862 4.42667C20.0064 4.44707 20.0179 4.47475 20.0179 4.50374Z"
                                                                            fill="black"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M17.7962 11.6283H19.69C19.9496 11.6283 20.1986 11.5251 20.3823 11.3415C20.5659 11.158 20.6691 10.9088 20.6691 10.6492V10.1958C20.6691 9.93607 20.5659 9.68691 20.3823 9.50352C20.1988 9.31995 19.9496 9.2168 19.69 9.2168H0.979038C0.719414 9.2168 0.470413 9.31995 0.286724 9.50352C0.10315 9.68695 0 9.9361 0 10.1958V10.6492C0 10.9088 0.10315 11.1578 0.286724 11.3415C0.470298 11.5251 0.719448 11.6283 0.979038 11.6283H11.0691C11.2492 11.6283 11.3955 11.482 11.3955 11.3019C11.3955 11.1218 11.2492 10.9756 11.0691 10.9756H0.979038C0.892497 10.9756 0.809596 10.9412 0.74826 10.8798C0.68707 10.8186 0.652686 10.7357 0.652686 10.6492V10.1958C0.652686 10.1093 0.687069 10.0261 0.74826 9.96504C0.809596 9.90385 0.892497 9.86946 0.979038 9.86946H19.69C19.7766 9.86946 19.8595 9.90385 19.9208 9.96504C19.982 10.0262 20.0164 10.1093 20.0164 10.1958V10.6492C20.0164 10.7357 19.982 10.8186 19.9208 10.8798C19.8595 10.9412 19.7766 10.9756 19.69 10.9756H17.7962C17.6161 10.9756 17.4698 11.1218 17.4698 11.3019C17.4698 11.482 17.6161 11.6283 17.7962 11.6283Z"
                                                                            fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                                <span class="listing__featured--info__text">{{ $categ->name7}}</span>
                                                            </li>
                                                            <li class="listing__featured--info__items">
                                                                <span class="listing__featured--info__icon">
                                                                    <svg width="19" height="20"
                                                                        viewBox="0 0 18 18" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M17.8417 17.2754L0.685046 0.116923C0.569917 0.00263286 0.39646 -0.0311375 0.247421 0.0301228C0.097685 0.0938982 0 0.239308 0 0.401336L0.00181414 17.593C0.00181414 17.8144 0.178622 17.994 0.400928 17.994H17.5973C17.8196 17.994 18 17.8145 18 17.593C17.9997 17.4634 17.9371 17.3485 17.8419 17.2756L17.8417 17.2754ZM0.80258 17.1915V1.36951L2.73813 3.30506L1.77607 4.26741C1.62006 4.42384 1.62006 4.67906 1.77607 4.83525C1.85366 4.91284 1.95735 4.95289 2.06019 4.95289C2.16207 4.95289 2.26491 4.91284 2.3425 4.83525L3.30595 3.87265L5.02184 5.58868L4.0602 6.55113C3.90419 6.70854 3.90419 6.96168 4.0602 7.11783C4.13779 7.19639 4.24064 7.23547 4.34433 7.23547C4.44717 7.23547 4.55002 7.19625 4.62761 7.11783L5.58996 6.15677L7.29369 7.86011L6.33135 8.82396C6.17547 8.97956 6.17547 9.23407 6.33135 9.39094C6.41061 9.46937 6.5136 9.50858 6.61547 9.50858C6.71832 9.50858 6.82116 9.46937 6.89959 9.39094L7.86194 8.42835L9.56639 10.1331L8.60351 11.0957C8.4493 11.2517 8.4493 11.5062 8.60351 11.6631C8.68277 11.7415 8.78576 11.7807 8.88944 11.7807C8.99229 11.7807 9.09248 11.7415 9.17273 11.6621L10.1339 10.7001L11.8393 12.4053L10.8773 13.3677C10.7203 13.5237 10.7203 13.7782 10.8773 13.9342C10.9549 14.0136 11.0576 14.0531 11.1611 14.0531C11.2641 14.0531 11.3658 14.0139 11.4434 13.9342L12.4063 12.9726L14.1117 14.6779L13.1491 15.6395C12.9921 15.7945 12.9921 16.0492 13.1491 16.2083C13.2267 16.2859 13.3301 16.3241 13.433 16.3241C13.535 16.3241 13.6373 16.2859 13.7154 16.2083L14.6787 15.2454L16.625 17.1917L0.80258 17.1915Z"
                                                                            fill="black"></path>
                                                                        <path
                                                                            d="M3.52378 9.14585C3.40949 9.02946 3.23715 8.99583 3.08726 9.05821C2.93823 9.11961 2.83984 9.26544 2.83984 9.42871V14.7534C2.83984 14.9755 3.0193 15.1552 3.2416 15.1552H8.5717C8.794 15.1552 8.97442 14.9757 8.97442 14.7534C8.97442 14.6242 8.91176 14.5098 8.81673 14.4365L3.52378 9.14585ZM3.64324 14.353L3.64142 10.3976L7.59863 14.3534L3.64324 14.353Z"
                                                                            fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                                <span class="listing__featured--info__text"> {{ $categ->name3}}</span>
                                                            </li>
                                                        </ul>
                                                        <div
                                                            class="featured__content--list__footer d-flex justify-content-between">
                                                            <p class="featured__content--desc listing__style m-0"><svg
                                                                    width="11" height="17" viewBox="0 0 11 17"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z"
                                                                        fill="#F23B3B" />
                                                                </svg>
                                                                {{ $categ->name17}}</p>
                                                            <a class="listing__details--btn"
                                                                href="{{ route('listings.show', $categ->id) }}">  Տեսնել ավելին</a>
                                                        </div>

                                                    </div>
                                                </article>
                                            @endforeach
                                        </div>

{{-- land --}}

                                        <div class="listing__featured--list">
                                            @foreach ($land as $categ)
                                                <article class="featured__card--list d-flex align-items-center">
                                                    <div class="listing__featured--thumbnail position-relative">
                                                        <div class="media">
                                                            <a class="featured__thumbnail--link"
                                                            href="{{ route('land.show', ['slug' => $categ->slug]) }}">
                                                                <img src="{{ asset('/public/uploads/category/' . $categ->image) }}"
                                                                    alt="{{ $categ->name }}" class="contnet_image">
                                                            </a>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="listing__featured--content">
                                                        <div
                                                            class="featured__content--list__top d-flex justify-content-between">
                                                            <h3 class="featured__card--title"><a
                                                                    href="{{ route('land.show', ['slug' => $categ->slug]) }}">{{$categ->name}}</a>
                                                            </h3>
                                                          
                                                        </div>
                                                        <span class="featured__card--price">{{ $categ->name1 }}</span>
                                                        <ul class="listing__featured--info d-flex">
                                                          
                                                            <li class="listing__featured--info__items">
                                                                <span class="listing__featured--info__icon">
                                                                    <svg width="19" height="20"
                                                                        viewBox="0 0 18 18" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M17.8417 17.2754L0.685046 0.116923C0.569917 0.00263286 0.39646 -0.0311375 0.247421 0.0301228C0.097685 0.0938982 0 0.239308 0 0.401336L0.00181414 17.593C0.00181414 17.8144 0.178622 17.994 0.400928 17.994H17.5973C17.8196 17.994 18 17.8145 18 17.593C17.9997 17.4634 17.9371 17.3485 17.8419 17.2756L17.8417 17.2754ZM0.80258 17.1915V1.36951L2.73813 3.30506L1.77607 4.26741C1.62006 4.42384 1.62006 4.67906 1.77607 4.83525C1.85366 4.91284 1.95735 4.95289 2.06019 4.95289C2.16207 4.95289 2.26491 4.91284 2.3425 4.83525L3.30595 3.87265L5.02184 5.58868L4.0602 6.55113C3.90419 6.70854 3.90419 6.96168 4.0602 7.11783C4.13779 7.19639 4.24064 7.23547 4.34433 7.23547C4.44717 7.23547 4.55002 7.19625 4.62761 7.11783L5.58996 6.15677L7.29369 7.86011L6.33135 8.82396C6.17547 8.97956 6.17547 9.23407 6.33135 9.39094C6.41061 9.46937 6.5136 9.50858 6.61547 9.50858C6.71832 9.50858 6.82116 9.46937 6.89959 9.39094L7.86194 8.42835L9.56639 10.1331L8.60351 11.0957C8.4493 11.2517 8.4493 11.5062 8.60351 11.6631C8.68277 11.7415 8.78576 11.7807 8.88944 11.7807C8.99229 11.7807 9.09248 11.7415 9.17273 11.6621L10.1339 10.7001L11.8393 12.4053L10.8773 13.3677C10.7203 13.5237 10.7203 13.7782 10.8773 13.9342C10.9549 14.0136 11.0576 14.0531 11.1611 14.0531C11.2641 14.0531 11.3658 14.0139 11.4434 13.9342L12.4063 12.9726L14.1117 14.6779L13.1491 15.6395C12.9921 15.7945 12.9921 16.0492 13.1491 16.2083C13.2267 16.2859 13.3301 16.3241 13.433 16.3241C13.535 16.3241 13.6373 16.2859 13.7154 16.2083L14.6787 15.2454L16.625 17.1917L0.80258 17.1915Z"
                                                                            fill="black"></path>
                                                                        <path
                                                                            d="M3.52378 9.14585C3.40949 9.02946 3.23715 8.99583 3.08726 9.05821C2.93823 9.11961 2.83984 9.26544 2.83984 9.42871V14.7534C2.83984 14.9755 3.0193 15.1552 3.2416 15.1552H8.5717C8.794 15.1552 8.97442 14.9757 8.97442 14.7534C8.97442 14.6242 8.91176 14.5098 8.81673 14.4365L3.52378 9.14585ZM3.64324 14.353L3.64142 10.3976L7.59863 14.3534L3.64324 14.353Z"
                                                                            fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                                <span class="listing__featured--info__text"> {{ $categ->name3}}</span>
                                                            </li>
                                                        </ul>
                                                        <div
                                                            class="featured__content--list__footer d-flex justify-content-between">
                                                            <p class="featured__content--desc listing__style m-0"><svg
                                                                    width="11" height="17" viewBox="0 0 11 17"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5.48287 0C2.45013 0 0 2.4501 0 5.48288C0 5.85982 0.0343013 6.21958 0.102785 6.57945C0.514031 9.69783 4.42055 11.9767 5.51712 16.4144C6.5966 12.0452 11 8.824 11 5.48288H10.9657C10.9657 2.45013 8.51548 0 5.48282 0H5.48287ZM5.48287 2.17592C7.21338 2.17592 8.61839 3.58097 8.61839 5.31144C8.61839 7.04191 7.21335 8.44696 5.48287 8.44696C3.7524 8.44696 2.34736 7.04191 2.34736 5.31144C2.34736 3.58097 3.75228 2.17592 5.48287 2.17592Z"
                                                                        fill="#F23B3B" />
                                                                </svg>
                                                                {{ $categ->name}}</p>
                                                            <a class="listing__details--btn"
                                                                href="{{ route('land.show', ['slug' => $categ->slug]) }}">  Տեսնել ավելին</a>
                                                        </div>

                                                    </div>
                                                </article>
                                            @endforeach
                                        </div>

{{-- land end --}}
                                    </div>







                                </div>
                                <div class="page__pagination--area">
                                    {{-- <ul class="page__pagination--wrapper d-flex justify-content-center">
                                        <li class="page__pagination--list"><a class="page__pagination--link"
                                                href="#"><svg width="12" height="11" viewBox="0 0 12 11"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 5.12695C5.73633 5.39062 5.73633 5.83008 6 6.12305L9.98438 10.1074C10.2773 10.3711 10.7168 10.3711 10.9805 10.1074L11.6543 9.43359C11.918 9.14062 11.918 8.70117 11.6543 8.4375L8.8125 5.5957L11.6543 2.7832C11.918 2.51953 11.918 2.08008 11.6543 1.78711L10.9805 1.14258C10.7168 0.849609 10.2773 0.849609 9.98437 1.14258L6 5.12695ZM0.375 6.12305L4.35938 10.1074C4.65234 10.3711 5.0918 10.3711 5.35547 10.1074L6.0293 9.43359C6.29297 9.16992 6.29297 8.70117 6.0293 8.4375L3.1875 5.625L6.0293 2.7832C6.29297 2.51953 6.29297 2.08008 6.0293 1.78711L5.35547 1.14258C5.0918 0.849609 4.62305 0.849609 4.35937 1.14258L0.375 5.12695C0.111328 5.39063 0.111328 5.83008 0.375 6.12305Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </a></li>
                                        <li class="page__pagination--list"><a class="page__pagination--link"
                                                href="#">1
                                            </a></li>
                                        <li class="page__pagination--list"><a class="page__pagination--link active"
                                                href="#">2
                                            </a></li>
                                        <li class="page__pagination--list"><a class="page__pagination--link"
                                                href="#">3
                                            </a></li>
                                        <li class="page__pagination--list"><a class="page__pagination--link"
                                                href="#"><svg width="12" height="11" viewBox="0 0 12 11"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 5.87305C6.26367 5.60938 6.26367 5.16992 6 4.87695L2.01562 0.892578C1.72266 0.628906 1.2832 0.628906 1.01953 0.892578L0.345703 1.56641C0.0820312 1.85938 0.0820312 2.29883 0.345703 2.5625L3.1875 5.4043L0.345703 8.2168C0.0820312 8.48047 0.0820312 8.91992 0.345703 9.21289L1.01953 9.85742C1.2832 10.1504 1.72266 10.1504 2.01562 9.85742L6 5.87305ZM11.625 4.87695L7.64062 0.892578C7.34766 0.628906 6.9082 0.628906 6.64453 0.892578L5.9707 1.56641C5.70703 1.83008 5.70703 2.29883 5.9707 2.5625L8.8125 5.375L5.9707 8.2168C5.70703 8.48047 5.70703 8.91992 5.9707 9.21289L6.64453 9.85742C6.9082 10.1504 7.37695 10.1504 7.64062 9.85742L11.625 5.87305C11.8887 5.60938 11.8887 5.16992 11.625 4.87695Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </a></li>
                                    </ul> --}}
                                    {{ $categories->links() }}

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="social__media--area bg__style" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
            <ul class="social__media--wrapper d-flex">
                <li class="social__media--list"><a class="social__media--link" target="_blank"
                        href="https://www.facebook.com/"> <svg width="9" height="18" viewBox="0 0 7 14"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.52148 5.07812L6.29297 7.3125H4.49023V13.8125H1.82422V7.3125H0.478516V5.07812H1.79883V3.73242C1.79883 3.27539 1.84115 2.86914 1.92578 2.51367C2.02734 2.14128 2.19661 1.83659 2.43359 1.59961C2.67057 1.3457 2.9668 1.15104 3.32227 1.01562C3.69466 0.880208 4.15169 0.8125 4.69336 0.8125H6.49609V3.04688H5.37891C5.15885 3.04688 4.98958 3.07227 4.87109 3.12305C4.7526 3.1569 4.65951 3.21615 4.5918 3.30078C4.54102 3.36849 4.50716 3.46159 4.49023 3.58008C4.47331 3.68164 4.46484 3.80859 4.46484 3.96094V5.07812H6.49609H6.52148Z"
                                fill="currentColor" fill-opacity="1" />
                        </svg>
                        <span>Facebook</span>
                    </a>
                </li>
                <li class="social__media--list"><a class="social__media--link" target="_blank"
                        href="https://twitter.com"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                            <path
                                d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z">
                            </path>
                        </svg>
                        <span>Twitter</span>
                    </a>
                </li>
                <li class="social__media--list"><a class="social__media--link" target="_blank"
                        href="https://www.instagram.com"> <svg width="17" height="17" viewBox="0 0 17 17"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.27881 4.20703C10.4937 4.20703 12.3218 6.03516 12.3218 8.25C12.3218 10.5 10.4937 12.293 8.27881 12.293C6.02881 12.293 4.23584 10.5 4.23584 8.25C4.23584 6.03516 6.02881 4.20703 8.27881 4.20703ZM8.27881 10.8867C9.72021 10.8867 10.8804 9.72656 10.8804 8.25C10.8804 6.80859 9.72021 5.64844 8.27881 5.64844C6.80225 5.64844 5.64209 6.80859 5.64209 8.25C5.64209 9.72656 6.8374 10.8867 8.27881 10.8867ZM13.4116 4.06641C13.4116 4.59375 12.9897 5.01562 12.4624 5.01562C11.9351 5.01562 11.5132 4.59375 11.5132 4.06641C11.5132 3.53906 11.9351 3.11719 12.4624 3.11719C12.9897 3.11719 13.4116 3.53906 13.4116 4.06641ZM16.0835 5.01562C16.1538 6.31641 16.1538 10.2188 16.0835 11.5195C16.0132 12.7852 15.7319 13.875 14.8179 14.8242C13.9038 15.7383 12.7788 16.0195 11.5132 16.0898C10.2124 16.1602 6.31006 16.1602 5.00928 16.0898C3.74365 16.0195 2.65381 15.7383 1.70459 14.8242C0.790527 13.875 0.509277 12.7852 0.438965 11.5195C0.368652 10.2188 0.368652 6.31641 0.438965 5.01562C0.509277 3.75 0.790527 2.625 1.70459 1.71094C2.65381 0.796875 3.74365 0.515625 5.00928 0.445312C6.31006 0.375 10.2124 0.375 11.5132 0.445312C12.7788 0.515625 13.9038 0.796875 14.8179 1.71094C15.7319 2.625 16.0132 3.75 16.0835 5.01562ZM14.396 12.8906C14.8179 11.8711 14.7124 9.41016 14.7124 8.25C14.7124 7.125 14.8179 4.66406 14.396 3.60938C14.1147 2.94141 13.5874 2.37891 12.9194 2.13281C11.8647 1.71094 9.40381 1.81641 8.27881 1.81641C7.11865 1.81641 4.65771 1.71094 3.63818 2.13281C2.93506 2.41406 2.40771 2.94141 2.12646 3.60938C1.70459 4.66406 1.81006 7.125 1.81006 8.25C1.81006 9.41016 1.70459 11.8711 2.12646 12.8906C2.40771 13.5938 2.93506 14.1211 3.63818 14.4023C4.65771 14.8242 7.11865 14.7188 8.27881 14.7188C9.40381 14.7188 11.8647 14.8242 12.9194 14.4023C13.5874 14.1211 14.1499 13.5938 14.396 12.8906Z"
                                fill="currentColor" />
                        </svg>
                        <span>Instagram</span>
                    </a>
                </li>
                <li class="social__media--list"><a class="social__media--link" target="_blank"
                        href="https://www.youtube.com"> <svg width="21" height="15" viewBox="0 0 21 15"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.5673 2.30071C20.3252 1.40109 19.616 0.691976 18.7165 0.449728C17.0732 0 10.4998 0 10.4998 0C10.4998 0 3.92659 0 2.28325 0.432585C1.40109 0.674672 0.674512 1.40125 0.432425 2.30071C0 3.94389 0 7.3517 0 7.3517C0 7.3517 0 10.7767 0.432425 12.4027C0.674672 13.3021 1.38379 14.0114 2.28341 14.2537C3.94389 14.7034 10.5 14.7034 10.5 14.7034C10.5 14.7034 17.0732 14.7034 18.7165 14.2708C19.6161 14.0287 20.3252 13.3195 20.5675 12.42C20.9999 10.7767 20.9999 7.369 20.9999 7.369C20.9999 7.369 21.0172 3.94389 20.5673 2.30071Z"
                                fill="currentColor" />
                            <path d="M8.40625 10.4996L13.8724 7.35138L8.40625 4.20312V10.4996Z" fill="white" />
                        </svg>
                        <span>Youtube</span>
                    </a>
                </li>
                <li class="social__media--list"><a class="social__media--link" target="_blank"
                        href="https://www.whatsapp.com"> <svg width="22" height="22" viewBox="0 0 22 22"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.5 10C18.5 5.71875 15.0312 2.25 10.75 2.25C6.46875 2.25 3 5.71875 3 10C3 13.3125 5.03125 16.0938 7.90625 17.2188C7.84375 16.625 7.78125 15.6875 7.9375 15C8.09375 14.4062 8.84375 11.1562 8.84375 11.1562C8.84375 11.1562 8.625 10.6875 8.625 10C8.625 8.9375 9.25 8.125 10.0312 8.125C10.6875 8.125 11 8.625 11 9.21875C11 9.875 10.5625 10.875 10.3438 11.8125C10.1875 12.5625 10.75 13.1875 11.5 13.1875C12.875 13.1875 13.9375 11.75 13.9375 9.65625C13.9375 7.78125 12.5938 6.5 10.7188 6.5C8.5 6.5 7.21875 8.15625 7.21875 9.84375C7.21875 10.5312 7.46875 11.25 7.78125 11.625C7.84375 11.6875 7.84375 11.7812 7.84375 11.8438C7.78125 12.0938 7.625 12.625 7.625 12.7188C7.59375 12.875 7.5 12.9062 7.34375 12.8438C6.375 12.375 5.78125 10.9688 5.78125 9.8125C5.78125 7.375 7.5625 5.125 10.9062 5.125C13.5938 5.125 15.6875 7.0625 15.6875 9.625C15.6875 12.2812 14 14.4375 11.6562 14.4375C10.875 14.4375 10.125 14.0312 9.875 13.5312C9.875 13.5312 9.5 15.0312 9.40625 15.375C9.21875 16.0625 8.75 16.9062 8.4375 17.4062C9.15625 17.6562 9.9375 17.75 10.75 17.75C15.0312 17.75 18.5 14.2812 18.5 10Z"
                                fill="#FFB966" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M16.5 22H5.5C4.04133 21.9999 2.64242 21.4205 1.61098 20.389C0.579547 19.3576 6.38127e-05 17.9587 0 16.5L0 5.5C6.38127e-05 4.04133 0.579547 2.64242 1.61098 1.61098C2.64242 0.579547 4.04133 6.38127e-05 5.5 0L16.5 0C17.9587 0 19.3576 0.579463 20.3891 1.61091C21.4205 2.64236 22 4.04131 22 5.5V16.5C22 17.9587 21.4205 19.3576 20.3891 20.3891C19.3576 21.4205 17.9587 22 16.5 22Z"
                                fill="#00D264" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.3125 6.1875H16.5C17.2931 6.18745 18.0559 5.88282 18.6309 5.33652C19.2059 4.79021 19.5491 4.04396 19.5897 3.25188C19.6303 2.45979 19.3652 1.68237 18.849 1.08015C18.3329 0.47794 17.6052 0.0969313 16.8163 0.0158125C16.7111 0.00996875 16.6069 0 16.5 0H5.5C4.04133 6.38127e-05 2.64242 0.579547 1.61098 1.61098C0.579547 2.64242 6.38127e-05 4.04133 0 5.5L0 16.5C6.3815e-05 13.765 1.08658 11.142 3.02053 9.20803C4.95449 7.27408 7.57748 6.18757 10.3125 6.1875Z"
                                fill="#00EB78" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M16.5 11C15.4122 11 14.3488 11.3226 13.4444 11.9269C12.5399 12.5313 11.8349 13.3902 11.4187 14.3952C11.0024 15.4002 10.8935 16.5061 11.1057 17.573C11.3179 18.6399 11.8417 19.6199 12.6109 20.3891C13.3801 21.1583 14.3601 21.6821 15.427 21.8943C16.4939 22.1065 17.5998 21.9976 18.6048 21.5813C19.6098 21.1651 20.4687 20.4601 21.0731 19.5556C21.6774 18.6512 22 17.5878 22 16.5V5.5C22 6.95869 21.4205 8.35764 20.3891 9.38909C19.3576 10.4205 17.9587 11 16.5 11Z"
                                fill="#00B950" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.45011 16.1883C7.54161 16.1623 7.63751 16.1555 7.73176 16.1684C7.82601 16.1813 7.91656 16.2136 7.99771 16.2632C9.36447 17.0775 10.9817 17.3644 12.5451 17.0698C14.1086 16.7753 15.5105 15.9197 16.4874 14.6639C17.4642 13.4082 17.9485 11.8387 17.8492 10.2509C17.75 8.66304 17.074 7.16616 15.9485 6.04178C14.8229 4.91741 13.3253 4.24302 11.7373 4.14547C10.1494 4.04791 8.58047 4.53391 7.32574 5.51206C6.071 6.4902 5.21688 7.89308 4.92402 9.45685C4.63116 11.0206 4.91974 12.6375 5.73549 14.0034C5.78495 14.0843 5.81709 14.1746 5.82987 14.2686C5.84265 14.3625 5.8358 14.4581 5.80974 14.5493C5.61827 15.2268 5.15627 16.8438 5.15627 16.8438C5.15627 16.8438 6.77327 16.3818 7.45011 16.1883ZM4.54405 14.6899C3.56124 13.0332 3.21704 11.0746 3.57607 9.1821C3.9351 7.28956 4.97267 5.59318 6.49394 4.41151C8.01522 3.22984 9.91554 2.64416 11.8381 2.76447C13.7606 2.88477 15.5731 3.70277 16.9352 5.06487C18.2973 6.42697 19.1153 8.23946 19.2356 10.162C19.3559 12.0845 18.7702 13.9849 17.5886 15.5061C16.4069 17.0274 14.7105 18.065 12.818 18.424C10.9254 18.783 8.96692 18.4388 7.31021 17.456C7.31021 17.456 5.11811 18.0823 4.03255 18.3927C3.97358 18.4095 3.91119 18.4102 3.85185 18.3948C3.7925 18.3794 3.73835 18.3484 3.69499 18.3051C3.65164 18.2617 3.62065 18.2076 3.60524 18.1482C3.58983 18.0889 3.59055 18.0265 3.60733 17.9675C3.91774 16.882 4.54405 14.6899 4.54405 14.6899Z"
                                fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.55649 8.5207C7.66343 10.0599 8.32036 11.5094 9.40733 12.6044C10.4943 13.6995 11.9388 14.3671 13.4772 14.4855H13.4779C13.7235 14.5045 13.9704 14.4701 14.2014 14.3846C14.4325 14.2992 14.6423 14.1647 14.8165 13.9905L15.0564 13.7505C15.1697 13.6372 15.2334 13.4835 15.2335 13.3232V12.8138C15.2334 12.7499 15.2157 12.6873 15.1821 12.633C15.1485 12.5787 15.1005 12.5347 15.0434 12.5061C14.6814 12.3253 13.8956 11.9324 13.5106 11.7399C13.446 11.7076 13.3729 11.6965 13.3017 11.708C13.2304 11.7195 13.1646 11.7532 13.1135 11.8042C12.9217 11.996 12.6185 12.2995 12.4467 12.4711C12.4067 12.5111 12.3574 12.5406 12.3033 12.557C12.2491 12.5735 12.1918 12.5763 12.1363 12.5653L12.1332 12.5646C11.4677 12.4315 10.8565 12.1044 10.3766 11.6245C9.89667 11.1446 9.56956 10.5334 9.43646 9.86786L9.43577 9.86477C9.42474 9.80927 9.42756 9.75191 9.44399 9.69777C9.46042 9.64362 9.48995 9.59437 9.52996 9.55436C9.70149 9.38248 10.005 9.0793 10.1968 8.88748C10.2478 8.83641 10.2815 8.77059 10.293 8.69934C10.3046 8.62809 10.2934 8.55501 10.2611 8.49045C10.0686 8.10545 9.67571 7.31964 9.49489 6.95767C9.46631 6.90056 9.42239 6.85252 9.36805 6.81895C9.31371 6.78538 9.25111 6.76759 9.18724 6.76758H8.75411C8.65126 6.76761 8.54957 6.78923 8.45559 6.83103C8.36162 6.87284 8.27747 6.9339 8.20858 7.01027C8.13949 7.08727 8.06008 7.17527 7.98033 7.26395C7.83024 7.43051 7.71521 7.62558 7.6421 7.83754C7.56899 8.04949 7.53929 8.274 7.55477 8.49767C7.55546 8.50523 7.5558 8.5128 7.55649 8.5207Z"
                                fill="white" />
                        </svg>
                        <span>Whatsapp</span>
                    </a>
                </li>
                <li class="social__media--list"><a class="social__media--link" target="_blank"
                        href="https://www.pinterest.com"> <svg width="14" height="16" viewBox="0 0 11 13"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.502 4.56055C10.502 5.28841 10.4004 5.96549 10.1973 6.5918C10.0111 7.2181 9.74023 7.75977 9.38477 8.2168C9.0293 8.6569 8.60612 9.01237 8.11523 9.2832C7.62435 9.53711 7.08268 9.6556 6.49023 9.63867C6.28711 9.6556 6.08398 9.63867 5.88086 9.58789C5.69466 9.52018 5.51693 9.45247 5.34766 9.38477C5.19531 9.30013 5.0599 9.19857 4.94141 9.08008C4.82292 8.96159 4.72982 8.85156 4.66211 8.75C4.56055 9.15625 4.47591 9.49479 4.4082 9.76562C4.34049 10.0365 4.28125 10.248 4.23047 10.4004C4.19661 10.5358 4.17122 10.6374 4.1543 10.7051C4.1543 10.7559 4.1543 10.7728 4.1543 10.7559C4.10352 10.9082 4.05273 11.0521 4.00195 11.1875C3.95117 11.3229 3.89193 11.4668 3.82422 11.6191C3.75651 11.7546 3.68034 11.8815 3.5957 12C3.52799 12.1185 3.46029 12.237 3.39258 12.3555C3.18945 12.4909 3.02865 12.5501 2.91016 12.5332C2.80859 12.5332 2.72396 12.4909 2.65625 12.4062C2.60547 12.3216 2.57161 12.237 2.55469 12.1523C2.53776 12.0846 2.5293 12.0423 2.5293 12.0254C2.51237 11.9069 2.50391 11.7799 2.50391 11.6445C2.50391 11.4922 2.50391 11.3483 2.50391 11.2129C2.52083 11.0605 2.53776 10.9082 2.55469 10.7559C2.58854 10.6035 2.6224 10.4681 2.65625 10.3496C2.65625 10.3327 2.66471 10.2819 2.68164 10.1973C2.71549 10.0957 2.76628 9.90104 2.83398 9.61328C2.90169 9.30859 2.99479 8.89388 3.11328 8.36914C3.23177 7.8444 3.39258 7.15039 3.5957 6.28711C3.54492 6.18555 3.5026 6.05859 3.46875 5.90625C3.4349 5.75391 3.40951 5.62695 3.39258 5.52539C3.37565 5.4069 3.36719 5.30534 3.36719 5.2207C3.36719 5.13607 3.36719 5.10221 3.36719 5.11914C3.36719 4.83138 3.40104 4.57747 3.46875 4.35742C3.55339 4.12044 3.65495 3.91732 3.77344 3.74805C3.90885 3.56185 4.0612 3.42643 4.23047 3.3418C4.41667 3.24023 4.60286 3.18099 4.78906 3.16406C4.95833 3.18099 5.10221 3.21484 5.2207 3.26562C5.35612 3.31641 5.46615 3.40104 5.55078 3.51953C5.63542 3.63802 5.69466 3.76497 5.72852 3.90039C5.7793 4.01888 5.80469 4.16276 5.80469 4.33203C5.80469 4.48438 5.7793 4.67057 5.72852 4.89062C5.67773 5.09375 5.61849 5.30534 5.55078 5.52539C5.48307 5.74544 5.4069 5.98242 5.32227 6.23633C5.25456 6.47331 5.19531 6.70182 5.14453 6.92188C5.09375 7.14193 5.08529 7.33659 5.11914 7.50586C5.16992 7.6582 5.24609 7.81055 5.34766 7.96289C5.46615 8.09831 5.61003 8.19987 5.7793 8.26758C5.94857 8.33529 6.1263 8.3776 6.3125 8.39453C6.66797 8.3776 6.98958 8.26758 7.27734 8.06445C7.5651 7.86133 7.81055 7.57357 8.01367 7.20117C8.23372 6.82878 8.39453 6.41406 8.49609 5.95703C8.61458 5.48307 8.67383 4.9668 8.67383 4.4082C8.67383 4.01888 8.60612 3.64648 8.4707 3.29102C8.33529 2.93555 8.13216 2.63932 7.86133 2.40234C7.60742 2.14844 7.28581 1.94531 6.89648 1.79297C6.52409 1.64062 6.08398 1.57292 5.57617 1.58984C5.01758 1.57292 4.50977 1.66602 4.05273 1.86914C3.61263 2.07227 3.23177 2.33464 2.91016 2.65625C2.58854 2.97786 2.3431 3.35872 2.17383 3.79883C2.00456 4.22201 1.91992 4.66211 1.91992 5.11914C1.91992 5.30534 1.92839 5.46615 1.94531 5.60156C1.97917 5.72005 2.01302 5.84701 2.04688 5.98242C2.09766 6.10091 2.14844 6.21094 2.19922 6.3125C2.26693 6.39714 2.3431 6.4987 2.42773 6.61719C2.46159 6.63411 2.48698 6.66797 2.50391 6.71875C2.52083 6.7526 2.5293 6.77799 2.5293 6.79492C2.54622 6.81185 2.55469 6.8457 2.55469 6.89648C2.55469 6.93034 2.54622 6.96419 2.5293 6.99805C2.51237 7.04883 2.49544 7.09961 2.47852 7.15039C2.47852 7.18424 2.47005 7.23503 2.45312 7.30273C2.4362 7.37044 2.41927 7.42969 2.40234 7.48047C2.38542 7.51432 2.37695 7.55664 2.37695 7.60742C2.36003 7.64128 2.33464 7.68359 2.30078 7.73438C2.28385 7.76823 2.25846 7.79362 2.22461 7.81055C2.19076 7.81055 2.1569 7.81901 2.12305 7.83594C2.08919 7.83594 2.04688 7.81901 1.99609 7.78516C1.74219 7.68359 1.51367 7.53971 1.31055 7.35352C1.12435 7.15039 0.972005 6.93034 0.853516 6.69336C0.735026 6.45638 0.641927 6.18555 0.574219 5.88086C0.50651 5.57617 0.472656 5.27148 0.472656 4.9668C0.472656 4.42513 0.582682 3.88346 0.802734 3.3418C1.03971 2.80013 1.37826 2.30078 1.81836 1.84375C2.25846 1.38672 2.80859 1.02279 3.46875 0.751953C4.12891 0.464193 4.89909 0.311849 5.7793 0.294922C6.49023 0.311849 7.13346 0.438802 7.70898 0.675781C8.30143 0.895833 8.80078 1.20898 9.20703 1.61523C9.61328 2.02148 9.92643 2.47852 10.1465 2.98633C10.3835 3.47721 10.502 4.00195 10.502 4.56055Z"
                                fill="currentColor" />
                        </svg>
                        <span>Pinterest</span>
                    </a>
                </li>
            </ul>
        </div>


    </main>



    
@endsection
