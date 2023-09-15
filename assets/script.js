console.log("test")

document.addEventListener("DOMContentLoaded", function () {
    
    const section2 = document.querySelector(".story__article");
    section2.classList.add("show");

    const section3=document.getElementById("studio");
	  section3.classList.add("show");

    const section4=document.getElementById("characters");
    section4.classList.add("show");

    const section5=document.getElementById("place");
    section5.classList.add("show");

    //animation stitres

    /* const elements = document.querySelectorAll('.titreAnime');
    elements.forEach(element => {
      element.classList.add('run');
    });

    const elements2 = document.querySelectorAll('.titreAnime2');
    elements2.forEach(element => {
      element.classList.add('run2');
    }); */

  });

  //animation au scroll
    //permier epartie du titre
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
