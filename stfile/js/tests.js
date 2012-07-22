var TAB_COPY, // Клонированый элемент 1 вкладки, создаеться при загрузке страницы
    UPLOAD_FOR = 'question'; // Куда загружаеться картинки (для вопроса или вариантов ответа ('answer'))


// Переход на третий шаг создания теста
function toThirdStep() {
    if(!$("#btnThirdStep").hasClass('disabled')) {
        $(".dvTestAdding").fadeOut(300, function() {
            $(".dvTestFinalize").fadeIn(300);
        });
        $(".navThird").addClass('selected');
    } else {
        hints('error','Нужно добавить хоть один вариант ответа, и задать вопрос или картинку для него');
    }

}

// Переход на второй шаг создания теста
function toSecondStep() {
    $("#dvTestStartCreate").fadeOut(300, function() {
        $(".dvTestAdding").fadeIn(300);
        $(".navThird").removeClass('selected');
    });
}

// Переименование вкладок с вопросами для того что бы они шли по порядку
function refactorQuestions () {
    var number = 1, new_id = 'question-', new_title = '';
    $(".tab-pane").each(function(index, element) {
        $(element).attr('id',new_id+number);
        number++;
    });

    number = 1;
    $(".nav-pills li a").each(function(index, element) {
        $(element).attr('href', '#' + new_id + number);
        $(element).text(number + new_title);
        number++;
    });
}

// Переименование вариантов ответа, для упорядоченой нумерации
function refactorVariants (btnInitiator) {
    var number = 1, new_name = '', curr_question = btnInitiator.closest($(".tab-pane")).attr('id').substring(9);
    btnInitiator.closest($(".tblVariants")).find($(".tdNumber")).each(function(index, element) {
        if($(element).hasClass('deleting')) {
        } else {
            $(element).text(number);
            number++;
        }
    });
    number = 0;
    btnInitiator.closest($(".tblVariants")).find($(".chbIsCorrect")).each(function(index, element) {
        new_name = 'correct[' + (curr_question - 1) + '][' + number + ']';
        if($(element).hasClass('deleting')) {

        } else {
            $($(element).attr('name',new_name));
            number++;
        }
    });

}

// Удаление выделеного вопроса
function delQuestion () {
    var count_tabs = $(".tab-pane").length;
    if (count_tabs > 1) {
        $(".tab-pane.active").fadeOut('slow', function() {
            $(this).remove();
            $(".nav-pills").find($(".active")).remove();
            $(".tab-pane:first").addClass('active');
            $(".nav-pills li:first").addClass('active');
            refactorQuestions();
        });
        return true;
    } else if (count_tabs === 1) {
        return false;
    }

}

// Нахождение вкладки на которой находиться инициатор события
function getCurrentTab(initiator_on_tab) {
    return initiator_on_tab.closest($(".tab-pane"));
}

// Добавление новой вкладки для вопроса
function addNewTab(jQueryObj) {
    var curr_id, tempy, new_question_number, new_ball_calculate, new_ball_to_question,
        new_img_mode, curr_tab, curr_li, new_question_img;
    curr_li = $("li.active");
    curr_id = jQueryObj.closest($(".dvTestAdding")).find($(".tab-pane:last")).attr('id').substring(9);
    curr_tab = jQueryObj.closest($(".dvTestAdding")).find($(".tab-pane.active"));
    // Клонирование экземпляра вкладки
    tempy = TAB_COPY.clone();

    //  Изменение имен для элементов в склонированой вкладке
    new_question_number = 'question[' + curr_id +']';
    new_ball_calculate = 'ballCalculate[' + curr_id + ']';
    new_ball_to_question = 'ballForQuestion[' + curr_id + ']';
    new_img_mode = 'imgMode[' + curr_id + ']';
    new_question_img = 'questionImgName[' + curr_id + ']';

    tempy.find('.questionTitle').attr('name', new_question_number);
    tempy.find('.hBallMode').attr('name',new_ball_calculate);
    tempy.find('.inpBallCountAll').attr('name',new_ball_to_question);
    tempy.find('.hImgMode').attr('name',new_img_mode);
    tempy.find('.hQuestionImgName').attr('name',new_question_img);


    curr_tab.removeClass('active');
    curr_li.removeClass('active');
    curr_id++;
    $("#testTabs").append('<div class="tab-pane active" id="question-' + curr_id + '"></div>');
    $("#testTabs .tab-pane:last").append(tempy);
    $(".nav-pills").append('<li class="active"><a href="#question-' + curr_id + '" data-toggle="tab">' + curr_id + '</a></li>');
}

