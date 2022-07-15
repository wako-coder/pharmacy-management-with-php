
<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php
session_start();
require "includes/head.php";
require "includes/conn.php";
if(isset($_GET['id'])){
$userid=$_GET['id'];

}else{
	header ('Location:../index.php');
	exit();
}?>
<?php 
require "includes/head.php";
require "includes/conn.php";
//  require "includes/auth.php";
?>

<!-- <link rel="stylesheet" type="text/css" href="style/mystyle.css">
	<link rel="stylesheet" type="text/css" href="style/form.css"> -->
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" /> 
<link rel="stylesheet" href="style/table1.css" type="text/css" media="screen" /> 
<script src="js/prescr.js" type="text/javascript"></script>
<style>
 #main {height: 477px;}
</style>

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
            <!-- <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                       
                       
                    </div>
                   
                </div>
            </div> -->
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

               
                <?php
require "includes/conn.php";
$queryfetch=mysqli_query($conn,"SELECT * FROM storecoordinator WHERE storecoordinator_id='".$userid."'") or die(mysqli_error());
    $rows=mysqli_num_rows($queryfetch);
    if($rows>0){
        while($data=mysqli_fetch_array($queryfetch)){
            $first_namec=$data['first_name'];
			$last_namec=$data['last_name'];
			$staff_idc=$data['staff_id'];
			$postalc=$data['postal_address'];
			$phonec=$data['phone'];
			$emailc=$data['email'];
			$usernamec=$data['username'];
			$passwordc=$data['password'];
        }
    }else{
        echo '<script>window.alert("No record found")</script>';
    }
    
    ?>
<div class="bg-warning" class="tabbed_area">  
      
      
      <div id="content_1"  class="bg-warning">  
                         <!---->
                         <?php
                  // 	    echo $message;
                  //   echo $message1;
                    ?>
                  <fieldset class="bg-warning"><legend class="bg-warning" >Please refill the informaton nedded down below to make un update.</legend>
              <form name="form1" onsubmit="return validateForm(this);" action="" method="post" class="insert" >
                  
              <p>First_Name:<input name="first_name" type="text" style="width:300px" placeholder="First Name" value="<?php  echo $first_namec; ?>" id="first_name" /></p>
           <p>Last_name:&nbsp<input name="last_name" type="text" style="width:300px" placeholder="Last Name" id="last_name" value="<?php echo $last_namec; ?>" /></p>
                    <p>Staff_Id: &nbsp &nbsp &nbsp<input name="staff_id" type="text" style="width:300px" placeholder="Staff ID" id="staff_id" value="<?php echo $staff_idc; ?>" /> </p> 
                    <p>Address.: &nbsp &nbsp<input name="postal_address" type="text" style="width:300px" placeholder="Address" id="postal_address" value="<?php echo $postalc; ?>" /> </p> 
                    <p class="phoneu">Phone.No:&nbsp &nbsp<input name="phone" type="text" style="width:300px" placeholder="Phone" id="phone" value="<?php echo $phonec ; ?>" /> </p> 
                    <p class="emailu">Email Acc:&nbsp &nbsp<input name="email" type="text" style="width:300px" placeholder="Email" id="email"value="<?php echo $emailc ; ?>" /></p>   
                    <p class="useru">Username:&nbsp&nbsp<input name="username" type="text" style="width:300px" placeholder="Username" id="username"value="<?php echo $usernamec ;?>" /></p>
                    <p class="passu">Password:&nbsp&nbsp<input name="password" style="width:300px"  placeholder="Password" id="password"value="<?php echo $passwordc ;?>"type="text" style="width:150px"/></p>
                    <p class="submu"><input name="submitu" type="submit" value="Update"/></p>
                 
              </form>
                      </fieldset>
              </div>
      <?php
if(isset($_POST['submitu'])){
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$sid=$_POST['staff_id'];
$postal=$_POST['postal_address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$username=$_POST['username'];
$pas=$_POST['password'];

// get value of id that sent from address bar


// Retrieve data from database 
$sql=mysqli_query($conn, "UPDATE storecoordinator SET first_name='$fname', last_name='$lname', staff_id='$sid',postal_address='$postal',phone='$phone',email='$email',username='$username', password='$pas' WHERE storecoordinator_id='".$userid."'");
if($sql) {echo '<script type="text/javascript">'; 
echo 'alert("Record updated successifully.");'; 
echo 'window.location.href = "admin_storecoordinator.php";';
echo '</script>';
}else{
$message1="<font color=red>Update Failed, Try again</font>";
}}
?>
      
      
      
      
      
      
  </div>  
</div>









                   
                    
                   
				
              
              
                </div>  
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
			</div> <!-- ============================================================== -->
            <!-- <footer class="footer text-center">
                All Rights Reserved 
            </footer> -->
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
