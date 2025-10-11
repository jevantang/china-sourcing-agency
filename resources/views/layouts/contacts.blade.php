<div id="contacts"></div>
<section class="st-bg">
    <div class="container st-py">
        <div class="row">
            <div class="col-md-6">
                <img src="/assets/images/contacts.png" alt="CompanyName Contacts" class="img-fluid">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="ms-3 ms-md-5 mt-5 mt-sm-0">
                    <h3 class="mb-4">{{ __('starteam.contact_us') }}</h3>
                    <div class="d-flex mt-4">
                        <div class="st-icon-color fs-5 fw-bold"><i class="bi bi-geo-alt"></i></div>
                        <div class="ms-3">
                            <p class="fs-5 fw-medium mb-1">{{ __('starteam.contact_offices') }}</p>
                            @foreach (config('app.addresses') as $address)
                                <p class="fw-light mb-1"><i class="bi bi-{{ $loop->index + 1 }}-circle"></i> {{ $address }}</p>
                            @endforeach
                        </div>
                    </div>
                    @if (config('app.telephone'))
                        <div class="d-flex mt-4">
                            <div class="st-icon-color fs-5 fw-bold"><i class="bi bi-telephone"></i></div>
                            <div class="ms-3">
                                <p class="fs-5 fw-medium mb-1">{{ __('starteam.contact_phone') }}</p>
                                <p class="fw-light mb-0">{{ config('app.telephone') }}</p>
                            </div>
                        </div>
                    @endif
                    @if (config('app.whatsApp'))
                        <div class="d-flex mt-4">
                            <div class="st-icon-color fs-5 fw-bold"><i class="bi bi-whatsapp"></i></div>
                            <div class="ms-3">
                                <p class="fs-5 fw-medium mb-1">{{ __('starteam.contact_whats_app') }}</p>
                                <p class="fw-light mb-0">{{ config('app.whatsApp') }}</p>
                            </div>
                        </div>
                    @endif
                    @if (config('app.wechat'))
                        <div class="d-flex mt-4">
                            <div class="st-icon-color fs-5 fw-bold"><i class="bi bi-wechat"></i></div>
                            <div class="ms-3">
                                <p class="fs-5 fw-medium mb-1">{{ __('starteam.contact_wechat') }}</p>
                                <p class="fw-light mb-0">{{ config('app.wechat') }}</p>
                            </div>
                        </div>
                    @endif
                    @if (config('app.email'))
                        <div class="d-flex mt-4">
                            <div class="st-icon-color fs-5 fw-bold"><i class="bi bi-envelope"></i></div>
                            <div class="ms-3">
                                <p class="fs-5 fw-medium mb-1">{{ __('starteam.contact_email') }}</p>
                                <p class="fw-light mb-0">{{ config('app.email') }}</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
