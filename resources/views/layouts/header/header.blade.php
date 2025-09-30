<header class="header header-secondary">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main-header__menu-box">
                    <nav class="navbar p-0">
                        <div class="navbar-logo">
                            <a href="{{ '/' }}">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="Image">
                            </a>
                        </div>
                        <div class="navbar__menu d-none d-xl-block">
                            <ul class="navbar__list">
                                <li class="navbar__item nav-fade">
                                    <a href="{{ '/' }}">Acceuil</a>
                                </li>
                                <li class="navbar__item nav-fade">
                                    <a href="{{ route('about.index') }}">A Propos</a>
                                </li>
                                <li class="navbar__item nav-fade">
                                    <a href="{{ route('domaine.index') }}">Domaines</a>
                                </li>
                                <li class="navbar__item nav-fade">
                                    <a href="{{ route('project.index') }}">Projets</a>
                                </li>
                                <li class="navbar__item nav-fade">
                                    <a href="{{ route('event.index') }}">Événements</a>
                                </li>
                                <li class="navbar__item nav-fade">
                                    <a href="{{ route('team.index') }}">Équipe</a>
                                </li>
                                <li class="navbar__item nav-fade">
                                    <a href="{{ route('offre.index') }}">Offres</a>
                                </li>
                                <li class="navbar__item nav-fade">
                                    <a href="{{ route('contact.index') }}">Contactez-nous</a>
                                </li>
                            </ul>
                        </div>
                        <div class="navbar__options">
                            <div class="navbar__mobile-options ">

                                <a href="{{ route('donateData.index') }}" class="btn--secondary d-none d-md-flex"
                                    data-text="Faire un don"><span>Faire un don</span></a>
                            </div>
                            <button class="open-offcanvas-nav d-flex d-xl-none" aria-label="toggle mobile menu"
                                title="open offcanvas menu">
                                <span class="icon-bar top-bar"></span>
                                <span class="icon-bar middle-bar"></span>
                                <span class="icon-bar bottom-bar"></span>
                            </button>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
