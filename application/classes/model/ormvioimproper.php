<?php defined('SYSPATH') or die('No direct script access.');

class Model_OrmViOimproper extends ORM{

    protected $_table_name = 'vio_impropers';
    protected $_primary_key = 'id_improper';

    //  Связь с другой таблицей через ее id
    protected $_belongs_to = array(
        'type' => array( /* Алиас */
            'model' => 'ormvioimpropertype', /* Удаленная модель ОРМ */
            'foreign_key' => 'impropertype_id'), /* Вторичный ключ текущей таблицы по которому идет связь с удаленной */
        'user' => array( /* Алиас */
            'model' => 'ormuser', /* Удаленная модель ОРМ */
            'foreign_key' => 'user_id'), /* Вторичный ключ текущей таблицы по которому идет связь с удаленной */
        'question' => array( /* Алиас */
            'model' => 'ormvioquestion', /* Удаленная модель ОРМ */
            'foreign_key' => 'question_id'), /* Вторичный ключ текущей таблицы по которому идет связь с удаленной */
        'answer' => array( /* Алиас */
            'model' => 'ormvioanswer', /* Удаленная модель ОРМ */
            'foreign_key' => 'answer_id'), /* Вторичный ключ текущей таблицы по которому идет связь с удаленной */
    );

}
