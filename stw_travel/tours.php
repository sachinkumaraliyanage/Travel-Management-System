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
<link rel="stylesheet" type="text/css" href="css/hotel 3.css">
<link rel="stylesheet" type="text/css" href="css/gal.css">
<script src="jquery/jquery-3.2.1.js"></script>
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
		echo " <script>alert ('tour Add sucsessfuly');</script>";
	}
	else if($_GET["add"]=="no"){
		#echo "liyanage";
		echo " <script>alert ('can not add tour try again');</script>";
	}
}
 ?>
 <div align="center " style="margin-left: 40%;">
<ul class="uu">

<li class="lll" id=edbut><a class="aa" href="addtour.php" "> Add </a></li>

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
<h1 style="color: red">SRI LANKA TOURS</h1>
<p>
	Touring Sri Lanka is easy when you leave all the arrangements to STW Tours. Our guides and chauffeurs have an impressive knowledge of all aspects of this incredible country. They know which places you will find, fascinating, based on your special interests, and they appreciate that the decision is yours regarding what you want to do. We can arrange exclusive tours which let you discover the best of Sri Lanka by car, for one or two passengers, or by passenger van, for a family or group of friends. Our guides are enthusiastic and experienced at looking after foreign guests. They speak English as well as other languages and are happy to introduce you to local etiquette and customs. You can confidently leave everything to us so that your tour in Sri Lanka is enjoyable and rewarding, giving you a memorable insight into the country.


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
							<td width="50%" style="background-image: url('img/p/Ayurvedic-Tours1.jpg'); background-size: cover;" id="a1" onmouseenter="moin(this.id)" onmouseout="moout(this.id)">
								<div class="arrow"></div>
							</td>
							<td valign="top" align="center" >
								<h2 align="center">AYURVEDIC TOURS</h2>
								<span style="background-color: #FFFF00;color:red;font-size:16px;">PRICE ON REQUEST</span>
								<p>Ayurveda is an ancient, traditional wellness therapy based on harmonious balance within the body achieved through herbal diet and massage treatment</p>
								<a class="lo" href="tour2.php?cat=AYURVEDIC TOURS" >FIND OUT MORE</a>
								<br><br>
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
							<td width="50%" style="background-image: url('img/p/images.jpg'); background-size: cover;" id="a2" onmouseenter="moin(this.id)" onmouseout="moout(this.id)">
								<div class="arrow"></div>
							</td>
							<td valign="top" align="center" >
								<h2 align="center">BEACH TOURS</h2>
								<span style="background-color: #FFFF00;color:red;font-size:16px;">PRICE ON REQUEST</span>
								<p>We know the best beaches, hidden bays and secret coves for sunbathing, swimming or surfing to reward you with an unforgettable beach holiday</p>
								<a class="lo" href="tour2.php?cat=BEACH TOURS" >FIND OUT MORE</a>
								<br><br>
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
							<td width="50%" style="background-image: url('img/p/images (3).jpg'); background-size: cover;" id="a3" onmouseenter="moin(this.id)" onmouseout="moout(this.id)">
								<div class="arrow"></div>
							</td>
							<td valign="top" align="center" >
								<h2 align="center">CULTURAL TOURS</h2>
								<span style="background-color: #FFFF00;color:red;font-size:16px;">PRICE ON REQUEST</span>
								<p>Our cultural tours are conducted by guides knowledgeable in all aspects of the island’s history, enabling you to realise our unique heritage</p>
								<a class="lo" href="tour2.php?cat=CULTURAL TOURS" >FIND OUT MORE</a>
								<br><br>
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
							<td width="50%" style="background-image: url('img/p/ceylon-tea-trails-l.jpg'); background-size: cover;" id="a4" onmouseenter="moin(this.id)" onmouseout="moout(this.id)">
								<div class="arrow"></div>
							</td>
							<td valign="top" align="center" >
								<h2 align="center">HILL COUNTRY TOURS</h2>
								<span style="background-color: #FFFF00;color:red;font-size:16px;">PRICE ON REQUEST</span>
								<p>The hill country of Sri Lanka reflects the aspirations of 19th & 20th century British colonisers to create a home away from home.</p>
								<a class="lo" href="tour2.php?cat=HILL COUNTRY TOURS" >FIND OUT MORE</a>
								<br><br>
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
							<td width="50%" style="background-image: url('img/p/Sri-Lanka-Tours-Wildlife-Tours-600px.jpg'); background-size: cover;" id="a5" onmouseenter="moin(this.id)" onmouseout="moout(this.id)">
								<div class="arrow"></div>
							</td>
							<td valign="top" align="center" >
								<h2 align="center">WILDLIFE & ADVENTURE TOURS</h2>
								<span style="background-color: #FFFF00;color:red;font-size:16px;">PRICE ON REQUEST</span>
								<p>Sri Lanka is ideal for wildlife tours whether visiting National Parks to view elephants, jungle trekking, whale watching or even white-water rafting</p>
								<a class="lo" href="tour2.php?cat=WILDLIFE & ADVENTURE TOURS" >FIND OUT MORE</a>
								<br><br>
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
							<td width="50%" style="background-image: url('img/p/lanka-honeymoon75.jpg'); background-size: cover;" id="a6" onmouseenter="moin(this.id)" onmouseout="moout(this.id)">
								<div class="arrow"></div>
							</td>
							<td valign="top" align="center" >
								<h2 align="center">HONEYMOON TOURS</h2>
								<span style="background-color: #FFFF00;color:red;font-size:16px;">PRICE ON REQUEST</span>
								<p>Private beach villas, secluded colonial bungalows, and luxurious hotel suites make Sri Lanka an ideal destination for honeymoons and weddings.</p>
								<a class="lo" href="tour2.php?cat=HONEYMOON TOURS" >FIND OUT MORE</a>
								<br><br>
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
							<td width="50%" style="background-image: url('img/p/Experiences-Excursions.jpg'); background-size: cover;" id="a7" onmouseenter="moin(this.id)" onmouseout="moout(this.id)">
								<div class="arrow"></div>
							</td>
							<td valign="top" align="center" >
								<h2 align="center">EXPERIENCES & EXCURSIONS</h2>
								<span style="background-color: #FFFF00;color:red;font-size:16px;">PRICE ON REQUEST</span>
								<p>Whatever your interests our specialists can arrange a tour of memorable experiences or intriguing excursions to make your holiday rewarding</p>
								<a class="lo" href="tour2.php?cat=EXPERIENCES & EXCURSIONS" >FIND OUT MORE</a>
								<br><br>
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
							<td width="50%" style="background-image: url('img/p/Asian-Escapes-Home-banner-bg4-.jpg'); background-size: cover;" id="a8w" onmouseenter="moin(this.id)" onmouseout="moout(this.id)">
								<div class="arrow"></div>
							</td>
							<td valign="top" align="center" >
								<h2 align="center">LUXURY TOURS</h2>
								<span style="background-color: #FFFF00;color:red;font-size:16px;">PRICE ON REQUEST</span>
								<p>Simply let us know what you would like to see and do, and we will prepare a secure, safe, exclusive tour based on your personal requirements.</p>
								<a class="lo" href="tour2.php?cat=LUXURY TOURS" >FIND OUT MORE</a>
								<br><br>
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