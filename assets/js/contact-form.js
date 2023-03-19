window.addEventListener("DOMContentLoaded", function () {
    /* Récupération des champs du formulaire sous forme de variable */
    let nom = document.getElementById("nom");
    let prenom = document.getElementById("prenom");
    let email = document.getElementById("email");
    let telephone = document.getElementById("telephone");;
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

        /* On vérifie ques les champs sont bien remplies */
        /* Si les données ne sont pas correctement entrées, nous le montrons à l'utilisateur pour qu'il puisse recommencer correctement */

        if (((/^[0-9]+\/[0-9]+\/[0-9]+$/.test(nom.value) === false) || (nom.value == "JJ/MM/AAAA"))) {
            nom.style.backgroundColor = "red";
        };
        if (email.value == "") {
            email.style.backgroundColor = "red";
        };
        if (prenom.innerHTML == "") {
            prenom.style.backgroundColor = "red";
        };
        if (/#(?:[a-f\d]{3}){1,2}\b/.test(telephone.value) === false) {
            telephone.style.backgroundColor = "red";
        };
        if ((vitre_electrique.checked === false) && (gps.checked === false) && (peinture.checked === false) && (lecteur_CD.checked === false)) {
            vitre_electrique.parentNode.style.backgroundColor = "red";
        };
    });
});