@extends('layout.admin')
@section('title')
About Us
@endsection

@section('content')
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-12">
				@include('flashMessage.message')
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">
		<form action="{{ route('backend.about_us_update') }}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-md-9">
					<div class="card card-primary card-tabs">
						<div class="card-header">
							<h3 class="card-title">About Us</h3>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label for="about_us_description">Description About Us</label>
								<textarea name="about_us_description" id="about_us_description" class="form-control">
                                    {{ old('about_us_description')?old('about_us_description'):$aboutUs->about_us_description }}
                                </textarea>
							</div>
							<div class="form-group">
								<label for="our_core_values">Our Core Values</label>
								<textarea name="our_core_values" id="our_core_values" class="form-control">
									{{ old('our_core_values')?old('our_core_values'):$aboutUs->our_core_values }}
								</textarea>
							</div>
							<div class="form-group">
								<label for="our_vision">Our Vision</label>
								<textarea name="our_vision" id="our_vision" class="form-control">
                                    {{ old('our_vision')?old('our_vision'):$aboutUs->our_vision }}
                                </textarea>
							</div>
							<div class="form-group">
								<label for="our_mission">Our Mission</label>
								<textarea name="our_mission" id="our_mission" class="form-control">
                                    {{ old('our_mission')?old('our_mission'):$aboutUs->our_mission }}
                                </textarea>
							</div>
							<div class="form-group">
								<label for="youtube_video_link">Video Link</label>
								<input type="text" id="youtube_video_link" name="youtube_video_link"
									class="form-control"
									value="{{ old('youtube_video_link')?old('youtube_video_link'):$aboutUs->youtube_video_link }}">
								@if ($errors->has('youtube_video_link'))
								<span class="form-text text-red">
									<strong>{{ $errors->first('youtube_video_link') }}</strong>
								</span>
								@endif
							</div>
							<div class="form-group">
								<label for="years_of_experience">Experience(in years)</label>
								<input type="text" id="years_of_experience" name="years_of_experience"
									class="form-control"
									value="{{ old('years_of_experience')?old('years_of_experience'):$aboutUs->years_of_experience }}">
								@if ($errors->has('years_of_experience'))
								<span class="form-text text-red">
									<strong>{{ $errors->first('years_of_experience') }}</strong>
								</span>
								@endif
							</div>
							<div class="form-group">
								<label for="happy_members">No. of happy Members</label>
								<input type="text" id="happy_members" name="happy_members" class="form-control"
									value="{{ old('happy_members')?old('happy_members'):$aboutUs->happy_members }}">
								@if ($errors->has('happy_members'))
								<span class="form-text text-red">
									<strong>{{ $errors->first('happy_members') }}</strong>
								</span>
								@endif
							</div>
							<div class="form-group">
								<label for="successful_project">No. of Successful Project</label>
								<input type="text" id="successful_project" name="successful_project"
									class="form-control"
									value="{{ old('successful_project')?old('successful_project'):$aboutUs->successful_project }}">
								@if ($errors->has('successful_project'))
								<span class="form-text text-red">
									<strong>{{ $errors->first('successful_project') }}</strong>
								</span>
								@endif
							</div>
							<div class="form-group">
								<label for="fund_collected">Total Fund Collected</label>
								<input type="text" id="fund_collected" name="fund_collected" class="form-control"
									value="{{ old('fund_collected')?old('fund_collected'):$aboutUs->fund_collected }}">
								@if ($errors->has('fund_collected'))
								<span class="form-text text-red">
									<strong>{{ $errors->first('fund_collected') }}</strong>
								</span>
								@endif
							</div>

							<div class="form-group">
								<label for="first_description">First Description</label>
								<textarea name="first_description" id="first_description" class="form-control">
                                    {{ old('first_description')?old('first_description'):$aboutUs->first_description }}
                                </textarea>
							</div>
							<div class="form-group">
								<label for="second_description">Second Description</label>
								<textarea name="second_description" id="second_description" class="form-control">
                                    {{ old('second_description')?old('second_description'):$aboutUs->second_description }}
                                </textarea>
							</div>
						</div>
						<!-- /.card -->
					</div>
				</div>

				<div class="col-md-3">
					<!-- general form elements -->
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Photos</h3>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Cover Image</label>
								<img src="{{ asset(Storage::url($aboutUs->cover_image)) }}" alt="banner_image.jpeg"
									class="rounded" id="cover_image" height="200px" width="200px">
							</div>
						</div>
						<!-- /.card-body -->

						<div class="card-footer">
							<input type="file" name="cover_image"
								onchange="document.getElementById('cover_image').src = window.URL.createObjectURL(this.files[0])"
								accept="image/*">
							@if($errors->has('cover_image'))
							<span class="text-danger">
								{{ $errors->first('cover_image') }}
							</span>
							@endif
						</div>
						<br />

						<div class="card-body">
							<div class="form-group">
								<label>First Featured Image </label>
								<img src="{{ asset(Storage::url($aboutUs->first_featured_image)) }}"
									alt="why_choose_us.jpeg" class="rounded" id="first_featured_image" height="200px"
									width="200px">
							</div>
						</div>
						<!-- /.card-body -->

						<div class="card-footer">
							<input type="file" name="first_featured_image"
								onchange="document.getElementById('first_featured_image').src = window.URL.createObjectURL(this.files[0])"
								accept="image/*">
							@if($errors->has('first_featured_image'))
							<span class="text-danger">
								{{ $errors->first('first_featured_image') }}
							</span>
							@endif
						</div>
						<br />

						<div class="card-body">
							<div class="form-group">
								<label>Banner Image</label>
								<img src="{{ asset(Storage::url($aboutUs->banner_image)) }}" alt="why_choose_us.jpeg"
									class="rounded" id="banner_image" height="200px" width="200px">
							</div>
						</div>
						<!-- /.card-body -->

						<div class="card-footer">
							<input type="file" name="banner_image"
								onchange="document.getElementById('banner_image').src = window.URL.createObjectURL(this.files[0])"
								accept="image/*">
							@if($errors->has('banner_image'))
							<span class="text-danger">
								{{ $errors->first('banner_image') }}
							</span>
							@endif
						</div>
						<br />

						<div class="card-body">
							<div class="form-group">
								<label>Second Featured Image </label>
								<img src="{{ asset(Storage::url($aboutUs->second_featured_image)) }}"
									alt="why_choose_us.jpeg" class="rounded" id="second_featured_image" height="200px"
									width="200px">
							</div>
						</div>
						<!-- /.card-body -->

						<div class="card-footer">
							<input type="file" name="second_featured_image"
								onchange="document.getElementById('second_featured_image').src = window.URL.createObjectURL(this.files[0])"
								accept="image/*">
							@if($errors->has('second_featured_image'))
							<span class="text-danger">
								{{ $errors->first('second_featured_image') }}
							</span>
							@endif
						</div>
						<br />

						<div class="card-body">
							<div class="form-group">
								<label>Third Featured Image </label>
								<img src="{{ asset(Storage::url($aboutUs->third_featured_image)) }}"
									alt="why_choose_us.jpeg" class="rounded" id="third_featured_image" height="200px"
									width="200px">
							</div>
						</div>
						<!-- /.card-body -->

						<div class="card-footer">
							<input type="file" name="third_featured_image"
								onchange="document.getElementById('third_featured_image').src = window.URL.createObjectURL(this.files[0])"
								accept="image/*">
							@if($errors->has('third_featured_image'))
							<span class="text-danger">
								{{ $errors->first('third_featured_image') }}
							</span>
							@endif
						</div>
						<br />

						<div class="card-body">
							<div class="form-group">
								<input type="submit" class="btn btn-primary" value="Publish">
								<a href="{{ route('home') }}" class="btn btn-danger">Close</a>
							</div>
						</div>
					</div>
					<!-- /.card -->
				</div>
			</div>
		</form>
		<!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
@endsection

@section('script')
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

<script>
	CKEDITOR.replace( 'about_us_description' );
    CKEDITOR.replace( 'our_core_values' );         
    CKEDITOR.replace( 'our_vision' );         
    CKEDITOR.replace( 'our_mission' );   
    CKEDITOR.replace( 'first_description' );   
    CKEDITOR.replace( 'second_description' );   	      	
</script>
@endsection