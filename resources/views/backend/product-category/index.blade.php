@extends('layout.admin')
@section('title')

@endsection
@section('content')
<div class="container-fluid">
    <div class="row mt-2">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    Product Category
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">S.N</th>
                                <th scope="col">Name</th>
                                <th scope="col">Order</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($categories as $value)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->order }}</td>
                                <td>
                                    @if ( $value->status == 1 )
                                    <span class="badge badge-success">Active</span>
                                    @else
                                    <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <form class="form-inline" method="post"
                                        action="{{ route('admin.product-category.destroy', $value->id) }}">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('admin.product-category.edit', $value->id) }}"
                                            class="btn btn-secondary btn-sm mx-1"><i class="fa fa-edit"> </i></a>
                                        <button onclick="return confirm('Are you sure?')" type="submit"
                                            class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">
                                    No data found!
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Add Product Category
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.product-category.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="required">Category Name</label>
                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name')?old('name'):'' }}" required>
                            @error('name')
                            <span class="text-danger">
                                {{ $errors->first('name') }}
                            </span>
                            @enderror
                        </div>
    
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="statusSwitch" name="status"
                                    value="1">
                                <label class="custom-control-label" for="statusSwitch"> Active Status</label>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="attributeNavbar"
                                    name="attribute_navbar" value="1">
                                <label class="custom-control-label" for="attributeNavbar"> Show is Navbar</label>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label for="seo_title">SEO Title</label>
                            <input type="text" id="seo_title" class="form-control" name="seo_title"
                                value="{{ old('seo_title')?old('seo_title'):'' }}">
                        </div>
    
                        <div class="form-group">
                            <label for="seo_description">SEO Description</label>
                            <textarea name="seo_description" id="seo_description" class="form-control"></textarea>
                        </div>
    
                        <div class="form-group">
                            <label for="seo_keyword">SEO Keyword</label>
                            <textarea name="seo_keyword" id="seo_keyword" class="form-control"></textarea>
                        </div>
    
                        <div class="form-group">
                            <label for="order">Order</label>
                            <input type="text" id="order" class="form-control @error('name') is-invalid @enderror"
                                name="order" value="{{ old('order')?old('order'):'' }}">
                            <span class="text-muted">
                                Leaving this field empty will automatically set order to max.
                            </span>
                            @error('order')
                            <span class="text-danger">
                                {{ $errors->first('order') }}
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop