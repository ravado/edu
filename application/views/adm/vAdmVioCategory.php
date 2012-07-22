<div id="categoryAdd" class="span3 alert">
    <div class="page-header">
        <h4>Добавление категорий.</h4>
    </div>
    <form method="" action="" id="frmAddNewCategory">
        <label>Категория*
            <input type="text" placeholder="Название категории" id="newCatTitle" name="title">
        </label>
        <label>Родительская категория
            <select name="parent_category" class="parentCategory">
                <option value="none">[ -- Нет родительской -- ]</option>
                <? foreach($categories as $category) :?>
                <option value="<?=$category->id_category?>"><?=$category->title?></option>
                <? endforeach; ?>
            </select>
        </label>
    </form>
    <input type="button" class="btn btn-success" id="addCategory" value="Добавить категорию">
    <span class="iconLoading hide"><img src="/stfile/img/1loading.gif" alt="loading"></span>
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
                <td colspan="4" class="">
                    <span class="catTitle"><?=$category->title;?></span>
                        <a class="changeCategory pull-right "><i class="icon-pencil"></i></a>
                        <a class="delCategory pull-right "><i class="icon-trash"></i></a>
                    <div class="hide dvChangeCat">
                        <input type="text" class="catTitle" placeholder="Название" value="<?=$category->title;?>">
                        <input type="hidden" class="catId" value="<?=$category->id_category;?>">
                        <a class="btn btn-primary btn-small updateCat isParentCat">Применить</a>
                        <span class="iconLoading"><img src="/stfile/img/1loading.gif" alt="loading"></span>
                    </div>
                </td>
            </tr>
            <tr>
            <? $counter = 0; $k = 0; $count = $category->subcategories->count_all();
            foreach($category->subcategories->find_all() as $subcategory): ?>
                <td><input type="checkbox" class="subCatCheckbox" value="<?=$subcategory->id_subcategory;?>"></td>
                <td><span class="catTitle"><?=$subcategory->title;?></span>
                    <a class="changeCategory pull-right "><i class="icon-pencil"></i></a>
                    <div class="hide dvChangeCat">
                        <input type="text" class="catTitle" placeholder="Название" value="<?=$subcategory->title;?>">
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
    <label>
        <input type="button" class="btn btn-danger" value="Удалить отмеченные" id="btnDelSubcategories" disabled="disabled">
        <span class="iconLoading hide"><img src="/stfile/img/1loading.gif" alt="loading"></span>
    </label>
</div>

<!--   Модальное окно  -->
<div class="modal hide" id="modDelCategory">
    <input type="hidden" id="idCategoryToDel" value="">
    <div class="modal-header">
        <h3>Удаление родительской категории</h3>
    </div>
    <div class="modal-body">
        <p>Вы действительно хотите удалить родительскую категорию? Все ее подкатегории будут также удалены.</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Отмена</a>
        <a class="btn btn-primary" id="delQuestions">Да удалить категорию</a>
        <span class="iconLoading hide"><img src="/stfile/img/1loading.gif" alt="loading"></span>
    </div>
</div>

