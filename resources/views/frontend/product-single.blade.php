<?php
$product_images = json_decode($product->product_image);
?>
@extends('layout.frontend')

@section('content')
<section class="inner-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-8 col-12">
                <div class="inner-breadcrumb-title">
                    <h2>{{ $product->title }}</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-4 col-12 ibt">
                <div class="inner-breadcrumb-text">
                    <ul>
                        <li class="bread-link"><a href="index.php"><i class="fa fa-home"></i></a></li>
                        <li class="bread-link"><a
                                href="category.php">{{ ($product->product_category()->exists())?$product->product_category->name:'' }}</a>
                        </li>
                        <li>{{ $product->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="inner-product-single sec-padding">
    <div class="container">
        <div class="inner-product-single-content">
            <div class="row">
                <div class="col-lg-7">
                    <div class="ips-image">
                        <div class="ips-image-larger">
                            <div class="larger-image mag  ">
                                <img src="{{ asset('images/'.$product->featured_image)}}" data-toggle="magnify" alt="">
                            </div>
                            @if (!empty($product_images))
                            @foreach ($product_images as $item)
                            <div class="larger-image mag ">
                                <img src="{{ asset('images/'.$item)}}" data-toggle="magnify" alt="">
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <div class="ips-image-thumbnails">
                            <div class="thumbnails-image">
                                <img src="{{asset('images/'.$product->featured_image)}}" alt="">
                            </div>
                            @if (!empty($product_images))
                            @foreach ($product_images as $item)
                            <div class="thumbnails-image">
                                <img src="{{ asset('images/'.$item)}}" alt="">
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="inner-product-single-info">
                        <div class="ipsi-title">
                            <h2>{{ $product->title }}</h2>
                            <p>
                                @if ($product->sale_price != null)
                                <span>
                                    Rs {{ $product->regular_price }}
                                </span>
                                Rs {{$product->sale_price}}
                                @else
                                Rs {{ $product->regular_price }}
                                @endif

                            </p>
                        </div>
                        <div class="ipsi-desc">
                            {!! $product->features !!}
                        </div>
                        <div class="ipsi-buttons">
                            <div class="product-count">
                                <form method="post" action="{{ route('cart.store') }}">
                                    @csrf
                                    {{-- <div class="value-button" id="decrease" onclick="decreaseValue()"
                                        value="Decrease Value">-</div>
                                    <input type="number" id="number" value="0">
                                    <div class="value-button" id="increase" onclick="increaseValue()"
                                        value="Increase Value">+</div> --}}
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="title" value="{{ $product->title }}">
                                    @if ($product->sale_price != null)
                                    <input type="hidden" name="sale_price" value="{{ $product->sale_price }}">
                                    @else
                                    <input type="hidden" name="sale_price" value="{{ $product->regular_price }}">
                                    @endif
                                    <input type="submit" value=" Add To Cart" class="btn btn-success">
                                    {{-- <div class="product-add-button">
                                        <a href="#">Add to cart</a>
                                    </div> --}}
                                </form>
                            </div>
                        </div>
                        <div class="ipsi-more-buttons">
                            {{-- <a href="#" class="add-to-wishlist "><i class="far fa-heart"></i>Add to Wishlist</a> --}}
                            @auth
                            @if ( $wishlist->contains('product_id', $product->id))
                            <a href="#" class="add-to-wishlist toggle-wishlist tog-wish-add-single"
                                data-id={{ $product->id }}><i class="far fa-heart"></i>Add to Wishlist</a>
                            @else
                            <a href="#" class="add-to-wishlist toggle-wishlist" data-id={{ $product->id }}><i
                                    class="far fa-heart"></i>Add to Wishlist</a>
                            @endif
                            @else
                            <a href="#" class="add-to-wishlist unauth-wishlist"><i class="far fa-heart"></i>Add to
                                Wishlist</a>
                            @endauth


                            <a href="{{ route('compare.store',$product->id) }}" class="add-to-compare mx-2"
                                id="add-to-compare">
                                <i class="fas fa-random"></i>Add to Compare
                            </a>
                        </div>
                        <div class="ipsi-cat-tag">
                            <span>Tags : <a href="#">Power Tools</a>, <a href="#">New Arrival</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- ADD THIS SECTION ONLY ON PREVIOUS PAGE -->

        <!-- START -->
        <div class="inner-product-single-extra">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one"
                        aria-selected="true">Additional Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="two"
                        aria-selected="false">Reviews</a>
                </li>

            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="one-tab">
                    <div class="ipse-desc">
                        {!! $product->description !!}
                    </div>
                </div>
                <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">
                    <div class="ipse-review">
                        <div class="product-review">
                            @forelse ($product->reviews as $review)
                            <div class="product-review-text">
                                <div class="product-review-text-content">
                                    <span class="prt-content-name">{{ $review->customer_name }}</span>
                                    <span
                                        class="prt-content-date">{{ date('d-M Y', strtotime($review->created_at)) }}</span>
                                    <strong class="prt-content-stars">
                                        @for ($i = 0; $i < $review->rating; $i++)
                                            <i class="fas fa-star"></i>
                                            @endfor
                                    </strong>
                                    <p>{!! $review->review !!}</p>
                                </div>
                            </div>
                            @empty
                            No reviews found!
                            @endforelse
                        </div>
                        <!-- You must be logged in to post a comment -->
                        @auth
                        <div class="product-review-form">
                            <h4>Post a Review</h4>
                            <form action="{{ route('review.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <div class="rating-box">
                                    <input id="input-2" name="rating" data-min="0" data-max="5" data-step="1" value="3">
                                </div>
                                <div class="prf-comment">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <span class="wpcf7-form-control-wrap adv_mesage"><textarea name="review"
                                                        cols="40" rows="3"
                                                        class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control"
                                                        aria-required="true" aria-invalid="false"
                                                        placeholder="Your Message">{{ old('review')?old('review'):'' }}</textarea>
                                                    @error('review')
                                                    <span class="text-danger">
                                                        {{ $errors->first('review') }}
                                                    </span>
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="button-holder-cnt">
                                                <p> <input type="submit" value="Submit"
                                                        class="wpcf7-form-control wpcf7-submit btn btn-default">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endauth
                    </div>
                </div>

            </div>
        </div>
        <!-- END -->




        <div class="inner-product-single-related">
            <div class="sec-title">
                <h2>Related Products</h2>
            </div>
            <div class="ipsr-slider">
                <div class="main-products-single">
                    <div class="mps-img" style="background-image: url({{ asset('frontend/images/pro13.png') }});">
                        <a href="#"><img src="{{ asset('frontend/images/pro14.png') }}" alt=""></a>

                        <ul class="mps-meta">
                            <li><a href="#" title="Add to Cart"><i class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#" title="Quick View"><i class="far fa-eye"></i></a></li>
                            <li><a href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="mps-text">
                        <h6><a href="#">Nirman Tools</a></h6>
                        <p>Rs 1200</p>
                    </div>
                </div>
                <div class="main-products-single">
                    <div class="mps-img" style="background-image: url({{ asset('frontend/images/pro15.png') }});">
                        <a href="#"><img src="{{ asset('frontend/images/pro16.png') }}" alt=""></a>

                        <ul class="mps-meta">
                            <li><a href="#" title="Add to Cart"><i class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#" title="Quick View"><i class="far fa-eye"></i></a></li>
                            <li><a href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="mps-text">
                        <h6><a href="#">Nirman Tools</a></h6>
                        <p>Rs 1200</p>
                    </div>
                </div>
                <div class="main-products-single">
                    <div class="mps-img" style="background-image: url({{ asset('frontend/images/pro17.png') }});">
                        <a href="#"><img src="{{ asset('frontend/images/pro18.png') }}" alt=""></a>

                        <ul class="mps-meta">
                            <li><a href="#" title="Add to Cart"><i class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#" title="Quick View"><i class="far fa-eye"></i></a></li>
                            <li><a href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="mps-text">
                        <h6><a href="#">Nirman Tools</a></h6>
                        <p>Rs 1200</p>
                    </div>
                </div>
                <div class="main-products-single">
                    <div class="mps-img" style="background-image: url({{ asset('frontend/images/pro19.png') }});">
                        <a href="#"><img src="{{ asset('frontend/images/pro20.png') }}" alt=""></a>

                        <ul class="mps-meta">
                            <li><a href="#" title="Add to Cart"><i class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#" title="Quick View"><i class="far fa-eye"></i></a></li>
                            <li><a href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="mps-text">
                        <h6><a href="#">Nirman Tools</a></h6>
                        <p>Rs 1200</p>
                    </div>
                </div>
                <div class="main-products-single">
                    <div class="mps-img" style="background-image: url({{ asset('frontend/images/pro21.png') }});">
                        <a href="#"><img src="{{ asset('frontend/images/pro22.png') }}" alt=""></a>

                        <ul class="mps-meta">
                            <li><a href="#" title="Add to Cart"><i class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#" title="Quick View"><i class="far fa-eye"></i></a></li>
                            <li><a href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="mps-text">
                        <h6><a href="#">Nirman Tools</a></h6>
                        <p>Rs 1200</p>
                    </div>
                </div>
                <div class="main-products-single">
                    <div class="mps-img" style="background-image: url({{ asset('frontend/images/pro23.png ') }}');">
                        <a href="#"><img src="{{ asset('frontend/images/pro24.png') }}" alt=""></a>

                        <ul class="mps-meta">
                            <li><a href="#" title="Add to Cart"><i class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#" title="Quick View"><i class="far fa-eye"></i></a></li>
                            <li><a href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="mps-text">
                        <h6><a href="#">Nirman Tools</a></h6>
                        <p>Rs 1200</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- authenticated modal --}}
    <div class="authentication-modal">
        <div id="myModal" class="modal fade" role="dialog" style="z-index: 10000;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Welcome !! Please Login to continue.</h4>
                    </div>
                    <div class="modal-body">
                        <p>You must be authenticated user to access this feature.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="modal-login">
                                    <a href="{{ route('login') }}">Login</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="modal-register">
                                    <a href="{{ route('register') }}">Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    $(document).ready(function(){ 
        
        $("#input-2").rating({
        'size':'lg',
        hoverOnClear: false,
        theme: 'krajee-fas'
    });
        


        $(".unauth-wishlist").click(function(e){
            e.preventDefault();
            $('#myModal').modal('show')
        }); 



        $(".toggle-wishlist").click(function(e){
            e.preventDefault();
            var item = $(this);
            var productId = item.data('id');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('customer.wishlist.store') }}",
                method: 'post',
                data: {
                    product_id: productId,
                },
                success: function(result){
                    // console.log(result);
                    if( result == 'added'){
                    toastr.success('Item Added To Wishlist!', 'Success', {closeButton :true });
                    item.toggleClass("tog-wish-add-single i");
                    }else if( result == 'removed'){
                    toastr.info('Item Removed From Wishlist', 'Success', {closeButton :true });    
                    item.toggleClass("tog-wish-add-single i");
                    }else if( result == 'bad'){
                    toastr.warning('Bad Request', 'Sorry', {closeButton :true });  
                    }else{
                    toastr.error('Server Error Occoured', 'Error', {closeButton :true });    
                    }

                }
            });
        });                
    });
</script>
@endsection