<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<?php include('navbar.php'); ?>
<?php include('conn.php'); ?>
<body>


    <div class="container-md">
        <div class="title">
            <h3 class="text-center mt-5 text-decoration-underline text-" style="color:palevioletred;">เพิ่มบันทึก</h3>
        </div>
        <hr style="margin-top: 30px;">
        <div class="contain mt-5">
            <form action="insert_intoaddnote.php" method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-body">
                        <label for="addnote" class="form-lable" style="font-size:20px;">มีอะไรอยากเล่าไหม</label>
                        <textarea name="addnote" id="addnote" rows="5" class="form-control mt-1" ></textarea>
                        
                        <label for="addimg" class="form-lable mt-3" style="font-size:20px;">เพิ่มรูปหน่อยไหม</label>
                        <input type="file" name="addimg" id="addimg" class="form-control mt-2">
                        <p class="text-danger ms-2 mt-1">*ไม่อยากใส่รูปก็ไม่เป็นไรนะ*</p>

                        
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-success">ตกลง</button>
            </form>
            
        </div>
    </div>

</body>
<script src="bootstrap/js/bootstrap.min.js"></script>

</html>