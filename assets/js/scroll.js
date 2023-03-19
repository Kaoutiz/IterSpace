export function Scroll(){

  AOS.init();

  // Quand la page est rafraichis, on remonte tout en haut de la page et on joue l'annimation du header
  const html = document.querySelector('html');
  html.scrollTop = 0;
  handleHeaderSection();

  const sections = document.querySelectorAll("section");
  const header = document.getElementById("header");
  
  // Création du tableau de noms de sections
  const sectionNames = ["header", "presentation", "actus", "reservation", "produits", "testimonial"];
  
  // Fonction pour déterminer la section active
  function getActiveSection() {
    const windowHeight = window.innerHeight + header.offsetHeight;

    const headerHeight = header.offsetHeight;
    const windowTop = window.pageYOffset + headerHeight;
    for (let i = 0; i < sections.length; i++) {
      const section = sections[i];
      const sectionTop = section.offsetTop;
      const sectionHeight = section.offsetHeight;
      if (windowTop >= sectionTop && windowTop < sectionTop + sectionHeight) {
        return section;
      }
    }
    return null;
  }
  
  // Fonction pour gérer le scroll
  function handleScroll(event) {
    const activeSection = getActiveSection();
    const direction = event.deltaY > 0 ? 1 : -1;
    if (activeSection) {
      let nextSection;
      if (direction === 1) {
        nextSection = activeSection.nextElementSibling;
        while (nextSection && nextSection.offsetTop < window.pageYOffset + window.innerHeight) {
          nextSection = nextSection.nextElementSibling;
        }
      } else {
        const activeSectionTop = activeSection.offsetTop - header.offsetHeight;
        let prevSection = sections[0];
        for (let i = 1; i < sections.length; i++) {
          const section = sections[i];
          const sectionTop = section.offsetTop - header.offsetHeight;
          if (sectionTop <= activeSectionTop) {
            prevSection = section;
          } else {
            break;
          }
        }
        nextSection = prevSection;
      }
      if (nextSection) {
        const nextSectionTop = nextSection.offsetTop - header.offsetHeight;
        window.scrollTo({ top: nextSectionTop, behavior: "smooth" });
        const nextSectionIndex = Array.from(sections).indexOf(nextSection);
        const activeSectionName = sectionNames[nextSectionIndex];
        console.log("Active section: " + activeSectionName);
        // Appel de la fonction appropriée en fonction de la section active
        switch(activeSectionName) {
          case "header":
            handleHeaderSection();
            break;
          case "presentation":
            handlePresentationSection();
            break;
          case "actus":
            handleActusSection();
            break;
          case "reservation":
            handleReservationSection();
            break;
          case "produits":
            handleProduitsSection();
            break;
          case "testimonial":
            handleTestimonialSection();
            break;
          default:
            break;
        }
      } else if (direction === -1) {
        const firstSection = sections[0];
        const firstSectionTop = firstSection.offsetTop - header.offsetHeight;
        window.scrollTo({ top: firstSectionTop, behavior: "smooth" });
        console.log("Active section: " + sectionNames[0]);
        // Appel de la fonction appropriée en fonction de la section active
        handleHeaderSection();
      } else if (activeSection === sections[sections.length - 1]) {
        console.log("Active section: " + sectionNames[sectionNames.length - 1]);
        // Appel de la fonction appropriée en fonction de la section active
        handleTestimonialSection();
      }
    }
  }
  
  // Définition des fonctions pour chaque section
  function handleHeaderSection() {

    setTimeout(() => {

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

  }, 500)

  }
  
  function handlePresentationSection() {

  }
  
  function handleActusSection() {
    console.log("Traitement de la section Actus");
  }
  
  function handleReservationSection() {
    console.log("Traitement de la section Réservation");

    setTimeout(() => {

      const elements = document.getElementsByClassName("days");

      function zoomIn(index) {
        let scale = 0;
        function step(timestamp) {
          if (!start) start = timestamp;
          const progress = timestamp - start;
          scale = progress / 500;
          elements[index].style.transform = `scale(${scale})`;
          if (progress < 500) {
            window.requestAnimationFrame(step);
          }
        }
        let start;
        window.requestAnimationFrame(step);
      }

      for (let i = 0; i < elements.length; i++) {
        setTimeout(() => {
          elements[i].classList.remove("d-none");
          zoomIn(i);
        }, i * 10); // Ajoute un délai de 10ms entre chaque animation
      }

    }, "1000")
  }
  
  function handleProduitsSection() {
    console.log("Traitement de la section Produits");
  }
  
  function handleTestimonialSection() {
    console.log("Traitement de la section Testimonial");
  }
  
  
  // Ajout de l'événement scroll
  window.addEventListener("wheel", handleScroll);
  
  
  
  
  
  




  /*
    const sections = document.querySelectorAll("section");
    const header = document.getElementById("header");
    
    // Fonction pour déterminer la section active
    function getActiveSection() {
      const windowHeight = window.innerHeight;
      const headerHeight = header.offsetHeight;
      const windowTop = window.pageYOffset + headerHeight;
      for (let i = 0; i < sections.length; i++) {
        const section = sections[i];
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        if (windowTop >= sectionTop && windowTop < sectionTop + sectionHeight) {
          return section;
        }
      }
      return null;
    }
    
    // Fonction pour gérer le scroll
    function handleScroll(event) {
      const activeSection = getActiveSection();
      const direction = event.deltaY > 0 ? 1 : -1;
      if (activeSection) {
        let nextSection;
        if (direction === 1) {
          nextSection = activeSection.nextElementSibling;
          while (nextSection && nextSection.offsetTop < window.pageYOffset + window.innerHeight) {
            nextSection = nextSection.nextElementSibling;
          }
        } else {
          const activeSectionTop = activeSection.offsetTop - header.offsetHeight;
          let prevSection = sections[0];
          for (let i = 1; i < sections.length; i++) {
            const section = sections[i];
            const sectionTop = section.offsetTop - header.offsetHeight;
            if (sectionTop <= activeSectionTop) {
              prevSection = section;
            } else {
              break;
            }
          }
          nextSection = prevSection;
        }
        if (nextSection) {
          const nextSectionTop = nextSection.offsetTop - header.offsetHeight;
          window.scrollTo({ top: nextSectionTop, behavior: "smooth" });
        } else if (direction === -1) {
          const firstSection = sections[0];
          const firstSectionTop = firstSection.offsetTop - header.offsetHeight;
          window.scrollTo({ top: firstSectionTop, behavior: "smooth" });
        }
      }
    }
    
    // Ajout de l'événement scroll
    window.addEventListener("wheel", handleScroll);

    */
}



