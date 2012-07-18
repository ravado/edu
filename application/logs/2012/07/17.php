<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-17 15:19:50 --- ERROR: ErrorException [ 1 ]: Class 'Model_Mquestions' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2012-07-17 15:19:50 --- STRACE: ErrorException [ 1 ]: Class 'Model_Mquestions' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-17 15:34:35 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.vio_questions' doesn't exist [ SHOW FULL COLUMNS FROM `vio_questions` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-17 15:34:35 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.vio_questions' doesn't exist [ SHOW FULL COLUMNS FROM `vio_questions` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('vio_questions')
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(760): Kohana_ORM::factory('ormvioquestion')
#7 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(192): Model_Mquestions->getQuestionsList()
#8 [internal function]: Controller_Questions_Questions->action_all()
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-17 15:43:23 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.questions' doesn't exist [ SELECT `questions`.`id_question`, `questions`.`title`, `questions`.`id_user`, `questions`.`public_date`, `questions`.`answers_count`, `users`.`username`, `qfavorite`.`id_qfavorite` FROM `questions` JOIN `users` ON (`questions`.`id_user` = `users`.`id`) LEFT JOIN `qfavorite` ON (`qfavorite`.`id_question` = `questions`.`id_question` AND `qfavorite`.`id_user` = -1) ORDER BY `questions`.`public_date` DESC LIMIT 15 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-17 15:43:23 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.questions' doesn't exist [ SELECT `questions`.`id_question`, `questions`.`title`, `questions`.`id_user`, `questions`.`public_date`, `questions`.`answers_count`, `users`.`username`, `qfavorite`.`id_qfavorite` FROM `questions` JOIN `users` ON (`questions`.`id_user` = `users`.`id`) LEFT JOIN `qfavorite` ON (`qfavorite`.`id_question` = `questions`.`id_question` AND `qfavorite`.`id_user` = -1) ORDER BY `questions`.`public_date` DESC LIMIT 15 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `questio...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(24): Kohana_Database_Query->execute()
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(25): Model_Mquestions->mainQA(Array)
#3 [internal function]: Controller_Questions_Questions->action_index()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-17 15:43:30 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.questions' doesn't exist [ SELECT `questions`.`id_question`, `questions`.`title`, `questions`.`id_user`, `questions`.`public_date`, `questions`.`answers_count`, `users`.`username`, `qfavorite`.`id_qfavorite` FROM `questions` JOIN `users` ON (`questions`.`id_user` = `users`.`id`) LEFT JOIN `qfavorite` ON (`qfavorite`.`id_question` = `questions`.`id_question` AND `qfavorite`.`id_user` = -1) ORDER BY `questions`.`public_date` DESC LIMIT 15 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-17 15:43:30 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.questions' doesn't exist [ SELECT `questions`.`id_question`, `questions`.`title`, `questions`.`id_user`, `questions`.`public_date`, `questions`.`answers_count`, `users`.`username`, `qfavorite`.`id_qfavorite` FROM `questions` JOIN `users` ON (`questions`.`id_user` = `users`.`id`) LEFT JOIN `qfavorite` ON (`qfavorite`.`id_question` = `questions`.`id_question` AND `qfavorite`.`id_user` = -1) ORDER BY `questions`.`public_date` DESC LIMIT 15 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `questio...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(24): Kohana_Database_Query->execute()
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(25): Model_Mquestions->mainQA(Array)
#3 [internal function]: Controller_Questions_Questions->action_index()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-17 15:43:52 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.vio_questions' doesn't exist [ SHOW FULL COLUMNS FROM `vio_questions` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-17 15:43:52 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.vio_questions' doesn't exist [ SHOW FULL COLUMNS FROM `vio_questions` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('vio_questions')
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(760): Kohana_ORM::factory('ormvioquestion')
#7 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(192): Model_Mquestions->getQuestionsList()
#8 [internal function]: Controller_Questions_Questions->action_all()
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-17 15:51:14 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.vio_subcategories' doesn't exist [ SHOW FULL COLUMNS FROM `vio_subcategories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-17 15:51:14 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.vio_subcategories' doesn't exist [ SHOW FULL COLUMNS FROM `vio_subcategories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('vio_subcategori...')
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(584): Kohana_ORM::factory('ormviosubcatego...')
#7 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(6): Kohana_ORM->__get('subcategories')
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#11 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(25): Kohana_View->__toString()
#12 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#13 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#14 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#15 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#16 [internal function]: Controller_Base->after()
#17 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#18 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#21 {main}
2012-07-17 15:51:34 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.subcategories' doesn't exist [ SHOW FULL COLUMNS FROM `subcategories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-17 15:51:34 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.subcategories' doesn't exist [ SHOW FULL COLUMNS FROM `subcategories` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('subcategories')
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(584): Kohana_ORM::factory('ormviosubcatego...')
#7 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(6): Kohana_ORM->__get('subcategories')
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#11 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(25): Kohana_View->__toString()
#12 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#13 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#14 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#15 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#16 [internal function]: Controller_Base->after()
#17 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#18 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#19 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#20 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#21 {main}
2012-07-17 16:11:31 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.vio_questions' doesn't exist [ SHOW FULL COLUMNS FROM `vio_questions` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-17 16:11:31 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.vio_questions' doesn't exist [ SHOW FULL COLUMNS FROM `vio_questions` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('vio_questions')
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(760): Kohana_ORM::factory('ormvioquestion')
#7 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(192): Model_Mquestions->getQuestionsList()
#8 [internal function]: Controller_Questions_Questions->action_all()
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#13 {main}
2012-07-17 16:47:11 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.questions' doesn't exist [ SELECT `questions`.`id_question`, `questions`.`title`, `questions`.`id_user`, `questions`.`public_date`, `questions`.`answers_count`, `users`.`username`, `qfavorite`.`id_qfavorite` FROM `questions` JOIN `users` ON (`questions`.`id_user` = `users`.`id`) LEFT JOIN `qfavorite` ON (`qfavorite`.`id_question` = `questions`.`id_question` AND `qfavorite`.`id_user` = -1) ORDER BY `questions`.`public_date` DESC LIMIT 15 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-17 16:47:11 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.questions' doesn't exist [ SELECT `questions`.`id_question`, `questions`.`title`, `questions`.`id_user`, `questions`.`public_date`, `questions`.`answers_count`, `users`.`username`, `qfavorite`.`id_qfavorite` FROM `questions` JOIN `users` ON (`questions`.`id_user` = `users`.`id`) LEFT JOIN `qfavorite` ON (`qfavorite`.`id_question` = `questions`.`id_question` AND `qfavorite`.`id_user` = -1) ORDER BY `questions`.`public_date` DESC LIMIT 15 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `questio...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(24): Kohana_Database_Query->execute()
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(25): Model_Mquestions->mainQA(Array)
#3 [internal function]: Controller_Questions_Questions->action_index()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-17 16:47:43 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.category' doesn't exist [ SELECT `category`.`id_category`, `category`.`ctitle` FROM `category` WHERE `category`.`ctitle` != 'usercategory' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-17 16:47:43 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.category' doesn't exist [ SELECT `category`.`id_category`, `category`.`ctitle` FROM `category` WHERE `category`.`ctitle` != 'usercategory' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(442): Kohana_Database_Query->execute()
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(44): Model_Mquestions->getAllCategories('some')
#3 [internal function]: Controller_Questions_Questions->action_ask()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-17 16:51:35 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.questions_subcategories' doesn't exist [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` JOIN `questions_subcategories` ON (`questions_subcategories`.`subcategory_id` = `ormviosubcategory`.`id_subcategory`) WHERE `questions_subcategories`.`question_id` = '175' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-17 16:51:35 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.questions_subcategories' doesn't exist [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` JOIN `questions_subcategories` ON (`questions_subcategories`.`subcategory_id` = `ormviosubcategory`.`id_subcategory`) WHERE `questions_subcategories`.`question_id` = '175' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvios...', 'Model_OrmViOsub...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(6): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(25): Kohana_View->__toString()
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Base->after()
#13 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#14 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#17 {main}
2012-07-17 16:53:37 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.vio_questions_subcategories' doesn't exist [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` JOIN `vio_questions_subcategories` ON (`vio_questions_subcategories`.`subcategory_id` = `ormviosubcategory`.`id_subcategory`) WHERE `vio_questions_subcategories`.`question_id` = '175' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-17 16:53:37 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.vio_questions_subcategories' doesn't exist [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` JOIN `vio_questions_subcategories` ON (`vio_questions_subcategories`.`subcategory_id` = `ormviosubcategory`.`id_subcategory`) WHERE `vio_questions_subcategories`.`question_id` = '175' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvios...', 'Model_OrmViOsub...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(6): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(25): Kohana_View->__toString()
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Base->after()
#13 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#14 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#17 {main}
2012-07-17 16:54:52 --- ERROR: Kohana_Exception [ 0 ]: The ctitle property does not exist in the Model_OrmViOcategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-17 16:54:52 --- STRACE: Kohana_Exception [ 0 ]: The ctitle property does not exist in the Model_OrmViOcategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(7): Kohana_ORM->__get('ctitle')
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(25): Kohana_View->__toString()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#14 {main}
2012-07-17 20:33:54 --- ERROR: ErrorException [ 1 ]: Class 'Model_Ormviofavorite' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-07-17 20:33:54 --- STRACE: ErrorException [ 1 ]: Class 'Model_Ormviofavorite' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-17 20:40:25 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.questions_answers' doesn't exist [ SELECT `ormvioanswer`.* FROM `vio_answers` AS `ormvioanswer` JOIN `questions_answers` ON (`questions_answers`.`answer_id` = `ormvioanswer`.`id_vio_answer`) WHERE `questions_answers`.`question_id` = '172' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-17 20:40:25 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.questions_answers' doesn't exist [ SELECT `ormvioanswer`.* FROM `vio_answers` AS `ormvioanswer` JOIN `questions_answers` ON (`questions_answers`.`answer_id` = `ormvioanswer`.`id_vio_answer`) WHERE `questions_answers`.`question_id` = '172' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvioa...', 'Model_OrmViOans...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(16): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(25): Kohana_View->__toString()
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Base->after()
#13 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#14 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#17 {main}
2012-07-17 20:41:04 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'ormvioanswer.id_vio_answer' in 'on clause' [ SELECT `ormvioanswer`.* FROM `vio_answers` AS `ormvioanswer` JOIN `vio_questions_answers` ON (`vio_questions_answers`.`answer_id` = `ormvioanswer`.`id_vio_answer`) WHERE `vio_questions_answers`.`question_id` = '172' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-07-17 20:41:04 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'ormvioanswer.id_vio_answer' in 'on clause' [ SELECT `ormvioanswer`.* FROM `vio_answers` AS `ormvioanswer` JOIN `vio_questions_answers` ON (`vio_questions_answers`.`answer_id` = `ormvioanswer`.`id_vio_answer`) WHERE `vio_questions_answers`.`question_id` = '172' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvioa...', 'Model_OrmViOans...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(16): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#7 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(25): Kohana_View->__toString()
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#11 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#12 [internal function]: Controller_Base->after()
#13 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#14 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#16 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#17 {main}
2012-07-17 20:41:37 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_OrmViOanswer class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-17 20:41:37 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_OrmViOanswer class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(17): Kohana_ORM->__get('title')
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(25): Kohana_View->__toString()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#14 {main}
2012-07-17 21:37:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/views/adm/vAdmVioQuestionAdd.php [ 9 ]
2012-07-17 21:37:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/views/adm/vAdmVioQuestionAdd.php [ 9 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmVioQuestionAdd.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 9, Array)
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdm.php(9): Kohana_View->__toString()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(25): Kohana_View->__toString()
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Base->after()
#14 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#15 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#18 {main}
2012-07-17 21:48:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/views/adm/vAdmVioQuestionAdd.php [ 10 ]
2012-07-17 21:48:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/views/adm/vAdmVioQuestionAdd.php [ 10 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmVioQuestionAdd.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 10, Array)
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdm.php(9): Kohana_View->__toString()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(25): Kohana_View->__toString()
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Base->after()
#14 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#15 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#18 {main}
2012-07-17 21:50:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: some ~ APPPATH/views/adm/vAdmVioQuestionAdd.php [ 4 ]
2012-07-17 21:50:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: some ~ APPPATH/views/adm/vAdmVioQuestionAdd.php [ 4 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmVioQuestionAdd.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 4, Array)
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdm.php(9): Kohana_View->__toString()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(25): Kohana_View->__toString()
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Base->after()
#14 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#15 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#18 {main}
2012-07-17 21:51:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/views/adm/vAdmVioQuestionAdd.php [ 11 ]
2012-07-17 21:51:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/views/adm/vAdmVioQuestionAdd.php [ 11 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmVioQuestionAdd.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 11, Array)
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdm.php(9): Kohana_View->__toString()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(25): Kohana_View->__toString()
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Base->after()
#14 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#15 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#18 {main}
2012-07-17 21:56:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: some ~ APPPATH/views/adm/vAdmVioQuestionAdd.php [ 4 ]
2012-07-17 21:56:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: some ~ APPPATH/views/adm/vAdmVioQuestionAdd.php [ 4 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmVioQuestionAdd.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 4, Array)
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdm.php(9): Kohana_View->__toString()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(25): Kohana_View->__toString()
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Base->after()
#14 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#15 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#18 {main}
2012-07-17 22:01:15 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_OrmViOcategory as array ~ APPPATH/views/adm/vAdmVioQuestionAdd.php [ 16 ]
2012-07-17 22:01:15 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_OrmViOcategory as array ~ APPPATH/views/adm/vAdmVioQuestionAdd.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}