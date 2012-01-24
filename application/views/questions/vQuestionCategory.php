<div id="dvContent">
    <div class="spnTitle Page">Вопросы и ответы: категории</div>
    <p class="navigation"><a href="/questions">главная ВиО</a> => все категории</p>
    <div class="shadowBlock dvAllCategory">
        <table cellpadding="0" cellspacing="0">
    <?php
/*
    foreach ($result as $k=>$v) {
        print_r($result[$k]);
        echo '<br>';
    }*/

    $some = -1;
    $count = 0;
    foreach ($result as $key => $val) {
        if ($result[$key]['id_category'] == $some) {
            if ($count == 5) {
                echo '</tr><tr>';
                $count = 0;
            }
            echo '<td><a href="all/category/' .$result[$key]['id_subcategory'] .'" class="greenCat">' .$result[$key]['stitle'] .'</td>';
            $count++;

        } else {
            $some = $result[$key]['id_category'];
            $count = 0;

            if($some != -1) {
                echo '</tr>';
            }
            echo '<th class="lenta" colspan="5">' .$result[$key]['ctitle'] .'</th>';
            echo '<tr>';
            echo '<td><a href="all/category/' .$result[$key]['id_subcategory'] .'" class="greenCat">' .$result[$key]['stitle'] .'</td>';
            $count++;

        }
    }


//    $some = '';
//    foreach ($result as $key => $val) {
//        if ($result[$key]['id_question'] == $some) {
//            echo 'category =>' .$result[$key]['title'];
//            echo '<br>';
//
//        } else {
//            $some = $result[$key]['id_question'];
//            echo 'id_question =>' .$result[$key]['id_question'] .'<br>';
//            echo 'category =>' .$result[$key]['title'];
//            echo '<br>';
//        }
//    }

    ?>

    </table>

    </div>

    </div>
</div>