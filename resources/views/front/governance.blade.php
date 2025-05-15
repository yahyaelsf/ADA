@extends('front.layouts')
@push('css')
    <link rel="stylesheet" href="{{ asset('front/css/program.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/home.css') }}" />
@endpush
@section('title', 'General Assembly')
@section('content')
    <main>
      <div class="breadcrumb-container">
        <div class="home">Home</div>
        <i class="fa-solid fa-angle-right arrow"></i>
        <div class="page-name">General Assembly</div>
      </div>
      <img
        src="{{ asset('front/img/back-lit-photo-business-people-conference-room-standing-sitting-window-city.png') }}"
        alt=""
        class="img"
      />
    </main>
@endsection
