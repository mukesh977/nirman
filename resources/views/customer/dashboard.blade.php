@extends('layout.frontend')

@section('content')

<section class="inner-dashboard ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                @include('frontend.includes.sidebar')
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                <!-- ACCOUNT DETAILS -->
                <div class="inner-dashboard-right id-bg">
                    <div class="idr-title">
                        <h4>My Account</h4>
                    </div>
                    <div class="idr-content idrc-account">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" id="fname" name="fname" class="form-control" value="Mukesh">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" id="lname" name="lname" class="form-control" value="Rai">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" id="lname" name="lname" class="form-control"
                                        value="mukeshrai541@gmail.com">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="tel" id="phonenum" name="phonenum" class="form-control"
                                        value="9849152398">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Street Address</label>
                                    <input type="text" id="address" name="address" class="form-control"
                                        value="Sanothimi-12">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Town/City</label>
                                    <input type="text" id="address" name="address" class="form-control"
                                        value="Bhaktapur, Provinces No 3, 44800">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="idrc-account-btn">
                                    <a href="#"><i class="far fa-save"></i>Save Changes</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection