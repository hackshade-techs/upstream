<!--Main Footer-->
    <footer class="main-footer" style="background-image:url(images/background/image-5.jpg);">

        <!--Footer Upper-->
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
                        <div class="footer-widget about-widget">
                            <h2>About Us</h2>
                            <div class="text">
                                <p>Upstream Logistics is a prime merchandise transportation, logistics and warehouse distribution specialist. Upstream Logistics is devoted regional and dedicated transportation along with consolidation and logistics services for your merchandise.</p>
                            </div>

                            <div class="newsletter-form">
                                @include('includes.success')
                                @include('includes.errors')
                                <form method="post" action="{{ url('subscription') }}">
                                    <div class="form-group">
                                        <input type="email" name="email"  placeholder="Your Email" required>
                                        <button type="submit" class=""><span class="flaticon-send-symbol"></span></button>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
                        <div class="footer-widget latest-news">
                            <h2>Recent News</h2>
                            <!--News Item-->
                            <div class="news-item">
                                <h4><a href="{{ url('news') }}" class="news-title">Upstream Logistics is bringing in standard fleet of vehicles</a></h4>
                                <div class="update-time">24 Sep, 2016</div>
                            </div>
                            <!--News Item-->
                            <div class="news-item">
                                <h4><a href="{{ url('news') }}" class="news-title">Why Upstream Logistics is the best in current market place

</a></h4>
                                <div class="update-time">24 Sep, 2016</div>
                            </div>
                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
                        <div class="footer-widget links-widget">
                        <h2>Quick Links</h2>
                            <ul>
                                <li><a href="{{ url('services') }}">service</a></li>
                                <li><a href="{{ url('contact') }}">FAQ &amp; Help Center</a></li>
                                <li><a href="{{ url('about') }}">About us</a></li>
                                <li><a href="{{ url('contact-us') }}">contact us</a></li>
                                <li><a href="{{ url('news') }}">News</a></li>
                                <li><a href="{{ url('admin/login') }}">Login</a></li>

                            </ul>

                        </div>
                    </div>

                    <!--Footer Column-->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column">
                        <div class="footer-widget gallery-widget">
                            <h2>Gallery</h2>
                            <div class="clearfix">
                                <figure class="image"><a href="images/resource/featured-image-8.jpg" class="lightbox-image" title="Road Transport"><img src="images/resource/featured-image-8.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/featured-image-6.jpg" class="lightbox-image" title="Air Freight"><img src="images/resource/featured-image-6.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/featured-image-10.jpg" class="lightbox-image" title="Road Transport"><img src="images/resource/featured-image-10.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/featured-image-1.jpg" class="lightbox-image" title="Air Freight"><img src="images/resource/featured-image-1.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/featured-image-3.jpg" class="lightbox-image" title="Ship Freight"><img src="images/resource/featured-image-3.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/featured-image-3.jpg" class="lightbox-image" title="Ship Freight"><img src="images/resource/featured-image-3.jpg" alt=""></a></figure>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <!--Copyright-->
                    <div class="pull-left">
                        <div class="copyright">&copy; Copyrights 2017 <a href="" target="_blank">HackShade Techs</a>. All rights reserved</div>
                    </div>
                    <!--Social Links-->
                    <div class="pull-right">
                        <div class="social-links">
                            <a href="{{ url('https://www.facebook.com/Upstreamlogistics/') }}"><span class="fa fa-facebook-f"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                            <a href="#"><span class="fa fa-instagram"></span></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </footer>
