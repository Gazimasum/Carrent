<nav class="ts-sidebar">
    <ul class="ts-sidebar-menu">

      <li class="ts-label">Main</li>
      <li><a href=""><i class="fa fa-dashboard"></i> Dashboard</a></li>

<li><a href="#"><i class="fa fa-files-o"></i>Manage Brands</a>
<ul>
<li><a href="{!! route('admin.brand.create') !!}">Create Brand</a></li>
<li><a href="{!! route('admin.brand.manage') !!}">View Brands</a></li>
</ul>
</li>

<li><a href="#"><i class="fa fa-sitemap"></i>Manage Vehicles</a>
        <ul>
          <li><a href="{!! route('admin.vehicle.create') !!}">Post a Vehicle</a></li>
          <li><a href="{!! route('admin.vehicle.manage') !!}">View Vehicles</a></li>
        </ul>
      </li>
      <li><a href="{!! route('admin.booking') !!}"><i class="fa fa-users"></i> Manage Booking</a></li>

      <li><a href="{!! route('admin.testimonieal') !!}"><i class="fa fa-table"></i> Manage Testimonials</a></li>
      <li><a href=""><i class="fa fa-desktop"></i> Manage Conatctus Query</a></li>
      <li><a href=""><i class="fa fa-users"></i> Reg Users</a></li>
    <li><a href=""><i class="fa fa-files-o"></i> Manage Pages</a></li>
    <li><a href=""><i class="fa fa-files-o"></i> Update Contact Info</a></li>

    <li><a href=""><i class="fa fa-table"></i> Manage Subscribers</a></li>

    </ul>
  </nav>
