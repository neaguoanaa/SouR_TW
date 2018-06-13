
<?php

require '../config/databaseConfig.php';

$countryID = $_GET['countryID'];
$monthValue = $_GET['month'];
$personType = $_GET['personType'];
$personGender = $_GET['gender'];

$query = "SELECT * FROM souvenirs WHERE 
				country_id = '{$countryID}' AND 
				(gender_id = '{$personGender}' OR 
				gender_id = 3) AND
				('{$monthValue}' BETWEEN period_start AND period_end) AND
				('{$personType}' BETWEEN age_min AND age_max)
				ORDER BY rating_value DESC
				";
				

$data = mysqli_query($dbconn,$query);

$itemsID = array();
$counter = 0;

/*
echo 'countryID = ' . $countryID;
echo '<br>monthValue = ' . $monthValue;
echo '<br>personType = ' . $personType;
echo '<br>personGender = ' . $personGender;
*/

if(isset($_POST['add'])){
	add($_POST['add']);
}

function add($val){
	require '../config/databaseConfig.php';
	$suvID = intval($val);

	session_start();
	$use = $_SESSION['use'];

	//$newIDQuery = "SELECT COUNT(*) AS 'total' FROM choices WHERE id_user =..";
	$result = mysqli_query($dbconn,"SELECT count(*) as total from choices");
	$data = mysqli_fetch_assoc($result);

	$newID = intval($data['total'] + 1);
	//echo 'New ID = '.$newID . '<br><br>';

	$insertQuery = "INSERT INTO `choices`(`id`, `id_user`, `id_souvenir`) VALUES (". $newID .",". $use ."," . $suvID . ")";
	//echo $insertQuery;
	$result = mysqli_query($dbconn,$insertQuery);
	/*
	if($result){
		echo '<br>Data inserted';
	}else{
		echo '<br><br>Insert FAILED';
	}
	*/

}

?>

<html>

<head>
	<title> Results </title>

	<link rel="stylesheet" type="text/css" href="../css/ResultsStyle.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>


<!--********************************* STICKY TOPBAR **************************-->

<div id = "sidebar" style="top:2%; left: 6%;">
	<div>
		<div><p class = "menu"><img src="../images/empty.png" class = "icon"></p></div>
		<div><a href = "../php/profile.php"><p class = "menu"><img src="../images/profile.png" class = "icon zoom"></p></a></div>
		<div><a href = "../php/home.php"><p class = "menu"><img src="../images/search.png" class = "icon zoom"></p></a></div>
		<div><a href='logout.php'><p class = "menu"><img src="../images/logout.png" class = "icon zoom"></p></a></div>
	</div>
</div>

<div id = "sidebarSecond">

</div>


<!--******************************* STICKY TOPBAR END **************************-->


<div id = "pagewrapper">

