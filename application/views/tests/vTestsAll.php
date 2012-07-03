<div id="dvContent">
    <div class="spnTitle Page">Тесты: все тесты</div>
    <ul class="breadcrumb">
        <li>
            <a href="/">Главная</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="/tests">Тесты</a> <span class="divider">/</span>
        </li>
        <li class="active">Все тесты</li>
    </ul>
    <div class="tstSidebar hide">

        <div class="widgetBlock tstSbCategory">
            <div class="widgetTitle">Категории</div>
            <div class="widgetInner">
            <div class="accordion" id="accordion2">
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                            Искусство
                        </a>
                    </div>
                    <div id="collapseOne" class="accordion-body in" style="height: auto; ">
                        <div class="accordion-inner">
                            <label class="checkbox">
                                <input type="checkbox">Музыка
                            </label>
                            <label class="checkbox">
                                <input type="checkbox">Живопись
                            </label>
                            <label class="checkbox">
                                <input type="checkbox">Кино
                            </label>
                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                            Техника
                        </a>
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse" style="height: 0px; ">
                        <div class="accordion-inner">
                            <label class="checkbox">
                                <input type="checkbox">Автомобили
                            </label>
                            <label class="checkbox">
                                <input type="checkbox">Мотоциклы
                            </label>
                            <label class="checkbox">
                                <input type="checkbox">Гаджеты
                            </label>
                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                            Учебные
                        </a>
                    </div>
                    <div id="collapseThree" class="accordion-body collapse" style="height: 0px; ">
                        <div class="accordion-inner">
                            <label class="checkbox">
                                <input type="checkbox">Химия
                            </label>
                            <label class="checkbox">
                                <input type="checkbox">Физика
                            </label>
                            <label class="checkbox">
                                <input type="checkbox">Геометрия
                            </label>
                            <label class="checkbox">
                                <input type="checkbox">Математика
                            </label>
                            <label class="checkbox">
                                <input type="checkbox">Алгебра
                            </label>
                            <label class="checkbox">
                                <input type="checkbox">География
                            </label>
                        </div>
                    </div>
                </div>
            </div>
                </div>
        </div>
        <div class="widgetBlock">
            <div class="widgetTitle">Вид тестов</div>
            <div class="widgetInner">
                <label class="checkbox">
                    <input type="checkbox">С паролем
                </label>
                <label class="checkbox">
                    <input type="checkbox">Без пароля
                </label>
            </div>
        </div>
    </div>
    <div class="tstContent">

        <div class="tstList">
            <table class="tblTstList">
                <tr class="widgetTitle">
                    <th style="width:500px;" colspan="2">Cписок тестов</th>
                    <th class="icons" data-original-title="Пользователь создавшый тест"><img src="/stfile/img/questions/user-icon.png"></th>
                    <th class="icons" data-original-title="Сколько раз пройден тест"><img src="/stfile/img/tests/check.png"></th>
                    <th class="icons" data-original-title="Рейтинг теста"><img src="/stfile/img/tests/rating.png"></th>
                </tr>
                <?php

                for($i = 0; $i < 3; $i++) {
                    foreach($all_tests as $test) {
                        echo '<tr>';
                        $is_pass_tags = '';
                        if(empty($test->password)) {
                            $is_pass_tags = 'hide';
                        }
                        echo '<td class="tst-locked"><span class="locked-icon ' .$is_pass_tags .'"></span></td>';
                        echo '<td><a href="/tests/usertest/' .$test->id_test .'">' .$test->title .'</a></td>';
                        echo '<td class="pagination-centered"><a href="#">' .$test->user->username .'</a></td>';
                        echo '<td class="pagination-centered">' .$test->complete_count .'</td>';
                        echo '<td class="pagination-centered">' .$test->rating .'</td>';
                        echo '</tr>';
                    }
                }
                ?>

            </table>
        </div>
    </div>
</div>
