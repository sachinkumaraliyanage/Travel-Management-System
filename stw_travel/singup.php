<?php
if(!(isset($_GET["email"])&&isset($_GET["pass"]))){
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
<script src="script/md5.min.js"></script>
<script src="jquery/jquery-3.2.1.js"></script>
</head>

<body>

<?php include ("include/header_singup.php"); ?>
<div class="container">
  <form action="insert/insert_user.php" method="post">

    <label >First Name *</label>
    <input type="text" id="fname" name="fname" placeholder="Your name.." required>

    <label >Last Name *</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name.." required>
    <!------------------------------------------------------------------------>
    <label >User Name *</label>
    <input type="text" id="uname" name="uname" placeholder="User Name" oninput="checkuname()" onChange="checkuname()" required>
    <div id="val"></div>
    <script>
    function checkuname(){
	
	//alert("ppp");
	var val = document.getElementById("val");
	var u = document.getElementById("uname").value;
	
	if(u != ""){
		val.innerHTML = 'checking...';
		var hr = new XMLHttpRequest();
		hr.open("POST", "check/copy_uname_check.php", true);
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		hr.onreadystatechange = function() {
			if(hr.readyState == 4 && hr.status == 200) {
				var k = hr.responseText;
				val.innerHTML = k;
				
				//alert(k);
			}
		}
        var v = "name2check="+u;
        hr.send(v);
	}
	else{
		val.innerHTML="";
	}
	
	
}
</script>

	<!------------------------------------------------------------------------>
    <label >E-mail</label>
    <input type="text" id="email" name="email"  readonly="true" value=<?php include ('include/set_email_singup.php'); ?>>
	
    <label>Password</label>
    <input type="password" id="pass" name="pass" placeholder="Password" oninput="passcheck(this.value)" onBlur="check(this.value)" required >
    <div id="p"></div>
    <script>
		var url_string = window.location.href;
		var url = new URL(url_string);
		var pas = url.searchParams.get("pass");
		
		
	function passcheck(pass){
		var hash = md5(pass);
		if(hash==pas){
			document.getElementById("sub").disabled=false;
			document.getElementById("sub").setAttribute("type","submit");
			document.getElementById("p").innerHTML="<b><font style='color:Green'>Comfirmed</font></b>";
			//document.getElementById("sub").onclick = "";
			//document.getElementById("sub").attributes["onClick"]="";
		}
		else{
			document.getElementById("sub").disabled=true;
			document.getElementById("sub").setAttribute("type","button");
			document.getElementById("p").innerHTML="<b><font style='color:red'>Not Comfirmed</font></b>";
			//document.getElementById("sub").setAttribute("onClick","error()");
			//document.getElementById("sub").onclick = error();
			//document.getElementById("sub").attributes["onClick"]="error()";
		}
		//console.log(hash);
		
		
	}
	function check(pass){
		var hash=md5(pass);
		if(hash==pas){
			
		}
		else{
			document.getElementById("pass").value="";
			error();
		}
		//co
	}
	function error(){
		//alert("password not mached");	
	}
	</script>
    
    
    <label >Phone Number *</label>
    <input type="number" id="pno1" name="pno1" placeholder="+xxxxxxxxx" required>
    <input type="number" id="pno2" name="pno2" placeholder="+xxxxxxxxx" >
    
    <label for="country">Country</label>
    <select id="country" name="country">
      <?php include ("include/country_list.php"); ?>
    </select>
    
    <label>User level</label>
    <select id="ul" name="ul" >
      <option value="customer">Customer</option>
      <option value="staff" disabled>Staff</option>
      <option value="admin" disabled>admin</option>
    </select>

    <label >Address *</label>
    <textarea id="add" name="add" placeholder="Address" style="height:200px" required></textarea>
	<label >* Required Filds</label><br>
    <table width="100%" border="0">
    <tr>
    <td>
    <input type="button" value="Submit"  id="sub">
    </td>
    <td>
	<input type="reset" value="reset">
    </td>
    </tr>
    </table>
    
  </form>
</div>
<?php
include ("include/footer.php");
?>
</body>
</html>