@extends('layout.admin')


@section('title')
@endsection

@section('content')
<div class="container-fluid">
    <form action="{{ route('admin.layout.update', $layout->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row mt-2">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        Edit Layout Category
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name" class="required">Category Name</label>
                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name')?old('name'):$layout->name }}" required>
                            @error('name')
                            <span class="text-danger">
                                {{ $errors->first('name') }}
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="order">Layout Category</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="" name="layout_id"
                                    {{ ($layout->layout_id == null)?'checked':'' }} required>
                                <label class="form-check-label" for="defaultCheck1">
                                    Main Category
                                </label>
                            </div>
                            @if ($layout->layout_id != null)
                            @foreach ($layouts_tree as $cat)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="{{ $cat->id }}" name="layout_id"
                                    {{ ($layout->layout_id == $cat->id)?'checked':'' }}>
                                <label class="form-check-label" for="defaultCheck1">
                                    {{ $cat->name }}
                                </label>
                            </div>
                            @endforeach
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="statusSwitch" name="status"
                                    value="1" {{ ($layout->status == 1)?'checked':'' }}>
                                <label class="custom-control-label" for="statusSwitch"> Active Status</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="order">Order</label>
                            <input type="text" id="order" class="form-control @error('order') is-invalid @enderror"
                                name="order" value="{{ old('order')?old('order'):$layout->order }}">
                            @error('order')
                            <span class="text-danger">
                                {{ $errors->first('order') }}
                            </span>
                            @enderror
                            <span class="text-muted">
                                Leaving this field empty will automatically set order to max.
                            </span>
                        </div>                       
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
                            <a href="{{ route('admin.layout.index') }}" class="btn btn-danger">Close</a>
                        </div>                       
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </form>
</div><!-- /.container-fluid -->
@endsection