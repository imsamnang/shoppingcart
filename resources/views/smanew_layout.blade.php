<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <base href="http://localhost:8000"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Dashboard - Tinhtoday Shopping Cart')</title>
  <link rel="shortcut icon" href="{{asset('assets/sma/images/icon.png')}}"/>
  <link href="{{asset('assets/sma/styles/theme.css')}}" rel="stylesheet"/>
  <link href="{{asset('assets/sma/styles/style.css')}}" rel="stylesheet"/>
  <script type="text/javascript" src="{{asset('assets/sma/js/jquery-2.0.3.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/sma/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <noscript>
        <style type="text/css">#loading { display: none; }</style>
    </noscript>
    <script type="text/javascript">
        $(window).load(function () {
            $("#loading").fadeOut("slow");
        });
    </script>
</head>

<body>
<noscript>
    <div class="global-site-notice noscript">
        <div class="notice-inner">
            <p><strong>JavaScript seems to be disabled in your browser.</strong><br>You must have JavaScript enabled in
                your browser to utilize the functionality of this website.</p>
        </div>
    </div>
</noscript>
<div id="loading"></div>
<div id="app_wrapper">
  <header id="header" class="navbar">
    <div class="container">
      <a class="navbar-brand" href="/"><span class="logo">Tinhtoday.com</span></a>
      <div class="btn-group visible-xs pull-right btn-visible-sm">
          <button class="navbar-toggle btn" type="button" data-toggle="collapse" data-target="#sidebar_menu">
              <span class="fa fa-bars"></span>
          </button>
          <a href="#" class="btn">
              <span class="fa fa-user"></span>
          </a>
          <a href="#" class="btn">
              <span class="fa fa-sign-out"></span>
          </a>
      </div>
      <div class="header-nav">
        <li>
          <ul class="nav navbar-nav pull-right">
              <li class="dropdown">
                  <a class="btn account dropdown-toggle" data-toggle="dropdown" href="#">
                      <img alt="" src="default.jpg">

                      <div class="user">
                          <span>Applephagna</span>
                      </div>
                  </a>
                  <ul class="dropdown-menu pull-right">
                      <li>
                          <a href="#">
                              <i class="fa fa-user"></i> Profile
                          </a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-key"></i> Change Password
                          </a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="#">
                              <i class="fa fa-sign-out"></i> Logout
                          </a>
                      </li>
                  </ul>
              </li>
          </ul>
          <ul class="nav navbar-nav pull-right">
		        <li id="cart_items"></li>
            <li class="dropdown hidden-xs"><a class="btn tip" title="Dashboard" data-placement="bottom" href="#"><i class="fa fa-dashboard"></i></a></li>
            <li class="dropdown hidden-sm">
                <a class="btn tip" title="Settings" data-placement="bottom" href="#">
                    <i class="fa fa-cogs"></i>
                </a>
            </li>
            <li class="dropdown hidden-xs">
                <a class="btn tip" title="Calculator" data-placement="bottom" href="#" data-toggle="dropdown">
                    <i class="fa fa-calculator"></i>
                </a>
                <ul class="dropdown-menu pull-right calc">
                    <li class="dropdown-content">
                        <span id="inlineCalc"></span>
                    </li>
                </ul>
            </li>
            <li class="dropdown hidden-sm">
                <a class="btn tip" title="#" data-placement="bottom" href="#" data-toggle="dropdown">
                    <i class="fa fa-info-circle"></i>
                    <span class="number blightOrange black">Info</span>
                </a>
                <ul class="dropdown-menu pull-right content-scroll">
                    <li class="dropdown-header"><i class="fa fa-info-circle"></i> Notifications</li>
                    <li class="dropdown-content">
                        <div class="scroll-div">
                            <div class="top-menu-scroll">
                                <ol class="oe">
                                  <!-- loop -->
                                </ol>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown hidden-xs">
                <a class="btn tip" title="Calendar" data-placement="bottom" href="#" data-toggle="dropdown">
                    <i class="fa fa-calendar"></i>
                    <span class="number blightOrange black">Eventss</span>
                </a>
                <ul class="dropdown-menu pull-right content-scroll">
                    <li class="dropdown-header">
                    <i class="fa fa-calendar"></i> Upcoming_events
                    </li>
                    <li class="dropdown-content">
                        <div class="top-menu-scroll">
                            <ol class="oe">
                              <!-- loop -->
                            </ol>
                        </div>
                    </li>
                    <li class="dropdown-footer">
                        <a href="Calendar" class="btn-block link">
                            <i class="fa fa-calendar"></i> Calendar
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown hidden-xs">
                <a class="btn tip" title="Calendar" data-placement="bottom" href="<Calendar">
                    <i class="fa fa-calendar"></i>
                </a>
            </li>
            <li class="dropdown hidden-sm">
                <a class="btn tip" title="Styles" data-placement="bottom" data-toggle="dropdown"
                   href="#">
                    <i class="fa fa-css3"></i>
                </a>
                <ul class="dropdown-menu pull-right">
                    <li class="bwhite noPadding">
                        <a href="#" id="fixed" class="">
                            <i class="fa fa-angle-double-left"></i>
                            <span id="fixedText">Fixed</span>
                        </a>
                        <a href="#" id="cssLight" class="grey">
                            <i class="fa fa-stop"></i> Grey
                        </a> 
                        <a href="#" id="cssBlue" class="blue">
                            <i class="fa fa-stop"></i> Blue
                        </a> 
                        <a href="#" id="cssBlack" class="black">
                           <i class="fa fa-stop"></i> Black
                        </a>
                   </li>
                </ul>
            </li>
            <li class="dropdown hidden-xs">
                <a class="btn tip" title="Language" data-placement="bottom" data-toggle="dropdown"
                   href="#">
                    <img src="language.jpg" alt="">
                </a>
                <ul class="dropdown-menu pull-right">
                    <!-- loop language -->
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <i class="fa fa-align-right"></i>
                            Toggle_alignment
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="">
                    <span class="label label-danger pull-right" style="margin-top:3px;"></span>
                    <span style="padding-right: 35px;"> Quantity_alerts</span>
                </a>
            </li>
            <li>
                <a href="#" class="">
                    <span class="label label-danger pull-right" style="margin-top:3px;"></span>
                    <span style="padding-right: 35px;"> Expiry_alerts</span>
                </a>
            </li>
            <li>
                <a href="#" class="">
                    <span class="label label-danger pull-right" style="margin-top:3px;"></span>
                    <span style="padding-right: 35px;">So_Alert</span>
                </a>
            </li>
            <li>
                <a href="#" class="">
                    <span class="label label-danger pull-right" style="margin-top:3px;"> Purchase_order_num</span>
                    <span style="padding-right: 35px;">po_alerts</span>
                </a>
            </li>
          </ul>
        </li>
				<li class="dropdown hidden-xs">
					<a class="btn bdarkGreen tip" title="Post" data-placement="bottom" href="#">
						<i class="fa fa-th-large"></i> <span class="padding05">POS</span>
					</a>
				</li>
      </div>
    </div>
  </header>

  <div class="container" id="container">
    <div class="row" id="main-con">
      <table class="lt">
        <tr>
          <td class="sidebar-con">
            <div id="sidebar-left">
              <div class="sidebar-nav nav-collapse collapse navbar-collapse" id="sidebar_menu">
                <ul class="nav main-menu">
                  <li class="mm_welcome">
                      <a href="/">
                          <i class="fa fa-dashboard"></i>
                          <span class="text"> Dashboard</span>
                      </a>
                  </li>

                  <li class="mm_products mm_transfers">
                    <a class="dropmenu" href="#">
                        <i class="fa fa-barcode"></i>
                        <span class="text"> Products</span>
                        <span class="chevron closed"></span>
                    </a>
                    <ul>
                      <li id="products_index">
                          <a class="submenu" href="#>
                              <i class="fa fa-barcode"></i>
                              <span class="text"> List_products</span>
                          </a>
                      </li>
                      <li id="products_import_csv">
                          <a class="submenu" href="#">
                              <i class="fa fa-file-text"></i>
                              <span class="text"> Import_products</span>
                          </a>
                      </li>
                      <li id="products_print_barcodes">
                          <a class="submenu" href="#">
                              <i class="fa fa-tags"></i>
                              <span class="text"> Print_barcode_label</span>
                          </a>
                      </li>									
    									<li id="products_using_stocks">
                        <a class="submenu" href="#">
                            <i class="fa fa-filter"></i>
                            <span class="text"> Using_stocks</span>
                        </a>
                      </li>
    									<li id="products_stock_counts">
                        <a class="submenu" href="#">
                            <i class="fa fa-list-ol"></i>
                            <span class="text"> Stock_counts</span>
                        </a>
                      </li>
                      <li id="products_quantity_adjustments">
                        <a class="submenu" href="#">
                            <i class="fa fa-filter"></i>
                            <span class="text"> Quantity_adjustments</span>
                        </a>
                      </li>
    									<li id="products_cost_adjustments">
                        <a class="submenu" href="#">
                            <i class="fa fa-filter"></i>
                            <span class="text"> Cost_adjustments</span>
                        </a>
                      </li>
    									<li id="products_converts">
                        <a class="submenu" href="#">
                            <i class="fa fa-list-ol"></i>
                            <span class="text"> Converts</span>
                        </a>
                      </li>
                      <?php 
      									$warehouses = 2;
      									if(count($warehouses) > 1){ ?>
      										<li id="transfers_index">
      											<a class="submenu" href="#">
      												<i class="fa fa-star-o"></i>
                              <span class="text"> List_transfers'</span>
      											</a>
      										</li>
    									<?php } ?>
                    </ul>
                  </li>
  				
  								<li class="mm_loans">
  									<a class="dropmenu" href="#">
  										<i class="fa fa-heart"></i>
  										<span class="text"> Loans
  										</span> <span class="chevron closed"></span>
  									</a>
  									<ul>
  										<li id="loans_add_loan">
  											<a class="submenu" href="#">
  												<i class="fa fa-heart-o"></i>
  												<span class="text"> Add_loan</span>
  											</a>
  										</li>
  										<li id="loans_index">
  											<a class="submenu" href="#">
  												<i class="fa fa-heart-o"></i>
  												<span class="text"> List_loans</span>
  											</a>
  										</li>
  										<li id="loans_missing_loans">
  											<a class="submenu" href="#">
  												<i class="fa fa-heart-o"></i>
  												<span class="text"> Missing_loans</span>
  											</a>
  										</li>
  									</ul>
  								</li>

                  <li class="mm_sales mm_deliveries mm_quotes mm_sale_orders">
                    <a class="dropmenu" href="#">
                        <i class="fa fa-heart"></i>
                        <span class="text"> Sales 
                        </span> <span class="chevron closed"></span>
                    </a>
                    <ul>
    									<li id="quotes_index">
                        <a class="submenu" href="#">
                            <i class="fa fa-heart-o"></i>
                            <span class="text"> List_quotes</span>
                        </a>
                      </li>
    									<li id="sale_orders_index">
                        <a class="submenu" href="#">
                            <i class="fa fa-heart-o"></i>
                            <span class="text"> List_sale_orders</span>
                        </a>
                      </li>
                      <li id="sales_index">
                          <a class="submenu" href="#">
                              <i class="fa fa-heart"></i>
                              <span class="text"> List_sales</span>
                          </a>
                      </li>
    									<li id="sales_returns">
                        <a class="submenu" href="#">
                            <i class="fa fa-heart"></i>
                            <span class="text"> List_returns</span>
                        </a>
                      </li>                                  
                      <li id="pos_sales">
                          <a class="submenu" href="#">
                              <i class="fa fa-heart"></i>
                              <span class="text"> Pos_sales</span>
                          </a>
                      </li>
                      <li id="deliveries_index">
                          <a class="submenu" href="#">
                              <i class="fa fa-truck"></i>
                              <span class="text"> Deliveries</span>
                          </a>
                      </li>
                      <li id="sales_gift_cards">
                          <a class="submenu" href="#">
                              <i class="fa fa-gift"></i>
                              <span class="text"> List_gift_cards</span>
                          </a>
                      </li>
                    </ul>
                  </li>            

                  <li class="mm_purchases mm_purchase_orders mm_purchase_requests">
                      <a class="dropmenu" href="#">
                          <i class="fa fa-star"></i>
                          <span class="text"> Purchases 
                          </span> <span class="chevron closed"></span>
                      </a>
                      <ul>
  		                  <li id="purchase_requests_index">
                            <a class="submenu" href="#">
                                <i class="fa fa-heart-o"></i>
                                <span class="text"> List_purchase_requests</span>
                            </a>
                        </li>
  			                 <li id="purchase_orders_index">
                              <a class="submenu" href="#">
                                  <i class="fa fa-heart-o"></i>
                                  <span class="text"> List_purchase_orders</span>
                              </a>
                        </li>
                        <li id="purchases_index">
                              <a class="submenu" href="#">
                                  <i class="fa fa-star"></i>
                                  <span class="text"> List_purchases</span>
                              </a>
                        </li>						
  			                <li id="purchases_receives">
                              <a class="submenu" href="#">
                                  <i class="fa fa-star"></i>
                                  <span class="text"> List_receives</span>
                              </a>
                        </li>
                        <li id="purchases_expenses">
                              <a class="submenu" href="#">
                                  <i class="fa fa-dollar"></i>
                                  <span class="text"> List_expenses</span>
                              </a>
                        </li>
                      </ul>
                  </li>
  		
  								<li class="mm_accountings">
  									<a class="dropmenu" href="#">
  										<i class="fa fa-heart"></i>
  										<span class="text"> accountings 
  										</span> <span class="chevron closed"></span>
  									</a>
  									<ul>
  										<li id="accountings_index">
  											<a class="submenu" href="#">
  												<i class="fa fa-heart-o"></i>
  												<span class="text"> list_chart_accounts');?></span>
  											</a>
  										</li>
  										<li id="accountings_enter_journals">
  											<a class="submenu" href="#">
  												<i class="fa fa-heart-o"></i>
  												<span class="text"> list_enter_journals</span>
  											</a>
  										</li>
  										<li id="accountings_journals">
  											<a class="submenu" href="#">
  												<i class="fa fa-bars"></i>
  												<span class="text"> list_journals</span>
  											</a>
  										</li>
  										<li id="accountings_general_ledger">
  											<a href="#">
  												<i class="fa fa-bars"></i><span class="text"> general_ledger</span>
  											</a>
  										</li>
  										<li id="accountings_trial_balance">
  											<a href="#">
  												<i class="fa fa-bars"></i><span class="text"> trial_balance</span>
  											</a>
  										</li>
  										<li id="accountings_income_statement">
  											<a href="#">
  												<i class="fa fa-bars"></i><span class="text"> income_statement</span>
  											</a>
  										</li>
  										<li id="accountings_balance_sheet">
  											<a href="#">
  												<i class="fa fa-bars"></i><span class="text"> balance_sheet</span>
  											</a>
  										</li>
  										<li id="accountings_cash_flow">
  											<a href="#">
  												<i class="fa fa-bars"></i><span class="text"> cash_flow</span>
  											</a>
  										</li>
  										<li id="accountings_cash_books">
  											<a href="#">
  												<i class="fa fa-bars"></i><span class="text"> cash_book</span>
  											</a>
  										</li>
  									</ul>
  								</li>
  	
                  <li class="mm_auth mm_customers mm_suppliers">
                    <a class="dropmenu" href="#">
                      <i class="fa fa-users"></i>
                      <span class="text"> people </span> 
                      <span class="chevron closed"></span>
                    </a>
                    <ul>
                        <li id="auth_users">
                          <a class="submenu" href="
                              <i class="fa fa-users"></i><span class="text"> list_users</span>
                          </a>
                        </li>
                        <li id="customers_index">
                          <a class="submenu" href="#">
                              <i class="fa fa-users"></i><span class="text"> list_customers</span>
                          </a>
                        </li>
                        <li id="suppliers_index">
                          <a class="submenu" href="#">
                              <i class="fa fa-users"></i><span class="text"> list_suppliers</span>
                          </a>
                        </li>
                    </ul>
                  </li>
  	
                  <li class="mm_hr">
                    <a class="dropmenu" href="#">
                    <i class="fa fa-users"></i>
                    <span class="text"> hr </span> 
                    <span class="chevron closed"></span>
                    </a>
                    <ul>
                      <li id="hr_index">
                          <a class="submenu" href="#">                            
                            <i class="fa fa-users"></i><span class="text"> list_employees</span>
                          </a>
                      </li>
  	                    <li id="hr_positions">
                          <a class="submenu" href="#">
                              <i class="fa fa-users"></i><span class="text"> list_positions</span>
                          </a>
                        </li>
  	                    <li id="hr_departments">
                          <a class="submenu" href="#">
                              <i class="fa fa-users"></i><span class="text"> list_departments</span>
                          </a>
                        </li>
  	                    <li id="hr_groups">
                          <a class="submenu" href="#">
                              <i class="fa fa-users"></i><span class="text"> list_groups</span>
                          </a>
                        </li>
                      </ul>
                  </li>
  	
                  <li class="mm_attendances">
                    <a class="dropmenu" href="#">
                      <i class="fa fa-users"></i>
                      <span class="text"> attendances </span> 
                      <span class="chevron closed"></span>
                    </a>
                    <ul>
  		                <li id="hr_positions">
                        <a class="submenu" href="#">
                            <i class="fa fa-users"></i><span class="text"> approve_attendances</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                
                  <li class="mm_notifications">
                    <a class="submenu" href="#">
                        <i class="fa fa-info-circle"></i><span class="text"> notifications</span>
                    </a>
                  </li>

                  <li class="mm_system_settings mm_billers">
                    <a class="dropmenu" href="#">
                      <i class="fa fa-cog"></i><span class="text"> settings </span> 
                      <span class="chevron closed"></span>
                    </a>
                    <ul>
                      <li id="system_settings_index">
                        <a href="#">
                            <i class="fa fa-cog"></i><span class="text"> system_settings</span>
                        </a>
                      </li>
                      <li id="pos_settings">
                        <a href="#">
                            <i class="fa fa-th-large"></i><span class="text"> pos_settings</span>
                        </a>
                      </li>
                      <li id="system_settings_change_logo">
                        <a href="#" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-upload"></i><span class="text"> change_logo</span>
                        </a>
                      </li>
  										<li id="billers_index">
  											<a class="submenu" href="#">
  												<i class="fa fa-users"></i><span class="text"> list_billers</span>
  											</a>
  										</li>										
  										<li id="system_settings_projects">
  											<a class="submenu" href="#">
  												<i class="fa fa-users"></i><span class="text"> projects</span>
  											</a>
  										</li>										
  										<li id="system_settings_warehouses">
                        <a href="#">
                            <i class="fa fa-building-o"></i><span class="text"> warehouses</span>
                        </a>
                      </li>
  										<li id="system_settings_expense_categories">
                        <a href="#">
                            <i class="fa fa-folder-open"></i><span class="text"> expense_categories</span>
                        </a>
                      </li>
  										<li id="system_settings_categories">
                        <a href="#">
                            <i class="fa fa-folder-open"></i><span class="text"> categories</span>
                        </a>
                      </li>								
  										<li id="system_settings_loan_terms">
  											<a class="submenu" href="#">
  												<i class="fa fa-users"></i><span class="text"> loan_terms</span>
  											</a>
  										</li>
  										<li id="system_settings_frequencies">
  											<a class="submenu" href="#">
  												<i class="fa fa-users"></i><span class="text"> frequencies</span>
  											</a>
  										</li>
  										<li id="system_settings_tables">
  											<a class="submenu" href="#">
  												<i class="fa fa-users"></i><span class="text"> tables</span>
  											</a>
  										</li>
  										<li id="system_settings_floors">
  											<a class="submenu" href="#">
  												<i class="fa fa-users"></i><span class="text"> floors</span>
  											</a>
  										</li>
  										<li id="system_settings_vehicles">
                        <a href="#">
                            <i class="fa fa-clock-o"></i><span class="text"> vehicles</span>
                        </a>
                      </li>										
  										<li id="system_settings_units">
                        <a href="#">
                            <i class="fa fa-wrench"></i><span class="text"> units</span>
                        </a>
                      </li>
  										<li id="system_settings_brands">
                        <a href="#">
                            <i class="fa fa-th-list"></i><span class="text"> brands</span>
                        </a>
                      </li>
  										<li id="system_settings_variants">
                        <a href="#">
                            <i class="fa fa-tags"></i><span class="text"> variants</span>
                        </a>
                      </li>
  										<li id="products_bom">
  											<a class="submenu" href="#">
  												<i class="fa fa-list-ol"></i>
  												<span class="text"> bom</span>
  											</a>
  										</li>
  										<li id="system_settings_customer_groups">
                        <a href="#">
                            <i class="fa fa-chain"></i><span class="text"> customer_groups</span>
                        </a>
                      </li>										
  										<li id="system_settings_price_groups">
                        <a href="#">
                            <i class="fa fa-dollar"></i><span class="text"> price_groups</span>
                        </a>
                      </li>
  										<li id="system_settings_customer_groups">
                        <a href="#">
                            <i class="fa fa-chain"></i><span class="text"> payment_terms</span>
                        </a>
                      </li>                                        
                      <li id="system_settings_currencies">
                          <a href="#">
                              <i class="fa fa-money"></i><span class="text"> currencies</span>
                          </a>
                      </li>										
  										<li id="system_customer_opening_balances">
  											<a class="submenu" href="#">
  												<i class="fa fa-dollar"></i><span class="text"> customer_opening_balances</span>
  											</a>
  										</li>
  										<li id="system_supplier_opening_balances">
  											<a class="submenu" href="#">
  												<i class="fa fa-dollar"></i><span class="text"> supplier_opening_balances</span>
  											</a>
  										</li>
                      <li id="system_settings_tax_rates">
                        <a href="#">
                            <i class="fa fa-plus-circle"></i><span class="text"> tax_rates</span>
                        </a>
                      </li>
                      <li id="pos_printers">
                        <a href="#">
                            <i class="fa fa-print"></i><span class="text"> list_printers</span>
                        </a>
                      </li>
                      <li id="system_settings_email_templates">
                        <a href="#">
                            <i class="fa fa-envelope"></i><span class="text"> email_templates</span>
                        </a>
                      </li>
                      <li id="system_settings_user_groups">
                        <a href="#">
                            <i class="fa fa-key"></i><span class="text"> group_permissions</span>
                        </a>
                      </li>
  										<li id="system_settings_login_time">
                        <a href="#">
                            <i class="fa fa-clock-o"></i><span class="text"> login_time</span>
                        </a>
                      </li>
                      <li id="system_settings_backups">
                        <a href="#">
                            <i class="fa fa-database"></i><span class="text"> backups</span>
                        </a>
                      </li>
                    </ul>
                  </li>

    							<li class="mm_reports">
                    <a class="dropmenu" href="#">
                      <i class="fa fa-bar-chart-o"></i>
                      <span class="text"> rep orts </span> 
                      <span class="chevron closed"></span>
                    </a>
                    <ul>									
                      <li id="reports_index">
                        <a href="#">
                            <i class="fa fa-bars"></i><span class="text"> overview_chart</span>
                        </a>
                      </li>
                      <li id="reports_warehouse_stock">
                        <a href="#">
                            <i class="fa fa-building"></i><span class="text"> warehouse_stock</span>
                        </a>
                      </li>
                      <li id="reports_best_sellers">
                        <a href="#">
                            <i class="fa fa-line-chart"></i><span class="text"> best_sellers</span>
                        </a>
                      </li>                                    
                      <li id="reports_quantity_alerts">
                        <a href="#">
                            <i class="fa fa-bar-chart-o"></i><span class="text"> product_quantity_alerts</span>
                        </a>
                      </li>
                      <li id="reports_expiry_alerts">
                        <a href="#">
                            <i class="fa fa-bar-chart-o"></i><span class="text"> product_expiry_alerts</span>
                        </a>
                      </li>
    									<li id="reports_brands">
                        <a href="#">
                            <i class="fa fa-cubes"></i><span class="text"> brands_report</span>
                        </a>
                      </li>
    									<li id="reports_categories">
                        <a href="#">
                            <i class="fa fa-folder-open"></i><span class="text"> categories_report</span>
                        </a>
                      </li>                                   
                      <li id="reports_products">
                        <a href="#">
                            <i class="fa fa-barcode"></i><span class="text"> products_report</span>
                        </a>
                      </li>									
    									<li id="reports_inventory_in_out">
                        <a href="#">
                            <i class="fa fa-barcode"></i><span class="text"> inventory_in_out</span>
                        </a>
                      </li>
                      <li id="reports_adjustments">
                        <a href="#">
                            <i class="fa fa-filter"></i><span class="text"> adjustments_report</span>
                        </a>
                      </li>									
    									<li id="reports_cost_adjustments">
                        <a href="#">
                            <i class="fa fa-filter"></i><span class="text"> cost_adjustments_report</span>
                        </a>
                      </li>									
    								  <li id="reports_products_promotion_report">
                        <a href="#">
                            <i class="fa fa-barcode"></i><span class="text"> products_promotion_report</span>
                        </a>
                      </li>
                      <li id="reports_product_sales_report">
                        <a href="#">
                            <i class="fa fa-barcode"></i><span class="text"> product_sales_report</span>
                        </a>
                      </li>
    									<li id="reports_count_money">
    										<a href="#">
    											<i class="fa fa-th-large"></i><span class="text"> count_money_report</span>
    										</a>
    									</li>
                      <li id="reports_register">
                        <a href="#">
                            <i class="fa fa-th-large"></i><span class="text"> register_report</span>
                        </a>
                      </li>
    									<li id="reports_cash_register_report">
                        <a href="#">
                            <i class="fa fa-th-large"></i><span class="text"> cash_register_report</span>
                        </a>
                      </li>
    									<li id="reports_saleman_report">
                        <a href="#">
                            <i class="fa fa-heart"></i><span class="text"> saleman_report</span>
                        </a>
                      </li>
    									<li id="reports_saleman_group_report">
                        <a href="#">
                            <i class="fa fa-heart"></i><span class="text"> saleman_group_report</span>
                        </a>
                      </li>
    									<li id="reports_saleman_detail_report">
                        <a href="#">
                            <i class="fa fa-heart"></i><span class="text"> saleman_detail_report</span>
                        </a>
                      </li>									
                      <li id="reports_daily_sales">
                        <a href="#">
                            <i class="fa fa-calendar"></i><span class="text"> daily_sales</span>
                        </a>
                      </li>
                      <li id="reports_monthly_sales">
                          <a href="#">
                              <i class="fa fa-calendar"></i><span class="text"> monthly_sales</span>
                          </a>
                      </li>
    									<li id="reports_ar_aging">
                        <a href="#">
                            <i class="fa fa-heart"></i><span class="text"> ar_aging</span>
                        </a>
                      </li>
    									<li id="reports_ap_aging">
                        <a href="#">
                            <i class="fa fa-heart"></i><span class="text"> ap_aging</span>
                        </a>
                      </li>
                      <li id="reports_sales">
                        <a href="#">
                            <i class="fa fa-heart"></i><span class="text"> sales_report</span>
                        </a>
                      </li>
    									<li id="reports_sales">
                        <a href="#">
                            <i class="fa fa-heart"></i><span class="text"> sales_detail_report</span>
                        </a>
                      </li>                 
                      <li id="reports_daily_purchases">
                        <a href="#">
                            <i class="fa fa-calendar"></i><span class="text"> daily_purchases</span>
                        </a>
                      </li>
                      <li id="reports_monthly_purchases">
                        <a href="#">
                            <i class="fa fa-calendar"></i><span class="text"> monthly_purchases</span>
                        </a>
                      </li>
                      <li id="reports_purchases">
                        <a href="#">
                            <i class="fa fa-star"></i><span class="text"> purchases_report</span>
                        </a>
                      </li>
                      <li id="reports_expenses">
                        <a href="#">
                            <i class="fa fa-star"></i><span class="text"> expenses_report</span>
                        </a>
                      </li>
    									<li id="reports_payments">
                        <a href="#">
                            <i class="fa fa-money"></i><span class="text"> payments_report</span>
                        </a>
                      </li>
                      <li id="reports_profit_loss">
                        <a href="#">
                            <i class="fa fa-money"></i><span class="text"> profit_and_loss</span>
                        </a>
                      </li>
    									<li id="reports_customers">
                        <a href="#">
                            <i class="fa fa-users"></i><span class="text"> customers_report</span>
                        </a>
                      </li>
                      <li id="reports_suppliers">
                        <a href="#">
                            <i class="fa fa-users"></i><span class="text"> suppliers_report</span>
                        </a>
                      </li>
                      <li id="reports_staff_report">
                        <a href="#">
                            <i class="fa fa-users"></i><span class="text"> staff_report</span>
                        </a>
                      </li>
    									<li id="reports_audit_logs">
    										<a href="#">
    											<i class="fa fa-search"></i><span class="text"> audit_logs</span>
    										</a>
    									</li>
                    </ul>
                  </li>
                </ul>
              </div>
              <a href="#" id="main-menu-act" class="full visible-md visible-lg">
                  <i class="fa fa-angle-double-left"></i>
              </a>
            </div>
          </td>
          <td class="content-con">
            <div id="content">
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <ul class="breadcrumb">
                    <li>Home</li>
                  </ul>
                </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                    <div class="alerts-con"></div>


                    <div class="clearfix"></div>
                  </div>
              </div>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </div>
  <div class="clearfix"></div>
  <footer>
    <a href="#" id="toTop" class="blue" style="position: fixed; bottom: 30px; right: 30px; font-size: 30px; display: none;">
        <i class="fa fa-chevron-circle-up"></i>
    </a>

      <p style="text-align:center;">&copy; <?= date('Y') . " " . "Applephagna" ;?> (<a href="documentation.pdf" target="_blank">v3.4.11</a>
          ) <?php if ($_SERVER["REMOTE_ADDR"] == '127.0.0.1') {
              echo ' - Page rendered in <strong>{elapsed_time}</strong> seconds';
          } ?></p>
  </footer>
</div>

<div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">  
</div>
<div class="modal fade in" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">  
</div>
<div id="modal-loading" style="display: none;">
    <div class="blackbg"></div>
    <div class="loader"></div>
</div>
<div id="ajaxCall"><i class="fa fa-spinner fa-pulse"></i></div>

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
    

</body>
</html>

