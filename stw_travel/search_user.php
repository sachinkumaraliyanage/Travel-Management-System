<?php 

session_start();
 
?>
<?php
if(isset($_GET["edit"])){
	#echo "sachin";
	if($_GET["edit"]=="ok"){
		#echo "liyanage";
		echo " <script>alert ('Edit add your profile sucsessfuly');</script>";
	}
	else if($_GET["edit"]=="no"){
		#echo "liyanage";
		echo " <script>alert ('can not edit  profile please try again');</script>";
	}
}
if(isset($_GET["del"])){
	#echo "sachin";
	if($_GET["del"]=="ok"){
		#echo "liyanage";
		echo " <script>alert ('sucsessfuly delete profile');</script>";
	}
}
?>
<?php

if(!(isset($_SESSION['ulavel']))){
	header("Location:index.php");
}
else if($_SESSION['ulavel']==null||$_SESSION['ulavel']==""||$_SESSION['ulavel']=="customer"){
	header("Location:index.php");
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>STW Travel</title>
<link rel="icon" type="image/png" href="img/icon/icon.png">
<link rel="stylesheet" type="text/css" href="css/hedermenu.css">
<link rel="stylesheet" type="text/css" href="css/slidphoto.css">
<link rel="stylesheet" type="text/css" href="css/side_navigation.css">
<link rel="stylesheet" type="text/css" href="css/singup.css">
<link rel="stylesheet" type="text/css" href="css/search_user.css">
<script src="script/md5.min.js"></script>
<script src="jquery/jquery-3.2.1.js"></script>

<script>
function showResult(str) {
	var vaa=document.getElementById('m').value;
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  
		var val = document.getElementById("livesearch");
		var u = str;
		
		if(u != ""){
			val.innerHTML = 'checking...';
			var hr = new XMLHttpRequest();
			hr.open("POST", "check/suser.php", true);
			hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			hr.onreadystatechange = function() {
				if(hr.readyState == 4 && hr.status == 200) {
					//val.innerHTML=this.responseText;
      				//val.style.border="1px solid #A5ACB2";
					var k = hr.responseText;
					val.innerHTML = k;
					
					
				}
			}
			if(vaa=='id'){
				var v = "seri="+u;
			}
			else if(vaa=='uname'){
				var v = "seru="+u;
			}
	        
	        hr.send(v);
		}
		else{
			val.innerHTML="";
		}
		
	
}
function show(uidd) {
	var ll="search_user2.php?id="+uidd;
		window.location.href=ll;
	
	
}
</script>

</head>
<body>
<?php include ("include/header_log_nomal.php"); ?>
<div class="container" align="center">
	<div class="form1" align="left">
		<form method="post" name="myform">
			<labal>Select Search Type :</labal><br>
				<input type="radio" name="type" value="id" style="margin-left: 130px" checked="true" onclick="sval(this.value)"> ID<br>
	  			<input type="radio" name="type" value="uname" style="margin-left: 130px" onclick="sval(this.value)"> User Name<br>
	  			<input type="checkbox" name="m" id="m" value="id" checked="true" hidden="true">
	  			<script type="text/javascript">
	  				function sval(va) {
	  					showResult("");
	  					document.getElementById('m').value=va;
	  					if(va=='id'){
	  						document.getElementById('se').setAttribute('type','number');
	  					}
	  					else if(va=='uname'){
	  						document.getElementById('se').setAttribute('type','text');
	  					}
	  				}
	  			</script>
	  		<label>Search : </label>
	  			<input type="number" name="ser" id="se" placeholder="Search" onchange ="showResult(this.value)" oninput="showResult(this.value)">
	  			<div id="livesearch"></div>	
		</form>
	</div>

</div>
<?php
include ("include/footer.php");
?>
<br><br><br>







</body>
</html>