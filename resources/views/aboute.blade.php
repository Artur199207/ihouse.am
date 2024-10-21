@extends('layouts.app')

@section('title', 'Aboute')

@section('content')
   
    <!-- banner -->


    <section class="breadcrumb__section section--padding">
        <div class="container">
            <div class="breadcrumb__content text-center" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                <h1 class="breadcrumb__title h2"><span>Մեր  </span>մասին </h1>
                <ul class="breadcrumb__menu d-flex justify-content-center">
                    <li class="breadcrumb__menu--items"><a class="breadcrumb__menu--link" href="{{ url('/') }}">Գլխավոր էջ</a></li>
                    <li><span><svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.22321 4.65179C5.28274 4.71131 5.3125 4.77976 5.3125 4.85714C5.3125 4.93452 5.28274 5.00298 5.22321 5.0625L1.0625 9.22321C1.00298 9.28274 0.934524 9.3125 0.857143 9.3125C0.779762 9.3125 0.71131 9.28274 0.651786 9.22321L0.205357 8.77679C0.145833 8.71726 0.116071 8.64881 0.116071 8.57143C0.116071 8.49405 0.145833 8.4256 0.205357 8.36607L3.71429 4.85714L0.205357 1.34821C0.145833 1.28869 0.116071 1.22024 0.116071 1.14286C0.116071 1.06548 0.145833 0.997023 0.205357 0.9375L0.651786 0.491071C0.71131 0.431547 0.779762 0.401785 0.857143 0.401785C0.934524 0.401785 1.00298 0.431547 1.0625 0.491071L5.22321 4.65179Z" fill="#706C6C"/>
                        </svg>
                        </span></li>
                    <li><span class="breadcrumb__menu--text">Մեր մասին </span></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="about__section about__page--section section--padding">
        <div class="container">
            <div class="about__inner d-flex">
                <div class="about__thumbnail position-relative" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                    <div class="about__thumbnail--list one position-relative">
                        <img src="{{ asset('public/assets/image/abouteimage.jpg') }}" alt="about-thumb">
                        
                    </div>
                </div>
                <div class="about__content" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150">
                    <div class="section__heading">
                        <h2 class="section__heading--title">Մեր մասին</h2>
                        <p class="section__heading--desc">
                            Բարի գալուստ «IHOUSE» անշարժ գույքի գործակալություն, որտեղ կատարյալ տուն գտնելու երազանքներն
                        իրականություն են դառնում: Վստահության, ազնվության և բացառիկ ծառայության մատուցման սկզբունքների վրա
                        հիմնված մեր գործակալությունը նվիրված է առաջնորդելու ձեզ անշարժ գույք գնելու կամ վաճառելու
                        յուրաքանչյուր քայլում: «IHOUSE» անշարժ գույքի գործակալությունը հիմնադրվել է 2020 թվականին, տնօրեն՝
                        Արթուր Մուրադյանի կողմից։
                        </p>
                    </div>
                    <div class="about__content--info d-flex">
                        <div class="about__content--info__list d-flex align-items-center">
                            <div class="about__content--info__icon">
                                <img src="./assets/img/other/about-info-icon.png" alt="icon">
                            </div>
                            <h3 class="about__content--info__title">Բացառիկ վաճառք ihouse.am ի հետ</h3>
                        </div>
                        <div class="about__content--info__list d-flex align-items-center">
                            <div class="about__content--info__icon">
                                <img src="./assets/img/other/about-info-icon2.png" alt="icon">
                            </div>
                            <h3 class="about__content--info__title">Ընկերական աջակցության թիմ</h3>
                        </div>
                    </div>
                    <p class="section__heading--desc">Մենք զբաղվում ենք անշարժ գույքի</p>
                    <div class="about__content--details d-flex align-items-center">
                        <div class="about__experince">
                            <span class="about__experince--number">4</span>
                            <span class="about__experince--text">Տարիների փորձ</span>
                        </div>
                        
                        <div class="living__details--content__wrapper">
                            <p class="living__details--content__list"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.5 0.25C3.95 0.25 0.25 3.95 0.25 8.5C0.25 13.05 3.95 16.75 8.5 16.75C13.05 16.75 16.75 13.05 16.75 8.5C16.75 3.95 13.05 0.25 8.5 0.25ZM8.5 15.25C4.775 15.25 1.75 12.225 1.75 8.5C1.75 4.775 4.775 1.75 8.5 1.75C12.225 1.75 15.25 4.775 15.25 8.5C15.25 12.225 12.225 15.25 8.5 15.25Z" fill="#F23B3B"/>
                                <path d="M11.625 5.97505L7.525 9.87505L5.4 7.75005C5.1 7.45005 4.625 7.45005 4.35 7.75005C4.05 8.05005 4.05 8.52505 4.35 8.80005L7 11.45C7.15 11.6 7.35 11.675 7.525 11.675C7.7 11.675 7.9 11.6 8.05 11.475L12.675 7.07505C12.975 6.80005 12.975 6.32505 12.7 6.02505C12.4 5.70005 11.925 5.70005 11.625 5.97505Z" fill="#F23B3B"/>
                                </svg>
                                առք
                            </p>
                            <p class="living__details--content__list"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.5 0.25C3.95 0.25 0.25 3.95 0.25 8.5C0.25 13.05 3.95 16.75 8.5 16.75C13.05 16.75 16.75 13.05 16.75 8.5C16.75 3.95 13.05 0.25 8.5 0.25ZM8.5 15.25C4.775 15.25 1.75 12.225 1.75 8.5C1.75 4.775 4.775 1.75 8.5 1.75C12.225 1.75 15.25 4.775 15.25 8.5C15.25 12.225 12.225 15.25 8.5 15.25Z" fill="#F23B3B"/>
                                <path d="M11.625 5.97505L7.525 9.87505L5.4 7.75005C5.1 7.45005 4.625 7.45005 4.35 7.75005C4.05 8.05005 4.05 8.52505 4.35 8.80005L7 11.45C7.15 11.6 7.35 11.675 7.525 11.675C7.7 11.675 7.9 11.6 8.05 11.475L12.675 7.07505C12.975 6.80005 12.975 6.32505 12.7 6.02505C12.4 5.70005 11.925 5.70005 11.625 5.97505Z" fill="#F23B3B"/>
                                </svg>
                                 վաճառք
                            </p>
                            <p class="living__details--content__list"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.5 0.25C3.95 0.25 0.25 3.95 0.25 8.5C0.25 13.05 3.95 16.75 8.5 16.75C13.05 16.75 16.75 13.05 16.75 8.5C16.75 3.95 13.05 0.25 8.5 0.25ZM8.5 15.25C4.775 15.25 1.75 12.225 1.75 8.5C1.75 4.775 4.775 1.75 8.5 1.75C12.225 1.75 15.25 4.775 15.25 8.5C15.25 12.225 12.225 15.25 8.5 15.25Z" fill="#F23B3B"/>
                                <path d="M11.625 5.97505L7.525 9.87505L5.4 7.75005C5.1 7.45005 4.625 7.45005 4.35 7.75005C4.05 8.05005 4.05 8.52505 4.35 8.80005L7 11.45C7.15 11.6 7.35 11.675 7.525 11.675C7.7 11.675 7.9 11.6 8.05 11.475L12.675 7.07505C12.975 6.80005 12.975 6.32505 12.7 6.02505C12.4 5.70005 11.925 5.70005 11.625 5.97505Z" fill="#F23B3B"/>
                                </svg>
                                 վարձակալություն
                            </p>
                            <p class="living__details--content__list"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.5 0.25C3.95 0.25 0.25 3.95 0.25 8.5C0.25 13.05 3.95 16.75 8.5 16.75C13.05 16.75 16.75 13.05 16.75 8.5C16.75 3.95 13.05 0.25 8.5 0.25ZM8.5 15.25C4.775 15.25 1.75 12.225 1.75 8.5C1.75 4.775 4.775 1.75 8.5 1.75C12.225 1.75 15.25 4.775 15.25 8.5C15.25 12.225 12.225 15.25 8.5 15.25Z" fill="#F23B3B"/>
                                <path d="M11.625 5.97505L7.525 9.87505L5.4 7.75005C5.1 7.45005 4.625 7.45005 4.35 7.75005C4.05 8.05005 4.05 8.52505 4.35 8.80005L7 11.45C7.15 11.6 7.35 11.675 7.525 11.675C7.7 11.675 7.9 11.6 8.05 11.475L12.675 7.07505C12.975 6.80005 12.975 6.32505 12.7 6.02505C12.4 5.70005 11.925 5.70005 11.625 5.97505Z" fill="#F23B3B"/>
                                </svg>
                                գնահատմամբ
                            </p>

                        </div>
                    </div>
                    <p class="section__heading--desc">Ինչպես նաև բնակելի և կոմերցիոն տարածքների կառուցապատմամբ։
                        «IHOUSE»-ի փորձառու մասնագետների մեր թիմը ունի ոլորտի տարիների փորձ, տեղական շուկայի գիտելիքներ և
                        մեծ ցանկություն՝ օգնելու մեր հաճախորդներին գնել կամ վաճառել իրենց անշարժ գույքը։ Մենք առաջնորդվում
                        ենք մեր անհատական մոտեցմամբ: Անկախ նրանից՝ դուք առաջին անգամ տուն գնող եք թե ցանկանում եք վաճառել
                        ձեր գույքը՝ մենք մեր ծառայությունները հարմարեցնում ենք ձեր ցանկություններին։ Գործընկերային կապերի,
                        պրոֆեսիոնալ թիմի, մանրուքների նկատմամբ մանրակրկիտ ուշադրության մեր աջակցությունը ապահովում է հարթ և
                        հաջող գործընթաց սկզբից մինչև վերջ: Տեղական շուկայի մեր լայն իմացությունը թույլ է տալիս մեզ տրամադրել
                        ճշգրիտ խորհուրդներ և ուղղորդումներ՝ օգնելով ձեզ տեղեկացված լինել և ճիշտ որոշումներ կայացնել անշարժ
                        գույքի ոլորտում։ «IHOUSE»-ում ձեր գոհունակությունը մեր առաջնահերթությունն է:</p>
                    
                </div>
            </div>
        </div>
    </section>






   
@endsection
