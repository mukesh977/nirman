@extends('layout.admin')
@section('title')

@endsection
@section('content')
<div class="container-fluid">
    <form action="{{ route('admin.media-library.bulk-delete') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('delete')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Media Library
                        <button class="btn btn-danger btn-sm">Delete</button>
                        <a href="{{ route('admin.media-library.create') }}"
                            class="btn btn-success btn-sm mx-2">Add</a>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="select-all">
                                <label for="select-all" class="custom-control-label">Select All</label>
                            </div>
                        </div>
                        @foreach ($images as $image)
                        <li style="width:80px;display:inline-block;margin:5px 0px">
                            <input type="checkbox" name="images[]" value="{{ public_path() . '/images/' . $image->getFilename()}}" />
                            <img src="{{ asset('images/' . $image->getFilename()) }}" width="50" height="50">
                        </li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@stop

@section('script')
<script>
    $(document).ready(function () { 
    $("#select-all").on('change', function()    {
        if(this.checked){
            $('input[type=checkbox]').each(function()   {
                this.checked = true;
            });
        }else{
            $('input[type=checkbox]').each(function()  {
                this.checked = false;
            });
        }
    });
}); 
</script>
@endsection