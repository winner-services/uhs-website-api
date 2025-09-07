<div class="topbar topbar__secondary d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="topbar__inner">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6">
                            <div class="topbar__list-wrapper">
                                <ul class="topbar__list">
                                    <li>
                                        <a href="tel:{{ optional($data)->phone }}">
                                            <i class="ph ph-phone-call"></i>
                                            {{ optional($data)->phone }}
                                        </a>
                                    </li>
                                    <li><a href="mailto:{{ optional($data)->email }}"><i
                                                class="ph ph-envelope-simple"></i>{{ optional($data)->email }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="topbar__items d-flex align-items-center justify-content-end flex-wrap">
                                <div class="social topbar__social-menu">
                                    <a href="{{ optional($data)->facebook }}" target="_blank" aria-label="share us on facebook"
                                        title="facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="{{ optional($data)->twitter }}" target="_blank" aria-label="share us on twitter"
                                        title="twitter">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="{{ optional($data)->linkedin }}" target="_blank" aria-label="share us on linkedin"
                                        title="linkedin">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                    <a href="{{ optional($data)->instagram }}" target="_blank" aria-label="share us on instagram"
                                        title="instagram">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                    <a href="{{ optional($data)->youtube }}" target="_blank" aria-label="share us on youtube"
                                        title="youtube">
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
