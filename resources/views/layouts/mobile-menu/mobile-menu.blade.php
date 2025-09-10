 <div class="mobile-menu d-block d-xl-none">
     <nav class="mobile-menu__wrapper">
         <div class="mobile-menu__header nav-fade">
             <div class="logo">
                 <a href="{{ '/' }}" aria-label="home page" title="logo">
                     <img src="{{ asset('assets/images/logo.png') }}" alt="Image">
                 </a>
             </div>
             <button aria-label="close mobile menu" class="close-mobile-menu">
                 <i class="fa-solid fa-xmark"></i>
             </button>
         </div>
         <div class="mobile-menu__list"></div>
         <div class="mobile-menu__cta nav-fade d-block d-md-none">
             <a href="{{ route('contact.index') }}" class="btn--secondary" data-text="Contactez-nous"><span>Contactez-nous
                     </span></a>
         </div>
         <div class="mobile-menu__social social nav-fade">
             <a href="{{ optional($data)->facebook }}" target="_blank" aria-label="share us on facebook" title="facebook">
                 <i class="fa-brands fa-facebook-f"></i>
             </a>
             <a href="{{ optional($data)->instagram }}" target="_blank" aria-label="share us on vimeo" title="vimeo">
                 <i class="fa-brands fa-instagram"></i>
             </a>
             <a href="{{ optional($data)->twitter }}" target="_blank" aria-label="share us on twitter" title="twitter">
                 <i class="fa-brands fa-twitter"></i>
             </a>
             <a href="{{ optional($data)->linkedin }}" target="_blank" aria-label="share us on linkedin" title="linkedin">
                 <i class="fa-brands fa-linkedin-in"></i>
             </a>
         </div>
     </nav>
 </div>
 <div class="mobile-menu__backdrop"></div>
