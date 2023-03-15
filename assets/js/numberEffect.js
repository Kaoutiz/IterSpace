export function numberEffect(){

    // Fusée disponible
    var numFusee = 0;
    setInterval(function() {
    if (numFusee < 4) {
        numFusee++;
        document.getElementById("number-fusee").innerHTML = numFusee;
    }
    }, 100);

    // Clients satisfaits
    var numClient = 0;
    setInterval(function() {
    if (numClient < 958) {
        numClient++;
        document.getElementById("number-client").innerHTML = numClient;
    }
    }, 0.5);

    // Voyages effectués
    var numVoyage = 0;
    setInterval(function() {
    if (numVoyage < 1052) {
        numVoyage++;
        document.getElementById("number-voyage").innerHTML = numVoyage;
    }
    }, 0.5);

}