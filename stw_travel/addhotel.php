<?php 

session_start();
 
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
<link rel="stylesheet" type="text/css" href="css/upbut.css" />
<script src="script/md5.min.js"></script>
<script src="jquery/jquery-3.2.1.js"></script>
</head>

<body>
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


<div class="container">
  <form action="insert/insert_Hotel.php" method="post" onsubmit="return check();">

    <label >Hotel Name</label>
    <input type="text" id="hname" name="hname" placeholder="Hotel name.." required>

     <label>Hotel Rank</label>
    <select id="rank" name="rank" >
      <option value="3star">3 Star</option>
      <option value="4star" >4 Star</option>
      <option value="5star" >5 Star</option>
    </select>
    <!--------------------------------disabled---------------------------------------->
  <label>Hotel Category</label>
    <select id="cat" name="cat" >
      <option value="Luxury Hotel">Luxury Hotel</option>
      <option value="Villas" >Villas</option>
      <option value="Ayurwedic Tours" >Ayurwedic Tours</option>
       <option value="Luxury Camping" >Luxury Camping</option>
    </select>


    <label >Hotel Location</label>
    <input type="text" id="hlocation" name="hlocation" placeholder="Hotel Location" required="True">
    

	<!------------------------------------------------------------------------>
   <label >Hotel Discription</label>
    <textarea id="add" name="disc" placeholder="hotel discription" style="height:200px" required></textarea>
	
    <label>Price</label>
    <input type="number" id="price" name="price" placeholder="price" required >
    <div id="p"></div>
    
   
	
		<!--form method="post" enctype="multipart/form-data" name="myform" onsubmit="return check();" action="insert/addp.php"-->
<!-- upload image -->	
	  				<input type="button" id="del" value="Cancel" style="display: none" onclick="sh();">
		          <input type="file" onchange="abc();" id="file-1" accept="image/*" name="kk" class="inputfile inputfile-1"  hidden="true" required>
					<label for="file-1" id="b"><svg  width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a Photo&hellip;</span></label><br>
					<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
		          <input type="checkbox" name="path" id="path" hidden="true"  checked="true">
					<img src="" height="200" alt="Image preview..." id="a">
                    <div id="ims"></div>
                    
                    <script>
  function previewFile(){
       var preview = document.getElementById('a'); //selects the query named img
       var file    = document.getElementById('file-1').files[0];//querySelector('input[type=file]').files[0]; //sames as here
       var reader  = new FileReader();

       reader.onloadend = function () {
           preview.src = reader.result;
		   //a();
		   //;alert(reader.result);
       }

       if (file) {
           reader.readAsDataURL(file); //reads the data as a URL
       } else {
           preview.src = "";
       }
  }

  //previewFile();  //calls the function named previewFile()
  function abc() {
    var file_data = $("#file-1").prop("files")[0];   
    var form_data = new FormData();
    form_data.append("imgfile", file_data);
    //alert(form_data);
    $.ajax({
        url: "check/addph.php",
        dataType: 'script',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(php_script_response){
            //alert(php_script_response);
            if(php_script_response.match(/Hotel/gi)){
            	document.getElementById('path').value=php_script_response;
            	previewFile();
            	document.getElementById('b').style.display="none";
            	document.getElementById('del').style.display="block";
            	document.getElementById('ims').innerHTML="";
            	  
            }
            else{
            	document.getElementById('ims').innerHTML=php_script_response;
				document.getElementById('a').src=""; 
				document.getElementById('path').value="";
            }
           
        }
    });


  }
	
	function sh(){
		var m =document.getElementById('path').value;
		var mm="../"+m;
		var form_data = new FormData();    	form_data.append("file", mm);
    //alert(form_data);
    $.ajax({
        url: "check/del.php",
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(php_script_response){
        	//alert(php_script_response);
        }
    });
    			document.getElementById('path').value="";
          
            	document.getElementById('b').style.display="block";
            	document.getElementById('del').style.display="none";
            	document.getElementById('ims').innerHTML="";
            	document.getElementById('a').src="";
            	document.getElementById('file-1').value="";
    }
  </script>

 <!-- finish upload image -->
 <br>
 
 

		

<script type="text/javascript">
	function check() {
		var re=document.getElementById('path').value;

		if(re==""){
			alert("please upload Photo");
			return false;
		}
		else{
			return true;
		}
	}
</script>
    
    
	<label >* Required Filds</label><br>
    <table width="50%" border="0">
    <tr>
    <td>
    <input type="Submit" value="Submit"  id="sub">
    </td>
    <td>
	<!--input type="reset" value="reset"-->
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
