const filmContainer = document.querySelectorAll(".filmContainer");
let trailerButton = document.querySelector(".trailerButton");



filmContainer.forEach(film => {
  
    film.addEventListener("mouseover", ()=>{

        trailerButton = film.querySelector(":scope > div");
        console.log(trailerButton);

        trailerButton.classList.remove("hide");
        trailerButton.classList.add("show");
        
    });
        
    film.addEventListener("mouseout", ()=>{

        trailerButton.classList.add("hide");
        trailerButton.classList.remove("show");
    
    });

});
