<div class="profile_nav">
          <ul>
            <li><a href="{!! route('profile') !!}">Profile Settings</a></li>
              <li><a href="{!! route('profile.update.password') !!}">Update Password</a></li>
            <li><a href="{!! route('mybooking') !!}">My Booking</a></li>
            <li><a href="{!! route('user.post_testimonial_view') !!}">Post a Testimonial</a></li>
               <li><a href="{!! route('user.mytestimonial') !!}">My Testimonials</a></li>
            <li>  <a  href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form></li>
          </ul>
        </div>
      </div>
