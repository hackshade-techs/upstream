<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Upstream Logistics | @yield('title')</title>
<meta name="description" content="@yield('desc')">
<!-- Stylesheets -->
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/revolution-slider.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<!--Favicon-->
<link rel="shortcut icon" href="{{ asset('images/faviconreal.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('images/faviconreal.png') }}" type="image/x-icon">


<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
@yield('styles')
</head>

<body>
<div class="page-wrapper">


    <!-- Main Header-->
    @if (Request::path() == '/')
    @include('includes.header')
    @else
    @include('includes.header2')
    @endif
    <!--End Main Header -->


    <!--Main Slider-->
    @if (Request::path() == '/')
        @include('includes.slider')
    @endif
    <!--end Main Slider-->
    @yield('content')
    @include('includes.footer')

</div>
<!--End pagewrapper-->
<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="flaticon-cross-1"></span></div>
    <div class="popup-inner">

        <div class="search-form">
            <form method="post" action="http://wp1.themexlab.com/html/transpo/index.html">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Business</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">SEO</a></li>
                <li><a href="#">Logistics</a></li>
                <li><a href="#">Freedom</a></li>
            </ul>

        </div>

    </div>
</div>


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon flaticon-airplane-1"></span></div>


<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/revolution.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox-media.js') }}"></script>
<script src="{{ asset('js/owl.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script id="dsq-count-scr" src="//upstreamlogistics-com.disqus.com/count.js" async></script>
@yield('scripts')
</body>


</html>
