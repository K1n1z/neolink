<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/ico.ico" type="image/x-icon">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Главная</title>
</head>
<body>
<div class="wrapper">
<header>
    <div class="logo1"><img class="logo" src="image/logo.png">NEOLINK</div>
        <nav>
            <a href="index.php" class="bb">Главная</a>
            <a href="phone.php">Телефоны</a>
            <a href="laptop.php">Ноутбуки</a>
            <a href="tablet.php">Планшеты</a>
            <a href="audio.php">Наушники</a>
            <a href="korzina.php"><img src='image/korzina.png' class="scale" width="20px" height="20px" title="Корзина"></a>
            <a href="login.php"><img src='image/akk.png' class="scale" width="20px" height="20px" title="Личный кабинет"></a>
        </nav>
</header>
<br>
<div class="cones"> 
    <div class="col">
        <a href="audio.php"><img src="image/muz.png" id="img" width="510px" height="450px" class="cone"></a>
    </div>
    <div class="col">
        <div class="one">
        Товар года
        <p class="onep">Колонка MOMIEO PisosPro 228</p>
        <a href="audio.php"><button class="button"><span>Подробнее</span></button></a>
    </div>
    </div>
</div>
<div class="ctwo">
    <h1 class="ctwos">Акции недели</h1>
    <div class="slider">
        <div class="item">
            <a href="akc.php"><img src="img/slide1.jpg" alt="Первый слайд"></a>
            <div class="slideText">Акция №1</div>
        </div>
        <div class="item">
            <a href="akc.php"><img src="img/slide2.jpg" alt="Второй слайд"></a>
            <div class="slideText">Акция №2</div>
        </div>
        <div class="item">
            <a href="akc.php"><img src="img/slide3.jpg" alt="Третий слайд"></a>
            <div class="slideText">Акция №3</div>
        </div>
    <a class="prev" onclick="minusSlide()">&#10094;</a>
    <a class="next" onclick="plusSlide()">&#10095;</a>
    </div>
    <br>
    <div class="slider-dots">
        <span class="slider-dots_item" onclick="currentSlide(1)"></span> 
        <span class="slider-dots_item" onclick="currentSlide(2)"></span> 
        <span class="slider-dots_item" onclick="currentSlide(3)"></span> 
    </div>  
    <script src="script.js"></script>	
</div>    

<div class="ctwo">
    <h1 class="ctwoss">Не упусти свою возможно, получать информацию о новом товаре</h1>
    <div class="opros">
    <input class="bluein" type="text" value="neolink@mail.ru">
    <button class="buttons">Отправить</button>
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
            <td><a href="index.php" class="bbb">Главная</a></td>
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