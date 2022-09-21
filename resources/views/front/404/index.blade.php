<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from technext.github.io/violet/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Sep 2022 16:42:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME | {{App\Models\Information::siteName()}}</title>

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
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
	<!-- Search model end -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="{{url('')}}"><img src="{{asset('front/img/logo.png')}}" alt=""></a>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Slider Begin -->
    <section class="hero-slider">
        <div class="hero-items owl-carousel">
            <div class="single-slider-item set-bg" data-setbg="{{asset('front/img/slider-1.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>THE SITE IS UNDER CONTRUCTION</h1>
                            <h2>Coming Soon.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section spad">
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
</body>
</html>