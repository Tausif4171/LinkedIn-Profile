<?php

session_start();

include 'config.php';

if(isset($_POST['submit'])){


    $school = $_POST['school'];
    $degree = $_POST['degree'];
    $field = $_POST['field'];
    $grade = $_POST['grade'];

    $choose = $_POST['choose'];
    
  $file = $_FILES['file']['name'];
// $fileDestination = 'uploads/'.$fileNameNew;
$result = "INSERT INTO `education`(`School`, `Degree`, `Field`, `Grade`) VALUES ('$school', '$degree', '$field', '$grade')";

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