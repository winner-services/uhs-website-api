<div class="gallery">
    <div class="gallery__inner">
        <div class="gallery__slider">
            @foreach ($gallery as $item)
                <div class="gallery__single"
                    style="position: relative; overflow: hidden; width: 300px; height: 300px; border-radius: 10px; display: inline-block; margin: 5px;">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="Image"
                        style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                    <a href="#"
                        style="position: absolute; bottom: 10px; right: 10px; color: #fff; background: rgba(0,0,0,0.5); border-radius: 50%; padding: 8px; font-size: 18px; text-decoration: none;">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    $('.gallery__slider').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 5000, // 🔹 délai entre les slides (5 secondes)
        autoplaySpeed: 1000, // 🔹 vitesse de transition
        items: 3
    });
</script>
