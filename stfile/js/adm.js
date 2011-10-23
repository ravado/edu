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

//================================ Подгружаем данные пользователя для удаления =======================================//
    $("#btnUsrMore").click(function(){
        switch(validCheck($("input[name=username]"),'login',true)){
            case 'exist':{
                //тут аякс запрос
                $.ajax({type:"POST",data:"userToDelete="+$("input[name=username]").val(),url:'/adm/ahid/getuserinfo',dataType:"json",
                    success:function(data) {

                        $("input[name=email]").val(data.userInfo.email);

                        $("input[name=firstName]").val(data.userInfo.firstName);
                        $("input[name=lastName]").val(data.userInfo.lastName);

                        if (data.userInfo.sex == 0) {
                            $("input[name=sex][value=0]").attr('checked','checked');
                        }
                        if (data.userInfo.sex == 1) {
                            $("input[name=sex][value=1]").attr('checked','checked');
                        }

                        if (data.userInfo.role == 1) {
                            alert('role 1');
                            $("#optUser").attr('selected','selected');
                            //$("#optAdmin").removeAttr('selected',);
                        }
                        if (data.userInfo.role == 2) {
                            alert('role 2');
                            $("#optAdmin").attr('selected','selected');
                            //$("#optUser").removeAttr('selected');
                        }
                    },
                    error:function() {
                        alert('asd asd');
                    }
                });
                
                $("form[name=delUser]").slideToggle('normal');
                break;
            }
            case 'empty':{
                hints('warning','Увы пользователя с таким Логином нет, то бишь и удалять некого :)');
                break;
            }
            case 'not correct':{
                hints('error','Имя пользователя не может состоять из введенных вами символов, и должно быть не меньше 3-х и не больше 32-х');
                break;
            }
            case 'not enough symbols':{
                hints('info','Введите хоть что нибудь в поле "Имя пользователя"');
                break;
            }
        }
    });
//--------------------------------------------------------------------------------------------------------------------//
//=============================== Отслеживаем нажатие Enter при удалении пользователя ================================//
    $("input[name=username]").keypress(function(EnterKey){
       if (EnterKey.keyCode == 13) {
           $("#btnUsrMore").click();
       }
    });
//--------------------------------------------------------------------------------------------------------------------//

//========================================== Удаляем пользователя ====================================================//
    $("#btnUsrDel").click(function(){
        switch(validCheck($("input[name=username]"),'login',true)){
            case 'exist': {
                //Посылаем запрос на удаление
                $.ajax({type:"POST",data:"userToDelete="+$("input[name=username]").val(),url:"/adm/ahid/deluser",dataType:"json",
                    success: function(data) {
                        if (data.deleted) {
                            alert('deleted');
                            hints('success','Пользователь <b>$("input[name=username]").val()</b> успешно удален');
                        }
                        else {
                            alert('not deleted');
                            hints('error','Не удалось удалить пользователя, почему? если б мы знали...');
                        }
                    },
                    error: function(){
                        alert('error in ajax query when try to delete user');
                    }
                });
                break;
            }
            case 'empty': {
                hints('warning','Увы пользователя с таким Логином нет, то бишь и удалять некого :)');
                break;
            }
            case 'not correct':{
                hints('error','Имя пользователя не может состоять из введенных вами символов, и должно быть не меньше 3-х и не больше 32-х');
                break;
            }
            case 'not enough symbols': {
                hints('info','Введите хоть что нибудь в поле "Имя пользователя"');
                break;
            }
        }
    });
//--------------------------------------------------------------------------------------------------------------------//
});


/*Добавление нового пользователя*/
function addNewUser(){
    $("[name = newUser]").submit();
}
