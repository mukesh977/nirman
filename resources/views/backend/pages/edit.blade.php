@extends('layout.admin')
@section('title')
Edit Pages
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
        <form action="{{ route('backend.pages_update', $page->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-9">
                    <div class="card card-primary card-tabs">
                        <div class="card-header">
                            <h3 class="card-title">Edit Page</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="page_title">Page Title</label>
                                <input type="text" id="page_title" class="form-control" name="page_title"
                                    value="{{ old('page_title')?old('page_title'):$page->page_title }}">
                                @if($errors->has('page_title'))
                                <span class="text-danger">
                                    {{ $errors->first('page_title') }}
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="page_url">Page URL (Slug)</label>
                                <input type="text" id="page_url" class="form-control" name="page_url"
                                    value="{{ old('page_url')?old('page_url'):$page->page_url }}">
                                @if($errors->has('page_url'))
                                <span class="text-danger">
                                    {{ $errors->first('page_url') }}
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control">
                                    {{ old('description')?old('description'):$page->description }}
                                </textarea>
                                @if($errors->has('description'))
                                <span class="text-danger">
                                    {{ $errors->first('description') }}
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
                                <label>Featured Image</label>
                                <img src="{{ asset(Storage::url($page->featured_image)) }}" alt="banner_image.jpeg"
                                    class="rounded" id="featured_image" height="200px" width="200px">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <input type="file" name="featured_image"
                                onchange="document.getElementById('featured_image').src = window.URL.createObjectURL(this.files[0])"
                                accept="image/*">
                            @if($errors->has('featured_image'))
                            <span class="text-danger">
                                {{ $errors->first('featured_image') }}
                            </span>
                            @endif
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Publish">
                                <a href="{{ route('backend.pages_index') }}" class="btn btn-danger">Close</a>
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