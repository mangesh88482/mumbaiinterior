<?php
	include("header.php");
?>
<br><br><br><br><br>
<div class="container">
	<center id="texthover1" style="font-size:30px; color:#0a333f; font-weight:bold;">
		HAVE YOUR <span style="color:#098899;">QUESTIONS?</span>
		<br>
	</center>
	<div class="text-center" style="color:grey;">	
		<i class="fas fa-map-marker-alt"></i> Vasai, Maharashtra, Mumbai - 401202
	</div>
	
	<script>
		$(document).ready(function(){
			$("#texthover1").hover(function(){
			  $("#hrhover1").css("width", "32%");
			  }, function(){
			  $("#hrhover1").css("width", "5%");
			});
			
			$("#makeoverin5steps").hover(function(){
			  $("#texthover1").css("color", "white");
			  $("#hrhover1").css("background", "white");
			  }, function(){
			  $("#texthover1").css("color", "#0a333f");
			   $("#hrhover1").css("background", "#0a333f");
			});
		});			
	</script>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6 text-center" style="padding:40px;">
			<i class="fas fa-envelope-open-text" style="color:#545454; font-size:280px;"></i>
		</div>
		<div class="col-md-6 text-center" style="padding:60px;">
			<form method="post">
				<table class="table table-borderless table-condensed">
					<tr>
						<td>
							<input type="text" placeholder="Enter Name" id="username" name="username" class="form-control">
						</td>
					</tr>
					<tr>
						<td>
							<input type="email" required placeholder="What's Your Email?"  id="email" name="email" class="form-control">
						</td>
					</tr>
					<tr>
						<td>
							<textarea name="message" id="details" rows="5" class="form-control" placeholder="Your Questions..."></textarea>
						</td>
					</tr>
					<tr>
						<td class="text-center">
							<button type="submit" id="submit" name="submit" class="btn btn-dark">Send Message</button>
						</td>
					</tr>
				</table>
			</form>
		</div>
		<hr>
		
	</div>
</div>



<br>
<?php
	if(isset($_POST['submit']))
	{
		error_reporting(0);
		$to = "info@mumbaiinteriordesign.com";
		$from=$_POST['email'];
		$fromName=$_POST['username'];
		$subject = "mumbaiinteriordesign Contactus";
		$txt = $_POST['message'];
		$headers = "MIME-Version: 1.0" . "\r\n"; 
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
		$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
		$send=mail($to,$subject,$txt,$headers);
		if($send==true)
		{
			echo"<script>alert('Thankyou For Contacting Us, Our Team Will Respond Soon.')</script>";
		}
		else{
			echo"<script>alert('Due To Technical Reason We are Unable to send Message, Plz Try Again Later')</script>";
		}
	}
?>

<?php
	include("footer.php");
?>