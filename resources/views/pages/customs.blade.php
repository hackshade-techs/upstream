@extends('layouts.app')
@section('title')
    Customs Brokerage
@endsection

@section('desc')
    Customs can be one of the major blocks in forwarding freight. And lost time means lost profits. We have our own customs clearance departments and a committed multilingual staff.
@endsection

	@section('content')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title.jpg);">
    	<div class="auto-container">
        	<h1>Customs Brokerage</h1>
        </div>
    </section>

    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<div class="bread-crumb text-center"><a href="{{ url('/') }}">Home</a> <span class="fa fa-angle-right"></span> <a href="#" class="current">Customs Brokerage</a></div>
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

                        <h2 class="service-title">Customs Brokerage</h2>
                        <!--Default Text Block-->
                        <div class="text">
                            <p>Customs can be one of the major blocks in forwarding freight. And lost time means lost profits. We have our own customs clearance departments and a committed multilingual staff. Along with years of experience in customs brokerage throughout Africa, Europe, the USA and Asia, we can get your shipments cleared at minimal cost and stress to you.</p>
                        </div>





                    </section>

                </div><!--End Content Side-->



            </div>
        </div>
    </div>
	@stop