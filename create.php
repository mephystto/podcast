<?php
session_start();
include_once("db.php");
?>
<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script type="text/javascript" src='js/bootstrap.min.js'></script>
<link rel="stylesheet" href="css/bootstrap.css" />
<meta name="author" content="mephystto">
<title></title>
</head>
<body style="background: rgb(238,238,238)">
<?php
if(isset($_SESSION['email']) && $_SESSION['password']){
		
}else{
echo "<div class='alert alert-danger' role='alert'>
  Please <a href='login.php'>loggin!</a>
</div>";
	return;	
}
$email = $_SESSION['email'];
$sqlsource = "SELECT * FROM users WHERE email='$email'";
$resultsource = $connsource->query($sqlsource);
$rowsource = $resultsource->fetch_assoc();
$source = $rowsource['name'];  
$rank = $rowsource['rank'];
if($rowsource['rank'] == "Member"){
echo "<div class='alert alert-danger' role='alert'>
  You don't have permision to <a href='index2.php'>proceed</a>
</div>";
	return;		
}
if($rowsource['status'] == "Banned"){
	echo "<div class='alert alert-danger' role='alert'>
  Your account is currently banned.
</div>";
	return;
}
?>


<?php
include_once("nav.php");
?>

<style>
.panel{
	margin-top:64px;
	margin-left:20px;
	margin-right:20px;
}
</style>