// Добавление варианта ответа
function addAnswerVariant(btnInitiator) {
    var number, ball_mode_class, img_mode_class,
        current_tbody = btnInitiator.closest($(".tab-pane.active")).find($(".tbVariantAnswers")),
        current_tab = btnInitiator.closest($(".tab-pane")),
        current_radio_ball = current_tab.find($(".ballMode .active")),
        current_radio_img = current_tab.find($(".imgMode .active")),
        inp_variant = current_tab.find($(".inpNewVariant")),
        current_table = current_tab.find($(".tblVariants")),
        hidden_variant, current_question = current_tab.attr('id').substring(9);

    // Если балл будет расчитываться для каждого вопроса отдельно, то изменим таблицу
    if(current_radio_ball.hasClass('ballModeEach')) {
        ball_mode_class = '';
    } else {
        ball_mode_class = 'hide';
    }

    // Если картинки будут в вариантах ответа, то изменим таблицу
    if(current_radio_img.hasClass('imgModeYes')) {
        img_mode_class = '';
    } else {
        img_mode_class = 'hide';
    }

    // Узнаем номер последнего ответа
    number = current_tbody.find($("tr")).length;
    if(number) {
        number++;
    } else {
        number = 1;
        current_table.find('thead').append('<tr>' +
            '<th class="thNumber">#</th>' +
            '<th class="span9 thAnswer">Ответы</th>' +
            '<th class="thBall ' + ball_mode_class + '">Баллов</th>' +
            '<th class="thImg ' + img_mode_class + '">Картинка</th>' +
            '<th class="thCorrect">Правильный</th>' +
            '<th></th>' +
            '</tr>');
    }
    hidden_variant = '<input type="hidden" name="answer[' + (current_question - 1) + '][' + (number - 1) + ']" value="' + inp_variant.val() + '">';
    current_tbody.append('<tr><td class="tdNumber">' + number + '</td>' +
        '<td class="tdAnswer">' + inp_variant.val() + hidden_variant +'</td>' +
        '<td class="tdBall ' + ball_mode_class + '">' +
            '<input type="text" class="span1 inpBallCountAll" name="ballPerVal[' + (current_question - 1) + '][' + (number - 1) + ']"></td>' +
        '<td class="tdImg ' + img_mode_class + '">' +
            '<a class="btn btn-info addImgToVariant">Добавить</a>' +
            '<input type="hidden" class="hVariantImgName" value="none" name="variantImgName[' + (current_question - 1) + '][' + (number - 1) + ']"></td>' +
        '<td class="tdCorrect">' +
            '<input type="checkbox" class="chbIsCorrect" name="correct[' + (current_question - 1) + '][' + (number - 1) + ']"></td>' +
        '<td class="tdDel"><a class="btn btn-danger btnRemoveVariant"><i class="icon-trash icon-white"></i></a></td></tr>');
    inp_variant.val('');
}







