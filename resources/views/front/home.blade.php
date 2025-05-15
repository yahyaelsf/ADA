@extends('front.layouts')
@section('title', 'Home')
@section('content')
    <!--Start landing section -->
    <section class="landing">
        <div class="container">
            <div class="landing-up"></div>
            <div class="landing-content">
                <div class="left">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @isset($sliders)
                                @foreach ($sliders as $slider)
                                    <div class="swiper-slide">
                                        <img class="swiper-slide-image" src="{{ $slider->s_cover }}" alt="img" />
                                        <div class="slide-caption">
                                            <h2>{{ $slider->s_title }}</h2>
                                            <span>{{ $slider->dt_created_date->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                @endforeach

                            @endisset


                        </div>

                        <!-- Add Pagination (optional) -->
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="left-down">
                        <div class="left-down-content">
                            <h2>
                                More than a year of war brings disaster to the Agri sector.
                            </h2>
                            <p>
                                Severe food shortages due to the destruction of the
                                agricultural sector, which took the lives of people and
                                farmers into the unknown.
                            </p>
                        </div>
                        <div class="left-down-img">
                            <img src="{{ asset('front/images/img-2.jpg') }}" alt="Landing Image" />
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="right-top">
                        <p class="ellipsis-multiline">
                            To shed the light on the ongoing war on the Gaza Strip, the
                            agricultural sector was severely damaged, to say at least, it is
                            a disaster against the agricultural sector from the destruction
                            of all agricultural facilities and agricultural lands and
                            fields, as this affected all aspects of life for the Palestinian
                            people in the Gaza Strip, which led to the scarcity of crops and
                            high prices...
                        </p>
                        <div class="right-top-img-container">
                            <div class="overlay"></div>
                            <img src="{{ asset('front/images/img-7.jpg') }}"
                                alt="The war on Gaza and the agricultural sector disaster" />
                            <h2>The war on Gaza and the agricultural sector disaster</h2>
                        </div>
                    </div>
                    <div class="right-down">
                        <div class="right-down-img-container">
                            <img src="{{ asset('front/images/img-8.png') }}" alt="WFP" />
                        </div>
                        <div class="divider"></div>
                        <div class="right-down-content">
                            <h2>
                                Joint cooperation between the ‘Agri’ Association and the WFP
                            </h2>
                            <span>Feb. 4, 2023</span>
                            <div class="divider"></div>
                            <p>
                                In cooperation with the WFP, the Agricultural Association
                                continues to distribute food parcels to Palestinian families
                                in Deir al-Balah.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="landing-down"></div>
        </div>
    </section>
    <!--End landing section -->
    <!--Start  About us section -->
    <section>
        <div class="container">
            <div class="about-us">
                <div class="about-us-left">
                    <img src="{{ asset('front/images/about-us.jpg') }}" alt="" />
                </div>
                <div class="about-us-right">
                    <h2>THE AGRICULTURAL</h2>
                    <p>
                        The Developmental Agricultural Association is a non-profit,
                        non-governmental association, licensed as a charitable
                        organization according to Law of Charitable and Civil
                        Organizations Act No (1) of the year 2000 under No (7779). The
                        association was founded in the Middle Area, more specifically
                        Salqa Valley area in Deir El Balah city, the Gaza Strip, as a
                        neutral, civil organization that operates transparently to provide
                        services to the agricultural sector and all farmers of both
                        genders in their locations as its scope of work extends to outside
                        the middle governorate to the entirety of homeland.
                    </p>
                    <a href="" class="read-more">
                        <span>Read More</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--End About us section -->
    <!--Start  activities section -->
    <section>
        <div class="container">
            <div class="activities">
                <div class="activities-left">
                    <h2>Recent Activities</h2>
                    <div class="activities-cards">
                        @isset($activities)
                            @foreach ($activities as $activity)
                                <div class="activity-card">
                                    <div class="activity-img">
                                        <img src="{{ $activity->s_cover }}" alt="" />
                                    </div>
                                    <div class="activity-description">
                                        <span class="activity-data">{{ \Carbon\Carbon::parse($activity->dt_create_at)->format('d F, Y') }}</span>
                                        <h3 class="activity-title">
                                            {{ $activity->s_name }}
                                        </h3>
                                        <p>
                                            {{ $activity->s_description }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        @endisset


                    </div>
                </div>
                @isset($last_activity)
                    <div class="activities-right">
                        <div class="activity-img">
                            <img src="{{ $last_activity->s_cover }}" alt="" />
                        </div>
                        <div class="image-description">
                            <span>{{ \Carbon\Carbon::parse($last_activity->dt_create_at)->format('d F, Y') }}</span>
                            <p>
                                {{ $last_activity->s_name }}
                            </p>
                        </div>
                    </div>
                @endisset

            </div>
        </div>
    </section>
    <!--End activities section -->
    <!--Start Projects section -->
    @isset($projects)
        <section>
        <div class="container">
            <div class="projects">
                <h2>Explore Our Popular Project</h2>
                <div class="swiper-projects">
                    <div class="projects-cards swiper-wrapper">
                    @foreach($projects as $project)
                        <div class="project-card swiper-slide">
                            <div class="project-card-img">
                                <img src="{{ $project->s_cover }}" alt="" />
                            </div>
                            <h3>{{ $project->s_name }}</h3>
                            <p>{{ $project->s_description }}</p>
                        </div>
                    @endforeach

                    </div>

                    <!-- Navigation buttons -->
                    <div class="swiper-nav-top">
                        <div class="swiper-button-next custom-next"></div>
                        <div class="swiper-button-prev custom-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endisset

    <!--End Projects section -->
    <!--Start Media section -->
    <section>
        <div class="container">
            <div class="media">
                <div class="media-top">
                    <span class="par">Media</span>
                    <div>
                        <span></span>
                        <span></span>
                    </div>
                    <a href="{{ route('front.news') }}">
                        <span>View All</span>
                        <img src="{{ asset('front/images/Vector.png') }}" alt="" />
                    </a>
                </div>

                <div class="media-bottom">
                    <div class="media-bottom-left">
                        <div class="video-container">
                            <iframe src="{{ $last_vedio->s_link }}" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>
                        <h3>{{ $last_vedio->s_title }}</h3>
                        <span>{{ \Carbon\Carbon::parse($last_vedio->dt_create_at)->format('d F, Y') }}</span>
                    </div>
                    <div class="sep"></div>
                    <div class="media-bottom-right">
                    @foreach($vedios as $vedio)
                        <div class="video-cards">
                            <div class="video-card">
                                <div class="video-card-container">
                                    <iframe src="{{ $vedio->s_link }}"></iframe>
                                </div>

                                <div>
                                    <h3>
                                        {{ $vedio->s_title }}
                                    </h3>
                                    <span>{{ \Carbon\Carbon::parse($vedio->dt_create_at)->format('d F, Y') }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    </div>
                    <span></span>
                    <div></div>
                </div>
            </div>
        </div>
    </section>
    <!--End Media section -->

    <!--Start Partners section -->
    @isset($brands)
    <section class="partners-section">
        <h2>Our Partners</h2>
        <div class="container">
            <div class="partners">
                <div class="swiper-partners" dir="rtl">
                    <div class="partners-cards swiper-wrapper">
                    @foreach($brands as $brand)
                        <a href="#" class="partner-card swiper-slide">
                            <div class="partner-card-img">
                                <img src="{{ $brand->s_cover }}" alt="" />
                            </div>
                        </a>
                    @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>
    @endisset

    <!--End Partners section -->
    <!--Start announcement Section-->
    <section>
        <div class="announcement-container">
            <img src="{{ asset('front/images/announcement.png') }}" alt="" />
            <div class="announcement-content">
                <h2>Reclamation Of Agricultural Lands</h2>
                <span>Submit a request to reclaim agricultural land.</span>
                <a href="#" class="btn">Apply Online</a>
            </div>
        </div>
    </section>
    <!--End announcement Section-->
@endsection
