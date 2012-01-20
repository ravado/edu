<div id="dvContent">
    <div class="spnTitle Page">Вопросы и ответы</div>

<!--    --><?php
//    print_r($result['last'][1]);
//    foreach ($result['last'] as $k=>$v) {
//        echo $k .'<br>';
//        print_r($result['last'][$k]);
//        echo '<br><br>';
//    }


//    Самая пока рабочая версия цикла
//    $key = 0;
//    $started = false;
//    $id_question = null;
//    while($key < count($result['last'])) {
//        if($id_question == $result['last'][$key]['id_question']) {
//            echo 'категория: ' .$result['last'][$key]['stitle'] .'<br>';
//            $key++;
//        } else {
//            if(!$started) {
//
//            } else {
//                echo '</div>';
//            }
//            echo 'Вопрос: ' .$result['last'][$key]['id_question'] .'<br>';
//            $id_question = $result['last'][$key]['id_question'];
//            echo '<div class=' .$result['last'][$key]['id_question'] .'>';
//            $started = true;
//        }
//    }


/*    $some = null;
    foreach ($result['last'] as $key => $val) {
        if ($result['last'][$key]['id_question'] == $some) {
            echo '[subcategory title] = > ' .$result['last'][$key]['stitle'] .'<br>';
        } else {
            $some = $result['last'][$key]['id_question'];

            echo '<h1 class="lenta">' .$result['last'][$key]['id_question'] .'</h1>';
            echo '<br>';
            echo '[subcategory title] = > ' .$result['last'][$key]['stitle'] .'<br>';

        }
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
            <div class="catTitle">
                <a href="" class="catLinks">Наука</a><br />
                <div>
                    <a href="" class="greenCat">физика</a>
                    <a href="" class="greenCat">математика</a>
                    <a href="" class="greenCat">информатика</a>
                    <a href="/questions/category" class="catMore"><img alt="" src="../../../stfile/img/questions/right-icon.png"></a>
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

                    // Вывод популярных вопросов :)
                    $popular = $result['popular'];

                    foreach($popular as $k=>$v){

                        echo '<tr class="border">'
                            .'<td><a href="questions/question/'. $popular[$k]['id_question'] .'"> '.$popular[$k]['title'] .'</a>'
                            .'<span class="spnTags">';
                        foreach($popular[$k][0] as $key=>$val) {
                            echo '<a href="" class="greenCat">' .$popular[$k][0][$key]['stitle'] .'</a>';
                        }
                        echo '</td>'
                            .'<td class="username"><a href="">' .$popular[$k]['username'] .'</a></td>'
                            .'<td class="answers">'.$popular[$k]['answers_count'].'</td>'
                            .'<td class="time">' .date('d/m/y',strtotime($popular[$k]['public_date'])) .'</td></tr>';

                    }



/*
                    $some = null;
                    for ($key = 0; $key < count($result['popular']); $key++) {
                        echo ('<tr class="border">'
                            .'<td><a href="questions/question/'. $result['popular'][$key]['id_question'] .'"> '.$result['popular'][$key]['title'] .'</a>'
                            .'<span class="spnTags">');
                        if($result['popular'][$key]['id_question'] != $some){
                            for ($i = $key; $i<count($result['popular']) ;$i++) {
                                $some = $result['popular'][$key]['id_question'];
                                if($some == $result['popular'][$i]['id_question']) {
                                    echo '<a href="' .$result['popular'][$i]['id_subcategory'] .'" class="greenCat">' .$result['popular'][$i]['stitle'] .'</a>';
                                } else {
                                    $key = $i-1;
                                    break;
                                }

                            }
                        }

                        echo '</span></td>'
                            .'<td class="username"><a href="">' .$result['popular'][$key]['username'] .'</a></td>'
                            .'<td class="answers">'.$result['popular'][$key]['answers_count'].'</td>'
                            .'<td class="time">' .date('G:i',strtotime($result['popular'][$key]['public_date'])) .'</td></tr>';
                    }*/





















/*                    foreach ($result['popular'] as $key=>$v) {
                        $tags = '';
                        $pieces = explode(",", $result['popular'][$key]['tags']);
                        foreach ($pieces as $k=>$v) {
                            $tags .= '<a href="" class="greenCat">' .$pieces[$k] .'</a>';
                        }
                        echo ('<tr class="border">'
                            .'<td><a href="questions/question/'. $result['popular'][$key]['id_question'] .'"> '.$result['popular'][$key]['title'] .'</a>'
                            .'<span class="spnTags">'. $tags .'</span></td>'
                            .'<td class="username"><a href="">' .$result['popular'][$key]['username'] .'</a></td>'
                            .'<td class="answers">'.$result['popular'][$key]['answers_count'].'</td>'
                            .'<td class="time">' .date('d/m/y',strtotime($result['popular'][$key]['public_date'])) .'</td>'
                            .'</tr>');
                    }*/
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

                    // Вывод последних добавленных вопросов :)
                    $last = $result['last'];
                    foreach($last as $k=>$v){
                        echo '<tr class="border">'
                            .'<td><a href="questions/question/'. $last[$k]['id_question'] .'"> '.$last[$k]['title'] .'</a>'
                            .'<span class="spnTags">';
                        foreach($last[$k][0] as $key=>$val) {
                            echo '<a href="" class="greenCat">' .$last[$k][0][$key]['stitle'] .'</a>';
                        }
                        echo '</td>'
                            .'<td class="username"><a href="">' .$last[$k]['username'] .'</a></td>'
                            .'<td class="answers">'.$last[$k]['answers_count'].'</td>'
                            .'<td class="time">' .date('G:i',strtotime($last[$k]['public_date'])) .'</td></tr>';

                    }









                    /*Предыдущий вариант*/
