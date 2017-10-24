// menu dropdown link clickable
jQuery( document ).ready( function ( $ ) {
    $( '.navbar .dropdown > a, .dropdown-menu > li > a' ).click( function () {
        location.href = this.href;
    } );
} );

// scroll to top button
jQuery( document ).ready( function ( $ ) {
    $( "#back-top" ).hide();
    $( function () {
        $( window ).scroll( function () {
            if ( $( this ).scrollTop() > 100 ) {
                $( '#back-top' ).fadeIn();
            } else {
                $( '#back-top' ).fadeOut();
            }
        } );

        // scroll body to 0px on click
        $( '#back-top a' ).click( function () {
            $( 'body,html' ).animate( {
                scrollTop: 0
            }, 800 );
            return false;
        } );
    } );
} );

// Smart sidebar
jQuery( document ).ready( function ( $ ) {
    if ( $( "aside" ).hasClass( "td-sticky" ) ) {
        $( 'aside.td-sticky' ).hcSticky( {
            top: 80,
            offResolutions: -975,
        } );
    }
} );
// Ad banner in single post
jQuery( document ).ready( function ( $ ) {
    if ( $( ".entry-content .sticky-ad" ).hasClass( "td-sticky" ) ) {
        $( '.entry-content .td-sticky' ).hcSticky( {
            top: 20,
            offResolutions: -975,
        } );
    }
} );
// Content slider in single post
jQuery( document ).ready( function ( $ ) {
    var myDiv = document.getElementById( 'custom-box' );
    if ( myDiv ) {
        $( window ).scroll( function () {
            var distanceTop = $( '#custom-box' ).offset().top - $( window ).height();

            if ( $( window ).scrollTop() > distanceTop )
                $( '#slidebox' ).animate( { 'right': '0px' }, 300 );
            else
                $( '#slidebox' ).stop( true ).animate( { 'right': '-430px' }, 100 );
        } );

        $( '#slidebox .close-me' ).bind( 'click', function () {
            $( this ).parent().remove();
        } );
    }
    ;
} );
//smoothscroll
jQuery( document ).ready( function ( $ ) {
    var sections = $( 'section' )
        , nav = $( '#main-navigation-inner .nav' )
        , nav_height = nav.outerHeight();

    $( window ).on( 'scroll', function () {
        var cur_pos = $( this ).scrollTop();

        sections.each( function () {
            var top = $( this ).offset().top - nav_height,
                bottom = top + $( this ).outerHeight();

            if ( cur_pos >= top && cur_pos <= bottom ) {
                nav.find( 'a' ).removeClass( 'active' );
                sections.removeClass( 'active' );

                $( this ).addClass( 'active' );
                nav.find( 'a[href="#' + $( this ).attr( 'id' ) + '"]' ).addClass( 'active' );
            }
        } );
    } );
    nav.find( 'a' ).on( 'click', function () {
        var $el = $( this )
            , id = $el.attr( 'href' );

        $( 'html, body' ).animate( {
            scrollTop: $( id ).offset().top - nav_height + 50
        }, 500 );

        return false;
    } );
} );
// FlexSlider
jQuery( document ).ready( function ( $ ) {
    $( window ).load( function () {
        var animation = $( '.homepage-slider' ).data( 'animation' );
        var interval = $( '.homepage-slider' ).data( 'interval' );
        $( '.homepage-slider' ).flexslider( {
            animation: animation,
            slideshow: true,
            slideshowSpeed: interval,
            touch: true,
            keyboard: true,
            pauseOnHover: true,
            prevText: '',
            nextText: '',
        } );
    } );
} );
// FlexSlider Carousel
jQuery( document ).ready( function ( $ ) {
    var $window = $( window ),
        flexslider;

    // tiny helper function to add breakpoints
    var columns = $( '#carousel-home' ).data( 'columns' );
    function getGridSize() {
        return ( window.innerWidth < 520 ) ? 1 :
            ( window.innerWidth < 768 ) ? 2 :
            ( window.innerWidth < 1028 ) ? 3 : columns;
    }
    $( window ).load( function () {
        var interval = $( '#carousel-home' ).data( 'interval' );
        var start = $( '#carousel-home' ).data( 'start' );
        var loop = $( '#carousel-home' ).data( 'loop' );
        $( '#carousel-home' ).flexslider( {
            animation: "slide",
            controlNav: false,
            slideshowSpeed: interval,
            animationLoop: loop,
            slideshow: start,
            itemWidth: 330,
            itemMargin: 30,
            prevText: '',
            nextText: '',
            minItems: getGridSize(),
            maxItems: getGridSize(),
            start: function ( slider ) {
                flexslider = slider;
                slider.removeClass( 'carousel-loading' );
            }
        } );
        $window.resize( function () {
            var gridSize = getGridSize();
            if ( flexslider ) {
                flexslider.vars.minItems = gridSize;
                flexslider.vars.maxItems = gridSize;
            }
        } );
    } );
    // set the timeout for the slider resize
    $( function () {
        var resizeEnd;
        $( window ).on( 'resize', function () {
            clearTimeout( resizeEnd );
            resizeEnd = setTimeout( function () {
                flexsliderResize();
            }, 100 );
        } );
    } );
    function flexsliderResize() {
        if ( $( '#carousel-home' ).length > 0 ) {
            $( '#carousel-home' ).data( 'flexslider' ).resize();
        }
    }
} );

