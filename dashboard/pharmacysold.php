<?php
 require "includes/conn.php";

 if(isset($_POST['submit'])){
    $_SESSION ['sessionId'] = $_POST['id'];
    $_SESSION ['qty'] = $_POST['qty'];
   $id = $_SESSION ['sessionId'];
   $qty = $_SESSION ['qty'];

   $sql = "UPDATE prescription SET qty='".$qty."',pstatus='solled' WHERE id=$id";
                    $res = mysqli_query($conn,$sql); 
                    

   header("location:prelist.php");
}


?>