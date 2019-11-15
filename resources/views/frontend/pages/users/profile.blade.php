@extends('frontend.layouts.master')
@section('content')

  <!-- /Banners -->
<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>{{$user->name}} Profile</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Profile</li>
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
      <div class="upload_user_logo"> <img src="{!! asset('images/dealer-logo.png') !!}" alt="image">
      </div>

      <div class="dealer_info">
        <h5>{{$user->name}}</h5>
        <p>{{$user->street_address}}<br>
          {{$user->city}}&nbsp;{{$user->country}}</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3 col-sm-3">
      @include('frontend.partials.sidebar')
      <div class="col-md-6 col-sm-8">
        <div class="profile_wrap">
          <h5 class="uppercase underline">Genral Settings</h5>

          @if (Session::has('success'))
              <div class="succWrap"><strong>SUCCESS</strong>: {{Session::get('success')}}</div>
          @endif

          @if (Session::has('sticky_error'))
          <div class="succWrap"><strong>FAILD</strong>: {{Session::get('sticky_error')}}</div>
          @endif


          <form  action="{!! route('profile.update') !!}" method="post">
            @csrf
           <div class="form-group">
              <label class="control-label">Reg Date -</label>
             {{$user->created_at}}
            </div>
             @if($user->updated_at!="")
            <div class="form-group">
              <label class="control-label">Last Update at  -</label>
             {{$user->updated_at}}
            </div>
          @endif
            <div class="form-group">
              <label class="control-label">Full Name</label>
              <input class="form-control white_bg" name="name" value="{{$user->name}}" id="fullname" type="text"  >
            </div>
            <div class="form-group">
              <label class="control-label">Email Address</label>
              <input class="form-control white_bg" value="{{$user->email}}" name="email" id="email" type="email"  readonly>
            </div>
            <div class="form-group">
              <label class="control-label">Phone Number</label>
              <input class="form-control white_bg" name="phonenumber" value="{{$user->phone_no}}" id="phone-number" type="text" >
            </div>
            <div class="form-group">
              <label class="control-label">Date of Birth&nbsp;(dd/mm/yyyy)</label>
              <input class="form-control white_bg" value="{{$user->dob}}" name="dob" placeholder="dd/mm/yyyy" id="birth-date" type="date" >
            </div>
            <div class="form-group">
              <label class="control-label">Your Address</label>
              <textarea class="form-control white_bg" name="address" rows="4" >{{$user->street_address}}</textarea>
            </div>
            <div class="form-group">
              <label class="control-label">Country</label>
              <input class="form-control white_bg"  id="country" name="country" value="{{$user->country}}" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">City</label>
              <input class="form-control white_bg" id="city" name="city" value="{{$user->city}}" type="text">
            </div>


            <div class="form-group">
              <button type="submit" name="updateprofile" class="btn">Save Changes <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/Profile-setting-->
@endsection
