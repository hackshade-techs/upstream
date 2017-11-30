@extends('layouts.app')

@section('title')
    Air Freight, Road Transport, Ship Transport, Storage &amp; Logistics, Package &amp; Distribution
@endsection

@section('desc')
    Upstream Logistics is a prime merchandise transportation, logistics and warehouse distribution specialist. Upstream Logistics is devoted regional and dedicated transportation along with consolidation and logistics services for your merchandise.
@endsection

@section('content')
    <!--Welcome Section-->
    <section class="welcome-section">
        <div class="auto-container">

            <div class="row clearfix">

                <!--Image Column-->
                <div class="column image-column col-md-4 col-sm-6 col-xs-12">
                    <figure class="image-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2000ms"><img src="images/resource/featured-image-4.jpg" alt=""></figure>
                </div>

                <!--Content Column-->
                <div class="column content-column col-md-8 col-sm-6 col-xs-12">
                    <div class="title-box">
                        <h3>Welcome To Upstream Logistics</h3>
                    </div>

                    <div class="featured-text">Upstream Logistics is a prime merchandise transportation, logistics and warehouse distribution specialist. Upstream Logistics is devoted regional and dedicated transportation along with consolidation and logistics services for your merchandise.</div>


                    <ul class="styled-list-one clearfix">
                        <li><strong>Trusted Partners</strong>Over 10 Years</li>
                        <li><strong>Large Community</strong>Over 80k Members</li>
                        <li><strong>Quality Support</strong>Anytime 24 Hours</li>
                    </ul>

                    <a href="{{ url('about') }}" class="theme-btn btn-style-one">Learn More About us <span class="fa fa-caret-right"></span></a>

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
                        <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="570">0</span></div>
                        <h4 class="counter-title">Awards</h4>
                    </div>
                </div>

                <!--Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 column counter-column wow fadeIn" data-wow-duration="0ms">
                    <div class="inner">
                        <div class="icon-box"><span class="flaticon-placeholder"></span></div>
                        <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="48">0</span></div>
                        <h4 class="counter-title">Country</h4>
                    </div>
                </div>

                <!--Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 column counter-column wow fadeIn" data-wow-duration="0ms">
                    <div class="inner">
                        <div class="icon-box"><span class="flaticon-truck-2"></span></div>
                        <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="2310">0</span></div>
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


    <!--Services Section / Style Two-->
    <section class="services-section style-two" style="background-image:url(images/background/image-2.jpg);">
        <div class="auto-container">
            <div class="sec-title light text-left">
                <h2>Our Service </h2>We offer <strong>a wide range</strong> of services inluding</div>
            </div>

            <div class="services-carousel four-column-carousel">

                <!--Service Block-->
                <div class="service-block">
                    <div class="inner-box">
                        <figure class="image-box"><a href="{{ url('services') }}"><img src="images/resource/featured-image-5.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <h3>Ship Transport </h3>
                            <div class="text">We ship thousands of containers worldwide every year. Taking care of the delivery.</div>
                            <a href="{{ url('services') }}" class="theme-btn read-more">Read More</a>
                        </div>
                        <a href="{{ url('services') }}" class="theme-btn bottom-btn"><span class="flaticon-paper-plane"></span></a>

                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block">
                    <div class="inner-box">
                        <figure class="image-box"><a href="{{ url('services') }}"><img src="images/resource/featured-image-6.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <h3>Air Freight</h3>
                            <div class="text">If you have a shipment that has to be delivered as quickly as possible, our air freight service can help....</div>
                            <a href="{{ url('services') }}" class="theme-btn read-more">Read More</a>
                        </div>
                        <a href="{{ url('services') }}" class="theme-btn bottom-btn"><span class="flaticon-paper-plane"></span></a>

                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block">
                    <div class="inner-box">
                        <figure class="image-box"><a href="{{ url('services') }}"><img src="images/resource/featured-image-7.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <h3>Warehousing</h3>
                            <div class="text">With our over 5million square meters of warehouse space we manage.</div>
                            <a href="{{ url('services') }}" class="theme-btn read-more">Read More</a>
                        </div>
                        <a href="{{ url('services') }}" class="theme-btn bottom-btn"><span class="flaticon-paper-plane"></span></a>

                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block">
                    <div class="inner-box">
                        <figure class="image-box"><a href="{{ url('services') }}"><img src="images/resource/featured-image-8.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <h3>Road Transport</h3>
                            <div class="text">Interconnected with all other transport solutions: sea, air, rail or barge, road transport is at the heart of our multimodal logistics solutions in Africa..</div>
                            <a href="{{ url('services') }}" class="theme-btn read-more">Read More</a>
                        </div>
                        <a href="{{ url('services') }}" class="theme-btn bottom-btn"><span class="flaticon-paper-plane"></span></a>

                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block">
                    <div class="inner-box">
                        <figure class="image-box"><a href="{{ url('services') }}"><img src="images/resource/featured-image-5.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <h3>Industrial Projectsw </h3>
                            <div class="text">Upstream Logistics has many years’ experience in the oil, mining, power generation and construction industries. Our expertise in project...</div>
                            <a href="{{ url('services') }}" class="theme-btn read-more">Read More</a>
                        </div>
                        <a href="{{ url('services') }}" class="theme-btn bottom-btn"><span class="flaticon-paper-plane"></span></a>

                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block">
                    <div class="inner-box">
                        <figure class="image-box"><a href="{{ url('services') }}"><img src="images/resource/featured-image-6.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <h3>Custom Brockerages</h3>
                            <div class="text">Customs can be one of the major blocks in forwarding freight. And lost time means lost profits. We have our own customs clearance departments.</div>
                            <a href="{{ url('services') }}" class="theme-btn read-more">Read More</a>
                        </div>
                        <a href="{{ url('services') }}" class="theme-btn bottom-btn"><span class="flaticon-paper-plane"></span></a>

                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block">
                    <div class="inner-box">
                        <figure class="image-box"><a href="{{ url('services') }}"><img src="images/resource/featured-image-7.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <h3>Warehousing</h3>
                            <div class="text">Lorem ipsum dolor sit amet lore ludus aliqui mei eu quando icue commodo salutatus.</div>
                            <a href="{{ url('services') }}" class="theme-btn read-more">Read More</a>
                        </div>
                        <a href="{{ url('services') }}" class="theme-btn bottom-btn"><span class="flaticon-paper-plane"></span></a>

                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block">
                    <div class="inner-box">
                        <figure class="image-box"><a href="{{ url('services') }}"><img src="images/resource/featured-image-8.jpg" alt=""></a></figure>
                        <div class="lower-content">
                            <h3>Train Service</h3>
                            <div class="text">Lorem ipsum dolor sit amet lore ludus aliqui mei eu quando icue commodo salutatus.</div>
                            <a href="{{ url('services') }}" class="theme-btn read-more">Read More</a>
                        </div>
                        <a href="{{ url('services') }}" class="theme-btn bottom-btn"><span class="flaticon-paper-plane"></span></a>

                    </div>
                </div>

            </div>

        </div>
    </section>


    <!--Default Section-->
    <section class="default-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Text Column-->
                <div class="column text-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <div class="title-box">
                            <h4>Why Choose us</h4>
                            <h2>Helping and providing best service to our client business over 10 years </h2>
                        </div>
                        <div class="text">
                            <p>Upstream Logistics is a prime merchandise transportation, logistics and warehouse distribution specialist. Upstream Logistics is devoted regional and dedicated transportation along with consolidation and logistics services for your merchandise.</p>

                        </div>
                        <div class="link-box"><a href="{{ url('services') }}" class="theme-btn btn-style-one">Learn More</a></div>
                    </div>
                </div>

                <!--Accordions Column-->
                <div class="column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <!--Accordion Box-->
                        <ul class="accordion-box">

                            <!--Block-->
                            <li class="accordion block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Reliable during delivery</div>
                                <div class="acc-content current">
                                    <div class="content clearfix">
                                        <figure class="image"><img src="images/resource/featured-thumb-1.jpg" alt=""></figure>
                                        <p>We provide services that are the standards, we are are always there when you need us to deliver.</p>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div> Support to clients</div>
                                <div class="acc-content">
                                    <div class="content clearfix">
                                        <figure class="image"><img src="images/resource/featured-thumb-1.jpg" alt=""></figure>
                                        <p>We have a dedicated team what is always there to provide support incase of any issues experienced in our services.</p>
                                    </div>
                                </div>
                            </li>

                            <!--Block-->
                            <li class="accordion block wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div> Big Transport service in history</div>
                                <div class="acc-content">
                                    <div class="content clearfix">
                                        <figure class="image"><img src="images/resource/featured-thumb-1.jpg" alt=""></figure>
                                        <p>We have done transportation for a couple of years and we assure you that we have the experience and expertese to do the job you need.</p>
                                    </div>
                                </div>
                            </li>

                        </ul><!--End Accordion Box-->
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