@extends('layout.admin')
@section('title')

@endsection
@section('content')
<div class="container-fluid">
    <div class="row mt-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                Products <a href="{{ route('admin.product.create') }}" class="btn btn-success btn-sm">Add product</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="product-data-table">
                        <thead>
                            <tr>
                                <th scope="col" width="10%">S.N</th>
                                <th scope="col" width="10%">SKU</th>
                                <th scope="col" width="20%">Name</th>
                                <th scope="col" width="15%">Stock</th>
                                <th scope="col" width="15%">Order</th>
                                <th scope="col" width="10%">Status</th>
                                <th scope="col" width="25%">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>        
    </div>


    <div class="modal" id="deleteProductModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post" id="deleteForm">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Product</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        @method('delete')
                        Are you sure you want to delete this product?
                    </div>
                    <div class=" modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger" data-dismiss="modal"
                            onclick="formSubmit()">Yes</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
@stop

@section('script')
<script>
    var table = $('#product-data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.product.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'sku', name: 'sku'},
            {data: 'title', name: 'title'},
            {data: 'stock', name: 'stock'},
            {data: 'order', name: 'order'},
            {data: 'status', name: 'status', orderable: true, searchable: false},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

    function deleteData(id)
    {
        var id = id;
        var url = '{{ route("admin.product.destroy", ":id") }}';
        url = url.replace(':id', id);
        $("#deleteForm").attr('action', url);
    }

    function formSubmit()
    {
        $("#deleteForm").submit();
    }  
</script>

@endsection