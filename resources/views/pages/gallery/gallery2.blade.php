<div class="gallery">
    <div class="gallery__inner">
        <div class="gallery__slider">
            @foreach ($gallery as $index => $item)
                <div class="gallery__single">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="Image">
                    <a href="#">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            @endforeach
        </div>

    </div>
