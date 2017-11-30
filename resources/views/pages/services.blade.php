@extends('layouts.app')

@section('title')
    Services
@endsection

@section('desc')
    We offer service such as freight of different types including Road transport, Air freight, Railway, Ship Transport, Industrial Projects, Ware housing at the best rates possible.
@endsection

@section('content')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title.jpg);">
        <div class="auto-container">
            <h1>Services</h1>
        </div>
    </section>

    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
        <div class="auto-container">
            <div class="bread-crumb text-center"><a href="{{ url('/') }}">Home</a> <span class="fa fa-angle-right"></span> <a href="#" class="current">Services</a></div>
        </div>
    </div>


    <!--Sidebar Page-->
    <div class="sidebar-page-container">
        <!--Tabs Box-->
        <div class="auto-container">
            <div class="row clearfix">

                <!--Sidebar-->
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    @include('includes.sidebar')
                </div><!--End Sidebar-->

                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">

                    <!--Services Grid-->
                    <section class="services-grid">
                        <div class="row clearfix">
                            <!--Service Block-->
                            <div class="service-block col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="{{ url('road-transport') }}"><img src="images/resource/featured-image-8.jpg" alt=""></a></figure>
                                    <div class="lower-content">
                                        <h3>Road Trasport</h3>
                                        <div class="text">Interconnected with all other transport solutions: sea, air, rail or barge, road transport is at the heart of our multimodal logistics solutions in Africa.
                                        </div>
                                        <a href="{{ url('road-transport') }}" class="theme-btn read-more">Read More</a>
                                    </div>
                                    <a href="{{ url('road-transport') }}" class="theme-btn bottom-btn"><span class="flaticon-paper-plane"></span></a>

                                </div>
                            </div>

                            <!--Service Block-->
                            <div class="service-block col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="services-single.html"><img src="images/resource/featured-image-9.jpg" alt=""></a></figure>
                                    <div class="lower-content">
                                        <h3>Industrial Projects</h3>
                                        <div class="text">
                                            Upstream Logistics has many years’ experience in the oil, mining, power generation and construction industries. Our expertise in project...
                                        </div>
                                        <a href="{{ url('packaging-distribution') }}" class="theme-btn read-more">Read More</a>
                                    </div>
                                    <a href="{{ url('packaging-distribution') }}" class="theme-btn bottom-btn"><span class="flaticon-paper-plane"></span></a>

                                </div>
                            </div>

                            <!--Service Block-->
                            <div class="service-block col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="services-single.html"><img src="images/resource/featured-image-10.jpg" alt=""></a></figure>
                                    <div class="lower-content">
                                        <h3>Customs Brokerage</h3>
                                        <div class="text">Customs can be one of the major blocks in forwarding freight. And lost time means lost profits. We have our own customs clearance departments...</div>
                                        <a href="{{ url('customs') }}" class="theme-btn read-more">Read More</a>
                                    </div>
                                    <a href="{{ url('customs') }}" class="theme-btn bottom-btn"><span class="flaticon-paper-plane"></span></a>

                                </div>
                            </div>

                            <!--Service Block-->
                            <div class="service-block col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="{{ url('shipping') }}"><img src="images/resource/featured-image-5.jpg" alt=""></a></figure>
                                    <div class="lower-content">
                                        <h3>Ship Transport </h3>
                                        <div class="text">We ship thousands of containers worldwide every year.  Taking care of the delivery ........</div>
                                        <a href="{{ url('shipping') }}" class="theme-btn read-more">Read More</a>
                                    </div>
                                    <a href="{{ url('shipping') }}" class="theme-btn bottom-btn"><span class="flaticon-paper-plane"></span></a>

                                </div>
                            </div>

                            <!--Service Block-->
                            <div class="service-block col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="{{ url('air-freight') }}"><img src="images/resource/featured-image-6.jpg" alt=""></a></figure>
                                    <div class="lower-content">
                                        <h3>Air Freight</h3>
                                        <div class="text">
                                            If you have a shipment that has to be delivered as quickly as possible, our air freight service can help...
                                        </div>
                                        <a href="{{ url('air-freight') }}" class="theme-btn read-more">Read More</a>
                                    </div>
                                    <a href="{{ url('air-freight') }}" class="theme-btn bottom-btn"><span class="flaticon-paper-plane"></span></a>

                                </div>
                            </div>

                            <!--Service Block-->
                            <div class="service-block col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <figure class="image-box"><a href="{{ url('storage') }}"><img src="images/resource/featured-image-7.jpg" alt=""></a></figure>
                                    <div class="lower-content">
                                        <h3>Warehousing</h3>
                                        <div class="text">With our over 5million square meters of warehouse space we manage,...</div>
                                        <a href="{{ url('storage') }}" class="theme-btn read-more">Read More</a>
                                    </div>
                                    <a href="{{ url('storage') }}" class="theme-btn bottom-btn"><span class="flaticon-paper-plane"></span></a>

                                </div>
                            </div>



                        </div>
                    </section>

                </div><!--End Content Side-->



            </div>
        </div>
    </div>


@stop
