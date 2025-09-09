@extends('home.master')
@section('content')
    <section class="common-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="common-banner__content text-center">
                        <h2 class="title-animation">Detail de l'événement</h2>
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
                    Detail de l'événement et activité
                </li>
            </ol>
        </nav>
        @include('pages.bannier.bannier')
    </section>

    <div class="cm-details pt-120 pb-120">
        <div class="container">
            <div class="row gutter-60">
                <div class="col-12 col-xl-8">
                    <div class="cm-details__content">
                        <div class="cm-details__poster" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <img src="{{ asset('storage/' . optional($event)->image) }}" alt="Image">
                        </div>
                        <div class="cm-details-meta">
                            <p><i class="fa-solid fa-calendar-days"></i>{{ $event->date }}</p>
                            <p><i class="fa-solid fa-location-dot"></i>{{ $event->title }}</p>
                        </div>
                        <div class="cm-group mt-55">
                            <h3 class="title-animation">{{ $event->title }}</h3>
                            <p>{{ $event->description }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="cm-details__sidebar">
                        <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <div class="intro">
                                <h5>Articles récents</h5>
                            </div>
                            <div class="cm-sidebar-post">
                                @foreach ($allEvents as $events)
                                    <div class="single-item">
                                        <div class="thumb">
                                            <a href="{{ route('event.details', ['id' => $events->id]) }}">
                                                <img src="{{ asset('storage/' . $events->image) }}" alt="Image">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <p><i class="fa-solid fa-calendar-days"></i> <span>{{ $events->date }}</span>
                                            </p>
                                            <p><a href="{{ route('event.details', ['id' => $events->id]) }}">{{ $events->title }}</a>
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   @include('pages.gallery.gallery')
@endsection
