<div class="brand clearfix">
	<a href="dashboard.php" style="font-size: 20px;">Car Rental Portal | Admin Panel</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">

			<li class="ts-account">
				<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="change-password.php">Change Password</a></li>
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
