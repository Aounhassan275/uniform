@extends('front.layout.index')
@section('title')
<title>ABOUT US | {{App\Models\Information::siteName()}}</title>
@endsection
@section('content')

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
@endsection