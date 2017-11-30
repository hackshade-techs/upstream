@extends('layouts.app')

@section('title')
    Road Transport
@endsection

@section('desc')
    We ship thousands of containers worldwide every year for many brand companies both within Uganda, Kenya, Tanzania , Africa and other continents
@endsection

	@section('content')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title.jpg);">
    	<div class="auto-container">
        	<h1>Ship Transport</h1>
        </div>
    </section>

    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<div class="bread-crumb text-center"><a href="{{ url('/') }}">Home</a> <span class="fa fa-angle-right"></span> <a href="#" class="current">Ship Transport</a></div>
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

                        <h2 class="service-title">Ship Freight</h2>
                        <!--Default Text Block-->
                        <div class="text">
                            <p>
                                We ship thousands of containers worldwide every year. Taking care of the delivery from door to door, on time, seamlessly and at the right price.
                            </p>
                            <p>
                                With our partnerships with major shipping companies across the globe, we are able to use their leverage to obtain competitive rates globally. With ocean carriers undergoing major restructuring and consolidation, it’s critical that we not only have a spread of reliable carriers on all major networks, but also space commitment. It’s worthless to have great rates and no space. We guarantee both.
                            </p>

                        </div>

                        <!--Default Two Column-->



                    </section>

                </div><!--End Content Side-->



            </div>
        </div>
    </div>
	@stop