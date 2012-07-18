    <div class="extraConfig">
        <div class="extraNav">
            <a class="btnExtra">Дополнительные настройки</a>
        </div>
        <div class="extraContent alert">
            <span>
                <label>Рейтинг</label>
                <input type="text" class="span1" value="0">
            </span>
            <span>
                <label>Время</label>
                <input placeholder="Show as dropdown" class="dropdown-timepicker input-small" type="text">
            </span>
            <span>
                <label>Дата</label>
                <input type="text" class="span2" value="02-16-2012" id="dp1">
            </span>
            <div style="clear: both;"></div>
        </div>
    </div>
    <div class="page-header">
        <h4>Вопрос. <small> краткое название вопроса и полный текст.</small></h4>
    </div>
    <input type="text" id="questionTitle" placeholder="Загловок вопроса" class="span9">
    <textarea id="question" rows="5" cols="20" name="vio_question"></textarea>


    <div class="page-header">
        <h4>Категории. <small> минимум одна должна быть выбрана.</small></h4>
    </div>
    <div class="tabbable tabs-left">
        <!--      Левые табы выбора категории       -->
        <ul class="nav nav-tabs">
            <?php
            // Выводим названия категорий
            $k = 0;
            foreach ($categories as $category){
                if($k == 0) {
                    echo '<li class="active"><a href="#' .$category->id_category .'" data-toggle="tab">' .$category->title .'</a></li>';
                    $k++;
                } else {
                    echo '<li><a href="#' .$category->id_category .'" data-toggle="tab">' .$category->title .'</a></li>';
                }
            }
            ?>
        </ul>
        <div class="tab-content">
            <?php
            // Вывод подкатегорий справа от названий категорий
            $k = 0;
            foreach ($categories as $category){
                if($k == 0) {
                    echo '<div class="tab-pane active" id="' .$category->id_category .'"><table>';
                    $k++;
                } else {
                    echo '<div class="tab-pane" id="' .$category->id_category .'"><table>';
                }
                $x = 0;
                echo '<tr>';
                foreach($category->subcategories->find_all() as $subcategory) {
                    echo '<td><label class="checkbox"><input type="checkbox" value="' .$subcategory->title .'" id="id' .$subcategory->id_subcategory .'" name="tags[]">' .$subcategory->title .'</label></td>';
                    $x++;
                    if($x == 3) {
                        $x = 0;
                        echo '</tr><tr>';
                    }
                }
                echo '</table></div>';
            }
            ?>
        </div>
    </div>
    <div id="dvAddingCategory" style="display: block; ">
        <input type="text" class="inpColor unmargin" id="txtCategory" placeholder="Добавляйте через запятую">
        <a class="btn" id="addNewCategory"><i class="icon-plus"></i> Добавить</a>
    </div>
<div class="dvCategoryLabel">
    <h6>Выбранные категории:</h6>
</div>



