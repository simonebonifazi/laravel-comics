<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" href="/favicon.ico">
    <title>vue-dc-comics</title>
    <script defer="" src="/js/chunk-vendors.js"></script>
    <script defer="" src="/js/app.js"></script>
    <style type="text/css">
    header[data-v-898691ee] {
        background-color: #fff;
        margin-top: 15px;
    }

    header .container[data-v-898691ee] {
        justify-content: space-between;
        align-items: center;
    }

    header .container img[data-v-898691ee] {
        padding: 15px 0;
        width: 80px;
    }

    header .active[data-v-898691ee] {
        border-bottom: 2px solid #0282F9;
        color: #0282F9;
    }

    header li[data-v-898691ee] {
        height: 35px;
        padding: 10px;
        font-size: 12px;
    }
    </style>
    <style type="text/css">
    .card[data-v-780197ce] {
        flex-basis: 16.6666666667%;
        padding: 10px;
        height: 200px;
    }

    .card img[data-v-780197ce] {
        height: 125px;
        width: 125px;
        -o-object-position: top;
        object-position: top;
        -o-object-fit: cover;
        object-fit: cover;
    }
    </style>
    <style type="text/css">
    .bg[data-v-37ff9280] {
        color: #fff;
    }

    .card-container[data-v-37ff9280] {
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 40px 0;
    }
    </style>
    <style type="text/css">
    .footer-top[data-v-537474ba] {
        background-image: url(http://localhost:8080/img/footer-bg.1b706117.jpg);
        height: 320px;
    }

    .footer-top .dc-big-logo[data-v-537474ba] {
        height: 100%;
        width: 100%;
        background-repeat: no-repeat;
        background-position: right;
        background-image: url(http://localhost:8080/img/dc-logo-bg.597503ad.png);
    }

    .footer-top .container[data-v-537474ba] {
        height: 100%;
        justify-content: space-between;
        align-items: center;
    }

    #main-links[data-v-537474ba],
    #main-links .shop[data-v-537474ba] {
        color: #fff;
        font-size: 16px;
    }

    #main-links h3[data-v-537474ba],
    #main-links .shop h3[data-v-537474ba] {
        margin: 5px 0;
    }

    .dc-comics li[data-v-537474ba],
    .dc li[data-v-537474ba],
    .shop li[data-v-537474ba],
    .sites li[data-v-537474ba] {
        font-size: 12px;
        margin-top: 2px;
        color: #646464;
    }

    .sites[data-v-537474ba],
    .dc[data-v-537474ba] {
        padding-left: 30px;
        width: 155px;
    }
    </style>
    <style type="text/css">
    .footer-bottom[data-v-cc1ea654] {
        background-color: #303030;
    }

    .container[data-v-cc1ea654] {
        justify-content: space-between;
        align-items: center;
        padding: 25px 0;
    }

    .container span[data-v-cc1ea654] {
        border: 2px solid #0282F9;
        padding: 7px;
        color: #fff;
    }

    .social-references[data-v-cc1ea654],
    .social-links[data-v-cc1ea654] {
        align-items: center;
    }

    .social-references h3[data-v-cc1ea654],
    .social-links h3[data-v-cc1ea654] {
        color: #0282F9;
    }

    .social-references ul li[data-v-cc1ea654],
    .social-links ul li[data-v-cc1ea654] {
        margin: 0 10px;
    }
    </style>
    <style type="text/css">
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: "Segoe UI", "Open Sans", Helvetica, sans-serif;
    }

    .container {
        max-width: 1080px;
        margin: 0 auto;
    }

    img {
        height: auto;
        max-width: 100%;
    }

    ul {
        list-style-type: none;
    }

    a {
        text-decoration: none;
        color: inherit;
        cursor: pointer;
    }

    .d-flex {
        display: flex;
    }

    body {
        background-color: #1c1c1c;
    }
    </style>
</head>

