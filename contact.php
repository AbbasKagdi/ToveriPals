<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Us | Toveri Pals</title>
    <meta name="description" content="Contact Us | Toveri Pals" />
    <meta name="keywords" content="General Trading, Bussiness, Real Estate">
    <!-- Navbar -->
    <?php include_once "headers.php"; ?>
    <style>
        textarea[name='msg'] { 
          resize: none; 
        }
        .boxx{
          width: 15vh;
          height: 35vh;
          margin-bottom: 0;
        }
        .card{
          border: 0;
        }
        h5{
          display: inline;
        }
    </style>
  </head>
<body class='scroll1 page-contact'>
<center>
<!-- Navbar -->
<?php include_once "nav.php"; ?>
<!-- front section -->
<div><img id="banner" class="img-fluid w-100" src="img/banners/cont.jpg" /></div>
<!-- intro text -->
<div class="mt-5" id="intro">
  <div class="container">
    <h1 class="display-4 text-theme">Contact Us</h1>
    <p class="adapt-3 lead">
      We at <b><font color="#f26907">Toveri</font> <font color="#2d038a">Pals</font></b> are Glad to help you Grow and succeed in your business.
    </p>
    <p class="lead">Please find our contact information.</p>
  </div>
</div>
<!-- Wrapper for email form and contact cards -->
<div class="container row my-5">
<!-- Email Form -->
  <div class="col-lg-6 text-left p-5 border text-theme" id="email">
    <form class="form-group" enctype="multipart/form-data">
      <div class="form-row mb-4">
      <h3 class="text-dark">Feel free to leave us a message</h3>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nom">Your name <span class='text-danger'>*</span></label>
          <input type="text" class="form-control" name='nom' id="nom" placeholder="Name" required>
        </div>
        <div class="form-group col-md-6">
          <label for="mail">Your email address <span class='text-danger'>*</span></label>
          <input type="email" class="form-control" name='mail' id="mail" placeholder="Email" required>
          <small id="emailHelp" class="form-text text-muted">Subject to confidentiality.</small>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="subject">Subject line <span class='text-danger'>*</span></label>
          <input type="text" class="form-control" name='subject' id="subject" placeholder="Subject" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="msg">Message <span class='text-danger'>*</span></label>
          <textarea class="form-control scroll1" placeholder="Message" rows="5" name="msg" id="msg" required></textarea>
        </div>
      </div>
      <div class="form-row justify-content-center">
        <!-- Invoke captcha script -->
        <script src="https://www.google.com/recaptcha/api.js?render=6LfKsvsUAAAAABX1hAfOsGDk4M4ssgYNSR0YYm5a"></script>
        <input type="hidden" id="token" name="token">
        <button type="reset" name='reset' class="btn btn-light border-danger mx-2"><span class="text-danger">Reset</span></button>
        <button type="button" name='submit' class="g-recaptcha btn btn-light border-success" data-sitekey="6LfKsvsUAAAAABX1hAfOsGDk4M4ssgYNSR0YYm5a" data-callback='onSubmit' data-action='submit' id="submit"><span class="text-success">Send Mail</span></button>
      </div>
    </form>
  </div>
  <!-- Contact Details-->
  <div class="row col-lg-6 text-left p-5" id="contact-card">
    <div class="mx-1 mt-0 a2a_kit a2a_kit_size_32 a2a_default_style a2a_follow">
    <p class="lead"><h5 class="text-theme">Address:</h5> Free Trade Zone, Block 1, Plot 35, 2nd Floor, Shuwaikh, Kuwait
      <br><br><h5 class="text-theme">Phone:</h5> +965 2241 1161
      <br><br><h5 class="text-theme">P.O.Box:</h5>  5711, Safat, Kuwait 13058
      <br><br><h5 class="text-theme">Email:</h5> info@toveripals.com
      <br><br><h5 class="text-theme">Office Hours:</h5> Sunday to Thursday: 09:00 to 17:00
      <br><br><h5 class="text-theme">Social Media:</h5></p>
      <!-- a2a social scripts -->
      <!-- https://www.addtoany.com/buttons/customize/follow_buttons -->
      <script async src="https://static.addtoany.com/menu/page.js"></script>
      <a class="mx-1 my-1 a2a_button_twitter" href="https://twitter.com/ToveriPals"></a>
      <a class="mx-1 my-1 a2a_button_facebook" href="https://www.facebook.com/Toveri-Pals-100678328346402/"></a>
      <a class="mx-1 my-1 a2a_button_instagram" href="https://www.instagram.com/toveripals/"></a>
      <a class="mx-1 my-1 a2a_button_linkedin_company" href="https://www.linkedin.com/company/toveri-pals/"></a>
      <a class="mx-1 my-1 a2a_button_youtube_channel" href="https://www.youtube.com/channel/UCFkpDJKUQWWIih36Cg4rOMg"></a>
    </div>
  </div>
  <?php /*
  <div class="row col-lg-6 text-left p-5" id="contact-card">
    <!-- Office Hours -->
    <div class="col-md-6 col-sm-12">
      <div class="card-deck text-left">
        <div class="card ">
          <div class="card-body">
            <h5 class="card-title text-theme">Office Hours</h5>
            <p class="card-text">
            <i class="text-dark">
            <ul class="list-inline">
              <li class="list-inline-item"><b>Sunday</b> - <b>Thursday</b> 8am to 5pm</li>
              <li class="list-inline-item"><b>Saturday</b> - 9am to 2pm</li>
              <li class="list-inline-item"><b>Friday</b> - Closed</li>
            </ul>
            </i>
            </p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Address -->
    <div class="col-md-6 col-sm-12">
      <div class="card-deck text-left">
        <div class="card  ">
          <div class="card-body">
            <h5 class="card-title text-theme">Address</h5>
            <p class="card-text"><i class="text-dark">Free Trade Zone, Block 1, Plot 35, 2<sup>nd</sup> Floor Shuwaikh, Kuwait</i></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Phone -->
    <div class="col-md-6 col-sm-12">
      <div class="card-deck text-left">
        <div class="card  ">
          <div class="card-body">
            <h5 class="card-title text-theme">Phone</h5>
            <p class="card-text"><i class="text-dark">(+965) 5664-7575/76</i></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Email -->
    <div class="col-md-6 col-sm-12">
      <div class="card-deck text-left">
        <div class="card  ">
          <div class="card-body">
            <h5 class="card-title text-theme">Email</h5>
            <p class="card-text"><i class="text-dark">info@toveripals.com</i></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Social -->
    <div class="col-md-12">
      <div class="card-deck text-left">
        <div class="card ">
          <div class="card-body">
            <h5 class="card-title text-theme">Social</h5>
            <div class="mx-1 my-1 a2a_kit a2a_kit_size_32 a2a_default_style a2a_follow">
              <!-- a2a social scripts -->
              <!-- https://www.addtoany.com/buttons/customize/follow_buttons -->
              <script async src="https://static.addtoany.com/menu/page.js"></script>
              <a class="mx-1 my-1 a2a_button_twitter" href=""></a>
              <a class="mx-1 my-1 a2a_button_facebook" href="https://www.facebook.com/Toveri-Pals-100678328346402/"></a>
              <a class="mx-1 my-1 a2a_button_instagram" href="https://www.instagram.com/toveripals/"></a>
              <a class="mx-1 my-1 a2a_button_linkedin_company" href="https://www.linkedin.com/company/toveri-pals/"></a>
              <a class="mx-1 my-1 a2a_button_youtube_channel" href="https://www.youtube.com/channel/UCFkpDJKUQWWIih36Cg4rOMg"></a>
            </div>
            
            <!--
            <a href="https://www.linkedin.com/company/toveri-pals/" class="mx-1 la fa fa-linkedin"></a>
            <a href="https://twitter.com/ToveriPals" class="mx-1 la fa fa-twitter"></a>
            <a href="https://www.youtube.com/channel/UCFkpDJKUQWWIih36Cg4rOMg" class="mx-1 la fa fa-youtube-play"></a>
            <a href="https://www.facebook.com/Toveri-Pals-100678328346402/" class="mx-1 la fa fa-facebook"></a>
            <a href="https://www.instagram.com/toveripals/" class="mx-1 la fa fa-instagram"></a>
            -->
          </div>
        </div>
      </div>
    </div> */ ?>
  </div>
