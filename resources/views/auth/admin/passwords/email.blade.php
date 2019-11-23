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
						<h1 class="text-center text-bold text-light mt-4x">Admin Reset Password</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

</body>

</html>
