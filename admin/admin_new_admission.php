<?php
// error_reporting(0);
include '../dbconnect.php';

$sname = $_GET['snames'];
$fname = $_GET['fnames'];
$age = $_GET['age'];
$gender = $_GET['gender'];
$rollNo = $_GET['rollNo'];
$dob = $_GET['dob'];
$doj = $_GET['doj'];
$edl = $_GET['edl'];
$branch = $_GET['branch'];
$phone = $_GET['phone'];
$address = $_GET['address'];
$batch = $_GET['batch'];
$bool = "false";

$sql1 = "show tables";

$result1 = $conn->query($sql1);
if ($result1) {
    while ($row1 = $result1->fetch_assoc()) {
        if ($row1["Tables_in_id20026403_student"] == "batch" . $batch) {
            // echo $bool;
            $bool = "true";
            break;
        } else {
            $bool = "false";
        }
    }
}
if ($bool=="true") {
    // echo "if1";
    $sql2 = "INSERT INTO batch".$batch." VALUES (UPPER('$sname'),UPPER('$fname'),'$age',UPPER('$gender'),UPPER('$rollNo'),'$dob','$doj',UPPER('$edl'),UPPER('$branch'),'$phone','$address')";
    $result2 = $conn->query($sql2);
    if ($result2) {
        // echo "if2";
        $sql5 = "insert into student_authentication values(UPPER('$sname'),UPPER('$rollNo'))";
        $result5 = $conn->query($sql5);
        echo "Save Successfully";
    } else {
        echo "Student details already exists";
    }
} 
else {
    // echo "Else";
        // $sql3 = "create table batch" . $batch . "(`sname` varchar(50) NOT NULL,
        //     `fname` varchar(50) NOT NULL,
        //     `age` int(2) NOT NULL,
        //     `gender` varchar(10) NOT NULL, 
        //     `rollNo` varchar(10) NOT NULL,
        //     `dob` date NOT NULL,
        //     `doj` date NOT NULL,
        //     `edl` varchar(20) NOT NULL,
        //     `branch` varchar(20) NOT NULL,
        //     `phone` int(10) NOT NULL,
        //     `address` varchar(100) NOT NULL)";
        if($batch!=null){
            $sql3 = "CREATE TABLE batch".$batch. " (
                `sname` varchar(50) NOT NULL,
                `fname` varchar(50) NOT NULL,
                `age` int(2) NOT NULL,
                `gender` varchar(10) NOT NULL,
                `rollNo` varchar(10) PRIMARY KEY NOT NULL,
                `dob` date NOT NULL,
                `doj` date NOT NULL,
                `edl` varchar(20) NOT NULL,
                `branch` varchar(20) NOT NULL,
                `phone` BIGINT(255) NOT NULL,
                `address` varchar(100) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
            $result3 = $conn->query($sql3);
        
            $sql4 = "INSERT INTO batch".$batch." VALUES (UPPER('$sname'),UPPER('$fname'),'$age',UPPER('$gender'),UPPER('$rollNo'),'$dob','$doj',UPPER('$edl'),UPPER('$branch'),'$phone','$address')";
            $result4 = $conn->query($sql4);
            if ($result4) {
                $sql6 = "insert into student_authentication values(UPPER('$sname'),UPPER('$rollNo'))";
                $result6 = $conn->query($sql6);
                echo "Saved Successfully";
            } else {
                echo "Something went wrong! ";
            }
        }else{
            echo "Fill the student details";
        }
}

?>