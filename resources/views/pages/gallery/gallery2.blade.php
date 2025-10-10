<div class="gallery">
    <div class="gallery__inner">
        <div class="gallery__slider">
            @foreach ($gallery as $index => $item)
                <div class="gallery__single">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="Image"
                        style="width: 100%; height: 250px; object-fit: cover; border-radius: 8px;">
                    <button class="btn btn-light btn-sm position-absolute top-50 start-50 translate-middle"
                        data-bs-toggle="modal" data-bs-target="#galleryModal" data-bs-slide-to="{{ $index }}">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                    </button>
                </div>
            @endforeach
        </div>
    </div>
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-transparent border-0">
                <div id="galleryCarousel" class="carousel slide" data-bs-ride="false">

                    <!-- ✅ Indicateurs (pagination) -->
                    <div class="carousel-indicators">
                        @foreach ($gallery as $index => $item)
                            <button type="button" data-bs-target="#galleryCarousel"
                                data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"
                                aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                                aria-label="Slide {{ $index + 1 }}"></button>
                        @endforeach
                    </div>

                    <!-- Images -->
                    <div class="carousel-inner">
                        @foreach ($gallery as $index => $item)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img src="{{ asset('storage/' . $item->image) }}" class="d-block w-100 rounded"
                                    alt="Image">
                            </div>
                        @endforeach
                    </div>

                    <!-- Contrôles -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
