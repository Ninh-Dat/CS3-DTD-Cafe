<style>
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

</style>

<div id="header">
    <div class="header__main">
        <div class="header__brand">
            <img class="header__brand--img"
                 src="https://bizweb.dktcdn.net/100/159/843/themes/211392/assets/logo-main.png?1638342170883" alt="">
        </div>
        <div class="header__menu">
            <ul class="header__menu--list">
                <li class="header__menu--item"><a href="{{route('homeDisplay')}}">Trang chủ</a></li>
                <li class="header__menu--item"><a href="">Giới thiệu</a></li>
                <li class="header__menu--item"><a href="">Tin tức</a></li>
                <li class="header__menu--item"><a href="">Cửa hàng</a></li>
                <li class="header__menu--item"><a href="">Liên hệ</a></li>
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

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>
