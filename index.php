<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

    <!-- BEGIN: LIBRAIRIES -->
    <link rel="stylesheet" href="assets/css/boxicons.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- END: LIBRAIRIES -->

    <!-- BEGIN: STYLES -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- END: STYLES -->
</head>
    <body>
        <!-- BEGIN: JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- END: JQuery -->
        <header>
            <video width="100%" autoplay loop muted>
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
                        <button class="rounded-btn">Réservez maintenant</button>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-center text-center">
                    <div class="compteur-box">
                        <p class="number">958</p>
                        <p class="title-compteur">Voyages effectués</p>   
                    </div>
                    <div class="compteur-box">
                        <p class="number">1052</p>
                        <p class="title-compteur">Clients satisfaits</p>   
                    </div>
                    <div class="compteur-box">
                        <p class="number">4</p>
                        <p class="title-compteur">Fusées disponibles</p>   
                    </div>
                </div>
            </div>   
        </header>
        <section id="presentation">
            <div class="container">
                <div class="section-title">
                    <div class="red-line"></div>
                    <h3>Presentation</h3>
                </div>
                <div class="row">
                    <div class="col-sm">
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
                    <div class="col-sm w-100 text-center">
                        <img src="assets/img/spaceship.png" class="spaceship" alt="vaisseau-spatial"/>
                    </div>
                </div>
            </div>
        </section>
        <section id="actus">
            <div class="container">
                <div class="section-title">
                    <div class="red-line"></div>
                    <h3>Actualités</h3>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="assets/img/astronaute.jpg" class="card-img-top" alt="actualites-1"/>
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
                        <div class="card h-100">
                            <img src="assets/img/astronaute.jpg" class="card-img-top" alt="actualites-2"/>
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
                        <div class="card h-100">
                            <img src="assets/img/astronaute.jpg" class="card-img-top" alt="actualites-3"/>
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
                <!-- Votre code ici... -->
            </div>
        </section>
        <section id="produits">
            <div class="container">
                <!-- Votre code ici... -->
            </div>
        </section>
        <section id="testimonial">
            <div class="container">
                <div class="section-title">
                    <div class="red-line"></div>
                    <h3>Testimonials</h3>
                </div>

                <div class="my-5 py-5 text-black">
                    <div class="row d-flex justify-content-center">
                        <div id="avis-card" class="col-md-12">
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
                                            <button 
                                                data-bs-target="#carouselTestimonials" 
                                                data-bs-slide-to="0" 
                                                class="active"
                                            ></button>
                                            <button 
                                                data-bs-target="#carouselTestimonials" 
                                                data-bs-slide-to="1"
                                            ></button>
                                            <button 
                                                data-bs-target="#carouselTestimonials" 
                                                data-bs-slide-to="2"
                                            ></button>
                                        </div>

                                        <!-- Contenu -->
                                        <div class="carousel-inner pb-5">
                                            <!-- Témoignage 1 -->
                                            <div class="carousel-item active">
                                                <div class="row d-flex justify-content-center">
                                                    <div class="col-lg-10 col-xl-8">
                                                        <div class="row d-flex align-items-center">
                                                            <div class="col-lg-4 d-flex justify-content-center">
                                                                <img src="assets/img/astronaute.jpg"
                                                                    class="rounded-circle shadow-1 mb-4 mb-lg-0" alt="First slide" width="150"
                                                                    height="150" />
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
                                                                <img src="assets/img/astronaute.jpg"
                                                                    class="rounded-circle shadow-1 mb-4 mb-lg-0" alt="Second slide" width="150"
                                                                    height="150" />
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
                                                                <img src="assets/img/astronaute.jpg"
                                                                    class="rounded-circle shadow-1 mb-4 mb-lg-0" alt="Third slide" width="150"
                                                                    height="150" />
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

            </div>
        </section>
        <?php include 'assets/templates/footer.php';?>
    </body>
    <!-- BEGIN: LIBRAIRIES SCRIPTS -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/index.js"></script>
    <!-- END: LIBRAIRIES SCRIPTS -->

    <!-- BEGIN: SCRIPTS -->
    <!-- BEGIN: SCRIPTS -->
</html>