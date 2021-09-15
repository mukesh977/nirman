@extends('layout.admin')
@section('title')

@endsection
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Review</h3>
            <div class="card-tools" style="display: flex;">
                <a href="{{ route('review.index') }}" class="btn btn-primary btn-sm mx-1">Back</a>
                <a href="{{ route('review.edit',$review->id) }}" class="btn btn-warning btn-sm mx-1">Change Status</a>
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                        class="fas fa-minus"></i></button>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-lg-12">
                        <div class="odb-left">
                            <h6>{{ $review->customer_name }}</h6>
                            <ul>
                                <li>Customer Name: {{ $review->customer_name }}</li>
                                <li>Customer Review: {{ $review->review }}</li>
                                <li>Customer Rating: {{ $review->rating }}</li>
                                <li>Review Date: {{ date('d-m y', strtotime($review->created_at)) }}</li>
                                <li>Status:@if ($review->status)
                                    <span class="badge badge-success">Active</span>
                                    @else
                                    <span class="badge badge-danger">Active</span>
                                    @endif
                                </li>
                            </ul>
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