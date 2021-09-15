<?php
    $no_of_item_in_product_session = 0;
    // here we split the category so that we can print them in navbar easily.
    $splitted_product_category = $product_category->split(4) ;


    if(session()->has('product'))
    {
        $product_session = session()->get('product');
        $no_of_item_in_product_session = count($product_session);
    }
?>
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="header-top-right">
                        <ul>
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>
                                    9860238587</a></li>
                            <li><a href="#">FAQ's </a></li>
                            @auth
                            <li><a href="{{ route('customer.dashboard') }}"><i class="fas fa-user"></i>Dashboard</a>
                                {{-- <li class="nav-dashboard"><i class="fas fa-user"></i>Dashboard
                            <ul id="nav-dashboard-list">
                                <li><a href="{{ route('customer.dashboard') }}">My Account</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                        </li> --}}
                        @else
                        <li><a href="{{ route('login') }}"><i class="fas fa-user"></i>Login</a></li>
                        <li><a href="{{ route('register') }}"><i class="fas fa-sign-in-alt"></i>Sign Up</a></li>
                        @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 order-lg-1 order-md-1 order-sm-1 order-1">
                    <div class="header-middle-left">
                        <a href="{{ route('frontend_index') }}"><img src="{{ asset('frontend/images/logo.png') }}"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 col-12 order-lg-2 order-md-3 order-sm-3 order-3 hbm ">
                    <div class="header-middle-mid">
                        <div class="header-middle-search">
                            <form action="{{ route('frontend.search') }}" method="GET">
                                @csrf
                                <input type="text" placeholder="Search Keyword" name="search" required>
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-9 col-sm-8 col-6 order-lg-3 order-md-2  order-sm-2 order-2 hbr">
                    <div class="header-middle-right">
                        <ul>
                            <li class="header-fav">
                                @auth
                                <a href="{{ route('customer.wishlist.index') }}">Wishlist<i
                                        class="far fa-heart"></i></a>
                                @else
                                <a href="#" class="unauth-wishlist"><span>Wishlist</span><i class="far fa-heart"></i></a>
                                @endauth
                            </li>
                            <li class="header-track">
                                <a href="#"><span>Track Your Order</span><i class="fas fa-random"></i></a>
                            </li>

                            <li class="header-cart">
                                <a href="{{ route('cart.index') }}">
                                    <i class="fas fa-shopping-cart"></i>
                                    @if (Cart::count() > 0)
                                    <span class="cart-value">
                                        {{ Cart::count() }}
                                    </span>
                                    @endif
                                </a>
                            </li>


                            {{-- no_of_item_in_product_session variable comes from session not controller --}}
                            @if ($no_of_item_in_product_session >0)
                            <li class="header-compare">
                                <a href="{{ route('compare.index') }}" title="Compare">
                                    <i class="fas fa-random"></i></a>

                                <span class="cart-value">
                                    {{ $no_of_item_in_product_session }}
                                </span>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container-fluid">
            <div class="menu">
                <ul>
                    <li class="link-item"><a href="#">All Products</a>
                        <ul class="link-row">
                            @for ($i = 0; $i < 4; $i++) @foreach ($splitted_product_category[$i] as $item) <li
                                class="link-col">
                                <div class="drop-down-fancy">
                                    <ul>
                                        <li>
                                            <a href="#">{{ $item->name }}</a>
                                        </li>
                                    </ul>
                                </div>
                    </li>
                    @endforeach
                    @endfor
                </ul>
                </li>
                @foreach ($product_category as $categories)
                <li class="link-item"><a href="#">{{ $categories->name }}</a>
                    <ul class="link-row">
                        <li class="link-col">
                            <div class="drop-down-fancy">
                                @foreach ($categories->product as $product)
                                <a href="{{ route('frontend.product_single',$product->slug) }}" class="drop-down-item">
                                    @if ( empty($product->featured_image) )
                                    <img src="{{ asset('default_images/logo.png') }}" alt="image.jpeg">
                                    @else
                                    <img src="{{ asset('images/'.$product->featured_image) }}" alt="image.jpeg">
                                    @endif
                                    <span>{{ $product->title }}</span>
                                </a>
                                @endforeach

                                <a href="#" class="drop-down-item ddi-more">
                                    <img src="{{ asset('frontend/images/seemore.png') }}" alt="">
                                    <span>See More ...</span>
                                </a>

                            </div>

                        </li>
                    </ul>
                </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</header>