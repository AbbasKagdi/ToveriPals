<?php

    //debug info
    //comment this block
    ini_set('display_startup_errors', 1);
    ini_set('display_errors', 1);
    error_reporting(-1);
    
?>
<div id="skip" class=" w-100 bg-dark"><a href="#intro" class="skip sr-only sr-only-focusable">Skip to main content</a></div>
<nav class="navbar container navbar-expand-md navbar-light bg-white fixed-top mt-5 py-4 px-5" id="navbar">
<div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navtoggle" aria-controls="navtoggle" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navtoggle">
    <a class="navbar-brand font-weight-bold" href="index.php"><font color="#f26907">Toveri</font> <font color="#2d038a">Pals</font></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item about mx-3">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item products mx-3">
        <a class="nav-link" href="products.php">Products</a>
      </li>
      <li class="nav-item news mx-3">
        <a class="nav-link" href="news.php">Stories</a>
      </li>
      <li class="nav-item gallery mx-3">
        <a class="nav-link" href="gallery.php">Videos</a>
      </li>
      <!--<li class="nav-item partners mx-3">
        <a class="nav-link" href="partners.php">Affiliates</a>
      </li>-->
    </ul>
    <div class="nav-item contact mx-3 my-2 my-lg-0" id="enq">
      <a href="contact.php" class="btn outline-blue my-2 my-sm-0" type="button">Contact</a>
    </div>
  </div>
</div>
</nav>
<style scoped>
  nav{
    opacity: 0.8;
  }
  nav:hover{
    opacity: 1;
  }
  .navbar{
    transition: 500ms;
  }
  .active{
    color: #000;
    font-size: 1.1em;
  }
</style>
<script>

  // add active class to nav item based on page (sr-only)
  ( function ($) {
    var activenav,
        matches = document.body.className.match(/(^|\s)page-(\w+)(\s|$)/); //
    if (matches) {
        activenav = matches[2];
        //remove active class
        $(".active").removeClass("active");
        $(".navbar-nav .nav-item").each( function () {
            if( $(this).hasClass(activenav) ) {
                $(this).addClass('active').find(".nav-link").append(" <span class='sr-only'>(current)></span>");
            }
        });
        $(".navbar-nav").each( function () {
            if( $(this).hasClass(activenav) ) {
                $(this).addClass('active').append(" <span class='sr-only'>(current)></span>");
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

</script>
<!-- <script src="static/scripts/nav-active.js"></script> -->