@extends('layouts.app')

@section('title')
    Road Transport
@endsection

@section('desc')
    Upstream logistics has a unique proven expertise in all road transport freight with the best drivers that you can imagine.
@endsection

	@section('content')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title.jpg);">
    	<div class="auto-container">
        	<h1>Road Transport</h1>
        </div>
    </section>

    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<div class="bread-crumb text-center"><a href="{{ url('/') }}">Home</a> <span class="fa fa-angle-right"></span> <a href="#" class="current">Road Transport</a></div>
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

                        <h2 class="service-title">Road Transport</h2>
                        <!--Default Text Block-->
                        <div class="text">
                        	<p>
                        		Interconnected with all other transport solutions: sea, air, rail or barge, road transport is at the heart of our multimodal logistics solutions in Africa.
								It ensures you a delivery with no equivalent on the continent.
                        	</p>
                        	<p>
                        		Upstream logistics has a unique proven expertise in the corridor management routing and all customs operations to optimize your time long-distance journeys.
								It is based on the mesh density equivalent without a network of its own.
                        	</p>
                        	<p>
                        		Bringing you everywhere and in all circumstances quick answers, safe and effective, contribute to opening up Africa and facilitate the movement of raw materials, consumer goods or capital goods essential to economic development.
                        	</p>
                        </div>

                        <!--Default Two Column-->



                    </section>

                </div><!--End Content Side-->



            </div>
        </div>
    </div>
	@stop