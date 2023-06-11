let filmContainer = document.querySelectorAll(".filmContainer");
let line = document.querySelectorAll(".line");
let buyTickets = document.querySelectorAll(".buyTicket");

let films = ["avengers1.png", "avengers2.png", "avengers3.png", "avengers4.png", "deadpool1.png", "deadpool2.png", "drstrange1.png", "drstrange2.png", "grownups1.png", "grownups2.png", "ironman1.png", "ironman2.png", "ironman3.png", "pacificrim1.png", "pacificrim2.png", "rocky1.png", "rocky2.png", "spiderman1.png", "spiderman2.png", "spiderman3.png", "thor1.png", "thor2.png", "thor3.png", "thor4.png"];
let counter = 0;



filmContainer.forEach(film => {
  
    film.addEventListener("mouseover", ()=>{

        trailerButton = film.querySelector(":scope > .trailerButton");
        trailerButton.classList.remove("hide");
        trailerButton.classList.add("show");

        ticketButton = film.querySelector(":scope > .ticketButton");
        ticketButton.classList.remove("hide");
        ticketButton.classList.add("show");

        line = film.querySelector(":scope > .line");
        line.classList.remove("hide");
        line.classList.add("show");
        
    });
        
    film.addEventListener("mouseout", ()=>{

        trailerButton.classList.add("hide");
        trailerButton.classList.remove("show");

        ticketButton.classList.add("hide");
        ticketButton.classList.remove("show");

        line.classList.add("hide");
        line.classList.remove("show");
    
    });

    

    if (!(counter % 6)) {

        films = ["avengers1.png", "avengers2.png", "avengers3.png", "avengers4.png", "deadpool1.png", "deadpool2.png", "drstrange1.png", "drstrange2.png", "grownups1.png", "grownups2.png", "ironman1.png", "ironman2.png", "ironman3.png", "pacificrim1.png", "pacificrim2.png", "rocky1.png", "rocky2.png", "spiderman1.png", "spiderman2.png", "spiderman3.png", "thor1.png", "thor2.png", "thor3.png", "thor4.png"];
        counter = 0;

    };

    filmImage = film.querySelector(".filmContainer > img");
    filmTrailer = film.querySelector(".trailerButton > a");
    filmTicket = film.querySelector(".ticketButton > a");
    randomMovie = Math.floor(Math.random() * films.length);
    filmImage.src = "imgs/" + films[randomMovie];

    switch (films[randomMovie]) {

        case "avengers1.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=eOrNdBpGMv8";
            filmTicket.href = "../Buy_Ticket/buy_ticket_avengers1.php";
            break;

        case "avengers2.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=tmeOjFno6Do";
            filmTicket.href = "../Buy_Ticket/buy_ticket_avengers2.php";
            break;
        
        case "avengers3.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=6ZfuNTqbHE8";
            filmTicket.href = "../Buy_Ticket/buy_ticket_avengers3.php";
            break;

        case "avengers4.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=TcMBFSGVi1c";
            filmTicket.href = "../Buy_Ticket/buy_ticket_avengers4.php";
            break;
        
        case "deadpool1.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=Xithigfg7dA";
            filmTicket.href = "../Buy_Ticket/buy_ticket_deadpool1.php";
            break;

        case "deadpool2.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=D86RtevtfrA";
            filmTicket.href = "../Buy_Ticket/buy_ticket_deadpool2.php";
            break;
        
        case "drstrange1.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=h7gvFravm4A";
            filmTicket.href = "../Buy_Ticket/buy_ticket_drstrange1.php";
            break;

        case "drstrange2.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=Rt_UqUm38BI";
            filmTicket.href = "../Buy_Ticket/buy_ticket_drstrange2.php";
            break;

        case "grownups1.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=e01NVCveGkg";
            filmTicket.href = "../Buy_Ticket/buy_ticket_grownups1.php";
            break;
        
        case "grownups2.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=a_c3hW0Uyvc";
            filmTicket.href = "../Buy_Ticket/buy_ticket_grownups2.php";
            break;

        case "ironman1.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=8ugaeA-nMTc";
            filmTicket.href = "../Buy_Ticket/buy_ticket_ironman1.php";
            break;

        case "ironman2.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=wKtcmiifycU";
            filmTicket.href = "../Buy_Ticket/buy_ticket_ironman2.php";
            break;
        
        case "ironman3.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=Ke1Y3P9D0Bc";
            filmTicket.href = "../Buy_Ticket/buy_ticket_ironman3.php";
            break;

        case "pacificrim1.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=5guMumPFBag";
            filmTicket.href = "../Buy_Ticket/buy_ticket_pacificrim1.php";
            break;

        case "pacificrim2.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=_EhiLLOhVis";
            filmTicket.href = "../Buy_Ticket/buy_ticket_pacificrim2.php";
            break;
        
        case "rocky1.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=7RYpJAUMo2M";
            filmTicket.href = "../Buy_Ticket/buy_ticket_rocky1.php";
            break;

        case "rocky2.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=6PSSxAGSiCY";
            filmTicket.href = "../Buy_Ticket/buy_ticket_rocky2.php";
            break;
        
        case "spiderman1.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=t06RUxPbp_c";
            filmTicket.href = "../Buy_Ticket/buy_ticket_spiderman1.php";
            break;

        case "spiderman2.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=1s9Yln0YwCw";
            filmTicket.href = "../Buy_Ticket/buy_ticket_spiderman2.php";
            break;

        case "spiderman3.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=e5wUilOeOmg";
            filmTicket.href = "../Buy_Ticket/buy_ticket_spiderman3.php";
            break;
        
        case "thor1.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=JOddp-nlNvQ";
            filmTicket.href = "../Buy_Ticket/buy_ticket_thor1.php";
            break;

        case "thor2.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=jHFhZLJajlc";
            filmTicket.href = "../Buy_Ticket/buy_ticket_thor2.php";
            break;

        case "thor3.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=ue80QwXMRHg";
            filmTicket.href = "../Buy_Ticket/buy_ticket_thor3.php";
            break;
        
        case "thor4.png":
            filmTrailer.href = "https://www.youtube.com/watch?v=Go8nTmfrQd8";
            filmTicket.href = "../Buy_Ticket/buy_ticket_thor4.php";
            break;

    };

    films.splice(randomMovie, 1);
    counter++;

});
