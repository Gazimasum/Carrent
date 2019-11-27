@extends('frontend.layouts.master')
@section('content')


  <!--Listing-Image-Slider-->




  <section id="listing_img_slider">

        @foreach($vehicle->Vimage as $image)
    <div><img src="{{asset('images/vehicle/'. $image->image)}}" class="img-responsive" alt="image" width="700" height="560"></div>
      @endforeach

  </section>
  <!--/Listing-Image-Slider-->


  <!--Listing-detail-->
  <section class="listing-detail">
    <div class="container">
      <div class="listing_detail_head row">
        <div class="col-md-9">
          <h2>{{$vehicle->Brand()}}, {{$vehicle->VehiclesTitle}}</h2>
        </div>
        <div class="col-md-3">
          <div class="price_info">
            <p>${{$vehicle->PricePerDay}} </p>Per Day

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-9">
          <div class="main_features">
            <ul>

              <li> <i class="fa fa-calendar" aria-hidden="true"></i>
                <h5>{{$vehicle->ModelYear}}</h5>
                <p>Reg.Year</p>
              </li>
              <li> <i class="fa fa-cogs" aria-hidden="true"></i>
                <h5>{{$vehicle->FuelType}}</h5>
                <p>Fuel Type</p>
              </li>

              <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
                <h5>{{$vehicle->SeatingCapacity}}</h5>
                <p>Seats</p>
              </li>
            </ul>
          </div>
          <div class="listing_more_info">
            <div class="listing_detail_wrap">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs gray-bg" role="tablist">
                <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab">Vehicle Overview </a></li>

                <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Accessories</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <!-- vehicle-overview -->
                <div role="tabpanel" class="tab-pane active" id="vehicle-overview">

                  <p>{{$vehicle->VehiclesOverview}}</p>
                </div>


                <!-- Accessories -->
                <div role="tabpanel" class="tab-pane" id="accessories">
                  <!--Accessories-->
                  <table>
                    <thead>
                      <tr>
                        <th colspan="2">Accessories</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Air Conditioner</td>
            @if($vehicle->AirConditioner==1)

                                  <td><i class="fa fa-check" aria-hidden="true"></i></td>
          @else
               <td><i class="fa fa-close" aria-hidden="true"></i></td>
             @endif </tr>

            <tr>
            <td>AntiLock Braking System</td>
            @if($vehicle->AntiLockBrakingSystem==1)

            <td><i class="fa fa-check" aria-hidden="true"></i></td>
          @else
            <td><i class="fa fa-close" aria-hidden="true"></i></td>
          @endif
                                </tr>

            <tr>
            <td>Power Steering</td>
            @if($vehicle->PowerSteering==1)

            <td><i class="fa fa-check" aria-hidden="true"></i></td>
          @else
            <td><i class="fa fa-close" aria-hidden="true"></i></td>
          @endif
            </tr>


            <tr>

            <td>Power Windows</td>

            @if($vehicle->PowerWindows==1)

            <td><i class="fa fa-check" aria-hidden="true"></i></td>
          @else
            <td><i class="fa fa-close" aria-hidden="true"></i></td>
          @endif
            </tr>

             <tr>
            <td>CD Player</td>
            @if($vehicle->CDPlayer==1)

            <td><i class="fa fa-check" aria-hidden="true"></i></td>
          @else
            <td><i class="fa fa-close" aria-hidden="true"></i></td>
          @endif
            </tr>

            <tr>
            <td>Leather Seats</td>
            @if($vehicle->LeatherSeats==1)

            <td><i class="fa fa-check" aria-hidden="true"></i></td>
          @else
            <td><i class="fa fa-close" aria-hidden="true"></i></td>
          @endif
            </tr>

            <tr>
            <td>Central Locking</td>
            @if($vehicle->CentralLocking==1)

            <td><i class="fa fa-check" style="color:green !important;" aria-hidden="true"></i></td>
          @else
            <td><i class="fa fa-close" aria-hidden="true"></i></td>
          @endif
            </tr>

            <tr>
            <td>Power Door Locks</td>
            @if($vehicle->PowerDoorLocks==1)

            <td><i class="fa fa-check" aria-hidden="true"></i></td>
          @else
            <td><i class="fa fa-close" aria-hidden="true"></i></td>
          @endif
                                </tr>
                                <tr>
            <td>Brake Assist</td>
            @if($vehicle->BrakeAssist==1)

            <td><i class="fa fa-check" aria-hidden="true"></i></td>
          @else
            <td><i class="fa fa-close" aria-hidden="true"></i></td>
          @endif
            </tr>

            <tr>
            <td>Driver Airbag</td>
            @if($vehicle->DriverAirbag==1)

            <td><i class="fa fa-check" aria-hidden="true"></i></td>
          @else
            <td><i class="fa fa-close" aria-hidden="true"></i></td>
          @endif
             </tr>

             <tr>
             <td>Passenger Airbag</td>
             @if($vehicle->PassengerAirbag==1)

            <td><i class="fa fa-check" aria-hidden="true"></i></td>
          @else
            <td><i class="fa fa-close" aria-hidden="true"></i></td>
          @endif
            </tr>

            <tr>
            <td>Crash Sensor</td>
            @if($vehicle->CrashSensor==1)

            <td><i class="fa fa-check" aria-hidden="true"></i></td>
          @else
            <td><i class="fa fa-close" aria-hidden="true"></i></td>
          @endif
            </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>


        </div>

        <!--Side-Bar-->
        <aside class="col-md-3">

          <div class="share_vehicle">
            <p>Share: <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </p>
          </div>
          <div class="sidebar_widget">
            <div class="widget_heading">
              <h5><i class="fa fa-envelope" aria-hidden="true"></i>Book Now</h5>
            </div>
            <form method="post" action="{{route('booking',$vehicle->id)}}">
              @csrf
              <div class="form-group">
                <input type="date" class="form-control" name="fromdate" placeholder="From Date(dd/mm/yyyy)" required>
              </div>
              <div class="form-group">
                <input type="date" class="form-control" name="todate" placeholder="To Date(dd/mm/yyyy)" required>
              </div>
              <div class="form-group">
                <textarea rows="4" class="form-control" name="message" placeholder="Message" required></textarea>
              </div>

            @guest
              <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login For Book</a>
              @else
                <div class="form-group">
                  <input type="submit" class="btn"  name="submit" value="Book Now">
                </div>
            @endguest

            </form>
          </div>
        </aside>
        <!--/Side-Bar-->
      </div>

      <div class="space-20"></div>
      <div class="divider"></div>

      <!--Similar-Cars-->
      <div class="similar_cars">
        <h3>Similar Cars</h3>
        <div class="row">

  @foreach($samevehicles as $v)

          <div class="col-md-3 grid_listing">
            <div class="product-listing-m gray-bg">
              {{-- @php $i=1; @endphp
              @foreach($v->Vimage as $image)
              @if($i>0) --}}
              <div class="product-listing-img"> <a href="{{route('vehicles_details',$v->id)}}"><img src="{{ asset('images/vehicle/mainimages/'. $v->mainimage->image) }}"class="img-responsive" alt="image" /> </a>
              {{-- @endif
              @php $i--; @endphp
              @endforeach --}}
              </div>
              <div class="product-listing-content">
                <h5><a href="{{route('vehicles_details',$v->id)}}">{{$v->Brand()}} , {{$v->VehiclesTitle}}</a></h5>
                <p class="list-price">${{$v->PricePerDay}}</p>

                <ul class="features_list">

               <li><i class="fa fa-user" aria-hidden="true"></i>{{$v->SeatingCapacity}} seats</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i>{{$v->ModelYear}} model</li>
                  <li><i class="fa fa-car" aria-hidden="true"></i>{{$v->FuelType}} </li>
                </ul>
              </div>
            </div>
          </div>
  @endforeach

        </div>
      </div>
      <!--/Similar-Cars-->

    </div>
  </section>
  <!--/Listing-detail-->
@endsection
