<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

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
                    <li><a href="#">Qui sommes-nous ?</a></li>
                    <li><a href="#">Catalogue</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul class="nav-right d-flex align-center">
                    <li><a href="#">Se connecter</a></li>
                    <i class='bx bx-menu'></i>
                </ul>
            </nav>
            <div id="title-zone">
                <div id="title-site">
                    <h1><span class="title-site-light">iter</span>space</h1>
                    <h2>Un chemin vers l'espace</h2>
                    <a href="#reservation"><button class="rounded-btn">Réservez maintenant</button></a>
                </div>
            </div>
            <div class="d-flex justify-content-center align-center text-center">
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
                <h3 class="title">Presentation</h3>
            </div>
            <div class="row">
                <div id="presnation-p" class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" data-aos="fade-down">
                    <h4>Titre</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                        enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                        dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est
                        laborum.
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
                    <div class="card h-100" data-aos="slide-right">
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
                    <div class="card h-100" data-aos="slide-up">
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
                    <div class="card h-100" data-aos="slide-left">
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
                    <div id="budget" data-aos="zoom-in-up" data-aos-delay= "200">
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
                            <input type="range" class="max" min="0" max="1000" value="1000" step="200" >
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
                    <div id="estimation" class="d-none">
                        <h2 class="price_estimation">Estimation du prix du séjour: <span id="price_value"></span> 000 €</h2>  
                        <a href="#"><button id="next-calendar-btn" class="rounded-btn rounded-pill d-flex align-items-center"><span>Continuer</span> <i class='bx bx-chevron-right'></i></button></a>
                    </div>
                    <div id="info_choice" class="d-none"> 
                        <h2 class="fusee_value" id="fusee_value"></h2>  
                        <p class="choice"><span id="sieges_value"></span></p> 
                    </div>
                </div>  
            </div>
        </div>
    </section>
    <section id="produits">
        <div class="container">
            <div class="section-title">
                <h3 class="title">Nos produits</h3>
            </div>
            <div class="d-flex justify-content-between mb-5 product-content">
                <div class="col-md-3 col-xs-12 video-bracelet text-center" data-aos="zoom-in">
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
                <div class="col-md-3 col-xs-12 video-bracelet text-center" data-aos="zoom-in" data-aos-offset="200">
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
                <div class="col-md-3 col-xs-12 video-bracelet text-center" data-aos="zoom-in" data-aos-offset="400">
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
                <div class="col-md-3 col-xs-12 video-bracelet text-center" data-aos="zoom-in" data-aos-offset="600">
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
            <div class="d-flex justify-content-between product-content">
                <div class="col-md-3 col-xs-12 video-bracelet text-center" data-aos="zoom-in">
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
                <div class="col-md-3 col-xs-12 video-bracelet text-center" data-aos="zoom-in" data-aos-offset="200">
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
                <div class="col-md-3 col-xs-12 video-bracelet text-center" data-aos="zoom-in" data-aos-offset="200">
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
                <div class="col-md-3 col-xs-12 video-bracelet text-center" data-aos="zoom-in" data-aos-offset="200">
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
    <?php include 'assets/templates/footer.php'; ?>
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