<?php
require_once("dbconfig.php");

if (isset($_POST["id"])) {
    $id = $_POST["id"];
}

$password = $_POST["password"];

if (isset($id)) {
    $sql = "select count(password) as cnt from board where id = '$id' and password = password('$password')";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();

    if ($row["cnt"]) {
        $sql = "delete from board where id = '$id'";
    } else {
    ?>
        <script>
            alert("내가 작성한 게시글이 아닙니다.");
            history.go(-1);
        </script>
    <?php
        exit;
    }
}

$result = $db->query($sql);
if ($result) {
    $msg = "삭제가 완료되었습니다.";
    $replaceURL = './';
} else {
    $msg = "다시 시도해주세요.";
    ?>
    <script>
        alert("<?php echo $msg?>");
        history.go(-1);
    </script>
<?php
    exit;
}
?>
<script>
    alert("<?php echo $msg?>");
    location.replace("<?php echo $replaceURL?>");
</script>
