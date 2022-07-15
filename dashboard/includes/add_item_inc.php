<?php

session_start();

require "conn.php";
if(isset($_POST['submit'])){
	//echo "Was clicked";
	
	$medicine_name = $_POST['medicine_name'];
	$capacity = $_POST['capacity'];
	$price = $_POST['price'];
	// $medicine_name = $_POST['medicine_name'];
	// $capacity = $_POST['capacity'];
	$type = $_POST['type'];
	// $price = $_POST['price'];
	// $dosage_sold = $_POST['dosage_sold'];
	// $dosage = $_POST['dosage'];
	// $app = $_POST['app'];
	// $price_dosage = $_POST['price_dosage'];
	// $half_price_dosage = $_POST['half_price_dosage'];
	
	
	
	$sql = "INSERT INTO store SET
	medicine_name = '$medicine_name',
	capacity = '$capacity',
	price = '$price'
	-- medicine_name = '$medicine_name',
	-- capacity = '$capacity',
	type = '$type',
	-- price = '$price',
	-- dosage_sold = '$dosage_sold',
	-- dosage = '$dosage',
	-- app = '$app',
	-- price_dosage = '$price_dosage',
	-- half_dosage_price = '$half_price_dosage'
	
	
	";
	
	$res = mysqli_query ($conn, $sql);
	if($res = true){
		 
		 $sql = "INSERT INTO store_items SET
	medicine_name = '$medicine_name',
	capacity = '$capacity',
	type = '$type',
	price = '$price'
	
	";
	$res = mysqli_query ($conn, $sql);
	if($res = true){
		
		$_SESSION['success'] = "<div class='alert alert-success'> Added Successifuly</div>";
                        header ("Location:../items_list.php");
	} 
	}else{
		$_SESSION['failed'] = "<div class='alert alert-success'> Failed to Add</div>";
                        header ("Location:../items_list.php");
	}
	
}
