@extends('front.layout.index')
@section('title')
    
<title>BRANDS | {{App\Models\Information::siteName()}}</title>
@endsection

@section('content')
	
<!-- Page Add Section Begin -->
<section class="page-add">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-breadcrumb">
					<h2>BRANDS<span>.</span></h2>
					<a href="{{url('/')}}">Home</a>
					<a class="active" href="{{route('brand.index')}}">Brands</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Page Add Section End -->

<!-- Latest Product Begin -->
<section class="latest-products spad">
	<div class="container">
		<div class="row" >
			@foreach($brands as $brand)
			<div class="col-lg-3 col-sm-6">
				<div class="single-product-item">
					<figure>
						@if($brand->image)
							<a href="{{asset($brand->image)}}" target="_blank">
								<img src="{{asset($brand->image)}}" alt="">
							</a>
						@else 
							<a href="{{asset('default.jpg')}}" target="_blank">
								<img src="{{asset('default.jpg')}}" alt="">
							</a>
						@endif
					</figure>
					<div class="product-text">
						<h6>Total Products : {{$brand->products->count()}}</h6>
						<a href="{{route('brand.show',str_replace(' ', '_',$brand->name))}}"><p>{{@$brand->name}}</p></a>
					</div>
				</div>
			</div>
			@endforeach
			<div class="col-sm-12 text-center">
				{!! $brands->links() !!}
			</div>
		</div>
	</div>
</section>
<!-- Latest Product End -->
@endsection