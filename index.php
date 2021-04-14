<?php
	include("header.php");
?>

<div class="container-fluid">
	<div class="row" id="imgbg">
		<div class="col-sm-12 text-center" id="banner_info">
			<br>
			<div class="overlay"></div>
			<div style="position:relative;">
				<span id="banner_head">Start Makeover Your House Today</span>
				<div style="padding:15px;">
					<a href="AQUARIUMS" class="product">Product</a>					
				</div>
				<div style="padding:15px;">
					<a href="contact_us" class="contact_us">Contact Us</a>					
				</div>
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
		var images = ["5.jpg","2.jpg","1.jpg"];
		$(function () {
			var i = 0;
			$("#imgbg").css("background-image", "url(image/" + images[i] + ")");
			setInterval(function () {
				i++;
				if (i == images.length) {
					i = 0;
				}
				$("#imgbg").fadeOut("slow", function () {
					$(this).css("background-image", "url(image/" + images[i] + ")");
					$(this).fadeIn("slow");
				});
			}, 3000);
		});
	</script>
	
	
</div>
		

<div class="container" style="margin-top:25px;">
	<center id="texthover" style="font-size:30px; color:#0a333f; font-weight:bold;">
		Start Makeover Your House <span style="color:#098899;">Today</span>
		<br>
		<hr id="hrhover">
	</center>
	
	<script>
		$(document).ready(function(){
			$("#texthover").hover(function(){
			  $("#hrhover").css("width", "37%");
			  }, function(){
			  $("#hrhover").css("width", "5%");
			});
		});
	</script>
	
	
	<div class="row" style="padding:20px;">
	
		<div class="col-md-4">
			<a href="contact_us" style="text-decoration:none; color:black;">
			<div class="card" id="card">
			  <img class="card-img-top" src="image/Luxurious-Work.jpeg" alt="Card image cap">
			  <div class="card-body">
				<p class="card-text text-center">Luxurious Work</p>
			  </div>
			</div>
			</a>
		</div>
		
		<div class="col-md-4">
			<a href="contact_us" style="text-decoration:none; color:black;">
				<div class="card" id="card">
				  <img class="card-img-top" src="image/Middle-Class-Family-Work.jpeg" alt="Card image cap">
				  <div class="card-body">
					<p class="card-text text-center">Middle Class Family Work</p>
				  </div>
				</div>
		</a>
		</div>
		
		<div class="col-md-4">
		<a href="contact_us" style="text-decoration:none; color:black;">
			<div class="card" id="card">
			  <img class="card-img-top" src="image/20000-to-50000-Per-Eoom.jpeg" alt="Card image cap">
			  <div class="card-body">
				<p class="card-text text-center">20,000 to 50,000 Per Room</p>
			  </div>
			</div>
			</a>
		</div>
		
		<div class="col-md-4">
		<a href="contact_us" style="text-decoration:none; color:black;">
			<div class="card" id="card">
			  <img class="card-img-top" src="image/Commercial-Projects.jpeg" alt="Card image cap">
			  <div class="card-body">
				<p class="card-text text-center">Commercial Projects</p>
			  </div>
			</div>
			</a>
		</div>
		
		<div class="col-md-4">
		<a href="contact_us" style="text-decoration:none; color:black;">
			<div class="card" id="card">
			  <img class="card-img-top" src="image/Online-Consultation-Designing-Services.jpeg" alt="Card image cap">
			  <div class="card-body">
				<p class="card-text text-center">Online Consultation Designing Services</p>
			  </div>
			</div>
			</a>
		</div>
		
		<div class="col-md-4">
		<a href="contact_us" style="text-decoration:none; color:black;">
			<div class="card" id="card">
			  <img class="card-img-top" src="image/Collaboration.jpeg" alt="Card image cap">
			  <div class="card-body">
				<p class="card-text text-center">Collaboration</p>
			  </div>
			</div>
			</a>
		</div>
		
	</div>
</div>


