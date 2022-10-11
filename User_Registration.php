<?php
session_start();
include 'connection.php';

if(isset($_POST['submit']))
{
$name= $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$password= $_POST['password'];


$sql="INSERT INTO `user_info`(`user_name`, `user_email`, `user_phone`, `user_password`) 
VALUES('$name','$email','$phone','$password')" ;

$result= mysqli_query($con, $sql);

if ($result){

 
   
     echo "<script>window.location='User_Login.php';</script>";
}

else
{
    echo "<script>window.location='User_Registration.php';</script>";
}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Registration</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
     <?php include "header.php";  ?>
     <br><br>
       
<div class="container p-3 my-3 bg-dark" style="border-radius:15px; width:40%">
             <br>            
<h2 style="color:white;text-align:center;">User Registration</h2>
   <br>
                           
 
           

<form method="post">
            <center>
                  

                   <div class="form-group mb-4">
                        <input  type="text" name="name" placeholder="Name" class="form-control w-50" required>
                       
                    </div>
                    <div class="form-group mb-4">
                        <input type="email" name="email" placeholder="Email" class="form-control w-50" required>
                        
                    </div>
                    <div class="form-group mb-4">
                        <input type="number" name="phone" placeholder="Phone" class="form-control w-50" required>
                        
                    </div>
                   
                    <div class="form-group mb-4">
                        <input  type="password" name="password" placeholder="Password" class="form-control w-50" required>
                       
                    </div>

                    <div class="form-group mb-4">
                        <input type="submit" name="submit" class="btn btn-danger w-50" value="Registered"> 
                    </div>

              </center>                    
          </form>
        </div>
      </div>
  </body>
</html>