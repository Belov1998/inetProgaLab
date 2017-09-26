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
        <title>Главная</title>
    </head>
    <body>
        <div id="mainimg"> 
            <p id="logo">Автосервис</p>
            <input id="but" type="button" value="Подать заявку" height="22px"/>
            <a href="index.php"style="top:0px;">
                <img src="img/main.png" alt="красивая картинка" width="100%" style="border: 0;">
            </a>
        </div>
        <!--        head-->

        <div class="wrapper row1">
            <header id="header" > 

                <!--            nav-->
                <center>
                    <nav id="mainav" class="fl_right">
                        <ul >
                            <li class="active"><a href="index.php">Главная</a></li>
                            <li><a class="drop" href="#">Услуги</a>
                                <ul>
                                    <li><a href="" >Ремонт</a></li>
                                    <li><a href="">Диагностика</a></li>
                                    <li><a href="">Покраска</a></li>
                                </ul>
                            </li>
                            <li><a href="pages/contacts.html">Акции</a></li>
                            <li><a href="pages/contacts.html">Контакты</a></li>
                        </ul>
                    </nav>

                </center>

            </header >
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
