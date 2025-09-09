@extends('home.master')
@section('content')
    @include('pages.about.common-banner')
    <!-- ==== difference two section start ==== -->
    <section class="difference-two pt-120 pb-120">
        <div class="container">
            <div class="row gutter-40 align-items-center">
                <div class="col-12 col-lg-4 col-xxl-5 d-none d-lg-block">
                    <div class="difference-two__thumb-wrapper">
                        <div class="difference-two__thumb">
                            <div class="thumb-lg" data-aos="fade-right" data-aos-duration="1000">
                                <img src="{{ asset('storage/' . optional($data)->image1) }}" alt="Image">
                                <div class="grid-line">
                                    <img src="assets/images/help/grid.png" alt="Image" class="base-img">
                                </div>
                                <div class="video-btn-wrapper">
                                    <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank"
                                        title="video Player" class="open-video-popup">
                                        <i class="icon-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="thumb-sm" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                <img src="{{ asset('storage/' . optional($data)->image2) }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 col-xxl-7">
                    <div class="difference-two__content">
                        <div class="section__header mb-20" data-aos="fade-up" data-aos-duration="1000">
                            <span class="sub-title">Soutenir notre cause ensemble</span>
                            <h2 class="title-animation">{{ optional($data)->title }}
                            </h2>
                        </div>
                        <p>{{ Str::limit(optional($data)->description, 300) }}
                        </p>
                        <div class="about__content-inner__cta mt-40" data-aos="fade-up" data-aos-duration="1000">
                            <div class="about__content-inner__btn">
                                <a href="{{ route('about.details') }}" class="btn--secondary"
                                    data-text="En savoir plus"><span>En savoir plus
                                    </span></a>
                            </div>
                        </div>
                        <div class="difference-two__inner cta mt-40">
                            <div class="difference-two__inner-content">
                                <div class="difference-two__tab">
                                    <div class="difference-two__tab-btns">
                                        <button class="difference-two__tab-btn active" data-target="#mission"
                                            aria-label="mission" title="mission">Objectif global</button>
                                        <button class="difference-two__tab-btn" data-target="#vision" aria-label="vision"
                                            title="vision">Mission </button>
                                        <button class="difference-two__tab-btn" data-target="#excellence"
                                            aria-label="excellence" title="excellence">Vision</button>
                                    </div>
                                    <div class="difference-two__tab-content">
                                        <div class="difference-two__content-single" id="mission">

                                            <p>{{ optional($data)->objective }}</p>

                                        </div>
                                        <div class="difference-two__content-single" id="vision">
                                            <p>{{ optional($data)->assignment }}</p>
                                        </div>
                                        <div class="difference-two__content-single" id="excellence">
                                            <p>{{ optional($data)->vision }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spade">
            <img src="assets/images/spade-green-two.png" alt="Image">
        </div>
    </section>

    <section class="counter pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="counter__inner">
                        <div class="counter__single">
                            <div class="thumb">
                                <i class="icon-support-hand"></i>
                            </div>
                            <div class="counter__content">
                                <h2><span class="odometer" data-odometer-final="{{ $countTeam }}"></span>
                                </h2>
                                <h5>Membres</h5>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="counter__single">
                            <div class="thumb">
                                <i class="icon-review"></i>
                            </div>
                            <div class="counter__content">
                                <h2><span class="odometer" data-odometer-final="{{ $countMessage }}"></span>
                                </h2>
                                <h5>Messages</h5>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="counter__single">
                            <div class="thumb">
                                <i class="icon-documents"></i>
                            </div>
                            <div class="counter__content">
                                <h2><span class="odometer" data-odometer-final="100">
                                </h2>
                                <h5>Projects</h5>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="counter__single">
                            <div class="thumb">
                                <i class="icon-award"></i>
                            </div>
                            <div class="counter__content">
                                <h2><span class="odometer" data-odometer-final="40"></span>K<span class="prefix">+</span>
                                </h2>
                                <h5>Winning award</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="poor">
            <img src="{{ asset('storage/' . optional($data)->bannier_image) }}" alt="Image" class="parallax-image">
        </div>
        <div class="shape-left" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
            <img src="assets/images/shape-left.png" alt="Image" class="base-img">
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
                        <h2 class="title-animation">Rencontrez les membres de notre équipe dévouée</h2>
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

    <div class="gallery">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-5">
                    <div class="section__header text-center mb-60" data-aos="fade-up" data-aos-duration="1000">
                        <span>Soutenir notre cause ensemble</span>
                        <h2 class="title-animation">Gallerie des Images</h2>
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

            <!-- Grille des images -->
            <div class="row g-4">
                @foreach ($gallery as $index => $item)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="position-relative">
                                <img src="{{ asset('storage/' . $item->image) }}"
                                    class="card-img-top img-fluid rounded gallery-img" alt="Image">

                                <!-- Bouton zoom -->
                                <button class="btn btn-light btn-sm position-absolute top-50 start-50 translate-middle"
                                    data-bs-toggle="modal" data-bs-target="#galleryModal"
                                    data-bs-slide-to="{{ $index }}">
                                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- Pagination --}}
        <div class="row pb-5">
            <div class="col-12">
                <div class="pagination-wrapper mt-60" data-aos="fade-up" data-aos-duration="1000">
                    <ul class="pagination main-pagination">

                        {{-- Lien vers la page précédente --}}
                        @if ($gallery->onFirstPage())
                            <li class="disabled"><button><i class="fa-solid fa-angles-left"></i></button></li>
                        @else
                            <li><a href="{{ $gallery->previousPageUrl() }}"><i class="fa-solid fa-angles-left"></i></a>
                            </li>
                        @endif

                        {{-- Numéros de pages --}}
                        @foreach ($gallery->getUrlRange(1, $gallery->lastPage()) as $page => $url)
                            @if ($page == $gallery->currentPage())
                                <li><a href="{{ $url }}" class="active">{{ $page }}</a></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach

                        {{-- Lien vers la page suivante --}}
                        @if ($gallery->hasMorePages())
                            <li><a href="{{ $gallery->nextPageUrl() }}"><i class="fa-solid fa-angles-right"></i></a></li>
                        @else
                            <li class="disabled"><button><i class="fa-solid fa-angles-right"></i></button></li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>


        <!-- Modal avec Carousel -->
        <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content bg-transparent border-0">
                    <div id="galleryCarousel" class="carousel slide" data-bs-ride="false">

                        <!-- ✅ Indicateurs (pagination) -->
                        <div class="carousel-indicators">
                            @foreach ($gallery as $index => $item)
                                <button type="button" data-bs-target="#galleryCarousel"
                                    data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"
                                    aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                                    aria-label="Slide {{ $index + 1 }}"></button>
                            @endforeach
                        </div>

                        <!-- Images -->
                        <div class="carousel-inner">
                            @foreach ($gallery as $index => $item)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <img src="{{ asset('storage/' . $item->image) }}" class="d-block w-100 rounded"
                                        alt="Image">
                                </div>
                            @endforeach
                        </div>

                        <!-- Contrôles -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
