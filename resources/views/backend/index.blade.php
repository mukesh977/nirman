@extends('layout.admin')


@section('title')
Dashboard
@endsection
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info">
                        <i class="fas fa-users"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Customers</span>
                        <span class="info-box-number">{{ $total_customers }}</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info">
                        <i class="fas fa-cart-arrow-down"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Orders</span>
                        <span class="info-box-number">{{ $total_orders }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info">
                        <i class="fas fa-signal"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Sales</span>
                        <span class="info-box-number">{{ $total_sales }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>

            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info">
                        <i class="fas fa-comments"></i>
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Reviews</span>
                        <span class="info-box-number"></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Sales
                        </h3>
                    </div>
                    <div class="card-body">
                        <!-- Chart's container -->
                        <div id="sale-chart-container" style="height: 500px;"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@stop

@section('script')
<script>
    const chart = new Chartisan({
        el: '#sale-chart-container',
        url: "@chart('sale_chart')",
        hooks: new ChartisanHooks()
            .title('The bar graph represent the amount of sales in corresponding dates of last 30 days!')            
            .colors('blue')
            .datasets([{ type: 'line', fill: false, borderColor: 'green' }])
            .tooltip(),
      });
</script>
@endsection