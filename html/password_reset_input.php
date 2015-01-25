<?php
include('header.php');
?>

<div id="main" class="container">

    <div id="content" class="content bg-base section">

        <div class="ribbon ribbon-highlight">
            <ol class="breadcrumb ribbon-inner">
                <li><a href="#">홈</a></li>
                <li class="active" title="비밀번호 초기화">비밀번호 초기화</li>
            </ol>
        </div>

        <header class="page-header">

            <h1 class="page-title full-page-title">
                비밀번호 초기화
            </h1>

        </header>

        <div class="row style-single">

            <div class="col-sm-12 entry-content">

                <div class="well no-padding col-md-6 col-md-offset-3">

                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="inputNewPassword" class="col-sm-3 control-label">새 비밀번호</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputNewPassword" placeholder="새 비밀번호">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputNewPasswordRepeat" class="col-sm-3 control-label">새 비밀번호 확인</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="inputNewPasswordRepeat" placeholder="새 비밀번호 확인">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <div class="alert alert-danger alert-short" role="alert">올바른 이름이 아닙니다</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-block btn-warning">수정</button>
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
