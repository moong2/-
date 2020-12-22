<!DOCTYPE>
 
<html>
<head>
        <meta charset='utf-8'>
</head>
 
<body>
        <div align='center'>
        <span>로그인</span>
 
        <form method='post' action='login_action_1.php'>
                <p>ID: <input name="id" type="text"></p>
                <p>PW: <input name="pw" type="password"></p>
                <input type="submit" value="로그인">
        </form>
        <br />
        <button id="join" onclick="location.href='./join_1.php'">회원가입</button>
 
        </div>
 
 
</body>
 
</html>
<?php
 
        session_start();
 
        $connect = mysqli_connect("localhost", "root", "min20617", "login") or die("fail");
 
        //입력 받은 id와 password
        $id=$_POST['id'];
        $pw=$_POST['pw'];
 
        //아이디가 있는지 검사
        $query = "select * from member where id='$id'";
        $result = $connect->query($query);
 
 
        //아이디가 있다면 비밀번호 검사
        if(mysqli_num_rows($result)==1) {
 
                $row=mysqli_fetch_assoc($result);
 
                //비밀번호가 맞다면 세션 생성
                if($row['pw']==$pw){
                        $_SESSION['userid']=$id;
                        if(isset($_SESSION['userid'])){
                        ?>      <script>
                                        alert("로그인 되었습니다.");
                                        location.replace("./index_1.php");
                                </script>
<?php
                        }
                        else{
                                echo "session fail";
                        }
                }
 
                else {
        ?>              <script>
                                alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                                history.back();
                        </script>
        <?php
                }
 
        }
 
                else{
?>              <script>
                        alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                        history.back();
                </script>
<?php
        }
 
 
?>

