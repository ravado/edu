<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-30 00:16:12 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Test as array ~ APPPATH/classes/model/mtests.php [ 226 ]
2012-04-30 00:16:12 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Test as array ~ APPPATH/classes/model/mtests.php [ 226 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-30 00:16:20 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Test as array ~ APPPATH/classes/model/mtests.php [ 226 ]
2012-04-30 00:16:20 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Test as array ~ APPPATH/classes/model/mtests.php [ 226 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-30 00:18:48 --- ERROR: ErrorException [ 8 ]: Undefined index: tst_variant_title ~ APPPATH/classes/model/mtests.php [ 235 ]
2012-04-30 00:18:48 --- STRACE: ErrorException [ 8 ]: Undefined index: tst_variant_title ~ APPPATH/classes/model/mtests.php [ 235 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(235): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 235, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(161): Model_Mtests->addQuestion(Array)
#2 [internal function]: Controller_Adm_Ahid->action_addQuestion()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-30 00:22:09 --- ERROR: ErrorException [ 8 ]: Undefined index: tst_variant_title ~ APPPATH/classes/model/mtests.php [ 235 ]
2012-04-30 00:22:09 --- STRACE: ErrorException [ 8 ]: Undefined index: tst_variant_title ~ APPPATH/classes/model/mtests.php [ 235 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(235): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 235, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(161): Model_Mtests->addQuestion(Array)
#2 [internal function]: Controller_Adm_Ahid->action_addQuestion()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-30 00:23:18 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/classes/model/mtests.php [ 251 ]
2012-04-30 00:23:18 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/classes/model/mtests.php [ 251 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(251): Kohana_Core::error_handler(8, 'Uninitialized s...', '/Users/admin/Dr...', 251, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(167): Model_Mtests->addVariants(Array)
#2 [internal function]: Controller_Adm_Ahid->action_addQuestion()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-30 00:25:26 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/classes/model/mtests.php [ 251 ]
2012-04-30 00:25:26 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/classes/model/mtests.php [ 251 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(251): Kohana_Core::error_handler(8, 'Uninitialized s...', '/Users/admin/Dr...', 251, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(167): Model_Mtests->addVariants(Array)
#2 [internal function]: Controller_Adm_Ahid->action_addQuestion()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-30 00:25:56 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/classes/model/mtests.php [ 251 ]
2012-04-30 00:25:56 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/classes/model/mtests.php [ 251 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(251): Kohana_Core::error_handler(8, 'Uninitialized s...', '/Users/admin/Dr...', 251, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(167): Model_Mtests->addVariants(Array)
#2 [internal function]: Controller_Adm_Ahid->action_addQuestion()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-30 00:27:40 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/classes/model/mtests.php [ 251 ]
2012-04-30 00:27:40 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/classes/model/mtests.php [ 251 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(251): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 251, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(167): Model_Mtests->addVariants(Array)
#2 [internal function]: Controller_Adm_Ahid->action_addQuestion()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-30 00:27:51 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/classes/model/mtests.php [ 251 ]
2012-04-30 00:27:51 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/classes/model/mtests.php [ 251 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(251): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 251, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(167): Model_Mtests->addVariants(Array)
#2 [internal function]: Controller_Adm_Ahid->action_addQuestion()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-30 00:28:23 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/classes/model/mtests.php [ 251 ]
2012-04-30 00:28:23 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/classes/model/mtests.php [ 251 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(251): Kohana_Core::error_handler(8, 'Uninitialized s...', '/Users/admin/Dr...', 251, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(167): Model_Mtests->addVariants(Array)
#2 [internal function]: Controller_Adm_Ahid->action_addQuestion()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-30 00:28:36 --- ERROR: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/classes/model/mtests.php [ 251 ]
2012-04-30 00:28:36 --- STRACE: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH/classes/model/mtests.php [ 251 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(251): Kohana_Core::error_handler(8, 'Uninitialized s...', '/Users/admin/Dr...', 251, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(167): Model_Mtests->addVariants(Array)
#2 [internal function]: Controller_Adm_Ahid->action_addQuestion()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-30 17:39:59 --- ERROR: ErrorException [ 8 ]: Use of undefined constant title - assumed 'title' ~ APPPATH/classes/model/mtests.php [ 251 ]
2012-04-30 17:39:59 --- STRACE: ErrorException [ 8 ]: Use of undefined constant title - assumed 'title' ~ APPPATH/classes/model/mtests.php [ 251 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(251): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/admin/Dr...', 251, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(167): Model_Mtests->addVariants(Array)
#2 [internal function]: Controller_Adm_Ahid->action_addQuestion()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-30 17:40:39 --- ERROR: ErrorException [ 8 ]: Undefined index: tst_title ~ APPPATH/classes/controller/adm/ahid.php [ 133 ]
2012-04-30 17:40:39 --- STRACE: ErrorException [ 8 ]: Undefined index: tst_title ~ APPPATH/classes/controller/adm/ahid.php [ 133 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(133): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 133, Array)
#1 [internal function]: Controller_Adm_Ahid->action_createTest()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-30 19:15:40 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/classes/model/mtests.php [ 251 ]
2012-04-30 19:15:40 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/classes/model/mtests.php [ 251 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(251): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 251, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(167): Model_Mtests->addVariants(Array)
#2 [internal function]: Controller_Adm_Ahid->action_addQuestion()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-30 19:57:00 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Adm_Ahid::action_addQuestion() ~ APPPATH/classes/controller/adm/ahid.php [ 157 ]
2012-04-30 19:57:00 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Adm_Ahid::action_addQuestion() ~ APPPATH/classes/controller/adm/ahid.php [ 157 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(157): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/admin/Dr...', 157, Array)
#1 [internal function]: Controller_Adm_Ahid->action_addQuestion()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-30 19:58:00 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/controller/adm/ahid.php [ 165 ]
2012-04-30 19:58:00 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/controller/adm/ahid.php [ 165 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(165): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/admin/Dr...', 165, Array)
#1 [internal function]: Controller_Adm_Ahid->action_addQuestion()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-30 19:59:24 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/controller/adm/ahid.php [ 165 ]
2012-04-30 19:59:24 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/controller/adm/ahid.php [ 165 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(165): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/admin/Dr...', 165, Array)
#1 [internal function]: Controller_Adm_Ahid->action_addQuestion()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-30 20:00:10 --- ERROR: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/controller/adm/ahid.php [ 165 ]
2012-04-30 20:00:10 --- STRACE: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/controller/adm/ahid.php [ 165 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(165): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/admin/Dr...', 165, Array)
#1 [internal function]: Controller_Adm_Ahid->action_addQuestion()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-30 20:00:41 --- ERROR: ErrorException [ 8 ]: Object of class Model_Tstquestion could not be converted to int ~ APPPATH/classes/controller/adm/ahid.php [ 165 ]
2012-04-30 20:00:41 --- STRACE: ErrorException [ 8 ]: Object of class Model_Tstquestion could not be converted to int ~ APPPATH/classes/controller/adm/ahid.php [ 165 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(165): Kohana_Core::error_handler(8, 'Object of class...', '/Users/admin/Dr...', 165, Array)
#1 [internal function]: Controller_Adm_Ahid->action_addQuestion()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-30 20:03:27 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Tstquestion as array ~ APPPATH/classes/model/mtests.php [ 241 ]
2012-04-30 20:03:27 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Tstquestion as array ~ APPPATH/classes/model/mtests.php [ 241 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-30 20:04:08 --- ERROR: ErrorException [ 8 ]: Object of class Model_Tstquestion could not be converted to int ~ APPPATH/classes/controller/adm/ahid.php [ 165 ]
2012-04-30 20:04:08 --- STRACE: ErrorException [ 8 ]: Object of class Model_Tstquestion could not be converted to int ~ APPPATH/classes/controller/adm/ahid.php [ 165 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(165): Kohana_Core::error_handler(8, 'Object of class...', '/Users/admin/Dr...', 165, Array)
#1 [internal function]: Controller_Adm_Ahid->action_addQuestion()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-04-30 20:05:15 --- ERROR: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_Tstquestion class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-04-30 20:05:15 --- STRACE: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_Tstquestion class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(241): Kohana_ORM->__get('id_question')
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(162): Model_Mtests->addQuestion(Array)
#2 [internal function]: Controller_Adm_Ahid->action_addQuestion()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-30 20:36:29 --- ERROR: ErrorException [ 8 ]: Undefined index: ball ~ APPPATH/classes/model/mtests.php [ 274 ]
2012-04-30 20:36:29 --- STRACE: ErrorException [ 8 ]: Undefined index: ball ~ APPPATH/classes/model/mtests.php [ 274 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/model/mtests.php(274): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 274, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/adm/ahid.php(177): Model_Mtests->addVariants(Array)
#2 [internal function]: Controller_Adm_Ahid->action_addQuestion()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adm_Ahid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-04-30 23:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adm/ahid/tastaddquestvar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-04-30 23:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adm/ahid/tastaddquestvar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 23:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adm/ahid/tastaddquestvar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-04-30 23:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adm/ahid/tastaddquestvar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 23:50:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adm/ahid/tsstaddquestvar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-04-30 23:50:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adm/ahid/tsstaddquestvar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}
2012-04-30 23:51:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adm/ahid/tsstaddquestvar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-04-30 23:51:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adm/ahid/tsstaddquestvar was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#3 {main}