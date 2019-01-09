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
        <h4 class="blue" id="id-company-text">&copy; Company Name</h4>
      </div>
      <div class="space-6"></div>
        <div class="position-relative">
          <div id="signup-box" class="signup-box visible widget-box no-border">
              <div class="widget-body">
                  <div class="widget-main">
                      <h4 class="header green lighter bigger">
                          <i class="ace-icon fa fa-users blue"></i>
                          New User Registration
                      </h4>

                      <div class="space-6"></div>
                      <p> Enter your details to begin: </p>

                      <form method="POST" action="#">
                      @csrf
                          <fieldset>
                              <label class="block clearfix">
                                  <span class="block input-icon input-icon-right">{{ __('Name') }}
                                      <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="User Name" name="name" required/>
                                      <i class="ace-icon fa fa-user"></i>
                                  </span>
                                  @if ($errors->has('name'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                  @endif                                          
                              </label>

                              <label class="block clearfix">
                                <span class="block input-icon input-icon-right">{{ __('User Name') }}
                                  <input type="text" class="form-control {{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="User Name" name="username" />
                                  <i class="ace-icon fa fa-user"></i>
                                </span>
                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif                              
                              </label>
                              
                              <label class="block clearfix">
                                  <span class="block input-icon input-icon-right">{{ __('E-Mail Address') }}
                                      <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" />
                                      <i class="ace-icon fa fa-envelope"></i>
                                  </span>
                                  @if ($errors->has('email'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </label>

                              <label class="block clearfix">
                                  <span class="block input-icon input-icon-right">{{ __('Password') }}
                                      <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" />
                                      <i class="ace-icon fa fa-lock"></i>
                                  </span>
                                  @if ($errors->has('password'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif                                          
                              </label>

                              <label class="block clearfix">
                                  <span class="block input-icon input-icon-right">{{ __('Confirm Password') }}
                                      <input type="password" class="form-control" placeholder="Repeat password" name="password_confirmation" />
                                      <i class="ace-icon fa fa-retweet"></i>
                                  </span>
                              </label>

                              <label class="block">
                                  <input type="checkbox" class="ace" />
                                  <span class="lbl">
                                      I accept the
                                      <a href="#">User Agreement</a>
                                  </span>
                              </label>

                              <div class="space-24"></div>

                              <div class="clearfix">
                                  <button type="reset" class="width-30 pull-left btn btn-sm">
                                      <i class="ace-icon fa fa-refresh"></i>
                                      <span class="bigger-110">Reset</span>
                                  </button>

                                  <button type="submit" class="width-65 pull-right btn btn-sm btn-success">
                                      <span class="bigger-110">Register</span>
                                      <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                  </button>
                              </div>
                          </fieldset>
                      </form>
                  </div>

                  <div class="toolbar center">
                      <a href="{{route('login')}}" class="back-to-login-link">
                          <i class="ace-icon fa fa-arrow-left"></i>
                          Back to login
                      </a>
                  </div>
              </div><!-- /.widget-body -->
          </div><!-- /.signup-box -->
        </div><!-- /.position-relative -->

    </div>
  </div><!-- /.col -->
@endsection

@push('js')
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