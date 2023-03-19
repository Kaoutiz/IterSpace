window.addEventListener("DOMContentLoaded", function () {
    /* Récupération des champs du formulaire sous forme de variable */
    let identifiant = document.getElementById("identifiant");
    let password = document.getElementById("password");
    /* Le bouton de validation */
    let bouton = document.getElementById("envoyer");

    /* À partir de maintenant nous allons détecter la demande d'envoi du formulaire et vérifier les valeurs entrées.
    Avant de renvoyer les données dans une partie récapitulative. */

    bouton.addEventListener("click", function () {
        /* On nettoie l'affichage avant de tout tester */
        identifiant.style.backgroundColor = "";
        password.style.backgroundColor = "";

        /* On vérifie ques les champs sont bien remplies */
        /* Si les données ne sont pas correctement entrées, nous le montrons à l'utilisateur pour qu'il puisse recommencer correctement */

        if (((/[A-Za-z]+/i.test(identifiant.value) === false) || (identifiant.value == ""))) {
            identifiant.style.backgroundColor = "red";
        };
        if (((/[A-Za-z]+/i.test(password.value) === false) || (password.value == ""))) {
            password.style.backgroundColor = "red";
        };
    });
});