<?php
session_start();
include 'connection.php';

if(isset($_POST['submit']))
{
$email= $_POST['email'];
$password= $_POST['password'];


$query="select * from register where email='$email' and password='$password'" ;
$result= mysqli_query($con, $query);

if (mysqli_num_rows($result)>0) {
    $row= mysqli_fetch_array($result);
    $_SESSION['cid']=  $row['id'];
    $_SESSION['cname'] = $row['name'];
    $_SESSION['cemail'] = $row['email'];
    $_SESSION['cphone'] = $row['phone'];
   $_SESSION['address'] = $row['address'];

 
   
     echo "<script>window.location='User/view_trip.php';alert('Login Successfully');</script>";
}

else
{
    echo "<script>window.location='User_Login.php';alert('Invalid Email OR Password');</script>";
}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Login</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
     <?php 
     include "header.php";
     ?>
     <br><br>
   
        <br><br>
       
<div class="container p-3 my-3 bg-dark" style="border-radius:15px; width:40%">
             <br>           
<h2 style="color:white;text-align:center;">User Login</h2>
   <br>
                           
 
           

<form method="post">
            <center>
                  

                   <div class="form-group mb-4">
                        <input  type="text" name="email" placeholder="Email" class="form-control w-50" required>
                       
                    </div>

                    <div class="form-group mb-4">
                        <input  type="password" name="password" placeholder="Password" class="form-control w-50" required>
                       
                    </div>

                    <div class="form-group mb-4">
                        <input type="submit" name="submit" class="btn btn-danger w-50" value="Login"> 
                    </div>

                    <div class="form-group mb-4">
                        <a href="forget_password.php">Forget Password</a> 
                    </div>

              </center>                    
          </form>
        </div>
      </div>
  </body>
</html>