// Brand logos Carousel
jQuery( document ).ready( function ( $ ) {
    var $window = $( window ),
        flexslider;

    // tiny helper function to add breakpoints
    var columns = $( '#logo-home' ).data( 'columns' );
    function getGridSize() {
        return ( window.innerWidth < 320 ) ? 1 :
            ( window.innerWidth < 668 ) ? 2 :
            ( window.innerWidth < 1028 ) ? 3 : columns;
    }
    $( window ).load( function () {
        var interval = $( '#logo-home' ).data( 'interval' );
        var start = $( '#logo-home' ).data( 'start' );
        var loop = $( '#logo-home' ).data( 'loop' );
        var loop = $( '#logo-home' ).data( 'columns' );
        $( '#logo-home' ).flexslider( {
            animation: "slide",
            controlNav: false,
            slideshowSpeed: interval,
            animationLoop: loop,
            slideshow: start,
            itemWidth: 128,
            itemMargin: 50,
            prevText: '',
            nextText: '',
            minItems: getGridSize(),
            maxItems: getGridSize(),
            start: function ( slider ) {
                flexslider = slider;
                slider.removeClass( 'carousel-loading' );
            }
        } );
        $window.resize( function () {
            var gridSize = getGridSize();
            if ( flexslider ) {
                flexslider.vars.minItems = gridSize;
                flexslider.vars.maxItems = gridSize;
            }
        } );
    } );
    // set the timeout for the slider resize
    $( function () {
        var resizeEnd;
        $( window ).on( 'resize', function () {
            clearTimeout( resizeEnd );
            resizeEnd = setTimeout( function () {
                flexsliderResize();
            }, 100 );
        } );
    } );
    function flexsliderResize() {
        if ( $( '#logo-home' ).length > 0 ) {
            $( '#logo-home' ).data( 'flexslider' ).resize();
        }
    }
} );

//  Border effects
jQuery( document ).ready( function ( $ ) {
    $( window ).on( 'resize', function (  ) {
        $( ".border-top" ).css( { "border-left-width": window.innerWidth } );
        $( ".border-bottom" ).css( { "border-right-width": window.innerWidth } );
    } ).trigger( 'resize' );
} );

