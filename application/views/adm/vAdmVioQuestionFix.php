<div>
    <label for="qustionId">Идентификатор вопроса</label>
    <input type="text" id="qustionId" placeholder="Введите id вопроса">
    <input type="button" class="btn" value="найти" id="getQuestion"><span class="iconLoading"><img src="/stfile/img/1loading.gif" alt="loading"></span>
</div>
<div class="hiddenQuestion hide">
    <form action="/questions/askquestion" method="POST" id="frmAddQuestion">
        <input type="hidden" name="id_question" id="hQuestionId" value="">
        <!--  Блок с выеждающими дополнительными инструментами  -->
        <div class="extraConfig">
            <div class="extraNav"><a class="btnExtra">Дополнительные настройки</a></div>
            <div class="extraContent alert">
                <span class="toolItem"><label>Рейтинг<input type="text" class="span1" value="0" id="rating"  name="rating"></label></span>
                <span class="toolItem">
                    <label>Время
                        <input name="time" id="time" class="dropdown-timepicker input-small" type="text" value="<?=date("H:i");?>">
                        <input type="hidden" class="current_time" value="<?=date("H:i");?>">
                    </label></span>
                <span class="toolItem">
                    <label>Дата
                        <input type="text" name="date" class="span2" value="<?=date("d-m-Y");?>" id="date">
                        <input type="hidden" class="current_date" value="<?=date("d-m-Y");?>">
                    </label>
                </span>
                <span class="toolItem"><label>Состояние</label>
                    <label class="radio inline">
                        <input type="radio" class="not_closed qstatus" name="is_closed" value="0" checked="checked">
                        Открыт
                    </label>
                    <label class="radio inline">
                        <input type="radio" class="is_closed qstatus" name="is_closed" value="1" >
                        Закрыт
                    </label>
                </span>
                <div style="clear: both;"></div>
            </div>
        </div>

        <div class="page-header">
            <h4>Вопрос. <small> краткое название вопроса и полный текст.</small></h4>
        </div>
        <label>Заголовок
            <input type="text" class="span9" id="title" maxlength="100"  placeholder="не более 100 символов" name="question_title">
        </label>
        <label>Текст вопроса
            <textarea id="question" rows="5" cols="20" name="question_full"></textarea>
        </label>

        <div class="page-header">
            <h4>Категории. <small> минимум одна должна быть выбрана.</small></h4>
        </div>
        <!--  Блок с выбором категорий вопроса  -->
        <div class="tabbable tabs-left">
            <ul class="nav nav-tabs">
                <? $k = true; foreach ($categories as $category): ?>
                <li class="<?php if($k) { echo 'active'; $k = false; } ?>">
                    <a href="#<?= $category->id_category; ?>" data-toggle="tab"><?= $category->title; ?></a>
                </li>
                <? endforeach; ?>
            </ul>
            <div class="tab-content">
                <?php $k = true; foreach ($categories as $category): $counter = 0;?>
                <div class="tab-pane <?php if($k) { echo 'active'; $k = false; } ?>" id="<?= $category->id_category; ?>">
                    <div class="innerTabPane">
                        <?php foreach($category->subcategories->find_all() as $subcategory): ?>
                        <div class="subcatItem">
                            <label class="checkbox">
                                <input type="checkbox" value="<?= $subcategory->title ?>" id="id<?= $subcategory->id_subcategory ?>" name="tags[]">
                                <?= $subcategory->title; ?>
                            </label>
                        </div>
                        <? endforeach; ?>
                    </div>
                </div>
                <? endforeach; ?>
            </div>
        </div>
        <!--  Блок с добавлением своих меток-категорий  -->
        <div id="dvAddingCategory">
            <label for="txtCategory">Добавить свою категорию</label>
            <input type="text" class="unmargin" id="txtCategory" placeholder="Добавляйте через запятую">
            <a class="btn" id="addNewCategory"><i class="icon-plus"></i> Добавить</a>
            <div class="dvCategoryLabel">
                <h6>Выбранные категории:</h6>
            </div>
        </div>

        <a class="btn btn-large btn-primary fixQuestion">Обновить вопрос</a>
        <a class="btn btn-large clearQuestionForm cancelQuestionFix">Отмена</a>
    </form>
</div>



