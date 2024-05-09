<?php 

unset($_SESSION['loggedinUser']);
session_destroy();


echo "<script>alert('User Logged Out Successfully')</script>";

echo "<script>window.location.href='index.php'</script>";


?>