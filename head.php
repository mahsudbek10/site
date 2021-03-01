<?php
if(session_status() != PHP_SESSION_ACTIVE) session_start ();
if(isset($_GET['lan'])){
    if($_GET['lan']=="ru"){
        $_SESSION['lan']="ru";
        include './ru.php';
    } else if($_GET['lan']=="kz"){
        $_SESSION['lan']="kz";
        include './kaz.php';
    } else if($_GET['lan']=="en"){
        $_SESSION['lan']="en";
        include './en.php';
    } else {
        header("Location: index");
    } 
} else {
    if(!isset($_SESSION['lan']))$_SESSION['lan'] = "kz";
    
    if(isset($_SESSION['lan'])){
        if($_SESSION['lan']=="kz") include './kaz.php';
        if($_SESSION['lan']=="ru") include './ru.php';
        if($_SESSION['lan']=="en") include './en.php';
    }
}
    
?>

<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	
<html> <!--<![endif]-->
    <head>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="">
        <meta name="author" content="">

        <title>12 М.Горький</title>

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
        <link rel="shortcut icon" href="/favicon.ico">

        <!-- Google Webfont -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,300italic,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        <!-- CSS -->
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/vendors/isotope/isotope.css">
        <link rel="stylesheet" href="js/vendors/slick/slick.css">
        <link rel="stylesheet" href="js/vendors/rs-plugin/css/settings.css">
        <link rel="stylesheet" href="js/vendors/select/jquery.selectBoxIt.css">
        <link rel="stylesheet" href="css/subscribe-better.css">
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-lightness/jquery-ui.css">     
        <link rel="stylesheet" href="plugin/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="plugin/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->

    </head>
    <body>

        <!-- PRELOADER -->
        <div id="loader"></div>

        <div class="body">
            <!-- TOPBAR -->
            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="tb_left pull-left">
                                    <p><?= $lan['welcome'] ?></p>
                                </div>
                                <div class="tb_center pull-left">
                                    <ul>
                                        <li><i class="fa fa-phone"></i> Тел: <a href="#">(8 7252) 571 907</a></li>
                                        <li><i class="fa fa-envelope-o"></i> <a href="#">m.gorkogo-12@mail.ru</a></li>
                                    </ul>
                                </div>
                                <div class="tb_right pull-right">
                                    <ul>
<!--                                        <li>
                                            <div class="tbr-info">
                                                <span>Account <i class="fa fa-caret-down"></i></span>
                                                <div class="tbr-inner">
                                                    <a href="my-account.html">My Account</a>
                                                    <a href="#">My Wishlist</a>
                                                    <a href="#">Checkout</a>
                                                    <a href="login-page.html">Login</a>
                                                </div>
                                            </div>
                                        </li>-->
                                        <li>
                                            <div class="tbr-info">
                                                <?php
                                                $url = explode("?", $_SERVER["REQUEST_URI"]);
//                                                echo $url[0];
                                                if(!isset($_GET['lan'])) : ?>
                                                <span><img src="images/basic/KZ.png" alt=""/>&nbsp;KZ <i class="fa fa-caret-down"></i></span>
                                                <div class="tbr-inner">
                                                    <a href="<?= $url[0]."?lan=en" ?>"><img src="images/basic/flag1.png" alt=""/>EN</a>
                                                    <a href="<?= $url[0]."?lan=ru" ?>"><img src="images/basic/RU.png" alt=""/>RU</a>
                                                </div>
                                                <?php elseif($_GET['lan']=="ru") : ?>
                                                <span><img src="images/basic/RU.png" alt=""/>&nbsp;RU <i class="fa fa-caret-down"></i></span>
                                                <div class="tbr-inner">
                                                    <a href="<?= $url[0]."?lan=kz" ?>"><img src="images/basic/KZ.png" alt=""/>KZ</a>
                                                    <a href="<?= $url[0]."?lan=en" ?>"><img src="images/basic/flag1.png" alt=""/>EN</a>
                                                </div>
                                                <?php elseif($_GET['lan']=="kz"): ?>
                                                <span><img src="images/basic/KZ.png" alt=""/>&nbsp;KZ <i class="fa fa-caret-down"></i></span>
                                                <div class="tbr-inner">
                                                    <a href="<?= $url[0]."?lan=ru" ?>"><img src="images/basic/RU.png" alt=""/>RU</a>
                                                    <a href="<?= $url[0]."?lan=en" ?>"><img src="images/basic/flag1.png" alt=""/>EN</a>
                                                </div>
                                                <?php elseif($_GET['lan']=="en"): ?>
                                                <span><img src="images/basic/flag1.png" alt=""/>&nbsp;EN<i class="fa fa-caret-down"></i></span>
                                                <div class="tbr-inner">
                                                    <a href="<?= $url[0]."?lan=kz" ?>"><img src="images/basic/KZ.png" alt=""/>KZ</a>
                                                    <a href="<?= $url[0]."?lan=ru" ?>"><img src="images/basic/RU.png" alt=""/>RU</a>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- HEADER -->
            <header >
                <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="row">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Logo -->
                                <!-- <a class="navbar-brand" href="./index.html"><img src="images/basic/logo.png" class="img-responsive" alt=""/></a> -->
                            </div>
                            <!-- Navmenu -->

                            <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1" >
                                <ul class="nav navbar-nav" >
                                    <li >
                                        <a href="./index" class="dropdown-toggle"><?= $lan['main'] ?></a>
