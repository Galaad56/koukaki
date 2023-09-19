console.log("test")


  //animation au scroll
    //permiere partie du titre

   const observer = new IntersectionObserver(entries => {
    // Loop over the entries
    entries.forEach(entry => {
      // If the element is visible
      if (entry.isIntersecting) {
        // Add the animation class
        entry.target.classList.add("run");
      }
        else {
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
    // Loop over the entries
    entries.forEach(entry => {
      // If the element is visible
      if (entry.isIntersecting) {
        // Add the animation class
        entry.target.classList.add("run2");
      }
        else {
        entry.target.classList.remove("run2");
        }
    });
  });
  //console.log (document.querySelector(".titreAnime"))
  //observer.observe(document.querySelector(".titreAnime"));

  const sections2 = document.querySelectorAll(".titreAnime2")
    sections2.forEach(section => {
    observer2.observe(section);  
  });
