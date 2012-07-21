<section id="auth_content" class="athrg vert_shadow">
    <div class="athrg_title">Добро пожаловать!</div>
    <div class="athrg_left">
        <div style="font-size: 15px;">Eduka.com.ua - помогает вам и всем остальным запоминать информацию
            на всех ваших аенпар, телефонах и планшетах, которые вы используете.</div>
        <table>
            <tr style="height: 15px;"></tr>
            <tr>
                <td><img src="/st/img/_a.png"></td>
                <td style="padding-left: 10px;">
                    <b>Сохраняйте все</b><br/>
                    Сохраняйте ваши мысли ваши ваши мысли, задачи, проекты, файлы файлы, и что еще.
                </td>
            </tr>
            <tr style="height: 15px;"></tr>
            <tr>
                <td><img src="/st/img/_a.png"></td>
                <td style="padding-left: 10px;">
                    <b>Доступ отовсюду</b><br/>
                    Сохраняйте ваши мысли ваши ваши мысли, задачи, проекты, файлы файлы, и что еще.
                </td>
            </tr>
            <tr style="height: 15px;"></tr>
            <tr>
                <td><img src="/st/img/_a.png"></td>
                <td style="padding-left: 10px;">
                    <b>С легкостью находите все</b><br/>
                    Сохраняйте ваши мысли ваши ваши мысли, задачи, проекты, файлы файлы, и что еще.
                </td>
            </tr>
        </table>
    </div>
    <div style="float: right;">
        <div class="authrg_form">
            <b>Зарегестрироваться</b> <span style="float: right">или <a href="/user/auth" class="hblink">войти</a></span>
            <form action="/user/login" method="POST" id="frm_register" style="text-align: center;">
                <input type="text" name="username" placeholder="Имя пользователя" autocomplete="off" maxlength="15">
                <div id="err_username"></div>
                <input type="email" name="email" placeholder="Адрес электронной почты" autocomplete="off" maxlength="50">
                <div id="err_email"></div>
                <a class="btn btn-success disabled authrg_btn" id="reg_btn">Зарегистрироваться</a>
            </form>
        </div>
        <div class="authrg_count">
<!--            Нас уже <span>--><?//=$count_user;?><!--</span> человека!-->
        </div>
    </div>
    <div style="clear: both;"></div>
</section>