<?php	

	

	

	$error0 = "form-control mt-2";
	$error1 = "form-control mt-2";
	$error2 = "form-control mt-2";
	$error3 = "form-control mt-2";
	$error4 = "custom-select mr-sm-2";
	$error5 = "custom-select mr-sm-2";	
	$error6 = "form-control";
	$error7 = "custom-select mr-sm-2";
	$error8 = "custom-file-input";
	
	$x = array(
	"AFG",
	"ALA",
	"ALB",
	"DZA",
	"ASM",
	"AND",
	"AGO",
	"AIA",
	"ATA",
	"ATG",
	"ARG",
	"ARM",
	"ABW",
	"AUS",
	"AUT",
	"AZE",
	"BHS",
	"BHR",
	"BGD",
	"BRB",
	"BLR",
	"BEL",
	"BLZ",
	"BEN",
	"BMU",
	"BTN",
	"BOL",
	"BES",
	"BIH",
	"BWA",
	"BVT",
	"BRA",
	"IOT",
	"BRN",
	"BGR",
	"BFA",
	"BDI",
	"KHM",
	"CMR",
	"CAN",
	"CPV",
	"CYM",
	"CAF",
	"TCD",
	"CHL",
	"CHN",
	"CXR",
	"CCK",
	"COL",
	"COM",
	"COG",
	"COD",
	"COK",
	"CRI",
	"CIV",
	"HRV",
	"CUB",
	"CUW",
	"CYP",
	"CZE",
	"DNK",
	"DJI",
	"DMA",
	"DOM",
	"ECU",
	"EGY",
	"SLV",
	"GNQ",
	"ERI",
	"EST",
	"ETH",
	"FLK",
	"FRO",
	"FJI",
	"FIN",
	"FRA",
	"GUF",
	"PYF",
	"ATF",
	"GAB",
	"GMB",
	"GEO",
	"DEU",
	"GHA",
	"GIB",
	"GRC",
	"GRL",
	"GRD",
	"GLP",
	"GUM",
	"GTM",
	"GGY",
	"GIN",
	"GNB",
	"GUY",
	"HTI",
	"HMD",
	"VAT",
	"HND",
	"HKG",
	"HUN",
	"ISL",
	"IND",
	"IDN",
	"IRN",
	"IRQ",
	"IRL",
	"IMN",
	"ISR",
	"ITA",
	"JAM",
	"JPN",
	"JEY",
	"JOR",
	"KAZ",
	"KEN",
	"KIR",
	"PRK",
	"KOR",
	"KWT",
	"KGZ",
	"LAO",
	"LVA",
	"LBN",
	"LSO",
	"LBR",
	"LBY",
	"LIE",
	"LTU",
	"LUX",
	"MAC",
	"MKD",
	"MDG",
	"MWI",
	"MYS",
	"MDV",
	"MLI",
	"MLT",
	"MHL",
	"MTQ",
	"MRT",
	"MUS",
	"MYT",
	"MEX",
	"FSM",
	"MDA",
	"MCO",
	"MNG",
	"MNE",
	"MSR",
	"MAR",
	"MOZ",
	"MMR",
	"NAM",
	"NRU",
	"NPL",
	"NLD",
	"NCL",
	"NZL",
	"NIC",
	"NER",
	"NGA",
	"NIU",
	"NFK",
	"MNP",
	"NOR",
	"OMN",
	"PAK",
	"PLW",
	"PSE",
	"PAN",
	"PNG",
	"PRY",
	"PER",
	"PHL",
	"PCN",
	"POL",
	"PRT",
	"PRI",
	"QAT",
	"REU",
	"ROU",
	"RUS",
	"RWA",
	"BLM",
	"SHN",
	"KNA",
	"LCA",
	"MAF",
	"SPM",
	"VCT",
	"WSM",
	"SMR",
	"STP",
	"SAU",
	"SEN",
	"SRB",
	"SYC",
	"SLE",
	"SGP",
	"SXM",
	"SVK",
	"SVN",
	"SLB",
	"SOM",
	"ZAF",
	"SGS",
	"SSD",
	"ESP",
	"LKA",
	"SDN",
	"SUR",
	"SJM",
	"SWZ",
	"SWE",
	"CHE",
	"SYR",
	"TWN",
	"TJK",
	"TZA",
	"THA",
	"TLS",
	"TGO",
	"TKL",
	"TON",
	"TTO",
	"TUN",
	"TUR",
	"TKM",
	"TCA",
	"TUV",
	"UGA",
	"UKR",
	"ARE",
	"GBR",
	"USA",
	"UMI",
	"URY",
	"UZB",
	"VUT",
	"VEN",
	"VNM",
	"VGB",
	"VIR",
	"WLF",
	"ESH",
	"YEM",
	"ZMB",
	"ZWE");
	
	
	
	if(isset($_POST['post'])){	  
		$error = false;
		$email = strip_tags($_POST['email']);
		$email = mysqli_real_escape_string($db, $email);
		$email = substr($email, 0, 25);
		$email = strtolower($email);
		
		$password = strip_tags($_POST['password']);
		$password = mysqli_real_escape_string($db, $password);
		$password = substr($password, 0, 8);
		
		$name = strip_tags($_POST['name']);
		$name = mysqli_real_escape_string($db, $name);
		$name = substr($name, 0, 8);
		$name = strtolower($name);
		
		$age = strip_tags($_POST['age']);
		$age = mysqli_real_escape_string($db, $age);
		$age = substr($age, 0, 10);
		$age = str_replace('/', '-', $age);
		
		$country = strip_tags($_POST['country']);
		$country = mysqli_real_escape_string($db, $country);
		$country = substr($country, 0, 3);
		
		$privacy = strip_tags($_POST['privacy']);
		$privacy = mysqli_real_escape_string($db, $privacy);
		$privacy = substr($privacy, 0, 6);
		
		$about = strip_tags($_POST['about']);
		$about = mysqli_real_escape_string($db, $about);
		$about = substr($about, 0, 150);
		
		$rank = strip_tags($_POST['rank']);
		$rank = mysqli_real_escape_string($db, $rank);
		$rank = substr($rank, 0, 6);
		
		
		$target_file = "videos/" . basename($_FILES["fileToUpload"]["name"]);
		$extension = pathinfo($target_file,PATHINFO_EXTENSION);
		
		$date = date("m.d.y");
		$token_path = bin2hex(openssl_random_pseudo_bytes(16)).".".$extension;//extensão
		$status = "Normal";
		$sql = "INSERT IGNORE into users (email, password, name, age, country, privacy, about, rank, thumb, joindate, status, token) VALUES ('$email', '$password', '$name', '$age', '$country', '$privacy', '$about', '$rank', '$token_path', '$date', '$status', '$token_path')";
		
		


		$sqlsource = "SELECT * FROM users";
		$resultsource = $db->query($sqlsource);
		$rowsource = $resultsource->fetch_assoc();
		while($row = $resultsource->fetch_assoc()){
		$source = $row['email'];
		$namecheck = $row['name'];
		if($namecheck == $name){
		$error = true;
		$error2 = "form-control mt-2 is-invalid";
		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $email == $source){
		$error = true;
		$error0 = "form-control mt-2 is-invalid";
		}

		}
		
		
		if(strlen($name) < 4 || strlen($name) == "" || strlen($name) > 8 || !preg_match("/^[a-z0-9._ ]+$/i",$name)){
			$error = true;
			$error2 = "form-control is-invalid";
		}
		
		if(strlen($password) < 6 || strlen($password) == "" || strlen($password) > 20){
			$error = true;
			$error1 = "form-control is-invalid";
			
		}
		
		
		if(strlen($age) < 10 || strlen($age) == "" || strlen($age) > 10 || !preg_match("/^(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])-[1-9]{4}$/",$age)){
			$error = true;
			$error3 = "form-control is-invalid";
			
		}
		
		
		include_once('countryval.php');
		
		if($country == ""){
			$error = true;
			$error4 = "custom-select mr-sm-2 is-invalid";
		}
		
		
		if(strlen($privacy) < 6 || strlen($privacy) == "" || strlen($privacy) > 6 || $privacy != "Closed" && $privacy != "Public"){
			$error = true;
			$error5 = "custom-select mr-sm-2 is-invalid";
			
		}
		
		if(strlen($about) < 20 || strlen($about) == "" || strlen($about) > 150){
			$error = true;
			$error6 = "form-control is-invalid";
			
		}
		
		if(strlen($rank) < 5 || strlen($rank) == "" || strlen($rank) > 6 || $rank != "Owner" && $rank != "Member"){
			$error = true;
			$error7 = "custom-select mr-sm-2 is-invalid";
			
		}
		
		
		
		if($error == true){
		}else{

		if(isset($_FILES["fileToUpload"]["name"])){
		$target_file = "videos/" . basename($_FILES["fileToUpload"]["name"]);
		}
		$extension = pathinfo($target_file,PATHINFO_EXTENSION);
		if($target_file == "" || $extension == "" || $extension != "jpg" && $extension != "png" && $extension != "gif"){
		$error = true;
		$error8 = "custom-file-input is-invalid";	
		}else{
		if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)){                                                            
		$token_file = "videos/" . basename($_FILES["fileToUpload"]["name"]);                     
		$fn = $token_file;                                                         
		$newfn = $token_path;                                                      
		if(rename($fn,$newfn)){                                                    
		echo "<script>alert('Everything settled up.');</script>"; 		           
		}else{                                                                     
		 echo 'An error occurred during renaming the file';                        
		                                                                           
		}
		mysqli_query($db, $sql);
		}		                                                                          
		}   
		}		
				                                          
	}
	
	
	

