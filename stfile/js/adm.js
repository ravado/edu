/*
 * Скрипты админки
 */

var redactorPre, redactorFull;
// Проверка наличия новости по ID в качестве параметра передаем jQuery обьект в который будет вводиться айдишник
function checkNewsbyID (jQueryObj) {
    var exist;
    //Посылаем запрос на изменение
    $.ajax({type:"POST",async:false, data: "checkNewsID="+jQueryObj.val(),url:"/news/nhid/getnewsid",dataType:"json",
        success: function(data) {
            alert(data);
                return data;
        },
        error: function(){
                alert('error in ajax query when try to delete news');
        }
    });
    return exist;
}

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
                        $("[name=slUsrRole]").removeAttr('disabled');
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
                    $("[name=slUsrRole]").attr('disabled','disabled');
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
                            var usrDel = 'Пользователь <b>'+$("input[name=username]").val()+'</b> успешно удален';
                            hints('success',usrDel);
                        }
                        else {

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

                            hints('success','Информация о пользователе успешно изменена');
                        }
                        else {

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
//======================== Функция 2 в 1 - Вывод титла новости, или всего сразу ======================================//
    $("a[name=btnNewsTitle]").click(function() {
        $.ajax({type:"POST",async:false, data: "checkNewsID="+$("#inpNewsDel").val(),url:"/news/nhid/getnewsid",dataType:"json",
            success: function(data) {
                //Если пришел фалс (или что то пошло не так в кохане или новости с введенным ID не нашлось)
                if (!data) {
                    //Если мы не удалять собрались новость а править
                    if ($("form[name=frmNewsFix]").length > 0) {
                        hints('error','Нет такой новости в базе данных');
                        $("form[name=frmNewsFix]").slideUp('fast');
                    }
                    //А если все же удалять
                    else {
                        $("#inpNewsTitle").val("");
                        hints('error','Нет такой новости в базе данных');
                    }
                }
                //Если новость нашлась
                else {
                    //Если мы не удалять собрались новость а править
                    if ($("form[name=frmNewsFix]").length > 0) {
                        $("#inpNewsTitle").val(data[0]['title']);
                        redactorPre.setHtml(data[0]['text_pre']);
                        redactorFull.setHtml(data[0]['text_full']);
                        $("#inpReferName").val(data[0]['refer_name']);
                        $("#inpReferLink").val(data[0]['refer_link']);
                        $("form[name=frmNewsFix]").slideDown('fast');
                    }
                    //А если все же удалять
                    else {
                        $("#inpNewsTitle").val(data[0]['title']);
                    }
                }
            },
            error: function(){
                alert('error in ajax query when try to delete news');
            }
        });
    });
//--------------------------------------------------------------------------------------------------------------------//
//========================================= Удаление новости =========================================================//
    $("a[name=btnNewsDel]").click(function() {
        $.ajax({type:"POST", data: "newsToDelete="+$("#inpNewsDel").val(),url:"/news/nhid/delnews",dataType:"json",
            success: function(data) {
                if (!data) {
                    hints('error','Нет такой новости в базе данных');
                }
                else {
                    hints('success','Новость удалена');
                    $("#inpNewsTitle").val("");
                    $("#inpNewsDel").val("");
                }
            },
            error: function(){
                alert('error in ajax query when try to delete news');
            }
        });
    });
//--------------------------------------------------------------------------------------------------------------------//
//======================================= Сабмит новости =============================================================//
    $("#btnNewsSubm").click(function(){
        $("input[name=id]").val($("#inpNewsDel").val());
       $("form[name=frmNewsFix]").submit();
    });

    // Вывод вопроса по его id
    $("#btnShowQuestion").click(function() {
        var inp_question_id = $("#inpQuestionId"),
            question_id,
            hquestion_id = $("#hQuestionId"),
            question_title = $("#dvQuestionTitle"),
            question_full = $("#dvQuestionFull");

        hquestion_id.val('');
        question_title.text('');
        question_full.text('');
        if(inp_question_id.val() != '') {
            question_id = inp_question_id.val();
            $.ajax({type:"POST", data: "question_id="+question_id,url:"/adm/ahid/getquestionbyid",dataType:"json",
                success: function(data) {
                    if (!data) {
                        hints('error','Нет такого вопроса в базе');
                    }
                    else {
                        hquestion_id.val(data[0]['id_question']);
                        question_title.text(data[0]['title']);
                        question_full.text(data[0]['full']);
                    }
                },
                error: function(){
                    alert('error in ajax query when try to get question by id');
                }
            });
        }
    });

    //Удаление вопроса
    $("#btnDelQuestion").click(function() {
        var question_id = $("#hQuestionId").val();
        $.ajax({type:"POST", data: "question_id="+question_id,url:"/adm/ahid/delquestionbyid",dataType:"json",
            success: function(data) {
                if (!data) {
                    hints('error','Не удалось удалить вопрос');
                }
                else {
                    hints('success','вопрос удален');
                    $("#dvQuestionTitle").text('');
                    $("#dvQuestionFull").text('');
                    $("#inpQuestionId").val('');
                    question_id.val('');

                }
            },
            error: function(){
                alert('error in ajax query when try to delete question');
            }
        });
    });

    // Вывод вопроса и его ответов по id вопроса
    $("#btnQuestionAll").click(function() {
        var question_id = $("#inpQuestionId");
        $("#dvAllAnswers").html('');
        $.ajax({type:"POST", data: "question_id="+question_id.val(),url:"/adm/ahid/getquestionallbyid",dataType:"json",
            success: function(data) {
                if (!data) {
                    hints('error','Не удалось удалить вопрос');
                }
                else {
                    $("#dvQuestionTitle").html(data['question'][0]['title'] + '<br />' + data['question'][0]['full']);
                    $("#hQuestionId").val(data['question'][0]['id_question']);
                    if(data['answers']) {
                        var complete_table = '';
                        complete_table += '<table class="table table-bordered table-condensed">' +
                            '<thead><tr><th>id</th><th>Ответы</th><th>User</th><th>Дата</th><th>Удалить</th></tr></thead><tbody>';
                        for( var x = 0; x < data['answers'].length; x++ ) {
                            complete_table += '<tr><td>' + data['answers'][x]['id_answer'] + '</td>' +
                                '<td>' + data['answers'][x]['answer_text'] + '</td>' +
                                '<td>' + data['answers'][x]['username'] + '</td>' +
                                '<td>' + data['answers'][x]['public_date'] + '</td>' +
                                '<td><input type="checkbox" class="idAnswer" value="' + data['answers'][x]['id_answer'] + '"></td></tr>';
                        }
                        complete_table += '</tbody></table>';
                        $("#dvAllAnswers").append(complete_table);
                    }
                }
            },
            error: function(){
                alert('error in ajax query when try to get question all');
            }
        });
    });

    // Удаление отмеченных ответов
    $("#btnDelAnswers").click(function() {
        var checked_answers = $(".idAnswer:checked"),
            id_answers_to_del = '';
        if(checked_answers.length > 0) {
            checked_answers.each(function(index, element){
                if(index+1 == checked_answers.length) {
                    id_answers_to_del += $(this).val();
                } else {
                    id_answers_to_del += $(this).val()+',';
                }
            });


            // Посылаем запрос на удаление ответов
            $.ajax({type:"POST", data: "answers_id="+id_answers_to_del,url:"/adm/ahid/delanswersbyid",dataType:"json",
                success: function(data) {
                    if (!data) {
                        hints('error','Не удалось удалить ответы');
                    }
                    else {
                        hints('success','ответы удалены');
                        $("#inpQuestionId").val('');
                        $("#dvQuestionTitle").html('');
                        checked_answers.parent('td').parent('tr').remove();
                    }
                },
                error: function(){
                    alert('error in ajax query when try to delete answers');
                }
            });
        }
    });
//--------------------------------------------------------------------------------------------------------------------//

    /*Инициализация редактора новостей*/
    redactorPre = $('#txtNewsPre').redactor({ image_upload: '/news/nhid/loadimages' });
    redactorFull = $('#txtNewsFull').redactor({ image_upload: '/news/nhid/loadimages' });
});


/*Добавление нового пользователя*/
function addNewUser(){
    $("[name = newUser]").submit();
}


/*Добавление новости*/
function addNewNews(){
    $("[name = formNews]").submit();
}