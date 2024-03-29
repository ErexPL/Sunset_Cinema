const container = document.querySelector('.container');
const seats = document.querySelectorAll('.row .seat:not(.occupied)');
const count = document.getElementById('count');
const total = document.getElementById('total');
const ticketTypeSelect = document.getElementById('ticket');


populateUI();
let ticketPrice = +ticketTypeSelect.value;



// update total and count
function updateSelectedCount() {
  const selectedSeats = document.querySelectorAll('.row .seat.selected');

  const seatsIndex = [...selectedSeats].map((seat) => [...seats].indexOf(seat));

  localStorage.setItem('selectedSeats', JSON.stringify(seatsIndex));

  //copy selected seats into arr
  // map through array
  //return new array of indexes

  const selectedSeatsCount = selectedSeats.length;

  count.innerText = selectedSeatsCount;
  total.innerText = selectedSeatsCount * ticketPrice;
}

// get data from localstorage and populate ui
function populateUI() {
  const selectedSeats = JSON.parse(localStorage.getItem('selectedSeats'));
  if (selectedSeats !== null && selectedSeats.length > 0) {
    seats.forEach((seat, index) => {
      if (selectedSeats.indexOf(index) > -1) {
        seat.classList.add('selected');
      }
    });
  }
}

// Seat click event
container.addEventListener('click', (e) => {
  if (e.target.classList.contains('seat') && !e.target.classList.contains('occupied')) {
    e.target.classList.toggle('selected');

    updateSelectedCount();
  }
});

// intial count and total
updateSelectedCount();



function seatOccupied() {
  seats.forEach(seat => seat.classList.add("occupied"));
}



function randomSeat() {
  const randomIndex = Math.floor(Math.random() * seats.length);
  seats[randomIndex].classList.add('occupied');
}

function randomSeat2() {
  const seats = document.querySelectorAll('.row .seat:not(.occupied)');
  const probability = 0.075;

  seats.forEach(seat => {
    if (Math.random() < probability) {
      seat.classList.add('occupied');
    }
  });
}

document.addEventListener('DOMContentLoaded', function() {
  randomSeat2();
});
// Save selected movie index and price
function setMovieData(movieIndex, moviePrice) {
  localStorage.setItem('selectedMovieIndex', movieIndex);
  localStorage.setItem('selectedMoviePrice', moviePrice);
}

// Movie select event
ticketTypeSelect.addEventListener('change', (e) => {
  ticketPrice = +e.target.value;
  setMovieData(e.target.selectedIndex, e.target.value);
  updateSelectedCount();
});
const selectedMovieIndex = localStorage.getItem('selectedMovieIndex');