<!--                                        <ul class="dropdown-menu submenu" role="menu">
                                            <li><a href="./index.html">История университета</a>
                                            <li><a href="./index2.html">Миссия и стратегия</a>
                                            <li><a href="./index3.html">Государственная лицензия</a>
                                            <li><a href="./index4.html">Внутренные нормативные документы</a>
                                            <li><a href="./index5.html">Кодекс корпоративной этики - <br> правила внутренного распорядка МУС</a>
                                            <li><a href="./index5.html">Система менеджмента качества</a>
                                            <li><a href="./index5.html">Аккредитация</a>
                                            <li><a href="./index5.html">Фотогалерея</a>
                                        </ul>-->
                                    </li>
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?= $lan['about_school'] ?></a>
                                        <ul class="dropdown-menu submenu" role="menu">
                                            <li><a href="./rewievs"><?= $lan['history_school'] ?></a></li>
                                            <li><a href="./"><?= $lan['doc'] ?></a></li>
                                            <li><a href="./"><?= $lan['sertificat'] ?></a></li>
                                            <li><a href="./administration"><?= $lan['administration'] ?></a></li>
                                            <li><a href="./teachers"><?= $lan['teachers'] ?></a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown" >
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?= $lan['books'] ?></a>
                                        <ul class="dropdown-menu submenu" role="menu">
                                            <li><a href="https://eduastana.epolice.kz/test/index"><?= $lan['online_test'] ?></a></li>
                                            <li><a href="./elibrary"><?= $lan['ebook'] ?></a></li>
                                        </ul>
                                    </li>
                                    <li style="margin-top: -15px">
                                        <a class="navbar-brand text-center" href="./index"><h6><b><?= $lan['name_school'] ?></b></h6></a>
										<!-- <img src="images/en.png" class="img-responsive" style="max-height: 80px;min-height: 50px;" alt=""/>-->
                                    </li>
                                    <li class="dropdown" >
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?= $lan['schedule'] ?></a>
                                        <ul class="dropdown-menu submenu" role="menu">
                                            <li><a href="./schedule1"><?= $lan['schedule1'] ?></a>
                                            <li><a href="./schedule2"><?= $lan['schedule2'] ?></a>
                                            <li><a href="./schedule3"><?= $lan['schedule3'] ?></a>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?= $lan['galery'] ?></a>
                                        <ul class="dropdown-menu submenu" role="menu">
                                            <li><a href="#"><?= $lan['galery_foto'] ?></a>
                                            <li><a href="#"><?= $lan['galery_video'] ?></a>
                                            <li><a href="#">3D</a>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="./structure" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?= $lan['structure'] ?></a>
                                        <ul class="dropdown-menu submenu" role="menu">                                         
<!--                                            <li><a href="structure.php">Ознакомиться</a></li>-->
                                        </ul>
                                    </li>
                                    <li style="margin-top: 18px;">
                                        <div class="topsearch">
                                            <span>
                                                <i class="fa fa-search"></i>
                                            </span>
                                            <form class="searchtop">
                                                <input type="text" placeholder="Search entire store here.">
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
