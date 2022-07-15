
<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php 
 session_start();
require "includes/head.php";
// require "includes/auth.php";
   
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
                        <h4 class="page-title">Add Patients Form</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="doctor.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Patients Form </li>
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
              <?php 
			  
			  if(isset($_GET['id'])){
				  $patient_no = $_GET['id'];
			  }
			  ?>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title"> <?php echo $patient_no;?></h3>
                            
                        </div>
                        <div class="table-responsive">
                        <div class="col-lg-12 ">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal form-material"
                             action="includes/add_customers_inc.php"  method="post">
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12"> <b>Patient Name</b></label>
                                    <div class="col-md-12">
                                        <input type="text" name="patient_name" placeholder="Enter Patient Name"
                                            class="form-control form-control-line" 
                                            id="example-email">
											<input type="hidden" name="patient_no" placeholder="Enter Patient Name"
                                            class="form-control form-control-line" 
                                            id="example-email"
											value = "<?php echo $patient_no;?>"
											>
											<input type="hidden" name="status" placeholder="Enter Patient Name"
                                            class="form-control form-control-line" 
                                            id="example-email"
											value = "0"
											>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="example-email" class="col-md-12"> <b>Date of Birth</b></label>
                                    <div class="col-md-12">
                                        <input type="date" name="dob" placeholder="Enter the patient date of birth "
                                            class="form-control form-control-line" 
                                            id="example-email">
                                    </div>
                                </div>  
								
								<div class="form-group">
                                    <label for="example-email" class="col-md-12"> <b>Location</b></label>
                                    <div class="col-md-12">
                                        <input type="text" name="location" placeholder="Enter the Address "
                                            class="form-control form-control-line" 
                                            id="example-email">
                                    </div>
                                </div> 
								
                               

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" type="submit" name="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                            


                        </div>
                    </div>
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
</body>

</html>