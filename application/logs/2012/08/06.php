<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-06 14:25:48 --- ERROR: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_OrmViOanswer class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-06 14:25:48 --- STRACE: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_OrmViOanswer class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionOne.php(219): Kohana_ORM->__get('id_question')
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
2012-08-06 14:26:23 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/views/questions/vQuestionOne.php [ 221 ]
2012-08-06 14:26:23 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH/views/questions/vQuestionOne.php [ 221 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', '/Users/admin/Dr...', 221, Array)
#1 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionOne.php(221): date('d-m;Y H:i', '2012-08-06 14:1...')
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Users/admin/Dropbox/sites/edu/application/views/vBase.php(25): Kohana_View->__toString()
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(61): include('/Users/admin/Dr...')
#7 /Users/admin/Dropbox/sites/edu/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/admin/Dr...', Array)
#8 /Users/admin/Dropbox/sites/edu/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Users/admin/Dropbox/sites/edu/application/classes/controller/base.php(52): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Base->after()
#11 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#12 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#15 {main}
2012-08-06 14:34:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: impropers_answer ~ APPPATH/views/questions/vQuestionOne.php [ 227 ]
2012-08-06 14:34:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: impropers_answer ~ APPPATH/views/questions/vQuestionOne.php [ 227 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionOne.php(227): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/admin/Dr...', 227, Array)
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
2012-08-06 14:50:14 --- ERROR: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_Ormuser class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-06 14:50:14 --- STRACE: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_Ormuser class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionOne.php(307): Kohana_ORM->__get('id_user')
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
2012-08-06 14:50:37 --- ERROR: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_Ormuser class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-08-06 14:50:37 --- STRACE: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_Ormuser class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/views/questions/vQuestionOne.php(307): Kohana_ORM->__get('id_user')
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
2012-08-06 21:59:49 --- ERROR: ErrorException [ 1 ]: Call to undefined function where() ~ APPPATH/classes/model/mquestions.php [ 1003 ]
2012-08-06 21:59:49 --- STRACE: ErrorException [ 1 ]: Call to undefined function where() ~ APPPATH/classes/model/mquestions.php [ 1003 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-08-06 22:00:31 --- ERROR: ErrorException [ 8 ]: Undefined index: saved_answer ~ APPPATH/classes/controller/questions/qhid.php [ 685 ]
2012-08-06 22:00:31 --- STRACE: ErrorException [ 8 ]: Undefined index: saved_answer ~ APPPATH/classes/controller/questions/qhid.php [ 685 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/qhid.php(685): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 685, Array)
#1 [internal function]: Controller_Questions_Qhid->action_checkAsBest()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Qhid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-06 22:00:59 --- ERROR: ErrorException [ 8 ]: Undefined index: saved_answer ~ APPPATH/classes/controller/questions/qhid.php [ 685 ]
2012-08-06 22:00:59 --- STRACE: ErrorException [ 8 ]: Undefined index: saved_answer ~ APPPATH/classes/controller/questions/qhid.php [ 685 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/qhid.php(685): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 685, Array)
#1 [internal function]: Controller_Questions_Qhid->action_checkAsBest()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Qhid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}
2012-08-06 22:03:38 --- ERROR: ErrorException [ 2 ]: json_encode() expects parameter 2 to be long, array given ~ APPPATH/classes/controller/questions/qhid.php [ 713 ]
2012-08-06 22:03:38 --- STRACE: ErrorException [ 2 ]: json_encode() expects parameter 2 to be long, array given ~ APPPATH/classes/controller/questions/qhid.php [ 713 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() e...', '/Users/admin/Dr...', 713, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/qhid.php(713): json_encode(Array, Array)
#2 [internal function]: Controller_Questions_Qhid->action_checkAsBest()
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Qhid))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#7 {main}
2012-08-06 22:10:54 --- ERROR: ErrorException [ 8 ]: Undefined index: saved_answer ~ APPPATH/classes/controller/questions/qhid.php [ 700 ]
2012-08-06 22:10:54 --- STRACE: ErrorException [ 8 ]: Undefined index: saved_answer ~ APPPATH/classes/controller/questions/qhid.php [ 700 ]
--
#0 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/qhid.php(700): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/admin/Dr...', 700, Array)
#1 [internal function]: Controller_Questions_Qhid->action_checkAsBest()
#2 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Qhid))
#3 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#6 {main}