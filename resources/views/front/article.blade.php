@extends('front.layouts')
@push('css')
    <link rel="stylesheet" href="{{ asset('front/css/articleStyle.css') }}" />
@endpush
@section('title', 'Articles')
@section('content')
    <div class="arrow-page">Home <span> > Articles </span></div>
    <section class="cover-section" style=" background-image: url('{{ asset('front/images/articles-section1.jpg') }}');">
    </section>
    @isset($first_article)
        <section class="section2">
            <div class="content">
                <h2>{{ $first_article->s_name }}</h2>
                <p>
                    {{ $first_article->s_description }}
                </p>
                <div class="info">
                    <span> {{ \Carbon\Carbon::parse($first_article->dt_create_at)->format('d F, Y') }}</span>
                    <span><a href="#">Read more</a></span>
                </div>
            </div>
            <div class="image">
                <img src="{{ $first_article->s_cover }}" alt="Image Description" />
            </div>
        </section>
    @endisset

    <section class="image-cards">
        @isset($first_three_articles)
            <div class="card-col1">
                @foreach($first_three_articles as $first_three_article)
                    <div class="card">
                        <div class="img-part">
                            <img src="{{ $first_three_article->s_cover }}" alt="" />
                        </div>
                        <div class="content-part">
                            <h3>{{ $first_three_article->s_name }}</h3>
                            <p>
                                {{ $first_three_article->s_description }}
                            </p>
                            <div class="info">
                                <span> {{ \Carbon\Carbon::parse($first_three_article->dt_create_at)->format('d F, Y') }}</span>
                                <span><a href="#">Read More</a></span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endisset
        @isset($sec_three_articles)
            <div class="card-col1">
                @foreach ($sec_three_articles as $sec_three_article)
                    <div class="card">
                        <div class="img-part">
                            <img src="{{ $sec_three_article->s_cover }}" alt="" />
                        </div>
                        <div class="content-part">
                            <h3>{{ $sec_three_article->s_name }}</h3>
                            <p>
                                {{ $sec_three_article->s_description }}
                            </p>
                            <div class="info">
                                <span> {{ \Carbon\Carbon::parse($sec_three_article->dt_create_at)->format('d F, Y') }}</span>
                                <span><a href="#">Read More</a></span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endisset

    </section>
    <div class="pagination">
        <a href="#" class="page1">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <span>...</span>
        <a href="#">9</a>
        <a href="#" class="next">Next > </a>
    </div>
    <div class="whatisLorem">
        <div class="content-left">
            <h2>{{ $last_article->s_name }}</h2>
            <p>
                {{ $last_article->s_description }}
            </p>
            <div class="info">
                <span> {{ \Carbon\Carbon::parse($last_article->dt_create_at)->format('d F, Y') }}</span>
                <span><a href="#">Read more</a></span>
            </div>
        </div>
        <div class="content-right">
            <img src="{{ $last_article->s_cover }}" alt="Placeholder Image" />
        </div>
    </div>
@endsection
