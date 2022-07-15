
<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php 
session_start();
require "includes/head.php";
require "includes/conn.php";
//  require "includes/auth.php";
 
?>
<?php 
require "includes/head.php";
require "includes/conn.php";
//  require "includes/auth.php";
?>


<body>
<?php 
if(isset($_SESSION['cashier_id']))
{
?>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
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
      <?php require_once"includes/asidec.php";?>
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
               

                   <!-- ============================================================== -->
                <!-- This is the count of Medicine sales -->
                <!-- ============================================================== -->

                <div class="row">

                <div class="col-sm-3">
                        <a href="casherpreList.php">
                        <div class="card bg-primary text-white">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                   <?php 
                                
                                         $sql ="SELECT * FROM prescription WHERE pstatus='solled'";
                                        //execute query
                                        $res = mysqli_query($conn, $sql);
                                        //count
                                        $count = mysqli_num_rows($res);
                                        ?>
                                        <h4 class="card-title">solled medicines</h4>
                                        
                                        <h2 class="card-title"><?php echo $count?></h2>
                                    </div>
                                    
                                </div>
                                </div>
                            </div>
                            </a>
                        </div>
              
                    <div class="col-sm-3">
                        <div class="card bg-success">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center ">
                                    <div>
                                    <?php 
                                
                                $sql = "SELECT * FROM store";
                                //execute query
                                $res = mysqli_query($conn, $sql);
                                //count
                                $count = mysqli_num_rows($res);
                                ?>
                                        <h4 class="card-title align-items-center">STORE MEDICINE LIST</h3>
                                        
                                        <h2 class="card-title"><?php echo $count?></h2>
                                    </div>
                                    
                                </div>
                              
                                <?php 
														
														
														
									$sql ="SELECT * FROM store";
								//create a query that fetch data from the database
								$res = mysqli_query($conn,$sql);

								//check if there are any records in the database
								if ($res == TRUE) {
									$count = mysqli_num_rows($res);
									$sn=1;
									if($count > 0){
										while ($rows=mysqli_fetch_assoc($res)) {
											$id=$rows['id'];
											$medicine_name=$rows['medicine_name'];
											$type=$rows['type'];
											$capacity=$rows['capacity'];
											$Qty=$rows['Qty'];
											$price=$rows['price'];
											$amount=$rows['amount'];
											$expiry_date= $rows['expiry_date'];
											$drug_expiry_date = date("Y-m-d", strtotime(date("Y-m-d")));
									   ?>
						
											<?php
										}

									}
								}
							?>
                                </div>
                            </div>
                        </div>

                        
                        <!--- ============================================ -->
                                            <!--- This is the count of all Pharmacy Stock ---->
                       <!--- ============================================ -->
                       
                        <div class="col-sm-3">
                        <div class="card bg-warning">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center ">
                                    <div>
                                    <?php 
                                
                                $sql = "SELECT * FROM pharmacy_stock";
                                //execute query
                                $res = mysqli_query($conn, $sql);
                                //count
                                $count = mysqli_num_rows($res);
                                ?>
                                        <h4 class="card-title align-items-center">PHARMACY MEDICINE LIST </h3>
                                        
                                        <h2 class="card-title"><?php echo $count?></h2>
                                    </div>
                                    
                                </div>
                              
                                <?php 
														
														
														
									$sql ="SELECT * FROM pharmacy_stock";
								//create a query that fetch data from the database
								$res = mysqli_query($conn,$sql);

								//check if there are any records in the database
								if ($res == TRUE) {
									$count = mysqli_num_rows($res);
									$sn=1;
									if($count > 0){
										while ($rows=mysqli_fetch_assoc($res)) {
											$id=$rows['id'];
											$medicine_name=$rows['medicine_name'];
											$type=$rows['type'];
											$capacity=$rows['capacity'];
											// $Qty=$rows['Qty'];
											$price=$rows['price'];
											$amount=$rows['amount'];
											$expiry_date= $rows['expiry_date'];
											$drug_expiry_date = date("Y-m-d", strtotime(date("Y-m-d")));
									   ?>
						
											<?php
										}

									}
								}
							?>
                                </div>
                            </div>
                        </div>

                        <!--- ============================================ -->
                                            <!--- This is the count of all Expired Medicine---->
                       <!--- ============================================ -->

                    <div class="col-sm-3">
                        <div class="card bg-danger text-white">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                   <?php 
                                
                                         $sql ="SELECT * FROM store WHERE expiry_date < '$drug_expiry_date'";
                                        //execute query
                                        $res = mysqli_query($conn, $sql);
                                        //count
                                        $count = mysqli_num_rows($res);
                                        ?>
                                        <h4 class="card-title">EXPIRED DRUGS</h4>
                                        
                                        <h2 class="card-title"><?php echo $count?></h2>
                                    </div>
                                    
                                </div>
                                </div>
                            </div>
                        </div>



                        <!--- ============================================ -->
                                            <!--- This is the count of all damaged Medicine---->
                       <!--- ============================================ -->
                       <div class="col-sm-3">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                   <?php 
                                
                                         $sql ="SELECT * FROM damaged WHERE capacity > '0'";
                                        //execute query
                                        $res = mysqli_query($conn, $sql);
                                        //count
                                        $count = mysqli_num_rows($res);
                                        ?>
                                        <h4 class="card-title">DAMAGED DRUGS LIST</h4>
                                        
                                        <h2 class="card-title"><?php echo $count?></h2>
                                    </div>
                                    
                                </div>
                                </div>
                            </div>
                        </div>
                    
                    

                        <div class="col-sm-3">
                            <div class="card sha bg-info text-white">
                                <div class="card-body">
                                    <div class="d-md-flex align-items-center">
                                        <div>
                                        <?php 
                                
                                        $sql = "SELECT * FROM sales WHERE sales_date = '$drug_expiry_date'";
                                        //execute query
                                        $res = mysqli_query($conn, $sql);
                                        //count
                                        $count = mysqli_num_rows($res);
                                        ?>
                                            <h4 class="card-title"> Transaction Today</h4>
                                            <h2 class="card-title"><?php echo $count?></h2>
                                        </div>
                                        
                                    </div>
                                    </div>
                                </div>
                            </div>       
                    </div>

                 

                   
                    
                   
				
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
              
                </div>  
                <?php
}
else
{
header("location:../index.php");
}?>	
            <footer class="footer text-center">
                All Rights Reserved 
            </footer>
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
