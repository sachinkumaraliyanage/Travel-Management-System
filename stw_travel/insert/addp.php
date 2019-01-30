<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
if(isset($_POST['up'])){
include ('../include/connect_gallery.php');
$tit=$_POST['tit'];
$cat=$_POST['cat'];
$path=$_POST['path'];
$query = "INSERT into {$tbl_name} (title,cate,gpath) VALUES ('{$tit}','{$cat}','{$path}')";
	$result = mysqli_query($con,$query);
	if (isset($result)){

		header("Location:../gallery.php?add=ok");
	

	}
	else{
		header("Location:../gallery.php?add=no");
	}
}
?>