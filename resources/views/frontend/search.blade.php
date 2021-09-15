@extends('layout.frontend')

@section('content')
<section class="inner-breadcrumb ib-search">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-breadcrumb-title">
                    <h2>Search Result for " <span>{{ $keyword }}</span> " </h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="inner-search">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 cat-left">
                <div class="inner-category-list">
                    <h3>Filters</h3>
                    <form action="#" class="inner-category-form" _lpchecked="1" method="">
                        <input type="hidden" id="keyword" value="{{ $keyword }}">
                        <div class="inner-category-list-cat list-form">
                            <label>Categories:</label>
                            <select id="category">
                                <option selected="selected" id="category_option" value="">All</option>
                            </select>
                        </div>

                        <div class="inner-category-list-price list-form">
                            <label>Price:(Rs 0 - Rs 2,00,000)</label>
                            <input type="range" class="form-control-range" id="range" min="0" max="200000"
                                value="200000">
                        </div>

                        <div class="inner-category-list-cat list-form">
                            <label>Sort By:</label>
                            <select id="order">
                                <option selected="selected">Default</option>
                                <option value="latest">New Arrivals</option>
                                <option value="price_asc">Price (Low to High)</option>
                                <option value="price_desc">Price (High to Low)</option>
                            </select>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-lg-9">
                <div class="inner-search-display">
                    <div class="row">
                        {{-- <div class="col-lg-6">
                            <div class="inner-search-result-count">
                                <p>Showing 1-16 of 50 results</p>

                            </div>
                        </div> --}}
                        <div class="col-lg-12">
                            <div class="inner-search-product">
                                <div class="row" id="products-row">
                                    @forelse ($products as $item)
                                    <div class="col-lg-3">
                                        <div class="main-products-single">
                                            <div class="mps-img">
                                                <a href="{{ route('frontend.product_single',$item->slug) }}"><img
                                                        src="{{ asset('images/'.$item->featured_image) }}" alt="{{ $item->title }}"></a>

                                                {{-- <ul class="mps-meta">
                                                    <li><a href="#" title="Add to Cart"><i
                                                                class="fas fa-shopping-cart"></i></a></li>
                                                    <li><a href="{{ route('frontend.product_single',$item->slug) }}" title="Quick View"><i class="far fa-eye"></i></a>
                                                    </li>
                                                    <li><a href="#" title="Add to Wishlist"><i
                                                                class="far fa-heart"></i></a>
                                                    </li>
                                                </ul> --}}
                                            </div>
                                            <div class="mps-text">
                                                <h6><a href="{{ route('frontend.product_single',$item->slug) }}">{{ $item->title }}</a></h6>
                                                <p>{{ $item->regular_price }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    No Products Found.
                                    @endforelse
                                </div>
                            </div>
                            {{-- <div class="inner-pagination">
                                <div class="pagination">
                                    <a href="#" class="active">1</a>
                                    <a href="#">2</a>
                                    <a href="#">3</a>
                                    <a href="#">4</a>
                                    <a href="#">5</a>
                                    <a href="#">6</a>
                                    <a href="#">»</a>
                                </div>
                            </div> --}}
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
        var my_project_image_path = "{{ asset('images') }}";

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // get all categories in ajax
        $.ajax({
            url: "{{ route('get_categories') }}",
            method: 'get',
            // data: {
            //     id:id,
            //     title:title,
            //     sale_price:sp,
            // },
            success: function(categories){
                // console.log(categories);   
                $.each(categories,function(index,value){
                    $("#category_option").after('<option value="'+value.slug+'">'+value.name+'</option>');
                });
            },
            error: function (result) {
                toastr.error('Cannot load categories', 'Error', {closeButton :true });    
            }
        }); 

        $('#category').on('change', function(){
            $(this).category_filter();
        });

        $('#range').on('change', function(){
            $(this).category_filter();
        });

        $('#order').on('change', function(){
            $(this).category_filter();
        });

        $.fn.category_filter = function(){
            console.log($('#keyword').val());   
            console.log($('#category').val());   
            console.log($('#range').val());   
            console.log($('#order').val());   
            $.ajax({
                url: "{{ route('frontend.filter') }}",
                method: 'get',
                data: {
                    keyword: $('#keyword').val(),
                    category: $('#category').val(),
                    range: $('#range').val(),
                    order: $('#order').val(),
                },
                success: function(products){
                    // console.log(products);   
                    $("#products-row").empty();
                    $.each(products,function(key,val){
                        // $("#products-row").append('<div class="col-md-3"> <div class="main-products-single"> <div class="mps-img"> <a href="product/'+val.slug+'"><img src="'+my_project_image_path+'/'+val.featured_image+'"></a> <ul class="mps-meta"> <li><a href="#" title="Add to Cart"><i class="fas fa-shopping-cart"></i></a></li> <li><a href="product/'+val.slug+'" title="Quick View"><i class="far fa-eye"></i></a> </li> <li><a href="" title="Add to Wishlist"><i class="far fa-heart"></i></a> </li> </ul> </div> <div class="mps-text"> <h6><a href="product/'+val.slug+'">'+val.title+'</a></h6> <p>Rs '+val.regular_price+'</p> </div> </div> </div>');
                        $("#products-row").append('<div class="col-md-3"> <div class="main-products-single"> <div class="mps-img"> <a href="product/'+val.slug+'"><img src="'+my_project_image_path+'/'+val.featured_image+'"></a></div> <div class="mps-text"> <h6><a href="product/'+val.slug+'">'+val.title+'</a></h6> <p>Rs '+val.regular_price+'</p> </div> </div> </div>');
                    });
                },
                error: function (result) {
                    toastr.error('Cannot load categories', 'Error', {closeButton :true });    
                }
            }); 
        };
    });
</script>
@endsection