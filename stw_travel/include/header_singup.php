<header>

<div id="header">
<div class="body clearfix">
<a href="index.html" class="logo smalllogo" id="log"><img src="img/logo.png" alt="Logo"/></a>
<div class="topmenu">
<a href="faq.html">F.A.Q.</a>
<a href="blog.php">BLOG</a>


</div>
<div id="menubutton">
<a onClick="openNav()" title="Menu"></a>
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
<div>
&nbsp;<br>
&nbsp;<br>
&nbsp;<br>
</div>
</header>
<!-- --------------------------mini menu------------------------------- -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

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
   // document.getElementById("main").style.marginLeft = "250px";
	
    //document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
   // document.getElementById("main").style.marginLeft = "0";
    //document.body.style.backgroundColor = "white";
}
</script>
<!-- --------------------------------------------------------- -->

<script>


$(document).ready(function() {
    $(window).focus(function() {
      window.location.reload(true);
    });
});
     
</script>



