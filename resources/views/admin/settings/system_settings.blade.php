@extends('layouts.admin.sma_layout')

@section('title','system_settings')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

<div class="box">
    <div class="box-header">
        <h2 class="blue"><i class="fa-fw fa fa-cog"></i>System Settings</h2>

        <div class="box-icon">
            <ul class="btn-tasks">
                <li class="dropdown"><a href="http://localhost/full_project/WeERP_v3/system_settings/paypal" class="toggle_up"><i
                            class="icon fa fa-paypal"></i><span
                            class="padding-right-10">Paypal</span></a></li>
                <li class="dropdown"><a href="http://localhost/full_project/WeERP_v3/system_settings/skrill" class="toggle_down"><i
                            class="icon fa fa-bank"></i><span class="padding-right-10">Skrill</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="box-content">
        <div class="row">
            <div class="col-lg-12">

                <p class="introtext">Please update the information below. The field labels marked with * are required input fields.</p>

                <form action="http://localhost/full_project/WeERP_v3/system_settings" data-toggle="validator" role="form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="d734af40612ff1684196bb5544ccb118" />
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info" role="alert"><p>
                            <strong>Cron Job:</strong> <code>0 1 * * * wget -qO- http://localhost/full_project/WeERP_v3/cron/run &gt;/dev/null 2&gt;&amp;1</code> to run at 1:00 AM daily. For local installation, you can run cron job manually at any time.
                                                            <a class="btn btn-primary btn-xs pull-right" target="_blank" href="http://localhost/full_project/WeERP_v3/cron/run">Run cron job now</a>
                                                    </p></div>
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Site Configuration</legend>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="site_name">Site Name</label>                                    <input type="text" name="site_name" value="iNTER TECH PLUS CO., LTD"  class="form-control tip" id="site_name"  required="required" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="language">Language</label>                                    <select name="language" class="form-control tip" id="language" required="required" style="width:100%;">
<option value="english" selected="selected">English</option>
<option value="khmer">Khmer</option>
<option value="simplified-chinese">Simplified Chinese</option>
<option value="thai">Thai</option>
</select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="currency">Default Currency</label>

                                    <div class="controls"> <select name="currency" class="form-control tip" id="currency" required="required" style="width:100%;">
<option value="USD" selected="selected">US Dollar</option>
<option value="KHR">Riel</option>
<option value="Bath">Bath</option>
</select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="accounting_method">Accounting Method</label>                                    <select name="accounting_method" class="form-control tip" id="accounting_method" required="required" style="width:100%;">
<option value="0">FIFO (First In First Out)</option>
<option value="1">LIFO (Last In First Out)</option>
<option value="2" selected="selected">AVCO (Average Cost Method)</option>
</select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="email">Default Email</label>

                                    <input type="text" name="email" value="info@intertechplus.com.kh"  class="form-control tip" required="required" id="email" />
                            </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="customer_group">Default Customer Group</label>
                            <select name="customer_group" class="form-control tip" id="customer_group" style="width:100%;" required="required">
<option value="1" selected="selected">General / Walk-in Customers</option>
<option value="2">Distributor</option>
<option value="3">Bad Credit</option>
<option value="4">VIP Customers</option>
<option value="5">Wholesales</option>
<option value="6">Retail</option>
</select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="price_group">Default Price Group</label>
                            <select name="price_group" class="form-control tip" id="price_group" style="width:100%;" required="required">
<option value="6" selected="selected">Wholesales / តម្លៃបោះដុំ</option>
<option value="7">Retails / តម្លៃរាយ</option>
<option value="8">សំរាប់លក់ដុំ</option>
</select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="mmode">Maintenance Mode</label>                            <div class="controls">  <select name="mmode" class="tip form-control" required="required" id="mmode" style="width:100%;">
<option value="0" selected="selected">No</option>
<option value="1">Yes</option>
</select>
 </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="theme">Theme</label>

                            <div class="controls">
                                <select name="theme" id="theme" class="form-control tip" required="required" style="width:100%;">
<option value="default" selected="selected">Default</option>
</select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="rtl">RTL Support</label>

                            <div class="controls">
                                <select name="rtl" id="rtl" class="form-control tip" required="required" style="width:100%;">
<option value="0" selected="selected">Disable</option>
<option value="1">Enable</option>
</select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="captcha">Login Captcha</label>

                            <div class="controls">
                                <select name="captcha" id="captcha" class="form-control tip" required="required" style="width:100%;">
<option value="0" selected="selected">Disable</option>
<option value="1">Enable</option>
</select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="disable_editing">Number of days to disable editing</label>
                            <input type="text" name="disable_editing" value="365"  class="form-control tip" id="disable_editing" required="required" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="rows_per_page">Rows per page</label>
                            <input type="text" name="rows_per_page" value="100"  class="form-control tip" id="rows_per_page" required="required" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="dateformat">Date Format</label>

                            <div class="controls">
                                <select name="dateformat" id="dateformat" class="form-control tip" style="width:100%;" required="required">
<option value="1">mm-dd-yyyy</option>
<option value="2">mm/dd/yyyy</option>
<option value="3">mm.dd.yyyy</option>
<option value="4">dd-mm-yyyy</option>
<option value="5" selected="selected">dd/mm/yyyy</option>
<option value="6">dd.mm.yyyy</option>
</select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="timezone">Timezone</label>
                                                        <select name="timezone" class="form-control tip" id="timezone" required="required">
