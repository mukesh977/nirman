@extends('layout.admin')
@section('title')

@endsection
@section('content')
<div class="container-fluid">
    <div class="row mt-2">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    Layout Category
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
                            @forelse($layouts_tree as $value)
                            <tr>
                                <td> <strong>{{ $loop->iteration }}</strong></td>
                                <td><strong>{{ $value->name }}</strong></td>
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
                                        action="{{ route('admin.layout.destroy', $value->id) }}">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('admin.layout.edit', $value->id) }}"
                                            class="btn btn-secondary btn-sm mx-1"><i class="fa fa-edit"> </i></a>
                                        <button onclick="return confirm('Are you sure?')" type="submit"
                                            class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
    
                            @if ($value->one_level_child)
                            @foreach($value->one_level_child as $item)
                            <tr>
                                <td>{{ $loop->parent->iteration }}.{{ $loop->iteration }}</td>
                                <td>&nbsp; -{{ $item->name }}</td>
                                <td>{{ $item->order }}</td>
                                <td>
                                    @if ( $item->status == 1 )
                                    <span class="badge badge-success">Active</span>
                                    @else
                                    <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <form class="form-inline" method="post"
                                        action="{{ route('admin.layout.destroy', $item->id) }}">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('admin.layout.edit', $item->id) }}"
                                            class="btn btn-secondary btn-sm mx-1"><i class="fa fa-edit"> </i></a>
                                        <button onclick="return confirm('Are you sure?')" type="submit"
                                            class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @endif
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
                    Add Layout Category
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.layout.store') }}" method="post" enctype="multipart/form-data">
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
                            <label for="order">Layout Category</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="" name="layout_id" required>
                                <label class="form-check-label" for="defaultCheck1">
                                    Main Category
                                </label>
                            </div>
    
                            @foreach ($layouts_tree as $cat)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="{{ $cat->id }}" name="layout_id">
                                <label class="form-check-label" for="defaultCheck1">
                                    {{ $cat->name }}
                                </label>
                            </div>
                            @endforeach
                        </div>
    
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="statusSwitch" name="status"
                                    value="1">
                                <label class="custom-control-label" for="statusSwitch"> Active Status</label>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label for="order">Order</label>
                            <input type="text" id="order" class="form-control @error('order') is-invalid @enderror"
                                name="order" value="{{ old('order')?old('order'):'' }}">
                            @error('order')
                            <span class="text-danger">
                                {{ $errors->first('order') }}
                            </span>
                            @enderror
                            <span class="text-muted">
                                Leaving this field empty will automatically set order to max.
                            </span>
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