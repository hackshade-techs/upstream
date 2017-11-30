@extends('layouts.app')

@section('title')
   Request for a Quote
@endsection

@section('desc')
    Looking for a reliable company to do freight for you, Don't look any further Request for a quote right now.
@endsection

@section('content')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title.jpg);">
    	<div class="auto-container">
        	<h1>Request A Quote</h1>
        </div>
    </section>


    <!--Request Quote Section-->
    <section class="request-quote">
    	<div class="auto-container">


            <div class="row clearfix">
                <!--Form Column-->
                <div class="form-column col-md-7 col-sm-12 col-xs-12 pull-right">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="get-quote default-form style-two">
                            <form method="post" action="{{ route('quotes.store') }}">
                            {{ csrf_field() }}
                            @include('includes.errors')
                            @include('includes.success')
                                <div class="row clearfix">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="name" value="" placeholder="Name" required>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="email" value="" placeholder="Email Address" required>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" name="phone" value="" placeholder="Phone Number">
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <select class="form-control" name="freight_type" placeholder="" required>
                                            <option value="road">Choose freight type</option>
                                            <option value="air">Air</option>
                                            <option value="road">Road</option>
                                            <option value="water">Water</option>
                                            <option value="railway">Railway</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" name="dept_location" value="" placeholder="Depature Location" required>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" name="delivery_location" value="" placeholder="Deliver Location" required>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" name="weight" value="" placeholder="Goods Weight" required>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="message" placeholder="Message" required></textarea>
                                    </div>
                                </div>

                                <button type="submit" class="theme-btn btn-style-two">Submit Request</button>

                            </form>

                        </div>
                    </div>
                </div>

                <!--Image Column-->
                <div class="image-column col-md-5 col-sm-12 col-xs-12 pull-left">
                    <figure class="image-box wow slideInLeft" data-wow-duration="1500ms"><img class="img-responsive" src="images/resource/advisor-image-2.jpg" alt=""></figure>
                </div>

            </div>
        </div>
    </section>
@stop