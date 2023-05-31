<?php
$roll = $_GET['q'];
error_reporting(0);
include '../dbconnect.php';

$sql1 = "update paymentdetails set status='PAID' where rollNo='$roll'";
if ($conn->query($sql1)) {
    $sql2 = "select * from paymentdetails";
    $result1 = $conn->query($sql2);
    echo "<tr>
            <th scope='col'>Name</th>
            <th scope='col'>Roll Number</th>
            <th scope='col'>Year</th>
            <th scope='col'>Semester</th>
            <th scope='col'>Status</th>
            <th scope='col'>Payment</th>
            <th scope='col'>RollBack</th>
        </tr>";
    if ($result1) {
        while ($row1 = $result1->fetch_assoc()) {
            $id = $row1["rollNo"];
            echo "<tr>
                <td scope='row' data-label='Name'>" . $row1["name"] . "</td>
                <td data-label='Roll Number'>" . $row1["rollNo"] . "</td>
                <td data-label='Year'>" . $row1["year"] . "</td>
                <td data-label='Semester'>" . $row1["semester"] . "</td>
                <td id='status' data-label='Status'>" . $row1["status"] . "</td>
                <td data-label='Pay'><button value=$id onclick=prac(this.value)>Pay</button></td>
                <td data-label='RollBack'><button value=$id onclick=rollBack(this.value)>Roll Back</button></td>
                </tr>";
        }
    }

} else {
    echo "<script>alert('Something Went Wrong!')</script>";
}

?>