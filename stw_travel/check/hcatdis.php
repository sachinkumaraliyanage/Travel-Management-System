
<?php
if(isset($_POST["file"])){
	include ('../include/connect_hcata.php');

	$cat = $_POST['file'];
	
	
	
	#echo $hash_pass."<br>";
	$sql = "SELECT * FROM {$tbl_name} where category= '{$cat}' ";
	#echo $sql;
	$resu_set= mysqli_query($con,$sql);
	//echo $resu_set;
	$count = mysqli_num_rows ( $resu_set );
	$data = mysqli_fetch_row($resu_set); 

	echo $data[1];
	
	}

?>