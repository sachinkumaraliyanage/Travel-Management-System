<?php 

session_start();
 
?>
<?php
if(!(isset($_GET["cat"]))){
	header("Location:hotel.php");
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
		
<div style="background-color:black;color:white; margin-top: 60px;" id="dis">
	<!--h1 style="color: red">LUXURY HOTELS IN SRI LANKA</h1>
	<p>Colombo, as the commercial capital of Sri Lanka, has more luxury star class hotels than any other town or city in the country. Luxury star class refers to their grading as three, four or five -star properties. The more stars, the brighter the hotels shine, with spectacular views, superb service, opulent accommodation and several dining options. For example, the city’s top two Cinnamon hotel properties feature more than a score of Colombo’s finest restaurants.

Staying in a luxury star class hotel in Colombo becomes worthwhile because of the convenience of the location, the attention to detail, and the satisfaction of being able to enjoy top class accommodation at much less than in luxury star class hotels in other countries. Sri Lanka also has luxury star class hotels in popular beach resorts and other tourist destinations. Every one of them is distinguished by an understanding of what guests want while staying on holiday or business</p-->
	<script type="text/javascript">
		sh();
		function sh(){
		var m =document.getElementById('dis');
		 var url_string = window.location.href;
		var url = new URL(url_string);
		var cat = url.searchParams.get("cat");
		//alert(cat);
		var form_data = new FormData();    
			form_data.append("file",cat);
    //alert(form_data);
    $.ajax({
        url: "check/hcatdis.php",
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
  </script><br><br>
</div>
<br>
<div id="dis2">
<script type="text/javascript">
		sho();
		function sho(){
		var m =document.getElementById('dis2');
		 var url_string = window.location.href;
		var url = new URL(url_string);
		var cat = url.searchParams.get("cat");
		//alert(cat);
		var form_data = new FormData();    
			form_data.append("file",cat);
    //alert(form_data);
    $.ajax({
        url: "check/hboxdis.php",
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(php_script_response){
        	//alert(php_script_response);
        	m.innerHTML=php_script_response;
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
  </script></div>
<!--table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
	<tr>
		<td width="47.5%">
			<div class="row">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
					<tr>
						<td width="50%" style="background-image: url('img/imgth/Cinnamon-Grand-Colombo-resize.jpg'); background-size: cover;" id="a1" onmouseenter="moin(this.id)" onmouseout="moout(this.id)">
								<div class="arrow"></div>
							</td>

							<td valign="top" >
							<br>
							<!--h2 align="center">CINNAMON GRAND - COLOMBO</h2-->
							<!--p>The five-star Cinnamon Grand belongs to the exclusive Cinnamon properties of the John Keells group. This city hotel combines the Cinnamon signature touch of grandeur and opulence with a degree of warmth and sensitivity giving it much character. It's central location, luxurious facilities, personalised service and the added convenience of an adjoining up market shopping mall, makes Cinnamon Grand an ideal hotel</p-->
							<!--a class="lo" onClick="" >INQUIRE NOW</a>
							</td>
					</tr>
				</table><br>			
			</div>
		</td>
			<td width="5%">
			</td>
				<td width="47.5%">		
					<div class="row">
						<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
							<tr>
								<td width="50%" style="background-image: url('img/imgth/Exterior-1-resize.jpg'); background-size: cover;" id="a2" onmouseenter="moin(this.id)" onmouseout="moout(this.id)">
									<div class="arrow"></div>
								</td>

									<td valign="top" >
						
									<br>
									<h2 align="center">HERITANCE TEA FACTORY - NUWARA ELIYA</h2>
									<p>Upon entering be greeted by a warm cup of tea from the plantations of the world’s greatest tea. 	Giving the outlook of an old museum The Tea Factory comes with all modern facilities in all its 54 cosy rooms. If a nature trek isn’t for you head out to the tea plantation and pluck and process your own tea, a little piece of Sri Lanka to take back with you</p>
									<a class="lo" onClick="" >INQUIRE NOW</a>
									</td>
							</tr>
						</table><br>
					</div>
				</td>			
			</tr>
		</table>
	<br>
	<!--table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
		<tr>
			<td width="47.5%">
				<div class="row" >
					<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
						<tr>
							<td width="50%" style="background-image: url('img/imgth/hilton-331.jpg'); background-size: cover;" id="a3" onmouseenter="moin(this.id)" onmouseout="moout(this.id)">
								<div class="arrow"></div>
							</td>

							<td valign="top" >
								<br>
								<h2 align="center">THE HILTON COLOMBO</h2>
								<p>The five-star Colombo Hilton upholds the standards expected from the chain. It is among the most sought-after hotels in the city and possesses an impressive range of creature comforts, including some of the best restaurants in town.</p><br><br><br><br><br>
								<a class="lo" onClick="" >INQUIRE NOW</a>
							</td>
						</tr>
					</table><br>
				</div>
			</td>
		<td width="5%">
			</td>
				<td width="47.5%">
					<div class="row" >
						<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
							<tr>
								<td width="50%" style="background-image: url('img/imgth/Regency-suite-resize.jpg'); background-size: cover;" id="a4" onmouseenter="moin(this.id)" onmouseout="moout(this.id)">
									<div class="arrow"></div>
								</td>

										<td valign="top" >
												<br>
												<h2 align="center">GALLE FACE HOTEL - COLOMBO</h2>
												<p>The name says it all. Nested comfortable in front of the Galle Face Green as well as along the Indian Ocean this colonial hotel is considered to be one of the oldest in Asia. Established in 1846 the Galle Face Hotel has been home to royalty and celebrities alike. With two wings as compiling a grand total of 81 rooms the Galle Face Hotel is a must stay when visiting Sri Lanka.</p>
												<a class="lo" onClick="" >INQUIRE NOW</a>
										</td>
									</tr>
								</table><br>
							</div>
						</td>
					</tr>
				</table-->
			
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
		if (confirm("Are you want to delete this Hotel!") == true) {
        	var form_data = new FormData();
		    form_data.append("id", imid);
		    //alert(form_data);
		    $.ajax({
		        url: "insert/delhotel.php",
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
		if (confirm("Are you want to pay this Hotel!") == true) {
        			var form_data = new FormData();
		    		form_data.append("id", kl);
		    //alert(form_data);
		    		$.ajax({
		        		url: "insert/pay_Hotel.php",
		        		dataType: 'script',
		        		cache: false,
		        		contentType: false,
		        		processData: false,
		        		data: form_data,                         
		        		type: 'post',
		        		success: function(php_script_response){
		        		 //location.reload();
		        			//alert(php_script_response);
		           
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
							
<?php
include ("include/footer.php");
?>
</body>
</html>