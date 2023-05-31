<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--FAVICON-->
     <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3208/3208977.png" type="image/x-icon"/>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/admin.css?v=<?php echo time(); ?>">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">
    <!-- TITLE -->
    <title>Admin Panel</title>
    <style>
        #stable{
            margin: 50px auto;
            color: black;
        }
    </style>
</head>
<body class="admin" oncontextmenu="return false;">
    <div id="preload"></div>
    <div class="header">
        <a href="#" onclick="menu()"><img src="https://cdn-icons-png.flaticon.com/512/3856/3856213.png" alt="menu"
                id="menuIcon" width="20px"></a>
        <span class="title">Admin <strong>Panel</strong></span>
        <div class="mode-log">
            <button id="logout" onclick="logout()">Logout</button>
        </div>
    </div>
    <div class="container" id="container">
        <div class="sidebar" id="sidebar">
            <ul>
                <li id="op1" onclick="show1()"><a href="#"><img
                            src="https://cdn-icons-png.flaticon.com/512/1946/1946436.png" alt="Dashboard" width="15px">
                        Dashboard</a></li>
                <li id="op2" onclick="show2()"><a href="#"><img
                            src="https://cdn-icons-png.flaticon.com/512/17/17640.png" alt="New Admission" width="15px">
                        New Admission</a></li>
                <li id="op3" onclick="show3()"><a href="#"><img
                            src="https://cdn-icons-png.flaticon.com/512/806/806792.png" alt="Fee Details" width="15px">
                        Regular Fee Details</a></li>
                <li id="op7" onclick="show7()"><a href="#"><img
                            src="https://cdn-icons-png.flaticon.com/512/2210/2210296.png" alt="Change Password"
                            width="15px">Supply Fee Details</a></li>
                <li id="op4" onclick="show4()"><a href="#"><img
                            src="https://cdn-icons-png.flaticon.com/512/2278/2278049.png" alt="Check Payments"
                            width="15px"> Check Payments</a></li>
                <li id="op5" onclick="show5()"><a href="#"><img
                            src="https://cdn-icons-png.flaticon.com/512/2278/2278049.png" alt="Check Dues" width="15px">
                        Check Dues</a></li>
                <li id="op6" onclick="show6()"><a href="#"><img
                            src="https://cdn-icons-png.flaticon.com/512/2210/2210296.png" alt="Change Password"
                            width="15px"> Change Password</a></li>
            </ul>
        </div>
        <div class="welcome" id="welcome">
            <h1>Hello!</h1>
            <h2>Welcome to Admin Panel</h2>
        </div>
        <div class="dashboard" id="dashboard">
            <div class="dheader">
                <span>Student Search</span>
            </div>
            <div class="ssearch">
                <div class="ssearchForm">
                    <div>
                        <label>Batch:</label>
                        <select id="b">
                            <option>--Select Batch</option>
                            <?php
                                    include '../dbconnect.php';
                                    $com="show tables";
                                    $res=$conn->query($com);
                                    $test='batch';
                                    if($res){
                                        while($data=$res->fetch_assoc()){
                                            //  echo "<option>".$data['Tables_in_id20026403_student']."</option>";
                                            if(strpos($data['Tables_in_id20026403_student'],$test) !==false){
                                                echo "<option value=".$data['Tables_in_id20026403_student'].">".strtoupper($data['Tables_in_id20026403_student'])."</option>";
                                            }
                                        }
                                    }
                            ?>
                        </select>
                    </div>
                    <div>
                        <label>Roll Number:</label>
                        <input type="text" id="rollNo" placeholder="Enter the Roll Number" maxlength="10" required>
                        
                    </div>
                    <button onclick="std()">Submit</button>
                </div>
                <div class="studentDetails" id="studentDetails"></div>
                <script>
                    function std() {
                        const sroll = document.getElementById("rollNo").value;
                        const r = document.getElementById("b").value;
                        const xhr = new XMLHttpRequest();
                        xhr.onload = function () {
                            document.getElementById("studentDetails").innerHTML = this.responseText;
                        }
                        xhr.open("GET", "search.php?r="+r+"&q=" + sroll);
                        xhr.send();
                    }
                </script>
            </div>
        </div>
        <div class="newAdmission" id="newAdmission">
            <div class="dheader">
                <span>New Admission</span>
            </div>
            <div class="newAdmissionForm">
                <div class="form">
                    <!--<form>-->
                    <h2>Personal Details</h2>
                    <div class="personal-details">
                        <div>
                            <label>STUDENT NAME:</label>
                            <input type="text" placeholder="Enter Student Name" name="sname" id="sname" required>
                        </div>
                        <div>
                            <label>FATHER NAME:</label>
                            <input type="text" name="fname" id="fname" placeholder="Enter Father Name">
                        </div>
                        <div>
                            <label>AGE:</label>
                            <input name="age" type="number" placeholder="Enter age" maxlength="2" id="age1" required>
                        </div>
                        <div>
                            <label>DATE OF BIRTH:</label>
                            <input name="dob" type="date" placeholder="Enter Date of Birth" id="dob" required>
                        </div>
                        <div>
                            <label>GENDER:</label>
                            <select name="gender" required id="gender">
                                <option value="">--Choose Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Others</option>
                            </select>
                        </div>
                    </div>
                    <h2>Educational Details</h2>
                    <div class="educational-details">
                        <div>
                            <label>ROLL NUMBER:</label>
                            <input name="rollNo" type="text" placeholder="Enter Roll Number" id="rollNo1" required>
                        </div>
                        <div>
                            <label>BATCH: </label><span style="color: red;font-size:18px;font-weight:550;">(Enter last two digits of year.)</span>
                               
                                <input name="batch" type="tel" placeholder="Enter Batch" id="batch" maxlength="2" required>
                                
                        </div>
                        <div>
                            <label>DATE OF JOIN:</label>
                            <input name="doj" type="date" placeholder="Enter Date of Join" id="doj">
                        </div>
                        <div>
                            <label>EDUCATION LEVEL:</label>
                            <select name="edl" required id="edl">
                                <option value="">--Choose Education</option>
                                <option value="btech">Bachelor of Technology (BTech)</option>
                            </select>
                        </div>
                        <div>
                            <label>BRANCH:</label>
                            <select name="branch" required id="branch">
                                <option value="">--Choose Branch</option>
                                <option value="cse">Computer Science Engineering</option>
                            </select>
                        </div>
                        <div>
                            <label>PHONE:</label>
                            <input name="phone" type="tel" maxlength="10" required id="phone" placeholder="Enter Phone Number">
                        </div>
                        <div>
                            <label>ADDRESS:</label>
                            <textarea name="address" id="address" cols="44" rows="5" required></textarea>
                        </div>
                    </div>
                    <div style="width:100%;color:red;font-weight:550;" id="newMsg">Message</div>
                    
                    <!--</form>-->
                </div>
                <div>
                        <button onclick="newAdm()">SAVE</button>
                </div>
                
                <script>
                    function newAdm() {
                        const snames = document.getElementById("sname").value;
                        const fnames = document.getElementById("fname").value;
                        const age1 = document.getElementById("age1").value;
                        const gender = document.getElementById("gender").value;
                        const rollNo1 = document.getElementById("rollNo1").value;
                        const dob = document.getElementById("dob").value;
                        const doj = document.getElementById("doj").value;
                        const edl = document.getElementById("edl").value;
                        const branch = document.getElementById("branch").value;
                        const phone = document.getElementById("phone").value;
                        const address = document.getElementById("address").value;
                        const batch = document.getElementById("batch").value;
                        const xhr=new XMLHttpRequest();
                        xhr.onload=function(){
                            document.getElementById("newMsg").innerHTML=this.responseText;
                        }
                        xhr.open("GET","admin_new_admission.php?snames="+snames+"&fnames="+fnames+"&age="+age1+"&gender="+gender+"&rollNo="+rollNo1+"&dob="+dob+"&batch="+batch+"&doj="+doj+"&edl="+edl+"&branch="+branch+"&phone="+phone+"&address="+address);
                        xhr.send();
                    }
                </script>
            </div>
        </div>
        <div class="feeDetails" id="feeDetails">
            <div class="dheader">
                <span>Fee Details</span>
            </div>
            <div class="feeTable">
                <div class="feeSearch">
                    <input type="text" placeholder="Enter Name or Roll Number" id="fs">
                </div>
                <table id="feeT" >
                    <thead>
                        <tr id="thead">
                            <th scope="col">Name</th>
                            <th scope="col">Roll Number</th>
                            <th scope="col">Year</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Status</th>
                            <th scope="col">Payment</th>
                            <th scope="col">RollBack</th>
                        </tr>
                    </thead>
                    <tbody>    
                        <?php                     
                            error_reporting(0);
                            include '../dbconnect.php';
                            
                            $sql1="select * from paymentdetails";
                            $result1=$conn->query($sql1);
                            if($result1){
                                while($row1=$result1->fetch_assoc()){
                                    $id = $row1["rollNo"];
                                    echo "<tr>
                                    <td scope='row' data-label='Name'>".$row1["name"]."</td>
                                    <td data-label='Roll Number'>".$row1["rollNo"]."</td>
                                    <td data-label='Year'>".$row1["year"]."</td>
                                    <td data-label='Semester'>".$row1["semester"]."</td>
                                    <td id='status' data-label='Status'>".$row1["status"]."</td>
                                    <td data-label='Pay'><button value=$id onclick=prac(this.value)>Pay</button></td>
                                    <td data-label='Roll Back'><button value=$id onclick=rollBack(this.value)>Roll Back</button></td>
                                    </tr>";
                                }                        
                            }                        
                        ?>
                    </tbody>
                    <script>
                        function prac(m) {
                            const rollNumber = m;
                            const xhr = new XMLHttpRequest();
                            xhr.onload = function () {
                                document.getElementById("feeT").innerHTML = this.responseText;
                            }
                            xhr.open("GET", "pay.php?q=" + rollNumber);
                            xhr.send();
                        }
                        function rollBack(n) {
                            const rollNumber = n;
                            const xhr = new XMLHttpRequest();
                            xhr.onload = function () {
                                document.getElementById("feeT").innerHTML = this.responseText;
                            }
                            xhr.open("GET", "roll.php?p=" + rollNumber);
                            xhr.send();
                        }
                    </script>
                </table>
            </div>
        </div>
        <div class="supplyFee" id="supplyFee">
            <div class="dheader">
                <span>Supply Fee Details</span>
            </div>
            <div class="sdetails">
                <table id=stable>
                    <?php 
                include '../dbconnect.php';
                $sqls="select * from supply";
                $results=$conn->query($sqls);
                while($rows=$results->fetch_assoc()){
                    echo "<tr><th scope='col' data-label='Roll Number ' style='min-width: 90vw'>".$rows['rollNo']."<span style='float: right;'> Status: ".$rows['status']."</span></th></tr>";
                     $sem=explode(",", $rows['subjects']);
               foreach($sem as $sub){
                if($sub!=null){
                     echo "<tr><td scope='row' data-label='Subject Name'>".$sub."</td></tr>";
                }
             }
             echo "<tr><td>
             <button style='margin-right: 20px;padding: 5px 20px; background-color: #7a9d96; border-radius: 10px; color: white; border: none;' value=".$rows['rollNo']." onclick= 'spay(this.value)'>Pay</button>
             <button style='margin-right: 20px;padding: 5px 20px; background-color: #7a9d96; border-radius: 10px; color: white; border: none;' value=".$rows['rollNo']." onclick= 'srollback(this.value)'>Roll Back</button></td></tr>";
                }
                ?>
                </table>
                <script>
                    function spay(m){
                            const rollNumber = m;
                            const xhr = new XMLHttpRequest();
                            xhr.onload = function () {
                                document.getElementById("stable").innerHTML = this.responseText;
                            }
                            xhr.open("GET", "spay.php?q=" + rollNumber);
                            xhr.send();
                    } 
                    function srollback(m){
                            const rollNumber = m;
                            const xhr = new XMLHttpRequest();
                            xhr.onload = function () {
                                document.getElementById("stable").innerHTML = this.responseText;
                            }
                            xhr.open("GET", "srollback.php?r=" + rollNumber);
                            xhr.send();
                    } 
                </script>
            </div>
        </div>
        <div class="checkPayments" id="checkPayments">
            <div class="dheader">
                <span>Check Payments</span>
            </div>
            <div class="searchPayment">
                <label>Search Payments: <input type="text" placeholder="Enter the Roll Number" maxlength="10"
                        id="fs1"></label>
            </div>
            <div class="feeTable">
                <table id="feeT1">
                    <thead>
                        <tr id="thead1">
                            <th scope="col">Name</th>
                            <th scope="col">Roll Number</th>
                            <th scope="col">Year</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>   
                    <tbody> 
                        <?php                     
                            error_reporting(0);
                            include '../dbconnect.php';
                            
                            $sql1="select * from paymentdetails";
                            $result1=$conn->query($sql1);
                        if ($result1) {
                            while ($row1 = $result1->fetch_assoc()) {
                                if($row1["status"]=="PAID"){
                                    echo "<tr>
                                    <td scope='row' data-label='Name'>".$row1["name"]."</td>
                                    <td data-label='Roll Number'>".$row1["rollNo"]."</td>
                                    <td data-label='Year'>".$row1["year"]."</td>
                                    <td data-label='Semester'>".$row1["semester"]."</td>
                                    <td data-label='Status' id='status'>".$row1["status"]."</td>
                                    </tr>";
                                }
                            }
                        }                 
                        ?>
                    </tbody>
                    <script>
                        function prac(m) {
                            const rollNumber = m;
                            const xhr = new XMLHttpRequest();
                            xhr.onload = function () {
                                document.getElementById("feeT").innerHTML = this.responseText;
                            }
                            xhr.open("GET", "pay.php?q=" + rollNumber);
                            xhr.send();
                        }
                        function rollBack(n) {
                            const rollNumber = n;
                            const xhr = new XMLHttpRequest();
                            xhr.onload = function () {
                                document.getElementById("feeT").innerHTML = this.responseText;
                            }
                            xhr.open("GET", "roll.php?p=" + rollNumber);
                            xhr.send();
                        }
                    </script>
                </table>
            </div>
        </div>
        <div class="checkDues" id="checkDues">
            <div class="dheader">
                <span>Check Dues</span>
            </div>
            <div class="searchDues">
                <label>Search Dues: <input type="text" placeholder="Enter the Roll Number" maxlength="10"
                        id="fs2"></label>
            </div>
            <div class="feeTable">
                <table id="feeT2">
                    <thead>
                        <tr id="thead2">
                            <th scope="col">Name</th>
                            <th scope="col">Roll Number</th>
                            <th scope="col">Year</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead> 
                    <tbody>   
                        <?php                     
                            error_reporting(0);
                            include '../dbconnect.php';
                            
                            $sql1="select * from paymentdetails";
                            $result1=$conn->query($sql1);
                        if ($result1) {
                            while ($row1 = $result1->fetch_assoc()) {
                                if($row1["status"]=="PENDING"){
                                    echo "<tr>
                                    <td scope='row' data-label='Name'>".$row1["name"]."</td>
                                    <td data-label='Roll Number'>".$row1["rollNo"]."</td>
                                    <td data-label='Year'>".$row1["year"]."</td>
                                    <td data-label='Semester'>".$row1["semester"]."</td>
                                    <td data-label='Status' id='status'>".$row1["status"]."</td>
                                    </tr>";
                                }
                            }
                        }                 
                        ?>
                    </tbody>
                    <script>
                        function prac(m) {
                            const rollNumber = m;
                            const xhr = new XMLHttpRequest();
                            xhr.onload = function () {
                                document.getElementById("feeT").innerHTML = this.responseText;
                            }
                            xhr.open("GET", "pay.php?q=" + rollNumber);
                            xhr.send();
                        }
                        function rollBack(n) {
                            const rollNumber = n;
                            const xhr = new XMLHttpRequest();
                            xhr.onload = function () {
                                document.getElementById("feeT").innerHTML = this.responseText;
                            }
                            xhr.open("GET", "roll.php?p=" + rollNumber);
                            xhr.send();
                        }
                    </script>
                </table>
            </div>
        </div>
        <div class="changePassword" id="changePassword">
            <div class="dheader">
                <span>Change Password</span>
            </div>
            <form action="changePwd.php" method="post">
                <div>
                    <label>New password:</label>
                    <input name="npwd" type="password" minlength="5" required>
                </div>
                <div>
                    <label>Re-enter password:</label>
                    <input name="rpwd" type="password" minlength="5" required>
                </div>
                <button>Change Password</button>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="../js/admin.js"></script> 
</body>
</html>