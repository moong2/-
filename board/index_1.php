
 <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>세종대학교 온라인강의실</title>
    <style>
         table{
                 border-top: 1px solid #444444;
                 border-collapse: collapse;
         }
         tr{
                 border-bottom: 1px solid #444444;
                 padding: 10px;
         }
         td{
                 border-bottom: 1px solid #efefef;
                 padding: 10px;
         }
         table .even{
                 background: #efefef;
         }
         .text{
                 text-align:center;
                 padding-top:20px;
                 color:#000000
         }
         .text:hover{
                 text-decoration: underline;
         }
         a:link .board_link {color : #57A0EE; text-decoration:none;}
         a:hover { text-decoration : underline;}
 </style>


    <style>
        body{margin: 0;}
        a .category{
            text-decoration : none;
            color : black;
        }

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


    <?php
        $connect = mysqli_connect('localhost', 'root', 'min20617', 'login') or die ("connect fail");
        $query ="select * from board order by number desc";
        $result = $connect->query($query);
        $total = mysqli_num_rows($result);
        session_start();
 ?>


<h2 align=center>청강 신청 게시판</h2>
<table align = center>
<thead align = "center">
<tr>
<td width = "50" align="center">번호</td>
<td width = "100" align = "center">학수번호</td>
<td width = "100" align = "center">작성자</td>
<td width = "200" align = "center">날짜</td>
         </tr>
         </thead>
  
         <tbody>
         <?php
                 while($rows = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
                         if($total%2==0){
         ?>                      <tr class = "even">
                         <?php   }
                         else{
         ?>                      <tr>
                         <?php } ?>
                 <td width = "50" align = "center"><?php echo $total?></td>
                 <td width = "100" align = "center">
                 <a href = "view_1.php?number=<?php echo $rows['number']?>" class = "board_link">
                 <?php echo $rows['title']?></td>
                   <td width = "100" align = "center"><?php echo $rows['id']?></td>
                 <td width = "200" align = "center"><?php echo $rows['date']?></td>
                 </tr>
         <?php
                 $total--;
                 }
         ?>
         </tbody>
         </table>
  
         <div class = text>
         <font style="cursor: hand"onClick="location.href='./write_1.php'">신청하기</font>
         </div>




    <footer>
          <br>대표전화 : 02-3408-3114
          <br>05006 서울특별시 광진구 능동로 209(군자동) 세종대학교
     </footer>

</body>
</html>