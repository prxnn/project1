<?php
@session_start();
$servername = "localhost";
$username = "root";
$password = "";
$bdname = "bd_note";

$conn = new  mysqli($servername,$username ,$password,$bdname);

if($conn->connect_error){
    die("error");
}








?>