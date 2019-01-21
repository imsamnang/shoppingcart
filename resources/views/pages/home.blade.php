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
        @include('includes.front.section_top')
      </div>
    </div>
  </div>
  {{-- box-section-top --}}

  {{-- block-service --}}
    {{-- @include('includes.front.block_service') --}}
  {{-- block-service --}}

  {{-- Best Sallers --}}
    {{-- @include('includes.front.best_saller') --}}
  {{-- Best Sallers --}}

    <div class="clearfix" style="background-color: #eeeeee;margin-bottom: 40px; padding-top:30px;">
      <!-- block -floor -products / floor 1 :Fashion-->
        {{-- @include('includes.front.fashion') --}}
      <!-- block -floor -products / floor 1 :Fashion-->

      {{-- Sports --}}
        {{-- @include('includes.front.sports') --}}
      {{-- Sports --}}

      {{-- Electronics --}}
        {{-- @include('includes.front.electronic') --}}
      {{-- Electronics --}}

      {{-- Digital --}}
        {{-- @include('includes.front.digital') --}}
      {{-- Digital --}}

      {{-- Fornitures --}}
        {{-- @include('includes.front.furniture') --}}
      {{-- Fornitures --}}

      {{-- jewelry --}}
        {{-- @include('includes.front.jewelry') --}}
      {{-- jewelry --}}

      <!-- Banner -->
        {{-- @include('includes.front.banner') --}}
      <!-- Banner -->
    </div>

  <!-- block  showcase-->
    {{-- @include('includes.front.showcase') --}}
  <!-- block  showcase-->

  <!-- block  hot categories-->
    {{-- @include('includes.front.hot_categories') --}}
  <!--block  hot categories-->
@endsection

@push('js')
	{{-- expr --}}
@endpush