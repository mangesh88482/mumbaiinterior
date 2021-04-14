<div class="col-md-12 text-center" style="padding:20px;">
			<p style="" id="contactsocial">
				<a href="https://www.facebook.com/Mumbai-Interior-Designer-104150325053125" target="null"><i class="fab fa-facebook-f"></i></a>
				<a href="https://twitter.com/DesignerMumbai" target="null"><i class="fab fa-twitter" ></i></a>
				<a href="https://www.instagram.com/mumbai_interior_designer/" target="null"><i class="fab fa-instagram"></i></a>
				
			</p>
		</div>
<div style="background-image:url('image/footer-bg.jpg');">
	<br><br>
	<div class="container" style="padding:20px; color:white;">
		<div class="row">
			<div class="col-md-3" style="padding:10px;">
				<h4>About Us</h4>
				<hr>
				<p style="font-size:14px;">
					<b>Mumbai Interior Designer</b> Is a new generation super online store
					made just for all your Wood Work and Interior Designing needs.
				</p>
			
			</div>
			<div class="col-md-3" style="padding:10px;">
				<h4>Home Themes</h4>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<ul id="footerul">
							<li><a href="DRAWING_ROOM">Drawing Room Themes</a></li>
							<li><a href="DINING_ROOM">Dining Room Themes</a></li>
							<li><a href="BEDROOM">Bedroom Themes</a></li>
							<li><a href="TV_ROOM">Tv Room Themes</a></li>
							
						</ul>
					</div>
					<div class="col-md-6">
						<ul id="footerul">
							<li><a href="KIDS_ROOM">Kids Room Themes</a></li>
							<li><a href="KITCHEN_THEMES">Kitchen Themes</a></li>
							<li><a href="BATHROOM">Bathroom Themes</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3" style="padding:10px;">
				<h4>Product</h4>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<ul id="footerul">
							<li><a href="AQUARIUMS">Aquariums</a></li>
							<li><a href="ARTIFICIAL_FLOWERS">Artificial Flowers</a></li>
							<li><a href="Bed_Sheets">Bed Sheets</a></li>
							
						</ul>
					</div>
					<div class="col-md-6">
						<ul id="footerul">
							<li><a href="doors">Doors</a></li>
							<li><a href="flooring">Flooring</a></li>
							<li><a href="Furnishing">Furnishing</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-3" style="padding:10px;">
				<h4>Contact Us</h4>
				<hr>
				<p style="font-size:14px;">
					Contact: +91 8600625653 / 7066901550<br>
					Email: info@mumbaiinteriordesign.com<br>
					Address: Vasai West, Maharashtra, 401208
				</p>
				<p style="" id="sociallink">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
				</p>
			</div>
		</div>
	</div>
	<br>
</div>
<div class="text-center" style="background:#0a333f; padding:20px; color:white; font-size:15px;">
	Copyright © 2021 | Extreme Developers.
</div>






<script>
	const $dropdown = $(".dropdown");
	const $dropdownToggle = $(".dropdown-toggle");
	const $dropdownMenu = $(".dropdown-menu");
	const showClass = "show";
	 
	$(window).on("load resize", function() {
	  if (this.matchMedia("(min-width: 768px)").matches) {
		$dropdown.hover(
		  function() {
			const $this = $(this);
			$this.addClass(showClass);
			$this.find($dropdownToggle).attr("aria-expanded", "true");
			$this.find($dropdownMenu).addClass(showClass);
		  },
		  function() {
			const $this = $(this);
			$this.removeClass(showClass);
			$this.find($dropdownToggle).attr("aria-expanded", "false");
			$this.find($dropdownMenu).removeClass(showClass);
		  }
		);
	  } else {
		$dropdown.off("mouseenter mouseleave");
	  }
	});
	
	
	</script>
	</body>
</html>