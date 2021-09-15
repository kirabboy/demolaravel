<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&subset=vietnamese">

    <style>
        /* font family */
        @import url('https://fonts.googleapis.com/css2?family=Playball&display=swap');

        body {
            font-family: 'Open Sans', sans-serif;
            background: #fafbfb;
        }

        a {
            color: var(--scolor);
            text-decoration: none;
            cursor: pointer;
            -webkit-transition: all .25s ease-in-out;
            -moz-transition: all .25s ease-in-out;
            -ms-transition: all .25s ease-in-out;
            -o-transition: all .25s ease-in-out;
            transition: all .25s ease-in-out;
        }

        a:hover,
        a:focus {
            color: var(--scolor);
            text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
        }

        /* color */
        :root {
            --bcolor: #2e2e2e;
            --mcolor: #f01b8f;
            --scolor: #ec5598;
            --ccolor: #e97e3b;
            --vcolor: #fbca4a;
        }

        /* TOP BAR */
        header.header {
            border-bottom: solid 1px var(--mcolor);
            z-index: 30;
            position: relative;
        }

        #header-top {
            background-color: var(--scolor);
            padding: 8px 0;
            min-height: 50px;
            color: rgba(255, 255, 255, 0.8);
        }

        #header-top a {
            color: rgba(255, 255, 255, 0.8)
        }

        #header-top a:hover,
        #header-top a:focus,
        #header-top a:active {
            color: var(--vcolor);
        }

        .social_list a {
            width: 30px;
            height: 30px;
            line-height: 28px;
            display: inline-block;
            text-align: center;
            border-radius: 100%;
            border: solid 1px;
            font-size: 16px;
        }

        /* HEADER MAIN */
        #masthead.fixed-top {
            border-bottom: solid 1px var(--mcolor);
        }

        #masthead .navbar .navbar-collapse {
            -webkit-box-flex: unset;
            -ms-flex-positive: unset;
            -ms-flex-preferred-size: unset;
            flex-basis: unset;
            flex-grow: 1;
        }

        #masthead .navbar-nav {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: .5rem 0;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }

        #masthead .navbar-nav li {
            margin-left: 10px;
        }

        #masthead .navbar-nav>li>a {
            text-transform: uppercase;
            font-weight: 600;
            background: transparent !important;
            position: relative;
            padding: 8px 12px;
            font-size: 14px;
        }

        #masthead ul.navbar-nav>li.active>a,
        #masthead ul.navbar-nav>li>a:hover,
        #masthead ul.navbar-nav>li:hover>a {
            background: var(--scolor) !important;
            color: #fff;
        }

        header.header .navbar-header .navbar-toggler .bar1,
        header.header .navbar-header .navbar-toggler .bar3 {
            width: 28px;
            height: 5px;
            background: #cccfe4;
            margin: 5px 0;
            -webkit-transition: .4s;
            transition: .4s;
        }

        header.header .navbar-header .navbar-brand {
            min-height: auto;
            flex-grow: 1;
            text-align: center;
        }

        .navbar-header {
            width: 27%;
        }

        .navbar>.container,
        .navbar>.container-fluid {
            flex-wrap: nowrap;
            justify-content: normal;
        }

        img.app-logo {
            width: 100%;
        }

        /* DROPDOWN MENU */

        li.dropdown:hover>ul.dropdown-menu {
            position: absolute;
            display: block;
        }

        .dropdown-menu {
            padding: 0;
            margin: 0;
        }

        ul.dropdown-menu li:not(:last-child) {
            border-bottom: solid 1px #f1f1f1;
        }

        #masthead .navbar-nav ul.dropdown-menu li {
            margin-left: 0;
        }

        ul.dropdown-menu li a {
            font-size: 13px;
            text-transform: uppercase;
            display: block;
            padding: 8px 15px;
            clear: both;
            font-weight: 400;
            line-height: 1.42857143;
            color: #333;
            white-space: nowrap;
        }

        ul.dropdown-menu>li:hover>a {
            background: var(--mcolor);
            color: #fff;
        }

        ul.dropdown-menu>li>a.nav-item {
            display: block;
        }

        ul.dropdown-menu>li.dropdown>a::after {
            position: absolute;
            width: 0;
            height: 0;
            top: 35%;
            right: 0.5em;
            content: "";
            border-top: .4em solid transparent;
            border-bottom: .4em solid transparent;
            border-left: .3em solid;
            border-right: 0;
        }

        ul.dropdown-menu>li.dropdown>ul.dropdown-menu {
            border-top: 2px solid var(--scolor);
            left: 100%;
            top: 0;
            border-radius: 0;
        }

        /* MOBILIE SIDEBAR */

        .mobile-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 100%;
            background: rgba(0, 0, 0, .4);
            z-index: 1100;
            opacity: 0;
            -webkit-transition: opacity .25s ease-in-out;
            transition: opacity .25s ease-in-out;
            pointer-events: none;
        }

        .mobile-navbar {
            position: fixed;
            width: 15rem;
            height: 100vh;
            top: 0;
            background: #fff;
            padding: 0;
            z-index: 1200;
            -webkit-transform: translateX(-23rem);
            transform: translateX(-23rem);
        }

        .mobile-navbar-header {
            position: relative;
        }

        .mobile-navbar__close {
            position: absolute;
            right: 0;
            top: 0;
            width: 35px;
            height: 35px;
            text-align: center;
            line-height: 35px;
            border-left: solid 1px #f0f0f0;
            font-size: 20px;
            cursor: pointer;
        }

        .mobile-navbar .menu_title {
            padding: 0 15px;
            line-height: 35px;
            text-transform: capitalize;
            font-weight: bold;
            font-size: 16px;
            border-bottom: solid 1px #f0f0f0;
        }

        .mobile-navbar__close .bar1,
        .mobile-navbar__close .bar3 {
            width: 28px;
            height: 5px;
            background: #cccfe4;
            margin: 5px 0;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .mobile-navbar__close .bar1 {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            margin-bottom: -1.3rem;
        }

        .mobile-navbar__close .bar3 {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            margin-top: 1rem;
        }

        .mobile-navbar__nav {
            font-weight: 600;
            padding: 0;
        }

        .mobile-navbar__nav li {
            list-style: none;
            position: relative;
        }

        .mobile-navbar__nav li a {
            border-bottom: 1px dashed #f0f0f0;
            color: #16162e;
            padding: 8px 36px 8px 10px;
            position: relative;
            text-transform: uppercase;
            display: block;
        }

        .sidebar-open .mobile-backdrop {
            opacity: 1;
        }

        .sidebar-open .mobile-navbar {
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }

        /* DROPDOWN MENU */

        li.dropdown:hover>ul.dropdown-menu {
            position: absolute;
            display: block;
        }

        .dropdown-menu {
            padding: 0;
            margin: 0;
        }

        ul.dropdown-menu li:not(:last-child) {
            border-bottom: solid 1px #f1f1f1;
        }

        #masthead .navbar-nav ul.dropdown-menu li {
            margin-left: 0;
        }

        ul.dropdown-menu li a {
            font-size: 13px;
            text-transform: uppercase;
            display: block;
            padding: 8px 15px;
            clear: both;
            font-weight: 400;
            line-height: 1.42857143;
            color: #333;
            white-space: nowrap;
        }

        ul.dropdown-menu>li:hover>a {
            background: var(--mcolor);
            color: #fff;
        }

        ul.dropdown-menu>li>a.nav-item {
            display: block;
        }

        ul.dropdown-menu>li.dropdown>a::after {
            position: absolute;
            width: 0;
            height: 0;
            top: 35%;
            right: 0.5em;
            content: "";
            border-top: .4em solid transparent;
            border-bottom: .4em solid transparent;
            border-left: .3em solid;
            border-right: 0;
        }

        ul.dropdown-menu>li.dropdown>ul.dropdown-menu {
            border-top: 2px solid var(--scolor);
            left: 100%;
            top: 0;
            border-radius: 0;
        }



        /* CỬA HÀNG */
        .tborder {
            font-family: 'Playball', cursive;
            text-align: left;
            padding: 5px 0;
            color: var(--scolor);
            font-size: 24px;
            margin: 0;
        }

        .tborder:after {
            content: "";
            display: block;
            height: 2px;
            width: 50px;
            margin: 5px 0;
            background-color: var(--scolor);
        }

        .shop-container .products.row .col {
            margin-bottom: 15px;
        }

        .products.row .product-box {
            padding-bottom: 40px;
        }

        .product-box {
            background-color: #fff;
            border: solid 10px #fff;
            z-index: 1;
            -webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 10%);
            -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, .10);
            -o-box-shadow: 0 1px 1px rgba(0, 0, 0, .10);
            -ms-box-shadow: 0 1px 1px rgba(0, 0, 0, .10);
            box-shadow: 0 1px 1px rgb(0 0 0 / 10%);
            overflow: hidden;
            border-radius: 3px;
            height: 100%;
        }

        .box-image {
            position: relative;
            height: auto;
            margin: 0 auto;
            overflow: hidden;
        }

        .image-cover {
            position: relative;
            height: auto;
            overflow: hidden;
            padding-top: 100%;
            background-position: 50% 50%;
            background-size: cover;
        }

        .image-cover img {
            right: 0;
            width: 100%;
            height: 100%;
            bottom: 0;
            left: 0;
            top: 0;
            position: absolute;
            object-position: 50% 50%;
            object-fit: cover;
            font-family: 'object-fit: cover;';
        }

        .box-text {
            padding-top: .7em;
            padding-bottom: .7em;
        }

        .box-text h1,
        .box-text h2,
        .box-text h3,
        .box-text h4,
        .box-text h5,
        .box-text h6,
        .box-text a:not(.button) {
            line-height: 1.3;
            margin-top: .1em;
            margin-bottom: .1em;
        }

        .product-box .product-title {
            font-weight: 600;
            font-size: 15px;
            color: #333;
            text-transform: capitalize;
            line-height: 1.4;
            text-align: center;
        }

        .product-box .product-title:hover {
            color: var(--mcolor);
        }

        .box-text p {
            margin-top: .1em;
            margin-bottom: .1em;
        }

        .product-box .price-wrapper,
        .product-box .product-add {
            text-align: center;
        }

        .product-box .box-text .price-wrapper .price span.amount {
            font-weight: 600;
            font-size: 18px;
            color: var(--scolor);
        }

        .product-box .product-add {
            position: absolute;
            width: 100%;
            bottom: 5px;
            left: 0;
        }

        .btn-add-cart {
            font-weight: normal;
            background-color: var(--scolor);
            color: #fff;
            border-radius: 10px 0;
            text-transform: uppercase;
            font-size: 14px;
            padding: 8px 15px;
            margin-top: 5px;
            display: inline-block;
        }

        .btn-add-cart:hover,
        .btn-add-cart:focus {
            border: 1px solid var(--scolor);
            background-color: #fff;
        }

        /* Chuyển trang sản phẩm 1,2,3...,7 */

        .pagination {
            margin: 20px 0;
            justify-content: center;
        }

        .nav_pager .pagination>li {
            display: inline-block;
            margin: 0 5px !important;
            border: none !Important;
        }

        .nav_pager .pagination>li a,
        .nav_pager .pagination>li span {
            border: none !important;
            border-radius: 100%;
            border: none;
            background-color: #f3f3f3;
            color: #272727;
            width: 30px;
            height: 30px;
            padding: 0;
            line-height: 30px;
            text-align: center;
            display: block;
        }

        .nav_pager .pagination>li a:hover,
        .nav_pager .pagination>li.active span {
            background-color: #f01b8f !important;
            color: #fff !important;
        }


        /* giao diện Mobile */
        @media (max-width: 767px) {
            .product-add a.btn-add-cart {
                font-size: 11px;
            }

            .shop-container .product-box .product-title {
                font-size: 13px;
            }

            #header-top {
                display: none;
            }
        }

        @media (min-width: 992px) {
            #masthead .navbar .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            header.header .navbar-header .navbar-toggler {
                display: none;
            }
        }

        @media (max-width: 992px) {
            header.header .navbar-header {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: reverse;
                -ms-flex-direction: row-reverse;
                flex-direction: row-reverse;
                width: 100%;
                padding: 0 1em;
            }

            img.app-logo {
                width: 60%;
            }
        }
    </style>
