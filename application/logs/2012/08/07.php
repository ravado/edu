<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-07 19:37:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `id_question` IN () ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-07 19:37:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `id_question` IN () ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(935): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(109): Model_Mquestions->getSimilarQuestion(1, 5)
#4 [internal function]: Controller_Questions_Questions->action_question()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-07 19:37:48 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `id_question` IN () ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-07 19:37:48 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `id_question` IN () ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(935): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(109): Model_Mquestions->getSimilarQuestion(1, 5)
#4 [internal function]: Controller_Questions_Questions->action_question()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-08-07 19:38:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: questions ~ APPPATH/classes/model/mquestions.php [ 941 ]
2012-08-07 19:38:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: questions ~ APPPATH/classes/model/mquestions.php [ 941 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(941): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 941, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(109): Model_Mquestions->getSimilarQuestion(1, 5)
#2 [internal function]: Controller_Questions_Questions->action_question()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-07 20:30:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: similars ~ APPPATH/views/questions/vQuestionOne.php [ 348 ]
2012-08-07 20:30:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: similars ~ APPPATH/views/questions/vQuestionOne.php [ 348 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionOne.php(348): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 348, Array)
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
2012-08-07 20:31:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: similars ~ APPPATH/views/questions/vQuestionOne.php [ 348 ]
2012-08-07 20:31:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: similars ~ APPPATH/views/questions/vQuestionOne.php [ 348 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionOne.php(348): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 348, Array)
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
2012-08-07 20:38:14 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/questions/vQuestionOne.php [ 348 ]
2012-08-07 20:38:14 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/questions/vQuestionOne.php [ 348 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionOne.php(348): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Users/admin/Dr...', 348, Array)
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
2012-08-07 20:38:36 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'rand' in 'order clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` ORDER BY `rand` LIMIT 5 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-07 20:38:36 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'rand' in 'order clause' [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` ORDER BY `rand` LIMIT 5 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvioq...', 'Model_OrmViOque...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(960): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(112): Model_Mquestions->getRandomQuestion(5)
#5 [internal function]: Controller_Questions_Questions->action_question()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-07 21:12:22 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 25' at line 1 [ SELECT `ormvioquestsub`.* FROM `vio_questions_subcategories` AS `ormvioquestsub` WHERE `question_id` != 226 AND `subcategory_id` IN () LIMIT 25 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-07 21:12:22 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 25' at line 1 [ SELECT `ormvioquestsub`.* FROM `vio_questions_subcategories` AS `ormvioquestsub` WHERE `question_id` != 226 AND `subcategory_id` IN () LIMIT 25 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvioq...', 'Model_OrmViOque...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(940): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(109): Model_Mquestions->getSimilarQuestion(226, 5)
#5 [internal function]: Controller_Questions_Questions->action_question()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-07 21:12:58 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 25' at line 1 [ SELECT `ormvioquestsub`.* FROM `vio_questions_subcategories` AS `ormvioquestsub` WHERE `question_id` != 259 AND `subcategory_id` IN () LIMIT 25 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-07 21:12:58 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 25' at line 1 [ SELECT `ormvioquestsub`.* FROM `vio_questions_subcategories` AS `ormvioquestsub` WHERE `question_id` != 259 AND `subcategory_id` IN () LIMIT 25 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvioq...', 'Model_OrmViOque...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(940): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(109): Model_Mquestions->getSimilarQuestion(259, 5)
#5 [internal function]: Controller_Questions_Questions->action_question()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-07 21:13:57 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `ormvioquestsub`.* FROM `vio_questions_subcategories` AS `ormvioquestsub` WHERE `question_id` != 259 AND `subcategory_id` IN () ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-07 21:13:57 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `ormvioquestsub`.* FROM `vio_questions_subcategories` AS `ormvioquestsub` WHERE `question_id` != 259 AND `subcategory_id` IN () ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvioq...', 'Model_OrmViOque...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(940): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(109): Model_Mquestions->getSimilarQuestion(259, 5)
#5 [internal function]: Controller_Questions_Questions->action_question()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-07 21:14:56 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 25' at line 1 [ SELECT `ormvioquestsub`.* FROM `vio_questions_subcategories` AS `ormvioquestsub` WHERE `question_id` != 317 AND `subcategory_id` IN () LIMIT 25 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-07 21:14:56 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') LIMIT 25' at line 1 [ SELECT `ormvioquestsub`.* FROM `vio_questions_subcategories` AS `ormvioquestsub` WHERE `question_id` != 317 AND `subcategory_id` IN () LIMIT 25 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvioq...', 'Model_OrmViOque...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(940): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(109): Model_Mquestions->getSimilarQuestion(317, 5)
#5 [internal function]: Controller_Questions_Questions->action_question()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}