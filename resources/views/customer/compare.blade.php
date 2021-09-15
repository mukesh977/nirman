<?php
    
    $no_of_session_items = 0;

    if( session()->has('product') ){
        $session_items = session()->get('product', []);
        $no_of_session_items = count($session_items);
    }

?>
@extends('layout.frontend')

@section('content')

<section class="inner-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="inner-breadcrumb-title">
                    <h2>Compare</h2>
                </div>
            </div>
            <div class="col-lg-6 ibt">
                <div class="inner-breadcrumb-text">
                    <ul>
                        <li class="bread-link"><a href="index.php"><i class="fa fa-home"></i></a></li>
                        <li>Compare</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="inner-compare sec-padding">
    <div class="container">
        <div class="inner-compare-upper">
            <div class="row">
                <div class="col-lg-6 icul">
                    <div class="inner-compare-upper-left">
                        @if ($no_of_session_items > 0)
                        <p>
                            <strong>Results:</strong> Showing <span>{{ $no_of_session_items }}</span> product(s).
                        </p>
                        @else
                        <p>
                            <strong>Results:</strong> No Items in Compare List.
                        </p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-compare-upper-right">
                        @if ($no_of_session_items > 0)
                        <form action="{{ route('compare.forget') }}" method="post">
                            @csrf
                            @method('delete')

                            <button type="submit"><i class="fas fa-times"></i>Clear
                                All</button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="inner-compare-lower">
            <div class="row">
                @foreach ($products as $item)
                <div class="col-lg-4">
                    <div class="inner-compare-single">
                        <h4><a href="{{ route('frontend.product_single',$item->slug) }}">{{ $item->title }}</a></h4>

                        @if ($item->featured_image)
                        <a href="{{ route('frontend.product_single',$item->slug) }}"> <img src="{{ asset('images/'.$item->featured_image)}}" alt=""></a>
                        @else
                        <img src="{{ asset('default_images/logo.png') }}" alt="image.jpeg">
                        @endif

                        <div class="ics-meta">
                            <span class="ics-price">
                                <Strong>Price</Strong>
                                Rs {{ ($item->sale_price)?$item->sale_price:$item->regular_price }}
                            </span>
                            <span class="ics-btns">
                                <form action="{{ route('compare.destroy',$item->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="product-remove" title="Remove">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                                @if ($item->stock > 0)
                                <form method="post" action="{{ route('cart.store') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <input type="hidden" name="title" value="{{ $item->title }}">
                                    @if ($item->sale_price != null)
                                    <input type="hidden" name="sale_price" value="{{ $item->sale_price }}">
                                    @else
                                    <input type="hidden" name="sale_price" value="{{ $item->regular_price }}">
                                    @endif
                                    <button type="submit" class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-cart"></i></button>
                                </form>                                    
                                @endif

                            </span>
                        </div>

                        @if ($item->stock > 0)
                        <span class="ics-ava">
                            <strong>Availiablity</strong>
                            <i class="fas fa-check"></i>
                            In Stock
                        </span>
                        @else
                        <span class="ics-not">
                            <strong>Availiablity</strong>
                            <i class="fas fa-times"></i>
                            Out Of Stock
                        </span>
                        @endif

                        <div class="ics-desc">
                            {!! $item->features !!}
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection