
<div class="modal fade" id="signupform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Sign Up</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-12 col-sm-6">
              <form method="POST" action="{{ route('register') }}">
                  @csrf
                <div class="form-group">
                  <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" placeholder="Full Name" required="required"  value="{{ old('name') }}">
                </div>
                      <div class="form-group">
                  <input type="text" class="form-control  @error('phone') is-invalid @enderror" name="phone" placeholder="Mobile Number" maxlength="13" required="required"  value="{{ old('phone') }}">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="emailid" onBlur="checkAvailability()" placeholder="Email Address" required="required"  value="{{ old('email') }}">
                   <span id="user-availability-status" style="font-size:12px;"></span>
                </div>
                <div class="form-group">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  name="password" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
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
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Already got an account? <a href="#loginform" data-toggle="modal" data-dismiss="modal">Login Here</a></p>
      </div>
    </div>
  </div>
</div>
