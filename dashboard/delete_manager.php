<?php
session_start();
require "includes/conn.php";
if(isset($_GET['id'])){
 $userid=$_GET['id'];
    
}else{
    header ('Location:../index.php');
exit();
}
$sql=mysqli_query($conn, "DELETE from manager where manager_id='$userid'");
if($sql){
header("location:admin_manager.php");
}else{
    echo'<script>window alert("Failed!!! Please try again")</script>';
}
?>