?>
<div class="panel">
<form action="create.php" method="post" enctype="multipart/form-data">

<div class="form-group">
		<input class="<?php echo $error0?>" id="colFormLabelsm" maxlength="25" placeholder="Email" name="email" type="text" autofocus size="48">
		</div>
<div class="form-group">		
		<input class="<?php echo $error1?>" id="colFormLabelsm" maxlength="20" placeholder="Password" name="password" type="password" autofocus size="48">
		</div>
<div class="form-group">		
		<input class="<?php echo $error2?>" id="colFormLabelsm" maxlength="8" placeholder="Username" name="name" type="text" autofocus size="48">
		</div>
<div class="form-group">		
		<input name="age" type="text" class="<?php echo $error3?>" maxlength="10" placeholder="Date Of Birth: mm/dd/yyyy">
		</div>
					
<div class="form-group">
<select name="country" class="<?php echo $error4?>" maxlength="3" id="inlineFormCustomSelect">
		<option value="">Country...</option>
		<?php 
		for($row=0;$row<count($x);$row++)	
		echo "<option value='$x[$row]'>$x[$row]</option>";
		?>
		
</select>
</div>

		
<div class="form-group">		
	<select name="privacy" class="<?php echo $error5?>" maxlength="6" id="inlineFormCustomSelect">
        <option value="">Privacy...</option>
        <option value="Public">Public</option>
        <option value="Closed">Closed</option>
      </select>
		</div>
<div class="form-group">			
		<textarea class="<?php echo $error6?>" id="exampleFormControlTextarea1" rows="3" maxlength="150" placeholder="About" name="about" rows="20" cols="50"></textarea>
		</div>
<div class="form-group">		
	<select name="rank" class="<?php echo $error7?>" maxlength="6" id="inlineFormCustomSelect">
	<option value="">Rank...</option>
	<option value="Owner">Owner</option>	
	<option value="Member">Member</option>
	</select>
	</div>
		
		
		<!--<select name="tag">
		<--<option value="Amateur">Amateur</option>
		<--<option value="Asian">Asian</option>
		<--<option value="Big Tits">Big Tits</option>
		<--<option value="Crossdresser">Crossdresser</option>
		<--<option value="Cumshot">Cumshot</option>
		<--<option value="Futanari">Futanari</option>
		<--<option value="Gangbang">Gangbang</option>
		<--<option value="Ladyboy">Ladyboy</option>
		<--<option value="Mature">Mature</option>
		<--<option value="Pov">Pov</option>
		<--<option value="Sex Toys">Sex Toys</option>
		<--<option value="Solo">Solo</option>
		<--<option value="Teen">Teen</option>
		<--</select>-->
		<div class="custom-file">
		<input type="file" name="fileToUpload" class="<?php echo $error8?>" id="customFile">
		<label class="custom-file-label" for="customFile">Thumbnail</label>
		</div>
	
		<div class="form-group mt-3">
		<button name="post" type="submit" class="btn btn-primary mb-2">Submit</button>
		</div>
	</form>


</div>		
</body>
</html>		