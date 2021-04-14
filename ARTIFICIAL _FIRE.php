<?php
	include("header.php");
?>
	<div style="background:#353b55; padding:70px;">
		<div class="container">
			<br>
			<nav aria-label="breadcrumb" style="padding:10px; font-size:15px; padding:10px 10px 0.08px 10px; background-color:rgba(0, 0, 0, 0);  ">
				  <ol class="breadcrumb" style=" text-decoration:none; padding:0; text-color:white;">
					<li class="breadcrumb-item"><a href="index" style="text-decoration:none; color:white;">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Artificial Fire.</li>
				  </ol>
			</nav>
			<br>
			<center id="texthover" style="font-size:40px; color:white; font-weight:bold;">
				Artificial Fire<span style="color:#098899;">Place</span>
				<br>
				<hr id="hrhover" style="background:white;">
			</center>
		
			<script>
				$(document).ready(function(){
					$("#texthover").hover(function(){
					  $("#hrhover").css("width", "30%");
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
				<img src="image/ARTIFICIAL _FIRE/Artificial-fireplace-01-1-350x271.jpg" width="100%">
			</div>

			<div class="col-md-4" style="padding:40px;">
				<img src="image/ARTIFICIAL _FIRE/Artificial-fireplace-01-500x370-1-350x290.jpg" width="100%">
			</div><br><br>
			<div class="col-md-4" style="padding:40px;">
				<img src="image/ARTIFICIAL _FIRE/Artificial-fireplace-02-1-350x271.jpg" width="100%">
			</div><br><br>

			<div class="col-md-4" style="padding:40px;">
				<img src="image/ARTIFICIAL _FIRE/Artificial-fireplace-03-1-350x290.jpg" width="100%">
			</div><br><br>
			<div class="col-md-4" style="padding:40px;">
				<img src="image/ARTIFICIAL _FIRE/Artificial-fireplace-05-1-350x290.jpg" width="100%">
			</div>
			<div class="col-md-4" style="padding:40px;">
				<img src="image/ARTIFICIAL _FIRE/Artificial-fireplace-05-500x370-1-350x290.jpg" width="100%">
			</div><br><br>
			<div class="col-md-4" style="padding:40px;">
				<img src="image/ARTIFICIAL _FIRE/Artificial-fireplace-06-1-350x290.jpg" width="100%">
			</div>

			
			
		
		
		</div>
	</div>
	





<?php
	include("footer.php");
?>