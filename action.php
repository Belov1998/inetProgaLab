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
        <link rel="stylesheet" href="style/stylewin.css" type="text/css"/>
        <title>Акции</title>
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
                 <img src="img/main.png" alt="красивая картинка" width="100%" style="border: 0;padding: 0;margin: 0;">
            
            <!--            nav-->
            <nav id="mainav" >
                <ul >
                    <li ><a href="index.php">Главная</a></li>
                    <li><a  href="service.php">Услуги</a></li>
                    <li class="active"><a href="action.php">Акции</a></li>
                    <li><a href="contact.php">Контакты</a></li>
                </ul>
            </nav>
        </div>
        <div id="main-div" >
               
            <div id="main-content" lang="ru">
                <h1>Акции</h1>
                <div class="action">
                    <h4>Карта скидок</h4>
                   Карта скидок в подарок при ремонте на сумму от 3000 рублейю.
                   <img src="Img/karta.jpg">
                    </div>
                    <div class="action">
                    <h4>Диагностика бесплатно</h4>
                    При ремонте диагностика бесплано. 
                    <img src="Img/podarok_diagnostika.jpg">
                    </div>
                    <div class="action">
                    <h3>Масло в подарок</h3>
                    Замена масла при ремонте на сумму от 5000 рублей.
                    
                    <img src="Img/zamena_masla_v_dvigatele.jpg">
                    </div>
                    
              
                
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
