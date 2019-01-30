<?php 

session_start();
 
?>
<?php
if(isset($_POST["can"])){
	$id=$_POST["can"];
	$sen="false";
}

if(isset($_POST["pay"])){
	$id=$_POST["pay"];
	$sen="true";
}
	include ('../include/connect_pay.php');
	

	
	
	//echo $tbl_name;
	
		#echo "edit";
		
		$query="UPDATE {$tbl_name} SET psta = '{$sen}' WHERE {$tbl_name}.pid = $id";
		$result= mysqli_query($con,$query);
	
	
	
	if (isset($result)){
		echo "ok";

	}
	else{
		echo "cant change";
	}


?>