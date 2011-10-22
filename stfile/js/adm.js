/*
 * Скрипты админки
 */


$(document).ready(function(){

//======================================Слайдер боковой менюшки (справа)==============================================//
$('#ulAdmMenu ul').each(function(index) {
    $(this).prev().addClass('collapsible').click(function() {
      if ($(this).next().css('display') == 'none') {
        $(this).next().slideDown(200, function () {
          $(this).prev().removeClass('collapsed').addClass('expanded');
        });
      }else {
        $(this).next().slideUp(200, function () {
          $(this).prev().removeClass('expanded').addClass('collapsed');
          $(this).find('ul').each(function() {
            $(this).hide().prev().removeClass('expanded').addClass('collapsed');
          });
        });
      }
      return false;
    });
  });
//--------------------------------------------------------------------------------------------------------------------//

//============================ Валидация и проверка полей Логин и Email в БД =========================================//
    var login = $("#inpLogin"),
        email = $("#inpEmail");

    login.blur(function(){
       //если введенные символы допустимы
        if (getRegex(login,'login')) {
            $(this).next('img').attr('src','../../stfile/img/loading.gif').css('visibility','visible');
            if(isValueExist('inpLogin','login')){
                login.addClass("Red");//добавляем класс с красной подсветкой
                $(this).next('img').attr('src','../../stfile/img/failure.png').css('visibility','visible');
                ISVALID['keyLogin']=false;
            }
            else{
                //показываем иконку о том что все хорошо
                login.removeClass("Red");//удаляем класс inpRed с инпута, что бы не было красной подсветки
                $(this).next('img').attr('src','../../stfile/img/success.png').css('visibility','visible');
                ISVALID['keyLogin'] = true;//записываем в масив что введено коректно (для дальнейшего сабмита)
            }
        }
        //если символы не адекватны
        else{
            if(login.val().length > 0){
            //выводим иконку что все плохо
            login.addClass("Red");//добавляем класс с красной подсветкой
            $(this).next('img').attr('src','../../stfile/img/failure.png').css('visibility','visible');
            ISVALID['keyLogin']=false;//записываем в масив что введено некоректно (для дальнейшего сабмита)
            }
            else {
                login.removeClass("Red");
                $(this).next('img').css('visibility','hidden');
            }
        }
    });

    email.blur(function(){
       //если введенные символы допустимы
        if (getRegex(email,'email')) {
            $(this).next('img').attr('src','../../stfile/img/loading.gif').css('visibility','visible');
            if(isValueExist('inpEmail','email')){
                email.addClass("Red");//добавляем класс с красной подсветкой
                $(this).next('img').attr('src','../../stfile/img/failure.png').css('visibility','visible');
                ISVALID['keyEmail']=false;
            }
            else{
                //показываем иконку о том что все хорошо
                email.removeClass("Red");//удаляем класс inpRed с инпута, что бы не было красной подсветки
                $(this).next('img').attr('src','../../stfile/img/success.png').css('visibility','visible');
                ISVALID['keyEmail'] = true;//записываем в масив что введено коректно (для дальнейшего сабмита)
            }
        }
        //если символы не адекватны
        else{
            if(email.val().length > 0){
            //выводим иконку что все плохо
            email.addClass("Red");//добавляем класс с красной подсветкой
            $(this).next('img').attr('src','../../stfile/img/failure.png').css('visibility','visible');
            ISVALID['keyEmail']=false;//записываем в масив что введено некоректно (для дальнейшего сабмита)
            }
            else {
                email.removeClass("Red");
                $(this).next('img').css('visibility','hidden');
            }
        }
    });
//--------------------------------------------------------------------------------------------------------------------//
});


/*Добавление нового пользователя*/
function addNewUser(){
    $("[name = newUser]").submit();
}
