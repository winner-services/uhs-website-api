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
                                            <img src="{{ asset('storage/'. $item->image) }}" alt="Image" class="img-partner" style="width: 50%;">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
