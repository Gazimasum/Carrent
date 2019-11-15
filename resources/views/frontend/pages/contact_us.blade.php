@extends('frontend.layouts.master')
@section('content')
<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Contact Us</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Contact Us</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header-->

<!--Contact-us-->
<section class="contact_us section-padding">
  <div class="container">
    <div  class="row">
      <div class="col-md-6">
        <h3>Get in touch using the form below</h3>

        <div class="contact_form gray-bg">
          <form  method="post">
            <div class="form-group">
              <label class="control-label">Full Name <span>*</span></label>
              <input type="text" name="fullname" class="form-control white_bg" id="fullname" required>
            </div>
            <div class="form-group">
              <label class="control-label">Email Address <span>*</span></label>
              <input type="email" name="email" class="form-control white_bg" id="emailaddress" required>
            </div>
            <div class="form-group">
              <label class="control-label">Phone Number <span>*</span></label>
              <input type="text" name="contactno" class="form-control white_bg" id="phonenumber" required>
            </div>
            <div class="form-group">
              <label class="control-label">Message <span>*</span></label>
              <textarea class="form-control white_bg" name="message" rows="4" required></textarea>
            </div>
            <div class="form-group">
              <button class="btn" type="submit" name="send" type="submit">Send Message <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <h3>Contact Info</h3>
        <div class="contact_detail">
            @foreach ($contact as $c)
              <ul>

                <li>
                  <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                  <div class="contact_info_m">
                        {{ $c->address }}
                  </div>
                </li>
                <li>
                  <div class="icon_wrap"><i class="fa fa-phone" aria-hidden="true"></i></div>
                  <div class="contact_info_m"><a href="{{$c->phone}}"></a>{{$c->phone}}</div>
                </li>
                <li>
                  <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                  <div class="contact_info_m"><a href="{{$c->email}}"></a>{{$c->email}}</div>
                </li>
              </ul>
          @endforeach
          <br>
            <h3><i class="fa fa-map-marker" aria-hidden="true"></i> Location</h3>
            <br>
          <div id="googleMap" style="width:70%;height:400px;">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3606.665969258015!2d55.38051631448684!3d25.315424433107317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5bf301ce26f7%3A0xa2f21c6f64c7fa66!2sAl%20Taneen%20Rent%20A%20Car!5e0!3m2!1sbn!2sbd!4v1573067619227!5m2!1sbn!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>
  </div>
</section>
<!-- /Contact-us-->

@endsection
