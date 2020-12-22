
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>세종대학교 온라인강의실</title>

    <style>
        table.table2{
                border-collapse: separate;
                border-spacing: 1px;
                text-align: left;
                line-height: 1.5;
                border-top: 1px solid #ccc;
                margin : 20px 10px;
        }
        table.table2 tr {
                 width: 50px;
                 padding: 10px;
                font-weight: bold;
                vertical-align: top;
                border-bottom: 1px solid #ccc;
        }
        table.table2 td {
                 width: 100px;
                 padding: 10px;
                 vertical-align: top;
                 border-bottom: 1px solid #ccc;
        }
 
</style>


    <style>
.view_table {
border: 1px solid #444444;
margin-top: 30px;
}
.view_title {
height: 30px;
text-align: center;
background-color: #cccccc;
color: white;
width: 1000px;
}
.view_id {
    
text-align: center;
background-color: #EEEEEE;
width: 30px;
}
.view_id2 {
background-color: white;
width: 60px;
}
.view_hit {
background-color: #EEEEEE;
width: 30px;
text-align: center;
}
.view_hit2 {
background-color: white;
width: 60px;
}
.view_content {
padding-top: 20px;
border-top: 1px solid #444444;
height: 500px;
}
.view_btn {
width: 700px;
height: 200px;
text-align: center;
margin: auto;
margin-top: 50px;
}
.view_btn1 {
height: 50px;
width: 100px;
font-size: 20px;
text-align: center;
background-color: white;
border: 2px solid black;
border-radius: 10px;
}
.view_comment_input {
width: 700px;
height: 500px;
text-align: center;
margin: auto;
}
.view_text3 {
font-weight: bold;
float: left;
margin-left: 20px;
}
.view_com_id {
width: 100px;
}
.view_comment {
width: 500px;
}

</style>
    <style>
        body{margin: 0;}

        /* header 영역 */
        header{
            height: 200px;
            background-color:  #f1f0d8;
            display: flex;
            flex-direction: column; /*수직 배치*/
            align-items: center;
            justify-content: center;

            color: white;
        }

        /* navigation bar */
        nav{
            display: flex;
            background-color: #ba0c2f;
        }
        nav a{
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
         }

         nav a:hover{
             background-color: #8a8d8f;
             color: black;
         }

         #container{
             display: flex;
             flex-wrap: wrap;
         }

         /* 왼쪽 사이드 */
         aside{
             flex-grow: 3;
             background-color: #f1f1f1;
             padding: 40px;
         }


         .fakeimg{
             background: #aaaaaa;
             width: 100%;
             padding: 20px;
         }
         footer{
             padding: 20px;
             text-align: center;
             background: #ba0c2f;
         }

         /* 반응형 웹 */
         @media all and (max-width: 600px){
            #container, nav{
                flex-direction: column;
            }
         }

    </style>

</head>
<body>

    <!-- header 영역 -->
    <header>
      <style type = "text/css">
      /*폰트글>*/
          p{font-family: "돋움",serif;}
      </style>

    <a href = "../main/메인화면.html"><img src="../main/학교로고.png" width="400" height="100">

  <!-- navigation bar -->

    </header>

    <nav>
      <a href="출석.html">출석</a>
      <a href="메신저.html">메신저</a>
      <a href="../board/index_1.php">청강신청</a>
    </nav>



    <form method = "post" action = "write_action_1.php">
        <table  style="padding-top:50px" align = center width=700 border=0 cellpadding=2 >
                <tr>
                <td height=20 align= center bgcolor=#ccc><font color=white> 글쓰기</font></td>
                </tr>
                <tr>
                <td bgcolor=white>
                <table class = "table2">
                        <tr>
                        <td>작성자</td>
                        <td><input type = text name = name size = 20></td>
                        </tr>
 
                        <tr>
                        <td>학수번호</td>
                        <td><input type = text name = title size=30></td>
                        </tr>
 
                        <tr>
                        <td>내용</td>
                        <td><textarea name = content cols=35 rows=15></textarea></td>
                        </tr>
 
                        <tr>
                        <td>비밀번호</td>
                        <td><input type = password name = pw size=10 maxlength=10></td>
                        </tr>
                        </table>
 
                        <center>
                        <input type = "submit" value="작성">
                        </center>
                </td>
                </tr>
        </table>
        </form>


<!-- MODIFY & DELETE -->


    <footer>
          <br>대표전화 : 02-3408-3114
          <br>05006 서울특별시 광진구 능동로 209(군자동) 세종대학교
     </footer>

</body>
</html>