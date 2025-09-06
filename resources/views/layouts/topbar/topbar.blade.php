<div class="topbar topbar__secondary d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="topbar__inner">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-6">
                                    <div class="topbar__list-wrapper">
                                        <ul class="topbar__list">
                                            <li><a href="tel:{{ $data->phone }}"><i class="ph ph-phone-call"></i>
                                                   {{ $data->phone }}</a>
                                            </li>
                                            <li><a href="mailto:{{ $data->email }}"><i
                                                        class="ph ph-envelope-simple"></i>{{ $data->email }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="topbar__items d-flex align-items-center justify-content-end flex-wrap">
                                        <div class="social topbar__social-menu">
                                            <a href="{{ $data->facebook }}" target="_blank"
                                                aria-label="share us on facebook" title="facebook">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                            <a href="{{ $data->twitter }}" target="_blank" aria-label="share us on twitter"
                                                title="twitter">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                            <a href="{{ $data->linkedin }}" target="_blank"
                                                aria-label="share us on linkedin" title="linkedin">
                                                <i class="fa-brands fa-linkedin-in"></i>
                                            </a>
                                            <a href="{{ $data->instagram }}" target="_blank"
                                                aria-label="share us on instagram" title="instagram">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                             <a href="{{ $data->youtube }}" target="_blank"
                                                aria-label="share us on youtube" title="youtube">
                                                <i class="fa-brands fa-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
