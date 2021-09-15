@extends('layout.frontend')

@section('content')
<section class="inner-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-8 col-12">
                <div class="inner-breadcrumb-title">
                    <h2>My Cart</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-4 col-12 ibt">
                <div class="inner-breadcrumb-text">
                    <ul>
                        <li class="bread-link"><a href="{{ route('frontend_index') }}"><i class="fa fa-home"></i></a>
                        </li>
                        <li>My Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="inner-cart sec-padding">
    <div class="container-fluid">
        <div class="inner-cart-table">
            <table>
                <thead>
                    <tr>

                        <th class="product-img">Product</th>
                        <th class="product-name">Product Name</th>
                        <th class="product-price">Price</th>
                        <th class="product-quantity">Quantity</th>
                        <th class="product-total">Total</th>
                        <th class="product-action">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse (Cart::content() as $item)
                    <tr class="product-cart-item">

                        <td class="product-img">
                            @if ($item->model)
                            <a href="{{ route('frontend.product_single',$item->model->slug) }}"><img
                                    src="{{ asset('images/'.$item->model->featured_image) }}" alt="image.jpeg"></a>
                            @endif
                        </td>
                        <td class="product-name">
                            <h4>
                                @if ($item->model)
                                <a href="{{ route('frontend.product_single',$item->model->slug) }}">
                                    {{ $item->name }}
                                    @endif
                                </a>
                            </h4>
                        </td>
                        <td class="product-price pm-title" data-title="Price">
                            <span>{{ $item->price }}</span>
                        </td>
                        <td class="product-qty pm-title" data-title="Quantity">
                            <div>
                                <form action="{{ route('cart.update',$item->id) }}" method="POST" class="form-inline">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" name="rowId" value="{{ $item->rowId }}">
                                    <input type="hidden" name="title" value="{{ $item->name }}">
                                    <input type="hidden" name="sale_price" value="{{ $item->price }}">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="quantity"
                                            value="{{ $item->qty }}" min="1" required>
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-check"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </td>
                        <td class="product-total pm-title" data-title="Total">
                            <span>{{ $item->price * $item->qty }}</span>
                        </td>
                        <td class="product-action">
                            <form action="{{ route('cart.destroy',$item->rowId) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-link" type="submit">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                                </a>
                            </form>

                        </td>
                    </tr>
                    @empty
                    <tr class="product-cart-item">

                        <td colspan="6">
                            No Item in Cart.
                        </td>

                    </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="100">
                            <div class="product-cart-footer">
                                <div class="pcf-left">
                                    <span>
                                        <a href="{{ route('frontend_index') }}" class="btn btn-success"><i
                                                class="fas fa-long-arrow-alt-left"></i>Back to
                                            Shop</a>
                                    </span>
                                </div>
                                <div class="pcf-right">
                                    {{-- <button type="submit" class="pcfr-update"><i
                                            class="fas fa-sync-alt"></i>Update</button> --}}
                                    @if (Cart::count() > 0)
                                    <a href="{{ route('cart.flush') }}" class="btn btn-success">
                                        <i class="fas fa-times"></i>Clear
                                        All
                                    </a>

                                    @endif
                                </div>
                            </div>
                        </td>

                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="inner-cart-total">
            <div class="row">
                <div class="offset-lg-7 offset-md-6 col-lg-5 col-md-6 col-sm-12 col-12">
                    <div class="inner-cart-total-content">
                        <h4>Cart Total</h4>
                        <table>
                            <tr class="ictc-subtotal">
                                <th>Subtotal</th>
                                {{-- <th class="subtotal-amt">Rs 2400</th> --}}
                                <th class="subtotal-amt">{{ Cart::subtotal()}}</th>

                            </tr>
                            <tr class="ictc-total">
                                <td>Total</td>
                                {{-- <td class="total-amt">Rs 2400</td> --}}
                                <td class="total-amt">{{ Cart::total() }}</td>

                            </tr>
                        </table>
                        @if (Cart::count() > 0)
                        <div class="ictc-checkout">
                            @auth
                            <a href="{{ route('checkout.index') }}">Proceed to Checkout</a>
                            @else
                            <a href="#" title="Proceed to Checkout" class="unauth-wishlist"> Proceed to Checkout </a>
                            @endauth
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    @if ($errors->any())
    toastr.error("Some Error Occoured!", 'Error', {closeButton :true })    
@endif
</script>
@endsection