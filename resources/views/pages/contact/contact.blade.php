@extends('home.master')
@section('content')
    <section class="common-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="common-banner__content text-center">
                        <h2 class="title-animation">Contactez-nous</h2>
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
                    Contactez-nous
                </li>
            </ol>
        </nav>
        @include('pages.bannier.bannier')
    </section>

    <div class="contact-map pt-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="map-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4800.16799362391!2d29.72043727573749!3d0.3352516996614592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1761bdce292d1d2d%3A0x38c3fc4a1f630114!2sUNION%20POUR%20L&#39;HUMANITE%20SAINE!5e1!3m2!1sfr!2scd!4v1757422681389!5m2!1sfr!2scd"
                            width="100" height="800" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==== / contact map end ==== -->
    <!-- ==== contact section start ==== -->
    <section class="contact contact-main volunteer pt-120 pb-120">
        <div class="container">
            <div class="row gutter-40">
                <div class="col-12 col-lg-5 col-xl-4">
                    <div class="contact__content">
                        <div class="section__header mb-55" data-aos="fade-up" data-aos-duration="1000">
                            <h2 class="title-animation">Contactez-nous </h2>
                            <p>Vous avez une question, une suggestion ou souhaitez collaborer avec nous ?
                                L’équipe de UHS Asbl est à votre écoute.
                                Remplissez simplement le formulaire ci-dessous et nous vous répondrons dans les plus
                                brefs
                                délais.
                                Merci de votre intérêt et de votre engagement à nos côtés.
                            </p>
                        </div>
                        <div class="topbar__item mt-60">
                            <div class="topbar__item-single" data-aos="fade-up" data-aos-duration="1000">
                                <div class="topbar__item-single__icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="topbar__item-single__content">
                                    <p><a href="tel:2305-587-3407">{{ $data->phone }} </a></p>
                                </div>
                            </div>
                            <div class="topbar__item-single" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="200">
                                <div class="topbar__item-single__icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="topbar__item-single__content">
                                    <p><a href="mailto:support@example.com">{{ $data->email }}</a></p>
                                </div>
                            </div>
                            <div class="topbar__item-single" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="400">
                                <div class="topbar__item-single__icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="topbar__item-single__content">
                                    <p><a href="https://maps.app.goo.gl/1PQ1JmL7HUYEvQvq7"
                                            target="_blank">{{ $data->address }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 offset-xl-1 col-xl-7">
                    <div class="contact__form volunteer__form checkout__form" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <div class="volunteer__form-content">
                            <h4 class="title-animation">Remplissez le formulaire</h4>
                            <p>Votre adresse e-mail ne sera pas publiée. Les champs obligatoires sont marqués *</p>
                        </div>
                        <form action="{{ route('contact.store') }}" method="post" class="mt-60">
                            @csrf
                            <div class="input-single">
                                <input type="text" name="name" id="fullName" placeholder="Entrer nom" required>
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="input-single">
                                <input type="email" name="email" id="cEmail" placeholder="Entrer Email" required>
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="input-single">
                                <input type="text" name="phone" id="phoneNumber" placeholder="Phone" required>
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="input-single alter-input">
                                <textarea name="message" id="contactMessage" placeholder="Votre Message..."></textarea>
                                <i class="fa-solid fa-comments"></i>
                            </div>
                            <div class="form-cta">
                                <button type="submit" aria-label="submit message" title="submit message"
                                    class="btn--secondary" data-text="Envoyer"><span>Envoyer</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Succès !',
                text: '{{ session('success') }}',
                timer: 3000 // La boîte se ferme après 3 secondes
            });
        </script>
    @endif
    @if (session('message'))
        <script>
            Swal.fire({
                title: 'Erreur !',
                text: "{{ session('message') }}",
                icon: 'error',
                timer: 3000
            });
        </script>
    @endif
@endsection
