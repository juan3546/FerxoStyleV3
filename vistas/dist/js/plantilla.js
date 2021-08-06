$(".owl-carousel").owlCarousel({
    autoplay: true,
    autoplayhoverpause: true,
    autoplaytimeout: 40,
    items: 4,
    nav: true,
    loop: true,
    lazyLoad: true,
    margin: 4,
    padding: 4,
    stagePadding: 5,
    responsive: {
        0 : {
            items: 1,
            docts: false
        },
 
        485: {
            items: 2,
            docts: false
        },
        728: {
            items: 3,
            docts: false
        },
        960: {
            items: 4,
            docts: false
        },
    }
 });
 $('#slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})