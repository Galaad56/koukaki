console.log("test")

document.addEventListener("DOMContentLoaded", function () {
    const section1 = document.querySelector(".banner");
    section1.classList.add("show");

    const section2 = document.querySelector(".story__article");
    section2.classList.add("show");

    const section3=document.getElementById("studio");
	  section3.classList.add("show");

    const section4=document.getElementById("characters");
    section4.classList.add("show");

    const section5=document.getElementById("place");
    section5.classList.add("show");

    //animation stitres

    const elements = document.querySelectorAll('.titreAnime');
    elements.forEach(element => {
      element.classList.add('run');
    });

    const elements2 = document.querySelectorAll('.titreAnime2');
    elements2.forEach(element => {
      element.classList.add('run2');
    });

  });

  //animation au scroll

  const observer = new IntersectionObserver(entries => {
    // Loop over the entries
    entries.forEach(entry => {
      // If the element is visible
      if (entry.isIntersecting) {
        // Add the animation class
        entry.target.classList.add("run");
      }
    });
  });
  
  observer.observe(document.querySelector(".titreAnime"));