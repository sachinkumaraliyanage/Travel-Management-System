
<?php 

session_start();

?>
<?php
/*echo "<pre>";
print_r($_POST);
echo "</pre>";*/
if(isset($_POST["id"])){
	include ('../include/connect_Hotel.php');
	$id=$_POST["id"];

	$query = "SELECT Hotel_price FROM {$tbl_name} WHERE hid='{$id}'";
	$result = mysqli_query($con,$query);
	$data = mysqli_fetch_row($result);
	$pay=$data[0];
	$uid=$_SESSION['uid'];
	//include ('../include/connect_tour.php');
	
	//echo $con;
	$query = "INSERT into pament (uid,hid,total,psta) VALUES ('{$uid}','{$id}','{$pay}','false')";
	$result = mysqli_query($con,$query);
	if (isset($result)){

		echo "ok";
		
	}
	else{
		echo "retry";
	}
}
?>