<option value="Africa/Abidjan">Africa/Abidjan</option>
<option value="Africa/Accra">Africa/Accra</option>
<option value="Africa/Addis_Ababa">Africa/Addis_Ababa</option>
<option value="Africa/Algiers">Africa/Algiers</option>
<option value="Africa/Asmara">Africa/Asmara</option>
<option value="Africa/Bamako">Africa/Bamako</option>
<option value="Africa/Bangui">Africa/Bangui</option>
<option value="Africa/Banjul">Africa/Banjul</option>
<option value="Africa/Bissau">Africa/Bissau</option>
<option value="Africa/Blantyre">Africa/Blantyre</option>
<option value="Africa/Brazzaville">Africa/Brazzaville</option>
<option value="Africa/Bujumbura">Africa/Bujumbura</option>
<option value="Africa/Cairo">Africa/Cairo</option>
<option value="Africa/Casablanca">Africa/Casablanca</option>
<option value="Africa/Ceuta">Africa/Ceuta</option>
<option value="Africa/Conakry">Africa/Conakry</option>
<option value="Africa/Dakar">Africa/Dakar</option>
<option value="Africa/Dar_es_Salaam">Africa/Dar_es_Salaam</option>
<option value="Africa/Djibouti">Africa/Djibouti</option>
<option value="Africa/Douala">Africa/Douala</option>
<option value="Africa/El_Aaiun">Africa/El_Aaiun</option>
<option value="Africa/Freetown">Africa/Freetown</option>
<option value="Africa/Gaborone">Africa/Gaborone</option>
<option value="Africa/Harare">Africa/Harare</option>
<option value="Africa/Johannesburg">Africa/Johannesburg</option>
<option value="Africa/Juba">Africa/Juba</option>
<option value="Africa/Kampala">Africa/Kampala</option>
<option value="Africa/Khartoum">Africa/Khartoum</option>
<option value="Africa/Kigali">Africa/Kigali</option>
<option value="Africa/Kinshasa">Africa/Kinshasa</option>
<option value="Africa/Lagos">Africa/Lagos</option>
<option value="Africa/Libreville">Africa/Libreville</option>
<option value="Africa/Lome">Africa/Lome</option>
<option value="Africa/Luanda">Africa/Luanda</option>
<option value="Africa/Lubumbashi">Africa/Lubumbashi</option>
<option value="Africa/Lusaka">Africa/Lusaka</option>
<option value="Africa/Malabo">Africa/Malabo</option>
<option value="Africa/Maputo">Africa/Maputo</option>
<option value="Africa/Maseru">Africa/Maseru</option>
<option value="Africa/Mbabane">Africa/Mbabane</option>
<option value="Africa/Mogadishu">Africa/Mogadishu</option>
<option value="Africa/Monrovia">Africa/Monrovia</option>
<option value="Africa/Nairobi">Africa/Nairobi</option>
<option value="Africa/Ndjamena">Africa/Ndjamena</option>
<option value="Africa/Niamey">Africa/Niamey</option>
<option value="Africa/Nouakchott">Africa/Nouakchott</option>
<option value="Africa/Ouagadougou">Africa/Ouagadougou</option>
<option value="Africa/Porto-Novo">Africa/Porto-Novo</option>
<option value="Africa/Sao_Tome">Africa/Sao_Tome</option>
<option value="Africa/Tripoli">Africa/Tripoli</option>
<option value="Africa/Tunis">Africa/Tunis</option>
<option value="Africa/Windhoek">Africa/Windhoek</option>
<option value="America/Adak">America/Adak</option>
<option value="America/Anchorage">America/Anchorage</option>
<option value="America/Anguilla">America/Anguilla</option>
<option value="America/Antigua">America/Antigua</option>
<option value="America/Araguaina">America/Araguaina</option>
<option value="America/Argentina/Buenos_Aires">America/Argentina/Buenos_Aires</option>
<option value="America/Argentina/Catamarca">America/Argentina/Catamarca</option>
<option value="America/Argentina/Cordoba">America/Argentina/Cordoba</option>
<option value="America/Argentina/Jujuy">America/Argentina/Jujuy</option>
<option value="America/Argentina/La_Rioja">America/Argentina/La_Rioja</option>
<option value="America/Argentina/Mendoza">America/Argentina/Mendoza</option>
<option value="America/Argentina/Rio_Gallegos">America/Argentina/Rio_Gallegos</option>
<option value="America/Argentina/Salta">America/Argentina/Salta</option>
<option value="America/Argentina/San_Juan">America/Argentina/San_Juan</option>
<option value="America/Argentina/San_Luis">America/Argentina/San_Luis</option>
<option value="America/Argentina/Tucuman">America/Argentina/Tucuman</option>
<option value="America/Argentina/Ushuaia">America/Argentina/Ushuaia</option>
<option value="America/Aruba">America/Aruba</option>
<option value="America/Asuncion">America/Asuncion</option>
<option value="America/Atikokan">America/Atikokan</option>
<option value="America/Bahia">America/Bahia</option>
<option value="America/Bahia_Banderas">America/Bahia_Banderas</option>
<option value="America/Barbados">America/Barbados</option>
<option value="America/Belem">America/Belem</option>
<option value="America/Belize">America/Belize</option>
<option value="America/Blanc-Sablon">America/Blanc-Sablon</option>
<option value="America/Boa_Vista">America/Boa_Vista</option>
<option value="America/Bogota">America/Bogota</option>
<option value="America/Boise">America/Boise</option>
<option value="America/Cambridge_Bay">America/Cambridge_Bay</option>
<option value="America/Campo_Grande">America/Campo_Grande</option>
<option value="America/Cancun">America/Cancun</option>
<option value="America/Caracas">America/Caracas</option>
<option value="America/Cayenne">America/Cayenne</option>
<option value="America/Cayman">America/Cayman</option>
<option value="America/Chicago">America/Chicago</option>
<option value="America/Chihuahua">America/Chihuahua</option>
<option value="America/Costa_Rica">America/Costa_Rica</option>
<option value="America/Creston">America/Creston</option>
<option value="America/Cuiaba">America/Cuiaba</option>
<option value="America/Curacao">America/Curacao</option>
<option value="America/Danmarkshavn">America/Danmarkshavn</option>
<option value="America/Dawson">America/Dawson</option>
<option value="America/Dawson_Creek">America/Dawson_Creek</option>
<option value="America/Denver">America/Denver</option>
<option value="America/Detroit">America/Detroit</option>
<option value="America/Dominica">America/Dominica</option>
<option value="America/Edmonton">America/Edmonton</option>
<option value="America/Eirunepe">America/Eirunepe</option>
<option value="America/El_Salvador">America/El_Salvador</option>
<option value="America/Fort_Nelson">America/Fort_Nelson</option>
<option value="America/Fortaleza">America/Fortaleza</option>
<option value="America/Glace_Bay">America/Glace_Bay</option>
<option value="America/Godthab">America/Godthab</option>
<option value="America/Goose_Bay">America/Goose_Bay</option>
<option value="America/Grand_Turk">America/Grand_Turk</option>
<option value="America/Grenada">America/Grenada</option>
<option value="America/Guadeloupe">America/Guadeloupe</option>
<option value="America/Guatemala">America/Guatemala</option>
<option value="America/Guayaquil">America/Guayaquil</option>
<option value="America/Guyana">America/Guyana</option>
<option value="America/Halifax">America/Halifax</option>
<option value="America/Havana">America/Havana</option>
<option value="America/Hermosillo">America/Hermosillo</option>
<option value="America/Indiana/Indianapolis">America/Indiana/Indianapolis</option>
<option value="America/Indiana/Knox">America/Indiana/Knox</option>
<option value="America/Indiana/Marengo">America/Indiana/Marengo</option>
<option value="America/Indiana/Petersburg">America/Indiana/Petersburg</option>
<option value="America/Indiana/Tell_City">America/Indiana/Tell_City</option>
<option value="America/Indiana/Vevay">America/Indiana/Vevay</option>
<option value="America/Indiana/Vincennes">America/Indiana/Vincennes</option>
<option value="America/Indiana/Winamac">America/Indiana/Winamac</option>
<option value="America/Inuvik">America/Inuvik</option>
<option value="America/Iqaluit">America/Iqaluit</option>
<option value="America/Jamaica">America/Jamaica</option>
<option value="America/Juneau">America/Juneau</option>
<option value="America/Kentucky/Louisville">America/Kentucky/Louisville</option>
<option value="America/Kentucky/Monticello">America/Kentucky/Monticello</option>
<option value="America/Kralendijk">America/Kralendijk</option>
<option value="America/La_Paz">America/La_Paz</option>
<option value="America/Lima">America/Lima</option>
<option value="America/Los_Angeles">America/Los_Angeles</option>
<option value="America/Lower_Princes">America/Lower_Princes</option>
<option value="America/Maceio">America/Maceio</option>
<option value="America/Managua">America/Managua</option>
<option value="America/Manaus">America/Manaus</option>
<option value="America/Marigot">America/Marigot</option>
<option value="America/Martinique">America/Martinique</option>
<option value="America/Matamoros">America/Matamoros</option>
<option value="America/Mazatlan">America/Mazatlan</option>
<option value="America/Menominee">America/Menominee</option>
<option value="America/Merida">America/Merida</option>
<option value="America/Metlakatla">America/Metlakatla</option>
<option value="America/Mexico_City">America/Mexico_City</option>
<option value="America/Miquelon">America/Miquelon</option>
<option value="America/Moncton">America/Moncton</option>
<option value="America/Monterrey">America/Monterrey</option>
<option value="America/Montevideo">America/Montevideo</option>
<option value="America/Montserrat">America/Montserrat</option>
<option value="America/Nassau">America/Nassau</option>
<option value="America/New_York">America/New_York</option>
<option value="America/Nipigon">America/Nipigon</option>
<option value="America/Nome">America/Nome</option>
<option value="America/Noronha">America/Noronha</option>
<option value="America/North_Dakota/Beulah">America/North_Dakota/Beulah</option>
<option value="America/North_Dakota/Center">America/North_Dakota/Center</option>
<option value="America/North_Dakota/New_Salem">America/North_Dakota/New_Salem</option>
<option value="America/Ojinaga">America/Ojinaga</option>
<option value="America/Panama">America/Panama</option>
<option value="America/Pangnirtung">America/Pangnirtung</option>
<option value="America/Paramaribo">America/Paramaribo</option>
<option value="America/Phoenix">America/Phoenix</option>
<option value="America/Port-au-Prince">America/Port-au-Prince</option>
<option value="America/Port_of_Spain">America/Port_of_Spain</option>
<option value="America/Porto_Velho">America/Porto_Velho</option>
<option value="America/Puerto_Rico">America/Puerto_Rico</option>
<option value="America/Rainy_River">America/Rainy_River</option>
<option value="America/Rankin_Inlet">America/Rankin_Inlet</option>
<option value="America/Recife">America/Recife</option>
<option value="America/Regina">America/Regina</option>
<option value="America/Resolute">America/Resolute</option>
<option value="America/Rio_Branco">America/Rio_Branco</option>
<option value="America/Santarem">America/Santarem</option>
<option value="America/Santiago">America/Santiago</option>
<option value="America/Santo_Domingo">America/Santo_Domingo</option>
<option value="America/Sao_Paulo">America/Sao_Paulo</option>
<option value="America/Scoresbysund">America/Scoresbysund</option>
<option value="America/Sitka">America/Sitka</option>
<option value="America/St_Barthelemy">America/St_Barthelemy</option>
<option value="America/St_Johns">America/St_Johns</option>
<option value="America/St_Kitts">America/St_Kitts</option>
<option value="America/St_Lucia">America/St_Lucia</option>
<option value="America/St_Thomas">America/St_Thomas</option>
<option value="America/St_Vincent">America/St_Vincent</option>
<option value="America/Swift_Current">America/Swift_Current</option>
<option value="America/Tegucigalpa">America/Tegucigalpa</option>
<option value="America/Thule">America/Thule</option>
<option value="America/Thunder_Bay">America/Thunder_Bay</option>
<option value="America/Tijuana">America/Tijuana</option>
<option value="America/Toronto">America/Toronto</option>
<option value="America/Tortola">America/Tortola</option>
<option value="America/Vancouver">America/Vancouver</option>
<option value="America/Whitehorse">America/Whitehorse</option>
<option value="America/Winnipeg">America/Winnipeg</option>
<option value="America/Yakutat">America/Yakutat</option>
<option value="America/Yellowknife">America/Yellowknife</option>
<option value="Antarctica/Casey">Antarctica/Casey</option>
<option value="Antarctica/Davis">Antarctica/Davis</option>
<option value="Antarctica/DumontDUrville">Antarctica/DumontDUrville</option>
<option value="Antarctica/Macquarie">Antarctica/Macquarie</option>
<option value="Antarctica/Mawson">Antarctica/Mawson</option>
<option value="Antarctica/McMurdo">Antarctica/McMurdo</option>
<option value="Antarctica/Palmer">Antarctica/Palmer</option>
<option value="Antarctica/Rothera">Antarctica/Rothera</option>
<option value="Antarctica/Syowa">Antarctica/Syowa</option>
<option value="Antarctica/Troll">Antarctica/Troll</option>
<option value="Antarctica/Vostok">Antarctica/Vostok</option>
<option value="Arctic/Longyearbyen">Arctic/Longyearbyen</option>
<option value="Asia/Aden">Asia/Aden</option>
<option value="Asia/Almaty">Asia/Almaty</option>
<option value="Asia/Amman">Asia/Amman</option>
<option value="Asia/Anadyr">Asia/Anadyr</option>
<option value="Asia/Aqtau">Asia/Aqtau</option>
<option value="Asia/Aqtobe">Asia/Aqtobe</option>
<option value="Asia/Ashgabat">Asia/Ashgabat</option>
<option value="Asia/Atyrau">Asia/Atyrau</option>
<option value="Asia/Baghdad">Asia/Baghdad</option>
<option value="Asia/Bahrain">Asia/Bahrain</option>
<option value="Asia/Baku">Asia/Baku</option>
<option value="Asia/Bangkok">Asia/Bangkok</option>
<option value="Asia/Barnaul">Asia/Barnaul</option>
<option value="Asia/Beirut">Asia/Beirut</option>
<option value="Asia/Bishkek">Asia/Bishkek</option>
<option value="Asia/Brunei">Asia/Brunei</option>
<option value="Asia/Chita">Asia/Chita</option>
<option value="Asia/Choibalsan">Asia/Choibalsan</option>
<option value="Asia/Colombo">Asia/Colombo</option>
<option value="Asia/Damascus">Asia/Damascus</option>
<option value="Asia/Dhaka">Asia/Dhaka</option>
<option value="Asia/Dili">Asia/Dili</option>
<option value="Asia/Dubai">Asia/Dubai</option>
<option value="Asia/Dushanbe">Asia/Dushanbe</option>
<option value="Asia/Famagusta">Asia/Famagusta</option>
<option value="Asia/Gaza">Asia/Gaza</option>
<option value="Asia/Hebron">Asia/Hebron</option>
<option value="Asia/Ho_Chi_Minh">Asia/Ho_Chi_Minh</option>
<option value="Asia/Hong_Kong">Asia/Hong_Kong</option>
<option value="Asia/Hovd">Asia/Hovd</option>
<option value="Asia/Irkutsk">Asia/Irkutsk</option>
<option value="Asia/Jakarta">Asia/Jakarta</option>
<option value="Asia/Jayapura">Asia/Jayapura</option>
<option value="Asia/Jerusalem">Asia/Jerusalem</option>
<option value="Asia/Kabul">Asia/Kabul</option>
<option value="Asia/Kamchatka">Asia/Kamchatka</option>
<option value="Asia/Karachi">Asia/Karachi</option>
<option value="Asia/Kathmandu">Asia/Kathmandu</option>
<option value="Asia/Khandyga">Asia/Khandyga</option>
<option value="Asia/Kolkata">Asia/Kolkata</option>
<option value="Asia/Krasnoyarsk">Asia/Krasnoyarsk</option>
<option value="Asia/Kuala_Lumpur">Asia/Kuala_Lumpur</option>
<option value="Asia/Kuching">Asia/Kuching</option>
<option value="Asia/Kuwait">Asia/Kuwait</option>
<option value="Asia/Macau">Asia/Macau</option>
<option value="Asia/Magadan">Asia/Magadan</option>
<option value="Asia/Makassar">Asia/Makassar</option>
<option value="Asia/Manila">Asia/Manila</option>
<option value="Asia/Muscat">Asia/Muscat</option>
<option value="Asia/Nicosia">Asia/Nicosia</option>
<option value="Asia/Novokuznetsk">Asia/Novokuznetsk</option>
<option value="Asia/Novosibirsk">Asia/Novosibirsk</option>
<option value="Asia/Omsk">Asia/Omsk</option>
<option value="Asia/Oral">Asia/Oral</option>
<option value="Asia/Phnom_Penh" selected="selected">Asia/Phnom_Penh</option>
<option value="Asia/Pontianak">Asia/Pontianak</option>
<option value="Asia/Pyongyang">Asia/Pyongyang</option>
<option value="Asia/Qatar">Asia/Qatar</option>
<option value="Asia/Qyzylorda">Asia/Qyzylorda</option>
<option value="Asia/Riyadh">Asia/Riyadh</option>
<option value="Asia/Sakhalin">Asia/Sakhalin</option>
<option value="Asia/Samarkand">Asia/Samarkand</option>
<option value="Asia/Seoul">Asia/Seoul</option>
<option value="Asia/Shanghai">Asia/Shanghai</option>
<option value="Asia/Singapore">Asia/Singapore</option>
<option value="Asia/Srednekolymsk">Asia/Srednekolymsk</option>
<option value="Asia/Taipei">Asia/Taipei</option>
<option value="Asia/Tashkent">Asia/Tashkent</option>
<option value="Asia/Tbilisi">Asia/Tbilisi</option>
<option value="Asia/Tehran">Asia/Tehran</option>
<option value="Asia/Thimphu">Asia/Thimphu</option>
<option value="Asia/Tokyo">Asia/Tokyo</option>
<option value="Asia/Tomsk">Asia/Tomsk</option>
<option value="Asia/Ulaanbaatar">Asia/Ulaanbaatar</option>
<option value="Asia/Urumqi">Asia/Urumqi</option>
<option value="Asia/Ust-Nera">Asia/Ust-Nera</option>
<option value="Asia/Vientiane">Asia/Vientiane</option>
<option value="Asia/Vladivostok">Asia/Vladivostok</option>
<option value="Asia/Yakutsk">Asia/Yakutsk</option>
<option value="Asia/Yangon">Asia/Yangon</option>
<option value="Asia/Yekaterinburg">Asia/Yekaterinburg</option>
<option value="Asia/Yerevan">Asia/Yerevan</option>
<option value="Atlantic/Azores">Atlantic/Azores</option>
<option value="Atlantic/Bermuda">Atlantic/Bermuda</option>
<option value="Atlantic/Canary">Atlantic/Canary</option>
<option value="Atlantic/Cape_Verde">Atlantic/Cape_Verde</option>
<option value="Atlantic/Faroe">Atlantic/Faroe</option>
<option value="Atlantic/Madeira">Atlantic/Madeira</option>
<option value="Atlantic/Reykjavik">Atlantic/Reykjavik</option>
<option value="Atlantic/South_Georgia">Atlantic/South_Georgia</option>
<option value="Atlantic/St_Helena">Atlantic/St_Helena</option>
<option value="Atlantic/Stanley">Atlantic/Stanley</option>
<option value="Australia/Adelaide">Australia/Adelaide</option>
<option value="Australia/Brisbane">Australia/Brisbane</option>
<option value="Australia/Broken_Hill">Australia/Broken_Hill</option>
<option value="Australia/Currie">Australia/Currie</option>
<option value="Australia/Darwin">Australia/Darwin</option>
<option value="Australia/Eucla">Australia/Eucla</option>
<option value="Australia/Hobart">Australia/Hobart</option>
<option value="Australia/Lindeman">Australia/Lindeman</option>
<option value="Australia/Lord_Howe">Australia/Lord_Howe</option>
<option value="Australia/Melbourne">Australia/Melbourne</option>
<option value="Australia/Perth">Australia/Perth</option>
<option value="Australia/Sydney">Australia/Sydney</option>
<option value="Europe/Amsterdam">Europe/Amsterdam</option>
<option value="Europe/Andorra">Europe/Andorra</option>
<option value="Europe/Astrakhan">Europe/Astrakhan</option>
<option value="Europe/Athens">Europe/Athens</option>
<option value="Europe/Belgrade">Europe/Belgrade</option>
<option value="Europe/Berlin">Europe/Berlin</option>
<option value="Europe/Bratislava">Europe/Bratislava</option>
<option value="Europe/Brussels">Europe/Brussels</option>
<option value="Europe/Bucharest">Europe/Bucharest</option>
<option value="Europe/Budapest">Europe/Budapest</option>
<option value="Europe/Busingen">Europe/Busingen</option>
<option value="Europe/Chisinau">Europe/Chisinau</option>
<option value="Europe/Copenhagen">Europe/Copenhagen</option>
<option value="Europe/Dublin">Europe/Dublin</option>
<option value="Europe/Gibraltar">Europe/Gibraltar</option>
<option value="Europe/Guernsey">Europe/Guernsey</option>
<option value="Europe/Helsinki">Europe/Helsinki</option>
<option value="Europe/Isle_of_Man">Europe/Isle_of_Man</option>
<option value="Europe/Istanbul">Europe/Istanbul</option>
<option value="Europe/Jersey">Europe/Jersey</option>
<option value="Europe/Kaliningrad">Europe/Kaliningrad</option>
<option value="Europe/Kiev">Europe/Kiev</option>
<option value="Europe/Kirov">Europe/Kirov</option>
<option value="Europe/Lisbon">Europe/Lisbon</option>
<option value="Europe/Ljubljana">Europe/Ljubljana</option>
<option value="Europe/London">Europe/London</option>
<option value="Europe/Luxembourg">Europe/Luxembourg</option>
<option value="Europe/Madrid">Europe/Madrid</option>
<option value="Europe/Malta">Europe/Malta</option>
<option value="Europe/Mariehamn">Europe/Mariehamn</option>
<option value="Europe/Minsk">Europe/Minsk</option>
<option value="Europe/Monaco">Europe/Monaco</option>
<option value="Europe/Moscow">Europe/Moscow</option>
<option value="Europe/Oslo">Europe/Oslo</option>
<option value="Europe/Paris">Europe/Paris</option>
<option value="Europe/Podgorica">Europe/Podgorica</option>
<option value="Europe/Prague">Europe/Prague</option>
<option value="Europe/Riga">Europe/Riga</option>
<option value="Europe/Rome">Europe/Rome</option>
<option value="Europe/Samara">Europe/Samara</option>
<option value="Europe/San_Marino">Europe/San_Marino</option>
<option value="Europe/Sarajevo">Europe/Sarajevo</option>
<option value="Europe/Saratov">Europe/Saratov</option>
<option value="Europe/Simferopol">Europe/Simferopol</option>
<option value="Europe/Skopje">Europe/Skopje</option>
<option value="Europe/Sofia">Europe/Sofia</option>
<option value="Europe/Stockholm">Europe/Stockholm</option>
<option value="Europe/Tallinn">Europe/Tallinn</option>
<option value="Europe/Tirane">Europe/Tirane</option>
<option value="Europe/Ulyanovsk">Europe/Ulyanovsk</option>
<option value="Europe/Uzhgorod">Europe/Uzhgorod</option>
<option value="Europe/Vaduz">Europe/Vaduz</option>
<option value="Europe/Vatican">Europe/Vatican</option>
<option value="Europe/Vienna">Europe/Vienna</option>
<option value="Europe/Vilnius">Europe/Vilnius</option>
<option value="Europe/Volgograd">Europe/Volgograd</option>
<option value="Europe/Warsaw">Europe/Warsaw</option>
<option value="Europe/Zagreb">Europe/Zagreb</option>
<option value="Europe/Zaporozhye">Europe/Zaporozhye</option>
<option value="Europe/Zurich">Europe/Zurich</option>
<option value="Indian/Antananarivo">Indian/Antananarivo</option>
<option value="Indian/Chagos">Indian/Chagos</option>
<option value="Indian/Christmas">Indian/Christmas</option>
<option value="Indian/Cocos">Indian/Cocos</option>
<option value="Indian/Comoro">Indian/Comoro</option>
<option value="Indian/Kerguelen">Indian/Kerguelen</option>
<option value="Indian/Mahe">Indian/Mahe</option>
<option value="Indian/Maldives">Indian/Maldives</option>
<option value="Indian/Mauritius">Indian/Mauritius</option>
<option value="Indian/Mayotte">Indian/Mayotte</option>
<option value="Indian/Reunion">Indian/Reunion</option>
<option value="Pacific/Apia">Pacific/Apia</option>
<option value="Pacific/Auckland">Pacific/Auckland</option>
<option value="Pacific/Bougainville">Pacific/Bougainville</option>
<option value="Pacific/Chatham">Pacific/Chatham</option>
<option value="Pacific/Chuuk">Pacific/Chuuk</option>
<option value="Pacific/Easter">Pacific/Easter</option>
<option value="Pacific/Efate">Pacific/Efate</option>
<option value="Pacific/Enderbury">Pacific/Enderbury</option>
<option value="Pacific/Fakaofo">Pacific/Fakaofo</option>
<option value="Pacific/Fiji">Pacific/Fiji</option>
<option value="Pacific/Funafuti">Pacific/Funafuti</option>
<option value="Pacific/Galapagos">Pacific/Galapagos</option>
<option value="Pacific/Gambier">Pacific/Gambier</option>
<option value="Pacific/Guadalcanal">Pacific/Guadalcanal</option>
<option value="Pacific/Guam">Pacific/Guam</option>
<option value="Pacific/Honolulu">Pacific/Honolulu</option>
<option value="Pacific/Johnston">Pacific/Johnston</option>
<option value="Pacific/Kiritimati">Pacific/Kiritimati</option>
<option value="Pacific/Kosrae">Pacific/Kosrae</option>
<option value="Pacific/Kwajalein">Pacific/Kwajalein</option>
<option value="Pacific/Majuro">Pacific/Majuro</option>
<option value="Pacific/Marquesas">Pacific/Marquesas</option>
<option value="Pacific/Midway">Pacific/Midway</option>
<option value="Pacific/Nauru">Pacific/Nauru</option>
<option value="Pacific/Niue">Pacific/Niue</option>
<option value="Pacific/Norfolk">Pacific/Norfolk</option>
<option value="Pacific/Noumea">Pacific/Noumea</option>
<option value="Pacific/Pago_Pago">Pacific/Pago_Pago</option>
<option value="Pacific/Palau">Pacific/Palau</option>
<option value="Pacific/Pitcairn">Pacific/Pitcairn</option>
<option value="Pacific/Pohnpei">Pacific/Pohnpei</option>
<option value="Pacific/Port_Moresby">Pacific/Port_Moresby</option>
<option value="Pacific/Rarotonga">Pacific/Rarotonga</option>
<option value="Pacific/Saipan">Pacific/Saipan</option>
<option value="Pacific/Tahiti">Pacific/Tahiti</option>
<option value="Pacific/Tarawa">Pacific/Tarawa</option>
<option value="Pacific/Tongatapu">Pacific/Tongatapu</option>
<option value="Pacific/Wake">Pacific/Wake</option>
<option value="Pacific/Wallis">Pacific/Wallis</option>
<option value="UTC">UTC</option>
</select>
                        </div>
                    </div>
                    <!--<div class="col-md-4">
                        <div class="form-group">
                            <label for="reg_ver">Registration Verification</label>                            <div class="controls">  <select name="reg_ver" class="tip form-control" required="required" id="reg_ver" style="width:100%;">
