<html>
    <head>
        <style>
            table{
                border-collapse: collapse;
                border: 1px solid black;
                margin: 50px auto 0 auto;
            }
            table th{
                background-color: #7a9d96;
            }
            table tr{
                font-size: 26px;
                border: 1px solid black;
            }
            table tr td{
                padding: 5px 10px;
                letter-spacing: 5px;
            }
            h2{
                margin: 10px 0 0 0;
                padding: 0;
                text-align: center;
                color: red;
                font-weight: 550;
                font-size: 26px;
            }
        </style>
    </head>
<body>
<Table>
<tr><th>Selected Subjects</th></tr>
<?php
error_reporting(0);
include '../dbconnect.php';
$str=null;
$roll=$_POST['hide'];
$i=0;
$amt = 0;
if(!empty($_POST['sub'])){
    foreach($_POST['sub'] as $sub){
        echo "<tr><td>".$sub."</td></tr>";
        $str.=$sub.",";
        $i++;
    }
    $sql="insert into supply values(UPPER('$roll'),'$str','PENDING')";
    $result=$conn->query($sql);
    switch($i){
        case 1: $amt=100;
                break;
        case 2: $amt=200;
                break;
        case 3: $amt=300;
                break;
        default: $amt = 760;
                break;
    }
}
?>
</Table>
    <h2>Amount to be Paid <span id='amt'></span></h2>
    <h2>Amount to be Paid to staff</h2>
    <?php
        echo "<script>
        document.getElementById('amt').innerHTML = $amt+'/-';
        var id = setInterval(() => {
          if(confirm('You can now Logout!') == true){
                window.location.replace('https://miniproject13440.000webhostapp.com/index.html');
            }else{
                clearInterval(id);
            }
        }, 10000);
        </script>";
    ?>
</body>
</html>