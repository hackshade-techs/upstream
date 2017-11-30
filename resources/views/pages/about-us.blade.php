@extends('layouts.app')

@section('title')
    About Us
@endsection

@section('desc')
    Upstream logistics has deep roots spanning close to 10 years in the logistics industry. We have grown from strength to strength to where it is today.
@endsection

@section('content')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title.jpg);">
    	<div class="auto-container">
        	<h1>About Us</h1>
        </div>
    </section>

    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<div class="bread-crumb text-center"><a href="{{ url('/') }}">Home</a> <span class="fa fa-angle-right"></span> <a href="#" class="current">About Us</a></div>
        </div>
    </div>


    <!--Welcome Section-->
    <section class="welcome-section about-us">
    	<div class="auto-container">

            <div class="row clearfix">

                <!--Image Column-->
                <div class="column image-column col-md-4 col-sm-6 col-xs-12">
                    <figure class="image-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2000ms"><img src="images/background/image-1.jpg" alt=""></figure>
                    <figure class="image-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2000ms"><img src="images/background/image-2.jpg" alt=""></figure>
                </div>

                <!--Content Column-->
                <div class="column content-column col-md-8 col-sm-6 col-xs-12">
                	<div class="title-box">
                        <h3>We Are UpstreamLogistics</h3>
                    </div>

                    <div class="featured-text">Our Background<br>
                     <strong>Upstream logistics has deep roots spanning close to 10 years in the logistics industry. We have grown from strength to strength to where it is today.</strong></div>
                    <div class="text">

                    	<p>
						Our passion is to be Africa’s leader in logistics and air cargo handling. We are committed to continuously seek opportunities which will enable us to spread our wings further and undertake movement of cargo in the entire Africa continent.  Ultimately, wherever there is a customer shipment, we at Upstream will have the right solutions.
						</p>
						<p>
						Initially incorporated as KAKASHORES in 2010 and re-brand to current name in 2015, Upstream Logistics has come a long way from its humble beginnings with 2 trucks and 4 staff to the rapid growth company it is today. With a clear vision, ambitious strategic goals, and a blueprint for success, we have become a successful multi-modal logistics provider that serves customers worldwide.
						</p>
						<p>
						Our expertise, transparency and in-depth knowledge of markets make us your preferred business partner.
						</p>
                    </div>

                    <ul class="styled-list-one clearfix">
                    	<li><strong>Trusted Partners</strong>Over 30 Years</li>
                        <li><strong>Large Community</strong>Over 80k Members</li>
                        <li><strong>Quality Support</strong>Anytime 24 Hours</li>
                    </ul>


                </div>

            </div>
            <div class="row">
                 <div class="row">
                 	<div class="column col-md-12 col-sm-12 col-xs-12">
                 	<div class="inner-box">
                    	<!--Accordion Box / Style Threee-->
                        <ul class="accordion-box style-three">

                            <!--Block-->
                            <li class="accordion block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Our Values</div>
                                <div class="acc-content current">
                                    <div class="content clearfix">
                                        <div class="featured-text">
						                     <strong>
						                     In today’s competitive world, Upstream Logistics leadership believes it is necessary to preserve moral practices in order to stay on top. Upstream logistics has four core values in which we live and operate under. We take these values very seriously, and they are a part of everything we do.
						                     </strong>
						                 </div>
                                    </div>
                                </div>
                            </li>



                        </ul><!--End Accordion Box-->
                    </div>

                 	</div>

                 </div>

            	<div class="column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    	<!--Accordion Box / Style Threee-->
                        <ul class="accordion-box style-three">

                            <!--Block-->
                            <li class="accordion block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div> Integrity</div>
                                <div class="acc-content current">
                                    <div class="content clearfix">
                                        <p>
                                        	Every decision made at upstream logistics is based on integrity in the way we interact with our customers, vendors, carriers, community and one another.
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div> Team Effectiveness</div>
                                <div class="acc-content">
                                    <div class="content clearfix">
                                        <p>
                                        	Employees are consistently working together across business groups and geographical boundaries to implement optimal solutions for our customers. Our ability to grasp present opportunities and project the future while communicating changes will provide Upstream logistics with a leadership advantage.
                                        </p>
                                    </div>
                                </div>
                            </li>

                        </ul><!--End Accordion Box-->
                    </div>
                </div>
                <div class="column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    	<!--Accordion Box / Style Threee-->
                        <ul class="accordion-box style-three">

                            <!--Block-->
                            <li class="accordion block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div> High Performance</div>
                                <div class="acc-content current">
                                    <div class="content clearfix">
                                        <p>
                                        	Upstream’s employees are the backbone of the company’s overall success. Their hard work and dedication are the reasons why we’ve grown so much the past few years.
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div> Excellence</div>
                                <div class="acc-content">
                                    <div class="content clearfix">
                                        <p>
                                        	Upstream logistics is committed to providing its customers with the best possible service. We ensure our customer needs and expectations are always met beyond.
                                        </p>
                                    </div>
                                </div>
                            </li>



                        </ul><!--End Accordion Box-->
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!--Default Three Column-->
    <section class="default-three-column">
        <div class="auto-container">
        	<div class="row clearfix">
        		<!--Default Text Column-->
                <div class="default-text-column col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<h3>Our Mission</h3>
                        <div class="text">
                        	<p>
                        	Upstream Logistics achieves customer business goals by empowering the members of our team to go the extra mile for customers every day and effective management of change & information in the supply chain.
                        	</p>


                        </div>
                    </div>
                </div>

                <!--Default Text Column-->
                <div class="default-text-column col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<h3>How We realize our Mission</h3>
                        <div class="text">
                        	<p>
							Upstream logistics realizes our mission by empowering the members of our team to go the extra mile for customers every day.</p>

                        </div>
                    </div>
                </div>

                <!--Default Text Column-->
                <div class="default-text-column col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<h3>Our Vision</h3>
                        <div class="text">
                        	<p>
                        		To be one of the leading Logistics services provider in the region by providing passionate, personalized customer service and cutting-edge technology.
                        	</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--Fun Facts Section / Style Two-->
    <section class="fun-fact-section style-two">
        <div class="fact-counter">
            <div class="auto-container clearfix">

                <!--Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 column counter-column wow fadeIn" data-wow-duration="0ms">
                    <div class="inner">
                        <div class="icon-box"><span class="flaticon-trophy-1"></span></div>
                        <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="3">0</span></div>
                        <h4 class="counter-title">Awards</h4>
                    </div>
                </div>

                <!--Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 column counter-column wow fadeIn" data-wow-duration="0ms">
                    <div class="inner">
                        <div class="icon-box"><span class="flaticon-placeholder"></span></div>
                        <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="3">0</span></div>
                        <h4 class="counter-title">Country</h4>
                    </div>
                </div>

                <!--Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 column counter-column wow fadeIn" data-wow-duration="0ms">
                    <div class="inner">
                        <div class="icon-box"><span class="flaticon-truck-2"></span></div>
                        <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="60">0</span></div>
                        <h4 class="counter-title">Transport</h4>
                    </div>
                </div>

                <!--Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 column counter-column wow fadeIn" data-wow-duration="0ms">
                    <div class="inner">
                        <div class="icon-box"><span class="flaticon-avatar"></span></div>
                        <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="32">0</span>k</div>
                        <h4 class="counter-title">Worker</h4>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <!--Testimonials Two-->
    <section class="testimonials-two" style="background-image:url(images/background/image-3.jpg);">
        <div class="auto-container">
            <div class="sec-title light text-center">
                <h2>Testimonials</h2>
            </div>
            <div class="three-column-carousel">
                @foreach ($testmonials as $testmonial)
                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="inner-box">
                            <div class="icon-box img-circle"><span class="fa fa-quote-right"></span></div>
                            <div class="info">

                                <div class="designation">{{ $testmonial->title.'.' }} {{ $testmonial->name }}</div>
                            </div>
                            <div class="text">{!! $testmonial->testimony !!}</div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>




@stop
