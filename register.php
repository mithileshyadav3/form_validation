<?php
include('connect.php');
if(isset($_POST['register'])){
       $first_name=$_POST['first'];
       $last_name=$_POST['last'];
      $age1=$_POST['birth'];
      $address=$_POST['address'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $len_pass=strlen($password);
      // calculate age
      $age=new DateTime($age1);
      $total_age=$age->diff(new DateTime());
      $actual_age=$total_age->y;
      $len_first_name=strlen($first_name);
      $len_last_name=strlen($last_name);
      if($len_first_name>=4 && $len_last_name>=4){
      if(preg_match("/^[a-zA-Z\s]+$/",$first_name) && preg_match("/^[a-zA-Z\s]+$/",$last_name)){
       if($actual_age>=18){
       if(preg_match("/^[0-9]{10}/",$phone) ){
        if($len_pass>=5 && $len_pass<=16 ){
// if(preg_match("/^[a-zA-Z\s]+$/",$password) && preg_match("/{}!@#$%^&*()+$/",$password)){
  if (preg_match("/[a-zA-Z0-9]+$/", $password) && preg_match("/[{}!@#$%^&*()+$]/", $password)) {
$slect="SELECT * from register where email='$email'";
$query=mysqli_query($conn,$slect);
$num_row=mysqli_num_rows($query);
if(!$num_row>0){
  $insert_data="INSERT into register (first_name,last_name,date,address,phone_number,email,password) 
  values('$first_name','$last_name','$age1','$address','$phone','$email','$password')" ;
  $query=mysqli_query($conn,$insert_data);
  if($query){
      echo"registration has successfully";
    header('location:login.php');
   }
   else{
echo"registration has not successfully";
   }
}
else{
  echo "email already exists";
}
}
else{
  echo " password only alphabetical characters";
}
        }
        else{
          echo"length of password should be between 5 and 16";
        }
       }
       else{
        echo "invalid mobile number";
       }
       }
       else{
        echo"please enter age greater than 18";
       }
      }
      else{
        echo"only albhabetical letters allowed";
      }
      }
      else{
        echo"atleast character should be 4 or more than";
      }
}  
?>
     