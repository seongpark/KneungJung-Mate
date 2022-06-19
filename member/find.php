<?php include "head.php";?>
        <link rel="stylesheet" href="../style.css">
        <style>
            .btn {
                width: 100%;
            }

            a {
                color: black!important;
            }
        </style>
    </head>
    <body>

        <!-- 메뉴바 -->
        <div class="fixed-top">
            <div style="margin-top: 30px;"></div>
            <div class="container-xl">
                <h1>
                    <a href="../" style="color: black;">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    계정 찾기
                </h1>
            </div>
        </div>

        <div style="margin-top: 86px"></div>
        <div class="fixed-bottom">
            <div class="container-xl">
                <div style="margin-top:20px; ">

                    <!-- 아이디 버튼 -->
                    <a
                        href="member_find.php"
                        style="color: white!important;"
                        class="btn btn-dark btn-lg btn-block"
                        id="btn">
                        아이디 찾기
                    </a>

                    <div style="margin-top:20px;">

                    <!-- 비밀번호 버튼 -->
                    <a 
                        href="https://open.kakao.com/o/sgEWPHld" 
                        style="color: white!important;" 
                        class="btn btn-dark btn-lg btn-block mb-4">
                        비밀번호 찾기
                    </a>
                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>