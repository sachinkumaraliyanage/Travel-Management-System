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
<link rel="stylesheet" type="text/css" href="css/gal.css">
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
if(isset($_GET["add"])){
	#echo "sachin";
	if($_GET["add"]=="ok"){
		#echo "liyanage";
		echo " <script>alert ('Photo Add sucsessfuly');</script>";
	}
	else if($_GET["add"]=="no"){
		#echo "liyanage";
		echo " <script>alert ('can not add photo try again');</script>";
	}
}
 ?>
<div class ="nav" align="center">
<ul class="uu">
<li class="lll"><a class="aa" id="ADVENTURE" onclick="set(this.id)"> ADVENTURE </a></li>
<li class="lll"><a class="aa" id="WILDLIFE" onclick="set(this.id)"> WILDLIFE </a ></li>
<li class="lll"><a class="aa" id="BEACHES " onclick="set(this.id)"> BEACHES </a></li>
<li class="lll"><a class="aa" id="LIFESTYLE" onclick="set(this.id)"> LIFESTYLE </a></li>
<li class="lll"><a class="aa" id="CULTURE" onclick="set(this.id)"> CULTURE </a></li>
<li class="lll"><a class="aa" id="OTHERS" onclick="set(this.id)"> OTHERS </a></li>
<li class="lll" id=edbut><a class="aa" href="addphoto.php" "> Add </a></li>


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
</ul>
</div >
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:100px">
  <tbody>
    <tr>
      <td>
      
      <div style="margin-top: 100px">
      <b><div align="center" style="font-size: 36px; color:#fff;" id="tit"></div></b><br>
      <div id="bo"></div>

<script type="text/javascript">
	set('ADVENTURE');
	function set(i) {
		document.getElementById('tit').innerHTML=i;
		setb(i);
	}

	function setb(j) {
	  var c= j.toLowerCase();
	  /*alert(j);
	  if(j=="ADVENTURE"){
	  	var c="adventure";
	  }
	      
	  else if(j=="WILDLIFE"){
	  	var c="wildlife";
	  }
	      
	  else if(j=="BEACHES"){
	  	var c="beaches";
	  }
	      
	  else if(j=="LIFESTYLE"){
	  	var c="lifestyle";
	  }
	     
	  else if(j=="CULTURE"){
	  	 var c="culture";
	  }
	     
	  else if(j=="OTHERS"){
	  	 var c="others";
	  }
	  else{
	  	var c="beaches";
	  }*/
	  //alert(c);
	  //alert(j+"     ,BEACHES");
		var form_data = new FormData();
	    form_data.append("cat", c);
	    //alert(form_data);
	    $.ajax({
	        url: "include/shphoto.php",
	        dataType: 'script',
	        cache: false,
	        contentType: false,
	        processData: false,
	        data: form_data,                         
	        type: 'post',
	        success: function(php_script_response){
	        	//alert(php_script_response);
	           document.getElementById('bo').innerHTML=php_script_response;
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
	function del(imid,cate) {
		var ca= cate.toUpperCase();
		if (confirm("Are you want to delete this image!") == true) {
        	var form_data = new FormData();
		    form_data.append("id", imid);
		    //alert(form_data);
		    $.ajax({
		        url: "insert/delphoto.php",
		        dataType: 'script',
		        cache: false,
		        contentType: false,
		        processData: false,
		        data: form_data,                         
		        type: 'post',
		        success: function(php_script_response){
		        	setb(ca);
		        	alert(php_script_response);
		           //document.getElementById('bo').innerHTML=php_script_response;
		           
					
		        }
		    });
    	}
		
	}
</script>
<div class="clearfix"></div>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close" onclick="clo()">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');
function dis(ima){
//var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById(ima);
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");

    modal.style.display = "block";
    modalImg.src = img.src;
    captionText.innerHTML = img.alt;
}

// Get the <span> element that closes the modal
//var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
 function clo() { 
    modal.style.display = "none";
}
</script>
  </div>
</td>
</tr>
</tbody>
</table>
<?php
include ("include/footer.php");
?>
</body>
</html>