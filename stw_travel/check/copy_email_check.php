<?php
if(isset($_POST["name2check"]) && $_POST["name2check"] != ""){

    include ('../include/connect_user.php');
    
    $username=$_POST["name2check"];
    $sql = "SELECT * from {$tbl_name} where email = '$username'";
    $resu_set= mysqli_query($con,$sql);
    $uname_check = mysqli_num_rows ( $resu_set );
    

    if ($uname_check < 1) {
	    echo '<strong>'."<font style='color:Green'>". $username . '</strong> is OK';
	    exit();
    } else {
	    echo '<strong>'."<font style='color:red'>" . $username . '</strong> is taken';
	   exit();
    }
}
if(isset($_POST["email"]) && $_POST["email"] != ""){

    include ('../include/connect_user.php');
    
    $username=$_POST["email"];
    $sql = "SELECT * from {$tbl_name} where email = '$username'";
    $resu_set= mysqli_query($con,$sql);
    $uname_check = mysqli_num_rows ( $resu_set );
    

    if ($uname_check < 1) {
        echo '<strong>'."<font style='color:Red'>". $username . '</strong> is not in database';
        exit();
    } else {
        echo '<strong>'."<font style='color:Green'>" . $username . '</strong> is ok';
       exit();
    }
}
?>