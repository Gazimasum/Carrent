@extends('frontend.layouts.master')

@section('content')
<div class="container" style="margin:100px;padding:100x;">
  <div class="col-md-12 col-sm-6">
    <form method="POST" action="{{ route('register') }}">
        @csrf
      <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Full Name" required="required">
      </div>
            <div class="form-group">
        <input type="text" class="form-control" name="phone" placeholder="Mobile Number" maxlength="13" required="required">
      </div>
      <div class="form-group">
        <input type="email" class="form-control" name="email" id="emailid" onBlur="checkAvailability()" placeholder="Email Address" required="required">
         <span id="user-availability-status" style="font-size:12px;"></span>
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required="required">
      </div>
      <div class="form-group checkbox">
        <input type="checkbox" id="terms_agree" required="required" checked="">
        <label for="terms_agree">I Agree with <a href="{!! route('terms') !!}">Terms and Conditions</a></label>
      </div>
      <div class="form-group">
          <button type="submit" class="btn btn-primary">signup
          </button>
        {{-- <input type="submit" name="signup" id="submit" class="btn btn-block"> --}}
      </div>
    </form>
  </div>
</div>
@endsection
