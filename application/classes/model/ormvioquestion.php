<?php defined('SYSPATH') or die('No direct script access.');

class Model_OrmViOquestion extends ORM{

    protected $_table_name = 'vio_questions';
    protected $_primary_key = 'id_question';

    //  Связь с другой таблицей через ее id
    protected $_belongs_to = array(
        'user' => array( /* Алиас */
            'model' => 'ormuser', /* Удаленная модель ОРМ */
            'foreign_key' => 'user_id') /* Вторичный ключ текущей таблицы по которому идет связь с удаленной */
        );
    // Связь с другой таблицей через id текущей
    protected $_has_many = array(
        'favorites' => array( /* Алиас по которому можно будет вытягивать записи со связаной таблицы */
            'model' => 'ormviofavorite', /* Удаленная модель ОРМ */
            'foreign_key' => 'question_id'), /* Внешний ключ удаленной таблицы */
        'answers' => array(
            'model' => 'ormvioanswer',
            'foreign_key' => 'question_id'),
        'qa' => array( /* Алиас по которому можно будет вытягивать записи со связаной таблицы */
            'model' => 'ormvioqa', /* Удаленная модель ОРМ */
            'foreign_key' => 'question_id'), /* Внешний ключ удаленной таблицы */
        'votes' => array( /* Алиас по которому можно будет вытягивать записи со связаной таблицы */
            'model' => 'ormviovote', /* Удаленная модель ОРМ */
            'foreign_key' => 'question_id'), /* Внешний ключ удаленной таблицы */
        'subcategories' => array(
            'model' => 'ormviosubcategory',
            'foreign_key' => 'question_id', /* Внешний ключ промежуточной таблицы */
            'through' => 'vio_questions_subcategories', /* Имя промежуточной таблицы */
            'far_key' => 'subcategory_id'),
        'impropers' => array( /* Алиас по которому можно будет вытягивать записи со связаной таблицы */
            'model' => 'ormvioimproper', /* Удаленная модель ОРМ */
            'foreign_key' => 'improper_id'), /* Внешний ключ удаленной таблицы */
    );

}
