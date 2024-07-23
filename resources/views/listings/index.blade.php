<!-- resources/views/listings/index.blade.php -->

@extends('layouts.app') {{-- Assuming you have a layout file --}}

@section('content')
    <style>
        .d-flex {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            gap: 50px;
            justify-content: center;
        }

        @media screen and (max-width:992px) {
            .item {
                max-width: 300px;
                width: 100%;
            }
        }
    </style>
    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="{{ url('/') }}">Գլխավոր էջ</a> / Գնումներ, Վաճառք և Վարձակալություն</span>
            <h2>Գնումներ, Վաճառք և Վարձակալություն</h2>
        </div>
    </div>
    <!-- banner -->


    <div class="container">
        <div class="properties-listing spacer">

            <div class="row">
                <div class="col-lg-3 col-sm-4 ">

                    <div class="search-form">
                        <h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
                        
                        <div class="row">
                           
                            <div class="col-lg-12">
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
                            <div class="col-lg-12">
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
                            <div class="col-lg-12 col-sm-4">
                                <select class="form-control">
                                    <option>Վարձակալություն</option>
                                    <option>Վարձակալություն</option>
                                    <option>Վաճառք</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-primary">Փնտրել</button>

                    </div>


                </div>

                <div class="col-lg-9 col-sm-8 ">
                    <div class="d-flex col-lg-12 ">
                        @php
                            $categories = App\Models\Category::get();
                        @endphp
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
                                        <p class="price">{{ $category->meta_description }}</p>
                                    </div>
                                    <a class="btn btn-primary" href="{{ url('tutorial/' . $category->slug) }}">View
                                        Details</a>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    @endsection
