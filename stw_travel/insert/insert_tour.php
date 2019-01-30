<?php
/*echo "<pre>";
print_r($_POST);
echo "</pre>";*/
if(isset($_POST["tname"])){
	include ('../include/connect_tour.php');

	$tname=$_POST["tname"];
	$cat=$_POST["cat"];
	$price=$_POST["price"];
	$dur=$_POST["dur"];
	$sdis=$_POST["sdis"];
	$bdis=$_POST["bdis"];
	$path=$_POST["path"];
	//echo $tbl_name;
	echo $tname."<br>".$cat."<br>".$sdis."<br>".$bdis."<br>".$price."<br>".$dur."<br>".$path."<br>";
	echo $tbl_name;
	//echo $con;
	$query = "INSERT into {$tbl_name} (tittle,cat,sdis,bdis,price,dura,tpath) VALUES ('{$tname}','{$cat}','{$sdis}','{$bdis}',$price,$dur,'{$path}')";
	$result = mysqli_query($con,$query);
	if (isset($result)){

		header("Location:../tour.php?add=ok");
	

	}
	else{
		header("Location:../tour.php?add=no");
	}
}
?>