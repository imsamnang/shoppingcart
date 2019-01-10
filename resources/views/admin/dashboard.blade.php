@extends('layouts.admin.admin_layout')

@section('title','Admin Dashboard')

@push('css')
	{{-- expr --}}
@endpush

@section('admin-content')
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="index.html">Home</a> 
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="#">Dashboard</a></li>
	</ul>
@endsection

@push('js')
	{{-- expr --}}
@endpush