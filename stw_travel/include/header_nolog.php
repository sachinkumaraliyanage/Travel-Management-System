<header>

<div id="header">
<div class="body clearfix">
<a href="index.html" class="logo smalllogo" id="log"><img src="img/logo.png" alt="Logo"/></a>

<div class="topmenu">

<a href="faq.html">F.A.Q.</a>

<a href="blog.php">BLOG</a>

<a class="login" onClick="document.getElementById('id01').style.display='block'" >LOGIN</a>
<a class="login" onClick="document.getElementById('id02').style.display='block'">SING UP</a>
<form>

  <input type="text" name="search" placeholder="Search.." id="sear" class="sear">
</form>
</div>
<div id="menubutton">
<a onClick="check()" title="Menu"></a>
</div>
<div id="menu">
<ul style="list-style-type:none">
<li class="dropdown"><a href="index.php">HOME</a></li>
<li><a href="tours.php">TOURS</a></li>
<li><a href="hotel.php">HOTELS</a></li>
<li><a href="gallery.php">GALLERY</a></li>
<li><a href="MAp.php">MAP</a></li>
<li><a href="About_us.php">ABOUT US</a></li>
<li><a href="contact.php">CONTACT</a></li>
</ul>
</div>
</div>
</div>

<?php include ("include/img.php"); ?>
<!--<div class="slimg" >
  <img class="mySlides" src="img/heder/ga/a.jpg" style="width:100%">
  <img class="mySlides" src="img/heder/ga/b.jpg" style="width:100%">
  <img class="mySlides" src="img/heder/ga/c.jpg" style="width:100%">
  <img class="mySlides" src="img/heder/ga/d.jpg" style="width:100%">
  <img class="mySlides" src="img/heder/ga/e.jpg" style="width:100%">
</div>-->
<div>
&nbsp;<br>
&nbsp;<br>
&nbsp;<br>
</div>
</header>
<!-- --------------------------mini menu------------------------------- -->
<div id="mySidenav" class="sidenav">

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <form>
  <input type="text" name="search" placeholder="Search.." id="sea" class="sear">
</form>
  <a class="minlog" onClick="document.getElementById('id01').style.display='block'" >LOGIN</a>
<a class="minlog" onClick="document.getElementById('id02').style.display='block'">SING UP</a>
  <a href="index.php" class="minmen">HOME</a>
  <a href="tours.php" class="minmen">TOURS</a>
  <a href="hotel.php" class="minmen">HOTELS</a>
  <a href="gallery.php" class="minmen">GALLERY</a>
 <a href="MAp.php" class="minmen">MAP</a>
  <a href="About_us.php class="minmen">ABOUT US</a>
  <a href="contact.php" class="minmen">CONTACT</a
</div>
<script>
var i=0;

function check(){
	
 if(i==0){
	 openNav();
 }
 else{
	 closeNav();
	 i--;
 }
}
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
	
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
	
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.body.style.backgroundColor = "white";
}
</script>
<!-- --------------------------------------------------------- -->

<script>
/*var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}*/

</script>
<!---------------------log in--------------------------------------->
<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="check/login_ch.php" method="post" >
    <div class="imgcontainer">
      <img src="img/User.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" id="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" id="pass" required>

      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
      <input type="checkbox" name="url" id="url" hidden="true" >
      <script type="text/javascript">
          var url_string = window.location.pathname.split("/").slice(-1);//.split('?')[0];
          var url = /*new URL(*/url_string/*)*/;
          document.getElementById("url").value=url;
        //document.write(url);
      </script>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="fpassword.php">Forgot password?</a></span>
    </div>
  </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!-- --------------------------------------------------------- -->


<!-- sing in -->
<div id="id02" class="modal" >
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content animate" action="check/validate_email.php" method="post">
    <div class="container">
      <label><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" id="email" oninput="checkemail()" required>
	<div id="val"></div>
      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="pwd" onchange="CheckPasswordStrength(this.value)" oninput="CheckPasswordStrength(this.value)" required>
		<div id='pwd_strength'></div>
      <label><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" id="comp" onchange="compass(this.value)" oninput="compass(this.value)" required>

      <div id="com" required ></div>
      <input type="checkbox" name="ur" id="ur" checked="checked" hidden="true">
      <script type="text/javascript">
          var ur_string = window.location.pathname.split("/").slice(-1);//.split('?')[0];
          var ur = /*new URL(*/ur_string/*)*/;
          document.getElementById("ur").value=ur;
         
        //document.write(url);
      </script>
      <input type="checkbox" checked="checked"> Remember me
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <input type="submit" class="signupbtn" value="Enter minimum 8 character strong password and comfirm it" id="sub" disabled="true">
        
      </div>
    </div>
  </form>
</div>
<script>

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
	passValidation();
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
	passValidation();
}



  //-------------------------------------------------

  function passValidation() {
    var a=document.getElementById("pwd_strength").innerHTML;
    var b=document.getElementById("com").innerHTML;
	var c=document.getElementById("val").innerHTML;
   /*var c=a.match(/Very strong/gi);
    var d=b.match(/Password Comfirmed/gi);
    alert(c+"   ,   "+d);*/
    if(a.match(/Very strong/gi)&&b.match(/Password Comfirmed/gi)&&c.match(/is OK/gi)){

     	document.getElementById("sub").value="Sing Up";
		document.getElementById("sub").disabled=false;
    }
	else if(a.match(/Strong/gi)&&b.match(/Password Comfirmed/gi)&&c.match(/is OK/gi)){

      document.getElementById("sub").value="Sing Up";
	  document.getElementById("sub").disabled=false;
    }
    else{
      document.getElementById("sub").value="Enter minimum 8 character strong password and comfirm it";
	  document.getElementById("sub").disabled=true;
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
        var v = "name2check="+u;
        hr.send(v);
	}
	else{
		val.innerHTML="";
	}
	//passValidation();
	var l= document.getElementById("comp").value;
	compass(l);
}

     
</script>

<!-- -------------- -->

<script>
  $(document).ready(function() {
    $(window).focus(function() {
      window.location.reload(true);
    });
});
</script>