<option value="0" selected="selected">No</option>
<option value="1">Yes</option>
</select>
 </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="allow_reg">Allow Registration</label>                            <div class="controls">  <select name="allow_reg" class="tip form-control" required="required" id="allow_reg" style="width:100%;">
<option value="0" selected="selected">No</option>
<option value="1">Yes</option>
</select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="reg_notification">Registration Notification</label>                            <div class="controls">  <select name="reg_notification" class="tip form-control" required="required" id="reg_notification" style="width:100%;">
<option value="0" selected="selected">No</option>
<option value="1">Yes</option>
</select>
                            </div>
                        </div>
                    </div>-->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label"
                                   for="restrict_calendar">Calender</label>

                            <div class="controls">
                                <select name="restrict_calendar" class="form-control tip" required="required" id="restrict_calendar" style="width:100%;">
<option value="1">Private</option>
<option value="0" selected="selected">Shared</option>
</select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label"
                                   for="warehouse">Default Warehouse</label>

                            <div class="controls"> <select name="warehouse" class="form-control tip" id="warehouse" required="required" style="width:100%;">
<option value="3" selected="selected">Warehouse 1 (WH1)</option>
<option value="4">Warehouse 2 (WH2)</option>
<option value="5">Warehouse 3 (WH3)</option>
<option value="6">Warehouse Siem Reap (WH4)</option>
<option value="7">3A-1234 (3A-1234)</option>
</select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="biller">Default Biller</label>                            <select name="biller" id="biller" data-placeholder="Select Biller" required="required" class="form-control input-tip select" style="width:100%;">
<option value=""></option>
<option value="3" selected="selected">iNTER TECH PLUS CO., LTD</option>
<option value="5">iNTER TECH PLUS CO., LTD</option>
<option value="10">BA</option>
</select>
                        </div>
                    </div>
			
					<div class="col-md-4">
                        <div class="form-group">
                            <label for="payment_term">Default Payment Term</label>                            <select name="payment_term" id="payment_term" data-placeholder="Select payment term"  class="form-control input-tip select" style="width:100%;">
