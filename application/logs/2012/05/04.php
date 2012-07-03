<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-04 01:18:13 --- ERROR: ErrorException [ 8 ]: Undefined index: id_tst_question ~ APPPATH/classes/controller/adm/ahid.php [ 174 ]
2012-05-04 01:18:13 --- STRACE: ErrorException [ 8 ]: Undefined index: id_tst_question ~ APPPATH/classes/controller/adm/ahid.php [ 174 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(174): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 174, Array)
#1 [internal function]: Controller_Adm_Ahid->action_tstAddQuestVar()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-04 01:19:37 --- ERROR: ErrorException [ 1 ]: Call to undefined function getQuestionVar() ~ APPPATH/classes/controller/adm/ahid.php [ 181 ]
2012-05-04 01:19:37 --- STRACE: ErrorException [ 1 ]: Call to undefined function getQuestionVar() ~ APPPATH/classes/controller/adm/ahid.php [ 181 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-04 01:21:12 --- ERROR: ErrorException [ 1 ]: Call to undefined function getQuestionVar() ~ APPPATH/classes/controller/adm/ahid.php [ 182 ]
2012-05-04 01:21:12 --- STRACE: ErrorException [ 1 ]: Call to undefined function getQuestionVar() ~ APPPATH/classes/controller/adm/ahid.php [ 182 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-04 01:21:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_Mtest' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
2012-05-04 01:21:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_Mtest' not found ~ SYSPATH/classes/kohana/model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-04 01:26:17 --- ERROR: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH/classes/model/mtests.php [ 353 ]
2012-05-04 01:26:17 --- STRACE: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH/classes/model/mtests.php [ 353 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-04 01:26:38 --- ERROR: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH/classes/model/mtests.php [ 353 ]
2012-05-04 01:26:38 --- STRACE: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH/classes/model/mtests.php [ 353 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-04 01:37:24 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/classes/controller/adm/ahid.php [ 183 ]
2012-05-04 01:37:24 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/classes/controller/adm/ahid.php [ 183 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(183): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 183, Array)
#1 [internal function]: Controller_Adm_Ahid->action_tstAddQuestVar()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-04 01:39:34 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Tstquestion as array ~ APPPATH/classes/controller/adm/ahid.php [ 183 ]
2012-05-04 01:39:34 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Tstquestion as array ~ APPPATH/classes/controller/adm/ahid.php [ 183 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-04 01:45:43 --- ERROR: ErrorException [ 8 ]: Undefined index: tst_title ~ APPPATH/classes/controller/adm/ahid.php [ 133 ]
2012-05-04 01:45:43 --- STRACE: ErrorException [ 8 ]: Undefined index: tst_title ~ APPPATH/classes/controller/adm/ahid.php [ 133 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(133): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 133, Array)
#1 [internal function]: Controller_Adm_Ahid->action_createTest()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-05-04 01:45:54 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/classes/controller/adm/ahid.php [ 183 ]
2012-05-04 01:45:54 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/classes/controller/adm/ahid.php [ 183 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(183): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 183, Array)
#1 [internal function]: Controller_Adm_Ahid->action_tstAddQuestVar()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}