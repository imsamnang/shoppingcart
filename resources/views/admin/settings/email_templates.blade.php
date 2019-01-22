@extends('layouts.admin.sma_layout')

@section('title','email_templates')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

<div class="box">
    <div class="box-header">
        <h2 class="blue"><i class="fa-fw fa fa-envelope"></i>Email Templates</h2>
    </div>
    <div class="box-content">
        <div class="row">
            <div class="col-lg-12">
                <!--<p class="introtext">Please use the table below to navigate or filter the results. You can download the table as excel and pdf.</p>-->
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class=""><a href="#credentials">Add User</a></li>
                            <li class=""><a href="#activate_email">Activation Email</a></li>
                            <li class=""><a href="#forgot_password">Forgot Password</a></li>
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" id="more" href="#">More <b
                                        class="caret"></b></a>
                                <ul aria-labelledby="more" role="menu" class="dropdown-menu">
                                    <li class=""><a href="#sale">Sale</a></li>
                                    <li class=""><a href="#quote">Quotation</a></li>
                                    <li class=""><a href="#purchase">Purchase</a></li>
                                    <li class=""><a href="#transfer">Transfer</a></li>
                                    <li class=""><a href="#payment">Payment</a></li>
                                </ul>
                            </li>

                        </ul>

                        <div class="tab-content">
                            <div id="credentials" class="tab-pane fade in">
                                <form action="http://localhost/full_project/WeERP_v3/system_settings/email_templates" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="ebb5f994c18ca2edc3d2592a6f42ffff" />

                                <textarea name="mail_body" cols="40" rows="10"  class="form-control" id="comment">&lt;h3&gt;{logo}&lt;/h3&gt;&lt;h4&gt;Login Details&lt;/h4&gt;&lt;p&gt;
    Hello {client_name},&lt;/p&gt;&lt;p&gt;We have created new account for you to manage your quotations and orders from our
    website. &lt;/p&gt;&lt;p&gt;Your credentials are:&lt;/p&gt;
