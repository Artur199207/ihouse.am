@extends('layouts.app')
@section('content')
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <style>
        .content_flex {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .slick-track {
            display: flex;
            gap: 30px;
        }

        .slick-slide {
            width: unset !important;
        }
        
    </style>



    <div class="">


        <div id="slider" class="sl-slider-wrapper">

            <div class="sl-slider">

                <div class="sl-slide" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2"
                    data-slice2-scale="2">
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

                <div class="sl-slide" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5"
                    data-slice2-scale="1.5">
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

                <div class="sl-slide" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2"
                    data-slice2-scale="1">
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

                <div class="sl-slide" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2"
                    data-slice2-scale="1">
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

                <div class="sl-slide" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2"
                    data-slice2-scale="1">
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
            <div class="searchbar">
                <div class="row">
                    <form action="{{ route('filter.categories') }}" method="GET">
                        <div class="col-lg-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-4 ">
                                    <label for="name14">Տարածաշրջան</label>
                                    <select name="name14" id="name14" class="form-control">
                                        <option value="Համայնք">Համայնք</option>
                                        <option value="Արաբկիր">Արաբկիր</option>
                                        <option value="Դավիթաշեն">Դավիթաշեն</option>
                                        <option value="Կենտրոն">Կենտրոն</option>
                                        <option value="Աջափնյակ">Աջափնյակ</option>
                                        <option value="Ավան">Ավան</option>
                                        <option value="Էրեբունի">Էրեբունի</option>
                                        <option value="Մալաթիա-Սեբաստիա">Մալաթիա-Սեբաստիա</option>
                                        <option value="Նոր-Նորք">Նոր-Նորք</option>
                                        <option value="Նորք-Մարաշ">Նորք-Մարաշ</option>
                                        <option value="Նուբարաշեն">Նուբարաշեն</option>
                                        <option value="Շենգավիթ">Շենգավիթ</option>
                                        <option value="Քանաքեռ-Զեյթուն">Քանաքեռ-Զեյթուն</option>
                                        <option value="Դպրոցականների">Դպրոցականների</option>
                                        <option value="Գյուղ Գետափնյա">Գյուղ Գետափնյա</option>
                                        <option value="Պռոշյան սովխոզ">Պռոշյան սովխոզ</option>
                                        <option value="Վահագնի թաղամաս">Վահագնի թաղամաս</option>
                                        <option value="Փոքր կենտրոն">Փոքր կենտրոն</option>
                                        <option value="Ջրվեժ">Ջրվեժ</option>
                                        <option value="Ձորաղբյուր">Ձորաղբյուր</option>
                                        <option value="Էջմիածին">Էջմիածին</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-4">
                                    <label for="meta_title">Տեսակ</label>
                                    <select name="meta_title" id="meta_title" class="form-control">
                                        <option value="">Տեսակ</option>
                                        <option value="Բնակարաններ">Բնակարաններ</option>
                                        <option value="Առանձնատներ">Առանձնատներ</option>
                                        <option value="Հողատարածքներ">Հողատարածքներ</option>
                                        <option value="Արտադրական տարածք">Արտադրական տարածք </option>
                                        <option value="Գրասենյակային տարածք">Գրասենյակային տարածք </option>
                                        <option value="Պահեստ">Պահեստ </option>
                                        <option value="Ավտոտնակներ և կայանատեղի">Ավտոտնակներ և կայանատեղի</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-sm-4">
                                    <label for="meta_title">Որոնել</label>
                                    <button class="btn btn-success" type="submit">Որոնել</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- banner -->
    <div class="container">
        <div class="properties-listing spacer">
            <div class="content_flex">
                <h2>Բնակարաններ</h2>
                <a href="{{ route('listings.index') }}">Տեսնել բոլոր բաժինները</a>
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
    </div>
    <div class="container">
        @if (!empty($categs))
            <div class="properties-listing spacer">
                <div class="content_flex">
                    <h2>Առանձնատներ</h2>
                    <a href="{{ route('listings.index') }}">Տեսնել բոլոր բաժինները</a>
                </div>
                <div id="slick-example" class="slick-carousel">
                    @foreach ($categs as $categ)
                        <div class="item">
                            <div class="properties">
                                <div class="image-holder">
                                    <img src="{{ asset('uploads/categs/' . $categ->image001) }}" alt="Categ Image"
                                        style="width:200px;height:130px;">
                                </div>
                                <h4>
                                    <a href="{{ url('tutorial/' . $categ->name100) }}">{{ $categ->name100 }}</a>
                                </h4>
                                <p class="price">{{ $categ->name101 }}</p>
                                <div class="listing-detail">
                                    <p class="price">{{ $categ->name102 }}</p>
                                </div>
                                <a class="btn btn-primary" href="{{ url('tutorial/' . $categ->name100) }}">Տեսնել
                                    ավելին</a>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>


    <div class="container">
        <div class="spacer">
            <div class="row">
                <div class="col-lg-12 col-sm-9 recent-view">
                    <h3>Մեր մասին</h3>
                    <p>Բարի գալուստ «IHOUSE» անշարժ գույքի գործակալություն, որտեղ կատարյալ տուն գտնելու երազանքներն
                        իրականություն են դառնում: Վստահության, ազնվության և բացառիկ ծառայության մատուցման սկզբունքների վրա
                        հիմնված մեր գործակալությունը նվիրված է առաջնորդելու ձեզ անշարժ գույք գնելու կամ վաճառելու
                        յուրաքանչյուր քայլում: «IHOUSE» անշարժ գույքի գործակալությունը հիմնադրվել է 2020 թվականին, տնօրեն՝
                        Արթուր Մուրադյանի կողմից։ Մենք զբաղվում ենք անշարժ գույքի
                        <br />
                        • առք,
                        <br/>
                        • վաճառք,
                        <br/>
                        • վարձակալություն,
                        <br/>
                        • գնահատմամբ։
                        <br/>
                        Ինչպես նաև բնակելի և կոմերցիոն տարածքների կառուցապատմամբ։
                        <br><a href="{{ route('aboute') }}">կարդալ ավելին</a>
                    </p>

                </div>

            </div>
        </div>
    </div>

    </div>


    <!-- Slick Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#slick-example').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }
                ]
            });
        });
    </script>
@endsection
