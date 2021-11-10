<?php


include 'config.php';

if(isset($_POST['deletedata']))
{
  $id = $_POST['delete_id'];


  $q = "DELETE FROM `education` WHERE id = $id ";
  mysqli_query($conn, $q);
  
  header('location:welcome.php');
}

?>