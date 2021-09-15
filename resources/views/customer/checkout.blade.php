@extends('layout.frontend')

@section('content')
<section class="inner-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="inner-breadcrumb-title">
                    <h2>Checkout</h2>
                </div>
            </div>
            <div class="col-lg-6 ibt">
                <div class="inner-breadcrumb-text">
                    <ul>
                        <li class="bread-link"><a href="{{ route('frontend_index')  }}"><i class="fa fa-home"></i></a>
                        </li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="inner-checkout ">
    <div class="container">
        <form action="{{ route('checkout.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-7">
                    <div class="inner-checkout-form ic-box">
                        <h4>Billing Details</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label> Full Name </label><br>
                                    <span class="wpcf7-form-control-wrap adv_name">
                                        <input type="text" name="name" value="{{ old('name')?old('name'):auth()->user()->name }}" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control @error('name') is-invalid @enderror"
                                            aria-required="true" aria-invalid="false" placeholder="Enter your Name"
                                            style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"
                                            required>
                                    </span>
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label> Town/City </label><br>
                                    <span class="wpcf7-form-control-wrap address">
                                        <input type="text" name="city" value="{{ old('city')?old('address'):auth()->user()->address }}" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control @error('city') is-invalid @enderror"
                                            aria-required="true" aria-invalid="false" placeholder="Your Town or City"
                                            required>
                                        @error('city')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label> Street Address </label><br>
                                    <span class="wpcf7-form-control-wrap address">
                                        <input type="text" name="street_address" value="{{ old('street_address') }}"
                                            size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control @error('street_address') is-invalid @enderror"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="House number & Street number" required>
                                        @error('street_address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </span>
                                </div>
                            </div>                            
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label> Phone </label><br>
                                    <span class="wpcf7-form-control-wrap adv_number">
                                        <input type="tel" name="phone" value="{{ old('phone')?old('phone'):auth()->user()->phone }}" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control @error('phone') is-invalid @enderror"
                                            aria-required="true" aria-invalid="false" placeholder="Enter your Number"
                                            required>
                                    </span>
                                    @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label> Email </label><br>
                                    <span class="wpcf7-form-control-wrap adv_email">
                                        <input type="email" name="email" value="{{ old('email')?old('email'):auth()->user()->email }}" size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control @error('email') is-invalid @enderror"
                                            aria-required="true" aria-invalid="false" placeholder="Enter your Email"
                                            required>
                                    </span>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="inner-checkout-total ic-box">
                        <h4>Your Order</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th class="checkout-product">Product</th>
                                    <th class="checkout-amt">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse (Cart::content() as $item)
                                <tr class="checkhout-item">
                                    <td class="checkout-product">{{ $item->name }} <strong
                                            class="checkout-product-quantity">*{{ $item->qty }}</strong>
                                    </td>
                                    <td class="checkout-amt"> {{ $item->price * $item->qty }}</td>
                                </tr>
                                @empty
                                <tr class="checkhout-item">
                                    <td class="checkout-product" colspan="2">
                                       No Item in Cart
                                    </td>
                                </tr>
                                @endforelse

                            </tbody>
                            <tfoot>
                                <tr class="checkout-amt-subtotal">
                                    <td>Subtotal</td>
                                    <td>{{ Cart::subtotal() }}</td>
                                </tr>
                                <tr class="checkout-amt-total">
                                    <td>Total</td>
                                    <td>{{ Cart::total() }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="inner-checkout-payement ic-box">
                        <h4>Payement</h4>
                        {{-- <form action="#"> --}}
                        <ul>
                            <li> <input type="radio" id="cod" name="cod" value="1" checked>
                                <label for="cod">Cash on Delivery</label>
                                <p>(Pay with cash upon delivery.)</p>
                            </li>
                            <!-- <li> <input type="radio" id="esewa" name="gender" value="esewa">
                                <label for="esewa">Esewa</label>
                                <p>(Pay from your Esewa account.)</p>
                            </li>
                            <li> <input type="radio" id="bank" name="gender" value="bank">
                                <label for="bank">Bank Account</label>
                                <p>(Pay from your Bank account.)</p>
                            </li> -->
                        </ul>

                        {{-- </form> --}}
                    </div>
                    <div class="inner-checkout-order">
                        @if (Cart::count() > 0)
                        <button type="submit" class="place-order" id="place_order">Place Order</button>
                        @endif
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection