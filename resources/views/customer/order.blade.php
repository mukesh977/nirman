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
                                        <th class="product-name">Order Id</th>
                                        <th class="product-qty">Total Price</th>
                                        <th class="product-date">Date Ordered</th>
                                        <th class="product-status">Status</th>
                                        <th class="product-status">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($orders as $item)
                                    <tr class="product-ordered-item">
                                        <td class="product-name">
                                            <h4>
                                                <span>{{ $item->id }}</span>
                                            </h4>
                                        </td>
                                        <td class="product-price">
                                            <span>{{ $item->total_price }} </span>
                                        </td>
                                        <td class="product-date">
                                            <span>{{ date('d-M Y, H:m A', strtotime($item->created_at)) }}</span>
                                        </td>
                                        <td class="product-status">
                                            @switch($item->status)
                                            @case("on hold")
                                            <span class="ps-hol">On Hold</span>
                                            @break
                                            @case("completed")
                                            <span class="ps-com">Completed</span>
                                            @break
                                            @case("processing")
                                            <span class="ps-pro">Processing</span>
                                            @break
                                            @case("shipping")
                                            <span class="ps-pro">Shipping</span>
                                            @break
                                            @case("cancelled")
                                            <span class="ps-can">Cancelled</span>
                                            @break
                                            @case("closed")
                                            <span class="ps-can">Closed</span>
                                            @break
                                            @default
                                            <span class="ps-can">Checking</span>
                                            @endswitch

                                        </td>
                                        <td class="product-status">
                                            <span class="btn btn-link"><a
                                                    href="{{ route('customer.order.show',$item->id) }}"><i
                                                        class="fas fa-eye"></i></a></span>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr class="product-ordered-item">
                                        <td colspan="5">
                                            <i class="fas fa-exclamation-triangle"></i> You have not placed any
                                            orders!
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>

                            </table>
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection