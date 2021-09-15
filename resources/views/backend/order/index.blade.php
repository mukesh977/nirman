@extends('layout.admin')
@section('title')

@endsection
@section('content')
<div class="container-fluid">
    <div class="row mt-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                Orders 
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="product-data-table">
                        <thead>
                            <tr>
                                <th scope="col" width="10%">Order Id</th>
                                <th scope="col" width="25%">Date Ordered</th>
                                <th scope="col" width="25%">Name</th>
                                <th scope="col" width="10%">Total Price</th>
                                <th scope="col" width="10%">Status</th>
                                <th scope="col" width="10%">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>        
    </div>
</div>
@stop

@section('script')
<script>
    var table = $('#product-data-table').DataTable({
        processing: true,
        serverSide: true,
        order:[[1,'desc']],
        ajax: "{{ route('admin.order.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'created_at', name: 'created_at'},
            {data: 'name', name: 'name'},
            {data: 'total_price', name: 'total_price'},
            {data: 'status', name: 'status', orderable: true, searchable: false},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

</script>

@endsection