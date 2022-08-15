$('.counter').counterUp({
    delay: 10,
    time: 1000
});
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    //nav:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplaySpeed: 2200,
    animateOut: 'fadeOut',
    //navText: ["<i class='fa fa-chevron-left'></i>" ,"<i class='fa fa-chevron-right'></i>"],
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:1
        }
    }
});