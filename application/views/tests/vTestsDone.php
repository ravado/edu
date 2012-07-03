<div id="dvContent">
    <div class="spnTitle Page">Тесты: тест завершен</div>
    <ul class="breadcrumb">
        <li>
            <a href="/">Главная</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="/tests">Тесты</a> <span class="divider">/</span>
        </li>
        <li class="active"><?php echo $test->title;?></li>
    </ul>
    <div class="dvTstDone">
        <input type="hidden" id="tstId" value="<?php echo $test->id_test; ?>">
        <div class="dvTstDoneTitle">
            <p class="tstDone">Поздравляем вы завершили тест!</p>
            <img  src="/stfile/img/user/ok.png" alt="">
        </div>
        <div class="dvCountAnswers">
            <span class="rtext">Правильных ответов</span>
            <span class="count"><?php echo $correct_count;?></span>
            <span>из</span>
            <span class="count gray"><?php echo $count;?></span>
        </div>
        <p>Как вы оцените даный тест</p>
        <a class="btn btn-success" id="goodTest">Хороший тест</a>
        <a class="btn btn-danger" id="badTest">Плохой тест</a>

    </div>
</div>