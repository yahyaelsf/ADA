@extends('front.layouts')
@section('title', 'Vision')
@section('content')
<div class="pt-4 hide-bg-small" style="
        background-image: url('{{ asset('front/imges/bgvission.png') }}');
        background-size: cover;
        background-position: top;
        background-repeat: no-repeat;
      ">
      <div class="container">
        <div class="pt-md-5 two-section" style="padding: 12px 0px">
          <button class="btn text-light px-3 my-5 py-1 fs-3 fw-lighter rounded-0 border-2 btnChange" style="background-color: #467f2d; letter-spacing: 1px">
            Vision
          </button>
          <div class="row d-flex align-items-start my-md-3 py-md-0">
            <div class="col-md-6 justify-content-sm-center mb-1">
              <img src="{{ asset('front/imges/vission.png') }}" alt="Vision" class="mt-3 mb-3 img-fluid" style="width: 82%">
            </div>
            <div class="col-md-6 col-12 pb-1 ps-1">
              <p class="text-muted fw-light w-75 pt-md-3 mt-0 ps-sm-4" style="font-size: 1rem; line-height: 1.8">
                The association seeks to serve, promote and empower a
                sustainable community in which there is full respect and
                societal peace in all sectors especially the agricultural sector
                in order to take care of land and human life development
                especially for farmers. In addition, it seeks to cultivate rural
                areas to secure farmers’ essential needs autonomously and
                independently taking best advantage of human and natural
                resources to achieve food security thus empowering Palestinian
                economy.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
