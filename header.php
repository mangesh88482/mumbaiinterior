<html>
	<head>
		<!--------Setting Of Vieport In All Device--------->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-----------Website Icon-------------->
		<link rel="icon" href="logo/logo1.png">

		<!-------My Style--------->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<!----Bootstrap v5.0 Plugins---->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
		
		<!----Jquery Minified Plugin----->
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		
		<!-------Font Awsome Plugin------------>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
          
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<script>
			$(document).ready(function(){
			  $(window).scroll(function(){
				var scroll = $(window).scrollTop();
				  if (scroll > 25) {
					$(".navbar").css("background" , "#0a333f");
					$(".navbar").css("opacity" , "1");
					$("#logo").attr("src" , "logo/logod.png");
				  }

				  else{
						$(".navbar").css("background" , "none");  
						$("#logo").attr("src" , "logo/logo1.png");	
						$(".navbar").css("background-color","rgba(10, 51, 63, 0.3)");	
				  }
			  })
			})
		</script>
	</head>
	<title>Mumbai Interior Designer</title>

	<body>
	     <a href="https://wa.me/917066901550" class="whatsapp_float" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
		<nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-dark">
		  <div class="container">
			<a class="navbar-brand" style="padding:0;" href="index"><img id="logo" src="logo/logo1.png" style="width:65px;"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" 
			aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
			  
			  <ul class="navbar-nav" id="menulinks">
				<li class="nav-item">
				  <a class="nav-link" href="about_us" id="navitem">About Us</a>
				</li>
				
				<li class="nav-item dropdown">
				  <a id="navitem" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown">
					Home Themes
				  </a>
				  <ul class="dropdown-menu" id="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<li><a class="dropdown-item" href="DRAWING_ROOM">DRAWING ROOM THEMES</a></li>
					<li><a class="dropdown-item" href="DINING_ROOM">DINING ROOM THEMES </a></li>
					<li><a class="dropdown-item" href="BEDROOM">BEDROOM THEMES</a></li>
					<li><a class="dropdown-item" href="TV_ROOM">TV ROOM THEMES</a></li>
					<li><a class="dropdown-item" href="KIDS_ROOM">KIDS ROOM THEMES</a></li>
					<li><a class="dropdown-item" href="KITCHEN_THEMES">KITCHEN THEMES</a></li>
					<li><a class="dropdown-item" href="BATHROOM">BATHROOM THEMES</a></li>
					
				  </ul>
				</li>
				
				<li class="nav-item dropdown">
				  <a id="navitem" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown">
					Commercial 
				  </a>
				  <ul class="dropdown-menu" id="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<li><a class="dropdown-item" href="cafe">CAFE</a></li>
					<li><a class="dropdown-item" href="hotel">HOTELS</a></li>
					<li><a class="dropdown-item" href="institutes">INSTITUTES</a></li>
					<li><a class="dropdown-item" href="Kiosks">KIOSKS</a></li>
					<li><a class="dropdown-item" href="office">OFFICES</a></li>
					<li><a class="dropdown-item" href="restaurent">RESTAURENT</a></li>
				  </ul>
				</li>
				
				<li class="nav-item dropdown">
				  <a id="navitem" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown">
					Product
				  </a>
				  <ul class="dropdown-menu" id="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<li><a class="dropdown-item" href="AQUARIUMS">AQUARIUMS</a></li>
					<li><a class="dropdown-item" href="ARTIFICIAL_FLOWERS">ARTIFICIAL FLOWERS</a></li>
					<li><a class="dropdown-item" href="ARTIFICIAL _FIRE">ARTIFICIAL FIRE PLACE</a></li>
					<li><a class="dropdown-item" href="Artificial_Water">ARTIFICIAL WATER FALL</a></li>
					<li><a class="dropdown-item" href="BALCONY_TERRRACE">BALCONY TERRRACE FURNITURE</a></li>
					<li><a class="dropdown-item" href="Bed_Sheets">BED SHEETS</a></li>
					<li><a class="dropdown-item" href="doors">DOORS</a></li>
					<li><a class="dropdown-item" href="flooring">FLOORING</a></li>
					<li><a class="dropdown-item" href="Furnishing">FURNISHING</a></li>
					<li><a class="dropdown-item" href="Furniture">FURNITURE</a></li>
					<li><a class="dropdown-item" href="Walls">WALLS</a></li>
				  </ul>
				</li>
				
				<li class="nav-item">
				  <a class="nav-link" href="contact_us" id="navitem">Contact Us</a>
				</li>
			  </ul>
			</div>
		  </div>
		</nav>
		

	