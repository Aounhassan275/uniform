@extends('front.layout.index')
@section('title')
<title>HOME | {{App\Models\Information::siteName()}}</title>
@endsection
@section('content')

<section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Our Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach(App\Models\Service::orderBy('display_order','asc')->take(5)->get() as $service)
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="{{asset($service->image)}}" alt="">
                    <div class="latest-text">
                        <a href="{{route('service.show',str_replace(' ', '_',$service->title))}}">
                            <h4>{{$service->title}}</h4>
                        </a>
                        <p>
                            {{$service->title_description}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-details-inner">
                    <div class="blog-detail-title">
                    <h2>About Us</h2>
                    </div>
                    <div class="blog-quote">
                        <p>{!! App\Models\Information::aboutUs() !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="instagram-photo">
    @foreach(App\Models\Review::orderBy('position','asc')->take(6)->get() as $review)
    <div class="insta-item set-bg" data-setbg="{{asset($review->image)}}">
        <div class="inside-text" style="padding-top: 0px!important;">
            <h5 style="color:white;">{{$review->name}}</h5>
            <p style="color:white;">"{{$review->message}}"</p>
        </div>
    </div>
    @endforeach
</div>
@endsection