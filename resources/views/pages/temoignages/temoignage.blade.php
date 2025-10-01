<section class="testimonial-area pt-120 pb-120">
    <div class="container">
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
                    <!-- Bouton vidéo -->
                    <div class="mt-4">
                        <a href="#videoModal" class="btn btn-primary" data-bs-toggle="modal">Voir la vidéo</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Témoignages existants -->
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
                                                <div class="col-12 col-lg-10 col-xl-10">
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

    <!-- Modal vidéo -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <div class="ratio ratio-16x9">
                        <iframe id="videoIframe" src="https://www.youtube.com/embed/TON_ID_VIDEO" title="YouTube video"
                            allowfullscreen allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Script pour arrêter la vidéo quand on ferme le modal -->
<script>
    const videoModal = document.getElementById('videoModal');
    const videoIframe = document.getElementById('videoIframe');

    videoModal.addEventListener('hidden.bs.modal', function() {
        videoIframe.src = videoIframe.src; // réinitialise la vidéo
    });
</script>
