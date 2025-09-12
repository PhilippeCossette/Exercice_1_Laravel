@extends('master')
@section('title', 'Boutique - Produit unique')
@section('content')

<!-- Produit vedette -->
<header class="video-banner">
    <!-- Vidéo en arrière-plan -->
    <video autoplay muted loop playsinline class="video-bg">
        <source src="{{ asset('assets/videos/banner-video.mp4') }}" type="video/mp4">
        Votre navigateur ne supporte pas la vidéo.
    </video>

    <!-- Contenu au-dessus de la vidéo -->
    <div class="overlay">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-4 fw-bolder text-white mb-3">Découvrez notre produit exclusif</h1>
                    <p class="lead fw-normal text-white mb-4">
                        Un produit unique, de qualité supérieure, conçu pour vous simplifier la vie.
                        Disponible dès maintenant en quantité limitée !
                    </p>
                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#acheter">Acheter maintenant</a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Section Produit -->
<section class="py-5 bg-light" id="acheter">
    <div class="container px-5">
        <div class="row align-items-center justify-content-center">
            <!-- Image du produit -->
            <div class="col-lg-6 mb-4 mb-lg-0 text-center">
                <img class="img-fluid rounded-3" src="{{ asset('assets/img/kb.png') }}" alt="Clavier exclusif">
            </div>
            <!-- Texte et bouton -->
            <div class="col-lg-6">
                <h2 class="fw-bolder mb-3">Clavier mécanique RGB</h2>
                <p class="lead text-muted mb-4">
                    Un clavier mécanique haut de gamme avec touches réactives, rétroéclairage RGB personnalisable,
                    et ergonomie optimale pour le gaming et le travail.
                </p>
                <h3 class="fw-bold text-primary mb-4">149,99 $</h3>
                <a class="btn btn-primary btn-lg px-5" href="#">Ajouter au panier</a>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container px-5">
        <div class="text-center mb-5">
            <h2 class="fw-bolder">Caractéristiques Importantes</h2>
            <p class="lead text-muted">Découvrez pourquoi ce clavier est idéal pour le gaming et le travail.</p>
        </div>
        <div class="row gx-5 row-cols-1 row-cols-md-2 row-cols-lg-4">
            <!-- Caractéristique 1 -->
            <div class="col mb-4">
                <div class="card h-100 shadow border-0 text-center p-4">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3 mx-auto">
                        <i class="bi bi-speedometer2"></i>
                    </div>
                    <h5 class="fw-bold">Vitesse de frappe</h5>
                    <p class="text-muted">Touches mécaniques ultra-réactives pour une frappe rapide et précise.</p>
                </div>
            </div>
            <!-- Caractéristique 2 -->
            <div class="col mb-4">
                <div class="card h-100 shadow border-0 text-center p-4">
                    <div class="feature bg-warning bg-gradient text-white rounded-3 mb-3 mx-auto">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h5 class="fw-bold">Durabilité</h5>
                    <p class="text-muted">Chaque touche est conçue pour résister à des millions de frappes sans perte de performance.</p>
                </div>
            </div>
            <!-- Caractéristique 3 -->
            <div class="col mb-4">
                <div class="card h-100 shadow border-0 text-center p-4">
                    <div class="feature bg-success bg-gradient text-light rounded-3 mb-3 mx-auto">
                        <i class="bi bi-lightning-charge"></i>
                    </div>
                    <h5 class="fw-bold">Rétroéclairage RGB</h5>
                    <p class="text-muted">Personnalisez votre expérience avec des couleurs et effets lumineux adaptables.</p>
                </div>
            </div>
            <!-- Caractéristique 4 -->
            <div class="col mb-4">
                <div class="card h-100 shadow border-0 text-center p-4">
                    <div class="feature bg-danger bg-gradient text-white rounded-3 mb-3 mx-auto">
                        <i class="bi bi-hand-thumbs-up"></i>
                    </div>
                    <h5 class="fw-bold">Confort</h5>
                    <p class="text-muted">Ergonomique et agréable au toucher pour réduire la fatigue pendant de longues sessions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container px-5">
        <div class="row align-items-center gx-5">
            <!-- Texte -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="fw-bolder">Un clic parfait à chaque frappe</h2>
                <p class="lead text-muted">
                    Découvrez la sensation unique des switches mécaniques de qualité.
                    Chaque clic est <strong>fluide</strong>, <strong>réactif</strong> et offre un
                    <strong>ressenti tactile</strong> incomparable.
                    Que ce soit pour jouer ou travailler, profitez d’une frappe précise et agréable
                    qui vous accompagnera pendant des heures sans fatigue.
                </p>
            </div>
            <!-- Vidéo -->
            <div class="col-lg-6">
                <div class="ratio ratio-16x9">
                    <video autoplay muted loop playsinline>
                        <source src="{{ asset('assets/videos/kb-typing.mp4') }}" type="video/mp4">
                        Votre navigateur ne supporte pas la vidéo.
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Témoignages -->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="text-center">
            <div class="fs-4 mb-4 fst-italic">« Ce produit a changé ma vie, je le recommande à tout le monde ! »</div>
            <div class="fw-bold">– Client(e) satisfait(e)</div>
        </div>
    </div>
</section>

<!-- Infolettre -->
<section class="bg-light rounded-3 p-4 p-sm-5 mt-5">
    <div class="d-flex align-items-center flex-column text-center text-xl-start gap-4">
        <div class="">
            <div class="fs-3 fw-bold text-dark">Recevez nos offres exclusives</div>
            <div class="text-muted">Inscrivez-vous à notre infolettre pour ne rien manquer.</div>
        </div>
        <div>
            <div class="input-group mb-2">
                <input class="form-control" type="email" placeholder="Adresse courriel..." aria-label="Adresse courriel..." aria-describedby="button-newsletter">
                <button class="btn btn-outline-primary" id="button-newsletter" type="button">S’inscrire</button>
            </div>
        </div>
    </div>
</section>

@endsection