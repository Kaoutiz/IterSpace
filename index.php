<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="icon" type="image/png" href="assets/img/iterspace_logo.png" />

    <!-- BEGIN: LIBRAIRIES -->
    <link rel="stylesheet" href="assets/css/boxicons.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- END: LIBRAIRIES -->

    <!-- BEGIN: STYLES -->
    <link rel="stylesheet" href="assets/css/range.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- END: STYLES -->
</head>

<body>
    <!-- BEGIN: JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- END: JQuery -->
    <header id="header">
        <video id="video_principal" width="100%" autoplay loop muted>
            <source src="assets/videos/header.mp4" type="video/mp4">
        </video>
        <div id="overlay">
            <nav>
                <ul class="nav-left">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="pages/qui-sommes-nous.php">Qui sommes-nous ?</a></li>
                    <li><a href="pages/catalogue.php">Catalogue</a></li>
                    <li><a href="pages/contact.php">Contact</a></li>
                </ul>
                <ul class="nav-right d-flex align-center">
                    <li><a href="pages/connexion.php">Se connecter</a></li>
                    <i class='bx bx-menu' id="nav-mobile-icon"></i>
                </ul>
            </nav>
            <div id="nav-mobile">
                <div class="d-flex align-items-center justify-content-end close-nav-mobile" id="close-nav-mobile"><span style="margin-right:5px">Fermer</span><i class='bx bx-x'></i></div>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="pages/connexion.php">Se connecter</a></li>
                    <li><a href="pages/qui-sommes-nous.php">Qui sommes-nous ?</a></li>
                    <li><a href="pages/catalogue.php">Catalogue</a></li>
                    <li><a href="pages/contact.php">Contact</a></li>
                </ul>
            </div>
            <div id="title-zone">
                <div id="title-site">
                    <h1><span class="title-site-light">iter</span>space</h1>
                    <h2>Un chemin vers l'espace</h2>
                    <a href="#reservation"><button id="reserver-btn" class="rounded-btn">Réservez maintenant</button></a>
                </div>
            </div>
            <div class="d-flex justify-content-center align-center text-center zone-compteur">
                <div class="compteur-box">
                    <p class="number" id="number-voyage">0</p>
                    <p class="title-compteur">Voyages effectués</p>
                </div>
                <div class="compteur-box">
                    <p class="number" id="number-client">0</p>
                    <p class="title-compteur">Clients satisfaits</p>
                </div>
                <div class="compteur-box">
                    <p class="number" id="number-fusee">0</p>
                    <p class="title-compteur">Fusées disponibles</p>
                </div>
            </div>
        </div>
    </header>
    <section id="presentation">
        <div class="container">
            <div class="section-title">
                <h3 class="title">Présentation</h3>
            </div>
            <div class="row">
                <div id="presnation-p" class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" data-aos="fade-down">
                    <h4>Nos valeurs</h4>
                    <p>
                        Bienvenue dans le monde passionnant d'Iterspace, une société pionnière dans le domaine du
                        tourisme spatial. Nous sommes fiers de vous présenter notre offre exclusive de voyages
                        touristiques dans l'espace, qui vous emmèneront au-delà de l'atmosphère terrestre pour
                        vivre une expérience unique et inoubliable.
                        <br>
                        Notre entreprise est fondée sur une passion
                        pour l'exploration spatiale et la découverte de nouveaux horizons. Nous sommes convaincus
                        que l'avenir de l'humanité se trouve dans l'exploration de l'espace, et nous avons donc
                        créé Iterspace pour permettre à chacun de réaliser ce rêve.
                    </p>
                </div>
                <div id="presnation-img" class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center" data-aos="fade-left">
                    <img src="assets/img/spaceship.png" class="spaceship" alt="vaisseau-spatial" />
                </div>
            </div>
        </div>
    </section>
    <section id="actus">
        <div class="container">
            <div class="section-title">
                <h3 class="title">Actualités</h3>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 first_card" data-aos="slide-right">
                        <img src="assets/img/astronaute.jpg" class="card-img-top" alt="actualites-1" />
                        <div class="card-body">
                            <h5 class="card-title text-dark">Title</h5>
                            <p class="card-text text-dark">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <button class="rounded-btn">En savoir plus</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 second_card" data-aos="slide-up">
                        <img src="assets/img/astronaute.jpg" class="card-img-top" alt="actualites-2" />
                        <div class="card-body">
                            <h5 class="card-title text-dark">Title</h5>
                            <p class="card-text text-dark">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <button class="rounded-btn">En savoir plus</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 third_card" data-aos="slide-left">
                        <img src="assets/img/astronaute.jpg" class="card-img-top" alt="actualites-3" />
                        <div class="card-body">
                            <h5 class="card-title text-dark">Title</h5>
                            <p class="card-text text-dark">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <button class="rounded-btn">En savoir plus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="reservation">
        <div class="container">
            <div class="section-title">
                <h3 class="title">Réservations</h3>
            </div>
            <div class="calendar-wrapper d-flex justify-content-around">
                <div id="filter" class="col-12 col-sm-12 col-md-3 col-xl-3">
                    <div id="sejour" class="d-flex flex-column" data-aos="zoom-in">
                        <label for="sieges" class="mb-2">Nombre de sièges</label>
                        <select name="sieges" id="sieges" class="form-select mb-3">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        <label for="fusee" class="mb-2">Fusée</label>
                        <select name="fusee" id="fusee" class="form-select mb-3">
                            <option value="Falcon 9" select>Falcon 9</option>
                            <option value="Ariane 5">Ariane 5</option>
                            <option value="Vega">Vega</option>
                        </select>
                    </div>
                    <div id="budget" data-aos="zoom-in-up" data-aos-delay="200">
                        <div class="range">
                            <label class="mb-2">Budget en K€</label>
                            <div class="range-label mb-3 d-flex justify-content-between">
                                <label>100K €</label>
                                <label>+1 000K €</label>
                            </div>
                            <div class="range-slider">
                                <span class="range-selected"></span>
                            </div>
                            <div class="range-input">
                                <input type="range" class="min" min="0" max="1000" value="0" step="200">
                                <input type="range" class="max" min="0" max="1000" value="1000" step="200">
                            </div>
                            <div class="range-price d-none">
                                <label for="min">Min</label>
                                <input type="number" name="min" value="0" hidden>
                                <label for="max">Max</label>
                                <input type="number" name="max" value="1000" hidden>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="calendar" class="col-12 col-sm-12 col-md-9 col-xl-9" data-aos="zoom-in" data-aos-delay= "400">
                    <div id="calendar-step1">
                        <div id="calendar-header">
                            <div class="d-flex align-items-start">
                                <p class="d-flex align-items-center"><i class='bx bx-dollar-circle'></i><span class="info-price">Les prix sont en milliers d'euros</span></p> 
                            </div>
                            <div id="mounth-title" class="d-flex justify-content-between align-items-center mt-2">
                                <div class="border border-dark rounded-circle align-items-center">
                                    <i class='bx bx-chevron-left'></i>
                                </div>
                                <h4>Février 2023</h4>
                                <h4 class="mounth-next">Mars 2023</h4>
                                <div class="border border-dark rounded-circle align-items-center">
                                    <i class='bx bx-chevron-right'></i>
                                </div>
                            </div>  
                        </div>
                        <div id="calendar-body" class="d-flex justify-content-between">
                            <!-- Le HTML ici est généré depuis calendar.js grâce au XML -->
                        </div>
                    </div>
                    <div id="calendar-step2" class="d-none">
                        <h4 class="d-flex align-items-center"><i class='bx bxs-user-check'></i><span style="margin-left:5px">Coordonnées</span></h4>
                        <div class="row mb-1">
                            <div class="col-6">
                                <label for="nom">Nom:</label>
                                <input type="text" name="nom" id="nom" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="prenom">Prénom:</label>
                                <input type="text" name="prenom" id="prenom" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-6">
                                <label for="email">Email:</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="tel">Téléphone:</label>
                                <input type="text" name="tel" id="tel" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-12">
                                <label for="adresse">Adresse:</label>
                                <input type="text" name="adresse" id="adresse" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-6">
                                <label for="cp">Code postal:</label>
                                <input type="text" name="cp" id="cp" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="ville">Ville:</label>
                                <input type="text" name="ville" id="ville" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div id="calendar-step3" class="d-none">
                        <h4 class="d-flex align-items-center"><i class='bx bx-credit-card-alt' ></i><span style="margin-left:5px">Paiement</span></h4>
                        <div class="row mb-1">
                            <div class="col-12">
                                <img src="assets/img/carte_bancaire.png" alt="Carte bancaire" width="200"> 
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-12">
                                <label for="nom_cb">Nom sur la carte:</label>
                                <input type="text" name="nom_cb" id="nom_cb" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-12">
                                <label for="cb_num">N° de carte:</label>
                                <input type="text" name="cb_num" id="cb_num" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-7">
                                <label for="date_expiration">Date d'expiration:</label>
                                <input type="text" name="date_expiration" id="date_expiration" class="form-control">
                            </div>
                            <div class="col-5">
                                <label for="crypto">Cryptogramme visuel:</label>
                                <input type="text" name="crypto" id="crypto" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div id="estimation" class="d-none d-flex">
                        <h2 class="price_estimation">Estimation du prix du séjour: <span id="price_value"></span> 000 €</h2>  
                        <button id="previous-calendar-btn" class="rounded-btn rounded-pill d-flex align-items-center d-none"><i class='bx bx-chevron-left'></i> <span>Précendent</span></button>
                        <button id="next-calendar-btn" class="rounded-btn rounded-pill d-flex align-items-center"><span>Continuer</span> <i class='bx bx-chevron-right'></i></button>
                    </div>
                    <div id="info_choice" class="d-none flex-column"> 
                        <h2 class="fusee_value" id="fusee_value"></h2>  
                        <p class="choice"><span id="sieges_value"></span></p> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="produits">
        <div class="container">
            <div class="section-title" data-aos="zoom-in">
                <h3>Nos produits</h3>
            </div>
            <div class="d-flex justify-content-between mb-5 product-content">
                <div class="col-md-3 video-bracelet text-center" data-aos="zoom-in">
                    <a href="#">
                        <video width="100%" height="100%" muted>
                            <source src="assets/videos/IRON_ZOOM.mp4" type="video/mp4">
                        </video>
                    </a>
                    <p class="title-product">Bracelet iron</p>
                    <p class="price-product">199.90€</p>
                    <a href="#">
                        <button class="rounded-btn">Acheter</button>
                    </a>
                </div>
                <div class="col-md-3 video-bracelet text-center" data-aos="zoom-in" data-aos-offset="200">
                    <a href="#">
                        <video width="100%" height="100%" muted>
                            <source src="assets/videos/ATLAS_ZOOM.mp4" type="video/mp4">
                        </video>
                    </a>
                    <p class="title-product">Bracelet atlas</p>
                    <p class="price-product">204.90€</p>
                    <a href="#">
                        <button class="rounded-btn">Acheter</button>
                    </a>
                </div>
                <div class="col-md-3 video-bracelet text-center" data-aos="zoom-in" data-aos-offset="200">
                    <a href="#">
                        <video width="100%" height="100%" muted>
                            <source src="assets/videos/MARS_ZOOM.mp4" type="video/mp4">
                        </video>
                    </a>
                    <p class="title-product">Bracelet mars</p>
                    <p class="price-product">189.90€</p>
                    <a href="#">
                        <button class="rounded-btn">Acheter</button>
                    </a>
                </div>
                <div class="col-md-3 video-bracelet text-center" data-aos="zoom-in" data-aos-offset="200">
                    <a href="#">
                        <video width="100%" height="100%" muted>
                            <source src="assets/videos/MOON_ZOOM.mp4" type="video/mp4">
                        </video>
                    </a>
                    <p class="title-product">Bracelet moon</p>
                    <p class="price-product">179.90€</p>
                    <a href="#">
                        <button class="rounded-btn">Acheter</button>
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-between product-content second-line-product">
                <div class="col-md-3 video-bracelet text-center" data-aos="zoom-in">
                    <a href="#">
                        <video width="100%" height="100%" muted>
                            <source src="assets/videos/MARS_ZOOM.mp4" type="video/mp4">
                        </video>
                    </a>
                    <p class="title-product">Bracelet iron</p>
                    <p class="price-product">199.90€</p>
                    <a href="#">
                        <button class="rounded-btn">Acheter</button>
                    </a>
                </div>
                <div class="col-md-3 video-bracelet text-center" data-aos="zoom-in" data-aos-offset="200">
                    <a href="#">
                        <video width="100%" height="100%" muted>
                            <source src="assets/videos/MOON_ZOOM.mp4" type="video/mp4">
                        </video>
                    </a>
                    <p class="title-product">Bracelet atlas</p>
                    <p class="price-product">204.90€</p>
                    <a href="#">
                        <button class="rounded-btn">Acheter</button>
                    </a>
                </div>
                <div class="col-md-3 video-bracelet text-center" data-aos="zoom-in" data-aos-offset="200">
                    <a href="#">
                        <video width="100%" height="100%" muted>
                            <source src="assets/videos/IRON_ZOOM.mp4" type="video/mp4">
                        </video>
                    </a>
                    <p class="title-product">Bracelet mars</p>
                    <p class="price-product">189.90€</p>
                    <a href="#">
                        <button class="rounded-btn">Acheter</button>
                    </a>
                </div>
                <div class="col-md-3 video-bracelet text-center" data-aos="zoom-in" data-aos-offset="200">
                    <a href="#">
                        <video width="100%" height="100%" muted>
                            <source src="assets/videos/ATLAS_ZOOM.mp4" type="video/mp4">
                        </video>
                    </a>
                    <p class="title-product">Bracelet moon</p>
                    <p class="price-product">179.90€</p>
                    <a href="#">
                        <button class="rounded-btn">Acheter</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonial">
        <div class="container">
            <div class="section-title">
                <h3 class="title">Testimonials</h3>
            </div>
            <div class="my-5 py-5 text-black">
                <div class="row d-flex justify-content-center">
                    <div id="avis-card" class="col-md-12" data-aos="flip-left">
                        <div class="text-center mb-4 pb-2 quote-left">
                            <i class='bx bxs-quote-left'></i>
                        </div>
                        <div class="text-center mt-4 pt-2 quote-right">
                            <i class='bx bxs-quote-right'></i>
                        </div>
                        <div class="card outer">
                            <div class="inner"></div>
                            <div class="card-body px-4 py-5">
                                <!-- Carousel -->
                                <div id="carouselTestimonials" class="carousel slide text-white" data-bs-ride="true">
                                    <!-- Indicators -->
                                    <div class="carousel-indicators mb-0">
                                        <button data-bs-target="#carouselTestimonials" data-bs-slide-to="0" class="active"></button>
                                        <button data-bs-target="#carouselTestimonials" data-bs-slide-to="1"></button>
                                        <button data-bs-target="#carouselTestimonials" data-bs-slide-to="2"></button>
                                    </div>

                                    <!-- Contenu -->
                                    <div class="carousel-inner pb-5">
                                        <!-- Témoignage 1 -->
                                        <div class="carousel-item active">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-lg-10 col-xl-8">
                                                    <div class="row d-flex align-items-center">
                                                        <div class="col-lg-4 d-flex justify-content-center">
                                                            <img src="assets/img/astronaute.jpg" class="rounded-circle shadow-1 mb-4 mb-lg-0" alt="First slide" width="150" height="150" />
                                                        </div>
                                                        <div class="col-9 col-md-9 col-lg-7 col-xl-8 text-center text-lg-start mx-auto mx-lg-0">
                                                            <h4 class="mb-4">Elon Musk</h4>
                                                            <p class="mb-0 pb-3">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
                                                                aliquam amet animi blanditiis consequatur debitis dicta
                                                                distinctio, enim error eum iste libero modi nam natus
                                                                perferendis possimus quasi sint sit tempora voluptatem. Est,
                                                                exercitationem id ipsa ipsum laboriosam perferendis.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Témoignage 2 -->
                                        <div class="carousel-item">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-lg-10 col-xl-8">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-4 d-flex justify-content-center">
                                                            <img src="assets/img/astronaute.jpg" class="rounded-circle shadow-1 mb-4 mb-lg-0" alt="Second slide" width="150" height="150" />
                                                        </div>
                                                        <div class="col-9 col-md-9 col-lg-7 col-xl-8 text-center text-lg-start mx-auto mx-lg-0">
                                                            <h4 class="mb-4">Elon Musk</h4>
                                                            <p class="mb-0 pb-3">
                                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                                accusantium doloremque laudantium, totam rem aperiam, eaque
                                                                ipsa quae ab illo inventore veritatis et quasi architecto
                                                                beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                                                quia voluptas sit aspernatur.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Témoignage 3 -->
                                        <div class="carousel-item">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-lg-10 col-xl-8">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-4 d-flex justify-content-center">
                                                            <img src="assets/img/astronaute.jpg" class="rounded-circle shadow-1 mb-4 mb-lg-0" alt="Third slide" width="150" height="150" />
                                                        </div>
                                                        <div class="col-9 col-md-9 col-lg-7 col-xl-8 text-center text-lg-start mx-auto mx-lg-0">
                                                            <h4 class="mb-4">Elon Musk</h4>
                                                            <p class="mb-0 pb-3">
                                                                At vero eos et accusamus et iusto odio dignissimos qui
                                                                blanditiis praesentium voluptatum deleniti atque corrupti quos
                                                                dolores et quas molestias excepturi sint occaecati cupiditate
                                                                non provident, similique sunt in culpa qui officia mollitia
                                                                animi id laborum et dolorum fuga.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Contenu : FIN -->

                                    <!-- Controls -->
                                    <a class="carousel-control-prev" role="button" data-bs-target="#carouselTestimonials" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" role="button" data-bs-target="#carouselTestimonials" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                                <!-- Carousel : FIN -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <footer id="footer">
        <div class="container row">
            <div class="footer-link col-6 col-sm-6 col-md-3 col-xl-3">
                <h3>Confidentialité</h3>
                <a href="#" target="_self" title="">Politique de Confidentialité</a>
                <a href="#" target="_self" title="">Mentions légales</a>
                <a href="#" target="_self" title="">Mes données personnelles</a>
            </div>
            <div class="footer-link col-6 col-sm-6 col-md-3 col-xl-3">
                <h3>Nous suivre</h3>
                <a href="#" target="_self" title="">Facebook</a>
                <a href="#" target="_self" title="">Twitter</a>
                <a href="#" target="_self" title="">Instagram</a>
                <a href="#" target="_self" title="">TikTok</a>
            </div>
            <div class="footer-link col-6 col-sm-6 col-md-3 col-xl-3 mt-4 mt-sm-4 mt-md-0 mt-xl-0">
                <h3>Contact</h3>
                <a href="#" target="_self" title="">Nous contacter</a>
                <a href="=mailto:#" target="_self" title="">contact@iterspace.fr</a>
                <a href="tel:#" target="_self" title="">07.07.07.07.07</a>
            </div>
            <div class="footer-link col-6 col-sm-6 col-md-3 col-xl-3 mt-4 mt-sm-4 mt-md-0 mt-xl-0">
                <h3>Restez informés</h3>
                <form>
                    <label for="newsletter">Recevez nos offres spéciales et réductions</label>
                    <input type="text" id="newsletter" placeholder="Votre adresse email">
                    <button class="newsletter-btn">Abonnez-vous</button>
                </form>
            </div>
        </div>
        <div class="container">
            <div id="partenaires">
                <h3>Nos partenaires</h3>
                <div id="link-partenaires">
                    <a href="https://www.spacefox.shop/fr/" target="_blank" title="Site de SpaceFox"><img src="assets/img/space-fox-logo.svg" alt="Logo de SpaceFox" width="64" height="64"></a>
                    <a href="https://www.spacex.com" target="_blank" title="Site de SpaceX"><img id="spacex-logo" src="assets/img/SpaceX-Logo.svg" alt="Logo de Space X" width="150" height="20"></a>
                </div>
            </div>
        </div>
    </footer>
</body>
<!-- BEGIN: LIBRAIRIES SCRIPTS -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!-- END: LIBRAIRIES SCRIPTS -->

<!-- BEGIN: SCRIPTS -->
<script type="module" src="assets/js/index.js"></script>
<!-- BEGIN: SCRIPTS -->

</html>