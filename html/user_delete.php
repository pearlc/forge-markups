<?php
include('header.php');
?>

<div id="main" class="container">

    <div id="content" class="content bg-base section">

        <div class="ribbon ribbon-highlight">
            <ol class="breadcrumb ribbon-inner">
                <li><a href="#">홈</a></li>
                <li class="active" title="회원 탈퇴">회원 탈퇴</li>
            </ol>
        </div>

        <header class="page-header">

            <h1 class="page-title full-page-title">
                회원 탈퇴
            </h1>

        </header>

        <div class="row style-single">

            <div class="col-sm-12 entry-content">

                <div class="well no-padding col-md-4 col-md-offset-4">

                    <form class="form-horizontal" role="form">

                        <div class="form-group">

                            <div class="col-sm-offset-1 col-sm-10">

                                <p>회원을 탈퇴하시면 어떤 경우에도 복구가 되지 않으며</p>
                                <p>기존에 작성한 글들에 대한 수정 / 삭제가 불가능합니다.</p>
                                <p>그래도 탈퇴를 하시겠습니까?</p>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="confirm"> 탈퇴합니다</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-10">
                                <div class="alert alert-danger alert-short" role="alert">올바른 이메일 주소가 아닙니다</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-10">
                                <button type="submit" class="btn btn-block btn-lg btn-danger">탈퇴하기</button>
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
