@extends('frontend.layouts.master')
@section('content')
<div class="container" style="margin:100px;padding:100x;">

  <div class="col-md-12 col-sm-6">


                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </div>

                    <div class="form-group">

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </div>

                    <div class="form-group">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                    </div>

                    <div class="form-group row mb-0">

                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                    </div>
                </form>


</div>
</div>

@endsection
