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
                <li class="uk-active"><a href="" style="  font-family: 'Spoqa Han Sans Neo', 'sans-serif';"><?php
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

define("ONE_PAGE_POSTS", 5);
define("ONE_SECTION", 5);


if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}
$searchCategory = "";
$subString = "";
if (isset($_GET["searchCategory"])) {
    $searchCategory = $_GET["searchCategory"];
    $subString .= '&amp;searchCategory=' . $searchCategory;
}

if (isset($_GET["searchText"])) {
    $searchText = $_GET["searchText"];
    $subString .= '&amp;searchText=' . $searchText;
}

$isValidSearchOption = isset($searchCategory) && isset($searchText);
$searchSql = "";
if ($isValidSearchOption) {
    $searchSql = ' where ' . $searchCategory . ' like "%' . $searchText . '%"';
}

$sql = "select count(*) as cnt from board" . $searchSql;
$result = $db->query($sql);
$row = $result->fetch_assoc();

$allPost = $row["cnt"];
$allPage = ceil($allPost / ONE_PAGE_POSTS);

$isOutOfBound = (1>$page) && $page > $allPage;
if ($isOutOfBound) {
    ?>
    <script>
        alert("page does not exist");
        history.go(-1);
    </script>
    <?php
    exit;
}

$currentSection = ceil($page / ONE_SECTION);
$allSection = ceil($allPage / ONE_SECTION);
$firstPage = ($currentSection * ONE_SECTION)  - (ONE_SECTION -1);

$lastPage = ($currentSection == $allSection) ? $allPage : $currentSection * ONE_SECTION;
$prevPage = ($currentSection - 1) * ONE_SECTION;
$nextPage = (($currentSection + 1) * ONE_SECTION) - (ONE_SECTION - 1);

$paging = "";



if($page != 1) {
    $paging .= '<li class="page page_start"><a href="./index.php?page=1' . $subString . '">< </a></span>';
}
if($currentSection != 1) {
    $paging .= '<span> <a href="./index.php?page=' . $prevPage . $subString . '"> prev</a></span>';
}

for($i = $firstPage; $i <= $lastPage; $i++) {
    if($i == $page) {
        $paging .= '<span class=""> ' . $i . '</span>';
    } else {
        $paging .= '<span class="page"><a href="./index.php?page=' . $i . $subString . '"> ' . $i . '</a></span>';

    }
}

if($currentSection != $allSection) {
    $paging .= '<span class="page page_next"><a href="./index.php?page=' . $nextPage . $subString . '">next</a></span>';

}

if($page != $allPage) {
    $paging .= '<span class="page page_end"><a href="./index.php?page=' . $allPage . $subString . '"> ></a></span>';

}
$paging .= '</ul>';

$currentLimit = (ONE_PAGE_POSTS * $page) - ONE_PAGE_POSTS;
$sqlLimit = ' limit ' . $currentLimit . ', ' . ONE_PAGE_POSTS;

$sql = 'select * from board ' . $searchSql . ' order by id desc' . $sqlLimit;
$result = $db->query($sql);
?>

<body>
    <div id="boardList">
        
    <div class="uk-card uk-card-default uk-card-body">
    <div class="uk-clearfix">
    <div class="uk-float-left">
            <h4 style="  font-family: 'Cafe24Ssurround'";><b>최근 글</b></h4>
    </div>
    <div class="uk-float-right">
    <button class="uk-button uk-button-primary" onclick = "location.href = 'write.php' ">글쓰기</button>
    </div>
            </div>
            <table class="uk-table uk-table-divider">
        <thead>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = $result->fetch_assoc())
        {
            $datetime = explode(' ', $row['date']);
            $date = $datetime[0];
            $time = $datetime[1];
            if ($date == Date('Y-m-d')) {
                $row['date'] = $time;
            } else {
                $row['date'] = $date;
            }
            ?>
            <tr>
                <td class="title" style="font-size: 13px; color: black;"><a href="./view.php?id=<?php echo $row['id'] ?>" style="color: black;"><?php echo $row['title']?></a></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <div class="paging">
        <?php echo $paging ?>
    </div>



</div>

        </form>
        <br>
        <div class="uk-card uk-card-default uk-card-body">
            <h4 style="  font-family: 'Cafe24Ssurround'";><b>글 검색</b></h4>

    
            <div class="searchBox">
        <form action="./index.php" method="get">



    <div class="uk-margin">
        <div class="uk-form-controls">
            <select name="searchCategory" class="uk-select" id="form-stacked-select">
            <option <?php echo $searchCategory=='title'?'selected="selected"':null?> value="title">제목</option>
                <option <?php echo $searchCategory=='content'?'selected="selected"':null?> value="content">내용</option>
                <option <?php echo $searchCategory=='writer'?'selected="selected"':null?> value="writer">작성자</option>
            </select>
        </div>

        <div class="uk-margin">
        <div class="uk-form-controls">
        <input class="uk-input" type="text" placeholder="검색어"  name="searchText"  value="<?php echo isset($searchText)?$searchText:null?>">
        </div>
    </div>
    </div>
        </div>
    </div>
        </div>
       
    </div>
    </div>

    </div>


    <nav class="nav">
      <center>
        <ul class="nav__list">

          <li class="nav__btn">
            <a class="nav__link" href="../index.php"
              ><i class="fas fa-home fa-lg" ></i
            ></a>
          </li>

          <li class="nav__btn">
            <a class="nav__link" href="board">
              <i class="fas fa-comment fa-lg" style="color: #2E64FE;"></i
            ></a>
          </li>

          <li class="nav__btn">
            <a class="nav__link" href="../shap">
              <i class="fas fa-hashtag fa-lg"></i
            ></a>
          </li>

          <li class="nav__btn">
            <a class="nav__link" href="../food.php"
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
      </div>

      <div style="height: 160px;"></div>
</html>
</body>
<?php
    require('footer.php'); 
?>
