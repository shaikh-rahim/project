<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="events.css">
</head>
<body>
<h1>Update Events</h1>
                        <form method="POST">
                          <div class="id"><input type="int" name="studentid" placeholder="ENTER STUDENTID" required ></div> 
                          <div class="events">
                                <div class="Sports">
                                <input type="checkbox" name="Events[]" value="Cricket"> Cricket <br>
                                <input type="checkbox" name="Events[]" value="Table Tennis"> Table Tennis <br>
                                <input type="checkbox" name="Events[]" value="Carrom"> Carrom <br>
                                <input type="checkbox" name="Events[]" value="Chess"> Chess <br>
                                <input type="checkbox" name="Events[]" value="Football"> Football <br>
                                </div>
                               <div class="Cultural">
                                <input type="checkbox" name="Events[]" value="Dance"> Dance <br>
                                <input type="checkbox" name="Events[]" value="Singing"> Singing<br>
                                <input type="checkbox" name="Events[]" value="Drama"> Drama<br>
                                <input type="checkbox" name="Events[]" value="Elucation"> Elucation<br>
                                <input type="checkbox" name="Events[]" value="StoryTelling"> StoryTelling<br>
                                </div>
                           </div>
                            <div class="save"> 
                                 <button type="submit" name="save">SUBMIT</button>
                            </div>
                            

                        </form>                
</body>
</html>
<?php                        
$con = mysqli_connect("localhost","root","","database");

if(isset($_POST['save']))
{
    $Events = $_POST['Events'];
    $alldata=implode(",",$Events);
    $id=$_POST['studentid'];
    $query = "UPDATE events SET EVENTS='$alldata' WHERE STUDENTID='$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        
       header("location:http://localhost/project/events/events.php");
    //    echo '<script>alert("Update Successfully")</script>'; 
  
    }
    else
    {
        echo "Not Updated";
  
    }
}
?>
