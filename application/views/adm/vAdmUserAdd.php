<form name="newUser" action="/adm/user/adduser" method="POST">
    <input type="text" name="login" id="inpLogin" class="inpColor Fx"  placeholder="Имя пользователя"><img class="status" src="../../../stfile/img/success.png">
    <input type="text" name="password" class="inpColor Fx" placeholder="Пароль пользователя">
    <input type="text" name="email" id="inpEmail" class="inpColor Fx" placeholder="Адрес электронной почты"><img class="status" src="../../../stfile/img/success.png">
    <span id="sex">Пол: <input type="radio" name="sex" value="1">Мужской <input type="radio" name="sex" value="0">Женский</span>
    <input type="text" name="firstName" class="inpColor Fx" placeholder="Настоящее имя">
    <input type="text" name="lastName" class="inpColor Fx" placeholder="Настоящая фамилия">
    <select name="role" class="inpColor Fx">
        <option value="user">Обычный пользователь</option>
        <option value="admin">Администратор сайта</option>
    </select>
    <a class="btnSilver SaveUser" onclick="addNewUser()">Сохранить пользователя</a>
</form>