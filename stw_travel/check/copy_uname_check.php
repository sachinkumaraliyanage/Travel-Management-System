<?php 

session_start();
 
?>
<?php
if(isset($_POST["name2check"]) && $_POST["name2check"] != ""){

    include ('../include/connect_user.php');
    
    $username=$_POST["name2check"];
    $sql = "SELECT * from {$tbl_name} where uname = '$username'";
    $resu_set= mysqli_query($con,$sql);
    $uname_check = mysqli_num_rows ( $resu_set );
    

    if ($uname_check < 1) {
	    echo '<strong>'."<font style='color:Green'>". $username . '</strong> is OK';
	    exit();
    } 
    else {
        if(isset($_SESSION['uname'])){
            if($username==$_SESSION['uname']){
                echo '<strong>'."<font style='color:Green'>". $username . '</strong> is OK';
                exit();
            }
            else{
                echo '<strong>'."<font style='color:red'>" . $username . '</strong> is taken';
                exit();
            }
        }
        else{
	       echo '<strong>'."<font style='color:red'>" . $username . '</strong> is taken';
	       exit();
        }
    }
}
?>