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
        <div id="zatemnenie">
    <div id="okno">
        <form action="PHP/validation.php"  id="form_test" method="post">
            <h2 style="text-align:  center"> Заявка</h2> 
            <div id="content">
                <div id="labels">
                    <label>
                        Имя
                    </label> 
                    <label>
                        Авто
                    </label>  
                    <label>
                        Номер телефона
                    </label>  
                    <label style="margin-bottom: 15px">
                        Почта
                    </label>  
                    <div style=" text-align:  center; width: 100%; ">
                        <input id="close" type="submit" value="Отправить"  /> 
                    </div>
                </div>
                <div id="tfs"> 
                    <div class="tfanderror">
                        <label id="imia_error" class="error"></label>
                        <input type="text"  id="imia"  name="imia" class="tf" value=""/>
                    </div>
                    <div class="tfanderror">
                        <label id="avto_error" class="error"></label>
                        <input type="text"  id="avto"  name="avto" class="tf" value=""/>
                    </div>
                    <div class="tfanderror">
                        <label id="nomer_error" class="error"></label>
                        <input type="text" id="nomer" name="nomer" class="tf" value=""/>
                    </div>
                    <div class="tfanderror" style="margin-bottom: 5px">
                        <label id="email_error" class="error"></label>
                        <input type="text" id="email" name="email" class="tf" value=""/>
                    </div>                          
                    <div style=" text-align:  center; width: 100%; ">
                        <a href="#"> <input id="close" type="button" value="Закрыть"/></a>
                    </div>
                </div>
            </div>
        </form> 
    </div>
</div>
        <!--        head-->
        <div class="row0">
            <div id="logo">Автосервис</div>
            <a href="#zatemnenie" > <input id="but" type="button" value="Подать заявку" /></a>
            <img id="bgHead" src="Img/main.png" alt="красивая картинка" >

            <!--            nav-->
            <nav id="mainav" >
                <ul >
                    <li ><a href="main">Главная</a></li>
                    <li><a  href="service">Услуги</a>

                    </li>
                    <li><a href="action">Акции</a></li>
                    <li><a href="contact">Контакты</a></li>
                </ul>
            </nav>
        </div>
              <?php  include 'application/views/'.$content_view; ?>
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