<option value=""></option>
<option value="3">3 Days</option>
<option value="30" selected="selected">30 Days</option>
<option value="0">Cash on delivery (COD)</option>
</select>
                        </div>
                    </div>
					
					<div class="col-md-4">
						<div class="form-group">
							<label class="control-label" for="single_login">Single Login</label>
							<div class="controls">
								<select name="single_login" class="form-control tip" required="required" id="single_login" style="width:100%;">
<option value="1">Enable</option>
<option value="0" selected="selected">Disable</option>
</select>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="form-group">
							<label class="control-label" for="login_time">Login Times</label>
							<div class="controls">
								<select name="login_time" class="form-control tip" required="required" id="login_time" style="width:100%;">
<option value="1" selected="selected">Enable</option>
<option value="0">Disable</option>
</select>
							</div>
						</div>
					</div>
					
					
                    </fieldset>

                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Products</legend>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tax_rate">Product Tax</label>                                <select name="tax_rate" class="form-control tip" id="tax_rate" required="required" style="width:100%;">
<option value="0" selected="selected">Disable</option>
<option value="1">Enable</option>
</select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="racks">Racks</label>

                                <div class="controls">
                                    <select name="racks" id="racks" class="form-control tip" required="required" style="width:100%;">
<option value="0">Disable</option>
<option value="1" selected="selected">Enable</option>
</select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="attributes">Product Variants</label>

                                <div class="controls">
                                    <select name="attributes" id="attributes" class="form-control tip"  required="required" style="width:100%;">
