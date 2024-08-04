<?php
include('connect.php');
$select="SELECT * FROM register ";
$query=mysqli_query($conn,$select);
$fetch_data=mysqli_fetch_assoc($query);
$f_name=$fetch_data['first_name']; 
$last_name=$fetch_data['last_name']; 
$date=$fetch_data['date']; 
$address=$fetch_data['address']; 
$phone_number=$fetch_data['phone_number']; 
$email=$fetch_data['email']; 
$password=$fetch_data['password']; 

if(isset($_POST['register'])){
      $first_name=$_POST['first'];
       $last_name=$_POST['last'];
      $age1=$_POST['birth'];
      $address=$_POST['address'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      // $select="SELECT * FROM register ";
      // $query=mysqli_query($conn,$select);
      $update="UPDATE register set  
first_name=' $first_name',
last_name=' $last_name',
date=' $age1',
address='$address',
phone_number=' $phone',
email='$email',
password ='$password' " ;
 $query=mysqli_query($conn,$update);
 if($update){
      echo"update has successfully";
 }
 else{
      echo"update has not successfully"; 
 } 
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <!-- boostrap css link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container bg-info d-flex justify-content-center ">
<form action="" method="post">
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">first_name</label>
    <input type="text" class="form-control  " id="exampleInputPassword1" name="first" value="<?php echo $f_name ?>">
  </div>
   
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Last Name</label>
    <input type="text" class="form-control  " id="exampleInputPassword1" name="last" value="<?php echo $last_name ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Date of Birth</label>
    <input type="date" class="form-control  " id="exampleInputEmail1" aria-describedby="emailHelp" name="birth" value="<?php echo $date ?>">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" class="form-control " id="exampleInputPassword1" name="address" value="<?php echo $address ?>" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone</label>
    <input type="text" class="form-control  " id="exampleInputEmail1" aria-describedby="emailHelp" name="phone" value="<?php echo $phone_number?>">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control  " id="exampleInputPassword1" name="email" value="<?php echo $email ?>">
  </div> 
 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">password</label>
    <input type="password" class="form-control  " id="exampleInputPassword1" name="password" value="<?php echo $password ?>">
  </div>
  
  <input type="submit" class="btn btn-primary" value="submit" name="register">
</form>
</div>
      <!-- js link -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<!-- 


-->