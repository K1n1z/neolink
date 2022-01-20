<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/ico.ico" type="image/x-icon">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Планшеты</title>
</head>
<body>
<div class="wrapper">
<header>
    <div class="logo1"><img class="logo" src="image/logo.png">NEOLINK</div>
        <nav>
            <a href="index.php">Главная</a>
            <a href="phone.php">Телефоны</a>
            <a href="laptop.php">Ноутбуки</a>
            <a href="tablet.php" class="bb">Планшеты</a>
            <a href="audio.php">Наушники</a>
            <a href="korzina.php"><img src='image/korzina.png' class="scale" width="20px" height="20px" title="Корзина"></a>
            <a href="login.php"><img src='image/akk.png' class="scale" width="20px" height="20px" title="Личный кабинет"></a>
        </nav>
</header>

<script>
        function getCookie(name) {
        let matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([.$?|{}()[]\/+^])/g, '\$1') + "=([^;])"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;}
        function setCookie(name, value, options = {}) {
        options = {
        path: '/',
        // при необходимости добавьте другие значения по умолчанию
        ...options
        };
        if (options.expires instanceof Date) {
        options.expires = options.expires.toUTCString();
        }
        let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);
        for (let optionKey in options) {
        updatedCookie += "; " + optionKey;
        let optionValue = options[optionKey];
        if (optionValue !== true) {
            updatedCookie += "=" + optionValue;
        }
        }
        document.cookie = updatedCookie;
        }//


        var data = [];
        function buy(x){
            if(getCookie('PHPSESSID')){
                if (!contains(data,x)){
                    data.push(x);
                    setCookie('buy', data.join(','));
                    alert('The product has been added to the cart');
                }else{
                    alert('The product has been added to the cart');
                }
            }else{
                alert('Log in to the website or register to order')
            }
        }
        function contains(arr, elem) {
            for (var i = 0; i < arr.length; i++) {
                if (arr[i] === elem) {
                    return true;
                }
            }
            return false;
        }
    </script>

<br>
<div class="cont">

<div class="tov">
    <img class="tovimg" src="image/9.webp" width="170px" height="200px">
        <div class="tovim">
            <div class="tovimh">Ipad 10.2 Wi-Fi+Cellular Золотой</div>
            <br>
            <div class="tovimp">
                Дагональ: 10.2<br>
                Разрешение экрана: 2160х1620 Пикс<br>
                Процессор: A12 Bionic<br>
                Операционная система: iPadOS<br>
                Память: 32GB<br>
                Цвет: Золотой<br>
                Количество SIM-карт: 1<br>
                Тип SIM-карты: Nano-SIM<br>
                Тип экрана: TFT IPS<br>
                Производитель: Apple<br>
            </div>
        </div>
        <div class="tovin">
            <div class="tovinh">42 000 р.</div>
            <div class="tovinb">
            <button class="buttonp" onclick="buy(9)"><span>В корзину</span></button>
            </div>
        </div>
</div>

<div class="tov">
    <img class="tovimg" src="image/10.webp" width="170px" height="200px">
        <div class="tovim">
            <div class="tovimh">Ipad Air 10.9 Wi-Fi Розовое золото</div>
            <br>
            <div class="tovimp">
                Дагональ: 10.9<br>
                Разрешение экрана: 2360х1640 Пикс<br>
                Процессор: A14 Bionic<br>
                Операционная система: iPadOS<br>
                Память: 64GB<br>
                Цвет: Розовый<br>
                Количество SIM-карт: 1<br>
                Тип SIM-карты: Nano-SIM<br>
                Тип экрана: TFT IPS<br>
                Производитель: Apple<br>
            </div>
        </div>
        <div class="tovin">
            <div class="tovinh">55 000 р.</div>
            <div class="tovinb">
            <button class="buttonp" onclick="buy(10)"><span>В корзину</span></button>
            </div>
        </div>
</div>

<div class="tov">
    <img class="tovimg" src="image/11.webp" width="170px" height="200px">
        <div class="tovim">
            <div class="tovimh">Ipad Pro 11 Wi-Fi+Cellular Серый космос</div>
            <br>
            <div class="tovimp">
                Дагональ: 11<br>
                Разрешение экрана: 2388х1668 Пикс<br>
                Процессор: M1<br>
                Операционная система: iPadOS<br>
                Память: 128GB<br>
                Цвет: Серый<br>
                Количество SIM-карт: 1<br>
                Тип SIM-карты: Nano-SIM<br>
                Тип экрана: TFT IPS<br>
                Производитель: Apple<br>
            </div>
        </div>
        <div class="tovin">
            <div class="tovinh">88 000 р.</div>
            <div class="tovinb">
            <button class="buttonp" onclick="buy(11)"><span>В корзину</span></button>
            </div>
        </div>
</div>

<div class="tov">
    <img class="tovimg" src="image/12.webp" width="170px" height="200px">
        <div class="tovim">
            <div class="tovimh">Ipad Pro 12.9 Wi-Fi Серый космос </div>
            <br>
            <div class="tovimp">
                Дагональ: 12.9<br>
                Разрешение экрана: 2732х2048 Пикс<br>
                Процессор: M1<br>
                Операционная система: iPadOS<br>
                Память: 128GB<br>
                Цвет: Серый<br>
                Количество SIM-карт: 1<br>
                Тип SIM-карты: Nano-SIM<br>
                Тип экрана: TFT IPS<br>
                Производитель: Apple<br>
            </div>
        </div>
        <div class="tovin">
            <div class="tovinh">100 000 р.</div>
            <div class="tovinb">
            <button class="buttonp" onclick="buy(12)"><span>В корзину</span></button>
            </div>
        </div>
</div>

</div>
</div>
<footer>
    <div class="wrappers">
    <h1 class="fone">Neolink - group</h1>
    <br>
    <div class="bft">
    <table>
        <tr>
            <th>Мы в соц.сетях</th>
            <th>Меню</th>
            <th>Контакты</th>
        </tr>
        <tr>
            <td>
                <a href="https://mail.yandex.ru/?from=tableau_yabro&uid=467999448#inbox"><img src='image/pochta.png' class="scale" width="25px" height="25px"></a>
                <a href="https://www.youtube.com/"><img src='image/youtube.png' class="scale" width="25px" height="25px"></a>
                <a href="https://ru-ru.facebook.com/"><img src='image/fb.png' class="scale" width="25px" height="25px"></a>
                <a href="https://twitter.com/"><img src='image/twit.png' class="scale" width="25px" height="25px"></a>
                <a href="https://www.instagram.com/"><img src='image/inst.png' class="scale" width="25px" height="25px"></a>
            </td>
            <td><a href="index.php">Главная</a></td>
            <td>Россия, г.Хабаровск, ул.Пушкина, д.69</td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="phone.php">Телефоны</a></td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="laptop.php">Ноутбуки</a></td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="tablet.php" class="bbb">Планшеты</a></td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="audio.php">Наушники</a></td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="korzina.php">Корзина</a></td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="login.php">Личный кабинет</a></td>
            <td> </td>
        </tr>
    </table>
    </div>
    </div>
    <br>
</footer>
</body>
</html>