<option value="0">Disable</option>
<option value="1" selected="selected">Enable</option>
</select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label"
                                       for="product_expiry">Product Expiry</label>

                                <div class="controls">
                                    <select name="product_expiry" id="product_expiry" class="form-control tip" required="required" style="width:100%;">
<option value="0">Disable</option>
<option value="1" selected="selected">Enable</option>
</select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label"
                                       for="remove_expired">Remove expired products from stock</label>

                                <div class="controls">
                                    <select name="remove_expired" id="remove_expired" class="form-control tip" required="required" style="width:100%;">
<option value="0" selected="selected">No, I will remove manually</option>
<option value="1">Yes, remove from stock automatically</option>
</select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="image_size">Image Size (Width :
                                    Height) *</label>

                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="text" name="iwidth" value="40000"  class="form-control tip" id="iwidth" placeholder="image width" required="required" />
                                    </div>
                                    <div class="col-xs-6">
                                        <input type="text" name="iheight" value="40000"  class="form-control tip" id="iheight" placeholder="image height" required="required" />
</div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="thumbnail_size">Thumbnail Size                                    (Width : Height) *</label>

                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="text" name="twidth" value="60"  class="form-control tip" id="twidth" placeholder="thumbnail width" required="required" />
                                    </div>
                                    <div class="col-xs-6">
                                        <input type="text" name="theight" value="60"  class="form-control tip" id="theight" placeholder="thumbnail height" required="required" />
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="watermark">Watermark</label>                                <select name="watermark" class="tip form-control" required="required" id="watermark" style="width:100%;">
<option value="0" selected="selected">No</option>
<option value="1">Yes</option>
</select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="display_all_products">Display warehouse products</label>                                <select name="display_all_products" class="tip form-control" required="required" id="display_all_products" style="width:100%;">
<option value="0">Hide with 0 quantity</option>
<option value="1" selected="selected">Show all even with 0 quantity</option>
</select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="barcode_separator">Barcode separator</label>                                <select name="barcode_separator" class="tip form-control" required="required" id="barcode_separator" style="width:100%;">
<option value="-">Minus (-)</option>
<option value=".">Dot ( . )</option>
<option value="~">Tilde ( ~ )</option>
<option value="_" selected="selected">Underscore ( _ )</option>
</select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="barcode_renderer">Barcode Renderer</label>                                <select name="barcode_renderer" class="tip form-control" required="required" id="barcode_renderer" style="width:100%;">
<option value="1" selected="selected">Image</option>
<option value="0">SVG</option>
</select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="update_cost">Update cost with purchase</label>                                <select name="update_cost" class="form-control" id="update_cost" required="required">
<option value="0">No</option>
<option value="1" selected="selected">Yes</option>
</select>
                            </div>
                        </div>
						
                    </fieldset>

                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Sales</legend>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="overselling">Over Selling</label>

                                <div class="controls">
                                    <select name="restrict_sale" class="form-control tip" id="overselling" required="required" style="width:100%;">
