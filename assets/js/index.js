
import { Scroll } from "./scroll.js";
import { calendar } from "./calendar.js";
import { productHover } from "./productHover.js";
import { nav } from "./nav.js";

document.addEventListener("DOMContentLoaded", function(event) {
    
    // On véirfie si la page est l'index comme ça on lance les fonctions lié à cette page uniquement sur celle-ci
    let url = window.location.href;

    if (url.endsWith("index.php")) {
        Scroll();
        calendar();
        productHover();
    }

    // On lance les autres fonctions
    nav();

});
  