<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/styleIndex.css" type="text/css"/>
        <link rel="stylesheet" href="style/stylewin.css" type="text/css"/>
        <title>Главная</title>
    </head>

    <body>
        <div id="zatemnenie">
            <div id="okno">
                <h2 style="text-align:  center"> Заявка</h2> <br>
                <div id="content">
                    <div id="labels">
                        <label>
                            Фамилия
                        </label> 
                        <label>
                            Имя
                        </label>  
                        <label>
                            Отчество
                        </label>  
                    </div>
                    <div id="tfs"> 
                        <input type="text" name="familia" class="tf"/>
                        <input type="text" name="imia" class="tf"/>
                        <input type="text" name="otchestvo" class="tf"/>
                    </div>

                </div>
                <div style=" text-align:  center; width: 100%; margin-top: 50px;">
                    <a href="#"> <input id="close" type="button" value="Закрыть"  height="22px"/></a>
                </div>
            </div>
        </div>
        <!--        head-->
        <div class="row0">
            <div id="logo">Автосервис</div>
            <a href="#zatemnenie" >
                <input id="but" type="button" value="Подать заявку" height="22px"/></a>
            <a href="index.php"style="top:0px;">
                <img src="img/main.png" alt="красивая картинка" width="100%" style="border: 0;">
            </a>
            <!--            nav-->
            <nav id="mainav" >
                <ul >
                    <li class="active"><a href="index.php">Главная</a></li>
                    <li><a class="drop" href="#">Услуги</a>
                        <ul>
                            <li><a href="index.php" >Ремонт</a></li>
                            <li><a href="">Диагностика</a></li>
                            <li><a href="https://yandex.ru/">Покраска</a></li>
                        </ul>
                    </li>
                    <li><a href="">Акции</a></li>
                    <li><a href="contact.php">Контакты</a></li>
                </ul>
            </nav>
        </div>
        <div id="main-div" >
               
            <div id="main-content" lang="ru">
                <h1>Автосервис</h1>
                слова слова слова слова словасловасловасловасловаслова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова 
                слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова слова 
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
