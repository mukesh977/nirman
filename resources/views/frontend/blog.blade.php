@extends('layout.frontend')

@section('content')
<section class="inner-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-8 col-12">
                <div class="inner-breadcrumb-title">
                    <h2>Blog - Title</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-4 col-12 ibt">
                <div class="inner-breadcrumb-text">
                    <ul>
                        <li class="bread-link">
                            <a href="{{ route('frontend_index') }}">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li class="bread-link">
                            <a href="{{ route('frontend.blogs') }}">
                                Blogs
                            </a>
                        </li>
                        <li>
                            Blog-title
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="inner-blog sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="ib-content">
                    <div class="ib-img">
                        <img src="{{ asset('frontend/images/bread.jpg') }}" alt="">
                    </div>
                    <ul class="ib-desc">
                        <li><i class="fas fa-user-circle"></i>
                            <span>
                                Author
                            </span>
                        </li>
                        <li>
                            <i class="far fa-calendar-alt"></i>
                            <span>
                                15th September, 2022
                            </span>
                        </li>
                    </ul>
                    <div class="ib-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores eaque tempora fugiat
                            neque,
                            accusantium, animi dignissimos earum nihil dolore velit, maxime ullam. Sequi dolorum hic
                            labore
                            fugiat animi nesciunt ipsum? Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora officia unde ducimus nobis
                            ipsa non cupiditate, laboriosam minima assumenda accusamus eveniet, necessitatibus
                            asperiores
                            adipisci. Tenetur perferendis deleniti vitae libero eum!
                            Molestiae, enim itaque hic perferendis, rem ab accusamus deserunt, debitis consequatur quasi
                            molestias vero omnis architecto minima sed adipisci quisquam non repellat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores eaque tempora fugiat
                            neque,
                            accusantium, animi dignissimos earum nihil dolore velit, maxime ullam. Sequi dolorum hic
                            labore
                            fugiat animi nesciunt ipsum? Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora officia unde ducimus nobis
                            ipsa non cupiditate, laboriosam minima assumenda accusamus eveniet, necessitatibus
                            asperiores
                            adipisci. Tenetur perferendis deleniti vitae libero eum!
                            Molestiae, enim itaque hic perferendis, rem ab accusamus deserunt, debitis consequatur quasi
                            molestias vero omnis architecto minima sed adipisci quisquam non repellat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="related-news">
                    <div class="rn-title">
                        <h6>RELATED NEWS</h6>
                    </div>
                    <div class="rn-single j-c-c">
                        <div class="rn-left">
                            <a href="#">
                                <img src="{{ asset('frontend/images/bread.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="rn-right">
                            <a href="#">
                                <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </h6>
                            </a>
                        </div>
                    </div>
                    <div class="rn-single j-c-c">
                        <div class="rn-left">
                            <a href="#">
                                <img src="{{ asset('frontend/images/bread.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="rn-right">
                            <a href="#">
                                <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </h6>
                            </a>
                        </div>
                    </div>
                    <div class="rn-single j-c-c">
                        <div class="rn-left">
                            <a href="#">
                                <img src="{{ asset('frontend/images/bread.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="rn-right">
                            <a href="#">
                                <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </h6>
                            </a>
                        </div>
                    </div>
                    <div class="rn-single j-c-c">
                        <div class="rn-left">
                            <a href="#">
                                <img src="{{ asset('frontend/images/bread.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="rn-right">
                            <a href="#">
                                <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection