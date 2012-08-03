<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-03 00:01:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH/views/questions/vQuestionOne.php [ 103 ]
2012-08-03 00:01:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH/views/questions/vQuestionOne.php [ 103 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionOne.php(103): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 103, Array)
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
2012-08-03 00:04:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSEIF ~ APPPATH/views/questions/vQuestionOne.php [ 107 ]
2012-08-03 00:04:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSEIF ~ APPPATH/views/questions/vQuestionOne.php [ 107 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 00:04:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSEIF ~ APPPATH/views/questions/vQuestionOne.php [ 107 ]
2012-08-03 00:04:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSEIF ~ APPPATH/views/questions/vQuestionOne.php [ 107 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 00:04:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSEIF ~ APPPATH/views/questions/vQuestionOne.php [ 107 ]
2012-08-03 00:04:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSEIF ~ APPPATH/views/questions/vQuestionOne.php [ 107 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 00:04:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: voted_up ~ APPPATH/views/questions/vQuestionOne.php [ 111 ]
2012-08-03 00:04:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: voted_up ~ APPPATH/views/questions/vQuestionOne.php [ 111 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionOne.php(111): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 111, Array)
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
2012-08-03 22:01:53 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` WHERE 0 = -1 AND `1` = '1' AND `2` = '2' AND `3` = '3' AND `4` = '16' AND `5` = '17' AND `6` = '18' AND `7` = '19' AND `8` = '20' AND `9` = '21' AND `10` = '22' AND `11` = '106' LIMIT 1 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-03 22:01:53 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` WHERE 0 = -1 AND `1` = '1' AND `2` = '2' AND `3` = '3' AND `4` = '16' AND `5` = '17' AND `6` = '18' AND `7` = '19' AND `8` = '20' AND `9` = '21' AND `10` = '22' AND `11` = '106' LIMIT 1 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvios...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(258): Kohana_ORM->find()
#4 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(Array)
#5 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(828): Kohana_ORM::factory('ormviosubcatego...', Array)
#6 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#7 [internal function]: Controller_Questions_Questions->action_all()
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#12 {main}
2012-08-03 22:15:44 --- ERROR: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 909 ]
2012-08-03 22:15:44 --- STRACE: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH/orm/classes/kohana/orm.php [ 909 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(817): Kohana_ORM->find_all()
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-03 22:16:39 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'vio_subcategory.category_id' in 'on clause' [ SELECT `ormviocategory`.* FROM `vio_categories` AS `ormviocategory` JOIN `vio_subcategories` ON (`vio_subcategory`.`category_id` = `id_category`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-03 22:16:39 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'vio_subcategory.category_id' in 'on clause' [ SELECT `ormviocategory`.* FROM `vio_categories` AS `ormviocategory` JOIN `vio_subcategories` ON (`vio_subcategory`.`category_id` = `id_category`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvioc...', 'Model_OrmViOcat...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(817): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#5 [internal function]: Controller_Questions_Questions->action_all()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-03 22:17:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'vio_subcategory.category_id' in 'on clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`vio_subcategory`.`category_id` = `id_category`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-03 22:17:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'vio_subcategory.category_id' in 'on clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`vio_subcategory`.`category_id` = `id_category`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvioq...', 'Model_OrmViOque...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(817): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#5 [internal function]: Controller_Questions_Questions->action_all()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-03 22:17:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'vio_subcategory.category_id' in 'on clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`vio_subcategory`.`category_id` = `id_category`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-03 22:17:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'vio_subcategory.category_id' in 'on clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`vio_subcategory`.`category_id` = `id_category`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvioq...', 'Model_OrmViOque...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(817): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#5 [internal function]: Controller_Questions_Questions->action_all()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-03 22:18:07 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'vio_subcategory.category_id' in 'on clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`vio_subcategory`.`category_id` = `1`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-03 22:18:07 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'vio_subcategory.category_id' in 'on clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`vio_subcategory`.`category_id` = `1`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvioq...', 'Model_OrmViOque...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(817): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#5 [internal function]: Controller_Questions_Questions->action_all()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-03 22:18:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'id_category' in 'on clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`category_id` = `id_category`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-03 22:18:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'id_category' in 'on clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`category_id` = `id_category`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvioq...', 'Model_OrmViOque...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(817): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#5 [internal function]: Controller_Questions_Questions->action_all()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-03 22:18:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`category_id` = `1`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-03 22:18:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`category_id` = `1`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvioq...', 'Model_OrmViOque...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(817): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#5 [internal function]: Controller_Questions_Questions->action_all()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-03 22:18:41 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`category_id` = `1`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-03 22:18:41 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`category_id` = `1`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvioq...', 'Model_OrmViOque...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(817): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#5 [internal function]: Controller_Questions_Questions->action_all()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-03 22:18:46 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`category_id` = `1`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-03 22:18:46 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`category_id` = `1`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvioq...', 'Model_OrmViOque...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(817): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#5 [internal function]: Controller_Questions_Questions->action_all()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-03 22:19:35 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` WHERE 0 = -1 AND `1` = '1' AND `2` = '2' AND `3` = '3' AND `4` = '16' AND `5` = '17' AND `6` = '18' AND `7` = '19' AND `8` = '20' AND `9` = '21' AND `10` = '22' AND `11` = '106' LIMIT 1 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-03 22:19:35 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` WHERE 0 = -1 AND `1` = '1' AND `2` = '2' AND `3` = '3' AND `4` = '16' AND `5` = '17' AND `6` = '18' AND `7` = '19' AND `8` = '20' AND `9` = '21' AND `10` = '22' AND `11` = '106' LIMIT 1 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvios...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(258): Kohana_ORM->find()
#4 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(Array)
#5 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(828): Kohana_ORM::factory('ormviosubcatego...', Array)
#6 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#7 [internal function]: Controller_Questions_Questions->action_all()
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#12 {main}
2012-08-03 23:10:03 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` WHERE 0 = -1 AND `1` = '1' AND `2` = '2' AND `3` = '3' AND `4` = '16' AND `5` = '17' AND `6` = '18' AND `7` = '19' AND `8` = '20' AND `9` = '21' AND `10` = '22' AND `11` = '106' LIMIT 1 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-03 23:10:03 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` WHERE 0 = -1 AND `1` = '1' AND `2` = '2' AND `3` = '3' AND `4` = '16' AND `5` = '17' AND `6` = '18' AND `7` = '19' AND `8` = '20' AND `9` = '21' AND `10` = '22' AND `11` = '106' LIMIT 1 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvios...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(258): Kohana_ORM->find()
#4 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(Array)
#5 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(828): Kohana_ORM::factory('ormviosubcatego...', Array)
#6 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#7 [internal function]: Controller_Questions_Questions->action_all()
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#12 {main}
2012-08-03 23:12:50 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` WHERE 0 = -1 AND `1` = '1' AND `2` = '2' AND `3` = '3' AND `4` = '16' AND `5` = '17' AND `6` = '18' AND `7` = '19' AND `8` = '20' AND `9` = '21' AND `10` = '22' AND `11` = '106' LIMIT 1 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-03 23:12:50 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` WHERE 0 = -1 AND `1` = '1' AND `2` = '2' AND `3` = '3' AND `4` = '16' AND `5` = '17' AND `6` = '18' AND `7` = '19' AND `8` = '20' AND `9` = '21' AND `10` = '22' AND `11` = '106' LIMIT 1 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvios...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(258): Kohana_ORM->find()
#4 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(Array)
#5 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(828): Kohana_ORM::factory('ormviosubcatego...', Array)
#6 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#7 [internal function]: Controller_Questions_Questions->action_all()
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#12 {main}
2012-08-03 23:13:01 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` WHERE 0 = -1 AND `1` = '1' AND `2` = '2' AND `3` = '3' AND `4` = '16' AND `5` = '17' AND `6` = '18' AND `7` = '19' AND `8` = '20' AND `9` = '21' AND `10` = '22' AND `11` = '106' LIMIT 1 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-03 23:13:01 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` WHERE 0 = -1 AND `1` = '1' AND `2` = '2' AND `3` = '3' AND `4` = '16' AND `5` = '17' AND `6` = '18' AND `7` = '19' AND `8` = '20' AND `9` = '21' AND `10` = '22' AND `11` = '106' LIMIT 1 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvios...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(258): Kohana_ORM->find()
#4 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(Array)
#5 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(828): Kohana_ORM::factory('ormviosubcatego...', Array)
#6 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#7 [internal function]: Controller_Questions_Questions->action_all()
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#12 {main}
2012-08-03 23:13:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/classes/model/mquestions.php [ 834 ]
2012-08-03 23:13:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/classes/model/mquestions.php [ 834 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(834): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 834, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-03 23:14:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: subcats ~ APPPATH/classes/model/mquestions.php [ 830 ]
2012-08-03 23:14:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: subcats ~ APPPATH/classes/model/mquestions.php [ 830 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(830): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 830, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-03 23:14:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/classes/model/mquestions.php [ 834 ]
2012-08-03 23:14:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/classes/model/mquestions.php [ 834 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(834): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 834, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-03 23:15:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: pages ~ APPPATH/classes/model/mquestions.php [ 835 ]
2012-08-03 23:15:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: pages ~ APPPATH/classes/model/mquestions.php [ 835 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(835): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 835, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-03 23:15:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/model/mquestions.php [ 833 ]
2012-08-03 23:15:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/model/mquestions.php [ 833 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 23:16:07 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/questions/vQuestionAll.php [ 136 ]
2012-08-03 23:16:07 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/questions/vQuestionAll.php [ 136 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(136): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Users/admin/Dr...', 136, Array)
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
2012-08-03 23:16:22 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/questions/vQuestionAll.php [ 136 ]
2012-08-03 23:16:22 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/questions/vQuestionAll.php [ 136 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(136): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Users/admin/Dr...', 136, Array)
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
2012-08-03 23:16:47 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/mquestions.php [ 831 ]
2012-08-03 23:16:47 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/mquestions.php [ 831 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(831): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/admin/Dr...', 831, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-03 23:21:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/classes/model/mquestions.php [ 839 ]
2012-08-03 23:21:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/classes/model/mquestions.php [ 839 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(839): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 839, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-03 23:21:28 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `vio_questions`.`id_question`, `vio_subcategories`.`id_subcategory`, `vio_subcategories`.`category_id`, `vio_categories`.`id_category`, `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` JOIN `vio_` ON () ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-03 23:21:28 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `vio_questions`.`id_question`, `vio_subcategories`.`id_subcategory`, `vio_subcategories`.`category_id`, `vio_categories`.`id_category`, `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` JOIN `vio_` ON () ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `vio_que...', 'Model_OrmViOque...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(822): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#5 [internal function]: Controller_Questions_Questions->action_all()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-03 23:26:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_Ormviosubcategories' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-03 23:26:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_Ormviosubcategories' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 23:26:42 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'vio_categories' in 'on clause' [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` LEFT JOIN `vio_categories` ON (`vio_categories` = `1`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-03 23:26:42 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'vio_categories' in 'on clause' [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` LEFT JOIN `vio_categories` ON (`vio_categories` = `1`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvios...', 'Model_OrmViOsub...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(819): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#5 [internal function]: Controller_Questions_Questions->action_all()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-03 23:27:12 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` LEFT JOIN `vio_categories` ON (`vio_categories`.`id_category` = `1`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-03 23:27:12 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` LEFT JOIN `vio_categories` ON (`vio_categories`.`id_category` = `1`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvios...', 'Model_OrmViOsub...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(819): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#5 [internal function]: Controller_Questions_Questions->action_all()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-03 23:27:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/classes/model/mquestions.php [ 836 ]
2012-08-03 23:27:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/classes/model/mquestions.php [ 836 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(836): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 836, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-03 23:27:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_OrmViOsubcategory::coun_all() ~ APPPATH/classes/model/mquestions.php [ 819 ]
2012-08-03 23:27:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_OrmViOsubcategory::coun_all() ~ APPPATH/classes/model/mquestions.php [ 819 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 23:27:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/classes/model/mquestions.php [ 837 ]
2012-08-03 23:27:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/classes/model/mquestions.php [ 837 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(837): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 837, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-03 23:28:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/classes/model/mquestions.php [ 837 ]
2012-08-03 23:28:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/classes/model/mquestions.php [ 837 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(837): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 837, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-03 23:28:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/classes/model/mquestions.php [ 837 ]
2012-08-03 23:28:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/classes/model/mquestions.php [ 837 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(837): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 837, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-03 23:29:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/classes/model/mquestions.php [ 837 ]
2012-08-03 23:29:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/classes/model/mquestions.php [ 837 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(837): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 837, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-03 23:29:50 --- ERROR: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_OrmViOsubcategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-03 23:29:50 --- STRACE: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_OrmViOsubcategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(145): Kohana_ORM->__get('id_question')
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
2012-08-03 23:30:53 --- ERROR: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_OrmViOsubcategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-03 23:30:53 --- STRACE: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_OrmViOsubcategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(145): Kohana_ORM->__get('id_question')
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
2012-08-03 23:31:23 --- ERROR: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_OrmViOsubcategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-03 23:31:23 --- STRACE: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_OrmViOsubcategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(145): Kohana_ORM->__get('id_question')
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
2012-08-03 23:31:52 --- ERROR: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_OrmViOsubcategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-03 23:31:52 --- STRACE: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_OrmViOsubcategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(145): Kohana_ORM->__get('id_question')
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
2012-08-03 23:32:01 --- ERROR: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_OrmViOsubcategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-03 23:32:01 --- STRACE: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_OrmViOsubcategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(145): Kohana_ORM->__get('id_question')
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
2012-08-03 23:33:32 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'vio_subcategories.category_id' in 'where clause' [ SELECT *, `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` JOIN `vio_categories` ON (`vio_categories`.`id_category` = 1) WHERE `vio_subcategories`.`category_id` = 'vio_categories.id_category' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-03 23:33:32 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'vio_subcategories.category_id' in 'where clause' [ SELECT *, `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` JOIN `vio_categories` ON (`vio_categories`.`id_category` = 1) WHERE `vio_subcategories`.`category_id` = 'vio_categories.id_category' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT *, `ormv...', 'Model_OrmViOsub...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(819): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#5 [internal function]: Controller_Questions_Questions->action_all()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-03 23:38:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_Vio_subcategories' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-03 23:38:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_Vio_subcategories' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-03 23:39:58 --- ERROR: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_OrmViOsubcategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-03 23:39:58 --- STRACE: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_OrmViOsubcategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(145): Kohana_ORM->__get('id_question')
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
2012-08-03 23:40:14 --- ERROR: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_OrmViOsubcategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-03 23:40:14 --- STRACE: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_OrmViOsubcategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(145): Kohana_ORM->__get('id_question')
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
2012-08-03 23:40:37 --- ERROR: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_OrmViOsubcategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-03 23:40:37 --- STRACE: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_OrmViOsubcategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(145): Kohana_ORM->__get('id_question')
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
2012-08-03 23:40:41 --- ERROR: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_OrmViOsubcategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-03 23:40:41 --- STRACE: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_OrmViOsubcategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(145): Kohana_ORM->__get('id_question')
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