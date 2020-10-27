<?php
	session_start();
	if(!isset($_SESSION['create'])){
        header("Location: 404.php");
		die("Not Allowed!");
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Create a blog | Toveri Pals</title>
	<meta name="description" content="Our Products | Toveri Pals" />
	<meta name="keywords" content="General Trading, Bussiness, Real Estate">
	<!-- Load Headers-->
	<?php include_once "headers.php"; ?>
	<style>
		.label-special {
			background-color: #fa6607;
			/* teal:#008080. baddas:#bada55. purple:#800080. faggot:#fa6607 */
		}
		input[type=checkbox]{
			-moz-appearance:button; /* Firefox */
			-webkit-appearance:button; /* Safari and Chrome */
			appearance:button;
		}
		textarea[id='blog'] { 
        	resize: none; 
      	}

		/*    https://artisansweb.net/drag-drop-file-upload-using-javascript-php/  
				drag and drop  */
		#drop_file_zone {
			background-color: #F0F0F0;
			border: #999 5px dashed;
			height: fit-content;
			padding: 8px;
			font-size: 18px;
		}
		#drag_upload_file {
			margin:0 auto;
		}
		#drag_upload_file p {
			text-align: center;
		}
		#drag_upload_file #image {
			display: none;
		}
	</style>
</head>
<body class='scroll1 page-admin'>
<center>
<!-- Navbar -->
<?php include_once "nav.php"; ?>
<!-- front section -->
<div><img id="banner" class="img-fluid w-100" src="img/banners/typewriter.jpg" /></div>
<!-- intro text -->
<div class="my-5 text-center" id="intro">
  <div class="container">
    <h1 class="display-4 text-theme">Publish a Blog</h1>
    <p class="adapt-3 lead">
		  Fill the form to post a blog. Use short descriptions in title and subtitle, and paste the article text in the textarea. Upload a 16x9 image, and enter your assigned password to publish.
	</p>
	<small>Single press the submit button, and wait till the dailog box appears.</small>
  </div>
</div>
<!-- form -->
<section>
<!-- $file = fopen("test.txt","w+"); -->
<div class="container my-5 border">
	<div class="row p-5">
		<form class="form border p-5" enctype="multipart/form-data">
			<!-- Title -->
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="text-dark fa fa-font"></i></div>
				</div>
				<input type="text" class="form-control" id="title" placeholder="Title" required  maxlength="15">
			</div>
			<!-- Subtitle -->
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="text-dark fa fa-pencil"></i></div>
				</div>
				<input type="text" class="form-control" id="subtitle" placeholder="Subtitle" required  maxlength="50">
			</div>
			<!-- Blog -->
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="text-dark fa fa-book"></i></div>
				</div>
				<textarea class="form-control scroll1" id="blog" placeholder="paste blog text" rows="1" required  maxlength="10000"></textarea>
			</div>
			<!-- Color -->
			<div class="form-row">
				<p>Choose border color</p>
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="text-dark fa fa-paint-brush"></i></div>
				</div>
				<input type="color" class="form-control" id="color">
			</div>
			<!-- Image -->
			<div class="form-row">
				<p>Upload background image (max 5MB)</p>
			</div>
			<!-- Image File -->
		  	<?php // code from https://artisansweb.net/drag-drop-file-upload-using-javascript-php/ ?>
			<div class="mb-3" id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
				<div id="drag_upload_file">
					<p id="image-label">
						<i class="fa fa-3x fa-upload text-secondary mt-3"></i>
						<br>Drop file here<br>or
					</p>
					<input type="button" class="btn btn-sm border-secondary" value="Browse File" onclick="file_explorer();">
					<input type="file" id="image" name="image" accept="image/x-png,image/gif,image/jpeg,image/svg" required>
				</div>
        	</div>
			<!-- Badges -->
			<div class="form-row">
				<div>
					<label class="p-2 badge badge-success">
						<input class="align-top" type="checkbox" name="cb" value="environment" /> Environment
					</label>
					<label class="checkbox-inline p-2 badge badge-info">
						<input class="align-top" type="checkbox" name="cb" value="launch" /> Launch
					</label>
					<label class="checkbox-inline p-2 badge badge-primary">
						<input class="align-top" type="checkbox" name="cb" value="tech" /> Tech
					</label>
					<label class="checkbox p-2 badge badge-warning">
						<input class="align-top" type="checkbox" name="cb" value="bussiness" /> Bussiness
					</label>
					<label class="checkbox-inline p-2 badge badge-danger">
						<input class="align-top" type="checkbox" name="cb" value="alert" /> Alert
					</label>
					<label class="checkbox-inline p-2 badge badge-dark">
						<input class="align-top" type="checkbox" name="cb" value="challenge" /> Challenge
					</label>
					<label class="checkbox-inline p-2 badge badge-secondary">
						<input class="align-top" type="checkbox" name="cb" value="case" /> Case-Study
					</label>
				</div>
			</div>
			<!-- Password -->
			<hr>
			<div class="form-row">
				<p>Enter password to post the blog</p>
			</div>
			<div class="input-group mb-4">
				<div class="input-group-prepend">
					<div class="input-group-text"><i class="text-dark fa fa-lock"></i></div>
				</div>
				<input type="password" class="form-control" id="password" placeholder="Password" required  maxlength="15">
			</div>
			<!-- submit -->
			<input type="button" value="Submit" id="sub" class="btn btn-primary">
			<input type="reset" id="rst" class="btn btn-danger">
		</form>
	</div>
