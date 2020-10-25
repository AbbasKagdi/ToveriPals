<footer class="">
	<div class=" mt-4">
	<div class="row text-left smol text-break">
		<div class="col-md-2 col-sm-6 col-xs-12">
			<ul>
				<li><a href="index.php"><img width="150px" class="img-responsive img-fluid" src="img/logo.png" alt="toveri pals logo"></a></li>
			</ul>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12 text-break">
			<ul>
			<li><h4 class="text-dark">Location</h4></li>
			<li>
				<address>
					<a href="contact.php#map"><i class="fa fa-map-marker" aria-hidden="true"></i> Free Trade Zone, Block 1, Plot 35, 2<sup>nd</sup> Floor, Shuwaikh, Kuwait</li></a>
				</address>
			</li>
			</ul>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<ul>
				<li><h4 class="text-dark">Contact</h4></li>
				<li><small><i class="fa fa-address-card" aria-hidden="true"></i></small> Toveri Pals General Trading Company</li>
				<li><i class="fa fa-home" aria-hidden="true"></i> P.O. Box 5711, Safat. Kuwait 13058</li>
				<li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="contact.php#email">info@toveripals.com</a></li>
				<li id="phone"><i class="fa fa-phone" aria-hidden="true"></i> <abbr title="click to copy phone number"><small>(+965) 2241-1161</small></abbr></li>
				<!-- <li><img width="20px" src="img/social/w.png"> <a href="https://api.whatsapp.com/send?phone=+96555010452"><small>+965-550-10452</small></a></li> -->
				<!-- <li><i class="fa fa-whatsapp"></i> <a href="https://api.whatsapp.com/send?phone=+96555010452"><small>(+965) 5501-0452</small></a></li> -->
				<li>
					<div class="alert alert-success alert-dismissible fade mx-1">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<small><strong>Success!</strong> Phone nuber copied!</small>
					</div>
				</li>
			</ul>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12">
			<ul>
			<li><h4 class="text-dark">Social</h4></li>
				<li><a href="https://www.linkedin.com/company/toveri-pals/" class="smol"><img width="25px" src="img/social/l.png" loading="lazy" alt="Linkedin"> Linkedin</a></li>
				<li><a href="https://twitter.com/ToveriPals" class="smol"><img width="25px" src="img/social/t.png" loading="lazy" alt="Twitter"> Twitter</a></li>
				<li><a href="https://www.youtube.com/channel/UCFkpDJKUQWWIih36Cg4rOMg" class="smol"><img width="25px" src="img/social/y.png" loading="lazy" alt="Youtube"> Youtube</a></li>
				<li><a href="https://www.facebook.com/ToveriPals-106427731096455/" class="smol"><img width="25px" src="img/social/f.png" loading="lazy" alt="Facebook"> Facebook</a></li>
				<li><a href="https://www.instagram.com/toveripals/" class="smol"><img width="25px" src="img/social/i.png" loading="lazy" alt="Instagram"> Instagram</a></li>
			</ul>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-12">
			<ul>
			<li><h4 class="text-dark">Certification</h4></li>
				<li><a href="cert.php" class=""><img width="60px" src="img/iso.png" alt="Certificate"></a></li>
			</ul>
		</div>
	</div>
	</div>
	<a href="#" class="btn border-primary btn-lg back-to-top ml-0"><span class="fa fa-angle-up"></span></a>
	<div class="mt-3 container-fluid bg-dark">
		<b>
		<font color="#fff">
			<span class="fa fa-copyright" aria-hidden="true"></span>
			Toveri Pals 2020 | 
			<a href="sitemap.php" class="text-info">Sitemap</a>
		</font>
		</b>
	</div>
	<!-- css added by footer-->
	<style scoped>
		footer{
			overflow: hidden;
			background:#fbfbfb;
			color: #000;
			position: relative;
		}
		li{
			list-style-type:none;
		}
		a, a:link, a:visited{
			text-decoration: none;
		}
		.smol{
			color: #000;
			font-size: 1.9vh;
		}
		i{
			color: #f26907;
		}
		.back-to-top {
			cursor: pointer;
			position: absolute;
			bottom: 50px;
			right: 50px;
			color: #000;
			font-size: 1em;
		}
	</style>
	<script>
		$("#phone").click(function (){
			$(".alert").addClass("show");
			copy("+96556647575");
		});
		function copy(text){
			var textarea = document.createElement('textarea');
			textarea.value = text;
			textarea.setAttribute('readonly', '');
			textarea.style.position = 'absolute';
			textarea.style.left = '-9999px';
			document.body.appendChild(textarea);
			textarea.select();
			document.execCommand('copy');
			document.removeChild(textarea);
		}
	</script>
</footer>