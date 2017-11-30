@extends('layouts.app')

@section('title')
    Air Freight
@endsection

@section('desc')
    If you have a shipment that has to be delivered as quickly as possible, our air freight service can help
@endsection
	@section('content')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title.jpg);">
    	<div class="auto-container">
        	<h1>Air Freight</h1>
        </div>
    </section>

    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<div class="bread-crumb text-center"><a href="{{ url('/') }}">Home</a> <span class="fa fa-angle-right"></span> <a href="#" class="current">Air Freight</a></div>
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

                    <!--Single Service-->
                    <section class="single-service">

                        <!--Main Image-->
                        <figure class="main-image"><img src="images/resource/featured-image-11.jpg" alt=""></figure>

                        <h2 class="service-title">Air Freight</h2>
                        <!--Default Text Block-->
                        <div class="text">
                        <p>
                            If you have a shipment that has to be delivered as quickly as possible, our air freight service can help
                        </p>
                        <p>
                            From the smallest parcel to the chartering of a plane full, we study with you the best solution for your needs.
                            By leveraging our integrated supply chain, we combine the various modes of transport (air, sea, land, rail and water) to allow you to keep one step ahead in terms of competitiveness.
                        </p>
                        <p>
                            Our information systems guarantee total traceability for all shipments with a real-time tracking of goods entrusted to us.
                        </p>
                        <p>
                            We understand that we need to be very nimble when it comes to air shipments and that communication is key. Our recipe seems to be working with our air freight division growing two-fold each year.
                        </p>

                        </div>




                    </section>

                </div><!--End Content Side-->



            </div>
        </div>
    </div>
	@stop