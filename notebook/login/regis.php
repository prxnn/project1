<?php

include('../conn.php');
//  include('../navbar.php') 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

<body>

    
    <div class="container-md">
        <div class="title">
            <h3 class="text-center mt-5 text-decoration-underline text-" style="color:palevioletred;">เข้าสู่ระบบ</h3>
        </div>
        <hr style="margin-top: 30px;">
        <div class="contain mt-5">
            <form action="insert_into.php" method="post">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <label for="user_fname" class="form-lable">ชื่อ</label>
                                <input type="text" class="form-control" id="user_fname" name="user_fname">
                            </div>
                            <div class="col-6">
                                <label for="user_lname" class="form-lable">นามสกุล</label>
                                <input type="text" class="form-control" id="user_lname" name="user_lname">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="user_username" class="form-lable">username</label>
                                <input type="text" class="form-control" id="user_username" name="user_username">
                            </div>
                            <div class="col-6">
                                <label for="user_password" class="form-lable">password</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-3">
                               <select name="user_status" id="user_status" name="user_status" class="form-select">
                                    <option selected>สถานะ</option>
                                    <option value="admin">admin</option>
                                    <option value="user">user</option>
                               </select>
                               
                            </div>
                           
                        </div>
                       
                        <button type="summit" class="btn btn-success mt-3">ต่อไป</button>
                        <a href="../index.php" type="summit" class="btn btn-outline-danger mt-3">กลับหน้าหลัก</a>
                        

                    </div>
                </div>



            </form>


        </div>
    </div>

</body>
<script src="bootstrap/js/bootstrap.min.js"></script>

</html>