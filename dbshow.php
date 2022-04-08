<?php
    include("dbconn.php");

    $cnt=0;
    $sql="select * from student";
    $res=mysqli_query($con, "select * from student");
/*
        while($row=mysqli_fetch_assoc($res))
        {
            echo $row['name']."<br>";
            $cnt=$cnt+1;
        }
    echo "<br>Total Number of Data Displayed: ".$cnt."<br>";
*/
?>


<table border="1">
    <tr>
        <th>Name</th>
        <th>Contact</th>
    </tr>

    <?php
        if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_assoc($res))
            {
                echo "<tr>";
                echo "<td>".$row['name']."</td><td>".$row['contact']."</td>";
                echo "<tr>";
                $cnt=$cnt+1;
            }
        }
        echo "<br> Total Number of Data Displayed: ".$cnt."<br>";
    ?>
    
</table>