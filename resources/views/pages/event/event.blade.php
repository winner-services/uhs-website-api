@extends('home.master')
@section('content')
    <section class="common-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="common-banner__content text-center">
                        <h2 class="title-animation">Actualités</h2>
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
                    Événements et Actualités
                </li>
            </ol>
        </nav>
        @include('pages.bannier.bannier')
    </section>

    <section class="explore-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-5">
                    <div class="section__header text-center mb-55" data-aos="fade-up" data-aos-duration="1000">
                        <span>Rejoignez-nous pour des expériences passionnantes</span>
                        <h2 class="title-animation">Événements et Actualités</h2>
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
                                    <h5><a href="{{ route('event.details', ['id' => $item->id]) }}">{{ Str::limit($item->title, 55) }}</a>
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
                                <li><a href="{{ $event->nextPageUrl() }}"><i class="fa-solid fa-angles-right"></i></a></li>
                            @else
                                <li class="disabled"><button><i class="fa-solid fa-angles-right"></i></button></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
