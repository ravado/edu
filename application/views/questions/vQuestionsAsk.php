<div id="dvContent">
    <div class="spnTitle Page">Задать вопрос</div>
    <ul class="breadcrumb">
        <li><a href="/questions">главная ВиО</a><span class="divider">/</span></li>
        <li class="active"><a href="#">задать вопрос</a></li>
    </ul>
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
<?php
//    print_r($categories);
    ?>
    <!--  Главный блок с заданием вопроса  -->
    <div class="dvAsk">
        <form action="/questions/askquestion" method="POST" id="frmAskQuestion">
<!--            <h5 class="textGuide"> </h5>-->
            <div class="alert alert-info">
                <strong>1 шаг. </strong> Введите краткое содержание вашего вопроса.
            </div>
            <input type="text" class="inpColor" maxlength="100" required="required" placeholder="Введите заголовок вопроса (не более 100 символов)" <?php if(!empty($question)){echo ' value="'.$question .'" '; }?> name="questionTitle">
<!--            <h5 class="textGuide">2 опишите интересующий вас вопрос в полной мере </h5>-->
            <div class="alert alert-info">
                <strong>2 шаг. </strong> Опишите интересующий вас вопрос в полной мере.
            </div>
            <textarea class="inpColor" placeholder="Введите текст вопроса" name="questionFull"></textarea>
<!--            <h5 class="textGuide">3 выберите категорию к которому максимально относиться ваш вопрос (от 1 до 5)</h5>-->
            <div class="alert alert-info">
                <strong>3 шаг. </strong> Выберите категорию к которому максимально относиться ваш вопрос (от 1 до 5).
            </div>

<!--            --><?php
/*            foreach ($categories as $k=>$v){
                echo '<tr><th class="catLinks">' .$categories[$k]['ctitle'] .'</th></tr>';
                echo '<td>';
                foreach($categories[$k][0] as $key => $val) {
                    if ($key == 5) {break;}
                    echo '<a href="/questions/category/' .$categories[$k][0][$key]['id_subcategory'] .'" class="greenCat">'
                        .$categories[$k][0][$key]['stitle'] .'</a>';
                }
                echo '</td></tr>';
            }
            */?>
            <!--     Выбор уже существующих категорий       -->
            <div class="tabbable tabs-left">
                <!--      Левые табы выбора категории       -->
                <ul class="nav nav-tabs">
                    <?php
                    // Выводим названия категорий
                    foreach ($categories as $k=>$v){
                        if($k == 0) {
                            echo '<li class="active"><a href="#' .$k .'" data-toggle="tab">' .$categories[$k]['ctitle'] .'</a></li>';
                        } else {
                            echo '<li><a href="#' .$k .'" data-toggle="tab">' .$categories[$k]['ctitle'] .'</a></li>';
                        }
                    }
                    ?>
                </ul>
                <div class="tab-content">
                    <?php
                    // Вывод подкатегорий справа от названий категорий
                    foreach ($categories as $k=>$v){
                        if($k == 0) {
                            echo '<div class="tab-pane active" id="' .$k .'"><table>';
                        } else {
                            echo '<div class="tab-pane" id="' .$k .'"><table>';
                        }
                        $x = 0;
                        echo '<tr>';
                        foreach($categories[$k][0] as $key => $val) {
                            echo '<td><label class="checkbox"><input type="checkbox" value="' .$categories[$k][0][$key]['stitle'] .'" id="id' .$categories[$k][0][$key]['id_subcategory'] .'" name="tags[]">' .$categories[$k][0][$key]['stitle'] .'</label></td>';
                            $x++;
                            if($x == 3) {
                                $x = 0;
                                echo '</tr><tr>';
                            }
//                            echo '<a href="/questions/category/' .$categories[$k][0][$key]['id_subcategory'] .'" class="greenCat">'
//                                .$categories[$k][0][$key]['stitle'] .'</a>';
                        }
                        echo '</table></div>';
                    }
                    ?>
                    <!--<div class="tab-pane active" id="1">
                        <table>
                            <tr>
                                <td>
                                    <label class="checkbox"><input type="checkbox" value="физика" id="0,33" name="tags[]">физика</label>
                                </td>
                                <td>
                                    <label class="checkbox"><input type="checkbox" value="математика" id="0.22" name="tags[]">математика</label>
                                </td>
                            </tr>

                        </table>
                    </div>
                    <div class="tab-pane" id="s">

                    </div>
                    <div class="tab-pane" id="3">

                    </div>-->
                </div>
            </div>

            <div id="dvAskAddCategory">
                <a id="btnAskAddCategory">добавить свою</a>
                <div id="dvAddingCategory">
                    <input type="text" class="inpColor" id="txtCategory" placeholder="Добавляйте через запятую">
                    <a class="btn" id="addNewCategory">Добавить</a>
                </div>
            </div>


            <div class="dvCategoryLabel">
                <h6>Выбранные категории:</h6>
            </div>

<!--            <h5 class="textGuide">4 теперь нажмите кнопку "Задать вопрос"</h5><br />-->

            <div class="alert alert-info">
                Все, практически готово, осталось нажать кнопку "Задать вопрос" и вопрос будет опубликован.
            </div>
            <a class="btnColor" id="btnAskFormSubmit" onclick="addQuestion()"> Задать вопрос </a>
        </form>
    </div>
</div>