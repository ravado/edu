<div id="dvAdmTstCreateContent">
    <div class="page-header" style="clear: both;">
        <h3>Создание теста.  <small>создание мегозашибательского теста</small></h3>
    </div>
    <form action="" id="frmAdmCreateTest">
    <h4><a class="tstSettings"> Настройки теста </a></h4>
    <div class="dvTstTools hide">
        <table>
            <thead></thead>
            <tbody>
                <tr>
                    <td>
                        <label>
                        <span class="tstToolTitle">Подкатегория:</span>
                            </label>
                        <select class="span3" name="subcategory">
                            <?php
                            foreach($categories as $key => $category) {
                                echo '<optgroup label="' .$category['title'] .'"></optgroup>';
                                if(!empty($subcategories[$key])) {
                                    foreach($subcategories[$key] as $subcategory) {
                                        echo '<option value="'.$subcategory['id'].'">' .$subcategory['title'] .'</option>';
                                    }
                                }
                            }
                            ?>
                        </select>
                    </td>
                    <td>

                        <label>
                            <span class="tstToolTitle">Защитить паролем</span>
                        </label>
                        <input type="password" name="password">

                    </td>
                    <td>
                        <label>
                            <span class="tstToolTitle"> Таймер (мин.)</span>
                        </label>
                        <input type="text" name="timer">
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="tstToolTitle">По завершению теста выводить:</span>
                        <label class="radio">
                            <input type="radio" name="output_result" value="correct_answers" checked="">
                            Количество правильных ответов
                        </label>
                        <label class="radio">
                            <input type="radio" name="output_result" value="balls">
                            Количество набранных баллов
                        </label>
                        <label class="radio">
                            <input type="radio" name="output_result" value="all">
                            И баллы и ответы
                        </label>
                    </td>
                    <td>
                        <span class="tstToolTitle">Перемешивать:</span>
                        <label class="radio">
                            <input type="radio" name="randomize" value="nothing" checked="">
                            Ничего не перемешивать
                        </label>
                        <label class="radio">
                            <input type="radio" name="randomize" value="questions">
                            Только вопросы
                        </label>
                        <label class="radio">
                            <input type="radio" name="randomize" value="variants">
                            Только ответы
                        </label>
                        <label class="radio">
                            <input type="radio" name="randomize" value="all">
                            И вопросы и ответы
                        </label>
                    </td>
                    <td>


                        <span class="tstToolTitle">Рейтинг теста:</span>
                        <input type="text" class="span1" name="rating">
                        <span class="tstToolTitle">Сколько раз пройден тест:</span>
                        <input type="text" class="span1" name="complete_count">
                        <label class="checkbox">
                            <input type="checkbox" name="need_del"> <span class="tstToolTitle"> Удалить через 30 дней </span>
                        </label>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

        <div id="dvTstInput">
    <h5>Заголовок теста.</h5>

    <input type="text" class="span9" name="tst_title">
    <input class="btn" type="button" name="" value="Создать тест" id="btnAdmCreateTest">
            <img src="../../../stfile/img/loading.gif" class="hide imgLoading" id="tstCreating">
        <input class="btn hide" type="button" name="" value="Создать новый тест" id="btnAdmCreateNewTest">
        </div>
    </form>
    <div id="dvSecondPart" class="">
    <div id="dvRdctQuestion">
        <h5>Вопрос.</h5>
        <textarea id="tstQuestions" rows="5" cols="20" name="tst_question"></textarea>
    </div>
    <div id="dvRdctVariant">
        <h5>Ответ.</h5>
        <textarea id="tstVariants" rows="5" name="tst_variant"></textarea>
    </div>
    <a class="btn addVariant">Добавить вариант</a>
<a class="btn sendQuestion disabled">Отправить вопрос</a>
        <img src="/stfile/img/loading.gif" class="imgLoading hide" id="questionCreating">
        <form action="" id="frmAdmAddQuestion">
            <input name="question[title]" class="hQuestionTitle" type="hidden">
            <input name="question[is_text]" class="hQuestionIsText" type="hidden">
            <input name="tst_id" class="hTstId" type="hidden">
            <table id="tblVariants" class="table hide">
                <thead>
                    <tr>
                        <th class="admVarText">текст</th>
                        <th class="admVarBall"><input type="text" placeholder="балл" name="question[ball]" class="span1"></th>
                        <th class="admVarCorr set-pointer"><img src="/stfile/img/tests/check.png"></th>
                        <th class="admVarIsText set-pointer"><img src="/stfile/img/tests/icon-input.png"></th>
                        <th class="admVarDel set-pointer varDelAll"><img src="/stfile/img/tests/icon-trash.png"></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </form>
    </div>
    <div id="createdQuestions">
        <div style="clear: both;" class="page-header">
            <h3>Созданные вопросы.  <small>уже записаные в базу вопросы и варианты</small></h3>
        </div>
    </div>
</div>
