<?php
    require('head.php'); 
  ?>

<head>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
        crossorigin="anonymous">
</head>
<style>
    .card {
        --bs-card-spacer-y: 0rem!important;
        --bs-card-spacer-x: 0rem!important;
        --bs-card-title-spacer-y: 0rem!important;
        --bs-card-border-width: 0px!important;

    }

    a {
        text-decoration-line: none!important;
    }

    .uk-margin {
        background-color: #fff!important;
    }

    .fixed-bottom {
        background-color: #fff!important;
    }

    .margin1 {
        background-color: #fff!important;
    }
</style>
<?php
$xml=simplexml_load_file("data.xml")
?>
<?php include "dbconfig.php";?>

<?php
require_once("dbconfig.php");

$id = $_GET["id"];

$isHit = !empty($id) && empty($_COOKIE["board_" . $id]);
if ($isHit) {
    $sql = "update board set hit = hit+1 where id =" . $id;
    $result = $db->query($sql);
    if (empty($result)) {
    ?>
<script>
    alert("some problem");
    history.go(-1);
</script>
<?php
    } else {
        setcookie('board_' . $id, TRUE, time() + (60 * 60 * 24), '/');
    }
}

$sql = "select id, title, content, date, hit, writer, password from board where id=" . $id;
$result = $db->query($sql);
$row = $result->fetch_assoc();
?>

<body>

<div class="fixed-top">
<div class="prev">
        <div class="uk-container">

            <h2>
                <a href="index.php" style="  color: rgb(0,0,0)!important;">
                    <i class="fas fa-chevron-left"></i>
                </a>
            </h2>
        </div>
        
    </div>
    <div style="height: 1px; background-color: #f2f2f2;"></div>
</div>

<div style="margin-top: 65px;"></div>


    <div class="uk-container">
        <div style="height: 1px;"></div>
        <br>
        <b style="font-size: 20px;"><?php echo $row['title']?></b>
        <div id="boardInfo" class="text-muted small  mb-lg-0">
            <div style="font-size: 13px">
                <span style="color: #A4A4A4" id="boardID"><?php echo $row["writer"]?></span>
                <span style="color: #A4A4A4" id="boardDate">
                    •
                    <?php echo $row["date"]?></span>
                <span style="color: #A4A4A4" id="boardHit">
                    • 조회
                    <?php echo $row["hit"]?>회</span>
                <span style="color: #A4A4A4">
                    •
                </span>
                <a href="./delete.php?id=<?php echo $id?>" style="color: #A4A4A4">삭제</a>
                <br><br>
            </div>
            <div id="boardContent"><?php echo $row["content"]?></div>
        </div>
    </div>
    <br>
    <div style="height: 1px; background-color: #f2f2f2;"></div>
    <div class="btnSet"></div>
    <div class="uk-container">
  
        <div style="margin-top: 20px"></div>
        <span style="font-size: 18px" ;=";">
            <b>댓글</b>
        </span>
        <div style="margin-top: 20px"></div>
        <div id="boardComment">
            <?php require_once('./comment.php')?>

        </div>

    </article>
    <div style="margin-top: 150px;"></div>
</div>
</div>
</body>
<?php
    require('footer.php'); 
?>
</html>