<?php 

	$num_rows = mysqli_num_rows($data);

	if($num_rows == 0){
		?>
		<div class="col-12 breakrow"></div>
		<div class="col-12 breakrow"></div>
		<div class="col-12 breakrow"></div>
		<center>
		<div class="col-12">
			<h1 id="resTitleText" align="center"><a href="#" class="effect-underline">Unfortulately... <br> we found no matches for your requirements :(</a></h1>
		</div>
		</center>

		<?php
		exit();
	}else{ ?>
		<div class="col-12 breakrow"></div>
		<center>
		<div class="col-12">
			<h1 id="resTitleText" align="center"><a href="#" class="effect-underline">You may want to consider...</a></h1>
		</div>
		</center>
<?php

	}
?>




<div class="col-12 breakrow"></div>

<div class="row"> 

<div class="col-2 empty"></div>

<?php 
	while($row = mysqli_fetch_array($data)){
		$itemsID[$counter] = $row['id'];
		$counter = $counter + 1;

		$title = $row['name'];
		$itemDesc = $row['description'];
		$price = $row['price'];
		$imgSource = $row['photo_link'];
		
		


		?>
		<div class="col-3 option">

			<img src = '../images/<?php echo $imgSource?>' class="image">
			<div class = "itemTitle"> <?php echo $title?> </div>
			<div class = "itemDescription"> <?php echo $itemDesc?></div>
			<div class="priceTxt"><?php echo $price?> $</div>
			<form action = "<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
				<button onclick="add()" class = "button" name = "add" value = "
				<?php echo $itemsID[$counter - 1]; ?>" >

					<div class = "buttonText">I'd like this!</div>

				</button>
			</form>

		</div>

		
	<?php
		if($row = mysqli_fetch_array($data)){
			$itemsID[$counter] = $row['id'];
			$counter = $counter + 1;

			$title = $row['name'];
			$itemDesc = $row['description'];
			$price = $row['price'];
			$imgSource = $row['photo_link'];
			
			
	?>
	
		<div class="col-2 empty"></div>
		<div class="col-3 option">
			<img src = '../images/<?php echo $imgSource?>' class="image">
			<div class = "itemTitle"> <?php echo $title?> </div>
			<div class = "itemDescription"> <?php echo $itemDesc?></div>
			<div class="priceTxt"><?php echo $price?> $</div>
				<form action = "<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
				<button onclick="add()" class = "button" name = "add" value = "
				<?php echo $itemsID[$counter - 1]; ?>" >

					<div class = "buttonText">I'd like this!</div>

				</button>
			</form>

			</div>
		<?php } ?> 

		<div class="col-12 breakrow"></div>
		<div class="row"> 

<div class="col-1 empty"></div>
<?php } ?> 
<div class="col-2">
<form action="" method="post">
    <input type="submit" name="someAction1" value="FormatXML" />
	<input type="submit" name="someAction2" value="FormatHTML" />
    <input type="submit" name="someAction3" value="FormatJSON" />
	<input type="submit" name="someAction4" value="FormatCSV" />

</form>
</div>
<?php

session_start();
	$use = $_SESSION['use'];
$id= array();
$nume=array();
//$des=array();
//$photo_link=array();
//$price=array();

 $sql =mysqli_query( $dbconn,"SELECT id,name,description,photo_link,price from souvenirs");
 $row = mysqli_fetch_array($sql);

while ($row = $sql->fetch_array(MYSQLI_ASSOC))
{
   array_push($id, $row["id"]);
   array_push($nume, $row["name"]);
   //array_push($des, $row["description"]);
  // array_push($photo_link, $row["photo_link"]);
   //array_push($price, $row["price"]);
}

 

  

   
 if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction1']))
    {
        XML($id,$nume);
    }
 
  if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction2']))
    {
        HTML();
    }
 if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction3']))
    {
        JSON();
    }
 if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction4']))
    {
        CSV();
    }

		
 function XML($id,$nume){
	
	$filePath = 'book.xml';

   $dom = new DOMDocument('1.0', 'utf-8'); 
   $root = $dom->createElement('suveniruri'); 
   
    for($x=0;$x<count($id);$x++){
		
	$suvid=$id[$x];
	$suvname=$nume[$x];
	//$suvdes=$des[$x];
	//$suvphoto=$photo_link[$x];
	//$suvprice=$price[$x];
	

	
	$book = $dom->createElement('suvenir');
    $ID= $dom->createElement('id', $suvid); 
    $book->appendChild($ID); 
	$NUME=$dom->createElement('nume', $suvname); 
	$book->appendChild($NUME);
	//$DESCRIPTION=$dom->createElement('description', $suvdes); 
	//$book->appendChild($DESCRIPTION);
	//$PHOTO=$dom->createElement('link_photo', $suvphoto); 
	//$book->appendChild($PHOTO);
	//$PRICE=$dom->createElement('price', $suvprice); 
	//$book->appendChild($PRICE);
 $dom->appendChild($book); 
   }
   
   $dom->appendChild($root); 
   $dom->save($filePath); 
}

 function HTML(){
	
	
     echo "FormatHTML";

     
     
 } 
  function JSON(){
	
	
     echo "FormatJSON";

     
     
 } 
  function CSV(){
	
	
     echo "FormatCSV";

     
     
 } 
?>
</div>
</body>
</html>