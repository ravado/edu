function isTagsComplete() {
    if ($(".label").length > 4) {
        $("input[type=checkbox]").not("input:checked").attr("disabled","disabled");
        $("#txtCategory").attr("disabled","disabled");
        $("#addNewCategory").attr("disabled","disabled");
        return true;
    } else {
        $("input[type=checkbox]").removeAttr('disabled');
        $("#txtCategory").removeAttr('disabled');
        $("#addNewCategory").removeAttr('disabled');
        return false;
    }
}

function isSimilar(string) {
    var count = false;
    if (string != '') {
    $(".label").each(function() {
        if ($(this).children('p').text() == string) {
            count = true;
        }
    })
    } else {count = true;}
    return count;
}


$(document).ready(function(){

    // При загрузке страницы снимем все галочки, а то некоторые (не будем показывать на ФФ) их сохраняют при перезагрузке
    $(":checkbox").removeAttr("checked");

    $("#addNewCategory").click(function(){
        var str = $("#txtCategory").val().toLowerCase(), rand;
        var arr;// = str.split(/[,;\s]/);
        var tempstring;
        tempstring = str.replace(/[^A-Za-zА-Яа-яЁё0-9]/g,',');
        arr = tempstring.split(',');
        alert(arr);
        var tagsCount = $(".label").length;
        var i,j;
        for (i = tagsCount, j = 0; i < 6, j < arr.length; i++, j++) {
            if (i < 5 ) {
                if(isSimilar(arr[j])) {
                    i--;
                    alert('is similar');
                } else {
                    rand = Math.random();
                    $(".dvCategoryLabel").append("<div class='label' id='"+rand+"'><p>"+arr[j]+"<span class='removeTag'></span></p><input type='hidden' name='tags["+rand+"]' value='"+arr[j]+"'></div>");
                    alert(arr[j]);
                }
            } else {
                alert('to much!');
                isTagsComplete();
                break;
            }
        }
        isTagsComplete();
        $("#txtCategory").val('');
    });

    // Нажатие на пункт категории
    $(".dvQuestCategory p").not("input[type=checkbox]").click(function() {
        var curr_checkbox, curr_div, temp;
        curr_checkbox = $(this).children('');
        temp = curr_checkbox.attr("class");
        curr_div = $(".dvSeparateCategory."+temp);
        $(this).removeClass("silver").addClass("white");
        $(".dvQuestCategory p").not($(this)).removeClass("white").addClass("silver");
        curr_div.css("display","block");
        $(".dvSeparateCategory").not(curr_div).css("display","none");
    });

    $("input[type=checkbox]").click(function(){
        if (!$(this).is(":checked")) {
            var curr_name;
            curr_name = $(this).attr("id");
            $(".label#"+curr_name).remove();
            isTagsComplete();


        } else {
            $(".dvCategoryLabel").append("<div class='label' id='"+$(this).attr('id')+"'><p>"+$(this).parent('').text()+"<span class='removeTag'></span></p></div>");
       isTagsComplete();
        }
    });

    // Добавление своих категорий
    $("#btnAskAddCategory").click(function(){
        var input = $("#dvAddingCategory");
        if($(this).hasClass("catCollapsed")) {
            $(this).removeClass("catCollapsed").text("добавить свою");
            input.hide();
            $(this).css("background-image","url('../../stfile/img/questions/plus1.png')");
        } else {
            $(this).addClass('catCollapsed').text('скрыть');
            $(this).css("background-image","url('../../stfile/img/questions/minus.png')");
            input.show();
        }
    });

    // При нажатии на лейбл тега удаляем его самого а также снимаем галочку с соответствующего ему чекбокса
    $(".label p").live('click',function(){
        var curr_div = $(this).parent('div');
        $("input#"+curr_div.attr('id')).removeAttr("checked");
        curr_div.remove();
        isTagsComplete();
    });


    // === Вывод динамических подсказок === //

    //фокус поля заголовка вопроса
    $("input[name=questionTitle]").focus(function() {
       $(".dvRightHelp div").html("<p>Ведите краткое заглавие Вашего вопроса. Максимальная длина 100 символов. " +
           "Не бойтесь если он полностью не вместиться, дополнить его Вы сможете в следующем поле.</p>");
    });

    //фокус поля заголовка вопроса
    $("textarea[name=questionFull]").focus(function() {
       $(".dvRightHelp div").html("<p>В этом поле вы можете в полной мере описать интересующий Вас вопрос. " +
           "Пишите выразительно и доходчиво, дабы ответы были точны и лаконичны.</p>");
    });

    //  фокус поля ввода пользовательских категорий
    $("#txtCategory").focus(function() {
        $(".dvRightHelp div").html("<p>Если вы не нашли из списка подходящих вашему вопросу категорий - добавьте свои. " +
            "Вводите их через запятую. Символы пробела будут игнорироваться.</p>");
    });




    // Нажатие на кнопку поиска в ВиО
    $("input[name=btnSearch]").click(function(){
        // Передаем в функцию поиска 1й обьект куда выводим, 2й обьект с которого считываем 3й настройки
        googleSearch($("#searchResult"),$("form[name=frmQuestion] #search"),{siteURL:'habrahabr.ru'});
        $(".dvTop").css("display","none");
        $(".dvLastQuestions").css("display","none");
        if(!$("#goback").length) {
            $(".dvSearch").append("<div id='goback' style='height: 0; float: left;'><a>Вернуться</a></div>");
        }
    });


    /* Кнопка вернуться при выдаче результатов поиска */
    $("#goback").live('click',function(){
        $("#searchResult").empty();
        $("#dvPagination").remove();
        $(".dvTop").css("display","block");
        $(".dvLastQuestions").css("display","block");
        $("#goback").remove();
    });


    // Отдельнно один вопрос

    //Нажатие на кнопку-звездочку избраное
    $(".favorite").toggle(function() {
            // если включаем звездочку
            $(this).css("background-image","url('../../stfile/img/questions/star_on.png')")
        },
        function(){
            // если выключаем звездочку
            $(this).css("background-image","url('../../stfile/img/questions/star_off.png')")
    });

    //Голосование за вопрос или ответ
    $(".voteDown-off , .voteUp-off").click(function() {
        if ($(this).hasClass('voteUp-off')) {

            $(this).addClass('voteUp');
            $(this).parent('div').children($(".voteDown-off")).removeClass('voteDown');
        } else {

            if($(this).hasClass('voteDown-off')) {
                $(this).addClass('voteDown');
                $(this).parent('div').children($(".voteUp-off")).removeClass('voteUp');
            }
        }
    });

    $("#btnGiveAnswer").click(function() {
        $(".frmAddAnswer").slideDown('fast');
        $(this).css("visibility","hidden");
    });

    $(".cancelAnswer").click(function() {
       $(".frmAddAnswer").slideUp('fast');
       $("#btnGiveAnswer").css("visibility","visible");
    });

    $("#btnGiveAnswerNotAuth").click(function() {
       hints('error','Что бы отвечать на вопросы вы должны быть авторизированы!');
    });

    // Добавляем новый ответ
    $(".postAnswer").click(function() {
        curr_textarea = $(".frmAddAnswer textarea");
        if (curr_textarea.val() != '') {

            var arr = [''],some;
            arr['id_question'] = $("#inpQuestionID").val();
            arr['answer_text'] = $(".frmAddAnswer textarea").val();
            some = $(".frmAddAnswer").serialize();
            //запись в базу данных ответа
            $.ajax({type:"GET", async:true, data: some, url: "/questions/qhid/addAnswer", dataType:"json",
                success:function(data){
                    if(data){//что нужно делать если найдена запись в базе
                        $(".tblAnswers").append('<tr><td class="bestAnswer-icon"></td>' +
                            '<td><div class="shadowBlock "><table cellspacing="0"><tr>' +
                            '<td><table><tr><td colspan="2"><a href="" class="username">' + data.username + ' </a>' +
                            '<span class="time">' + data.public_date + '</span></td></tr>' +
                            '<tr><td class="tdVote"><div class="dvVote"><a class="voteUp-off"></a><span class="spnVotesCount">0</span>' +
                            '<a class="voteDown-off"></a></div></td><td><p>' + curr_textarea.val() + '</p>' +
                            '</td></tr></table></td></tr></table></div></td></tr>');

                        // Скролим вниз страницы к ответу пользователя
                        $('body,html').animate({scrollTop: $(".tblAnswers").height()}, 800);
                        curr_textarea.val('');

                        $(".frmAddAnswer").slideUp('fast');
                        $("#btnGiveAnswer").css("visibility","visible");

                    }
                    if(!data){//что нужно делать если запись в базе не найдена
                        alert('not writed');
                    }
                },
                error:function(){
                    alert('error in ajax query, when add answer :(');
                }
            });
        }
    });

    $(".checkAsBest").click(function() {
        var some =$(this).parent('td').children('input').val();
       alert(some);
    });

});