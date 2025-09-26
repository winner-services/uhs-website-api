@extends('home.master')
@section('content')
    <section class="common-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="common-banner__content text-center">
                        <h2 class="title-animation">Notre Equipe</h2>
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
                    Notre Equipe
                </li>
            </ol>
        </nav>
        @include('pages.bannier.bannier')
    </section>

    <section class="team-area-two pt-120 pb-120">
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
            {{-- <div class="row gutter-40">
                @foreach ($team as $item)
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="team__single" data-aos="fade-up" data-aos-duration="1200">
                            <div class="thumb-wrapper">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="Image">
                                    </a>
                                </div>
                                <div class="social">
                                    @if ($item->facebook)
                                        <a href="{{ $item->facebook }}" target="_blank"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    @endif
                                    @if ($item->twitter)
                                        <a href="{{ $item->twitter }}" target="_blank"><i
                                                class="fa-brands fa-twitter"></i></a>
                                    @endif
                                    @if ($item->linkedin)
                                        <a href="{{ $item->linkedin }}" target="_blank"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                    @endif
                                </div>
                            </div>
                            <div class="content">
                                <span>{{ $item->title }}</span>
                                <h5>{{ $item->name }}</h5>
                                <p>
                                    <a href="tel:{{ $item->phone }}">
                                        <i class="fa-solid fa-phone-volume"></i> {{ $item->phone }}
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}
            {{-- <div class="row gutter-40">
                @foreach ($team as $item)
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="team__single" data-aos="fade-up" data-aos-duration="1200">

                            <!-- Image & Réseaux sociaux -->
                            <div class="thumb-wrapper">
                                <div class="thumb" style="position:relative;width:100%;padding-top:120%;overflow:hidden;">
                                    <a href="#">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                            style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;">
                                    </a>
                                </div>

                                <div class="social">
                                    @if ($item->facebook)
                                        <a href="{{ $item->facebook }}" target="_blank">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    @endif
                                    @if ($item->twitter)
                                        <a href="{{ $item->twitter }}" target="_blank">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    @endif
                                    @if ($item->linkedin)
                                        <a href="{{ $item->linkedin }}" target="_blank">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <!-- Informations -->
                            <div class="content">
                                <span>{{ $item->title }}</span>
                                <h5>{{ $item->name }}</h5>

                                @if ($item->phone)
                                    <p>
                                        <a href="tel:{{ $item->phone }}">
                                            <i class="fa-solid fa-phone-volume"></i> {{ $item->phone }}
                                        </a>
                                    </p>
                                @endif
                            </div>

                        </div>
                    </div>
                @endforeach
            </div> --}}
            {{-- <div class="row gutter-40">
                @foreach ($team as $item)
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="team__single" data-aos="fade-up" data-aos-duration="1200"
                            style="background:#fff;border-radius:12px;box-shadow:0 4px 12px rgba(0,0,0,0.1);
                        overflow:hidden;transition:transform 0.3s ease;">

                            <!-- Image -->
                            <div class="thumb" style="position:relative;width:100%;padding-top:120%;overflow:hidden;">
                                <a href="#">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                        style="position:absolute;top:0;left:0;width:100%;height:100%;
                                    object-fit:cover;transition:transform 0.4s ease;">
                                </a>
                            </div>

                            <!-- Contenu -->
                            <div class="content" style="padding:20px;text-align:center;">
                                <span style="display:block;font-size:14px;color:#888;">{{ $item->title }}</span>
                                <h5 style="margin:8px 0;font-size:18px;font-weight:600;color:#333;">
                                    {{ $item->name }}
                                </h5>

                                @if ($item->phone)
                                    <p style="margin:8px 0;">
                                        <a href="tel:{{ $item->phone }}"
                                            style="color:#007bff;text-decoration:none;font-size:14px;">
                                            <i class="fa-solid fa-phone-volume"></i> {{ $item->phone }}
                                        </a>
                                    </p>
                                @endif

                                <!-- Réseaux sociaux -->
                                <div class="social" style="margin-top:12px;">
                                    @if ($item->facebook)
                                        <a href="{{ $item->facebook }}" target="_blank"
                                            style="margin:0 6px;color:#3b5998;font-size:16px;">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    @endif
                                    @if ($item->twitter)
                                        <a href="{{ $item->twitter }}" target="_blank"
                                            style="margin:0 6px;color:#1da1f2;font-size:16px;">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    @endif
                                    @if ($item->linkedin)
                                        <a href="{{ $item->linkedin }}" target="_blank"
                                            style="margin:0 6px;color:#0077b5;font-size:16px;">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}

            <!-- Animation au hover -->
            {{-- <style>
                .team__single:hover {
                    transform: translateY(-8px);
                }

                .team__single:hover img {
                    transform: scale(1.05);
                }
            </style> --}}

            <div class="row gutter-40">
                @foreach ($team as $item)
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="team__single" data-aos="fade-up" data-aos-duration="1200"
                            style="background:#fff;border-radius:12px;box-shadow:0 4px 12px rgba(0,0,0,0.1);
                        overflow:hidden;transition:transform 0.3s ease;">

                            <!-- Image + Réseaux sociaux comme avant -->
                            <div class="thumb-wrapper" style="position:relative;">
                                <div class="thumb" style="position:relative;width:100%;padding-top:120%;overflow:hidden;">
                                    <a href="#">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                            style="position:absolute;top:0;left:0;width:100%;height:100%;
                                        object-fit:cover;transition:transform 0.4s ease;">
                                    </a>
                                </div>

                                <!-- Réseaux sociaux en overlay -->
                                <div class="social"
                                    style="position:absolute;bottom:12px;left:10%;transform:translateX(-50%);
                                display:flex;gap:10px;">
                                    @if ($item->facebook)
                                        <a href="{{ $item->facebook }}" target="_blank"
                                            style="background:#1c1b1b;color:#fff;width:32px;height:32px;
                                      display:flex;align-items:center;justify-content:center;
                                      border-radius:50%;font-size:14px;">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    @endif
                                    @if ($item->twitter)
                                        <a href="{{ $item->twitter }}" target="_blank"
                                            style="background:#1c1b1b;color:#fff;width:32px;height:32px;
                                      display:flex;align-items:center;justify-content:center;
                                      border-radius:50%;font-size:14px;">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    @endif
                                    @if ($item->linkedin)
                                        <a href="{{ $item->linkedin }}" target="_blank"
                                            style="background:#1c1b1b;color:#fff;width:32px;height:32px;
                                      display:flex;align-items:center;justify-content:center;
                                      border-radius:50%;font-size:14px;">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    @endif
                                    @if ($item->whatsapp)
                                        <a href="{{ $item->whatsapp }}" target="_blank"
                                            style="background:#1c1b1b;color:#fff;width:32px;height:32px;
                                      display:flex;align-items:center;justify-content:center;
                                      border-radius:50%;font-size:14px;">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <!-- Contenu -->
                            <div class="content" style="padding:20px;text-align:start;">
                                <span style="display:block;font-size:14px;color:#888;">{{ $item->title }}</span>
                                <h6 style="margin:8px 0;font-size:18px;font-weight:600;color:#333;">
                                    {{ $item->name }}
                                </h6>

                                @if ($item->phone)
                                    <p style="margin:8px 0;">
                                        <a href="tel:{{ $item->phone }}"
                                            style="color:#516693;text-decoration:none;font-size:14px;">
                                            <i class="fa-solid fa-phone-volume"></i> {{ $item->phone }}
                                        </a>
                                    </p>
                                @endif
                                @if ($item->email)
                                    <p style="margin:8px 0;">
                                        <a href="tel:{{ $item->email }}"
                                            style="color:#516693;text-decoration:none;font-size:14px;">
                                            <i class="fa-solid fa-envelope"></i> {{ $item->email }}
                                        </a>
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Effet hover -->
            <style>
                .team__single:hover {
                    transform: translateY(-8px);
                }

                .team__single:hover img {
                    transform: scale(1.05);
                }
            </style>

            {{-- Pagination --}}
            <div class="row">
                <div class="col-12">
                    <div class="pagination-wrapper mt-60" data-aos="fade-up" data-aos-duration="1000">
                        <ul class="pagination main-pagination">

                            {{-- Lien vers la page précédente --}}
                            @if ($team->onFirstPage())
                                <li class="disabled"><button><i class="fa-solid fa-angles-left"></i></button></li>
                            @else
                                <li><a href="{{ $team->previousPageUrl() }}"><i class="fa-solid fa-angles-left"></i></a>
                                </li>
                            @endif

                            {{-- Les numéros de pages --}}
                            @foreach ($team->getUrlRange(1, $team->lastPage()) as $page => $url)
                                @if ($page == $team->currentPage())
                                    <li><a href="{{ $url }}" class="active">{{ $page }}</a></li>
                                @else
                                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                            {{-- Lien vers la page suivante --}}
                            @if ($team->hasMorePages())
                                <li><a href="{{ $team->nextPageUrl() }}"><i class="fa-solid fa-angles-right"></i></a></li>
                            @else
                                <li class="disabled"><button><i class="fa-solid fa-angles-right"></i></button></li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="spade">
            <img src="{{ asset('assets/images/sprade-green.png') }}" alt="Image">
        </div>
    </section>
@endsection
