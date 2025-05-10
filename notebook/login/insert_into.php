<?php
include('../conn.php');
$user_fname =$_POST['user_fname'];
$user_lname =$_POST['user_lname'];
$user_username =$_POST['user_username'];
$user_password =$_POST['user_fname'];
$user_status =$_POST['user_status'];

$sql = "INSERT INTO tb_user(user_fname,user_lname,user_username,user_password,user_status)VALUES('$user_fname','$user_lname','$user_username','$user_password','$user_status')";

if($conn->query($sql)==TRUE){ ?>
   <script>
        alert("ลงชื่อเข้าใช้สำเร็จ");
        window.location.href=("../index.php");
   </script> <?php
}
?>