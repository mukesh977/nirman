@extends('layout.frontend')

@section('content')
<section class="inner-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="inner-breadcrumb-title">
                    <h2>Shop</h2>
                </div>
            </div>
            <div class="col-lg-6 ibt">
                <div class="inner-breadcrumb-text">
                    <ul>
                        <li class="bread-link"><a href="{{ route('frontend_index') }}"><i class="fa fa-home"></i></a>
                        </li>
                        <li>Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="inner-category">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 cat-left">
                <div class="inner-category-list">
                    <h3>Categories</h3>
                    <div class="cat-content">
                        <ul>
                            @if (isset($categories_com))
                            @foreach ($categories_com as $item)
                            <li><a href="{{ route('frontend.category.show', $item->slug) }}">
                                    {{ $item->name }}<span>{{ $item->product->count() }}</span></a></li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="inner-category-list">
                    <h3>Tags</h3>
                    <form action="#" class="inner-category-form" _lpchecked="1">                        
                        <div class="inner-category-list-tags list-form">
                            {{-- <label>Tags</label> --}}
                            <ul>
                                @if (isset($tags_com))
                                @foreach ($tags_com as $item)
                                <li><a href="{{ route('frontend.tag.show', $item->tag) }}"> {{ $item->tag }}</a>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-lg-9">
                <div class="inner-category-display">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="inner-category-result-count">
                                <p>Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of
                                    {{$products->total()}}
                                    results</p>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="inner-category-view-sort">
                                {{-- <div class="inner-listing-sort">
                                    <label>Sort By:</label>
                                    <select>
                                        <option value="" selected="selected">Default</option>
                                        <option value="">New Arrivals</option>
                                        <option value="">Price (Low to High)</option>
                                        <option value="">Price (High to Low)</option>
                                    </select>
                                </div> --}}
                                {{-- <div class="list-view">
                                    <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip"
                                        data-original-title="Grid"><i class="fas fa-th"></i></button>
                                    <button class="btn btn-default list" data-view="list" data-toggle="tooltip"
                                        data-original-title="List"><i class="fas fa-list-ul"></i></button>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="inner-category-product">
                                <div class="row">
                                    @foreach ($products as $item)
                                    <div class="col-lg-3">
                                        <div class="main-products-single">
                                            <div class="mps-img"
                                                style="background-image: url({{ asset('images/'.$item->featured_image) }});">
                                                <a href="{{ route('frontend.product_single',$item->slug) }}"><img
                                                        src="{{ asset('images/'.$item->featured_image) }}"
                                                        alt="{{ $item->title }}"></a>

                                                <ul class="mps-meta">
                                                    <li><a href="#" title="Add to Cart" class="addToCartAjax"
                                                            data-id="{{ $item->id }}" data-title="{{ $item->title }}"
                                                            data-sp="{{ ($item->sale_price != null)?$item->sale_price:$item->regular_price }}"><i
                                                                class="fas fa-shopping-cart"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Quick View"><i class="far fa-eye"></i></a>
                                                    </li>
                                                    <li>@auth
                                                        @if ( $wishlist->contains('product_id', $products->id))
                                                        <a href="#" title="Add to Wishlist"
                                                            class="toggle-wishlist tog-wish-added"
                                                            data-id="{{ $products->id }}"><i
                                                                class="far fa-heart"></i></a>
                                                        @else
                                                        <a href="#" title="Add to Wishlist" class="toggle-wishlist"
                                                            data-id="{{ $products->id }}"><i
                                                                class="far fa-heart"></i></a>
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
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="inner-category-pagination">
                                {{-- <div class="pagination">
                                    <a href="#" class="active">1</a>
                                    <a href="#">2</a>
                                    <a href="#">3</a>
                                    <a href="#">4</a>
                                    <a href="#">5</a>
                                    <a href="#">6</a>
                                    <a href="#">»</a>
                                </div> --}}


                                {{ $products->links('vendor.pagination.shop') }}
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