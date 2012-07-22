<?
    // Создаем дополнительные теги для ссылок
    if(!is_null($curr_page)) { $ext_page = '&page=' .$curr_page; } else {$ext_page = '';}
    if(!is_null($limit)) { $ext_limit = '&limit=' .$limit; } else {$ext_limit = '';}
    if(!is_null($order_by)) { $ext_orderby = '&orderby=' .$order_by; } else {$ext_orderby = '';}
    if(!is_null($subcat)) { $ext_subcat = '&subcat=' .$subcat; } else {$ext_subcat = '';}
    if(!is_null($status)) { $ext_status = '&status=' .$status; } else {$ext_status = '';}
?>
<div class="dvQuestionListTools">
    <div class="pull-left" style="margin-top: 10px; height: 30px;">
        <span class="toolDelQuestions pull-left">
            <a id="checkAll"> <i class="icon-check"></i> отметить все </a> <small>/</small>
            <a id="uncheckAll"> <i class="icon-share"></i> снять все </a> <small>/</small>
            <a id="delChecked"> <i class="icon-trash"></i> удалить отмеченные </a>
        </span>
        <span class="toolKindList pull-left">
            <a class="<? if($status == 'all' || $status == null) echo 'checked'; ?>" href="?status=all"> <i class="icon-list-alt"></i> все</a> <small>/</small>
            <a class="<? if($status == 'opened') echo 'checked'; ?>" href="?status=opened">  открытые</a> <small>/</small>
            <a class="<? if($status == 'closed') echo 'checked'; ?>" href="?status=closed">  закрытые</a>

        </span><span class="iconLoading pull-left"><img src="/stfile/img/1loading.gif" alt="loading"></span>
    </div>
    <div class="btn-group pull-right">
        <button class="btn btn-small">количество записей</button>
        <button class="btn dropdown-toggle btn-small" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li>
                <a href="?<?=$ext_subcat .$ext_orderby .'&limit=10';  ?>">по 10 записей</a>
            </li>
            <li>
                <? if($count >= 20) echo '<a href="?' .$ext_subcat .$ext_orderby .'&limit=20' .'">по 20 записей</a>'?>
            </li>
            <li>
                <? if($count >= 50) echo '<a href="?' .$ext_subcat .$ext_orderby .'&limit=50' .'">по 50 записей</a>'?>
            </li>
            <li class="divider"></li>
            <li><a href="?limit=<?=$count;?>">все записи</a></li>
        </ul>
    </div>
    <div style="clear: both;"></div>
</div>
<table class="table  questionsList ">
    <thead>
        <tr>
            <th class="span0"></th>
            <th><h3><small>Заголовок вопроса</small></h3></th>
            <th class="span0"> </th>
            <th class="span0"><a  href="?<?=$ext_limit .$ext_subcat. '&orderby=rating' ?>">
                <span data-original-title="Отсортировать по рейтингу" class="tips icon24 icon24-graph <? if($order_by == 'rating') echo 'checked'; ?>"></span></a>
            </th>
            <th class="span0"><a href="?<?=$ext_limit .$ext_subcat. '&orderby=answers' ?>">
                <span data-original-title="Отсортировать по количеству ответов" class="tips icon24 icon24-lamp <? if($order_by == 'answers') echo 'checked'; ?>"></span></a>
            </th>
            <th class="span0 "><a href="?<?=$ext_limit .$ext_subcat. '&orderby=date' ?>">
                <span data-original-title="Отсортировать по дате добавления" class="tips icon24 icon24-clock centered <? if($order_by == 'date') echo 'checked'; ?>"></span></a>
            </th>
        </tr>
    </thead>
    <tbody>
    <? foreach($questions as $question): ?>
        <tr>
            <td><input type="checkbox" class="questionId" value="<?=$question->id_question; ?>"></td>
            <td><a class="<? if($question->is_closed) echo 'qClosed'; ?>" href="<?=$question->id_question;?>"><?=$question->title; ?></a>
                <span class="spnTags">
                    <? foreach($question->subcategories->find_all() as $subcategory): ?>
                    <a href="?<?= $ext_limit .$ext_orderby. '&subcat=' .$subcategory->id_subcategory; ?>" class=""><?=$subcategory->title; ?></a>
                    <? endforeach; ?>
                </span>
            </td>
            <td><a class="delQuestion"><i class="icon-trash"></i></a></td>
            <td class="rating"><?=$question->rating; ?></td>
            <td class="answers"><a><?=$question->answers->count_all(); ?></a></td>
            <td class="time"><?= date('H:i y/m/d',strtotime($question->public_date)); ?></td>
        </tr>
    <? endforeach; ?>
    </tbody>
</table>
<div class="" style="margin-top: 10px;">
</div>
<? if($pages > 1) :?>
<div class="pagination">
    <ul>
    <? $extra_tags = '?' .$ext_limit .$ext_orderby. $ext_subcat; ?>

    <? if($curr_page > 1) echo '<li><a href="'.$extra_tags .'&page=' .($curr_page - 1) .'">«</a></li>'; else echo '<li><a>«</a></li>'?>
    <? for($i = 0; $i < $pages; $i++): ?>
        <? if($curr_page == ($i+1)) {
            echo '<li class="active"><a>'.$curr_page .'</a></li>';
        } else if($i >= 0 && $i < $pages) echo '<li><a href="'.$extra_tags .'&page=' .($i+1) .'">' .($i+1) .'</a></li>'; ?>
    <? endfor; ?>
    <? if($curr_page < $pages) echo '<li><a href="'.$extra_tags .'&page=' .($curr_page + 1) .'">»</a></li>'; else echo '<li><a>»</a></li>'?>
    </ul>
</div>
<? endif; ?>

<!--  Модальное окно  -->
<div class="modal hide" id="modDelQuestion">
    <div class="modal-header">
        <h3>Удаление вопросов</h3>
    </div>
    <div class="modal-body">
        <p>Вы действительно хотите удалить эти вопросы? Все ответы на него будут также удалены.</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Отмена</a>
        <a class="btn btn-primary" id="delQuestions">Удалить</a>

    </div>
</div>