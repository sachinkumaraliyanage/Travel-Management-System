<?php
if(isset($_POST['id'])){
	$id=$_POST['id'];
	include ('../include/connect_gallery.php');
	$sql = "SELECT * FROM {$tbl_name} where gid='{$id}'";
	$resu_set= mysqli_query($con,$sql);
	//$count = mysqli_num_rows ( $resu_set );
	$data = mysqli_fetch_row($resu_set);
	$path = $data[3];
	$pa ="../".$path;
	$query="DELETE FROM {$tbl_name} WHERE {$tbl_name}.gid = $id";

	$result = mysqli_query($con,$query);

	if (isset($result)){
		unlink($pa);
		
		
		echo "image deletad";
	}
	else{
		echo "Cant delete image re try";
	}
}
?>