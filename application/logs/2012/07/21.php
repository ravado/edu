<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-21 21:45:08 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::remove() ~ APPPATH/classes/controller/adm/ahid.php [ 590 ]
2012-07-21 21:45:08 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::remove() ~ APPPATH/classes/controller/adm/ahid.php [ 590 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-21 21:46:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::delete() ~ APPPATH/classes/controller/adm/ahid.php [ 593 ]
2012-07-21 21:46:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::delete() ~ APPPATH/classes/controller/adm/ahid.php [ 593 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-21 22:43:13 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.questions' doesn't exist [ SELECT `questions`.`title`, `questions`.`closed`, `questions`.`id_question`, `questions`.`full` FROM `questions` WHERE `id_question` = 217 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-07-21 22:43:13 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.questions' doesn't exist [ SELECT `questions`.`title`, `questions`.`closed`, `questions`.`id_question`, `questions`.`full` FROM `questions` WHERE `id_question` = 217 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `questio...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(686): Kohana_Database_Query->execute()
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(113): Model_Mquestions->getQuestionAllById('217')
#3 [internal function]: Controller_Adm_Ahid->action_getQuestionAllById()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-21 22:50:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/views/adm/vAdmVioQuestions.php [ 48 ]
2012-07-21 22:50:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/views/adm/vAdmVioQuestions.php [ 48 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/adm/vAdmVioQuestions.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 48, Array)
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