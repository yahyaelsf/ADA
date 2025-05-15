@extends('front.layouts')
@section('title', 'Vision')
@section('content')
<div class="pt-4 hide-bg-small" style="
        background-image: url('{{ asset('front/imges/bgmission.png') }}');
        background-size: cover;
        background-position: top;
        background-repeat: no-repeat;
      ">
      <div class="container">
        <div class="pt-md-5 two-section" style="padding: 12px 0px">
          <button class="btn px-3 mt-md-5 my-sm-5 py-1 fs-3 text-light fw-lighter rounded-0 border-0 btnChange" style="letter-spacing: 1px; background-color: #467f2d">
            Mission
          </button>
          <div class="row d-flex align-items-start my-md-3 py-md-0">
            <div class="col-md-6 col-sm-12 justify-content-sm-center mb-md-5">
              <img src="{{ asset('front/imges/mission.jpeg') }}" alt="Mission" class="mt-3 img-fluid mb-3" style="width: 82%">
            </div>
            <div class="col-md-6 col-sm-12 pb-1 ps-1">
              <p class="text-muted fw-light w-75 pt-md-3 mt-0 ps-sm-4" style="font-size: 1rem; line-height: 1.8">
                The association seeks to aid farmers -including young farmers-
                and to support them through studying their needs and working to
                reinforce their steadfastness through participation in
                developmental and relief projects, networking with partner
                associations and unifying efforts in field activities in rural
                areas, especially projects owned by women who depend on
                agriculture to support their families -whether poultry or
                vegetative projects- in the absence of their main provider. The
                association seeks to realize this through training, increasing
                abilities to manage economic projects and improving agricultural
                produce consequently empowering the Palestinian economy.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
