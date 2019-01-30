<?php
/*echo"<pre>";
print_r($_POST);
echo"</pre>";*/
if(isset($_POST["hname"])){
	include ('../include/connect_Hotel.php');

	$hname=$_POST["hname"];
	echo $hname.'<br>';

	$rank=$_POST["rank"];
	echo $rank.'<br>';
	$cat=$_POST["cat"];
	echo $cat.'<br>';
	$hlocation=$_POST["hlocation"];
	echo $hlocation.'<br>';
	$disc=$_POST["disc"];
	echo $disc.'<br>';
	$price=$_POST["price"];
	echo $price.'<br>';
	$path=$_POST["path"];

	echo $path;
	$query = "INSERT into {$tbl_name} (Hotel_name,Hotel_rank,Hotel_cat,Hotel_location,Hotel_sdiscription,Hotel_price,img_path) VALUES ('{$hname}','{$rank}','{$cat}','{$hlocation}','{$disc}','{$price}','{$path}')";
	$result = mysqli_query($con,$query);
	if (isset($result)){

		header("Location:../hotel.php?add=ok");
	

	}
	else{
		header("Location:../hotel.php?add=no");
	}
}
?>