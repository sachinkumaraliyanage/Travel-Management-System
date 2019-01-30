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
 ?>

<center><font  color="Black"  size="7" > About Us </font></p></center>
<div align="center">
STW Tours is a Sri Lankan owned and operated company that has been helping visitors to discover and enjoy Sri Lanka for over 5 years. Our expertise is unparalleled and our knowledge of Sri Lanka unequalled. We take care of all details for your visit, whether you are a solo traveller, a couple on holiday or honeymoon, a group of friends or convention delegates, or visitors seeking activity or wellness holidays. Whatever your interest, whether sheer pleasure, extreme sport, trekking or bicycling, wild life, ancient or colonial culture, scenic tours, tropical cuisine or Ayurveda therapy, we can arrange a tour from arrival to departure to please you, utilising vehicles that are part of Asia’s first carbon-neutral transport fleet. We can organise every kind of accommodation, from jungle cabanas and private villa’s to plush boutique retreats and contemporary luxury hotels. We are renowned for our long-established high standards of service and guest commitment.
<br>

STW Tours believes in a better future and thus invests heavily on sustainability and eco-friendly practices. We are the only ISO 9001 and 14000 certified company armed with the only Carbon Neutral vehicle fleet in Asia. With the aid of professional consultants we have assessed our carbon footprint and have invested in credible carbon credits. We are also the only DMC to have a dedicated Disaster Recovery Site. Meaning that in the rare unforeseen event of a catastrophe, we have the ability to continue operations at a remote location. Our Business Continuity Plans are reviewed regularly by consultants who are qualified by the Disaster Management Institute of the United States. We have taken every necessary step to ensure a smooth continuous flow of operations.
<br>

We are also the only DMC to have a comprehensive global (excluding US & Canada) tour operator liability insurance policy that covers up to USD 1 Million for all our guests in the event of a crisis. This policy is secured by Chartis Insurance USA a subsidiary of American International Group, Inc. 
<br>


STW Tours is owned by Sri Lanka’s largest conglomerate John Keells Holdings PLC (JKH), which has the highest market capitalization on the Colombo Stock Exchange in excess of USD 2 Billion. JKH is a full member of the World Economic Forum, and having issued Global Depository Receipts on the Luxemburg Stock Exchange, was the first Sri Lankan company to be listed overseas. Being a Member of the Global Compact – the UN-sponsored international corporate citizenship initiative – JKH is also committed to sustainable development and greater social responsibility in a multi-stakeholder context. Ranked first in LMD’s “Most Respected Entities in Sri Lanka” survey for a record nine years including in 2014, JKH owns the award winning Cinnamon and Chaaya chains of hotels which are strategically located across Sri Lanka as well as the Maldives.
<br>

</div>
</body>
</html>