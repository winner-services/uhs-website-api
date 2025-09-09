 <div class="gallery">
     <div class="container py-5">
         <div class="row justify-content-center">
             <div class="col-12 col-lg-10 col-xl-5">
                 <div class="section__header text-center mb-60" data-aos="fade-up" data-aos-duration="1000">
                     <span>Soutenir notre cause ensemble</span>
                     <h2 class="title-animation">Gallerie des Images</h2>
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

         <!-- Grille des images -->
         <div class="row g-4">
             @foreach ($gallery as $index => $item)
                 <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                     <div class="card border-0 shadow-sm h-100">
                         <div class="position-relative">
                             <img src="{{ asset('storage/' . $item->image) }}"
                                 class="card-img-top img-fluid rounded gallery-img" alt="Image">

                             <!-- Bouton zoom -->
                             <button class="btn btn-light btn-sm position-absolute top-50 start-50 translate-middle"
                                 data-bs-toggle="modal" data-bs-target="#galleryModal"
                                 data-bs-slide-to="{{ $index }}">
                                 <i class="fa-solid fa-magnifying-glass-plus"></i>
                             </button>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>
     </div>
     {{-- Pagination --}}
     <div class="row pb-5">
         <div class="col-12">
             <div class="pagination-wrapper mt-60" data-aos="fade-up" data-aos-duration="1000">
                 <ul class="pagination main-pagination">

                     {{-- Lien vers la page précédente --}}
                     @if ($gallery->onFirstPage())
                         <li class="disabled"><button><i class="fa-solid fa-angles-left"></i></button></li>
                     @else
                         <li><a href="{{ $gallery->previousPageUrl() }}"><i class="fa-solid fa-angles-left"></i></a>
                         </li>
                     @endif

                     {{-- Numéros de pages --}}
                     @foreach ($gallery->getUrlRange(1, $gallery->lastPage()) as $page => $url)
                         @if ($page == $gallery->currentPage())
                             <li><a href="{{ $url }}" class="active">{{ $page }}</a></li>
                         @else
                             <li><a href="{{ $url }}">{{ $page }}</a></li>
                         @endif
                     @endforeach

                     {{-- Lien vers la page suivante --}}
                     @if ($gallery->hasMorePages())
                         <li><a href="{{ $gallery->nextPageUrl() }}"><i class="fa-solid fa-angles-right"></i></a></li>
                     @else
                         <li class="disabled"><button><i class="fa-solid fa-angles-right"></i></button></li>
                     @endif

                 </ul>
             </div>
         </div>
     </div>
     <!-- Modal avec Carousel -->
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
