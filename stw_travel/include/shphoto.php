<?php
if(isset($_POST['cat'])){
	include ('../include/connect_gallery.php');
	$cat=$_POST['cat'];
	
	$dis="";
	$sql = "SELECT * FROM {$tbl_name} where cate='{$cat}'";
	#echo $sql;
	$resu_set= mysqli_query($con,$sql);
	//echo $resu_set;
	$count = mysqli_num_rows ( $resu_set );
//$data = mysqli_fetch_row($resu_set);
	for ($i=0; $i <$count ; $i++) { 
		$data = mysqli_fetch_row($resu_set);
		$dis .="<div class='responsive'><div class='gallery' align='center'><img src='".$data[3]."' alt='".$data[1]."' width='600' height='400' id=im".$data[0]." onclick='dis(this.id)' class='imgga'><input type='button' onclick=del(".$data[0].",'".$data[2]."') class='edbu' value='Delete'></div></div>";
	}
	echo $dis;
	//print_r($data);
	
}

?>