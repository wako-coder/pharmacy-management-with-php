

<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php
session_start();
require "includes/head.php";
 require "includes/conn.php";
if(isset($_SESSION['username'])){
$id=$_SESSION['manager_id'];
$username=$_SESSION['username'];
}else{
    header ('Location:../index.php');
exit();
}
if(isset($_POST['submit'])){
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$sid=$_POST['staff_id'];
$postal=$_POST['postal_address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$user=$_POST['username'];
$pas=$_POST['password'];
$sql1=mysqli_query($conn,"SELECT * FROM storecoordinator WHERE username='$user'")or die(mysqli_error());
 $result=mysqli_fetch_array($sql1);
if($result>0){
// $message="<font color=blue>sorry the username entered already exists</font>";

echo 'alert("sorry the username entered already exists.");'; 
 }else{
$sql=mysqli_query($conn,"INSERT INTO storecoordinator(first_name,last_name,staff_id,postal_address,phone,email,username,password,date)
VALUES('$fname','$lname','$sid','$postal','$phone','$email','$user','$pas',NOW())");
if($sql>0) {
echo '<script type="text/javascript">'; 
echo 'alert("storecoordinator successifully added.");'; 
echo 'window.location.href = "admin_storecoordinator.php";';
echo '</script>';
}else{
$message1="<font color=red>Registration Failed, Try again</font>";
}
	}}
?>


<?php 
require "includes/head.php";
require "includes/conn.php";
//  require "includes/auth.php";
 
?>
<?php 
require "includes/head.php";
require "includes/conn.php";
//  require "includes/auth.php";
?>
<!-- 
<link rel="stylesheet" type="text/css" href="style/mystyle.css">
	<link rel="stylesheet" type="text/css" href="style/form.css"> -->
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" /> 
<link rel="stylesheet" href="style/table1.css" type="text/css" media="screen" /> 
<script src="js/prescr.js" type="text/javascript"></script>

<script>
	
function validateForm()
{

//for alphabet characters only
var str=document.form1.first_name.value;
	var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	//comparing user input with the characters one by one
	for(i=0;i<str.length;i++)
	{
	//charAt(i) returns the position of character at specific index(i)
	//indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
	if(valid.indexOf(str.charAt(i))==-1)
	{
	alert("First Name Cannot Contain Numerical Values");
	document.form1.first_name.value="";
	document.form1.first_name.focus();
	return false;
	}}
	
if(document.form1.first_name.value=="")
{
alert("Name Field is Empty");
return false;
}

//for alphabet characters only
var str=document.form1.last_name.value;
	var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	//comparing user input with the characters one by one
	for(i=0;i<str.length;i++)
	{
	//charAt(i) returns the position of character at specific index(i)
	//indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
	if(valid.indexOf(str.charAt(i))==-1)
	{
	alert("Last Name Cannot Contain Numerical Values");
	document.form1.last_name.value="";
	document.form1.last_name.focus();
	return false;
	}}
	

if(document.form1.last_name.value=="")
{
alert("Name Field is Empty");
return false;
}



if(document.form1.password.value.8 < length < 25)
{
alert("Password length should be more than 8 characters...");
document.form1.password.focus();
return false;
}

if(document.form1.password.value=="")
{
alert("password Field is Empty");
return false;
}



}

</script>

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
             

			<!-- <div id="content"> -->
				<!-- <div id="main"> -->
<!-- <div id="tabbed_box" class="tabbed_box">   -->
    <!-- <h4>Manage storecoordinator</h4>  -->
<!-- <hr/>	 -->
               
				<div class="tabbed_area">  
      
        <ul class="tabs">  
            <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">View storecoordinator</a></li>  
            <li><a href="javascript:tabSwitch('tab_2', 'content_2');" id="tab_2">Add storecoordinator</a></li>  
              
        </ul>  
		<div id="content_1" class="content">  
		<?php 
		// echo $message;
		// 	  echo $message1;
		/* 
		View
        Displays all data from 'storecoordinator' table
		*/
        // connect to the database
		require "includes/conn.php";
       // get results from database
       $result = mysqli_query($conn, "SELECT * FROM storecoordinator")or die(mysql_error());
		// display data in table
        echo "<table border='2' cellpadding='22'align='center'>";
        echo "<tr> <th>ID</th><th>Firstname </th> <th>Lastname </th> <th>Username </th><th>phone.No </th> <th>Address </th><th>Update </th><th>Delete</th></tr>";
        // loop through results of database query, displaying them in the table
        while($row = mysqli_fetch_array( $result )) {
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['storecoordinator_id'] . '</td>';
                echo '<td>' . $row['first_name'] . '</td>';
				echo '<td>' . $row['last_name'] . '</td>';
				echo '<td>' . $row['username'] . '</td>';
                echo '<td>' . $row['phone'] . '</td>';
				echo '<td>' . $row['postal_address'] . '</td>';
				?>
				<td><a href="update_storecoordinator.php?id=<?php echo $row['storecoordinator_id']?>"><img src="img/update-icon.png" width="35" height="35" border="0" /></a></td>
				<td><a href="delete_storecoordinator.php?id=<?php echo $row['storecoordinator_id']?>"><img src="img/delete-icon.jpg" width="35" height="35" border="0" /></a></td>
				<?php
		 } 
        // close table>
        echo "</table>";
?> 
              </div>  
              <div id="content_2"  class="bg-warning">  
		           <!--storecoordinator-->
				   <?php
			// 	    echo $message;
			//   echo $message1;
			  ?>
			<fieldset class="bg-warning"><legend class="bg-warning" >To add new storecoordinator,Please fill the informaton nedded down below.</legend>
		<form name="form1" onsubmit="return validateForm(this);" action="admin_storecoordinator.php" method="post" class="insert" >
			
				<p><input name="first_name" type="text" style="width:350px" placeholder="First Name" required="required" id="first_name" /></p>
				<p><input name="last_name" type="text" style="width:350px" placeholder="Last Name" required="required" id="last_name" /></p>
				<p><input name="staff_id" type="text" style="width:350px" placeholder="Staff ID" required="required" id="staff_id"/> </p> 
				<p><input name="postal_address" type="text" style="width:350px" placeholder="Address" required="required" id="postal_address"/> </p> 
				<p class="phone"><input name="phone" type="text" style="width:350px"placeholder="Phone"  required="required" id="phone"/></p>  
				<p class="email"><input name="email" type="text" style="width:350px" placeholder="Email" required="required" id="email"/> </p> 
				<p class="userv"><input name="username" type="text" style="width:350px" placeholder="Username" required="required" id="username"/></p>
				<p class="pass"><input name="password" type="text" style="width:350px" placeholder="Password" required="required" id="password"/></p>
				<p class="subm"><input name="submit" type="submit" value="Submit"/></p>
           
		</form>
				</fieldset>
        </div>  
    <!-- </div>   -->
</div>
<!-- </div> -->
<!-- </div>            -->

                   
                    
                   
				
              
              
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
