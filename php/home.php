<?php   session_start(); 

      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:login.php");  
       }
	  

         
?>

<html>
<head>
	<title>Souvenir Recommender</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/MapPageStyle.css">
</head>

<body>


<!--********************************* STICKY TOPBAR **************************-->

	<div id = "sidebar" style="top:2%; left: 6%;">
		<div>
			<div><p class = "menu"><img src="../images/empty.png" class = "icon"></p></div>
			<div><a href = "../html/MyProfile.html?user=1"><p class = "menu"><img src="../images/profile.png" class = "icon zoom"></p></a></div>
			<div><a href = "../html/map-page.html"><p class = "menu"><img src="../images/search.png" class = "icon zoom"></p></a></div>
			<div><a href='logout.php'><p class = "menu"><img src="../images/logout.png" class = "icon zoom"></p></a></div>
		</div>
	</div>

	<div id = "sidebarSecond">
		
	</div>

	<!--******************************* STICKY TOPBAR END **************************-->

	
	<center>
	<h1>Where are you going?</h1>
	
	<div role="img" class="container">
		
		<img src="../images/map1.png" alt="Europe" class="responsive">

		<div class="franta">
			<a style="color:white;" href="../php/criterii.php?countryID=2" class="btn">France</a> 
		</div>

		<div class="spania">
			<a style="color:white;" href="../php/criterii.php?countryID=9" class="btn"> Spain  </a>
		</div>


		<div class="romania">
			<a style="color:white;" href="../php/criterii.php?countryID=1" class="btn">Romania </a> 
		</div>

		<div class="italia">
			<a style="color:white;" href="../php/criterii.php?countryID=3" class="btn"> Italy</a> 
		</div>


		<div class="uk">
			<a style="color:white;" href="../php/criterii.php?countryID=8" class="btn"> UK </a>  
		</div>

		<div class="germania">
			<a style="color:white;" href="../php/criterii.php?countryID=4" class="btn"> Germany </a>
		</div>

		<div class="norvegia">
			<a style="color:white;" href="../php/criterii.php?countryID=6" class="btn">  Norway </a>
		</div>

		<div class="suedia">
			<a style="color:white;" href="../php/criterii.php?countryID=5" class="btn"> Sweden </a>
		</div>

		<div class="finlanda">
			<a style="color:white;" href="../php/criterii.php?countryID=7" class="btn"> Finland</a>
		</div>
	</div>
	</center>


</body>
</html>
<?php



?>



