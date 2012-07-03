<div id="dvHomeInfo">
    <div id="dvHomePromo">

        <img style="height: 540px;  " src="../../../stfile/img/Untitled-3.png" alt="">

    </div>
</div>
<div id="dvHomeUBlocks">
    <div id="dvHomeAuth">
        <?php if($userAuth) { ?>
            Добро пожаловать <b><?=$userName;?></b> <a href="/user/edit/">Профиль</a> <a href="/user/auth/logout">Выйти</a> <br/><br/>
        <?php }else { ?>
        Форма авторизации на сайте:
        <form name="formAuth" action="/user/auth" method="POST">
            <input type="text" id="inpLogin" name="login" class="inpColor" placeholder="Имя пользователя">
            <input type="password" name="password" id="inpPass" class="inpColor" placeholder="Ваш пароль">
            <a class="btnColor Auth" name="btnAuth" onclick="auth()">Войти</a>
        </form>
        <a href="/user/register" class="btnColor Register hide">Регистрация</a><br/>
<!--        <a id="lnkResFormShow" onclick="showResetForm()" class="hide">Забыл пароль</a>-->
        <?php } ?>
    </div>
    <div id="dvHomeSystem">
        <img src="../../../stfile/img/Untitled-1.png" alt="">
    </div>
</div>