<div id="makeoverin5steps">
	<div class="container">
		<br><br>
		<center id="texthover1" style="font-size:30px; color:#0a333f; font-weight:bold;">
			Makeover in 5 Easy <span style="color:#098899;">Steps</span>
			<br>
			<hr id="hrhover1" style="height:3px;">
		</center>
		
		<script>
			$(document).ready(function(){
				$("#texthover1").hover(function(){
				  $("#hrhover1").css("width", "30%");
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
		
		<div class="row" style="padding:20px;">
			
			<div class="col-md-4" style="padding:10px;">
				<div class="card" style="padding:10px;">
					<img src="image/11.png" style="width:100%;" alt="Card image cap">
					<div class="card-body">
						<p class="card-text text-center" style="font-size:15px; font-weight:bold;">1. Choose your interest.</p>
						<p class="text-center" style="font-size:13px;">
							Opt for a unique design from our oceanic list to invite tons of warmth 
							and comfort in any or every part of your house/office.
						</p>
					</div>
				</div>
			</div>
			
			<div class="col-md-4" style="padding:10px;">
				<div class="card" style="padding:10px;">					
					<img src="image/22.png" style="width:100%;" alt="Card image cap">
					<div class="card-body">
						<p class="card-text text-center" style="font-size:15px; font-weight:bold;">2. Discuss with our Creators</p>
						<p class="text-center" style="font-size:13px;">
							Take your time to explore appealing refurbishing ideas/themes in good 
							detail to enliven your house/office space instantly at no high costs.
						</p>
					</div>
				</div>
			</div>
				
			<div class="col-md-4" style="padding:10px;">
				<div class="card" style="padding:10px;">
					<img src="image/33.png" style="width:100%;" alt="Card image cap">
					<div class="card-body">
						<p class="card-text text-center" style="font-size:15px; font-weight:bold;">3. Finalise your budget</p>
						<p class="text-center" style="font-size:13px;">
							Leave your budget related worries aside, sit down with us and discuss
							all the finer details to physically realise your dream house now!
						</p>
					</div>
				</div>
			</div>
				
			<div class="col-md-2"></div>	
			<div class="col-md-4" style="padding:10px;">
				<div class="card" style="padding:10px;">
					<img src="image/55.png" style="width:100%;" alt="Card image cap">
					<div class="card-body">
						<p class="card-text text-center" style="font-size:15px; font-weight:bold;">4. Finalise the work details</p>
						<p class="text-center" style="font-size:13px;">
							Quickly freeze your decision for that perfect design and
							let our artistic magicians transform your living space in a majestic way.
						</p>
					</div>
				</div>
			</div>
				
			<div class="col-md-4" style="padding:10px;">
				<div class="card" style="padding:10px;">
					<img src="image/44.png" style="width:100%;" alt="Card image cap">
					<div class="card-body">
						<p class="card-text text-center" style="font-size:15px; font-weight:bold;">5. Makeover your place !</p>
						<p class="text-center" style="font-size:13px;">
							Let us begin the work and deliver you a beauteous space that is beyond
							your imagination or reasonable expectation in least amount of time.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<br>	<br>
</div>

<br><br>
<div class="container">
	<div class="row" style="padding:20px;">
		<br><br>
		<center id="texthover2" style="font-size:30px; color:#0a333f; font-weight:bold;">
			Get In <span style="color:#098899;">Touch</span>
			<br>
			<hr id="hrhover2" style="height:2px;">
		</center>
		<p class="text-center" style="padding:10px; font-weight:500;">How can we help you? We'd love to hear from you:</p>
		<script>
		$(document).ready(function(){
			$("#texthover2").hover(function(){
			  $("#hrhover2").css("width", "16%");
			  }, function(){
			  $("#hrhover2").css("width", "5%");
			});
		});
	</script>
		
		<div class="col-md-2 text-center" style="font-size:30px;">
			
		</div>
		<div class="col-md-3 text-center" style="font-size:30px; padding:30px;">
			<a href="" class="btn btn-info" style="color:white; border-radius:25px; width:280px; background:#0bb3bf;"><span class="far fa-envelope"></span> info@mumbaiinteriordesign.com</a>
			<div style="height:20px;"></div>
			<a href="" class="btn btn-info" style="color:white; border-radius:25px; width:280px; background:#2c6ac2;"><i class="fab fa-facebook-f"></i> Facebook</a>
			<div style="height:20px;"></div>
			<a href="" class="btn btn-info" style="color:white; border-radius:25px; width:280px; background:#2cc27e;"><i class="fas fa-phone-alt"></i> +91 8600625653</a>
		</div>
		<div class="col-md-2">
			<center><hr id="horizontal" style="width:1px; height:190px;"></center>
		</div>
		<div class="col-md-3 text-center" style="font-size:24px; padding:30px;">
			<p style="font-weight:500;">Come to see us!</p>
			<p style="font-size:18px;">
				Vasai East,<br>
				Maharashtra,<br>
				Mumbai - 401208
			</p>
		</div>
		<div class="col-md-2 text-center" style="font-size:30px;">	
		</div>
		
	</div>
</div>

<?php
	include("footer.php");
?>