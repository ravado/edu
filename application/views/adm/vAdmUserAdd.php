<form name="newUser" action="/adm/user/adduser" method="POST">
    <input type="text" name="login" id="inpLogin" class="inpColor"  placeholder="Имя пользователя"><img class="status" src="../../../stfile/img/success.png">
    <input type="text" name="password" class="inpColor" placeholder="Пароль пользователя">
    <input type="text" name="email" id="inpEmail" class="inpColor" placeholder="Адрес электронной почты"><img class="status" src="../../../stfile/img/success.png">
    <span id="sex">Пол: <input type="radio" name="sex" value="1">Мужской <input type="radio" name="sex" value="0">Женский</span>
    <input type="text" name="firstName" class="inpColor" placeholder="Настоящее имя">
    <input type="text" name="lastName" class="inpColor" placeholder="Настоящая фамилия">
    <select class="inpColor">
        <option>Обычный пользователь</option>
        <option>Администратор сайта</option>
    </select>
    <a class="btnSilver SaveUser" onclick="addNewUser()">Сохранить пользователя</a>
</form>