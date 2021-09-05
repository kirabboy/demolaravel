<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@300;400;500;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Audiowide&display=swap');

        body {
            background-color: #140034;
            background-image: url("{{asset('images/bg2.png')}}");
            background-size: 100%;
        }

        .ngancach {
            height: 110px;
        }

        /* Navbar */
        .myNav {
            background-color: #140034;
        }

        .myNav .canchinh {
            width: 100%;
            display: flex;
            justify-content: space-around;
        }

        .myNav .itemnav a,
        button {
            font-family: 'Bai Jamjuree', sans-serif;
            font-weight: 700;
            font-size: 18px;
            color: #fff;
        }

        .myNav .itemnav {
            padding: 10px 0px;
        }

        .myNav .itemnav .nav-link {
            padding: 10px 0px;
        }

        .myNav .itemnav a.active,
        .myNav .itemnav a:hover {
            color: #A00CF8;
        }

        .myNav .itemnav button {
            padding: 10px 30px;
            background-image: linear-gradient(0deg, #FF54FF 0%, #9C00BF 49.26%, #5A00A9 100%);
            border: none;
            outline: none;
            cursor: pointer;
            border-radius: 12px;
        }

        .myNav .btncollapse {
            outline: none;
        }

        .myNav .btncollapse i {
            border-radius: 3px;
            padding: 5px;
            color: #fff;
            background: linear-gradient(0deg, #FF54FF 0%, #9C00BF 49.26%, #5A00A9 100%);
        }

        .myNav .anhien {
            display: none;
        }

        @media only screen and (max-width: 980px) {
            .myNav .anhien {
                all: revert;
            }

            .hometitle .homelogo {
                width: 250px !important;
            }

            .homeinput .itemhomeinput input {
                font-size: 30px !important;
                height: 80px !important;
                width: 70% !important;
            }

            .myFormdashboard {
                padding: 35px 20px 20px 20px !important;
            }

            .myFormdashboard input {
                padding: 20px 30px !important;
            }

            .ngancach {
                height: 70px !important;
            }

            .toongtrai {
                width: 50% !important;
            }

            .toongphai {
                width: 60% !important;
            }

            .groupitem .item {
                width: 33% !important;
            }

            .groupitem {
                padding: 50px 50px !important;
            }

            .content .gioithieu {
                padding: 0 !important;
            }

            .nhansu {
                flex-wrap: wrap;
            }

            .nhansu2 {
                flex-wrap: wrap;
            }

            .nhansu .item {
                width: 45% !important;
                margin: 0px 0px 80px 0px !important;
            }

            .backer img {
                width: 45% !important;
            }
        }

        @media only screen and (max-width: 700px) {
            .fNtTitle .subtitle {
                font-size: 14px !important;
                text-align: justify;
            }

            .groupitem .item {
                width: 100% !important;
                text-align: center;
                margin-bottom: 40px !important;
            }

            .groupitem {
                padding: 40px 0px 10px 0px !important;
            }

            .nhansu .item {
                width: 100% !important;
            }

            .advisor .item {
                padding: 50px 0px !important;
            }

            
        }

        /* Navbar end */

        /* Tổ ong */
        .toongtrai {
            position: fixed;
            width: 26%;
            left: 0;
            top: 76%;
            z-index: -2;
        }

        .toongphai {
            position: fixed;
            width: 32%;
            right: 0px;
            top: 0;
            z-index: -1;
        }

        /* Tổ ong end */

        /* Main home */
        p.maintitle {
            font-family: 'Audiowide', cursive;
            color: #fff;
            font-size: 37px;
            font-weight: bold;
        }

        .homeinput .itemhomeinput p {
            font-size: 24px;
            font-family: 'Bai Jamjuree', sans-serif;
            font-weight: 300;
            color: #E3C2FF;
            margin-bottom: 25px;
        }

        .homeinput .itemhomeinput input {
            font-family: 'Bai Jamjuree', sans-serif;
            font-weight: 700;
            font-size: 40px;
            width: 100%;
            height: 108px;
            color: #fff;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid #C835F8;
            border-radius: 12px;
            outline: none;
        }

        .homeinput .row {
            margin-bottom: 70px;
        }

        .iconfooter a img {
            width: 50px;
        }

        .hometitle .homelogo {
            width: 300px;
            margin-bottom: 20px;
        }

        /* Main home end */

        /* Dashboard */
        .myFormdashboard {
            background: #14032D;
            border-radius: 12px;
            font-family: 'Bai Jamjuree', sans-serif;
            padding: 35px 100px 20px 100px;
        }

        .myFormdashboard .row {
            margin-bottom: 50px;
        }

        .myFormdashboard button {
            background: linear-gradient(0deg, #FF54FF 0%, #9C00BF 49.26%, #5A00A9 100%);
            border-radius: 12px;
            width: 100%;
            height: 63px;
            border: none;
            outline: none;
        }

        .myFormdashboard p {
            color: #fff;
            font-weight: 700;
            font-size: 18px;
            padding-bottom: 40px;
            margin: 0px;
        }

        .myFormdashboard input {
            width: 100%;
            height: 63px;
            padding: 20px 40px;
            border-radius: 12px;
            border: 1px solid #AEAEAE;
            font-size: 18px;
            color: #AEAEAE;
            background: none;
            outline: none;
        }

        .myFormdashboard input:hover,
        .myFormdashboard input:focus {
            border-color: #FF54FF;
        }

        /* Dashboard end */

        /* Functions and token */
        .fNtTitle .subtitle {
            font-family: Bai Jamjuree;
            font-size: 18px;
            color: #FFFFFF;
            padding: 0px 20px;
        }

        .groupitem {
            padding: 65px 0px 90px 80px;
            display: flex;
            flex-wrap: wrap;
            background: #14032D;
            border-radius: 12px;
        }

        .groupitem .item p {
            margin: 0px;
        }

        .groupitem .item {
            width: 25%;
            margin-bottom: 30px;
        }

        .groupitem .item .mautim {
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            color: #C835F8;
            font-family: 'Audiowide', cursive;
        }

        .groupitem .item .mautrang {
            font-family: Bai Jamjuree;
            font-weight: normal;
            font-size: 20px;
            color: #FFFFFF;
        }

        /* Functions and token end */

        /* about us */
        .maintitleaboutus {
            display: flex;
            justify-content: center;
        }

        .maintitleaboutus p {
            font-family: 'Audiowide', cursive;
            color: #fff;
            font-size: 32px;
            padding: 0px 20px;
            font-weight: bold;
        }

        .maintitleaboutus div {
            margin-top: 24px;
            width: 92px;
            height: 0px;
            border-bottom: 4px solid #A00CF8;
            border-radius: 12px;
        }

        .content p {
            color: #FFFFFF;
            padding: 0px;
            margin: 0px;
        }

        .content .ten {
            font-family: 'Audiowide', cursive;
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .content .vitri {
            font-family: Bai Jamjuree;
            font-weight: 500;
            font-size: 18px;
        }

        .content .gioithieu {
            padding: 8px 30px 0px 30px;
            font-family: Bai Jamjuree;
            font-weight: 300;
            font-size: 14px;
        }

        .nhansu {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .nhansu .item {
            width: 30%;
            margin-bottom: 70px;
        }

        .nhansu .item.itemtrai {
            margin-left: 170px;
        }

        .nhansu .item.itemphai {
            margin-right: 170px;
        }

        .backer {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .backer img {
            width: 180px;
            margin-bottom: 30px;
        }

        .advisor {
            display: flex;
            justify-content: center;
        }

        .advisor .item {
            color: #fff;
            width: 410px;
            padding: 80px 55px;
            background: #14032D;
            border: 1px solid #C835F8;
            box-sizing: border-box;
            border-radius: 30px;
        }

        .advisor .item img {
            margin-bottom: 40px;
        }

        .advisor .item .ten {
            font-family: 'Audiowide', cursive;
            font-size: 24px;
            text-transform: uppercase;
            margin: 0px;
        }

        .advisor .item .gioithieu {
            font-family: Bai Jamjuree;
            font-style: normal;
            font-weight: bold;
            font-size: 18px;
            margin: 0px;
        }

        /* about us end */
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg myNav fixed-top">
        <a class="navbar-brand anhien" href="{{url('/')}}"><img src="{{asset('images/logo1.png')}}" width="140px" alt="logo"></a>
        <button class="navbar-toggler btncollapse" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-grip-lines"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav canchinh">
                <div class="itemnav">
                    <a class="nav-link @if(\Request::is('/') ) active  @endif" href="{{url('/')}}">Home</a>
                </div>
                <div class="itemnav">
                    <a class="nav-link @if(\Request::is('dashboard*') ) active  @endif" href="{{url('/dashboard')}}">Dashboard</a>
                </div>
                <div class="itemnav">
                    <a class="nav-link @if(\Request::is('funcNtoken*') ) active  @endif" href="{{url('/funcNtoken')}}">Functions and tokenomics</a>
                </div>
                <div class="itemnav">
                    <a class="nav-link @if(\Request::is('aboutus*') ) active  @endif" href="{{url('/aboutus')}}">About Us</a>
                </div>
                <div class="itemnav">
                    <a class="nav-link">Community</a>
                </div>
                <div class="itemnav">
                    <button>Connect Wallet</button>
                </div>
            </div>
        </div>
    </nav>

    <img class="toongtrai" src="{{asset('images/trai.png')}}" alt="trai">
    <img class="toongphai" src="{{asset('images/phai.png')}}" alt="phai">
    <div class="ngancach"></div>
    <div id="main">