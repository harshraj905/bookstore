<?php include ('db.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
  	<form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<?php 
$eml = $_POST['email'];
$passwrd = $_POST['password'];

 
if(isset($_POST['submit']))
{
  $checkEntry = mysqli_query($conn,"SELECT * FROM admin WHERE email = '$eml' OR password='$passwrd'");

  if(mysqli_num_rows($checkEntry)>0)
  {
    echo "<script>alert('User with same Credentials already exists. Please login or recover your password to access the Dashboard.')</script>";
    echo "<script>window.location.href='http://localhost/portfolio/login.php'</script>";
  }

  elseif(mysqli_num_rows($checkEntry) == 0)
  {
    mysqli_query($conn,"INSERT INTO admin(email,password) VALUES('$eml','$passwrd')");

    echo "<script>alert('Data Entered')</script>";


    echo "<a href='http://localhost/portfolio_interns/modules/ui/login.php' style='text-decoration:none'>Click Here to Login</a>";

    // echo "<script>window.location.href='http://localhost/portfolio/login.php'</script>";
  }  
  else
  {
    echo "<script>alert('No Data Entered')</script>";
  }
}



?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>	