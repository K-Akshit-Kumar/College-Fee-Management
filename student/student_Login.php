<?php
include '../dbconnect.php';

$sname = $_POST['sname'];
$roll = $_POST['rollNo'];
$sql = "select name,rollNo from student_authentication";
$result = $conn->query($sql);
if ($result) {
    $i = false;
    while ($row = $result->fetch_assoc()) {
        if (strtoupper($sname) == $row["name"] and strtoupper($roll) == $row["rollNo"]) {
            header("location:./student.html");
            $i = true;
            break;
        }

    }
    if ($i == false) {
        echo "<script>
                // document.getElementById('msg').innerHTML = 'Login Unsuccessful';
                alert('Invalid Name or Roll Number');
                window.location.replace('../index.html');
            </script>";
    }
}

?>