<?php
session_start();
// if(isset($_POST['Submit'])){
  $msg = '';
 $fullname = $_POST['fullname'];
 $email = $_POST['email'];
 $mobile = $_POST['mobile'];
 $Yourmessage = $_POST['yourmessage'];
 $conn = mysqli_connect("localhost","root","","website") or die ("connection failed");
 $sql = "INSERT INTO  contactfrom(fullname, email, mobile, yourmessage)  VALUES('{$fullname}','{$email}','{$mobile}','{$Yourmessage}')";
 $result = mysqli_query($conn,$sql) or die("Query Failed");
 $_SESSION['msg'] = 'Form Submitted';
  // header("location: http://localhost/website/contact.php");
  // echo " <script> alert('Data added');
  //     window.location.href ='contact.php'
  // </script> ";
  header("location:contact.php");
  mysqli_close($conn);
// }
?>  