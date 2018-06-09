<html>

<head>
	<title> My Profile </title>

	<!--<link rel="stylesheet" type="text/css" href="../css/MyProfileStyle.css">-->
	<link rel="stylesheet" type="text/css" href="../css/MyProfileStyle.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

	<!--********************************* STICKY TOPBAR **************************-->

	<div id = "sidebar" style="top:2%; left: 6%;">
		<div>
			<div><p class = "menu"><img src="../images/empty.png" class = "icon"></p></div>
			<div><a href = "../html/MyProfile.html"><p class = "menu"><img src="../images/profile.png" class = "icon zoom"></p></a></div>
			<div><a href = "../html/map-page.html"><p class = "menu"><img src="../images/search.png" class = "icon zoom"></p></a></div>
			<div><a href='logout.php'><p class = "menu"><img src="../images/logout.png" class = "icon zoom"></p></a></div>
		</div>
	</div>

	<div id = "sidebarSecond">
		
	</div>

	<!--******************************* STICKY TOPBAR END **************************-->


	<div class = "profile col-12">

		<div class = "col-2 break"></div>


		<div class="col-8 mainProfileSpace">

			<div id="description" class = "col-12">
				<div class = "col-2 empty"></div>

				<!--<div class = "col-3">-->
					<div class = "profilePicture col-2">
						<img src="../images/prof-pic.png" class = "imgProfile">

					</div>
				<!--</div>-->

				<div class = "col-1 empty"></div>

				<div class = "col-6 userDescription">
					<!--<div class = "userDescription">-->
						<div class = "username">Username</div>
						<div class = "countryAge">Romania, 20 years</div>
						<div class = "dob">17 - March - 1997</div>
					<!--</div>-->
				</div>

				<div class = "col-1 empty"></div>
			</div><!--end description div-->
	</div>

	<div class = "col-2 break"></div>
</div>


<div class = "profile col-12">

		<div class = "col-2 break"></div>

		<div class="col-8 mainProfileSpace">

			
			<div id = "accountStatus">
				<p class="normalP">You've been through</p>
				<p class = "countP">4 countries</p>
				<p class="normalP">and got interested in</p>
				<p class = "countP">10 souvenirs</p>
			</div>


			<div id = "myItems">
				
				<div class = "country col-12">
					<div class = "col-2 empty"></div>

					<div class = "col-8">
						<button class = "accordion col-12"> France </button>
						<div class="panel col-12">
						  <p class = "idea">đź—¸ Marseille Soap</p>
						  <p class = "idea">đź—¸ Wine</p>
						  <p class = "idea">đź—¸ Eiffel Tower Keychain</p>
						  <p class = "idea">đź—¸ Sea Salt</p>
						</div>
					</div>

					<div class = "col-2 empty"></div>
				</div>

				<div class = "country col-12">
					<div class = "col-2 empty"></div>

					<div class = "col-8">
						<button class = "accordion col-12"> Nederlands </button>
						<div class="panel col-12">
						  <p class = "idea">đź—¸ Quality spoon</p>
						</div>
					</div>

					<div class = "col-2 empty"></div>
				</div>

				<div class = "country col-12">
					<div class = "col-2 empty"></div>

					<div class = "col-8">
						<button class = "accordion col-12"> Great Britain </button>
						<div class="panel col-12">
						  <p class = "idea">đź—¸ Tea</p>
						  <p class = "idea">đź—¸ Tea cup</p>
						  <p class = "idea">đź—¸ Big Ban Keychain</p>
						</div>
					</div>

					<div class = "col-2 empty"></div>
				</div>

				<div class = "country col-12">
					<div class = "col-2 empty"></div>

					<div class = "col-8">
						<button class = "accordion col-12"> Germany </button>
						<div class="panel col-12">
						  <p class = "idea">đź—¸ Ceramic beer bottle</p>
						  <p class = "idea">đź—¸ Personalized T-Shirt</p>
						</div>
					</div>

					<div class = "col-2 empty"></div>
				</div>
			</div><!--end myItems div-->

		</div><!--end mainProfile div-->

		<div class="col-2"></div>			

	
		</div>
</div>



<div class="footer col-12" >
<div class="dropdown">
<p>Contact</p>
      <div class="dropdown-content">
      <p>Phone:0767705960</p>
      <p>Email:SouR@gmail.com</p>
	  <p>Adress:Iasi,Amurgului,11 </p>
</div></div>


<div class="footertext1">
<p>Contact</p>
</div>
<div class="footertext2">

<p>Phone: 0233456789</p>
<p>Email: SouR@gmail.com
</p>
<p>Adress:Iasi,Amurgului,11 </p>

</div>
</div>

<center>
<div  class="bottombar col-12 ">
@Copyright 2018
</div> 
</center>


<script>
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
	    this.classList.toggle("active");
	    var panel = this.nextElementSibling;
	    if (panel.style.maxHeight){
	      panel.style.maxHeight = null;
	    } else {
	      panel.style.maxHeight = panel.scrollHeight + "px";
	    } 
	  });
	}
</script>

</body>

</html>