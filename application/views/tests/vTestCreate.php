<div id="dvContent">
    <div class="spnTitle Page">Тесты: Создание нового</div>

    <div class="tabbable tabs-below dvTestAdding">
        <!--      Нижние табы выбора вопроса       -->

        <div class="tab-content " id="testTabs">
            <div class="tab-pane active" id="question-1">
                <div class="alert alert-info">Введите вопрос.</div>
                <input type="text" class="span9" placeholder="Текст вопроса">
                <input type="button" class="btn btn-info" value="Добавить изображение">
                <div class="alert alert-info">Как начислять баллы</div>
                <div class="controls">
                    <div class="btn-group ballMode" data-toggle="buttons-radio">
                        <input type="button" class="btn ballModeAll active" value="за весь вопрос сразу" >
                        <input type="button" class="btn ballModeEach" value="за каждый отдельный ответ">
                    </div>
                    <!--<label class="radio ballModeAll">
                        <input type="radio" name="ballMode" value="forAll"  checked="">
                        За весь вопрос сразу
                    </label>-->
                    <div class="dvBallMode">
                        <div class="alert alert-info">Сколько балов?</div>
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-check"></i></span>
                            <input class="span1 inpBallCountAll" type="text">
                        </div>
                    </div>
                    <!--<label class="radio ballModeEach">
                        <input type="radio" name="ballMode" value="forEach">
                        За каждый правильный ответ
                    </label>-->
                    <div class="alert alert-info">Будут ли в вариантах ответа использоваться картинки?</div>
                    <div class="btn-group imgMode" data-toggle="buttons-radio">
                        <input type="button" class="btn imgModeNo active" value="Нет не будет" >
                        <input type="button" class="btn imgModeYes" value="Да будут">
                    </div>
                    <!--<label class="radio imgModeNo">
                        <input type="radio" name="imgMode" value="imgNo"  checked="">
                        Нет не будет
                    </label>
                    <label class="radio imgModeYes">
                        <input type="radio" name="imgMode" value="imgYes">
                        Да будут
                    </label>-->
                </div>
                <div class="alert alert-info">Варианты ответов</div>
                <input type="text" class="span6 inpNewVariant" required=required placeholder="Текст ответа"> &nbsp
                <input type="button" class="btn btnAddNewVariant"  value="Добавить вариант">
                <table class="table tblVariants">
                    <thead>
                    </thead>
                    <tbody class="tbVariantAnswers">
                    </tbody>
                </table>
            </div>


        </div>

        <!--   Вкладки    -->
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#question-1" data-toggle="tab">1 вопрос</a>
            </li>

        </ul>
        <a class="btn btn-success" id="addNewList"> Добавить вопрос</a>
        <a class="btn ">Завершить</a>

    </div>
</div>