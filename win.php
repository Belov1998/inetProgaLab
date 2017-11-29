
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
                                <a href="#"> <input id="close" type="button" value="Закрыть"/>
                                  
                                </a>
                            </div>
                        </div>

                    </div>
                </form> 
            </div>
        </div>
        
