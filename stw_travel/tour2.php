<?php 

session_start();
 
?>
<?php
if(!(isset($_GET["cat"]))){
	header("Location:tour.php");
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
<div style="margin-top: 60px">
<div  style="background-color:black;color:white;" id="dis">
<br>

<script>
	
	sh();
function sh(){
		var url_string = window.location.href;
		//alert(url_string)
		var url = new URL(url_string);
		var cat = url.searchParams.get("cat");
		var m =document.getElementById('dis');
		//alert(cat);

		var form_data = new FormData();    	
		form_data.append("file", cat);
    //alert(form_data);
    $.ajax({
        url: "check/tcatdis.php",
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(php_script_response){
        	//alert(php_script_response);
        	m.innerHTML=php_script_response;
        }
    });
    			

    }
 </script>
<br>
</div>
<br>
<div id="dis2">

	<script>
	
	sha();
	function sha(){
		var url_string = window.location.href;
		//alert(url_string)
		var url = new URL(url_string);
		var cat = url.searchParams.get("cat");
		var m =document.getElementById('dis2');
		//alert(cat);

		var form_data = new FormData();    	
		form_data.append("file", cat);
    //alert(form_data);
    $.ajax({
        url: "check/tboxdis.php",
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(php_script_response){
        	//alert(php_script_response);
        	m.innerHTML+=php_script_response;

        	var edbutv=document.getElementById('edbutv').value;
	           var edbu =document.getElementsByClassName('edbu');
				var x=edbu.length;
				//alert(x);
				if(edbutv=="ok"){

					edbut.style.display="block";
					for (var i = 0; i < x; i++) {
						edbu[0].className='edbu';
						//alert(i);
					}
		
				}
				else if(edbutv=="no"){
					edbut.style.display="none";
						for (var i = 0; i < x; i++) {
							edbu[0].className="edb";
						}
		
				}
        }
    });
    			

    }
 </script>
	

<script type="text/javascript">
	function moin(id){
		var a= document.getElementById(id);
		a.style.opacity=0.5;
	}
	function moout(id){
		var a= document.getElementById(id);
		a.style.opacity=1;
	}
	function del(imid) {
		//var ca= cate.toUpperCase();
		if (confirm("Are you want to delete this tour!") == true) {
        	var form_data = new FormData();
		    form_data.append("id", imid);
		    //alert(form_data);
		    $.ajax({
		        url: "insert/deltour.php",
		        dataType: 'script',
		        cache: false,
		        contentType: false,
		        processData: false,
		        data: form_data,                         
		        type: 'post',
		        success: function(php_script_response){
		        	 location.reload();
		        	alert(php_script_response);
		           
		           
					
		        }
		    });
    	}


		
	}
	function show(imid) {
				var form_data = new FormData();
				$.ajax({
		        		url: "insert/logch.php",
		        		dataType: 'script',
		        		cache: false,
		        		contentType: false,
		        		processData: false,
		        		data: form_data,                         
		        		type: 'post',
		        		success: function(php_script_response){
		        		 //location.reload();
		        			if(php_script_response=="ok"){
		        				al(imid);
		        			}
		           			else{
		           				alert("please log in first");
		           			}
		           
					
		        		}
		    		});
		
		
		
	}
	function al(kl) {
		if (confirm("Are you want to pay this tour!") == true) {
        			var form_data = new FormData();
		    		form_data.append("id", kl);
		    //alert(form_data);
		    		$.ajax({
		        		url: "insert/pay_tour.php",
		        		dataType: 'script',
		        		cache: false,
		        		contentType: false,
		        		processData: false,
		        		data: form_data,                         
		        		type: 'post',
		        		success: function(php_script_response){
		        		 //location.reload();
		        			if(php_script_response=="ok"){
		        				alert("your booking add to cart pay it");
		        			}
		        			else{
		        				alert("can't add cart pleace try again");
		        			}
		           
		           
					
		        		}
		    		});
		}
	}


</script>
</div>
<br>
<br>
<br>
<br>
<br>
<?php
include ("include/footer.php");
?>
</body>
</html>