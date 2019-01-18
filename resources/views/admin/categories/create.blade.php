@extends('layouts.admin.sma_layout')

@section('title','Create Category')

@push('css')
	{{-- expr --}}
@endpush

@section('admin-content')


@endsection

@push('js')
	{!! Toastr::message() !!}
	<script type="text/javascript">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error('{{ $error }}','Error',{
                closeButton:true,
                progressBar:true
            });
        @endforeach
    @endif
	</script>
@endpush