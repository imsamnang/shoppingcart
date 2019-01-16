
<!DOCTYPE html>
<html>
<head>
  @include('includes.sma.head')
  @stack('css')
</head>
<body>
  <noscript>
    <div class="global-site-notice noscript">
      <div class="notice-inner">
          <p>
            <strong>JavaScript seems to be disabled in your browser.
            </strong><br>You must have JavaScript enabled in
              your browser to utilize the functionality of this website.
          </p>
      </div>
    </div>
  </noscript>
  <div id="loading"></div>
  <div id="app_wrapper">
    <header id="header" class="navbar">
      @include('includes.sma.header')
    </header>

    <div class="container" id="container">
      <div class="row" id="main-con">
        <table class="lt">
          <tr>
            <td class="sidebar-con">
              @include('includes.sma.left_sidebar')
            </td>
            <td class="content-con">
              <div id="content">
                <div class="row">
                  <div class="col-sm-12 col-md-12">
                    <ul class="breadcrumb">
                      <li class="active">Dashboard</li>
                      <li class="right_log hidden-xs">
                        Your IP Address ::1 <span class='hidden-sm'>( Last login at: 18/03/2015 01:54 IP: 42.115.35.12 )</span>                            
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    @yield('admin-content')
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>

    @include('includes.sma.footer')

  @stack('js')
</body>
</html>
