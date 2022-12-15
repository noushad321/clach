$(window).bind("scroll", function () {
    console.log("first");
    // if($(window).scrollTop() >= $('.pdp-main').offset().top + $('.pdp-main').outerHeight() - window.innerHeight) {
    //     $('.my-header').removeClass('sticky');
    // }else{
    //     $('.my-header').addClass('sticky');
    // }
});

$(".toggleRead").click(function(){
    $(this).parent().toggleClass("toggle--active");
});







    
