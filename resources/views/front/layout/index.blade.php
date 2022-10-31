<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    @yield('title')
    <meta name="description" content="{{App\Models\Information::siteName()}}">
    <meta name="keywords" content="Uniform, Gifts">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('new_theme/css/bootstrap.min.css')}}" type="text/css" />
</head>
<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        <a href="mailto:{{App\Models\Information::email()}}" style="color:black;" class="__cf_email__" >{{App\Models\Information::email()}}</a>
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        <a href="tel:{{App\Models\Information::phone()}}" style="color:black;">{{App\Models\Information::phone()}}</a>
                    </div>
                </div>
                <div class="ht-right">
                    <div class="top-social">
                        <a href="{{App\Models\Information::facebook()}}"><i class="ti-facebook"></i></a>
                        <a href="{{App\Models\Information::twitter()}}"><i class="ti-twitter-alt"></i></a>
                        {{-- <a href="{{App\Models\Information::youtube()}}"><i class="fa-youtube-play"></i></a> --}}
                        <a href="{{App\Models\Information::pinterest()}}"><i class="ti-pinterest"></i></a>
                        <a href="{{App\Models\Information::instagram()}}"><i class="ti-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="logo text-center">
                            <a href="{{url('/')}}">
                                <img src="{{asset('new_theme/img/xlogo.png.pagespeed.ic.ri45aVfZO2.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="{{Request::is('about_us') ?'active':''}}" ><a href="{{route('about_us.index')}}">About Us</a></li>
                        <li class="{{Request::is('services') || Request::is('service/*') ?'active':''}}" ><a href="{{route('service.index')}}">Services</a></li>
                        <li class="{{Request::is('our_happy_client') ?'active':''}}" ><a href="{{url('our_happy_client')}}">Our Happy Client</a></li>
                        {{-- <li class="{{Request::is('categories') || Request::is('category/*') ?'active':''}}">
                            <a  href="{{route('category.index')}}">Categories</a>
                            <ul class="dropdown">
                                @foreach(App\Models\Category::orderBy('display_order','asc')->take(5)->get() as $category)
                                <li><a href="{{route('category.show',str_replace(' ', '_',$category->name))}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </li> --}}
                        {{-- <li class="{{Request::is('brands') || Request::is('brand/*') ?'active':''}}">
                            <a  href="{{route('brand.index')}}">Brands</a>
                            <ul class="dropdown">
                                @foreach(App\Models\Brand::orderBy('display_order','asc')->take(5)->get() as $brand)
                                <li><a href="{{route('brand.show',str_replace(' ', '_',$brand->name))}}">{{$brand->name}}</a></li>
                                @endforeach
                            </ul>
                        </li> --}}
                        {{-- <li class="{{Request::is('products') || Request::is('product/*') ?'active':''}}"><a href="{{route('product.index')}}">Product</a></li> --}}
                        <li class="{{Request::is('contact_us') ?'active':''}}"><a  href="{{route('contact_us.index')}}">Contact Us</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            @foreach(App\Models\Slider::orderBy('display_order','asc')->get() as $slider)
            <div class="single-hero-items set-bg" data-setbg="{{asset($slider->image)}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h1>{{$slider->title}}</h1>
                            <p>{!! $slider->description !!}</p>
                            {{-- <a href="#" class="primary-btn">Shop Now</a> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @yield('content')
    <div class="map spad">
        <div class="container">
            <div class="map-inner">
                <iframe 
                    src="https://maps.google.com/maps?q=Lake%20Plaza%20Tower,%20Cluster%20T,Jumeirah%20Lakes%20Towers,Dubain,%20UAE&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                    height="610" style="border:0" allowfullscreen="">
                </iframe>
                <div class="icon">
                    <i class="fa fa-map-marker"></i>
                </div>
            </div>
        </div>
    </div>
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-title">
                        <h4>Contacts Us</h4>
                    </div>
                    <div class="contact-widget">
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="ci-text">
                                <span>Address:</span>
                                <p>{{App\Models\Information::address()}}</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                            <i class="ti-mobile"></i>
                            </div>
                            <div class="ci-text">
                            <span>Phone:</span>
                            <p><a href="tel:{{App\Models\Information::phone()}}" style="color:black;">{{App\Models\Information::phone()}}</a></p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                            <i class="ti-email"></i>
                            </div>
                            <div class="ci-text">
                                <span>Email:</span>
                                <p>
                                    <a href="mailto:{{App\Models\Information::email()}}" style="color:black;" class="__cf_email__" >{{App\Models\Information::email()}}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="contact-form">
                        <div class="leave-comment">
                            <h4>Leave A Comment</h4>
                            <p>Our staff will call back later and answer your questions.</p>
                            <form action="{{route('admin.message.store')}}"  method="post" class="comment-form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text"  name="name" placeholder="Your name" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="email" placeholder="Your email" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" name="subject" placeholder="Subject" required>
                                        <textarea name="message" placeholder="Your message"></textarea>
                                        <button type="submit" class="site-btn">Send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-left">
                        <div class="footer-logo">
                        <a href="{{url('/')}}"><img src="{{asset('new_theme/img/xfooter-logo.png.pagespeed.ic.J_w5R0L8zD.png')}}" alt=""></a>
                        </div>
                        <div class="footer-social">
                            <a href="{{App\Models\Information::instagram()}}" ><i class="fa fa-instagram"></i></a>
                            <a href="{{App\Models\Information::pinterest()}}" ><i class="fa fa-pinterest"></i></a>
                            <a href="{{App\Models\Information::facebook()}}" ><i class="fa fa-facebook"></i></a>
                            <a href="{{App\Models\Information::twitter()}}" ><i class="fa fa-twitter"></i></a>
                            {{-- <a href="{{App\Models\Information::youtube()}}" ><i class="fa fa-youtube"></i><span>youtube</span></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-widget">
                    <h5>My Account</h5>
                        <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                        <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-widget">
                    <h5>My Account</h5>
                        <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                        <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">

                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="{{url('/')}}" >Fashi</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


<script src="{{asset('new_theme/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('new_theme/js/bootstrap.min.js')}}"></script>
<script src="{{asset('new_theme/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('new_theme/js/jquery.min.js')}}"></script>
<script>eval(mod_pagespeed_s2yWe5UonU);</script>
<script>eval(mod_pagespeed_5Oi900R5Mr);</script>
<script>eval(mod_pagespeed_y24CbgPGh9);</script>
<script>eval(mod_pagespeed_2WJFdZORSP);</script>
<script>eval(mod_pagespeed_gwflC3jfEs);</script>
<script src="{{asset('new_theme/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('new_theme/js/main.js')}}"></script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7616c5bb3d5cd1d8","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.10.3","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/fashi/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Oct 2022 21:31:15 GMT -->
</html>