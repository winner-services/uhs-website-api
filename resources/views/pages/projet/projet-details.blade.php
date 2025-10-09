@extends('home.master')
@section('content')
    <section class="common-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="common-banner__content text-center">
                        <h2 class="title-animation">Detail du project</h2>
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
                    Detail sur le projet
                </li>
            </ol>
        </nav>
        @include('pages.bannier.bannier')
    </section>

    <div class="cm-details pt-120 pb-120">
        <div class="container">

        </div>
    </div>
    @include('pages.gallery.gallery')
@endsection
