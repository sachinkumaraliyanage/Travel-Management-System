
<?php
if(isset($_POST["file"])){
	include ('../include/connect_Hotel.php');

	$cat = $_POST['file'];
	//echo $cat;
	$sho="";
	
	#echo $hash_pass."<br>";
	$sql = "SELECT * FROM {$tbl_name} where Hotel_cat= '{$cat}' ";
	#echo $sql;
	$resu_set= mysqli_query($con,$sql);
	//echo $resu_set;
	$count = mysqli_num_rows ( $resu_set );
	//echo $count;
	for ($i=0; $i <$count; $i+=2) { 
		$data = mysqli_fetch_row($resu_set); 


$sho.="<table border='0' cellpadding='0' cellspacing='0' width='100%' height='100%'>
	<tr>
		<td width='47.5%'>
			<div class='row'>
				<table border='0' cellpadding='0' cellspacing='0' width='100%' height='100%'>
					<tr>
						<td width='50%' style="."background-image:url('".$data[7]."');background-size:cover;"." id='im".$data[0]."' onmouseenter='moin(this.id)' onmouseout='moout(this.id)'>
								<div class='arrow'></div>
							</td>

							<td valign='top' align='center' >
							<br>
							<h2 align='center'>".$data[1]."</h2>
							<p>".$data[5]."</p>
							<p>price".$data[6]."</p>
							<p>rank:".$data[2]."</p><p>Location:".$data[4]."</p>
							
							<br>
							
							<a class='lo' onClick='show(".$data[0].")'>INQUIRE NOW</a><br>
							<input type='button' onclick=del(".$data[0].") class='edbu' value='Delete'>
							</td>
					</tr>
				</table><br>			
			</div>
		</td>
			<td width='5%'>
			</td>";
			$data = mysqli_fetch_row($resu_set); 
			if($data[0]==""||$data[0]==NULL){
				$sho.="<td width='47.5%'></td></tr></table>";
			}
			else{
				$sho.="<td width='47.5%'>		
					<div class='row'>
						<table border='0' cellpadding='0' cellspacing='0' width='100%' height='100%'>
							<tr>
								<td width='50%' style="."background-image:url('".$data[7]."');background-size:cover;"." id='im".$data[0]."' onmouseenter='moin(this.id)' onmouseout='moout(this.id)'>
									<div class='arrow'></div>
								</td>

									<td valign='top' align='center' >
						
									<br>
									<h2 align='center'>".$data[1]."</h2>
									<p>".$data[5]."</p>
									<p>price".$data[6]."</p>
									<p>rank:".$data[2]."</p><p>Location:".$data[4]."</p>
									
									<br>
									<a class='lo' onClick='show(".$data[0].")'>INQUIRE NOW</a><br>
									<input type='button' onclick=del(".$data[0].") class='edbu' value='Delete'>
									</td>
							</tr>
						</table><br>
					</div>
				</td><td width='5%'>			
			</tr>
		</table>";
}


	}
	
	echo $sho;
	
	}

?>