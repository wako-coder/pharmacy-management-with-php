
<!DOCTYPE html>
<html dir="ltr" lang="en">
<!-- <link rel="stylesheet" type="text/css" href="style/mystyle.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="style/form.css"> -->
<!-- <link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />  -->
<link rel="stylesheet" type="text/css" href="style/dashboard_styles.css"  media="screen" />
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
      <?php require_once"includes/asidem.php";?>
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

               
                
                <a href="admin_manager.php" class="dashboard-module">
                	<img src="../dashboard/img/man.png"  width="100" height="100" alt="edit" />
                	<span>Click here to manage <b>manager</b> account</span>
                </a>

                <a href="admin_doctor.php" class="dashboard-module">
                	<img src="../dashboard/img/doc.png"  width="100" height="100" alt="edit" />
                	<span>Click here to manage <b>doctor</b> account</span>
                </a>
                 



                <a href="admin_pharmacist.php" class="dashboard-module">
                	<img src="../dashboard/img/ph.jpg"  width="100" height="100" alt="edit" />
                	<span>Click here to manage <b>pharmacist</b> account</span>
                </a>
                 
                    
                  <a href="admin_cashier.php" class="dashboard-module">
                	<img src="../dashboard/img/ca.jpg"  width="100" height="100" alt="edit" />
                	<span>Click here to manage<b> cashier </b>account</span>
                </a>
                   
				
                <a href="admin_storecoordinator.php" class="dashboard-module">
                	<img src="../dashboard/img/st.jpg"  width="100" height="100" alt="edit" />
                	<span>Click here to manage <b>storecoordinator</b> account</span>
                </a>
                 
              
                </div>  
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
			</div> <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved 
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        
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
