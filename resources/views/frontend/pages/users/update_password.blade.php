@extends('frontend.layouts.master')
@section('content')
<!-- /Header -->
<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Update Password</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Update Password</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header-->


<section class="user_profile inner_pages">
  <div class="container">
    <div class="user_profile_info gray-bg padding_4x4_40">
      <div class="upload_user_logo"> <img src="{{ App\Helpers\ImageHelper::getUserImage($user->id) }}"  style="width:100px; border-radius: 50%;"  alt="image">
      </div>

      <div class="dealer_info">
        <h5>{{$user->name}}</h5>
        <p>{{$user->dob}}<br>
        {{$user->street_address}}<br>
          {{$user->city}}&nbsp;{{$user->country}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-3">
        @include('frontend.partials.sidebar')
      <div class="col-md-6 col-sm-8">
        <div class="profile_wrap">
          <form name="chngpwd" method="post" action="{!! route('profile.updatepassword') !!}">
            @csrf
            <div class="gray-bg field-title">
              <h6>Update password</h6>

            @if (Session::has('success'))
                <div class="succWrap"><strong>SUCCESS</strong>: {{Session::get('success')}}</div>
            @endif

            @if (Session::has('sticky_error'))
            <div class="succWrap"><strong>FAILD</strong>: {{Session::get('sticky_error')}}</div>
            @endif
              </div>
            {{-- <div class="form-group">
              <label class="control-label">Current Password</label>
              <input class="form-control white_bg" id="password" name="ppassword"  type="password" required>
            </div> --}}

            <div class="form-group">
              <label class="control-label">Password</label>
              <input class="form-control white_bg" id="newpassword" type="password" name="password" required>
            </div>
            <div class="form-group">
              <label class="control-label">Confirm Password</label>
              <input class="form-control white_bg" id="confirmpassword" type="password" name="password_confirmation"  required>
            </div>

            <div class="form-group">
               <input type="submit" value="Update" name="update" id="submit" class="btn btn-block">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/Profile-setting-->

@endsection
