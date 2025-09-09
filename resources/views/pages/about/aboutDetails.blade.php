@extends('home.master')
@section('content')
    @include('pages.about.common-banner')

    <section class="faq pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8 col-xl-6">
                    <div class="faq__content">
                        <div class="section__header mb-55" data-aos="fade-up" data-aos-duration="1000">
                            <span>l’Union pour l’Humanité Saine « UHS »</span>
                            <h2 class="title-animation">{{ optional($data)->title }}</h2>
                        </div>
                        <div>
                            <p>{{ optional($data)->description }}</p>
                        </div>
                        <div class="mt-3">
                            <h4 class="title-animation">Objectif global</h4>
                            <p class="mt-3">{{ optional($data)->objective }}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-5">
                    <div class="faq__thumb d-none d-lg-block">
                        <div class="faq__thumb-inner">
                            <div class="thumb-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                <img src="{{ asset('storage/' . optional($data)->image1) }}" alt="Image">
                            </div>
                            <div class="thumb-sm" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                                <img src="{{ asset('storage/' . optional($data)->image2) }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3">
                <div class="container">
                    <h4 class="title-animation">Objectifs spécifiques</h4>
                    <div class="cm-details__list mt-3">
                        <ul class="objective-list">
                            @foreach ($objectives as $item)
                                <li class="d-flex align-items-start mb-2">
                                    <i class="fa-solid fa-circle-check text-success me-2"></i>
                                    <span>{{ $item->designation }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
