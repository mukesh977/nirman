@extends('layout.admin')


@section('title')
Testimonal Add
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                @include('flashMessage.message')
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <form action="{{ route('backend.testimonal_store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-9">
                    <div class="card card-primary card-tabs">
                        <div class="card-header">
                            <h3 class="card-title">Testimonal</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="author">Author</label>
                                <input type="text" id="author" class="form-control" name="author"
                                    value="{{ old('author')?old('author'):'' }}">
                                @if($errors->has('author'))
                                <span class="text-danger">
                                    {{ $errors->first('author') }}
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <input type="text" id="designation" class="form-control" name="designation"
                                    value="{{ old('designation')?old('designation'):'' }}">
                                @if($errors->has('designation'))
                                <span class="text-danger">
                                    {{ $errors->first('designation') }}
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control">
                                    {{ old('description')?old('description'):'' }}
                                </textarea>
                                @if($errors->has('description'))
                                <span class="text-danger">
                                    {{ $errors->first('description') }}
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="order">Order</label>
                                <input type="text" id="order" class="form-control" name="order"
                                    value="{{ old('order')?old('order'):'' }}">
                                @if($errors->has('order'))
                                <span class="text-danger">
                                    {{ $errors->first('order') }}
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

                <div class="col-md-3">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Photos</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Image</label>
                                <img src="{{ asset('frontend/images/youth.png') }}" alt="image.jpeg" class="rounded"
                                    id="image" height="200px" width="200px">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <input type="file" name="image"
                                onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                                accept="image/*">
                            @if($errors->has('image'))
                            <span class="text-danger">
                                {{ $errors->first('image') }}
                            </span>
                            @endif
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Publish">
                                <a href="{{ route('backend.testimonal_index') }}" class="btn btn-danger">Close</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </form>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('script')
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace( 'description' );
</script>
@endsection