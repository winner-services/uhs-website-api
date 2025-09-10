    <div class="partner partner-alt">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner__inner">
                        <div class="partner__slider swiper">
                            <div class="swiper-wrapper">
                                @foreach ($partner as $item)
                                    <div class="swiper-slide">
                                        <div class="partner__slider-single">
                                            <img src="assets/images/sponsor/one.png" alt="Image">
                                        </div>
                                    </div>
                                @endforeach

                                <div class="swiper-slide">
                                    <div class="partner__slider-single">
                                        <img src="assets/images/sponsor/five.png" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
