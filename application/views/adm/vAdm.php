<?php
    $auth = Auth::instance();
    if($auth->logged_in('admin') == 0){
        Request::initial()->redirect('');
    };
?>
<div id="dvContent">
    <div class="spnTitle Page">Панель администрирования <?php if(isset($pageFlag)){echo$pageFlag;}?></div>
    <div id="dvAdmPanel"><?=$page;?></div>
    <div id="dvAdmMenu">
        <div class="well">
        <ul class="nav nav-list">
            <li class="nav-header">Пользователь</li>
            <li class=""><a href="/adm/user/add">Добавить пользователя</a></li>
            <li><a href="/adm/user/del">Удалить пользователя</a></li>
            <li><a href="/adm/user/fix">Править пользователя</a></li>
            <li class="nav-header">Новости</li>
            <li><a href="/adm/news/add">Добавить новость</a></li>
            <li><a href="/adm/news/del">Удалить новость</a></li>
            <li><a href="/adm/news/fix">Править новость</a></li>
            <li class="nav-header">Вопросы и ответы</li>
            <li><a href="/adm/vio/questions">Вопросы</a></li>
            <li><a href="/adm/vio/addquestion">Добавить вопрос</a></li>
            <li><a href="/adm/vio/fixquestion">Править вопрос</a></li>
            <li><a href="/adm/vio/delquestion">Удалить вопрос</a></li>
            <li><a href="/adm/vio/category">Категории</a></li>
            <li><a href="/adm/vio/delanswer">Удалить комментарии</a></li>
            <li class="nav-header">Тесты</li>
            <li><a href="/adm/tests/create">Создание Тестов</a></li>
            <li><a href="/adm/tests/del">Удаление Тестов</a></li>

        </ul>
        </div>
    </div>
</div>