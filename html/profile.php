<?php
include('header.php');
?>

<div id="main" class="container">

    <div id="content" class="content bg-base section">

        <div class="ribbon ribbon-highlight">
            <ol class="breadcrumb ribbon-inner">
                <li><a href="#">홈</a></li>
                <li class="active" title="회원정보">회원정보</li>
            </ol>
        </div>

        <header class="page-header">

            <h1 class="page-title full-page-title">
                회원정보
            </h1>

        </header>

        <div class="row style-single">

            <div class="col-sm-12 entry-content">

                <div class="well no-padding col-md-6 col-md-offset-3">

                    <table class="table">
                        <tbody>
                        <tr>
                            <th>이름</th>
                            <td>내 이름은 홍길동</td>
                        </tr>
                        <tr>
                            <th>이메일</th>
                            <td>pearlc11@gmail.com</td>
                        </tr>
                        <tr>
                            <th>활성 날짜</th>
                            <td>2014-12-27</td>
                        </tr>
                        <tr>
                            <th>마지막 로그인</th>
                            <td>2015-02-02 14:34:11</td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <a href="profile_edit.php" class="btn btn-warning btn-sm" role="button">내 정보 변경</a>
                                <a href="password_edit.php" class="btn btn-warning btn-sm" role="button">비밀번호 변경</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>

            </div><!--/.col-sm-12 entry-content-->

        </div>

    </div><!--/#content-->

</div><!--#main.container-->

<?php
include('footer.php');
?>
