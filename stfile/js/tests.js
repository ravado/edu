var TAB_COPY;

function getCurrentTab(initiator_on_tab) {
    return initiator_on_tab.closest($(".tab-pane"));
}

function addNewTab(l) {
    var curr_id, tempy;
    curr_id = l.closest($(".dvTestAdding")).find($(".tab-pane:last")).attr('id').substring(9);
    curr_id++;
    tempy = TAB_COPY.clone();

    $("#testTabs").append('<div class="tab-pane" id="question-' + curr_id + '"></div>');
    $("#testTabs .tab-pane:last").append(tempy);
    $(".nav-tabs").append('<li class=""><a href="#question-' + curr_id + '" data-toggle="tab">' + curr_id + ' вопрос</a></li>');

}

function addAnswerVariant(btnInitiator) {
    var additional_tags = '', number, additional_tags_thead = '',
        current_tbody = btnInitiator.closest($(".tab-pane")).find($(".tbVariantAnswers")),
        current_tab = btnInitiator.closest($(".tab-pane")),
        current_radio_ball = current_tab.find($(".ballMode .active")),
        current_radio_img = current_tab.find($(".imgMode .active")),
        inp_variant = current_tab.find($(".inpNewVariant")),
        current_table = current_tab.find($(".tblVariants"));
    if(current_radio_ball.hasClass('ballModeEach')) {
        additional_tags += '<td class="tdBall"><input type="text" class="span1"></td>';
        additional_tags_thead += '<th class="thBall">Балл</th>';
    }

    if(current_radio_img.hasClass('imgModeYes')) {
        additional_tags += '<td class="tdImg"><a class="btn btn-info">Добавить</a></td>';
        additional_tags_thead += '<th class="thImg">Картинка</th>';
    }

    number = parseInt(current_tbody.find($("tr:last")).find($(".tdNumber")).text());
    if(number) {
        number++;
    } else {
        number = 1;
        current_table.find('thead').append('<tr><th class="thNumber">#</th><th class="span9 thAnswer">Ответы</th>' + additional_tags_thead + '<th class="thCorrect">Правильный</th><th></th></tr>');
    }
    current_tbody.append('<tr><td class="tdNumber">' + number + '</td>' +
        '<td class="tdAnswer">' + inp_variant.val() + '</td>' + additional_tags +
        '<td class="tdCorrect"><input type="checkbox"></td>' +
        '<td class="tdDel"><a class="btn btn-danger btnRemoveVariant"><i class="icon-trash icon-white"></i></a></td></tr>');
    inp_variant.val('');
}

$(document).ready(function() {
    TAB_COPY = $(".tab-pane").children().clone();


    $(".inpBallCountAll").live("keyup", function() {
        if($(this).val() != '') {
            if(!getRegex($(this),'number')) {
                var curr_val = $(this).val();
                if(!isNaN(parseInt(curr_val))) {
                    $(this).val(parseInt(curr_val));
                } else {
                    $(this).val('');
                }
            }
        }
    });

    $("#addNewList").click(function() {
        addNewTab($(this));
    });

    // Нажатие на кнопку удаления варианта ответа
    $(".btnRemoveVariant").live("click", function() {
        // Если строка с вариантами ответа всего одна
        if($(this).closest($(".tbVariantAnswers")).find($("tr")).length == 1) {
            // ...то удаляем и варианты ответа и заголовки таблицы
            $(this).closest($(".tblVariants")).find($("tr")).remove();
        } else {
            // ...если же нет то просто один вариант ответа
            $(this).closest("tr").remove();
        }
    });

    $(".btnAddNewVariant").live("click",function() {
        if($(this).closest($(".tab-pane")).find($(".inpNewVariant")).val() != '') {
            addAnswerVariant($(this));
        }

    });

    $(".btn-group input").live("click" ,function() {
        var current_tab = $(this).closest($(".tab-pane"));
        var current_tab_table = current_tab.find($(".table"));
        if($(this).hasClass('ballModeEach')){
            current_tab.find($(".dvBallMode")).slideUp();
            current_tab_table.find($(".thAnswer")).after('<th class="thBall">Баллов</th>');
            current_tab_table.find($(".tdAnswer")).after('<td class="tdBall"><input type="text" class="span1"></td>');
        } else if ($(this).hasClass('ballModeAll')) {
            current_tab.find($(".dvBallMode")).slideDown();
            current_tab_table.find($(".thBall")).remove();
            current_tab_table.find($(".tdBall")).remove();
        } else if($(this).hasClass('imgModeYes')) {
            current_tab_table.find($(".thCorrect")).before('<th class="thImg">Картинка</th>');
            current_tab_table.find($(".tdCorrect")).before('<td class="tdImg"><a class="btn btn-info">Добавить</a></td>');
        } else if($(this).hasClass('imgModeNo')) {
            current_tab_table.find($(".thImg")).remove();
            current_tab_table.find($(".tdImg")).remove();
        }
   });

});