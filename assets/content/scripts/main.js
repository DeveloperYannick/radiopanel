$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip({html: true});

  $('.badge-slider').owlCarousel({
    margin: 25,
    dots: false,
    navElement: 'div',
    items: 9,
    navText: ['<div class="sm-sld-left"><i class="fas fa-chevron-left"></i></div>', '<div class="sm-sld-right"><i class="fas fa-chevron-right"></i></div>'],
    responsive: {
      0: {
        items: 3
      },
      600: {
        items: 7
      },
      960: {
        items: 6
      },
      1200: {
        items: 8
      },
      1400: {
        items: 9
      }
    }
  });

  $('.small-slider').slick({
    slidesToShow: 9,
    slidesToScroll: 1,
    variableWidth: true,
    infinite: false,
    swipeToSlide: true,
    touchThreshold: 50000,
    prevArrow: '<div class="sm-sld-left"><i class="fas fa-chevron-left"></i></div>',
    nextArrow: '<div class="sm-sld-right"><i class="fas fa-chevron-right"></i></div>',
    responsive: [
      {
        breakpoint: 320,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 375,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 425,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 8
        }
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 7
        }
      },
      {
        breakpoint: 1440,
        settings: {
          slidesToShow: 9
        }
      }
    ]
  });

  $('.image-slider').slick({
    slidesToShow: 9,
    slidesToScroll: 1,
    infinite: false,
    swipeToSlide: true,
    prevArrow: '<div class="sm-sld-left"><i class="fas fa-chevron-left"></i></div>',
    nextArrow: '<div class="sm-sld-right"><i class="fas fa-chevron-right"></i></div>',
    responsive: [
      {
        breakpoint: 320,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 375,
        settings: {
          slidesToShow: 4
        }
      },
      {
        breakpoint: 425,
        settings: {
          slidesToShow: 4,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 9
        }
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 8
        }
      },
      {
        breakpoint: 1440,
        settings: {
          slidesToShow: 10
        }
      }
    ]
  });

  var habmusicPlayer = document.querySelector('#habmusic-player');
  var footer = document.querySelector('footer');

  function checkOffset() {
    function getRectTop(el) {
      var rect = el.getBoundingClientRect();
      return rect.top;
    }

    if ((getRectTop(habmusicPlayer) + document.body.scrollTop) + habmusicPlayer.offsetHeight >=
        (getRectTop(footer) + document.body.scrollTop - 10))
      habmusicPlayer.style.position = 'relative';
    if (document.body.scrollTop + window.innerHeight < (getRectTop(footer) + document.body.scrollTop))
      habmusicPlayer.style.position = 'fixed';
  }

  document.addEventListener("scroll", function () {
    checkOffset();
  });

  /*
  // Cookie Consent
  var footerCookie = document.getElementById("cookies");
  var footerCookieAccept = document.getElementById("cookie-consent");

  if (document.cookie.indexOf("habmusicCookieBanner=") == -1) {
    $("#cookies").delay(2000).fadeIn();
  }

  footerCookieAccept.addEventListener("click", (e) => {
    var cookieDate = new Date();
    cookieDate.setTime(new Date().getTime() + 31104000000);

    document.cookie = "habmusicCookieBanner = 1, path=/, secure, expires=" + cookieDate.toUTCString();

    $("#cookies").stop().fadeOut();
  });
  */
    const newBadgesSlider = new Swiper("#newest-badges", {
        slidesPerView: 4,
        spaceBetween: 20,
        navigation: {
            nextEl: '#slider-next-newbadge',
            prevEl: '#slider-prev-newbadge',
        },
		breakpoints: {
			320: {
				slidesPerView: 3,
                spaceBetween: 20,
			},
            375: {
				slidesPerView: 5,
                spaceBetween: 10,
            },
            425: {
				slidesPerView: 6,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 8,
            },
			992: {
				slidesPerView: 8,
				spaceBetween: 25,
			}
        }
    });
	
	const labeledBadgesSlider = new Swiper("#labeled-badges", {
        slidesPerView: 4,
/*		slidesPerColumn: 2,
		slidesPerColumnFill: 'row',*/
        spaceBetween: 20,
        navigation: {
            nextEl: '#slider-next-labeledBadges',
            prevEl: '#slider-prev-labeledBadges',
        },
		breakpoints: {
			320: {
				slidesPerView: 3,
                spaceBetween: 20,
				/*slidesPerColumn: 2,*/
			},
            375: {
				slidesPerView: 5,
                spaceBetween: 10,
				/*slidesPerColumn: 2,*/
            },
            425: {
				slidesPerView: 6,
                spaceBetween: 20,
				/*slidesPerColumn: 2,*/
            },
            768: {
                slidesPerView: 8,
				/*slidesPerColumn: 2,*/
            },
			992: {
				slidesPerView: 8,
				spaceBetween: 25,
				/*slidesPerColumn: 2,*/
			}
        }
    });

  /*$("#emojionearea1").emojioneArea({

    pickerPosition: "right",
    tonesStyle: "bullet",
    events: {
      keyup: function (editor, event) {
        console.log(editor.html());
        console.log(this.getText());
      }
    }
  });*/

  $('input[type="file"]').change(function (e) {
    var fileName = e.target.files[0].name;
    $('.custom-file-label').html(fileName);
  });

  ;(function ($) {

    $('.swipebox').swipebox({
      useCSS: true,
      useSVG: true,
      initialIndexOnArray: 0,
      hideCloseButtonOnMobile: false,
      removeBarsOnMobile: false,
      hideBarsDelay: 3000,
      videoMaxWidth: 1140,
      beforeOpen: function () {
      },
      afterOpen: null,
      afterClose: function () {
      },
      loopAtEnd: false
    });

  })(jQuery);
});

const togglePassword = document.querySelector('.toggle-password');
if(togglePassword != null) {
	togglePassword.addEventListener('click', (e) => {
	  const passwordField = document.getElementById(togglePassword.dataset.target);
	  const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
	  passwordField.setAttribute('type', type)

	  if (type === 'password') {
		togglePassword.classList.remove('fa-eye-slash');
		togglePassword.classList.add('fa-eye');
	  } else {
		togglePassword.classList.remove('fa-eye');
		togglePassword.classList.add('fa-eye-slash');
	  }
	})	
}