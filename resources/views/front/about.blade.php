@extends('front.layouts')
@section('title', 'About us')
@section('content')
 <div
      class="pt-4 hide-bg-small"
      style="
        background-image: url('{{ asset('front/imges/bg.png') }}');
        background-size: cover;
        background-position: top;
        background-repeat: no-repeat;
      "
    >
      <div class="container">
        <div class="pt-md-5 two-section" style="padding: 12px 0px">
          <button
            class="btn px-3 my-md-5 my-sm-3 py-1 fs-3 text-light fw-lighter rounded-0 border-0 btnChange"
            style="letter-spacing: 1px; background-color: #467f2d"
          >
            About Us
          </button>
          <div class="row d-flex align-items-start my-md-2 py-md-0">
            <div class="col-md-6 justify-content-sm-center mb-md-5">
              <img
                src="{{ asset('front/imges/aboutus.png') }}"
                alt="Background Design"
                class="mt-3 img-fluid mb-3"
                style="width: 82%"
              />
            </div>
            <div class="col-md-6 col-12 pb-4 ps-0">
              <p
                class="text-muted fw-light w-75 mt-0 pt-2 mx-0 mb-4"
                style="font-size: 1rem; line-height: 1.8"
              >
                The Developmental Agricultural Association is a non-profit,
                non-governmental association, licensed as a charitable
                organization according to Law of Charitable and Civil
                Organizations Act No (1) of the year 2000 under No (7779).<br />
                The association was founded in the Middle Area, more
                specifically Salqa Valley area in Deir El Balah city, the Gaza
                Strip, as a neutral, civil organization that operates
                transparently to provide services to the agricultural sector and
                all farmers of both genders in their locations as its scope of
                work extends to outside the middle governorate to the entirety
                of homeland.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
