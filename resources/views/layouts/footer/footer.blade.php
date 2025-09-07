<!-- ==== footer start ==== -->
<footer class="footer footer-two pt-120">
    <div class="container">
        <div class="row align-items-center gutter-30">
            <div class="col-12 col-lg-7 col-xxl-6">
                <div class="footer__newsletter-content">
                    <h3 class="title-animation">
                        Subscribe to Our Newsletter
                    </h3>
                    <p>Regular inspections and feedback mechanisms</p>
                </div>
            </div>
            <div class="col-12 col-lg-5 col-xxl-5 offset-xxl-1">
                <div class="footer__newsletter-form">
                    <form action="#" method="post">
                        <input type="email" required name="subscribe-email" id="subscribeEmail"
                            placeholder="Enter Email">
                        <button type="submit" aria-label="subscribe to our newsletter"
                            title="subscribe to our newsletter" class="btn--tertiary"> <i
                                class="fa-solid fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <hr class="divider">
            </div>
        </div>
        <div class="row gutter-60">
            <div class="col-12 col-md-6 col-xl-4">
                <div class="footer__widget" data-aos="fade-up" data-aos-duration="1200">
                    <div class="footer__logo">
                        <a href="{{ '/' }}">
                            <img src="assets/images/logo.png" alt="Image">
                        </a>
                    </div>
                    <div class="footer__widget-content">
                        <p>{{ Str::limit(optional($data)->description,150)}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-2">
                <div class="footer__widget" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                    <div class="footer__widget-intro">
                        <h5>Quick Links</h5>
                        <div class="line">
                            <span class="large-line"></span>
                            <span class="small-line"></span>
                            <span class="small-line"></span>
                        </div>
                    </div>
                    <div class="footer__widget-content">
                        <ul class="footer__widget-list">
                            <li><a href="{{ route('about.index') }}"><i class="fa-solid fa-angle-right"></i> A Propos de nous</a>
                            </li>
                            <li><a href="donate-us.html"><i class="fa-solid fa-angle-right"></i>
                                    Donate Us</a>
                            </li>
                            <li><a href="our-causes.html"><i class="fa-solid fa-angle-right"></i>Our
                                    Causes</a>
                            </li>
                            <li><a href="shop.html"><i class="fa-solid fa-angle-right"></i> Our
                                    Shop</a>
                            </li>
                            <li><a href="events.html"><i class="fa-solid fa-angle-right"></i>Events</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="footer__widget" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                    <div class="footer__widget-intro">
                        <h5>Top News</h5>
                        <div class="line">
                            <span class="large-line"></span>
                            <span class="small-line"></span>
                            <span class="small-line"></span>
                        </div>
                    </div>
                    <div class="footer__widget-content">
                        <div class="footer__blog-single">
                            <div class="thumb">
                                <a href="blog-details.html">
                                    <img src="assets/images/blog/footer-one.png" alt="Image">
                                </a>
                            </div>
                            <div class="content">
                                <h6><a href="blog-details.html">Unity in Giving Community
                                        Charity</a>
                                </h6>
                                <p>Aug 25, 2024</p>
                            </div>
                        </div>
                        <div class="footer__blog-single">
                            <div class="thumb">
                                <a href="blog-details.html">
                                    <img src="assets/images/blog/footer-two.png" alt="Image">
                                </a>
                            </div>
                            <div class="content">
                                <h6><a href="blog-details.html">Poverty Not Only Money It Can</a>
                                </h6>
                                <p>Aug 25, 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <div class="footer__widget" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                    <div class="footer__widget-intro">
                        <h5>Get In Touch</h5>
                        <div class="line">
                            <span class="large-line"></span>
                            <span class="small-line"></span>
                            <span class="small-line"></span>
                        </div>
                    </div>
                    <div class="footer__widget-content">
                        <ul class="footer__contact-list">
                            <li><a href="https://www.google.com/maps?q=0.337907,29.748384"
                                    target="_blank"><i class="fa-solid fa-location-dot"></i>
                                    {{ optional($data)->address}}
                                </a>
                            </li>
                            <li><a href="tel:{{ optional($data)->phone}}"><i class="fa-solid fa-phone-flip"></i>
                                    {{ optional($data)->phone}}</a>
                            </li>
                            <li><a href="mailto:{{ optional($data)->email}}"><i
                                        class="fa-regular fa-envelope"></i>{{ optional($data)->email}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer__bottom-inner">
                        <div class="row align-items-center gutter-24">
                            <div class="col-12 col-lg-7">
                                <div class="footer__bottom-left">
                                    <ul class="footer__bottom-list justify-content-center justify-content-lg-start">
                                        <li><a href="contact-us.html">By winner's tech</a></li>
                                        <li><span></span></li>
                                    </ul>
                                    <p class="text-center text-lg-start">Copyright &copy; <span
                                            id="copyrightYear"></span> <a href="{{ '/' }}">UHS Asbl</a>.
                                        All rights
                                        reserved.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5">
                                <div class="footer__bottom-right">
                                    <div class="social justify-content-center justify-content-lg-end">
                                        <a href="{{ optional($data)->facebook }}" target="_blank"
                                            aria-label="share us on facebook" title="facebook">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a href="{{ optional($data)->instagram }}" target="_blank" aria-label="share us on vimeo"
                                            title="vimeo">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a href="{{ optional($data)->twitter }}" target="_blank" aria-label="share us on twitter"
                                            title="twitter">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                        <a href="{{ optional($data)->linkedin }}" target="_blank"
                                            aria-label="share us on linkedin" title="linkedin">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                        <a href="{{ optional($data)->youtube}" target="blank"
                                            aria-label="share us on youtubetitle="outube
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sprade" data-aos="zoom-in" data-aos-duration="1000">
        <img src="assets/images/sprade.png" alt="Image" class="base-img">
    </div>
    <div class="sprade-light" data-aos="zoom-in" data-aos-duration="1000">
        <img src="assets/images/sprade-light.png" alt="Image">
    </div>
    <div class="footer__thumb-right" data-aos="fade-left" data-aos-duration="1000">
        <img src="assets/images/mask/footer-right.png" alt="Image">
    </div>
</footer>
<!-- ==== / footer end ==== -->
