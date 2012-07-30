<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-29 14:14:14 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.questions' doesn't exist [ SELECT `questions`.`id_question`, `questions`.`title`, `questions`.`id_user`, `questions`.`public_date`, `questions`.`answers_count`, `users`.`username`, `qfavorite`.`id_qfavorite` FROM `questions` JOIN `users` ON (`questions`.`id_user` = `users`.`id`) LEFT JOIN `qfavorite` ON (`qfavorite`.`id_question` = `questions`.`id_question` AND `qfavorite`.`id_user` = 6) ORDER BY `questions`.`public_date` DESC LIMIT 15 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-07-29 14:14:14 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.questions' doesn't exist [ SELECT `questions`.`id_question`, `questions`.`title`, `questions`.`id_user`, `questions`.`public_date`, `questions`.`answers_count`, `users`.`username`, `qfavorite`.`id_qfavorite` FROM `questions` JOIN `users` ON (`questions`.`id_user` = `users`.`id`) LEFT JOIN `qfavorite` ON (`qfavorite`.`id_question` = `questions`.`id_question` AND `qfavorite`.`id_user` = 6) ORDER BY `questions`.`public_date` DESC LIMIT 15 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `questio...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(24): Kohana_Database_Query->execute()
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(25): Model_Mquestions->mainQA(Array)
#3 [internal function]: Controller_Questions_Questions->action_index()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-29 14:42:36 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.questions' doesn't exist [ SELECT `questions`.`id_question`, `questions`.`title`, `questions`.`id_user`, `questions`.`public_date`, `questions`.`answers_count`, `users`.`username`, `qfavorite`.`id_qfavorite` FROM `questions` JOIN `users` ON (`questions`.`id_user` = `users`.`id`) LEFT JOIN `qfavorite` ON (`qfavorite`.`id_question` = `questions`.`id_question` AND `qfavorite`.`id_user` = 6) ORDER BY `questions`.`public_date` DESC LIMIT 15 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-07-29 14:42:36 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.questions' doesn't exist [ SELECT `questions`.`id_question`, `questions`.`title`, `questions`.`id_user`, `questions`.`public_date`, `questions`.`answers_count`, `users`.`username`, `qfavorite`.`id_qfavorite` FROM `questions` JOIN `users` ON (`questions`.`id_user` = `users`.`id`) LEFT JOIN `qfavorite` ON (`qfavorite`.`id_question` = `questions`.`id_question` AND `qfavorite`.`id_user` = 6) ORDER BY `questions`.`public_date` DESC LIMIT 15 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `questio...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(24): Kohana_Database_Query->execute()
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(25): Model_Mquestions->mainQA(Array)
#3 [internal function]: Controller_Questions_Questions->action_index()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-29 14:42:39 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.questions' doesn't exist [ SELECT `questions`.`id_question`, `questions`.`title`, `questions`.`id_user`, `questions`.`public_date`, `questions`.`answers_count`, `users`.`username`, `qfavorite`.`id_qfavorite` FROM `questions` JOIN `users` ON (`questions`.`id_user` = `users`.`id`) LEFT JOIN `qfavorite` ON (`qfavorite`.`id_question` = `questions`.`id_question` AND `qfavorite`.`id_user` = 6) ORDER BY `questions`.`public_date` DESC LIMIT 15 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
2012-07-29 14:42:39 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.questions' doesn't exist [ SELECT `questions`.`id_question`, `questions`.`title`, `questions`.`id_user`, `questions`.`public_date`, `questions`.`answers_count`, `users`.`username`, `qfavorite`.`id_qfavorite` FROM `questions` JOIN `users` ON (`questions`.`id_user` = `users`.`id`) LEFT JOIN `qfavorite` ON (`qfavorite`.`id_question` = `questions`.`id_question` AND `qfavorite`.`id_user` = 6) ORDER BY `questions`.`public_date` DESC LIMIT 15 ] ~ MODPATH/profiletoolbar/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Users/admin/Dropbox/sites/edu/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `questio...', false, Array)
#1 /Users/admin/Dropbox/sites/edu/application/classes/model/mquestions.php(24): Kohana_Database_Query->execute()
#2 /Users/admin/Dropbox/sites/edu/application/classes/controller/questions/questions.php(25): Model_Mquestions->mainQA(Array)
#3 [internal function]: Controller_Questions_Questions->action_index()
#4 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Questions_Questions))
#5 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/admin/Dropbox/sites/edu/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/admin/Dropbox/sites/edu/index.php(109): Kohana_Request->execute()
#8 {main}