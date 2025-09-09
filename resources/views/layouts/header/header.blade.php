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
                                    <a href="{{ route('domaine.index') }}">Nos domaines</a>
                                </li>
                                <li class="navbar__item nav-fade">
                                    <a href="{{ route('about.index') }}">Nos projets</a>
                                </li>
                                 <li class="navbar__item nav-fade">
                                    <a href="{{ route('about.index') }}">Événements</a>
                                </li>
                                 <li class="navbar__item nav-fade">
                                    <a href="{{ route('team.index') }}">Notre Équipe</a>
                                </li>
                                <li class="navbar__item nav-fade">
                                    <a href="contact-us.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="navbar__options">
                            <div class="navbar__mobile-options ">
                                <div class="search-box">
                                    <button class="open-search" aria-label="search products" title="open search box">
                                        <i class="ph ph-magnifying-glass"></i>
                                    </button>
                                </div>
                                <span class="divider"></span>
                                <div class="cart-box">
                                    <button class="open-cart cart" aria-label="cart" title="open cart">
                                        <i class="ph ph-shopping-cart-simple"></i>
                                        <span>02</span>
                                    </button>
                                </div>
                                <a href="donate-us.html" class="btn--secondary d-none d-md-flex"
                                    data-text="Donate Now"><span>Donate
                                        Now</span></a>
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
