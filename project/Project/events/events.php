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

                        <form method="POST">
                          <div class="id"><input type="int" name="studentid" placeholder="ENTER STUDENTID" style=" text-align: center"></div> 
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
                            <a href="http://localhost/project/events/updateevents.php"><label name="update">Update Events</label></a>

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
   
    // echo $alldata;
    {
        // echo $item . "<br>";
        $query = "INSERT INTO events(STUDENTID,EVENTS) VALUES ('$id','$alldata')";
        $query_run = mysqli_query($con, $query);
    }

}
?>
