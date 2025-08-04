<?php
    $username=$_GET['username']; // รับข้อมูล username มาจาก URL
    require '../connect.php'; // เชื่อมต่อ Data base
    $sql = "DELETE FROM users WHERE username='$username'";
    $result = $con->query($sql);
    if(!$result){
        echo "<script>alert('ลบข้อมูลไม่ได้')</script>";
    } else {
        echo "<script>window.location.href='index.php?page=users'</script>";
    }
?>