<option value="1" selected="selected">Yes</option>
<option value="0">No</option>
</select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label"
                                       for="reference_format">Reference Format</label>

                                <div class="controls">
                                    <select name="reference_format" class="form-control tip" required="required" id="reference_format" style="width:100%;">
<option value="1">YEAR/Sequence Number (SL/2014/001)</option>
<option value="2" selected="selected">YEAR/MONTH/Sequence Number (SL/2014/08/001)</option>
<option value="3">Sequence Number</option>
<option value="4">Random Number</option>
</select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tax_rate2">Order Tax</label>                                <select name="tax_rate2" id="tax_rate2" class="form-control tip" required="required" style="width:100%;">
<option value="0">Disable</option>
<option value="1" selected="selected">No Tax</option>
<option value="2">VAT @10%</option>
<option value="5">ttt</option>
</select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label"
                                       for="product_discount">Product Level Discount</label>

                                <div class="controls">
                                    <select name="product_discount" id="product_discount" class="form-control tip" required="required" style="width:100%;">
<option value="0">Disable</option>
<option value="1" selected="selected">Enable</option>
</select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label"
                                       for="product_serial">Product Serial</label>

                                <div class="controls">
                                    <select name="product_serial" id="product_serial" class="form-control tip" required="required" style="width:100%;">
