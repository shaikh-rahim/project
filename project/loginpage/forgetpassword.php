<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form> <input type="int" name="STUDENT">
    <input type="password" name="NEW">
    <input type="submit" name="submit">
</form>
</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','database');
if(isset($_POST['submit']))
{
    $id = $_POST['STUDENT'];
    $new = $_POST['NEW'];
    $query = "UPDATE signupdata SET PASSWORD='$new' WHERE STUDENTID='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
       
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
  
    }
}

?>
