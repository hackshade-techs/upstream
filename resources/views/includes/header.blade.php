<header class="main-header header-style-two">
        <!--Header Main Box-->
        <div class="header-main-box">
            <div class="auto-container clearfix">
                <div class="pull-left logo-outer">
                    <div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('images/logo.PNG') }}" alt="Upstream logistics" title="Upstream logistics"></a></div>
                </div>

                <div class="nav-outer pull-right clearfix">
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
                                <li><a href="{{ url('about') }}">About Us</a></li>
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
                                <li class="{{ Request::path() == 'contact' ? 'current' : '' }}"><a href="{{ url('contact-us') }}">Contact Us</a></li>


                                                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->

                    <!--Search Btn-->
                    <div class="search-box-btn"><span class="icon fa fa-search"></span></div>

                </div>
            </div>
            <div class="btn-outer"><a href="{{ url('quotes') }}" class="theme-btn quote-btn hidden-sm hidden-xs">REQUEST A QUOTE</a></div>

        </div>
    </header>