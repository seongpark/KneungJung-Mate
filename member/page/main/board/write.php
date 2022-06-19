<!-- Github : ChangMun00 이 소스는 깃허브에 있는 소스입니다 :) 이 주석을 지우지 말아주세요 CDN 사용안내 :
https://notice.winsub.kr/view.php?id=5 -->
<!DOCTYPE html>
<?php
$xml=simplexml_load_file("data.xml")
?>
<html lang="ko">
    <head>

    <link rel="shortcut icon" href="https://i.ibb.co/hFM7Qcq/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" href="https://i.ibb.co/hFM7Qcq/favicon.png" />

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>강중메이트</title>
        <meta name="description" content="강중메이트에서 더욱 편리한 학교 생활을 누려보세요.">

        <!--프레임워크 시작-->
        <link rel="stylesheet" href="style.css">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/css/uikit.min.css"/>
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
            rel="stylesheet">
        <!--CDN 링크 -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.0/dist/js/uikit.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/uikit@3.7.0/dist/js/uikit-icons.min.js"></script>




        <!-- include libraries(jQuery, bootstrap) -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link
            href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
            rel="stylesheet">
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- include summernote css/js -->
        <link
            href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css"
            rel="stylesheet">
        <script
            src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <!--프레임워크 끝-->

        <style>
            .uk-button-secondary {
                border-radius: 0rem!important;
                width: 100%!important;
            }

            .uk-input {
                border-radius: 0rem!important;
            }
        </style>
    </head>
    <!-- include summernote css/js -->

    <!--프레임워크 끝-->
    <?php include "dbconfig.php";?>

    <?php
$xml=simplexml_load_file("data.xml")
?>

    <?php
require_once("dbconfig.php");

if (isset($_GET["id"]))
{
    $id = $_GET["id"];
}

if (isset($id))
{
    $sql = "select id, title, content, date, hit, writer, password from board where id=" . $id;
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
}
?>

    <body>

        <div
            style="width: 100%; padding-top: 5px; padding-bottom: 3px; background-color: white;">
            <center>
                <h4>
                    <a onclick="history.back();" style="color: black;">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <b>글쓰기</b>
                </h4>
            </center>
        </div>
        <div style="height: 1px; background-color: #D8D8D8;"></div>

        <div class="uk-container">
            <div id="boardWrite">
                <form action="./write_update.php" method="post">
                    <?php
            if(isset($id)) {
                echo '<input type="hidden" name="id" value="' . $id . '">';
            }
            ?>

                <?php
                    if(isset($id)) {
                        echo $row["writer"];
                    } else { ?>

                    <form class="uk-form-stacked">

                        <div class="uk-form-controls">
                            <input
                                type="hidden"
                                class="uk-input"
                                placeholder="닉네임"
                                value="<?php
	if(isset($_SESSION['userid'])){
		echo "{$_SESSION['userid']}";
  }
	?>"
                                name="writer"
                                id="writer"
                                readonly="readonly"
                                aria-describedby="basic-addon1">

                            <input
                                type="hidden"
                                class="uk-input"
                                name="password"
                                id="비밀번호"
                                aria-describedby="basic-addon1"
                                value="<?php 	if(isset($_SESSION['userpw'])){
		echo "{$_SESSION['userpw']}";
  }?>"
                                readonly="readonly">

                        </div>
                    </div>

                </div>
            </div>
            <div style="height: 15px; background-color: #f2f2f2;"></div>
            <input
                type="title"
                class="uk-input"
                name="title"
                id="title"
                aria-describedby="basic-addon1"
                placeholder="제목을 입력해주세요. (최대 27글자)"
                value="<?php echo isset($row["title"])?$row["title"]:null?>"
                maxlength='27'
                required="required">
            <div style="height: 15px; background-color: #f2f2f2;"></div>
            <script>

                $(document).ready(function () {
                    $('#summernote').summernote();
                });
            </script>
            <textarea id="summernote" name="content" rows="20"></textarea>

            <?php } ?>

            <div class="btnSet"></div>
        </div>
        <button
            type="submit"
            class="uk-button uk-button-secondary uk-width-1-1 uk-margin-small-bottom">등록</button>
    </div>
</form>
</div>
</div>
</div>
</body>

</html>