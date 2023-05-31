<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="../css/student.css?v=<?php echo time(); ?>"/>
    <!--TITLE-->
    <title>Payment</title>
    <style>
        form{
            margin: 0 auto;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>

<body class="paymentTable">
    <form action="select.php" method="post">
    <table class="subjects" id="subjects" style="margin:20px auto;">
        <?php
        error_reporting(0);
        include '../dbconnect.php';
        

        $name = $_POST['name'];
        $rollNo = $_POST['rollNumber'];
        $_SESSION["rollNumber"]=$_POST['rollNumber'];
        $type = $_POST['type'];
        $year = $_POST['year'];
        $semester = $_POST['semester'];
        $amount = 760;
        $status = "pending";
        $i = false;
        $sql1 = "select rollNo from student_authentication";
        $result1 = $conn->query($sql1);
        $sql2 = "select subject from subjects where year='$year' and semester='$semester'";
        $result2 = $conn->query($sql2);
            if ($result1) {
                while ($row1 = $result1->fetch_assoc()) {
                    if (strtoupper($rollNo) == $row1['rollNo']) {
                       if($type=="regular"){
                            $sql3 = "insert into paymentdetails values(UPPER('$name'),UPPER('$rollNo'),'$year','$semester',UPPER('$status'))";
                            $result3 = $conn->query($sql3);
                            $i = true;
                            if($result3){
                                if ($result2) {
                                    echo "<tr>
                                        <th>Subject Names</th>
                                        </tr>";
                                    while ($row2 = $result2->fetch_assoc()) {
                                        echo "<tr>
                                        <td>" . $row2["subject"] . "</td><br>
                                        </tr>";
                                    }
                                        echo "<tr>
                                        <td class='pay'>
                                            <span>Amount to be paid: <span id='amount'>760/-</span></span>
                                            <span>Amount to be paid to Staff</span>
                                        </td>
                                    </tr>";
                                }
                            }else{
                                echo "<tr>
                                    <td class='pay'>
                                        <span>You are already Submitted the form.</span>
                                    </td>
                                </tr>";
                                }
                       }else if($type=="supply"){
                           if($semester==2){
                                $semester=1;
                                $i=true;
                                $sql4="select * from subjects where year<$year";
                                $sql5="select * from subjects where year=$year and semester=$semester";
                                $result4=$conn->query($sql4);
                                $result5=$conn->query($sql5);
                                if($result4){
                                    echo "<tr><th>Subject Names</th><th style='padding-right: 20px;'>Select</th><tr>";
                                    while($row4=$result4->fetch_assoc()){
                                        echo "<tr><td>".$row4['subject']."</td><td><input type=checkbox name=sub[] value=".str_replace(' ','',$row4['subject'])."></td></tr>";
                                    }
                                }
                                if($result5){
                                    while($row5=$result5->fetch_assoc()){
                                        echo "<tr><td>".$row5['subject']."</td><td><input type=checkbox name=sub[] value=".str_replace(' ','',$row5['subject'])."></td></tr>";
                                    }
                                }
                            // echo "Found";
                           }else if($semester==1){
                                $sql4="select * from subjects where year<$year";
                                $result4=$conn->query($sql4);
                                $i=true;
                                if($result4){
                                echo "<tr><th>Subject Names</th><th style='padding-right: 20px;'>Select</th></tr>";
                                 while($row4=$result4->fetch_assoc()){
                                     echo "<tr><td>".$row4['subject']."</td><td><input type=checkbox name=sub[] value=".str_replace(' ','',$row4['subject'])."></td></tr>";
                                 }
                                 
                                }
                                // echo "<tr><input type='submit' name='set' value='Select' style='padding: 10px 40px; background-color: #7a9d96; border-radius: 10px; color: white; border: none; font-weight: 550;font-size: 20px;'></tr>";
                                 
                          }
                       }else{
                           echo "Not Found";
                       }
                        
                    }
                }
            }
            if($i!=true){
                echo "<tr>
                        <td class='pay'>
                            <span>Student Details Not Found!</span>
                           
                        </td>
                    </tr> ";
            }
            echo "<input type='hidden' value=".$rollNo." name='hide'>";
            
        ?>
         
    </table>
   <input type="submit" name="set" id="sel" value="Select" style="padding: 10px 40px; background-color: #7a9d96; border-radius: 10px; color: white; border: none; font-weight: 550;font-size: 20px; display:none">
    </form>
<?php 
echo "<script>
if('$type'=='supply'){
    document.getElementById('sel').style.display='';
}
if('$type'=='regular'){
    var id = setInterval(() => {
          if(confirm('You can now Logout!') == true){
                window.location.replace('https://miniproject13440.000webhostapp.com/index.html');
            }else{
                clearInterval(id);
            }
        }, 10000);
}
</script>";
?>
</body>

</html>