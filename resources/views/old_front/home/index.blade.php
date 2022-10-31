@extends('front.layout.index')
@section('title')
<title>HOME | {{App\Models\Information::siteName()}}</title>
@endsection
@section('content')


    <!-- Hero Slider Begin -->
    <section class="hero-slider">
        <div class="hero-items owl-carousel">
            @foreach(App\Models\Slider::orderBy('display_order','asc')->get() as $slider)
            <div class="single-slider-item set-bg" data-setbg="{{asset($slider->image)}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>{{$slider->title}}</h1>
                            <p style="color:white!important;">{!! $slider->description !!}</p>
                            {{-- <a href="#" class="primary-btn">See More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- Hero Slider End -->

    <!-- Features Section Begin -->
    <section class="features-section spad">
        <div class="features-ads">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-features-ads first">
                            <img src="{{asset('front/img/icons/f-delivery.png')}}" alt="">
                            <h4>Free shipping</h4>
                            <p>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal
                                esuada aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads second">
                            <img src="{{asset('front/img/icons/coin.png')}}" alt="">
                            <h4>100% Money back </h4>
                            <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                                aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads">
                            <img src="{{asset('front/img/icons/chat.png')}}" alt="">
                            <h4>Online support 24/7</h4>
                            <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                                aliquet libero viverra cursus. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Box -->
        <div class="features-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-box-item first-box">
                                    <img src="{{asset('front/img/f-box-1.jpg')}}" alt="">
                                    <div class="box-text">
                                        <span class="trend-year">2019 Party</span>
                                        <h2>Jewelry</h2>
                                        <span class="trend-alert">Trend Allert</span>
                                        <a href="#" class="primary-btn">See More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-box-item second-box">
                                    <img src="{{asset('front/img/f-box-2.jpg')}}" alt="">
                                    <div class="box-text">
                                        <span class="trend-year">2019 Trend</span>
                                        <h2>Footwear</h2>
                                        <span class="trend-alert">Bold & Black</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-box-item large-box">
                            <img src="{{asset('front/img/f-box-3.jpg')}}" alt="">
                            <div class="box-text">
                                <span class="trend-year">2019 Party</span>
                                <h2>Collection</h2>
                                <div class="trend-alert">Trend Allert</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section End -->

    <!-- Latest Product Begin -->
    <section class="latest-products spad">
        <div class="container">
            <div class="product-filter">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>Latest Products</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" >
                @foreach(App\Models\Product::all() as $product)
                <div class="col-lg-3 col-sm-6">
                    <div class="single-product-item">
                        <figure>
                            <a href="{{asset($product->images->first()->image)}}" target="_blank"><img src="{{asset($product->images->first()->image)}}" alt=""></a>
                            <div class="p-status">new</div>
                        </figure>
                        <div class="product-text">
                            <a href="{{route('product.show',str_replace(' ', '_',$product->name))}}"><h6>{{$product->name}}</h6></a>
                            <p>AED {{@$product->price}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Latest Product End -->

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
                        <a href="{{route('about_us.index')}}" class="primary-btn look-btn">See More</a>
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