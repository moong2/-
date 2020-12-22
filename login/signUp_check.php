<?php
$id = $_POST['id'];
$name = $_POST['name'];
$pw = $_POST['pw'];
$pwc = $_POST['pwc'];
$phone = $_POST['telephone'];
$email = $_POST['email'];

if($pw != $pwc)
{
    echo "<script>window.alert('비밀번호와 비밀번호 확인이 서로 다릅니다.');</script>";
    echo "<script>location.href = 'signUp.html';</script>";
    exit();
}
if($id == NULL || $pw == NULL || $name == NULL || $pwc == NULL || $phone == NULL || $email == NULL)
{
    echo "<script>window.alert('필수 입력 항목이 기재되어 있지 않습니다.');</script>";
    echo "<script>location.href = 'signUp.html';</script>";
    exit();
}

include("./connect.php");

$query = "select * from users where id = '$id'";
$result = mysqli_query($con, $query);
if($result->num_rows == 1)
{
    echo "<script>window.alert('중복된 id입니다.');</script>";
    echo "<script>location.href = 'signUp.html';</script>";
    exit();
}

$signup = mysqli_query($con, "INSERT INTO users (id, name, pw, phone, email) VALUES ('$id', '$name', '$pw', '$phone', '$email')");
if($signup)
{
    echo "<script>window.alert('회원가입이 완료되었습니다.');</script>";
    echo "<script>location.href = 'login.html';</script>";
}
?>