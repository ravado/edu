<?php defined('SYSPATH') or die('No direct script access.');

class Model_OrmViOanswer extends ORM{

    protected $_table_name = 'vio_answers';
    protected $_primary_key = 'id_answer';

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
