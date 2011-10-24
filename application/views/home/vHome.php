<div id="dvHomeInfo">
    <div id="dvHomePromo">
        <span class="spnTitle Home">Настало время учиться по-новому!</span>
        <table>
            <tr>
                <td><img src="../../../stfile/img/home/promo1.png" alt="Узнавай"></td>
                <td><img src="../../../stfile/img/home/promo2.png" alt="Применяй"></td>
                <td><img src="../../../stfile/img/home/promo3.png" alt="Помогай"></td>
            </tr>
            <tr>
                <td><span class="spnTitle Promo">Узнавай</span></td>
                <td><span class="spnTitle Promo">Применяй</span></td>
                <td><span class="spnTitle Promo">Помогай</span></td>
            </tr>
        </table>
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
            <a class="btnColor Auth" name="btnAuth">Войти</a>
        </form>
        <a href="/user/register" class="btnColor Register">Регистрация</a><br/>
        <a id="lnkResFormShow" onclick="showResetForm()">Забыл пароль</a>
        <?php } ?>
    </div>
    <div id="dvHomeSystem">
        <a class="btnColor Create">Начать работу</a><br/>
        <a href="">Узнать подробнее</a>
    </div>
</div>