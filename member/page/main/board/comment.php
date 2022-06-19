<?php
$sql = "select id, postid, depth, content, writer, password from comment 
        where id = depth and postid = " . $id;
$result = $db->query($sql);
?>
<div id="commentView">
    <?php
    while ($row = $result->fetch_assoc()) {
    ?>

    <div class="card">
        <div class="card-body">
            <span style="font-size: 12px"><?php echo $row["writer"]?></span><br>
            <?php echo $row["content"]?>
            <div style="height: 5px;"></div>
            <div style="height: 1px; background-color: #f2f2f2;"></div>
        </div>
    </div><br>

    <?php
            $subSql = "select id, postid, depth, content, writer, password from comment
                       where id != depth and depth = " . $row["id"];
            $subResult = $db->query($subSql);
            while ($subRow = $subResult->fetch_assoc()) {
                ?>
    <ul class="twoDepth">
        <li>
            <div>

                <span>작성자 :
                    <?php echo $subRow["writer"] ?></span>
                <p><?php echo $subRow["content"] ?></p>

            </div>

            <?php
            }
            ?>

            <?php }?>
        </div>

        <form action="comment_update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id?>">

            <div class="uk-margin">
                <input
                    type="hidden"
                    class="uk-input"
                    placeholder="닉네임"
                    name="writer"
                    id="writer"
                    value="<?php
	if(isset($_SESSION['userid'])){
		echo "{$_SESSION['userid']}";
  }
	?> "
                    aria-describedby="basic-addon1"
                    readonly="readonly">
            </div>

            <div class="fixed-bottom">
            <div style="height: 1px; background-color: #f2f2f2;"></div>
<center>
    <div class="reply">
    <div class="margin1"></div>
                <div class="uk-margin" uk-margin="uk-margin">
                    <div uk-form-custom="target: true">
                        <input
                            type="text"
                            class="uk-input uk-form-width-medium"
                            name="content"
                            id="content"
                            placeholder="내용 입력"
                            required="required">
                    </div>
                    <button type="submit" class="uk-button uk-button-primary">등록</button>
                </div>
                <div style="background-color: white; height: 12px;"></div>
</center>
</div>
            </div>
        </div>
    </form>

    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
        crossorigin="anonymous"></script>