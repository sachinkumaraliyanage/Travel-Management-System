<?php
session_start();
?>





<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>STW Travel</title>
<link rel="icon" type="image/png" href="img/icon/icon.png">
<link rel="stylesheet" type="text/css" href="css/hedermenu.css">
<link rel="stylesheet" type="text/css" href="css/slidphoto.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" type="text/css" href="css/side_navigation.css">
<script src="jquery/jquery-3.2.1.js"></script>
<style type="text/css">

</style>
</head>
<body>

<table width="100%" border="0" align="center">
  <tr>
    <td class="aa">ADD Hotels</td>
  </tr>
  <tr>
    <td >&nbsp;</td>
  </tr>
</table>
<br />
<body class="yyy">
<table width="100%" border="0" align="center">
  <tr>
    <td class="aa">EDIT Hotel</td>
  </tr>
  <tr>
    <td >&nbsp;</td>
  </tr>
</table>
<br />
 <?php
$day = date('Y-m-d / H:i:s');
         
              
  
//db conect
include('inc/addHotel.php');
if(isset($_SESSION['Hotel_id'])){
  $id = $_SESSION['Hotel_id'];
  $sql = "SELECT * from {$tbl_name} where id = '$id'";
$resu_set= mysqli_query($con,$sql);
$count = mysqli_num_rows ( $resu_set);
$deta = mysqli_fetch_row($resu_set);
$name = $deta['1'];
$rank = $deta['2'];
$location= $deta['3'];
$price = $deta['4'];
$sdiscription= $deta['7'];
$ldiscription=$deta['8'];
}
?>
<?php
if(isset($_POST['del'])){
if(isset($_SESSION['Hotel_id'])){
$psql = "DELETE FROM {$tbl_name} WHERE {$tbl_name}.id = '{$_SESSION['Hotel_id']}'";
$resu= mysqli_query($con,$psql);
if(isset($resu)){
header("Location:allfood.php"); 
}
}
}
if(isset($_POST['add_hotel'])){
if(isset($_SESSION['Hotel_id'])){
      if(isset($_SESSION['imeurl'])){
    if($_SESSION['imeurl']!= null){
      
      //////////////////////
  $query = "UPDATE {$tbl_name} SET name = '{$_POST['Hotel_name']}', image = '{$_SESSION['imeurl']}',catagary = '{$_POST['food_cata']}',price = '{$_POST['price']}',count = '{$_POST['count']}',instock = '{$_POST['count']}', edit_day = '{$day}',who_edit = '{$_SESSION['logname']}' WHERE {$tbl_name}. id = '{$id}'";

$result = mysqli_query($con,$query);
if(isset($result)){
        $_SESSION['uplo'] = null;
         $_SESSION['imeurl'] = null;
header("Location:allfood.php"); 
  
}
 //////////////////////////////////////////
  
  


    }

    
/////   
    
    
    
    
    
}
///yatin 4tnathuwa
  else{ 
 $query = "UPDATE {$tbl_name} SET name = '{$_POST['hotel_name']}',price = '{$_POST['price']}',count = '{$_POST['count']}',instock = '{$_POST['count']}', edit_day = '{$day}',who_edit = '{$_SESSION['logname']}' WHERE {$tbl_name}. id = '{$id}'";

$result = mysqli_query($con,$query);
if(isset($result)){
        $_SESSION['uplo'] = null;
         $_SESSION['imeurl'] = null;
header("Location:allfood.php");
}////
}

}
}
  
  

?>









<form action="editHotel.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table width="50%" border="0" align="center" class="pp">
  <tr>
