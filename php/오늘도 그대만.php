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
      <li><a href="사랑하지 않은 것처럼.php">사랑하지 않은 것처럼</a></li>
    </ol>
    <div id="article">
        <h2><?php echo $_GET['title'];?> - <?php echo $_GET['singer'];?></h2>
          <!--유튭영상-->
          <div class="video-container">
          <iframe width="100%" src="https://www.youtube.com/embed/P7Xj_Np6-XA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <!--유튭영상-->
          <p>
          <div class="Lyrics_font">
            봄날처럼 몰래 다가왔던 나의 그대<br>
            여름 같이 뜨거웠던 우리의 시간들<br>
            어느덧 찾아온 시린 겨울<br>
            혹시 그대 아프진 않을까 걱정돼요<br>
            그대에게 부족한 나라서<br>
            나 그렇게 그댈 붙잡지 못 했죠<br>
            소리 없이 울먹이던 그대<br>
            그만하자는 그 말 다 거짓말이죠<br>
            오지 않는 전화를 붙잡고<br>
            후회만 하는 참 바보 같은 나<br>
            그땐 뭐가 그렇게 어려웠던 건지<br>
            조용히 그대 마음 안아줄 걸<br>
            우연처럼 다시 와줘요<br>
            내 품에 머물던 그대 온기 남았는데<br>
            그댈 사랑한 만큼 하루하루<br>
            겨우 버텨 봐도 너무 아파<br>
            매일 그대 생각에 살아요<br>
            빗방울이 떨어지던 그 밤<br>
            우산처럼 기울던 그대와 나는<br>
            하염없이 눈물만 흘렸죠<br>
            돌아온다는 그 말 다 거짓말이죠<br>
            오지 않는 전화를 붙잡고<br>
            후회만 하고 있는 참 바보 같은 내가<br>
            그댈 사랑한 만큼 하루하루<br>
            겨우 버텨 봐도 너무 아파<br>
            매일 그대 생각에 살아요<br>
            오늘도 술에 취해 그댈 부르고<br>
            후회만 하고 있는 참 이기적인 내가<br>
            우리 사랑한 만큼 지우기엔<br>
            너무 아픈 그대 이름<br>
            매일 그대 생각에 울어요<br>
            다시 내게 와줘요<br>
          </div>
        </p>
      </div>
  </div>
  </body>
