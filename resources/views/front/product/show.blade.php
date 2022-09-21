@extends('front.layout.index')
@section('title')
    
<title>{{$product->name}} | {{App\Models\Information::siteName()}}</title>
@endsection

@section('content')
<!-- Page Add Section Begin -->
<section class="page-add">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-breadcrumb">
					<h2>{{$product->name}}<span>.</span></h2>
					<a href="{{url('/')}}">Home</a>
					<a class="" href="{{route('product.index')}}">Products</a>
					<a class="active" href="{{route('product.show',str_replace(' ', '_',$product->name))}}">{{$product->name}}</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Page Add Section End -->
<section class="product-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-slider owl-carousel">
                    @foreach($product->images as $image)
                    <div class="product-img">
                        <figure>
                            <img src="{{asset($image->image)}}" alt="">
                            {{-- <div class="p-status">new</div> --}}
                        </figure>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-content">
                    <h2>{{$product->name}}</h2>
                    <div class="pc-meta">
                        <h5>{{$product->price}}</h5>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <p>{!! $product->description !!}</p>
                    <ul class="tags">
                        <li><span>Category :</span> {{@$product->category->name}}</li>
                        <li><span>Brand :</span> {{@$product->brand->name}}</li>
                    </ul>
                    {{-- <div class="product-quantity">
                        <div class="pro-qty">
                            <input type="text" value="1">
                        </div>
                    </div>
                    <a href="#" class="primary-btn pc-btn">Add to cart</a> --}}
                    {{-- <ul class="p-info">
                        <li>Product Information</li>
                        <li>Reviews</li>
                        <li>Product Care</li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
@endsection