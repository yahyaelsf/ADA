@extends('front.layouts')
@section('title', 'Vision')
@section('content')
<div class="pt-4 hide-bg-small" style="
        background-image: url('{{ asset('front/imges/bgvalue.png') }}');
        background-size: cover;
        background-position: top;
        background-repeat: no-repeat;
      ">
      <div class="container">
        <div class="pt-md-4 two-section" style="padding: 12px 0px">
          <button class="btn px-3 my-5 text-light py-1 fs-3 fw-lighter rounded-0 border-0 btnChange" style="
              letter-spacing: 1px;
              background-color: #467f2d;
              letter-spacing: 1px;
            ">
            Value
          </button>
          <div class="row d-flex align-items-start my-md-5 py-md-0">
            <div class="col-md-6 justify-content-sm-center mb-4">
              <img src="{{ asset('front/imges/value.png') }}" alt="Value" style="width: 82%" class="img-fluid mb-1 mt-0">
            </div>
            <div class="col-md-4 col-12 pb-1">
              <h5 class="mb-2">The Association Seeks To</h5>
              <ul class="list-unstyled palm-list text-muted fw-light mx-1" style="font-size: 1rem; line-height: 1.6">
                <li class="py-2">
                  Organize and classify farmers-young and old- to identify their
                  essential needs utilizing scientific research to increase
                  their agricultural abilities in the agricultural sector -both
                  plant and livestock production.
                </li>
                <li class="py-2">
                  Aid in developing current projects through consultation,
                  training and educating the necessary skills to better manage
                  their projects. These skills include researching project
                  feasibility and such.
                </li>
                <li class="py-2">
                  Encourage farmers to organize their sector into groups and
                  unions, join relevant associations to get their voice heard
                  and strengthen them in their more influential collective work.
                </li>
                <li class="py-2">
                  Provide relief and social services to the families of young
                  farmers and female project owners led by a male or female
                  provider, especially orphaned families and marginalized
                  families in the local community.
                </li>
                <li class="py-2">
                  Empower and support projects led by people with special needs
                  of both genders, include them in society and empower them
                  economically.
                </li>
                <li class="py-2">
                  Aid farmers in defending their land, their projects, their
                  right to manage their land and their access to water and
                  renewable energy. To protect them and support them during
                  natural disasters through compensation in case of damages.
                </li>
              </ul>
              <br>
              <h5>Ad Valorem, Sensible Management:</h5>
              <ul class="list-unstyled flower-list text-muted fw-light mt-0 pb-5 mx-1" style="font-size: 1rem; line-height: '1.6'">
                <li class="py-1" style="margin-top: 1.5px">
                  The association is established on a principle of clarity and
                  transparency that runs through its activities, procedures and
                  objective policies evident in documentation, data saving and
                  easy access of this data to beneficiaries, the public,
                  relevant official bodies, donors, and funders.
                </li>
                <li class="py-1">
                  Active participation of relevant parties of both genders in
                  the process of decision making whether inside or outside of
                  the association.
                </li>
                <li class="py-1">
                  The association functions through a system of networking and
                  coordination with relevant associations holding shared
                  objectives to serve public interest and not to waste resources
                  and efforts.
                </li>
                <li class="py-1">
                  Volunteering is a key feature of the association’s mission
                  evident in encouraging voluntary work, opening the door for
                  applicants to participate at work and helping others during
                  natural disasters, crises and even war. A good number of
                  volunteers are already working in the association.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
