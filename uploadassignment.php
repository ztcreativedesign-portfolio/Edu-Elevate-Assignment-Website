<?php
include('./connection.php');

// error_reporting(E_ALL);
// ini_set("display_errors",1);
$name = "";
if(isset($_POST["submit"])) {
    
$name = $_POST['txtname'];
$email = $_POST['txtemail'];
$country_code = $_POST["phoneField1_phoneCode"];
$contactt = $_POST['phoneField1'];
$total = count($_FILES['upload']['name']);
$tmpPath = "";
$newPath = "";

$query = "INSERT INTO leads (name,email,country_code,customer_number,inserted_datetime) VALUES ('$name','$email','$country_code','$contactt',now())";

  mysqli_query($conn,$query) or die(mysqli_error($conn));
  $rows = mysqli_affected_rows($conn);
  if($rows > 0){

  echo "<script>alert('Assignment Uploaded!Our Expert Will Reach You Shortly'); 
   window.history.back();
  </script>";

  for ($i=0; $i < $total; $i++) { 
  
  $tmpPath = $_FILES['upload']['tmp_name'][$i];

  if ($tmpPath != "") {
    
    $newPath = './uploadFiles/'.$name.''.$_FILES["upload"]['name'][$i];
    move_uploaded_file($tmpPath, $newPath);
  } 

  else {
    echo "";
  }
}
} 
}



?>
