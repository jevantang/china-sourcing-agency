@extends('layouts.layout')

@section('title', __('starteam.service_china_sourcing_text'))
@section('keywords', __('starteam.china_sourcing_keywords'))
@section('description', __('starteam.china_sourcing_description'))

@section('content')
    <section class="service-hero">
        <div class="container text-center">
            <div class="m-auto w-75">
                <h1 class="fw-semibold animate__animated animate__slideInDown">{{ __('starteam.china_sourcing_hero_text') }}</h1>
                <p class="fs-3 mt-5 fw-normal animate__animated animate__slideInDown">{{ __('starteam.china_sourcing_hero_tagline') }}</p>
            </div>

            <div id="intro"></div>
        </div>
    </section>

    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="bg-body rounded h-100 border-bottom border-warning-subtle border-5 shadow px-4 py-3">
                        <div class="fs-1 text-dark-emphasis mb-2"><i class="bi bi-crosshair"></i></div>
                        <h3 class="fs-5 text-dark-emphasis">{{ __('starteam.china_sourcing_intro_1_title') }}</h3>
                        <p class="fw-light">{{ __('starteam.china_sourcing_intro_1_description') }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="bg-body rounded h-100 border-bottom border-success-subtle border-5 shadow px-4 py-3">
                        <div class="fs-1 text-dark-emphasis mb-2"><i class="bi bi-card-checklist"></i></div>
                        <h3 class="fs-5 text-dark-emphasis">{{ __('starteam.china_sourcing_intro_2_title') }}</h3>
                        <p class="fw-light">{{ __('starteam.china_sourcing_intro_2_description') }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="bg-body rounded h-100 border-bottom border-danger-subtle border-5 shadow px-4 py-3">
                        <div class="fs-1 text-dark-emphasis mb-2"><i class="bi bi-shield-check"></i></div>
                        <h3 class="fs-5 text-dark-emphasis">{{ __('starteam.china_sourcing_intro_3_title') }}</h3>
                        <p class="fw-light">{{ __('starteam.china_sourcing_intro_3_description') }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="bg-body rounded h-100 border-bottom border-primary-subtle border-5 shadow px-4 py-3">
                        <div class="fs-1 text-dark-emphasis mb-2"><i class="bi bi-person"></i></div>
                        <h3 class="fs-5 text-dark-emphasis">{{ __('starteam.china_sourcing_intro_4_title') }}</h3>
                        <p class="fw-light">{{ __('starteam.china_sourcing_intro_4_description') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="value"></div>
    </section>

    <section>
        <div class="container st-py">
            <div class="row">
                <div class="col-md-6 pe-3 pe-md-5">
                    <img src="/assets/images/shopping.png" alt="China Sourcing Agent" class="img-fluid">
                </div>
                <div class="col-md-6 px-4 px-md-0">
                    <h3 class="st-title mt-4 mt-sm-0 mt-xl-4 mb-4">{{ __('starteam.china_sourcing_value_title') }}</h3>
                    <h4 class="mt-4"><i class="bi bi-graph-down-arrow text-success me-2"></i> {{ __('starteam.china_sourcing_value_1_title') }}</h4>
                    <p class="text-secondary fw-light fs-5">{{ __('starteam.china_sourcing_value_1_description') }}</p>
                    <h4 class="mt-4"><i class="bi bi-crosshair text-success me-2"></i> {{ __('starteam.china_sourcing_value_2_title') }}</h4>
                    <p class="text-secondary fw-light fs-5">{{ __('starteam.china_sourcing_value_2_description') }}</p>
                    <h4 class="mt-4"><i class="bi bi-clipboard-check text-success me-2"></i> {{ __('starteam.china_sourcing_value_3_title') }}</h4>
                    <p class="text-secondary fw-light fs-5">{{ __('starteam.china_sourcing_value_3_description') }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-4">
        <div class="container st-pb">
            <div class="row">
                <div class="col-md-6 order-md-1 ps-3 ps-md-5">
                    <img src="/assets/images/settings.png" alt="First-class Service Team Support" class="img-fluid">
                </div>
                <div class="col-md-6 order-md-0 px-4 px-md-0">
                    <h3 class="st-title mt-4 mt-sm-0 mt-xl-4 mb-4">{{ __('starteam.china_sourcing_support_title') }}</h3>
                    <p class="text-secondary fw-light fs-5">{{ __('starteam.china_sourcing_support_content') }}</p>
                    <p class="text-secondary fw-light fs-5">{{ __('starteam.china_sourcing_support_content_2') }}</p>
                    <p class="text-secondary fw-light fs-5">{!! __('starteam.china_sourcing_support_content_3') !!}</p>
                </div>
            </div>

            <div id="services"></div>
        </div>
    </section>

    <section class="st-bg">
        <div class="container st-py">
            <h3 class="st-title mt-0 mb-5">{{ __('starteam.china_sourcing_services_title') }}</h3>
            <div class="row px-2">
                <div class="col-md-6 mb-4">
                    <h4 class="fs-5 text-body-emphasis">{{ __('starteam.china_sourcing_services_1_title') }}</h4>
                    <p>{{ __('starteam.china_sourcing_services_1_description') }}</p>
                </div>
                <div class="col-md-6 mb-4">
                    <h4 class="fs-5 text-body-emphasis">{{ __('starteam.china_sourcing_services_2_title') }}</h4>
                    <p>{{ __('starteam.china_sourcing_services_2_description') }}</p>
                </div>
                <div class="col-md-6 mb-4">
                    <h4 class="fs-5 text-body-emphasis">{{ __('starteam.china_sourcing_services_3_title') }}</h4>
                    <p>{{ __('starteam.china_sourcing_services_3_description') }}</p>
                </div>
                <div class="col-md-6 mb-4">
                    <h4 class="fs-5 text-body-emphasis">{{ __('starteam.china_sourcing_services_4_title') }}</h4>
                    <p>{{ __('starteam.china_sourcing_services_4_description') }}</p>
                </div>
            </div>
        </div>
    </section>

    <div id="about"></div>
    <section class="cc-about">
        <div class="container st-py">
            <h3 class="text-center fs-1 fw-semibold lh-base">{{ __('starteam.china_sourcing_about_title') }}</h3>
            <div class="mt-5 fs-4 mx-3 mx-lg-5">
                <p class="text-center">{!! __('starteam.china_sourcing_about_tagline') !!}</p>
                <p class="mt-4">{{ __('starteam.china_sourcing_about_content') }}</p>
            </div>
        </div>
    </section>
@endsection
