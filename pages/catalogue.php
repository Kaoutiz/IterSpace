<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue</title>
    <link rel="icon" type="image/png" href="../assets/img/iterspace_logo.png" />
    <!-- BEGIN: LIBRAIRIES -->
    <link rel="stylesheet" href="../assets/css/boxicons.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- END: LIBRAIRIES -->

    <!-- BEGIN: STYLES -->
    <link rel="stylesheet" href="../assets/css/range.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <!-- END: STYLES -->
</head>

<body>
    <?php include '../assets/templates/general_header.php'; ?>
    <a href="#header"><div id="fusee_back"></div></a>
    <section id="produits" style="height: auto">
        <div class="container">
            <div class="section-title" data-aos="zoom-in">
                <h3>Nos produits</h3>
            </div>
            <div class="d-flex justify-content-between mb-0 mb-sm-0 mb-md-5 mb-xl-5 product-content">
                <div class="col-md-3 col-xs-12 video-bracelet text-center" data-aos="zoom-in">
                    <a href="#">
                        <video width="100%" height="100%" muted>
                            <source src="../assets/videos/IRON_ZOOM.mp4" type="video/mp4">
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
                            <source src="../assets/videos/ATLAS_ZOOM.mp4" type="video/mp4">
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
                            <source src="../assets/videos/MARS_ZOOM.mp4" type="video/mp4">
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
                            <source src="../assets/videos/MOON_ZOOM.mp4" type="video/mp4">
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
                            <source src="../assets/videos/MARS_ZOOM.mp4" type="video/mp4">
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
                            <source src="../assets/videos/MOON_ZOOM.mp4" type="video/mp4">
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
                            <source src="../assets/videos/IRON_ZOOM.mp4" type="video/mp4">
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
                            <source src="../assets/videos/ATLAS_ZOOM.mp4" type="video/mp4">
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

    <?php include '../assets/templates/footer.php'; ?>
</body>

<!-- BEGIN: LIBRAIRIES SCRIPTS -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!-- END: LIBRAIRIES SCRIPTS -->

<!-- BEGIN: SCRIPTS -->
<script type="module" src="../assets/js/index.js"></script>
<!-- BEGIN: SCRIPTS -->

</html>