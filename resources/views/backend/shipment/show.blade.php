@extends('layout.admin')
@section('title')

@endsection
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Shipment</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                        class="fas fa-minus"></i></button>
            </div>
        </div>

        <div class="card-body">
            <div class="idr-content idrc-orders-details">
                <div class="orders-details-bottom">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="odb-left">
                                <h6>Ship Detial</h6>
                                <ul>
                                    <li>Order Id: {{ $shipment->order->id }}</li>
                                    <li>Customer Name: {{ $shipment->order->name }}</li>
                                    <li>Status: <span class="badge badge-info"
                                            style="font-size: 13px;">{{ $shipment->order->status }}</span>
                                    </li>
                                </ul>
                                <h6>Shipping Address</h6>
                                <ul>
                                    <li>{{ $shipment->order->city }}</li>
                                    <li>{{ $shipment->order->phone }}</li>
                                    <li>{{ $shipment->order->email }}</li>
                                </ul>
                                <h6>Payement Method</h6>
                                <ul>
                                    <li>Cash On Delivery</li>
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6 ">
                            <div>
                            <form action="{{ route('admin.shipment.destroy',$shipment->id) }}" class="form-inline" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger btn-sm" value="Delete" onclick="return confirm('Are you sure you want to delete this shipment?')">
                                </form>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="orders-details-middle">
                    <table>
                        <thead>
                            <tr>
                                <th class="product-id">SKU</th>
                                <th class="product-name">Product Name</th>
                                <th class="product-price">Price</th>
                                <th class="product-qty">Quantity</th>
                                <th class="product-qty">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( json_decode($shipment->order->description) as $item)
                            <tr class="product-ordered-item-details">
                                <td class="product-id">
                                    <span>
                                        {{ (isset($item->sku))?$item->sku:'' }}
                                    </span>
                                </td>
                                <td class="product-name">
                                    <span>
                                        @if (isset($item->slug))
                                        <a href="{{ route('frontend.product_single',$item->slug) }}" target="_blank">
                                            {{ $item->product }}
                                        </a>
                                        @else
                                        {{ $item->product }}
                                        @endif
                                    </span>
                                </td>
                                <td class="product-price">
                                    <span>Rs {{ $item->price }}</span>
                                </td>
                                <td class="product-qty">
                                    <span>{{ $item->quantity }}</span>
                                </td>
                                <td class="product-qty">
                                    <span>{{ $item->quantity * $item->price }}</span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="offset-xl-7 col-lg-5">
                            <div class="odm-total">
                                <h4> Total</h4>
                                <table>
                                    <tbody>
                                        <tr class="odmt-subtotal">
                                            <td>Subtotal</td>
                                            <td class="subtotal-amt">Rs {{ $shipment->order->total_price }}</td>
                                        </tr>
                                        <tr class="odmt-total">
                                            <td>Total</td>
                                            <td class="total-amt">Rs {{ $shipment->order->total_price }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@stop

@section('script')
@endsection