<?php 
    include "header.php";
    include "db.php";
    error_reporting( E_ALL );
    ini_set( "display_errors", 1 );
?>

<?php 
	if(isset($_SESSION['userid'])){
?>  

<div class="uk-container">

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

    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h4>
                <i style="color: #F5A9A9;" class="fas fa-temperature-high">&nbsp;</i>

                <a style="color: black;" href="https://kneung.page.link/jaga">
                    <b>건강상태 자가진단</b> &nbsp;<i class="fas fa-chevron-right"></i>
                </a>
            </h4>
        </div>
        <br>
    </div>

    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <?php include "weather.php"; ?>
        </div>
        <br>
    </div>

    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <!-- 시간표 제목 -->
            <h4>
                <b>시간표</b>
                <br>
                <span style="font-size: 15px;  font-family: 'Cafe24SsurroundAir';">
                    <?php echo "". date("Y년 m월 d일");?>
                </span>
            </h4>

            <!-- 시간표 -->
            <iframe src="http://컴시간학생.kr" width="100%;" height="300px;"></iframe>

            <!-- 안내문 -->
            <span style="color: gray; font-size: 12px; margin-top: 4px;">
                <i class="far fa-question-circle"></i>
                <a href="board/view.php?id=19" style="color: gray;">시간표가 안뜨시나요?</a>
            </span>
        </div>
        <br>
    </div>

    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h4>
                <b>오늘 할일</b>
            </h4>

            <!-- 입력 폼 -->
            <form id="js_todoForm">
                <div class="form-group">
                    <input class="uk-input" id="inputValue" type="text" placeholder="할일을 적어주세요."></div>
           </form>

           <!-- 리스트 표시 -->
           <ul id="js_todoList"></ul>
        </div>
        <br>
    </div>

    <div>
        <div class="uk-container">

            <!-- 광고 안내멘트 -->
            <div class="uk-card uk-card-default uk-card-body" style="background-color: #3A01DF; color: white;">
                <h4>
                    <div class="col-md-5" id="noneDiv" style="display: none; font-size: 15px; color: white;">
                        무료 광고는 학교에 대한 홍보 (예: 동아리 인원 모집)같은 것만 받습니다.
                        <br>
                        <br>
                        <a onclick="offDisplay()" style="color: white;">
                            <span>내용 숨기기</span>
                        </a>
                </div>

                <div id="test" style="display:block">
                    <!-- 광고 안내멘트 -->
                    <span style="font-size: 10px;  color: white;">
                        <a onclick="onDisplay()">
                            <span style="font-family: 'Cafe24SsurroundAir'; color: white;">Free AD 무료 광고</span>
                            <i class="far fa-question-circle" style="color: white;"></i>
                        </a>
                    </span>
                    <br>

                    <!-- 광고 -->
                    <a style="color: black; color: white;" href="https://instagram.com/oopseong">
                        <b style="font-family: 'Cafe24Ssurround'; color: white;"> 홍보가 필요하시나요?</b>&nbsp;<i class="fas fa-chevron-right"></i>
                    </a>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- 메뉴바 -->
    <br>
    <br>
    <center>
        <p >
            <a href="logout.php" style="color: black;">로그아웃</a>
        </p>
    </center>

    <div style="height:100px;"></div>

    <nav class="nav">
        <center>
            <ul class="nav__list">
                <li class="nav__btn">
                    <a class="nav__link" href="index.php">
                        <i class="fas fa-home fa-lg" style="color: #2E64FE;"></i >
                    </a>
                </li>

                <li class="nav__btn">
                    <a class="nav__link" href="board">
                        <i class="fas fa-comment fa-lg"></i >
                    </a>
                </li>

                <li class="nav__btn">
                    <a class="nav__link" href="shap">
                        <i class="fas fa-hashtag fa-lg"></i >
                    </a>
                </li>

                <li class="nav__btn">
                    <a class="nav__link" href="food.php">
                        <i class="fas fa-utensils"></i>
                    </a>
                </li>

                <li class="nav__btn">
                    <a class="nav__link" href="cal.php">
                        <span class="nav__notification-ver2"></span>
                        <i class="fas fa-calendar-minus"></i>
                    </a>
                </li>
            </ul>
        </center>
    </nav>

<script src="app.js"></script>
<script src="todo.js"></script>
                                    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/js/uikit-icons.min.js"></script>

</body>
</html>

<?php }else{
	echo "<script>alert('로그인을 해주세요.'); history.back(); </script>";
  }