<?php defined('SYSPATH') or die('No direct script access.');

class Model_OrmViOcategory extends ORM{

    protected $_table_name = 'vio_categories';
    protected $_primary_key = 'id_vio_category';

    // Связь с другой таблицей через id текущей
    protected $_has_many = array(
        'subcategories' => array( /* Алиас по которому можно будет вытягивать записи со связаной таблицы */
            'model' => 'ormviosubcategory', /* Удаленная модель ОРМ */
            'foreign_key' => 'category_id' /* Внешний ключ промежуточной таблицы */
        )
    );

}
