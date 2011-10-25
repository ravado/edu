/*
 * Скрипты админки
 */
var currUsername = null;

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
    $("#btnUsrLoad").click(function(){
        switch(validCheck($("input[name=username]"),'login',true)){
            case 'exist':{
                if(currUsername == null){
                    currUsername = $("input[name=username]").val();
                }
                //тут аякс запрос
                $.ajax({type:"POST",data:"userToDelete="+$("input[name=username]").val(),url:'/adm/ahid/getuserinfo',dataType:"json",
                    success:function(data) {
                        $("input[name=email]").val(data['userInfo'][0]['email']);

                        $("input[name=firstName]").val(data['userInfo'][0]['first_name']);
                        $("input[name=lastName]").val(data['userInfo'][0]['last_name']);

                        if (data['userInfo'][0]['sex'] == 0) {
                            $("input[name=sex][value=0]").attr('checked','checked');
                        }
                        if (data['userInfo'][0]['sex'] == 1) {
                            $("input[name=sex][value=1]").attr('checked','checked');
                        }

                        if (data['userInfo'][0]['role'] == 1) {
                            //alert('role 1');
                            $("#optUser").attr('selected','selected');
                            //$("#optAdmin").removeAttr('selected',);
                        }
                        if (data['userInfo'][0]['role'] == 2) {
                            //alert('role 2');
                            $("#optAdmin").attr('selected','selected');
                            //$("#optUser").removeAttr('selected');
                        }
                        //Если правим пользователя а не удаляем
                        if ($("#frmUsrFix").length > 0) {
                            $("form input").removeAttr('disabled');
                        }
                    },
                    error:function() {
                        alert('error in ajax query when loading user data');
                    }
                });
         //       alert(currUsername);
       //         alert($("input[name=username]").val());

                if(currUsername == $("input[name=username]").val()){
                    if ($("form[name=delUser]").hasClass("expanded")) {
                        $("form[name=delUser]").removeClass('expanded').addClass('collapsed');
                        $("form[name=delUser]").slideUp();
                    }
                    else if ($("form[name=delUser]").hasClass("collapsed")) {
                        $("form[name=delUser]").removeClass('collapsed').addClass('expanded');
                        $("form[name=delUser]").slideDown();
                    }
                }
                else {
                    if ($("form[name=delUser]").hasClass("collapsed")) {
                        $("form[name=delUser]").removeClass('collapsed').addClass('expanded');
                        $("form[name=delUser]").slideDown();
                    }
                }
                break;
            }
            case 'empty':{
                //Если правим пользователя а не удаляем
                if ($("#frmUsrFix").length > 0) {
                    $("form input").attr('disabled','disabled');
                    $("form input").val('');
                    hints('warning','Увы пользователя с таким Логином нет :(');
                }
                else {
                    hints('warning','Увы пользователя с таким Логином нет, то бишь и удалять некого :)');
                }
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
        //alert('asdas');
        currUsername = $("input[name=username]").val();
        //alert(currUsername);
    });

//--------------------------------------------------------------------------------------------------------------------//
//=============================== Отслеживаем нажатие Enter при удалении пользователя ================================//
    $("input[name=username]").keypress(function(EnterKey){

       //alert(currUsername);
       if (EnterKey.keyCode == 13) {
       //currUsername = $("input[name=username]").val();
         //  alert(currUsername);
            $("#btnUsrLoad").click();
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
//=================================================== Изменяем пользователя ==========================================//
    $("#btnUsrFix").click(function(){
        switch(validCheck($("input[name=username]"),'login',true)) {
            case 'exist' :{
                //Посылаем запрос на изменение
                $.ajax({type:"POST",data: $("form[name=fixUser]").serialize(),url:"/adm/ahid/fixuser",dataType:"json",
                    success: function(data) {
                        if (data.fixed) {
                            alert('fixed');
                            hints('success','Информация о пользователе успешно изменена');
                        }
                        else {
                            alert('not fixed');
                            hints('error','Не удалось изменить пользователя, почему? если б мы знали...');
                        }
                    },
                    error: function(){
                        alert('error in ajax query when try to fix user');
                    }
                });
                break;
            }
            case 'empty' :{
                hints('warning','Увы пользователя с таким Логином нет :(');
                break;
            }
            case 'not correct' :{
                hints('error','Имя пользователя не может состоять из введенных вами символов, и должно быть не меньше 3-х и не больше 32-х');
                break;
            }
            case 'not enough symbols' :{
                hints('info','Введите хоть что нибудь в поле "Имя пользователя"');
                break;
            }
        }
    });
//--------------------------------------------------------------------------------------------------------------------//
    /*Инициализация редактора новостей*/
    $('#txtNewsPre').redactor();
    $('#txtNewsFull').redactor();
});


/*Добавление нового пользователя*/
function addNewUser(){
    $("[name = newUser]").submit();
}