</div>
</section>
	<hr>
	<p class="lead"><a href='#' id='mod'>Approve Blog.</a></p><hr>
	<p class='lead'><a href='#' id='dash'>Manage Dashboard.</a></p><hr>
<!-- Footer -->
<?php include_once "footer.php"; ?>
<script>
	// drag and drop
	var img;
	function upload_file(e) {
		e.preventDefault();
		var filename = e.dataTransfer.files[0];
		img = filename;
		file_upload(filename.name);
		//filename = filename.name.replace(/C:\\fakepath\\/i, '');
		//$('#image-label').html('<b>'+filename+'</b>');
	}
	
	function file_explorer() {
		document.getElementById('image').click();
		document.getElementById('image').onchange = function() {
			img = document.getElementById('image').files[0];
			file_upload(img.name);
		};
	}

	// caption change on image upload
	function file_upload(filename) {
		filename = filename.replace(/C:\\fakepath\\/i, '');
		$('#image-label').html('<b>'+filename+'</b>');
	}

	// reset
	// $('#rst').click(function() { $('#image-label').html('16:9 (>5MB)'); });

	// form submission for new blog
	$(document).ready(function(){
		$("#sub").click(function(){
			//collecting form data
			var h = $("#title").val();
			var s = $("#subtitle").val();
			var b = $("#blog").val();
			var a = $("#color").val();
			var p = $("#password").val();
			//var img = $('#image').prop('files')[0];
			
			// select checked checkboxes
			var c = [];
			$.each($("input[name='cb']:checked"), function(){      
				c.push($(this).val());
			});
			//empty validation
			if(c==""){
				c="NULL";
			}
			if(!h || !s || !b || !p){
				alert('Please fill all form details');
				return;
			}
			if(img.length == 0){
				alert('Please upload an appropriate image');
				return;
			}
		
			// formdata to send file and data
			var fd = new FormData();
			fd.append("file", img);
			
			fd.append("h", h);
			fd.append("s", s);
			fd.append("b", b);		
			fd.append("a", a);
			fd.append("c", c);
			fd.append("p", p);
			// AJAX Code To Submit Form.
			$.ajax({
				type: "POST",
				url: "insert_blog.php",
				data: fd,
				cache: false,
				contentType: false,
				processData: false,
				success: function(result){
					//unknown error
					if(!result){
						alert('An error occurred');
					}
					//Intrusion
					else if(result=="!p"){
						alert('Entered password is wrong');
					}
					//Post writing error
					else if(result=="!w"){
						alert('Error in writing blog');
					}
					//Success
					else if(result=="ok"){
						alert('Blog posted successfully');
						$('#rst').click();
						document.location.href = 'news.php';
					}
					//Pending approval
					else if(result=="okay"){
						alert('Blog will be posted after approval');
						$('#rst').click();
						document.location.href = 'news.php';
					}
					//Pending approval, error in mail
					else if(result=="!m"){
						alert('Mail could not be sent. Blog will be posted after approval');
						$('#rst').click();
						document.location.href = 'news.php';
					}
					// misc error
					else{
						alert(result);
					}
				}
			});
		return false;
		});
	});

	// navigate to moderator's page
    $('#mod').click(function () {
        var enter = prompt("Enter Password");
        if (enter != "") {
            // add tokens for blog create page
            data = "enter="+enter;
            $.ajax({
                type: "POST",
                url: "static/scripts/allow_approval.php",
                data: data,
                cache: false,
                success: function(result){
                    if(result == "allow")
                        document.location.href = 'approve.php';
                    else
                        alert(result);
                }
            });
        }
        else{
            alert("Please type the Password.");
        }
    });
	
	// navigate to dashboard
    $('#dash').click(function () {
        var enter = prompt("Enter Password");
        if (enter != "") {
            // add tokens for blog create page
            data = "enter="+enter;
            $.ajax({
                type: "POST",
                url: "static/scripts/enter_dashboard.php",
                data: data,
                cache: false,
                success: function(result){
                    if(result == "allow")
                        document.location.href = 'dashboard.php';
                    else
                        alert(result);
                }
            });
        }
        else{
            alert("Please type the Password.");
        }
    });
</script>
</center>
</body>
</html>