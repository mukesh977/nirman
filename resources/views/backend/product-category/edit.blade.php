@extends('layout.admin')



@section('title')
@endsection

@section('content')
<div class="container-fluid">
    <form action="{{ route('admin.product-category.update', $productCategory->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row mt-2">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        Edit Product Category
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.product-category.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="required">Category Name</label>
                                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name')?old('name'):$productCategory->name }}" required>
                                @error('name')
                                <span class="text-danger">
                                    {{ $errors->first('name') }}
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="statusSwitch" name="status"
                                value="1" {{ ($productCategory->status == 1)?'checked':'' }}>
                                    <label class="custom-control-label" for="statusSwitch"> Active Status</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="attributeNavbar"
                                        name="attribute_navbar" value="1" {{ ($productCategory->attribute_navbar == 1)?'checked':'' }}>
                                    <label class="custom-control-label" for="attributeNavbar"> Show is Navbar</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="seo_title">SEO Title</label>
                                <input type="text" id="seo_title" class="form-control" name="seo_title"
                                    value="{{ old('seo_title')?old('seo_title'):$productCategory->seo_title }}">
                            </div>

                            <div class="form-group">
                                <label for="seo_description">SEO Description</label>
                            <textarea name="seo_description" id="seo_description" class="form-control">{!! $productCategory->seo_description !!}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="seo_keyword">SEO Keyword</label>
                            <textarea name="seo_keyword" id="seo_keyword" class="form-control">{!! $productCategory->seo_keyword !!}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="order">Order</label>
                                <input type="text" id="order" class="form-control @error('order') is-invalid @enderror"
                                    name="order" value="{{ old('order')?old('order'):$productCategory->order }}">
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
                            <a href="{{ route('admin.product-category.index') }}" class="btn btn-danger">Close</a>
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