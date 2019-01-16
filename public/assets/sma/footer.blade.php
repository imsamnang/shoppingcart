<div class="clearfix"></div>

    <footer>
      <a href="#" id="toTop" class="blue" style="position: fixed; bottom: 30px; right: 30px; font-size: 30px; display: none;">
          <i class="fa fa-chevron-circle-up"></i>
      </a>
      <p style="text-align:center;">&copy; 2019 Stock Manager Advance (<a href="http://localhost/project_full/stmav3/documentation.pdf" target="_blank">v3.4.11</a>) 
      </p>
    </footer>

  </div>
   <div id="modal-loading" style="display: none;">
      <div class="blackbg"></div>
      <div class="loader"></div>
  </div>
  <div id="ajaxCall"><i class="fa fa-spinner fa-pulse"></i></div>

{{-- datatable <script></script> --}}
  <script type="text/javascript">
    var site = {"assets":"http://localhost:8000/assets/sma/",
                "settings":{
                          "logo":"logo2.png","logo2":"logo3.png",
                          "site_name":"Stock Manager Advance","language":"english",
              },
              "dateFormats":{"js_sdate":"dd\/mm\/yyyy",
                            "php_sdate":"d\/m\/Y",
                            "mysq_sdate":"%d\/%m\/%Y",
                            "js_ldate":"dd\/mm\/yyyy hh:ii",
                            "php_ldate":"d\/m\/Y H:i",
                            "mysql_ldate":"%d\/%m\/%Y %H:%i"}
            };
  </script>

  <script src="{{asset('assets/sma/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/sma/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assets/sma/js/jquery.dataTables.dtFilter.min.js')}}"></script>
  <script src="{{asset('assets/sma/js/select2.min.js')}}"></script>
  <script src="{{asset('assets/sma/js/jquery-ui.min.js')}}"></script>
  <script src="{{asset('assets/sma/js/bootstrapValidator.min.js')}}"></script>
  <script src="{{asset('assets/sma/js/custom.js')}}"></script>
  <script src="{{asset('assets/sma/js/jquery.calculator.min.js')}}"></script>
  <script src="{{asset('assets/sma/js/core.js')}}"></script>
  <script src="{{asset('assets/sma/js/perfect-scrollbar.min.js')}}"></script>