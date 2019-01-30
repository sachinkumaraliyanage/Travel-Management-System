<?php 

session_start();
 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>STW Travel</title>
<link rel="icon" type="image/png" href="img/icon/icon.png">
<link rel="stylesheet" type="text/css" href="css/hedermenu.css">
<link rel="stylesheet" type="text/css" href="css/slidphoto.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" type="text/css" href="css/side_navigation.css">
<script src="jquery/jquery-3.2.1.js"></script>
<link rel="stylesheet" type="text/css" href="css/hotel 3.css">
<link rel="stylesheet" type="text/css" href="css/gal.css">
</head>

<body >
<?php 
#echo "kumara";
if(isset($_GET["login"])){
	#echo "sachin";
	if($_GET["login"]=="on"){
		#echo "liyanage";
		echo " <script>alert ('Now you can login');</script>";
	}
}

?>
<?php
//echo $_SESSION['uname'];
if(isset($_SESSION['uname'])){
	if($_SESSION['uname']==NULL ||$_SESSION['uname']==""){
		
		include ("include/header_nolog.php");
		
	}
	else{
		
		include ("include/header_log_nomal.php");
		
	}
}
else{
 include ("include/header_nolog.php");
}
if(isset($_GET["log"])){
	#echo "sachin";
	if($_GET["log"]=="error"){
		#echo "liyanage";
		echo " <script>alert ('can not log in retry');</script>";
	}
}
if(isset($_GET["sing"])){
	#echo "sachin";
	if($_GET["sing"]=="error"){
		#echo "liyanage";
		echo " <script>alert ('sing up link is expiar resing up');</script>";
	}
}
if(isset($_GET["mail"])){
	//echo "<br><br><br><br><br><br>";
	//echo "sachin";
	if($_GET["mail"]=="no"&&isset($_GET["error"])){
		$e=$_GET["error"];
		echo " <script>alert ('can not sen email retry \\n mail error : \\n".$e."');</script>";
		
	}
	else if($_GET["mail"]=="no"){
		
		echo " <script>alert ('can not sen email retry');</script>";
		
	}
	else if($_GET["mail"]=="ok"){
		echo " <script>alert ('Email send check your inbox');</script>";
	}
}
if(isset($_GET["edit"])){
	#echo "sachin";
	if($_GET["edit"]=="ok"){
		#echo "liyanage";
		echo " <script>alert ('Edit add your profile sucsessfuly please relogin');</script>";
	}
	else if($_GET["edit"]=="no"){
		#echo "liyanage";
		echo " <script>alert ('can not edit your profile please relogin and try again');</script>";
	}
}
if(isset($_GET["del"])){
	#echo "sachin";
	if($_GET["del"]=="ok"){
		#echo "liyanage";
		echo " <script>alert ('sucsessfuly delete your profile');</script>";
	}
}
if(isset($_GET["add"])){
	#echo "sachin";
	if($_GET["add"]=="ok"){
		#echo "liyanage";
		echo " <script>alert ('hotel Add sucsessfuly');</script>";
	}
	else if($_GET["add"]=="no"){
		#echo "liyanage";
		echo " <script>alert ('can not add hotel try again');</script>";
	}
}
 ?>

<div align="center " style="margin-left: 40%;">
<ul class="uu">

<li class="lll" id=edbut><a class="aa" href="addhotel.php" "> Add </a></li>

</ul>
</div>
<input type="checkbox" name="edbutv" id="edbutv" checked="true" hidden="true" value=<?php if(isset($_SESSION['ulavel'])){if($_SESSION['ulavel']!="admin"&&$_SESSION['ulavel']!="staff"){echo "no";}else{echo "ok";} }else{echo "no";}?>>
<script type="text/javascript">
	var edbut=document.getElementById('edbut');
	
	var edbutv=document.getElementById('edbutv').value;

	if(edbutv=="ok"){
		edbut.style.display="block";
	
		
	}
	else if(edbutv=="no"){
		edbut.style.display="none";
		
		
	}
	
</script>

<div  style="background-color:black;color:white;margin-top: 60px;">
<br>
<h1 style="color: red">HOTELS & RESORTS, BEST ACCOMMODATION IN SRI LANKA</h1>

<p>
	

