<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    @yield('title')
    <meta name="description" content="{{App\Models\Information::siteName()}}">
    <meta name="keywords" content="Uniform, Gifts">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}" type="text/css">
    <link href="{{asset('admin/assets/css/toastr.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
    <!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" name="keyword" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search model end -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="{{url('')}}"><img src="{{asset('front/img/logo.png')}}" alt=""></a>
                </div>
                <div class="header-right">
                    @if(Route::currentRouteName() == 'category.index' || Route::currentRouteName() == 'brand.index' || Route::currentRouteName() == 'product.index')
                    <img src="{{asset('front/img/icons/search.png')}}" alt="" class="search-trigger">
                    @endif
                    {{-- <img src="{{asset('front/img/icons/man.png')}}" alt="">
                    <a href="#">
                        <img src="{{asset('front/img/icons/bag.png')}}" alt="">
                        <span>2</span>
                    </a> --}}
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a class="{{Request::is('/')?'active':''}}" href="{{url('/')}}">Home</a></li>
                        <li><a class="{{Request::is('categories') || Request::is('category/*') ?'active':''}}" href="{{route('category.index')}}">Categories</a>
                            <ul class="sub-menu">
                                @foreach(App\Models\Category::orderBy('display_order','asc')->take(5)->get() as $category)
                                <li><a href="{{route('category.show',str_replace(' ', '_',$category->name))}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a class="{{Request::is('brands') || Request::is('brand/*') ?'active':''}}" href="{{route('brand.index')}}">Brands</a>
                            <ul class="sub-menu">
                                @foreach(App\Models\Brand::orderBy('display_order','asc')->take(5)->get() as $brand)
                                <li><a href="{{route('brand.show',str_replace(' ', '_',$brand->name))}}">{{$brand->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a class="{{Request::is('products') || Request::is('product/*') ?'active':''}}" href="{{route('product.index')}}">Product</a></li>
                        <li><a class="{{Request::is('about_us') ?'active':''}}" href="{{route('about_us.index')}}">About Us</a></li>
                        <li><a class="{{Request::is('contact_us') ?'active':''}}" href="{{route('contact_us.index')}}">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header End -->
    @yield('content')
    <!-- Footer Section Begin -->
    <footer class="footer-section spad">
        <div class="container">
            <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Our Categories</h4>
                            <ul>
                              @foreach(App\Models\Category::take(5)->orderBy('display_order','ASC')->get() as $category)
                              <li><a style="color:white;" href="{{route('category.show',str_replace(' ', '_',$category->name))}}"> <span class="pull-right">({{$category->products->count()}})</span>{{@$category->name}}</a></li>
                              @endforeach
                                <li><a style="color:white;" href="{{route('category.index')}}">  <span class="pull-right">({{App\Models\Category::count()}})</span>All Categories</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Our Brands</h4>
                            <ul>
                              @foreach(App\Models\Brand::take(5)->orderBy('display_order','ASC')->get() as $brand)
                              <li><a style="color:white;" href="{{route('brand.show',str_replace(' ', '_',$brand->name))}}"> <span class="pull-right">({{$brand->products->count()}})</span>{{@$brand->name}}</a></li>
                              @endforeach
                                <li><a style="color:white;" href="{{route('brand.index')}}">  <span class="pull-right">({{App\Models\Brand::count()}})</span>All Brands</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Our Products</h4>
                            <ul>
                              @foreach(App\Models\Product::take(5)->orderBy('display_order','ASC')->get() as $product)
                              <li><a style="color:white;" href="{{route('product.show',str_replace(' ', '_',$product->name))}}"> {{@$product->name}}</a></li>
                              @endforeach
                                <li><a style="color:white;" href="{{route('product.index')}}">  <span class="pull-right">({{App\Models\Product::count()}})</span>All Products</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Our Services</h4>
                            <ul>
                              @foreach(App\Models\Service::take(5)->orderBy('display_order','ASC')->get() as $service)
                              <li style="color:white;"><a style="color:white;" href="{{route('service.show',str_replace(' ', '_',$service->title))}}"> {{@$service->title}}</a></li>
                              @endforeach
                                <li><a href="{{route('service.index')}}"  style="color:white;">  <span class="pull-right">({{App\Models\Service::count()}})</span>All Services</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="{{App\Models\Information::instagram()}}" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="{{App\Models\Information::pinterest()}}" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="{{App\Models\Information::facebook()}}" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="{{App\Models\Information::twitter()}}" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="{{App\Models\Information::youtube()}}" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
				</div>
			</div>

			<div class="container text-center pt-5">
				<p>Copyright &copy;2022 All rights reserved by <a href="{{url('/')}}" target="_blank">uniform.com</a></p>
            </div>


		</div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{asset('front/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('front/js/mixitup.min.js')}}"></script>
    <script src="{{asset('front/js/main.js')}}"></script>
	<script src="{{asset('admin/assets/js/toastr.js')}}"></script>
	@toastr_render
    @yield('scripts')
</body>
</html>