(function($){
    $(document).ready();


    $('.main-carousel').flickity({
        // options
        cellAlign: 'left',
        contain: true,
        wrapAround: true,
        autoPlay: true,
        prevNextButtons: false,
      });

      $(window).on('scroll', function(){
        if($(window).scrollTop()) {
          $('nav').addClass('nav-top')
        } else {
        ($('nav').removeClass('nav-top'))
        }});
      
      
})(jquery);