@extends('home.master')
@section('content')
    @include('layouts.banner.banner')
    <!-- ==== partner section start ==== -->
    @include('home.partner')
    <!-- ==== / partner section end ==== -->
    <!-- ==== about section start ==== -->
    <section class="about-area about-area-alt pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center gutter-40">
                <div class="col-12 col-lg-5 col-xl-6">
                    <div class="about__thumb">
                        <div class="about__thumb-big">
                            <img src="{{ asset('storage/' . optional($data)->image1) }}" alt="Image" data-aos="fade-right"
                                data-aos-duration="1000">
                            <div class="video-btn-wrapper">
                                <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank" title="video Player"
                                    class="open-video-popup">
                                    <i class="fa-solid fa-play"></i>
                                </a>
                            </div>
                        </div>
                        <div class="about__thumb-sm">
                            <img src="{{ asset('storage/' . optional($data)->image2) }}" alt="Image" data-aos="fade-left"
                                data-aos-duration="1000" data-aos-delay="100">
                            <div class="about__thumb-sm__content" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="200">
                                <div class="about__thumb-sm__content-counter">
                                    <h2><span class="odometer"
                                            data-odometer-final="{{ optional($data)->experience }}"></span><span>+</span>
                                    </h2>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42"
                                        viewBox="0 0 42 42" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.6317 12.3421L20.9825 7L19.3684 12.3053H14L18.3509 15.621L16.6667 21L21.0175 17.6842L25.3684 21L23.6491 15.6579L28 12.3421H22.6317Z"
                                            fill="#00C2FF" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.82123 0H34.1788V2.60708H42V11.8752C42 14.3333 41.0235 16.6907 39.2855 18.4288C37.8683 19.8459 36.0395 20.7567 34.0802 21.0448C33.7921 23.0042 32.8814 24.8329 31.4641 26.25C29.7598 27.9543 27.4601 28.9264 25.0541 28.9636V32.7318C25.0541 33.0396 25.1762 33.3347 25.3938 33.5521C25.6115 33.7698 25.9066 33.892 26.2141 33.892C27.6351 33.892 28.9977 34.4564 30.0024 35.4611C31.0072 36.4658 31.5718 37.8287 31.5718 39.2494V42H10.4283V39.2494C10.4283 37.8287 10.9928 36.4658 11.9975 35.4611C13.0022 34.4564 14.3649 33.892 15.7859 33.892C16.0935 33.892 16.3886 33.7698 16.6062 33.5521C16.8238 33.3347 16.946 33.0396 16.946 32.7318V28.9636C14.5398 28.9264 12.2401 27.9543 10.5358 26.25C9.11868 24.8329 8.20789 23.0042 7.9198 21.0448C5.96043 20.7567 4.13168 19.8459 2.71458 18.4288C0.976454 16.6907 0 14.3333 0 11.8752V2.60708H7.82123V0ZM10.7151 2.89384V19.6965C10.7151 21.387 11.3867 23.0083 12.5821 24.2038C13.7775 25.3993 15.3988 26.0708 17.0894 26.0708H19.8398V32.7318C19.8398 33.8069 19.4127 34.8381 18.6525 35.5985C17.8922 36.3587 16.861 36.7859 15.7859 36.7859C15.1325 36.7859 14.5058 37.0453 14.0438 37.5075C13.6156 37.9356 13.3614 38.505 13.3263 39.1062H28.6737C28.6388 38.505 28.3843 37.9356 27.9562 37.5075C27.4942 37.0453 26.8675 36.7859 26.2141 36.7859C25.139 36.7859 24.1078 36.3587 23.3476 35.5985C22.5872 34.8381 22.1602 33.8069 22.1602 32.7318V26.0708H24.9106C26.6011 26.0708 28.2225 25.3993 29.4179 24.2038C30.6134 23.0083 31.285 21.387 31.285 19.6965V2.89384H10.7151ZM7.82123 5.50093H2.89384V11.8752C2.89384 13.5658 3.56543 15.1871 4.76083 16.3826C5.60901 17.2307 6.67161 17.8152 7.82123 18.0832V5.50093ZM34.1788 18.0832V5.50093H39.1062V11.8752C39.1062 13.5658 38.4346 15.1871 37.2391 16.3826C36.391 17.2307 35.3283 17.8152 34.1788 18.0832Z"
                                            fill="#04009A" />
                                    </svg>
                                </div>
                                <p>Années d'expérience</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 col-xl-6">
                    <div class="about__content">
                        <div class="section__header">
                            <span>Soutenir notre cause ensemble</span>
                            <h2 class="title-animation">Soutenez notre mission et faites une différence</h2>
                            <p>{{ Str::limit(optional($data)->description, 250) }}
                            </p>
                        </div>
                        <hr class="divider">
                        <div class="about__content-inner" data-aos="fade-up" data-aos-duration="1000">
                            <div class="help__content-list">
                                <ul>
                                    <li><i class="fa-regular fa-circle-check"></i> L’Unités: l’aide humanitaire est ouvert à
                                        tous et UHS
                                        étend ses actions dans la totalité du territoire;</li>
                                    <li><i class="fa-regular fa-circle-check"></i> L’Honnêteté : UHS est intègre et digne de
                                        confiance ainsi
                                        responsable de ses comportement, actes et résultats;
                                    </li>
                                    <li><i class="fa-regular fa-circle-check"></i> Le Service : UHS est responsable envers
                                        les personnes à
                                        qui il offre ses services,</li>
                                </ul>
                            </div>
                            <div class="about__content-inner__cta mt-40" data-aos="fade-up" data-aos-duration="1000">
                                <div class="about__content-inner__btn">
                                    <a href="{{ route('about.details') }}" class="btn--secondary"
                                        data-text="En savoir plus sur nous"><span>En savoir plus sur nous</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / about section end ==== -->
    <!-- ==== cause slider section start ==== -->
    <section class="cause pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-5">
                    <div class="section__header text-center mb-60" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="title-animation">Nos domaines d'intervention</h2>
                        <div class="icon-thumb justify-content-center">
                            <div class="icon-thumb-single">
                                <span></span>
                                <span></span>
                            </div>
                            <i class="icon-donation"></i>
                            <div class="icon-thumb-single">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gutter-30">
                @foreach ($domaine as $item)
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="cause__slider-inner" data-aos="fade-up" data-aos-duration="1000">
                            <div class="cause__slider-single van-tilt">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="Image">
                                    </a>
                                    <div class="tag">
                                        <a href="#">{{ $item->category }}</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h6><a href="#">{{ $item->title }}</a></h6>
                                    <p>{{ Str::limit(optional($data)->description, 80) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="mt-60 text-center">
                        <a href="{{ route('domaine.index') }}" data-text="Tout explorer" class="btn--secondary"><span>Tout
                                explorer</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="spade">
            <img src="assets/images/help/spade.png" alt="Image">
        </div>
    </section>
    <!-- ==== / cause slider section end ==== -->
    <!-- ==== testimonial section start ==== -->
    <section class="testimonial-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-5">
                    <div class="section__header text-center mb-60" data-aos="fade-up" data-aos-duration="1000">
                        <span>Soutenir notre cause ensemble</span>
                        <h2 class="title-animation">Les commentaires impressionnants</h2>
                        <div class="icon-thumb justify-content-center">
                            <div class="icon-thumb-single">
                                <span></span>
                                <span></span>
                            </div>
                            <i class="icon-donation"></i>
                            <div class="icon-thumb-single">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-xl-12">
                    <div class="testimonial__inner">
                        <div class="testimonial__inner-wrapper">
                            <div class="testimonial__slider swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($temoignage as $temoignages)
                                        <div class="swiper-slide">
                                            <div class="testimonial__slider-single">
                                                <div class="row align-items-center gutter-40">

                                                    <div class="col-12 col-lg-10 col-xl-10">
                                                        <div class="testimonial__slider-content">
                                                            <div class="review">
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                                <i class="fa-solid fa-star"></i>
                                                            </div>
                                                            <p>{{ $temoignages->description }}
                                                            </p>
                                                            <div class="testimonial__cta">
                                                                <div class="quote-icon">
                                                                    <i class="fa-solid fa-quote-right"></i>
                                                                </div>
                                                                <div class="testimonial__cta-content">
                                                                    <span>{{ $temoignages->function }}</span>
                                                                    <h4>{{ $temoignages->name }}</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="slider-navigation">
                            <button type="button" aria-label="prev slide" title="prev slide"
                                class="prev-testimonial slider-btn">
                                <i class="fa-solid fa-angle-left"></i>
                            </button>
                            <button type="button" aria-label="next slide" title="next slide"
                                class="next-testimonial slider-btn slider-btn-next">
                                <i class="fa-solid fa-angle-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / testimonial section end ==== -->
    <!-- ==== community section start ==== -->
    <section class="community pt-120">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-xl-7">
                    <div class="section__header mb-55" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title">Commencez à faire des dons aux pauvres</span>
                        <h2 class="title-animation">Rejoignez la communauté.
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="community-bg">
            <img src="{{ asset('assets/images/banner/banner-one-bg.jpg') }}" alt="Image" class="parallax-image">
        </div>
        <div class="spade">
            <img src="{{ asset('assets/images/community/spade.png') }}" alt="Image" class="base-img">
        </div>
    </section>
    <!-- ==== / community section end ==== -->
    <!-- ==== event section start ==== -->
    <section class="explore-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-5">
                    <div class="section__header text-center mb-55" data-aos="fade-up" data-aos-duration="1000">
                        <span>Rejoignez-nous pour des expériences passionnantes</span>
                        <h2 class="title-animation">Événements et activités</h2>
                        <div class="icon-thumb justify-content-center">
                            <div class="icon-thumb-single">
                                <span></span>
                                <span></span>
                            </div>
                            <i class="icon-donation"></i>
                            <div class="icon-thumb-single">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="explore__wrapper">
                        @foreach ($event as $item)
                            <div class="explore__single" data-aos="fade-up" data-aos-duration="1000">
                                <div class="thumb">
                                    <a href="{{ route('event.details', ['id' => $item->id]) }}">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="Image">
                                    </a>
                                </div>
                                <a href="{{ route('event.details', ['id' => $item->id]) }}" class="arr">
                                    <i class="fa-solid fa-arrow-up"></i>
                                </a>
                                <div class="content">
                                    <p>{{ $item->date }}</p>
                                    <h5><a
                                            href="{{ route('event.details', ['id' => $item->id]) }}">{{ $item->title }}</a>
                                    </h5>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- Pagination --}}
            <div class="row">
                <div class="col-12">
                    <div class="pagination-wrapper mt-60" data-aos="fade-up" data-aos-duration="1000">
                        <ul class="pagination main-pagination">

                            {{-- Lien vers la page précédente --}}
                            @if ($event->onFirstPage())
                                <li class="disabled"><button><i class="fa-solid fa-angles-left"></i></button></li>
                            @else
                                <li><a href="{{ $event->previousPageUrl() }}"><i class="fa-solid fa-angles-left"></i></a>
                                </li>
                            @endif

                            {{-- Les numéros de pages --}}
                            @foreach ($event->getUrlRange(1, $event->lastPage()) as $page => $url)
                                @if ($page == $event->currentPage())
                                    <li><a href="{{ $url }}" class="active">{{ $page }}</a></li>
                                @else
                                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                            {{-- Lien vers la page suivante --}}
                            @if ($event->hasMorePages())
                                <li><a href="{{ $event->nextPageUrl() }}"><i class="fa-solid fa-angles-right"></i></a>
                                </li>
                            @else
                                <li class="disabled"><button><i class="fa-solid fa-angles-right"></i></button></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / event section end ==== -->
    <!-- ==== counter section start ==== -->
    <section class="counter-area count-alt">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="counter__inner">
                        <div class="row gutter-40">
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="counter__single">
                                    <div class="counter__single-icon">
                                        <div class="counter__single-icon__inner">
                                            <i class="icon-support-hand"></i>
                                        </div>
                                    </div>
                                    <div class="service__counter-single-content">
                                        <h3><span class="odometer" data-odometer-final="{{ $countTeam }}"></span>
                                        </h3>
                                        <p>Membres d'Equipe</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="counter__single">
                                    <div class="counter__single-icon">
                                        <div class="counter__single-icon__inner">
                                            <i class="icon-review"></i>
                                        </div>
                                    </div>
                                    <div class="service__counter-single-content">
                                        <h3><span class="odometer" data-odometer-final="{{ $countMessage }}"></span>
                                        </h3>
                                        <p>Messages</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="counter__single">
                                    <div class="counter__single-icon">
                                        <div class="counter__single-icon__inner">
                                            <i class="icon-support-hand"></i>
                                        </div>
                                    </div>
                                    <div class="service__counter-single-content">
                                        <h3><span class="odometer" data-odometer-final="{{ $countPartner }}"></span>
                                        </h3>
                                        <p>Partenaires</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="counter__single">
                                    <div class="counter__single-icon">
                                        <div class="counter__single-icon__inner">
                                            <i class="icon-documents"></i>
                                        </div>
                                    </div>
                                    <div class="service__counter-single-content">
                                        <h3><span class="odometer" data-odometer-final="800"></span>
                                        </h3>
                                        <p>Projets</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / counter section end ==== -->
    <!-- ==== team section start ==== -->
    <section class="team-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-5">
                    <div class="section__header text-center mb-60" data-aos="fade-up" data-aos-duration="1000">
                        <span>Soutenir notre cause ensemble</span>
                        <h2 class="title-animation">Les membres de notre équipe dévouée</h2>
                        <div class="icon-thumb justify-content-center">
                            <div class="icon-thumb-single">
                                <span></span>
                                <span></span>
                            </div>
                            <i class="icon-donation"></i>
                            <div class="icon-thumb-single">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="team-two__inner">
                        <div class="team-two-slider swiper">
                            <div class="swiper-wrapper">
                                @foreach ($team as $item)
                                    <div class="swiper-slide">
                                        <div class="team__single">
                                            <div class="thumb-wrapper">
                                                <div class="thumb">
                                                    <img src="{{ asset('storage/' . $item->image) }}" alt="Image">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none">
                                                        <circle cx="150" cy="150" r="130"
                                                            stroke-linecap="round" />
                                                    </svg>
                                                </div>
                                                <div class="social">
                                                    <a href="{{ $item->facebook }}" target="_blank"
                                                        aria-label="share us on facebook" title="facebook">
                                                        <i class="fa-brands fa-facebook-f"></i>
                                                    </a>
                                                    <a href="{{ $item->twitter }}" target="_blank"
                                                        aria-label="share us on twitter" title="twitter">
                                                        <i class="fa-brands fa-twitter"></i>
                                                    </a>
                                                    <a href="{{ $item->whatsapp }}" target="_blank"
                                                        aria-label="share us on whatsapp" title="linkedin">
                                                        <i class="fa-brands fa-whatsapp"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span>{{ $item->title }}</span>
                                                <h6><a href="team-details.html">{{ $item->name }}</a></h4>
                                                    <p><a href="tel:{{ $item->phone }}"><i class="ph ph-phone-call"></i>
                                                            Tel: {{ $item->phone }}</a>
                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="slider-navigation">
                            <button type="button" aria-label="prev slide" title="prev slide"
                                class="prev-team slider-btn">
                                <i class="fa-solid fa-arrow-left"></i>
                            </button>
                            <button type="button" aria-label="next slide" title="next slide"
                                class="next-team slider-btn slider-btn-next">
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / team section end ==== -->
    <!-- ==== contact section start ==== -->
    <section class="contact-mc">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-md-10 col-xl-7">
                    <div class="contact__content pt-120 pb-120">
                        <div class="section__header mb-55" data-aos="fade-up" data-aos-duration="1000">
                            <span class="sub-title">Contactez-nous</span>
                            <h2 class="title-animation">Envoyez un message pour faire un don !
                            </h2>
                        </div>
                        <div class="contact__form" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <form action="{{ route('message.store') }}" method="post">
                                @csrf
                                <div class="input-single">
                                    <input type="text" name="name" id="contactAddress" placeholder="votre nom...">
                                    <i class="fa-solid fa-person"></i>
                                </div>
                                <div class="input-group">
                                    <div class="input-single">
                                        <input type="email" name="email" id="contactEmail"
                                            placeholder="votre email...">
                                        <i class="fa-solid fa-paper-plane"></i>
                                    </div>
                                    <div class="input-single">
                                        <input type="text" name="phone" id="contactNumber"
                                            placeholder="votre phone...">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                </div>
                                <div class="input-single">
                                    <input type="text" name="address" id="contactAddress"
                                        placeholder="votre adresse...">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="input-single alter-input">
                                    <textarea name="message" id="contactMessage" placeholder="votre message..."></textarea>
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="form-cta">
                                    <button type="submit" aria-label="submit message" title="submit message"
                                        class="btn--secondary" data-text="Envoyer"><span>Envoyer</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-bg">
            <img src="{{ asset('storage/' . optional($data)->bannier_image) }}" alt="Image" class="parallax-image">
        </div>
    </section>
    <!-- ==== / contact section end ==== -->
    <!-- ==== blog section start ==== -->
    <section class="blog-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-5">
                    <div class="section__header text-center mb-60" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="title-animation">Nos projets en cours et terminés</h2>
                        <div class="icon-thumb justify-content-center">
                            <div class="icon-thumb-single">
                                <span></span>
                                <span></span>
                            </div>
                            <i class="icon-donation"></i>
                            <div class="icon-thumb-single">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gutter-40">
                @foreach ($projects as $project)
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="blog__single" data-aos="fade-up" data-aos-duration="1000">
                            <div class="blog__single-thumb">
                                <a href="blog-details.html">
                                    <img src="{{ asset('storage/' . $project->image) }}" alt="Image">
                                </a>
                            </div>
                            <div class="blog__single-content" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="200">
                                <div class="tag">
                                    <a href="blog.html">{{ $project->date }}</a>
                                </div>
                                <div class="blog__single-title">
                                    <h5><a href="blog-details.html">{{ $project->title }}</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ==== / blog section end ==== -->
    <!-- ==== image gallery section start ==== -->
    @include('pages.gallery.gallery')

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Succès !',
                text: '{{ session('success') }}',
                timer: 3000 // La boîte se ferme après 3 secondes
            });
        </script>
    @endif
    @if (session('message'))
        <script>
            Swal.fire({
                title: 'Erreur !',
                text: "{{ session('message') }}",
                icon: 'error',
                timer: 3000
            });
        </script>
    @endif
@endsection
