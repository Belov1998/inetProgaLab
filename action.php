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
        <script type="text/javascript" src="JS/jquery-3.2.1.min.js" ></script>
 
        <script type="text/javascript" src="JS/valform.js"></script>

        <title>Акции</title>
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
                   <img class="imgAction" src="Img/karta.jpg">
                    </div>
                    <div class="action">
                    <h4>Диагностика бесплатно</h4>
                    При ремонте диагностика бесплано. 
                    <img class="imgAction" src="Img/podarok_diagnostika.jpg">
                    </div>
                    <div class="action">
                    <h3>Масло в подарок</h3>
                    Замена масла при ремонте на сумму от 5000 рублей.
                    
                    <img class="imgAction" src="Img/zamena_masla_v_dvigatele.jpg">
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
