<?php 
include '../dbconnect.php';

$year=$_GET['y'];
$sem=$_GET['s'];


$sql="select * from subjects where year=$year and semester=$sem";
$result=$conn->query($sql);
if($result){
    echo "<table><tr><th>Subjects</th></tr>";
    while($row=$result->fetch_assoc()){
       echo "<tr><td>".$row['subject']."</td></tr>";
    }
    echo "</table>";
}
?>