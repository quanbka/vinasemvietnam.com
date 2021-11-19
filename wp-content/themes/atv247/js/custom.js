jQuery(function($) {
  // Bootstrap menu magic
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $(".dropdown-toggle").attr('data-toggle', 'dropdown');
    } else {
      $(".dropdown-toggle").removeAttr('data-toggle dropdown');
    }
  });
});

jQuery(document).ready(function() {
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.lendau').fadeIn(duration);
        } else {
            jQuery('.lendau').fadeOut(duration);
        }
    });
    jQuery('.lendau').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({
            scrollTop: 0
        }, duration);
        return false;
    })
});

$(document).ready(function() {
  var owl = $("#owl-demo");
  owl.owlCarousel({
      itemsCustom : [
        [0, 1],
        [450, 1],
        [600, 1],
        [700, 1],
        [1000, 1],
        [1200, 1],
        [1400, 1],
        [1600, 1]
      ],
      autoPlay : 5000,
      navigation : false,
      pagination : true,
  });

});

$(document).ready(function() {
 
  $("#owl-demo4").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
 
});

$(document).ready(function() {
  var owl = $("#owl-demo2");
  owl.owlCarousel({
      itemsCustom : [
        [0, 1],
        [450, 1],
        [600, 2],
        [700, 2],
        [1000, 2],
        [1200, 2],
        [1400, 2],
        [1600, 2]
      ],
      autoPlay : 5000,
      navigation : true,
      pagination : true,
  });

});

$(document).ready(function() {
  var owl = $("#owl-demo3");
  owl.owlCarousel({
      itemsCustom : [
        [0, 1],
        [450, 1],
        [600, 2],
        [700, 2],
        [1000, 2],
        [1200, 2],
        [1400, 2],
        [1600, 2]
      ],
      autoPlay : 5000,
      navigation : false,
      pagination : true,
  });

});