<body>
    <noscript>
        <strong>We're sorry but vue-dc-comics doesn't work properly without JavaScript enabled. Please enable it to
            continue.</strong>
    </noscript>
    <div class="bg">
        <header data-v-898691ee="">
            <div data-v-898691ee="" class="container d-flex">
                <figure data-v-898691ee=""><a data-v-898691ee="" href="#"><img data-v-898691ee=""
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGcAAABnCAMAAAAqn6zLAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACMVBMVEUAAAAUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sUe+sAAAA9ACDQAAAAuXRSTlMADz1pjK3J3O8aYZ7ZKH3QDmrN9PDoIZH2w5dvSC4XASSg/Pi5cTQEEpL6+bBVCmju3XInws9RAmb101AN7WvXqRU/7FjEHP1OQpWFMBMsGfNdH68L66PkPm6aggfiddbh6UexjQZBVpjRQIAU2qxaKtJX+xAIwP4JDPe9T4gFpt63dCM3tXCOZAPFlpRSiksxKxbx6k1JbSDONXa42EQ5U7/yX8t+1McmhuZKtLt3L5mbVKXI26u2cxw+J4UAAAABYktHRACIBR1IAAAACXBIWXMAABYlAAAWJQFJUiTwAAAGQklEQVRo3r2ah1vbRhTAj22GwWwcAmYZY5u9jGMChGUgQDqSUlK6S5u2TldaKHSEztSUlpWOJB100aY7zbz/rvfuZEuyZelkW37fhyTO791Ptk7v7t57CPFKWnpGZlZ2jgmDmHKyszIz0tO4rfkkNy+/ACtJQX5ebrIg5sIirCZFhebEIZbikohuS8vKy0oj2koyLAlRKirFHqusR6qP1tTa6Ae22pqj1UesVSK9siJuSl19g9BLY5O92aGg4Wi2NzUKOg31dXFRWpwu1oG7ta1dRa+9rdXNFF3OFt0UW0cnM+7q1jZu6e5iyp0dNn2Ynl5m2Nfv4dL39Pcxg94ePZgBLzU65uO/PZvvGLXxDnCbDGZRi+NDDm4TEMfQcWqXNcinbx6m6iMndFFAToxQy2Gu93aUerAxn24KiG+Mer9Rbc1xOponJuPCIDQ5QUf4uJZenh/0nPqejFQcTujAn6eBoUrFcVNAiumtqoLGQcU1lRAGoSn46f0qP90oKFRNJ4hBaBr8qyvmYDDDSHMnjiEguGFTjOE9CO+NP77xHCk+eADDyi8s9QIdScEg1EE9g9InA/DJTJIwCM1Adwq+rgdcpzX+9yZSHFZwqlHe2wYTQWe8XkBJJmEC6410+PT3PDkbW+ZidOeZF3WEAXaK/XdS4Xm3dGINue9+RcwDE1KlB2HuPX1G0tIpn42dWhgiDykM0zaTXGfhYYQWZS1OqXqdi4ODc5ojKO1no3T8jyw9Kmtw1UkM6nkwxOYx2WOteVxJ6YmI/+tFg4oGDgiVplpxhA41cpk0iAvISl4Mxk8+JdjMPc2jDiuGyhDGUspjEpJnlsHm2QUe3cbnyKHUInCK9WAwPkdM5v1cqs97YAGZIXBKuGzC0kpMXuBTHUF2cixhGLM+jB7OiygAbwzzE4Xk6nwVn6FODpm7XyKnQsqB3drLr7xqBGcWodfIqQgwueTiwuvojRmpwthKSHK0OFUrUimXaq6+idDaOrmAPSwspd4C4NsSX7r6zruhUT8/oc7BFy1IFJln2YCW9zBbZOWTs53qvC/Vyf4gZLo8oc7BXR/G4HwU6jWfnGHDzhQ/lnV3Jmw7r/V8XJPKnEvQMksuChBKIyf3kgIHizd5XmsczCpzPoGWoJdcpaF0+I2QOmclTk46bdqkVxnk+KlBHDbXb2FwPZnk2G0MR3jC1eQyk64OP0seZ1HyLn3OmrYxrBizyXEneRwF2aUjAN73gKGcPaKQg2DBsmwox0MUTIgcVpGhHLQPnZG/MoM5ZQLnssGc8hR/H7fBHC90ZhJ7NIhjo+MN3p89Qzm1GN4f4/1BDQZ/AP7tC0M5X2Lwb+CvvzKUw/w1zD9nDeWcwzD/JHk+tXwtEeafrRjmU1gfeINJ4+RLm69Ai8OLYX1A1zvNSePI5m26Dr2K6XqH3sE1AznQK6zfYD36jTrnWy3OdyqcJszWo7nkvL6mxtnFWpyZ2Jw1SArQHBHsF8ZVOMsrmhzX9zE5B6HvRfc/WbE55h+wJgf/+FMwBqcVh/Y/sJ9rDERz2OIoOkagvP8Zs0bvSwhnTtzP0f3ptWhOLOHfZxWxPoX9KXU9Gx5DOJ4NLO63afyg3xBOP5bED2g8pM9mAMf2M5bEQ1h8x8fL+QUs9rk4PiyL79DReOjg4pSygH7Frxy6C4dYFq9i8bdFHs6V3wQTx/VVrm8vi7/ReKLpurbVpSXRZvp3Ho4snsjio5o3ePkPmVHgT21MRHyUxXs15K9TchtkW3Rr2UTG9229WhYX/lZIcf4zrG4UFb9m8XgVKbiKlOT0v2q/tlchm0rzCzdQsuQGdKeYS6X5ksRSZqLQGKVivkTI/ySaNGMypZL/SWY+C8ahKWa6NkX5OSHf6E443wjfxq+aqk1R/jRl+eCU5bfD+fqDuDD/cefrw/UHNwO6KYGb1JKv/iBcT2EaCuqiBIdYcou3ngKF60MO9SSHfYfMdfLXhyCx3uXWAWe9y8EtYSLQVe8iqd+5bdd+TgH7bWH21Fu/g6T1SHfG11T01sbvJFCPBCLWV63fvbejNCiCO/furgs68dZXgUjrxbybW9Xbu3vseXn2drertzbFOTiRejGQ6Pq3/bLyssjVaKL1b1RSUs/HJCX1iYIkVm/5P9i6hnSFv2IhAAAAAElFTkSuQmCC"
                            alt="dc-logo"></a></figure>
                <ul data-v-898691ee="" class="d-flex">
                    <li data-v-898691ee="" class=""><a data-v-898691ee="" href="#"> Characters</a></li>
                    <li data-v-898691ee="" class="active"><a data-v-898691ee="" href="#"> Comics</a></li>
                    <li data-v-898691ee="" class=""><a data-v-898691ee="" href="#"> Movies</a></li>
                    <li data-v-898691ee="" class=""><a data-v-898691ee="" href="#"> TV</a></li>
                    <li data-v-898691ee="" class=""><a data-v-898691ee="" href="#"> Games</a></li>
                    <li data-v-898691ee="" class=""><a data-v-898691ee="" href="#"> Collectibles</a></li>
                    <li data-v-898691ee="" class=""><a data-v-898691ee="" href="#"> Videos</a></li>
                    <li data-v-898691ee="" class=""><a data-v-898691ee="" href="#"> Fans</a></li>
                    <li data-v-898691ee="" class=""><a data-v-898691ee="" href="#"> News</a></li>
                    <li data-v-898691ee="" class=""><a data-v-898691ee="" href="#"> Shop</a></li>
                </ul>
            </div>
        </header>
        <div data-v-37ff9280="" class="bg">
            <div data-v-37ff9280="" class="container">
                <ul data-v-37ff9280="" class="card-container d-flex">
                    <li data-v-780197ce="" data-v-37ff9280="" class="card">
                        <figure data-v-780197ce=""><a data-v-780197ce="" href="#"><img data-v-780197ce=""
                                    src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX"
                                    alt="Action Comics"></a></figure>
                        <figcaption data-v-780197ce="">Action Comics</figcaption>
                    </li>
                    <li data-v-780197ce="" data-v-37ff9280="" class="card">
                        <figure data-v-780197ce=""><a data-v-780197ce="" href="#"><img data-v-780197ce=""
                                    src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01"
                                    alt="American Vampire 1976"></a></figure>
                        <figcaption data-v-780197ce="">American Vampire 1976</figcaption>
                    </li>
                    <li data-v-780197ce="" data-v-37ff9280="" class="card">
                        <figure data-v-780197ce=""><a data-v-780197ce="" href="#"><img data-v-780197ce=""
                                    src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2018/08/AQMv4_UW_153-001_HD_5b7efa1745a9b8.08589135.jpg?itok=HPTtnrsb"
                                    alt="Aquaman"></a></figure>
                        <figcaption data-v-780197ce="">Aquaman</figcaption>
                    </li>
                    <li data-v-780197ce="" data-v-37ff9280="" class="card">
                        <figure data-v-780197ce=""><a data-v-780197ce="" href="#"><img data-v-780197ce=""
                                    src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/06/batgirl_v5_1_5b23e1f1124941.50950783.jpg?itok=VnrJah76"
                                    alt="Batgirl"></a></figure>
                        <figcaption data-v-780197ce="">Batgirl</figcaption>
                    </li>
                    <li data-v-780197ce="" data-v-37ff9280="" class="card">
                        <figure data-v-780197ce=""><a data-v-780197ce="" href="#"><img data-v-780197ce=""
                                    src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ"
                                    alt="Batman"></a></figure>
                        <figcaption data-v-780197ce="">Batman</figcaption>
                    </li>
                    <li data-v-780197ce="" data-v-37ff9280="" class="card">
                        <figure data-v-780197ce=""><a data-v-780197ce="" href="#"><img data-v-780197ce=""
                                    src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ"
                                    alt="Batman Beyond"></a></figure>
                        <figcaption data-v-780197ce="">Batman Beyond</figcaption>
                    </li>
                    <li data-v-780197ce="" data-v-37ff9280="" class="card">
                        <figure data-v-780197ce=""><a data-v-780197ce="" href="#"><img data-v-780197ce=""
                                    src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2019/08/BMSM_5d4361b7116261.74371456.jpg?itok=kEDR2OL8"
                                    alt="Batman/Superman"></a></figure>
                        <figcaption data-v-780197ce="">Batman/Superman</figcaption>
                    </li>
                    <li data-v-780197ce="" data-v-37ff9280="" class="card">
                        <figure data-v-780197ce=""><a data-v-780197ce="" href="#"><img data-v-780197ce=""
                                    src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMSMANN_01_300-001_HD_5f5ff17fa1d665.74704970.jpg?itok=azz5sfGk"
                                    alt="Batman/Superman Annual"></a></figure>
                        <figcaption data-v-780197ce="">Batman/Superman Annual</figcaption>
                    </li>
                    <li data-v-780197ce="" data-v-37ff9280="" class="card">
                        <figure data-v-780197ce=""><a data-v-780197ce="" href="#"><img data-v-780197ce=""
                                    src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMTJWZ_01_300-001_HD_5f5ff2307dcb37.34652945.jpg?itok=VswVjLR8"
                                    alt="Batman: The Joker War Zone"></a></figure>
                        <figcaption data-v-780197ce="">Batman: The Joker War Zone</figcaption>
                    </li>
                    <li data-v-780197ce="" data-v-37ff9280="" class="card">
                        <figure data-v-780197ce=""><a data-v-780197ce="" href="#"><img data-v-780197ce=""
                                    src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/08/cover-v2_5f40314645a734.37285065.png?itok=ImNM2QBY"
                                    alt="Batman: Three Jokers"></a></figure>
                        <figcaption data-v-780197ce="">Batman: Three Jokers</figcaption>
                    </li>
                    <li data-v-780197ce="" data-v-37ff9280="" class="card">
                        <figure data-v-780197ce=""><a data-v-780197ce="" href="#"><img data-v-780197ce=""
                                    src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/10/BMWK_HQ_01_300-001_HD_5f7cb4945e13f6.89501032.jpg?itok=sVwALbUX"
                                    alt="Batman: White Knight Presents: Harley Quinn"></a></figure>
                        <figcaption data-v-780197ce="">Batman: White Knight Presents: Harley Quinn</figcaption>
                    </li>
                    <li data-v-780197ce="" data-v-37ff9280="" class="card">
                        <figure data-v-780197ce=""><a data-v-780197ce="" href="#"><img data-v-780197ce=""
                                    src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2019/04/CTWv1_CC_144-001_HD_5ca5299a751963.53054221.jpg?itok=ooPaoLDq"
                                    alt="Catwoman"></a></figure>
                        <figcaption data-v-780197ce="">Catwoman</figcaption>
                    </li>
                </ul>
            </div>
        </div>
        <div data-v-537474ba="" class="footer-top">
            <div data-v-537474ba="" class="container d-flex">
                <ul data-v-537474ba="" id="main-links" class="d-flex">
                    <li data-v-537474ba="" class="dc-comics">
                        <h3 data-v-537474ba=""> DC-COMICS</h3>
                        <ul data-v-537474ba="">
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> Characters</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> Comics</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> Movies</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> TV</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> Games</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> Collectibles</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> Videos</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> Fans</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> News</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> Shop</a></li>
                            <li data-v-537474ba="" class="shop">
                                <h3 data-v-537474ba="">SHOP</h3>
                            </li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> Shop DC </a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> Shop DC Collectibles </a></li>
                        </ul>
                    </li>
                    <li data-v-537474ba="" class="dc">
                        <h3 data-v-537474ba="">DC</h3>
                        <ul data-v-537474ba="">
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> Terms Of Use</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> Privacy policy (New)</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> Ad Choices</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> Advertising</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> Jobs</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> Subscription</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> Talent Workshop</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> CPSC Certificates</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> Ratings</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> Shop Help</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> Contact Us</a></li>
                        </ul>
                    </li>
                    <li data-v-537474ba="" class="sites">
                        <h3 data-v-537474ba="">SITES</h3>
                        <ul data-v-537474ba="">
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> DC</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> MAD Magazine</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> DC Kids</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> DC Universe</a></li>
                            <li data-v-537474ba=""><a data-v-537474ba="" href="#"> DC Power Visa</a></li>
                        </ul>
                    </li>
                </ul>
                <div data-v-537474ba="" class="dc-big-logo"></div>
            </div>
        </div>
        <div data-v-cc1ea654="" class="footer-bottom">
            <div data-v-cc1ea654="" class="container d-flex"><span data-v-cc1ea654=""><a data-v-cc1ea654=""
                        href="#">SING-UP NOW!</a></span>
                <div data-v-cc1ea654="" class="social-references d-flex">
                    <ul data-v-cc1ea654="" class="social-links d-flex">
                        <li data-v-cc1ea654="">
                            <h3 data-v-cc1ea654=""> FOLLOW US </h3>
                        </li>
                        <li data-v-cc1ea654=""><a data-v-cc1ea654="" href="#"><img data-v-cc1ea654=""
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAQAAAC00HvSAAABnUlEQVR4Aa3VA+xXURjG8Tfbto2phmwOacia7fpm29acx4bc1JBt97eZdfKP971+nvHgc3ct1qEcA1jOGV5SiKGYt1xgPSOpKG5DPVaQjrFsPltp4UxUZB6lGNt+Zj3VRQ8duIFx1Wf00pB+FGBc9yPjrZC+vMd46jcmJp9Okbr8BSfY/6dXk65S31ikErcU4j3TKBNZNz9p/i11IwwLMUpny5+ojGH//8lG6lXJppwj853ufyfXYpReigAzOPmr9yxXHRERypOlMkcizB2M2k/UFYZiXDD3MHqZo5/SbfYzN8Is+XPDL6uH47wytVaSwmJl7RMhxQOzV1n7VXjngTmlXR3BeLg2mTrzLoQ7ZZRrozH6tbkQAvNUWBcCc1QYHgIzVyhPdkDmM3VFhHUBmaN/lzTmQwDmBz0jD1cA5lDst/i+TyaDuhINXSz/DJlc+NdS5eIOkPgwhA+e/1NTJDkMpNAD8olJYh06cdsl8oreooeKLHL8CX9hCzXEKTRkLRkKUcAuWovbUI6hrOIcrynF8J40LrGJsVQSy/wEkq70Q3uDxroAAAAASUVORK5CYII="
                                    alt="facebook logo"></a></li>
                        <li data-v-cc1ea654=""><a data-v-cc1ea654="" href="#"><img data-v-cc1ea654=""
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAQAAAC00HvSAAACE0lEQVR4AZ2WA6xeQRBGp7ZtG1FfUNt2G1Rx7Z7atm3GrBXUtm3bmKf/4e7uz3OiO5v5dvda3JCK2kxiD/f4gPKJRxxgFk1IK6FCLibzDHX6jgUUCR6RlpF8QQP6i1lkDhRShrNoSN6mmrihJu/RkP1BO7GhBt/QsPxLB3s7H9Gw/UWN5CHpOI9G5CNySgKMQSN2VUJIvpDOym+OspPj/DPq/6gcHzPDU37LHdTyKEUlDipyjhMMSnZrbBMRUvPS07CE4lbQZTKKB/rxInH0JzmFBkZLPxHyst9TMy4s2YliMZpob3NLykQREVLQk4eJtdxGTEqja5sY8ypXSCVxkJpWrOMaP8lpxBQ1em4Kj43SJyaKASmM4/JGzx/hq1EaShWySEBoinoV1HCfBIWxdoy5mv+0Cxpz3I55jBp+ZwjZAoRU5L99bg6ghv/oRqUAMZtRw1vCTNRyXYCQmvxDDbcLjVCHa8jlDMnNfdSyj5CaV+6XJAOt+yUrJ5wvr5wirm29Zxe1xIBSXEYdbo8fzs/3xNIHJlGUVGJARkby1Rnyn6oSD+M9A3eZQG0yScIkLVjOO9Qta5O/i6+glt94H/S9+Nzz2FKBj2gE1hYv1Od72N+p7mJDHT6gIfuTjuKGclwIMeQ+UYH/KMYGPa2/mU8WCQZ5mcFz1Ol7llJcQoVUNGAq+3jAF5RvPOUQc2lBOnESDev+cHktH1NXAAAAAElFTkSuQmCC"
                                    alt="twitter logo"></a></li>
                        <li data-v-cc1ea654=""><a data-v-cc1ea654="" href="#"><img data-v-cc1ea654=""
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAQAAAC00HvSAAACd0lEQVR4AaWWA3AlaRRGb2yNbdu2bdsoOzljrG3btm0ztm07+bf2oat7nmu+U2jcPr9aYj/4sIDLfEwGVShqyOFzbmUl/uJu6MoVClB2qeBu+rtW+BNNHcopLdxKqDPJcP5AuUUq0xxJ5lGJcpsmNtuTzKUB5SFbbYdTbSh4iB9RPMOnLmZprl4SwF8oAwdYRzNBvIpySg5dNA1nURh5n1A+JoR6fuMmPkfxC3+Sbqd3j1olPe3MSguRzGIHOfizH1/+Yg+neYjxNpUdjDNrbkbZ4ZAIb/K9CNVE8KJDjeJFEcGXYrua10SocEvTTBdhKcouH5gE7mgUR4SbnWoSRHgMfz5hD/NY5EDzovCZA00sJ2hEcReLgXbe4iCPcdlubbKQi7pu2oR6m4N/cg+3OOFV23eAGHdp56AIUSbCxBLC8RNd6MPv12qMvbkkIlb199plsawVQ+hJjVFjnJteYgofEGNqNZRehBLLdoaLEMEiuogpPGOcm891u/UiBs337OED9hDL1zQxjWS+Jw9fU8V5lEaKcItut9qhZi2xnEYxEkVfU0UMSuMlYblHmtd4jW42mqOCLyXabp1TzSkUftxCuHFQtNBFxDisHgbN5/xOsUnzLtUsoZxXKDUvPk/phvR/6EWjdihGTGESg0QYxWQm0YtZjGMFXgzlMMPM3zLt9d/JBDGHC7oObhaXoQvfalc8oX8Xx6E0vuEq0Q45wxNUabWFdNH7R1ON8pgWFogxLKHRQ0k7e8Q2LKTKA0kz28R+GMnfbkoyme78j+Kcy49wK3cRJq5CD26m0IGikgcYJO4GH5ZyA5+SRR2KBvL5kjtYS4DYzX+j8JtZPb8iWQAAAABJRU5ErkJggg=="
                                    alt="youtube logo"></a></li>
                        <li data-v-cc1ea654=""><a data-v-cc1ea654="" href="#"><img data-v-cc1ea654=""
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAQAAAC00HvSAAACt0lEQVR4AZWWA7AkMRiEc7Zt27Zt27b5nW3bZuFQONu2bdtW6q/KJW8etnd3ZtLd6Zp4lTcIQWGGspmbvOY3b7nLdsZShtAqqCAGw3jIb8/PSyaTKPCI0PThPb8D/HxlLBEDCknFCbEG9rlGTv9CCvLKGAP9fKaaV0gBfnpX4DWPeMUvD+WY3+a8cU0cpge5kF4gLHkYwDXHU0AZEIZTjnyQwp4ND049Hhsfd4luxP7OSLSxqkYhMWFNmfgcwLjnCk0cPlohpYUPS0u2iPaLswwlhijhOYL4+UlGTTLaepeGYs3LdcPK5wXFRY3FM4Rl5T8iJE8wxrViK84nz1H7SE5xtEE4vhBdUQJj+k4yaf0rYS6y2ZlNRyUmJA8QjuZ2kzaKZbYu/aC1LsVzhjmVuGZgmsU2jKGFlqPyRZdmKQE9rZimwrZAGK4o7mEMebRcUUoZlYDGVkwfYcuazlB8wBgSarmTrJlgSsAAK6adsMUNpyxDIi331c9vzYRjq+WqLWx1w9lvk0/LDaQUQezhnMHPJHw3w9l901nLsaVaZbFXsELeEFL4JZi+Yfv/a1op0yzqS2mWFbNS2GDcRTiuKsZYpqoy1f89J5YK9qLI57eDWaUo5bxyPhnyO0rAM4y+XglYa803QvLU2Sbm6o1ghRIwx+x2RBMuJz9NDb3nOM2Sj9lzCMsYLnOOgcjYEYVLVpM0GddzNaeXYy+UckBE9mB8v8gsAoM8dpZgWsnNAkJaIXk5bzkXGCmMkeSzQZQ+erPoSBYSkYW27HVOiEdEVwakc06GnsJvCeS0cjd+ivPTPTgIzccAIn7IBLVBGb4hFqJopkgAIV+oqbxBeibyy6xuZvobcotcKiBQiDM8kD8o3v8tvjGJSCowEJwy+j7NI+IVM0iqfAHNWcxZ3sqh9o5LTCeMt/cPilw4xl5ZzNIAAAAASUVORK5CYII="
                                    alt="pinterest logo"></a></li>
                        <li data-v-cc1ea654=""><a data-v-cc1ea654="" href="#"><img data-v-cc1ea654=""
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAQAAAC00HvSAAACpElEQVR4AY2WA5QYPQCE57dt27ZZ27ZtfrVt86F2+1Dbtm3r7LtUe9hsDhNPZidYZOUGD/A3nVnIcW5iCOU0S+lNLh5WVsELdOE8xhmuM5C3lBl4mFaEYzIMsfTmyYxMPmIbJkvhCD/KDf7kBibLIZoiLpM/iHSIQ9jAUnY5B0igWHA5IZYonon8zgNe//38zmQSA7v0R1qTR9hhCQ7yg8QntGcuy5hOO96X+IPTlu40zysZtLU6N/McLzCeRN/sBvEYr3PU0o72THjF2pVzvM77nMAEwkae4XPrgUjky3s2PS1xLp7kEMYZFnA/DSxusiQe5JKPXCPROU37GLmoxZaUdgUe4YzvihieF9ks79o8RVjKfhgMpSQeYCze5jvmXzVIvUUJr7aMmRgM/0kSD3HM4z/lv8CyWOKfoEQnr16RZ2hFQUn+PSzPm5bNIVnrPCMx3KvnkQ/U9/hmPGw/qiLCR9yQ6OPVG1s2Qzy+Gi9h/EE2wRuU9GoH0n6keInrHv8t/wRtIiyqMk8T5dVn4X1XeJm1HneC++getDljUcskRqe0LjICGEdICtOM+zkZ3JultjPf8x4xGGc4z+OUDLCHRa8AuUSiB26bqjzE4QA7ReRwiAvzKHsd/FLuo4mDryYe5HKAPsfzfEtk4FR4m/cJc3zin5dcyzLM4j7KkuT7ZObgIdZhHEuSJF4lytGJRKuUVhK1JAY6dEl8rXugg7O7mkRLEjEk0kiiIcYRxqX5Fjs3NIHKEjmYR26JeiQ5NBd4XqngM0KcMxrK0xJPMMx9fvK3/OB/opzSENa4j0ESKKsg+IebmCyHGIrLDT5hZxZNTvBTxn8U7YjMxCKOATylzMDL9OSC24IbDONdZRU8QDa6sZiThGOI5BzL6Uc+HpETtwDp5wIpWJbQHAAAAABJRU5ErkJggg=="
                                    alt="periscope logo"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- built files will be auto injected -->


</body>

</html>