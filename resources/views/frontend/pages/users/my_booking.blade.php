@extends('frontend.layouts.master')
@section('content')

  <!--Page Header-->
  <!-- /Header -->

  <!--Page Header-->
  <section class="page-header profile_page">
    <div class="container">
      <div class="page-header_wrap">
        <div class="page-heading">
          <h1>My Booking</h1>
        </div>
        <ul class="coustom-breadcrumb">
          <li><a href="#">Home</a></li>
          <li>My Booking</li>
        </ul>
      </div>
    </div>
    <!-- Dark Overlay-->
    <div class="dark-overlay"></div>
  </section>
  <!-- /Page Header-->

{{-- foreach --}}
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

        <div class="col-md-6 col-sm-8">
          <div class="profile_wrap">
            <h5 class="uppercase underline">My Bookings </h5>
            <div class="my_vehicles_list">
              <ul class="vehicle_listing">
                {{-- foreach for booking --}}
                @foreach ($booking as $bk)


                <li>
                     @php $i=1; @endphp
                     @foreach($bk->vehicle->Vimage as $image)
                     @if($i>0)

                         {{-- <div class="car-info-box">
                         <a href="{{route('vehicles_details',$v->id)}}">
                           <img src="" alt="{{ $v->VehiclesTitle }}" class="img-responsive" style="height:200px;">
                         </a> --}}

                         <div class="vehicle_img"> <a href="{!! route('vehicles_details',$bk->vehicle_id) !!}"><img src="{{ asset('admin/img/vehicleimages/'. $image->image) }}" alt="image"></a> </div>

                     @endif
                     @php $i--; @endphp
                     @endforeach



                  <div class="vehicle_title">
                    <h6><a href="{!! route('vehicles_details',$bk->vehicle_id) !!}"> {{$bk->Vehicle->VehiclesTitle}} , {{$bk->VehiclesTitle}}</a></h6>
                    <p><b>From Date:</b> {{$bk->from_date}}<br /> <b>To Date:</b> {{$bk->to_date}}</p>
                    <p><b>Message:</b> {{$bk->message}} </p>
                  </div>
                @if($bk->status==1)

                  <div class="vehicle_status"> <a href="#" class="btn outline btn-xs active-btn">Confirmed</a>
                      <div class="clearfix"></div>
                            </div>

                          @elseif($bk->status==2)
                  <div class="vehicle_status"> <a href="#" class="btn outline btn-xs">Cancelled</a>
                    <div class="clearfix"></div>
                    </div>



                @else
                    <div class="vehicle_status"> <a href="#" class="btn outline btn-xs">Not Confirm yet</a>
                      <div class="clearfix"></div>
                </div>
              @endif

                </li>
          {{-- endforeach --}}
          @endforeach
              </ul>
            </div>
            <div class="mt-4 pagination">
              {{ $booking->links() }}

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
