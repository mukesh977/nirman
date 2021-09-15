@extends('layout.admin')@section('title')
Homepage Pictures
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
        <form action="{{ route('backend.homepage_picture_update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-9">
                    <div class="card card-primary card-tabs">
                        <div class="card-header">
                            <h3 class="card-title">Homepage Images</h3>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Service Image</label>
                                        <br>
                                        <img src="{{ asset(Storage::url($homepage_picture->service_image)) }}"
                                            alt="image.jpeg" class="rounded" id="service_image" height="200px"
                                            width="200px">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <input type="file" name="service_image"
                                        onchange="document.getElementById('service_image').src = window.URL.createObjectURL(this.files[0])"
                                        accept="image/*">
                                    @if($errors->has('service_image'))
                                    <span class="text-danger">
                                        {{ $errors->first('service_image') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Banner Image</label>
                                        <br>
                                        <img src="{{ asset(Storage::url($homepage_picture->banner_image)) }}"
                                            alt="image.jpeg" class="rounded" id="banner_image" height="200px"
                                            width="200px">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <input type="file" name="banner_image"
                                        onchange="document.getElementById('banner_image').src = window.URL.createObjectURL(this.files[0])"
                                        accept="image/*">
                                    @if($errors->has('banner_image'))
                                    <span class="text-danger">
                                        {{ $errors->first('banner_image') }}
                                    </span>
                                    @endif
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Action</h3>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Publish">
                                <a href="{{ route('home') }}" class="btn btn-danger">Close</a>
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