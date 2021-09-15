@extends('layout.admin')@section('title')
@endsection

@section('content')
<div class="container-fluid">
    <form action="{{ route('admin.media-library.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mt-2">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        Edit Layout Category
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 append-col">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('default_images/default.jpg') }}"
                                        alt="Card image cap" height="200px" width="200px" id="pic">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <input type="file" name="image[]"
                                                onchange="pic.src=window.URL.createObjectURL(this.files[0])"
                                                accept="image/*" required>
                                        </p>
                                        <button class="btn btn-danger btn-sm remove-card" disabled>Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary btn-sm" id="add-image-btn">Add Image</button>
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
                            @error('image')
                                <span class="text-danger">
                                    {{ $errors->first('image') }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <a href="{{ route('admin.media-library.index') }}" class="btn btn-danger">Close</a>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </form>
</div><!-- /.container-fluid -->
@endsection

@section('script')
<script>
    $(document).ready(function () { 
            var count = 1;
            $("#add-image-btn").click(function(e){
                e.preventDefault();
                var markup = '<div class="col-md-4 append-col"> <div class="card"> <img class="card-img-top" src="{{ asset('default_images/default.jpg') }}" alt="Card image cap" height="200px" width="200px" id="pic'+count+'"> <div class="card-body"> <p class="card-text"> <input type="file"  name="image[]" onchange="pic'+ count +'.src=window.URL.createObjectURL(this.files[0])" accept="image/*" required> </p> <button class="btn btn-danger btn-sm remove-card">Remove</button> </div> </div> </div>';
                $(".append-col:last").after(markup);
                count = count + 1;
            });
            
            $(document).on("click", ".remove-card",  function(e){
                e.preventDefault();
                $(this).closest(".append-col").remove();
            });
        }); 

</script>
@endsection