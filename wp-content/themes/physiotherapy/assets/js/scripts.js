(function($) { 
"use strict";	
$( document ).ready( function() {
  // init Isotope
  var $container = $('#isotopecontainer').isotope({
    itemSelector: '.element-isotope',
    layoutMode: 'masonry',
    getSortData: {
      name: '.name',
      symbol: '.symbol',
      number: '.number parseInt',
      category: '[data-category]',
      weight: function( itemElem ) {
        var weight = $( itemElem ).find('.weight').text();
        return parseFloat( weight.replace( /[\(\)]/g, '') );
      }
    }
  });
  $container.imagesLoaded( function() {
    $container.isotope('layout');
  });
  // filter functions
  var filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function() {
      var number = $(this).find('.number').text();
      return parseInt( number, 10 ) > 50;
    },
    // show if name ends with -ium
    ium: function() {
      var name = $(this).find('.name').text();
      return name.match( /ium$/ );
    }
  };

  // bind filter button click
  $('#filters').on( 'click', 'button', function() {
    var filterValue = $( this ).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[ filterValue ] || filterValue;
    $container.isotope({ filter: filterValue });
  });

  
  // change is-checked class on buttons
  $('.button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'button', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $( this ).addClass('is-checked');
    });
  });
  
});
})(jQuery); 

   
   
(function($) { 
"use strict";
  (function() {
    var elem = document.createElement('input');
    elem.setAttribute('type', 'date');
      if ( elem.type === 'text' ) {
        $('.wpcf7-date').datepicker({});
      }
})
();
})(jQuery); 



(function($) { 
"use strict";
  $('.timerwrapper').waypoint(function(){
    $('.timer').countTo();     
  },{offset: 420, triggerOnce: true});
})(jQuery); 



(function($) {
"use strict";	
  $('.sticker').scrollspy(); 
})(jQuery);


(function($) {
"use strict";	
  $(".sticker").sticky(); 
})(jQuery);


//media queries and functions
(function ($){	
  $(function (){
    $smallscreen();
    $(window).resize(function () {
    $smallscreen()
    });
  });
  $smallscreen = function ()
    {
      if ( $(window).width() >= 767 ) {	  	   		 
	    //add animation triger
         $('.startAnimation').waypoint(function() {
         var animationclass = $(this).attr('data-animate');
         $(this).css('opacity', '1');
         $(this).addClass("animated " + animationclass);
         },
         {
         offset: '100%',
         triggerOnce: true
         }
         );
        } 
else {       		 
}            
}
})(jQuery);



(function($) {
"use strict";	
  var menu = $('.navbar');
    $(window).scroll(function() {
  });

  $('.navbar a[href^="#"]').on('click', function(e) {
  e.preventDefault();
  var target = this.hash,
  $target = $(target);
  $('html, body').stop().animate({
    'scrollTop': $target.offset().top
  }, 1000, 'swing', function() {
    window.location.hash = target;
  });
  });

})(jQuery); 



(function($){
"use strict";	
  $(window).load(function() {
    // Masonry Trigger
    var $container = $('#masonrycontainer');
    $container.masonry({
    itemSelector: '.masonryselector' 
    });
  }); 
})(jQuery);



(function($){
"use strict";	
  $(window).load(function() {
    // Masonry Trigger
    var $container = $('#masonrycontainer1');
    $container.masonry({
    itemSelector: '.masonryselector1' 
    });
  }); 
})(jQuery);


(function($){
"use strict";	
  $(window).load(function() {
    // Masonry Trigger
    var $container = $('#masonrycontainer2');
    $container.masonry({
    itemSelector: '.masonryselector2'
    });
  }); 
})(jQuery);



function scrollToTop($) {
"use strict";	
  jQuery('html, body').animate({
      scrollTop: 0
  }, 'slow');
}(jQuery);