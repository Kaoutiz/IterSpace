export function calendar(){
  
    /* DEBUT: Récupération du contenue XML */

    // chemin du fichier XML
    const xmlPath = 'assets/datas/calendar.xml';

    // créer un objet XMLHttpRequest pour récupérer le contenu du fichier XML
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
        const xml = this.responseXML;
        loadCalendarData(xml);
    }
    };
    xhr.open('GET', xmlPath);
    xhr.send();

    // spécifier que la réponse est en format XML
    xhr.overrideMimeType('text/xml');

    xhr.onreadystatechange = function () {
        
    // vérifier que la requête a été effectuée avec succès
    if (xhr.readyState === 4 && xhr.status === 200) {
        // récupérer le document XML
        const xml = xhr.responseXML;

        // créer un objet pour stocker les données
        const calendarData = {};

        // parcourir les éléments du document XML
        const months = xml.getElementsByTagName('mounth');

        for (let i = 0; i < months.length; i++) {
            const month = months[i];
            const monthName = month.getAttribute('value');
            
            // créer une div pour le mois
            const monthDiv = document.createElement('div');
            monthDiv.setAttribute('id', monthName === 'February' ? 'mounth-left' : 'mounth-right');
            monthDiv.setAttribute('class', 'month');
            
            // parcourir les jours du mois
            const days = month.getElementsByTagName('day');
            for (let j = 0; j < days.length; j++) {
                const day = days[j];
                const dayNumber = day.getAttribute('value');
            
                // récupérer les données du jour
                const numberElem = day.getElementsByTagName('number')[0];
                const priceElem = day.getElementsByTagName('price')[0];
                const number = numberElem ? numberElem.textContent : '';
                const price = priceElem ? priceElem.textContent : '';
            
                // créer une div pour le jour
                const dayDiv = document.createElement('div');
                
                dayDiv.setAttribute('class', 'days d-none');
                if (!number && !price) {
                    dayDiv.setAttribute("class", "days noday") // cacher la div si les données sont vides
                }
            
                const dayNumberP = document.createElement('p');
                dayNumberP.textContent = number;
                dayDiv.appendChild(dayNumberP);
            
                if (price) {
                const dayPriceP = document.createElement('p');
                dayPriceP.setAttribute('class', 'price');
            
                const priceValueSpan = document.createElement('span');
                priceValueSpan.setAttribute('class', 'price_value');
                priceValueSpan.textContent = price;
                dayPriceP.appendChild(priceValueSpan);
                dayPriceP.appendChild(document.createTextNode('K'));
                dayDiv.appendChild(dayPriceP);
                }
            
                // ajouter la div du jour à la bonne semaine
                const weekIndex = Math.floor(j / 7);
                const weekDiv = monthDiv.querySelectorAll('.week')[weekIndex];
                if (!weekDiv) {
                const newWeekDiv = document.createElement('div');
                newWeekDiv.setAttribute('class', 'week d-flex justify-content-center align-items-center');
                monthDiv.appendChild(newWeekDiv);
                newWeekDiv.appendChild(dayDiv);
                } else {
                weekDiv.appendChild(dayDiv);
                }
            }
            
            // insérer la div du mois dans le document
            document.getElementById('calendar-body').appendChild(monthDiv);
            
            // ajouter une div pour séparer les semaines
            const weekDivs = monthDiv.querySelectorAll('.week');
            if (weekDivs.length > 4) {
                for (let k = 1; k < weekDivs.length; k += 4) {
                const weekSeparatorDiv = document.createElement('div');
                weekSeparatorDiv.setAttribute('class', 'week-separator d-flex justify-content-center align-items-center');
                monthDiv.insertBefore(weekSeparatorDiv, weekDivs[k]);
                }
            }
        }
    }
}

    /* FIN: Récupération du contenue XML */


    /* DEBUT: Lancement du script calendar */

    setTimeout(() => {

    /* DEBUT: Durée */

    let sieges = document.getElementById("sieges");
    let fusee = document.getElementById("fusee");

    sieges.addEventListener("change", function(){

        // On remet à zero la selection si il y en avait une
        let estimation = document.getElementById("estimation");
        let infoChoice = document.getElementById("info_choice");
        estimation.classList.add("d-none");
        infoChoice.classList.add("d-none");

        // On remet à zéro les focus sur les jours
        for(let j =0; j < days.length; j++){
            days[j].style.outline = "none";
            days[j].style.outlineOffset = "0";
        }

    });


    fusee.addEventListener("change", function(){

        // On remet à zero la selection si il y en avait une
        let estimation = document.getElementById("estimation");
        let infoChoice = document.getElementById("info_choice");
        estimation.classList.add("d-none");
        infoChoice.classList.add("d-none");

        // On remet à zéro les focus sur les jours
        for(let j =0; j < days.length; j++){
            days[j].style.outline = "none";
            days[j].style.outlineOffset = "0";
        }

    });


    /* FIN: Durée */
    
    /* DEBUT: Budget */
    const range = document.querySelector(".range-selected");
    const rangeInput = document.querySelectorAll(".range-input input");
    const rangePrice = document.querySelectorAll(".range-price input");
    let rangeMin = 200;

    let calendar = document.getElementById("calendar-body");
    let priceDay = calendar.getElementsByClassName("price_value");

    // On définit les couleurs des jours en fonction de leurs prix
    
        for(let i = 0; i < priceDay.length; i++){
    
            switch (true){
                case (parseInt(priceDay[i].textContent) < 200):
                priceDay[i].parentNode.parentNode.style.background = "rgb(151, 223, 252)"
                priceDay[i].parentNode.style.color = "rgb(37, 48, 80)"
                break;
                case (parseInt(priceDay[i].textContent) > 200 && parseInt(priceDay[i].textContent) < 400):
                priceDay[i].parentNode.parentNode.style.background = "rgb(121, 160, 232)"
                priceDay[i].parentNode.style.color = "rgb(37, 48, 80)"
                break;
                case (parseInt(priceDay[i].textContent) > 400 && parseInt(priceDay[i].textContent) < 600):
                priceDay[i].parentNode.parentNode.style.background = "rgb(0, 70, 228)"
                priceDay[i].parentNode.style.color = "white"
                priceDay[i].parentNode.parentNode.children[0].style.color = "white"
                break;
                case (parseInt(priceDay[i].textContent) > 600 && parseInt(priceDay[i].textContent) < 800):
                priceDay[i].parentNode.parentNode.style.background = "rgb(140, 71, 162)"
                priceDay[i].parentNode.style.color = "white"
                priceDay[i].parentNode.parentNode.children[0].style.color = "white"
                break;
                case (parseInt(priceDay[i].textContent) > 800 && parseInt(priceDay[i].textContent) < 1000):
                priceDay[i].parentNode.parentNode.style.background = "rgb(247, 37, 133)"
                priceDay[i].parentNode.style.color = "white"
                priceDay[i].parentNode.parentNode.children[0].style.color = "white"
                break;
                case (parseInt(priceDay[i].textContent) > 1000):
                priceDay[i].parentNode.parentNode.style.background = "rgb(247, 37, 133)"
                priceDay[i].parentNode.style.color = "white"
                priceDay[i].parentNode.parentNode.children[0].style.color = "white"
                break;
            }
            
        }
    

    rangeInput.forEach((input) => {
    input.addEventListener("input", (e) => {
        let minRange = parseInt(rangeInput[0].value);
        let maxRange = parseInt(rangeInput[1].value);
    
        // On empêche les curseurs de se croisé
        if (maxRange - minRange < rangeMin) {  
            
        if (e.target.className === "min") { 
            rangeInput[0].value = rangeInput[0].value - rangeInput[0].value;     
            minRange = rangeInput[0].value
        } else {
            rangeInput[1].value = minRange + rangeMin;        
        }

        } else {
        rangePrice[0].value = minRange;
        rangePrice[1].value = maxRange;
        }

        minRange = parseInt(rangeInput[0].value);
        maxRange = parseInt(rangeInput[1].value);

        // On créer un tableau avec toutes les couleur du gradient pour la barre
        let step = [
            "rgb(151, 223, 252) 0%, rgb(151, 223, 252) 20%", 
            "rgb(121, 160, 232) 20%, rgb(121, 160, 232) 40%", 
            "rgb(0, 70, 228) 40%, rgb(0, 70, 228) 60%", 
            "rgb(140, 71, 162) 60%, rgb(140, 71, 162) 80%", 
            "rgb(247, 37, 133) 80%, rgb(247, 37, 133) 100%"
        ];
        
        // On détermine un gradiant de gray par defaut sur toute la barre
        let gradientGenerate = [
            "rgb(209, 209, 209) 0%, rgb(209, 209, 209) 20%",
            "rgb(171, 171, 171) 20%, rgb(171, 171, 171) 40%",
            "rgb(99, 99, 99) 40%, rgb(99, 99, 99) 60%",
            "rgb(124, 124, 124) 60%, rgb(124, 124, 124) 80%",
            "rgb(139, 139, 139) 80%, rgb(139, 139, 139) 100%"
        ];

        // On determine les step possible et on commece le début de notre propriété css à générer
        let val = [0, 200, 400, 600, 800, 1000];
        let background = "linear-gradient(to right,";

        // On détermine l'emplacement des curseur pour connaitre les couleurs à garder
        let min_step = val.indexOf(minRange);
        let max_step = val.indexOf(maxRange);

        // On modifie le tableau "gradientGenerate" en insérant à l'intérieur les case coloré que l'on souhaite affiché
        for(let i = min_step; i < max_step; i++){
            gradientGenerate[i] = step[i]
        }
        
        // On génère le gradiant via le tableau "gradientGenerate"
        for(let i = 0; i < gradientGenerate.length; i++){
        
            if(i == 4){
                background += gradientGenerate[i];
            }else{
                background += gradientGenerate[i] + "," + " ";
            }

        }
        
        // On modifie le style de la barre avec l'état actuel du gradient
        document.getElementsByClassName("range-selected")[0].style.background = background + ")";

        let calendar = document.getElementById("calendar-body");
        let priceDay = calendar.getElementsByClassName("price_value");

        // On remet à zero la selection si il y en avait une
        let estimation = document.getElementById("estimation");
        let infoChoice = document.getElementById("info_choice");
        estimation.classList.add("d-none");
        infoChoice.classList.add("d-none");

        // On remet à zéro les focus sur les jours
        for(let j =0; j < days.length; j++){
            days[j].style.outline = "none";
            days[j].style.outlineOffset = "0";
        }


        // On fait une boucle sur tous les jours du calendrier et on modifie sa couleur selon le filtre du budget
        for(let i = 0; i < priceDay.length; i++){

            switch (true){
            case (parseInt(priceDay[i].textContent) < 200):
                priceDay[i].parentNode.parentNode.style.background = "linear-gradient(to right," + gradientGenerate[0] + ")";
                priceDay[i].parentNode.style.color = "rgb(37, 48, 80)"
                break;
            case (parseInt(priceDay[i].textContent) > 200 && parseInt(priceDay[i].textContent) < 400):
                priceDay[i].parentNode.parentNode.style.background = "linear-gradient(to right," + gradientGenerate[1] + ")";
                priceDay[i].parentNode.style.color = "rgb(37, 48, 80)"
                break;
            case (parseInt(priceDay[i].textContent) > 400 && parseInt(priceDay[i].textContent) < 600):
                priceDay[i].parentNode.parentNode.style.background = "linear-gradient(to right," + gradientGenerate[2] + ")";
                priceDay[i].parentNode.style.color = "white"
                priceDay[i].parentNode.parentNode.children[0].style.color = "white"
                break;
            case (parseInt(priceDay[i].textContent) > 600 && parseInt(priceDay[i].textContent) < 800):
                priceDay[i].parentNode.parentNode.style.background = "linear-gradient(to right," + gradientGenerate[3] + ")";
                priceDay[i].parentNode.style.color = "white"
                priceDay[i].parentNode.parentNode.children[0].style.color = "white"
                break;
            case (parseInt(priceDay[i].textContent) > 800 && parseInt(priceDay[i].textContent) < 1000):
                priceDay[i].parentNode.parentNode.style.background = "linear-gradient(to right," + gradientGenerate[4] + ")";
                priceDay[i].parentNode.style.color = "white"
                priceDay[i].parentNode.parentNode.children[0].style.color = "white"
                break;
            case (parseInt(priceDay[i].textContent) > 1000):
                priceDay[i].parentNode.parentNode.style.background = "linear-gradient(to right," + gradientGenerate[4] + ")";
                priceDay[i].parentNode.style.color = "white"
                priceDay[i].parentNode.parentNode.children[0].style.color = "white"
                break;
            }
        }

    });
    });

    /* FIN: Budget */

    /* DEBUT: Price estimation */

    let estimation = document.getElementById("estimation");
    let priceValue = document.getElementById("price_value");
    let infoChoice = document.getElementById("info_choice");
    let fuseeSelected = document.getElementById("fusee");
    let fuseeValue = document.getElementById("fusee_value");
    let siegeNbr = document.getElementById("sieges");
    let siegeNbrValue = document.getElementById("sieges_value");
    let days = document.getElementsByClassName("days");

    fuseeSelected.addEventListener("change", function(){
        fuseeValue.textContent = fuseeSelected.value;

        // On remet à zero la selection si il y en avait une
        estimation.classList.add("d-none");
        infoChoice.classList.add("d-none");

        // On remet à zéro les focus sur les jours
        for(let j =0; j < days.length; j++){
        days[j].style.outline = "none";
        days[j].style.outlineOffset = "0";
        }

    });

    // Au clique sur un des jours du calendrier on affiche les informations séléctionnées
    for(let i = 0; i < days.length; i++){

    days[i].addEventListener("click", function(){

        if(!days[i].classList.contains('noday')){
            estimation.classList.remove("d-none");
            priceValue.textContent = days[i].children[1].children[0].textContent;
            infoChoice.classList.remove("d-none");
            fuseeValue.textContent = "Fusée choisis: " + fuseeSelected.value;
    
            if(siegeNbr.value > 1){
                siegeNbrValue.textContent = "Nombre de siège: " + siegeNbr.value + " sièges";
            }else{
                siegeNbrValue.textContent = "Nombre de siège: " + siegeNbr.value + " siège";
            }
    
            // On remet à zéro les focus sur les jours
            for(let j =0; j < days.length; j++){
            days[j].style.outline = "none";
            days[j].style.outlineOffset = "0";
            }
    
            // On attribue un focus sur le jour concerner
            days[i].style.outline = "1px solid #0046e4";
            days[i].style.outlineOffset = "2px";
        }
         
    });

    }

    /* FIN: Price estimation */

    /* DEBUT: Système de réservation */

    let btnNext = document.getElementById("next-calendar-btn");
    let btnPrevious = document.getElementById("previous-calendar-btn");
    let step = 1;
    let step1 = document.getElementById("calendar-step1");
    let step2 = document.getElementById("calendar-step2");
    let step3 = document.getElementById("calendar-step3");

    btnNext.addEventListener("click", function(){

        if(step === 1){
            step1.classList.add("d-none");
            step2.classList.remove("d-none");
            step3.classList.add("d-none");
            btnPrevious.classList.remove("d-none");
            document.getElementsByClassName("price_estimation")[0].style.display = "none";
            document.getElementById("info_choice").style.display = "none";
            document.getElementById("estimation").style.marginTop = "20px"
            btnNext.children[0].textContent = "Continuer"
            step++;
        }else if(step === 2){
            step1.classList.add("d-none");
            step2.classList.add("d-none");
            step3.classList.remove("d-none");
            btnPrevious.classList.remove("d-none");
            document.getElementsByClassName("price_estimation")[0].style.display = "none";
            document.getElementById("info_choice").style.display = "none";
            document.getElementById("estimation").style.marginTop = "20px"
            btnNext.children[0].textContent = "Payer"
            step++;
        }
        
    });

    btnPrevious.addEventListener("click", function(){
        if(step === 2){
            step1.classList.remove("d-none");
            step2.classList.add("d-none");
            step3.classList.add("d-none");
            btnPrevious.classList.add("d-none");
            document.getElementsByClassName("price_estimation")[0].style.display = "flex";
            document.getElementById("info_choice").style.display = "flex";
            document.getElementById("estimation").style.marginTop = "0"
            btnNext.children[0].textContent = "Continuer"
            step--;
        }else if(step === 3){
            step1.classList.add("d-none");
            step2.classList.remove("d-none");
            step3.classList.add("d-none");
            btnPrevious.classList.remove("d-none");
            document.getElementsByClassName("price_estimation")[0].style.display = "none";
            document.getElementById("info_choice").style.display = "none";
            document.getElementById("estimation").style.marginTop = "20px";
            btnNext.children[0].textContent = "Continuer"
            step--;
        }
    });

    /* FIN: Système de réservation */

    }, "100")

    /* FIN: Lancement du script calendar */
}