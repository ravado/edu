<?php defined('SYSPATH') or die('No direct script access.');

class Model_OrmViOvote extends ORM{

    protected $_table_name = 'vio_votes';
    protected $_primary_key = 'id_vote';

    //  Связь с другой таблицей через ее id
    protected $_belongs_to = array(
        'user' => array( /* Алиас */
            'model' => 'ormuser', /* Удаленная модель ОРМ */
            'foreign_key' => 'user_id'), /* Вторичный ключ текущей таблицы по которому идет связь с удаленной */
        'qa' => array( /* Алиас */
            'model' => 'ormvioqa', /* Удаленная модель ОРМ */
            'foreign_key' => 'qa_id'), /* Вторичный ключ текущей таблицы по которому идет связь с удаленной */
    );
    // Связь с другой таблицей через id текущей
//    protected $_has_many = array(
//        'questions' => array( /* Алиас по которому можно будет вытягивать записи со связаной таблицы */
//            'model' => 'ormvioqa', /* Удаленная модель ОРМ */
//            'foreign_key' => 'question_id' /* Внешний ключ промежуточной таблицы */
//            ),
//        'answers' => array( /* Алиас по которому можно будет вытягивать записи со связаной таблицы */
//            'model' => 'ormvioqa', /* Удаленная модель ОРМ */
//            'foreign_key' => 'answer_id' /* Внешний ключ промежуточной таблицы */
//        )
//    );

}
