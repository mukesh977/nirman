@extends('layout.admin')@section('title')
LSI| Features Edit
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
        <form action="{{ route('backend.features_update', $feature->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-9">
                    <div class="card card-primary card-tabs">
                        <div class="card-header">
                            <h3 class="card-title">Features Update</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="features_title">Title</label>
                                <input type="text" id="features_title" class="form-control" name="features_title"
                                    value="{{ old('features_title')?old('features_title'):$feature->features_title }}">
                                @if($errors->has('features_title'))
                                <span class="text-danger">
                                    {{ $errors->first('features_title') }}
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="features_description">summary</label>
                                <textarea name="features_description" id="features_description" class="form-control">
                                    {{ old('features_description')?old('features_description'):$feature->features_description }}
                                </textarea>
                                @if($errors->has('features_description'))
                                <span class="text-danger">
                                    {{ $errors->first('features_description') }}
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="order">Order</label>
                                <input type="text" id="order" class="form-control" name="order"
                                    value="{{ old('order')?old('order'):$feature->order }}">
                                <span class="text-muted">
                                    Leaving this field empty will automatically set last value.
                                </span>
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
                                <img src="{{ asset(Storage::url($feature->features_image)) }}" alt="banner_image.jpeg"
                                    class="rounded" id="features_image" height="200px" width="200px">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <input type="file" name="features_image"
                                onchange="document.getElementById('features_image').src = window.URL.createObjectURL(this.files[0])"
                                accept="image/*">
                            @if($errors->has('features_image'))
                            <span class="text-danger">
                                {{ $errors->first('features_image') }}
                            </span>
                            @endif
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Publish">
                                <a href="{{ route('backend.features_index') }}" class="btn btn-danger">Close</a>
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
    CKEDITOR.replace( 'features_description' );
</script>
@endsection