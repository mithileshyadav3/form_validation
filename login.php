
<?php
session_start();
include('connect.php');
if(isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['password'];
$select="SELECT * from register where email='$email'";
$query=mysqli_query($conn,$select);
$fetch_data=mysqli_fetch_assoc($query);
   $name=$fetch_data['first_name'];
  $pass=$fetch_data['password'];
 

if($password===$pass){
  $_SESSION['name']=$name;
  echo "login successfully";
  header('location:dashboard.php');
  
}
else{
  echo "invalid password";
  // header('location:login.php');

}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>LoginPage</title>
      <!-- boostrap css link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
.main{
      height: 300px;
      width: 250px;
   box-shadow: aquamarine;
}
</style>
</head>
<body>
     <div class="container d-flex justify-content-center align-items-center  ">
      <div class="row  bg-info main"> 
   <form action="" method="post">
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control  " id="exampleInputPassword1" name="email">
  </div> 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">password</label>
    <input type="password" class="form-control  " id="exampleInputPassword1" name="password">
  </div>
    
     <input type="submit" class="btn btn-primary" value="submit" name="login">
   </form>
   </div> 
   </div>
       <!-- js link -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</body>
</html>