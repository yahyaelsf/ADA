@extends('front.layouts')
@push('css')
  <link rel="stylesheet" href="{{ asset('front/css/news.css') }}" />
@endpush
@section('title', 'Vision')
@section('content')
    <div class="arrow-page">Home <span> > News </span></div>
    <section class="cover-section" style="background-image: url('{{ asset("front/images/News-background.jpg") }}');"></section>
    <section class="video-section">
        <div class="left-section">
            <div class="rectangle"></div>
            <h2>Latest Videos</h2>
        </div>
        <div class="right-section">
            <div class="arrow left-arrow">&lt;</div>
            <div class="arrow right-arrow">&gt;</div>
        </div>
    </section>a

    <section class="image-section ">
        <div class="left-section">
            <div class="image-container">
                </head>

                <body>

                    <div class="video-thumbnail-container">
                        <img src="{{ asset('front/images/NewsBCGVideo.jpg') }}" alt="Video Thumbnail">
                        <div class="pulse-ring"></div>
                        <div class="play-button-wrapper" onclick="playVideo()">
                            <div class="play-arrow"></div>
                        </div>
                    </div>

                    <div class="content-overlay">
                        <div class="image-info">
                            <h3 class="inline-description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                            <p class="lorem">
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi. </p>
                        </div>
                    </div>
            </div>
        </div>


        <div class="right-section">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('front/images/News-section2Right4.jpg') }}" alt="Card Image" />
                </div>
                <div class="card-content">
                    <h3>Lorem Ipsum Dolor Sit</h3>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua."</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('front/images/News-section2Right4.jpg') }}" alt="Card Image" />
                </div>
                <div class="card-content">
                    <h3>Lorem Ipsum Dolor Sit</h3>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua."</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('front/images/News-section2Right4.jpg') }}" alt="Card Image" />
                </div>
                <div class="card-content">
                    <h3>Lorem Ipsum Dolor Sit</h3>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua."</p>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('front/images/News-section2Right4.jpg') }}" alt="Card Image" />
                </div>
                <div class="card-content">
                    <h3>Lorem Ipsum Dolor Sit</h3>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua."</p>
                </div>
            </div>
        </div>
    </section>


    <section class="image-section">
        <div class="image-container">

            <div class="video-thumbnail-container">
                <img src="{{ asset('front/images/NewsBCGVideo.jpg') }}" alt="Video Thumbnail">
                <div class="pulse-ring"></div>
                <div class="play-button-wrapper" onclick="playVideo()">
                    <div class="play-arrow"></div>
                </div>
            </div>


            <div class="image-info">
                <p class="date">20 Sep 2024</p>
                <p class="inline">"Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <p class="description">
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                </p>
            </div>
        </div>
        <div class="image-container">

            </head>

            <body>

                <div class="video-thumbnail-container">
                    <img src="{{ asset('front/images/NewsBCGVideo.jpg') }}" alt="Video Thumbnail">
                    <div class="pulse-ring"></div>
                    <div class="play-button-wrapper" onclick="playVideo()">
                        <div class="play-arrow"></div>
                    </div>
                </div>



                <div class="image-info">
                    <p class="date">20 Sep 2024</p>
                    <p class="inline">"Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <p class="description">
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                    </p>
                </div>
        </div>
        <div class="image-container">

            </head>

            <body>

                <div class="video-thumbnail-container">
                    <img src="{{ asset('front/images/NewsBCGVideo.jpg') }}" alt="Video Thumbnail">
                    <div class="pulse-ring"></div>
                    <div class="play-button-wrapper" onclick="playVideo()">
                        <div class="play-arrow"></div>
                    </div>
                </div>


                <div class="image-info">
                    <p class="date">20 Sep 2024</p>
                    <p class="inline">"Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <p class="description">
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                    </p>
                </div>
        </div>
        <div class="image-container">

            </head>

            <body>

                <div class="video-thumbnail-container">
                    <img src="{{ asset('front/images/NewsBCGVideo.jpg') }}" alt="Video Thumbnail">
                    <div class="pulse-ring"></div>
                    <div class="play-button-wrapper" onclick="playVideo()">
                        <div class="play-arrow"></div>
                    </div>
                </div>


                <div class="image-info">
                    <p class="date">20 Sep 2024</p>
                    <p class="inline">"Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <p class="description">
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                    </p>
                </div>
        </div>

    </section>

    <div class="pagination">
        <a href="#" class="page1">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <span>...</span>
        <a href="#">9</a>
        <a href="#" class="next">Next > </a>

    </div>
@endsection
