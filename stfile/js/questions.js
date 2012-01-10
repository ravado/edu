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
                    $(".dvCategoryLabel").append("<div class='label' id='"+rand+"'><p>"+arr[j]+"</p><input type='hidden' name='tags["+rand+"]' value='"+arr[j]+"'></div>");
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
            $(".dvCategoryLabel").append("<div class='label' id='"+$(this).attr('id')+"'><p>"+$(this).parent('').text()+"</p></div>");
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
});