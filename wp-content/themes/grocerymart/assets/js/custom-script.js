jQuery(document).ready(function ($) {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(".back-to-top a").fadeIn();
    } else {
      $(".back-to-top a").fadeOut();
    }
  });

  $(".back-to-top a").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 800);
    return false;
  });
});

// Main Slider
jQuery(document).ready(function() {
  jQuery('.main-slider .owl-carousel').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    navText: ["<span class='dashicons dashicons-arrow-left-alt2'></span>","<span class='dashicons dashicons-arrow-right-alt2'></span>"],
    dots: false,
    rtl: false,
    items: 1,
    autoplay: true,
  });
});

// Project Slider
jQuery(function ($) {
  function grocerymart_initCarousel() {
    var $grocerymart_carousel = $('.project-section .owl-carousel');

    $grocerymart_carousel.owlCarousel({
      nav: true,
      navText: ["<span class='dashicons dashicons-arrow-left-alt2'></span>","<span class='dashicons dashicons-arrow-right-alt2'></span>"],
      dots: false,
      lazyLoad: true,
      autoplayTimeout: 4000,
      loop: true,
      center: true,
      autoplayHoverPause: false,
      autoplay: true,
      mouseDrag: true,
      responsive: {
        0: {
          items: 1,
          margin: 8,
        },
        420: {
          items: 1,
          margin: 12,
        },
        634: {
          items: 1,
          margin: 15,
        },
        768: {
          items: 3,
          margin: 15,
        },
        958: {
          items: 3,
          margin: 18,
        },
        992: {
          items: 3,
          margin: 17,
        },
        1200: {
          items: 3,
          margin:20,
        },
        1567: {
          items: 3,
          margin:25,
        }
      },
      onInitialized: grocerymart_updateActiveCenter,
      onTranslated: grocerymart_updateActiveCenter
    });
  }

  function grocerymart_updateActiveCenter() {
    var $grocerymart_section = $('.projects-slider');

    $grocerymart_section.find('.owl-item')
      .removeClass('active-center');

    $grocerymart_section.find('.owl-item.center')
      .addClass('active-center');
  }
  grocerymart_initCarousel();
});