<!DOCTYPE html>
<html lang="en">
        @include('admin/partials._head')        
  <body style="background-color:#006ee4">

    <div class="container">            
                <div class="card card-login mx-auto mt-5">
                    <div class="card-header">{{ __('Admin Reset Password') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.pwd.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
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
                                    <label for="inputPassword">{{ __('New Password') }}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>                                   
    
                                    <label for="inputPassword">{{ __('Confirm New Password') }}</label>
                                </div>
                            </div>
                              
                            <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Reset Password') }}
                            </button>                                                       
                        </form>
                    </div>
                </div>        
    </div>
    @include('admin/partials._scripts')
  </body>

</html>
