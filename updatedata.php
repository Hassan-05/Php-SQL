<?php
$stu_id=$_POST['sid'];
$stu_name=$_POST['sname'];
$stu_address=$_POST['saddress'];
$stu_class=$_POST['sclass'];
$stu_phone=$_POST['sphone'];

require 'config.php';
if (!$conn){
echo "Connection failed: " . mysqli_connect_error();
}else{
$sql = "UPDATE students SET sname = '{$stu_name}', saddress = '{$stu_address}', sclass = '{$stu_class}', sphone = '{$stu_phone}' WHERE sid = {$stu_id}" ;
$result = mysqli_query($conn, $sql);
}
if (!$result) {
    echo "SQL Error: " . mysqli_error($conn);
}
header("Location: http://localhost/php-sql/index.php");
?>