<?php defined('SYSPATH') or die('No direct script access.');

class Model_OrmViOqa extends ORM{

    protected $_table_name = 'vio_questions_answers';
    protected $_primary_key = 'id_vio_qa';

    // Связь с другой таблицей через id текущей
    protected $_has_many = array(
        'votes' => array( /* Алиас по которому можно будет вытягивать записи со связаной таблицы */
            'model' => 'ormviovote', /* Удаленная модель ОРМ */
            'foreign_key' => 'qa_id'
        )
    );

    protected $_belongs_to = array(
        'question' => array( /* Алиас */
            'model' => 'ormvioquestion', /* Удаленная модель ОРМ */
            'foreign_key' => 'question_id'), /* Вторичный ключ текущей таблицы по которому идет связь с удаленной */
        'answer' => array( /* Алиас */
            'model' => 'ormvioanswer', /* Удаленная модель ОРМ */
            'foreign_key' => 'answer_id'), /* Вторичный ключ текущей таблицы по которому идет связь с удаленной */
    );

}
