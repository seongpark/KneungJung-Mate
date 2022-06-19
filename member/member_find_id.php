<?php
include "../db.php";
if($_POST["name"] == "" || $_POST["adress"] == ""){
		echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
	}else{

	$username = $_POST['name'];
	$adress = $_POST['adress'];


$sql = mq("select * from member where name = '{$username}' && adress = '{$adress}'");
$result = $sql->fetch_array();

if($result["name"] == $username){
	echo "<script>alert('ID는 ".$result['id']."입니다.'); history.back();</script>";
}else{
echo "<script>alert('계정이 존재하지 않습니다.'); history.back();</script>";
}
}
?>