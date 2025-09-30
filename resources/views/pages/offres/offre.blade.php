@extends('home.master')

@section('content')
    <section class="common-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="title-animation">Nos Offres</h2>
                </div>
            </div>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Acceuil</a>
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
                            'secteur' => 'Informatique',
                            'titre' => 'Développement Web pour projet public',
                            'numero' => 'OFF-001',
                            'date_publication' => '2025-09-01',
                            'date_limite' => '2025-10-01',
                            'zones' => 'Kinshasa, Lubumbashi',
                            'pdf' => 'offre1.pdf',
                        ],
                        [
                            'secteur' => 'Design',
                            'titre' => 'Création de supports visuels',
                            'numero' => 'OFF-002',
                            'date_publication' => '2025-08-25',
                            'date_limite' => '2025-09-25',
                            'zones' => 'Goma, Bukavu',
                            'pdf' => 'offre2.pdf',
                        ],
                        [
                            'secteur' => 'Marketing',
                            'titre' => 'Campagne de communication digitale',
                            'numero' => 'OFF-003',
                            'date_publication' => '2025-09-10',
                            'date_limite' => '2025-10-10',
                            'zones' => 'Kinshasa, Matadi',
                            'pdf' => 'offre3.pdf',
                        ],
                    ];
                @endphp

                @foreach ($offres as $offre)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $offre['titre'] }}</h5>
                                <ul class="list-unstyled mb-3">
                                    <li><strong>Secteur d’activité :</strong> {{ $offre['secteur'] }}</li>
                                    <li><strong>Numéro de l'offre :</strong> {{ $offre['numero'] }}</li>
                                    <li><strong>Date publication :</strong> {{ $offre['date_publication'] }}</li>
                                    <li><strong>Date limite :</strong> {{ $offre['date_limite'] }}</li>
                                    <li><strong>Zone(s) d’exécution :</strong> {{ $offre['zones'] }}</li>
                                </ul>
                            </div>
                            <div class="card-footer bg-white d-flex justify-content-between">
                                <a href="#" class="btn btn-sm btn-primary">Consulter</a>
                                <a href="{{ asset('pdf/' . $offre['pdf']) }}" download
                                    class="btn btn-sm btn-success">Télécharger PDF</a>
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
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .offers-section .card-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
        }

        .offers-section ul {
            font-size: 0.95rem;
            color: #555;
        }
    </style>
@endsection
