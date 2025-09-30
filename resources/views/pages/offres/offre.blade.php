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
            @forelse($offres as $offre)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $offre->titre }}</h5>
                            <p class="card-text text-truncate">{{ $offre->description }}</p>
                            <p class="mt-auto"><strong>Date de publication :</strong> {{ $offre->created_at->format('d/m/Y') }}</p>
                        </div>
                        <div class="card-footer bg-white d-flex justify-content-between">
                            <a href="{{ route('offres.show', $offre->id) }}" class="btn btn-sm btn-primary">
                                Consulter
                            </a>
                            <a href="{{ asset('storage/offres/'.$offre->fichier_pdf) }}" download class="btn btn-sm btn-success">
                                Télécharger PDF
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center">Aucune offre disponible pour le moment.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<style>
    .offers-section .card {
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .offers-section .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }
    .offers-section .card-title {
        font-size: 1.25rem;
        font-weight: 600;
    }
    .offers-section .card-text {
        font-size: 0.95rem;
        color: #555;
    }
</style>
    
@endsection
