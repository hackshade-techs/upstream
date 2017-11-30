<aside class="sidebar">

    <!--Sidebar Widget / Styled Nav-->
    <div class="widget sidebar-widget styled-nav">
        <nav class="nav-outer">
            <ul>
                <li class="{{ Request::path() == 'services' ? 'current' : '' }}"><a href="{{ url('services') }}">All Services</a></li>
                <li class="{{ Request::path() == 'road-transport' ? 'current' : '' }}"><a href="{{ url('road-transport') }}">Road Transport</a></li>
                <li class="{{ Request::path() == 'shipping' ? 'current' : '' }}"><a href="{{ url('shipping') }}">Ship Trasnport</a></li>
                <li class="{{ Request::path() == 'packaging-distribution' ? 'current' : '' }}"><a href="{{ url('packaging-distribution') }}">Industrial Projects</a></li>
                <li class="{{ Request::path() == 'air-freight' ? 'current' : '' }}"><a href="{{ url('air-freight') }}">Air Freight</a></li>
                <li class="{{ Request::path() == 'storage' ? 'current' : '' }}"><a href="{{ url('storage') }}">Storage &amp; Logistic</a></li>
                <li class="{{ Request::path()=='customs' ? 'current': '' }}"><a href="{{ url('customs') }}">Customs Brokerage</a></li>
            </ul>
        </nav>
    </div>
    <!--Sidebar Widget / Contact Widget-->
    <div class="widget sidebar-widget contact-widget">
        <h3>Have any Questions?</h3>
        <div class="text">Send us a message</div>
        <a href="{{ url('contact-us') }}" class="theme-btn btn-style-one">Contact us</a>
    </div>

    <!--Sidebar Widget / Contact Widget-->
    <div class="widget sidebar-widget contact-widget">
        <h3>Or</h3>
    </div>

    <!--Sidebar Widget / Contact Widget-->
    <div class="widget sidebar-widget contact-widget">
        <h3>Call Us:</h3>
        <h4 class="phone-numbers">
        	+256 392177521
        </h4>
        <h3>For Details</h3>
    </div>

</aside>