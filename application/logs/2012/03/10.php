<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-10 17:38:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/controller/questions/questions.php [ 207 ]
2012-03-10 17:38:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/controller/questions/questions.php [ 207 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/questions/questions.php(207): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/STORED...', 207, Array)
#1 [internal function]: Controller_Questions_Questions->action_test()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-10 17:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-10 17:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-10 17:38:55 --- ERROR: ErrorException [ 8 ]: Undefined index: per_page ~ APPPATH/classes/model/mquestions.php [ 467 ]
2012-03-10 17:38:55 --- STRACE: ErrorException [ 8 ]: Undefined index: per_page ~ APPPATH/classes/model/mquestions.php [ 467 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/model/mquestions.php(467): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/STORED...', 467, Array)
#1 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/questions/questions.php(208): Model_Mquestions->getAllQuestions(Array)
#2 [internal function]: Controller_Questions_Questions->action_test()
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-10 17:38:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-10 17:38:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-10 17:39:07 --- ERROR: ErrorException [ 8 ]: Undefined index: per_page ~ APPPATH/classes/model/mquestions.php [ 467 ]
2012-03-10 17:39:07 --- STRACE: ErrorException [ 8 ]: Undefined index: per_page ~ APPPATH/classes/model/mquestions.php [ 467 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/model/mquestions.php(467): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/STORED...', 467, Array)
#1 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/questions/questions.php(208): Model_Mquestions->getAllQuestions(Array)
#2 [internal function]: Controller_Questions_Questions->action_test()
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-10 17:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-10 17:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-10 17:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL questions/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-03-10 17:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL questions/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-10 17:39:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-10 17:39:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-10 17:40:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL testorm was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-10 17:40:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL testorm was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-10 17:40:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-10 17:40:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-10 17:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL testorm was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-10 17:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL testorm was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-10 17:41:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-10 17:41:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-10 17:41:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL testorm was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-10 17:41:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL testorm was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-10 17:41:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-10 17:41:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-10 17:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL testorm was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-10 17:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL testorm was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-10 17:41:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-10 17:41:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-10 17:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL questions/questions/all/any was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-03-10 17:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL questions/questions/all/any was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-10 17:43:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-10 17:43:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-10 17:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL questions/questions/all/any was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-03-10 17:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL questions/questions/all/any was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-10 17:45:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-10 17:45:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-10 17:45:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL questions/questions/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-03-10 17:45:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL questions/questions/all was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-10 17:45:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-10 17:45:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-10 17:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL questions/questions/all/any was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-03-10 17:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL questions/questions/all/any was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-10 17:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-10 17:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-10 17:47:04 --- ERROR: ErrorException [ 8 ]: Undefined index: per_page ~ APPPATH/classes/model/mquestions.php [ 467 ]
2012-03-10 17:47:04 --- STRACE: ErrorException [ 8 ]: Undefined index: per_page ~ APPPATH/classes/model/mquestions.php [ 467 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/model/mquestions.php(467): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/STORED...', 467, Array)
#1 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(34): Model_Mquestions->getAllQuestions(Array)
#2 [internal function]: Controller_Testorm_Testorm->action_test()
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-10 17:47:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-10 17:47:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-10 17:47:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: qtype ~ APPPATH/views/questions/vQuestionAll.php [ 30 ]
2012-03-10 17:47:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: qtype ~ APPPATH/views/questions/vQuestionAll.php [ 30 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/views/questions/vQuestionAll.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/STORED...', 30, Array)
#1 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Volumes/STORED...')
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/STORED...', Array)
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/STOREDGE/Dropbox/sites/edu/application/views/vBase.php(43): Kohana_View->__toString()
#5 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Volumes/STORED...')
#6 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/STORED...', Array)
#7 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#11 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#14 {main}
2012-03-10 17:55:11 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.products' doesn't exist [ SHOW FULL COLUMNS FROM `products` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-03-10 17:55:11 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.products' doesn't exist [ SHOW FULL COLUMNS FROM `products` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Volumes/STOREDGE/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('products')
#2 /Volumes/STOREDGE/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /Volumes/STOREDGE/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Volumes/STOREDGE/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Volumes/STOREDGE/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(15): Kohana_ORM::factory('product')
#7 [internal function]: Controller_Testorm_Testorm->action_test()
#8 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#9 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#12 {main}
2012-03-10 17:55:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-10 17:55:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-10 17:55:34 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '2' for key 'PRIMARY' [ INSERT INTO `products` (`id_product`, `title`) VALUES (2, 'ice cream') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-03-10 17:55:34 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '2' for key 'PRIMARY' [ INSERT INTO `products` (`id_product`, `title`) VALUES (2, 'ice cream') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `pr...', false, Array)
#1 /Volumes/STOREDGE/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Volumes/STOREDGE/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#3 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(18): Kohana_ORM->save()
#4 [internal function]: Controller_Testorm_Testorm->action_test()
#5 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#6 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#9 {main}
2012-03-10 17:55:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-10 17:55:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-10 17:57:33 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'product.id' in 'where clause' [ SELECT `product`.* FROM `products` AS `product` WHERE `product`.`id` = 2 LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-03-10 17:57:33 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'product.id' in 'where clause' [ SELECT `product`.* FROM `products` AS `product` WHERE `product`.`id` = 2 LIMIT 1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `product...', false, Array)
#1 /Volumes/STOREDGE/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Volumes/STOREDGE/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(898): Kohana_ORM->_load_result(false)
#3 /Volumes/STOREDGE/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(263): Kohana_ORM->find()
#4 /Volumes/STOREDGE/Dropbox/sites/edu/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(2)
#5 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(15): Kohana_ORM::factory('product', 2)
#6 [internal function]: Controller_Testorm_Testorm->action_test()
#7 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#8 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-10 17:57:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-10 17:57:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-10 18:02:38 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/views/vBase.php [ 43 ]
2012-03-10 18:02:38 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/views/vBase.php [ 43 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/views/vBase.php(43): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/STORED...', 43, Array)
#1 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Volumes/STORED...')
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/STORED...', Array)
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Base->after()
#6 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#7 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#10 {main}
2012-03-10 18:02:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-10 18:02:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-10 18:04:45 --- ERROR: View_Exception [ 0 ]: The requested view testorm/vTestsorm could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-03-10 18:04:45 --- STRACE: View_Exception [ 0 ]: The requested view testorm/vTestsorm could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(137): Kohana_View->set_filename('testorm/vTestso...')
#1 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(30): Kohana_View->__construct('testorm/vTestso...', Array)
#2 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(17): Kohana_View::factory('testorm/vTestso...', Array)
#3 [internal function]: Controller_Testorm_Testorm->action_test()
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-03-10 18:04:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-10 18:04:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-10 18:04:57 --- ERROR: View_Exception [ 0 ]: The requested view testorm/vTestsOrm could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-03-10 18:04:57 --- STRACE: View_Exception [ 0 ]: The requested view testorm/vTestsOrm could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(137): Kohana_View->set_filename('testorm/vTestsO...')
#1 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(30): Kohana_View->__construct('testorm/vTestsO...', Array)
#2 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(17): Kohana_View::factory('testorm/vTestsO...', Array)
#3 [internal function]: Controller_Testorm_Testorm->action_test()
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-03-10 18:04:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-10 18:04:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-10 18:07:47 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$title ~ APPPATH/views/testorm/vTestOrm.php [ 4 ]
2012-03-10 18:07:47 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$title ~ APPPATH/views/testorm/vTestOrm.php [ 4 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/views/testorm/vTestOrm.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/STORED...', 4, Array)
#1 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Volumes/STORED...')
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/STORED...', Array)
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/STOREDGE/Dropbox/sites/edu/application/views/vBase.php(43): Kohana_View->__toString()
#5 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Volumes/STORED...')
#6 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/STORED...', Array)
#7 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#11 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#14 {main}
2012-03-10 18:09:44 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$title ~ APPPATH/views/testorm/vTestOrm.php [ 4 ]
2012-03-10 18:09:44 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$title ~ APPPATH/views/testorm/vTestOrm.php [ 4 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/views/testorm/vTestOrm.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/STORED...', 4, Array)
#1 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Volumes/STORED...')
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/STORED...', Array)
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/STOREDGE/Dropbox/sites/edu/application/views/vBase.php(43): Kohana_View->__toString()
#5 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Volumes/STORED...')
#6 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/STORED...', Array)
#7 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Base->after()
#10 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#11 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#14 {main}
2012-03-10 19:49:52 --- ERROR: Kohana_Exception [ 0 ]: The categorys property does not exist in the Model_Product class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-03-10 19:49:52 --- STRACE: Kohana_Exception [ 0 ]: The categorys property does not exist in the Model_Product class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(20): Kohana_ORM->__get('categorys')
#1 [internal function]: Controller_Testorm_Testorm->action_test()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-10 19:49:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-10 19:49:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-10 19:50:48 --- ERROR: Kohana_Exception [ 0 ]: The categorys property does not exist in the Model_Product class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-03-10 19:50:48 --- STRACE: Kohana_Exception [ 0 ]: The categorys property does not exist in the Model_Product class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/application/classes/controller/testorm/testorm.php(20): Kohana_ORM->__get('categorys')
#1 [internal function]: Controller_Testorm_Testorm->action_test()
#2 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Testorm_Testorm))
#3 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/STOREDGE/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-10 19:50:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-10 19:50:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/STOREDGE/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#1 {main}