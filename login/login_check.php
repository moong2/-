<?php
session_start();
include("./connect.php");

$id = $_POST['id'];
$pw = $_POST['pw'];

$query = "select * from users where id = '$id' and pw = '$pw'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

if($id == $row['id'] && $pw == $row['pw']){
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    echo "<script>location.href = '../main/메인화면.html';</script>";
}else{
    echo "<script>window.alert('invalid username or password');</script>";
    echo "<script>location.href = 'login.html';</script>";
}
?>