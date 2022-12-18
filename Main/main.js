const filmContainer = document.querySelectorAll(".filmContainer");
let films = ["avengers1.png", "avengers2.png", "avengers3.png", "deadpool1.png", "deadpool2.png", "drstrange1.png", "drstrange2.png", "dzieci1.png", "dzieci2.png", "ironman1.png", "ironman2.png", "ironman3.png", "pacificrim1.png", "pacificrim2.png", "rocky1.png", "rocky2.png", "rocky3.png", "spiderman1.png", "spiderman2.png", "spiderman3.png", "thor1.png", "thor2.png", "thor3.png", "thor4.png"];
let counter = 0;



filmContainer.forEach(film => {
  
    film.addEventListener("mouseover", ()=>{

        trailerButton = film.querySelector(":scope > .trailerButton");
        trailerButton.classList.remove("hide");
        trailerButton.classList.add("show");
        ticketButton = film.querySelector(":scope > .ticketButton");
        ticketButton.classList.remove("hide");
        ticketButton.classList.add("show");
        
    });
        
    film.addEventListener("mouseout", ()=>{

        trailerButton.classList.add("hide");
        trailerButton.classList.remove("show");
        ticketButton.classList.add("hide");
        ticketButton.classList.remove("show");
    
    });

    

    if (!(counter % 6)) {

        films = ["avengers1.png", "avengers2.png", "avengers3.png", "deadpool1.png", "deadpool2.png", "drstrange1.png", "drstrange2.png", "dzieci1.png", "dzieci2.png", "ironman1.png", "ironman2.png", "ironman3.png", "pacificrim1.png", "pacificrim2.png", "rocky1.png", "rocky2.png", "rocky3.png", "spiderman1.png", "spiderman2.png", "spiderman3.png", "thor1.png", "thor2.png", "thor3.png", "thor4.png"];
        counter = 0;

    }

    filmImage = film.querySelector(".filmContainer > img");
    randomMovie = Math.floor(Math.random() * films.length);
    filmImage.src = "imgs/" + films[randomMovie];
    films.splice(randomMovie, 1);
    counter++;

});
