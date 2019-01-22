@extends('layouts.admin.sma_layout')

@section('title','backups')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

<div class="box" style="margin-bottom: 15px;">
    <div class="box-header">
        <h2 class="blue"><i class="fa-fw fa fa-database"></i>Database Backups</h2>

        <div class="box-icon">
            <ul class="btn-tasks">
                <li class="dropdown"><a href="http://localhost/full_project/WeERP_v3/system_settings/backup_database"><i
                            class="icon fa fa-database"></i><span
                            class="padding-right-10">Backup Database</span></a></li>
            </ul>
        </div>
    </div>
    <div class="box-content">
        <div class="row">
            <div class="col-lg-12">
                <p class="introtext">Please backup before restoring to any older version.</p>

                <div class="row">
                    <div class="col-md-12">
                                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="box">
    <div class="box-header">
        <h2 class="blue"><i class="fa-fw fa fa-folder"></i>File Backups</h2>

        <div class="box-icon">
            <ul class="btn-tasks">
                <li class="dropdown"><a href="#" id="backup_files"><i class="icon fa fa-file-zip-o"></i><span
                            class="padding-right-10">Backup Files</span></a></li>
            </ul>
        </div>
    </div>
    <div class="box-content">
        <div class="row">
            <div class="col-lg-12">
                <p class="introtext">Please backup before restoring to any older version.</p>

                <div class="row">
                    <div class="col-md-12">
                                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="wModal" tabindex="-1" role="dialog" aria-labelledby="wModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="wModalLabel">Please wait...</h4>
            </div>
            <div class="modal-body">
                Please wait, this could take few minutes.            </div>
        </div>
    </div>
</div>

  
@endsection

@push('css')
  {{-- expr --}}
@endpush

