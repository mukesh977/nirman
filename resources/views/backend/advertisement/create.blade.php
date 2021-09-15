@extends('layout.admin')
@section('title')

@endsection
@section('content')
<div class="container-fluid">
    <form action="{{ route('admin.advertisement.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mt-2">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Homepage Advertisement</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                    class="fas fa-remove"></i></button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="title" class="required">Advertisement Title</label>
                            <input type="text" id="title" class="form-control @error('title') is-invalid @enderror"
                                name="title" value="{{ old('title')?old('title'):'' }}" required>
                            @error('title')
                            <span class="text-danger">
                                {{ $errors->first('title') }}
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="order">Order</label>
                            <input type="text" id="order" class="form-control @error('order') is-invalid @enderror"
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
                    </div>
                </div>               
            </div>

            <div class="col-md-3">
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
                                                            <input type="file" class="form-control" name="product_image_from_local accept="image/*">                                                           
                                                        </div>
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="media-library" role="tabpanel"
                                                    aria-labelledby="media-library">
                                                    @foreach ($images as $image)
                                                    <li style="width:80px;display:inline-block;margin:5px 0px">
                                                        <input type="radio" name="product_image_from_col"
                                                            value="{{ $image->getFilename()}}" />
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
                                    value="1">
                                <label class="custom-control-label" for="statusSwitch"> Active Status</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Add">
                            <a href="{{ route('admin.advertisement.index') }}" class="btn btn-danger">Close</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@stop