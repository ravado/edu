<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-02 19:33:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ SELECT `vote`.`id_vote`, `vote`.`value`, `questions_and_answers`.`id_answers`, `questions_and_answers`.`id_questions` FROM `questions_and_answers` LEFT JOIN `vote` ON (`vote`.`id_user` = 1 AND `vote`.`id_qa` = undefined) WHERE `questions_and_answers`.`id_questions_and_answers` = undefined ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-04-02 19:33:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ SELECT `vote`.`id_vote`, `vote`.`value`, `questions_and_answers`.`id_answers`, `questions_and_answers`.`id_questions` FROM `questions_and_answers` LEFT JOIN `vote` ON (`vote`.`id_user` = 1 AND `vote`.`id_qa` = undefined) WHERE `questions_and_answers`.`id_questions_and_answers` = undefined ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `vote`.`...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(324): Kohana_Database_Query->execute()
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/qhid.php(59): Model_Mquestions->voteUp(Array)
#3 [internal function]: Controller_Questions_Qhid->action_voteUp()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Qhid))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-02 19:33:31 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ SELECT `vote`.`id_vote`, `vote`.`value`, `questions_and_answers`.`id_answers`, `questions_and_answers`.`id_questions` FROM `questions_and_answers` LEFT JOIN `vote` ON (`vote`.`id_user` = 1 AND `vote`.`id_qa` = undefined) WHERE `questions_and_answers`.`id_questions_and_answers` = undefined ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-04-02 19:33:31 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ SELECT `vote`.`id_vote`, `vote`.`value`, `questions_and_answers`.`id_answers`, `questions_and_answers`.`id_questions` FROM `questions_and_answers` LEFT JOIN `vote` ON (`vote`.`id_user` = 1 AND `vote`.`id_qa` = undefined) WHERE `questions_and_answers`.`id_questions_and_answers` = undefined ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `vote`.`...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(377): Kohana_Database_Query->execute()
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/qhid.php(71): Model_Mquestions->voteDown(Array)
#3 [internal function]: Controller_Questions_Qhid->action_voteDown()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Qhid))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-02 19:34:35 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ SELECT `vote`.`id_vote`, `vote`.`value`, `questions_and_answers`.`id_answers`, `questions_and_answers`.`id_questions` FROM `questions_and_answers` LEFT JOIN `vote` ON (`vote`.`id_user` = 1 AND `vote`.`id_qa` = undefined) WHERE `questions_and_answers`.`id_questions_and_answers` = undefined ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-04-02 19:34:35 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ SELECT `vote`.`id_vote`, `vote`.`value`, `questions_and_answers`.`id_answers`, `questions_and_answers`.`id_questions` FROM `questions_and_answers` LEFT JOIN `vote` ON (`vote`.`id_user` = 1 AND `vote`.`id_qa` = undefined) WHERE `questions_and_answers`.`id_questions_and_answers` = undefined ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `vote`.`...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(377): Kohana_Database_Query->execute()
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/qhid.php(71): Model_Mquestions->voteDown(Array)
#3 [internal function]: Controller_Questions_Qhid->action_voteDown()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Qhid))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-02 19:34:35 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ SELECT `vote`.`id_vote`, `vote`.`value`, `questions_and_answers`.`id_answers`, `questions_and_answers`.`id_questions` FROM `questions_and_answers` LEFT JOIN `vote` ON (`vote`.`id_user` = 1 AND `vote`.`id_qa` = undefined) WHERE `questions_and_answers`.`id_questions_and_answers` = undefined ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-04-02 19:34:35 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ SELECT `vote`.`id_vote`, `vote`.`value`, `questions_and_answers`.`id_answers`, `questions_and_answers`.`id_questions` FROM `questions_and_answers` LEFT JOIN `vote` ON (`vote`.`id_user` = 1 AND `vote`.`id_qa` = undefined) WHERE `questions_and_answers`.`id_questions_and_answers` = undefined ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `vote`.`...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(324): Kohana_Database_Query->execute()
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/qhid.php(59): Model_Mquestions->voteUp(Array)
#3 [internal function]: Controller_Questions_Qhid->action_voteUp()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Qhid))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-02 19:38:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ SELECT `vote`.`id_vote`, `vote`.`value`, `questions_and_answers`.`id_answers`, `questions_and_answers`.`id_questions` FROM `questions_and_answers` LEFT JOIN `vote` ON (`vote`.`id_user` = 1 AND `vote`.`id_qa` = undefined) WHERE `questions_and_answers`.`id_questions_and_answers` = undefined ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-04-02 19:38:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ SELECT `vote`.`id_vote`, `vote`.`value`, `questions_and_answers`.`id_answers`, `questions_and_answers`.`id_questions` FROM `questions_and_answers` LEFT JOIN `vote` ON (`vote`.`id_user` = 1 AND `vote`.`id_qa` = undefined) WHERE `questions_and_answers`.`id_questions_and_answers` = undefined ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `vote`.`...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(324): Kohana_Database_Query->execute()
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/qhid.php(59): Model_Mquestions->voteUp(Array)
#3 [internal function]: Controller_Questions_Qhid->action_voteUp()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Qhid))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-02 19:39:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ SELECT `vote`.`id_vote`, `vote`.`value`, `questions_and_answers`.`id_answers`, `questions_and_answers`.`id_questions` FROM `questions_and_answers` LEFT JOIN `vote` ON (`vote`.`id_user` = 1 AND `vote`.`id_qa` = undefined) WHERE `questions_and_answers`.`id_questions_and_answers` = undefined ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-04-02 19:39:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ SELECT `vote`.`id_vote`, `vote`.`value`, `questions_and_answers`.`id_answers`, `questions_and_answers`.`id_questions` FROM `questions_and_answers` LEFT JOIN `vote` ON (`vote`.`id_user` = 1 AND `vote`.`id_qa` = undefined) WHERE `questions_and_answers`.`id_questions_and_answers` = undefined ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `vote`.`...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(324): Kohana_Database_Query->execute()
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/qhid.php(59): Model_Mquestions->voteUp(Array)
#3 [internal function]: Controller_Questions_Qhid->action_voteUp()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Qhid))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-02 19:54:53 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/model/mquestions.php [ 248 ]
2012-04-02 19:54:53 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/model/mquestions.php [ 248 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-02 19:55:01 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/model/mquestions.php [ 248 ]
2012-04-02 19:55:01 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/model/mquestions.php [ 248 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-02 19:55:05 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/model/mquestions.php [ 248 ]
2012-04-02 19:55:05 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/model/mquestions.php [ 248 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-02 20:27:14 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ SELECT `vote`.`id_vote`, `vote`.`value`, `questions_and_answers`.`id_answers`, `questions_and_answers`.`id_questions` FROM `questions_and_answers` LEFT JOIN `vote` ON (`vote`.`id_user` = 1 AND `vote`.`id_qa` = undefined) WHERE `questions_and_answers`.`id_questions_and_answers` = undefined ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-04-02 20:27:14 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ SELECT `vote`.`id_vote`, `vote`.`value`, `questions_and_answers`.`id_answers`, `questions_and_answers`.`id_questions` FROM `questions_and_answers` LEFT JOIN `vote` ON (`vote`.`id_user` = 1 AND `vote`.`id_qa` = undefined) WHERE `questions_and_answers`.`id_questions_and_answers` = undefined ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `vote`.`...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(325): Kohana_Database_Query->execute()
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/qhid.php(59): Model_Mquestions->voteUp(Array)
#3 [internal function]: Controller_Questions_Qhid->action_voteUp()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Qhid))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-04-02 20:27:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ SELECT `vote`.`id_vote`, `vote`.`value`, `questions_and_answers`.`id_answers`, `questions_and_answers`.`id_questions` FROM `questions_and_answers` LEFT JOIN `vote` ON (`vote`.`id_user` = 1 AND `vote`.`id_qa` = undefined) WHERE `questions_and_answers`.`id_questions_and_answers` = undefined ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-04-02 20:27:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'undefined' in 'where clause' [ SELECT `vote`.`id_vote`, `vote`.`value`, `questions_and_answers`.`id_answers`, `questions_and_answers`.`id_questions` FROM `questions_and_answers` LEFT JOIN `vote` ON (`vote`.`id_user` = 1 AND `vote`.`id_qa` = undefined) WHERE `questions_and_answers`.`id_questions_and_answers` = undefined ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `vote`.`...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(378): Kohana_Database_Query->execute()
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/qhid.php(71): Model_Mquestions->voteDown(Array)
#3 [internal function]: Controller_Questions_Qhid->action_voteDown()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Qhid))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}