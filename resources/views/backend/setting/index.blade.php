@extends('layout.admin')

@section('title')
Settings
@endsection
@section('content')
@include('flashMessage.message')
<form method="post" name="logo_form" action="{{ route('backend.setting_update') }}" enctype="multipart/form-data">
	@csrf
	<div class="row my-2">
		<div class="col-md-9">
			<div class="card">
				<div class="card-header">
					Profile
				</div>
				<div class="card-body">
					<div class="form-group">
						<div class="form-group">
							<label for="institution_name">Institution Name</label>
							<input type="text" class="form-control" id="institution_name" name="institution_name"
								value="{{ $setting->institution_name }}">
						</div>
					</div>

					<div class="form-group">
						<div class="form-group">
							<label for="institution_email">Email</label>
							<input type="email" class="form-control" id="institution_email" name="institution_email"
								value="{{ $setting->institution_email }}">
						</div>
					</div>
					<div class="form-group">
						<div class="form-group">
							<label for="institution_phone_number">Phone Number</label>
							<input type="text" class="form-control" id="institution_phone_number"
								name="institution_phone_number" value="{{ $setting->institution_phone_number }}">
						</div>
					</div>
					<div class="form-group">
						<div class="form-group">
							<label for="institution_mobile_number">Mobile Number</label>
							<input type="text" class="form-control" id="institution_mobile_number"
								name="institution_mobile_number" value="{{ $setting->institution_mobile_number }}">
						</div>
					</div>
					<div class="form-group">
						<div class="form-group">
							<label for="institution_address">Address</label>
							<input type="text" class="form-control" id="institution_address" name="institution_address"
								value="{{ $setting->institution_address }}">
						</div>
					</div>
					<div class="form-group">
						<div class="form-group">
							<label for="institution_facebook_link">Facebook Link</label>
							<input type="text" class="form-control" id="institution_facebook_link"
								name="institution_facebook_link" value="{{ $setting->institution_facebook_link }}">
						</div>
					</div>
					<div class="form-group">
						<div class="form-group">
							<label for="institution_twitter_link">Twitter Link</label>
							<input type="text" class="form-control" id="institution_twitter_link"
								name="institution_twitter_link" value="{{ $setting->institution_twitter_link }}">
						</div>
					</div>
					<div class="form-group">
						<div class="form-group">
							<label for="institution_instagram_link">Instagram Link</label>
							<input type="text" class="form-control" id="institution_instagram_link"
								name="institution_instagram_link" value="{{ $setting->institution_instagram_link }}">
						</div>
					</div>
					<div class="form-group">
						<div class="form-group">
							<label for="institution_linkedIn_link">LinkedIn Link</label>
							<input type="text" class="form-control" id="institution_linkedIn_link"
								name="institution_linkedIn_link" value="{{ $setting->institution_linkedIn_link }}">
						</div>
					</div>
					<div class="form-group">
						<div class="form-group">
							<label for="institution_youtube_link">Youtube Link</label>
							<input type="text" class="form-control" id="institution_youtube_link"
								name="institution_youtube_link" value="{{ $setting->institution_youtube_link }}">
						</div>
					</div>
					<div class="form-group">
						<div class="form-group">
							<label for="institution_google_plus_link">Google Plus Link</label>
							<input type="text" class="form-control" id="institution_google_plus_link"
								name="institution_google_plus_link"
								value="{{ $setting->institution_google_plus_link }}">
						</div>
					</div>

					<div class="form-group">
						<div class="form-group">
							<label for="institution_google_map">Google Map Location</label>
							<input type="text" class="form-control" id="institution_google_map"
								name="institution_google_map" value="{{ $setting->institution_google_map }}">
							<span class="text-muted">
								you can embed a map from <a href="https://www.google.com/maps/" target="_blank">here</a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<!-- general form elements -->
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Photo</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Logo</label>
						<img src="{{ asset(Storage::url($setting->institution_logo)) }}" alt="image.jpeg"
							class="rounded" id="institution_logo" height="200px" width="200px">
					</div>
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<input type="file" name="institution_logo"
						onchange="document.getElementById('institution_logo').src = window.URL.createObjectURL(this.files[0])"
						accept="image/*">
					@if($errors->has('institution_logo'))
					<span class="text-danger">
						{{ $errors->first('institution_logo') }}
					</span>
					@endif
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>Cover Photo</label>
						<img src="{{ asset(Storage::url($setting->cover_photo)) }}" alt="image.jpeg" class="rounded"
							id="cover_photo" height="200px" width="200px">
					</div>
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<input type="file" name="cover_photo"
						onchange="document.getElementById('cover_photo').src = window.URL.createObjectURL(this.files[0])"
						accept="image/*">
					@if($errors->has('cover_photo'))
					<span class="text-danger">
						{{ $errors->first('cover_photo') }}
					</span>
					@endif
				</div>
				<div class="card-body">
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Update">
						<a href="{{ route('home') }}" class="btn btn-danger">Close</a>
					</div>
				</div>
			</div>
			<!-- /.card -->
		</div>
	</div>
</form>
@stop