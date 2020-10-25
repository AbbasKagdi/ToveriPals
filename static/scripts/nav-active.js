( function ($) {
    var activenav,
        matches = document.body.className.match(/(^|\s)page-(\w+)(\s|$)/); //
    if (matches) {
        activenav = matches[2]; 
        $(".navbar-nav .nav-item").each( function () {
            if( $(this).hasClass(activenav) ) {
                $(this).addClass('active')
                       .find(".nav-link").append(" <span class='sr-only'>(current)></span>");
            }
        });
        $(".navbar-nav").each( function () {
            if( $(this).hasClass(activenav) ) {
                $(this).addClass('active')
                       .append(" <span class='sr-only'>(current)></span>");
            }
        });
    }

})(jQuery);


// animate navbar
$(function() {
    var header = $(".navbar");
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            header.removeClass('container').removeClass('px-5').removeClass('py-4').removeClass('mt-5').addClass("container-fluid");
        } else if($(window).width() > 500) {
            header.removeClass("container-fluid").addClass('container').addClass('py-4').addClass('px-5').addClass('mt-5');
        }
    });
});

// mobile viewport
$(document).ready(function () {
    if($(window).width() < 768) {
      // disable navbar margins on mobile viewport
       $("#navbar").removeClass("mt-5").removeClass("px-5").removeClass("py-4").removeClass("bg-white").addClass("bg-muted");
       // navbar blur
       $(".navbar-toggler").click(function () {
        $("#navbar").toggleClass("bg-white");
       });
    }
});

// collapse navbar on focus out
$('.navbar').focusout(function(){
    $(".navbar-toggler").click();
});