<?php
	include("header.php");
?>
	<div style="background:#353b55; padding:70px;">
		<div class="container">
			<br>
			<nav aria-label="breadcrumb" style="padding:10px; font-size:15px; padding:10px 10px 0.08px 10px; background-color:rgba(0, 0, 0, 0);  ">
				  <ol class="breadcrumb" style=" text-decoration:none; padding:0; text-color:white;">
					<li class="breadcrumb-item"><a href="index" style="text-decoration:none; color:white;">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Aquariums.</li>
				  </ol>
			</nav>
			<br>
			<center id="texthover" style="font-size:40px; color:white; font-weight:bold;">
				Aqua<span style="color:#098899;">riums</span>
				<br>
				<hr id="hrhover" style="background:white;">
			</center>
		
			<script>
				$(document).ready(function(){
					$("#texthover").hover(function(){
					  $("#hrhover").css("width", "19%");
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
			<div class="col-md-4" style="padding:40px;">
				<img src="image/Aquariums/a8af9da9e41a2e434e3adec477d8443d-3-350x250.jpg" width="100%">
			</div>

			<div class="col-md-4" style="padding:40px;">
				<img src="image/Aquariums/Aquarium-1-3-350x250.jpg" width="100%">
			</div><br><br>
			<div class="col-md-4" style="padding:40px;">
				<img src="image/Aquariums/Aquarium-2-3-350x250.jpg" width="100%">
			</div><br><br>

			<div class="col-md-4" style="padding:40px;">
				<img src="image/Aquariums/Aquarium-3-4-350x250.jpg" width="100%">
			</div><br><br>
			<div class="col-md-4" style="padding:40px;">
				<img src="image/Aquariums/Aquarium-4-3-350x250.jpg" width="100%">
			</div>

			
			
		
		
		</div>
	</div>
	





<?php
	include("footer.php");
?>