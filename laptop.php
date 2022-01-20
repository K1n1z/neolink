<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/ico.ico" type="image/x-icon">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Ноутбуки</title>
</head>
<body>
<div class="wrapper">
<header>
    <div class="logo1"><img class="logo" src="image/logo.png">NEOLINK</div>
        <nav>
            <a href="index.php">Главная</a>
            <a href="phone.php">Телефоны</a>
            <a href="laptop.php" class="bb">Ноутбуки</a>
            <a href="tablet.php">Планшеты</a>
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
    <img class="tovimgn" src="image/5.webp" width="270px" height="170px">
        <div class="tovim">
            <div class="tovimh">MacBook Air 13 M1 Серый космос</div>
            <br>
            <div class="tovimp">
                Дагональ: 13.3<br>
                Разрешение экрана: 2560х1600 Пикс<br>
                Процессор: М1<br>
                Операционная система: MacOS<br>
                Память: 256GB<br>
                Цвет: Серый<br>
                Оперативная память: 16GB<br>
                Количество ядер: 8<br>
                Тип матрицы: IPS<br>
                Производитель: Apple<br>
                <br>
            </div>
        </div>
        <div class="tovin">
            <div class="tovinh">103 000 р.</div>
            <div class="tovinb">
            <button class="buttonp" onclick="buy(5)"><span>В корзину</span></button>
            </div>
        </div>
</div>

<div class="tov">
    <img class="tovimgn" src="image/6.webp" width="270px" height="170px">
        <div class="tovim">
            <div class="tovimh">MacBook Pro 16 M1 Серый космос</div>
            <br>
            <div class="tovimp">
                Дагональ: 16.2<br>
                Разрешение экрана: 3456х2234 Пикс<br>
                Процессор: М1 Max<br>
                Операционная система: MacOS<br>
                Память: 1TB<br>
                Цвет: Серый<br>
                Оперативная память: 32GB<br>
                Количество ядер: 10<br>
                Тип матрицы: IPS<br>
                Производитель: Apple<br>
                <br>
            </div>
        </div>
        <div class="tovin">
            <div class="tovinh">335 000 р.</div>
            <div class="tovinb">
            <button class="buttonp" onclick="buy(6)"><span>В корзину</span></button>
            </div>
        </div>
</div>

<div class="tov">
    <img class="tovimgn" src="image/7.webp" width="270px" height="170px">
        <div class="tovim">
            <div class="tovimh">MacBook Pro 13 M1 Серый космос</div>
            <br>
            <div class="tovimp">
                Дагональ: 13.3<br>
                Разрешение экрана: 2560х1600 Пикс<br>
                Процессор: М1<br>
                Операционная система: MacOS<br>
                Память: 256GB<br>
                Цвет: Серый<br>
                Оперативная память: 8GB<br>
                Количество ядер: 8<br>
                Тип матрицы: IPS<br>
                Производитель: Apple<br>
                <br>
            </div>
        </div>
        <div class="tovin">
            <div class="tovinh">120 000 р.</div>
            <div class="tovinb">
            <button class="buttonp" onclick="buy(7)"><span>В корзину</span></button>
            </div>
        </div>
</div>

<div class="tov">
    <img class="tovimgn" src="image/8.webp" width="270px" height="170px">
        <div class="tovim">
            <div class="tovimh">MacBook Air 13 M1 Золотой</div>
            <br>
            <div class="tovimp">
                Дагональ: 13.3<br>
                Разрешение экрана: 2560х1600 Пикс<br>
                Процессор: М1<br>
                Операционная система: MacOS<br>
                Память: 256GB<br>
                Цвет: Золотой<br>
                Оперативная память: 16GB<br>
                Количество ядер: 8<br>
                Тип матрицы: IPS<br>
                Производитель: Apple<br>
                <br>
            </div>
        </div>
        <div class="tovin">
            <div class="tovinh">103 000 р.</div>
            <div class="tovinb">
            <button class="buttonp" onclick="buy(8)"><span>В корзину</span></button>
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
            <td><a href="laptop.php" class="bbb">Ноутбуки</a></td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a href="tablet.php">Планшеты</a></td>
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