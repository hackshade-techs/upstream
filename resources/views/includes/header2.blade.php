<header class="main-header">
        <!-- Header Top -->
        <div class="header-top hidden-sm hidden-xs">
            <div class="auto-container clearfix">
                <!--Top Left-->
                <div class="top-left pull-left">
                    <ul class="links-nav clearfix">
                        <li><a href="{{ url('/') }}">Welcome to Upstream Logistics!!</a></li>
                    </ul>
                </div>

                <!--Top Right-->
                <div class="top-right pull-right">
                    <ul class="links-nav clearfix">

                        <li><a href="{{ url('about') }}">About us</a></li>

                        <li><a href="{{ url('quote') }}">Get Quote</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- Header Top End -->

        <!--Header-Upper-->
        <div class="header-upper hidden-sm hidden-xs ">
            <div class="auto-container">
                <div class="clearfix">

                    <div class="pull-left logo-outer">
                        <div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('images/logo.PNG') }}" alt="Upstream Logistics" title="Upstream Logistics"></a></div>
                    </div>

                    <div class="pull-right upper-right clearfix">

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-technology-2"></span></div>
                            <ul>
                                <li><strong>+256392177521/+256782809031</strong></li>
                                <li><a href="#">info@upstreamlogistics.com</a></li>
                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-location"></span></div>
                            <ul>
                                <li><strong>Regency Plaza</strong></li>
                                <li>Plot 30</li>
                                <li>Lugogo Bypass</li>
                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="social-links-one">
                                <a href="#"><span class="fa fa-facebook-f"></span></a>
                                <a href="#"><span class="fa fa-twitter"></span></a>
                                <a href="#"><span class="fa fa-google-plus"></span></a>
                                <a href="#"><span class="fa fa-linkedin"></span></a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!--Header-Lower-->
        <div class="header-lower">
            <!--Background Layer-->
            <div class="bg-layer"></div>


            <div class="auto-container">
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">

                                <li class="{{ Request::path() == '/' ? 'current' : '' }}"><a href="{{ url('/') }}">Home</a>

                                </li>
                                    <li class="{{ Request::path() == 'about' ? 'current' : '' }}"><a href="{{ url('about') }}">About Us</a></li>
                                <li class="dropdown"><a href="#">Services</a>
                                    <ul>
                                        <li><a href="{{ url('services') }}">All Services</a></li>
                                         <li><a href="{{ url('road-transport') }}">Road Transport</a></li>
                                        <li><a href="{{ url('shipping') }}">Ship Trasnport</a></li>
                                        <li><a href="{{ url('packaging-distribution') }}">Package &amp; distributoin</a></li>
                                        <li><a href="{{ url('air-freight') }}">Air Freight</a></li>
                                        <li><a href="{{ url('storage') }}">Storage &amp; Logistic</a></li>
                                    </ul>
                                </li>

                                <li class="{{ Request::path() == 'news' ? 'current' : '' }}"><a href="{{ url('news') }}">News</a></li>
                                <!--<li class="{{-- Request::path() == 'branches' ? 'current' : '' }}"><a href="{{ url('branches') --}}">Our Network</a>-->

                                </li>
                                <li class="{{ Request::path() == 'contact' ? 'current' : '' }}"><a href="{{ url('contact-us') }}">Contact Us</a></li>


                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->

                    <div class="btn-outer"><a href="{{ url('quote') }}" class="theme-btn quote-btn">REQUEST A QUOTE</a></div>

                </div>
            </div>
        </div>


        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="{{ url('/') }}" class="img-responsive"><img src="{{ asset('images/logo-small.PNG') }}" alt="Upstream Logistics" title="Upstream Logistics"></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="{{ Request::path() == '/' ? 'current' : '' }}"><a href="{{ url('/') }}">Home</a>

                                </li>
                                <li class="{{ Request::path() == 'about' ? 'current' : '' }}"><a href="{{ url('about') }}">About Us</a></li>
                                <li class="dropdown"><a href="#">Services</a>
                                    <ul>
                                        <li><a href="{{ url('services') }}">All Services</a></li>
                                         <li><a href="{{ url('road-transport') }}">Road Transport</a></li>
                                        <li><a href="{{ url('shipping') }}">Ship Trasnport</a></li>
                                        <li><a href="{{ url('packaging-distribution') }}">Package &amp; distributoin</a></li>
                                        <li><a href="{{ url('air-freight') }}">Air Freight</a></li>
                                        <li><a href="{{ url('storage') }}">Storage &amp; Logistic</a></li>
                                    </ul>
                                </li>

                                <li class="{{ Request::path() == 'news' ? 'current' : '' }}"><a href="{{ url('news') }}">News</a>

                                </li>
                                <li class="{{ Request::path() == 'contact' ? 'current' : '' }}"><a href="{{ url('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div><!--End Sticky Header-->

    </header>