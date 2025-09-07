@extends('home.master')
@section('content')
    @include('pages.about.common-banner')

    <div class="cm-details pt-120 pb-120">
        <div class="container">
            <div class="row gutter-60">
                <div class="col-12 col-xl-8">
                    <div class="cm-details__content">
                        <div class="cm-details__poster" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <img src="{{ asset('storage/' . optional($data)->image1) }}" alt="Image">
                        </div>
                        <div class="cm-group mt-55">
                            <h3 class="title-animation">{{ optional($data)->title }}</h3>
                            <p>{{ optional($data)->description }}
                            </p>
                        </div>
                        <div class="cm-group mt-55">
                            <h3 class="title-animation">Objectif global</h3>
                            <p>{{ optional($data)->objective }}
                            </p>
                            <div class="pt-3">
                                <h4 class="title-animation">Objectifs spécifiques</h4>
                            </div>

                            <div class="cm-details__list">
                                <ul>
                                    <li><i class="icon-circle-check"></i>Empower Through Charity</li>
                                    <li><i class="icon-circle-check"></i>Giving Hope, Changing Lives</li>
                                    <li><i class="icon-circle-check"></i>Healing Communities</li>
                                    <li><i class="icon-circle-check"></i>Together We Can</li>
                                    <li><i class="icon-circle-check"></i>Compassion in Action</li>
                                    <li><i class="icon-circle-check"></i>Every Act Counts</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="cm-details__sidebar">
                        <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <div class="intro">
                                <h5>Activites</h5>
                            </div>
                            <div class="cm-sidebar-post">
                                <div class="single-item">
                                    <div class="thumb">
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/ph-one.png" alt="Image">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <p><i class="fa-solid fa-calendar-days"></i> <span>November 19, 2024</span>
                                        </p>
                                        <p><a href="blog-details.html">Where Innovation Meets Foundation</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="thumb">
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/ph-two.png" alt="Image">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <p><i class="fa-solid fa-calendar-days"></i> <span>November 19, 2024</span>
                                        </p>
                                        <p><a href="blog-details.html">Where Innovation Meets Foundation</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="thumb">
                                        <a href="blog-details.html">
                                            <img src="assets/images/blog/three.png" alt="Image">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <p><i class="fa-solid fa-calendar-days"></i> <span>November 22, 2024</span>
                                        </p>
                                        <p><a href="blog-details.html">Structures That Stand,
                                                Dreams That Soar</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <div class="intro">
                                <h5>Domaines</h5>
                            </div>
                            <div class="tag-wrapper">
                                <a href="shop.html">t-shirt</a>
                                <a href="shop.html">Banner Design</a>
                                <a href="shop.html">Brochures</a>
                                <a href="shop.html">Landing</a>
                                <a href="shop.html">Print</a>
                                <a href="shop.html">Business Card</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gutter-120">
                <div class="blog-comment pt-50" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="comment-header mb-40">
                        <h4 class="mt-3 title-animation">Notre équipe</h4>
                    </div>
                    <div class="team-container" style="display: flex; flex-wrap: wrap; gap: 20px;">
                        @foreach ($team as $item)
                            <div class="comment-single"
                                style="flex: 0 0 250px; display: flex; flex-direction: column; align-items: center; text-align: center;">
                                <div class="thumb">
                                    <img src="{{ asset('storage/' . optional($item)->image) }}" alt="Image">
                                </div>
                                <div class="comment-single__content">
                                    <h5>{{ optional($item)->name }}</h5>
                                    <p>{{ optional($item)->title }}</p>
                                    <p>{{ optional($item)->email }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
