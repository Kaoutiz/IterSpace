<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <!-- BEGIN: LIBRAIRIES -->
    <link rel="stylesheet" href="../assets/css/boxicons.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- END: LIBRAIRIES -->

    <!-- BEGIN: STYLES -->
    <link rel="stylesheet" href="../assets/css/range.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/contact.css">
    <!-- END: STYLES -->
</head>

<body>
    <?php include '../assets/templates/general_header.php'; ?>

    <section id="contact">
        <div class="container">
            <div class="section-title">
                <h3 class="title">Formulaire de contact</h3>
            </div>

            <?php
            /* On vérifie que le formulaire est bein reçu */
            if (($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST) && count($_POST)) {

                /* Pour commencer on définit une fonction qui va nous
permettre de vérifier l'ensemble des données
recu afin de paleir aux failles XSS */
                function verification($element_post)
                {
                    $element_post = trim($element_post);
                    $element_post = strip_tags($element_post);
                    $element_post = stripslashes($element_post);
                    $element_post = htmlspecialchars($element_post);
                    return $element_post;
                }

                /* Ensuite on stock toutes les données
récupérés dans des variables */
                $nom = verification($_POST["nom"]);
                $prenom = verification($_POST["prenom"]);
                $email = verification($_POST["email"]);
                $telephone = verification($_POST["telephone"]);
                $message = verification($_POST["message"]);

                $validation = true;

                /* Pour chaque donné on test que tout est bon */
                /* Pour le nom on vérifie que des valeurs ont été entré */
                /* On bloque le nombre de caractère à 99 maximum afin d'éviter
    une surchagre de données avec un envoie énorme de caractère */
                if (empty($nom) || (!preg_match("/^[a-zA-Z-' ]{1,99}+$/", $nom))) {
                    /* Si ce n'est pas bon et que la condition est respecté
        on remplace la variable par un message d'erreur */
                    $nom = "<strong>Le nom n'est pas valide.</strong>";
                    $validation = false;
                }
                if (empty($prenom) || (!preg_match("/^[a-zA-Z-' ]{1,99}+$/", $prenom))) {
                    /* Si ce n'est pas bon et que la condition est respecté
        on remplace la variable par un message d'erreur */
                    $nom = "<strong>Le nom n'est pas valide.</strong>";
                    $validation = false;
                }
                /* On utilise la fonction filter_var qui permet directement de vérifier si l'email est correcte */
                if ((empty($email)) || (!filter_var($email, FILTER_VALIDATE_EMAIL))) {
                    $email = "<strong>Le mail n'est pas valide.</strong>";
                    $validation = false;
                }

                if ((empty($telephone)) || (!preg_match("/[0-9]+/i", $telephone))) {
                    $telephone = "<strong>Le numéro de téléphone n'est pas valide</strong>";
                    $validation = false;
                }

                if (empty($message) || (strlen($message) >= 10)) {
                    $message = "<strong>Le message n'est pas valide ou trop long (300 caractères maximum).</strong>";
                    $validation = false;
                }

                if ($validation) {
                    /* On affiche notre message, avec les erreurs */
                    echo "<p>Votre message a bien été envoyé</p><p>Récapitulatif de votre demande :</p><ul><li>Nom : " . $nom .
                        "</li><li> Prénom : " . $prenom .
                        "</li><li>E-mail : " . $email .
                        "</li><li>Téléphone : " . $telephone .
                        "</li><li> Message : " . $message .
                        "</li></ul>";
                } else{
                    echo "<p>Votre formulaire comporte des erreurs, rechargez la page et recommençais</p>";
                }
            } else { ?>

                <form id="contact-form" method="post" action="contact.php" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nom">Nom<span class="text-danger">*</span></label>
                            <input type="text" class="form-control mb-2" id="nom" name="nom" required>
                        </div>
                        <div class="col-md-6">
                            <label for="prenom">Prénom<span class="text-danger">*</span></label>
                            <input type="text" class="form-control mb-2" id="prenom" name="prenom" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="email">Adresse e-mail<span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="telephone">Téléphone<span class="text-danger">*</span></label>
                            <input type="tel" class="form-control mb-2" id="telephone" name="telephone" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="message">Message<span class="text-danger">*</span></label>
                            <textarea class="form-control mb-2" rows="5" id="message" name="message" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p><span class="text-danger">*</span> Champs obligatoires</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="rounded-btn" id="envoyer">Envoyer</button>
                        </div>
                    </div>
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
<script type="text/javascript" src="../assets/js/contact-form.js"></script>

</html>