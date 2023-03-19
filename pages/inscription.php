<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>

    <!-- BEGIN: LIBRAIRIES -->
    <link rel="stylesheet" href="../assets/css/boxicons.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- END: LIBRAIRIES -->

    <!-- BEGIN: STYLES -->
    <link rel="stylesheet" href="../assets/css/range.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/connexion.css">
    <!-- END: STYLES -->
</head>

<body>
    <?php include '../assets/templates/general_header.php'; ?>

    <section id="connexion">
        <div class="container">
            <div class="section-title">
                <h3 class="title">Inscription</h3>
            </div>

            <?php
            /* On vérifie que le formulaire est bein reçu */
            if (($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST) && count($_POST)) {
                /* On pourrait imaginer un include pour un fichier lié à une BDD qui
                permettrait de gérer le système de connexion */
            } else { ?>

                <form id="contact-form" method="post" action="inscription.php" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="email"><span style="margin-right: 5px">Adresse Email</span><span class="text-danger">*</span></label>
                            <input type="email" class="form-control mb-2" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="password"><span style="margin-right: 5px">Mot de passe</span><span class="text-danger">*</span></label>
                            <input type="password" class="form-control mb-2" id="password" name="password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="password_repeat"><span style="margin-right: 5px">Répétez le mot de passe</span><span class="text-danger">*</span></label>
                            <input type="password" class="form-control mb-2" id="password_repeat" name="password_repeat" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p><span class="text-danger">*</span> Champs obligatoires</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="rounded-btn" id="envoyer">S'inscrire</button>
                        </div>
                    </div>
                    <a href="connexion.php"><p class="mt-3 text-center"><u>Déjà un compte ? Se connecter</u></p></a>
                </form>
            <?php
            }
            ?>
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