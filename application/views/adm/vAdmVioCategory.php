<div id="categoryAdd" class="span3 alert">
    <div class="page-header">
        <h4>Добавление категорий.</h4>
    </div>
    <form method="" action="" id="frmAddNewCategory">
        <label>Категория*
            <input type="text" placeholder="Название категории" id="newCatTitle" name="title">
        </label>
        <label>Ярлык
            <input type="text" placeholder="Метка для url" id="newCatLabel" name="label">
        </label>
        <label>Родительская категория
            <select name="parent_category" class="parentCategory">
                <option value="none">------</option>
                <? foreach($categories as $category) :?>
                <option value="<?=$category->id_category?>"><?=$category->title?></option>
                <? endforeach; ?>
            </select>
        </label>
    </form>
    <input type="button" class="btn btn-success" id="addCategory" value="Добавить категорию">
    <span class="iconLoading"><img src="/stfile/img/1loading.gif" alt="loading"></span>
</div>

<div class="pull-right span6">
    <div class="page-header">
        <h4>Список категорий.</h4>
    </div>
    <table class="table" id="tblCategoriesList">
        <thead>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </thead>
        <? foreach($categories as $category) :?>
        <tbody class="tbCategory" id="catId<?=$category->id_category;?>">
            <tr>
                <td colspan="4" class="alert alert-info">
                    <span class="catTitle"><?=$category->title;?></span>
                        <a class="changeCategory pull-right "><i class="icon-pencil"></i></a>
                    <div class="hide dvChangeCat">
                        <input type="text" class="catTitle" placeholder="Название" value="<?=$category->title;?>">
                        <input type="text" class="catLabel" placeholder="Ярлык" value="<?=$category->label;?>">
                        <input type="hidden" class="catId" value="<?=$category->id_category;?>">
                        <a class="btn btn-primary btn-small updateCat isParentCat">Применить</a>
                        <span class="iconLoading"><img src="/stfile/img/1loading.gif" alt="loading"></span>
                    </div>
                </td>
            </tr>
            <tr>
            <? $counter = 0; $k = 0; $count = $category->subcategories->count_all();
            foreach($category->subcategories->find_all() as $subcategory): ?>
                <td><input type="checkbox"></td>
                <td><span class="catTitle"><?=$subcategory->title;?></span>
                    <a class="changeCategory pull-right "><i class="icon-pencil"></i></a>
                    <div class="hide dvChangeCat">
                        <input type="text" class="catTitle" placeholder="Название" value="<?=$subcategory->title;?>">
                        <input type="text" class="catLabel" placeholder="Ярлык" value="<?=$subcategory->label;?>">
                        <input type="hidden" class="catId" value="<?=$subcategory->id_subcategory;?>">
                        <a class="btn btn-primary btn-small updateCat">Применить</a>
                        <span class="iconLoading"><img src="/stfile/img/1loading.gif" alt="loading"></span>
                    </div>
                </td>
                <? if($counter == 1) { echo '</tr><tr>'; $counter = 0; } else{ ++$counter; }?>
                <? if(($k == ($count - 1)) && ($counter == 1)) { echo '<td class="checkboxReady"></td><td class="subcatReady"></td>';} ++$k; ?>
            <? endforeach; ?>
            </tr>
        </tbody>
        <? endforeach; ?>
    </table>
    <input type="button" class="btn btn-danger pull-right" value="Удалить отмеченные" disabled="disabled">

</div>

