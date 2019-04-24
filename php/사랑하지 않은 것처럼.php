<!doctype html>
<html>
<head>
  <title><?php echo $_GET['title'];?></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <h1><a href="발라드.php?category=발라드">발라드</a></h1>
  <div id="grid">
    <ol>
      <li><a href="사랑하지 말아요.php?title=사랑하지 말아요&singer=이석훈">사랑하지 말아요</a></li>
      <li><a href="오늘도 그대만.php?title=오늘도 그대만&singer=타디스 프로젝트">오늘도 그대만</a></li>
      <li><a href="사랑하지 않은 것처럼.php?title=사랑하지 않은 것처럼&singer=버즈">사랑하지 않은 것처럼</a></li>
    </ol>
    <div id="article">
        <h2><?php echo $_GET['title'];?> - <?php echo $_GET['singer'];?></h2>

          <!--유튭영상-->
          <div class="video-container">
          <iframe width="100%" src="https://www.youtube.com/embed/gszuEGmVWlQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <!--유튭영상-->
          <p>
          <div class="Lyrics_font">
              늘 그랬었어 넌 참 예뻤어<br>
              말할 때마다 웃는 눈도<br>
              내가 아니어도 누군가<br>
              사랑해 줄 사람 많을 거야<br>
              아프지 않아 괜찮을 거야<br>
              잊어줄게 보내줄게<br>
              다신 널 찾지 않아<br>
              안녕 내 사랑 돌아 보지마<br>
              너 떠나도 나 울지 않을게<br>
              부족했던 내가 더 많이 미안해<br>
              이렇게 사랑이 끝나간다<br>
              너의 번호를 지워 버렸어<br>
              주고받았던 얘기들도<br>
              내가 아니어도 누군가<br>
              사랑해 줄 사람 많을 거야<br>
              아프지 않아 괜찮을 거야<br>
              잊어줄게 보내줄게<br>
              다신 널 찾지 않을게<br>
              안녕 내 사랑 돌아 보지마<br>
              너 떠나도 나 울지 않을게<br>
              부족했던 내가 더 많이 미안해<br>
              이렇게 사랑이 끝나간다<br>
              널 향한 내 사랑은 여기까진가 봐<br>
              그 사람 곁에서 행복하길 바래<br>
              잘 가<br>
              너 떠나도 나 울지 않을게<br>
              부족했던 나를 미워해도 좋아<br>
              이렇게 사랑이<br>
              사랑이 끝나간다<br>
          </div>
          </p>
      </div>
  </div>
  </body>
