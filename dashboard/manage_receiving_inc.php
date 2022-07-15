<?php 

if(isset($_POST['submit'])){
	session_start();

	require "includes/conn.php";
	
	$id = $_POST['id'];
	$expiry_date = $_POST['expiry_date'];
	$new_capacity = $_POST['new_capacity'];
	$capacity = $_POST['capacity'];
	$dose = $_POST['dose'];
	$price_dosage = $_POST['price_dosage'];
	$half_dosage_price = $_POST['half_dosage_price'];

	

	//echo "$id";
	//echo "<br>";
	//echo "$expiry_date";
	//echo "<br>";
	//echo "$newQty";
	//echo "<br>";
	//echo "$old_Qty";
	//echo "<br>";
	//echo "$dosage";
	//echo "<br>";
	//echo "$price_dosage";
	//echo "<br>";
	//echo "$half_dosage_price";
	

		//update the store Quanitity if the medicine is not sold as a dose
		$balance = $new_capacity + $capacity;

		//echo "<br>";
		//echo "$balance";

		$sql = " UPDATE store SET
		capacity = '$balance',
        price_dosage = '$price_dosage',
        half_dosage_price = '$half_dosage_price',
		expiry_date = '$expiry_date'

		WHERE id = $id
		
		";
	$res = mysqli_query ($conn, $sql);
	if($res = true){
		
		$sql2 = " UPDATE pharmacy_stock SET
		expiry_date = '$expiry_date'
		WHERE id = $id

		";
		$res2 = mysqli_query ($conn, $sql2);

	} if ($res = true) {
		$_SESSION['se'] = "<div class='alert alert-success'> Received Successifuly</div>";
                        header ("Location:receiving.php");
	}
	else{
		$_SESSION['failed'] = "<div class='alert alert-danger'> Failed to Receive</div>";
                        header ("Location:receiving.php");
	}

}else {
	echo "Not clicked";
}
?>