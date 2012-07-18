function addQuestion() {
    if($("input[name=questionTitle]").val() == '') {
        hints('warning','Введите краткое содержание вопроса');
        return false;
    }

    if($("div.label-tags").length == 0) {
        hints('warning','Выберите хотя бы одну категорию своему вопросу');
        return false;
    }

    $('#frmAskQuestion').submit();
}



function createCounter(jqueryObj) {
    var curr_parent = jqueryObj.parent(),
        temp_clone = jqueryObj.clone(),
        curr_height = jqueryObj.outerHeight();

    curr_parent.prepend(temp_clone.clone().css('margin-top',-curr_height));
    curr_parent.append(temp_clone.clone());
    curr_parent.addClass('countered');
    jqueryObj.addClass('showed');
}

function countDown(jqueryObj, number) {
    var first_el = jqueryObj.children(':first'),
        curr_heigth = first_el.outerHeight(),
        curr_top = parseInt(first_el.css('margin-top')),
        curr_showed = jqueryObj.children('.showed');
    jqueryObj.children().not('.showed').text(number);
    curr_showed.prev('.numCount').addClass('showed');
    curr_showed.removeClass('showed');
    first_el.animate({'margin-top':(curr_heigth + curr_top)+'px'}, 200);
}

function countUp(jqueryObj, number) {
    var first_el = jqueryObj.children(':first'),
        curr_height = first_el.outerHeight(),
        curr_top = parseInt(first_el.css('margin-top')),
        curr_showed = jqueryObj.children('.showed');
    jqueryObj.children().not('.showed').text(number);
    curr_showed.next('.numCount').addClass('showed');
    curr_showed.removeClass('showed');
    first_el.animate({'margin-top': (curr_top - curr_height)+'px'}, 200);
}

