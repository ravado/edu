<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-02 11:48:05 --- ERROR: Kohana_Exception [ 0 ]: The questions property does not exist in the Model_OrmViOcategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-02 11:48:05 --- STRACE: Kohana_Exception [ 0 ]: The questions property does not exist in the Model_OrmViOcategory class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(816): Kohana_ORM->__get('questions')
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(73): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-02 11:51:20 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/model/mquestions.php [ 818 ]
2012-08-02 11:51:20 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/model/mquestions.php [ 818 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(818): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/admin/Dr...', 818, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(73): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-02 11:55:37 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/model/mquestions.php [ 821 ]
2012-08-02 11:55:37 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/model/mquestions.php [ 821 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(821): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/admin/Dr...', 821, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(73): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-02 11:58:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$questions ~ APPPATH/classes/model/mquestions.php [ 819 ]
2012-08-02 11:58:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$questions ~ APPPATH/classes/model/mquestions.php [ 819 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(819): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/admin/Dr...', 819, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(73): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-02 11:59:50 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/mquestions.php [ 820 ]
2012-08-02 11:59:50 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/mquestions.php [ 820 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(820): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/admin/Dr...', 820, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(73): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-02 12:07:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: subcats ~ APPPATH/classes/model/mquestions.php [ 821 ]
2012-08-02 12:07:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: subcats ~ APPPATH/classes/model/mquestions.php [ 821 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(821): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 821, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(73): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-02 12:07:53 --- ERROR: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH/classes/model/mquestions.php [ 822 ]
2012-08-02 12:07:53 --- STRACE: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH/classes/model/mquestions.php [ 822 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', '/Users/admin/Dr...', 822, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(822): array_push(NULL, Array)
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(73): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#3 [internal function]: Controller_Questions_Questions->action_all()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-02 12:08:06 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id_subcategory ~ APPPATH/classes/model/mquestions.php [ 822 ]
2012-08-02 12:08:06 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id_subcategory ~ APPPATH/classes/model/mquestions.php [ 822 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(822): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/admin/Dr...', 822, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(73): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-02 12:08:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id_subcategory ~ APPPATH/classes/model/mquestions.php [ 822 ]
2012-08-02 12:08:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id_subcategory ~ APPPATH/classes/model/mquestions.php [ 822 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(822): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/admin/Dr...', 822, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(73): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-02 12:08:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id_subcategory ~ APPPATH/classes/model/mquestions.php [ 822 ]
2012-08-02 12:08:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id_subcategory ~ APPPATH/classes/model/mquestions.php [ 822 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(822): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/admin/Dr...', 822, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(73): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-02 12:10:05 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subcategories.id_subcategory' in 'where clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` WHERE `is_closed` >= '0' AND `subcategories`.`id_subcategory` IN (-1, '1', '2', '3', '16', '17', '18', '19', '20', '21', '22', '106') ORDER BY `public_date` LIMIT 20 OFFSET 0 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-02 12:10:05 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subcategories.id_subcategory' in 'where clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` WHERE `is_closed` >= '0' AND `subcategories`.`id_subcategory` IN (-1, '1', '2', '3', '16', '17', '18', '19', '20', '21', '22', '106') ORDER BY `public_date` LIMIT 20 OFFSET 0 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvioq...', 'Model_OrmViOque...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(826): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(73): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#5 [internal function]: Controller_Questions_Questions->action_all()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-02 12:12:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/model/mquestions.php [ 825 ]
2012-08-02 12:12:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/model/mquestions.php [ 825 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-02 12:16:50 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'public_date' in 'order clause' [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` JOIN `vio_questions_subcategories` ON (`vio_questions_subcategories`.`subcategory_id` = `ormviosubcategory`.`id_subcategory`) WHERE `vio_questions_subcategories`.`question_id` IS NULL AND `id_subcategory` IN (-1, '1', '2', '3', '16', '17', '18', '19', '20', '21', '22', '106') ORDER BY `public_date` LIMIT 20 OFFSET 0 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-02 12:16:50 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'public_date' in 'order clause' [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` JOIN `vio_questions_subcategories` ON (`vio_questions_subcategories`.`subcategory_id` = `ormviosubcategory`.`id_subcategory`) WHERE `vio_questions_subcategories`.`question_id` IS NULL AND `id_subcategory` IN (-1, '1', '2', '3', '16', '17', '18', '19', '20', '21', '22', '106') ORDER BY `public_date` LIMIT 20 OFFSET 0 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvios...', 'Model_OrmViOsub...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(826): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(73): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#5 [internal function]: Controller_Questions_Questions->action_all()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-02 12:20:29 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '== '200'' at line 1 [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` JOIN `vio_questions_subcategories` ON (`vio_questions_subcategories`.`question_id` = `ormvioquestion`.`id_question`) WHERE `vio_questions_subcategories`.`subcategory_id` IS NULL AND `id_subcategory` == '200' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-02 12:20:29 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '== '200'' at line 1 [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` JOIN `vio_questions_subcategories` ON (`vio_questions_subcategories`.`question_id` = `ormvioquestion`.`id_question`) WHERE `vio_questions_subcategories`.`subcategory_id` IS NULL AND `id_subcategory` == '200' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(825): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(73): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#4 [internal function]: Controller_Questions_Questions->action_all()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-02 12:21:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'id_subcategory' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` JOIN `vio_questions_subcategories` ON (`vio_questions_subcategories`.`question_id` = `ormvioquestion`.`id_question`) WHERE `vio_questions_subcategories`.`subcategory_id` IS NULL AND `id_subcategory` = '200' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-02 12:21:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'id_subcategory' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` JOIN `vio_questions_subcategories` ON (`vio_questions_subcategories`.`question_id` = `ormvioquestion`.`id_question`) WHERE `vio_questions_subcategories`.`subcategory_id` IS NULL AND `id_subcategory` = '200' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(825): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(73): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#4 [internal function]: Controller_Questions_Questions->action_all()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-02 12:22:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` WHERE 0 = -1 AND `1` = '1' AND `2` = '2' AND `3` = '3' AND `4` = '16' AND `5` = '17' AND `6` = '18' AND `7` = '19' AND `8` = '20' AND `9` = '21' AND `10` = '22' AND `11` = '106' LIMIT 1 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-02 12:22:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'where clause' [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` WHERE 0 = -1 AND `1` = '1' AND `2` = '2' AND `3` = '3' AND `4` = '16' AND `5` = '17' AND `6` = '18' AND `7` = '19' AND `8` = '20' AND `9` = '21' AND `10` = '22' AND `11` = '106' LIMIT 1 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvios...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(258): Kohana_ORM->find()
#4 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(Array)
#5 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(825): Kohana_ORM::factory('ormviosubcatego...', Array)
#6 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(73): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#7 [internal function]: Controller_Questions_Questions->action_all()
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#12 {main}
2012-08-02 13:03:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: curr_page ~ APPPATH/views/questions/vQuestionOne.php [ 3 ]
2012-08-02 13:03:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: curr_page ~ APPPATH/views/questions/vQuestionOne.php [ 3 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionOne.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 3, Array)
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
2012-08-02 13:04:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH/views/questions/vQuestionOne.php [ 93 ]
2012-08-02 13:04:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH/views/questions/vQuestionOne.php [ 93 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionOne.php(93): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 93, Array)
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
2012-08-02 13:38:31 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_OrmViOanswer class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-02 13:38:31 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_OrmViOanswer class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionOne.php(114): Kohana_ORM->__get('title')
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
2012-08-02 13:38:46 --- ERROR: Kohana_Exception [ 0 ]: The text_answer property does not exist in the Model_OrmViOanswer class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-02 13:38:46 --- STRACE: Kohana_Exception [ 0 ]: The text_answer property does not exist in the Model_OrmViOanswer class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionOne.php(114): Kohana_ORM->__get('text_answer')
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
2012-08-02 13:38:53 --- ERROR: Kohana_Exception [ 0 ]: The answer_text property does not exist in the Model_OrmViOanswer class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-02 13:38:53 --- STRACE: Kohana_Exception [ 0 ]: The answer_text property does not exist in the Model_OrmViOanswer class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionOne.php(114): Kohana_ORM->__get('answer_text')
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
2012-08-02 23:58:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: id_user ~ APPPATH/views/questions/vQuestionOne.php [ 103 ]
2012-08-02 23:58:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: id_user ~ APPPATH/views/questions/vQuestionOne.php [ 103 ]
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