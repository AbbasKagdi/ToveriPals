jQuery(document).ready(function($) {
    var alterClass = function() {
      var ww = document.body.clientWidth;
      if (ww < 514) {
        $('#banner').removeClass('adjust');
      } else if (ww >= 401) {
        $('#banner').addClass('adjust');
      };
    };
    $(window).resize(function(){
      alterClass();
    });
    //Fire it when the page first loads:
    alterClass();
});
