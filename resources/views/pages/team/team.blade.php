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
            <div class="row gutter-40">
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
            </div>

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
            <img src="assets/images/sprade-green.png" alt="Image">
        </div>
    </section>
@endsection
