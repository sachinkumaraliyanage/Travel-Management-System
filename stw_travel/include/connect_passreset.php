
<?php				 
              
	
//db conect
$host      =   "localhost";
$usname  =   "root";
$password  =    null;
$db_name   =   "stw_travels";
$tbl_name  =   "passreset";

$con = mysqli_connect("$host","$usname","$password","$db_name")or die("cannot connect host or db");
?>