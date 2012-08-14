<form action="/questions/askquestion" method="POST" id="frmAddQuestion">
    <!--  Блок с выеждающими дополнительными инструментами  -->
    <div class="extraConfig">
        <div class="extraHeader">
            <a href="/adm/vio/questions" ><i class="icon-list-alt"></i> перейти к списку вопросов</a>
            <div class="extraNav pull-right">
                <a class="btnExtra"><i class="icon-cog"></i> Дополнительные настройки</a>
            </div>
            <div style="clear: both;"></div>
        </div>
        <div class="extraContent alert">
            <span class="toolItem">
                <label>Рейтинг</label>
                    <input type="text" class="span1" value="0"  name="rating">
            </span>
            <span class="toolItem">
                <label>Время</label>
                    <input name="time" class="dropdown-timepicker input-small" type="text" value="<?=date("H:i");?>">
                    <input type="hidden" class="current_time" value="<?=date("H:i");?>">
                </span>
            <span class="toolItem">
                <label>Дата</label>
                    <input type="text" name="date" class="span2" value="<?=date("d-m-Y");?>" id="date">
                    <input type="hidden" class="current_date" value="<?=date("d-m-Y");?>">
            </span>
            <span class="toolItem"><label>Состояние</label>
                <label class="radio inline">
                    <input type="radio" class="not_closed" name="is_closed" value="0" checked="checked">
                    Открыт
                </label>
                <label class="radio inline">
                    <input type="radio" class="is_closed" name="is_closed" value="1" >
                    Закрыт
                </label>
            </span>
        </div>
    </div>

    <div class="page-header">
        <h4>Вопрос. <small> краткое название вопроса и полный текст.</small></h4>
    </div>
    <div class="control-group">
    <label>Заголовок
        <input type="text" class="span10" maxlength="100" id="title"  placeholder="не более 100 символов" name="question_title">
    </label>
    </div>
    <div class="control-group">
    <label>Текст вопроса
        <textarea id="question" class="redactorFirst" rows="5" cols="20" name="question_full"></textarea>
    </label>
    </div>
    <div class="control-group">
    <label>Категории</label>
        <!--  Блок с выбором категорий вопроса  -->
        <div class="tabbable tabs-left">
            <ul class="nav nav-tabs">
                <?php $k = true; foreach ($categories as $category): ?>
                <li class="<?php if($k) { echo 'active'; $k = false; } ?>">
                    <a href="#<?php echo $category->id_category; ?>" data-toggle="tab"><?php echo $category->title; ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
            <div class="tab-content">
                <?php $k = true; foreach ($categories as $category): $counter = 0;?>
                <div class="tab-pane <?php if($k) { echo 'active'; $k = false; } ?>" id="<? echo $category->id_category; ?>">
                    <div class="innerTabPane">
                        <?php foreach($category->subcategories->find_all() as $subcategory): ?>
                        <div class="dv-tags-item">
                            <label class="checkbox">
                                <input type="checkbox" class="existing-tag" value="<? echo $subcategory->title ?>" data-existing-tag-id="<? echo $subcategory->id_subcategory ?>" name="tags[]">
                                <? echo $subcategory->title; ?>
                            </label>
                        </div>
                        <? endforeach; ?>
                    </div>
                </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
    <!--  Блок с добавлением своих меток-категорий  -->
    <div id="dvAddingCategory">
        <div class="control-group">
            <label for="new-tag-title">Добавить свою категорию</label>
            <input type="text" class="unmargin" id="new-tag-title" placeholder="Введите свою категорию">
            <a class="btn" id="btn-add-new-tag"> Добавить</a>
        </div>
        <div class="dvCategoryLabel">
            <ul class="tags" id="selected-tags">
            </ul>
            <div style="clear: both;"></div>
        </div>
    </div>
    <div class="form-actions">

    <a class="btn btn-large btn-primary addQuestion">Задать вопрос</a>
    <a class="btn btn-large clearQuestionForm">Очистить форму</a>
    </div>
</form>




