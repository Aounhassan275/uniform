@extends('front.layout.index')
@section('title')
<title> SERVICES | AL MAROOF DEVELOPER BUILDERS</title>

<!--Keywords -->
<meta name="keywords" content="modern, creative, website, html5, bootstrap responsive, parallax, soft, front-end, designer, coming soon, account, portfolio, photographer, grid, social, modules, design, personal, faq, one page, multi-purpose, branding, studio, agency, templates, css3, carousel, slider, corporate, theme, quadra, demos, blog, shop" />
<meta name="author" content="GoldEyes" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
<!-- DESCRIPTION -->
<meta name="description" content="EduChamp : Education HTML Template" />

<!-- OG -->
<meta property="og:title" content="EduChamp : Education HTML Template" />
<meta property="og:description" content="EduChamp : Education HTML Template" />
<meta property="og:image" content="" />
@endsection
@section('content')
@php
$information = App\Models\Information::find(1);
@endphp
<div class="page-banner ovbl-dark" style="background-image:url({{asset('assets/images/banner/banner3.jpg')}});">
    <div class="container">
      <div class="page-banner-entry">
        <h1 class="text-white"> Services</h1>
      </div>
    </div>
</div>
<div class="breadcrumb-row">
    <div class="container">
        <ul class="list-inline">
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Services </li>
        </ul>
    </div>
</div>
    <!-- Page Heading Box END ==== -->
 <!-- Page Content Box ==== -->
 <div class="content-block">
    <!-- Why Choose ==== -->
    <div class="section-area bg-gray section-sp2 choose-bx" style="top-margin:5px;">
        <div class="container">
            <div class="row choose-bx-in">
                @foreach($services as $service)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="service-bx">
                        <div class="action-box">
                            <img src="{{asset($service->image)}}" alt="">
                        </div>
                        <div class="info-bx text-center">
                            <div class="feature-box-sm radius bg-white">
                                <i class="fa fa-book text-primary"></i>
                            </div>
                            <h4><a href="{{route('service.show',str_replace(' ', '_',$service->title))}}">{{$service->title}}</a></h4>
                            <a href="{{route('service.show',str_replace(' ', '_',$service->title))}}" class="btn radius-xl">View More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Why Choose END ==== -->
</div>
<!-- Page Content Box END ==== -->
@endsection