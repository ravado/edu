<input type="text" name="username" id="sad" class="inpColor" placeholder="Имя пользователя">
    <a class="btnSilver" id="btnUsrLoad" >Подробнее</a>
    <a class="btnSilver SaveUser" id="btnUsrDel">Удалить</a>
<form name="delUser" class="collapsed" action="/adm/user/deluser" method="POST" style="display: none">
    <table id="tblUserDel">
            <tr>
                <td class="RegFormField">
                    <input type="text" disabled="disabled" name="email" id="inpEmail" class="inpColor" placeholder="Адрес электронной почты">
                </td>
                <td class="RegFormField">
                    <span id="sex">Пол: <input type="radio" disabled="disabled" name="sex" value="1">Мужской <input type="radio" disabled="disabled" name="sex" value="0">Женский</span>
                </td>
            </tr>
            <tr>
                <td class="RegFormField">
                    <input type="text" disabled="disabled" name="firstName" class="inpColor" placeholder="Настоящее имя">
                </td>
                <td class="RegFormField">
                    <input type="text" disabled="disabled" name="lastName" class="inpColor" placeholder="Настоящая фамилия">
                </td>
            </tr>
        <tr>
            <td class="RegFormField">
                <select name="slUsrRole" class="inpColor" disabled="disabled">
                    <option id="optUser">Обычный пользователь</option>
                    <option id="optAdmin">Администратор сайта</option>
                </select>
            </td>
        </tr>
    </table>
</form>