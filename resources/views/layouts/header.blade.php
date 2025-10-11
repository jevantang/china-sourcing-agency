<nav class="navbar navbar-expand-lg fixed-top" style="background-color:#FFF8EE;">
    <div class="container">
        <div class="navbar-brand d-flex align-items-center" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavigator" aria-controls="offcanvasNavigator">
            <img src="/assets/images/logo.png" alt="CompanyName" width="86" height="60">
            <span class="fs-2 fw-semibold st-title me-1">CompanyName</span>

            <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill ms-2 mt-1 animate__animated animate__bounce">{{ __('starteam.service_china_sourcing_text') }}</span>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-3 mt-lg-0 ps-4 ps-lg-0">
                <li class="nav-item me-0 me-lg-3">
                    <a class="nav-link" href="#intro">{{ __('starteam.nav_intro') }}</a>
                </li>
                <li class="nav-item me-0 me-lg-3">
                    <a class="nav-link" href="#value">{{ __('starteam.nav_value') }}</a>
                </li>
                <li class="nav-item me-0 me-lg-3">
                    <a class="nav-link" href="#services">{{ __('starteam.nav_services') }}</a>
                </li>
                <li class="nav-item me-0 me-lg-3">
                    <a class="nav-link" href="#about">{{ __('starteam.nav_about') }}</a>
                </li>
                <li class="nav-item me-0 me-lg-3">
                    <a class="nav-link" href="#contacts">{{ __('starteam.nav_contacts') }}</a>
                </li>
                <li class="dropdown ms-0 ms-lg-4 my-3 my-lg-0">
                    <button class="btn btn-outline-dark btn-sm mt-1 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-translate"></i>
                        {{ $currentLocaleName }}
                    </button>
                    <ul class="dropdown-menu">
                        @foreach(config('app.locales') as $code => $name)
                            <li>
                                <a class="dropdown-item @if ($code == App::getLocale()) active @endif" href="{{ LaravelLocalization::getLocalizedURL($code) }}" hreflang="{{ str_replace('zh-h', 'zh-H', $code) }}">
                                    {{ $name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
