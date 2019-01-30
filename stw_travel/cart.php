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
<link rel="stylesheet" type="text/css" href="gal.css">
<link rel="stylesheet" type="text/css" href="singup.css">
<script src="jquery/jquery-3.2.1.js"></script>
<style>
.tale {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    font-size: 16px;
}

.d  {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    color:red;
     font-size: 16px;
}

.r:nth-child(even) {
    background-color: #dddddd;
}
</style>
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
<div id="dis2">
 <script type="text/javascript">
		sho();
		function sho(){
		var m =document.getElementById('dis2');
		 //var url_string = window.location.href;
		//var url = new URL(url_string);
		//var cat = url.searchParams.get("cat");
		//alert(cat);
		var form_data = new FormData();    
			//form_data.append("file",cat);
    //alert(form_data);

    $.ajax({
        url: "check/cartdis.php",
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(php_script_response){
        	//alert(php_script_response);
        	//m.innerHTML=php_script_response;
        	//var edbutv=document.getElementById('edbutv').value;
	          // var edbu =document.getElementsByClassName('edbu');
				//var x=edbu.length;
				//alert(x);
				dis2.innerHTML=php_script_response;
        }
    });
    			
    }


  </script>
<script>
	function can(id) {
		var form_data = new FormData();    
		form_data.append("can",id);
    //alert(form_data);

    $.ajax({
        url: "check/upay.php",
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(php_script_response){
        	location.reload();
        	alert(php_script_response);
        	//alert(php_script_response);
        	//m.innerHTML=php_script_response;
        	//var edbutv=document.getElementById('edbutv').value;
	          // var edbu =document.getElementsByClassName('edbu');
				//var x=edbu.length;
				//alert(x);
				//dis2.innerHTML=php_script_response;
        }
    });
	}
	function pay(id) {
		var form_data = new FormData();    
		form_data.append("pay",id);
		
    //alert(form_data);

    $.ajax({
        url: "check/upay.php",
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(php_script_response){
        	location.reload();
        	alert(php_script_response);
        	//m.innerHTML=php_script_response;
        	//var edbutv=document.getElementById('edbutv').value;
	          // var edbu =document.getElementsByClassName('edbu');
				//var x=edbu.length;
				//alert(x);
				//dis2.innerHTML=php_script_response;
        }
    });
	}
</script>
<?php
include ("include/footer.php");
?>

</body>
</html>