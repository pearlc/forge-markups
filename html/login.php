<?php
include('header.php');
?>

<div id="main" class="container">

    <div id="content" class="content bg-base section">

        <div class="ribbon ribbon-highlight">
            <ol class="breadcrumb ribbon-inner">
                <li><a href="#">홈</a></li>
                <li class="active" title="로그인">로그인</li>
            </ol>
        </div>

        <header class="page-header">

            <h1 class="page-title full-page-title">
                로그인
            </h1>

        </header>

        <div class="row style-single">

            <div class="col-sm-12 entry-content">

                <div class="well no-padding col-md-6 col-md-offset-3">

                    <form method="POST" action="" accept-charset="UTF-8" class="form-horizontal">

                        <input name="returnUrl" type="hidden" value="">

                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-3 control-label">이메일</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="inputEmail" placeholder="example@example.com" name="email" type="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputpassword" class="col-sm-3 control-label">비밀번호</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="inputPassword" placeholder="비밀번호" name="password" type="password" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label><input type="checkbox" id="remember">자동 로그인</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <a href="http://general-admin.homestead.com:8000/password_reset">회원 가입하기</a> / <a href="http://general-admin.homestead.com:8000/password_reset">비밀번호를 잊었나요?</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <!-- jquery slideUp() slideDown() 이용해서 노출 -->
                                <div class="alert alert-danger alert-short" role="alert">올바른 이메일 주소가 아님밍</div>
                                <div class="alert alert-danger alert-short" role="alert">비밀번호를 입력해주세요</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <input class="btn btn-default" type="submit" value="로그인">
                            </div>
                        </div>
                    </form>

                </div>

            </div><!--/.col-sm-12 entry-content-->

        </div>

    </div><!--/#content-->

</div><!--#main.container-->

<?php
include('footer.php');
?>
