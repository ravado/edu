<div id="dvContent">
    <div class="spnTitle Page">Редактирование профиля</div>
    <div id="dvRightInfo">
        <b>Что дает регистрация на сайте:</b>
        <ul>
            <li>Возможность задавать вопросы, получать ответы, а также отслеживать активность в интересующих направлениях.</li>
            <li>Хранить историю пройденых тестов, отслеживать успешность прохождения новых тестов.</li>
            <li>Иметь полноценный доступ ко всем существующим разделам сайта, и тем, которые будут внедрены в будущем.</li>
        </ul>
    </div>
    <div id="dvLeftForm">
        <form name="editForm" action="/user/uhid/setuser" method="POST">
        <table id="tblRegisterForm">
            <tr>
                <td class="RegFormCaption">Имя пользователя:</td>
                <td class="RegFormField">
                    <input type="text" name="login" class="inpColor" id="inpLogin" value="<?=$userInfo[0]['username']?>" disabled="disabled"><br/>
                    <span class="spnNotCorrect" id="spnLogin">Вы ввели запрещенные символы!</span>
                    </td>
                <td class="RegFormFlag"><span class="success-failure" id="spnSFLogin"></span></td>
            </tr>
            <tr>
                <td class="RegFormCaption">Новый пароль:</td>
                <td class="RegFormField">
                    <input type="password" name="passwordConf" class="inpColor" id="inpPasswordConf"><br/>
                    <span class="spnNotCorrect" id="spnPasswordConf">Вы ввели запрещенные символы!</span>
                </td>
                <td class="RegFormFlag"><span class="success-failure" id="spnSFPasswordConfirm"></span></td>
            </tr>
            <tr>
                <td class="RegFormCaption">Подтверждение нового пароля:</td>
                <td class="RegFormField">
                    <input type="password" name="passwordConf" class="inpColor" id="inpPasswordConf"><br/>
                    <span class="spnNotCorrect" id="spnPasswordConf">Вы ввели запрещенные символы!</span>
                </td>
                <td class="RegFormFlag"><span class="success-failure" id="spnSFPasswordConfirm"></span></td>
            </tr>
            <tr>
                <td class="RegFormCaption">Электронная почта:</td>
                <td class="RegFormField">
                    <input type="text" name="email" class="inpColor" id="inpEmail" value="<?=$userInfo[0]['email']?>"><br/>
                    <span class="spnNotCorrect" id="spnEmail">Вы ввели запрещенные символы!</span>
                </td>
                <td class="RegFormFlag"><span class="success-failure" id="spnSFEmail"></span></td>
            </tr>
            <tr>
                <td class="RegFormCaption">Ваш пол:</td>
                <td class="RegFormField"><input type="radio" name="sex" value="1" checked="<?php if($userInfo[0]['sex']==1)TRUE;?>">Мужской <input type="radio" name="sex" value="0" checked="<?php if($userInfo[0]['sex']==1)TRUE;?>">Женский</td>
                <td class="RegFormFlag"></td>
            </tr>
            <tr>
                <td class="RegFormCaption">Ваше имя:</td>
                <td class="RegFormField">
                    <input type="text" name="firstName" class="inpColor" id="inpFirstName" value="<?=$userInfo[0]['first_name']?>"><br/>
                    <span class="spnNotCorrect" id="spnFirstName">Вы ввели запрещенные символы!</span>
                </td>
                <td class="RegFormFlag"><span class="success-failure" id="spnSFFirstName"></span></td>
            </tr>
            <tr>
                <td class="RegFormCaption">Ваша фамилия:</td>
                <td class="RegFormField">
                    <input type="text" name="lastName" class="inpColor" id="inpLastName" value="<?=$userInfo[0]['last_name']?>"><br/>
                    <span class="spnNotCorrect" id="spnLastName">Вы ввели запрещенные символы!</span>
                </td>
                <td class="RegFormFlag"><span class="success-failure" id="spnSFLastName"></span></td>
            </tr>
        </table>
            <input type="hidden" name="id" value="<?=$userInfo[0]['id']?>">
        <a class="btnColor Save" id="btnRegSubmit" onclick="setUserInfo()">Сохранить изменения</a>
        </form>
    </div>
</div>