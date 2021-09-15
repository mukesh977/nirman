@extends('layout.admin')
@section('title')
@endsection

@section('content')
<div class="container-fluid">
    <form action="{{ route('admin.product-tag.update', $productTag->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row mt-2">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        Edit Product Tag
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.product-tag.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="tag" class="required">Category Name</label>
                                <input type="text" id="tag" class="form-control @error('tag') is-invalid @enderror"
                                    name="tag" value="{{ old('tag')?old('tag'):$productTag->tag }}" required>
                                @error('tag')
                                <span class="text-danger">
                                    {{ $errors->first('tag') }}
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="order">Order</label>
                                <input type="text" id="order" class="form-control @error('order') is-invalid @enderror"
                                    name="order" value="{{ old('order')?old('order'):$productTag->order }}">
                                <span class="text-muted">
                                    Leaving this field empty will automatically set order to max.
                                </span>
                                @error('order')
                                <span class="text-danger">
                                    {{ $errors->first('order') }}
                                </span>
                                @enderror
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        Action
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Update">
                            <a href="{{ route('admin.product-tag.index') }}" class="btn btn-danger">Close</a>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </form>
    <!-- /.row -->
</div><!-- /.container-fluid -->
@endsection