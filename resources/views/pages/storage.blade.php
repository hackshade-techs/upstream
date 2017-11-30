@extends('layouts.app')

@section('title')
    Road Transport
@endsection

@section('desc')
    With our over 5million square meters of warehouse space we manage, own or lease and our wide presence across the region
@endsection

	@section('content')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title.jpg);">
    	<div class="auto-container">
        	<h1>Storage & Logistics</h1>
        </div>
    </section>

    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<div class="bread-crumb text-center"><a href="{{ url('/') }}">Home</a> <span class="fa fa-angle-right"></span> <a href="#" class="current">Service Single</a></div>
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

                        <h2 class="service-title">Storage & Logistics</h2>
                        <!--Default Text Block-->
                        <div class="text">
                            <p>
                                With our over 5million square meters of warehouse space we manage, own or lease and our wide presence across the region; Upstream logistics offers a full range of secure conventional storage of merchandise through more complex solutions, distribution platforms and value added supply chain.
                            </p>
                            <p>
                                By offering a comprehensive service offering, we are able to manage all of your supply chain while optimizing your feeds, your inventory and costs. You can concentrate on your heart business and dedicate your resources to your development.
                            </p>
                            <p>
                                Whether it’s buyers’ consolidation in China, or pick-and-pack in the UK, we can handle your requirements. We have an in-house management system, which will allow you to view the status of your product 24-7, throughout the globe. And if there’s ever a problem? We do pick up the phone. Nothing can replace a personal conversation in getting your shipment back on track.
                            </p>

                        </div>

                        <!--Default Two Column-->


                    </section>

                </div><!--End Content Side-->



            </div>
        </div>
    </div>
	@stop