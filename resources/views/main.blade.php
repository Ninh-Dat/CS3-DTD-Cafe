
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Trang chủ</title>
    <style>

        /* Reset Css */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #FFFFFF;
        }

        /* VARIABLE */
        :root {
            --home__header-height: 86px;
        }

        /* --------------------------------------------------------------------
        LAYOUT
        -------------------------------------------------------------------- */
        #header {
            background-color: rgba(54, 46, 41, 1);
            width: 100%;
            height: var(--home__header-height);
            position: fixed;
            z-index: 1000;
            opacity: 0.7;
            font-family: KoHo;
        }

        .header__main {
            width: 1124px;
            height: var(--home__header-height);
            display: flex;
            flex-direction: row;
            margin: auto;
            justify-content: space-between;
        }

        .header__brand {
            width: 220px;
            height: var(--home__header-height);
            /* background-color: yellow; */
            display: flex;
        }

        .header__menu {
            /* background-color: wheat; */
            height: var(--home__header-height);
        }

        .header__cart {
            /* background-color: green; */
            height: var(--home__header-height);
            display: flex;
        }

        #slider {
            width: 100%;
            height: 751px;
            /* background-color:red; */
        }

        #body-content {
            /* background-color: red; */
            display: flex;
            flex-direction: column;
            width: 1124px;
            margin: 0 auto;
        }

        .body__brand {
            /* background-color: wheat; */
            display: flex;
            flex-direction: column;
            margin-top: 60px;
            width: 100%;
            text-align: center;
        }

        .body__categories {
            margin-top: 40px;
        }

        .body__contact {
            background-color: #50aecc;
            color: white;
            margin-top: 30px;
            position: relative;
            height: 200px;
            z-index: 1;
        }

        .body__slogan {
            margin-top: 30px;
            background-image: url(https://bizweb.dktcdn.net/100/159/843/themes/211392/assets/coffee-beans.jpg?1612585564257);
            color: white;
            position: relative;
            z-index: 1;
        }

        .body__products {
            display: flex;
            flex-direction: column;
            margin-top: 30px;
        }

        .products--list {
            margin: auto;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
        }

        #footer {
            background-color: #F6F6F6;
            margin-top: 20px;
            text-align: center;
        }

        /* --------------------------------------------------------------------
        HEADER
        -------------------------------------------------------------------- */

        /* image */
        .header__brand--img {
            width: 105px;
            height: 40px;
            margin: auto;
        }

        /* menu */
        .header__menu--list {
            display: flex;
            flex-direction: row;
            min-width: 500px;
            list-style-type: none;
            /* justify-content: space-around; */
        }

        .header__menu--item {
            cursor: pointer;
            padding: 0 15px;
        }

        .header__menu--item a {
            text-decoration: none;
            color: white;
            line-height: var(--home__header-height);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 20px;
        }

        .header__menu--item:hover {
            background-color: #454647;
        }

        .header__menu--item:hover a {
            color: #dc8068;
        }

        /* cart */
        .header__cart--item {
            margin: auto;
            padding: 0 25px;
            color: white;
            cursor: pointer;
            font-size: 35px;
        }


        /* --------------------------------------------------------------------
        SLIDER
        -------------------------------------------------------------------- */
        #slider img {
            width: 100%;
            height: 100%;
        }



        /* --------------------------------------------------------------------
        BODY
        -------------------------------------------------------------------- */
        /* body brand */
        .body__brand--logo {
            background-color: #DC8068;
            width: 75px;
            height: 75px;
            margin: auto auto 20px;
        }

        .body__brand--description {
            font-family: Bubblegum Sans;
            margin: auto;
            font-size: 35px;
            color: rgba(102, 77, 66, 0.7);
            position: relative;
            width: 700px;
        }

        .body__brand--description::before {
            content: "---------";
            position: absolute;
            top: 0px;
            left: 42px;
        }

        .body__brand--description::after {
            content: "---------";
            position: absolute;
            top: 0px;
            left: 481px;
        }

        /* body categories */
        .body__categories--list {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            /* background-color:red; */
            list-style-type: none;
        }

        .body__category--item {
            background-color: #d2d86f;
            text-align: center;
        }

        .body__category--item:first-child {
            background-color: #68d0af;
        }

        .body__category--item:last-child {
            background-color: #83bed7;
        }

        .category--image {
            margin: 30px auto 40px;
            height: 250px;
            padding: 0 30px;
        }

        .category--title {
            font-size: 43px;
            text-transform: uppercase;
            font-family: KoHo;
        }

        .category--description {
            font-size: 20px;
            margin: 10px auto;
            font-family: KoHo;
        }

        .button--category {
            padding: 10px 30px;
            font-size: 20px;
            border-radius: 10px;
            font-family: KoHo;
            font-weight: 500;
            margin: 20px auto;
        }

        /* body contact */
        .body__contact--img {
            position: absolute;
            width: 420px;
            top: 0px;
            right: 0px;
            padding: 30px;
        }

        .body__contact .category--description,
        .body__contact .category--title {
            padding: 10px;
        }

        .fa-phone {
            padding: 15px;
            border-radius: 100%;
            border: 1px dashed red;
            cursor: pointer;
        }

        .fa-phone:hover {
            color: red;
        }

        /* body slogan */
        .body__slogan--image1 {
            position: absolute;
            width: 150px;
            left: 90px;
            z-index: 3;
        }

        .body__slogan--image2 {
            position: absolute;
            top: 158px;
            width: 250px;
            z-index: 2;
        }

        .body__slogan--content {
            float: right;
            width: 40%;
            margin: 30px;
            text-align: right;
        }

        .body__slogan--content .category--title {
            font-size: 30px;
            padding-bottom: 10px;
        }

        .body__slogan--content .category--description {
            font-size: 16px;
            padding-bottom: 18px;
        }

        .body__slogan--content .button--category {
            background-color: rgba(255, 0, 0, 0);
            color: white;
            border: 1px solid white;
            cursor: pointer;
        }

        .body__slogan--content .button--category:hover {
            background-color: rgba(128, 128, 128, 0.549);
        }

        /* body products */
        .body__products .body__brand--description {
            font-family: KoHo;
        }

        .produtct--item {
            background-color: #F7F7F7;
            font-family: KoHo;
            margin-bottom: 15px;
        }

        .produtct--item>* {
            margin-bottom: 15px;
        }

        .product__item--name {
            font-size: 20px;
            font-weight: 500;
        }

        .product__item--readmore {
            padding: 10px;
            border-radius: 10px;
            border: 1px solid gray;
            cursor: pointer;
            font-family: KoHo;
            font-weight: 500;
            margin-bottom: 15px;
        }

        /* FOOTER */
        .footer__slogan{
            padding: 15px;
        }

    </style>
</head>
<body>

<!-- //NOTE: HEADER -->
<div id="header">
    <div class="header__main">
        <div class="header__brand">
            <img class="header__brand--img"
                 src="https://bizweb.dktcdn.net/100/159/843/themes/211392/assets/logo-main.png?1638342170883" alt="">
        </div>
        <div class="header__menu">
            <ul class="header__menu--list">
                <li class="header__menu--item"><a href="">Trang chủ</a></li>
                <li class="header__menu--item"><a href="">Giới thiệu</a></li>
                <li class="header__menu--item"><a href="{{route("homeDisplay")}}">Sản phẩm</a></li>
                <li class="header__menu--item"><a href="">Cửa hàng</a></li>
                <li class="header__menu--item"><a href="">{{\Illuminate\Support\Facades\Auth::user()->name??""}}</a></li>
            </ul>
        </div>
        <div class="header__cart">
            <a class="header__cart--item" href=""><i class="fas fa-shopping-cart"></i></a>
        </div>
    </div>
</div>

<div id="slider">
    <img src="https://bizweb.dktcdn.net/100/159/843/themes/211392/assets/slider-02.jpg?1638342170883" alt="">
</div>



@yield("content")


</body>






<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>
