<!DOCTYPE html>
<html dir="ltr" lang="en">



<?php 
session_start();
require "includes/head.php";
// require "includes/auth.php";

?>

<body>
<?php 
if(isset($_SESSION['pharmacist_id']))
{
?>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php require "includes/header.php"?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php require "includes/asided.php";?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="doctor.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Issue Medicine </li>

                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Issue Medicine </h4>
                                    </div>
                                </div>
                                <!-- title -->

                            </div>
                            <table class="table v-middle">
                                <thead>
                                        <tr class="bg-warning text-white">
                                            <th class="border-top-0">Patient ID</th>
                                            <th class="border-top-0">Patient Name</th>
                                            <th class="border-top-0">Medicine Name</th>
                                            <th class="border-top-0">Stock Available</th> 
                                            <th class="border-top-0">Price</th> 
                                            <th class="border-top-0">Amount</th> 
                                            <th class="border-top-0">Action</th> 
                                        </tr>
                                    </thead>
                            <?php 
                            require "includes/conn.php";

                            $sql ="SELECT * FROM prescription WHERE pstatus='open'";      
                            $res = mysqli_query($conn,$sql);                          
                            $count = mysqli_num_rows($res);
                            if($count > 0){
                                
                                while ($rows=mysqli_fetch_assoc($res)) {
                                    $idp =$rows['id'];
                                    $patient_id =$rows['patient_id'];
                                    $medicine_id=$rows['medicine_id'];
                                    ?>
                            <form action="pharmacysold.php" method="post" id="manage-sales">
                            <div class="table-responsive">
                              
                                    <tbody>
                                        <tr>
                                            <?php 
														
                                                        
                                                        $sql2 ="SELECT * FROM patients WHERE id = '$patient_id'";
                                                        //create a query that fetch data from the database
                                                        $res2 = mysqli_query($conn,$sql2);
                        
                                                        //check if there are any records in the database
                                                        if ($res == TRUE) {
                                                            $count = mysqli_num_rows($res2);
                                                            $sn=1;
                                                            if($count > 0){
                                                                while ($rows=mysqli_fetch_assoc($res2)) {
                                                                    $id=$rows['id'];
                                                                    $patient_name=$rows['patient_name'];
                                                                    $patient_no=$rows['patient_no'];
                                                                    $location=$rows['location'];
                                                                    $dob=$rows['dob'];
                                                                    
                                                               ?>
                                            <td><?php echo $id;?></td>
                                            <td><?php echo $patient_name;?></td>
                                            
                                            <?php
										}

									}
								}
							?>

                                   
                                            <?php 
														
														
														
																	  $sql3 ="SELECT * FROM pharmacy_stock WHERE id = '$medicine_id'";
								//create a query that fetch data from the database
								$res3 = mysqli_query($conn,$sql3);

								//check if there are any records in the database
								if ($res == TRUE) {
									$count = mysqli_num_rows($res3);
									$sn=1;
									if($count > 0){
										while ($rows=mysqli_fetch_assoc($res3)) {
											$id=$rows['id'];
											$medicine_name=$rows['medicine_name'];
											$type=$rows['type'];
											$capacity=$rows['capacity'];
											$pharmacy_Qty=$rows['pharmacy_Qty'];
											$price=$rows['price'];
											$dosage_sold=$rows['dosage_sold'];
                                            $expiry_date= $rows['expiry_date'];
                                            $price_dosage= $rows['price_dosage'];
											$half_dosage_price= $rows['half_dosage_price'];
                                            $dosage=$rows['dosage'];
											
                                            if ($dosage_sold == "Yes") {
                                                $medicine_price = $price_dosage;
                                            }else {
                                                $medicine_price = $price;
                                            }

									   ?>
                                       <td><?php echo $medicine_name;?></td>
                                       <td><?php echo $pharmacy_Qty;?></td>
                                       <td><?php echo $price;?></td>
                                       <td><input type="number" name="qty" class="form-control text-right" step="any" id="qty" required>
                                    <input type="hidden" name="id" value="<?php echo $idp?> "></td>
                                       <td>  <button class="btn btn-block btn-block btn-success" name="submit"
                                                type="submit"><i class="fa fa-plus"></i>Sell</button></td>  											
                                                </form>
                                            <?php
										}

									}
								}
							?>
                                        
                                            <?php
                              }}  
                              ?>
                                            
                                    </div>

                        </div>
                    </div>
                </div>
                

            </div>
                            <
                            <?php
}
else
{
header("location:../index.php");
}?>	          
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.js"></script>


</body>

</html>