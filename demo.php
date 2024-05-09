<?php 
include ('db.php'); 
?>
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

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $matchCredentials = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email' AND password = '$password'");

    if (mysqli_num_rows($matchCredentials) > 0) {
        session_start();
        $_SESSION['loggedinUser'] = $email;

        echo "<script>alert('Login Successful');</script>";
        echo "<script>window.location.href='http://localhost/bookstore/dashboard/dashboard.php';</script>";
    } else {
        echo "<script>alert('No Authentic User Found');</script>";
    }
}

?>

    

    
  </body>
</html>