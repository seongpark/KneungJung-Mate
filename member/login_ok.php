<meta charset="utf-8" />
<?php	
	include "../db.php";
	include "../password.php";

	if($_POST["userid"] == "" || $_POST["userpw"] == ""){
		echo '<script> alert("아이디나 비밀번호를 입력해주세요."); history.back(); </script>';
	}else{

	$password = $_POST['userpw'];
	$sql = mq("select * from member where id='".$_POST['userid']."'");
	$member = $sql->fetch_array();
	$hash_pw = $member['pw'];
	
	if(password_verify($password, $hash_pw)) 
	{
		$_SESSION['userid'] = $member["id"];
		$_SESSION['userpw'] = $member["pw"];
		echo "<script>location.href='page/main';</script>";

	}else{
		echo "<script>alert('아이디 혹은 비밀번호가 잘못되었습니다.'); history.back();</script>";
	}
}
?>