&lt;pre&gt;Site Link: {site_link}
Username: {email}
Password: {password}
&lt;/pre&gt;&lt;p&gt;
    &lt;a href=&quot;{client_link}&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;
    Best regards,
    &lt;br&gt;
    {site_name}&lt;/p&gt;</textarea>

                                <input type="submit" name="submit" class="btn btn-primary" value="Save"
                                       style="margin-top:15px;"/>

                                </form>                            </div>

                            <div id="activate_email" class="tab-pane fade">
                                <form action="http://localhost/full_project/WeERP_v3/system_settings/email_templates/activate_email" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="ebb5f994c18ca2edc3d2592a6f42ffff" />

                                <textarea name="mail_body" cols="40" rows="10"  class="form-control" id="comment">&lt;h3&gt;{logo}&lt;/h3&gt;&lt;h4&gt;Please confirm your registration&lt;/h4&gt;&lt;p&gt;
    Hello {user_name},&lt;/p&gt;&lt;p&gt;
    Please confirm your new account registration for ({email}). {activation_link}.&lt;/p&gt;&lt;p&gt;
    &lt;a href=&quot;{client_link}&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;
    Best regards,
    &lt;br&gt;
    {site_name}
    &lt;br&gt;
    {site_link}&lt;/p&gt;</textarea>

                                <input type="submit" name="submit" class="btn btn-primary" value="Save"
                                       style="margin-top:15px;"/>

                                </form>                            </div>

                            <div id="forgot_password" class="tab-pane fade">
                                <form action="http://localhost/full_project/WeERP_v3/system_settings/email_templates/forgot_password" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="ebb5f994c18ca2edc3d2592a6f42ffff" />

                                <textarea name="mail_body" cols="40" rows="10"  class="form-control" id="comment">&lt;h3&gt;{logo}&lt;/h3&gt;&lt;h4&gt;Forgot Password?&lt;/h4&gt;&lt;p&gt;
    Hello {user_name},&lt;/p&gt;&lt;p&gt;We have received the request to reset your password of {email} for {site_name} and have
    created the reset password link.&lt;/p&gt;&lt;p&gt;{reset_password_link}&lt;/p&gt;&lt;p&gt;Please click the above link to reset your
    password. If you have not requested the reset. Please ignore this email.&lt;/p&gt;&lt;p&gt;
    Best regards,
    &lt;br&gt;
    {site_name}&lt;/p&gt;</textarea>

                                <input type="submit" name="submit" class="btn btn-primary" value="Save"
                                       style="margin-top:15px;"/>

                                </form>                            </div>

                            <div id="sale" class="tab-pane fade">
                                <form action="http://localhost/full_project/WeERP_v3/system_settings/email_templates/sale" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="ebb5f994c18ca2edc3d2592a6f42ffff" />

                                <textarea name="mail_body" cols="40" rows="10"  class="form-control" id="comment">&lt;h3&gt;{logo}&lt;/h3&gt;&lt;h4&gt;Sale Details&lt;/h4&gt;&lt;p&gt;
    Hello {contact_person} ({company}),&lt;/p&gt;&lt;p&gt;Please find the attachment for your sale order ({reference_number})
    details.&lt;/p&gt;&lt;p&gt;
    &lt;a href=&quot;{client_link}&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;
    Best regards,
    &lt;br&gt;
    {site_name}&lt;/p&gt;</textarea>

                                <input type="submit" name="submit" class="btn btn-primary" value="Save"
                                       style="margin-top:15px;"/>

                                </form>                            </div>
                            <div id="quote" class="tab-pane fade">
                                <form action="http://localhost/full_project/WeERP_v3/system_settings/email_templates/quote" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="ebb5f994c18ca2edc3d2592a6f42ffff" />

                                <textarea name="mail_body" cols="40" rows="10"  class="form-control" id="comment">&lt;h3&gt;{logo}&lt;/h3&gt;&lt;h4&gt;Quotation Details&lt;/h4&gt;&lt;p&gt;
    Hello {contact_person} ({company}),&lt;/p&gt;&lt;p&gt;Please find the attachment for our purposed quotation
    ({reference_number}).&lt;/p&gt;&lt;p&gt;
    Best regards,
    &lt;br&gt;
    {site_name}&lt;/p&gt;</textarea>

                                <input type="submit" name="submit" class="btn btn-primary" value="Save"
                                       style="margin-top:15px;"/>

                                </form>                            </div>
                            <div id="purchase" class="tab-pane fade">
                                <form action="http://localhost/full_project/WeERP_v3/system_settings/email_templates/purchase" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="ebb5f994c18ca2edc3d2592a6f42ffff" />

                                <textarea name="mail_body" cols="40" rows="10"  class="form-control" id="comment">&lt;h3&gt;{logo}&lt;/h3&gt;&lt;h4&gt;Purchase Details&lt;/h4&gt;&lt;p&gt;
    Hello {contact_person} ({company}),&lt;/p&gt;&lt;p&gt;Please find the attachment for our purchase order ({reference_number})
    details.&lt;/p&gt;&lt;p&gt;
    Best regards,
    &lt;br&gt;
    {site_name}&lt;/p&gt;</textarea>

                                <input type="submit" name="submit" class="btn btn-primary" value="Save"
                                       style="margin-top:15px;"/>

                                </form>                            </div>
                            <div id="transfer" class="tab-pane fade">
                                <form action="http://localhost/full_project/WeERP_v3/system_settings/email_templates/transfer" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="ebb5f994c18ca2edc3d2592a6f42ffff" />

                                <textarea name="mail_body" cols="40" rows="10"  class="form-control" id="comment">&lt;h3&gt;{logo}&lt;/h3&gt;&lt;h4&gt;Transfer Details&lt;/h4&gt;&lt;p&gt;
    Hello,&lt;/p&gt;&lt;p&gt;Please find the attachment for transfer order ({reference_number}) details.&lt;/p&gt;&lt;p&gt;
    Best regards,
    &lt;br&gt;
    {site_name}&lt;/p&gt;</textarea>

                                <input type="submit" name="submit" class="btn btn-primary" value="Save"
                                       style="margin-top:15px;"/>

                                </form>                            </div>
                            <div id="payment" class="tab-pane fade">
                                <form action="http://localhost/full_project/WeERP_v3/system_settings/email_templates/payment" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="ebb5f994c18ca2edc3d2592a6f42ffff" />

                                <textarea name="mail_body" cols="40" rows="10"  class="form-control" id="comment">&lt;h3&gt;{logo}&lt;/h3&gt;&lt;h4&gt;Payment Details&lt;/h4&gt;&lt;p&gt;Hello {contact_person} ({company}),&lt;/p&gt;&lt;p&gt;Payment for order
    ({reference_number}) has been added. Please visit {site_link} to manage your orders.&lt;/p&gt;&lt;p&gt;
    &lt;a href=&quot;{client_link}&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;
    Best regards,
    &lt;br&gt;
    {site_name}&lt;/p&gt;</textarea>

                                <input type="submit" name="submit" class="btn btn-primary" value="Save"
                                       style="margin-top:15px;"/>

                                </form>                            </div>


                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="margin5">
                            <h3 style="font-weight: bold;">Short tags</h3>
                            <pre>{logo} {site_name} {site_link}</pre>
                            Add User                            <pre>{client_name} {email} {password} </pre>
                            Forgot Password                            <pre>{user_name} {email} {reset_password_link}</pre>
                            Activation Email                            <pre>{user_name} {email} {activation_link}</pre>
                            Orders &amp; Payments                            <pre>{company} {contact_person} {reference_number}</pre>


                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

  
@endsection

@push('css')
  {{-- expr --}}
@endpush

