@extends('frontend.landing-pages.layouts.app')

@section('meta_title', $service->meta_title ?? $service->name)
@section('meta_description', $service->meta_description ?? '')
@section('meta_keyword', $service->meta_keyword ?? '')

@section('content')

    <style>
        /*================================
            GLOBAL
        =================================*/
        .service-hero,
        .service-detail-section {
            background: #032530;
        }

        /*================================
            HERO SECTION
        =================================*/
        .service-hero {
            position: relative;
            padding: 140px 0 90px;
            overflow: hidden;
            text-align: center;
        }

        .service-hero::before {
            content: '';
            position: absolute;
            inset: 0;

            background:
                linear-gradient(rgba(3, 37, 48, .92),
                    rgba(3, 37, 48, .96));

            background-size: cover;
            background-position: center;
        }

        .service-hero-content {
            position: relative;
            z-index: 2;
        }

        .service-hero-content h1 {
            color: #fff;
            font-size: 58px;
            line-height: 1.2;
            font-weight: 700;
            margin-bottom: 20px;
        }

        /*================================
            BREADCRUMB
        =================================*/
        .service-breadcrumb {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .service-breadcrumb a {
            color: #9ce7cb;
            text-decoration: none;
            transition: .3s;
        }

        .service-breadcrumb a:hover {
            color: #fff;
        }

        .service-breadcrumb span {
            color: rgba(255, 255, 255, .75);
        }

        /*================================
            SECTION
        =================================*/
        .service-detail-section {
            position: relative;
            padding: 90px 0;
            overflow: hidden;
        }

        .service-container {
            max-width: 1240px;
            margin: auto;
        }

        /*================================
            HEADING
        =================================*/
        .section-heading {
            text-align: center;
            margin-bottom: 55px;
        }

        .section-heading h2 {
            color: #fff;
            font-size: 42px;
            font-weight: 700;
            margin: 0;
        }

        /*================================
            CARD
        =================================*/
        .service-location-card {
            position: relative;
            height: 100%;
            border-radius: 22px;
            overflow: hidden;
            padding: 35px 25px;

            background:
                linear-gradient(180deg,
                    rgba(255, 255, 255, .05),
                    rgba(255, 255, 255, .02));

            border: 1px solid rgba(255, 255, 255, .08);

            backdrop-filter: blur(10px);

            transition: .4s ease;
        }

        .service-location-card::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 22px;
            padding: 1px;

            background:
                linear-gradient(135deg,
                    rgba(156, 231, 203, .25),
                    transparent,
                    rgba(255, 255, 255, .12));

            -webkit-mask:
                linear-gradient(#000 0 0) content-box,
                linear-gradient(#000 0 0);

            -webkit-mask-composite: xor;
        }

        .service-location-card:hover {
            transform: translateY(-10px);

            background:
                linear-gradient(180deg,
                    rgba(255, 255, 255, .08),
                    rgba(255, 255, 255, .03));

            box-shadow:
                0 20px 40px rgba(0, 0, 0, .25);
        }

        .service-location-card a {
            text-decoration: none;
            display: block;
            height: 100%;
        }

        /*================================
            ICON
        =================================*/
        .location-card-inner {
            text-align: center;
        }

        .location-card-inner .icon {
            width: 78px;
            height: 78px;
            margin: auto auto 25px;
            border-radius: 50%;

            background:
                rgba(255, 255, 255, .06);

            border: 1px solid rgba(255, 255, 255, .08);

            display: flex;
            align-items: center;
            justify-content: center;

            transition: .4s;
        }

        .location-card-inner .icon i {
            color: #9ce7cb;
            font-size: 28px;
        }

        .service-location-card:hover .icon {
            transform: rotateY(180deg);
        }

        /*================================
            TEXT
        =================================*/
        .location-card-inner h4 {
            color: #fff;
            font-size: 20px;
            line-height: 32px;
            font-weight: 600;
            margin: 0;
            transition: .3s;
        }

        .service-location-card:hover h4 {
            color: #9ce7cb;
        }

        /*================================
            EMPTY
        =================================*/
        .empty-state {
            color: rgba(255, 255, 255, .7);
            font-size: 18px;
            text-align: center;
            padding: 70px 0;
        }

        /*================================
            MOBILE
        =================================*/
        @media(max-width:991px) {

            .service-hero {
                padding: 120px 0 70px;
            }

            .service-hero-content h1 {
                font-size: 38px;
            }

            .section-heading h2 {
                font-size: 32px;
            }

        }
    </style>

    <!-- HERO SECTION -->
    <section class="service-hero">

        <div class="service-hero-content">

            <h1>{{ $service->name }}</h1>

            <div class="service-breadcrumb">

                <a href="#home">
                    Home
                </a>

                <span>/</span>

                <a href="#services">
                    Services
                </a>

                <span>/</span>

                <span>{{ $service->name }}</span>

            </div>

        </div>

    </section>

    <!-- SERVICE DETAIL SECTION -->
    <section class="service-detail-section">

        <div class="service-container">

            <div class="section-heading">

                <h2>
                    {{ $service->name }} Listings
                </h2>

            </div>

            <div class="row">

                @forelse($pages as $page)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
                        <a href="{{ url($page->url_slug) }}">
                            <div class="service-location-card">
                                <div class="location-card-inner">

                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>

                                    <h4>
                                        {{ $page->name ?? $page->category }}
                                    </h4>

                                </div>
                            </div>
                        </a>
                    </div>

                @empty

                    <div class="col-12">

                        <p class="empty-state">
                            No related projects found.
                        </p>

                    </div>
                @endforelse

            </div>

        </div>

    </section>

@endsection
