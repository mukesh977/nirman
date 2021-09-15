@extends('layout.admin')



@section('title')
@endsection



@section('content')
<div class="container-fluid">
    <div class="row mt-2">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    Product Tag
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">S.N</th>
                                <th scope="col">Tag</th>
                                <th scope="col">Order</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($tags as $value)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $value->tag }}</td>
                                <td>{{ $value->order }}</td>
                                <td>
                                    <form class="form-inline" method="post"
                                        action="{{ route('admin.product-tag.destroy', $value->id) }}">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('admin.product-tag.edit', $value->id) }}"
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
                    Add Tag
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.product-tag.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="tag" class="required">Tag Name</label>
                            <input type="text" id="tag" class="form-control @error('tag') is-invalid @enderror"
                                name="tag" value="{{ old('tag')?old('tag'):'' }}" required>
                            @error('tag')
                            <span class="text-danger">
                                {{ $errors->first('tag') }}
                            </span>
                            @enderror
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