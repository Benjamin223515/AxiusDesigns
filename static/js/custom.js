(function($){

   "use strict";

  var navbarCollapse = function() {
    if ($("#main-nav").offset().top > 100) {
      $("#main-nav").addClass("navbar-scroll");
    } else {
      $("#main-nav").removeClass("navbar-scroll");
    }
  };
  navbarCollapse();
  $(window).scroll(navbarCollapse);


})(jQuery);

$(window).on("load",function (){

       $('a.page-scroll').on('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 20
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});


    $('.gallery').isotope({
      itemSelector: '.items'
    });

    var $gallery = $('.gallery').isotope({
    });

    $('.filtering').on( 'click', 'span', function() {

        var filterValue = $(this).attr('data-filter');

        $gallery.isotope({ filter: filterValue });

    });

    $('.filtering').on( 'click', 'span', function() {

        $(this).addClass('active').siblings().removeClass('active');

    });

});
