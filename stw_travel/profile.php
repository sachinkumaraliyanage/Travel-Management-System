<?php 

session_start();
 
?>
<?php
if(!(isset($_SESSION['uid']))){
	header("Location:index.php");
}
else if($_SESSION['uid']==null||$_SESSION['uid']==""){
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

<?php include ("include/header_log_nomal.php"); ?>
<?php 
include ("include/connect_user.php"); 

$id = $_SESSION['uid'];
$sql = "SELECT * FROM {$tbl_name} where uid='{$id}'";
  #echo $sql;
  $resu_set= mysqli_query($con,$sql);
  //echo $resu_set;
  $count = mysqli_num_rows ( $resu_set );
  $data = mysqli_fetch_row($resu_set);
 /* echo "<pre>";
  print_r($data);
  echo "</pre>";*/

?>
<div align="center" id="edbut"><a class="loo" href="search_user.php">Edit other account</a></div>
<input type="checkbox" name="edbutv" id="edbutv" checked="true" hidden="true" value=<?php if($_SESSION['ulavel']!="admin"&&$_SESSION['ulavel']!="staff"){echo "no";}else{echo "ok";} ?>>
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
<br><br><br>
<div class="container">
  <form action="insert/update_user.php" method="post" onsubmit="return subcheck();" id="myform" name="myform">

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
    <input type="password" id="pass" name="pass" placeholder="Password" oninput="passcheck(this.value)" required >
    <div id="p"></div>
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
  
	    if(c.match(/Not Comfirmed/gi)){
			alert("pleas enter correct password");
	    	return false;
	    }
	    else{
	    	var butt=document.getElementById('chpass').value;
	    	if(butt=="Cancel"){
	    		passValidation();
	    	}
	    	else{
	    		return true;
	    	}
	    }
	}
</script>
<?php
include ("include/footer.php");
?>
</body>
</html>