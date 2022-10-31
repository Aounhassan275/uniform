@extends('front.layout.index')
@section('title')
<title>CONTACT US | {{App\Models\Information::siteName()}}</title>
@endsection
@section('content')

<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-details-inner">
                    <div class="blog-detail-title">
                    <h2>Our Happy Clients</h2>
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