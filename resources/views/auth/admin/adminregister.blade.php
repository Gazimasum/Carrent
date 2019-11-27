@extends('backend.layouts.master')

@section('content')
  <div class="content-wrapper">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">

          <h2 class="page-title">Add Admin</h2>

          <div class="row">
            <div class="col-md-10">
              <div class="panel panel-default">
                <div class="panel-heading">Register Form</div>
                <div class="panel-body">
            <form method="POST" action="{{ route('admin.register') }}">
              @csrf

              <div class="form-group">
        <label for="name">Name</label>

          <input id="name" type="text"  class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="" required>

              </div>


              <div class="form-group">
                <label for="email">E-Mail Address</label>


                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                  @if ($errors->has('email'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>


              <div class="form-group">
                <label for="phone_no">Phone No</label>


                  <input id="phone_no" type="text" class="form-control{{ $errors->has('phone_no') ? ' is-invalid' : '' }}" name="phone_no" value="{{ old('phone_no') }}" required>

                  @if ($errors->has('phone_no'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('phone_no') }}</strong>
                    </span>
                  @endif
                </div>

              <div class="form-group">
                <label for="password">Password</label>


                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                  @if ($errors->has('password'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>

              <div class="form-group">
                <label for="password-confirm">Confirm Password</label>


                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Register
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
