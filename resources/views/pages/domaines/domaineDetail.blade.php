@extends('home.master')
@section('content')
    {{-- @php
        $paragraphes = preg_split('/\.\s*/', $domaine->description, -1, PREG_SPLIT_NO_EMPTY);
    @endphp --}}
    <section class="common-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="common-banner__content text-center">
                        <h2 class="title-animation">Nos domaines d'intervention</h2>
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
                    Détails du domaine
                </li>
            </ol>
        </nav>
        @include('pages.bannier.bannier')
    </section>

    <section class="blog-main cm-details pt-120 pb-120">
        <div class="container">
            <div class="row gutter-60">
                <div class="col-12 col-xl-8">
                    <div class="cm-details__content">
                        <div class="cm-details__poster" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <img src="{{ asset('storage/' . optional($domaine)->image) }}" alt="Image">
                        </div>
                        <div class="cm-group mt-60">
                            <h3 class="title-animation">{{ $domaine->title }}</h3>
                            {{-- <p>{{ $domaine->description }}
                            </p> --}}
                            {{-- @foreach ($paragraphes as $para)
                                <p>{{ trim($para) }}.</p>
                            @endforeach --}}
                        </div>
                        <div class="cm-group mt-3">
                            <div class="blockquote-wrapper">
                                <blockquote>
                                    <p>{{ $domaine->description }}
                                    </p>
                                </blockquote>
                                <p><span class="line"></span><span class="quote-owner">{{ $domaine->category }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="blog-main__sidebar">
                        <div class="cm-details__sidebar">
                            <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                <div class="intro">
                                    <h5>Domaines</h5>
                                </div>
                                <div class="cm-categories">
                                    @foreach ($Alldomaine as $item)
                                        <a href="{{ route('domaine.details', ['id' => $item->id]) }}">
                                            <span>{{ $item->title }}</span>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
