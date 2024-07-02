@extends('layouts.app')

@section('title', 'Aboute')

@section('content')
    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="{{ url('/') }}">Home</a> / Մեր մասին</span>
            <h2>Մեր մասին</h2>
        </div>
    </div>
    <!-- banner -->


    <div class="container">
        <div class="spacer">
            <div class="row">
                <div class="col-lg-8  col-lg-offset-2">
                    <img src="{{ asset('assets/image/about.jpg') }}" class="img-responsive thumbnail" alt="realestate">

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
                    </p>
                    <h3>Մեր արժեքները</h3>
                    <p>Ընկերության հիմնդրման պահից հավատարիմ մնալ կառուցած արժեքներին։</p>
                    <h3>Մեր կարգախոսը</h3>
                    <p>Կայուն փոխհարաբերություն գործընկերների հետ </p>
                </div>

            </div>
        </div>
    </div>
@endsection
