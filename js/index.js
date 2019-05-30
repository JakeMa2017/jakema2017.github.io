$(document).ready(function(){

    (function () {
        $(".fullHeight").height($(window).height());

        // Make sure the size always fit to window by changing the size of window
        $(window).resize(function(){
            $(".fullHeight").height($(window).height());
        });
    }());

    $("#myNav").scrollspy({ offset: -230 });

    // -------------------------------------------------------------
    // Preloader
    // -------------------------------------------------------------

    $(window).ready(function() {
        $('#pre-status').fadeOut();
        $('#preloader').delay(350).fadeOut('slow');
    });

    // -------------------------------------------------------------
    // Parallax Section Divider
    // -------------------------------------------------------------
    var controller = new ScrollMagic.Controller();

    // parallax scene
    var parallaxTl = new TimelineMax();
    parallaxTl
        // .from('.content-wrapper', 0.4, {autoAlpha: 0, ease:Power0.easeNone}, 0.4)
        .from('.secDivider', 2, {y: '-50%', ease:Power0.easeNone}, 0)
        ;

    var slideParallaxScene = new ScrollMagic.Scene({
        triggerElement: '.secDivider-parallax',
        triggerHook: 1,
        duration: '100%'
    })
    .setTween(parallaxTl)
    .addTo(controller);

    // -------------------------------------------------------------
    // Progress Bar
    // -------------------------------------------------------------

    $('.skill-progress').on('inview', function(event, visible, visiblePartX, visiblePartY) {
        if (visible) {
            $.each($('div.progress-bar'),function(){
                $(this).css('width', $(this).attr('aria-valuenow')+'%');
            });
            $(this).unbind('inview');
        }
    });

    // -------------------------------------------------------------
    // More skill
    // -------------------------------------------------------------
    $('.more-skill').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
        if (visible) {
            $('.chart').easyPieChart({
                //your configuration goes here
                easing: 'easeOut',
                delay: 3000,
                barColor:'#68c3a3',
                trackColor:'rgba(255,255,255,0.2)',
                scaleColor: false,
                lineWidth: 8,
                size: 140,
                animate: 2000,
                onStep: function(from, to, percent) {
                    this.el.children[0].innerHTML = Math.round(percent);
                }

            });
            $(this).unbind('inview');
        }
    });

    // -------------------------------------------------------------
    // Animated scrolling / Scroll Up
    // -------------------------------------------------------------

    (function () {
        $('a[href*=#]').bind("click", function(e){
            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top
            }, 1000);
            e.preventDefault();
        });
    }());

    // -------------------------------------------------------------
    // Back To Top
    // -------------------------------------------------------------

    (function () {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.scroll-up').fadeIn();
            } else {
                $('.scroll-up').fadeOut();
            }
        });
    }());

    // -------------------------------------------------------------
    // WOW JS
    // -------------------------------------------------------------

    (function () {
        new WOW({
            mobile: true
        }).init();
    }());

    // (function () {
    //     $('#myNav').scrollspy({
    //         target: '.navbar-custom',
    //         offset: 70
    //     })
    // }());

});

// Time at the footnote

//document.getElementById('dateee').innerHTML = new Date();

function startTime() {
    var today = new Date();
    var y = today.getFullYear();
    var mon = today.getMonth();
    var date = today.getDate();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    mon += 1;
    mon = checkTime(mon);
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('dateee').innerHTML =
    mon + "/" + date + "/" + y + " " + h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}

function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

function initMap() {
    // The location of Uluru
    var home = {lat: 44.971808, lng: -93.224675};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('mapCanvas'), {zoom: 11, center: home});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: home, map: map});
  }