// Intro parallax effect
jQuery( document ).ready( function ( $ ) {
    var ua = navigator.userAgent,
        isMobileWebkit = /WebKit/.test( ua ) && /Mobile/.test( ua );
    if ( isMobileWebkit && $( 'body' ).hasClass( 'parallax-mobile-off' ) ) {
        $( '.img-holder' ).imageScroll( {
            coverRatio: 1,
            parallax: false,
        } );
    } else {
        $( '.img-holder' ).imageScroll( {
            coverRatio: 1,
            speed: 0.4,
            extraHeight: 120,
        } );
    }
    var counter = 15;
    $( '.imageHolder' ).each( function ( ) {
        $( this ).css( 'z-index', counter );
        counter--;
    } );
} );

// Smooth scroll effect
jQuery( document ).ready( function ( $ ) {
    if ( $( 'body' ).hasClass( 'smooth-scroll-on' ) ) {
        if ( window.addEventListener )
            window.addEventListener( 'DOMMouseScroll', wheel, false );
        window.onmousewheel = document.onmousewheel = wheel;

        function wheel( event ) {
            var delta = 0;
            if ( event.wheelDelta )
                delta = event.wheelDelta / 80;
            else if ( event.detail )
                delta = -event.detail / 3;

            handle( delta );
            if ( event.preventDefault )
                event.preventDefault();
            event.returnValue = false;
        }

        var goUp = true;
        var end = null;
        var interval = null;

        function handle( delta ) {
            var animationInterval = 7; //lower is faster
            var scrollSpeed = 7; //lower is faster

            if ( end == null ) {
                end = $( window ).scrollTop();
            }
            end -= 20 * delta;
            goUp = delta > 0;

            if ( interval == null ) {
                interval = setInterval( function () {
                    var scrollTop = $( window ).scrollTop();
                    var step = Math.round( ( end - scrollTop ) / scrollSpeed );
                    if ( scrollTop <= 0 ||
                        scrollTop >= $( window ).prop( "scrollHeight" ) - $( window ).height() ||
                        goUp && step > -1 ||
                        !goUp && step < 1 ) {
                        clearInterval( interval );
                        interval = null;
                        end = null;
                    }
                    $( window ).scrollTop( scrollTop + step );
                }, animationInterval );
            }
        }
    }
} );

// Portfolio isotope
jQuery( document ).ready( function ( $ ) {

    var $container = $( '#portfolio' );
    if ( $container.length ) {
        // init Isotope
        var $grid = $( '#portfolio' ).imagesLoaded( function () {
            $grid.isotope();
        } );
        // filter items when filter link is clicked
        $( '#filter a' ).click( function () {

            var selector = $( this ).attr( 'data-filter' );
            $container.isotope( { filter: selector } );
            return false;

        } );
    }
} );

// Tooltip
jQuery( document ).ready( function ( $ ) {
    $( '[data-toggle="tooltip"]' ).tooltip();
} );

// Sections animations
jQuery( document ).ready( function ( $ ) {
    $( '.homepage-section' ).each( function ( ind ) {
        var animation = jQuery( this ).attr( 'data-animation' );
        var id = jQuery( this ).attr( 'data-id' );
        jQuery( '#' + id + ' .container' ).addClass( "bt_hidden" ).viewportChecker( {
            classToAdd: animation,
            offset: 10,
            repeat: false,
            callbackFunction: function ( elem, action ) {},
            scrollHorizontal: false
        } );
    } );
} );

// Youtube Player
jQuery( window ).ready( function ( $ ) {
    $( '.homepage-section.video-bg' ).each( function ( ) {
        if ( $( this ).attr( 'data-video' ) ) {
            var id = $( this ).attr( 'data-id' );
            var videoID = $( this ).attr( 'data-video' );
            var sections = $( '#' + id + '.video-bg' );
            if ( sections.length ) {
                $( '#' + id + ' .prlx' ).YTPlayer( {
                    fitToBackground: true,
                    videoId: videoID,
                    pauseOnScroll: false,
                } );
            }
        }
    } );
} );
