 $(function() {

  $('.btn-green').hover(function() {
    $(this).toggleClass("btn-green-tr")
  });
  $('.btn-yellow').hover(function() {
    $(this).toggleClass("btn-yellow-tr")
  });
  $('.btn-white').hover(function() {
    $(this).toggleClass("btn-white-tr")
  });
  // $('.btn-green-tr').hover(function() {
  //   $(this).toggleClass("btn-green")
  // });
  // $('.btn-yellow-tr').hover(function() {
  //   $(this).toggleClass("btn-yellow")
  // });
  // $('.btn-white-tr').hover(function() {
  //   $(this).toggleClass("btn-white")
  // });



// scroll-menu
  var cbpAnimatedHeader = (function() {

  var docElem = document.documentElement,
    header = document.querySelector( '#totop' ),
    didScroll = false,
    changeHeaderOn = 50;

  function init() {
    window.addEventListener( 'scroll', function( event ) {
      if( !didScroll ) {
        didScroll = true;
        setTimeout( scrollPage, 0 );
      }
    }, false );
  }

  function scrollPage() {
    var sy = scrollY(),
        dw = $(document).width();
    if ( sy >= changeHeaderOn && dw >= 768) {
      $('#main-menu').addClass( 'navbar-fixed-top' );
      $('#navbar-collapse').css( {'visibility': 'visible'} );
    }
    else {
      $('#main-menu').removeClass( 'navbar-fixed-top' );
    }

    didScroll = false;
  }
  function scrollY() {
    return window.pageYOffset || docElem.scrollTop;
  }
  init();
  })();



});