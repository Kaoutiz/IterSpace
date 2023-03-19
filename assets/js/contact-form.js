window.addEventListener("DOMContentLoaded", function () {
    /* Récupération des champs du formulaire sous forme de variable */
    let nom = document.getElementById("nom");
    let prenom = document.getElementById("prenom");
    let email = document.getElementById("email");
    let telephone = document.getElementById("telephone");
    let message = document.getElementById("message");
    /* Le bouton de validation */
    let bouton = document.getElementById("envoyer");

    /* À partir de maintenant nous allons détecter la demande d'envoi du formulaire et vérifier les valeurs entrées.
    Avant de renvoyer les données dans une partie récapitulative. */

    bouton.addEventListener("click", function () {
        /* On nettoie l'affichage avant de tout tester */
        nom.style.backgroundColor = "";
        email.style.backgroundColor = "";
        prenom.style.backgroundColor = "";
        telephone.style.backgroundColor = "";
        message.style.backgroundColor = "";

        /* On vérifie ques les champs sont bien remplies */
        /* Si les données ne sont pas correctement entrées, nous le montrons à l'utilisateur pour qu'il puisse recommencer correctement */

        if (((/[A-Za-z]+/i.test(nom.value) === false) || (nom.value == ""))) {
            nom.style.backgroundColor = "red";
        };
        if (((/[A-Za-z0-9]+@[A-Za-z0-9]+\.[A-Za-z]+/i.test(email.value) === false) || (email.value == ""))) {
            email.style.backgroundColor = "red";
        };
        if (((/[A-Za-z]+/i.test(prenom.value) === false) || (prenom.value == ""))) {
            prenom.style.backgroundColor = "red";
        };
        if ( /^((\+)33|0)[1-9](\d{2}){4}$/i.test(telephone.value) === false) {
            telephone.style.backgroundColor = "red";
        };
        if (message.value == "") {
            message.style.backgroundColor = "red";
        };
    });
});