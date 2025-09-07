 <section class="common-banner">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="common-banner__content text-center">
                     <h2 class="title-animation">À propos de nous</h2>
                 </div>
             </div>
         </div>
     </div>
     <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
             <li class="breadcrumb-item">
                 <a href="{{ '/' }}">Acceuil</a>
             </li>
             <li class="breadcrumb-item active" aria-current="page">
                 À propos de nous
             </li>
         </ol>
     </nav>
     <div class="banner-bg">
         <img src="{{ asset('storage/' . optional($data)->bannier_image) }}" alt="Image">
     </div>
     <div class="sprade" data-aos="zoom-in" data-aos-duration="1000">
         <img src="assets/images/sprade-base.png" alt="Image" class="base-img">
     </div>
     <div class="line">
         <img src="assets/images/line.png" alt="Image">
     </div>
 </section>
