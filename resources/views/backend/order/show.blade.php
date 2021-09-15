@extends('layout.admin')
@section('title')

@endsection
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Order</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                        class="fas fa-minus"></i></button>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="order-tab" data-toggle="tab" href="#order" role="tab"
                                aria-controls="order" aria-selected="true">Order</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="ship-tab" data-toggle="tab" href="#ship" role="tab"
                                aria-controls="ship" aria-selected="false">Shipment</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="invoice-tab" data-toggle="tab" href="#invoice" role="tab"
                                aria-controls="invoice" aria-selected="false">Invoice</a>
                        </li>
                        {{-- <li class="nav-item" role="presentation">
                            <a class="nav-link" id="refund-tab" data-toggle="tab" href="#refund" role="tab"
                                aria-controls="refund" aria-selected="false">Refund</a>
                        </li> --}}
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="order" role="tabpanel" aria-labelledby="order-tab">
                            <div class="idr-content idrc-orders-details">
                                <div class="orders-details-bottom">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="odb-left">
                                                <h6>Order Detial</h6>
                                                <ul>
                                                    <li>Order Id: {{ $order->id }}</li>
                                                    <li>Customer Name: {{ $order->name }}</li>
                                                    <li>Status: <span
                                                            class="badge badge-info" style="font-size: 13px;">{{ $order->status }}</span>
                                                    </li>
                                                </ul>
                                                <h6>Shipping Address</h6>
                                                <ul>
                                                    <li>{{ $order->street_address }}, {{ $order->city }}</li>
                                                    <li>{{ $order->phone }}</li>
                                                    <li>{{ $order->email }}</li>
                                                </ul>
                                                <h6>Payement Method</h6>
                                                <ul>
                                                    <li>Cash On Delivery</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ">
                                            <div class="text-right">
                                                @if ($order->status == 'on hold')
                                            <a href="{{ route('admin.order.cancel',$order->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to cancel?')">Cancel</a>
                                                <a href="{{ route('admin.order.process',$order->id) }}"
                                                    class="btn btn-success btn-sm">Process</a>
                                                @endif

                                                @if ( $order->status == 'processing' )
                                                <a href="{{ route('admin.order.ship',$order->id) }}"
                                                    class="btn btn-primary btn-sm">Ship</a>
                                                @endif

                                                @if ( $order->status == 'shipping' )
                                                <a href="{{ route('admin.order.invoice',$order->id) }}"
                                                    class="btn btn-primary btn-sm">Invoice</a>
                                                @endif

                                                {{-- @if ($order->status == 'completed')
                                                <a href="" class="btn btn-warning btn-sm">Refund</a>
                                                @endif --}}

                                                @if ($order->status == 'cancelled' || $order->status == 'completed')
                                                <span style="color: #949494;">No further Action could be performed!</
                                                        style="color: #949494;">
                                                    @endif
                                            </div>
                                        </div>
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
                                            @foreach ( $items_inside_order as $item)
                                            <tr class="product-ordered-item-details">
                                                <td class="product-id">
                                                    <span>
                                                        {{ (isset($item->sku))?$item->sku:'' }}
                                                    </span>
                                                </td>
                                                <td class="product-name">
                                                    <span>
                                                        @if (isset($item->slug))
                                                        <a href="{{ route('frontend.product_single',$item->slug) }}">
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
                                                            <td class="subtotal-amt">Rs {{ $order->total_price }}</td>
                                                        </tr>
                                                        <tr class="odmt-total">
                                                            <td>Total</td>
                                                            <td class="total-amt">Rs {{ $order->total_price }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="ship" role="tabpanel" aria-labelledby="ship-tab">
                            @if ($order->shipment)
                            <div class="idr-content idrc-orders-details">
                                <div class="orders-details-bottom">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="odb-left">
                                                <h6>Order Detial</h6>
                                                <ul>
                                                    <li>Order Id: {{ $order->id }}</li>
                                                    <li>Customer Name: {{ $order->name }}</li>
                                                    <li>Status: {{ $order->status }}</li>
                                                </ul>
                                                <h6>Shipping Address</h6>
                                                <ul>
                                                    <li>{{ $order->street_address }}, {{ $order->city }}</li>
                                                    <li>{{ $order->phone }}</li>
                                                    <li>{{ $order->email }}</li>
                                                </ul>
                                                <h6>Payement Method</h6>
                                                <ul>
                                                    <li>Cash On Delivery</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ">
                                            <div>
                                                <h6>Shipping Date</h6>
                                                <ul>
                                                    <li>{{ date('d-M Y h:m A', strtotime($order->shipment->created_at)) }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
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
                                            @foreach ( $items_inside_order as $item)
                                            <tr class="product-ordered-item-details">
                                                <td class="product-id">
                                                    <span>
                                                        {{ (isset($item->sku))?$item->sku:'' }}
                                                    </span>
                                                </td>
                                                <td class="product-name">
                                                    <span>
                                                        @if (isset($item->slug))
                                                        <a href="{{ route('frontend.product_single',$item->slug) }}">
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
                                                            <td class="subtotal-amt">Rs {{ $order->total_price }}</td>
                                                        </tr>
                                                        <tr class="odmt-total">
                                                            <td>Total</td>
                                                            <td class="total-amt">Rs {{ $order->total_price }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="idr-content idrc-orders-details">
                                <div class="orders-details-bottom">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="odb-left">
                                                <h6>No shipment found.</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>

                        <div class="tab-pane fade" id="invoice" role="tabpanel" aria-labelledby="invoice-tab">
                            @if ($order->invoice)
                            <div class="idr-content idrc-orders-details">
                                <div class="orders-details-bottom">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="odb-left">
                                                <h6>Order Detial</h6>
                                                <ul>
                                                    <li>Order Id: {{ $order->id }}</li>
                                                    <li>Customer Name: {{ $order->name }}</li>
                                                    <li>Status: {{ $order->status }}</li>
                                                </ul>
                                                <h6>Shipping Address</h6>
                                                <ul>
                                                    <li>{{ $order->street_address }}, {{ $order->city }}</li>
                                                    <li>{{ $order->phone }}</li>
                                                    <li>{{ $order->email }}</li>
                                                </ul>
                                                <h6>Payement Method</h6>
                                                <ul>
                                                    <li>Cash On Delivery</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ">
                                            <div class="text-right">
                                                <a href="{{ route('admin.order.download.invoice',$order->invoice->id) }}"
                                                    class="btn btn-primary btn-sm">Download Invoice</a>
                                            </div>
                                        </div>
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
                                            @foreach ( $items_inside_order as $item)
                                            <tr class="product-ordered-item-details">
                                                <td class="product-id">
                                                    <span>
                                                        {{ (isset($item->sku))?$item->sku:'' }}
                                                    </span>
                                                </td>
                                                <td class="product-name">
                                                    <span>
                                                        @if (isset($item->slug))
                                                        <a href="{{ route('frontend.product_single',$item->slug) }}">
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
                                                            <td class="subtotal-amt">Rs {{ $order->total_price }}</td>
                                                        </tr>
                                                        <tr class="odmt-total">
                                                            <td>Total</td>
                                                            <td class="total-amt">Rs {{ $order->total_price }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="idr-content idrc-orders-details">
                                <div class="orders-details-bottom">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="odb-left">
                                                <h6>No Invoice found.</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>

                        {{-- <div class="tab-pane fade" id="refund" role="tabpanel" aria-labelledby="refund-tab">
                            ...
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@stop

@section('script')
@endsection