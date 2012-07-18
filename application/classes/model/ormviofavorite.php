<?php defined('SYSPATH') or die('No direct script access.');

class Model_OrmViOfavorite extends ORM{

    protected $_table_name = 'vio_favorites';
    protected $_primary_key = 'id_favorite';

    //  Связь с другой таблицей через ее id
    protected $_belongs_to = array(
        'user' => array( /* Алиас */
            'model' => 'ormuser', /* Удаленная модель ОРМ */
            'foreign_key' => 'user_id'), /* Вторичный ключ текущей таблицы по которому идет связь с удаленной */
        'question' => array( /* Алиас */
            'model' => 'ormvioquestion', /* Удаленная модель ОРМ */
            'foreign_key' => 'question_id'), /* Вторичный ключ текущей таблицы по которому идет связь с удаленной */
    );
}
