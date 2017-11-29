<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/styleIndex.css" type="text/css"/>
        <script type="text/javascript" src="JS/jquery-3.2.1.min.js" ></script>

        <script type="text/javascript" src="JS/valform.js"></script>

        <link rel="stylesheet" href="style/stylewin.css" type="text/css"/>
        <title>Главная</title>
    </head>
    <body>
        <?php include './win.php';?>
        <!--        head-->
        <div class="row0">
            <div id="logo">Автосервис</div>
            <a href="#zatemnenie" > <input id="but" type="button" value="Подать заявку" /></a>
            <img id="bgHead" src="img/main.png" alt="красивая картинка" >

            <!--            nav-->
            <nav id="mainav" >
                <ul >
                    <li class="active"><a href="index.php">Главная</a></li>
                    <li><a  href="service.php">Услуги</a>

                    </li>
                    <li><a href="action.php">Акции</a></li>
                    <li><a href="contact.php">Контакты</a></li>
                </ul>
            </nav>
        </div>
        <div id="main-div" >

            <div id="main-content" lang="ru">
                <h1>Автосервис</h1>
                На сегодняшний день, благодаря серьезным инвестициям в современное оборудование, мы можем смело говорить о том, что наш сервис входит в число самых оснащенных по региону, и предлагаем всем владельцам дизельных автомобилей свою помощь в их обслуживании.
                <br><br>
                У нас вы сможете провести полную и точную диагностику всей топливной аппаратуры, электронных и охладительных систем, климатического оборудования, аппаратную замену масла и антифриза, заправку кондиционера, чистку выпускного тракта и дроссельной заслонки, промывку форсунок и многое другое.
                <br><br>
                Современное, высокоточное оборудование, на котором работают специально обученные мастера узкого профиля, позволит нам безошибочно найти источники возможных рисков и оперативно устранить их. В штате нашего центра работают исключительно профессионалы, имеющие не только технические знания, но и обладающие огромным опытом в их применении на практике. Это относится к автомобилям любой марки.
            </div>
        </div>
        <div id="f1">
            <footer >
                <p> ©Белов Александр </p>
            </footer>
        </div>
        <?php
        // put your code here
        ?>


    </body>

</html>
