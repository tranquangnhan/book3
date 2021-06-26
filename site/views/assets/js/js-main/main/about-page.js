$('#slide-about-page').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    dots: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

$(".move-to").click(function (e) { 
    e.preventDefault();
    var to = $(this).attr("data-to");
    var top = $('body').find($('#' + to)).offset().top;
    $('html, body').animate({
        scrollTop: top
    }, {
        duration: 1000,
        easing: "linear"
    });
    return false;
});