$(document).ready(function() {

    // ===================================== Прохождение тестов ===================================================== //

    $("#goodTest").click(function() {
        if(!$(this).hasClass('disabled')) {
            var test_id = $("#tstId").val();
            $.ajax({type:"POST", async:true, data: "test_id="+test_id, url: "/questions/qhid/voteuptest", dataType:"json",
                success:function(data){
                    $("#badTest").addClass('disabled');
                    $("#goodTest").addClass('disabled');
                    hints('success','Спасибо за ваш голос!');
                },
                error:function(){
                    $("#badTest").addClass('disabled');
                    $("#goodTest").addClass('disabled');
                }
            });
        }
    });


    $("#badTest").click(function() {
        if(!$(this).hasClass('disabled')) {
            var test_id = $("#tstId").val();
            $.ajax({type:"POST", async:true, data: "test_id="+test_id, url: "/questions/qhid/votedowntest", dataType:"json",
                success:function(data){
                    $("#badTest").addClass('disabled');
                    $("#goodTest").addClass('disabled');
                    hints('success','Спасибо за ваш голос!');
                },
                error:function(){
                    $("#badTest").addClass('disabled');
                    $("#goodTest").addClass('disabled');
                }
            });
        }
    });

    $("#btnPrev").click(function() {
        var count = $("#countQuestions").val(),
            current = $("#currentQuestion").val(),
            curr_form = $("#frmOneTest"),
            test_kind = $("#testKind").val(),
            test_id = $("#testId").val(),
            new_action = '';
        if((current-1) > 0) {
            new_action = '/tests/'+test_kind+'/'+test_id+'/'+(current - 1);
            curr_form.attr('action',new_action);
            curr_form.submit();
        }

    });

    $("#btnNext").click(function() {
        var count = $("#countQuestions").val(),
            current = parseInt($("#currentQuestion").val()),
            curr_form = $("#frmOneTest"),
            test_kind = $("#testKind").val(),
            test_id = $("#testId").val(),
            new_action = '';
        if((current+1) <= count) {
            new_action = '/tests/'+test_kind+'/'+test_id+'/'+(current + 1);
            curr_form.attr('action',new_action);
            curr_form.submit();
        }

    });

    // -------------------------------------------------------------------------------------------------------------- //

    //Всплывающая подсказка при наводе курсора на звездочку
    $(".locked-icon").popover({position: 10,
        placement: 'left',
        title: 'Заблокированный тест',
        trigger: 'hover',
        content: 'Пользователь создавший этот тест включил защиту паролем. Что бы пройти этот тест вы должны знать пароль от него',
        delay: {show: 800, hide: 10}});

    //Всплывающая подсказка при наводе курсора на иконки в таблице со списком тестов
    $(".icons").tooltip({position: 10,
        placement: 'bottom',
        trigger: 'hover',
        delay: {show: 800, hide: 10}});

    $(".znoTitle").click(function() {
       console.log('Никак тест по ' + $(this).children('.znoHeader').text() + ' хочешь пройти?');
    });


    // ========================= Загрузка изображений =============================== //

    // Создание экземпляра аякс-загрузки
    var uploader = new plupload.Uploader({
        runtimes : 'html5,flash', // Какие использовать способы загрузки
        browse_button : 'pickfiles', // id кнопки "выбор файлов"
        container: 'container',
        max_file_size : '5mb',
        multi_selection: false,
        url : '/questions/qhid/upload',
        //	resize : {width : 320, height : 240, quality : 90},
        unique_names : true,
//        flash_swf_url : '../js/plupload.flash.swf',
        filters : [
            {title : "Image files", extensions : "jpg,gif,png"}
        ]
    });


    uploader.bind('Init', function(up, params) {
        //$("#filelist").html("<div>Current runtime: " + params.runtime + "</div>");
//        alert('current runtime '+ params.runtime);
    });

    uploader.init();

    // Файл добавлен в список загружаемых
    uploader.bind('FilesAdded', function(up, files) {

        up.refresh();
        up.start();
//        for (var i in files) {
//            alert('file added: '+ files[i].name);
//            $('#filelist').html('<div id="' + files[i].id + '">' + files[i].name + ' (' + plupload.formatSize(files[i].size) + ') <b></b></div>');
//        }
        var curr_tab = $("#testTabs").find($(".tab-pane.active"));

        if(UPLOAD_FOR === 'question') {
            curr_tab.find('.hQuestionImgName').val(files[0].id);
            curr_tab.find('.spnImgTitle').html(files[0].name);
            curr_tab.find('.imgLoading').attr('src','../../../stfile/img/loading.gif');
            curr_tab.find('.imgLoading').removeClass('hide');
        } else if(UPLOAD_FOR === 'answer') {
            curr_tab.find('.addImgToVariant.gettingPic').closest('td').append('<div class="imgAnswerTitle waiting">' + files[0].name + '</div>');
            curr_tab.find('.addImgToVariant.gettingPic').closest('td').find('.hVariantImgName').val(files[0].id);
            curr_tab.find('.addImgToVariant.gettingPic').remove();
        }
    });

    // Файл загружаеться
    uploader.bind('UploadProgress', function(up, file) {
//        $("#" + file.id).html('<span>' + file.percent + "%</span>");
    });

    // Файл зашружен на сервер
    uploader.bind('FileUploaded', function(up, file) {
//        alert('file upload: '+file.id);
        var curr_tab = $("#testTabs").find($(".tab-pane.active"));
        if(UPLOAD_FOR === 'question') {
            curr_tab.find('.imgLoading').attr('src','../../../stfile/img/success.png');
        } else if(UPLOAD_FOR === 'answer') {
            curr_tab.find('.imgAnswerTitle.waiting').addClass('setGreen');
            curr_tab.find('.imgAnswerTitle.waiting').removeClass('waiting');
        }
    });

    $('#uploadfiles').click(function() {
        uploader.start();
        return false;
    });



    // --------------------------------------------------------------------------------------------------- //

    // Добавление изображения к вопросу
    $(".btnAddImgToQuestion").live('click', function() {
        UPLOAD_FOR = 'question';
        $("#pickfiles").trigger('click');
    });

    // Добавление изображений к вариантам ответа
    $(".addImgToVariant").live('click', function() {
        $("#testTabs").find($(".addImgToVariant.gettingPic")).removeClass('gettingPic');
        UPLOAD_FOR = 'answer';
        $(this).addClass('gettingPic');
        $("#pickfiles").trigger('click');
    });

    // Клонируем вкладку
    TAB_COPY = $(".tab-pane").children().clone();

    // Включение/выключение таймера
    $("#timerYes").change(function() {
        if($(this).attr('checked')) {
            $("#inpTime").removeAttr('disabled');
        } else {
            $("#inpTime").attr('disabled','disabled');
        }
    });

    // Кнопка перехода ко второму шагу создания теста
    $("#btnSecondStep").click(function() {
        if(!$(this).hasClass('disabled')) {
            toSecondStep();
            $(".navSecond").addClass('selected');
        } else {
            hints('error','Введите название вашего теста');
        }

    });

    $("#tstTitle").live('input paste', function() {
       if($(this).val() != '') {
           $("#btnSecondStep").removeClass('disabled');
       } else {
           $("#btnSecondStep").addClass('disabled');
       }
    });

    // Переход к первому шагу создания теста
    $("#btnReturnToFirstStep").click(function() {
        $(".dvTestAdding").fadeOut(300, function() {
            $("#dvTestStartCreate").fadeIn(300);
        });
        $(".navThird").removeClass('selected');
        $(".navSecond").removeClass('selected');
    });

    // Возвращение ко второму шагу
    $("#btnReturnToSecondStep").click(function () {
        $(".dvTestFinalize").fadeOut(300, function() {
            $(".dvTestAdding").fadeIn(300);
        });
        $(".navThird").removeClass('selected');
    });

    // Включение/выклчение пароля для теста
    $("input[name=passToTest]").change(function() {
        if($(this).val() == 'yes') {
            $("#inpPassToTest").removeAttr('disabled');
        } else {
            $("#inpPassToTest").attr('disabled','disabled');
        }
    });

    // Поле ввода количества баллов за вопрос, и количества минут для таймера.
    $(".inpBallCountAll").live("keyup", function () {
        if($(this).val() !== '') {
            // Проверяем число ли вводится
            if (!getRegex($(this), 'number')) {
                var curr_val = $(this).val();
                // Если нет то при возможности переводим в число
                if(!isNaN(parseInt(curr_val))) {
                    $(this).val(parseInt(curr_val));
                // Если не переводиться, то оставляем пустым поле
                } else {
                    $(this).val('');
                }
            }
        }
    });

    // Добавляем новую вкладку для вопроса
    $("#addNewTab").click(function() {
        var curr_tab = $(".tab-pane.active");
        if(curr_tab.find('.tbVariantAnswers td').length && (curr_tab.find(".questionTitle").val() != '') && curr_tab.find(".chbIsCorrect:checked").length > 0) {
            addNewTab($(this));
        } else if(curr_tab.find(".questionTitle").val() == '') {
            hints('error','Вы не ввели текст вопроса');
        } else if(!curr_tab.find('.tbVariantAnswers td').length) {
            hints('error','Вы не ввели ни одного варианта ответа на ваш вопрос');
        } else if(curr_tab.find(".chbIsCorrect:checked").length == 0) {
            hints('error','Хотя бы один из вариантов ответа должен быть правильным');
        }
    });

    // Нажатие на кнопку удаления варианта ответа
    $(".btnRemoveVariant").live("click", function() {
        var curr_btn = $(this);
        // Если строка с вариантами ответа всего одна
        if($(this).closest($(".tbVariantAnswers")).find($("tr")).length == 1) {
            hints('error','Нельзя же удалить единственный вариант ответа');
            /*// ...то удаляем и варианты ответа и заголовки таблицы
            $(this).closest($(".tblVariants")).find($("tr")).fadeOut('fast', function () {
                $(this).remove();
            });*/
        } else {
            $(this).closest('tr').find('.tdNumber').addClass('deleting');
            $(this).closest('tr').find('.chbIsCorrect').addClass('deleting');

            // ...если же нет то просто один вариант ответа
            $(this).closest("tr").fadeOut('fast', function () {

                refactorVariants(curr_btn);
                $(this).remove();

            });

        }
    });

    // Нажатие на кнопку удаления вопроса
    $("#delTestQuestion").click(function () {
        var curr_question = $(".nav-pills").find($(".active")).text();
        // Если вопрос удален
        if(delQuestion()) {

        // Если он остался всего один
        } else {
            hints('error', '<strong>' + curr_question + '</strong>' + ' единственный :)');
        }
    });

    // Добавление варианта ответа
    $(".btnAddNewVariant").live("click", function () {
        if($(this).closest($(".tab-pane")).find($(".inpNewVariant")).val() != '') {
            $("#btnThirdStep").removeClass('disabled');
            addAnswerVariant($(this));
        } else {
            hints('error','Вы не заполнили поле "текст ответа"');
        }
    });

    // Нажатие на кнопки выбора задания баллов для вопроса, и необходимости картинок для вариантов ответа
    $(".btn-group input").live("click", function () {
        var current_tab = getCurrentTab($(this)),
            current_tab_table = current_tab.find($(".table"));
        if ($(this).hasClass('ballModeEach')) {
            current_tab.find($(".hBallMode")).val('forEach');
            current_tab.find($(".dvBallMode")).slideUp();
            current_tab_table.find($(".thBall")).removeClass('hide');
            current_tab_table.find($(".tdBall")).removeClass('hide');
        } else if ($(this).hasClass('ballModeAll')) {
            current_tab.find($(".hBallMode")).val('forAll');
            current_tab.find($(".dvBallMode")).slideDown();
            current_tab_table.find($(".thBall")).addClass('hide');
            current_tab_table.find($(".tdBall")).addClass('hide');
        } else if ($(this).hasClass('imgModeYes')) {
            current_tab.find($(".hImgMode").val('yes'));
            current_tab_table.find($(".thImg")).removeClass('hide');
            current_tab_table.find($(".tdImg")).removeClass('hide');
        } else if ($(this).hasClass('imgModeNo')) {
            current_tab.find($(".hImgMode").val('no'));
            current_tab_table.find($(".thImg")).addClass('hide');
            current_tab_table.find($(".tdImg")).addClass('hide');
        }
    });

    $(".getInfo").live('click', function() {
        console.log('start');
        if($(this).hasClass('tstTitle')) {
            $(".tstHintsText").html('<b>Заголовок</b> для теста будет отображаться в списке всех тестов.' +
                ' Он должен отражать суть самого теста, для того что бы пользователь имел представление о его содержании.');
        } else if($(this).hasClass('tstCat')) {
            $(".tstHintsText").html('<b>Категория</b> теста - это привязка теста к определенной тематике ' +
                'Правильно подобранная категория поможет быстрее найти необходимый тест.<br>' +
                '<b>Например:</b> Тесту "История Киевской Руси" стоит выбрать категорию "История"');
        } else if($(this).hasClass('qstTitle')) {
            $(".tstHintsText").html('<b>Вопрос</b> один из самых важных елементов для проведения тестирования. ' +
                'Задавайте четко сформулированные вопросы, дабы уникнуть различных вариантов его трактования.<br>' +
                '<b>Например:</b> "В каком году родился Наполеон Бонапарт?"');
        } else if($(this).hasClass('qstBallMode')) {
            $(".tstHintsText").html('Для каждого вопроса определено два вида начисления баллов. <br>' +
                '<b>Первый</b> это начисление определенного количества баллов за правильно ' +
                'отвеченый вопрос. Если при ответе на вопрос хоть один вариант ответа был дан не правильно, то и весь вопрос ' +
                'засчитываеться как неправильно отвеченный<br>' +
                '<b>Например:</b> Если в вопросе два правильных варианта ответов, ' +
                'и пользователь выбрал из них только один, то баллы не зачисляються<br>' +
                '<b>Второй вариант</b> это начислять определенное количество баллов за каждый вариант ответа. ' +
                'Это позволит более гибко начислять баллы участнику тестирования<br>' +
                '<b>Например:</b> Если взять предыдущий пример, то пользователю будет засчитанно ' +
                'некоторое число баллов за один правильный ответ');
        } else if($(this).hasClass('qstBallCount')) {
            $(".tstHintsText").html('<b>Количество баллов</b> которые зачисляються за выбор всех правильных вариантов ответа.');
        } else if($(this).hasClass('ansImgMode')) {
            $(".tstHintsText").html('Вы можете добавить <b>изображение</b> в качестве вариантов ответа. <br>' +
                '<b>Например: </b> в вариантах ответа для впороса "как выглядит график синусов?" можно вывести изображения этих графиков.');
        } else if($(this).hasClass('ansVariant')) {
            $(".tstHintsText").html('В этом пункте можно задавать варианты ответов на вопрос, и правильные варианты отмечать галочкой. ' +
                'Если были включены опции <b>добавления изображений</b> или указания <b>количества баллов</b> для каждого ' +
                'варианта ответа, это можно сделать после добавления варианта ответа, в соответствующих столбцах.');
        }



    });

});