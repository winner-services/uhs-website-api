@extends('home.master')
@section('content')
    <section class="common-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="common-banner__content text-center">
                        <h2 class="title-animation">Nos Offres</h2>
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
                    Consulter nos offres
                </li>
            </ol>
        </nav>
        @include('pages.bannier.bannier')
    </section>

    @extends('home.master')
@section('content')
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-banner__content text-center">
                    <h2 class="title-animation">Nos Offres</h2>
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
                Consulter nos offres
            </li>
        </ol>
    </nav>
    @include('pages.bannier.bannier')
</section>

<section class="offers-section py-5">
    <div class="container">
        <div class="row">
            @php
                $offres = [
                    [
                        'titre' => 'Offre Développeur Web',
                        'description' => 'Rejoignez notre équipe en tant que développeur web pour des projets innovants.',
                        'date' => '2025-09-01',
                        'pdf' => 'offre1.pdf'
                    ],
                    [
                        'titre' => 'Offre Designer Graphique',
                        'description' => 'Nous recherchons un designer créatif pour améliorer notre image de marque.',
                        'date' => '2025-08-25',
                        'pdf' => 'offre2.pdf'
                    ],
                    [
                        'titre' => 'Offre Chargé Marketing',
                        'description' => 'Participez au développement de notre stratégie marketing digitale.',
                        'date' => '2025-09-10',
                        'pdf' => 'offre3.pdf'
                    ],
                ];
            @endphp

            @foreach($offres as $offre)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $offre['titre'] }}</h5>
                            <p class="card-text text-truncate">{{ $offre['description'] }}</p>
                            <p class="mt-auto"><strong>Date de publication :</strong> {{ $offre['date'] }}</p>
                        </div>
                        <div class="card-footer bg-white d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-primary">
                                Consulter
                            </a>
                            <a href="{{ asset('pdf/'.$offre['pdf']) }}" download class="btn btn-sm btn-success">
                                Télécharger PDF
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .offers-section .card {
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .offers-section .card:hover {
        transfor
    }

   
    
@endsection
