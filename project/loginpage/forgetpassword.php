<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="POST"> 
    <input type="int" name="studentid" placeholder="ENTER STUDENTID"><br>
    <input type="password" name="newpassword" placeholder="ENTER NEW PASSWORD"><br>
    <input type="submit" name="submit">
    <style>
        body{
            text-align:center;
            background:cyan;
           
        }
       input{
        margin:5px;
         width:20%; 
         text-align:center;
       }
     
       form{
        padding-top:300px;
       }
        </style>
</form>
</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','database');
if(isset($_POST['submit']))
{
    $studentid = $_POST['studentid'];
    $newpassword = $_POST['newpassword'];
    $query = "UPDATE signupdata SET PASSWORD='$newpassword' WHERE STUDENTID='$studentid' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
       echo "Data Updated Successfully";
       header("location:http://localhost/project/loginpage/loginpage.php");
       
    }
    else
    {
        echo "Not Updated";
  
    }
}

?>
