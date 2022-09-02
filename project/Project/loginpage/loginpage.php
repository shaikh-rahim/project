<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginpage.css">
    <title>loginpage</title>
</head>
<body>
    <form method="POST">
      <label>Login</label><br>
      <div class="userdata">
      <input type="text" name="studentid" pattern="[0-9]*" placeholder="Enter StudentID" required><br>
      <input type="email" name="email" placeholder="Enter Email ID" required><br>
      <input type="password" name="password" pattern="[a-z,A-Z,0-9]*" placeholder="Enter Password" required>
      </div>
    <input type="submit" name="submit"><br>
    <a href="http://localhost/project/loginpage/forgetpassword.php"><label name="forget">Forget Password</label></a>
    </form>
</body> 
</html>
<?php
  $con=mysqli_connect('localhost','root','','database');
  if(isset($_POST['submit']))  
{
    $studentid=$_POST['studentid'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $query="Select * from signupdata where STUDENTID='$studentid' && PASSWORD='$password' && EMAIL='$email'";
    $RUN=mysqli_query($con,$query);
    $count = mysqli_num_rows($RUN);
    if($count == 1) {
      header("location:http://localhost/project/navigation/navigation.html");
   }else {
    echo '<script>alert("Invalid Data login with correct data")</script>';
   }
}
?>


