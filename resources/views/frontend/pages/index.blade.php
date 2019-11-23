@extends('frontend.layouts.master')
@section('content')
  <!-- Banners -->
  @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>

  @endif
@include('frontend.partials.banner')

  <!-- /Banners -->
 {!! Toastr::message() !!}
  <!-- Resent Cat-->
  <section class="section-padding gray-bg">
    <div class="container">
      <div class="section-header text-center">
        <h2>Find the Best <span>CarForYou</span></h2>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
      </div>
      <div class="row">

        <!-- Nav tabs -->
        <div class="recent-tab">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">New Car</a></li>
          </ul>
        </div>
        <!-- Recently Listed New Cars -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="resentnewcar">

             @foreach ($vehicle as $v)

              <div class="col-list-3">
              <div class="recent-car-list">
                @php $i=1; @endphp
                @foreach($v->Vimage as $image)
                @if($i>0)

                    <div class="car-info-box">
                    <a href="{{route('vehicles_details',$v->id)}}">
                      <img src="{{ asset('admin/img/vehicleimages/'. $image->image) }}" alt="{{ $v->VehiclesTitle }}" class="img-responsive" style="height:200px;">
                    </a>
                @endif
                @php $i--; @endphp
                @endforeach

              {{-- <div class="car-info-box"> <a href=""><img src="admin/img/vehicleimages/{{$v->image}}" class="img-responsive" alt="image"></a> --}}
              <ul>
              <li><i class="fa fa-car" aria-hidden="true"></i>{{$v->FuelType}}</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i> Model : {{$v->VehiclesTitle}}</li>
              <li><i class="fa fa-user" aria-hidden="true"></i>{{$v->SeatingCapacity}} seats</li>
              </ul>
              </div>
              <div class="car-title-m">
              <h6><a href=""></a>{{$v->Brand()}}</h6>
              <span class="price">$ {{$v->PricePerDay}} /Day</span>
              </div>
              <div class="inventory_info_m">
              <p>{{$v->VehiclesOverview,0,50}}</p>
              </div>
              </div>
                 </div>
      @endforeach

        </div>
      </div>
    </div>
  </section>
  <!-- /Resent Cat -->

  <!-- Fun Facts-->
  <section class="fun-facts-section">
    <div class="container div_zindex">
      <div class="row">
        <div class="col-lg-3 col-xs-6 col-sm-3">
          <div class="fun-facts-m">
            <div class="cell">
              <h2><i class="fa fa-calendar" aria-hidden="true"></i>40+</h2>
              <p>Years In Business</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6 col-sm-3">
          <div class="fun-facts-m">
            <div class="cell">
              <h2><i class="fa fa-car" aria-hidden="true"></i>1200+</h2>
              <p>New Cars For Sale</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6 col-sm-3">
          <div class="fun-facts-m">
            <div class="cell">
              <h2><i class="fa fa-car" aria-hidden="true"></i>1000+</h2>
              <p>Used Cars For Sale</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6 col-sm-3">
          <div class="fun-facts-m">
            <div class="cell">
              <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>600+</h2>
              <p>Satisfied Customers</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Dark Overlay-->
    <div class="dark-overlay"></div>
  </section>
  <!-- /Fun Facts-->


  <!--Testimonial -->
  <section class="section-padding testimonial-section parallex-bg">
    <div class="container div_zindex">
      <div class="section-header white-text text-center">
        <h2>Our Satisfied <span>Customers</span></h2>
      </div>
      <div class="row">
        <div id="testimonial-slider">

        @foreach ($testimonial as $testimonial)
        <div class="testimonial-m">
            <div class="testimonial-img"> <img src="{{asset('images/cat-profile.png')}}" alt="" /> </div>
            <div class="testimonial-content">
              <div class="testimonial-heading">
                <h5>{{$testimonial->username}}</h5>
                {{-- <h5>{{$testimonial->useremail}}</h5> --}}
                <br><br>
              <p>{{$testimonial->message}}</p>
            </div>
          </div>
          </div>
              @endforeach



        </div>
      </div>
    </div>
    <!-- Dark Overlay-->
    <div class="dark-overlay"></div>
  </section>
  <!-- /Testimonial-->


@endsection
