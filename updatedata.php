<?php

echo $stu_id=$_POST['sid'];
echo $stu_name=$_POST['sname'];
echo$stu_address=$_POST['saddress'];
echo"--".$stu_class=$_POST['sclass']."--";
echo$stu_phone=$_POST['sphone'];

$conn = mysqli_connect("localhost","root","","news_project");
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