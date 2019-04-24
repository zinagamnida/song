<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $_GET['category'];?></title>
    <style>
      h1{
          text-align: center;
          border-bottom: 2px solid black;
          padding: 30px;
          padding-top: 10px;
      }
      ol{
          display: table;
          margin-left: auto;
          margin-right: auto;
      }
      a{
        text-decoration: none;
        color: black;
      }
      #back{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h1><?php echo $_GET['category'];?> 목록 click</h1>
      <div id="back"><a href="index.php">처음으로</a></div>
    <ol>
      <li><a href="사랑하지 말아요.php?title=사랑하지 말아요&singer=이석훈">사랑하지 말아요</a></li>
      <li><a href="오늘도 그대만.php?title=오늘도 그대만&singer=타디스 프로젝트">오늘도 그대만</a></li>
      <li><a href="사랑하지 않은 것처럼.php?title=사랑하지 않은 것처럼&singer=버즈">사랑하지 않은 것처럼</a></li>
    </ol>
  </body>
</html>
