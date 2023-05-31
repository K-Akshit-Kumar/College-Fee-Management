<?php
$q = $_GET['q'];
$r = $_GET['r'];
error_reporting(0);
include '../dbconnect.php';

$sql1 = "select * from ".$r." where rollNo= UPPER('$q')";
$result1 = $conn->query($sql1);
if($result1){
    while ($row1 = $result1->fetch_assoc()) {
        // container
        echo "<div style='width:100%;padding:25px 15px;display:flex;flex-direction:column;'>";
        echo "<h1 style='padding:5px 5px;background-color:#7a9d96;border-radius:10px;'>Student Details</h1>";
        // student details           
        echo "<div style='width:100%;display:flex;padding: 10px 0;'>";
        echo "<div style='width:100%;display:flex;flex-direction:column;justify-content:center;padding-left:20px;font-size:22px;margin:0 auto;line-height:50px; color: black;'>";
        echo "<label><strong>STUDENT NAME:</strong> " . $row1["sname"] . "</label>";
        echo "<label><strong>FATHER NAME:</strong> " . $row1["fname"] . "</label>";
        echo "<label><strong>DATE OF BIRTH:</strong> " . $row1["dob"] . "</label>";
        echo "<label><strong>AGE:</strong> " . $row1["age"] . "</label>";
        echo "<label><strong>GENDER:</strong> " . strtoupper($row1["gender"]). "</label>";
        echo "</div>";
        echo "</div>";
        // Educational Details
        echo "<h1 style='padding:5px 5px;background-color:#7a9d96;border-radius:10px;'>Educational Details</h1>";
        echo "<div style='width:100%;display:flex;flex-direction:column;padding: 20px 0;'>";
        echo "<div style='width:100%;display:flex;flex-direction:column;justify-content:center;padding-left:20px;font-size:22px;line-height:50px;color: black;'>";
        echo "<label><strong>ROLL NUMBER:</strong> " .strtoupper($row1["rollNo"]). "</label>";
        echo "<label><strong>DATE OF JOIN:</strong> " . $row1["doj"] . "</label>";
        echo "<label><strong>EDUCATION LEVEL:</strong> " . strtoupper($row1["edl"]). "</label>";
        echo "<label><strong>BRANCH:</strong> " . strtoupper($row1["branch"]). "</label>";
        echo "<label><strong>PHONE:</strong> " . $row1["phone"] . "</label>";
        echo "<label><strong>ADDRESS:</strong> " . $row1["address"] . "</label>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
}
    
?>