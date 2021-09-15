<?php
$product_image_collection = json_decode($product->product_image);
?>

@extends('layout.admin')
@section('title')

@endsection
@section('content')
<div class="container-fluid">
    <form action="{{ route('admin.product.update', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row mt-2">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Product Basics</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                    class="fas fa-remove"></i></button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="title" class="required">Product Name</label>
                            <input type="text" id="title" class="form-control @error('title') is-invalid @enderror"
                                name="title" value="{{ old('title')?old('title'):$product->title }}" required>
                            @error('title')
                            <span class="text-danger">
                                {{ $errors->first('title') }}
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="sku" class="required">Stock Keeping Unit (SKU)</label>
                            <input type="text" id="sku" class="form-control @error('sku') is-invalid @enderror"
                                name="sku" value="{{ old('sku')?old('sku'):$product->sku }}" required>
                            @error('sku')
                            <span class="text-danger">
                                {{ $errors->first('sku') }}
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title" class="required">Product Name</label>
                            <input type="text" id="title" class="form-control @error('title') is-invalid @enderror"
                                name="title" value="{{ old('title')?old('title'):$product->title }}" required>
                            @error('title')
                            <span class="text-danger">
                                {{ $errors->first('title') }}
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="regular_price">Regular Price (Rs <del>1050</del>)</label>
                            <input type="text" id="regular_price"
                                class="form-control @error('regular_price') is-invalid @enderror" name="regular_price"
                                value="{{ old('regular_price')?old('regular_price'):$product->regular_price }}">
                            @error('regular_price')
                            <span class="text-danger">
                                {{ $errors->first('regular_price') }}
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="sale_price">Sale price (Rs <del>1050</del> <ins>1000</ins>)</p></label>
                            <input type="text" id="sale_price"
                                class="form-control @error('sale_price') is-invalid @enderror" name="sale_price"
                                value="{{ old('sale_price')?old('sale_price'):$product->sale_price }}">
                            @error('sale_price')
                            <span class="text-danger">
                                {{ $errors->first('sale_price') }}
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="features">Featured</label>
                            <textarea name="features"
                                id="features">{{ old('features')?old('features'):$product->features }}</textarea>
                            @error('features')
                            <span class="text-danger">
                                {{ $errors->first('features') }}
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description"
                                id="description">{{ old('description')?old('description'):$product->description }}</textarea>
                            @error('description')
                            <span class="text-danger">
                                {{ $errors->first('description') }}
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="text" id="stock" class="form-control @error('stock') is-invalid @enderror"
                                name="stock" value="{{ old('stock')?old('stock'):$product->stock }}">
                            @error('stock')
                            <span class="text-danger">
                                {{ $errors->first('stock') }}
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="order">Order</label>
                            <input type="text" id="order" class="form-control @error('order') is-invalid @enderror"
                                name="order" value="{{ old('order')?old('order'):$product->order }}">
                            <span class="text-muted">
                                Leaving this field empty will automatically set order to max.
                            </span>
                            @error('order')
                            <span class="text-danger">
                                {{ $errors->first('order') }}
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Search Engine Optimization</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                    class="fas fa-remove"></i></button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="seo_title">SEO Title</label>
                            <input type="text" id="seo_title" class="form-control" name="seo_title"
                                value="{{ old('seo_title')?old('seo_title'):$product->seo_title }}">
                        </div>

                        <div class="form-group">
                            <label for="seo_description">SEO Description</label>
                            <textarea name="seo_description" id="seo_description"
                                class="form-control">{{ $product->seo_description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="seo_keyword">SEO Keyword</label>
                            <textarea name="seo_keyword" id="seo_keyword"
                                class="form-control">{{ $product->seo_keyword }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Categories</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Categories</label>
                            @foreach ($categories as $cat)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="{{ $cat->id }}"
                                    name="product_categories_id"
                                    {{ ( $cat->id == $product->product_categories_id )?'checked':'' }}>
                                <label class="form-check-label" for="defaultCheck1">
                                    {{ $cat->name }}
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Frontend layouts</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            @forelse($layouts_tree as $value)
                            <label>{{ $value->name }}</label>
                            @if ($value->one_level_child)
                            @foreach($value->one_level_child as $item)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ $item->id }}" name="layouts[]"
                                    {{ ( $product->layouts->contains('id', $item->id) )?'checked':'' }}>
                                <label class="form-check-label" for="defaultCheck1">{{ $item->name }}</label>
                            </div>
                            @endforeach
                            @endif
                            @empty
                            <tr>
                                <td colspan="5">
                                    No data found!
                                </td>
                            </tr>
                            @endforelse
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tags</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Tags</label>
                            @foreach ($tags as $value)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ $value->id }}" name="tags[]"
                                    {{ (  $product->tags->contains('id', $value->id) )?'checked':'' }}>
                                <label class="form-check-label" for="defaultCheck1">{{ $value->tag }}</label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Featured Image</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    @if (!empty($product->featured_image))
                    <img class="card-img-top" src="{{ asset('images/'.$product->featured_image) }}" alt="Card image cap"
                        height="150px" width="150px" id="pic">
                    @else
                    <img class="card-img-top" src="{{ asset('default_images/default.jpg') }}" alt="Card image cap"
                        height="150px" width="150px" id="pic">
                    @endif
                    <div class="card-body">
                        <p class="card-text">
                            <input type="file" name="featured_image"
                                onchange="pic.src=window.URL.createObjectURL(this.files[0])" accept="image/*">
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Product Images</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#imageModal">
                                Choose Image
                            </button>

                            <div class="modal" tabindex="-1" id="imageModal">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal Image</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="local-tab" data-toggle="tab"
                                                        href="#local" role="tab" aria-controls="local"
                                                        aria-selected="true">My Computer</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="media-library-tab" data-toggle="tab"
                                                        href="#media-library" role="tab" aria-controls="media-library"
                                                        aria-selected="false">Media
                                                        Collection</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="local" role="tabpanel"
                                                    aria-labelledby="local-tab">
                                                    <p class="text-center">
                                                        <div class="form-group">
                                                            <input type="file" class="form-control"
                                                                name="product_image_from_local[]" accept="image/*"
                                                                multiple>
                                                            <span class="text-muted">
                                                                Press Ctrl to select multiple images.
                                                            </span>
                                                        </div>
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="media-library" role="tabpanel"
                                                    aria-labelledby="media-library">
                                                    @foreach ($images as $image)
                                                    <li style="width:80px;display:inline-block;margin:5px 0px">
                                                        @if ( !empty($product_image_collection) )
                                                        <input type="checkbox" name="product_image_from_col[]"
                                                            value="{{ $image->getFilename()}}"
                                                            {{ ( in_array($image->getFilename(), $product_image_collection) )?'checked':'' }}>
                                                        @else
                                                        <input type="checkbox" name="product_image_from_col[]"
                                                            value="{{ $image->getFilename()}}">
                                                        @endif
                                                        {{-- <input type="checkbox" name="product_image_from_col[]"
                                                            value="{{ $image->getFilename()}}"
                                                        {{ ( in_array($image->getFilename(), json_decode($product->product_image)) )?'checked':'' }}>
                                                        --}}
                                                        <img src="{{ asset('images/' . $image->getFilename()) }}"
                                                            width="50" height="50">
                                                    </li>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Select</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Action</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="statusSwitch" name="status"
                                    value="1" {{ ( $product->status == 1 )?'checked':'' }}>
                                <label class="custom-control-label" for="statusSwitch"> Active Status</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Update">
                            <a href="{{ route('admin.product.index') }}" class="btn btn-danger">Close</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@stop

@section('script')
<script>
    CKEDITOR.replace( 'features' );
    CKEDITOR.replace( 'description' );
</script>
@endsection