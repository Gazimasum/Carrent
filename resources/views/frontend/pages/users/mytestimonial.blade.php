@extends('frontend.layouts.master')
@section('content')


  <!--Page Header-->
  <section class="page-header profile_page">
    <div class="container">
      <div class="page-header_wrap">
        <div class="page-heading">
          <h1>My Testimonials</h1>
        </div>
        <ul class="coustom-breadcrumb">
          <li><a href="#">Home</a></li>
          <li>My Testimonials</li>
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
        <div class="upload_user_logo"> <img src="{{ App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}"  style="width:100px; border-radius: 50%;"  alt="image">
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
          <div class="col-md-8 col-sm-8">



            <div class="profile_wrap">
                <h5 class="uppercase underline">My Testimonials </h5>
                <div class="my_vehicles_list">
                  <ul class="vehicle_listing">
                    @foreach ($testimonial as $t)

                        <li>

                        <div>
                         <p>{{$t->message}} </p>
                           <p><b>Posting Date:</b>{{$t->created_at}} </p>
                        </div>
                       @if($t->status==1)
                         <div class="vehicle_status"> <a class="btn outline btn-xs active-btn">Active</a>

                            <div class="clearfix"></div>
                         </div>
                        @else
                       <div class="vehicle_status"> <a href="#" class="btn outline btn-xs">Waiting for approval</a>
                          <div class="clearfix"></div>
                      </div>
                        @endif
                      </li>
                      @endforeach
                    </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/my-vehicles-->


@endsection
