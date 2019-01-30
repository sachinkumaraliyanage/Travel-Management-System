<?php 

session_start();
$_SESSION['uname'] = null;
$_SESSION['pass'] = null;
$_SESSION['hash_pass'] = null;
$_SESSION['ulavel'] = null ;
$_SESSION['uid'] = null ;
header("Location:../index.php");
?>