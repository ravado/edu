<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-31 12:34:18 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH/views/questions/vQuestions.php [ 23 ]
2012-07-31 12:34:18 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH/views/questions/vQuestions.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-31 13:02:58 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/views/questions/vQuestions.php [ 24 ]
2012-07-31 13:02:58 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/views/questions/vQuestions.php [ 24 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestions.php(24): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/admin/Dr...', 24, Array)
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
2012-07-31 14:11:13 --- ERROR: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, integer given ~ APPPATH/classes/model/mquestions.php [ 877 ]
2012-07-31 14:11:13 --- STRACE: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, integer given ~ APPPATH/classes/model/mquestions.php [ 877 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', '/Users/admin/Dr...', 877, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(877): array_push(0, Array)
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(23): Model_Mquestions->getUserPopularTags('6')
#3 [internal function]: Controller_Questions_Questions->action_index()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-31 15:48:56 --- ERROR: Kohana_Exception [ 0 ]: The favorite property does not exist in the Model_OrmViOquestion class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-31 15:48:56 --- STRACE: Kohana_Exception [ 0 ]: The favorite property does not exist in the Model_OrmViOquestion class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestions.php(156): Kohana_ORM->__get('favorite')
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
2012-07-31 15:55:36 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/views/questions/vQuestions.php [ 156 ]
2012-07-31 15:55:36 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/views/questions/vQuestions.php [ 156 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-31 15:58:01 --- ERROR: ErrorException [ 8 ]: Undefined index: id_quetion ~ APPPATH/views/questions/vQuestions.php [ 157 ]
2012-07-31 15:58:01 --- STRACE: ErrorException [ 8 ]: Undefined index: id_quetion ~ APPPATH/views/questions/vQuestions.php [ 157 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestions.php(157): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 157, Array)
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
2012-07-31 15:58:11 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_OrmViOfavorite as array ~ APPPATH/views/questions/vQuestions.php [ 157 ]
2012-07-31 15:58:11 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_OrmViOfavorite as array ~ APPPATH/views/questions/vQuestions.php [ 157 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-31 16:00:04 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_OrmViOfavorite as array ~ APPPATH/views/questions/vQuestions.php [ 157 ]
2012-07-31 16:00:04 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_OrmViOfavorite as array ~ APPPATH/views/questions/vQuestions.php [ 157 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-31 16:00:45 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_OrmViOfavorite as array ~ APPPATH/views/questions/vQuestions.php [ 157 ]
2012-07-31 16:00:45 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_OrmViOfavorite as array ~ APPPATH/views/questions/vQuestions.php [ 157 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-31 16:01:44 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH/views/questions/vQuestions.php [ 156 ]
2012-07-31 16:01:44 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH/views/questions/vQuestions.php [ 156 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-31 16:05:51 --- ERROR: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_OrmViOfavorite class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-07-31 16:05:51 --- STRACE: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_OrmViOfavorite class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestions.php(159): Kohana_ORM->__get('id_question')
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
2012-07-31 16:10:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: favorites ~ APPPATH/views/questions/vQuestions.php [ 159 ]
2012-07-31 16:10:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: favorites ~ APPPATH/views/questions/vQuestions.php [ 159 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestions.php(159): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 159, Array)
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
2012-07-31 16:33:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: last ~ APPPATH/views/questions/vQuestions.php [ 114 ]
2012-07-31 16:33:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: last ~ APPPATH/views/questions/vQuestions.php [ 114 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestions.php(114): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 114, Array)
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
2012-07-31 19:29:45 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` WHERE `id_subcategory` IN () ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-07-31 19:29:45 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `ormviosubcategory`.* FROM `vio_subcategories` AS `ormviosubcategory` WHERE `id_subcategory` IN () ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `ormvios...', 'Model_OrmViOsub...', Array)
#1 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/admin/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(881): Kohana_ORM->find_all()
#4 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(22): Model_Mquestions->getUserPopularTags('1')
#5 [internal function]: Controller_Questions_Questions->action_index()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-31 19:31:47 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/questions/vQuestions.php [ 34 ]
2012-07-31 19:31:47 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/questions/vQuestions.php [ 34 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestions.php(34): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Users/admin/Dr...', 34, Array)
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
2012-07-31 21:00:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/views/questions/vQuestions.php [ 53 ]
2012-07-31 21:00:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH/views/questions/vQuestions.php [ 53 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestions.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 53, Array)
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
2012-07-31 21:01:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: populars ~ APPPATH/views/questions/vQuestionAll.php [ 107 ]
2012-07-31 21:01:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: populars ~ APPPATH/views/questions/vQuestionAll.php [ 107 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(107): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 107, Array)
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
2012-07-31 21:03:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id_question ~ APPPATH/views/questions/vQuestionAll.php [ 116 ]
2012-07-31 21:03:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id_question ~ APPPATH/views/questions/vQuestionAll.php [ 116 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(116): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/admin/Dr...', 116, Array)
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
2012-07-31 21:04:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id_question ~ APPPATH/views/questions/vQuestionAll.php [ 116 ]
2012-07-31 21:04:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id_question ~ APPPATH/views/questions/vQuestionAll.php [ 116 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(116): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/admin/Dr...', 116, Array)
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
2012-07-31 22:52:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: pages ~ APPPATH/views/questions/vQuestionAll.php [ 162 ]
2012-07-31 22:52:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: pages ~ APPPATH/views/questions/vQuestionAll.php [ 162 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(162): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 162, Array)
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