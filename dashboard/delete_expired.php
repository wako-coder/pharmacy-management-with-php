
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
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                           WAKA PHARMACY
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
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
                                    <li class="breadcrumb-item"><a href="expireds.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Confirm deletion</li>
									
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
                                        <h4 class="card-title"> Delete form </h4>  
                                    </div> 
									</div>
                                <!-- title -->
                            </div>
                            	<form action="includes/delete_expired_inc.php" method="post" id="manage-receiving">
					
					<div class="col-md-12">
                     <?php
                if (isset($_GET['id'])) {
                    // Get the values 
                   $id = $_GET['id'];
                 

                }
				?>
						<hr>
						<div class="row mb-3">
								<div class="col-md-4">
									<label class="control-label">Medicine Name</label>

                                    <?php 
										//	sql to collect the drugs available in the store where the id is the checked id

										
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
                                                $price=$rows['price']; 	
                                                $bprice=$rows['bprice']; 
                                                $expiry_date =$rows['expiry_date'];	
												$app =$rows['app'];		
                                                $dosage_sold =$rows['dosage_sold'];	
                                                $total = $capacity * $price;											
										   ?>

                                    <input type="text" name="medicine_name" value="<?php echo "$medicine_name";?> " class="form-control text-right" step="any"  >
									<?php
										}

									}
								}
							?>
								</div>
								<div class="col-md-4">
									<label class="control-label">Available Quanitity</label>
									<input type="text" name="capacity" class="form-control text-right" step="any" 
                                     value="<?php echo $capacity?>" >
									<input type="hidden" name="amount" class="form-control text-right" step="any" 
                                     value="<?php echo $total?>" >
									<input type="hidden" name="price" class="form-control text-right" step="any" 
                                     value="<?php echo $price?>" >
									
								</div>
								<div class="col-md-2">
									<label class="control-label">Expired Qty</label>
									<input type="text" name="expiried_qty" class="form-control text-right" step="any"  value="<?php echo $capacity?>" >
                                     
									
								</div>
								
								<div class="col-md-2">
									<label class="control-label">Expiry Date</label>
									<input type="date" name="expiry_date" class="form-control text-right" step="any" value="<?php echo $expiry_date?>"  >
                                     
									
								</div>
								
								<div class="col-md-2 form-group">

                                    <input type="hidden" name="id" value="<?php echo "$id";?>" class="form-control text-right prc" id="qty" step="any" >	
								</div>

                              
							
						</div>
                        <div class="col-md-12 mb-3 float-right">
									<label class="control-label">&nbsp</label>
									<button class="btn btn-block btn-lg btn-danger " name="delete"  value="Reload Page" 
									type="submit" id="add_list"><i class="fa fa-plus"></i> Delete</button>
								</div>
                        
						</form>
						
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
              
            </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
              
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