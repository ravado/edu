<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-19 12:36:23 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.questions' doesn't exist [ SELECT `questions`.`id_question`, `questions`.`title`, `questions`.`id_user`, `questions`.`public_date`, `questions`.`answers_count`, `users`.`username`, `qfavorite`.`id_qfavorite` FROM `questions` JOIN `users` ON (`questions`.`id_user` = `users`.`id`) LEFT JOIN `qfavorite` ON (`qfavorite`.`id_question` = `questions`.`id_question` AND `qfavorite`.`id_user` = 6) ORDER BY `questions`.`public_date` DESC LIMIT 15 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-07-19 12:36:23 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.questions' doesn't exist [ SELECT `questions`.`id_question`, `questions`.`title`, `questions`.`id_user`, `questions`.`public_date`, `questions`.`answers_count`, `users`.`username`, `qfavorite`.`id_qfavorite` FROM `questions` JOIN `users` ON (`questions`.`id_user` = `users`.`id`) LEFT JOIN `qfavorite` ON (`qfavorite`.`id_question` = `questions`.`id_question` AND `qfavorite`.`id_user` = 6) ORDER BY `questions`.`public_date` DESC LIMIT 15 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
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
2012-07-19 12:47:06 --- ERROR: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_Ormuser class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-19 12:47:06 --- STRACE: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_Ormuser class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(265): Kohana_ORM->__get('id_user')
#1 [internal function]: Controller_Adm_Ahid->action_getQuestion()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-19 13:49:01 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/classes/controller/adm/ahid.php [ 267 ]
2012-07-19 13:49:01 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/classes/controller/adm/ahid.php [ 267 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', '/Users/admin/Dr...', 267, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(267): strftime('H:i', '2012-07-02 22:1...')
#2 [internal function]: Controller_Adm_Ahid->action_getQuestion()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-19 13:49:05 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/classes/controller/adm/ahid.php [ 267 ]
2012-07-19 13:49:05 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/classes/controller/adm/ahid.php [ 267 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', '/Users/admin/Dr...', 267, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(267): strftime('H:i', '2012-07-02 22:1...')
#2 [internal function]: Controller_Adm_Ahid->action_getQuestion()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-19 13:51:06 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/classes/controller/adm/ahid.php [ 267 ]
2012-07-19 13:51:06 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/classes/controller/adm/ahid.php [ 267 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', '/Users/admin/Dr...', 267, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(267): date('H:i', '2012-07-02 22:1...')
#2 [internal function]: Controller_Adm_Ahid->action_getQuestion()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-19 13:51:28 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/classes/controller/adm/ahid.php [ 267 ]
2012-07-19 13:51:28 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/classes/controller/adm/ahid.php [ 267 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', '/Users/admin/Dr...', 267, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(267): date('H:i', '2012-07-02 22:1...')
#2 [internal function]: Controller_Adm_Ahid->action_getQuestion()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-19 13:53:22 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/classes/controller/adm/ahid.php [ 267 ]
2012-07-19 13:53:22 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/classes/controller/adm/ahid.php [ 267 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', '/Users/admin/Dr...', 267, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(267): date('H:i', '2012-07-02 22:1...')
#2 [internal function]: Controller_Adm_Ahid->action_getQuestion()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-19 13:56:09 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/classes/controller/adm/ahid.php [ 267 ]
2012-07-19 13:56:09 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/classes/controller/adm/ahid.php [ 267 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', '/Users/admin/Dr...', 267, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(267): date('H:i', '2012-07-02 22:1...')
#2 [internal function]: Controller_Adm_Ahid->action_getQuestion()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-19 13:56:14 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/classes/controller/adm/ahid.php [ 267 ]
2012-07-19 13:56:14 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/classes/controller/adm/ahid.php [ 267 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', '/Users/admin/Dr...', 267, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(267): date('H:i', '2012-07-18 22:0...')
#2 [internal function]: Controller_Adm_Ahid->action_getQuestion()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-19 14:54:54 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/adm/ahid.php [ 267 ]
2012-07-19 14:54:54 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/adm/ahid.php [ 267 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(267): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/admin/Dr...', 267, Array)
#1 [internal function]: Controller_Adm_Ahid->action_getQuestion()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-19 14:56:37 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/adm/ahid.php [ 268 ]
2012-07-19 14:56:37 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/controller/adm/ahid.php [ 268 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(268): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/admin/Dr...', 268, Array)
#1 [internal function]: Controller_Adm_Ahid->action_getQuestion()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-19 15:49:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH/classes/controller/adm/ahid.php [ 263 ]
2012-07-19 15:49:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH/classes/controller/adm/ahid.php [ 263 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-19 17:15:30 --- ERROR: ErrorException [ 8 ]: Undefined index: id_question ~ APPPATH/classes/controller/adm/ahid.php [ 305 ]
2012-07-19 17:15:30 --- STRACE: ErrorException [ 8 ]: Undefined index: id_question ~ APPPATH/classes/controller/adm/ahid.php [ 305 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(305): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 305, Array)
#1 [internal function]: Controller_Adm_Ahid->action_updateQuestion()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-19 17:17:27 --- ERROR: ErrorException [ 8 ]: Undefined index: id_question ~ APPPATH/classes/controller/adm/ahid.php [ 305 ]
2012-07-19 17:17:27 --- STRACE: ErrorException [ 8 ]: Undefined index: id_question ~ APPPATH/classes/controller/adm/ahid.php [ 305 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(305): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 305, Array)
#1 [internal function]: Controller_Adm_Ahid->action_updateQuestion()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-19 17:18:49 --- ERROR: ErrorException [ 8 ]: Undefined index: id_question ~ APPPATH/classes/controller/adm/ahid.php [ 305 ]
2012-07-19 17:18:49 --- STRACE: ErrorException [ 8 ]: Undefined index: id_question ~ APPPATH/classes/controller/adm/ahid.php [ 305 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(305): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 305, Array)
#1 [internal function]: Controller_Adm_Ahid->action_updateQuestion()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-19 17:22:46 --- ERROR: ErrorException [ 8 ]: Undefined index: id_question ~ APPPATH/classes/controller/adm/ahid.php [ 305 ]
2012-07-19 17:22:46 --- STRACE: ErrorException [ 8 ]: Undefined index: id_question ~ APPPATH/classes/controller/adm/ahid.php [ 305 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(305): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 305, Array)
#1 [internal function]: Controller_Adm_Ahid->action_updateQuestion()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-19 17:28:49 --- ERROR: ErrorException [ 1 ]: Call to undefined function remove() ~ APPPATH/classes/controller/adm/ahid.php [ 322 ]
2012-07-19 17:28:49 --- STRACE: ErrorException [ 1 ]: Call to undefined function remove() ~ APPPATH/classes/controller/adm/ahid.php [ 322 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-19 18:03:51 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/adm/ahid.php [ 348 ]
2012-07-19 18:03:51 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/adm/ahid.php [ 348 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(348): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/admin/Dr...', 348, Array)
#1 [internal function]: Controller_Adm_Ahid->action_updateQuestion()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-19 18:04:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/adm/ahid.php [ 348 ]
2012-07-19 18:04:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/adm/ahid.php [ 348 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(348): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/admin/Dr...', 348, Array)
#1 [internal function]: Controller_Adm_Ahid->action_updateQuestion()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-19 18:04:48 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/adm/ahid.php [ 348 ]
2012-07-19 18:04:48 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/adm/ahid.php [ 348 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(348): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/admin/Dr...', 348, Array)
#1 [internal function]: Controller_Adm_Ahid->action_updateQuestion()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-19 18:05:13 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/adm/ahid.php [ 348 ]
2012-07-19 18:05:13 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/adm/ahid.php [ 348 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(348): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/admin/Dr...', 348, Array)
#1 [internal function]: Controller_Adm_Ahid->action_updateQuestion()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-19 18:06:19 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/adm/ahid.php [ 348 ]
2012-07-19 18:06:19 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/adm/ahid.php [ 348 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(348): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/admin/Dr...', 348, Array)
#1 [internal function]: Controller_Adm_Ahid->action_updateQuestion()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-19 18:06:35 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/adm/ahid.php [ 348 ]
2012-07-19 18:06:35 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/adm/ahid.php [ 348 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(348): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/admin/Dr...', 348, Array)
#1 [internal function]: Controller_Adm_Ahid->action_updateQuestion()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-19 18:06:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/adm/ahid.php [ 348 ]
2012-07-19 18:06:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/adm/ahid.php [ 348 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(348): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/admin/Dr...', 348, Array)
#1 [internal function]: Controller_Adm_Ahid->action_updateQuestion()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-19 18:08:03 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/adm/ahid.php [ 350 ]
2012-07-19 18:08:03 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/adm/ahid.php [ 350 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(350): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/admin/Dr...', 350, Array)
#1 [internal function]: Controller_Adm_Ahid->action_updateQuestion()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-19 18:08:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/controller/adm/ahid.php [ 356 ]
2012-07-19 18:08:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/controller/adm/ahid.php [ 356 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(356): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 356, Array)
#1 [internal function]: Controller_Adm_Ahid->action_updateQuestion()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}