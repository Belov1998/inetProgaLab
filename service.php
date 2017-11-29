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
        <title>Услуги</title>
    </head>

    <body>
       <?php include './win.php';?>  <!--        head-->
        <div class="row0">
            <div id="logo">Автосервис</div>
            <a href="#zatemnenie" > <input id="but" type="button" value="Подать заявку" /></a>
            <img id="bgHead" src="img/main.png" alt="красивая картинка" >

            <!--            nav-->
            <nav id="mainav" >
                <ul >
                    <li ><a href="index.php">Главная</a></li>
                    <li class="active"><a  href="service.php">Услуги</a></li>
                    <li><a href="action.php">Акции</a></li>
                    <li><a href="contact.php">Контакты</a></li>
                </ul>
            </nav>
        </div>
        <div id="main-div" >
               
            <div id="main-content" lang="ru">
                <h1>Услуги</h1>
                <div class="service">
                    <img src="Img/remont.jpg">
                    <div class="descriptionofservice">
                        <h3>Ремонт</h3>
                        Безопасность во время движения напрямую зависит от состояния авто.
                        Если машина издаёт свист или стук, то вполне возможно, 
                        что через некоторое время она и вовсе откажется ехать.
                        Поэтому, необходимо отслеживать работоспособность её систем: 
                        cцепления, привода, датчика, радиатора.
                        Неполадки зачастую дают о себе знать при техническом обслуживании,
                        которое следует проходить каждые 10 тысяч километров.
                    </div>
                </div>
                
                <div class="service">
                    <img src="Img/diagnostika.jpg">
                    <div class="descriptionofservice">
                        <h3>Диагностика</h3>
                        За правильную работу автомобиля и ваш комфорт отвечает сразу несколько систем.
                        Чтобы поездки доставляли только радость, а «средство передвижения» служило ещё долгое время,
                        необходимо следить за его состоянием.
                        Детальный осмотр поможет предотвратить или вовремя выявить любую поломку.
                    </div>
                </div>
                
                <div class="service">
                    <img src="Img/pokraska.jpg">
                    <div class="descriptionofservice">
                        <h3>Покраска</h3>
                        Мы осуществляем профессиональную покраску автомобилей с 
                        применением наиболее качественных материалов, 
                        используя специальные технологии поэтапного нанесения слоев грунта, наполнителя и лаков.
                        <br>
                        Профессиональная покраска автомобиля — это само по себе искусство, требующее умелой руки мастера.
                        Покраска кузова подразумевает под собой целый комплекс операций, который необходимо произвести для 
                        полного восстановления всего заводского лакокрасочного покрытия, 
                        включая слои грунта, наполнителя, краски и лака.
                    </div>
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
