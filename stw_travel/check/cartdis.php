<?php 

session_start();
 
?>

<?php


	include ('../include/connect_pay.php');

	$uname=$_SESSION['uname'];
	$uid=$_SESSION['uid'];


	//$cat = $_POST['file'];
	
	$sql = "SELECT * FROM {$tbl_name} where uid = '{$uid}'";
	
	$resu_set= mysqli_query($con,$sql);
	
	$count = mysqli_num_rows ( $resu_set );
	$sho="<table class='tale'>
  <tr class='r'>
    <th class='d'>Pid</th>
    <th class='d'>U_Name</th>
    <th class='d'>Tour_Name</th>
     <th class='d'>Hotel_name</th>
     <th class='d'>Total</th>
      <th class='d'>Pay State</th>
  </tr>";

	for ($i=0; $i <$count ; $i++) { 
		$data = mysqli_fetch_row($resu_set);
		$pid=$data[0];
		$tid=$data[2];
		$hid=$data[3];
		$price=$data[4];
		$sta=$data[5];

		if($hid==0){
			$hname="";
		}
		else{
			$sqll = "SELECT Hotel_name FROM hotel where hid = '{$hid}'";
			$resut_set= mysqli_query($con,$sqll);
			$dat = mysqli_fetch_row($resut_set);
			$hname=$dat[0];
		}
		if($tid==0){
			$tname="";
		}
		else{
			$sqlll = "SELECT tittle FROM tour where tid = '{$tid}'";
			$resut_se= mysqli_query($con,$sqlll);
			$dat = mysqli_fetch_row($resut_se);
			$tname=$dat[0];
		}
		/*echo "<pre>";
		print_r($data);
		echo "</pre>";*/
		$k=0;
		if($sta=='true'){
			$k=1;
		}
		else{
			$k=0;
		}
		$sho.="<tr class='r'>
    <td class='d'>".$pid."</td>
    <td class='d'>".$uname."</td>
    <td class='d'>".$tname."</td>
     <td class='d'>".$hname."</td>
      <td class='d'>".$price."</td>";
		      if($k==1){
		       $sho.="<td class='d'><input type='button' id='del' onclick='can(".$pid.")' value='Cancel' class='del'></td>
		  				</tr>";

		  		}
		  		else{
		  			$sho.="<td class='d'><input type='button' id='pay' onclick='pay(".$pid.")' value='Pay' class='pay'></td>
		  				</tr>";
		  		}
		


	}
	$sho.="<table>";
	

	echo $sho;
	
	
	



?>