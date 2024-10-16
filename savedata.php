<?php
$stu_name=$_POST['sname'];
$stu_address=$_POST['saddress'];
$stu_class=$_POST['class'];
$stu_phone=$_POST['sphone'];

$conn = mysqli_connect("localhost","root","","news_project");
if (!$conn){
    echo "Connection failed: " . mysqli_connect_error();
    }else{
        $sql = "INSERT INTO students (sname,saddress,sclass,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}') WHERE sid = '{$stu_id}'" ;
        $result = mysqli_query($conn, $sql);
    }
    if(!$result) {
        echo "SQL Error: " . mysqli_error($conn);
    }
header("Location: http://localhost/php-sql/index.php");
?>