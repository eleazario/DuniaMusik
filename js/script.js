$('.page-scroll').on('click', function(e){

    //ambil isi href
    var href = $(this).attr('href');
    //tangkap elemen
    var elemenhref = $(href);
    
    $('html,body').animate({
        scrollTop: elemenhref.offset().top
    }, 1250, 'easeOutQuart');
    
    e.preventDefault();
});

//parallax
$(window).scroll(function(){
    var wScroll = $(this).scrollTop();

    $('.jumbotron h1').css({
        'transform' : 'translate(0px, '+ wScroll/4 +'%)'
    });

    $('.jumbotron p').css({
        'transform' : 'translate(0px, '+ wScroll/2 +'%)'
    });

});