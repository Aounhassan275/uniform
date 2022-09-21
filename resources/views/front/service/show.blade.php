@extends('front.layout.index')
@section('title')
<title>{{$service->title}} Service | AL MAROOF DEVELOPER BUILDERS</title>

<!--Keywords -->
<meta name="keywords" content="modern, creative, website, html5, bootstrap responsive, parallax, soft, front-end, designer, coming soon, account, portfolio, photographer, grid, social, modules, design, personal, faq, one page, multi-purpose, branding, studio, agency, templates, css3, carousel, slider, corporate, theme, quadra, demos, blog, shop" />
<meta name="author" content="GoldEyes" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
<!-- DESCRIPTION -->
<meta name="description" content=" {{ $service->description }}" />

<!-- OG -->
<meta property="og:locale" content="en_GB" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{$service->title}}  | AL MAROOF DEVELOPER BUILDERS" />
<meta property="og:description" content="{{ $service->description }}" />
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:site_name" content="PACETUTORS.CO.UK" />
<meta property="article:publisher" content="https://facebook.com/ALMAROOFDEVLOPERBUILDERS" />
<meta property="og:image" content="{{asset($service->image)}}" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{{$service->title}} | AL MAROOF DEVELOPER BUILDERS" />
<meta name="twitter:description" content="{{ $service->description }}" />
<meta name="twitter:image" content="{{asset($service->image)}}" />
@endsection
@section('content')
@php
$information = App\Models\Information::find(1);
@endphp
<div class="page-banner ovbl-dark" style="background-image:url({{asset('assets/images/banner/banner2.jpg')}});">
    <div class="container">
      <div class="page-banner-entry">
        <h1 class="text-white">{{$service->title}} Service</h1>
      </div>
    </div>
</div>
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{route('service.index')}}">Services</a></li>
                <li>{{$service->title}} Service </li>
            </ul>
        </div>
    </div>
    <!-- Page Heading Box END ==== -->
    <!-- Page Content Box ==== -->
<div class="content-block">
        <!-- Our Story ==== -->
  <div class="section-area bg-gray section-sp1 our-story">
    <div class="container">
      <div class="row align-items-center  d-flex">
        <div class="col-lg-5 col-md-12 heading-bx">
          <h2 class="m-b10">{{$service->title}} Service</h2>
          <p>
              {!! $service->description !!}
          </p>
        </div>
        <div class="col-lg-7 col-md-12 heading-bx p-lr">
          <div class="video-bx">
            <img src="{{asset($service->image)}}" alt=""/>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Our Story END ==== -->
</div>
@endsection