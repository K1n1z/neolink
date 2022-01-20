<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/ico.ico" type="image/x-icon">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Регистрация</title>
</head>
<body>
<div class="wrapper">
<header>
    <div class="logo1"><img class="logo" src="image/logo.png">NEOLINK</div>
        <nav>
            <a href="index.php">Главная</a>
            <a href="phone.php">Телефоны</a>
            <a href="laptop.php">Ноутбуки</a>
            <a href="tablet.php">Планшеты</a>
            <a href="audio.php">Наушники</a>
            <a href="korzina.php"><img src='image/korzina.png' class="scale" width="20px" height="20px" title="Корзина"></a>
            <a href="login.php"><img src='image/akk.png' class="scale" width="20px" height="20px" title="Личный кабинет"></a>
        </nav>
</header>
<br>
<form action="save_user.php" method="post">
<!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
<h1 class="poiskhh">Логин</h1>
<div class="intl">
<input name="login" type="text" size="30" maxlength="100" class='textInp'>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
</div>
<h1 class="poiskhh">Пароль</h1>
<div class="intl">
<input name="password" type="password" size="30" maxlength="100" class='textInp'>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
</div>
<div class="intl">
    <button name="submit" class="voitr">Зарегистрироваться</button>
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
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