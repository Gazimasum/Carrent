<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Car Rental Portal | Admin Login</title>
	<link rel="stylesheet" href="{{asset('admin/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/dataTables.bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/bootstrap-social.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/bootstrap-select.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/fileinput.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/awesome-bootstrap-checkbox.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
</head>

<body>

	<div class="login-page bk-img" style="background-image: url({{asset('admin/img/adminlogin.jpg')}});">
		<div class="form-content">
			<div class="container">

				<div class="row">
					<div class="col-md-4">
						@include('frontend.partials.messages')
					</div>

					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold text-light mt-4x">Sign in</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">

								<form method="post" action="{!! route('admin.login.submit') !!}">
									@csrf
									<label for="" class="text-uppercase text-sm">Your Email </label>
									<input type="text" placeholder="Username" name="email" class="form-control mb">

									<label for="" class="text-uppercase text-sm">Password</label>
									<input type="password" placeholder="Password" name="password" class="form-control mb">



									<button class="btn btn-primary btn-block" name="login" type="submit">LOGIN</button>

								</form>


						
										<a class="btn btn-link" href="{{ route('admin.password.request') }}">
											Forgot Your Password?
										</a>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="{{asset('admin/js/jquery.min.js')}}"></script>
	<script src="{{asset('admin/js/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('admin/js/dataTables.bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/js/Chart.min.js')}}"></script>
	<script src="{{asset('admin/js/fileinput.js')}}"></script>
	<script src="{{asset('admin/js/chartData.js')}}"></script>
	<script src="{{asset('admin/js/main.js')}}"></script>

</body>

</html>
