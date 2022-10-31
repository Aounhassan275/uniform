@extends('front.layout.index')
@section('title')
<title>{{$service->title}} Service |  {{App\Models\Information::siteName()}}</title>

<!--Keywords -->
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
<!-- DESCRIPTION -->
<meta name="description" content=" {{ $service->description }}" />

<!-- OG -->
<meta property="og:locale" content="en_GB" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{$service->title}}  | {{App\Models\Information::siteName()}}" />
<meta property="og:description" content="{{ $service->description }}" />
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:site_name" content="{{App\Models\Information::siteName()}}" />
{{-- <meta property="article:publisher" content="https://facebook.com/ALMAROOFDEVLOPERBUILDERS" /> --}}
<meta property="og:image" content="{{asset($service->image)}}" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{{$service->title}} | {{App\Models\Information::siteName()}}" />
<meta name="twitter:description" content="{{ $service->description }}" />
<meta name="twitter:image" content="{{asset($service->image)}}" />
@endsection
@section('content')

<section class="blog-details spad">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="blog-details-inner">
                  <div class="blog-detail-title">
                  <h2>{{$service->title}} Service</h2>
                  </div>
                  <div class="blog-large-pic">
                  <img src="{{asset($service->image)}}" alt="">
                  </div>
                  <div class="blog-detail-desc">
                  <p>{!! $service->description !!}
                  </p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection