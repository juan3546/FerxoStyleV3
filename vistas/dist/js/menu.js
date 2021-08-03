$( document ).ready(function() {
    var nav = document.querySelector('nav');
 window.addEventListener('scroll', function(){
  if (window.pageYOffset > 100) {
       nav.classList.add('bg-light', 'shadow');
  } else {
     nav.classList.remove('bg-light', 'shadow');
  }
 });
 let br= document.getElementById('imgp');
   window.addEventListener('scroll', function(){
      var value = window.scrollY;
      br.style.top = value * 0.5 + 'px';  
    });
});