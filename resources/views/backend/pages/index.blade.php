@extends('layout.admin')
@section('title')
Pages
@endsection
@section('content')
<section class="content">
	@include('flashMessage.message')
	<div class="card">
		<div class="card-header">
			Pages
		</div>
		<div class="card-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">S.N</th>
						<th scope="col">Title</th>
						<th scope="col">Created At</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@forelse($pages as $key=>$value)
					<tr>
						<td>{{$key+1}}</td>
						<td>{{$value->page_title}}</td>
						<td>{{ date( 'j-M Y', strtotime( $value->created_at )) }}</td>
						<td>
							<form class="form-inline" method="post"
								action="{{ route('backend.pages_delete', $value->id) }}">
								@csrf
								@method('delete')
								<a href="{{ route('backend.pages_edit', $value->id) }}" class="btn btn-secondary m-2"><i
										class="fa fa-edit"> </i></a>
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