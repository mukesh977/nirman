@extends('layout.admin')
@section('title')
Slider
@endsection
@section('content')
<section class="content">
    @include('flashMessage.message')
    <div class="card">
        <div class="card-header">
            Carosel
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Title</th>
                        <th scope="col">Order</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($carosel as $key=>$value)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$value->title}}</td>
                        <td>{{$value->order}}</td>
                        <td>
                            <form class="form-inline" method="post"
                                action="{{ route('backend.carosel_destroy', $value->id) }}">
                                @csrf
                                @method('delete')
                                <a href="{{ route('backend.carosel_edit', $value->id) }}"
                                    class="btn btn-secondary m-2"><i class="fa fa-edit"> </i></a>
                                <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">
                            No data found!
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@stop