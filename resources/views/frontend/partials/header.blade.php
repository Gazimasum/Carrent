
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
              <a href="mailto:info@example.com">your@gmail.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Service Helpline Call Us: </p>
              <a href="tel:61-1234-5678-09">+0000000000</a> </div>
            <div class="social-follow">
              <ul>
                <li><a href="https://code-projects.org/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="https://code-projects.org/"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="https://code-projects.org/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="https://code-projects.org/"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                <li><a href="https://code-projects.org/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
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
{{--
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
               <ul class="nav navbar-nav">
                 <li><a href="index.php">Home</a>    </li>

                 <li><a href="page.php?type=aboutus">About Us</a></li>
                 <li><a href="car-listing.php">Car Listing</a>
                 <li><a href="page.php?type=faqs">FAQs</a></li>
                 <li><a href="contact-us.php">Contact Us</a></li>

               </ul>
             </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
  <!-- Navigation end --> --}}


  <!-- Navigation -->
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
         <li><a href="{!! route('faqs') !!}">FAQs</a></li>
         <li><a href="{{route('contact_us')}}">Contact Us</a></li>

       </ul>
     </div>
   </div>
 </nav>
 <!-- Navigation end -->

</header>
