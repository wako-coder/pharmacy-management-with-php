


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHARMACY</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/style.css">



<!-- <meta http-equiv="X-UA-Compatible" content="IE=Edge"> -->
<!-- <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> -->
<!-- <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" /> -->
<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css"> -->
<!-- <link rel="icon" href="favicon.ico" type="image/x-icon"> -->
<!-- Custom Css -->
<!-- <link href="assets/css/main.css" rel="stylesheet"> -->
<link href="assets/css/login.css" rel="stylesheet">

<!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
<!-- <link href="assets/css/themes/all-themes.css" rel="stylesheet" /> -->

</head>
<body class="theme-cyan login-page authentication">
<?php
require('dashboard/includes/conn.php');
$error='';
session_start();
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
    $position=$_POST['position'];
    //echo "$username";
    //echo "$password";
 
	if($position!=''){
switch($position){
  
case 'storecoordinator':
$result=mysqli_query($conn,"SELECT storecoordinator_id, username FROM storecoordinator WHERE username='$username' AND password='$password'");
$row=mysqli_fetch_array($result);
if($row>0){
session_start();
$_SESSION['storecoordinator_id']=$row[0];
$_SESSION['username']=$row[1];
header('location:dashboard/storecoordinator.php');
}else{
$message="<font color=red class= messo id=alert-messo>Invalid login Try Again</font>";
}
break;
case 'Manager':
$result=mysqli_query($conn,"SELECT manager_id, first_name,last_name,staff_id,username FROM manager WHERE username='$username' AND password='$password'");
$row=mysqli_fetch_array($result);
if($row>0){
session_start();
$_SESSION['manager_id']=$row[0];
$_SESSION['first_name']=$row[1];
$_SESSION['last_name']=$row[2];
$_SESSION['staff_id']=$row[3];
$_SESSION['username']=$row[4];
header('location:dashboard/manager.php');
}else{

 echo"  <font color='red'><p class='wrong'>User Name and password not match!</p></font>";
}
break;
case 'Pharmacist':
$resultp=mysqli_query($conn, "SELECT * FROM pharmacist WHERE username='$username' AND password='$password'");
$row=mysqli_fetch_array($resultp);
if($row>0){
session_start();
$_SESSION['pharmacist_id']=$row[0];
$_SESSION['first_name']=$row[1];
$_SESSION['last_name']=$row[2];
$_SESSION['staff_id']=$row[3];
$_SESSION['username']=$row[4];
header('location:dashboard/pharmacist.php');
}else{
$message="<font color=red class= messo id=alert-messo>Invalid login Try Again</font>";
	
}
break;
case 'Cashier':
$result=mysqli_query($conn, "SELECT cashier_id, first_name,last_name,staff_id,username FROM cashier WHERE username='$username' AND password='$password'");
$row=mysqli_fetch_array($result);
if($row>0){
session_start();
$_SESSION['cashier_id']=$row[0];
$_SESSION['first_name']=$row[1];
$_SESSION['last_name']=$row[2];
$_SESSION['staff_id']=$row[3];
$_SESSION['username']=$row[4];
header('location:dashboard/cashier.php');
}else{
$message="<font color=red class= messo id=alert-messo>Invalid login Try Again</font>";
}
break;
case 'Doctor':
  $resultp=mysqli_query($conn, "SELECT * FROM Doctor WHERE username='$username' AND password='$password'");
  $row=mysqli_fetch_array($resultp);
  if($row>0){
  session_start();
  $_SESSION['Doctor_id']=$row[0];
  $_SESSION['first_name']=$row[1];
  $_SESSION['last_name']=$row[2];
  $_SESSION['staff_id']=$row[3];
  $_SESSION['username']=$row[4];
  header('location:dashboard/Doctor.php');

  }else{
  $message="<font color=red class= messo id=alert-messo>Invalid login Try Again</font>";
    
  }
  break;
}
}else{
echo'<script>window.alert("Please select your login category")</script>';
}
}
?>

    <div class="card">
    
        <section class="form sign up">
            
        <h1 class="title">Arsi University <span>pharmacy Management System</span>
        <span class="msg">Sign in to start your session</span></h1>

            <!-- <center><header> Login</header></center> -->
            <form class="header"  method="post" >
                
                   
                        <div class="field input">
                            <label for="">Username</label>
                            <input type="text" name="username" placeholder="Provide your Username">
                        </div>
                        <div class="field input">
                            <label for="">Password</label>
                            <input type="password" name="password" placeholder="Password">
                       </div><br>
                       <div class="field button"> 
                       <select name="position" >
                        <option>Choose your user type !!!!</option>
                        <option>Manager</option>
                        <option>storecoordinator</option>
	                      <option>Pharmacist</option>
		                   	<option>Cashier</option>
                         <option>Doctor</option>
                         </select>  
                            <input type="submit" name="submit" value="LOGIN">
                        </div>
                        
                            </form>
            
        </section>
    </div>
    <?php echo $error?>
 
</body>
</html>