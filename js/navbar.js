  $(window).scroll(function () {
      if (($(document).height() - $(window).scrollTop()) <= 480){
          $("navbar-menu").css({
              position: 'absolute',
              top: 'auto',
              bottom: '350px'
          });
      } else if ($(window).scrollTop() >= 30) {
          $("navbar-menu").css({
              position: 'fixed',
              top: 100px,
	      margin-top: -300px,
	      left: 10px,
              bottom: 'auto'
          });
      }else{
          $("navbar-menu").css({
              position: 'absolute',
              top: '30px',
              bottom: 'auto'
          });
      }
  });