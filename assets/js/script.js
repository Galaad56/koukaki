
  //animation au scroll
    //permiere partie du titre

   const observer = new IntersectionObserver(entries => {
    // Loop over the entries
    entries.forEach(entry => {
      // si l'élément est visible
      if (entry.isIntersecting) {
        // ajouter classe 
        entry.target.classList.add("run");
      }
        else {
          // supprimer  classe 
        entry.target.classList.remove("run");
        }
    });
  });

  const sections = document.querySelectorAll(".titreAnime")
    sections.forEach(section => {
    observer.observe(section);
  });

  
    //deuxieme partie du titre
  const observer2 = new IntersectionObserver(entries => {
 
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("run2");
      }
        else {
        entry.target.classList.remove("run2");
        }
    });
  });

  const sections2 = document.querySelectorAll(".titreAnime2")
    sections2.forEach(section => {
    observer2.observe(section);  
  });
