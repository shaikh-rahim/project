<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/project/signuppage/signuppage.css">
    <title>loginpage</title>
</head>
<body>
    <form method="POST">
      <label>Login</label><br>
      <div class="userdata">
      <input type="int" name="studentid" pattern="[0-9]*" placeholder="Enter StudentID" required><br>
      <input type="text" name="username" pattern="[a-z,A-Z]*" placeholder="Enter Username" required><br>
      <input type="password" name="password" pattern="[a-z,A-Z,0-9]*" placeholder="Enter Password" required>
      </div>
    <input type="submit" name="submit"><br>
    <a href="http://localhost/project/loginpage/forgetpassword.php"><label name="forget">Forget Password</label></a>
    </form>
    <?php
  $con=mysqli_connect('localhost','root','','database');
  if(isset($_POST['submit']))  
{
    $studentid=$_POST['studentid'];
    $password=$_POST['password'];
    $name=$_POST['username'];
    $query="Select * from signupdata where STUDENTID='$studentid' && PASSWORD='$password' && NAME='$name'";
    $RUN=mysqli_query($con,$query);
    $count = mysqli_num_rows($RUN);
    if($count == 1) {
      header("location:http://localhost/project/navigation/navigation.html");
   }else {
      echo"invalid Data";
   }
}
?>
</body> 
</html>


