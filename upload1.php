<?php

session_start();

include 'config.php';

if(isset($_POST['submit'])){


    $name = $_POST['name'];
    $issuing = $_POST['issuing'];
    $date = $_POST['date'];
    $credential = $_POST['credential'];

    $choose = $_POST['choose'];
    
  $file = $_FILES['file']['name'];
// $fileDestination = 'uploads/'.$fileNameNew;
$result = "INSERT INTO `certification`(`Name`, `Issuing`, `Date`, `CredentialURL`) VALUES ('$name', '$issuing', '$date', '$credential')";

$query = mysqli_query($conn,$result);


  if ($query) {
    //   move_uploaded_file($_FILES['file']['tmp_name'],  "uploads/".$_FILES['file']['name']);
    //   $_SESSION['status'] = "Image stored";
      header('location:welcome.php');
  }
  else {
    // $_SESSION['status'] = "Image not stored";
    header('location:welcome.php');
  }


//   $file = $_FILES['file'];




}

?>