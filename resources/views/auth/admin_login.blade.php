@extends('layouts.admin.auth_master')

@push('css')
	{{-- expr --}}
@endpush

@section('content')	
  <div class="col-sm-10 col-sm-offset-1">
    <div class="login-container">
      <div class="center">
        <h1>
            <i class="ace-icon fa fa-leaf green"></i>
            <span class="red">Ace</span>
            <span class="white" id="id-text2">Application</span>
        </h1>
        <h4 class="red" id="id-company-text">
{{--           <?php 
            $message = Session::get('message');
            if($message){
              echo $message;
              Session::put('message',null);
            }
          ?> --}}
        </h4>
      </div>
      <div class="space-10"></div>
        <div class="position-relative">
          <div id="login-box" class="login-box visible widget-box no-border">
            <div class="widget-body">
              <div class="widget-main">
                <h4 class="header blue lighter bigger">
                    <i class="ace-icon fa fa-coffee green"></i>
                    Please Enter Your Information
                </h4>
                <div class="space-6"></div>
                <form method="POST" action="{{route('admin.login.post')}}">
                  {{csrf_field()}}
                  <fieldset>                    
                    <label class="block clearfix">
                      <span class="block input-icon input-icon-right">{{ __('E-Mail Address or Username') }}
                        <input type="text" class="form-control {{ $errors->has('email') || $errors->has('username')? ' is-invalid' : '' }}" placeholder="User Name" name="username" />
                        <i class="ace-icon fa fa-user"></i>
                      </span>
                      @if ($errors->has('username'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('username') }}</strong>
                          </span>
                      @endif
                      @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif                                
                    </label>
                    <label class="block clearfix">
                      <span class="block input-icon input-icon-right">{{ __('Password') }}
                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password"/>
                        <i class="ace-icon fa fa-lock"></i>
                      </span>
                      @if ($errors->has('password'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                        @endif                              
                    </label>
                    <div class="space"></div>
                    <div class="clearfix">
                        <label class="inline">
                            <input type="checkbox" class="ace" name="remember" {{ old('remember') ? 'checked' : '' }} />
                            <span class="lbl"> Remember Me</span>
                        </label>
                        <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                            <i class="ace-icon fa fa-key"></i>
                            <span class="bigger-110">Login</span>
                        </button>
                    </div>
                    <div class="space-4"></div>
                  </fieldset>
                </form>
                <div class="social-or-login center">
                    <span class="bigger-110">Or Login Using</span>
                </div>
                <div class="space-6"></div>
                <div class="social-login center">
                    <a class="btn btn-primary">
                        <i class="ace-icon fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-info">
                        <i class="ace-icon fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger">
                        <i class="ace-icon fa fa-google-plus"></i>
                    </a>
                </div>
              </div><!-- /.widget-main -->
              <div class="toolbar clearfix">
                  <div>
                    @if (Route::has('password.request'))                            
                      <a href="#" class="forgot-password-link">
                          <i class="ace-icon fa fa-arrow-left"></i>
                          I forgot my password
                      </a>
                    @endif  
                  </div>
                  <div>
                      <a href="{{route('admin.register')}}" class="user-signup-link">
                          I want to register
                          <i class="ace-icon fa fa-arrow-right"></i>
                      </a>
                  </div>
              </div>
            </div><!-- /.widget-body -->
          </div><!-- /.login-box -->
        </div><!-- /.position-relative -->
    </div>
  </div>
@endsection

@push('js')
  <!-- inline scripts related to this page -->
  <script type="text/javascript">
      jQuery(function($) {
       $(document).on('click', '.toolbar a[data-target]', function(e) {
          e.preventDefault();
          var target = $(this).data('target');
          $('.widget-box.visible').removeClass('visible');//hide others
          $(target).addClass('visible');//show target
       });
      });        
      
      //you don't need this, just used for changing background
      jQuery(function($) {
       $('#btn-login-dark').on('click', function(e) {
          $('body').attr('class', 'login-layout');
          $('#id-text2').attr('class', 'white');
          $('#id-company-text').attr('class', 'blue');            
          e.preventDefault();
       });
       $('#btn-login-light').on('click', function(e) {
          $('body').attr('class', 'login-layout light-login');
          $('#id-text2').attr('class', 'grey');
          $('#id-company-text').attr('class', 'blue');            
          e.preventDefault();
       });
       $('#btn-login-blur').on('click', function(e) {
          $('body').attr('class', 'login-layout blur-login');
          $('#id-text2').attr('class', 'white');
          $('#id-company-text').attr('class', 'light-blue');            
          e.preventDefault();
       });         
      });
  </script>
@endpush