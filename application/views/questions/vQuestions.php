<div id="dvContent">
    <div class="spnTitle Page">Вопросы и ответы</div>

    <!-- Блок меню слева   -->
    <div class="dvMenu">
        <div class="dvUser shadowBlock">
            <h4 class="lenta">Профиль</h4>
            <form action="" name="frmUserAuth">
                <a href="#" class="btnColor">Авторизироваться</a>
            </form>
        </div>
        <div class="dvCategory shadowBlock">
            <h4 class="lenta">Категории</h4>
            <div class="catTitle">
                <a href="" class="catLinks">Наука</a><br />
                <div>
                    <a href="" class="greenCat">физика</a>
                    <a href="" class="greenCat">математика</a>
                    <a href="" class="greenCat">информатика</a>
                    <a href="" class="catMore"><img alt="" src="../../../stfile/img/questions/right-icon.png"></a>
                </div>
            </div>
            <div class="catTitle">
                <a href="" class="catLinks">Досуг</a><br />
                <div>
                    <a href="" class="greenCat">дизайн</a>
                    <a href="" class="greenCat">кино</a>
                    <a href="" class="greenCat">хобби</a>
                    <a href="" class="catMore"><img alt="" src="../../../stfile/img/questions/right-icon.png"></a>
                </div>
            </div>
            <div class="catTitle">
                <a href="" class="catLinks">Компьютеры</a><br />
                <div>
                    <a href="" class="greenCat">игры</a>
                    <a href="" class="greenCat">windows</a>
                    <a href="" class="greenCat">железо</a>
                    <a href="" class="catMore"><img alt="" src="../../../stfile/img/questions/right-icon.png"></a>
                </div>
            </div>
        </div>
    </div>

    <!--  Блок вопросов  -->
    <div class="dvQuestions">

        <!--    Блок с поиском    -->
        <div class="dvSearch">
            <form action="/questions/ask" class="frmQuestion" name="frmQuestion" method="POST" onsubmit="$('[name=btnSearch]').click(); return false;">
                <input type="text" name="question" maxlength="300" id="search" placeholder="Введите свой вопрос" required>
                <input type="button" name="btnSearch" value="Найти" class="submit">
                <input type="button" name="btnAsk" value="Спросить" onclick="form.submit()" class="submit">
            </form>
        </div>

        <div id="searchResult"></div>
        <!--   Блок с топом вопросов     -->
        <div class="dvTop shadowBlock">
            <table cellspacing="0" width="100%">
                <tr class="lenta">
                    <th class="lenta">Самые популярные</th>
                    <th align="center" class="icons "><img src="../../../stfile/img/questions/user-icon.png"></th>
                    <th align="center" class="icons "><img src="../../../stfile/img/questions/comment-icon.png"></th>
                    <th align="center" class="icons "><img src="../../../stfile/img/questions/clock-icon.png"></th>
                </tr>

                <?php
                if(!empty($result)) {
                    $tim = date('m');
                    foreach ($result['popular'] as $key=>$v) {
                        $tags = '';
                        $pieces = explode(",", $result['popular'][$key]['tags']);
                        foreach ($pieces as $k=>$v) {
                            $tags .= '<a href="" class="greenCat">' .$pieces[$k] .'</a>';
                        }
                        echo ('<tr class="border">
                            <td><a href="questions/question/'. $result['popular'][$key]['id_question'] .'"> '.$result['popular'][$key]['title'] .'</a>'
                            .'<span class="spnTags">'. $tags .'</span>'
                            .'</td>'
                            .'<td class="username"><a href="">' .$result['popular'][$key]['username'] .'</a></td>'
                            .'<td class="answers">'.$result['popular'][$key]['answers_count'].'</td>'
                            .'<td class="time">' .date('d/m/y',strtotime($result['popular'][$key]['public_date'])) .'</td></tr>');
                    }
                }
                ?>

            </table>
        </div>

        <!--   Блок с последними задаными вопросами     -->
        <div class="dvLastQuestions shadowBlock">
            <table cellspacing="0px" width="100%">

                <tr class="lenta">
                    <th class="lenta">Новые</th>
                    <th align="center" class="icons "><img src="../../../stfile/img/questions/user-icon.png"></th>
                    <th align="center" class="icons "><img src="../../../stfile/img/questions/comment-icon.png"></th>
                    <th align="center" class="icons "><img src="../../../stfile/img/questions/clock-icon.png"></th>
                </tr>

                <?php
                if(!empty($result)) {
                    $tim = date('m');
                    foreach ($result['last'] as $key=>$v) {
                        $tags = '';
                        $pieces = explode(",", $result['last'][$key]['tags']);
                        foreach ($pieces as $k=>$v) {
                            $tags .= '<a href="" class="greenCat">' .$pieces[$k] .'</a>';
                        }
                        echo ('<tr class="border">
                            <td><a href="questions/question/'. $result['last'][$key]['id_question'] .'"> '.$result['last'][$key]['title'] .'</a>'
                            .'<span class="spnTags">'. $tags .'</span>'
                            .'</td>'
                            .'<td class="username"><a href="">' .$result['last'][$key]['username'] .'</a></td>'
                            .'<td class="answers">'.$result['last'][$key]['answers_count'].'</td>'
                            .'<td class="time">' .date('G:i',strtotime($result['last'][$key]['public_date'])) .'</td></tr>');
                    }
                }
                ?>
            </table>

        </div>
    </div>
</div>