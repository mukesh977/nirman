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
                                <th scope="col">Order Id</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="deleteReviewModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="post" id="deleteForm">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Review</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                    @method('delete')
                    Are you sure you want to delete this review?
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
@stop

@section('script')
<script>
    var table = $('#product-data-table').DataTable({
        processing: true,
        serverSide: true,
        order:[[1,'desc']],
        ajax: "{{ route('review.index') }}",
        columns: [
            {data: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'customer_name', name: 'customer_name'},
            {data: 'status', name: 'status', orderable: true, searchable: false},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

    function deleteData(id)
    {
        var id = id;
        var url = '{{ route("review.destroy", ":id") }}';
        url = url.replace(':id', id);
        $("#deleteForm").attr('action', url);
    }

    function formSubmit()
    {
        $("#deleteForm").submit();
    }  

</script>

@endsection