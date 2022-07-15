<?php
 require "includes/conn.php";

 if(isset($_POST['submit'])){
    $_SESSION ['sessionId'] = $_POST['id'];
   $id = $_SESSION ['sessionId'];


   $sql = "UPDATE prescription SET pstatus='closed' WHERE id=$id";
                    $res = mysqli_query($conn,$sql); 
   header("location:casherpreList.php");
}


?>