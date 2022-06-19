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

            <!-- 상단 메뉴바 -->
			<div class="fixed-top" style="background-color: white;">
				<div style="margin-top: 30px;"></div>
		        <div class="container-xl">
			    <h1>
                    <a href="find.php" style="color: black;"><i class="fas fa-chevron-left"></i></a> 아이디 찾기
                </h1>
			</div>

            <form method="post" action="member_find_id.php">
                <div style="margin-top:20px;">
                    <form method="post" action="/member/login_ok.php">
                        <div class="mb-3">

                            <!-- 아이디 -->
                            <label for="inputPassword5" class="form-label">이름</label>
                            <input
                                type="text"
                                maxlength="11"
                                class="form-control form-control-lg"
                                name="name"
                                style="ime-mode:inactive;"
                                required="required">

							<!-- 패스워드 -->
                            <div style="margin-top:20px"></div>
                            <label for="inputPassword5" class="form-label">학번</label>
                            <input
                                type="password"
                                name="adress"
                                class="form-control form-control-lg"
                                id="exampleFormControlInput1"
                                required="required">
							<!-- 패스워드 끝 -->

                            <!-- 버튼 -->
						    <div class="fixed-bottom">
						        <div class="container-xl">
						        <button type="summit" class="btn btn-dark btn-lg btn-block mb-3">아이디 찾기</button>
						    </div>

				        </div>
                        <div style="margin-top:20px"></div>
                    </form>
                </div>
            </form>

            <div style="margin-bottom: 50px"></div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"integrity="sha384-mrcw6zmfylzcla8nl+ntuvf0sa7msxsp1uyjomp4yleunsfap+jcxn/twtiaxvxm"crossorigin="anonymous"></script>
			<script src="script.js"></script>
			<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        </body>
    </html>