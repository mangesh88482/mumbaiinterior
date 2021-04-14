<?php
	include("header.php");
?>
	<div style="background:#353b55; padding:70px;">
		<div class="container">
			<br>
			<nav aria-label="breadcrumb" style="padding:10px; font-size:15px; padding:10px 10px 0.08px 10px; background-color:rgba(0, 0, 0, 0);  ">
				  <ol class="breadcrumb" style=" text-decoration:none; padding:0; text-color:white;">
					<li class="breadcrumb-item"><a href="index" style="text-decoration:none; color:white;">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Bed Sheets.</li>
				  </ol>
			</nav>
			<br>
			<center id="texthover" style="font-size:40px; color:white; font-weight:bold;">
				Bed <span style="color:#098899;">Sheets</span>
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
				<img src="image/Bed_Sheets/Bedseet-1-350x250.jpg" width="100%">
			</div>

			<div class="col-md-4" style="padding:40px;">
				<img src="image/Bed_Sheets/Bedseet-2-350x250.jpg" width="100%">
			</div><br><br>
			<div class="col-md-4" style="padding:40px;">
				<img src="image/Bed_Sheets/Bedseet-3-350x250.jpg" width="100%">
			</div><br><br>

			<div class="col-md-4" style="padding:40px;">
				<img src="image/Bed_Sheets/Bedseet-4-350x250.jpg" width="100%">
			</div><br><br>
			<div class="col-md-4" style="padding:40px;">
				<img src="image/Bed_Sheets/Bedseet-5-350x250.jpg" width="100%">
			</div>
			<div class="col-md-4" style="padding:40px;">
				<img src="image/Bed_Sheets/Bedseet-6-350x250.jpg" width="100%">
			</div>
			
			
		
		
		</div>
	</div>
	





<?php
	include("footer.php");
?>