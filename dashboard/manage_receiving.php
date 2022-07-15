<?php
session_start();
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
$finalcode='Pn'.createRandomPassword();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php 
require "includes/head.php";
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
       <?php require "includes/asides.php";?>
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
                                    <li class="breadcrumb-item"><a href="medicine_list.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Receive Medicine</li>
									
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
              
                   <!-- ============================================================== -->
               
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
                                        <h4 class="card-title"> Receive Medicine </h4>  
                                    </div> 
									</div>
	<!-- =========================================================---->

    <!-------- Here we are getting the id of the selected medicine as well as the dosage_sold values--------->
                                    <?php
                                                if (isset($_GET['id'])) {
                                                    // Get the values 
                                                $id = $_GET['id'];
                                                
                                                }
                                                ?>

	<!-- =========================================================---->
                            </div>

                            <!--- ================================================= ---> 

                           <!-- Form to submit  medicine if it is sold as a dose-->
                            <!--- ================================================= ---> 



                            <form class="form-horizontal form-material" 
									action="manage_receiving_inc.php" method="post">
                                   <?php 
														
														require "includes/conn.php";
														
										$sql ="SELECT * FROM store WHERE id = '$id'";
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
											$capacity=$rows['capacity'];
                                            $type=$rows['type'];
                                            $dose=$rows['dose'];
                                            $bprice=$rows['bprice'];
											$price=$rows['price'];
											$expiry_date= $rows['expiry_date'];
									   ?>
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <div class="row">

                                                <div class="col-lg-4">
                                                <label for="example-email" >Medicine Name</label>
                                                <input type="text" name="title"
                                                class="form-control form-control-line"  value="<?php echo $medicine_name?>" name="example-email"
                                                id="example-email">
                                                </div>

                                                <div class="col-lg-4">
                                                <label for="example-email" >Dose </label>
                                                <input type="text" name="title"
                                                class="form-control form-control-line"  value="<?php echo $dose?>" name="example-email"
                                                id="example-email">
                                                </div>

                                                <div class="col-lg-4">
                                                <label for="example-email" >Type</label>
                                                <input type="text" name="title"
                                                class="form-control form-control-line"  value="<?php echo $type?>" name="example-email"
                                                id="example-email">
                                                </div>

                                                <div class="col-lg-4">
                                                <label for="example-email" class="col-md-4">Available Qty</label>
                                                <!-- <input type="number" name="capacity"  class="form-control form-control-line"  > -->
                                                <input type="number" name="capacity" value="<?php echo $capacity?>"
                                                class="form-control form-control-line" 
                                                id="example-email">
												</div>
                                                <div class="col-lg-12">
                                                <label for="example-email" >New Qty</label>
                                                <input type="number" name="new_capacity"
                                                class="form-control form-control-line"  value="" name="example-email"
                                                id="example-email">
                                                </div>

        

                                             
                                                <div class="col-lg-12">
                                                <label for="example-email" >Buying Price</label>
                                                <input type="number" name="bprice" value="<?php echo $bprice?>"
                                                class="form-control form-control-line" 
                                                id="example-email">
                                                </div>

                                                <div class="col-lg-12">
                                                <label for="example-email" >Selling Price</label>
                                                <input type="number" name="price" value="<?php echo $price?>"
                                                class="form-control form-control-line" 
                                                id="example-email">
												
                                                </div>
												<div class="col-lg-12">
                                                <label for="example-email" >Expiry Date</label>
                                                <input type="date" name="expiry_date" value="<?php echo $expiry_date?>"
                                                class="form-control form-control-line" 
                                                id="example-email">
                                                </div>
                                               


                                            </div>
                                        </div>
                                    </div>
									
									
									 <?php
										}

									}
								}
							?>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="hidden" name="id" value="<?php echo $id?>">
                                            <button class="btn btn-success btn-block" type="submit" name="submit" >Update Item</button>
                                        </div>
                                    </div>



                                </form>

                            
                          
                            <!--- ================================================= ---> 

                        </div>
                    </div>
                </div>
            </div>
            </div>
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

    <script>
		$(document).ready(function(){
    	// Get value on keyup funtion
    	$("#bprice, #price").keyup(function(){

    	var total=0;    	
    	var y = Number($("#bprice").val());
    	var x = Number($("#price").val());
    	var balance=x - y;  

    	$('#profit').val(balance);

    });
});
</script>
</body>

</html>