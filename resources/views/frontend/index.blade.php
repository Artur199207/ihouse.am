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

                <div class="sl-slide"  data-slice1-rotation="-25" data-slice2-rotation="-25"
                    data-slice1-scale="2" data-slice2-scale="2">
                    <div class="sl-slide-inner">
                        <div class="bg-img bg-img-1"></div>
                        <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
                        <blockquote>
                            <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia
                            </p>
                            <p>Until he extends the circle of his compassion to all living things, man will not himself find
                                peace.</p>
                            <cite>$ 20,000,000</cite>
                        </blockquote>
                    </div>
                </div>

                <div class="sl-slide"  data-slice1-rotation="10" data-slice2-rotation="-15"
                    data-slice1-scale="1.5" data-slice2-scale="1.5">
                    <div class="sl-slide-inner">
                        <div class="bg-img bg-img-2"></div>
                        <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
                        <blockquote>
                            <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia
                            </p>
                            <p>Until he extends the circle of his compassion to all living things, man will not himself find
                                peace.</p>
                            <cite>$ 20,000,000</cite>
                        </blockquote>
                    </div>
                </div>

                <div class="sl-slide"  data-slice1-rotation="3" data-slice2-rotation="3"
                    data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <div class="bg-img bg-img-3"></div>
                        <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
                        <blockquote>
                            <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia
                            </p>
                            <p>Until he extends the circle of his compassion to all living things, man will not himself find
                                peace.</p>
                            <cite>$ 20,000,000</cite>
                        </blockquote>
                    </div>
                </div>

                <div class="sl-slide"  data-slice1-rotation="-5" data-slice2-rotation="25"
                    data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <div class="bg-img bg-img-4"></div>
                        <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
                        <blockquote>
                            <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia
                            </p>
                            <p>Until he extends the circle of his compassion to all living things, man will not himself find
                                peace.</p>
                            <cite>$ 20,000,000</cite>
                        </blockquote>
                    </div>
                </div>

                <div class="sl-slide"  data-slice1-rotation="-5" data-slice2-rotation="10"
                    data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <div class="bg-img bg-img-5"></div>
                        <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
                        <blockquote>
                            <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia
                            </p>
                            <p>Until he extends the circle of his compassion to all living things, man will not himself find
                                peace.</p>
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
                        <div class="row">
                            <div class="col-lg-3 col-sm-3 ">
                                <select class="form-control">
                                    <option value="">Համայնք</option>
                                    <option value="">Արաբկիր</option>
                                    <option value="">Դավիթաշեն</option>
                                    <option value="">Կենտրոն</option>
                                    <option value="">Աջափնյակ</option>
                                    <option value="">Ավան</option>
                                    <option value="">Էրեբունի</option>
                                    <option value="">Մալաթիա-Սեբաստիա</option>
                                    <option value="">Նոր-Նորք</option>
                                    <option value="">Նորք-Մարաշ</option>
                                    <option value="">Նուբարաշեն</option>
                                    <option value="">Շենգավիթ</option>
                                    <option value="">Քանաքեռ-Զեյթուն</option>
                                    <option value="">Դպրոցականների</option>
                                    <option value="">Գյուղ Գետափնյա</option>
                                    <option value="">Պռոշյան սովխոզ</option>
                                    <option value="">Վահագնի թաղամաս</option>
                                    <option value="">Փոքր կենտրոն</option>
                                    <option value="">Ջրվեժ</option>
                                    <option value="">Ձորաղբյուր</option>
                                    <option value="">Էջմիածին</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <select class="form-control">
                                    <option>Բնակարաններ</option>
                                    <option>Բնակարաններ</option>
                                    <option>Առանձնատներ</option>
                                    <option>Հողատարածքներ</option>
                                    <option>Արտադրական տարածք </option>
                                    <option>Գրասենյակային տարածք  </option>
                                    <option>Պահեստ  </option>
                                    <option>Ավտոտնակներ և կայանատեղի</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <select class="form-control">
                                    <option>Վարձակալություն</option>
                                    <option>Վարձակալություն</option>
                                    <option>Վաճառք</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <button class="btn btn-success" onclick="window.location.href='{{ route('listings.index') }}'">Որոնել</button>
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
                                <img src="{{ asset('uploads/category/' . $category->image) }}" alt="Category Image"
                                    style="width:200px;height:130px;">
                            </div>
                            <h4>
                                <a href="{{ url('tutorial/' . $category->slug) }}">{{ $category->slug }} $</a>
                            </h4>
                            <p class="price">{{ $category->meta_title }}</p>
                            <div class="listing-detail">
                                <p class="price">{{ $category->description }}</p>
                            </div>
                            <a class="btn btn-primary" href="{{ url('tutorial/' . $category->slug) }}">Տեսնել ավելին</a>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
        <div class="spacer">
            <div class="row">
                <div class="col-lg-12 col-sm-9 recent-view">
                    <h3>Մեր մասին</h3>
                    <p>IHOUSE անշար գույքի գործակալությունը հիմնադրվել է 2020 թվականին, տնօրեն՝ Արթուր Մուրադյանի կողմից։
                        Մենք զբաղվում ենք անշարժ գույքի` բնակարաններ,
                        առանձնատներ,
                        խանութներ,
                        գրասենյակային տարածքներ,
                        հողատարածքներ,
                        ավտոտնակներ և կայանատեղի,
                        տնակներ և կրպակներ,
                        առևտրային տարածք,
                        արտադրական տարածք,
                        պահեստ,
                        ռեստորան,
                        հյուրանոց,
                        բազմաֆունկցիոնալ գույքի,
                        առք, վաճառք, վարձակալություն, գնահատում, ինչպես նաև բնակելի և կոմերցիոն տարածքների կառուցապատմամբ։
                        <br><a href="{{ route('aboute') }}">կարդալ ավելին</a>
                    </p>

                </div>

            </div>
        </div>
    </div>
@endsection
