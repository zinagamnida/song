<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>소리벗고 빤스질러~</title>
    <style media="screen">
      a{
        text-decoration: none;
      }
      h1{
        font-size: 250%;
        text-align: center;
      }
      .li{
        color:deeppink;
        text-align: center;
      }
      .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 20%;
      }
      #center{
        color:deeppink;
        display: table;
        margin-left: auto;
        margin-right: auto;
      }
    </style>
  </head>
  <body>
    <!-- 우선순위 id와# > class와. > <tag>와 tag -->
    <h1><strong style="color:red;">  ☆노래방 <span style="color:orange">노래</span> <span style="color:green">모음집</span>☆</strong></h1>
    <p><img src="이쁘니누님.jpg" alt="이쁘니누님노래부르는사진" class="center">
    </p>
    <h2>
    <ul id="center">
      <li><a href="발라드.php?category=발라드" class="li" >발라드</a></li>
      <li><a href="신나는 곡.php?category=신나는 곡" class="li">신나는 곡</a></li>
      <li><a href="랩.php?category=랩" class="li">랩</a></li>
      <li><a href="목풀기용.php?category=목풀기용" class="li">목풀기용</a></li>
    </ul>
    </h2>
  </body>
  <!--
  디스커스 댓글기능
-->
  <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://taedong.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</html>
