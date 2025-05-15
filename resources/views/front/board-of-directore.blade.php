@extends('front.layouts')
@push('css')
    <link rel="stylesheet" href="{{ asset('front/css/program.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/home.css') }}" />
@endpush
@section('title', 'Board of Directors')
@section('content')
    <main>
      <div class="breadcrumb-container">
        <div class="home">Home</div>
        <i class="fa-solid fa-angle-right arrow"></i>
        <div class="page-name">Board of Directors</div>
      </div>
      <img
        src="{{ asset('front/img/farmer - using - digital-tablet-corn-crop-cultivated - field-with-smart-farming.png') }}"
        alt=""
        class="img"
      />
    </main>
@endsection