Sri Lanka is exceptional as a holiday destination because every conceivable variety of accommodation, from Luxury Camping to glamorous Five-star Hotels can be found in the island. Sri Lanka also has special theme hotels such as Wellness and Ayurveda properties and contemporary or colonial boutique mansions and villas. The wide range of accommodation caters for every kind of visitor from budget-minded travellers to big spenders keen on enjoying the luxuries of life, from beach lovers to wild life enthusiasts, from extreme sport participants to golfers and cricket fans.



There are popular beach areas with top class hotels near the airport (at Negombo) and along the west coast (Beruwala, Bentota and Hikkaduwa) and further south as well as on the east coast at Trincomalee and Passikudah. The interior has splendid hotels (Kandy, Habarana) while Colombo has hotels equal to the world’s best with top notch restaurants and a sophisticated ambience.
</p>
<br>
</div>
<br>
<div>

	<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
		<tr>
			<td width="47.5%">
				<div class="row" >
					<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
						<tr>
							<td width="50%" style="background-image: url('img/imgth/exterior.jpg'); background-size: cover;" id="a1" onmouseenter="moin(this.id)" onmouseout="moout(this.id)">
								<div class="arrow"></div>
							</td>
							<td valign="top" align="center" >
								<h2 align="center">LUXURY HOTEL</h2>
								<p>Sri Lankan's luxury hotel properties are found in secluded places throughout the island and are havens of luxury.</p>
								<a class="lo" href="Hotel3.php?cat=Luxury Hotel" >READ MORE</a>
							</td>
						</tr>
					</table>
				</div>
			</td>
			<td width="5%">
			</td>
			<td width="47.5%">
				<div class="row" >
					<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
						<tr>
							<td width="50%" style="background-image: url('img/imgth/shangri-la-hambantota-sri-lanka-entrance-area.jpg'); background-size: cover;" id="a2" onmouseenter="moin(this.id)" onmouseout="moout(this.id)">
								<div class="arrow"></div>
							</td>

							<td valign="top" align="center" >
								<h2 align="center">VILLAS</h2>
								<p>A villa holiday in Sri Lanka with Walkers Tours guarantees the exclusivity of staying in a small property on your own or with just a few guests.</p>
								<a class="lo" href="Hotel3.php?cat=Villas" >READ MORE</a>
							</td>
						</tr>
					</table>
				</div>
			</td>
		</tr>
	</table>
<br>

<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
		<tr>
			<td width="47.5%">
				<div class="row" >
					<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
						<tr>
							<td width="50%" style="background-image: url('img/imgth/viewimg.jpg'); background-size: cover;" id="a3" onmouseenter="moin(this.id)" onmouseout="moout(this.id)">
								<div class="arrow"></div>
							</td>

							<td valign="top" align="center" >
								<h2 align="center">AYURWEDIC HOTELS</h2>
								<p>Sri Lankan's luxury hotel properties are found in secluded places throughout the island and are havens of luxury.</p>
								<a class="lo" href="Hotel3.php?cat=Ayurwedic Tours" >READ MORE</a>
							</td>
						</tr>
					</table>
				</div>
			</td>
			<td width="5%">
			</td>
			<td width="47.5%">
				<div class="row" >
					<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
						<tr>
							<td width="50%" style="background-image: url('img/imgth/d666ae4f8492d0519b1f07383d6fce98.jpg'); background-size: cover;" id="a4" onmouseenter="moin(this.id)" onmouseout="moout(this.id)">
								<div class="arrow"></div>
							</td>

							<td valign="top" align="center" >
								<h2 align="center">LUXURY CAMPING</h2>
								<p>Luxury camping in Sri Lanka with Walkers Tours is a novel way of enjoying the island’s scenic beauty as well as getting close to nature.</p>
								<a class="lo" href="Hotel3.php?cat=Luxury Camping" >READ MORE</a>
							</td>
						</tr>
					</table>
				</div>
			</td>
		</tr>
	</table>
<br>
		

<script type="text/javascript">
	function moin(id){
		var a= document.getElementById(id);
		a.style.opacity=0.5;
	}
	function moout(id){
		var a= document.getElementById(id);
		a.style.opacity=1;
	}
</script>

<?php
include ("include/footer.php");
?>
</body>
</html>