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