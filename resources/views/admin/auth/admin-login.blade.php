<!DOCTYPE html>
<html lang="en">
        @include('admin/partials._head')        
  <body style="background-color:#006ee4">

    <div class="container">            
                <div class="card card-login mx-auto mt-5">
                    <div class="card-header">{{ __('Admin Login') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('alf.submit') }}">
                            @csrf
                            <div class="form-group">
                                <div class="form-label-group">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
    
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        
                                    @endif
                                    <label for="inputEmail">{{ __('E-Mail Address') }}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <label for="inputPassword">{{ __('Password') }}</label>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>   
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Login') }}
                            </button>
                            @if (Route::has('admin.fgtpwd.form'))
                                <div class="text-center"> 
                                    <a class="d-block small" href="{{ route('admin.fgtpwd.form') }}">{{ __('Forgot Your Password?') }}</a>                              
                                 </div>
                            @endif                            
                        </form>
                    </div>
                </div>        
    </div>
    @include('admin/partials._scripts')
  </body>

</html>
