/*
 * Скрипты админки
 */

var redactorPre, redactorFull, REDACTOR_TSTQUESTION, REDACTOR_TSTVARIANTS, REDACTOR_QUESTION;
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

// Очистка формы создания вопроса в админке
function clearAddQuestionForm() {
    $(".label-tags p").click();
    $(".is_closed").removeAttr('checked');
    $(".not_closed").attr('checked','checked');
    $("input[name=question_title]").val('');
    $("input[name=rating]").val('0');
    $(".dropdown-timepicker").val($(".current_time").val());
    $("#date").val($(".current_date").val());
    REDACTOR_QUESTION.setCodeEditor('<p><br></p>');

}

var currUsername = null;

// Очищаем содержимое редактора и таблицы с вариантами
function clearQuestionVar() {
    $("#tblVariants").addClass('hide');
    $("#tblVariants tbody").html('');
    $(".sendQuestion").addClass('disabled');
    REDACTOR_TSTQUESTION.setCodeEditor('<p></p>');
    REDACTOR_TSTVARIANTS.setCodeEditor('<p></p>');
}

// Создаем новый тест
function createNewTest(trigger_btn) {

    $("#tstCreating").removeClass('hide');
    // Посылаем аякс запросом данные для записи теста в базу
    $.ajax({type:"POST", data: $("#frmAdmCreateTest").serialize(),url:"/adm/ahid/createtest",dataType:"json",
        success: function(result) {
            console.log(result);
            $("input[name='tst_title']").attr('disabled','disabled');
            $(".hTstId").val(result.id_test);
            $("#dvSecondPart").slideDown();
            trigger_btn.attr('disabled','disabled)');
            $("#btnAdmCreateNewTest").removeClass('hide');
            $("#tstCreating").addClass('hide');
        },
        error: function(result){
            console.log(result);
            hints('error','Что то пошло не так');
        }
    });
}

