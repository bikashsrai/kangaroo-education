(function () {
  "use strict";

  const select = (el, all = false) => {
    el = el.trim();
    if (all) {
      return [...document.querySelectorAll(el)];
    } else {
      return document.querySelector(el);
    }
  };

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all);
    if (selectEl) {
      if (all) {
        selectEl.forEach((e) => e.addEventListener(type, listener));
      } else {
        selectEl.addEventListener(type, listener);
      }
    }
  };

  /**
   * Mobile nav toggle
   */
  on("click", ".mobile-nav-toggle", function (e) {
    select("#navbar").classList.toggle("navbar-mobile");
    this.classList.toggle("fa-list");
    this.classList.toggle("fa-times");
  });

  /**
   * Mobile nav dropdowns activate
   */
  on(
    "click",
    ".navbar .dropdown > a",
    function (e) {
      if (select("#navbar").classList.contains("navbar-mobile")) {
        e.preventDefault();
        this.nextElementSibling.classList.toggle("dropdown-active");
      }
    },
    true
  );
  // destination
  $(".immigrateservice").owlCarousel({
    loop: true,
    autoplay: true,
    margin: 20,
    smartSpeed: 600,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1,
        dots: false,
      },
      800: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });

  $(document).ready(function () {
    $(".home_slick_slider").flexslider({
      animation: "fade", // fade, slide, ...
      slideshowSpeed: 12000,
      animationSpeed: 1000,
      controlNav: false,
      pauseOnAction: false,
      initDelay: 0,
      directionNav: false,
    });
  });

  //   college slider
  $(document).ready(function () {
    $(".college_slider").owlCarousel({
      loop: false,
      rewind: true,
      autoplay: true,
      autoPlaySpeed: 50000,
      autoPlayTimeout: 10000,
      autoPlayHoverPause: true,
      margin: 20,
      nav: true,
      animateIn: "zoomIn",
      animateOut: "fadeOut",
      dots: false,
      // smartSpeed: 450,
      navText: [
        '<i class="fa fa-angle-left"></i>',
        '<i class="fa fa-angle-right"></i>',
      ],
      responsiveClass: true,
      responsive: {
        0: {
          items: 2,
        },
        480: {
          items: 2,
        },
        580: {
          items: 2,
        },
        767: {
          items: 4,
        },
        991: {
          items: 4,
        },
        1152: {
          items: 6,
        },
        1360: {
          items: 6,
        },
        1366: {
          items: 6,
        },
      },
    });
    $(".country_inner_slider").owlCarousel({
      loop: false,
      rewind: true,
      autoplay: true,
      // autoPlaySpeed: 10000,
      autoPlayTimeout: 10000,
      smartSpeed: 2000,
      autoPlayHoverPause: true,
      margin: 20,
      nav: false,
      // animateIn: 'zoomIn',
      // animateOut: 'fadeOut',
      dots: false,
      // smartSpeed: 450,
      navText: [
        '<i class="fa fa-angle-left"></i>',
        '<i class="fa fa-angle-right"></i>',
      ],
      responsiveClass: true,
      responsive: {
        0: {
          items: 2,
        },
        480: {
          items: 2,
        },
        580: {
          items: 2,
        },
        767: {
          items: 4,
        },
        991: {
          items: 4,
        },
        1152: {
          items: 6,
        },
        1360: {
          items: 6,
        },
        1366: {
          items: 8,
        },
      },
    });
  });
  $(".newslide").owlCarousel({
    loop: true,
    autoplay: true,
    margin: 50,
    smartSpeed: 600,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1,
      },
      800: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
  $(".testimonial").owlCarousel({
    loop: true,
    autoplay: true,
    margin: 50,
    smartSpeed: 600,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1,
      },
      800: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
	// destination
  $(".student_testimonial").owlCarousel({
    loop: true,
    autoplay: true,
    margin: 20,
    smartSpeed: 600,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1,
        dots: false,
      },
      800: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
  $(".our_certify").owlCarousel({
    loop: false,
    autoplay: true,
    margin: 50,
    smartSpeed: 600,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1,
      },
      800: {
        items: 2,
      },
      1000: {
        items: 6,
      },
    },
  });
  // filter
  $("select.filterby").change(function () {
    var filters = $.map($("select.filterby").toArray(), function (e) {
      return $(e).val();
    }).join(".");
    $("div#FilterContainer").find("div").hide();
    $("div#FilterContainer")
      .find("div." + filters)
      .show();
  });
  // scroll to top

  $(window).scroll(function () {
    if ($(this).scrollTop() > 20) {
      $(".toTopBtn").fadeIn();
    } else {
      $(".toTopBtn").fadeOut();
    }
  });

  $(".toTopBtn").click(function () {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      1000
    );
    return false;
  });
	
// test

// testend
})();
