<?

    $subcats = array();
    foreach($question->subcategories->find_all() as $subcategory) {
        array_push($subcats, $subcategory->id_subcategory);
    }
    $public_date = explode(' ',date('d-m-Y H:m' ,strtotime($question->public_date)));
    $date = $public_date[0];
    $time = $public_date[1];
?>
<div class="hiddenQuestion">
    <form action="/questions/askquestion" method="POST" id="frmAddQuestion">
        <input type="hidden" name="id_question" id="hQuestionId" value="<?=$question->id_question;?>">

        <!--  Блок с выеждающими дополнительными инструментами  -->
        <div class="extraConfig">

            <!--     Хедер екстра меню       -->
            <div class="extraHeader">
                <div class="pull-left">
                    <div class="input-prepend pull-left">
                        <span class="add-on">id</span>
                        <input type="text" id="qustionId" class=" unmargin span1 pull-left" value="<?=$question->id_question;?>">
                    </div>
                    <input type="button" class="btn unmargin" value="найти" id="getQuestion"><span class="iconLoading"><img src="/stfile/img/1loading.gif" alt="loading"></span>
                        <a href="/adm/vio/addquestion" ><i class="icon-pencil"></i> создать новый</a> <small class="smallie"> / </small>
                        <a href="/adm/vio/questions" ><i class="icon-list-alt"></i> перейти к списку вопросов</a>
                </div>


                <div class="extraNav pull-right">
                    <a class="btnExtra"><i class="icon-cog"></i> Дополнительные настройки</a>
                </div>
                <div style="clear: both;"></div>
            </div>

            <!--     Контент екстра меню       -->
            <div class="extraContent alert">
                <span class="toolItem">
                    <label>Рейтинг
                        <input type="text" class="span1" value="<?=$question->rating;?>" id="rating"  name="rating">
                    </label>
                </span>
                <span class="toolItem">
                    <label>Время
                        <input name="time" id="time" class="dropdown-timepicker input-small" type="text" value="<?=$time;?>">
                        <input type="hidden" class="current_time" value="<?=$time;?>">
                    </label></span>
                <span class="toolItem">
                    <label>Дата
                        <input type="text" name="date" class="span2" value="<?=$date;?>" id="date">
                        <input type="hidden" class="current_date" value="<?=$date;?>">
                    </label>
                </span>
                <span class="toolItem"><label>Состояние</label>
                    <label class="radio inline">
                        <input type="radio" class="not_closed qstatus" name="is_closed" value="0" <? if(!$question->is_closed) echo 'checked="checked"'; ?>>
                        Открыт
                    </label>
                    <label class="radio inline">
                        <input type="radio" class="is_closed qstatus" name="is_closed" value="1" <? if($question->is_closed) echo 'checked="checked"'; ?>>
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
            <input type="text" class="span10" id="title" maxlength="100"  placeholder="не более 100 символов" name="question_title" value="<?=$question->title;?>">
        </label>
        <label>Текст вопроса
            <textarea id="question" rows="5" cols="20" name="question_full"><?=$question->full; ?></textarea>
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
                                <input type="checkbox" <? if(in_array($subcategory->id_subcategory,$subcats)) {echo 'checked="checked"'; } ?> value="<?= $subcategory->title ?>" id="id<?= $subcategory->id_subcategory ?>" name="tags[]">
                                <?= $subcategory->title; ?>
                            </label>
                        </div>
                        <? endforeach; ?>
                    </div>
                    <div style="clear: both;"></div>
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
                <? foreach($question->subcategories->find_all() as $subcat):?>
                <div class="label-tags" id="id<?=$subcat->id_subcategory?>">
                    <p>
                        <span><?=$subcat->title?></span>
                        <span class="removeTag"></span>
                    </p>
                </div>
                <? endforeach; ?>
            </div>
        </div>

        <a class="btn btn-large btn-primary fixQuestion <? if(!isset($question->id_question)) { echo 'disabled'; } ?>">Обновить вопрос</a>
    </form>
</div>




