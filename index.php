<?php include "db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <meta name="description" content="강중메이트에서 더욱 편리한 학교 생활을 누려보세요.">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta charset="utf-8"/>



        <link rel="shortcut icon" href="https://i.ibb.co/hFM7Qcq/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" href="https://i.ibb.co/hFM7Qcq/favicon.png" />
        <title>강중메이트</title>

        <style>
            .btn {
                width: 100%;
            }

			a {
				color: black!important;
			}
        </style>
        <script src="alert.js?ver=1"></script>
    </head>
    <body>
        <div style="margin-top: 70px"></div>
        <div class="container-xl">
            <h1>로그인</h1>
            <div style="margin-top:20px; ">
                <form method="post" action="member/login_ok.php">

                    <div class="mb-3">
                        <!-- 아이디 -->
						<label for="inputPassword5" class="form-label" >아이디</label>
                        <input type="text" name="userid" class="form-control form-control-lg" id="exampleFormControlInput1">
                        <div style="margin-top:20px"></div>

                        <!-- 비밀번호 -->
						<label for="inputPassword5" class="form-label" >비밀번호</label>
                        <input type="password" name="userpw" class="form-control form-control-lg" id="exampleFormControlInput1">
                        <div style="margin-top:20px"></div>
                    </div>

                    <!-- 회원가입/계정찾기 버튼 -->
                    <div class="d-flex justify-content-between bd-highlight mb-3">
                        <div class="p-2 bd-highlight">
                            <a href="member/member.php">회원가입</a>
                        </div>
                        <div class="p-2 bd-highlight">
							<a href="member/find.php">계정 찾기</a>
                        </div>
                    </div>

                    <!-- 로그인 -->
                    <button type="summit" class="btn btn-dark btn-lg btn-block" id="btn">로그인</button>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>