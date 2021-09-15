@extends('layout.frontend')

@section('content')

<!-- BANNER -->
<section class="main-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-12 no-pad">
                <div class="main-banner-slider">
                    <div class="main-banner-single"
                        style="background-image: url({{ asset('frontend/images/changed-banner1.jpg') }});">
                        <div class="container">
                            <!--<div class="main-banner-text">-->
                            <!--    <span>Tools & Accessories Collection</span>-->
                            <!--    <h2>Upto 20% Flat</h2>-->
                            <!--    <p>Get your collection today. Offers Limited.</p>-->
                            <!--    <a href="#">Shop Now</a>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="main-banner-single"
                        style="background-image: url({{ asset('frontend/images/ban1.jpg') }});">
                        <div class="container">
                            <!--<div class="main-banner-text">-->
                            <!--    <span>Tools & Accessories Collection</span>-->
                            <!--    <h2>Upto 20% Flat</h2>-->
                            <!--    <p>Get your collection today. Offers Limited.</p>-->
                            <!--    <a href="#">Shop Now</a>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="main-banner-single"
                        style="background-image: url({{ asset('frontend/images/ban3.jpg') }});">
                        <div class="container">
                            <!--<div class="main-banner-text">-->
                            <!--    <span>Tools & Accessories Collection</span>-->
                            <!--    <h2>Upto 20% Flat</h2>-->
                            <!--    <p>Get your collection today. Offers Limited.</p>-->
                            <!--    <a href="#">Shop Now</a>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-12 no-pad">
                <div class="main-banner-graphics">
                    <a href="#"><img src="{{ asset('frontend/images/grap1.jpg') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('frontend/images/grap6.jpg') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- PRODUCTS -->
<section class="main-products sec-padding">
    <div class="container-fluid">
        <div class="sec-title">
            <h2>{{ $layout[0]->name }}</h2>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="main-products-left">
                    <div class="main-products-tab">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-one-tab" data-toggle="pill" href="#pills-one"
                                    role="tab" aria-controls="pills-one" aria-selected="true">New Arrivals</a>
                            </li>


                            @foreach ($layout[0]->one_level_child as $item)
                            <li class="nav-item">
                                <a class="nav-link" id="pills-{{ $loop->iteration }}-tab" data-toggle="pill"
                                    href="#pills-{{ $loop->iteration }}" role="tab"
                                    aria-controls="pills-{{ $loop->iteration }}"
                                    aria-selected="false">{{ $item->name }}</a>
                            </li>
                            @endforeach
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-one" role="tabpanel"
                                aria-labelledby="pills-one-tab">
                                <div class="main-products-slider">
                                    @foreach ($new_arrival as $item)
                                    <div class="main-products-single">
                                        <div class="mps-img"
                                            style="background-image: url({{ asset('images/'.$item->featured_image) }});">
                                            <a href="{{ route('frontend.product_single',$item->slug) }}"><img
                                                    src="{{ asset('images/'.$item->featured_image) }}" alt=""></a>
                                            <ul class="mps-meta">
                                                <li><a href="#" title="Add to Cart" class="addToCartAjax"
                                                        data-id="{{ $item->id }}" data-title="{{ $item->title }}"
                                                        data-sp="{{ ($item->sale_price != null)?$item->sale_price:$item->regular_price }}"><i
                                                            class="fas fa-shopping-cart"></i></a>
                                                </li>
                                                <li><a href="#" title="Quick View"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li>
                                                    @auth
                                                    @if ( $wishlist->contains('product_id', $item->id))
                                                    <a href="#" title="Add to Wishlist"
                                                        class="toggle-wishlist tog-wish-added"
                                                        data-id="{{ $item->id }}"><i class="far fa-heart"></i></a>
                                                    @else
                                                    <a href="#" title="Add to Wishlist" class="toggle-wishlist"
                                                        data-id="{{ $item->id }}"><i class="far fa-heart"></i></a>
                                                    @endif
                                                    @else
                                                    <a href="#" title="Add to Wishlist" class="unauth-wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    @endauth
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mps-text">
                                            <h6><a
                                                    href="{{ route('frontend.product_single',$item->slug) }}">{{ $item->title }}</a>
                                            </h6>
                                            {{-- <p>{{ $item->regular_price }}</p> --}}
                                            <p>
                                                @if ($item->sale_price != null)
                                                <span>Rs {{ $item->regular_price }}</span>
                                                {{ $item->sale_price }}
                                                @else
                                                Rs {{ $item->regular_price }}
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>


                            @foreach ($layout[0]->one_level_child as $subchild_category)
                            <div class="tab-pane fade" id="pills-{{$loop->iteration}}" role="tabpanel"
                                aria-labelledby="pills-{{$loop->iteration}}-tab">
                                <div class="main-products-slider">
                                    @foreach ($subchild_category->products->take(15) as $products)
                                    <div class="main-products-single">
                                        <div class="mps-img"
                                            style="background-image: url({{ asset('images/'.$products->featured_image) }});">
                                            <a href="{{ route('frontend.product_single',$products->slug) }}"><img
                                                    src="{{ asset('images/'.$products->featured_image) }}" alt=""></a>
                                            <ul class="mps-meta">
                                                <li>
                                                    <a href="#" title="Add to Cart" class="addToCartAjax"
                                                        data-id="{{ $products->id }}"
                                                        data-title="{{ $products->title }}"
                                                        data-sp="{{ ($products->sale_price != null)?$products->sale_price:$products->regular_price }}">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                                <li><a href="#" title="Quick View"><i class="far fa-eye"></i></a>
                                                </li>
                                                <li>
                                                    {{-- <a href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a> --}}
                                                    @auth
                                                    @if ( $wishlist->contains('product_id', $products->id))
                                                    <a href="#" title="Add to Wishlist"
                                                        class="toggle-wishlist tog-wish-added"
                                                        data-id="{{ $products->id }}"><i class="far fa-heart"></i></a>
                                                    @else
                                                    <a href="#" title="Add to Wishlist" class="toggle-wishlist"
                                                        data-id="{{ $products->id }}"><i class="far fa-heart"></i></a>
                                                    @endif
                                                    @else
                                                    <a href="#" title="Add to Wishlist" class="unauth-wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    @endauth
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mps-text">
                                            <h6><a
                                                    href="{{ route('frontend.product_single',$products->slug) }}">{{ $products->title }}</a>
                                            </h6>
                                            <p>
                                                @if ($products->sale_price != null)
                                                <span>Rs {{ $products->regular_price }}</span>
                                                {{ $products->sale_price }}
                                                @else
                                                Rs {{ $products->regular_price }}
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{-- Advertisement --}}
            <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="main-products-right">
                    <div class="main-products-right-graphics">
                        <a href="#">
                            <img src="{{ asset('frontend/images/grap3.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="main-products-right-graphics">
                        <a href="#">
                            <img src="{{ asset('frontend/images/grap4.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- GRAPHICS -->
