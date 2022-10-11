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
<h2 style="color:white;text-align:center;">Enter your email to check </h2>
   <br>
                           
 
           

<form method="post" action="change_password.php">
            <center>
                  

                   <div class="form-group mb-4">
                        <input  type="text" name="email" placeholder="Email" class="form-control w-50" required>
                       
                    </div>

                    
                    <div class="form-group mb-4">
                        <input type="submit" name="submit" class="btn btn-danger w-50" value="Login"> 
                    </div>

                    <div class="form-group mb-4">
                        <a href="User_Login.php">Go Back</a> 
                    </div>

              </center>                    
          </form>
        </div>
      </div>
  </body>
</html>