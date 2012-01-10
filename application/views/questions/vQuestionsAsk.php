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
        <form action="/questions/askquestion" method="POST" id="frmAskQuestion">
            <h5 class="textGuide">1 введите краткое содержание вашего вопроса </h5>
            <input type="text" class="inpColor" maxlength="100" placeholder="Введите заголовок вопроса (не более 100 символов)" value="<?php if(!empty($question)){echo $question; }?>" name="questionTitle">
            <h5 class="textGuide">2 опишите интересующий вас вопрос в полной мере </h5>
            <textarea class="inpColor" placeholder="Введите текст вопроса" name="questionFull"></textarea>
            <h5 class="textGuide">3 выберите категорию к которому максимально относиться ваш вопрос (от 1 до 5)</h5>
            <div class="dvAllCategory">
                <div class="dvQuestCategory">
                    <p class="silver"><input type="checkbox" id="science" value="наука" class="Science" name="tags[]">наука</p>
                    <p class="silver"><input type="checkbox" id="computers" value="компьютеры"  class="Computers"  name="tags[]">компьютеры</p>
                    <p class="silver"><input type="checkbox" id="leisure" value="досуг" class="Leisure"  name="tags[]">досуг</p>
                    <p class="silver"><input type="checkbox" id="society" value="общество" class="Society" name="tags[]">общество</p>
                </div>

                <div class="dvQuestSubCategory">
                    <div class="dvSeparateCategory Science">
                        <p><input type="checkbox" value="физика" id="physics" name="tags[physics]">физика</p>
                        <p><input type="checkbox" value="математика" id="mathematics" name="tags[mathematics]">математика</p>
                        <p><input type="checkbox" value="история" id="history" name="tags[history]">история</p>
                        <p><input type="checkbox" value="финансы" id="finance" name="tags[finance]">финансы</p>
                        <p><input type="checkbox" value="экономика" id="economy" name="tags[economy]">экономика</p>
                        <p><input type="checkbox" value="философия" id="philosophy" name="tags[philosophy]">философия</p>
                        <p><input type="checkbox" value="биология" id="biology" name="tags[biology]">биология</p>
                        <p><input type="checkbox" value="информатика" id="informatics" name="tags[informatics]">информатика</p>
                    </div>

                    <div class="dvSeparateCategory Computers">
                        <p><input type="checkbox" value="железо" id="hardware" name="tags[]">железо</p>
                        <p><input type="checkbox" value="интернет" id="internet" name="tags[]">интернет</p>
                        <p><input type="checkbox" value="windows" id="windows" name="tags[]">windows</p>
                        <p><input type="checkbox" value="linux" id="linux" name="tags[]">linux</p>
                        <p><input type="checkbox" value="macintosh" id="macintosh" name="tags[]">macintosh</p>
                        <p><input type="checkbox" value="игры" id="games" name="tags[]">игры</p>
                    </div>

                    <div class="dvSeparateCategory Leisure">
                        <p><input type="checkbox" value="общение" id="communication" name="tags[]">общение</p>
                        <p><input type="checkbox" value="семья" id="family" name="tags[]">семья</p>
                        <p><input type="checkbox" value="знакомства" id="dating" name="tags[]">знакомства</p>
                    </div>

                    <div class="dvSeparateCategory Society">
                        <p><input type="checkbox" value="карьера" id="career" name="tags[]">карьера</p>
                        <p><input type="checkbox" value="товары" id="goods" name="tags[]">товары</p>
                        <p><input type="checkbox" value="города" id="city" name="tags[]">города</p>
                        <p><input type="checkbox" value="человек" id="human" name="tags[]">человек</p>
                        <p><input type="checkbox" value="работа" id="work" name="tags[]">работа</p>
                        <p><input type="checkbox" value="политика" id="policy" name="tags[]">политика</p>
                        <p><input type="checkbox" value="закон" id="law" name="tags[]">закон</p>
                    </div>
                </div>
            </div>


            <div id="dvAskAddCategory">
                <a id="btnAskAddCategory">добавить свою</a>
                <div id="dvAddingCategory">
                    <input type="text" class="inpColor" id="txtCategory" placeholder="Добавляйте через запятую">
                    <a class="btnSilver" id="addNewCategory">Добавить</a>
                </div>
            </div>


            <div class="dvCategoryLabel">
                <h6>Выбранные категории:</h6>
            </div>

            <h5 class="textGuide">4 теперь нажмите кнопку "Задать вопрос"</h5><br />
            <a class="btnColor" id="btnAskFormSubmit" onclick="$('#frmAskQuestion').submit()"> Задать вопрос </a>
        </form>
    </div>
</div>