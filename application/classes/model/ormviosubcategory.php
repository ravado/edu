<?php defined('SYSPATH') or die('No direct script access.');

class Model_OrmViOsubcategory extends ORM{

    protected $_table_name = 'vio_subcategories';
    protected $_primary_key = 'id_subcategory';

    //  Связь с другой таблицей через ее id
    protected $_belongs_to = array(
        'category' => array( /* Алиас */
            'model' => 'ormviocategory', /* Удаленная модель ОРМ */
            'foreign_key' => 'category_id'), /* Вторичный ключ текущей таблицы по которому идет связь с удаленной */
        );
    // Связь с другой таблицей через id текущей
    protected $_has_many = array(
        'questions' => array( /* Алиас по которому можно будет вытягивать записи со связаной таблицы */
            'model' => 'ormvioquestion', /* Удаленная модель ОРМ */
            'foreign_key' => 'subcategory_id', /* Внешний ключ промежуточной таблицы */
            'through' => 'vio_questions_subcategories', /* Имя промежуточной таблицы */
            'far_key' => 'question_id')
    );

}
