@extends('layout.frontend')

@section('content')
<section class="inner-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-8 col-12">
                <div class="inner-breadcrumb-title">
                    <h2>About Us</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-4 col-12 ibt">
                <div class="inner-breadcrumb-text">
                    <ul>
                        <li class="bread-link"><a href="index.php"><i class="fa fa-home"></i></a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="inner-about sec-padding">
    <div class="inner-about-text">
        <div class="container">
            <div class="sec-title">
                <h2>A New Way to Sucess</h2>
            </div>
            <p>Nirman Tools established in the year 2018 is Nepal's 1st online portal who provide various brands
                machinery, power tools and hardware products under one roof with the use of fingertips. Nirman Tools
                company focuses on supplying DIY Power Tools, Safety equipment, Machinery and Hardware Items for
                different Industry. Nirman Machinery and power tools kit is totally internet based business which is
                meant to make easy to customers. By this medium one can choose various product in one umbrella of web
                portal and application. Nirmaan Machinery is established to fulfill the gap with genuine products and
                prices. Nirman tools Pvt. Ltd. will be the online hub and shop which provides machinery products,
                Hardware products and power tools to various Industry throughout the country.Nirman Machinery and Power
                tools is established with the need and demand of the current situation to fulfill the need by supplying
                machinery and power tools in urban and rural areas of Nepal by using Information technology to
                industries of various sector. So the main reason to use Nirman Machinery and Power tools website and
                application is to simplify the daily use in your fingertips.</p>
        </div>
    </div>
    <div class="inner-about-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="ias-single">
                        <div class="iass-img">
                            <img src="{{ asset('frontend/images/ab (1).png') }}" alt="">
                        </div>
                        <div class="iass-text">
                            <h4>Carpenter Industry</h4>
                            <p>As Carpenter Industry covers from Jungle wood to fancy design furniture, as in this
                                process there is used of various machinery and tools.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="ias-single">
                        <div class="iass-img">
                            <img src="{{ asset('frontend/images/ab (6).png') }}" alt="">
                        </div>
                        <div class="iass-text">
                            <h4>Metal Industry</h4>
                            <p>In development process iron is most used product and to provide tools for this sector is
                                our main motto.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="ias-single">
                        <div class="iass-img">
                            <img src="{{ asset('frontend/images/ab (5).png') }}" alt="">
                        </div>
                        <div class="iass-text">
                            <h4>Construction Industry</h4>
                            <p>There are various products used in Construction Industry and to provide related product
                                with reliability is our main focus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="ias-single">
                        <div class="iass-img">
                            <img src="{{ asset('frontend/images/ab (4).png') }}" alt="">
                        </div>
                        <div class="iass-text">
                            <h4>Electrician Sector</h4>
                            <p>Another target group is electrician sector, to provide products to related customer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="ias-single">
                        <div class="iass-img">
                            <img src="{{ asset('frontend/images/ab (3).png') }}" alt="">
                        </div>
                        <div class="iass-text">
                            <h4>Household Sector</h4>
                            <p>Without hiring mechanic we can perform simple task by using various tools which is
                                provided by Nirman tools.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="ias-single">
                        <div class="iass-img">
                            <img src="{{ asset('frontend/images/ab (2).png') }}" alt="">
                        </div>
                        <div class="iass-text">
                            <h4>Safety Equipment</h4>
                            <p>Safety is the first priority and Nirman tools provides safety equipment's for different
                                industry and households sector.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="inner-about-counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="inner-about-counter-single">
                        <i class="far fa-gem"></i>
                        <h2 class="number years">2</h2>
                        <h3>Years in Business</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="inner-about-counter-single">
                        <i class="fas fa-user-friends"></i>
                        <h2 class="number users">1000</h2>
                        <h3>Happy Clients</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="inner-about-counter-single">
                        <i class="fas fa-university"></i>
                        <h2 class="number">7</h2>
                        <h3>Branches</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="inner-about-counter-single">
                        <i class="fas fa-tools"></i>
                        <h2 class="number money">10</h2>
                        <h3>Variety Products</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="inner-testimonials">
        <div class="container">
            <div class="inner-testimonials-slider">
                <div class="inner-testimonials-single">
                    <div class="mts-img">
                        <img src="{{ asset('frontend/images/test (2).jpg') }}" alt="">
                    </div>
                    <div class="mts-text">
                        <p>Aenean vel elit scelerisque mauris. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus
                            vitae.
                            Nunc sed id semper risus in hendrerit gravida.</p>
                        <h4>Alex Anderson</h4>
                        <span>CEO, Arrow Net</span>
                    </div>
                </div>
                <div class="inner-testimonials-single">
                    <div class="mts-img">
                        <img src="{{ asset('frontend/images/test (3).jpg') }}" alt="">
                    </div>
                    <div class="mts-text">
                        <p>Sollicitudin tempor aenean vel elit scelerisque mauris. id eu nisl gravida nunc mi ipsum
                            faucibus
                            vitae.
                            Nunc sed id semper risus in hendrerit.</p>
                        <h4>Watson Fitter</h4>
                        <span>Co-founder, WRR</span>
                    </div>
                </div>
                <div class="inner-testimonials-single">
                    <div class="mts-img">
                        <img src="{{ asset('frontend/images/test (1).jpg') }}" alt="">
                    </div>
                    <div class="mts-text">
                        <p>Aenean vel elit scelerisque mauris. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus
                            vitae.
                            Nunc sed id semper risus in hendrerit gravida.</p>
                        <h4>Alex Anderson</h4>
                        <span>Software Developer, CAN</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="inner-about-who">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="inner-about-who-text">
                        <div class="sec-title">
                            <h2>Who are we?</h2>
                            <p>Nirman Tools established in the year 2018 is Nepal's 1st online portal who provide
                                various brands machinery, power tools and hardware products under one roof with the use
                                of fingertips. Nirman Tools company focuses on supplying DIY Power Tools, Safety
                                equipment, Machinery and Hardware Items for different Industry. Nirman Machinery and
                                power tools kit is totally internet based business which is meant to make easy to
                                customers. By this medium one can choose various product in one umbrella of web portal
                                and application. Nirmaan Machinery is established to fulfill the gap with genuine
                                products and prices. Nirman tools Pvt. Ltd. will be the online hub and shop which
                                provides machinery products, Hardware products and power tools to various Industry
                                throughout the country</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="inner-about-who-img">
                        <img src="{{ asset('frontend/images/nirman post.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection