<?php defined('SYSPATH') or die('No direct script access.');

class Model_OrmViOquestSub extends ORM{

    protected $_table_name = 'vio_questions_subcategories';
    protected $_primary_key = 'id_questions_cat';

    //  Связь с другой таблицей через ее id
    protected $_belongs_to = array(
        'subcategory' => array( /* Алиас */
            'model' => 'ormviosubcategory', /* Удаленная модель ОРМ */
            'foreign_key' => 'subcategory_id'), /* Вторичный ключ текущей таблицы по которому идет связь с удаленной */
        'question' => array( /* Алиас */
            'model' => 'ormvioquestion', /* Удаленная модель ОРМ */
            'foreign_key' => 'question_id')
        );
    // Связь с другой таблицей через id текущей
    protected $_has_many = array(
        'votes' => array( /* Алиас по которому можно будет вытягивать записи со связаной таблицы */
            'model' => 'ormviovote', /* Удаленная модель ОРМ */
            'foreign_key' => 'answer_id'), /* Внешний ключ удаленной таблицы */
        'qas' => array( /* Алиас по которому можно будет вытягивать записи со связаной таблицы */
            'model' => 'ormvioqa', /* Удаленная модель ОРМ */
            'foreign_key' => 'answer_id'), /* Внешний ключ удаленной таблицы */
        'question' => array( /* Алиас по которому можно будет вытягивать записи со связаной таблицы */
            'model' => 'ormvioquestion', /* Удаленная модель ОРМ */
            'foreign_key' => 'answer_id', /* Внешний ключ промежуточной таблицы */
            'through' => 'vio_questions_answers', /* Имя промежуточной таблицы */
            'far_key' => 'question_id')
    );

}
