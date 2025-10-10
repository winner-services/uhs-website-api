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
                                <h4 class="title-animation">UHS Asbl</h4>
                            </div>
                            <div class="social">
                                <a href="{{ optional($data)->facebook }}" target="_blank" aria-label="share us on facebook"
                                    title="facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="{{ optional($data)->twitter }}" target="_blank" aria-label="share us on twitter" title="twitter">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="{{ optional($data)->linkedin }}" target="_blank" aria-label="share us on linkedin"
                                    title="linkedin">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="{{ optional($data)->instagram }}" target="_blank" aria-label="share us on linkedin"
                                    title="linkedin">
                                    <i class="fa-brands fa-instagram"></i>
                                </a><a href="{{ optional($data)->youtube }}" target="_blank" aria-label="share us on youtube"
                                    title="youtube">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </div>
                        </div>

                        <div class="team-details__list">
                            <ul>
                                <li><i class="icon-circle-check"></i>L’Unités: l’aide humanitaire est ouvert à tous et UHS
                                    étend ses actions dans la totalité du territoire.</li>
                                <li><i class="icon-circle-check"></i>L’Honnêteté : UHS est intègre et digne de confiance
                                    ainsi responsable de ses comportement, actes et résultats.</li>
                                <li><i class="icon-circle-check"></i>Le Service : UHS est responsable envers les personnes à
                                    qui il offre ses services.</li>
                            </ul>
                        </div>
                        <div class="team-details__cta cta mt-40">
                            <a href="{{ route('domaine.index') }}" aria-label="make a donation" title="make a donation"
                                class="btn--secondary" data-text="Faire un don"> <span>Faire un don</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="about-me" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <h4 class="title-animation">{{ $project->title }}</h4>
                        <p>{{ $project->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('pages.gallery.gallery2')
@endsection
