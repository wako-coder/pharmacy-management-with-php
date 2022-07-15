
<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php 
session_start();
require "includes/head.php";
require "includes/conn.php";
//  require "includes/auth.php";
 
?>


<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='Invoice No-  '.createRandomPassword();
?>

<body>
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
      <?php require_once"includes/aside.php";?>
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
                <?php 
                        if (isset($_SESSION['success'])) {
                            echo $_SESSION['success'];
                            unset ($_SESSION['success']);
                        }
               ?>
			    <?php 
                        if (isset($_SESSION['updated_price'])) {
                            echo $_SESSION['updated_price'];
                            unset ($_SESSION['updated_price']);
                        }
               ?>
              
<div class="table-responsive">
                            <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-warning">
                                            
                                            <!-- <th class="border-top-0">id</th> -->
                                            <th class="border-top-0">invoice</th> 
                                            <!-- <th class="border-top-0">sales_date</th>  -->
                                            <th class="border-top-0">customer name</th> 
                                            <!-- <th class="border-top-0">medicine name</th>
                                            <th class="border-top-0">qty</th>
                                            <th class="border-top-0">price</th> -->
                                            <th class="border-top-0">Action</th>

  
                                        </tr>
                                    </thead>
                                    <?php 
														
                                                        require "includes/conn.php";



																			if(isset($_GET['page']))
																				{
																					$page = $_GET['page'];
																				}
																				else
																				{
																					$page = 1;
																				}

																				$num_per_page = 10;
																				$start_from = ($page-1)*10;

														
                                                        $sql ="SELECT * FROM sales ";
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
                                                                    $customer=$rows['customer'];
                                                                    $invoice=$rows['invoice'];
                                                                    //  $patient_no=$rows['patient_no'];
                                                                     $qty=$rows['qty'];
                                                                    $price=$rows['price'];
                                                                //     $expiry_date=$rows['expiry_date'];
                                                                //     $expiry_date=$rows['expiry_date'];
                                                                //    $dosage_sold=$rows['dosage_sold'];
                                                                //    $dosage=$rows['dosage'];
                                                                //    $price_dosage=$rows['price_dosage'];
                                                                   
                                                                //    $app=$rows['app'];
                                                               ?>
                                                
                                                                    
                                    <tbody>
                                        <tr>
                                        <!-- <td><?php echo $id; ?></td> -->
                                            <td><?php echo $invoice; ?></td>
                                            <td><?php echo $customer; ?></td>
                                            <!-- <td><?php echo $medicine_name; ?></td> -->
                                            <!-- <td><?php echo $qty; ?></td>
                                            <td><?php echo $price; ?></td> -->

                                                                         
                                            <td><a href="pos2.php?invoice=<?php echo $invoice;?> && id=<?php echo $id;?>" class="btn btn-success">sale</a></td>  											

                                        </tr>   
                                                      
                                    </tbody>

                                    <?php
										}

									}
								}
							?>		
                                    
                                </table>


                            </div>

                   <!-- ============================================================== -->
                <!-- This is the count of Medicine sales -->
                <!-- ============================================================== -->

              
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
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