</head>

<body>
    <div class="mobile-backdrop"> </div>
    <header class="header">
        <div class="header-wrapper">
            <!-- Top -->
            <div id="header-top" class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header-contact d-flex align-items-center justify-content-end">
                                <div class="mr-2 info-contact">
                                    <a href="#" class="mr-2">
                                        <span><i class="fas fa-envelope"></i> info@mevivu.com</span>
                                    </a>
                                    <a href="#" class="">
                                        <span><i class="fas fa-phone"></i> 0902315376</span>
                                    </a>
                                </div>
                                <div class="social_list">
                                    <a href="#" class="mr-2">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="mr-2">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- END TOP HEADER -->

            <!-- main -->
            <div id="masthead" class="header-main">
                <div class="header-inner">
                    <nav class="navbar navbar-expanded-lg p-0 bg-white">
                        <div class="container">
                            <div class="navbar-header">
                                <a href="#" class="navbar-brand">
                                    <img src="https://mevivu.com/wp-content/uploads/2016/11/logomevivumoi.png" alt="Logo" class="app-logo">
                                </a>
                                <button type="button" class="navbar-toggler collapsed">
                                    <div class="bar1">
                                    </div>
                                    <div class="bar3">
                                    </div>
                                </button>
                            </div>
                            <div id="navbar-toggle" class="navbar-collapse collapse">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a href="/">Trang chủ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./gioi-thieu">Giới thiệu</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="./san-pham" class="dropdown-toggle">Sản phẩm</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="nav-item" href="#">Sebia</a></li>
                                            <li class="dropdown">
                                                <a class="nav-item" href="#">Vũ Đức</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="nav-item" href="#">Mỹ phẩm</a></li>
                                                    <li><a class="nav-item" href="#">Đông Dược</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="nav-item" href="#">Mỹ phẩm</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="nav-item" href="#">Sữa rửa mặt</a></li>
                                                    <li><a class="nav-item" href="#">Kem dưỡng</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="nav-item" href="#">POSM</a>
                                            </li>
                                            <li>
                                                <a class="nav-item" href="#">Ngành hàng gia dụng</a>
                                            </li>
                                            <li><a class="nav-item" href="#">Khác</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./blog">Tin tức - sự kiện</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./blog">Thư viện</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./lien-he">Liên hệ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div><!-- END HEADER MAIN -->
        </div>
    </header>

    <!-- mobile sidebar -->
    <div class="mobile-navbar">
        <div class="mobile-navbar-header">
            <div class="menu_title">NAO</div>
            <div class="mobile-navbar__close"><i class="fa fa-times"></i></div>
        </div>
        <ul class="mobile-navbar__nav">
            <li class="nav-item active">
                <a href="./home.html" class="nav-item">Trang chủ</a>
            </li>
            <li class="nav-item">
                <a href="./gioi-thieu.html" class="nav-item">Giới thiệu</a>
            </li>
            <li class="nav-item has-child">
                <button class="btn btn-dropdown" type="button" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="false" aria-controls="collapseProduct">
                    <i class="fas fa-chevron-down"></i>
                </button>
                <a href="./san-pham.html" class="nav-item">Sản phẩm</a>
                <ul id="collapseProduct" class="collapse">
                    <li><a class="nav-item" href="#">Sebia</a></li>
                    <li class="has-child">
                        <button class="btn btn-dropdown" type="button" data-toggle="collapse" data-target="#collapseVuDuc" aria-expanded="false" aria-controls="collapseVuDuc">
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <a class="nav-item" href="#">Vũ Đức</a>
                        <ul class="collapse" id="collapseVuDuc">
                            <li><a class="nav-item" href="#">Mỹ phẩm</a></li>
                            <li><a class="nav-item" href="#">Đông Dược</a></li>
                        </ul>
                    </li>
                    <li class="has-child">
                        <button class="btn btn-dropdown" type="button" data-toggle="collapse" data-target="#collapseCosmetic" aria-expanded="false" aria-controls="collapseCosmetic">
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <a class="nav-item" href="#">Mỹ phẩm</a>
                        <ul class="collapse" id="collapseCosmetic">
                            <li><a class="nav-item" href="#">Sữa rửa mặt</a></li>
                            <li><a class="nav-item" href="#">Kem dưỡng</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-item" href="#">POSM</a>
                    </li>
                    <li>
                        <a class="nav-item" href="#">Ngành hàng gia dụng</a>
                    </li>
                    <li><a class="nav-item" href="#">Khác</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="./blog.html" class="nav-item">Tin tức - sự kiện</a>
            </li>
            <li class="nav-item">
                <a href="./blog.html" class="nav-item">Thư viện</a>
            </li>
            <li class="nav-item">
                <a href="./lien-he.html" class="nav-item">Liên hệ</a>
            </li>
        </ul>
    </div>
    <div id="main">