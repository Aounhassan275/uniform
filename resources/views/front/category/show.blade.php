@extends('front.layout.index')
@section('title')
    
<title>{{$category->name}} PRODUCTS | {{App\Models\Information::siteName()}}</title>
@endsection

@section('content')
<!-- Page Add Section Begin -->
<section class="page-add">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-breadcrumb">
					<h2>{{$category->name}} PRODUCTS<span>.</span></h2>
					<a href="{{url('/')}}">Home</a>
					<a class="" href="{{route('category.index')}}">Categories</a>
					<a class="active" href="{{route('category.show',str_replace(' ', '_',$category->name))}}">{{$category->name}}</a>
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
			@foreach($products as $product)
            <div class="col-lg-3 col-sm-6">
                <div class="single-product-item">
                    <figure>
                        <a href="{{asset($product->images->first()->image)}}" target="_blank"><img src="{{asset($product->images->first()->image)}}" alt=""></a>
                        {{-- <div class="p-status">new</div> --}}
                    </figure>
                    <div class="product-text">
                        <a href="{{route('product.show',str_replace(' ', '_',$product->name))}}"><h6>{{$product->name}}</h6></a>
                        <p>AED {{@$product->price}}</p>
                    </div>
                </div>
            </div>
			@endforeach
			<div class="col-sm-12 text-center">
				{!! $products->links() !!}
			</div>
		</div>
	</div>
</section>
<!-- Latest Product End -->
@endsection