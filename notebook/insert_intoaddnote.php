<?php
include('conn.php');
$addnote = $_POST['addnote'];
// $addimg = $_POST['addimg'];
$target_dir = 'upload/';
$noteimg = $target_dir . $_FILES['addimg']['name'];

if (move_uploaded_file($_FILES['addimg']['tmp_name'], $noteimg)) {
    $sql = "INSERT INTO tb_notebook(note_story,note_img) VALUES('$addnote','$noteimg')";
    if ($conn->query($sql) == TRUE) {  ?>
        <script>
            alert("บันทึกสำเร็จ");
            window.location.href = "index.php";
        </script><?php
    }
}
?>