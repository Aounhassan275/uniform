@extends('front.layout.index')
@section('title')
<title>ABOUT US | {{App\Models\Information::siteName()}}</title>
@endsection
@section('content')
    <!-- Lookbok Section Begin -->
    <section class="lookbok-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 offset-lg-1">
                    <div class="lookbok-left">
                        <div class="section-title">
                            <h2>ABOUT US</h2>
                        </div>
                        <p>{!! App\Models\Information::aboutUs() !!}</p>
                        {{-- <a href="{{route('about_us.index')}}" class="primary-btn look-btn">See More</a> --}}
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="lookbok-pic">
                        <img src="{{asset('front/img/lookbok.jpg')}}" alt="">
                        <div class="pic-text">UNIFORM</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Lookbok Section End -->

    <!-- Logo Section Begin -->
    <div class="logo-section spad">
        <div class="logo-items owl-carousel">
            <div class="logo-item">
                <img src="{{asset('front/img/logos/logo-1.png')}}" alt="">
            </div>
            <div class="logo-item">
                <img src="{{asset('front/img/logos/logo-2.png')}}" alt="">
            </div>
            <div class="logo-item">
                <img src="{{asset('front/img/logos/logo-3.png')}}" alt="">
            </div>
            <div class="logo-item">
                <img src="{{asset('front/img/logos/logo-4.png')}}" alt="">
            </div>
            <div class="logo-item">
                <img src="{{asset('front/img/logos/logo-5.png')}}" alt="">
            </div>
        </div>
    </div>
    <!-- Logo Section End -->
@endsection