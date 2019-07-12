<!DOCTYPE html>
<html lang="en">
        @include('admin/partials._head')        
  <body style="background-color:#006ee4">

    <div class="container">            
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">{{ __('Admin Password Reset') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="text-center mb-4">
                        <h4>Forgot your password?</h4>
                        <p>Enter your email address and we will send you a password reset link on your email address to reset your password.</p>
                        </div>
                        <form method="POST" action="{{ route('admin.fgtpwd.email') }}">
                            @csrf
                        <div class="form-group">
                            <div class="form-label-group">
                                <input id="inputEmail" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter email address" name="email" value="{{ old('email') }}" autofocus="autofocus" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif                            
                            <label for="inputEmail">{{ __('E-Mail Address') }}</label>
                            </div>
                            
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Send Password Reset Link') }}
                        </button>                        
                        </form>
                        
            </div>
        </div>        
    </div>
    @include('admin/partials._scripts')
  </body>

</html>