<!-- End of Row -->
</div>
<!-- Map integration -->
<div id="map" class="">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3477.691297926147!2d47.90948561509425!3d29.350041557994746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf8f8430da6f2f%3A0xc7d35a03db6f1c5b!2sToveri%20Pals!5e0!3m2!1sen!2skw!4v1591365817821!5m2!1sen!2skw" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<!-- Footer -->
<?php include_once "footer.php"; ?>
</center>
<!-- submit email with captcha -->
<script>
	// animate button
	jQuery(document).ready(function($) {
		$("#submit").click(function(){
			$(this).addClass("border-secondary");
			$(this).removeClass("border-success");
		});
	});
  // handle token
  function onSubmit(e) {
    //e.preventDefault();
    grecaptcha.ready(function() {
      grecaptcha.execute('6LfKsvsUAAAAABX1hAfOsGDk4M4ssgYNSR0YYm5a', {action: 'social'}).then(function(token) {
        $("#token").val(token);
        mail_submit(token);
      });
    });
  }
  // form submission for email
  function mail_submit(token){
    // disable button from double clicks
    $("#submit").prop('disabled', true);
    //collecting form data
    var nom = $("#nom").val();
    var mail = $("#mail").val();
    var subject = $("#subject").val();
    var msg = $("#msg").val();
    if(!nom || !mail || !subject || !msg){
      alert('Please fill all form details');
      $("#submit").prop('disabled', false);
      return;
    }
  
    // formdata to send data
    var fd = new FormData();
    
    fd.append("nom", nom);
    fd.append("mail", mail);
    fd.append("subject", subject);		
    fd.append("msg", msg);
    fd.append("token", token);
    // AJAX Code To Submit Form.
    $.ajax({
      type: "POST",
      url: "feedback.php",
      data: fd,
      cache: false,
      contentType: false,
      processData: false,
      success: function(result){
        //unknown error
        if(!result){
          alert('Network Problem, Please try again later.');
          $("#submit").prop('disabled', false);
        }
        //Success
        else if(result=="ok"){
          alert('Mail sent successfully');
          $('#reset').click();
          location.reload();
        }
        // misc error
        else{
          alert(result);
          $("#submit").prop('disabled', false);
        }
      }
    });
  return false;
  }
</script>
</body>
</html>
<?php
/*
client
6LfKsvsUAAAAABX1hAfOsGDk4M4ssgYNSR0YYm5a
server
6LfKsvsUAAAAAP1HOp2t9hBDXvd9irIDRW-RMW_h
*/
?>