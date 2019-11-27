<div class="brand clearfix">
	<a href="dashboard.php" style="color: white;font-size: 24px;margin:10px;padding:10px;font-family:serif;">Car Rental Portal | Admin Panel</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li>
				<a class="nav-link btn-cart-nav" href="{{  route('admin.booking') }}">
					 <button class="btn btn-danger">
						 <span class="mt-1"><i class="fa fa-car nav_icon "></i> Order</span>
						 <span class="badge badge-success" id="totalOrder">
							 {{ App\Model\Booking::totalnewbook() }}
						 </span>
					 </button>
				 </a>
			</li>
			<li class="ts-account">
				<a href="#"><img src="{!! asset('admin/img/user.png') !!}" class="ts-avatar hidden-side" alt="">{{Auth::user()->name}} <i class="fa fa-angle-down hidden-side"></i></a>
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
	</div>
