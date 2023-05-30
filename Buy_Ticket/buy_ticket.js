$('.round').click(function(e) {
    e.preventDefault();
    e.stopPropagation();
    $('.arrow').toggleClass('bounceAlpha');
  });
  

  function alertTicket() { 
    alert("Hello! I am an alert box!");
  }