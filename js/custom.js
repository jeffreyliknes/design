(function($){
    $(document).ready();

// external js: flickity.pkgd.js

// var carousel = document.querySelector('.main-carousel');
// var flkty = new Flickity( carousel, {
//   imagesLoaded: true,
//   percentPosition: false,
// });

// var imgs = carousel.querySelectorAll('.carousel-cell');
// // get transform property
// var docStyle = document.documentElement.style;
// var transformProp = typeof docStyle.transform == 'string' ?
//   'transform' : 'WebkitTransform';

// flkty.on( 'scroll', function() {
//   flkty.slides.forEach( function( slide, i ) {
//     var img = imgs[i];
//     var x = ( slide.target + flkty.x ) * -1/3;
//     img.style[ transformProp ] = 'translateX(' + x  + 'px)';
//   });
// });

// smooth scroll


$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

    $('.main-carousel').flickity({
        // options
        cellAlign: 'left',
        contain: true,
        wrapAround: true,
        autoPlay: true,
        prevNextButtons: false,
      });

    

        console.log('Hire Me');
      
      
})(jQuery);