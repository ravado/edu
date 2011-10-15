<?php
    $auth = Auth::instance();
    if($auth->logged_in('admin') == 0){
        Request::initial()->redirect('');
    };
?>
<div id="dvContent">
    <div class="spnTitle Page">Панель администрирования</div>
    <div id="dvAdmPanel"><?=$page;?></div>
    <div id="dvAdmMenu">Тут меню админки</div>
</div>