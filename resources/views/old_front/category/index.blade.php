@extends('front.layout.index')
@section('title')
<title>CATEGORIES | {{App\Models\Information::siteName()}}</title>
@endsection

@section('content')
<!-- Page Add Section Begin -->
<section class="page-add">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-breadcrumb">
					<h2>CATEGORIES<span>.</span></h2>
					<a href="{{url('/')}}">Home</a>
					<a class="active" href="{{route('category.index')}}">Categories</a>
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
			@foreach($categories as $category)
			<div class="col-lg-3 col-sm-6">
				<div class="single-product-item">
					<figure>
						@if($category->image)
							<a href="{{asset($category->image)}}" target="_blank">
								<img src="{{asset($category->image)}}" alt="">
							</a>
						@else 
							<a href="{{asset('default.jpg')}}" target="_blank">
								<img src="{{asset('default.jpg')}}" alt="">
							</a>
						@endif
					</figure>
					<div class="product-text">
						<h6>Total Products : {{$category->products->count()}}</h6>
						<a href="{{route('category.show',str_replace(' ', '_',$category->name))}}"><p>{{@$category->name}}</p></a>
					</div>
				</div>
			</div>
			@endforeach
			<div class="col-sm-12 text-center">
				{!! $categories->links() !!}
			</div>
		</div>
	</div>
</section>
<!-- Latest Product End -->
@endsection