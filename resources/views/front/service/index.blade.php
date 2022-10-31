@extends('front.layout.index')
@section('title')
<title>SERVICES | {{App\Models\Information::siteName()}}</title>
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
            @foreach($services as $service)
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
            {!! $services->links() !!}
        </div>
    </div>
</section>
@endsection