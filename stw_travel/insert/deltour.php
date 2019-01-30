<?php
if(isset($_POST['id'])){
	$id=$_POST['id'];
	include ('../include/connect_tour.php');
	$sql = "SELECT * FROM {$tbl_name} where tid='{$id}'";
	$resu_set= mysqli_query($con,$sql);
	//$count = mysqli_num_rows ( $resu_set );
	$data = mysqli_fetch_row($resu_set);
	$path = $data[7];
	$pa ="../".$path;
	$query="DELETE FROM {$tbl_name} WHERE {$tbl_name}.tid = $id";

	$result = mysqli_query($con,$query);

	if (isset($result)){
		unlink($pa);
		
		
		echo "tour deletad";
	}
	else{
		echo "Cant delete tour re try";
	}
}
?>