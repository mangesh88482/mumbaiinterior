<?php
	include("header.php");
?>
	<div style="background:#353b55; padding:70px;">
		<div class="container">
			<br>
			<nav aria-label="breadcrumb" style="padding:10px; font-size:15px; padding:10px 10px 0.08px 10px; background-color:rgba(0, 0, 0, 0);  ">
				  <ol class="breadcrumb" style=" text-decoration:none; padding:0; text-color:white;">
					<li class="breadcrumb-item"><a href="index" style="text-decoration:none; color:white;">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">About Us.</li>
				  </ol>
			</nav>
			<br>
			<center id="texthover" style="font-size:40px; color:red; font-weight:bold;">
				About <span style="color:#098899;">Us.</span>
				<br>
				<hr id="hrhover" style="background:red;">
			</center>
		
			<script>
				$(document).ready(function(){
					$("#texthover").hover(function(){
					  $("#hrhover").css("width", "15%");
					  }, function(){
					  $("#hrhover").css("width", "5%");
					});
				});
			</script>
		</div>
	</div>
	<br><br>
	   <div class="container">
		<div class="row">
			<div class="col-md-6">
				<p align="justify" style="font-size:18px;">
					&nbsp;&nbsp;Since 2006,<b> Mumbai Interior Designer</b> is proud and honored to be recognized as a leader in the interior designing industry. Small Budget Big Makeover has
					been creating exceptional homes that lasts, allow his clients to experience the exquisite beauty of well-crafted modular designs 
					with quality raw material, professional installation with rigorous quality checks within the budget.<br><br>
					&nbsp;&nbsp;<b>Mumbai Interior Designer</b> approaches both residential and commercial projects with a vision to inspire the clients and deliver beyond what they ever dreamed. Each design is uniquely exclusive, yet always infused with Small Budget Big Makeover signature existing furniture makeover with sense of fresh, understated luxury. We are recognized for our timeless appeal, beautiful customized furniture and furnishings, layered luxurious materials, and unexpected
					 details. Small Budget Big Makeover is a purist and a perfectionist team where no detail is left unattended, and quality is paramount.
				</p>
			</div>

			<div class="col-md-6">
				<img src="image/About-Us-1.png" width="100%">
			</div>

		
		
		</div>
	</div>
	





<?php
	include("footer.php");
?>