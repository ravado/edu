/*
 * Скрипты главной страницы
 */

/*Функция вызывающаяся при нажатии кнопки ВОЙТИ*/
function auth(){
   var login = $("[name = login]"),
       password = $("[name = password]");

   if (getRegex(login, 'login') && getRegex(password,'password')) {
       $("[name = formAuth]").submit();
   }
   else{
       hints('error','Вы неправильно заполнили форму авторизации');
   }
}

/*Показ формы для восстановления пароля*/
function showResetForm(){
    $("#dvHomeAuth").html('Сброс пароля пользователя:' +
        '<form name="frmReset" action="/user/reset" method="POST"><input type="text"  onblur="checkEmail()" name="inpMailForReset" id="inpMailForReset" class="inpColor" placeholder="Адрес электронной почты"></td></tr>' +
        '<span id="spnHintResEmail" class="spnNotCorrect">sdfds</span>На указаный адрес будет выслана инструкция' +
        '<br /><a onclick="resetPassword()" class="btnColor Reset">Сбросить пароль</a></form><br/><a id="lnkBackReaset" href="/"><< Вернутся назад</a> ');
    $("#dvHomeAuth input").placeholder();
}

/*При нажатии СБРОСИТЬ ПАРОЛЬ*/
function resetPassword(){
    var email = $("#inpMailForReset");
    //если введенные символы допустимы
    if (email.val().length > 0) {
    if(getRegex(email,'email')){
        $("#spnHintResEmail").css('visibility','hidden');
        email.removeClass("Red");//удаляем класс с красной подсветкой
        //Если в базе уже есть такой емейл
        if(isValueExist('inpMailForReset','email')){
            hints('success','Мы выслали к Вам на почту письмо для сброса пароля');
            $("[name = frmReset]").submit();
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!СЮДА ВСТАВИТЬ ОТПРАВКУ ПИСЬМА НА УКАЗАННЫЙ ЯЩИК!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!//

        }
        //А если такого емейла нет
        else{
            hints('error','Извините но в нашей базе данных нет такого електронного ящика');
        }
    }
    //если символы не адекватны
    else{
        //выводим иконку что все плохо
        email.addClass("Red");//добавляем класс с красной подсветкой
        hints('error','Таких адресов електронной почты не бывает!');
        //$("#spnHintResEmail").text('Неверный Email адрес');
        //$("#spnHintResEmail").css('visibility','visible');
    }
    }
    else {
        email.removeClass("Red");
        $("#spnHintResEmail").css('visibility','hidden');
        hints('info','Ведите E-mail адрес, на который мы отправим письмо для восстановления!')
    }
}

function checkEmail(){
    var email = $("#inpMailForReset");
    if (email.val().length == 0){
        email.removeClass("Red");
        $("#spnHintResEmail").css('visibility','hidden');
    }
}