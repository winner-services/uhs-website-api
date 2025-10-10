@extends('home.master')
@section('content')
    <section class="common-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="common-banner__content text-center">
                        <h2 class="title-animation">Detail du project</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ '/' }}">Acceuil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Detail sur le projet
                </li>
            </ol>
        </nav>
        @include('pages.bannier.bannier')
    </section>

    <section class="team-details pt-120 pb-120">
        <div class="container">
            <div class="row gutter-30 align-items-center">
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="team-details__thumb" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="{{ asset('storage/' . optional($project)->image) }}" alt="Image">
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="team-details__content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="team-details__meta">
                            <div class="team-details__intro">
                                <h4 class="title-animation">Jason Farmer</h4>
                                <p class="designation">Volunteer</p>
                            </div>
                            <div class="social">
                                <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook"
                                    title="facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="https://vimeo.com/" target="_blank" aria-label="share us on vimeo" title="vimeo">
                                    <i class="fa-brands fa-vimeo-v"></i>
                                </a>
                                <a href="https://x.com/" target="_blank" aria-label="share us on twitter" title="twitter">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="https://www.linkedin.com/" target="_blank" aria-label="share us on linkedin"
                                    title="linkedin">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                       
                        <div class="team-details__list">
                            <ul>
                                <li><i class="icon-circle-check"></i>Best Quality Services</li>
                                <li><i class="icon-circle-check"></i>Time Saving</li>
                                <li><i class="icon-circle-check"></i>Meet the Deadlines</li>
                                <li><i class="icon-circle-check"></i>24/7 Customer Support</li>
                            </ul>
                        </div>
                        <div class="team-details__cta cta mt-40">
                            <a href="donate-us.html" aria-label="make a donation" title="make a donation"
                                class="btn--secondary" data-text="Donate With Me"> <span>Donate With Me</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="about-me" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <h4 class="title-animation">About Me</h4>
                        <p>This category focuses on the design construction of buildings and the This a category
                            focuses on the design and construction of buildings This category a focuses on the
                            design construction of buildings and the This a category of thfocuses on the design This
                            category focuses on the design construction of buildings and the This a category focuses
                            on the design and construction of buildings This category a focuses on the design
                            construction of buildings and the This a category of thfocuses on the design
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('pages.gallery.gallery2')
@endsection