<option value="0">Disable</option>
<option value="1" selected="selected">Enable</option>
</select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label"
                                       for="detect_barcode">Auto Detect Barcode</label>

                                <div class="controls">
                                    <select name="detect_barcode" id="detect_barcode" class="form-control tip" required="required" style="width:100%;">
<option value="0">Disable</option>
<option value="1" selected="selected">Enable</option>
</select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="bc_fix">Products count to fix barcode input</label>


                                <input type="text" name="bc_fix" value="4"  class="form-control tip" required="required" id="bc_fix" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label"
                                       for="item_addition">Cart Item Addition Method</label>

                                <div class="controls">
                                    <select name="item_addition" id="item_addition" class="form-control tip" required="required" style="width:100%;">
<option value="0" selected="selected">Add New Item to cart</option>
<option value="1">Increase item quantity, if it already exists in cart</option>
</select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="set_focus">Default Order Page Focus</label>                                <select name="set_focus" id="set_focus" data-placeholder="Select Default Order Page Focus" required="required" class="form-control input-tip select" style="width:100%;">
<option value="0" selected="selected">Add item input</option>
<option value="1">Quantity input for last order item</option>
</select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="invoice_view">Invoice View</label>

                                <div class="controls">
                                    <select name="invoice_view" class="form-control tip" required="required" id="invoice_view" style="width:100%;">
<option value="1">Tax Invoice</option>
<option value="0" selected="selected">Standard</option>
</select>
                                </div>
                            </div>
                        </div>
						
						<div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="car_operation">Car Operation</label>
                                <div class="controls">
                                    <select name="car_operation" class="form-control tip" required="required" id="car_operation" style="width:100%;">
<option value="1" selected="selected">Enable</option>
<option value="0">Disable</option>
</select>
                                </div>
                            </div>
                        </div>
						
						<div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="qty_operation">Qty Operation</label>
                                <div class="controls">
                                    <select name="qty_operation" class="form-control tip" required="required" id="qty_operation" style="width:100%;">
<option value="1" selected="selected">Enable</option>
<option value="0">Disable</option>
</select>
                                </div>
                            </div>
                        </div>
						
						<div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="deposit_amount_alerts">Deposit Balance Notification</label>
                                <div class="controls">
                                    <select name="deposit_amount_alerts" class="form-control tip" required="required" id="deposit_amount_alerts" style="width:100%;">
<option value="1" selected="selected">Enable</option>
<option value="0">Disable</option>
</select>
                                </div>
                            </div>
                        </div>
						
						<div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="project">Project</label>
                                <div class="controls">
                                    <select name="project" class="form-control tip" required="required" id="project" style="width:100%;">
<option value="1" selected="selected">Enable</option>
<option value="0">Disable</option>
</select>
                                </div>
                            </div>
                        </div>
						
						<div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="project">List Loans</label>
                                <div class="controls">
                                    <select name="loan" class="form-control tip" required="required" id="loan" style="width:100%;">
<option value="1" selected="selected">Enable</option>
<option value="0">Disable</option>
</select>
                                </div>
                            </div>
                        </div>
						
						<div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="bc_fix">Remind Loan Days</label>
                                <input type="text" name="remind_loan_days" value="3"  class="form-control tip" required="required" id="remind_loan_days" />
                            </div>
                        </div>
						
						<div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="project">Price Groups</label>
                                <div class="controls">
                                    <select name="price_groups" class="form-control tip" required="required" id="price_groups" style="width:100%;">
<option value="1" selected="selected">Enable</option>
<option value="0">Disable</option>
</select>
                                </div>
                            </div>
                        </div>
						
						<div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="project">Cart</label>
                                <div class="controls">
                                    <select name="cart" class="form-control tip" required="required" id="cart" style="width:100%;">
<option value="1" selected="selected">Enable</option>
<option value="0">Disable</option>
</select>
                                </div>
                            </div>
                        </div>
						
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label" for="set_custom_field">Custom Field Search</label>
								<div class="controls">
									<select name="set_custom_field" class="form-control tip" required="required" id="set_custom_field" style="width:100%;">
<option value="1">Enable</option>
<option value="0" selected="selected">Disable</option>
</select>
								</div>
							</div>
						</div>
						
                    </fieldset>

                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Prefix</legend>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="sales_prefix">Sales Reference Prefix</label>

                                <input type="text" name="sales_prefix" value="INV"  class="form-control tip" id="sales_prefix" />
                            </div>
                        </div>
						<div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="sale_order_prefix">Sales Order Reference Prefix</label>

                                <input type="text" name="sale_order_prefix" value="SO"  class="form-control tip" id="sale_order_prefix" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label"
                                       for="return_prefix">Return Sale Prefix</label>

                                <input type="text" name="return_prefix" value="SR"  class="form-control tip" id="return_prefix" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="payment_prefix">Payment Reference Prefix</label>
                                <input type="text" name="payment_prefix" value="RC"  class="form-control tip" id="payment_prefix" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="ppayment_prefix">Purchase Payment Prefix</label>
                                <input type="text" name="ppayment_prefix" value="PV"  class="form-control tip" id="ppayment_prefix" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label"
                                       for="delivery_prefix">Delivery Reference Prefix</label>

                                <input type="text" name="delivery_prefix" value="DO"  class="form-control tip" id="delivery_prefix" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="quote_prefix">Quotation Reference Prefix</label>

                                <input type="text" name="quote_prefix" value="QT"  class="form-control tip" id="quote_prefix" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label"
                                       for="purchase_prefix">Purchase Reference Prefix</label>

                                <input type="text" name="purchase_prefix" value="PU"  class="form-control tip" id="purchase_prefix" />
                            </div>
                        </div>
						<div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label"
                                       for="purchase_order_prefix">Purchase Order Reference Prefix</label>

                                <input type="text" name="purchase_order_prefix" value="PO"  class="form-control tip" id="purchase_order_prefix" />
                            </div>
                        </div>
						<div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label"
                                       for="purchase_request_prefix">Purchase Request Reference Prefix</label>

                                <input type="text" name="purchase_request_prefix" value="PR"  class="form-control tip" id="purchase_order_prefix" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label"
                                       for="returnp_prefix">Return Purchase Prefix</label>

                                <input type="text" name="returnp_prefix" value="PUR"  class="form-control tip" id="returnp_prefix" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label"
                                       for="transfer_prefix">Transfer Reference Prefix</label>
                                <input type="text" name="transfer_prefix" value="TR"  class="form-control tip" id="transfer_prefix" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="expense_prefix">Expense Prefix</label>                                <input type="text" name="expense_prefix" value="EXP"  class="form-control tip" id="expense_prefix" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="qa_prefix">Quantity Adjustment Prefix</label>                                <input type="text" name="qa_prefix" value="QA"  class="form-control tip" id="qa_prefix" />
                            </div>
                        </div>
						<div class="col-md-4">
                            <div class="form-group">
                                <label for="count_stock_prefix">Count Stock Prefix</label>                                <input type="text" name="count_stock_prefix" value="CO"  class="form-control tip" id="count_stock_prefix" />
                            </div>
                        </div>
						
						<div class="col-md-4">
                            <div class="form-group">
                                <label for="receive_prefix">Receive Items Prefix</label>                                <input type="text" name="receive_prefix" value=""  class="form-control tip" id="receive_prefix" />
                            </div>
                        </div>
						
						<div class="col-md-4">
                            <div class="form-group">
                                <label for="customer_prefix">Customer Prefix</label>                                <input type="text" name="customer_prefix" value=""  class="form-control tip" id="customer_prefix" />
                            </div>
                        </div>
						
						<div class="col-md-4">
                            <div class="form-group">
                                <label for="supplier_prefix">Supplier Prefix</label>                                <input type="text" name="supplier_prefix" value=""  class="form-control tip" id="supplier_prefix" />
                            </div>
                        </div>
						
						<div class="col-md-4">
                            <div class="form-group">
                                <label for="bill_prefix">Bill Prefix</label>                                <input type="text" name="bill_prefix" value=""  class="form-control tip" id="bill_prefix" />
                            </div>
                        </div>
						
                    </fieldset>

                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Money and Number Format</legend>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="decimals">Decimals</label>

                                <div class="controls"> <select name="decimals" class="form-control tip" id="decimals"  style="width:100%;" required="required">
