

<?php
if(isset($_POST["file"])){
	include ('../include/connect_tour.php');

	$cat = $_POST['file'];
	
	$sql = "SELECT * FROM {$tbl_name} where cat = '{$cat}'";
	
	$resu_set= mysqli_query($con,$sql);
	
	$count = mysqli_num_rows ( $resu_set );
	$sho="";

	for ($i=0; $i <$count ; $i+=2) { 
		$data = mysqli_fetch_row($resu_set);
		/*echo "<pre>";
		print_r($data);
		echo "</pre>";*/
		$sho.="<table border='0' cellpadding='0' cellspacing='0' width='100%' height='100%'>
		<tr>
			<td width='47.5%'>
				<div class='row'  >
					<table border='0' cellpadding='0' cellspacing='0' width='100%' height='100%'>
						<tr>
							<td width='50%' style="."background-image:url('".$data[7]."');background-size:cover;"." id='im".$data[0]."' onmouseenter='moin(this.id)' onmouseout='moout(this.id)'>
								<div class='arrow'></div>
							</td>
							<td valign='top' align='center' >
								<h2 align='center'>".$data[1]."</h2>
								<span style='background-color:#FFFF00;color:red;font-size:20px;'>Duration:".$data[6]."</span><br>
								<span style='background-color:blue;color:red;font-size:20px; '>PRICE : $".$data[5]."</span>
								<p >".$data[3]."</p>
								<a class='lol' onClick='show(".$data[0].")'>INQUIRE NOW</a>
								<div align='crnter'><br><input type='button' onclick=del(".$data[0].") class='edbu' value='Delete'></div>
								<br><br>
							</td>
						</tr>
					</table>
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
				<div class='row' >
						<table border='0' cellpadding='0' cellspacing='0' width='100%' height='100%'>
							<tr>
								<td width='50%' style="."background-image:url('".$data[7]."');background-size:cover;"." id='im".$data[0]."' onmouseenter='moin(this.id)' onmouseout='moout(this.id)'>
									<div class='arrow'></div>
								</td>
								<td valign='top' align='center' >
									<h2 align='center'>".$data[1]."</h2>
									<span style='background-color:#FFFF00;color:red;font-size:20px;'>Duration:".$data[6]."</span><br>
									<span style='background-color:blue;color:red;font-size:20px; '>PRICE : $".$data[5]."</span>
									<p >".$data[3]."</p>
									<a class='lol' onClick='show(".$data[0].")'>INQUIRE NOW</a>
									<div align='crnter'><br><input type='button' onclick=del(".$data[0].") class='edbu' value='Delete'></div>
									<br><br>
								</td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
		</table><br><br>";

		}


	}

	

	echo $sho;
	
	
	
}


?>