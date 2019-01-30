<?php 

session_start();
 
?>
<?php

if(isset($_SESSION['uid'])){
			if($_SESSION['uid']!=""||$_SESSION['uid']!=null){
				
    			
				echo "ok";
    	
			}
			else{
				echo("no");
			}
}
		else{
				echo("no");
		}

?>