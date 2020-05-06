@extends('home.layouts.app')

@section('content')
<div class="user">
<div class="container">
    <div class="row justify-content-center login">

        <div class="col-md-6">
            <ul class="nav nav-tabs justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active click" data-toggle="tab" href="#home">Đăng nhập</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu1">Đăng kí</a>
                </li>
               
              </ul>
            
              <!-- Tab panes -->
              <div class="tab-content">
                <div id="home" class="container tab-pane active">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="form-group col-auto">
                                    <label class="sr-only" for="email">{{ __('E-Mail Address') }}</label>
                                    <div class="input-group mb-2">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                      </div>
                                      <input id="email" type="email" class="form-control"  placeholder="Email Address" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                      @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                               
                            <div class="form-group col-auto">
                                <label class="sr-only" for="password">{{ __('Password') }}</label>
                                <div class="input-group mb-2">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-unlock"></i></div>
                                  </div>
                                  <input type="password" class="form-control" id="password" placeholder="Password" @error('password') is-invalid @enderror name="password" required autocomplete="current-password">
                                  @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                                </div>
                              </div>
                            
                        
                            <div class="form-group col-auto">
                                <div class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group col-auto">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-sign-in-alt"></i> {{ __('Login') }}
                                    </button>
                                    <a href="{{ url('/auth/redirect/facebook') }}" class="btn btn-primary"><i class="fab fa-facebook"></i> Login With Facebook</a>
                            
                                   
                                </div>
                            </div>
                            <hr>
                            <div class="form-group col-atuo">
                             <div class="text-center">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}" style="color:red">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                           </div>
                            </div>
                        </form>
                    </div>
                   
                </div>
                <div id="menu1" class="container tab-pane fade"><br>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            
                            <div class="form-group col-auto">
                                <label for="name" class="sr-only">{{ __('Name') }}</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fas fa-user"></i></div>
                                    </div>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                               
                            </div>
    
                            <div class="form-group col-auto">
                                <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                    </div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                              
                            </div>
    
                            <div class="form-group col-auto ">
                                <label for="password" class="sr-only">{{ __('Password') }}</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fas fa-unlock"></i></div>
                                    </div>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                        
                            </div>
    
                            <div class="form-group col-auto">
                                
                                <label for="password-confirm" class="sr-only">{{ __('Confirm Password') }}</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fas fa-unlock"></i></div>
                                    </div>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                  </div>
                               
                            </div>
    
                            <div class="form-group col-auto">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="far fa-registered"></i>   {{ __('Register') }}
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
    </div>
@endsection