<section class="main-graphics sec-padding" style="background-image: url({{ asset('frontend/images/ban2.jpg') }});">
    <div class="container">
        <div class="main-graphics-text">
            <h2>One E-Hub For All DIY and Industrial Products</h2>
            <a href="#" class="mg-shop">Shop Now</a>
            <a href="#" class="mg-learn">Learn More</a>
        </div>
    </div>
</section>


<!-- PRODUCTS -->
<section class="main-products sec-padding">
    <div class="container-fluid">
        <div class="sec-title">
            <h2>{{ $layout[1]->name }}</h2>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="main-products-left">

                    <div class="main-products-tab">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            @foreach ($layout[1]->one_level_child as $item)
                            <li class="nav-item">
                                <a class="nav-link {{ ($loop->iteration ==1)?'active':'' }}"
                                    id="2pills-{{$loop->iteration}}-tab" data-toggle="pill"
                                    href="#2pills-{{$loop->iteration}}" role="tab"
                                    aria-controls="2pills-{{$loop->iteration}}"
                                    aria-selected="true">{{ $item->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            @foreach ($layout[1]->one_level_child as $layout_category)
                            <div class="tab-pane fade {{ ($loop->iteration == 1)?'show active':'' }}"
                                id="2pills-{{$loop->iteration}}" role="tabpanel"
                                aria-labelledby="2pills-{{$loop->iteration}}-tab">
                                <div class="main-products-slider">
                                    @foreach ($layout_category->products->take(10) as $product)
                                    <div class="main-products-single">
                                        <div class="mps-img"
                                            style="background-image: url({{ asset('images/'.$product->featured_image) }});">
                                            <a href="{{ route('frontend.product_single',$product->slug) }}"><img
                                                    src="{{ asset('images/'.$product->featured_image) }}" alt=""></a>

                                            <ul class="mps-meta">
                                                <li>
                                                    <a href="#" title="Add to Cart" class="addToCartAjax"
                                                        data-id="{{ $product->id }}" data-title="{{ $product->title }}"
                                                        data-sp="{{ ($product->sale_price != null)?$product->sale_price:$product->regular_price }}">
                                                        <i class="fas fa-shopping-cart"></i>
                                                    </a>
                                                </li>
                                                <li><a href="#" title="Quick View"><i class="far fa-eye"></i></a></li>
                                                <li>
                                                    {{-- <a href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a> --}}
                                                    @auth
                                                    @if ( $wishlist->contains('product_id', $product->id))
                                                    <a href="#" title="Add to Wishlist"
                                                        class="toggle-wishlist tog-wish-added"
                                                        data-id="{{ $product->id }}"><i class="far fa-heart"></i></a>
                                                    @else
                                                    <a href="#" title="Add to Wishlist" class="toggle-wishlist"
                                                        data-id="{{ $product->id }}"><i class="far fa-heart"></i></a>
                                                    @endif
                                                    @else
                                                    <a href="#" title="Add to Wishlist" class="unauth-wishlist"><i
                                                            class="far fa-heart"></i></a>
                                                    @endauth
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mps-text">
                                            <h6><a
                                                    href="{{ route('frontend.product_single',$product->slug) }}">{{$product->title}}</a>
                                            </h6>
                                            <p>
                                                @if ($product->sale_price != null)
                                                Rs <span>{{ $product->regular_price }}</span>
                                                {{ $product->sale_price }}
                                                @else
                                                Rs {{ $product->regular_price }}
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="main-products-right">
                    <div class="main-products-right-graphics">
                        <a href="#">
                            <img src="{{ asset('frontend/images/grap5.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="main-products-right-graphics">
                        <a href="#">
                            <img src="{{ asset('frontend/images/grap6.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- PARTNERS -->
<section class="main-partners sec-padding">
    <div class="container-fluid">
        <div class="sec-title">
            <h2>Our Partners</h2>
        </div>
        <div class="main-partners-slider">
            <div class="main-partners-single">
                <a href="#"><img src="{{ asset('frontend/images/pat1.png') }}" alt=""></a>
            </div>
            <div class="main-partners-single">
                <a href="#"><img src="{{ asset('frontend/images/pat2.png') }}" alt=""></a>
            </div>
            <div class="main-partners-single">
                <a href="#"><img src="{{ asset('frontend/images/pat3.png') }}" alt=""></a>
            </div>
            <div class="main-partners-single">
                <a href="#"><img src="{{ asset('frontend/images/pat4.png') }}" alt=""></a>
            </div>
            <div class="main-partners-single">
                <a href="#"><img src="{{ asset('frontend/images/pat5.png') }}" alt=""></a>
            </div>
        </div>
    </div>
</section>


<!-- WHY US -->
<section class="main-why sec-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="main-why-single">
                    <div class="mws-img">
                        <img src="{{ asset('frontend/images/why (3).png') }}" alt="">
                    </div>
                    <div class="mws-text">
                        <h5>Free Shipping</h5>
                        <p>Free shipping all over on every orders over Rs 2999.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="main-why-single">
                    <div class="mws-img">
                        <img src="{{ asset('frontend/images/why (1).png') }}" alt="">
                    </div>
                    <div class="mws-text">
                        <h5>Support 24/7</h5>
                        <p>Online customer service anytime, from anywhere.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="main-why-single">
                    <div class="mws-img">
                        <img src="{{ asset('frontend/images/why (2).png') }}" alt="">
                    </div>
                    <div class="mws-text">
                        <h5>Moneyback Gurantee</h5>
                        <p>Secured, fast & reliable service & also returnable.</p>
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
        // $(".unauth-wishlist").click(function(e){
        //     e.preventDefault();
        //     $('#myModal').modal('show')
        // }); 



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
                    item.toggleClass("tog-wish-added");
                    }else if( result == 'removed'){
                    toastr.info('Item Removed From Wishlist', 'Success', {closeButton :true });    
                    item.toggleClass("tog-wish-added");
                    }else if( result == 'bad'){
                    toastr.warning('Bad Request', 'Sorry', {closeButton :true });  
                    }else{
                    toastr.error('Server Error Occoured', 'Error', {closeButton :true });    
                    }

                }
            });
        });    


        $(".addToCartAjax").click(function(e){
            e.preventDefault();
            var id = $(this).data("id");
            var  sp= $(this).data("sp");
            var title = $(this).data("title");
            console.log("id is" +id+ "sp is "+sp+"title is "+title+".");


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('cart.store') }}",
                method: 'post',
                data: {
                    id:id,
                    title:title,
                    sale_price:sp,
                },
                success: function(result){
                    // console.log(result);
                    if( result == 'added'){
                    toastr.success('Item Added To Cart!', 'Success', {closeButton :true });
                    }else if( result == 'exist'){
                    toastr.info('Item Exist In Cart', 'Success', {closeButton :true });   
                    }else if( result == 'outOfStock'){
                    toastr.info('Item Out Of Stock', 'Success', {closeButton :true });   
                    }
                    else{
                    toastr.error('Server Error Occoured', 'Error', {closeButton :true });    
                    }

                },
                error: function (result) {
                    toastr.error('Server Error Occoured', 'Error', {closeButton :true });    
                }
            });
        });            
    });
</script>

@endsection