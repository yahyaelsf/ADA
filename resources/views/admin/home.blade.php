@extends('admin.layouts.dashboard')
@section('content')
    <div class="kt-portlet__body kt-portlet__body--fit">
        <div class="kt-widget17">
            <div class="kt-widget17__visual kt-widget17__visual--chart kt-portlet-fit--top kt-portlet-fit--sides"
                style="background-color: rgba(70, 127, 45, 1)">
                <div class="kt-widget17__chart" style="height:100px;">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <canvas id="kt_chart_activities" width="488" height="216" class="chartjs-render-monitor"
                        style="display: block; width: 488px; height: 216px;"></canvas>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 my-2">
                    <div class="kt-widget17__stats" style="margin-bottom: 20px">
                        <div class="kt-widget17__items">

                            <div class="kt-widget17__item">
                                <a href="{{ route('admin.news.index') }}">
                                    <span class="kt-widget17__icon">
                                        <i class="fa fa-envelope-open-text"></i> </span>
                                    <span class="kt-widget17__subtitle">
                                        Number of News
                                    </span>
                                    <span class="kt-widget17__desc">
                                        {{ $news }}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 my-2">
                    <div class="kt-widget17__stats" style="margin-bottom: 20px">
                        <div class="kt-widget17__items">

                            <div class="kt-widget17__item">
                                <a href="{{ route('admin.articles.index') }}">
                                    <span class="kt-widget17__icon">
                                        <i class="fa fa-envelope-open-text"></i> </span>
                                    <span class="kt-widget17__subtitle">
                                        Number of Articles
                                    </span>
                                    <span class="kt-widget17__desc">
                                        {{ $articles }}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 my-2">
                    <div class="kt-widget17__stats" style="margin-bottom: 20px">
                        <div class="kt-widget17__items">

                            <div class="kt-widget17__item">
                                <a href="{{ route('admin.activities.index') }}">
                                    <span class="kt-widget17__icon">
                                        <i class="fa fa-envelope-open-text"></i> </span>
                                    <span class="kt-widget17__subtitle">
                                        Number of Activities
                                    </span>
                                    <span class="kt-widget17__desc">
                                        {{ $activities }}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 my-2">
                    <div class="kt-widget17__stats" style="margin-bottom: 20px">
                        <div class="kt-widget17__items">

                            <div class="kt-widget17__item">
                                <a href="{{ route('admin.vedios.index') }}">
                                    <span class="kt-widget17__icon">
                                        <i class="fa fa-envelope-open-text"></i> </span>
                                    <span class="kt-widget17__subtitle">
                                        Number of Vedios
                                    </span>
                                    <span class="kt-widget17__desc">
                                        {{ $vedios }}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3 my-2">
                    <div class="kt-widget17__stats" style="margin-bottom: 20px">
                        <div class="kt-widget17__items">

                            <div class="kt-widget17__item">
                                <a href="{{ route('admin.programs.index') }}">
                                    <span class="kt-widget17__icon">
                                        <i class="fa fa-envelope-open-text"></i> </span>
                                    <span class="kt-widget17__subtitle">
                                        Number of Programs
                                    </span>
                                    <span class="kt-widget17__desc">
                                        {{ $programs }}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="kt-widget17__stats" style="margin-bottom: 20px">
                        <div class="kt-widget17__items">

                            <div class="kt-widget17__item">
                                <a href="{{ route('admin.projects.index') }}">
                                    <span class="kt-widget17__icon">
                                        <i class="fa fa-envelope-open-text"></i> </span>
                                    <span class="kt-widget17__subtitle">
                                        Number of Projects
                                    </span>
                                    <span class="kt-widget17__desc">
                                        {{ $projects }}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="kt-widget17__stats" style="margin-bottom: 20px">
                        <div class="kt-widget17__items">

                            <div class="kt-widget17__item">
                                <a href="{{ route('admin.brands.index') }}">
                                    <span class="kt-widget17__icon">
                                        <i class="fa fa-envelope-open-text"></i> </span>
                                    <span class="kt-widget17__subtitle">
                                        Number of Partners
                                    </span>
                                    <span class="kt-widget17__desc">
                                        {{ $partners }}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>
@endsection
