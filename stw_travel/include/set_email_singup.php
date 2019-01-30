<?php

if(isset($_GET["email"])&&isset($_GET["pass"])){
	$email=$_GET["email"];
	echo $email ;
}
else{
	header("Location:index.php");
}
?>