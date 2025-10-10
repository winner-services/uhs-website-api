<div class="gallery">
    <div class="gallery__inner">
        <div class="gallery__slider">
            @foreach ($gallery as $item)
                <div class="gallery__single">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="Image" style="width: 100%; height: 250px; object-fit: cover; border-radius: 8px;">
                    <a href="#">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
