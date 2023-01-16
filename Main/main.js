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

        films = ["avengers1.png", "avengers2.png", "avengers3.png", "avengers4.png", "deadpool1.png", "deadpool2.png", "drstrange1.png", "drstrange2.png", "grownups1.png", "grownups2.png", "ironman1.png", "ironman2.png", "ironman3.png", "pacificrim1.png", "pacificrim2.png", "rocky1.png", "rocky2.png", "spiderman1.png", "spiderman2.png", "spiderman3.png", "thor1.png", "thor2.png", "thor3.png", "thor4.png"];
        counter = 0;

    };

    filmImage = film.querySelector(".filmContainer > img");
    filmTrailer = film.querySelector(".trailerButton > a");
    randomMovie = Math.floor(Math.random() * films.length);
    filmImage.src = "imgs/" + films[randomMovie];

    switch (films[randomMovie]) {

        case "avengers1.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=eOrNdBpGMv8";
            break;

        case "avengers2.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=tmeOjFno6Do";
            break;
        
        case "avengers3.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=6ZfuNTqbHE8";
            break;

        case "avengers4.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=TcMBFSGVi1c";
            break;
        
        case "deadpool1.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=Xithigfg7dA";
            break;

        case "deadpool2.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=D86RtevtfrA";
            break;
        
        case "drstrange1.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=h7gvFravm4A";
            break;

        case "drstrange2.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=Rt_UqUm38BI";
            break;

        case "grownups1.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=e01NVCveGkg";
            break;
        
        case "grownups2.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=a_c3hW0Uyvc";
            break;

        case "ironman1.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=8ugaeA-nMTc";
            break;

        case "ironman2.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=wKtcmiifycU";
            break;
        
        case "ironman3.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=Ke1Y3P9D0Bc";
            break;

        case "pacificrim1.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=5guMumPFBag";
            break;

        case "pacificrim2.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=_EhiLLOhVis";
            break;
        
        case "rocky1.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=7RYpJAUMo2M";
            break;

        case "rocky2.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=6PSSxAGSiCY";
            break;
        
        case "spiderman1.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=t06RUxPbp_c";
            break;

        case "spiderman2.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=1s9Yln0YwCw";
            break;

        case "spiderman3.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=e5wUilOeOmg";
            break;
        
        case "thor1.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=JOddp-nlNvQ";
            break;

        case "thor2.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=jHFhZLJajlc";
            break;

        case "thor3.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=ue80QwXMRHg";
            break;
        
        case "thor4.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=Go8nTmfrQd8";
            break;

    };

    films.splice(randomMovie, 1);
    counter++;

});
