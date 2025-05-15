@extends('front.layouts')
@push('css')
    <link rel="stylesheet" href="{{ asset('front/css/program.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/home.css') }}" />
@endpush
@section('title', 'Vision')
@section('content')
    <main>
        <div class="breadcrumb-container">
            <div class="home">Home</div>
            <i class="fa-solid fa-angle-right arrow"></i>
            <div class="page-name">Projects</div>
        </div>
        <img src="{{ asset('front/img/smart-farmer-using-application-by-tablet-concepts-modern-vegetables-gardening-lettuce-greenhouse-visual-icon..png') }}"
            alt="" class="img" />
        <div class="container">
            <h2 class="program-title">Projects</h2>
            <div class="row">
                @isset($projects)
                    @foreach ($projects as $index => $project)
                        @if ($index % 2 == 0)
                            <div class="column">
                                <div class="box text-box">
                                    <div class="lorem-box">
                                        <p>{{ explode(' ', $project->s_name)[0] }}</p>
                                        <p>{{ implode(' ', array_slice(explode(' ', $project->s_name), 1)) }}</p>
                                    </div>
                                    <div class="fog"></div>
                                </div>
                                <div class="box image-box">
                                    <img src="{{ $project->s_cover }}"
                                        alt="Image 1" />
                                </div>
                            </div>
                        @else
                            <div class="column">
                                <div class="box image-box">
                                    <img src="{{ $project->s_cover }}"
                                        alt="Image 2" />
                                </div>
                                <div class="box text-box">
                                    <div class="lorem-box">
                                        <p>{{ explode(' ', $project->s_name)[0] }}</p>
                                        <p>{{ implode(' ', array_slice(explode(' ', $project->s_name), 1)) }}</p>
                                    </div>
                                    <div class="fog"></div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endisset
            </div>
        </div>
    </main>
@endsection
