/************************************************************************/
/**************************** GLOBAL SCRIPTS ****************************/
/************************************************************************/

// VARIABLES
var body = $("body");
var win = $(window);
var mobileMenuIcon = $("#hamburgerButton");
var mobileMenu = $(".main-nav__drawer");
var question = $(".section--faq .question");
var stickyWrap = $(".sticky-wrapper");
var mainNav = $("#mainNav");
var mainNavOffset = $("#mainNav")[0].offsetTop;

$(function () {
  mobileMenuIcon.click(function () {
    mobileMenuToggle();
  });

  win.on("resize", function () {
    if (win.width() >= 768) {
      mobileMenuReset();
    }
  });

  $(".blogs_slider").slick({
    arrows: false,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });

  $('.image_slider').slick({
    centerMode: true,
    arrows:  false,
    centerPadding: '60px',
    dots: true,
    infinite: true,
    autoplay: false,
    autoplaySpeed: 1500,
    slidesToShow: 5,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 1500,
          slidesToShow: 5,
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1,
          dots: true,
          infinite: true,
          autoplay: false,
          autoplaySpeed: 1500,
        }
      }
    ]
  });

  $(".logo_slider").slick({
    arrows: false,
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 1500,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows: false,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 1500,
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 1500,
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $(".list_slider").slick({
    arrows: false,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });

  $(".panels_slider").slick({
    arrows: false,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });

  $(".teendual_slider").slick({
    arrows: false,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });

  $(".video_slider_nav").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.video_slider_feature',
    dots: true,
    centerMode: false,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          asNavFor: '.video_slider_feature',
          dots: true,
          centerMode: false,
          focusOnSelect: true 
        }
      }
    ]
  });

  $(".video_slider_feature").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: ".video_slider_nav",
  });
  
  $('.team_members_slider').slick({
    dots: true,
    slidesPerRow: 4,
    rows: 3,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesPerRow: 1,
          rows: 3,
        }
      }
    ]
  });

  $(".team_slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: true,
    asNavFor: ".team_slider_2",
  });
  
  $(".team_slider_2").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: ".team_slider",
    arrows: false,
    dots: false,
    centerMode: true,
    focusOnSelect: true,
  });

  $(".vertical_cards_slider").slick({
    arrows: false,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });

  $('.section_slider').slick({
    centerMode: false,
    arrows:  false,
    centerPadding: '60px',
    dots: true,
    infinite: true,
    autoplay: false,
    autoplaySpeed: 1500,
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows: false,
          centerMode: false,
          dots: true,
          infinite: true,
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: false,
          dots: true,
          infinite: true,
          slidesToShow: 1,
        }
      }
    ]
  });

  question.click(function () {
    $(this).parent().siblings().removeClass("expanded");
    $(this).parent().siblings().find(".arrow-down").removeClass("expanded");
    $(this).parent().siblings().find(".answer").slideUp();
    $(this).toggleClass("expanded");
    $(this).parent().find(".arrow-down").toggleClass("expanded");
    $(this).parent(".faq").toggleClass("expanded");
    $(this).parent().find(".answer").slideToggle();
  });
});

function mobileMenuToggle() {
  mobileMenuIcon.toggleClass("is-open");
  mobileMenu.toggleClass("is-open");
}

function mobileMenuReset() {
  mobileMenuIcon.removeClass("is-open");
  mobileMenu.removeClass("is-open");
}

// TESTIMONIALS SLIDER CODE

//Get titles from the DOM
var titleMain  = $(".testimonials_slider");
var titleSubs  = titleMain.find("slick-active");

if (titleMain.length) {

  $(".testimonials_slider").slick({
    autoplay: false,
    arrows: false,
    dots: true,
    slidesToShow: 3,
    centerMode: true,
    centerPadding: "10px",
    draggable: true,
    infinite: true,
    pauseOnHover: true,
    swipe: true,
    touchMove: false,
    vertical: true,
    speed: 1000,
    autoplaySpeed: 2000,
    useTransform: true,
    cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
    adaptiveHeight: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          autoplay: false,
          arrows: false,
          dots: true,
          slidesToShow: 1,
          draggable: true,
          infinite: true,
          pauseOnHover: true,
          swipe: true,
          touchMove: true,
          vertical: true,
          speed: 1000,
          autoplaySpeed: 2000,
          useTransform: true,
          cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
          adaptiveHeight: true, 
        }
      }
    ]
  });

  // On init
  $(".testimonials_slider panel").each(function(index, el) {
    $(".testimonials_slider").slick('slickAdd', "<div>" + el.innerHTML + "</div>");
  });

  // Manually refresh positioning of slick
  titleMain.slick('slickPlay');
};