/*

export function Scroll(){
    const sections = document.querySelectorAll("section");
    const header = document.getElementById("header");
    
    // Fonction pour déterminer la section active
    function getActiveSection() {
      const windowHeight = window.innerHeight;
      const headerHeight = header.offsetHeight;
      const windowTop = window.pageYOffset + headerHeight;
      for (let i = 0; i < sections.length; i++) {
        const section = sections[i];
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        if (windowTop >= sectionTop && windowTop < sectionTop + sectionHeight) {
          return section;
        }
      }
      return null;
    }
    
    // Variable pour stocker la section active précédente
let previousSection = null;

// Fonction pour gérer le scroll
function handleScroll(event) {
  const activeSection = getActiveSection();
  const direction = event.deltaY > 0 ? 1 : -1;
  if (activeSection) {
    let nextSection;
    if (direction === 1) {
      nextSection = activeSection.nextElementSibling;
      while (nextSection && nextSection.offsetTop < window.pageYOffset + window.innerHeight) {
        nextSection = nextSection.nextElementSibling;
      }
    } else {
      const activeSectionTop = activeSection.offsetTop - header.offsetHeight;
      let prevSection = sections[0];
      for (let i = 1; i < sections.length; i++) {
        const section = sections[i];
        const sectionTop = section.offsetTop - header.offsetHeight;
        if (sectionTop <= activeSectionTop) {
          prevSection = section;
        } else {
          break;
        }
      }
      nextSection = prevSection;
    }
    if (nextSection) {
      const nextSectionTop = nextSection.offsetTop - header.offsetHeight;
      window.scrollTo({ top: nextSectionTop, behavior: "smooth" });
    } else if (direction === -1) {
      const firstSection = sections[0];
      const firstSectionTop = firstSection.offsetTop - header.offsetHeight;
      window.scrollTo({ top: firstSectionTop, behavior: "smooth" });
    }
  }

  // Vérification si la section active a changé après la fin du scroll
  setTimeout(() => {
    const newActiveSection = getActiveSection();
    if (newActiveSection !== previousSection) {
      alert("Nouvelle section active !");
      previousSection = newActiveSection;
    }
  }, 1000);
}
    
    // Ajout de l'événement scroll
    window.addEventListener("wheel", handleScroll);
}



*/