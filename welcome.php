<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
   header("location: login.php");
}


?>


<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <title>login system!</title>

</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Login System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <ul class="navbar-nav">
            <li class="nav-item active">
               <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="logout.php">Logout</a>
            </li>



         </ul>

         <div class="navbar-collapse collapse">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome " . $_SESSION['username'] ?></a>
               </li>
            </ul>
         </div>


      </div>
   </nav>

   <div class="container mt-4">
      <h3 style="font-size: 22px;"><?php echo "Welcome " . $_SESSION['username'] ?>! You can now use this website</h3>
      <hr>

   </div>

   <div class="container">
      <div class="card">

         <h5 class="card-header">Education<a href="#" class="btn btn-primary" style="float:right; width:70px; " data-toggle="modal" data-target="#exampleModal">Add</a>
         </h5>
         <!-- <a href="#" class="btn btn-primary" style="margin-left:20px; width:70px; margin-top:12px " data-toggle="modal" data-target="#exampleModal1">Add</a> -->

         <?php

         include 'config.php';

         $q = "select * from education";
         $query = mysqli_query($conn, $q);
         while ($res = mysqli_fetch_array($query)) {


         ?>

            <div class="card-body" id="fas">
               <h5 class="card-title" id="fas1"><?php echo $res['School']; ?></h5>
               <p class="card-text" id="fas1"><?php echo $res['Degree']; ?>, <?php echo $res['Field']; ?></p>

               <h6 class="card-text" id="fas1"><?php echo $res['Grade']; ?></h6>
               <a href="#" id="fas1" style="width:70px;" class="btn btn-success">Edit</a>
               <!-- <button type="button" id="fas1" class="btn-danger btn deletebtn">Delete</button> -->

               <button type="button" class="btn-danger btn" data-toggle="modal" data-target="#deletemodal">Delete</button>
            </div>

         <?php
         }
         ?>
      </div>
   </div>

   <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <form action="delete.php" method="POST">

               <div class="modal-body">
                  <input type="hidden" name="delete_id" id="delete_id">
                  <h4>Do you want to Delete this Data ??</h4>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                  <button type="submit" name="deletedata" class="btn btn-primary">Yes !! Delete it.</button>
               </div>

            </form>
         </div>
      </div>
   </div>
   <br>
   <br>
   <div class="container">
      <div class="card">
         <h5 class="card-header">Certification</h5>

         <div class="card-body">
            <a href="#" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModal1">Add</a>
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-success">Edit</a>
         </div>

      </div>
   </div>


   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="upload.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                     <label for="exampleInputEmail1">School</label>
                     <input type="name" class="form-control" name="school" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Degree</label>
                     <input type="name" class="form-control" name="degree" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Field of study</label>
                     <input type="name" class="form-control" name="field" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Grade</label>
                     <input type="name" class="form-control" name="grade" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>


                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>


   <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Schools</label>
                     <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Degree</label>
                     <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Field of study</label>
                     <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Grade</label>
                     <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>

               </form>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <a href="welcome.php"><button type="button" class="btn btn-primary">Submit</button></a>
            </div>
         </div>
      </div>
   </div>

   <script>
      $(document).ready(function() {

         $('.deletebtn').on('click', function() {

            $('#deletemodal').modal('show');

            $fas = $(this).closest('#fas');

            var data = $fas.children("#fas1").map(function() {
               return $(this).text();
            }).get();

            console.log(data);

            $('#delete_id').val(data[0]);

         });

      });
   </script>


   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>