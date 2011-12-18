<div id="dvContent">
    <div class="spnTitle Page">Задать вопрос</div>

    <!--  Блок с информацией по каждому полю справа  -->
    <div class="dvRightHelp">
        <div>
        <p>Не нашли ответа на интересующий Вас вопрос? Так задайте его, при помощи всего трех простых шагов:</p> <br />
            <ul>
                <li>Введите заголовок вашего вопроса</li>
                <li>Распишите его полностью</li>
                <li>Выберите категории</li>
            </ul>
        </div>
    </div>

    <!--  Главный блок с заданием вопроса  -->
    <div class="dvAsk">
        <form action="" method="POST" id="frmAskQuestion">
            <h5 class="textGuide">1 введите краткое содержание вашего вопроса </h5>
            <input type="text" class="inpColor" maxlength="100" placeholder="Введите заголовок вопроса (не более 100 символов)" value="<?php if(!empty($result)){print_r($result['title']);}?>" name="questionTitle">
            <h5 class="textGuide">2 опишите интересующий вас вопрос в полной мере </h5>
            <textarea class="inpColor" placeholder="Введите текст вопроса" name="questionFull"></textarea>
            <h5 class="textGuide">3 выберите категорию к которому максимально относиться ваш вопрос</h5>
            <div class="dvAllCategory">
                <div class="dvQuestCategory">
                    <p class="silver"><input type="checkbox" id="chScience" value="chScience" class="Science" name="science">Наука</p>
                    <p class="silver"><input type="checkbox" id="chComputers" value="chComputers"  class="Computers"  name="computers">Компьютеры</p>
                    <p class="silver"><input type="checkbox" id="chLeisure" value="chLeisure" class="Leisure"  name="leisure">Досуг</p>
                    <p class="silver"><input type="checkbox" id="chSociety" value="chSociety" class="Society" name="society">Общество</p>
                </div>

                <div class="dvQuestSubCategory">
                    <div class="dvSeparateCategory Science">
                        <p><input type="checkbox">физика</p>
                        <p><input type="checkbox">фиа</p>
                        <p><input type="checkbox">физика</p>
                        <p><input type="checkbox">фи</p>
                        <p><input type="checkbox">физика</p>
                        <p><input type="checkbox">фdadadasasx</p>
                        <p><input type="checkbox">физика</p>
                        <p><input type="checkbox">фи</p>
                        <p><input type="checkbox">физика</p>
                        <p><input type="checkbox">фиа</p>
                        <p><input type="checkbox">физика</p>
                        <p><input type="checkbox">фи</p>
                    </div>

                    <div class="dvSeparateCategory Computers">
                        <p><input type="checkbox">железо</p>
                        <p><input type="checkbox">интернет</p>
                        <p><input type="checkbox">windows</p>
                        <p><input type="checkbox">linux</p>
                        <p><input type="checkbox">macintosh</p>
                        <p><input type="checkbox">игры</p>
                    </div>

                    <div class="dvSeparateCategory Leisure">
                        <p><input type="checkbox">общение</p>
                        <p><input type="checkbox">семья</p>
                        <p><input type="checkbox">знакомства</p>
                    </div>

                    <div class="dvSeparateCategory Society">
                        <p><input type="checkbox">карьера</p>
                         <p><input type="checkbox">товары</p>
                         <p><input type="checkbox">города</p>
                         <p><input type="checkbox">человек</p>
                        <p><input type="checkbox">города</p>
                    </div>
                </div>
            </div>

            <div class="ololo" style="float: left; display: inline-block; width: 100%;height: 35px; padding-top: 10px;">
                <h6 style="display: inline-block; margin-top: 10px;color: #a9a9a9;">Выбранные Вами категории:</h6>
            </div>

            <h5 class="textGuide">4 теперь нажмите кнопку "Задать вопрос"</h5><br />
            <a class="btnColor"> Задать вопрос </a>
        </form>
    </div>
</div>