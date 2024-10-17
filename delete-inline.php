<?php
    require 'config.php';
    $stu_id = $_GET['id'];
    $sql = "DELETE FROM students WHERE sid = {$stu_id}" ;
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Sorry your request could not be procees please try again.";
    }
    else{
    header("Location: http://localhost/php-sql/index.php");
    }
    
?>