<nav class="ts-sidebar">
    <ul class="ts-sidebar-menu">

          <li class="ts-label">Main</li>
          <li><a href="{!! route('admin.index') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li><a href="#"><i class="fa fa-files-o"></i>Manage Brands</a>
              <ul>
              <li><a href="{!! route('admin.brand.create') !!}">Create Brand</a></li>
              <li><a href="{!! route('admin.brand.manage') !!}">View Brands</a></li>
              </ul>
          </li>

          <li><a href="#"><i class="fa fa-car"></i>Manage Vehicles</a>
              <ul>
                <li><a href="{!! route('admin.vehicle.create') !!}">Post a Vehicle</a></li>
                <li><a href="{!! route('admin.vehicle.manage') !!}">View Vehicles</a></li>
              </ul>
          </li>
          <li><a href="{!! route('admin.booking') !!}"><i class="fa fa-book"></i> Manage Booking</a></li>
          <li><a href="{!! route('admin.testimonieal') !!}"><i class="fa fa-table"></i> Manage Testimonials</a></li>
          <li><a href="{!! route('viewmessage') !!}"><i class="fa fa-envelope"></i> Manage Message</a></li>
          <li><a href="{!! route('reguserview') !!}"><i class="fa fa-users"></i> Reg Users</a></li>
          <li><a href="{!! route('admin.pagecontent') !!}"><i class="fa fa-files-o"></i> Manage Pages</a></li>
          <li><a href="{!! route('viewcontact') !!}"><i class="fa fa-files-o"></i> Update Contact Info</a></li>
          <li><a href="{!! route('admin.banners') !!}"><i class="fa fa-files-o"></i> Add a Banner</a></li>
          <li>
              <a href="#"><i class="fa fa-user"></i> {{Auth::user()->name}}</a>
              <ul>
                <li><a href="{!! route('admin.password.chageview') !!}">Change Password</a></li>
                <li><a href="{!! route('adminregisterview') !!}">Add Admin</a></li>
                <li >
                  <a class="nav-link" href="">
                    <form class="form-inline" action="{!! route('admin.logout') !!}" method="post">
                      @csrf
                      <input type="submit" value="LogOut" class="btn btn-danger">
                    </form>
                  </a>
                </li>
             </ul>
          </li>
  </ul>
</nav>
