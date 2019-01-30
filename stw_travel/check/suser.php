<?php 

session_start();
 
?>
<?php
if(!(isset($_SESSION['ulavel']))){
    header("Location:index.php");
}
else if($_SESSION['ulavel']==null||$_SESSION['ulavel']==""||$_SESSION['ulavel']=="customer"){
    header("Location:index.php");
}

?>

<?php
if((isset($_POST["seri"]) && $_POST["seri"] != "")||(isset($_POST["seru"]) && $_POST["seru"] != "")){

    include ('../include/connect_user.php');
    if(isset($_POST["seri"]) && $_POST["seri"] != ""){
        $search_r=$_POST["seri"];
    }
    else if(isset($_POST["seru"]) && $_POST["seru"] != ""){
        $search_r=$_POST["seru"];
    }
    $set="%".$search_r."%";

    if(isset($_POST["seri"]) && $_POST["seri"] != ""){
        $sql = "SELECT uid,uname from {$tbl_name} where uid LIKE '{$set}'";
    }
    else if(isset($_POST["seru"]) && $_POST["seru"] != ""){
        $sql = "SELECT uid,uname from {$tbl_name} where uname LIKE '{$set}'";
    }
    
    $resu_set= mysqli_query($con,$sql);
    $coun = mysqli_num_rows ( $resu_set );
    if(isset($resu_set)){

        $hint="";

        for ($i=0; $i < $coun; $i++) { 
            $data = mysqli_fetch_row($resu_set);

            $hint .="<div class='re' onclick='show(".$data[0].")'><b>".$data[1]."</b></div>";
        }

        if ($hint=="") {
            $response= "<div class='ree'><b>No suggestion</b></div>";

        } 
        else {
            $response=$hint;
        }
        
        echo $response;
    }
    
}
?>