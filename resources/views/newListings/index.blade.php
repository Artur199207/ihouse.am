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
                <div class="col-lg-12 col-sm-8 ">
                    <div class="d-flex col-lg-12">
                        @php
                            $categs = App\Models\Categ::get();
                        @endphp
                        @foreach ($categs as $categ)
                            <div class="item">
                                <div class="properties">
                                    <div class="image-holder">
                                        <img src="{{ asset('uploads/categs/' . $categ->image001) }}" alt="Categ Image"
                                            style="width:200px;height:130px;">
                                    </div>
                                    <h4>
                                        <a href="{{ url('tutorial/' . $categ->name100) }}">{{ $categ->name100 }} $</a>
                                    </h4>
                                    <p class="price">{{ $categ->name101 }}</p>
                                    <div class="listing-detail">
                                        <p class="price">{{ $categ->name102 }}</p>
                                    </div>
                                    <a class="btn btn-primary" href="{{ url('tutorial/' . $categ->slug) }}">View
                                        Details</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
