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
<img src="img/seat-in-coach3.jpg" width="100%" >
<?php
include ("include/footer.php");
?>
</body>
</html>