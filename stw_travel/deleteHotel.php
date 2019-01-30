<table border="1px" width="100%">
    
       Hotel_id
       Hotel_name
       Hotel_rank
       Hotel_location
       Hotel_sdiscription
       Hotel_ldiscription
       Hotel_price
       img_path
    
    ';
             Print ''. $row['Hotel_id'] . "";
             Print ''. $row['Hotel_name'] . "";
             Print ''. $row['Hotel_rank'] . "";
             Print ''. $row['Hotel_location'] ."";
             Print ''. $row['Hotel_sdiscription'] . "";
             Print ''. $row['Hotel_ldiscription'] . "";
             Print ''. $row['Hotel_price'] . "";
             Print ''. $row['img_path'] . "";
             Print '<a href="editHotel.php?id='.$row['id'].'">edit';
             Print '<a href="#" nclick="myfunction('.$row['id'].')">delete</a>';
             Print ''. $row['public'] . '';
          Print '';
       }
    ?>



<script>
    function myFunction(id)
    {
       var r = confirm("Are you sure you want to delete this record?");
       if(r == true)
       {
          window.location.assign("deleteHotel.php?id=" + id);
       }
    }
</script>
<?php
    session_start(); //starts the session
    if($_SESSION['admin']){ //checks if user is logged in
    }
    else {
       header("location:index.php"); //redirects if user is not logged in.
    }

    if($_SERVER['REQUEST_METHOD'] == "GET")
    {
       mysql_connect("localhost", "root", "") or die(mysql_error()); //connect to server
       mysql_select_db("first_db") or die("cannot connect to database"); //Connect to database
       $id = $_GET['id'];
       mysql_query("DELETE FROM list WHERE id='$id'");
       header("location:home.php");
    }
?>