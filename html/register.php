<?php
include('header.php');
?>

<div id="main" class="container">

    <div id="content" class="content bg-base section">

        <div class="ribbon ribbon-highlight">
            <ol class="breadcrumb ribbon-inner">
                <li><a href="#">홈</a></li>
                <li class="active" title="회원가입">회원가입</li>
            </ol>
        </div>

        <header class="page-header">

            <h1 class="page-title full-page-title">
                회원가입
            </h1>

        </header>

        <div class="row style-single">

            <div class="col-sm-12 entry-content">

                <div class="well no-padding col-md-6 col-md-offset-3">

                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">이름</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="username" placeholder="이름">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-3 control-label">이메일</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="inputEmail" placeholder="example@example.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-3 control-label">비밀번호</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="inputPassword" placeholder="비밀번호">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPasswordRepeat" class="col-sm-3 control-label">비밀번호 확인</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="inputPasswordRepeat" placeholder="비밀번호 확인">
                            </div>
                        </div>
                        <!--                        <div class="form-group">-->
                        <!--                            <label for="description" class="col-sm-3 control-label">Description</label>-->
                        <!--                            <div class="col-sm-6">-->
                        <!--                                <textarea class="form-control" id="description" placeholder="Type your description..."></textarea>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                        <div class="form-group">-->
                        <!--                            <div class="col-sm-offset-3 col-sm-6">-->
                        <!--                                <div class="checkbox">-->
                        <!--                                    <label>-->
                        <!--                                        <input type="checkbox"> I agree with <a href="#">terms conditions</a>-->
                        <!--                                    </label>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <div class="alert alert-danger alert-short" role="alert">올바른 이메일 주소가 아님니다</div>
                                <div class="alert alert-danger alert-short" role="alert">비밀번호를 입력해주세요</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-block btn-lg btn-warning">회원 가입</button>
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
