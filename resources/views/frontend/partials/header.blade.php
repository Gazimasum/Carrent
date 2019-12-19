@php
  $contact = App\Model\Contact::find(1)->first();
@endphp
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="index.php"><img src="{{asset('images/logg.png')}}" alt="image"/></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">For Support Mail us : </p>
              <a href="{{$contact->email}}">{{$contact->email}}</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Service Helpline Call Us: </p>
              <a href="tel:{{$contact->phone}}">{{$contact->phone}}</a> </div>
            <div class="social-follow">
              <ul>
                <li><a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href=""><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
@guest
  <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> </div>

@endguest

          </div>
        </div>
      </div>
    </div>
  </div>

 <nav id="navigation_bar" class="navbar navbar-default">
   <div class="container">
     <div class="navbar-header">
       <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
     </div>
     <div class="header_wrap">
       <div class="user_login">
                <ul>

                @guest

                  {{-- <ul class="nav navbar-nav">
                    <li><a href="#loginform" class="login_btn" data-toggle="modal" data-dismiss="modal">Login</a> </li>
                    <li><a href="#signupform" class="login_btn" data-toggle="modal" data-dismiss="modal">Signup</a></li>
                  </ul> --}}

                    @else

                     <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  <img src="{{ App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}" style="width:30px; border-radius: 50%;"> {{ Auth::user()->name }}

                        <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                       <ul class="dropdown-menu">
                         <li><a href="{!! route('profile') !!}">Profile Settings</a></li>
                         <li><a href="{!! route('profile.update.password') !!}">Update Password</a></li>
                         <li><a href="{!! route('mybooking') !!}">My Booking</a></li>
                         <li><a href="{!! route('user.post_testimonial_view') !!}">Post a Testimonial</a></li>
                         <li><a href="{!! route('user.mytestimonial') !!}">My Testimonial</a></li>
                         <li>   <a  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                       </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form></li>
                   </ul>
                      </li>
                  @endguest
               </ul>
             </div>
             <div class="header_search">
         <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
         <form action="{!! route('search') !!}" method="get" id="header-search-form">
           @csrf
           <input type="text" name="search" placeholder="Search..." class="form-control">
           <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
         </form>
       </div>
     </div>
     <div class="collapse navbar-collapse" id="navigation">
       <ul class="nav navbar-nav">
         <li><a href="{{route('index')}}">Home</a>    </li>

         <li><a href="{{route('about_us')}}">About Us</a></li>
         <li><a href="{!! route('car_list') !!}">Car Listing</a>
         <li><a href="{{route('contact_us')}}">Contact Us</a></li>
          <li><a href="{!! route('faqs') !!}">FAQs</a></li>

       </ul>
     </div>
   </div>
 </nav>
 <!-- Navigation end -->

</header>
