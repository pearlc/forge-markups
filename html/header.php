<!DOCTYPE html>
<!--[if lt IE 7]>   <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>      <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>      <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
    <title>Summarize - Responsive Blog/Magazine</title>
    <meta name="description" content="">

    <!-- Mobile Devices Viewport Resset-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
    <!--[if IE 8]>
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link rel="stylesheet" href="../assets/vendor/prettyPhoto/css/prettyPhoto.css">

    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Lato:300,400,700,400italic,700italic|Droid+Serif' rel='stylesheet' type='text/css'>

    <!-- base layout styling -->
    <link rel="stylesheet" href="../assets/css/base.css">

    <!-- components styling -->
    <link rel="stylesheet" href="../assets/css/components.css">

    <!-- template colorschemes -->
    <link rel="stylesheet" href="../assets/css/default.css">

    <!-- 데이터테이블 -->
<!--    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="//cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">

    <!-- forge css -->
    <link rel="stylesheet" href="../assets/css/forge.css">

    <script src="../assets/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

</head>
<body>

<h1 class="sr-only">Summarize</h1>

<nav id="header" class="header-navbar" role="navigation">

    <div class="header-navbar-inner container">

        <div id="brand" class="navbar-brand">
            <a href="index.php" rel="bookmark">

                <!-- to disable lazy loading, remove data-src and data-src-retina -->
                <img src="../assets/img/sample/forge-bi-mj.jpg" data-src="../assets/img/sample/forge-bi-mj.jpg" data-src-retina="../assets/img/sample/forge-bi-mj@2x.jpg" width="244" height="56" alt="">

                <!--fallback for no javascript browsers-->
                <noscript>
                    <img src="../assets/img/sample/forge-bi-mj.jpg" alt="">
                </noscript>
            </a>
        </div>

        <!--<ul class="nav nav-pages hidden-xs">-->
            <!--<li><a href="#">About</a></li>-->
            <!--<li><a href="#">Contact</a></li>-->
            <!--<li><a href="#">Advertise </a></li>-->
            <!--<li><a href="#">Terms &amp; Conditions</a></li>-->
            <!--<li><a href="#">Privacy</a></li>-->
        <!--</ul>-->

        <ul class="nav nav-icons">
            <li>
                <a href="#" class="btn-icon" data-toggle=".header-navbar-inner" data-toggle-class="search-toggled-in">
                    <span class="search-toggled-out-icon glyphicon glyphicon-search"></span>
                    <span class="search-toggled-in-icon glyphicon glyphicon-remove"></span>
                </a>
            </li>
        </ul>

        <div class="search-wrapper js-stoppropagation">
            <div class="search-wrapper-inner">
                <form>
                    <input type="text" value="" placeholder="검색 ... ">
                    <button class="btn-icon" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                </form>
            </div>
        </div>

        <ul class="nav navbar-nav">
            <li class="nav-all pull-right">

                <?php
                if (1) {
                    ?>

                    <a href="login.php" data-toggle="li">
                        <span class="text">로그인 / 회원가입</span>
                        <span class="toggle glyphicon glyphicon-user"></span>
                    </a>

                <?php
                } else {
                    ?>

                    <a href="profile.html" data-toggle="li">
                        <span class="text">my-email@gmail.com</span>
                        <span class="toggle glyphicon glyphicon-align-justify"></span>
                    </a>

                    <div class="row subnav-wrapper account-hover-nav">
                        <div >
                            <ul class="subnav-full">
                                <li><a href="index.php">내 정보</a></li>
                                <li><a href="index.php">비밀번호 변경</a></li>
                            </ul>
                        </div>
                    </div>

                <?php
                }
                ?>

            </li>
            <li class="active">
                <a href="news.html" data-toggle="li">새소식</a>
            </li>
            <li>
                <a href="boards.html" data-toggle="li">게시판</a>
            </li>
            <li>
                <a href="wiki.html" data-toggle="li">위키</a>
            </li>
        </ul>

    </div>

</nav>
