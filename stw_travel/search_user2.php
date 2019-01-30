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

<br><br><br>








<?php

if(isset($_GET['id'])){
	include ("include/connect_user.php"); 
	//echo"<script>alert('jhsgcvj')</script>";
	$id = $_GET['id'];
	$sql = "SELECT * FROM {$tbl_name} where uid='{$id}'";
	  #echo $sql;
	  $resu_set= mysqli_query($con,$sql);
	  //echo $resu_set;
	  $count = mysqli_num_rows ( $resu_set );
	  $data = mysqli_fetch_row($resu_set);
	  
	
}
?>	
<div class="container" id="sr">
  <form action="insert/supdate_user.php" method="post" onsubmit="return subcheck();" id="myform" name="myform">

    <label >First Name *</label>
    <input type="text" id="fname" name="fname" placeholder="Your name.." value=<?php echo $data[4]; ?> required>

    <label >Last Name *</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name.." value=<?php echo $data[5]; ?> required>
    <!------------------------------------------------------------------------>
    <label >User Name *</label>
    <input type="text" id="uname" name="uname" placeholder="User Name" oninput="checkuname()" onChange="checkuname()" value=<?php echo $data[1]; ?> required>
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
    <input type="text" id="email" name="email" <?php if($_SESSION['ulavel']!="admin"&&$_SESSION['ulavel']!="staff"){echo "readonly='true'";} ?>  value=<?php echo $data[2]; ?>>
	<div><?php if($_SESSION['ulavel']!="admin"&&$_SESSION['ulavel']!="staff"){echo "if you want edit email pleass contact us<br>";}?></div>
    <label>Password</label>
    <!--input type="password" id="pass" name="pass" placeholder="Password" oninput="passcheck(this.value)" >
    <div id="p"></div-->
    <input type="checkbox" name="ss" id="ss" value=<?php echo  $_SESSION['hash_pass']; ?> hidden>
    <input type="button" name="newpass" value="Change Password" id="chpass" onclick="display()">
    <script type="text/javascript">
    	function display() {
    		var but=document.getElementById('chpass');
    		var di =document.getElementById('new');
    		var pa =document.getElementById('pwd');
    		var cpa=document.getElementById('comp');
    		var va= but.value;
    		if(va=="Cancel"){
    			but.value="Change Password";
	    		but.style.background="#4CAF50";
	    		di.style.display="none";
	    		pa.required=false;
	    		cpa.required=false;
    		}
    		else{
	    		but.value="Cancel";
	    		but.style.background="#f44336";
	    		di.style.display="block";
	    		pa.required=true;
	    		cpa.required=true;
	    	}

    	}
    </script>
    <!-- ------------------------------------------------------------------- -->
    <div style="padding: 0px;" id='new'>

    	<label><b>New Password</b></label>
     	<input type="password" placeholder="Enter Password" name="psw" id="pwd" onchange="CheckPasswordStrength(this.value)" oninput="CheckPasswordStrength(this.value)" >
		<div id='pwd_strength'></div>
      	<label><b>Repeat New Password</b></label>
      	<input type="password" placeholder="Repeat Password" name="psw-repeat" id="comp" onchange="compass(this.value)" oninput="compass(this.value)">

      	<div id="com" required ></div>

      	<script type="text/javascript">
		      	function compass(pas) {
		    var com = document.getElementById("pwd").value;
		    var srt="";
		    if(pas==com){
		      srt="<b><font style='color:green'>Password Comfirmed</font></b>"
		    }
		    else{
		      srt="<b><font style='color:red'>Password not Comfirmed</font></b>"
		    }
		    document.getElementById('com').innerHTML = srt;
			
		  }
		  //----------------------password check------------
		  var pass_strength="";
		function IsEnoughLength(str,length)
		{if ((str == null) || isNaN(length))return false;else if (str.length < length)return false;return true;
		}
		function HasMixedCase(passwd)
		{
		if(passwd.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/))return true;else return false;
		}
		function HasNumeral(passwd)
		{if(passwd.match(/[0-9]/))
		return true;else return false;
		}
		function HasSpecialChars(passwd)
		{
		if(passwd.match(/.[!,@,#,$,%,^,&,*,?,_,~]/))return true;else return false;
		}
		function CheckPasswordStrength(pwd){
		  var aa= document.getElementById("comp").value;
		  compass(aa);
		  if (IsEnoughLength(pwd,12) && HasMixedCase(pwd) && HasNumeral(pwd) && HasSpecialChars(pwd)){
		    pass_strength = "<b><font style='color:olive'>Very strong</font></b>";
		  }
		  else if (IsEnoughLength(pwd,8) && HasMixedCase(pwd) && (HasNumeral(pwd) || HasSpecialChars(pwd))){
		    pass_strength = "<b><font style='color:Blue'>Strong</font></b>";
		  }
		  else if (IsEnoughLength(pwd,8) && HasNumeral(pwd)){
		    pass_strength = "<b><font style='color:Green'>Good</font></b>";
		  }
		  else {
		    pass_strength = "<b><font style='color:red'>Weak</font></b>";
		  }
		document.getElementById('pwd_strength').innerHTML = pass_strength;
			
		}



		  //-------------------------------------------------

		  function passValidation() {
		    var a=document.getElementById("pwd_strength").innerHTML;
		    var b=document.getElementById("com").innerHTML;
			//var c=document.getElementById("val").innerHTML;
		   /*var c=a.match(/Very strong/gi);
		    var d=b.match(/Password Comfirmed/gi);
		    alert(c+"   ,   "+d);*/
		    if(a.match(/Very strong/gi)&&b.match(/Password Comfirmed/gi)){

		     	return true;
		    }
			else if(a.match(/Strong/gi)&&b.match(/Password Comfirmed/gi)){

				return true;
		     
		    }
		    else{
		      alert("new password not comformd or not strong password \n try upper and lower letter with number\npassword minimum has 8 charcters");
		      return false;
		    }
		  }
  	</script>
    </div>

    <!-- -------------------------------------------------------------------------------------- -->

    <br>
    <script>

		
		var pas = document.getElementById('ss').value;
		//alert(pas);
		
	function passcheck(pass){
		
		var hash = md5(pass);
		if(hash==pas){
			//document.getElementById("sub").disabled=false;
			//document.getElementById("sub").setAttribute("type","submit");
			document.getElementById("p").innerHTML="<b><font style='color:Green'>Comfirmed</font></b>";
			//document.getElementById("sub").onclick = "";
			//document.getElementById("sub").attributes["onClick"]="";
		}
		else{
			//document.getElementById("sub").disabled=true;
			//document.getElementById("sub").setAttribute("type","button");
			document.getElementById("p").innerHTML="<b><font style='color:red'>Not Comfirmed</font></b>";
			//document.getElementById("sub").setAttribute("onClick","error()");
			//document.getElementById("sub").onclick = error();
			//document.getElementById("sub").attributes["onClick"]="error()";
		}
		//console.log(hash);
		
		
	}
	
	</script>
    
    
    <label >Phone Number *</label>
    <input type="number" id="pno1" name="pno1" placeholder="+xxxxxxxxx" value=<?php echo $data[6]; ?> required>
    <input type="number" id="pno2" name="pno2" placeholder="+xxxxxxxxx" value=<?php echo $data[7]; ?>>
    
    <label for="country">Country</label>
    <select id="country" name="country">
    	<option value=<?php echo $data[8]; ?> selected><?php echo $data[8]; ?></option>
      <?php include ("include/country_list.php"); ?>
    </select>
    
    <label>User level</label>
    <select id="ul" name="ul" >
    	<option value=<?php echo $data[10]; ?> selected><?php echo $data[10]; ?></option>
      <option value="customer" <?php if($_SESSION['ulavel']!="admin"){echo "disabled";} ?>>Customer</option>
      <option value="staff" <?php if($_SESSION['ulavel']!="admin"){echo "disabled";} ?> >Staff</option>
      <option value="admin" <?php if($_SESSION['ulavel']!="admin"){echo "disabled";} ?>>admin</option>
    </select>

    <label >Address *</label>
    <textarea id="add" name="add" placeholder="Address" style="height:200px" required><?php echo $data[9]; ?></textarea>
	<label >* Required Filds</label><br>
    <table width="100%" border="0">
    <tr>
    <td>
    <input type="submit" value="Edit"  id="sub" name="edit" ">
    </td>
    <td>
	<input type="submit" value="Delete" id="del" name="delete" ">
    </td>
    </tr>
    </table>
    <input type="checkbox" name="test" id="test" checked="true" hidden>
    <input type="checkbox" id="uid" name="uid" value=<?php echo $data[0]; ?> checked hidden>
  </form>
</div>
<script>

$(document).ready(function() {
    $(window).focus(function() {
      window.location.reload(true);
    });
});
     
</script>
<script type="text/javascript">

	function setval(butp) {

		var check = document.getElementById('test');
		check.value=butp;
		//alert(butp);
		/*if(confirm("Are you suer to delete profile")==true){
			//alert("ok");
			document.getElementById("myform").submit();
		}
		else{
			//alert("no");
			//return false;
		}*/
	}
	function subcheck() {
		var c=document.getElementById("p").innerHTML;
  
	    	var butt=document.getElementById('chpass').value;
	    	if(butt=="Cancel"){
	    		passValidation();
	    	}
	    	else{
	    		return true;
	    	}
	    
	}
</script>







<?php
include ("include/footer.php");
?>


</body>
</html>