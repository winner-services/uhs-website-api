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

        <!-- Témoignages avec vidéos -->
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
                                                <!-- Vidéo YouTube -->
                                                <div class="col-12 col-lg-3">
                                                    <div class="video-thumbnail position-relative"
                                                        style="cursor:pointer;" data-bs-toggle="modal"
                                                        data-bs-target="#videoModal"
                                                        data-video-id="{{ $temoignages->lien_youtube }}">
                                                        <div
                                                            class="play-button position-absolute top-50 start-50 translate-middle">
                                                            <i class="fa-solid fa-play fa-3x text-white"></i>
                                                        </div>
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

    <!-- Modal vidéo global -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark">
                <div class="modal-body p-0 position-relative">
                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="ratio ratio-16x9">
                        <iframe id="videoIframe" src="" title="YouTube video" allowfullscreen
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Script pour gérer les vidéos -->
<script>
    const videoModal = document.getElementById('videoModal');
    const videoIframe = document.getElementById('videoIframe');
    const videoThumbnails = document.querySelectorAll('.video-thumbnail');

    videoThumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', () => {
            const videoId = thumbnail.getAttribute('data-video-id');
            videoIframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
        });
    });

    videoModal.addEventListener('hidden.bs.modal', function() {
        videoIframe.src = '';
    });
</script>
<!-- Styles -->
<style>
    .play-button {
        background: rgba(0, 0, 0, 0.5);
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.3s ease;
    }

    .play-button:hover {
        background: rgba(0, 0, 0, 0.7);
    }

    .video-thumbnail img {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .video-thumbnail:hover img {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }
</style>
