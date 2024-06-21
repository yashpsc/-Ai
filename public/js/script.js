  
if (document.getElementById("checkwheel")){
  window.addEventListener("load", function () {
    loadjs(["sticky-wheel.min.js"], function () {
      stickyWheel(document.getElementById("hs_cos_wrapper_widget_1684856214064"));
    });
  });

};
  




  
    $(".humburgar").on("click", function () {
      $(this).toggleClass("open");
      {
        $(".side_menu").toggleClass("openmenu");
      }
      {
        $("nav").toggleClass("bg-menu");
      }
      {
        $("body").toggleClass("hidden-scroll");
      }

    });





    // Show the first tab by default
    // $('.tabs-stage div').hide();
    $('.tabs-stage  [id*=tab-]:first').show();
    $('.tabs-nav li:first').addClass('tab-active');

    // Change tab class and display content
    $('.tabs-nav a').on('click', function (event) {
      event.preventDefault();
      $('.tabs-nav li').removeClass('tab-active');
      $(this).parent().addClass('tab-active');

      $('.tabs-stage [id*=tab-]').hide();
      $($(this).attr('href')).show();
    });


    $('.tab-link').click(function () {

      var tabID = $(this).attr('data-tab');

      $(this).addClass('active-banner').siblings().removeClass('active-banner');

      $('#tab-' + tabID).addClass('active-banner').siblings().removeClass('active-banner');
    });

    $(".skipbtnhome").click(function () {
      $("html , body").animate({
        scrollTop: $(".human-bg").offset().top - 50
      }, 500);
    });
    $(".skipbtn.two-scroll").click(function () {
      $("html , body").animate({
        scrollTop: $(".mousescrollone").offset().top - 50
      }, 500);
    });
    $(".three-scroll").click(function () {
      $("html , body").animate({
        scrollTop: $(".mousescrolltwo").offset().top - 50
      }, 500);
    });
    $(".skipbtn.four-scroll").click(function () {
      $("html , body").animate({
        scrollTop: $(".mousescrollthree").offset().top - 50
      }, 500);
    });
    $(".skipbtn.five-scroll").click(function () {
      $("html , body").animate({
        scrollTop: $(".mousescrollfour").offset().top - 50
      }, 500);
    });
    $(".skipbtn.six-scroll").click(function () {
      $("html , body").animate({
        scrollTop: $(".mousescrollfive").offset().top - 50
      }, 500);
    });
    $(".skipbtn.seven-scroll").click(function () {
      $("html , body").animate({
        scrollTop: $(".pharma-sec").offset().top - 50
      }, 500);
    });

    $(".scroll-about").click(function () {
      $("html , body").animate({
        scrollTop: $(".about-testimonial").offset().top - 50
      }, 500);
    });



  




  
    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");
    var homebanner = new Swiper(".mySwiperprogress", {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false
      },
      pagination: {
        el: ".swiper-banner-pagination",
        clickable: true,
        type: "fraction",
      },
      navigation: {
        nextEl: ".swiper-banner-prev",
        prevEl: ".swiper-banner-next"
      },
      on: {
        autoplayTimeLeft(s, time, progress) {
          progressCircle.style.setProperty("--progress", 1 - progress);
          progressContent.textContent = ``;
        }
      },
      speed: 1000
    });

  

  
    var swiper = new Swiper(".mySwipercards", {
      pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: false
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  

  
    var swiper = new Swiper(".mySwipertestimonialvideoslider, .mySwipertestimonial, .mySwipertestimonialimage", {
      // pagination: {
      //   el: ".swiper-testimonial-contentpagination",
      //   clickable: true,
      // },
      // autoplay: {
      //   delay: 4000,
      //   disableOnInteraction: false
      // },
      breakpoints: {
        1200: {
          slidesPerView: 1,
          spaceBetween: 20,
          navigation: {
            nextEl: ".swiper-testimonial-prev",
            prevEl: ".swiper-testimonial-next"
          },
        },
      },

    });


    $(window).scroll(function () {

      if ($(this).scrollTop() > 55) {
        $('header').addClass("sticky-head");
      }
      else {
        $('header').removeClass('sticky-head');
      }

      if ($(this).scrollTop() > 100) {
        $('header').addClass("sticky-fixed");
      }
      else {
        $('header').removeClass('sticky-fixed');
      }
    });

    $(".has-child > a").click(function () {
      1199 > $(window).width() &&
        ($(".sub-menu").slideUp(),
          !1 == $(this).next(".sub-menu").is(":visible") &&
          $(this).next(".sub-menu").slideDown());
    })

    $('#button').click(function () {
      $("#onefile").trigger('click');
    })

    $("#onefile").change(function () {
      $('#val').text(this.value.replace(/C:\\fakepath\\/i, ''))
    })


    $('#button2').click(function () {
      $("#twofile").trigger('click');
    })

    $("#twofile").change(function () {
      $('#val2').text(this.value.replace(/C:\\fakepath\\/i, ''))
    })

  




  
    var swiper = new Swiper(".mySwipertestimonialcareer", {
      breakpoints: {
        360: {
          slidesPerView: 1,
          spaceBetween: 50,
          centeredSlides: true,

        },
        768: {
          slidesPerView: 2,
          spaceBetween: 50,
          centeredSlides: false,
          navigation: {
            nextEl: ".swiper-testimonial-prev",
            prevEl: ".swiper-testimonial-next"
          },
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 20,
          navigation: {
            nextEl: ".swiper-testimonial-prev",
            prevEl: ".swiper-testimonial-next"
          },
        },
        1200: {
          slidesPerView: 4,
          spaceBetween: 30,
          grabCursor: true,
          navigation: {
            nextEl: ".swiper-testimonial-prev",
            prevEl: ".swiper-testimonial-next"
          },
        },
      },

    });

  

  
    var swiper = new Swiper(".mySwipercaseastudies", {
      breakpoints: {
        360: {
          slidesPerView: 1,
          spaceBetween: 10,
          centeredSlides: true,

        },
        768: {
          slidesPerView: 2,
          spaceBetween: 20,
          centeredSlides: false,
          navigation: {
            nextEl: ".swiper-testimonial-prev",
            prevEl: ".swiper-testimonial-next"
          },
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 20,
          navigation: {
            nextEl: ".swiper-testimonial-prev",
            prevEl: ".swiper-testimonial-next"
          },
        },
        1200: {
          slidesPerView: 3,
          spaceBetween: 30,
          grabCursor: true,
          navigation: {
            nextEl: ".swiper-testimonial-prev",
            prevEl: ".swiper-testimonial-next"
          },
        },
      },

    });

  

  
    // const interleaveOffset = 0.75;
    var menu = ['Automotive Manufacturing', 'Finished vehicle logistics', 'Automative Aftermarket', 'Insurance', 'Warehousing', 'Pharma']
    var homescroll = new Swiper('.homemousescroll', {
      direction: 'vertical',
      speed: 800,
      mousewheelControl: true,
      watchSlidesProgress: true,
      mousewheel: {
        releaseOnEdges: true,
      },
      pagination: {
        el: '.swiper-paginationmousescroll',
        clickable: true,
        type: 'bullets',
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (menu[index]) + '</span>';
        }
      },

    });

//     homescroll.on('slideChange', () => {
//   console.log(homescroll);
// });

//     homescroll.on('slideChange', () => {                              

// if(homescroll.isBeginning) {
//   $(".homemousescroll").addClass('addfixed')
// }

// if(homescroll.isEnd) {
//   $(".homemousescroll").removeClass('addfixed')
//   }
//   
// });

  

  
    var menuone = ['Component', 'OEMs']
    var swiper = new Swiper('.mousescrollone', {
      direction: 'vertical',
      speed: 800,
      mousewheelControl: true,
      watchSlidesProgress: true,
      mousewheel: {
        releaseOnEdges: true,
      },
      pagination: {
        el: '.swiper-pagination-mousescrollone',
        clickable: true,
        type: 'bullets',
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (menuone[index]) + '</span>';
        }
      },
    });
  

  
    var menutwo = ['RVDI', 'RORO']
    var swiper = new Swiper('.mousescrolltwo', {
      direction: 'vertical',
      speed: 800,
      mousewheelControl: true,
      watchSlidesProgress: true,
      mousewheel: {
        releaseOnEdges: true,
      },
      pagination: {
        el: '.swiper-pagination-mousescrolltwo',
        clickable: true,
        type: 'bullets',
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (menutwo[index]) + '</span>';
        }
      },
    });
  


  
    var menuthree = ['Dealerships and Service centers', 'Used cars','Fleets/Car Rental']
    var swiper = new Swiper('.mousescrollthree', {
      direction: 'vertical',
      speed: 800,
      mousewheelControl: true,
      watchSlidesProgress: true,
      mousewheel: {
        releaseOnEdges: true,
      },
      pagination: {
        el: '.swiper-pagination-mousescrollthree',
        clickable: true,
        type: 'bullets',
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (menuthree[index]) + '</span>';
        }
      },
    });
  


  
    var menufour = ['Insurance Solutions', 'Damage Assessment']
    var swiper = new Swiper('.mousescrollfour', {
      direction: 'vertical',
      speed: 800,
      mousewheelControl: true,
      watchSlidesProgress: true,
      mousewheel: {
        releaseOnEdges: true,
      },
      pagination: {
        el: '.swiper-pagination-mousescrollfour',
        clickable: true,
        type: 'bullets',
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (menufour[index]) + '</span>';
        }
      },
    });
  


  
    var menufive = ['INWARDS', 'OUTWARDS', 'RTO']
    var swiper = new Swiper('.mousescrollfive', {
      direction: 'vertical',
      speed: 800,
      mousewheelControl: true,
      watchSlidesProgress: true,
      mousewheel: {
        releaseOnEdges: true,
      },
      pagination: {
        el: '.swiper-pagination-mousescrollfive',
        clickable: true,
        type: 'bullets',
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (menufive[index]) + '</span>';
        }
      },
    });
  


  

    function checkForVisibility() {
      var headers = document.querySelectorAll(".textheader");
      headers.forEach(function (textheader) {
        if (isElementInViewport(textheader)) {
          textheader.classList.add("headerVisible");
        } else {
          textheader.classList.remove("headerVisible");
        }
      });
    }

    function isElementInViewport(el) {
      var rect = el.getBoundingClientRect();

      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }

    if (window.addEventListener) {
      addEventListener("DOMContentLoaded", checkForVisibility, false);
      addEventListener("load", checkForVisibility, false);
      addEventListener("scroll", checkForVisibility, false);
    }


  

  
    $(function () {

      // Define window variables

      var winScrollTop = $(window).scrollTop();
      var winHeight = window.innerHeight;
      var winWidth = window.innerWidth;

      // Define scene classes.
      var sceneClass = 'scene';
      var sceneActiveClass = sceneClass + '--active';
      var sceneEndedClass = sceneClass + '--ended';

      $(window).on('resize', function () {
        winHeight = window.innerHeight;
        winWidth = window.innerWidth;
      });

      // Scene classes function.
      function setScene($el) {

        // Get bounding values from section.
        var bounding = $el.data('elDom').getBoundingClientRect();

        if (bounding.top > winHeight) {

          // Section is below the viewport.
          // Section has not ended or started, therefore remove classes.
          $el.find('.scene').removeClass(sceneActiveClass);
          $el.find('.scene').removeClass(sceneEndedClass);

        } else if (bounding.bottom < 0) {

          // Section is above the viewport.
          // Section has ended, therefore remove classes.
          $el.find('.scene').addClass(sceneEndedClass);
          $el.find('.scene').removeClass(sceneActiveClass);

        } else {

          // We're now inside the section, not below or above.
          // If top of section is at top of viewport, add class active.
          if (bounding.top <= 0) {
            $el.find('.scene').addClass(sceneActiveClass);
          }

          // If top of section is below top of viewport, remove class active.
          if (bounding.top > 0) {
            $el.find('.scene').removeClass(sceneActiveClass);
          }

          // If bottom of section is at bottom of viewport, add class ended.
          if (bounding.bottom <= (winHeight)) {
            $el.find('.scene').addClass(sceneEndedClass);
          }

          // If bottom of section is not at bottom of viewport, remove class ended.
          if (bounding.bottom > (winHeight)) {
            $el.find('.scene').removeClass(sceneEndedClass);
          }
        }
      }

      // This function sets up the horizontal scroll. This applies data attributes to the section for later use.
      function setUpHorizontalScroll($el) {

        var sectionClass = $el.attr('class');

        // Set content wrapper variables & data attributes.
        var $contentWrapper = $el.find('.' + sectionClass + '__content-wrapper');
        var contentWrapperDom = $contentWrapper.get(0);
        $el.data('contentWrapper', $contentWrapper);
        $el.data('contentWrapperDom', contentWrapperDom);

        // Set content wrapper scroll width variables & data attributes.
        var contentWrapperScrollWidth = $el.data('contentWrapperDom').scrollWidth;
        $el.data('contentWrapperScrollWidth', contentWrapperScrollWidth);

        // Set right max variables & data attributes.
        var rightMax = $el.data('contentWrapperScrollWidth') - winWidth;
        var rightMaxMinus = -(rightMax);
        $el.data('rightMax', Number(rightMaxMinus));

        // Set initialized data variable to false do incidate scrolling functionality doesn't work yet.
        $el.data('initalized', false);

        // Set height of section to the scroll width of content wrapper.
        $el.css('height', $el.data('contentWrapperScrollWidth'));

        // Set data attribute for outerHeight.
        $el.data('outerHeight', $el.outerHeight());

        // Set data attribute for offset top.
        $el.data('offsetTop', $el.offset().top);

        // Set data initialized data variable to true to indicate ready for functionality.
        $el.data('initalized', true);

        // Set data variable for transform X (0 by default)
        $el.data('transformX', '0');

        // Add class of init
        $el.addClass($el.attr('class') + '--init');
      }

      function resetHorizontalScroll($el) {


        // Update data attribute for content wrapper scroll width.

        var contentWrapperScrollWidth = $el.data('contentWrapperDom').scrollWidth;
        $el.data('contentWrapperScrollWidth', contentWrapperScrollWidth);


        // Update rightMax variables & data attributes.
        rightMax = $el.data('contentWrapperScrollWidth') - winWidth;
        rightMaxMinus = -(rightMax);
        $el.data('rightMax', Number(rightMaxMinus));

        // Update height of section to the scroll width of content wrapper.
        $el.css('height', $el.data('contentWrapperScrollWidth'));

        // Update data attribute for outerHeight.
        $el.data('outerHeight', $el.outerHeight());

        // Update data attribute for offset top.
        $el.data('offsetTop', $el.offset().top);

        // If transform is smaller than rightmax, make it rightmax.
        if ($el.data('transformX') <= $el.data('rightMax')) {
          $el.data('contentWrapper').css({
            'transform': 'translate3d(' + $el.data('rightMax') + 'px, 0, 0)',
          });
        }
      }

      var $horizontalScrollSections = $('.horizontal-scroll-section');
      var $horizontalScrollSectionsTriggers = $horizontalScrollSections.find('.trigger');

      // Each function - set variables ready for scrolling functionality. Call horizontal scroll functions on load and resize.
      $horizontalScrollSections.each(function (i, el) {

        var $thisSection = $(this);

        $(this).data('elDom', $(this).get(0));

        // Set up horizontal scrolling data attributes and show section all have been computed.
        setUpHorizontalScroll($(this));

        // Now we're ready, call setScene on load that adds classes based on scroll position.
        setScene($(this));

        // Resize function
        $(window).on('resize', function () {
          // Reset horizontal scrolling data attributes and transform content wrapper if transform is bigger than scroll width.
          resetHorizontalScroll($thisSection);
          // Reset scene positioning.
          setScene($thisSection);
        });

      });

      function setupHorizontalTriggers($el, section) {
        var parent = $el.parent();
        var positionLeft = parent.position().left;
        var positionLeftMinus = -(positionLeft);
        var triggerOffset = $el.data('triggerOffset');
        triggerOffset = !triggerOffset ? 0.5 : triggerOffset = triggerOffset;
        $el.data('triggerOffset', triggerOffset);
        $el.data('triggerPositionLeft', positionLeftMinus);
        $el.data('triggerSection', section);
      }

      function useHorizontalTriggers($el) {
        if ($el.data('triggerSection').data('transformX') <= ($el.data('triggerPositionLeft') * $el.data('triggerOffset'))) {
          $el.data('triggerSection').addClass($el.data('class'));
        } else {
          if ($el.data('remove-class') !== false) {
            $el.data('triggerSection').removeClass($el.data('class'));
          }
        }
      }

      $horizontalScrollSectionsTriggers.each(function (i, el) {
        setupHorizontalTriggers($(this), $(this).closest('.horizontal-scroll-section'));
      });

      function transformBasedOnScrollHorizontalScroll($el) {

        // Get amount scrolled variables.
        var amountScrolledContainer = winScrollTop - $el.data('offsetTop');
        var amountScrolledThrough = (amountScrolledContainer / ($el.data('outerHeight') - (winHeight - winWidth)));

        // Add transform value variable based on amount scrolled through multiplied by scroll width of content.
        var toTransform = (amountScrolledThrough * $el.data('contentWrapperScrollWidth'));

        // Add transform value for minus (as we're transforming opposite direction).
        var toTransformMinus = -(toTransform);

        // If transform value is bigger or equal than 0, set value to 0.
        toTransformMinus = Math.min(0, toTransformMinus);

        // If transform value is smaller or equal than rightMax, set value to rightMax.
        toTransformMinus = Math.max(toTransformMinus, $el.data('rightMax'));

        // Update transformX data variable for section.
        $el.data('transformX', Number(toTransformMinus));

        // If section has been initalized, apply transform.
        if ($el.data('initalized') == true) {
          $el.data('contentWrapper').css({
            'transform': 'translate3d(' + $el.data('transformX') + 'px, 0, 0)'
          });
        }
      }

      // 
      $(window).on('scroll', function () {

        // Get window scroll top.
        winScrollTop = $(window).scrollTop();

        // Each function in horizontal scroll sections.
        $horizontalScrollSections.each(function (i, el) {
          transformBasedOnScrollHorizontalScroll($(this));
          setScene($(this));
        });

        // Each function for horizontal scroll section triggers.
        $horizontalScrollSectionsTriggers.each(function (i, el) {
          useHorizontalTriggers($(this));
        });

      });

    });


    $(".filter-option-heading").click(function () {
      $(this)
        .toggleClass("activeFilter")
        .next(".filter-option-content")
        .stop()
        .slideToggle(500);
    });



    var swiper = new Swiper(".whatnew", {
      pagination: {
        el: ".swiper-whatnewpagination",
        clickable: true,
      },
      autoplay: {
        delay: 4000,
        disableOnInteraction: false
      },
      breakpoints: {
        360: {
          slidesPerView: 1,
          spaceBetween: 20,

        },
        768: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1200: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
      },

    });


    var Url = location.href,
      spliturl = Url.split("?")[1];
    "clcikform" == spliturl &&
      setTimeout(function () {
        jQuery("html , body").animate(
          { scrollTop: jQuery(".bottomform").offset().top - 50 },
          500
        ),
          console.log("setTimeout");
      }, 200);

  

  
    function run_gsap() {
      let gsap_loaded = setInterval(function () {
        if (window.gsap && window.ScrollTrigger) {
          gsap.registerPlugin(ScrollTrigger);
          bg_section();
          clearInterval(gsap_loaded);
        }
      }, 500);

      function bg_section() {
        gsap.from('.bg-section', {
          scrollTrigger: {
            trigger: '.bg-section',
            start: '-150px center',
            end: '300px center',
            scrub: true
          },
          width: '30%',
          duration: 1
        });
      }
    }
    run_gsap();
  



  
    var swiper = new Swiper(".horizontal-mobile", {
      breakpoints: {
        360: {
          slidesPerView: "auto",
          spaceBetween: 20

        },
        768: {
          slidesPerView: "auto",
          spaceBetween: 20
        },
        1024: {
          slidesPerView: "auto",
          spaceBetween: 20
        },
      },

    });
    
  



    $("#myForm").length &&
    ($.validator.addMethod(
      "name_regex",
      function (e, t) {
        return this.optional(t) || /^[a-zA-Z0_ ]*$/i.test(e);
      },
      "Firstname with only a-z A-Z."
    ),
    $.validator.addMethod(
      "mobile_regex",
      function (e, t) {
        return this.optional(t) || /^[0-9\.\-_]{10,30}$/i.test(e);
      },
      "Mobile Number with only 0-9."
    ),
    $("#myForm").validate({
      rules: {
        // first_name: { required: !0, minlength: 1, name_regex: !0 },
        phone: { required: !0, mobile_regex: !0, minlength: 10 },
        email: { required: !0, email: !0 },
        // message: { required: !0 },
      },
      messages: {
        // first_name: { required: "The firstname field is mandatory!" },
        mobile: { required: "The Mobile field is mandatory!" },
        email: { required: "The Email field is mandatory!" },
        // message: { required: "The messagw field is mandatory!" },
      },
    }
    
    ));




