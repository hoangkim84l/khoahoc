(function(){

  "use strict";

  // Variables
  // =========================================================================================
  var $html = $('html'),
      $document = $(document),
      $window = $(window),
      i = 0;


  // Scripts initialize
  // ===================
  document.write('<script async src="https://www.youtube.com/iframe_api"></script>');
  document.write('<script async defer src="//maps.googleapis.com/maps/api/js?key=AIzaSyAYjhWq7DvCwCiRKotPu9_IXQxupSQbhuo" type="text/javascript"></script>');

  $(window).on('load', function () {

    // =================================================================================
    // Preloader
    // =================================================================================
    var $preloader = $('#page-preloader');
    $preloader.delay(500).fadeOut('slow');

    // =================================================================================
    // Youtube Player
    // =================================================================================
    var yt_player = $(".player");
    if(yt_player.length){
      yt_player.mb_YTPlayer({
        mute: true,
        containment: '.video-wrapper',
        showControls:false, 
        autoPlay:true, 
        loop:true, 
        startAt:0, 
        quality:'default'
      });
      $(".btn-stop-video").on("click", function(){
        yt_player.YTPTogglePlay();
        $(this).toggleClass("paused");
      });
      $(".btn-mute-video").on("click", function(){
        yt_player.YTPToggleVolume();
        $(this).toggleClass("paused");
      });
    }
    
  });

  $document.ready(function () {

    // =================================================================================
    // Image Slider
    // =================================================================================
    var imgSlider = $('#slides');
    if(imgSlider.length){
      imgSlider.superslides({
        animation: 'fade',
        play: 10000
      });
    }

    // =================================================================================
    // Contact Form
    // =================================================================================
    var contactForm = $(".contact-form");
    if(contactForm.length){
      var contactResault = $("body").append("<span class='form-resault'></span>").find(".form-resault");
      contactForm.each(function(){
        var this_form = $(this);
        var contactFormInput = this_form.find(".form-control.required");

        contactFormInput.on("blur", function(){
          if(!$.trim($(this).val())){
            $(this).parent().addClass("input-error");
          }
        });

        contactFormInput.on("focus", function(){
          $(this).parent().removeClass("input-error");
        });

        this_form.on("submit", function() { 
          var form_data1 = $(this).serialize();
          if(!contactFormInput.parent().hasClass("input-error") && contactFormInput.val()){
            $.ajax({
              type: "POST", 
              url: "php/contact.php", 
              data: form_data1,
              success: function() {
                contactResault.addClass("correct");
                contactResault.html("Your data has been sent!");
                setTimeout(function(){
                  contactResault.removeClass("incorrect").removeClass("correct");
                }, 4500);
              }
            });
          } else{ 
            if(contactFormInput.val() === ""){
              var contactFormInputEmpty = contactFormInput.filter(function(){ 
                return $(this).val() === ""; 
              });
              contactFormInputEmpty.parent().addClass("input-error");
            }
            contactResault.addClass("incorrect");
            contactResault.html("You must fill in all required fields");
            setTimeout(function(){
              contactResault.removeClass("incorrect").removeClass("correct");
            }, 4500);
          }
          return false;
        }); 
      });
    }

    // ==========
    // Magnific Popup
    // ==========
    var lightbox = $('[data-lightbox]').not('[data-lightbox="gallery"] [data-lightbox]');
    var lightboxGallery = $('[data-lightbox^="gallery"]');
    if (lightbox.length) {
      lightbox.each(function(){
        var item = $(this);
        item.magnificPopup({
          type: item.data("lightbox")
        });
      });
    }
    if (lightboxGallery.length) {
      lightboxGallery.each(function(){
        $(this).magnificPopup({
          delegate: '[data-lightbox]',
          type: "image",
          mainClass: 'mfp-with-zoom mfp-img-mobile',
          gallery: {
            enabled: true
          },
          zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function(element) {
              return element.find('img');
            }
          }
        });
      });
    }
    $('.popup-video, .popup-map').magnificPopup({
      disableOn: 700,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false
    });

    /* Magnific Popup modal window */
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',
      fixedContentPos: true,
      fixedBgPos: true,
      overflowY: 'hidden',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    // =================================================================================
    // Google Map
    // =================================================================================
    $(".popup-with-zoom-anim").on("click", function(e){
      var map = $(".map");
      if(map.length){
        var mapWrapper = $('#google-map'),
            latlng = new google.maps.LatLng(mapWrapper.data("x-coord"), mapWrapper.data("y-coord")),
            myOptions = {
              scrollwheel: false,
              zoom: 12,
              center: latlng,
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              disableDefaultUI: false,
            },
            map = new google.maps.Map(mapWrapper[0], myOptions),
            marker = new google.maps.Marker({
              position: {lat: mapWrapper.data("x-coord"), lng: mapWrapper.data("y-coord")},
              draggable: false,
              animation: false,
              map: map,
              icon: 'img/marker.png'
            }),
            infowindow = new google.maps.InfoWindow({
              content: mapWrapper.data("text")
            });

        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
      }
    });

    // =================================================================================
    // Swiper
    // =================================================================================
    var slider_main = $('.slider-main');
    if (slider_main.length) {
      var slider_main = new Swiper('.slider-main', {
        nextButton: '.main-arrow-next',
        prevButton: '.main-arrow-prev',
        parallax: true,
        speed: 600,
        autoHeight: true,
        calculateHeight:true,
        keyboardControl: true,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        simulateTouch: false,
      });
    }

    var swiperInner = $('.swiper-container-inner');
    if (swiperInner.length) {
      var swiperInner = new Swiper('.swiper-container-inner', {
        paginationClickable: true,
        nextButton: '.swiper-button-next-inner',
        prevButton: '.swiper-button-prev-inner',
        parallax: true,
        loop: true,
        speed: 600,
        simulateTouch: false,
      });
    }

    $(".btn-slide").on("click", function(){
      var target_slide = $($(this).attr("data-to"));
      var target_slide_index = target_slide.index();
      slider_main.slideTo(target_slide_index, 1000, false);
    });

    // =================================================================================
    // ISOTOPE
    // =================================================================================
    var isotope = $('.iso');
    if (isotope.length) {
      isotope.each(function() {
        var $grid = $(this).find('.grid').isotope({
          itemSelector: 'article'
        });
        // filter buttons
        $(this).find('.filters-button-group button').on( 'click', function() {
          var filterValue = $(this).attr('data-filter');
          $grid.isotope({ filter: filterValue });
          $(".swiper-pagination-bullet-active").trigger("click");
        });
        $(this).find('.button-group').each( function( i, buttonGroup ) {
          var $buttonGroup = $(buttonGroup);
          $buttonGroup.on( 'click', 'button', function() {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $(this).addClass('is-checked');
          });
        });
      });
      $window.on("load", function() {
        $('.iso .button-group .button.is-checked').trigger("click");
      });
    }

    // =================================================================================
    // Color Switcher
    // =================================================================================
    var switcher = $("#style-switcher");
    var switcher_toggle = switcher.find(".toggle-switcher");
    if (switcher.length){
      switcher_toggle.on("click", function(e){
        e.preventDefault();
        switcher.toggleClass("active");
      });
      var color_stylesheet = $("#colors");
      var color_link = $("#style-switcher .colors > li > a");
      color_link.each(function(){
        var it = $(this);
        it.on("click", function(){
          var color_src = it.attr("data-color-src");
          color_stylesheet.attr("href", color_src);
          return false;
        });
      });
    };

    // =================================================================================
    // Backgound gradient
    // =================================================================================
    var bg_grad = $('.bg-gradient');
    var colors = new Array(
      [62,35,255],
      [60,255,60],
      [255,35,98],
      [45,175,230],
      [255,0,255],
      [255,128,0]);
    var step = 0;
    var colorIndices = [0,1,2,3];
    //transition speed
    var gradientSpeed = 0.002;

    function updateGradient(){
      var c0_0 = colors[colorIndices[0]];
      var c0_1 = colors[colorIndices[1]];
      var c1_0 = colors[colorIndices[2]];
      var c1_1 = colors[colorIndices[3]];

      var istep = 1 - step;
      var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
      var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
      var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
      var color1 = "rgb("+r1+","+g1+","+b1+")";

      var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
      var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
      var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
      var color2 = "rgb("+r2+","+g2+","+b2+")";

      bg_grad.css({ background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"});
      bg_grad.css({ background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
      bg_grad.css({ background: "-ms-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
      
      step += gradientSpeed;
      if (step >= 1){
        step %= 1;
        colorIndices[0] = colorIndices[1];
        colorIndices[2] = colorIndices[3];

        colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
        colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
      }
    }
    if(bg_grad.length){
      setInterval(updateGradient,10);
    }

    // =======
    // Particles
    // =======
    var particles = $('#particles-js');
    if (particles.length) {
      particlesJS('particles-js',
        {
          "particles": {
            "number": {
              "value": 100,
              "density": {
                "enable": true,
                "value_area": 800
              }
            },
            "color": {
              "value": "#fff"
            },
            "shape": {
              "type": "circle",
            },
            "opacity": {
              "value": 0.5,
              "random": false,
              "anim": {
                "enable": false,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
              }
            },
            "size": {
              "value": 2,
              "random": true,
              "anim": {
                "enable": false,
                "speed": 40,
                "size_min": 0.1,
                "sync": false
              }
            },
            "line_linked": {
              "enable": true,
              "distance": 150,
              "color": "#fff",
              "opacity": 0.4,
              "width": 1
            },
            "move": {
              "enable": true,
              "speed": 3,
              "direction": "none",
              "random": false,
              "straight": false,
              "out_mode": "out",
            }
          },
          "interactivity": {
            "detect_on": "canvas",
            "events": {
              "onhover": {
                "enable": true,
                "mode": "grab"
              },
              "onclick": {
                "enable": true,
                "mode": "push"
              },
              "resize": true
            },
            "modes": {
              "grab": {
                "distance": 200,
                "line_linked": {
                  "opacity": 1
                }
              },
              "repulse": {
                "distance": 100
              },
              "push": {
                "particles_nb": 4
              },
            }
          },
          "retina_detect": true,
        }
      )
    };

  });/*document ready end*/

})();/*main function end*/