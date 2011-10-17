<div id="dvContent">
    <div class="spnTitle Page">Регистрация нового пользователя</div>
    <div id="dvRightInfo">
        <b>Что дает регистрация на сайте:</b>
        <ul>
            <li>Возможность задавать вопросы, получать ответы, а также отслеживать активность в интересующих направлениях.</li>
            <li>Хранить историю пройденых тестов, отслеживать успешность прохождения новых тестов.</li>
            <li>Иметь полноценный доступ ко всем существующим разделам сайта, и тем, которые будут внедрены в будущем.</li>
        </ul>
    </div>
    <div id="dvLeftForm">
        <form name="registerForm" action="/user/register/setuser" method="POST">
        <table id="tblRegisterForm">
            <tr>
                <td class="RegFormCaption">Имя пользователя:</td>
                <td class="RegFormField">
                    <input type="text" name="login" class="inpColor" id="inpLogin"><br/>
                    <span class="spnNotCorrect" id="spnLogin">Вы ввели запрещенные символы!</span>
                    </td>
                <td class="RegFormFlag"><span class="success-failure" id="spnSFLogin"></span></td>
            </tr>
            <tr>
                <td class="RegFormCaption">Желаемый пароль:</td>
                <td class="RegFormField">
                    <input type="password" name="password" class="inpColor" id="inpPassword"><br/>
                    <span class="spnNotCorrect" id="spnPassword">Вы ввели запрещенные символы!</span>
                </td>
                <td class="RegFormFlag"><span class="success-failure" id="spnSFPassword"></span></td>
            </tr>
            <tr>
                <td class="RegFormCaption">Подтверждение пароля:</td>
                <td class="RegFormField">
                    <input type="password" name="passwordConf" class="inpColor" id="inpPasswordConf"><br/>
                    <span class="spnNotCorrect" id="spnPasswordConf">Вы ввели запрещенные символы!</span>
                </td>
                <td class="RegFormFlag"><span class="success-failure" id="spnSFPasswordConfirm"></span></td>
            </tr>
            <tr>
                <td class="RegFormCaption">Электронная почта:</td>
                <td class="RegFormField">
                    <input type="text" name="email" class="inpColor" id="inpEmail"><br/>
                    <span class="spnNotCorrect" id="spnEmail">Вы ввели запрещенные символы!</span>
                </td>
                <td class="RegFormFlag"><span class="success-failure" id="spnSFEmail"></span></td>
            </tr>
            <tr>
                <td class="RegFormCaption">Ваш пол:</td>
                <td class="RegFormField"><input type="radio" name="sex" value="1">Мужской <input type="radio" name="sex" value="0">Женский</td>
                <td class="RegFormFlag"></td>
            </tr>
            <tr>
                <td class="RegFormCaption">Ваше имя:</td>
                <td class="RegFormField">
                    <input type="text" name="firstName" class="inpColor" id="inpFirstName"><br/>
                    <span class="spnNotCorrect" id="spnFirstName">Вы ввели запрещенные символы!</span>
                </td>
                <td class="RegFormFlag"><span class="success-failure" id="spnSFFirstName"></span></td>
            </tr>
            <tr>
                <td class="RegFormCaption">Ваша фамилия:</td>
                <td class="RegFormField">
                    <input type="text" name="lastName" class="inpColor" id="inpLastName"><br/>
                    <span class="spnNotCorrect" id="spnLastName">Вы ввели запрещенные символы!</span>
                </td>
                <td class="RegFormFlag"><span class="success-failure" id="spnSFLastName"></span></td>
            </tr>
            <tr>
                <td class="RegFormCaption">Условия использования:</td>
                <td class="RegFormField">
                    <input name="license" type="checkbox">Согласен с <a href="" rel="popup_name" class="poplight">условиями использования</a><br/>
                    <span class="spnNotCorrect" id="spnLicense">Вы не приняли условий соглашения!</span>
                </td>
                <td class="RegFormFlag"><span class="success-failure" id="spnSFLicense"></td>
            </tr>
            <tr>
                <td class="RegFormCaption">Проверочный код:</td>
                <td class="RegFormField">
                    <img src="../../../stfile/img/capcha.png" alt="capcha">
                    <input type="text" class="inpColor" id="inpCapcha"><br/>
                    <span class="spnNotCorrect" id="spnCapcha">Вы ввели запрещенные символы!</span>
                </td>
                <td class="RegFormFlag"><span class="success-failure" id="spnSFCapcha"></span></td>
            </tr>
        </table>
        <a class="btnColor Register" id="btnRegSubmit">Зарегестрироваться</a>
        </form>
    </div>
    <div id="popup_name" class="popup_block">
        <b>1.</b> Пользователь обязан полностью ознакомиться с настоящими Правилами до момента регистрации на Сайте. Регистрация Пользователя на Сайте означает полное и безоговорочное принятие Пользователем настоящих Правил.<br/><br/>
        <b>2.</b> Настоящие Правила могут быть изменены и/или дополнены Администрацией Сайта в одностороннем порядке без какого-либо специального уведомления.<br/><br/>
        <b>3.</b> Пользователь несет личную ответственность за любую информацию, которую размещает на Сайте, сообщает другим Пользователям, а также за любые взаимодействия с другими Пользователями, осуществляемые на свой риск.<br/><br/>
        <b>4.</b> Пользователю запрещено использовать программное обеспечение и осуществлять действия, направленные на нарушении нормального функционирования Сайта и его сервисов или персональных страниц Пользователей;<br/><br/>
        <b>5.</b> В случае несогласия Пользователя с настоящими Правилами или их обновлениями, Пользователь обязан отказаться от его использования, проинформировав об этом Администрацию Сайта в установленном порядке.
    </div>
</div>