<form action="addhotel.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table width="50%" border="0" align="center" class="pp">
  <tr>
    <td width="54%" >Hotel name</td>
    <td width="46%"><label for="Hotel_name"></label>
      <input name="Hotel_name" type="text" id="Hotel_name" placeholder="Hotel_name" placeholder="item name"  <?php  if(isset($_SESSION['logname'])){ if(isset($_SESSION['power'])){if($_SESSION['power']!='admin'){echo "disabled";}}else{echo "disabled";}}else{echo "disabled";} ?>/></td>
  </tr>
  <tr>
    <td rowspan="2" >Hotel id </td>
    <td><label for="hotel_id"></label>
      <label for="fileToUpload"></label>
      <input type="file" name="fileToUpload" id="fileToUpload"  <?php  if(isset($_SESSION['logname'])){ if(isset($_SESSION['power'])){if($_SESSION['power']!='admin'){echo "disabled";}}else{echo "disabled";}}else{echo "disabled";} ?>/>
      <input type="submit" name="upload" id="upload" value="Upload Image" <?php  if(isset($_SESSION['logname'])){ if(isset($_SESSION['power'])){if($_SESSION['power']!='admin'){echo "disabled";}}else{echo "disabled";}}else{echo "disabled";} ?>/></td>
  </tr>
  <tr>
    <td>
    <?php
    if(isset($uploadOk)){
		if($uploadOk=='1'){
			$_SESSION['uplo'] = $uploadOk;
			include('inc/addfoodime.php');
		}
	else{
		echo "$upload";
		$_POST['image'] = $upload;
	}
    
	}
    ?>
    </td>
  </tr>
  <tr>
    <td >Hotel rank</td>
    <td><label for=""></label>
      <label for="hotel_rank"></label>
      <select name="hotel_rank" id="hotel_rank" >
        <option>3 star</option>
        <option>4 star</option>
        <option>5 star</option>
      </select></td>
  </tr>
  <tr>
    <td >Hotel discription</td>
    <td><label for="discription"></label>
      <input type="text" name="discription" id="discription" placeholder="discription" <?php  if(isset($_SESSION['logname'])){ if(isset($_SESSION['power'])){if($_SESSION['power']!='admin'){echo "disabled";}}else{echo "disabled";}}else{echo "disabled";} ?>  /></td>
  </tr>
  <tr>
    <td>Price</td>
    <td><label for="price"></label>
      <input type="text" name="price" id="price" placeholder="price" <?php  if(isset($_SESSION['logname'])){ if(isset($_SESSION['power'])){if($_SESSION['power']!='admin'){echo "disabled";}}else{echo "disabled";}}else{echo "disabled";} ?>/></td>
  </tr>
  <tr>
    <td><input type="reset" name="reset" id="reset" value="Reset" <?php  if(isset($_SESSION['logname'])){ if(isset($_SESSION['power'])){if($_SESSION['power']!='admin'){echo "disabled";}}else{echo "disabled";}}else{echo "disabled";} ?>/></td>
    <td><input type="submit" name="add_hotel" id="add_hotel" value="&lt;-----------ADD-----------&gt;" <?php  if(isset($_SESSION['logname'])){ if(isset($_SESSION['power'])){if($_SESSION['power']!='admin'){echo "disabled";}}else{echo "disabled";}}else{echo "disabled";} ?>/></td>
  </tr>
</table>
</form>
<table width="50%" border="0" align="center" class="dd">
  <tr>
    <td>
    <?php
	if(isset($_SESSION['power'])){
		if($_SESSION['power']!='admin'){
			echo " Only Admins Can Use This Page";	
		}
	}
	else{
	echo " Only Admins Can Use This Page";	
	}
	?>
    </td>
  </tr>
  <tr>
    <td><?php
				 
              
	
//db conect
//include('inc/connetfoodtable.php');

if(isset($_POST['add_hotel'])){
if(isset($_POST['Hotel_name'])){
//check food name
  $name=$_POST['Hotel_name']  ;
  if($name==null){
   echo "please enter hotel name";
  }
  else{
	 
              $sql = "SELECT * from {$tbl_name} where name = '$name'";
              $resu_set= mysqli_query($con,$sql);
              $count = mysqli_num_rows ( $resu_set ); 
              if($count==1){
              echo "this hotel name used"."<br>";
              echo "try another one";

                }
        
    else if(isset($_SESSION['uplo'])){
		$uplodOk = $_SESSION['uplo'] ;
      if($uplodOk != '1'){
        echo "please upload image";
      }
      else {
		  
        if(isset($_POST['food_cata'])){
         $catagary = $_POST['food_cata'];
          if($catagary=="catagary"){
            echo "please enter food catagary";
          }
          else{
            if(isset($_POST['count'])){
              $count = $_POST['count'] ;
              if($count==null||'0'){
                echo "please enter valid count";
              }
              else{
                if(isset($_POST['price'])){
                    $price = $_POST['price'];
                  if($price==null){
                    echo "please enter price";
                  }
                  else{
                    $day = date('Y-m-d / H:i:s');
                    $username = $_SESSION['logname'];
                    $url = $_SESSION['imeurl'] ;
                    $query = "INSERT into food (name,image,catagary,price,count,sell,instock,who,add_day,buy_day,edit_day,who_edit) VALUES ('{$name}','{$url}','{$catagary}','{$price}','{$count}','0','{$count}','{$username}','{$day}','{$day}','{$day}','{$username}')";

                    $result = mysqli_query($con,$query);
                      if(isset($result)){
                      $_SESSION['uplo'] = null;
                      $_SESSION['imeurl'] = null;
                      header("Location:allfood.php");
                      }

                      else{
                        echo "we can't add now please try again";
                    }


                  }
                }
              }
            }
          }
        }
      }
	 
    }
	
	
  }
  
  
  
}

	
	
}
?></td>
  </tr>
  <tr>
    <td><font color="#FF0000">login as:- </font><?php
	
    if(isset($_SESSION['logname'])){
		echo "{$_SESSION['logname']}";
		if(isset($_SESSION['power'])){
			$power = $_SESSION['power'];
		}
		
		
		}
	else {
	echo "you ara not log in";
	}
	
	
	
	?></td>
  </tr>
  <tr>
    <td><font color="#FF0000"><?php 
		if(isset($_SESSION['power'])){
	echo "your power:-";
	}
	
	 ?></font>
    <?php
	if(isset($_SESSION['power'])){
	echo "{$power}";
	}
    
    ?>
    </td>
  </tr>
</table>

 
</body>
</html>