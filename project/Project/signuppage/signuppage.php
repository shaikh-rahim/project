<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signuppage.css">
    <title>signuppage</title>
</head>
<body>
    <form method="POST" >
      <label>Signup</label><br>
      <div class="userdata">
      <input type="int" name="studentid" pattern="[0-9]*" placeholder="Enter StudentID" required><br>
      <input type="email" name="email" placeholder="Enter Email ID" required><br>
      <input type="password" name="password" pattern="[a-z,A-Z,0-9]*" placeholder="Enter Password" required><br>
      <input type="date" name="date" placeholder="Enter DOB" required="" style="width: 11%"><br>
      
    </div>
    <input type="submit" name="submit">
    </form>
    <?php
  $con=mysqli_connect('localhost','root','','database');
  if(isset($_POST['submit']))  
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $studentid=$_POST['studentid'];
    $date=$_POST['date'];
    $query="INSERT INTO signupdata (STUDENTID,EMAIL,PASSWORD,DATE) VALUES ('$studentid','$email','$password','$date')";
    $RUN=mysqli_query($con,$query);
     header("Location:http://localhost/project/navigation/navigation.html");
  } 
 
?> 
</body>
</html>