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
}

