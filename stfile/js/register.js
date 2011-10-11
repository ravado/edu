/*
 * Скрипт страницы регистрации
 */

//массив с флагами для проверки заполнености полей (для сабмита нужно)
var ISVALID = {keyLogin:false,keyEmail:false,keyPass:false,keyPassConfirm:false,keyLicense:false,keyCapcha:false,keyFirstName:true,keyLastName:true},
    ISCLICKEDREGBUTTON = false;



$(document).ready(function(){

//=====================================Отображение различных подсказок по заполнению полей формы======================//
    var allTextInputs = $("table.#tblRegisterForm input"); //Выбираем все текстовые инпуты из формы
    allTextInputs.focusin(function(){
        var current = $("table.#tblRegisterForm input:focus"); //Выбираем элемент который получил фокус
        switch (current.attr('name')){ //Сравниваем атрибуты name, если находим совпадение записываем в <P> подсказку, и прерываем выполнение
            case "login":{
                $('#dvRightInfo').html("<b>Имя пользователя</b> - это виртаульное имя которое отображается на сайте вместо ваших настоящих имени и фамилии. " +
                    "Постарайтесь выбирать осмысленное и легко запоминающееся имя. Поскольку его вы будете часто использовать.<br><br><b>Советы и предупредения:</b><ul><li>Имя это любое слово, состоящее из букв латинского алфавита и цифр;</li>" +
                    "<li>Минимальная длинна имени 5 символов;</li><li>Выбранное имя не должно содержать ненормативную лексику или любые другие ругательства;</li></ul><br/><b>Правильно:</b> Miha, Diana17, Ant12<br/><br/><b>Неправильно:</b> Anton Smirnov, D@m@sk");
                break;
            }
            case 'password':{
                $('#dvRightInfo').html("<b>Пароль</b> это ваш виртуальный ключ от сайта. Он защищает вашу учетную запись и все ваши данные от злоумышленников и других посторонних лиц.<br><br><b>Советы и предупредения:</b><ul><li>Для лучшей безопасности, пароль может содержать любые доступные символы;</li>" +
                    "<li>Пароль чувствителен к регистру: 'замок' и 'зАмОк' - это разные пароли;</li><li>Минимальная длинна пароля 5 символов;</li><li>Храните пароли в защищенном месте, доступ к которому имеете только вы;</li>" +
                    "<li>В случае потери пароля, вы сможете восстановить доступ к сайту;</li></ul><br/><b>Хорошо:</b> m12$lDbM_s, m^Bd#124kN<br/><br/><b>Плохо:</b> 12345, qwerty, пароль");
                break;
            }
            case 'passwordConf':{
                $('#dvRightInfo').html("<b>Пароль</b> это ваш виртуальный ключ от сайта. Он защищает вашу учетную запись и все ваши данные от злоумышленников и других посторонних лиц.<br><br><b>Советы и предупредения:</b><ul><li>Для лучшей безопасности, пароль может содержать любые доступные символы;</li>" +
                    "<li>Пароль чувствителен к регистру: 'замок' и 'зАмОк' - это разные пароли;</li><li>Минимальная длинна пароля 5 символов;</li><li>Храните пароли в защищенном месте, доступ к которому имеете только вы;</li>" +
                    "<li>В случае потери пароля, вы сможете восстановить доступ к сайту;</li></ul><br/><b>Хорошо:</b> m12$lDbM_s, m^Bd#124kN<br/><br/><b>Плохо:</b> 12345, qwerty, пароль");
                break;
            }
            case 'email':{
                $('#dvRightInfo').html("Это ваш <b>адрес электронной почты</b>. Вы должны ввести рабочий e-mail адрес, к которому вы имеете доступ, так как Вам придется подтвердить регистрацию. В противном случае аккаунт будет удален." +
                    "<br/><br/>Благодаря указаному  адресу, вы сможете востановить забытый пароль." +
                    "<br/><br/>Мы не занимаемся рассылкой рекламных объявлений, и не передаем полученые от вас почтовые адреса третим лицам.");
                break;
            }
            case 'firstName':{
                $('#dvRightInfo').html("<b>Что дает регистрация на сайте:</b>");
                break;
            }
            case 'lastName':{
                $('#dvRightInfo').html("<b>Что дает регистрация на сайте:</b>");
                break;
            }
            default:{
                break;
            }
        }
    });

  

//==============================Модальное окно с условиями соглашения=================================================//
    //При нажатии на ссылку с класом poplight и первым символом в ссылке(#)
    $("[class=poplight]").click(function() {
        var popID = $(this).attr('rel'); //Получаем имя popup`a

        var popURL = $(this).attr('href'); //Получаем href popup`a для определения размера

        //Pull Query & Variables from href URL
       var query= popURL.split('?');
        var dim= query[1].split('&');
        var popWidth = 500; //Gets the first query string value

        //Fade in the Popup and add close button
        $('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="../../stfile/img/user/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');

        //Define margin for center alignment (vertical   horizontal) - we add 80px to the height/width to accomodate for the padding  and border width defined in the css
       var popMargTop = ($('#' + popID).height() + 80) / 2;
        var popMargLeft = ($('#' + popID).width() + 80) / 2;

        //Apply Margin to Popup
        $('#' + popID).css({
            'margin-top' : -popMargTop,
            'margin-left' : -popMargLeft
        });
        //Fade in Background
        $('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
        $('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer - .css({'filter' : 'alpha(opacity=80)'}) is used to fix the IE Bug on fading transparencies

        return false;
    });

    //Закрыть модальное окно и спрятать слой
    $('a.close, #fade').live('click', function() { //При клике на кнопку Close...
        $('#fade , .popup_block').fadeOut(function() {
            $('#fade, a.close').remove();  //fade them both out
        });
        return false;
    });
//--------------------------------------------------------------------------------------------------------------------//
//==========================================Валидация Формы регистрации===============================================//

    var login = $("input[name='login']"),
        password = $("input[name='password']"),
        passwordConfirm = $("input[name='passwordConf']"),
        eMail = $("input[name='email']"),
        firstName = $("input[name='firstName']"),
        lastName = $("input[name='lastName']"),
        capcha = $("#inpCapcha"),
        license = $("input[name='license']");

    //Потеря фокуса полем "Имя пользователя"
    login.blur(function() {
        //если введенные символы допустимы
        if (getRegex('login').test(login.val())) {
            $("#spnSFLogin").html('<img src="../../stfile/img/loading.gif">');
            if(isValueExist('inpLogin','login')){
                login.addClass("Red");//добавляем класс с красной подсветкой
                $("#spnSFLogin").html('<img src="../../stfile/img/failure.png">');
                $("#spnLogin").text('Такой логин уже существует, выберите другой');
                $("#spnLogin").css('visibility','visible');
                ISVALID['keyLogin']=false;
            }
            else{
                //показываем иконку о том что все хорошо
                login.removeClass("Red");//удаляем класс inpRed с инпута, что бы не было красной подсветки
                $("#spnSFLogin").html('<img src="../../stfile/img/success.png">');
                $("#spnLogin").text('');
                $("#spnLogin").css('visibility','hidden');
                ISVALID['keyLogin'] = true;//записываем в масив что введено коректно (для дальнейшего сабмита)
            }
        }
        //если символы не адекватны
        else{
            if(login.val().length > 0 || ISCLICKEDREGBUTTON){
            //выводим иконку что все плохо
            login.addClass("Red");//добавляем класс с красной подсветкой
            $("#spnSFLogin").html('<img src="../../stfile/img/failure.png">');
            $("#spnLogin").text('Вы ввели запрещенные символы!');
            $("#spnLogin").css('visibility','visible');
            ISVALID['keyLogin']=false;//записываем в масив что введено некоректно (для дальнейшего сабмита)
            }
            else {
                $("#spnSFLogin").html('');
                login.removeClass("Red");
                $("#spnLogin").css('visibility','hidden');
            }
        }
    });

    //Потеря фокуса полем "Password"
    password.blur(function(){
        //если введенные символы допустимы
        if(getRegex('password').test(password.val())){
            //показываем иконку о том что все хорошо
            password.removeClass("Red");//удаляем класс inpRed с инпута, что бы не было красной подсветки
            $("#spnSFPassword").html('<img src="../../stfile/img/success.png">');
            $("#spnPassword").text('');
            $("#spnPassword").css('visibility','hidden');
            ISVALID['keyPass']=true;
        }
        //если символы не адекватны
        else{
            if(password.val().length > 0 || ISCLICKEDREGBUTTON){
            //выводим иконку что все плохо
            password.addClass("Red");//добавляем класс с красной подсветкой
            $("#spnSFPassword").html('<img src="../../stfile/img/failure.png">');
            $("#spnPassword").text('Вы ввели запрещенные символы!');
            $("#spnPassword").css('visibility','visible');
            ISVALID['keyPass']=false;
            }
            else{
                $("#spnSFPassword").html('');
                password.removeClass("Red");
                $("#spnPassword").css('visibility','hidden');
            }
        }
    });

    //Потеря фокуса полем "PasswordConfirm"
    passwordConfirm.blur(function() {
        //если введенные символы допустимы
        if(getRegex('password').test(passwordConfirm.val())){
            $("#spnPasswordConf").text('');
            if(passwordConfirm.val() == password.val()){
                //показываем иконку о том что все хорошо
                password.removeClass("Red");//удаляем класс inpRed с инпута, что бы не было красной подсветки
                passwordConfirm.removeClass("Red");//удаляем класс inpRed с инпута, что бы не было красной подсветки
                $("#spnSFPasswordConfirm").html('<img src="../../stfile/img/success.png">');
                $("#spnSFPassword").html('<img src="../../stfile/img/success.png">');
                $("#spnPassword").css('visibility','hidden');
                $("#spnPasswordConf").css('visibility','hidden');
                ISVALID['keyPassConfirm']=true;
            }
            else{
                if(passwordConfirm.val().length > 0){
                //выводим иконку что все плохо
                password.addClass("Red");//добавляем класс с красной подсветкой
                passwordConfirm.addClass("Red");//добавляем класс с красной подсветкой
                $("#spnSFPasswordConfirm").html('<img src="../../stfile/img/failure.png">');
                $("#spnSFPassword").html('<img src="../../stfile/img/failure.png">');
                $("#spnPassword").text('Введенные пароли несовпадают!');
                $("#spnPasswordConf").text('Введенные пароли несовпадают!');
                $("#spnPassword").css('visibility','visible');
                $("#spnPasswordConf").css('visibility','visible');
                ISVALID['keyPassConfirm']=false;
                }
                else{
                $("#spnSFPasswordConfirm").html('');
                $("#spnSFPassword").html('');
                passwordConfirm.removeClass("Red");
                password.removeClass("Red");
                $("#spnPasswordConf").css('visibility','hidden');
                $("#spnPassword").css('visibility','hidden');

                }
            }
        }
        //если символы не адекватны
        else{
            if(passwordConfirm.val().length > 0 || ISCLICKEDREGBUTTON){
            //выводим иконку что все плохо
            passwordConfirm.addClass("Red");//добавляем класс с красной подсветкой
            $("#spnSFPasswordConfirm").html('<img src="../../stfile/img/failure.png">');
            $("#spnPasswordConf").text('Вы ввели запрещенные символы!');
            $("#spnPasswordConf").css('visibility','visible');
            ISVALID['keyPassConfirm']=false;
            }
            else{
                $("#spnSFPasswordConfirm").html('');
                $("#spnSFPassword").html('');
                passwordConfirm.removeClass("Red");
                password.removeClass("Red");
                $("#spnPasswordConf").css('visibility','hidden');
                $("#spnPassword").css('visibility','hidden');
            }
        }
    });

    //потеря фокуса у поля 'eMail'
    eMail.blur(function(){
        //если введенные символы допустимы
        if(getRegex('email').test(eMail.val())){
            $("#spnSFEmail").html('<img src="../../stfile/img/loading.gif">');
            //Если в базе уже есть такой емейл
            if(isValueExist('inpEmail','email')){
                eMail.addClass("Red");//добавляем класс с красной подсветкой
                $("#spnSFEmail").html('<img src="../../stfile/img/failure.png">');
                $("#spnEmail").text('Введеный email уже существует в нашей базе!');
                $("#spnEmail").css('visibility','visible');
            }
            //А если нет то продолжаем дальше
            else{
                //показываем иконку о том что все хорошо
                eMail.removeClass("Red");//удаляем класс inpRed с инпута, что бы не было красной подсветки
                $("#spnSFEmail").html('<img src="../../stfile/img/success.png">');
                $("#spnEmail").css('visibility','hidden');
                ISVALID['keyEmail']=true;
            }
        }
        //если символы не адекватны
        else{
            if(eMail.val().length > 0 || ISCLICKEDREGBUTTON) {
                //выводим иконку что все плохо
                eMail.addClass("Red");//добавляем класс с красной подсветкой
                $("#spnSFEmail").html('<img src="../../stfile/img/failure.png">');
                $("#spnEmail").text('Вы ввели запрещенные символы!');
                $("#spnEmail").css('visibility','visible');
                ISVALID['keyEmail']=false;
            }
            else{
                $("#spnSFEmail").html('');
                eMail.removeClass("Red");
                $("#spnEmail").css('visibility','hidden');
            }
        }
    });

    //Потеря фокуса полем "Имя"
    firstName.blur(function(){
        //если введенные символы допустимы
        if(getRegex('name').test(firstName.val())){
            //показываем иконку о том что все хорошо
            firstName.removeClass("Red");//удаляем класс inpRed с инпута, что бы не было красной подсветки
            $("#spnSFFirstName").html('<img src="../../stfile/img/success.png">');
            //$("#hFirstName").text('');
            $("#spnFirstName").css('visibility','hidden');
            ISVALID['keyFirstName']=true;
        }
        //если символы не адекватны
        else{
            if(firstName.val().length > 0){
                //выводим иконку что все плохо
                firstName.addClass("Red");//добавляем класс с красной подсветкой
                $("#spnSFFirstName").html('<img src="../../stfile/img/failure.png">');
                $("#spnFirstName").text('Минимальная длина 3 символа, без цифр и спецсимволов!');
                $("#spnFirstName").css('visibility','visible');
                ISVALID['keyFirstName']=false;
            }
            else{
                $("#spnSFFirstName").html('');
                firstName.removeClass("Red");
                $("#spnFirstName").css('visibility','hidden');
            }
        }
    });

    //Потеря фокуса полем "Фамилия"
    lastName.blur(function() {
        //если введенные символы допустимы
        if(getRegex('name').test(lastName.val())) {
            //показываем иконку о том что все хорошо
            lastName.removeClass("Red");//удаляем класс inpRed с инпута, что бы не было красной подсветки
            $("#spnSFLastName").html('<img src="../../stfile/img/success.png">');
            //$("#spnLastName").text('');
            $("#spnLastName").css('visibility','hidden');
            ISVALID['keyLastName']=true;
        }
        //если символы не адекватны
        else{
            if(lastName.val().length > 0){
                //выводим иконку что все плохо
                lastName.addClass("Red");//добавляем класс с красной подсветкой
                $("#spnSFLastName").html('<img src="../../stfile/img/failure.png">');
                $("#spnLastName").text('Минимальная длина 3 символа, без цифр и спецсимволов!');
                $("#spnLastName").css('visibility','visible');
                ISVALID['keyLastName']=false;
            }
            else{
                $("#spnSFLastName").html('');
                lastName.removeClass("Red");
                $("#spnLastName").css('visibility','hidden');
            }
        }
    });

    license.click(function(){
        if(license.attr('checked')){
            $("#spnLicense").css('visibility','hidden');
            $("#spnSFLicense").html('<img src="../../stfile/img/success.png">');
            ISVALID['keyLicense'] = true;
        }
        else {
            $("#spnLicense").css('visibility','visible');
            $("#spnSFLicense").html('<img src="../../stfile/img/failure.png">');
            ISVALID['keyLicense'] = false;
        }
    });

    capcha.blur(function(){
        if(capcha.val() == "4W7Z"){
            //показываем иконку о том что все хорошо
            capcha.removeClass("Red");//удаляем класс inpRed с инпута, что бы не было красной подсветки
            $("#spnSFCapcha").html('<img src="../../stfile/img/success.png">');
            //$("#spnCapcha").text('');
            $("#spnCapcha").css('visibility','hidden');
            ISVALID['keyCapcha']=true;
        }
        //если символы не адекватны
        else{
            if(capcha.val().length > 0 || ISCLICKEDREGBUTTON){
                //выводим иконку что все плохо
                capcha.addClass("Red");//добавляем класс с красной подсветкой
                $("#spnSFCapcha").html('<img src="../../stfile/img/failure.png">');
                $("#spnCapcha").text('Введите код который изображен на картинке');
                $("#spnCapcha").css('visibility','visible');
                ISVALID['keyCapcha']=false;
            }
            else{
                $("#spnSFCapcha").html('');
                capcha.removeClass("Red");
                $("#spnCapcha").css('visibility','hidden');
            }
        }
    });

    //Клик по кнопке сабмит, и перепроверка корректности введенных даных

    $("#btnRegSubmit").click(function(){
        ISCLICKEDREGBUTTON = true;
        if(ISVALID['keyLogin']&&ISVALID['keyEmail']&&ISVALID['keyPass']&&ISVALID['keyPassConfirm']&&ISVALID['keyCapcha']&&ISVALID['keyLicense']&&ISVALID['keyFirstName']&&ISVALID['keyLastName']){
            hints('success','Теперь вы зарегистрированы в нашей системе :)');
            $(this).attr('href','javascript:document.registerForm.submit();');
        }
        else{
            hints('error','Заполните все поля!');
            $("input:not([name=sex])").blur();
            if(!ISVALID['keyLicense']){
                $("#spnLicense").css('visibility','visible');
                $("#spnSFLicense").html('<img src="../../stfile/img/failure.png">');
            }
            else {
                $("#spnLicense").css('visibility','hidden');
                $("#spnSFLicense").html('<img src="../../stfile/img/success.png">');
            }
        }
        ISCLICKEDREGBUTTON = false;
    });
//--------------------------------------------------------------------------------------------------------------------//
});
