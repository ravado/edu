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