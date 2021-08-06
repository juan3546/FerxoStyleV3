$( document ).ready(function() {
    var nav = document.querySelector('nav');
 window.addEventListener('scroll', function(){
  if (window.pageYOffset > 80) {
       nav.classList.add('bg-light', 'shadow');
  } else {
     nav.classList.remove('bg-light', 'shadow');
  }
 });
 
});