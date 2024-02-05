jQuery(document).ready(function($) {
    
    /*  Header Sticky
    ============================================= */
    window.onscroll = function() {myFunction()};
    var header = document.getElementById("topMenu");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }

    /*  Window scroll function
    ============================================= */
    let a = 0;
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        let oTop = $('#counter').offset().top - window.innerHeight;
       //Md.Asaduzzaman Muhid
        if (a == 0 && scroll > oTop) {
            $('.counter').each(function() {
                let $this = $(this);
                jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.ceil(this.Counter));
                    }
                });
                a=1;
            });
        }
        if (scroll > 700) {
            $('.totop').css('bottom', '55px');
        } else {
            $('.totop').css('bottom', '-50px');
        } 
   });

   $('.totop').click(function(){
       $('html,body').animate({
           scrollTop: 0
       }, 1500);
   })
   

});







let map = L.map('map');
map.setView([50.83322306601526, 19.06653821433392], 15);
// let routes = Array();
// let osmUrl = 'https://{s}.tiles.mapbox.com/v3/examples.map-20v6611k/{z}/{x}/{y}.png';
// let osm = new L.TileLayer(osmUrl, {
//     minZoom: 5,
//     maxZoom: 18,
//     opacity: 0.7,
// });

// let shopIcon = L.icon({
//     iconUrl: './wp-content/themes/ipsoup/img/icons/map-inside.png',
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

let TopPlusOpen_Grey = L.tileLayer('http://sgx.geodatenzentrum.de/wmts_topplus_open/tile/1.0.0/web_grau/default/WEBMERCATOR/{z}/{y}/{x}.png', {
	maxZoom: 20,
	attribution: 'Map data: &copy; <a href="http://www.govdata.de/dl-de/by-2-0">dl-de/by-2-0</a>'
});

// map.addLayer(OpenStreetMap_DE);
map.addLayer(TopPlusOpen_Grey);

// points
// map.addLayer(routes);