$(document).ready(function(){


    //Всплывающая подсказка при наводе курсора на звездочку
    $(".favorite").popover({position: 10,
                            placement: 'left',
                            title: 'Избранное',
                            trigger: 'hover',
                            content: 'Вы можете добавить этот вопрос в Избранное',
                            delay: {show: 800, hide: 10}});

    //Отслеживаем нажатие Enter для входа
    $("textarea[name=answer_text]").keypress(function(e){
        if(e.keyCode == 13){
            $(".postAnswer").click();
        }
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
            "Вводите их через запятую.</p>");
    });




    // Нажатие на кнопку поиска в ВиО
    $("input[name=btnSearch]").click(function(){
        // Передаем в функцию поиска 1й обьект куда выводим, 2й обьект с которого считываем 3й настройки
        googleSearch($("#searchResult"),$("form[name=frmQuestion] #search"),{siteURL:'habrahabr.ru'});
        $(".dvTop").css("display","none");
        $(".dvLastQuestions").css("display","none");
        $("#btnAllQuestions").css("display","none");
        if(!$("#goback").length) {
            $(".dvSearch").append("<div id='goback' style='height: 0; float: left;'><a class='btn'><i class='icon-chevron-left'></i>Вернуться</a></div>");
        }
    });


    /* Кнопка вернуться при выдаче результатов поиска */
    $("#goback").live('click',function(){
        $("#searchResult").empty();
        $("#dvPagination").remove();
        $(".dvTop").css("display","block");
        $(".dvLastQuestions").css("display","block");
        $("#btnAllQuestions").css("display","inline-block");
        $("#goback").remove();
    });


    // Отдельнно один вопрос

    //Нажатие на кнопку-звездочку избраное
    $(".favorite").click(function() {

//        var similiar = $(this).val();
//        var star = $(".favorite");
//        alert(star.length);

        var needed = $(this).parent('td').children('input').val();
        var star = $(this);

            // если включаем звездочку
            if (!star.hasClass('favoriteChecked')) {
                star.addClass('favoriteChecked');
                $.ajax({type:"POST", async:true, data: "question_id="+needed, url: "/questions/qhid/addFavorite", dataType:"json",
                    success:function(data){
                        switch (data) {
                            case 'inserted' : {
//                                alert('inserted');
                                hints('success','Вопрос успешно добавлен в Избранное');
                                break;
                            }
                            case 'not inserted' : {
                                star.removeClass('favoriteChecked');
//                                alert('not inserted');
                                break;
                            }
                            case 'empty data' : {
                                star.removeClass('favoriteChecked');
//                                alert('empty data');
                                break;
                            }
                            case 'not auth' : {
                                star.removeClass('favoriteChecked');
                                hints('error','Что бы добавлять вопросы в избранное Вы должны быть авторизированы!');
                                break;
                            }
                            case 'exist' : {
//                                alert('exist');
                                break;
                            }
                        }
                    },
                    error:function(){
                        star.removeClass('favoriteChecked');
                        alert('error in ajax query, when add to favor :(');
                    }
                });
            } else {
                // если выключаем звездочку
                star.removeClass('favoriteChecked');
                $.ajax({type:"POST", async:true, data: "question_id="+needed, url: "/questions/qhid/removeFavorite", dataType:"json",
                    success:function(data){
                        switch (data) {
                            case 'deleted' : {
                                hints('info','Вопрос удален из Избранного');
                                break;
                            }
                            case 'not deleted' : {
                                star.addClass('favoriteChecked');
                                break;
                            }
                        }
                    },
                    error:function(){
                        star.addClass('favoriteChecked');
                        alert('error in ajax query, when del from favor :(');
                    }
                });
            }
    });

    //Голосование за вопрос или ответ
    $(".voteDown-off , .voteUp-off").live('click', function() {

        var curr_id = $(this).parent().parent().parent().parent().find($(".hQAid")),
            curr_span = $(this).parent('div').children('.spnVotesCount'),
            curr_span_text,
            cuur_item = $(this),
            curr_showed = cuur_item.closest('.dvVote').find('.numCount');
        if(!curr_showed.closest('.dvCount').hasClass('countered')) {
            createCounter(curr_showed);
        }
        curr_span_text = parseInt(curr_span.find('.showed').text());
        if (!$(this).hasClass('voteUp-off')) {
            if (cuur_item.hasClass('voteDown-off')) {

                // Отдаем  отрицательный голос
                $.ajax({type:"POST", async:true, data:"qa_id=" + curr_id.val(), url:"/questions/qhid/voteDown", dataType:"json",
                    success:function (data) {
                        switch (data) {
                            case 'voted down' :
                            {
                                countDown(curr_showed.closest('.dvCount'), parseInt(curr_span_text - 1));
//                                curr_span.text(curr_span_text - 1);
                                cuur_item.addClass('voteDown');
                                cuur_item.parent('div').children($(".voteUp-off")).removeClass('voteUp');
                                break;
                            }
                            case 'changed to -2' :
                            {
                                countDown(curr_showed.closest('.dvCount'), parseInt(curr_span_text - 2));
//                                curr_span.text(curr_span_text - 2);
                                cuur_item.addClass('voteDown');
                                cuur_item.parent('div').children($(".voteUp-off")).removeClass('voteUp');
                                break;
                            }
                            case 'empty data' :
                            {
                                break;
                            }
                            case 'not auth' :
                            {
                                hints('info', 'Что бы голосовать необходимо <a href="/">авторизироваться</a>')
                                break;
                            }
                        }
                    },
                    error:function () {
                        alert('error in ajax query, when vote down :(');
                    }
                });
            }
        } else {

            // Отдаем положительный голос
            $.ajax({type:"POST", async:true, data:"qa_id=" + curr_id.val(), url:"/questions/qhid/voteUp", dataType:"json",
                success:function (data) {

                    switch (data) {
                        case 'voted up' :
                        {
                            countUp(curr_showed.closest('.dvCount'), parseInt(curr_span_text + 1));
//                            curr_span.text(curr_span_text + 1);
                            cuur_item.addClass('voteUp');
                            cuur_item.parent('div').children($(".voteDown-off")).removeClass('voteDown');
                            break;
                        }
                        case 'changed to +2' :
                        {
                            countUp(curr_showed.closest('.dvCount'), parseInt(curr_span_text + 2));
//                            curr_span.text(curr_span_text + 2);
                            cuur_item.addClass('voteUp');
                            cuur_item.parent('div').children($(".voteDown-off")).removeClass('voteDown');
                            break;
                        }
                        case 'empty data' :
                        {

                            break;
                        }
                        case 'not auth' :
                        {
                            hints('info', 'Что бы голосовать необходимо <a href="/">авторизироваться</a>')
                            break;
                        }
                    }
                },
                error:function () {
                    alert('error in ajax query, when vote up :(');
                }
            });


        }
    });

    $("#btnGiveAnswer").click(function() {
        $(".frmAddAnswer").slideDown('fast');
        $("textarea").focus();
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

            var arr = [''],some, ans_count, curr_count_block = $(".ansCount").find('h4');
            ans_count = curr_count_block.text().substr(9);
            console.log('ans count - ' + ans_count);
            arr['id_question'] = $("#inpQuestionID").val();
            arr['answer_text'] = $(".frmAddAnswer textarea").val();
            some = $(".frmAddAnswer").serialize();
            //запись в базу данных ответа
            $.ajax({type:"GET", async:true, data: some, url: "/questions/qhid/addAnswer", dataType:"json",
                success:function(data){
                    if(data){//что нужно делать если найдена запись в базе

                        if ($(".searchTitle").length) {
                            $(".searchTitle").remove();
                        }

                        curr_count_block.text('Ответов: ' + (parseInt(ans_count) + 1));
                        $(".tblAnswers").append('<tr><td class="bestAnswer-icon"></td>' +
                            '<td><div class="lineBlock"><table cellspacing="0"><tr>' +
                            '<td><table><tr><td colspan="2" class="itemInfo"><a href="" class="username">' + data.username + ' </a>' +
                            '<span class="time">' + data.public_date + '</span>' +
                            '<input type="hidden" class="hQAid" value="'+ data.id_qa +'"></td></tr>' +
                            '<tr><td class="tdVote"><div class="dvVote"><a class="voteUp-off"></a><div class="spnVotesCount dvCount"><div class="numCount">0</div></div>' +
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



    //Выбрать лучший ответ
    $(".checkAsBest").click(function() {
        var curr_item = $(this),
            curr_answer_id = curr_item.parent('td').children('.hAnswerId');

        //Запрос на отметку ответа как лучшего
        $.ajax({type:"POST", async:true, data: "answer_id="+curr_answer_id.val() + "&" +"question_id="+$("#hQuestionId").val(), url: "/questions/qhid/checkAsBest", dataType:"json",
            success:function(data){
                switch(data) {
                    case 'checked' : {
                        window.location.reload();
                        break;
                    }
                    case 'not auth' : {
                        alert('not auth');
                        break;
                    }
                    case 'empty data' : {
                        alert('empty data');
                        break;
                    }
                }
            },
            error:function(){
                alert('error in ajax query, when check as best :(');
            }
        });

    });

});