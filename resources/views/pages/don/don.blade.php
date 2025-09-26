@extends('home.master')
@section('content')
    <section class="common-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="common-banner__content text-center">
                        <h2 class="title-animation">Faites un don maintenant</h2>
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
                    Faites un don maintenant
                </li>
            </ol>
        </nav>
        @include('pages.bannier.bannier')
    </section>

    <section class="team-area-two pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-5">
                    <div class="section__header text-center mb-60" data-aos="fade-up" data-aos-duration="1000">
                        <span>Soutenir notre cause ensemble</span>
                        <h4 class="title-animation">Faites un don aujourd'hui et aidez-nous à faire la différence </h4>
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
            <div class="row gutter-40">

                <div class="faq__content-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="accordion" id="accordion">
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Comment puis-je faire un don ?
                                </button>
                            </h6>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>
                                        Il vous suffit de remplir notre formulaire de don en indiquant votre nom, téléphone,
                                        adresse, un petit message, ainsi que le montant que vous souhaitez donner.
                                        Sélectionnez ensuite votre méthode de paiement et confirmez la date du don. Une fois
                                        le formulaire soumis, votre contribution sera enregistrée en toute sécurité.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Quelles méthodes de paiement puis-je utiliser ?
                                </button>
                            </h6>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>
                                        Nous acceptons plusieurs méthodes de paiement pour vous faciliter la contribution :
                                        carte bancaire, virement bancaire ou paiement mobile. Choisissez simplement la
                                        méthode qui vous convient le mieux dans le formulaire et suivez les instructions
                                        fournies pour compléter votre don.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Que se passe-t-il après que j’ai fait mon don ?
                                </button>
                            </h6>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>
                                        Une fois votre formulaire soumis et votre paiement effectué, vous recevrez une
                                        confirmation par e-mail ou téléphone selon vos informations fournies. Votre don sera
                                        pris en compte immédiatement et vous recevrez également un reçu ou attestation si
                                        nécessaire pour vos archives ou pour des déductions fiscales.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cm-details__content">
                    <div class="cm-details__poster" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <img src="assets/images/event/poster-two.png" alt="Image">
                    </div>
                    <div class="donate-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="cm-group">
                            <h3 class="title-animation">Help Children Rise out of Poverty</h3>
                            <p>Lorem Ipsum is simply dummy a of the printing and type setting industry Loreaim
                                Ipsum has been the industry's standard dummy
                            </p>
                        </div>
                        <div class="cta">
                            <div class="community-donation">
                                <div class="community-donation__inner mt-60">
                                    <h5>Support Where It Counts.</h5>
                                    <div class="warning">
                                        <div class="line"><i class="fa-solid fa-triangle-exclamation"></i></div>
                                        <p><strong>Notice:</strong> Test mode is enabled. While in test mode no
                                            live
                                            donations are processed.
                                        </p>
                                    </div>
                                    <div class="donation-form" data-aos-delay="300">
                                        <div class="donation-form__single">
                                            <h5>Your Donation:</h5>
                                            <div class="input-group-icon">
                                                <div class="thumb">
                                                    <i class="fa-solid fa-dollar-sign"></i>
                                                </div>
                                                <input type="text" name="donation-amount" id="donationAmount">
                                            </div>
                                            <div class="made-amount">
                                                <span class="donation-amount">20</span>
                                                <span class="donation-amount">50</span>
                                                <span class="donation-amount active">100</span>
                                                <span class="donation-amount">200</span>
                                                <span class="donation-amount custom-amount">Custom</span>
                                            </div>
                                        </div>
                                        <div class="donation-form__single">
                                            <h5>Select Payment Method</h5>
                                            <div class="radio-wrapper">
                                                <div class="radio-single">
                                                    <input type="radio" id="testDonation" name="donation-payment"
                                                        checked>
                                                    <label for="testDonation">Test Donation</label>
                                                </div>
                                                <div class="radio-single">
                                                    <input type="radio" id="offlineDonation" name="donation-payment"
                                                        checked>
                                                    <label for="offlineDonation">Offline Donation</label>
                                                </div>
                                                <div class="radio-single">
                                                    <input type="radio" id="cardDonation" name="donation-payment"
                                                        checked>
                                                    <label for="cardDonation">Credit Card</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cta">
                                            <a href="donate-us.html" aria-label="donate us" title="donate us"
                                                class="btn--secondary" data-text="Donate Now"><span>Donate
                                                    Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="checkout__form">
                                    <div class="intro">
                                        <h5>Details Information</h5>
                                    </div>
                                    <form action="https://webnextpro.com/tf/charitia/index.html" method="post">
                                        <div class="input-group">
                                            <div class="input-single">
                                                <input type="text" name="c-name" id="cName"
                                                    placeholder="First Name" required>
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                            <div class="input-single">
                                                <input type="text" name="c-lastname" id="clastName"
                                                    placeholder="Last Name" required>
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-single">
                                                <input type="email" name="c-email" id="cEmail"
                                                    placeholder="Your Email" required>
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                            <div class="input-single">
                                                <input type="text" name="c-phone" id="cPhone"
                                                    placeholder="Your Number" required>
                                                <i class="fa-solid fa-phone"></i>
                                            </div>
                                        </div>
                                        <div class="input-single">
                                            <input type="text" name="c-address-two" id="cAddressTwo"
                                                placeholder="Your Address" required>
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <div class="input-single alter-input">
                                            <textarea name="contact-message" id="contactMessage" placeholder="your message..."></textarea>
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <div class="form-cta">
                                            <button type="submit" aria-label="submit message" title="submit message"
                                                class="btn--secondary" data-text="Save Informations"><span>Save
                                                    Informations</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="spade">
            <img src="{{ asset('assets/images/sprade-green.png') }}" alt="Image">
        </div>
    </section>
@endsection
