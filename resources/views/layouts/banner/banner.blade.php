 <section class="banner-two">
     <div class="banner-two__slider swiper">
         <div class="swiper-wrapper">
             @foreach ($slides as $items)
                 <div class="swiper-slide">
                     <div class="banner-two__slider-single">
                         <div class="banner-two__slider-bg" data-background="{{ asset('storage/' . $items->image) }}">
                         </div>
                         <div class="container">
                             <div class="row">
                                 <div class="col-12 col-md-9  col-lg-7 col-xxl-7">
                                     <div class="banner-two__slider-content">
                                         <h1>{{ $items->title }}
                                         </h1>
                                         <div class="banner__content-cta mt-40">
                                             <a href="{{ route('about.index') }}" aria-label="about us" title="about us"
                                                 class="btn--primary">A Propos de nous
                                                 </a>
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
     <div class="slider-navigation d-none d-md-flex">
         <button type="button" aria-label="prev slide" title="prev slide" class="prev-banner slider-btn">
             <i class="fa-solid fa-arrow-left"></i>
         </button>
         <button type="button" aria-label="next slide" title="next slide"
             class="next-banner slider-btn slider-btn-next">
             <i class="fa-solid fa-arrow-right"></i>
         </button>
     </div>
     <div class="sprade-shape">
         <img src="{{ asset('assets/images/sprade-base.png') }}" alt="Image" class="base-img" data-aos="zoom-in"
             data-aos-duration="1000">
     </div>
 </section>
