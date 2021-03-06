@extends('layouts.app')

@section('title')
    {{ $result->title }}
@endsection

@section('desc')

@endsection

@section('content')
	    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title.jpg);">
    	<div class="auto-container">
        	<h1 style="text-transform: lowercase; font-size: 23px;">{{ $result->title }}</h1>
        </div>
    </section>

    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<div class="bread-crumb text-center"><a href="{{ url('/') }}">Home</a> <span class="fa fa-angle-right"></span> <a href="#" class="current">{{ substr($result->title, 0, 15) }}</a></div>
        </div>
    </div>


    <!--Sidebar Page-->
    <div class="sidebar-page-container">
    	<!--Tabs Box-->
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12 padd-right-50">

                    <!--News Section-->
                    <section class="news-section no-padd-bottom no-padd-top">

                        <!--Default News Post-->

                        <div class="default-news-post">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <figure class="image-box"><img style="max-height: 400px;" src="{{ asset($result->image) }}" alt=""><a class="overlay" href="{{ url('news/'.$result->slug) }}"></a></figure>
                                <div class="lower-content">
                                    <div class="info"><a href="{{ url('news/category/'.$result->category->slug) }}">{{ $result->category->name }}</a> &ensp;/&ensp; {{ $result->created_at->toFormattedDateString() }}</div>
                                    <h3><a href="{{ url('news/'.$result->slug) }}">{{ $result->title }} </a></h3>
                                    <div class="text">{!! $result->content !!}</div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div id="disqus_thread"></div>
                    <script>

                    /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://upstreamlogistics-com.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


                </div><!--End Content Side-->

                <!--Sidebar-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <aside class="sidebar">

                        <!-- Search Form -->
                        <div class="sidebar-widget search-box">
                            <form method="get" action="{{ url('news') }}">
                                <div class="form-group">
                                    <input type="search" name="q" value="" placeholder="Search Here">
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>

                        </div>


                        <!-- Recent Posts -->
                        <!--
                        <div class="sidebar-widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h2>Recent News</h2></div>

                            <article class="post">
                            	<figure class="post-thumb"><img src="images/resource/post-thumb-1.jpg" alt=""></figure>
                                <h4><a href="#">Easy your wat to the Global sotck marketing...</a></h4>
                                <div class="post-info">Posted by <a href="#">Rashed Kabir</a></div>
                            </article>

                            <article class="post">
                            	<figure class="post-thumb"><img src="images/resource/post-thumb-2.jpg" alt=""></figure>
                                <h4><a href="#">Easy your wat to the Global sotck marketing...</a></h4>
                                <div class="post-info">Posted by <a href="#">Tafseer</a></div>
                            </article>

                            <article class="post">
                            	<figure class="post-thumb"><img src="images/resource/post-thumb-3.jpg" alt=""></figure>
                                <h4><a href="#">Easy your wat to the Global sotck marketing...</a></h4>
                                <div class="post-info">Posted by <a href="#">Muhhibbur</a></div>
                            </article>


                        </div>-->

                        <!-- Popular Categories -->
                        <!--<div class="sidebar-widget popular-categories wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h2>Categories</h2></div>

                            <ul class="list">
                                <li><a href="#">Budget</a></li>
                                <li><a href="#">Account</a></li>
                                <li><a href="#">Investment</a></li>
                                <li><a href="#">Stock</a></li>
                                <li><a href="#">Financial</a></li>
                            </ul>

                        </div>-->

                        <!-- Popular Tags -->
                        <!--<div class="sidebar-widget popular-tags">
                            <div class="sidebar-title"><h2>Keyword</h2></div>

                            <a href="#">Ideas</a>
                            <a href="#">Planning</a>
                            <a href="#">Agents</a>
                            <a href="#">Body</a>
                            <a href="#">Budgets</a>
                            <a href="#">Finance</a>

                        </div>-->

                    </aside>

                </div>
                <!--Sidebar-->


            </div>
        </div>
    </div>
@stop
