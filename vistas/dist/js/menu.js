$( document ).ready(function() {
    var nav = document.querySelector('.navbar');
 window.addEventListener('scroll', function(){
  if (window.pageYOffset > 100) {
      nav.classList.remove('navbar-expand-lg');
      nav.classList.remove('fixed-top');
      nav.classList.add('navbar-dark');
      nav.classList.add('bg-dark');
      nav.classList.add('fixed-top');
       
  } else {
   nav.classList.remove('navbar-dark');
     nav.classList.remove('bg-dark');
     nav.classList.remove('fixed-top');
     nav.classList.add('navbar-expand-lg');
     nav.classList.add('fixed-top');
  }
 });
});

