<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-22 01:52:43 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/views/adm/vAdmVioQuestions.php [ 29 ]
2012-07-22 01:52:43 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/views/adm/vAdmVioQuestions.php [ 29 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', '/Users/admin/Dr...', 29, Array)
#1 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmVioQuestions.php(29): date('Y-m-d H:i', '2012-10-25 18:0...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdm.php(9): Kohana_View->__toString()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#9 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(25): Kohana_View->__toString()
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#12 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#13 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Base->after()
#15 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#16 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#19 {main}
2012-07-22 01:53:04 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/views/adm/vAdmVioQuestions.php [ 29 ]
2012-07-22 01:53:04 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/views/adm/vAdmVioQuestions.php [ 29 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', '/Users/admin/Dr...', 29, Array)
#1 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmVioQuestions.php(29): date('Y-m-d H:i', '2012-10-25 18:0...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdm.php(9): Kohana_View->__toString()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#9 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(25): Kohana_View->__toString()
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#12 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#13 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Base->after()
#15 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#16 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#19 {main}
2012-07-22 01:53:49 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/views/adm/vAdmVioQuestions.php [ 29 ]
2012-07-22 01:53:49 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/views/adm/vAdmVioQuestions.php [ 29 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', '/Users/admin/Dr...', 29, Array)
#1 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmVioQuestions.php(29): date('Y-m-d H:i', '2012-10-25 18:0...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdm.php(9): Kohana_View->__toString()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#9 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(25): Kohana_View->__toString()
#10 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#12 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#13 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#14 [internal function]: Controller_Base->after()
#15 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#16 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#19 {main}
2012-07-22 12:10:09 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.questions' doesn't exist [ SELECT `questions`.`id_question`, `questions`.`title`, `questions`.`id_user`, `questions`.`public_date`, `questions`.`answers_count`, `users`.`username`, `qfavorite`.`id_qfavorite` FROM `questions` JOIN `users` ON (`questions`.`id_user` = `users`.`id`) LEFT JOIN `qfavorite` ON (`qfavorite`.`id_question` = `questions`.`id_question` AND `qfavorite`.`id_user` = 6) ORDER BY `questions`.`public_date` DESC LIMIT 15 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-07-22 12:10:09 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.questions' doesn't exist [ SELECT `questions`.`id_question`, `questions`.`title`, `questions`.`id_user`, `questions`.`public_date`, `questions`.`answers_count`, `users`.`username`, `qfavorite`.`id_qfavorite` FROM `questions` JOIN `users` ON (`questions`.`id_user` = `users`.`id`) LEFT JOIN `qfavorite` ON (`qfavorite`.`id_question` = `questions`.`id_question` AND `qfavorite`.`id_user` = 6) ORDER BY `questions`.`public_date` DESC LIMIT 15 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
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
2012-07-22 12:13:10 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.questions' doesn't exist [ SELECT `questions`.`id_question`, `questions`.`title`, `questions`.`id_user`, `questions`.`public_date`, `questions`.`answers_count`, `users`.`username`, `qfavorite`.`id_qfavorite` FROM `questions` JOIN `users` ON (`questions`.`id_user` = `users`.`id`) LEFT JOIN `qfavorite` ON (`qfavorite`.`id_question` = `questions`.`id_question` AND `qfavorite`.`id_user` = 6) ORDER BY `questions`.`public_date` DESC LIMIT 15 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-07-22 12:13:10 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.questions' doesn't exist [ SELECT `questions`.`id_question`, `questions`.`title`, `questions`.`id_user`, `questions`.`public_date`, `questions`.`answers_count`, `users`.`username`, `qfavorite`.`id_qfavorite` FROM `questions` JOIN `users` ON (`questions`.`id_user` = `users`.`id`) LEFT JOIN `qfavorite` ON (`qfavorite`.`id_question` = `questions`.`id_question` AND `qfavorite`.`id_user` = 6) ORDER BY `questions`.`public_date` DESC LIMIT 15 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
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
2012-07-22 12:34:04 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/adm/vAdmVioQuestions.php [ 19 ]
2012-07-22 12:34:04 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/adm/vAdmVioQuestions.php [ 19 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmVioQuestions.php(19): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/admin/Dr...', 19, Array)
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
2012-07-22 12:35:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/adm/vAdmVioQuestions.php [ 19 ]
2012-07-22 12:35:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/adm/vAdmVioQuestions.php [ 19 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmVioQuestions.php(19): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/admin/Dr...', 19, Array)
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
2012-07-22 12:35:51 --- ERROR: ErrorException [ 2 ]: Cannot use a scalar value as an array ~ APPPATH/classes/controller/adm/vio.php [ 113 ]
2012-07-22 12:35:51 --- STRACE: ErrorException [ 2 ]: Cannot use a scalar value as an array ~ APPPATH/classes/controller/adm/vio.php [ 113 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/vio.php(113): Kohana_Core::error_handler(2, 'Cannot use a sc...', '/Users/admin/Dr...', 113, Array)
#1 [internal function]: Controller_Adm_Vio->action_questions()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-22 12:36:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: questions ~ APPPATH/views/adm/vAdmVioQuestions.php [ 16 ]
2012-07-22 12:36:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: questions ~ APPPATH/views/adm/vAdmVioQuestions.php [ 16 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmVioQuestions.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 16, Array)
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
2012-07-22 12:36:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: questions ~ APPPATH/views/adm/vAdmVioQuestions.php [ 16 ]
2012-07-22 12:36:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: questions ~ APPPATH/views/adm/vAdmVioQuestions.php [ 16 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmVioQuestions.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 16, Array)
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
2012-07-22 12:36:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: questions ~ APPPATH/views/adm/vAdmVioQuestions.php [ 16 ]
2012-07-22 12:36:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: questions ~ APPPATH/views/adm/vAdmVioQuestions.php [ 16 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmVioQuestions.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 16, Array)
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
2012-07-22 12:38:37 --- ERROR: Kohana_Exception [ 0 ]: The pages property does not exist in the Model_OrmViOquestion class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-22 12:38:37 --- STRACE: Kohana_Exception [ 0 ]: The pages property does not exist in the Model_OrmViOquestion class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmVioQuestions.php(34): Kohana_ORM->__get('pages')
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
2012-07-22 12:38:50 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/adm/vAdmVioQuestions.php [ 34 ]
2012-07-22 12:38:50 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/adm/vAdmVioQuestions.php [ 34 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmVioQuestions.php(34): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/admin/Dr...', 34, Array)
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
2012-07-22 12:39:31 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/adm/vAdmVioQuestions.php [ 34 ]
2012-07-22 12:39:31 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/adm/vAdmVioQuestions.php [ 34 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmVioQuestions.php(34): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/admin/Dr...', 34, Array)
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
2012-07-22 12:55:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/questions/vQuestionAll.php [ 4 ]
2012-07-22 12:55:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/questions/vQuestionAll.php [ 4 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(4): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/admin/Dr...', 4, Array)
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
2012-07-22 13:36:39 --- ERROR: ErrorException [ 8 ]: Undefined index: orderby ~ APPPATH/classes/controller/adm/vio.php [ 121 ]
2012-07-22 13:36:39 --- STRACE: ErrorException [ 8 ]: Undefined index: orderby ~ APPPATH/classes/controller/adm/vio.php [ 121 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/vio.php(121): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 121, Array)
#1 [internal function]: Controller_Adm_Vio->action_questions()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-22 13:46:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subcategories.id_subcategory' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `subcategories`.`id_subcategory` = 17 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-07-22 13:46:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subcategories.id_subcategory' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `subcategories`.`id_subcategory` = 17 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(778): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/vio.php(125): Model_Mquestions->getQuestionsList(1, 10, 'date', 17)
#4 [internal function]: Controller_Adm_Vio->action_questions()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-22 13:46:47 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subcategories->id_subcategory' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `subcategories->id_subcategory` = 17 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-07-22 13:46:47 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subcategories->id_subcategory' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `subcategories->id_subcategory` = 17 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(778): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/vio.php(125): Model_Mquestions->getQuestionsList(1, 10, 'date', 17)
#4 [internal function]: Controller_Adm_Vio->action_questions()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-22 13:51:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subcategories' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `subcategories` = 17 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-07-22 13:51:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subcategories' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `subcategories` = 17 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(778): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/vio.php(125): Model_Mquestions->getQuestionsList(1, 10, 'date', 17)
#4 [internal function]: Controller_Adm_Vio->action_questions()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-22 13:55:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subcategories' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `subcategories` = 17 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-07-22 13:55:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subcategories' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `subcategories` = 17 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(778): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/vio.php(125): Model_Mquestions->getQuestionsList(1, 10, 'date', 17)
#4 [internal function]: Controller_Adm_Vio->action_questions()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-22 13:55:25 --- ERROR: View_Exception [ 0 ]: The requested view userguide/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-22 13:55:25 --- STRACE: View_Exception [ 0 ]: The requested view userguide/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(137): Kohana_View->set_filename('userguide/index')
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(30): Kohana_View->__construct('userguide/index', Array)
#2 /Users/admin/Dropbox/sites/edu/modules/userguide/classes/controller/userguide.php(58): Kohana_View::factory('userguide/index', Array)
#3 /Users/admin/Dropbox/sites/edu/modules/userguide/classes/controller/userguide.php(120): Controller_Userguide->index()
#4 [internal function]: Controller_Userguide->action_docs()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Userguide))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-22 13:58:54 --- ERROR: ErrorException [ 1 ]: Call to a member function count_all() on a non-object ~ APPPATH/classes/model/mquestions.php [ 778 ]
2012-07-22 13:58:54 --- STRACE: ErrorException [ 1 ]: Call to a member function count_all() on a non-object ~ APPPATH/classes/model/mquestions.php [ 778 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-22 13:59:24 --- ERROR: ErrorException [ 1 ]: Call to a member function limit() on a non-object ~ APPPATH/classes/model/mquestions.php [ 780 ]
2012-07-22 13:59:24 --- STRACE: ErrorException [ 1 ]: Call to a member function limit() on a non-object ~ APPPATH/classes/model/mquestions.php [ 780 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-22 14:02:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'id_subcategory' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `id_subcategory` = 17 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-07-22 14:02:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'id_subcategory' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `id_subcategory` = 17 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(778): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/vio.php(125): Model_Mquestions->getQuestionsList(1, 10, 'date', 17)
#4 [internal function]: Controller_Adm_Vio->action_questions()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-22 14:02:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subcategory_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `subcategory_id` = 17 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-07-22 14:02:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subcategory_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `subcategory_id` = 17 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(778): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/vio.php(125): Model_Mquestions->getQuestionsList(1, 10, 'date', 17)
#4 [internal function]: Controller_Adm_Vio->action_questions()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-22 14:10:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subcategory_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `subcategory_id` = 17 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-07-22 14:10:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subcategory_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `subcategory_id` = 17 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(778): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/vio.php(125): Model_Mquestions->getQuestionsList(1, 10, 'date', 17)
#4 [internal function]: Controller_Adm_Vio->action_questions()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-22 14:10:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'subcategory_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `subcategory_id` = 17 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-07-22 14:10:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'subcategory_id' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `subcategory_id` = 17 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(778): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/vio.php(125): Model_Mquestions->getQuestionsList(1, 10, 'date', 17)
#4 [internal function]: Controller_Adm_Vio->action_questions()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-22 14:10:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'id_subcategory' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `id_subcategory` = 17 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-07-22 14:10:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'id_subcategory' in 'where clause' [ SELECT COUNT(*) AS `records_found` FROM `vio_questions` AS `ormvioquestion` WHERE `id_subcategory` = 17 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1484): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(778): Kohana_ORM->count_all()
#3 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/vio.php(125): Model_Mquestions->getQuestionsList(1, 10, 'date', 17)
#4 [internal function]: Controller_Adm_Vio->action_questions()
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-22 14:13:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$title ~ APPPATH/classes/model/mquestions.php [ 781 ]
2012-07-22 14:13:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$title ~ APPPATH/classes/model/mquestions.php [ 781 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(781): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/admin/Dr...', 781, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/vio.php(125): Model_Mquestions->getQuestionsList(1, 10, 'date', 17)
#2 [internal function]: Controller_Adm_Vio->action_questions()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-22 14:20:39 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/adm/vAdmVioQuestions.php [ 16 ]
2012-07-22 14:20:39 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/adm/vAdmVioQuestions.php [ 16 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmVioQuestions.php(16): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Users/admin/Dr...', 16, Array)
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
2012-07-22 14:21:12 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/adm/vAdmVioQuestions.php [ 16 ]
2012-07-22 14:21:12 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/adm/vAdmVioQuestions.php [ 16 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmVioQuestions.php(16): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Users/admin/Dr...', 16, Array)
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
2012-07-22 14:21:30 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/model/mquestions.php [ 781 ]
2012-07-22 14:21:30 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/model/mquestions.php [ 781 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(781): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/admin/Dr...', 781, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/vio.php(125): Model_Mquestions->getQuestionsList(1, 10, 'date', 21)
#2 [internal function]: Controller_Adm_Vio->action_questions()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-22 14:21:57 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/model/mquestions.php [ 781 ]
2012-07-22 14:21:57 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/model/mquestions.php [ 781 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(781): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/admin/Dr...', 781, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/vio.php(125): Model_Mquestions->getQuestionsList(1, 10, 'date', 21)
#2 [internal function]: Controller_Adm_Vio->action_questions()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-22 14:24:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::order_by() ~ APPPATH/classes/model/mquestions.php [ 780 ]
2012-07-22 14:24:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::order_by() ~ APPPATH/classes/model/mquestions.php [ 780 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-22 15:39:04 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` ORDER BY `public_date` DESC LIMIT 10 OFFSET -10 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-07-22 15:39:04 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` ORDER BY `public_date` DESC LIMIT 10 OFFSET -10 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvioq...', 'Model_OrmViOque...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(776): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/vio.php(124): Model_Mquestions->getQuestionsList('0', 10, 'date', NULL)
#5 [internal function]: Controller_Adm_Vio->action_questions()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-22 15:39:16 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` ORDER BY `public_date` DESC LIMIT 10 OFFSET -10 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-07-22 15:39:16 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT `ormvioquestion`.* FROM `vio_questions` AS `ormvioquestion` ORDER BY `public_date` DESC LIMIT 10 OFFSET -10 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvioq...', 'Model_OrmViOque...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(776): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/vio.php(124): Model_Mquestions->getQuestionsList('0', 10, 'date', NULL)
#5 [internal function]: Controller_Adm_Vio->action_questions()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-22 16:04:45 --- ERROR: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH/classes/controller/adm/vio.php [ 111 ]
2012-07-22 16:04:45 --- STRACE: ErrorException [ 8 ]: Undefined index: limit ~ APPPATH/classes/controller/adm/vio.php [ 111 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/vio.php(111): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 111, Array)
#1 [internal function]: Controller_Adm_Vio->action_questions()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-22 16:24:07 --- ERROR: ErrorException [ 8 ]: Undefined index: page ~ APPPATH/classes/controller/adm/vio.php [ 108 ]
2012-07-22 16:24:07 --- STRACE: ErrorException [ 8 ]: Undefined index: page ~ APPPATH/classes/controller/adm/vio.php [ 108 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/vio.php(108): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 108, Array)
#1 [internal function]: Controller_Adm_Vio->action_questions()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Vio))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-22 20:41:16 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::delete() ~ APPPATH/classes/controller/adm/ahid.php [ 630 ]
2012-07-22 20:41:16 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::delete() ~ APPPATH/classes/controller/adm/ahid.php [ 630 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-22 20:43:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::delete_all() ~ APPPATH/classes/controller/adm/ahid.php [ 635 ]
2012-07-22 20:43:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::delete_all() ~ APPPATH/classes/controller/adm/ahid.php [ 635 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}