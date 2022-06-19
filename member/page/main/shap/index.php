<?php 
  include "../header.php";
  include "../db.php";
?>
<?php
  error_reporting( E_ALL );
  ini_set( "display_errors", 1 );
?>
<style>
  .uk-alert {
    border-radius: 10px 10px  10px 10px;
  }

  .uk-input {
    border-radius: 10px 10px  10px 10px;
  }
</style>
<body>
<div class="uk-container" >

  <!-- 학교/이름 표시 -->
  <nav class="sel-target: .uk-navbar-container; cls-active: uk-navbar-stick" uk-navbar="uk-navbar">
      <!--학교이름-->
      <div class="uk-navbar-left">
          <ul class="uk-navbar-nav">
              <li class="uk-active">
                  <a href="#">
                      <b style="  font-family: 'Spoqa Han Sans Neo', 'sans-serif';">강릉중학교</b>
                  </a>
            </li>
          </ul>
      </div>
      <!--아이디-->
      <div class="uk-navbar-right">
          <ul class="uk-navbar-nav">
              <li class="uk-active">
                  <a href="">
                      <?php if(isset($_SESSION['userid'])){ echo "{$_SESSION['userid']}";} ?>
                  </a>
              </li>
          </ul>
      </div>
  </nav>

  <div class="uk-card uk-card-default uk-card-body">
    <div class="uk-margin">
      <!-- 구글 검색 -->
      <form method=get action="http://www.google.co.kr/search" target="_blank" > 
        <input type=text class="uk-input"  name=q  maxlength=255 placeholder="# 궁금한 것들을 검색해보세요."/>         
      </form>
      <div style="height: 7px;"></div>
    </div>
  </div>

  <br>

  <!-- RSS 피드 2 -->
  <div class="uk-card uk-card-default uk-card-body">
    <h4 style="  font-family: 'Cafe24Ssurround'";><b>최신 뉴스</b></h4>
    <?php include "rss1.php"; ?>
  </div>

  <br>
  <br>
  
  <!-- RSS 피드 2 -->
  <div class="uk-card uk-card-default uk-card-body">
    <h4 style="  font-family: 'Cafe24Ssurround'";><b>라이프 스토리</b></h4>
    <?php include "rss2.php"; ?>
  </div>
  
  <br>

</div>

  <br>
  <br>

  <div style="height:100px; background-color: #fff;"></div>
   
  <nav class="nav">
       <center>
          <ul class="nav__list">
              <li class="nav__btn">
                  <a class="nav__link" href="../index.php">
                      <i class="fas fa-home fa-lg"></i >
                  </a>
              </li>

              <li class="nav__btn">
                  <a class="nav__link" href="../board">
                      <i class="fas fa-comment fa-lg"></i >
                  </a>
              </li>

              <li class="nav__btn">
                  <a class="nav__link" href="index.php">
                      <i class="fas fa-hashtag fa-lg" style="color: #2E64FE;"></i >
                  </a>
              </li>

              <li class="nav__btn">
                  <a class="nav__link" href="../food.php">
                      <i class="fas fa-utensils"></i>
                  </a>
              </li>

              <li class="nav__btn">
                  <a class="nav__link" href="../cal.php">
                      <span class="nav__notification-ver2"></span>
                      <i class="fas fa-calendar-minus"></i>
                  </a>
              </li>
          </ul>
      </center>
  </nav>

</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/js/uikit-icons.min.js"></script>
 <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</body>
</html>