<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/ico.ico" type="image/x-icon">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Корзина</title>
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
<script>    
        function getCookie(name) {
            let matches = document.cookie.match(new RegExp(
                "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
            ));
            return matches ? decodeURIComponent(matches[1]) : undefined;
        }
        let data = getCookie('buy')
        if(data){
            data=data.split(',');
            korOutput();
        }else{
            console.log(data);
            document.write('Your shopping cart is empty')
        }
        function deleteBuy(x){
            for(i in data){
                if (data[i]==x){
                    x=i;
                    break
                }
            }
            data.splice(x, 1);
            document.cookie = 'data='+data.join(',');
            document.getElementsByClassName('korCont'+x)[0].outerHTML = '';
        }
        function refreshCount(){
            let stroki = document.getElementsByClassName('ProdInput');
            let result = [];
            
            for(i in data){
                result.push(stroki[i].value);
            }
            document.getElementsByName('prodsCounter')[0].value=result.join(',');
            console.log(document.getElementsByName('prodsCounter')[0].value);
        }
        function korOutput(){
            for(i in data){
                document.write('\
                <div class="tov">\
                <div class="korContent korCont'+(data[i])+'">\
                    <div class="korProd"><img src="image/'+(data[i])+'.webp" width="210px" height="150px"></div>\
                    <div class="korStrok"><div class="tovimh"></div>\
                    <div class="tovin">\
                    <div class="tovinh">Кол-во</div>\
                        <div class="inp"><input name="prod'+(data[i])+'" type="text" size="22" maxlength="100" onchange="refreshCount()" class="textInp ProdInput" value="1"></div>\
                    </div>\
                    </div>\
                    <div class="tovin">\
                    <div class="korZakaz">\
                        <a><button class="korKup colKorZen" type="button" onclick="deleteBuy('+data[i]+')">Удалить</button></a>\
                    </div>\
                    </div>\
                </div>\
                </div>');
            }
            document.write('\
            <div class="korContent inp">\
                <form class="" method="POST">\
                    E-mail: <input name="email" type="text" class="textInp" style="width:150px;height:20px">\
                    <input name="prods" type="text" style="display:none" value="'+data.join(',')+'">\
                    <input name="prodsCounter" type="text" style="display:none" value="">\
                    <input class="korKup colKorZen" type="submit" value="buy">\
                </form>\
            </div>')
            refreshCount();
        }

    </script>

    <?php
    
    $email = "not defined";
    $prods = "not defined";
    $prodsCounter = "not defined";
    if(isset($_POST["email"])){
    
        $email = $_POST["email"];
    
    if(isset($_POST["prods"])){
    
        $prods = $_POST["prods"];
    
    if(isset($_POST["prodsCounter"])){
    
        $prodsCounter = $_POST["prodsCounter"];    
        include('bd.php');
    
        $sql = mysqli_query($db, "INSERT INTO `orders` (`email`, `prods`, `prods_amount`) VALUES ('{$email}', '{$prods}', '{$prodsCounter}')");
    //Если вставка прошла успешно
    if ($sql) {
      echo '<p> Покупка совершена успешно, ждите сообщения в ваше почтовом ящике.</p>';
    } else {
      echo '<p>Ошибка: ' . mysqli_error($link) . ' Попробуйте позже.</p>';
    }

    }}}
    

    ?>



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
            <td><a href="korzina.php" class="bbb">Корзина</a></td>
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