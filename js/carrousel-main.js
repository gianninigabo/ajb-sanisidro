
jQuery(document).ready(function() {
  jQuery(function() {

      jQuery('.slide-one-item').owlCarousel({
          center: false,
          autoplayHoverPause: true,
          items: 1,
          loop: false,
          rewind: true,
          stagePadding: 0,
          margin: 0,
          smartSpeed: 1500,
          autoplay: true,
          pauseOnHover: false,
          dots: true,
          nav: true,
          navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
      });

    })

});
