<div id="sidebar-left">
  <div class="sidebar-nav nav-collapse collapse navbar-collapse" id="sidebar_menu">
    <ul class="nav main-menu">
      <li class="mm_welcome">
        <a href="{{route('sma')}}">
          <i class="fa fa-dashboard"></i>
          <span class="text"> Dashboard</span>
        </a>
      </li>
      <li class="mm_products">
        <a class="dropmenu" href="#">
          <i class="fa fa-barcode"></i>
          <span class="text"> Products </span>
          <span class="chevron closed"></span>
        </a>
        <ul>
          <li id="products_index">
            <a class="submenu" href="{{route('product.index')}}">
              <i class="fa fa-barcode"></i>
              <span class="text"> List Products</span>
            </a>
          </li>
          <li id="products_add">
            <a class="submenu" href="{{route('product.create')}}">
              <i class="fa fa-plus-circle"></i>
              <span class="text"> Add Product</span>
            </a>
          </li>
          <li id="products_import_csv">
            <a class="submenu" href="{{route('product.import')}}">
              <i class="fa fa-file-text"></i>
              <span class="text"> Import Products</span>
            </a>
          </li>
          <li id="products_print_barcodes">
            <a class="submenu" href="{{route('product.print_barcodes')}}">
              <i class="fa fa-tags"></i>
              <span class="text"> Print Barcode/Label</span>
            </a>
          </li>
          <li id="products_stock_counts">
            <a class="submenu" href="{{route('product.using_stocks')}}">
              <i class="fa fa-list-ol"></i>
              <span class="text"> Using Stock</span>
            </a>
          </li>
          <li id="products_count_stock">
            <a class="submenu" href="{{route('product.stock_counts')}}">
              <i class="fa fa-plus-circle"></i>
              <span class="text"> Stock Counts</span>
            </a>
          </li>          
          <li id="products_quantity_adjustments">
            <a class="submenu" href="{{route('product.quantity_adjustments')}}">
              <i class="fa fa-filter"></i>
              <span class="text"> Quantity Adjustments</span>
            </a>
          </li>
          <li id="products_add_adjustment">
            <a class="submenu" href="{{route('product.cost_adjustments')}}">
              <i class="fa fa-filter"></i>
              <span class="text"> Cost Adjustment</span>
            </a>
          </li>
          <li id="products_stock_counts">
            <a class="submenu" href="{{route('product.converts')}}">
              <i class="fa fa-list-ol"></i>
              <span class="text"> Converts</span>
            </a>
          </li>
          <li id="transfers_index">
            <a class="submenu" href="{{route('product.transfers')}}">
              <i class="fa fa-star-o"></i><span class="text"> List Transfers</span>
            </a>
          </li>          
        </ul>
      </li>

      <li class="mm_loans ">
        <a class="dropmenu" href="#">
          <i class="fa fa-heart"></i>
          <span class="text"> Loans</span>
          <span class="chevron closed"></span>
        </a>
        <ul>
          <li id="loans_add_loan">
            <a class="submenu" href="{{route('loan.add_loan')}}">
              <i class="fa fa-heart"></i>
              <span class="text"> Simulation</span>
            </a>
          </li>
          <li id="loans_index">
            <a class="submenu" href="{{route('loan.list_loans')}}">
              <i class="fa fa-plus-circle"></i>
              <span class="text"> List Loans</span>
            </a>
          </li>
          <li id="loans_missing_loans">
            <a class="submenu" href="{{route('loan.missing_loans')}}">
              <i class="fa fa-plus-circle"></i>
              <span class="text"> Missing Loans</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="mm_sales ">
        <a class="dropmenu" href="#">
          <i class="fa fa-heart"></i>
          <span class="text"> Sales</span>
          <span class="chevron closed"></span>
        </a>
        <ul>
          <li id="quotes_index">
            <a class="submenu" href="{{route('sale.quotes')}}">
              <i class="fa fa-heart-o"></i>
              <span class="text"> List Quotation</span>
            </a>
          </li>          
          <li id="sales_index">
            <a class="submenu" href="{{route('sale.sale_orders')}}">
              <i class="fa fa-heart"></i>
              <span class="text"> List Sale Orders</span>
            </a>
          </li>
          <li id="list_sales">
            <a class="submenu" href="{{route('sale.sales')}}">
              <i class="fa fa-heart"></i>
              <span class="text"> List Sales</span>
            </a>
          </li>
          <li id="list_return">
            <a class="submenu" href="{{route('sale.returns')}}">
              <i class="fa fa-plus-circle"></i>
              <span class="text"> List Return</span>
            </a>
          </li>
          <li id="pos_sales">
            <a class="submenu" href="{{route('sale.pos_sales')}}">
              <i class="fa fa-plus-circle"></i>
              <span class="text"> Pos Sales</span>
            </a>
          </li>
          <li id="sales_deliveries">
            <a class="submenu" href="{{route('sale.deliveries')}}">
              <i class="fa fa-truck"></i>
              <span class="text"> Deliveries</span>
            </a>
          </li>
          <li id="sales_gift_cards">
            <a class="submenu" href="{{route('sale.gift_cards')}}">
              <i class="fa fa-gift"></i>
              <span class="text"> List Gift Cards</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="mm_purchases">
        <a class="dropmenu" href="#">
          <i class="fa fa-star"></i>
          <span class="text"> Purchases                                    
          </span> <span class="chevron closed"></span>
        </a>
        <ul>
          <li id="purchases_request_index">
            <a class="submenu" href="{{route('purchase.purchase_requests')}}">
              <i class="fa fa-star"></i>
              <span class="text"> List Purchases Requests</span>
            </a>
          </li>
          <li id="purchases_order_index">
            <a class="submenu" href="{{route('purchase.purchase_orders')}}">
              <i class="fa fa-plus-circle"></i>
              <span class="text"> List Purchases Orders</span>
            </a>
          </li>
          <li id="purchases_index">
            <a class="submenu" href="{{route('purchase.purchases')}}">
              <i class="fa fa-plus-circle"></i>
              <span class="text"> List Purchases</span>
            </a>
          </li>
          <li id="purchases_receive">
            <a class="submenu" href="{{route('purchase.receives')}}">
              <i class="fa fa-dollar"></i>
              <span class="text"> List Receives</span>
            </a>
          </li>          
          <li id="purchases_expenses">
            <a class="submenu" href="{{route('purchase.expenses')}}">
              <i class="fa fa-dollar"></i>
              <span class="text"> List Expenses</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="mm_accountings">
        <a class="dropmenu" href="#">
          <i class="fa fa-star-o"></i>
          <span class="text"> ACCOUNTINGS </span>
          <span class="chevron closed"></span>
        </a>
        <ul>
          <li id="accountings_index">
            <a class="submenu" href="{{route('accountings.accountings')}}">
              <i class="fa fa-star-o"></i><span class="text"> List Chart Accounts</span>
            </a>
          </li>
          <li id="accountings_enter_journals">
            <a class="submenu" href="{{route('accountings.enter_journals')}}">
              <i class="fa fa-plus-circle"></i><span class="text"> List Enter Journals</span>
            </a>
          </li>
          <li id="accountings_journals">
            <a class="submenu" href="{{route('accountings.journals')}}">
              <i class="fa fa-plus-circle"></i><span class="text"> List Journals</span>
            </a>
          </li>
          <li id="accountings_general_ledger">
            <a class="submenu" href="{{route('accountings.general_ledger')}}">
              <i class="fa fa-plus-circle"></i><span class="text"> General Ledger</span>
            </a>
          </li>
          <li id="accountings_trail_balance">
            <a class="submenu" href="{{route('accountings.trial_balance')}}">
              <i class="fa fa-plus-circle"></i><span class="text"> Trail Balance</span>
            </a>
          </li>
          <li id="accountings_income_statement">
            <a class="submenu" href="{{route('accountings.income_statement')}}">
              <i class="fa fa-plus-circle"></i><span class="text"> Imcome Statement</span>
            </a>
          </li>
          <li id="accountings_balance_sheet">
            <a class="submenu" href="{{route('accountings.balance_sheet')}}">
              <i class="fa fa-plus-circle"></i><span class="text"> Balance Sheet</span>
            </a>
          </li>
          <li id="accountings_cash_flow">
            <a class="submenu" href="{{route('accountings.cash_flow')}}">
              <i class="fa fa-plus-circle"></i><span class="text"> Cash Flow</span>
            </a>
          </li>
          <li id="accountings_cash_book">
            <a class="submenu" href="{{route('accountings.cash_books')}}">
              <i class="fa fa-plus-circle"></i><span class="text"> Cash Book</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="mm_auth mm_customers mm_suppliers mm_billers">
        <a class="dropmenu" href="#">
          <i class="fa fa-users"></i>
          <span class="text"> PEOPLE </span>
          <span class="chevron closed"></span>
        </a>
        <ul>
          <li id="auth_users">
            <a class="submenu" href="{{route('people.users')}}">
              <i class="fa fa-users"></i><span class="text"> List Users</span>
            </a>
          </li>
          <li id="billers_index">
            <a class="submenu" href="{{route('people.users')}}">
              <i class="fa fa-users"></i><span class="text"> List Billers</span>
            </a>
          </li>
          <li id="customers_index">
            <a class="submenu" href="{{route('people.customers')}}">
              <i class="fa fa-users"></i><span class="text"> List Customers</span>
            </a>
          </li>
          <li id="suppliers_index">
            <a class="submenu" href="{{route('people.suppliers')}}">
              <i class="fa fa-users"></i><span class="text"> List Suppliers</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="mm_hr">
        <a class="dropmenu" href="#">
          <i class="fa fa-users"></i>
          <span class="text"> HR </span>
          <span class="chevron closed"></span>
        </a>
        <ul>
          <li id="hr_index">
            <a class="submenu" href="{{route('hr.employees')}}">
              <i class="fa fa-users"></i><span class="text"> List Employees</span>
            </a>
          </li>
          <li id="hr_positions">
            <a class="submenu" href="{{route('hr.positions')}}">
              <i class="fa fa-users"></i><span class="text"> List Positions</span>
            </a>
          </li>
          <li id="hr_departments">
            <a class="submenu" href="{{route('hr.departments')}}">
              <i class="fa fa-users"></i><span class="text"> List Departments</span>
            </a>
          </li>
          <li id="hr_groups">
            <a class="submenu" href="{{route('hr.groups')}}">
              <i class="fa fa-users"></i><span class="text"> List Groups</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="mm_hr">
        <a class="dropmenu" href="#">
          <i class="fa fa-users"></i>
          <span class="text"> ATTENDANCES </span>
          <span class="chevron closed"></span>
        </a>
        <ul>
          <li id="hr_index">
            <a class="submenu" href="{{route('attendances.approve_attendances')}}">
              <i class="fa fa-users"></i><span class="text"> Approve Attendances</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="mm_notifications">
        <a class="submenu" href="{{route('notifications.notifications')}}">
          <i class="fa fa-info-circle"></i><span class="text"> NOTIFICATIONS</span>
        </a>
      </li>

      <li class="mm_calendar">
        <a class="submenu" href="http://localhost/project_full/stmav3/admin/calendar">
          <i class="fa fa-calendar"></i><span class="text"> Calendar</span>
        </a>
      </li>

      <li class="mm_system_settings mm_pos">
        <a class="dropmenu" href="#">
          <i class="fa fa-cog"></i><span class="text"> SETTINGS </span>
          <span class="chevron closed"></span>
        </a>
        <ul>
          <li id="system_settings_index">
            <a href="{{route('settings.system_settings')}}">
              <i class="fa fa-cogs"></i><span class="text"> System Settings</span>
            </a>
          </li>
          <li id="pos_settings">
            <a href="{{route('settings.system_settings')}}">
              <i class="fa fa-th-large"></i><span class="text"> POS Settings</span>
            </a>
          </li>
          <li id="system_settings_billers">
            <a href="{{route('settings.billers')}}">
              <i class="fa fa-th-list"></i><span class="text"> List Billers</span>
            </a>
          </li>
          <li id="system_settings_projects">
            <a href="{{route('settings.projects')}}">
              <i class="fa fa-th-list"></i><span class="text"> List Projects</span>
            </a>
          </li>                    
          <li id="system_settings_change_logo">
            <a href="{{route('settings.system_settings')}}" data-toggle="modal" data-target="#myModal">
              <i class="fa fa-upload"></i><span class="text"> Change Logo</span>
            </a>
          </li>
          <li id="system_settings_warehouses">
            <a href="{{route('settings.warehouses')}}">
              <i class="fa fa-building-o"></i><span class="text"> Warehouses</span>
            </a>
          </li>
          <li id="system_settings_expense_categories">
            <a href="{{route('settings.expense_categories')}}">
              <i class="fa fa-folder-open"></i><span class="text"> Expense Categories</span>
            </a>
          </li>             
          <li id="system_settings_categories">
            <a href="{{route('category.index')}}">
              <i class="fa fa-folder-open"></i><span class="text"> Categories</span>
            </a>
          </li>
          <li id="system_settings_loans">
            <a href="{{route('settings.loan_terms')}}">
              <i class="fa fa-folder-open"></i><span class="text"> Loan Terms</span>
            </a>
          </li>
          <li id="system_settings_frequencies">
            <a href="{{route('settings.frequencies')}}">
              <i class="fa fa-folder-open"></i><span class="text"> Frequencies</span>
            </a>
          </li>
          <li id="system_settings_units">
            <a href="{{route('settings.units')}}">
              <i class="fa fa-wrench"></i><span class="text"> Units</span>
            </a>
          </li>
          <li id="system_settings_brands">
            <a href="{{route('settings.brands')}}">
              <i class="fa fa-th-list"></i><span class="text"> Brands</span>
            </a>
          </li>
          <li id="system_settings_variants">
            <a href="{{route('settings.variants')}}">
              <i class="fa fa-tags"></i><span class="text"> Variants</span>
            </a>
          </li>
          <li id="system_settings_boms">
            <a href="{{route('settings.boms')}}">
              <i class="fa fa-tags"></i><span class="text"> BOMs</span>
            </a>
          </li> 
          <li id="system_settings_customer_groups">
            <a href="{{route('settings.customer_groups')}}">
              <i class="fa fa-chain"></i><span class="text"> Customer Groups</span>
            </a>
          </li>
          <li id="system_settings_price_groups">
            <a href="{{route('settings.price_groups')}}">
              <i class="fa fa-dollar"></i><span class="text"> Price Groups</span>
            </a>
          </li>
          <li id="system_settings_payment_terms">
            <a href="{{route('settings.payment_terms')}}">
              <i class="fa fa-money"></i><span class="text"> Payment Terms</span>
            </a>
          </li>          
          <li id="system_settings_currencies">
            <a href="{{route('settings.currencies')}}">
              <i class="fa fa-money"></i><span class="text"> Currencies</span>
            </a>
          </li>
          <li id="system_customer_opening_balances">
            <a class="submenu" href="{{route('settings.customer_opening_balances')}}">
              <i class="fa fa-dollar"></i>
              <span class="text"> Customer Opening Balances</span>
            </a>
          </li>
          <li id="system_supplier_opening_balances">
            <a class="submenu" href="{{route('settings.supplier_opening_balances')}}">
              <i class="fa fa-dollar"></i>
              <span class="text"> Supplier Opening Balances</span>
            </a>                    
          </li>
          <li id="system_settings_tax_rates">
            <a href="{{route('settings.tax_rates')}}">
              <i class="fa fa-plus-circle"></i><span class="text"> Tax Rates</span>
            </a>
          </li>
          <li id="pos_printers">
            <a href="{{route('settings.pos_printers')}}">
              <i class="fa fa-print"></i><span class="text"> List Printers</span>
            </a>
          </li>
          <li id="pos_add_printer">
            <a href="{{route('settings.pos_printers')}}">
              <i class="fa fa-plus-circle"></i><span class="text"> Add Printer</span>
            </a>
          </li>
          <li id="system_settings_email_templates">
            <a href="{{route('settings.email_templates')}}">
              <i class="fa fa-envelope"></i><span class="text"> Email Templates</span>
            </a>
          </li>
          <li id="system_settings_user_groups">
            <a href="{{route('settings.user_groups')}}">
              <i class="fa fa-key"></i><span class="text"> Group Permissions</span>
            </a>
          </li>
          <li id="system_settings_login_time">
            <a href="{{route('settings.login_time')}}">
              <i class="fa fa-clock-o"></i>
              <span class="text"> Login Times</span>
            </a>
          </li>          
          <li id="system_settings_backups">
            <a href="{{route('settings.backups')}}">
              <i class="fa fa-database"></i><span class="text"> Backups</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="mm_reports">
        <a class="dropmenu" href="#">
          <i class="fa fa-bar-chart-o"></i>
          <span class="text"> Reports </span>
          <span class="chevron closed"></span>
        </a>
        <ul>
          <li id="reports_index">
            <a href="http://localhost/project_full/stmav3/admin/reports">
              <i class="fa fa-bars"></i><span class="text"> Overview Chart</span>
            </a>
          </li>
          <li id="reports_warehouse_stock">
            <a href="http://localhost/project_full/stmav3/admin/reports/warehouse_stock">
              <i class="fa fa-building"></i><span class="text"> Warehouse Stock Chart</span>
            </a>
          </li>
          <li id="reports_best_sellers">
            <a href="http://localhost/project_full/stmav3/admin/reports/best_sellers">
              <i class="fa fa-line-chart"></i><span class="text"> Best Sellers</span>
            </a>
          </li>
          <li id="reports_register">
            <a href="http://localhost/project_full/stmav3/admin/reports/register">
              <i class="fa fa-th-large"></i><span class="text"> Register Report</span>
            </a>
          </li>
          <li id="reports_quantity_alerts">
            <a href="http://localhost/project_full/stmav3/admin/reports/quantity_alerts">
              <i class="fa fa-bar-chart-o"></i><span class="text"> Product Quantity Alerts</span>
            </a>
          </li>
          <li id="reports_products">
            <a href="http://localhost/project_full/stmav3/admin/reports/products">
              <i class="fa fa-barcode"></i><span class="text"> Products Report</span>
            </a>
          </li>
          <li id="reports_adjustments">
            <a href="http://localhost/project_full/stmav3/admin/reports/adjustments">
              <i class="fa fa-filter"></i><span class="text"> Adjustments Report</span>
            </a>
          </li>
          <li id="reports_categories">
            <a href="http://localhost/project_full/stmav3/admin/reports/categories">
              <i class="fa fa-folder-open"></i><span class="text"> Categories Report</span>
            </a>
          </li>
          <li id="reports_brands">
            <a href="http://localhost/project_full/stmav3/admin/reports/brands">
              <i class="fa fa-cubes"></i><span class="text"> Brands Report</span>
            </a>
          </li>
          <li id="reports_daily_sales">
            <a href="http://localhost/project_full/stmav3/admin/reports/daily_sales">
              <i class="fa fa-calendar"></i><span class="text"> Daily Sales</span>
            </a>
          </li>
          <li id="reports_monthly_sales">
            <a href="http://localhost/project_full/stmav3/admin/reports/monthly_sales">
              <i class="fa fa-calendar"></i><span class="text"> Monthly Sales</span>
            </a>
          </li>
          <li id="reports_sales">
            <a href="http://localhost/project_full/stmav3/admin/reports/sales">
              <i class="fa fa-heart"></i><span class="text"> Sales Report</span>
            </a>
          </li>
          <li id="reports_payments">
            <a href="http://localhost/project_full/stmav3/admin/reports/payments">
              <i class="fa fa-money"></i><span class="text"> Payments Report</span>
            </a>
          </li>
          <li id="reports_tax">
            <a href="http://localhost/project_full/stmav3/admin/reports/tax">
              <i class="fa fa-area-chart"></i><span class="text"> Tax Report</span>
            </a>
          </li>
          <li id="reports_profit_loss">
            <a href="http://localhost/project_full/stmav3/admin/reports/profit_loss">
              <i class="fa fa-money"></i><span class="text"> Profit and/or Loss</span>
            </a>
          </li>
          <li id="reports_daily_purchases">
            <a href="http://localhost/project_full/stmav3/admin/reports/daily_purchases">
              <i class="fa fa-calendar"></i><span class="text"> Daily Purchases</span>
            </a>
          </li>
          <li id="reports_monthly_purchases">
            <a href="http://localhost/project_full/stmav3/admin/reports/monthly_purchases">
              <i class="fa fa-calendar"></i><span class="text"> Monthly Purchases</span>
            </a>
          </li>
          <li id="reports_purchases">
            <a href="http://localhost/project_full/stmav3/admin/reports/purchases">
              <i class="fa fa-star"></i><span class="text"> Purchases Report</span>
            </a>
          </li>
          <li id="reports_expenses">
            <a href="http://localhost/project_full/stmav3/admin/reports/expenses">
              <i class="fa fa-star"></i><span class="text"> Expenses Report</span>
            </a>
          </li>
          <li id="reports_customer_report">
            <a href="http://localhost/project_full/stmav3/admin/reports/customers">
              <i class="fa fa-users"></i><span class="text"> Customers Report</span>
            </a>
          </li>
          <li id="reports_supplier_report">
            <a href="http://localhost/project_full/stmav3/admin/reports/suppliers">
              <i class="fa fa-users"></i><span class="text"> Suppliers Report</span>
            </a>
          </li>
          <li id="reports_staff_report">
            <a href="http://localhost/project_full/stmav3/admin/reports/users">
              <i class="fa fa-users"></i><span class="text"> Staff Report</span>
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