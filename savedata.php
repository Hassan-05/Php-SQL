<?php
$stu_name=$_POST['sname'];
$stu_address=$_POST['saddress'];
$stu_class=$_POST['class'];
$stu_phone=$_POST['sphone'];


require 'config.php';
if (!$conn){
    echo "Connection failed: " . mysqli_connect_error();
    }else{
        $sql = "INSERT INTO students (sname,saddress,sclass,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')" ;
        $result = mysqli_query($conn, $sql);
    }
    if(!$result) {
        echo "SQL Error: " . mysqli_error($conn);
    }
header("Location: http://localhost/php-sql/index.php");
?>