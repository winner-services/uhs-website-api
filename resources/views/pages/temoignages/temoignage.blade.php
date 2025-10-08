<section class="testimonial-area pt-120 pb-120">
    <div class="container">
        <!-- En-tête -->
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-5">
                <div class="section__header text-center mb-60" data-aos="fade-up" data-aos-duration="1000">
                    <span>Soutenir notre cause ensemble</span>
                    <h2 class="title-animation">Les commentaires impressionnants</h2>
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

        <!-- Témoignages avec lecteur YouTube -->
        <div class="row justify-content-center">
            <div class="col-12 col-xl-12">
                <div class="testimonial__inner">
                    <div class="testimonial__inner-wrapper">
                        <div class="testimonial__slider swiper">
                            <div class="swiper-wrapper">
                                @foreach ($temoignage as $temoignages)
                                    <div class="swiper-slide">
                                        <div class="testimonial__slider-single">
                                            <div class="row align-items-center gutter-40">
                                                <!-- Vidéo YouTube intégrée -->
                                                <div class="col-12 col-lg-3">
                                                    <div class="video-container ratio ratio-16x9">
                                                        <iframe
                                                            src="https://www.youtube.com/embed/{{ $temoignages->lien_youtube }}"
                                                            title="Vidéo témoignage" frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                            allowfullscreen>
                                                        </iframe>
                                                    </div>
                                                </div>

                                                <!-- Contenu du témoignage -->
                                                <div class="col-12 col-lg-9">
                                                    <div class="testimonial__slider-content">
                                                        <div class="review">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                        <p>{{ $temoignages->description }}</p>
                                                        <div class="testimonial__cta">
                                                            <div class="quote-icon">
                                                                <i class="fa-solid fa-quote-right"></i>
                                                            </div>
                                                            <div class="testimonial__cta-content">
                                                                <span>{{ $temoignages->function }}</span>
                                                                <h4>{{ $temoignages->name }}</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Navigation du slider -->
                    <div class="slider-navigation">
                        <button type="button" aria-label="prev slide" title="prev slide"
                            class="prev-testimonial slider-btn">
                            <i class="fa-solid fa-angle-left"></i>
                        </button>
                        <button type="button" aria-label="next slide" title="next slide"
                            class="next-testimonial slider-btn slider-btn-next">
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Styles -->
<style>
    .video-container iframe {
        border-radius: 12px;
        overflow: hidden;
        width: 100%;
        height: 100%;
    }

    .video-container {
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .video-container:hover {
        transform: scale(1.02);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.25);
    }
</style>
