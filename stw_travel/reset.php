<?php
if(isset($_GET['email'])&&isset($_GET['hash'])){
	include ('include/connect_passreset.php');
	$name = $_GET['email'];
	$pass = $_GET['hash'];
	$sql = "SELECT * FROM {$tbl_name} where email = '{$name}' and onepass ='{$pass}'";
	$resu_set= mysqli_query($con,$sql);
	#echo $resu_set;
	$count = mysqli_num_rows ($resu_set);
	$data = mysqli_fetch_row($resu_set);
	if($count!=1){
		
		$link = "Location:index.php";
		header($link);

	}
}
else{
	
	$link = "Location:index.php";
	header($link);

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


<form class="modal-content animate" action="insert/pset.php" method="post" onsubmit="return ch();">

<div class="container">
     <label><b>New Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="pwd" onchange="CheckPasswordStrength(this.value)" oninput="CheckPasswordStrength(this.value)" required>
		<div id='pwd_strength'></div>
      <label><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" id="comp" onchange="compass(this.value)" oninput="compass(this.value)" required>
      <div id="com" required ></div>
      <input type="checkbox" name="email" value=<?php echo $data[0]; ?> checked hidden>
	<br><br><br><br>
	<table width="50%" align="center"><tr><td><input type="submit" name="reset" value="Set"></td></tr></table>

</div>


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

  function ch() {
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
      alert('new password not comfirmed or not strong');
      return('false');
    }
  }
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<?php
include ("include/footer.php");
?>
</body>
</html>