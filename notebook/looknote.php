<?php

include('conn.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<body>
    <?php
    $sql = "SELECT * FROM tb_notebook";
    $resuit = $conn->query($sql);

    ?>
    <?php include('navbar.php') ?>
    <div class="container-md">
        <div class="title">
            <h3 class="text-center mt-5 text-decoration-underline text-" style="color:palevioletred;">สมุดบันทึกออนไลน์</h3>
        </div>
        <hr style="margin-top: 30px;">
        <div class="contain mt-5">

            <div class="row">
                <?php while ($row = $resuit->fetch_assoc()):   ?>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">

                                <img src="../upload/<?php echo $row['note_img']; ?>" alt="">

                          
                                <div class="text">
                                    <h3 class="text-center mt-2"><?php echo $row['note_story']; ?></h3>
                                    <p class="text-center mt-2">วันที่บันทึก: <?php echo $row['note_date_time']; ?></p>

                                </div>
                                <div class="button text-center">
                                    <a href="looknote.php" class="btn btn-outline-success ">look it</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile ?>

            </div>

        </div>
    </div>

</body>
<script src="bootstrap/js/bootstrap.min.js"></script>

</html>