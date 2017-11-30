@extends('layouts.app')

@section('title')
    Contact Us
@endsection

@section('desc')
    You can reach us on the address below or send us an Email or call on the Phone Numbers below. Plot 30, Lugogo Bypass, Regency Plaza, (+256) 701-809-030 / (+256) 782-809-031, info@upstreamlogistics.com
@endsection

@section('content')
        <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title.jpg);">
        <div class="auto-container">
            <h1>Contact Us</h1>
        </div>
    </section>

    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
        <div class="auto-container">
            <div class="bread-crumb text-center"><a href="{{ url('/') }}">Home</a> <span class="fa fa-angle-right"></span> <a href="#" class="current">Contact Us</a></div>
        </div>
    </div>




    <!--Contact Section-->
    <section class="contact-section no-padd-top">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Form Column-->
                <div class="column form-column col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <h2>Send Us Message</h2>
                    <!--Default Form-->
                    <div class="default-form style-two">
                        <form method="post" action="{{ route('contacts.store') }}" id="">
                        {{ csrf_field() }}
                        @include('includes.success')
                        @include('includes.errors')
                            <div class="row clearfix">
                                <div class="col-md-12 col-sm-12 co-xs-12 form-group">
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Full Name" required="required">
                                </div>
                                <div class="col-md-12 col-sm-12 co-xs-12 form-group">
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email Address" required="required">
                                </div>
                                 <div class="col-md-12 col-sm-12 co-xs-12 form-group">
                                    <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone" required="required">
                                </div>
                                <div class="col-md-12 col-sm-12 co-xs-12 form-group">
                                    <textarea name="message" placeholder="Message" required="required">{{ old('message') }}</textarea>
                                </div>
                            </div>

                            <div class="text-left"><button type="submit" class="theme-btn btn-style-one">Send Messgae</button></div>

                        </form>
                    </div>
                </div>

                <!--Info Column-->
                <div class="column info-column col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <h2>Our Address</h2>
                    <div class="info-box">
                        <div class="desc-text">
                        You can reach us on the address below or send us an Email or call on the Phone Numbers below.
                        </div>
                        <ul class="contact-info">
                            <li><div class="icon"><span class="flaticon-location"></span></div><strong>Address</strong> Plot 30, Lugogo Bypass, Regency Plaza,</li>
                            <li><div class="icon"><span class="flaticon-envelope-1"></span></div><strong>Email</strong>  info@upstreamlogistics.com / kakama.amon@upstreamlogistics.com</li>
                            <li><div class="icon"><span class="flaticon-technology-2"></span></div><strong>Phone</strong>  (+256) 701-809-030 / (+256) 782-809-031</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
@stop
