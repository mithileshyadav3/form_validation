<?php
session_start();
include('connect.php');
// include('login.php');


// if(!isset($_SESSION['name']))
// {
//        header('location:login.php');
//       exit();
// }
if (!isset($_SESSION['name'])) {
      header('Location: login.php');
      exit();
  }
  
//   echo "Welcome, " . $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>dashboard</title>
      <!-- boostrap css link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <style>
            h1{
                  text-align: center;
            }
            .anker button{
background-color: green;

            }
      </style>
</head>
<body>
     <h1>WELCOME<?php echo $_SESSION['name']; ?></h1> 
    <a href="logout.php" class="m-auto" > <button class="btn btn-bordered-0 bg-primary ">Logout</button></a>
    <a href="edit.php" class="m-auto" > <button class="btn btn-bordered-0 bg-primary ">Edit</button></a>
</body>
</html>