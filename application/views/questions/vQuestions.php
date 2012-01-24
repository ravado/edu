<div id="dvContent">
    <div class="spnTitle Page">Вопросы и ответы</div>

    <?php
/*        foreach ($categories as $k=>$v) {
            echo $k .'<br>';
            print_r($categories[$k]);
            echo '<br><br>';
        }*/
    ?>

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

            <div class="catMenu">
            <table>

                <?php
                foreach ($categories as $k=>$v){
                    echo '<tr><th class="catLinks">' .$categories[$k]['ctitle'] .'</th></tr>';
                    echo '<td>';
                    foreach($categories[$k][0] as $key => $val) {
                        if ($key == 5) {break;}
                        echo '<a href="/questions/all/category/' .$categories[$k][0][$key]['id_subcategory'] .'" class="greenCat">'
                            .$categories[$k][0][$key]['stitle'] .'</a>';
                    }
                    echo '</td></tr>';
                }
                ?>

            </table>
                <div><a class="lnkAllOther" href="questions/category">Все категории</a></div>
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
                    <th colspan="2" class="lenta">Самые популярные</th>
                    <th align="center" class="icons "><img src="../../../stfile/img/questions/user-icon.png"></th>
                    <th align="center" class="icons "><img src="../../../stfile/img/questions/comment-icon.png"></th>
                    <th align="center" class="icons "><img src="../../../stfile/img/questions/clock-icon.png"></th>
                </tr>

                <?php
                if(!empty($result)) {

                    // Вывод популярных вопросов :)
                    $popular = $result['popular'];


                    foreach($popular as $k=>$v){

                        if(!empty($popular[$k]['id_qfavorite'])) {
                            $favorite = 'favoriteChecked';
                        } else {
                            $favorite = '';
                        }

                        echo '<tr class="border">'
                            .'<td class="tdFavorite-icon">
                                    <span class="favorite ' .$favorite .'"></span>
                                    <input type="hidden" value="' .$popular[$k]['id_question'] .'" name="hQuestionId" />
                                </td>'
                            .'<td><a href="questions/question/'. $popular[$k]['id_question'] .'"> '.$popular[$k]['title'] .'</a>'
                            .'<span class="spnTags">';
                        foreach($popular[$k][0] as $key=>$val) {
                            echo '<a href="questions/all/category/' .$popular[$k][0][$key]['id_subcategory'] .'" class="greenCat">' .$popular[$k][0][$key]['stitle'] .'</a>';
                        }
                        echo '</span></td>'
                            .'<td class="username"><a href="">' .$popular[$k]['username'] .'</a></td>'
                            .'<td class="answers">'.$popular[$k]['answers_count'].'</td>'
                            .'<td class="time">' .date('d/m/y',strtotime($popular[$k]['public_date'])) .'</td></tr>';

                    }


                }


                ?>

            </table>
        </div>

        <!--   Блок с последними задаными вопросами     -->
        <div class="dvLastQuestions shadowBlock">
            <table cellspacing="0px" width="100%">

                <tr class="lenta">
                    <th colspan="2" class="lenta">Новые</th>
                    <th align="center" class="icons "><img src="../../../stfile/img/questions/user-icon.png"></th>
                    <th align="center" class="icons "><img src="../../../stfile/img/questions/comment-icon.png"></th>
                    <th align="center" class="icons "><img src="../../../stfile/img/questions/clock-icon.png"></th>
                </tr>

                <?php
                if(!empty($result)) {

                    // Вывод последних добавленных вопросов :)
                    $last = $result['last'];
                    foreach($last as $k=>$v){

                        if(!empty($last[$k]['id_qfavorite'])) {
                            $favorite = 'favoriteChecked';
                        } else {
                            $favorite = '';
                        }

                        echo '<tr class="border">'
                            .'<td class="tdFavorite-icon">
                                    <span class="favorite ' .$favorite .'"></span>
                                    <input type="hidden" value="' .$last[$k]['id_question'] .'" name="hQuestionId" />
                                </td>'
                            .'<td><a href="questions/question/'. $last[$k]['id_question'] .'"> '.$last[$k]['title'] .'</a>'
                            .'<span class="spnTags">';
                        foreach($last[$k][0] as $key=>$val) {
                            echo '<a href="questions/all/category/' .$last[$k][0][$key]['id_subcategory'] .'" class="greenCat">' .$last[$k][0][$key]['stitle'] .'</a>';
                        }
                        echo '</td>'
                            .'<td class="username"><a href="">' .$last[$k]['username'] .'</a></td>'
                            .'<td class="answers">'.$last[$k]['answers_count'].'</td>'
                            .'<td class="time">' .date('G:i',strtotime($last[$k]['public_date'])) .'</td></tr>';

                    }


                }
                ?>
            </table>
            <div><a class="lnkAllOther" href="questions/all">Все вопросы</a></div>
        </div>

    </div>
</div>