(function($) {
  $(document).ready();

  // smooth scroll

  $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') ==
          this.pathname.replace(/^\//, '') &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length
          ? target
          : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate(
            {
              scrollTop: target.offset().top
            },
            1000,
            function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(':focus')) {
                // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              }
            }
          );
        }
      }
    });

  $('.main-carousel').flickity({
    // options
    cellAlign: 'left',
    contain: true,
    wrapAround: true,
    autoPlay: true,
    prevNextButtons: false
  });

  // Slide in Scroll

  // function debounce(func, wait = 20, immediate = true) {
  //   var timeout;
  //   return function() {
  //     var context = this, args = arguments;
  //     var later = function() {
  //       timeout = null;
  //       if (!immediate) func.apply(context, args);
  //     };
  //     var callNow = immediate && !timeout;
  //     clearTimeout(timeout);
  //     timeout = setTimeout(later, wait);
  //     if (callNow) func.apply(context, args);
  //   };
  // };

  // const sliderParas = document.querySelectorAll('.slide-in');
  // function checkSlide(e) {
  //   sliderParas.forEach(sliderPara => {
  //   //   // half way through the image
  //     const slideInAt = (window.scrollY + window.innerHeight) - sliderPara.height / 2;
  //   //   // bottom of the image
  //   console.log(slideInAt);
  //     const imageBottom = sliderPara.offsetTop + sliderPara.height;
  //     const isHalfShown = slideInAt > sliderPara.offsetTop;
  //   //   const isNotScrolledPast = window.scrollY < imageBottom;
  //   //   if (isHalfShown && isNotScrolledPast) {
  //   //     sliderPara.classList.add('active');
  //   //   } else {
  //   //     sliderPara.classList.remove('active');
  //   //   }
  //   });
   
  // }
  // window.addEventListener('scroll', debounce(checkSlide));

  console.log('Hire Me');
})(jQuery);
