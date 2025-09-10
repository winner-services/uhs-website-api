@extends('home.master')
@section('content')
    <section class="common-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="common-banner__content text-center">
                        <h2 class="title-animation">Nos projets</h2>
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
                    Nos projets
                </li>
            </ol>
        </nav>
        @include('pages.bannier.bannier')
    </section>

    <section class="blog-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-5">
                    <div class="section__header text-center mb-60" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="title-animation">Nos projets en cours et terminés</h2>
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
            <div class="row gutter-40">
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="blog__single" data-aos="fade-up" data-aos-duration="1000">
                        <div class="blog__single-thumb">
                            <a href="blog-details.html">
                                <img src="assets/images/blog/one.png" alt="Image">
                            </a>
                        </div>
                        <div class="blog__single-content" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="200">
                            <div class="time">
                                <span>July</span>
                                <span>25</span>
                            </div>
                            <div class="tag">
                                <a href="blog.html"><i class="fa-solid fa-tags"></i>Education</a>
                            </div>
                            <div class="blog__single-title">
                                <h5><a href="blog-details.html">IT Service Case Studies Accelerate Business</a>
                                </h5>
                            </div>
                            <div class="blog__single-cta">
                                <a href="blog-details.html">Read More<i class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="blog__single" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="blog__single-thumb">
                            <a href="blog-details.html">
                                <img src="assets/images/blog/two.png" alt="Image">
                            </a>
                        </div>
                        <div class="blog__single-content" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="600">
                            <div class="time">
                                <span>July</span>
                                <span>25</span>
                            </div>
                            <div class="tag">
                                <a href="blog.html"><i class="fa-solid fa-tags"></i> Health</a>
                            </div>
                            <div class="blog__single-title">
                                <h5><a href="blog-details.html">IT Service Case Studies Accelerate Business</a>
                                </h5>
                            </div>
                            <div class="blog__single-cta">
                                <a href="blog-details.html">Read More<i class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="blog__single" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                        <div class="blog__single-thumb">
                            <a href="blog-details.html">
                                <img src="assets/images/blog/three.png" alt="Image">
                            </a>
                        </div>
                        <div class="blog__single-content" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="1000">
                            <div class="time">
                                <span>July</span>
                                <span>25</span>
                            </div>
                            <div class="tag">
                                <a href="blog.html"><i class="fa-solid fa-tags"></i> Food</a>
                            </div>
                            <div class="blog__single-title">
                                <h5><a href="blog-details.html">IT Service Case Studies Accelerate Business</a>
                                </h5>
                            </div>
                            <div class="blog__single-cta">
                                <a href="blog-details.html">Read More<i class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
