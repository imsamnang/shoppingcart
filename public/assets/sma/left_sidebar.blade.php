              <div id="sidebar-left">
                <div class="sidebar-nav nav-collapse collapse navbar-collapse" id="sidebar_menu">
                  <ul class="nav main-menu">
                    <li class="mm_welcome">
                      <a href="http://localhost/project_full/stmav3/admin/">
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
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/products/import_csv">
                            <i class="fa fa-file-text"></i>
                            <span class="text"> Import Products</span>
                          </a>
                        </li>
                        <li id="products_print_barcodes">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/products/print_barcodes">
                            <i class="fa fa-tags"></i>
                            <span class="text"> Print Barcode/Label</span>
                          </a>
                        </li>
                        <li id="products_quantity_adjustments">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/products/quantity_adjustments">
                            <i class="fa fa-filter"></i>
                            <span class="text"> Quantity Adjustments</span>
                          </a>
                        </li>
                        <li id="products_add_adjustment">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/products/add_adjustment">
                            <i class="fa fa-filter"></i>
                            <span class="text"> Add Adjustment</span>
                          </a>
                        </li>
                        <li id="products_stock_counts">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/products/stock_counts">
                            <i class="fa fa-list-ol"></i>
                            <span class="text"> Stock Counts</span>
                          </a>
                        </li>
                        <li id="products_count_stock">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/products/count_stock">
                            <i class="fa fa-plus-circle"></i>
                            <span class="text"> Count Stock</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="mm_sales ">
                      <a class="dropmenu" href="#">
                        <i class="fa fa-heart"></i>
                        <span class="text"> Sales                                    </span> <span class="chevron closed"></span>
                      </a>
                      <ul>
                        <li id="sales_index">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/sales">
                            <i class="fa fa-heart"></i>
                            <span class="text"> List Sales</span>
                          </a>
                        </li>
                        <li id="pos_sales">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/pos/sales">
                            <i class="fa fa-heart"></i>
                            <span class="text"> POS Sales</span>
                          </a>
                        </li>
                        <li id="sales_add">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/sales/add">
                            <i class="fa fa-plus-circle"></i>
                            <span class="text"> Add Sale</span>
                          </a>
                        </li>
                        <li id="sales_sale_by_csv">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/sales/sale_by_csv">
                            <i class="fa fa-plus-circle"></i>
                            <span class="text"> Add Sale by CSV</span>
                          </a>
                        </li>
                        <li id="sales_deliveries">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/sales/deliveries">
                            <i class="fa fa-truck"></i>
                            <span class="text"> Deliveries</span>
                          </a>
                        </li>
                        <li id="sales_gift_cards">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/sales/gift_cards">
                            <i class="fa fa-gift"></i>
                            <span class="text"> List Gift Cards</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="mm_quotes">
                      <a class="dropmenu" href="#">
                        <i class="fa fa-heart-o"></i>
                        <span class="text"> Quotations </span>
                        <span class="chevron closed"></span>
                      </a>
                      <ul>
                        <li id="quotes_index">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/quotes">
                            <i class="fa fa-heart-o"></i>
                            <span class="text"> List Quotation</span>
                          </a>
                        </li>
                        <li id="quotes_add">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/quotes/add">
                            <i class="fa fa-plus-circle"></i>
                            <span class="text"> Add Quotation</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="mm_purchases">
                      <a class="dropmenu" href="#">
                        <i class="fa fa-star"></i>
                        <span class="text"> Purchases                                    </span> <span class="chevron closed"></span>
                      </a>
                      <ul>
                        <li id="purchases_index">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/purchases">
                            <i class="fa fa-star"></i>
                            <span class="text"> List Purchases</span>
                          </a>
                        </li>
                        <li id="purchases_add">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/purchases/add">
                            <i class="fa fa-plus-circle"></i>
                            <span class="text"> Add Purchase</span>
                          </a>
                        </li>
                        <li id="purchases_purchase_by_csv">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/purchases/purchase_by_csv">
                            <i class="fa fa-plus-circle"></i>
                            <span class="text"> Add Purchase by CSV</span>
                          </a>
                        </li>
                        <li id="purchases_expenses">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/purchases/expenses">
                            <i class="fa fa-dollar"></i>
                            <span class="text"> List Expenses</span>
                          </a>
                        </li>
                        <li id="purchases_add_expense">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/purchases/add_expense" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-plus-circle"></i>
                            <span class="text"> Add Expense</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="mm_transfers">
                      <a class="dropmenu" href="#">
                        <i class="fa fa-star-o"></i>
                        <span class="text"> Transfers </span>
                        <span class="chevron closed"></span>
                      </a>
                      <ul>
                        <li id="transfers_index">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/transfers">
                            <i class="fa fa-star-o"></i><span class="text"> List Transfers</span>
                          </a>
                        </li>
                        <li id="transfers_add">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/transfers/add">
                            <i class="fa fa-plus-circle"></i><span class="text"> Add Transfer</span>
                          </a>
                        </li>
                        <li id="transfers_purchase_by_csv">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/transfers/transfer_by_csv">
                            <i class="fa fa-plus-circle"></i><span class="text"> Add Transfer by CSV</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="mm_returns">
                      <a class="dropmenu" href="#">
                        <i class="fa fa-random"></i>
                        <span class="text"> Returns </span>
                        <span class="chevron closed"></span>
                      </a>
                      <ul>
                        <li id="returns_index">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/returns">
                            <i class="fa fa-random"></i><span class="text"> List Returns</span>
                          </a>
                        </li>
                        <li id="returns_add">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/returns/add">
                            <i class="fa fa-plus-circle"></i><span class="text"> Add Return</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="mm_auth mm_customers mm_suppliers mm_billers">
                      <a class="dropmenu" href="#">
                        <i class="fa fa-users"></i>
                        <span class="text"> People </span>
                        <span class="chevron closed"></span>
                      </a>
                      <ul>
                        <li id="auth_users">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/users">
                            <i class="fa fa-users"></i><span class="text"> List Users</span>
                          </a>
                        </li>
                        <li id="auth_create_user">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/users/create_user">
                            <i class="fa fa-user-plus"></i><span class="text"> Add User</span>
                          </a>
                        </li>
                        <li id="billers_index">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/billers">
                            <i class="fa fa-users"></i><span class="text"> List Billers</span>
                          </a>
                        </li>
                        <li id="billers_index">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/billers/add" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-plus-circle"></i><span class="text"> Add Biller</span>
                          </a>
                        </li>
                        <li id="customers_index">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/customers">
                            <i class="fa fa-users"></i><span class="text"> List Customers</span>
                          </a>
                        </li>
                        <li id="customers_index">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/customers/add" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-plus-circle"></i><span class="text"> Add Customer</span>
                          </a>
                        </li>
                        <li id="suppliers_index">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/suppliers">
                            <i class="fa fa-users"></i><span class="text"> List Suppliers</span>
                          </a>
                        </li>
                        <li id="suppliers_index">
                          <a class="submenu" href="http://localhost/project_full/stmav3/admin/suppliers/add" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-plus-circle"></i><span class="text"> Add Supplier</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="mm_notifications">
                      <a class="submenu" href="http://localhost/project_full/stmav3/admin/notifications">
                        <i class="fa fa-info-circle"></i><span class="text"> Notifications</span>
                      </a>
                    </li>

                    <li class="mm_calendar">
                      <a class="submenu" href="http://localhost/project_full/stmav3/admin/calendar">
                        <i class="fa fa-calendar"></i><span class="text"> Calendar</span>
                      </a>
                    </li>

                    <li class="mm_system_settings mm_pos">
                      <a class="dropmenu" href="#">
                        <i class="fa fa-cog"></i><span class="text"> Settings </span>
                        <span class="chevron closed"></span>
                      </a>
                      <ul>
                        <li id="system_settings_index">
                          <a href="http://localhost/project_full/stmav3/admin/system_settings">
                            <i class="fa fa-cogs"></i><span class="text"> System Settings</span>
                          </a>
                        </li>
                        <li id="pos_settings">
                          <a href="http://localhost/project_full/stmav3/admin/pos/settings">
                            <i class="fa fa-th-large"></i><span class="text"> POS Settings</span>
                          </a>
                        </li>
                        <li id="pos_printers">
                          <a href="http://localhost/project_full/stmav3/admin/pos/printers">
                            <i class="fa fa-print"></i><span class="text"> List Printers</span>
                          </a>
                        </li>
                        <li id="pos_add_printer">
                          <a href="http://localhost/project_full/stmav3/admin/pos/add_printer">
                            <i class="fa fa-plus-circle"></i><span class="text"> Add Printer</span>
                          </a>
                        </li>
                        <li id="system_settings_change_logo">
                          <a href="http://localhost/project_full/stmav3/admin/system_settings/change_logo" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-upload"></i><span class="text"> Change Logo</span>
                          </a>
                        </li>
                        <li id="system_settings_currencies">
                          <a href="http://localhost/project_full/stmav3/admin/system_settings/currencies">
                            <i class="fa fa-money"></i><span class="text"> Currencies</span>
                          </a>
                        </li>
                        <li id="system_settings_customer_groups">
                          <a href="http://localhost/project_full/stmav3/admin/system_settings/customer_groups">
                            <i class="fa fa-chain"></i><span class="text"> Customer Groups</span>
                          </a>
                        </li>
                        <li id="system_settings_price_groups">
                          <a href="http://localhost/project_full/stmav3/admin/system_settings/price_groups">
                            <i class="fa fa-dollar"></i><span class="text"> Price Groups</span>
                          </a>
                        </li>
                        <li id="system_settings_categories">
                          <a href="{{route('category.index')}}">
                            <i class="fa fa-folder-open"></i><span class="text"> Categories</span>
                          </a>
                        </li>
                        <li id="system_settings_expense_categories">
                          <a href="http://localhost/project_full/stmav3/admin/system_settings/expense_categories">
                            <i class="fa fa-folder-open"></i><span class="text"> Expense Categories</span>
                          </a>
                        </li>
                        <li id="system_settings_units">
                          <a href="http://localhost/project_full/stmav3/admin/system_settings/units">
                            <i class="fa fa-wrench"></i><span class="text"> Units</span>
                          </a>
                        </li>
                        <li id="system_settings_brands">
                          <a href="http://localhost/project_full/stmav3/admin/system_settings/brands">
                            <i class="fa fa-th-list"></i><span class="text"> Brands</span>
                          </a>
                        </li>
                        <li id="system_settings_variants">
                          <a href="http://localhost/project_full/stmav3/admin/system_settings/variants">
                            <i class="fa fa-tags"></i><span class="text"> Variants</span>
                          </a>
                        </li>
                        <li id="system_settings_tax_rates">
                          <a href="http://localhost/project_full/stmav3/admin/system_settings/tax_rates">
                            <i class="fa fa-plus-circle"></i><span class="text"> Tax Rates</span>
                          </a>
                        </li>
                        <li id="system_settings_warehouses">
                          <a href="http://localhost/project_full/stmav3/admin/system_settings/warehouses">
                            <i class="fa fa-building-o"></i><span class="text"> Warehouses</span>
                          </a>
                        </li>
                        <li id="system_settings_email_templates">
                          <a href="http://localhost/project_full/stmav3/admin/system_settings/email_templates">
                            <i class="fa fa-envelope"></i><span class="text"> Email Templates</span>
                          </a>
                        </li>
                        <li id="system_settings_user_groups">
                          <a href="http://localhost/project_full/stmav3/admin/system_settings/user_groups">
                            <i class="fa fa-key"></i><span class="text"> Group Permissions</span>
                          </a>
                        </li>
                        <li id="system_settings_backups">
                          <a href="http://localhost/project_full/stmav3/admin/system_settings/backups">
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