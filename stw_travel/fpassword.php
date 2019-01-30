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
<script src="script/md5.min.js"></script>
<script src="jquery/jquery-3.2.1.js"></script>
</head>

<body>

<?php include ("include/header_singup.php"); ?>


<form class="modal-content animate" action="check/passreset.php" method="post" onsubmit="return ch();">

<div class="container">
      <label><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" id="email" oninput="checkemail()" required>
	<div id="val" style="font-size: 28px"></div>
	<br><br><br><br>
	<table width="50%" align="center"><tr><td><input type="submit" name="reset" value="Send"></td></tr></table>

</div>
</form>

<script type="text/javascript">
	function ch() {
		var a=document.getElementById('val').innerHTML;
		if(a.match(/ok/gi)){

			return true;
     	
    	}
    	else{
    		alert("this email is not in our DB");
    		return false;
    	}
	}
	function checkemail(){
	
	//alert("ppp");
	var val = document.getElementById("val");
	var u = document.getElementById("email").value;
	
	if(u != ""){
		val.innerHTML = 'checking...';
		var hr = new XMLHttpRequest();
		hr.open("POST", "check/copy_email_check.php", true);
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		hr.onreadystatechange = function() {
			if(hr.readyState == 4 && hr.status == 200) {
				var k = hr.responseText;
				val.innerHTML = k;
				passValidation();
				//alert(k);
			}
		}
        var v = "email="+u;
        hr.send(v);
	}
	else{
		val.innerHTML="";
	}
	
}
</script>
<?php
include ("include/footer.php");
?>
</body>
</html>