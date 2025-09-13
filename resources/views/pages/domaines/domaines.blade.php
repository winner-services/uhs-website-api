@extends('home.master')
@section('content')
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
                    Nos domaines d'intervention
                </li>
            </ol>
        </nav>
        @include('pages.bannier.bannier')
    </section>

    <section class="blog-main blog cm-details pt-120 pb-120">
        <div class="container">
            <div class="row gutter-30">
                @foreach ($domaine as $item)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="blog__single-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <div class="blog__single van-tilt">
                                <div class="blog__single-thumb">
                                    <a href="{{ route('domaine.details', ['id' => $item->id]) }}">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="Image">
                                    </a>
                                    <div class="tag">
                                        <a href="{{ route('domaine.details', ['id' => $item->id]) }}">
                                            <i class="fa-solid fa-tags"></i>{{ $item->category }}
                                        </a>
                                    </div>
                                </div>
                                <div class="blog__single-inner">
                                    <div class="blog__single-content">
                                        <h5><a href="{{ route('domaine.details', ['id' => $item->id]) }}">{{ $item->title }}</a>
                                        </h5>
                                    </div>
                                    <div class="blog__single-meta">
                                        {{-- <p>{{ Str::limit($data->description, 80) }}</p> --}}
                                        <p>{{ $data->description }}</p>
                                    </div>
                                    <div class="blog__single-cta">
                                        <a href="{{ route('domaine.details', ['id' => $item->id]) }}"
                                            aria-label="blog details" title="blog details">
                                            Lire la suite <i class="fa-solid fa-circle-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
