@php
$banner =  App\Model\Banner::where('status',1)->first();
@endphp
@if ($banner==null)
  <section id="banner" class="banner-section" >
    <div class="container">
      <div class="div_zindex">
        <div class="row">
          <div class="col-md-5 col-md-push-7">
            <div class="banner_content">

              <h1>FIND THE RIGHT CAR FOR YOU.</h1>
              <p>We have more than a thousand cars for you to choose. </p>
              <a href="#" class="btn">Read More <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@else
  <section id="banner" class="banner-section" style="background-image: url({!! asset('images/banners/'.$banner->image) !!})">
    <div class="container">
      <div class="div_zindex">
        <div class="row">
          <div class="col-md-5 col-md-push-7">
            <div class="banner_content">

              <h1>{{$banner->title}}</h1>
              <p>{{$banner->text}} </p>
              <a href="{{$banner->button_link}}" class="btn">{{$banner->button_text}} <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endif
