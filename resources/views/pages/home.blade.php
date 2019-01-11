@extends('layouts.front.master')

@section('title','Shopping Cart Homepage')

@push('css')
	{{-- expr --}}
@endpush

@section('main-content')

  <!--  Popup Newsletter-->
    {{-- @include('layouts.front.ads.news_letter') --}}
  <!--Popup Newsletter-->

  {{-- box-section-top --}}
  <div class="block-section-top block-section-top1">
    <div class="container">
      <div class="box-section-top">    
        @include('includes.section_top')
      </div>
    </div>
  </div>
  {{-- box-section-top --}}

  {{-- block-service --}}
    {{-- @include('includes.block_service') --}}
  {{-- block-service --}}

  {{-- Best Sallers --}}
    {{-- @include('includes.best_saller') --}}
  {{-- Best Sallers --}}

    <div class="clearfix" style="background-color: #eeeeee;margin-bottom: 40px; padding-top:30px;">
      <!-- block -floor -products / floor 1 :Fashion-->
        {{-- @include('includes.fashion') --}}
      <!-- block -floor -products / floor 1 :Fashion-->

      {{-- Sports --}}
        {{-- @include('includes.sports') --}}
      {{-- Sports --}}

      {{-- Electronics --}}
        {{-- @include('includes.electronic') --}}
      {{-- Electronics --}}

      {{-- Digital --}}
        {{-- @include('includes.digital') --}}
      {{-- Digital --}}

      {{-- Fornitures --}}
        {{-- @include('includes.furniture') --}}
      {{-- Fornitures --}}

      {{-- jewelry --}}
        {{-- @include('includes.jewelry') --}}
      {{-- jewelry --}}

      <!-- Banner -->
        {{-- @include('includes.banner') --}}
      <!-- Banner -->
    </div>

  <!-- block  showcase-->
    {{-- @include('includes.showcase') --}}
  <!-- block  showcase-->

  <!-- block  hot categories-->
    @include('includes.hot_categories')
  <!--block  hot categories-->
@endsection

@push('js')
	{{-- expr --}}
@endpush