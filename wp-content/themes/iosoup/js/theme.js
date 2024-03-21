// jQuery(document).ready(function($) {

    //animation
    // new WOW().init();

    /*  Header Sticky
    ============================================= */
    // window.onscroll = function() {myFunction()};
    // var header = document.getElementById("topMenu");
    // var sticky = header.offsetTop;
    //
    // function myFunction() {
    //     if (window.pageYOffset > sticky) {
    //         header.classList.add("sticky");
    //     } else {
    //         header.classList.remove("sticky");
    //     }
    // }

    /*  Window scroll function
    ============================================= */
//     let a = 0;
//     $(window).scroll(function() {
//         var scroll = $(window).scrollTop();
//         let oTop = $('#counter').offset().top - window.innerHeight;
//        //Md.Asaduzzaman Muhid
//         if (a == 0 && scroll > oTop) {
//             $('.counter').each(function() {
//                 let $this = $(this);
//                 jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
//                     duration: 2000,
//                     easing: 'swing',
//                     step: function () {
//                         $this.text(Math.ceil(this.Counter));
//                     }
//                 });
//                 a=1;
//             });
//         }
//         if (scroll > 700) {
//             $('.totop').css('bottom', '55px');
//         } else {
//             $('.totop').css('bottom', '-50px');
//         }
//    });
//
//    $('.totop').click(function(){
//        $('html,body').animate({
//            scrollTop: 0
//        }, 1500);
//    })
// });
/*  Review slider function
    ============================================= */
/*=============== SWIPER JS ===============*/
// var swiper = new Swiper('.swiper-container', {
//     slidesPerView: 1,
//     spaceBetween: 10,
//     // init: false,
//     pagination: {
//       el: '.swiper-pagination',
//       clickable: true,
//     },
//     autoplay: {
//         delay: 3000,
//     },
//     breakpoints: {
//       640: {
//         slidesPerView: 2,
//         spaceBetween: 20,
//       },
//       768: {
//         slidesPerView: 2,
//         spaceBetween: 40,
//       },
//       1024: {
//         slidesPerView: 3,
//         spaceBetween: 50,
//       },
//     }
//   });
  (function ($) {
      "use strict";

      // Spinner
      var spinner = function () {
          setTimeout(function () {
              if ($('#spinner').length > 0) {
                  $('#spinner').removeClass('show');
              }
          }, 1);
      };
      spinner();


      // Initiate the wowjs
      new WOW().init();


      // Sticky Navbar
      $(window).scroll(function () {
          if ($(this).scrollTop() > 300) {
              $('.sticky-top').addClass('shadow-sm').css('top', '0px');
          } else {
              $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
          }
      });


      // Back to top button
      $(window).scroll(function () {
          if ($(this).scrollTop() > 300) {
              $('.back-to-top').fadeIn('slow');
          } else {
              $('.back-to-top').fadeOut('slow');
          }
      });
      $('.back-to-top').click(function () {
          $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
          return false;
      });


      // Facts counter
      $('[data-toggle="counter-up"]').counterUp({
          delay: 10,
          time: 2000
      });


      // Header carousel
      $(".header-carousel").owlCarousel({
          autoplay: true,
          smartSpeed: 1500,
          items: 1,
          dots: true,
          loop: true,
          nav : true,
          navText : [
              '<i class="bi bi-chevron-left"></i>',
              '<i class="bi bi-chevron-right"></i>'
          ]
      });


      // Testimonials carousel
      $(".testimonial-carousel").owlCarousel({
          autoplay: true,
          smartSpeed: 1000,
          center: true,
          dots: false,
          loop: true,
          nav : true,
          navText : [
              '<i class="bi bi-arrow-left"></i>',
              '<i class="bi bi-arrow-right"></i>'
          ],
          responsive: {
              0:{
                  items:1
              },
              768:{
                  items:2
              }
          }
      });


      // Portfolio isotope and filter
      var portfolioIsotope = $('.portfolio-container').isotope({
          itemSelector: '.portfolio-item',
          layoutMode: 'fitRows'
      });
      $('#portfolio-flters li').on('click', function () {
          $("#portfolio-flters li").removeClass('active');
          $(this).addClass('active');

          portfolioIsotope.isotope({filter: $(this).data('filter')});
      });

  })(jQuery);
// let map = L.map('map');
// map.setView([50.83322306601526, 19.06653821433392], 15);
// let routes = Array();
// let osmUrl = 'https://{s}.tiles.mapbox.com/v3/examples.map-20v6611k/{z}/{x}/{y}.png';
// let osm = new L.TileLayer(osmUrl, {
//     minZoom: 5,
//     maxZoom: 18,
//     opacity: 0.7,
// });
//
// let shopIcon = L.icon({
//     iconUrl: window.location.origin+'/wordpress/wp-basic-theme/wp-content/themes/ipsoup/img/png/location.png',
//     iconSize:     [116, 150], // size of the icon
//     iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
//     shadowAnchor: [4, 62],  // the same for the shadow
//     popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
// });
// L.marker([50.83322306601526, 19.06653821433392], {icon: shopIcon}).addTo(map);
// let OpenStreetMap_DE = L.tileLayer('https://{s}.tile.openstreetmap.de/tiles/osmde/{z}/{x}/{y}.png', {
// 	maxZoom: 18,
// 	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
// });
//
// let TopPlusOpen_Grey = L.tileLayer('http://sgx.geodatenzentrum.de/wmts_topplus_open/tile/1.0.0/web_grau/default/WEBMERCATOR/{z}/{y}/{x}.png', {
// 	maxZoom: 20,
// 	attribution: 'Map data: &copy; <a href="http://www.govdata.de/dl-de/by-2-0">dl-de/by-2-0</a>'
// });
// var CartoDB_Voyager = L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
// 	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
// 	subdomains: 'abcd',
// 	maxZoom: 20
// });
// // map.addLayer(OpenStreetMap_DE);
// map.addLayer(CartoDB_Voyager);
//
// // points
// map.addLayer(routes);
