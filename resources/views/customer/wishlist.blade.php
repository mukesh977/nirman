@extends('layout.frontend')

@section('content')
<section class="inner-dashboard ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                @include('frontend.includes.sidebar')
            </div>



            <div class="col-lg-9">
                <!-- ORDERS -->
                <div class="inner-dashboard-right id-bg">
                    <div class="idr-title">
                        <h4>Order</h4>
                    </div>
                    <div class="idr-content idrc-orders">
                        <div class="idrc-orders-table">
                            <table>
                                <thead>
                                    <tr>
                                        {{-- <th class="product-select"> <input type="checkbox" class="select-all" title="Select All"> --}}
                                        <th class="product-select">
                                            S.N
                                        </th>
                                        <th class="product-img">Product</th>
                                        <th class="product-name">Product Name</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-date">Date Added</th>
                                        <th class="product-stock">Avaliablity</th>
                                        <th class="product-action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($wishlists as $item)
                                    <tr class="product-wishlist-item">
                                        {{-- <td class="product-select">
                                            <input type="checkbox" class="select-item" title="Select Item">
                                        </td> --}}
                                        <td class="product-select">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="product-img">
                                            <a href="{{ route('frontend.product_single',$item->product->slug) }}">
                                                <img src="{{ asset('images/'.$item->product->featured_image) }}"
                                                    alt="image.jpeg"></a>
                                        </td>
                                        <td class="product-name">
                                            <h4><a
                                                    href="{{ route('frontend.product_single',$item->product->slug) }}">{{ $item->product->title }}</a>
                                            </h4>
                                        </td>
                                        <td class="product-price">
                                            <span>{{ $item->product->regular_price }}</span>
                                        </td>
                                        <td class="product-date">
                                            <span>{{ date('d-M Y', strtotime($item->created_at)) }}</span>
                                        </td>
                                        <td class="product-stock">
                                            @if ($item->product->stock)
                                            <p class="product-stock-available"><i class="fas fa-check"></i>In Stock</p>
                                            @else
                                            <p class="product-stock-finished"><i class="fas fa-times"></i>Out Of Stock
                                            </p>
                                            @endif
                                        </td>
                                        <td class="product-action">
                                            <form id="del-wishlist-form"
                                                action="{{ route('customer.wishlist.destroy',$item->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <button role="submit" class="product-remove"><i
                                                        class="far fa-trash-alt"></i></button>
                                                {{-- <a href="#" class="product-remove" title="Remove"><i class="far fa-trash-alt"></i></a> --}}
                                                <a href="#" class="product-add addToCartAjax" title="Add to Cart"
                                                    data-id="{{ $item->product->id }}"
                                                    data-title="{{ $item->product->title }}"
                                                    data-sp="{{ ($item->product->sale_price != null)?$item->product->sale_price:$item->product->regular_price }}">
                                                    <i class="fas fa-shopping-cart"></i>
                                                </a>
                                            </form>
                                            <form action="">

                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr class="product-wishlist-item">
                                        <td class="product-select" colspan="7">
                                            No Item in Your Wishlist.
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="100">
                                            <div class="product-wishlist-footer">
                                                <div class="pwf-left">
                                                    <form action="{{ route('customer.wishlist.bulkdel') }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        {{-- <select name="pwf-action" id="pwf-action">
                                                            <option value="Action">Action</option>
                                                            <option value="Add to Cart">Add to Cart </option>
                                                            <option value="Remove">Remove</option>
                                                        </select> --}}
                                                        <span>
                                                            @if ( !$wishlists->isEmpty() )
                                                            <button type="submit">Remove All</button>
                                                            @endif
                                                        </span>
                                                    </form>
                                                </div>
                                                {{-- <div class="pwf-right">
                                                        <button type="submit" class="pwfr-selected">
                                                            Add Selected to Cart
                                                        </button>
                                                        <button type="submit" class="pwfr-all">
                                                            Remove All From Wishlist
                                                        </button>
                                                    </div> --}}
                                            </div>
                                        </td>

                                    </tr>
                                </tfoot>
                            </table>
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
                        }else{
                        toastr.error('Server Error Occoured', 'Error', {closeButton :true });    
                        }

                    },
                    error: function (result) {
                        toastr.error('Server Error Occoured', 'Error', {closeButton :true });    
                    }
                });
            });

        })
</script>
@endsection