<option value="0">Disable</option>
<option value="1">1</option>
<option value="2" selected="selected">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="qty_decimals">Quantity Decimals</label>

                                <div class="controls"> <select name="qty_decimals" class="form-control tip" id="qty_decimals"  style="width:100%;" required="required">
<option value="0">Disable</option>
<option value="1">1</option>
<option value="2" selected="selected">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="sac">South Asian Countries Currency Format</label>                                <select name="sac" class="form-control tip" id="sac"  required="required">
<option value="0" selected="selected">Disable</option>
<option value="1">Enable</option>
</select>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="nsac">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="decimals_sep">Decimals Separator</label>

                                    <div class="controls"> <select name="decimals_sep" class="form-control tip" id="decimals_sep"  style="width:100%;" required="required">
<option value="." selected="selected">Dot</option>
<option value=",">Comma</option>
</select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="thousands_sep">Thousands Separator</label>
                                    <div class="controls"> <select name="thousands_sep" class="form-control tip" id="thousands_sep"  style="width:100%;" required="required">
<option value=".">Dot</option>
<option value="," selected="selected">Comma</option>
<option value="0">Space</option>
</select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="display_symbol">Display Currency Symbol</label>                                                                <select name="display_symbol" class="form-control" id="display_symbol" style="width:100%;" required="required">
<option value="0">Disable</option>
<option value="1">Before</option>
<option value="2" selected="selected">After</option>
</select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="symbol">Currency Symbol</label>                                <input type="text" name="symbol" value=" $"  class="form-control" id="symbol" style="width:100%;" />
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Email</legend>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="protocol">Email Protocol</label>

                                <div class="controls"> <select name="protocol" class="form-control tip" id="protocol"  style="width:100%;" required="required">
<option value="mail" selected="selected">PHP Mail Function</option>
<option value="sendmail">Send Mail</option>
<option value="smtp">SMTP</option>
</select>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row" id="sendmail_config" style="display: none;">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="mailpath">Mail Path</label>

                                        <input type="text" name="mailpath" value="/usr/sbin/sendmail"  class="form-control tip" id="mailpath" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row" id="smtp_config" style="display: none;">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"
                                               for="smtp_host">SMTP Host</label>

                                        <input type="text" name="smtp_host" value="pop.gmail.com"  class="form-control tip" id="smtp_host" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"
                                               for="smtp_user">SMTP User</label>

                                        <input type="text" name="smtp_user" value="contact@sma.tecdiary.org"  class="form-control tip" id="smtp_user" />
 </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"
                                               for="smtp_pass">SMTP Password</label>

                                        <input type="password" name="smtp_pass" value=""  class="form-control tip" id="smtp_pass" />
 </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"
                                               for="smtp_port">SMTP Port</label>

                                        <input type="text" name="smtp_port" value="25"  class="form-control tip" id="smtp_port" />
 </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"
                                               for="smtp_crypto">SMTP Crypto</label>

                                        <div class="controls"> <select name="smtp_crypto" class="form-control tip" id="smtp_crypto">
<option value="" selected="selected">None</option>
<option value="tls">TLS</option>
<option value="ssl">SSL</option>
</select>
 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Award Points</legend>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Customer Award Points</label>

                                <div class="row">
                                    <div class="col-sm-4 col-xs-6">
                                        Each <i class="fa fa-arrow-down"></i> spent is equal to<br>
                                        <input type="text" name="each_spent" value="100.00"  class="form-control" />
                                    </div>
                                    <div class="col-sm-1 col-xs-1 text-center"><i class="fa fa-arrow-right"></i>
                                    </div>
                                    <div class="col-sm-4 col-xs-5">
                                        Award Points<br>
                                        <input type="text" name="ca_point" value="3"  class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Staff Award Points</label>

                                <div class="row">
                                    <div class="col-sm-4 col-xs-6">
                                        Each <i class="fa fa-arrow-down"></i> in sale is equal to<br>
                                        <input type="text" name="each_sale" value="3000.00"  class="form-control" />
                                    </div>
                                    <div class="col-sm-1 col-xs-1 text-center"><i class="fa fa-arrow-right"></i>
                                    </div>
                                    <div class="col-sm-4 col-xs-5">
                                        Award Points<br>
                                        <input type="text" name="sa_point" value="2"  class="form-control" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </fieldset>

                </div>
            </div>
            <div style="clear: both; height: 10px;"></div>
            <div class="col-md-12">
                <div class="form-group">
                    <div class="controls">
                        <input type="submit" name="update_settings" value="Update Settings"  class="btn btn-primary" />
                    </div>
                </div>
            </div>
            </form>        </div>
    </div>
    <div class="alert alert-info" role="alert"><p>
        <strong>Cron Job:</strong> <code>0 1 * * * wget -qO- http://localhost/full_project/WeERP_v3/cron/run &gt;/dev/null 2&gt;&amp;1</code> to run at 1:00 AM daily. For local installation, you can run cron job manually at any time.
                    <a class="btn btn-primary btn-xs pull-right" target="_blank" href="http://localhost/full_project/WeERP_v3/cron/run">Run cron job now</a>
            </p></div>
</div>
</div>

  
@endsection

@push('css')
  {{-- expr --}}
@endpush

