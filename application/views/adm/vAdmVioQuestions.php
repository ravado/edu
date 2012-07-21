<div class="page-header">
    <h4>Список вопросов</h4>
</div>
<table class="table  questionsList unmargin">
    <thead>
        <tr>
            <th class="span0"></th>
            <th><h3><small>Заголовок вопроса</small></h3></th>
            <th class="span0"> </th>
            <th class="span0"><span class="icon24 icon24-graph"></span></th>
            <th class="span0"><span class="icon24 icon24-lamp"></span></th>
            <th class="span0 "><span class="icon24 icon24-clock centered"></span></th>
        </tr>
    </thead>
    <tbody>
    <? foreach($questions as $question): ?>
        <tr>
            <td><input type="checkbox"></td>
            <td><a><?=$question->title; ?></a>
                <span class="spnTags">
                    <? foreach($question->subcategories->find_all() as $subcategory): ?>
                    <a href="questions/category/97" class="greenCat"><?=$subcategory->title; ?></a>
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