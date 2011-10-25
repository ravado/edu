<form name="fixUser" id="frmUsrFix" action="/adm/user/fixuser" method="POST">
<input type="text" name="username" id="sad" class="inpColor Fx" placeholder="Имя пользователя">
    <a class="btnSilver" id="btnUsrLoad" >Показать</a>
    <img id="imgUFixLoading" class="icon-load" src="../../../stfile/img/loading.gif">

    <table id="tblUserFix">
            <tr>
                <td class="RegFormField">
                    <input type="text" disabled="disabled" name="email" id="inpEmail" class="inpColor Fx" placeholder="Адрес электронной почты">
                </td>
                <td class="RegFormField">
                    <span id="sex">Пол: <input type="radio" disabled="disabled" name="sex" value="1">Мужской <input type="radio" disabled="disabled" name="sex" value="0">Женский</span>
                </td>
            </tr>
            <tr>
                <td class="RegFormField">
                    <input type="text" disabled="disabled" name="firstName" class="inpColor Fx" placeholder="Настоящее имя">
                </td>
                <td class="RegFormField">
                    <input type="text" disabled="disabled" name="lastName" class="inpColor Fx" placeholder="Настоящая фамилия">
                </td>
            </tr>
        <tr>
            <td class="RegFormField">
                <select name="slUsrRole" class="inpColor Fx" disabled="disabled">
                    <option value="user" id="optUser">Обычный пользователь</option>
                    <option value="admin" id="optAdmin">Администратор сайта</option>
                </select>
            </td>
            <td class="RegFormField">
                <a class="btnSilver FixUser" id="btnUsrFix">Изменить</a>
            </td>
        </tr>
    </table>
</form>