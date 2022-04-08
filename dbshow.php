<?php
    include("dbconn.php");

    $cnt=0;
    $sql="select * from student";
    $res=mysqli_query($con, "select * from student");

        while($row=mysqli_fetch_assoc($res))
        {
            echo $row['name']."<br>";
            $cnt=$cnt+1;
        }
    echo "<br>Total Number of Data Displayed: ".$cnt."<br>";

?>