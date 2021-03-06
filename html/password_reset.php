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
                            <div class="col-sm-6 col-sm-offset-3">
                                회원가입시 사용했던 이메일을 입력하시면 초기화 메일을 보내드립니다
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-3 control-label">이메일</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="inputEmail" placeholder="example@example.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <div class="alert alert-danger alert-short" role="alert">해당 이메일로 가입한 사용자가 없습니다.</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-block btn-warning">비밀번호 초기화 메일 받기</button>
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
