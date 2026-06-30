<?php
include('connection.php');

error_reporting(E_ALL);
ini_set("display_errors",1);
$name = "";
if(isset($_POST["submit"])) {
    
$name = $_POST['textName'];
$email = $_POST['textEmail'];
$country_code = $_POST["phoneField1_phoneCode"];
$contactt = $_POST['phoneField1'];
$service = $_POST['service'];
date_default_timezone_set('Asia/Karachi');
$datee = date('H:i:s', time());
$newdate = date('Y-m-d');

$query = "INSERT INTO popup(name,email,phone_code,phone,service,date,time) VALUES ('$name','$email','$country_code','$contactt','$service','$newdate','$datee')";

  mysqli_query($conn,$query) or die(mysqli_error($conn));
  
  
  echo "<script>
  alert('You have successfully enrolled in our discount promotional offer, Our representative will get back to you shortly.'); 
  window.history.back();
  </script>";
  
}

?>