// console.clear();

// gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

// const tabs = gsap.utils.toArray(".left-content li");
// const amount = tabs.length;
// const rightElements = document.querySelector(".right-content");
// let active;

// const tl = gsap.timeline({
//   scrollTrigger: {
//     trigger: ".container-large",
//     start: "top top",
//     end: "+=500%",
//     pin: true,
//     scrub: true,
//     markers: true
//   }
// });

// tl.to(rightElements, {
//   y: () => window.innerHeight - rightElements.scrollHeight,
//   ease: "none",
//   duration: 1
// });

// tabs.forEach((tab, i) => {
//   const position = i / (amount - 1);
//   const link = tab.querySelector("a");
//   const st = tl.scrollTrigger;
//   tl.add("tab-" + (i + 1), position).call(
//     () => {
//       if (active !== undefined) {
//         tabs[active].classList.toggle("selected");
//       }
//       tab.classList.toggle("selected");
//       active = i;
//     },
//     null,
//     position
//   );
//   link.addEventListener("click", (e) => {
//     e.preventDefault();
//     gsap.to(window, {
//       scrollTo: {
//         y: st.start + (st.end - st.start) * (position / tl.duration())
//       },
//       duration: 0.4,
//       ease: "power1.inOut"
//     });
//   });
// });

// tl.to({}, { duration: 0.1 });