$(document).ready(function() {

    //Удаление теста по иду
    $("#btnTstDel").click(function() {
        var id = $("#idTestToDel").val();
        $.ajax({type:"POST", data: "test_id="+id,url:"/adm/ahid/deltest",dataType:"json",
            success: function(result) {
                console.log(result);
                hints('success','Тест удален');
            },
            error: function(result){
                console.log(result);
                hints('error','Тест не удален');
            }
        });
    });

    // Пока нужно для того что бы редакторы не сворачивались с классом hide
    $("#dvSecondPart").slideUp(1);


    $("#btnAdmCreateNewTest").click(function() {
        $("#dvSecondPart").slideUp();
        $("input[name=tst_title]").removeAttr('disabled');
        $("#frmAdmCreateTest")[0].reset();
        $("#btnAdmCreateTest").removeAttr('disabled');
        $("input[name=tst_title]").focus();
        $(this).addClass('hide');
//        $("#createdQuestions").find('table').addClass('hide');
        $("#createdQuestions").find('tbody').html('');
    });

    $(".admVarIsText").live('click', function() {
        if($(".admVarIsText").hasClass('isChecked')) {
            $('.chkIsText').removeAttr('checked');
            $(".admVarIsText").removeClass('isChecked');
            $(".hQuestionIsText").val('0');
        } else {
            $('.chkIsText').attr('checked','checked');
            $(".admVarIsText").addClass('isChecked');
            $(".hQuestionIsText").val('1');
        }
    });

    // Нажимаем на кнопку удаления всех вариантов ответа
    $(".varDelAll").click(function() {
        $(".btnRemoveVariant").click();
    });

    // Нажимаем на кнопку удаления одного варианта ответа
    $(".btnRemoveVariant").live('click', function() {
        if($(this).closest('tbody').find('tr').length == 1) {
            $(".sendQuestion").addClass('disabled');
            $("#tblVariants").addClass('hide');
        }
        $(this).closest('tr').remove();

    });


    // Нажатие на кнопку отправки вопроса и его вариантов ответа
    $(".sendQuestion").click(function() {

        // Включаем изображение процесса выполнения
        $("#questionCreating").removeClass('hide');

        if(!$(this).hasClass('disabled')) {
            // Забираем с редактора вопроса весь текст
            var curr_question = REDACTOR_TSTQUESTION.getCodeTextarea();

            // И записываем его в скрытое поле для того что бы при сабмите формы отправить текст вопроса
            $(".hQuestionTitle").val(curr_question);

            // Отправка аякс запроса с сериализированой формой
            $.ajax({type:"POST", data: $("#frmAdmAddQuestion").serialize(),url:"/adm/ahid/tstaddquestvar",dataType:"json",
                // В случае удачной отправки запроса
                success: function(data) {
                    console.group('Sending Questions and Variants');
                    console.info(data.message);
                    console.log(data);
                    console.groupEnd();
                    // Если на сервере все удачно записалось...
                    if(data.status == 'ok') {
                        hints('success','Данные успешно записаны');
                        var additional_html = '', additional_status = '', check_as_correct = '';
                        if(data.question.ball) { additional_status = data.question.ball; }

                        // Генерируем верстку под записаный в базу вопрос
                        additional_html += '<tr class="trCreatedQuestion">' +
                            '<td colspan="2">' + data.question.title + '<input type="hidden" name="idQuestVar" value="' + data.question.id_tst_question + '"></td>' +
                            '<td class="admStatus">' + additional_status + '</td>' +
                            '<td class="admVarDel"><a class="delWritedItem"><img src="/stfile/img/tests/icon-delete.png"></a></td>' +
                        '</tr>';

                        // А затем для каждого варианта ответа
                        for(var i = 0; i < data.variants.length; i++) {
                            console.log(data.variants[i].title);
                            additional_status = '';
                            if(data.variants[i].ball > 0) {
                                additional_status = '<span class="pull-left spnCreatedBalls" title="Баллы">' + data.variants[i].ball + '</span>';
                            }
                            if(data.variants[i].is_text) {
                                additional_status += '<img class="pull-right questVarStatus" src="/stfile/img/tests/icon-input.png" title="Ответ нужно вводить с клавиатуры" ' +
                                    'data-original-title="Ответ нужно вводить с клавиатуры">';
                            }

                            if(data.variants[i].correct == '1') {
                                check_as_correct += '<img src="/stfile/img/tests/check.png">';
                            } else {
                                check_as_correct = '';
                            }

                            additional_html += '<tr>' +
                                '<td class="admCorrect">' + check_as_correct + '</td>' +
                                '<td class="tdCreatedVariantd">' + data.variants[i].title + '<input type="hidden" name="idQuestVar" value="' + data.variants[i].id_tst_answer + '"></td>' +
                                '<td class="admStatus">' + additional_status + '</td>' +
                                '<td class="admVarDel"><a class="delWritedItem"><img src="/stfile/img/tests/icon-delete.png"></a></td>' +
                            '</tr>';
                        }
                        clearQuestionVar();
                        // Выводим сгенерированную верстку в специальный блок
                        $("#createdQuestions").append('<table class="table"><thead></thead><tbody>' + additional_html + '</tbody></table>');

                    // Если на сервере произошел сбой то выводим сообщение об этом
                    } else if(data.status == 'bad') {
                        hints('error','Что то пошло не так');
                    }

                    // Выключаем изображение процесса выполнения
                    $("#questionCreating").addClass('hide');
                },

                // Если запрос не выполнился
                error: function(data){
                    console.group('Sending Questions and Variants');
                    console.warn('error in ajax query when try to send question and variants');
                    if (typeof data.message != 'undefined') {
                        console.warn(data.message);
                    }
                    console.groupEnd();
                    hints('error', 'Не удалось отправить аякс запрос');

                    // Выключаем изображение процесса выполнения
                    $("#questionCreating").addClass('hide');
                }
            });
        }

    });

    $(".tstSettings").click(function() {
        $('.dvTstTools').slideToggle(200);

    });

    $("#btnAdmCreateTest").click(function() {
       createNewTest($(this));

    });

    $(".addVariant").click(function(){
        var new_row, curr_variant,  rand, is_text_checked = '', curr_attr;
        curr_variant = REDACTOR_TSTVARIANTS.getCodeTextarea();
        rand = Math.ceil(Math.random()*1000000);
        console.log(curr_variant);

        // Если кнопка отправить запрос была неактивной, то теперь стоит сделать ее активной
        if($(".sendQuestion").hasClass('disabled')) {
            $(".sendQuestion").removeClass('disabled');
        }

        // Проверяем если таблица с вариантами ответа была спрятана значит в нее еще ничего не записывали
        if($("#tblVariants").hasClass('hide')) {
            $("#tblVariants").removeClass('hide');
            $("#tblVariants").slideDown();
        }

        // Если уже было выбрано что варианты ответов будут текстовыми то нужно и новому чекбоксу добавить checked
        if($(".admVarIsText").hasClass('isChecked')) {
            is_text_checked = 'checked="checked"';
        } else { is_text_checked = ''; }

        new_row = "<tr>" +
            "<td class='admVarText'>" + curr_variant + "<input type='hidden' name='tst_variant["+ rand +"]["+"title"+ "]' value='"+ curr_variant +"'></td>" +
            "<td class='admVarBall'><input type='text' class='span1' name='tst_variant["+ rand +"]["+"ball"+ "]'></td>" +
            "<td class='admVarCorr'><input type='checkbox' name='tst_variant["+ rand +"]["+"correct"+ "]'></td>" +
            "<td class='admVarIsText'><input type='checkbox' class='chkIsText' name='tst_variant["+ rand +"]["+"is_text"+ "]' " + is_text_checked + " ></td>" +
            "<td class='admVarDel'><a class='btn btn-danger btnRemoveVariant'><i class='icon-trash icon-white'></i></a></td></tr>";
        $("#tblVariants tbody").append(new_row);
    });
//================================== Юлина админка ===================================================================//

    //Добавляем факт в список
    $("#btnAddFact").click(function() {
        if($("#txtFact").val() != '') {
            var curr_tbody = $("#tblAddedFacts").children('tbody'),
                curr_val = $("#txtFact").val(),
                hidden_info = '<input type="hidden" name="facts[]" value="' + curr_val + '">';

            curr_tbody.append('<tr><td>' + curr_val + hidden_info + '</td><td><a class="btn btn-danger delFact" ><i class="icon-trash icon-white"></i></a></td></tr>');
            $("#txtFact").val('');
        } else {
            hints('warning','Нужно заполнить поле фактом');
        }
    });

    // Удаляем факт из списка
    $(".delFact").live('click', function() {
        $(this).closest('tr').remove();
    });

    // Передаем на сервер данные для записи в бд
    $("#btnWriteFacts").click(function() {
        $.ajax({type:"POST", data: $("#frmFacts").serialize(),url:"/adm/ahid/addfact",dataType:"json",
            success: function(data) {
                console.log(data);

                hints('success','Данные успешно записаны');
                $("#tblAddedFacts").find('tbody').html('');
            },
            error: function(){
                alert('error in ajax query when try to delete question');
            }
        });
    });

//---------------------------------- Юлина админка -------------------------------------------------------------------//


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
                            $("input[name=sex][value='0']").attr('checked','checked');
                        }
                        if (data['userInfo'][0]['sex'] == 1) {
                            $("input[name=sex][value='1']").attr('checked','checked');
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
//    redactorPre = $('#txtNewsPre').redactor({ imageUpload: '/news/nhid/loadimages' });

//    redactorFull = $('#txtNewsFull').redactor({ imageUpload: '/news/nhid/loadimages' });
    // Редактор для тестов
//    REDACTOR_TSTQUESTION = $('#tstQuestions').redactor({ imageUpload: '/news/nhid/loadimages' });
//    REDACTOR_TSTVARIANTS = $("#tstVariants").redactor({ imageUpload: '/news/nhid/loadimages'});

    //Редактор для вопросов в админке
    REDACTOR_QUESTION = $("#question").redactor({ imageUpload: '/news/nhid/loadimages'});

    $(".dropdown-timepicker").timepicker({showMeridian:false,defaultTime:'current',showSeconds:true});
    $("#date").datepicker({format:'dd-mm-yyyy'});





// ================================== Нажатие на кнопку добавления вопроса ========================================== //
    $(".addQuestion").click(function() {
        if(($("input[name=question_title]").val() == '') || ($(".label-tags").length == 0)) {
            hints('info','Для создания вопроса необходимао как минимуму ввести его заголовок, и выбрать одну категорию!');
        } else {
            // Переписываем текст с редактора в текстареа для дальнейшей серриализации данных формы
            $("#question").val(REDACTOR_QUESTION.getCodeTextarea());
            var form_data = $("#frmAddQuestion").serialize();
            $.ajax({type:"POST", async:true, data: form_data, url: "/adm/ahid/addQuestion", dataType:"json",
                success:function(data){
                    if(data) {
                        hints('success','Вопрос бы успешно задан');
                        clearAddQuestionForm();
                    } else {
                        hints('error','Что то пошло не так');
                        console.log('При создании вопроса возникла ошибка');
                    }
                },
                error:function(){
                    console.log('error in ajax query, when add answer :(');
                }
            });
        }
    });
// ---------------------------------- Нажатие на кнопку добавления вопроса ------------------------------------------ //
// ================================== Нажатие на кнопку очистки формы =============================================== //
    $(".clearQuestionForm").click(function() {
        clearAddQuestionForm();
    });
// ---------------------------------- Нажатие на кнопку очистки формы ----------------------------------------------- //
});



/*Добавление нового пользователя*/
function addNewUser(){
    $("[name = newUser]").submit();
}


/*Добавление новости*/
function addNewNews(){
    $("[name = formNews]").submit();
}
