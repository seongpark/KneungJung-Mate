<?php include "head.php"; ?>
        <link rel="stylesheet" href="../style.css">
        <style>
            .btn {
                width: 100%;
            }
        </style>
    </head>
    <body>
        <div class="container-xl">
            <div style="margin-top: 80px"></div>
			
            <!-- 뒤로가기 -->
            <div class="fixed-top" style="background-color: white;">
			    <div style="margin-top: 30px;"></div>
			    <div class="container-xl">
			    <h1><a href="../" style="color: black;"><i class="fas fa-chevron-left"></i></a> 회원가입</h1>
			</div>

		</div>

            <form method="post" action="member_ok.php" name="memform">
                <div style="margin-top:20px;">
                    <form method="post" action="/member/login_ok.php">
                        <div class="mb-3">
                            <!-- 아이디 -->
                            <label for="inputPassword5" class="form-label">아이디</label>

                            <input
                                type="text"
                                name="userid"
                                oninput="handleOnInput(this)"
                                maxlength="11"
                                class="form-control form-control-lg"
                                id="uid"
                                style="ime-mode:inactive;"
                                required="required">

                            <div id="passwordHelpBlock" class="form-text">
                                영어 및 숫자로 10자리까지 입력할 수 있습니다.
                            </div>

							<!-- 패스워드 -->
                            <div style="margin-top:20px"></div>
                            <label for="inputPassword5" class="form-label">비밀번호</label>

                            <input
                                type="password"
                                name="userpw"
                                minlength="8"
                                class="form-control form-control-lg"
                                id="exampleFormControlInput1"
                                required="required">

                            <div id="passwordHelpBlock" class="form-text">
                                8자 이상, 영어 및 숫자가 포함되어야 합니다.
                            </div>

							<!-- 이름 -->
                            <div style="margin-top:20px"></div>
                            <label for="inputPassword5" class="form-label" required>이름</label>
                            
                            <input
                                type="text"
                                name="name"
                                class="form-control form-control-lg"
                                id="exampleFormControlInput1"
                                required="required">

							<!-- 학년 반 -->
                            <div style="margin-top:20px"></div>
                            <label for="inputPassword5" class="form-label">학년 및 반</label>

                            <select class="form-control form-control-lg" name="email">
                                <option>학년 선택</option>    
							    <option>1학년</option>
                                <option>2학년</option>
                                <option>3학년</option>
                            </select>

                            <div style="margin-top:20px"></div>

                            <select class="form-control form-control-lg" name="sex">
                                <option>반 선택</option>        
							    <option>1반</option>
                                <option>2반</option>
                                <option>3반</option>
                                <option>4반</option>
                                <option>5반</option>
                                <option>6반</option>
                                <option>7반</option>
                                <option>8반</option>
                                <option>9반</option>
                            </select>

							<!-- 학번 -->
                            <div style="margin-top:20px"></div>
                            <label for="inputPassword5" class="form-label">학번 입력</label>
                            <input class="form-control form-control-lg" name="adress" required>

                        <div style="margin-top:20px"></div>

						<!-- 체크박스 (개인정보) -->
                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                name="agree"
								onClick="agreeCheck(this.form)">

                            <label class="form-check-label" for="flexCheckChecked">
                                <a href="privacy.php">개인정보처리방침</a> 및 이용약관 동의
                            </label>
                        </div>

                        <!-- 회원가입 버튼 -->
						<div class="fixed-bottom">
						    <div class="container-xl">
						        <button type="summit" class="btn btn-dark btn-lg btn-block mb-3" name="checkButton" disabled>회원가입</button>
						    </div>
						</div>

                        <div style="margin-top:100px"></div>
                    </form>
                </div>
            </form>

            <div style="margin-bottom: 50px"></div>

            <script>
                function handleOnInput(e) {
                    e.value = e
                        .value
                        .replace(/[^A-Za-z][^1-9]/ig, '')
                }
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-mrcw6zmfylzcla8nl+ntuvf0sa7msxsp1uyjomp4yleunsfap+jcxn/twtiaxvxm"crossorigin="anonymous"></script>
			<script src="script.js"></script>
			<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        </body>
    </html>