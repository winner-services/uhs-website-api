@extends('home.master')
@section('content')
    @include('pages.about.common-banner')
    <!-- ==== / banner section end ==== -->
    <!-- ==== about section start ==== -->
    {{-- <section class="about-area pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center gutter-40">
                <div class="col-12 col-lg-5 col-xl-6">
                    <div class="about__thumb">
                        <div class="about__thumb-big">
                            <img src="{{ asset('storage/' . optional($data)->image1) }}" alt="Image" data-aos="fade-right"
                                data-aos-duration="1000">
                            <div class="video-btn-wrapper">
                                <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank" title="video Player"
                                    class="open-video-popup">
                                    <i class="fa-solid fa-play"></i>
                                </a>
                            </div>
                        </div>
                        <div class="about__thumb-sm">
                            <img src="{{ asset('storage/' . optional($data)->image2) }}" alt="Image" data-aos="fade-left"
                                data-aos-duration="1000" data-aos-delay="100">
                            <div class="about__thumb-sm__content" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="200">
                                <div class="about__thumb-sm__content-counter">
                                    <h2><span class="odometer" data-odometer-final="{{ $data->experience }}"></span></h2>
                                </div>
                                <p>{{ $data->experience }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 col-xl-6">
                    <div class="about__content">
                        <div class="section__header">
                            <span>Soutenir notre cause ensemble</span>
                            <h2 class="title-animation">{{ $data->title }}</h2>
                            <p>{{ $data->description }}
                            </p>
                        </div>
                        <hr class="divider">
                        <div class="about__content-inner" data-aos="fade-up" data-aos-duration="1000">
                            <div class="help__content-list">
                                <ul>
                                    <li><i class="fa-regular fa-circle-check"></i> Giving Hope, Changing Lives</li>
                                    <li><i class="fa-regular fa-circle-check"></i> Empower Through Charity
                                    </li>
                                    <li><i class="fa-regular fa-circle-check"></i> Together We Can</li>
                                    <li><i class="fa-regular fa-circle-check"></i> Healing Communities</li>
                                    <li><i class="fa-regular fa-circle-check"></i> Every Act Counts</li>
                                    <li><i class="fa-regular fa-circle-check"></i> Compassion in Action</li>
                                </ul>
                            </div>
                            <div class="about__content-inner__cta mt-40" data-aos="fade-up" data-aos-duration="1000">
                                <div class="about__content-inner__btn">
                                    <a href="{{ route('about.index') }}" class="btn--secondary"
                                        data-text="More About Us"><span>More
                                            About
                                            Us</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- ==== difference two section start ==== -->
    <section class="difference-two pt-120 pb-120">
        <div class="container">
            <div class="row gutter-40 align-items-center">
                <div class="col-12 col-lg-4 col-xxl-5 d-none d-lg-block">
                    <div class="difference-two__thumb-wrapper">
                        <div class="difference-two__thumb">
                            <div class="thumb-lg" data-aos="fade-right" data-aos-duration="1000">
                                <img src="{{ asset('storage/' . optional($data)->image1) }}" alt="Image">
                                <div class="grid-line">
                                    <img src="assets/images/help/grid.png" alt="Image" class="base-img">
                                </div>
                                <div class="video-btn-wrapper">
                                    <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank"
                                        title="video Player" class="open-video-popup">
                                        <i class="icon-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="thumb-sm" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                <img src="{{ asset('storage/' . optional($data)->image2) }}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 col-xxl-7">
                    <div class="difference-two__content">
                        <div class="section__header mb-20" data-aos="fade-up" data-aos-duration="1000">
                            <span class="sub-title">Soutenir notre cause ensemble</span>
                            <h2 class="title-animation">{{ optional($data)->title }}
                            </h2>
                        </div>
                        <p>{{ Str::limit(optional($data)->description, 300) }}
                        </p>
                        <div class="about__content-inner__cta mt-40" data-aos="fade-up" data-aos-duration="1000">
                            <div class="about__content-inner__btn">
                                <a href="{{ route('about.details') }}" class="btn--secondary"
                                    data-text="En savoir plus"><span>En savoir plus
                                    </span></a>
                            </div>
                        </div>
                        <div class="difference-two__inner cta mt-40">
                            <div class="difference-two__inner-content">
                                <div class="difference-two__tab">
                                    <div class="difference-two__tab-btns">
                                        <button class="difference-two__tab-btn active" data-target="#mission"
                                            aria-label="mission" title="mission">Objectif global</button>
                                        <button class="difference-two__tab-btn" data-target="#vision" aria-label="vision"
                                            title="vision">Mission </button>
                                        <button class="difference-two__tab-btn" data-target="#excellence"
                                            aria-label="excellence" title="excellence">Vision</button>
                                    </div>
                                    <div class="difference-two__tab-content">
                                        <div class="difference-two__content-single" id="mission">

                                            <p>{{ optional($data)->objective }}</p>

                                        </div>
                                        <div class="difference-two__content-single" id="vision">
                                            <p>{{ optional($data)->assignment }}</p>
                                        </div>
                                        <div class="difference-two__content-single" id="excellence">
                                            <p>{{ optional($data)->vision }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spade">
            <img src="assets/images/spade-green-two.png" alt="Image">
        </div>
    </section>
    <!-- ==== / difference two section end ==== -->

    <!-- ==== / about section end ==== -->
    <!-- ==== counter section start ==== -->
    <section class="counter pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="counter__inner">
                        <div class="counter__single">
                            <div class="thumb">
                                <i class="icon-support-hand"></i>
                            </div>
                            <div class="counter__content">
                                <h2><span class="odometer" data-odometer-final="400"></span><span class="prefix">+</span>
                                </h2>
                                <h5>Team member</h5>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="counter__single">
                            <div class="thumb">
                                <i class="icon-review"></i>
                            </div>
                            <div class="counter__content">
                                <h2><span class="odometer" data-odometer-final="80"></span>K<span class="prefix">+</span>
                                </h2>
                                <h5>Client's review</h5>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="counter__single">
                            <div class="thumb">
                                <i class="icon-documents"></i>
                            </div>
                            <div class="counter__content">
                                <h2><span class="odometer" data-odometer-final="100"></span>K<span class="prefix">+</span>
                                </h2>
                                <h5>Completed projects</h5>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="counter__single">
                            <div class="thumb">
                                <i class="icon-award"></i>
                            </div>
                            <div class="counter__content">
                                <h2><span class="odometer" data-odometer-final="40"></span>K<span class="prefix">+</span>
                                </h2>
                                <h5>Winning award</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="poor">
            <img src="assets/images/banner/banner-three-bg.jpg" alt="Image" class="parallax-image">
        </div>
        <div class="shape-left" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
            <img src="assets/images/shape-left.png" alt="Image" class="base-img">
        </div>
    </section>
    <!-- ==== / counter section end ==== -->
    <!-- ==== team section start ==== -->
    <section class="team-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-5">
                    <div class="section__header text-center mb-60" data-aos="fade-up" data-aos-duration="1000">
                        <span>Soutenir notre cause ensemble</span>
                        <h2 class="title-animation">Rencontrez les membres de notre équipe dévouée</h2>
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
            <div class="row">
                <div class="col-12">
                    <div class="team-two__inner">
                        <div class="team-two-slider swiper">
                            <div class="swiper-wrapper">
                                @foreach ($team as $item)
                                    <div class="swiper-slide">
                                        <div class="team__single">
                                            <div class="thumb-wrapper">
                                                <div class="thumb">
                                                    <img src="{{ asset('storage/' . $item->image) }}" alt="Image">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none">
                                                        <circle cx="150" cy="150" r="130"
                                                            stroke-linecap="round" />
                                                    </svg>
                                                </div>
                                                <div class="social">
                                                    <a href="{{ $item->facebook }}" target="_blank"
                                                        aria-label="share us on facebook" title="facebook">
                                                        <i class="fa-brands fa-facebook-f"></i>
                                                    </a>
                                                    <a href="{{ $item->twitter }}" target="_blank"
                                                        aria-label="share us on twitter" title="twitter">
                                                        <i class="fa-brands fa-twitter"></i>
                                                    </a>
                                                    <a href="{{ $item->whatsapp }}" target="_blank"
                                                        aria-label="share us on whatsapp" title="linkedin">
                                                        <i class="fa-brands fa-whatsapp"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <span>{{ $item->title }}</span>
                                                <h6><a href="team-details.html">{{ $item->name }}</a></h4>
                                                    <p><a href="tel:{{ $item->phone }}"><i class="ph ph-phone-call"></i>
                                                            Tel: {{ $item->phone }}</a>
                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="slider-navigation">
                            <button type="button" aria-label="prev slide" title="prev slide"
                                class="prev-team slider-btn">
                                <i class="fa-solid fa-arrow-left"></i>
                            </button>
                            <button type="button" aria-label="next slide" title="next slide"
                                class="next-team slider-btn slider-btn-next">
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / team section end ==== -->
    <!-- ==== contact section start ==== -->
    <section class="contact-mc">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-md-10 col-xl-7">
                    <div class="contact__content pt-120 pb-120">
                        <div class="section__header mb-55" data-aos="fade-up" data-aos-duration="1000">
                            <span class="sub-title">Get In Touch</span>
                            <h2 class="title-animation">Send Us message
                                For donation!
                            </h2>
                        </div>
                        <div class="contact__form" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <form action="#" method="post">
                                <div class="input-group">
                                    <div class="input-single">
                                        <input type="email" name="contact-email" id="contactEmail"
                                            placeholder="your email...">
                                        <i class="fa-solid fa-paper-plane"></i>
                                    </div>
                                    <div class="input-single">
                                        <input type="text" name="contact-number" id="contactNumber"
                                            placeholder="your phone...">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                </div>
                                <div class="input-single">
                                    <input type="text" name="contact-address" id="contactAddress"
                                        placeholder="your address...">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="input-single alter-input">
                                    <textarea name="contact-message" id="contactMessage" placeholder="your message..."></textarea>
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="form-cta">
                                    <button type="submit" aria-label="submit message" title="submit message"
                                        class="btn--secondary" data-text="Get A Quote"><span>Get A
                                            Quote</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-bg">
            <img src="assets/images/contact-bg.jpg" alt="Image" class="parallax-image">
        </div>
        <div class="shape-left" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
            <img src="assets/images/shape-left.png" alt="Image" class="base-img">
        </div>
    </section>
    <!-- ==== / contact section end ==== -->
    <!-- ==== faq section start ==== -->
    <section class="faq pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8 col-xl-6">
                    <div class="faq__content">
                        <div class="section__header mb-55" data-aos="fade-up" data-aos-duration="1000">
                            <span>Answers to Common Inquiries</span>
                            <h2 class="title-animation">Frequently Asked Questions</h2>
                        </div>
                        <div class="faq__content-inner cta" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="100">
                            <div class="accordion" id="accordion">
                                <div class="accordion-item">
                                    <h6 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            What kind of recipes can I find on your website?
                                        </button>
                                    </h6>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>
                                                It is a long established fact that a reader will be distracted by
                                                the readable the a content of a page when looking at its layout.
                                                Many desktop publishing packages and web page editors.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Are the recipes suitable for beginners?
                                        </button>
                                    </h6>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>
                                                It is a long established fact that a reader will be distracted by
                                                the readable the a content of a page when looking at its layout.
                                                Many desktop publishing packages and web page editors.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Do you offer cooking tips and techniques?
                                        </button>
                                    </h6>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>
                                                It is a long established fact that a reader will be distracted by
                                                the readable the a content of a page when looking at its layout.
                                                Many desktop publishing packages and web page editors.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            How frequently do you update your recipe collection?
                                        </button>
                                    </h6>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>
                                                It is a long established fact that a reader will be distracted by
                                                the readable the a content of a page when looking at its layout.
                                                Many desktop publishing packages and web page editors.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-5">
                    <div class="faq__thumb d-none d-lg-block">
                        <div class="faq__thumb-inner">
                            <div class="thumb-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                <img src="assets/images/faq/thumb-lg.png" alt="Image">
                            </div>
                            <div class="thumb-sm" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                                <img src="assets/images/faq/thumb-sm.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== / faq section end ==== -->
    <!-- ==== testimonial section start ==== -->
    <section class="testimonial-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-5">
                    <div class="section__header text-center mb-60" data-aos="fade-up" data-aos-duration="1000">
                        <span>Supporting Our Cause Together</span>
                        <h2 class="title-animation">Our valueable client's Awesome Feedback</h2>
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
            <div class="row justify-content-center">
                <div class="col-12 col-xl-12">
                    <div class="testimonial__inner">
                        <div class="testimonial__inner-wrapper">
                            <div class="testimonial__slider swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial__slider-single">
                                            <div class="row align-items-center gutter-40">
                                                <div class="col-12 col-lg-4 col-xl-4">
                                                    <div class="testimonial__slider-thumb">
                                                        <img src="assets/images/testimonial/one.png" alt="Image">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-8 col-xl-7">
                                                    <div class="testimonial__slider-content">
                                                        <div class="review">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                        <p>lorem ipsum dolor sit amet consectetur. ut tellus
                                                            suspendisse
                                                            nulla aliquam. risus rutrum tellus eget ultrices pretium
                                                            nisi amet facilisis.
                                                        </p>
                                                        <div class="testimonial__cta">
                                                            <div class="quote-icon">
                                                                <i class="fa-solid fa-quote-right"></i>
                                                            </div>
                                                            <div class="testimonial__cta-content">
                                                                <span>Marketing Manager</span>
                                                                <h4>Raven Steel</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial__slider-single">
                                            <div class="row align-items-center gutter-40">
                                                <div class="col-12 col-lg-4 col-xl-4">
                                                    <div class="testimonial__slider-thumb">
                                                        <img src="assets/images/testimonial/two.png" alt="Image">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-8 col-xl-7">
                                                    <div class="testimonial__slider-content">
                                                        <div class="review">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                        <p>lorem ipsum dolor sit amet consectetur. ut tellus
                                                            suspendisse
                                                            nulla aliquam. risus rutrum tellus eget ultrices pretium
                                                            nisi amet facilisis.
                                                        </p>
                                                        <div class="testimonial__cta">
                                                            <div class="quote-icon">
                                                                <i class="fa-solid fa-quote-right"></i>
                                                            </div>
                                                            <div class="testimonial__cta-content">
                                                                <span>Marketing Manager</span>
                                                                <h4>Robina smith</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial__slider-single">
                                            <div class="row align-items-center gutter-40">
                                                <div class="col-12 col-lg-4 col-xl-4">
                                                    <div class="testimonial__slider-thumb">
                                                        <img src="assets/images/testimonial/three.png" alt="Image">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-8 col-xl-7">
                                                    <div class="testimonial__slider-content">
                                                        <div class="review">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                        <p>lorem ipsum dolor sit amet consectetur. ut tellus
                                                            suspendisse
                                                            nulla aliquam. risus rutrum tellus eget ultrices pretium
                                                            nisi amet facilisis.
                                                        </p>
                                                        <div class="testimonial__cta">
                                                            <div class="quote-icon">
                                                                <i class="fa-solid fa-quote-right"></i>
                                                            </div>
                                                            <div class="testimonial__cta-content">
                                                                <span>Marketing Manager</span>
                                                                <h4>Robet Michel</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
    </section>
    <!-- ==== / testimonial section end ==== -->
    <!-- ==== image gallery section start ==== -->
    <div class="gallery">
        <div class="gallery__inner">
            <div class="gallery__slider">
                <div class="gallery__single">
                    <img src="assets/images/gallery/one.png" alt="Image">
                    <a href="index.html">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
                <div class="gallery__single">
                    <img src="assets/images/gallery/two.png" alt="Image">
                    <a href="index.html">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
                <div class="gallery__single">
                    <img src="assets/images/gallery/three.png" alt="Image">
                    <a href="index.html">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
                <div class="gallery__single">
                    <img src="assets/images/gallery/four.png" alt="Image">
                    <a href="index.html">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
                <div class="gallery__single">
                    <img src="assets/images/gallery/five.png" alt="Image">
                    <a href="index.html">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
                <div class="gallery__single">
                    <img src="assets/images/gallery/six.png" alt="Image">
                    <a href="index.html">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
                <div class="gallery__single">
                    <img src="assets/images/gallery/one.png" alt="Image">
                    <a href="index.html">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
                <div class="gallery__single">
                    <img src="assets/images/gallery/two.png" alt="Image">
                    <a href="index.html">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
                <div class="gallery__single">
                    <img src="assets/images/gallery/three.png" alt="Image">
                    <a href="index.html">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
                <div class="gallery__single">
                    <img src="assets/images/gallery/four.png" alt="Image">
                    <a href="index.html">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
                <div class="gallery__single">
                    <img src="assets/images/gallery/five.png" alt="Image">
                    <a href="index.html">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
                <div class="gallery__single">
                    <img src="assets/images/gallery/six.png" alt="Image">
                    <a href="index.html">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
