@extends('layout.admin')
@section('title')

@endsection
@section('content')
<div class="container-fluid">
    <div class="row mt-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                Invoice 
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="product-data-table">
                        <thead>
                            <tr>
                                <th scope="col" width="20%">Date Ordered</th>
                                <th scope="col" width="15%">Invoice Id</th>
                                <th scope="col" width="20%">Shipping To</th>
                                <th scope="col" width="15%">Total Price</th>
                                <th scope="col" width="15%">Status</th>
                                <th scope="col" width="15%">Action</th>
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
        order:[[0,'desc']],
        ajax: "{{ route('admin.invoice.index') }}",
        columns: [
            {data: 'created_at', name: 'created_at'},
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'total_price', name: 'total_price'},
            {data: 'status', name: 'status', orderable: true, searchable: false},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

</script>

@endsection