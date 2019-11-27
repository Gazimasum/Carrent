@extends('backend.layouts.master')

@section('content')
  <div class="content-wrapper">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">

          <h2 class="page-title">Change Password</h2>

          <div class="row">
            <div class="col-md-10">
              <div class="panel panel-default">
                <div class="panel-heading">Form fields</div>
                <div class="panel-body">
      <form method="POST" action="{{ route('admin.password.update') }}">
        @csrf

        <div class="form-group">
          <label for="password"> New Password</label>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

            @if ($errors->has('password'))
              <span class="invalid-feedback">
                <strong style="color:red;">{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </div>

          <br>
            <div class="form-group">
              <label for="password_confirmation"> Confirm Password</label>
              <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required="required">

            @if ($errors->has('password_confirmation'))
              <span class="invalid-feedback">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
              </span>
            @endif
          </div>
        </div>

        <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
              Change Password
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

@endsection
