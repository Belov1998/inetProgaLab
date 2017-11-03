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
        <title>Контакты</title>
    </head>

    <body>
        <div id="zatemnenie">
            <div id="okno">
                <h2 style="text-align:  center"> Заявка</h2> <br>
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
                        <label>
                            Почта
                        </label>  
                    </div>
                    <div id="tfs"> 
                        <input type="text" name="imia" class="tf"/>
                        <input type="text" name="avto" class="tf"/>
                        <input type="text" name="nomer" class="tf"/>
                        <input type="text" name="e-mail" class="tf"/>
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
                    <li ><a href="index.php">Главная</a></li>
                    <li><a href="service.php">Услуги</a>
<!--                        <ul>class="drop" 
                            <li><a href="index.php" >Ремонт</a></li>
                            <li><a href="">Диагностика</a></li>
                            <li><a href="https://yandex.ru/">Покраска</a></li>
                        </ul>-->
                    </li>
                    <li><a href="action.php">Акции</a></li>
                    <li class="active"><a href="contact.php">Контакты</a></li>
                </ul>
            </nav>
        </div>
        <div id="main-div">
            <div id="main-content" lang="ru">
                <h1>Контакты</h1>
                <div id="contacts">
                    <p><strong>Телефон: </strong> </p><span> 8(8422)12-34-56</span><br>
                    <p><strong>E-mail :  </strong> </p><span>  email@mail.ru</span><br>

              <p> <strong> Адресс      : </strong> </p><span> г. Ульяновск автосервис</span><br>
              <p> <strong> Режим работы:</strong> </p><span> 8:00-22:00</span><br>
</div>


                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d148966.13581767405!2d48.32613630555343!3d54.31109641001064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415d365f8f42b3f5%3A0x2152ff0847091be4!2z0KPQu9GM0Y_QvdC-0LLRgdC6LCDQo9C70YzRj9C90L7QstGB0LrQsNGPINC-0LHQuy4!5e0!3m2!1sru!2sru!4v1508238921605" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

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
