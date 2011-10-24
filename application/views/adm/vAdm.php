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
        <ul class="ulLeftSidebar" id="ulAdmMenu">
            <li><a class="btnSilver">Пользователь</a>
                <ul>
                    <li><a href="/adm/user/add">Добавить</a></li>
                    <li><a href="/adm/user/del">Удалить</a></li>
                    <li><a href="/adm/user/fix">Править</a></li>
                </ul>
            </li>
            <li><a class="btnSilver btnLeftMenu">Что то еще</a>
                <ul>
                    <li><a href="#0">История</a></li>
                    <li><a href="#0">Настоящее</a></li>
                    <li><a href="#0">Будущее</a></li>
                </ul>
            </li>
            <li><a class="btnSilver btnLeftMenu">Что то еще</a>
                <ul>
                    <li><a href="#0">Колбаса</a></li>
                    <li><a href="#0">Сосиски и сардельки</a></li>
                    <li><a href="#0">Деликатесы</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>