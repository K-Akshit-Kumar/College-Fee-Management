<?php
    include '../dbconnect.php';
    $roll = $_GET['q'];
    
    $sql = "update supply set status = 'PAID' where rollNo ='$roll'";
    $result = $conn->query($sql);
    
                $sqls="select * from supply";
                $results=$conn->query($sqls);
                if($results){
                     while($rows=$results->fetch_assoc()){
                        echo "<table><tr><th scope='col' data-label='Roll Number ' style='min-width: 90vw'>".$rows['rollNo']."<span style='float: right;'> Status: ".$rows['status']."</span></th></tr>";
                        $sem=explode(",", $rows['subjects']);
                        foreach($sem as $sub){
                            if($sub!=null){
                                echo "<tr><td scope='row' data-label='Subject Name'>".$sub."</td></tr>";
                            }
                        }
                        echo "<tr><td>
                        <button style='margin-right: 20px;padding: 5px 20px; background-color: #7a9d96; border-radius: 10px; color: white; border: none;' value=".$rows['rollNo']." onclick= 'spay(this.value)'>Pay</button>
                        <button style='margin-right: 20px;padding: 5px 20px; background-color: #7a9d96; border-radius: 10px; color: white; border: none;' value=".$rows['rollNo']." onclick='srollback(this.value)'>Roll Back</button>
                        </td></tr>";
                        echo "</table>";
                     }
                }
?>