@extends('frontend.layouts.master')
@section('content')

  <!-- /Header -->
  <!--Page Header-->
  <section class="page-header profile_page">
    <div class="container">
      <div class="page-header_wrap">
        <div class="page-heading">
          <h1>Post Testimonial</h1>
        </div>
        <ul class="coustom-breadcrumb">
          <li><a href="#">Home</a></li>
          <li>Post Testimonial</li>
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
          <p>Street Address : {{$user->street_address}}<br>
          City : {{$user->city}}<br> Country : {{$user->country}}</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-sm-3">
          @include('frontend.partials.sidebar')
        <div class="col-md-6 col-sm-8">
          <div class="profile_wrap">
            <h5 class="uppercase underline">Post a Testimonial</h5>

            <form  method="post" action="{!! route('user.post_testimonial') !!}">

              @csrf
              <div class="form-group">
                <label class="control-label">Testimonail</label>
                <textarea class="form-control white_bg" name="message" rows="4" required=""></textarea>
              </div>


              <div class="form-group">
                <button type="submit" name="submit" class="btn">Save  <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/Profile-setting-->

@endsection
