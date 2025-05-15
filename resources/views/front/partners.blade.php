@extends('front.layouts')
@push('css')
    <link rel="stylesheet" href="{{ asset('front/css/program.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/home.css') }}" />
@endpush
@section('title', 'Our Partners')
@section('content')
    <main>
        <div class="breadcrumb-container">
            <div class="home">Home</div>
            <i class="fa-solid fa-angle-right arrow"></i>
            <div class="page-name">Our Partners</div>
        </div>
        <img src="{{ asset('front/img/agricultural-business-deal-sealed-with-handshake-farmer-businessman-sunset.png') }}"
            alt="" class="img" />
        <p class="our-partners">Our Partners</p>
        @isset($brands)
            <div class="partners-container">
                @foreach ($brands as $brand)
                    <div class="partner">
                        <img src="{{ $brand->s_cover }}" alt="{{ $brand->s_title }}" />
                    </div>
                @endforeach
            </div>
        @endisset
    </main>
@endsection
