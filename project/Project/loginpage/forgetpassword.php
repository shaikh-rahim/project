<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/project/signuppage/signupdata.css">
    <title>Document</title>
</head>
<body>
   <form method="POST"> 
    <!-- <input type="int" name="studentid" placeholder="ENTER STUDENTID"><br> -->
    <input type="email" name="email" placeholder="Enter Email ID" required><br>
    <!-- <input type="date" name="date" placeholder="Enter DOB" required style="width: 11%"><br> -->
    <input type="password" name="newpassword" placeholder="ENTER NEW PASSWORD"><br>
    <input type="submit" name="submit">
</form>
</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','database');
if(isset($_POST['submit']))
{
    // $studentid = $_POST['studentid'];
    $email=$_POST['email'];
    // $date=$_POST['date'];
    $newpassword = $_POST['newpassword'];
    $query = "UPDATE signupdata SET PASSWORD=$newpassword WHERE EMAIL='$email'";
    $RUN=mysqli_query($con,$query);
    if($RUN)
    {
      
       header("location:http://localhost/project/loginpage/loginpage.php");
       
    }
    else
    {
        echo '<script>alert("Invalid Data")</script>';
  
    }
}

?>
