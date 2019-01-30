

<?php
if(isset($_POST["file"])){
	include ('../include/connect_tcat.php');

	$cat = $_POST['file'];
	
	$sql = "SELECT * FROM {$tbl_name} where tcat = '{$cat}'";
	
	$resu_set= mysqli_query($con,$sql);
	
	$count = mysqli_num_rows ( $resu_set );
	$data = mysqli_fetch_row($resu_set);

	echo $data[2];
	
	
	
}


?>