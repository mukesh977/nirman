@extends('layout.frontend')

@section('content')
<section class="inner-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-8 col-12">
                <div class="inner-breadcrumb-title">
                    <h2>Blog</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-4 col-12 ibt">
                <div class="inner-breadcrumb-text">
                    <ul>
                        <li class="bread-link"><a href="index.php"><i class="fa fa-home"></i></a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-blog sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="mb-single">
                    <div class="mb-image">
                        <img src="{{ asset('frontend/images/bread.jpg') }}" alt="">
                    </div>
                    <div class="mb-title">
                        <h6>Lorem, ipsum dolor sit amet consectetur adipisicing
                        </h6>
                    </div>
                    <div class="mb-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eligendi molestias sint
                            nihil nemo similique repudiandae aliquid, natus vitae expedita.</p>
                        <div class="main-graphics-text">
                            <a href="{{ route('frontend.blog') }}" class="mg-learn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-single">
                    <div class="mb-image">
                        <img src="{{ asset('frontend/images/bread.jpg') }}" alt="">
                    </div>
                    <div class="mb-title">
                        <h6>Lorem, ipsum dolor sit amet consectetur adipisicing
                        </h6>
                    </div>
                    <div class="mb-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eligendi molestias sint
                            nihil nemo similique repudiandae aliquid, natus vitae expedita.</p>
                        <div class="main-graphics-text">
                            <a href="#" class="mg-learn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-single">
                    <div class="mb-image">
                        <img src="{{ asset('frontend/images/bread.jpg') }}" alt="">
                    </div>
                    <div class="mb-title">
                        <h6>Lorem, ipsum dolor sit amet consectetur adipisicing
                        </h6>
                    </div>
                    <div class="mb-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eligendi molestias sint
                            nihil nemo similique.</p>
                        <div class="main-graphics-text">
                            <a href="#" class="mg-learn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-single">
                    <div class="mb-image">
                        <img src="{{ asset('frontend/images/bread.jpg') }}" alt="">
                    </div>
                    <div class="mb-title">
                        <h6>Lorem, ipsum dolor sit amet consectetur adipisicing
                        </h6>
                    </div>
                    <div class="mb-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eligendi molestias sint
                            nihil nemo similique repudiandae aliquid, natus vitae expedita.</p>
                        <div class="main-graphics-text">
                            <a href="#" class="mg-learn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-single">
                    <div class="mb-image">
                        <img src="{{ asset('frontend/images/bread.jpg') }}" alt="">
                    </div>
                    <div class="mb-title">
                        <h6>Lorem, ipsum dolor sit amet consectetur adipisicing
                        </h6>
                    </div>
                    <div class="mb-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eligendi molestias sint
                            nihil nemo similique.</p>
                        <div class="main-graphics-text">
                            <a href="#" class="mg-learn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- pagination here -->
        <div class="nt-pagination">


        </div>
    </div>
</section>
@endsection