<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-08 13:09:37 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.category' doesn't exist [ SELECT `category`.`id_category`, `category`.`ctitle` FROM `category` WHERE `category`.`ctitle` != 'usercategory' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-08-08 13:09:37 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.category' doesn't exist [ SELECT `category`.`id_category`, `category`.`ctitle` FROM `category` WHERE `category`.`ctitle` != 'usercategory' ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `categor...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(442): Kohana_Database_Query->execute()
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(137): Model_Mquestions->getAllCategories('some')
#3 [internal function]: Controller_Questions_Questions->action_ask()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-08-08 13:10:55 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_OrmViOcategory as array ~ APPPATH/views/questions/vQuestionsAsk.php [ 59 ]
2012-08-08 13:10:55 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_OrmViOcategory as array ~ APPPATH/views/questions/vQuestionsAsk.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-08 13:25:46 --- ERROR: ErrorException [ 8 ]: Undefined index: question ~ APPPATH/classes/controller/questions/questions.php [ 132 ]
2012-08-08 13:25:46 --- STRACE: ErrorException [ 8 ]: Undefined index: question ~ APPPATH/classes/controller/questions/questions.php [ 132 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(132): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 132, Array)
#1 [internal function]: Controller_Questions_Questions->action_ask()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-08 13:30:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: user_auth ~ APPPATH/views/questions/vQuestionsAsk.php [ 6 ]
2012-08-08 13:30:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: user_auth ~ APPPATH/views/questions/vQuestionsAsk.php [ 6 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionsAsk.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 6, Array)
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
2012-08-08 13:32:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH/views/questions/vQuestionsAsk.php [ 70 ]
2012-08-08 13:32:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH/views/questions/vQuestionsAsk.php [ 70 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionsAsk.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 70, Array)
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