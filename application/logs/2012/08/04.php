<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-04 00:08:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: questions ~ APPPATH/classes/model/mquestions.php [ 855 ]
2012-08-04 00:08:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: questions ~ APPPATH/classes/model/mquestions.php [ 855 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(855): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 855, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-04 00:09:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: questions ~ APPPATH/classes/model/mquestions.php [ 855 ]
2012-08-04 00:09:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: questions ~ APPPATH/classes/model/mquestions.php [ 855 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(855): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 855, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-04 00:12:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: questions ~ APPPATH/classes/model/mquestions.php [ 857 ]
2012-08-04 00:12:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: questions ~ APPPATH/classes/model/mquestions.php [ 857 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(857): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 857, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-04 00:12:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: questions ~ APPPATH/classes/model/mquestions.php [ 858 ]
2012-08-04 00:12:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: questions ~ APPPATH/classes/model/mquestions.php [ 858 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(858): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 858, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-04 00:16:01 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/model/mquestions.php [ 830 ]
2012-08-04 00:16:01 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/model/mquestions.php [ 830 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(830): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/admin/Dr...', 830, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-04 00:19:30 --- ERROR: Kohana_Exception [ 0 ]: The questions property does not exist in the Model_OrmViOquestSub class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-04 00:19:30 --- STRACE: Kohana_Exception [ 0 ]: The questions property does not exist in the Model_OrmViOquestSub class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(824): Kohana_ORM->__get('questions')
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-04 00:19:41 --- ERROR: Kohana_Exception [ 0 ]: The question_id property does not exist in the Model_OrmViOquestion class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-04 00:19:41 --- STRACE: Kohana_Exception [ 0 ]: The question_id property does not exist in the Model_OrmViOquestion class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(827): Kohana_ORM->__get('question_id')
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(74): Model_Mquestions->getQuestionsList(1, 20, NULL, NULL, NULL, '1')
#2 [internal function]: Controller_Questions_Questions->action_all()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-04 21:40:31 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subcategories' in 'where clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` WHERE `subcategories` = '2' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-04 21:40:31 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subcategories' in 'where clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` WHERE `subcategories` = '2' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvioq...', 'Model_OrmViOque...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(931): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(106): Model_Mquestions->getSimilarQuestion(1, 5)
#5 [internal function]: Controller_Questions_Questions->action_question()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-04 21:41:01 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subcategories.id_subcategory' in 'where clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` WHERE `subcategories`.`id_subcategory` = '2' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-04 21:41:01 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subcategories.id_subcategory' in 'where clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` WHERE `subcategories`.`id_subcategory` = '2' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvioq...', 'Model_OrmViOque...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(931): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(106): Model_Mquestions->getSimilarQuestion(1, 5)
#5 [internal function]: Controller_Questions_Questions->action_question()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-04 21:41:44 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subcategories.id_subcategory' in 'on clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`subcategories`.`id_subcategory` = `2`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-04 21:41:44 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subcategories.id_subcategory' in 'on clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`subcategories`.`id_subcategory` = `2`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvioq...', 'Model_OrmViOque...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(931): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(106): Model_Mquestions->getSimilarQuestion(1, 5)
#5 [internal function]: Controller_Questions_Questions->action_question()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-04 21:41:59 --- ERROR: Database_Exception [ 1054 ]: Unknown column '2' in 'on clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`vio_subcategories`.`id_subcategory` = `2`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-04 21:41:59 --- STRACE: Database_Exception [ 1054 ]: Unknown column '2' in 'on clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`vio_subcategories`.`id_subcategory` = `2`) ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvioq...', 'Model_OrmViOque...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(931): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(106): Model_Mquestions->getSimilarQuestion(1, 5)
#5 [internal function]: Controller_Questions_Questions->action_question()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-04 21:56:15 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'id_question1' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`vio_subcategories`.`id_subcategory` = 2) WHERE `id_question1` = '1' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-04 21:56:15 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'id_question1' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`vio_subcategories`.`id_subcategory` = 2) WHERE `id_question1` = '1' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(931): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(106): Model_Mquestions->getSimilarQuestion(1, 5)
#4 [internal function]: Controller_Questions_Questions->action_question()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-04 22:01:43 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.ormviosubcategory' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` JOIN `ormviosubcategory` ON (`ormviosubcategory`.`id_subcategory` = `2`) WHERE `ormvioquestion`.`id_question` = '2' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-04 22:01:43 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.ormviosubcategory' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` JOIN `ormviosubcategory` ON (`ormviosubcategory`.`id_subcategory` = `2`) WHERE `ormvioquestion`.`id_question` = '2' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(931): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(106): Model_Mquestions->getSimilarQuestion(1, 5)
#4 [internal function]: Controller_Questions_Questions->action_question()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-04 22:02:17 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.ormviosubcategory' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` JOIN `ormviosubcategory` ON (`vio_subcategories`.`id_subcategory` = `2`) WHERE `ormvioquestion`.`id_question` = '2' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-04 22:02:17 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.ormviosubcategory' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` JOIN `ormviosubcategory` ON (`vio_subcategories`.`id_subcategory` = `2`) WHERE `ormvioquestion`.`id_question` = '2' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(931): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(106): Model_Mquestions->getSimilarQuestion(1, 5)
#4 [internal function]: Controller_Questions_Questions->action_question()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-04 22:02:21 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.ormviosubcategory' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` JOIN `ormviosubcategory` ON (`vio_subcategories`.`id_subcategory` = `2`) WHERE `ormvioquestion`.`id_question` = '2' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-04 22:02:21 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.ormviosubcategory' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` JOIN `ormviosubcategory` ON (`vio_subcategories`.`id_subcategory` = `2`) WHERE `ormvioquestion`.`id_question` = '2' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(931): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(106): Model_Mquestions->getSimilarQuestion(1, 5)
#4 [internal function]: Controller_Questions_Questions->action_question()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-04 22:02:38 --- ERROR: Database_Exception [ 1054 ]: Unknown column '2' in 'on clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`vio_subcategories`.`id_subcategory` = `2`) WHERE `ormvioquestion`.`id_question` = '2' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-04 22:02:38 --- STRACE: Database_Exception [ 1054 ]: Unknown column '2' in 'on clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`vio_subcategories`.`id_subcategory` = `2`) WHERE `ormvioquestion`.`id_question` = '2' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(931): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(106): Model_Mquestions->getSimilarQuestion(1, 5)
#4 [internal function]: Controller_Questions_Questions->action_question()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-04 22:06:23 --- ERROR: Database_Exception [ 1066 ]: Not unique table/alias: 'ormvioquestion' [ SELECT COUNT(*) AS `records_found` FROM `ormvioquestion`, `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`vio_subcategories`.`id_subcategory` = 2) WHERE `ormvioquestion`.`id_question` = 'vio_subcategories.id_subcategory' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-04 22:06:23 --- STRACE: Database_Exception [ 1066 ]: Not unique table/alias: 'ormvioquestion' [ SELECT COUNT(*) AS `records_found` FROM `ormvioquestion`, `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`vio_subcategories`.`id_subcategory` = 2) WHERE `ormvioquestion`.`id_question` = 'vio_subcategories.id_subcategory' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(931): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(106): Model_Mquestions->getSimilarQuestion(1, 5)
#4 [internal function]: Controller_Questions_Questions->action_question()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-04 22:06:48 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.subcategories' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `subcategories`, `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`vio_subcategories`.`id_subcategory` = 2) WHERE `ormvioquestion`.`id_question` = 'vio_subcategories.id_subcategory' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-04 22:06:48 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.subcategories' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `subcategories`, `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`vio_subcategories`.`id_subcategory` = 2) WHERE `ormvioquestion`.`id_question` = 'vio_subcategories.id_subcategory' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(931): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(106): Model_Mquestions->getSimilarQuestion(1, 5)
#4 [internal function]: Controller_Questions_Questions->action_question()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-04 22:07:30 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.ormviosubcategory' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `ormviosubcategory`, `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`vio_subcategories`.`id_subcategory` = 2) WHERE `ormvioquestion`.`id_question` = 'vio_subcategories.id_subcategory' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-04 22:07:30 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.ormviosubcategory' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `ormviosubcategory`, `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`vio_subcategories`.`id_subcategory` = 2) WHERE `ormvioquestion`.`id_question` = 'vio_subcategories.id_subcategory' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(931): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(106): Model_Mquestions->getSimilarQuestion(1, 5)
#4 [internal function]: Controller_Questions_Questions->action_question()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-04 22:07:44 --- ERROR: Database_Exception [ 1066 ]: Not unique table/alias: 'ormvioquestion' [ SELECT COUNT(*) AS `records_found` FROM `ormvioquestion`, `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`vio_subcategories`.`id_subcategory` = 2) WHERE `ormvioquestion`.`id_question` = 'vio_subcategories.id_subcategory' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-04 22:07:44 --- STRACE: Database_Exception [ 1066 ]: Not unique table/alias: 'ormvioquestion' [ SELECT COUNT(*) AS `records_found` FROM `ormvioquestion`, `vio_questions` AS `ormvioquestion` JOIN `vio_subcategories` ON (`vio_subcategories`.`id_subcategory` = 2) WHERE `ormvioquestion`.`id_question` = 'vio_subcategories.id_subcategory' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(931): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(106): Model_Mquestions->getSimilarQuestion(1, 5)
#4 [internal function]: Controller_Questions_Questions->action_question()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-04 22:08:32 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Kohana_ORM::factory(), called in /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php on line 931 and defined ~ MODPATH/orm/classes/kohana/orm.php [ 32 ]
2012-08-04 22:08:32 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Kohana_ORM::factory(), called in /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php on line 931 and defined ~ MODPATH/orm/classes/kohana/orm.php [ 32 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(32): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/admin/Dr...', 32, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(931): Kohana_ORM::factory()
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(106): Model_Mquestions->getSimilarQuestion(1, 5)
#3 [internal function]: Controller_Questions_Questions->action_question()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-04 22:08:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-08-04 22:08:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-04 22:16:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subcategories.id_subcategory' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `subcategories`.`id_subcategory` > '2' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-04 22:16:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subcategories.id_subcategory' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `subcategories`.`id_subcategory` > '2' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(932): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(106): Model_Mquestions->getSimilarQuestion(1, 5)
#4 [internal function]: Controller_Questions_Questions->action_question()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-04 22:16:55 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'ormviosubcategory.id_subcategory' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `ormviosubcategory`.`id_subcategory` > '2' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-04 22:16:55 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'ormviosubcategory.id_subcategory' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `ormviosubcategory`.`id_subcategory` > '2' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(932): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(106): Model_Mquestions->getSimilarQuestion(1, 5)
#4 [internal function]: Controller_Questions_Questions->action_question()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-04 22:18:56 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH/database/classes/kohana/database.php [ 456 ]
2012-08-04 22:18:56 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH/database/classes/kohana/database.php [ 456 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database.php(456): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/admin/Dr...', 456, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query/builder.php(116): Kohana_Database->quote(Object(Database_MySQL_Result))
#2 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query/builder/select.php(370): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#3 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#5 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(935): Kohana_ORM->count_all()
#6 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(106): Model_Mquestions->getSimilarQuestion(1, 5)
#7 [internal function]: Controller_Questions_Questions->action_question()
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#12 {main}
2012-08-04 22:19:05 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH/database/classes/kohana/database.php [ 456 ]
2012-08-04 22:19:05 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH/database/classes/kohana/database.php [ 456 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database.php(456): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/admin/Dr...', 456, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query/builder.php(116): Kohana_Database->quote(Object(Database_MySQL_Result))
#2 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query/builder/select.php(370): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#3 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#5 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(935): Kohana_ORM->count_all()
#6 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(106): Model_Mquestions->getSimilarQuestion(1, 5)
#7 [internal function]: Controller_Questions_Questions->action_question()
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#9 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#12 {main}
2012-08-04 22:19:28 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `id_question` IN () ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-04 22:19:28 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `id_question` IN () ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(935): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(106): Model_Mquestions->getSimilarQuestion(1, 5)
#4 [internal function]: Controller_Questions_Questions->action_question()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-04 22:20:17 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/model/mquestions.php [ 935 ]
2012-08-04 22:20:17 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/model/mquestions.php [ 935 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(935): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/admin/Dr...', 935, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(106): Model_Mquestions->getSimilarQuestion(1, 5)
#2 [internal function]: Controller_Questions_Questions->action_question()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}