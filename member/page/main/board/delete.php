<?php
    require('head.php'); 
  ?> 
  <?php include "dbconfig.php";?>
  <div class="uk-container">
  <nav class="sel-target: .uk-navbar-container; cls-active: uk-navbar-stick" uk-navbar>
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li class="uk-active"
                >
                <a href="#"><b style="  font-family: 'Spoqa Han Sans Neo', 'sans-serif';">강릉중학교</b></a></li>
            </ul>
        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href=""><?php
	if(isset($_SESSION['userid'])){
		echo "{$_SESSION['userid']}";
  }
	?>
</a></li>
            </ul>
        </div>
    </nav>
 
<?php
require_once("dbconfig.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
}
?>

<body>
    
<div class="uk-card uk-card-default uk-card-body">
            <h4 style="  font-family: 'Cafe24Ssurround'";><b>글 삭제</b></h4>

 

<article class="boardArticle">

    <?php
    if (isset($id)) {
        $sql ="select count(id) as cnt from board where id = '$id'";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();
        if (empty($row["cnt"])) {
        ?>
        <script>
            alert("Do not exist");
            history.go(-1);
        </script>
        <?php
        exit;
        }

        $sql = "select title from board where id = '$id'";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();
        ?>
        <div id="boardDelete">
        <form action="./delete_update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id?>">
            
    <span>삭제할 게시글</span>
    <div style="margin-top:5px;"></div>
  <input type="text" class="uk-input" value="<?php echo $row['title']?>" name="text" id="text" aria-describedby="basic-addon1" readonly>
  <input type="hidden" class="uk-input" placeholder="Password" name="password" id="password" aria-describedby="basic-addon1" value="<?php 	if(isset($_SESSION['userpw'])){
		echo "{$_SESSION['userpw']}";
  }?>">
</div>    <div style="margin-top:15px;"></div>
            <div class="btnSet">
                <button type="submit" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">삭제</button>

            </div>
        </form>
    </div>
    <?php
    //if (isset($id)) {
    } else {
    ?>
        <script>
            alert('정상적인 경로를 이용해주세요.');
            history.go(-1);
        </script>
        <?php
        exit;
    }
    ?>
</article>
</div></div>
</body>

<nav class="nav">
      <center>
        <ul class="nav__list">

          <li class="nav__btn">
            <a class="nav__link" href="../index.php"
              ><i class="fas fa-home fa-lg" ></i
            ></a>
          </li>

          <li class="nav__btn">
            <a class="nav__link" href="index.php">
              <i class="fas fa-comment fa-lg" style="color: #2E64FE;"></i
            ></a>
          </li>

          <li class="nav__btn">
            <a class="nav__link" href="../shap">
              <i class="fas fa-hashtag fa-lg"></i
            ></a>
          </li>

          <li class="nav__btn">
            <a class="nav__link" href="http://bloodcat.com/carte/#jss240"
              ><i class="fas fa-utensils"></i></a>
          </li>

          <li class="nav__btn" >
          <a class="nav__link" href="../cal.php" >
              <span class="nav__notification-ver2"></span>
              <i class="fas fa-calendar-minus"></i></a>
          </li>

        </ul>
            </center>
      </nav>
<?php
    require('footer.php'); 
?>
</html>
