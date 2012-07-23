<div class="controls">
    <div class="input-prepend pull-left">
        <span class="add-on">id вопроса</span>
        <input type="text" id="qustionId" class=" unmargin span1 pull-left" value="<?=$question->id_question;?>">
    </div>
    <input type="button" class="btn" value="найти" id="getQuestion">
    <span class="iconLoading getAnswers"><img src="/stfile/img/1loading.gif" alt="loading"></span>
    <input type="button" class="btn btn-primary" value="добавить ответ" id="addAnswer" data-toggle="collapse" data-target="#demo">
</div>

<div class="well"><?= '<h4>'.$question->title.'</h4>' .'<p>' .$question->full .'</p>'; ?></div>

<div id="demo" class="collapse">
    <form action="" id="frmAddAnswer">
        <input type="hidden" id="hQustionId" name="id_question" value="<?=$question->id_question;?>">
        <div>
            <span class="toolItem">
                <label>Рейтинг
                    <input type="text" class="span1" value="0"  name="rating">
                </label>
            </span>
            <span class="toolItem">
                <label>Время
                    <input name="time" class="dropdown-timepicker input-small" type="text" value="<?=date("H:i");?>">
                </label>
                    <input type="hidden" class="current_time" value="<?=date("H:i");?>">

            </span>
            <span class="toolItem">
                <label>Дата
                    <input type="text" name="date" class="span2" value="<?=date("d-m-Y");?>" id="date">
                    <input type="hidden" class="current_date" value="<?=date("d-m-Y");?>">
                </label>
            </span>
            <span class="toolItem">
                <label>&nbsp;
                    <input type="button" class="btn btn-info block" id="btnSetBest" value="сделать лучшим ответом">
                    <input type="hidden" name="is_best" value="0" id="isBestAnswer">
                </label>
            </span>
            <div style="clear: both;"></div>
        </div>
        <label> Текст ответа
            <textarea id="question" class="" rows="5" cols="20" name="answer"></textarea>
        </label>
    </form>
    <label>
        <input type="button" class="btn btn-success" value="Добавить" id="btnAddAnswer">
        <input type="button" class="btn" data-toggle="collapse" data-target="#demo" value="Отмена">
        <span class="iconLoading addAnswer"><img src="/stfile/img/1loading.gif" alt="loading"></span>
    </label>
</div>
<a id="checkAll"> <i class="icon-check"></i> отметить все </a> <small>/</small>
<a id="uncheckAll"> <i class="icon-share"></i> снять все </a> <small>/</small>
<a id="delChecked"> <i class="icon-trash"></i> удалить отмеченные </a>
<table class="table questionsList" id="tblAnswerList">
    <thead>
        <tr>
            <th class="span0">#</th>
            <th><h3><small>Заголовок вопроса</small></h3></th>
            <th class="span1"></th>
            <th class="span0">
                <span data-original-title="Пользователь" class="tips icon24 icon24-man centered"></span>
            </th>
            <th class="span0">
                <span data-original-title="Рейтинг" class="tips icon24 icon24-graph centered"></span>
            </th>
            <th class="span0">
                <span data-original-title="Дата создания" class="tips icon24 icon24-clock centered"></span>
            </th>
        </tr>
    </thead>
    <tbody>
    <? foreach($question->answers->order_by('is_best','desc')->find_all() as $answer): ?>
    <tr>
        <td><input type="checkbox" class="questionId" value="<?=$answer->id_answer; ?>"></td>
        <td>
            <? if($answer->is_best) echo '<span data-original-title="Лучший ответ" class="isBest tips icon24 icon24-done checked"></span>'; ?>
            <p><?=$answer->text; ?></p>
        </td>
        <td>
            <a class="editAnswer hovered"><i class="icon-pencil"></i></a>
            <a class="delAnswer hovered"><i class="icon-trash"></i></a>
        </td>
        <td class="username"><a><?=$answer->user->username; ?></a></td>
        <td class="rating"><?=$answer->rating; ?></td>
        <td class="time"><?= date('H:i y/m/d',strtotime($answer->public_date)); ?></td>
    </tr>
    <? endforeach; ?>
    </tbody>
</table>