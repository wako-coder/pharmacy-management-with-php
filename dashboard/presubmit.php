<?php
 require "includes/conn.php";
 $sql ="SELECT * FROM pharmacy_stock ";      
 $res = mysqli_query($conn,$sql);                          
 $count = mysqli_num_rows($res);
 for ($i=0; $i < $count; $i++) { 
     
    if(isset($_POST[$i])){
        $medicine_id = $_POST[$i];		
        $patient_id = $_POST['patient_id'];	
        $sql = "INSERT INTO prescription (patient_id, medicine_id)
        VALUES ($patient_id, $medicine_id)";
        $res = mysqli_query($conn,$sql); 
        header("location:doctor.php");
    }
}
?>