//                    $key = 0;
//                    $started = false;
//                    $id_question = $result['last'][0]['id_question'];
//                    while($key < count($result['last'])) {
//                        if($id_question == $result['last'][$key]['id_question']) {
//
//
//
//                            if(!$started) {
//                                echo '<tr class="border">'
//                                    .'<td><a href="questions/question/'. $result['last'][$key]['id_question'] .'"> '.$result['last'][$key]['title'] .'</a>'
//                                    .'<span class="spnTags">';
//                                    $started = true;
//                            }
//
//                            echo '<a href="' .$result['last'][$key]['id_subcategory'] .'" class="greenCat">' .$result['last'][$key]['stitle'] .'</a>';
//
//                            if($key == count($result['last'])-1) {
//                                echo '<td class="username"><a href="">' .$result['last'][$key]['username'] .'</a></td>'
//                                    .'<td class="answers">'.$result['last'][$key]['answers_count'].'</td>'
//                                    .'<td class="time">' .date('G:i',strtotime($result['last'][$key]['public_date'])) .'</td></tr>';
//                            }
//
//                            $key++;
//                        } else {
//
//                                echo '</span></td>'
//                                    .'<td class="username"><a href="">' .$result['last'][$key-1]['username'] .'</a></td>'
//                                    .'<td class="answers">'.$result['last'][$key-1]['answers_count'].'</td>'
//                                    .'<td class="time">' .date('G:i',strtotime($result['last'][$key-1]['public_date'])) .'</td></tr>';
//
//                            echo '<tr class="border">'
//                                .'<td><a href="questions/question/'. $result['last'][$key]['id_question'] .'"> '.$result['last'][$key]['title'] .'</a>'
//                                .'<span class="spnTags">';
//                            $id_question = $result['last'][$key]['id_question'];
////                            echo '<div class=' .$result['last'][$key]['id_question'] .'>';
//                            $started = true;
//                        }
//                    }






















//                    $count = -1;
//                    $some = $result['last'][0]['id_question'];
/*                    $some = null;
                    for ($key = 0; $key < count($result['last']); $key++) {
                        echo ('<tr class="border">'
                                .'<td><a href="questions/question/'. $result['last'][$key]['id_question'] .'"> '.$result['last'][$key]['title'] .'</a>'
                                .'<span class="spnTags">');
                        if($result['last'][$key]['id_question'] != $some){
                            for ($i = $key; $i<count($result['last']) ;$i++) {
                                $some = $result['last'][$key]['id_question'];
                                if($some == $result['last'][$i]['id_question']) {
                                    echo '<a href="' .$result['last'][$i]['id_subcategory'] .'" class="greenCat">' .$result['last'][$i]['stitle'] .'</a>';
                                } else {
                                    $key = $i-1;
                                    break;
                                }

                            }
                        }

                        echo '</span></td>'
                            .'<td class="username"><a href="">' .$result['last'][$key]['username'] .'</a></td>'
                            .'<td class="answers">'.$result['last'][$key]['answers_count'].'</td>'
                            .'<td class="time">' .date('G:i',strtotime($result['last'][$key]['public_date'])) .'</td></tr>';
                    }
*/











//                        if ($result['last'][$key]['id_question'] == $some) {
////                          echo '[subcategory title] = > ' .$result['last'][$key]['stitle'] .'<br>';
//                            echo $result['last'][$key]['stitle'];
//                            $count = 1;
//                        } else {
//                            $some = $result['last'][$key]['id_question'];
//                            if ($count < 1) {
//                                    echo '</span></td>'
//                                    .'<td class="username"><a href="">' .$result['last'][$key]['username'] .'</a></td>'
//                                    .'<td class="answers">'.$result['last'][$key]['answers_count'].'</td>'
//                                    .'<td class="time">' .date('G:i',strtotime($result['last'][$key]['public_date'])) .'</td></tr>';
//
//                            } else {
//                                echo ('<tr class="border"><td>'
//                                        .'<a href="questions/question/'. $result['last'][$key]['id_question'] .'"> '.$result['last'][$key]['title'] .'</a>'
//                                    .'<span class="spnTags">');
//                            }
//                            $count = -1;
////                            echo '<h1 class="lenta">' .$result['last'][$key]['id_question'] .'</h1>';
////                            echo '<br>';
////                            echo '[subcategory title] = > ' .$result['last'][$key]['stitle'] .'<br>';
//
//

//                        }


//                    foreach ($result['last'] as $key=>$v) {
//                        $tags = '';
//                        $pieces = explode(",", $result['last'][$key]['tags']);
//                        foreach ($pieces as $k=>$v) {
//                            $tags .= '<a href="" class="greenCat">' .$pieces[$k] .'</a>';
//                        }
//                        echo ('<tr class="border">
//                            <td><a href="questions/question/'. $result['last'][$key]['id_question'] .'"> '.$result['last'][$key]['title'] .'</a>'
//                            .'<span class="spnTags">'. $tags .'</span>'
//                            .'</td>'
//                            .'<td class="username"><a href="">' .$result['last'][$key]['username'] .'</a></td>'
//                            .'<td class="answers">'.$result['last'][$key]['answers_count'].'</td>'
//                            .'<td class="time">' .date('G:i',strtotime($result['last'][$key]['public_date'])) .'</td></tr>');
//                    }
                }
                ?>
            </table>

        </div>
    </div>
</div>