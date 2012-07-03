<div id="dvContent">
    <div class="spnTitle Page">Тесты: создание своего теста
        <!--   Шаги пользователя по созданию теста     -->
    </div>
    <div class="well pull-right tstHints" style="width: 240px;">
        <h3>Подсказки</h3>
            <div class="tstHintsText">
                Если Вам не совсем ясно предназначение какого либо пункта в ходе создания теста, нажмите иконку с буковкой "i"
                в правом конце синего блока. Это отобразит более подробную информацию о вводимых данных с наглядным примером.
            </div>
    </div>
    <input type="button" class="btn" id="pickfiles" style="display: none;" value="Выбрать">
    <a class="btn hide" id="uploadfiles">Загрузить файлы</a>
    <div id="container"></div>
    <!--  Блок со всем основным содержимым (левый большой блок)  -->
    <ul class="steps">
        <li class="navFirst selected "><a>1 шаг</a></li>
        <li class="navSecond"><a>2 шаг</a></li>
        <li class="navThird"><a>3 шаг</a></li>

    </ul>
    <div class="dvMainPart">
    <form action="/tests/created" method="POST">

        <!--   1 шаг создания теста - Заголовок и категория    -->
        <div id="dvTestStartCreate">
            <div class="alert alert-info">Введите заголовок для Вашего теста
                <a class="close getInfo tstTitle"><i class="icon-info-sign pull-right"></i></a>
            </div>
            <input type="text" class="span9" placeholder="Заголовок" name="testTitle" id="tstTitle">
            <div class="alert alert-info">Выберите категорию к которой больше всего относиться Ваш тест
                <a class="close getInfo tstCat"><i class="icon-info-sign pull-right"></i></a>
            </div>
            <select id="" name="testCategory">
                <option value="1">Информатика</option>
                <option value="2">Физика</option>
                <option value="3">Математика</option>
                <option value="4">Астрология</option>
                <option value="5">Химия</option>
            </select>
            <div class="form-actions">
                <a class="btn btn-primary btn-large disabled" id="btnSecondStep">Следующий шаг</a>
                <a class="btn btn-large" href="/tests/all">Просмотреть готовые тесты</a>
            </div>
        </div>


        <!--   2 шаг создания теста - добавление вопросов и вариантов ответа     -->
        <div class="tabbable tabs-below dvTestAdding ">

            <div class="tab-content " id="testTabs">
                <div class="tab-pane active" id="question-1">
                    <div>
                    <div class="alert alert-info">Введите вопрос.
                        <a class="close getInfo qstTitle"><i class="icon-info-sign pull-right"></i></a>
                    </div>
                    <textarea class="span9 questionTitle" placeholder="Текст вопроса" name="question[0]"></textarea>
                    <input type="button" class="btn btn-info btnAddImgToQuestion hide" value="Добавить изображение">
                    <input type="hidden" class="hQuestionImgName" name="questionImgName[0]" value="none">
                    <span class="spnImgTitle"></span> <img class="imgLoading hide" src="../../../stfile/img/loading.gif">

                    <div class="alert alert-info">Как начислять баллы
                        <a class="close getInfo qstBallMode"><i class="icon-info-sign pull-right"></i></a>
                    </div>
                    <div class="controls">
                        <div class="btn-group ballMode" data-toggle="buttons-radio">
                            <input type="button" class="btn ballModeAll active" value="за весь вопрос сразу" >
                            <input type="hidden" name="ballCalculate[0]" class="hBallMode" value="forAll">
                            <input type="button" class="btn ballModeEach" value="за каждый отдельный ответ">
                        </div>
                        <div class="dvBallMode">
                            <div class="alert alert-info">Сколько балов?
                                <a class="close getInfo qstBallCount"><i class="icon-info-sign pull-right"></i></a>
                            </div>
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-check"></i></span>
                                <input class="span1 inpBallCountAll" type="text" name="ballForQuestion[0]" placeholder='0'>
                            </div>
                        </div>
                        <div class="alert alert-info hide">Будут ли в вариантах ответа использоваться картинки?
                            <a class="close getInfo ansImgMode"><i class="icon-info-sign pull-right"></i></a>
                        </div>
                        <div class="hide btn-group imgMode" data-toggle="buttons-radio">
                            <input type="button" class="btn imgModeNo active" value="Нет не будет" >
                            <input type="hidden" name="imgMode[0]" class="hImgMode" value="no">
                            <input type="button" class="btn imgModeYes" value="Да будут">
                        </div>
                    </div>
                    <div class="alert alert-info">Варианты ответов
                        <a class="close getInfo ansVariant"><i class="icon-info-sign pull-right"></i></a>
                    </div>
                    <input type="text" class="span7 inpNewVariant"   placeholder="Текст ответа">
                    <input type="button" class="btn btnAddNewVariant"  value="Добавить вариант">
                    <table class="table tblVariants">
                        <thead>
                        </thead>
                        <tbody class="tbVariantAnswers">
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>

            <!--   Вкладки    -->
            <h5>Вопросы</h5>
            <hr>
            <ul class="nav nav-pills">
                <li class="active">
                    <a href="#question-1" data-toggle="tab" >1</a>
                </li>

            </ul>
            <a class="btn btn-success unselectable" id="addNewTab"><i class="icon-plus icon-white"></i> Добавить вопрос</a>
            <a class="btn btn-danger unselectable" id="delTestQuestion"><i class="icon-trash icon-white"></i> Удалить вопрос</a>
            <div class="form-actions">
                <a class="btn unselectable btn-primary btn-large disabled" id="btnThirdStep" onclick="toThirdStep()">Следующий шаг</a>
                <a class="btn unselectable btn-large" id="btnReturnToFirstStep">Предыдущий шаг</a>
            </div>
        </div>




        <!--    3 шаг создания теста - дополнительные настройки    -->
        <div class="dvTestFinalize" >
            <div class="alert alert-info">По завершению теста выводить:
                <a class="close getInfo tstOutputMode"><i class="icon-info-sign pull-right"></i></a>
            </div>
            <div class="controls">
                <label class="radio">
                    <input type="radio" name="outputBallMode"  value="answers" checked="">
                    Количество правильных ответов
                </label>
                <label class="radio">
                    <input type="radio" name="outputBallMode"  value="balls">
                    Количество набранных баллов
                </label>
                <label class="radio">
                    <input type="radio" name="outputBallMode"  value="both">
                    Набранные баллы и количество правильных ответов
                </label>
            </div>
            <div class="alert alert-info">Таймер который ограничит время на прохождение теста (в минутах)
                <a class="close getInfo tstTimer"><i class="icon-info-sign pull-right"></i></a>
            </div>
            <div class="controls">
                <label class="checkbox">
                    <input type="checkbox" id="timerYes" value="timer" name="timer">
                    Включить таймер
                </label>
            </div>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-time"></i></span>
                <input class="span1 inpBallCountAll" id="inpTime" disabled="disabled" name="time" type="text">
            </div>

            <div class="alert alert-info">По истечению 30 дней удалить этот тест
                <a class="close getInfo tstDelMode"><i class="icon-info-sign pull-right"></i></a>
            </div>
            <div class="controls">
                <label class="radio">
                    <input type="radio" name="delTest"  value="no" checked="">
                    Нет не нужно его удалять
                </label>
                <label class="radio">
                    <input type="radio" name="delTest"  value="yes">
                    Удаляйте, он больше не пригодиться
                </label>
            </div>
            <div class="alert alert-info">Выводить в случайном порядке...
                <a class="close getInfo tstRandomMode"><i class="icon-info-sign pull-right"></i></a>
            </div>
            <div class="controls">
                <label class="radio">
                    <input type="radio" name="outputRandom"  value="nothing"  checked="">
                    Ничего не нужно перемешивать
                </label>
                <label class="radio">
                    <input type="radio" name="outputRandom"  value="questions">
                    Только вопросы
                </label>
                <label class="radio">
                    <input type="radio" name="outputRandom"  value="answers">
                    Только ответы
                </label>
                <label class="radio">
                    <input type="radio" name="outputRandom"  value="all">
                    И вопросы и ответы
                </label>
            </div>

            <div class="alert alert-info">Хотите защитить паролем ваш тест?
                <a class="close getInfo tstPass"><i class="icon-info-sign pull-right"></i></a>
            </div>
            <div class="controls">
                <label class="radio">
                    <input type="radio" name="passToTest"  value="no"   checked="">
                    Нет, пускай кто хочет его проходит
                </label>
                <label class="radio">
                    <input type="radio" name="passToTest"  value="yes">
                    Да, я хочу что бы тест проходили лишь знающие пароль люди
                </label>
                <input type="password" id="inpPassToTest" disabled="disabled" name="password">
            </div>

<div class="form-actions">
            <input type="submit" class="btn btn-primary btn-large" value="Создать тест">
            <a class="btn btn-large" id="btnReturnToSecondStep">Предыдущий шаг</a>
</div>
    </form>
        </div>
    </div>
</div>