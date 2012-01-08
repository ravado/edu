$(document).ready(function(){

    // Нажатие кнопки "Поиск" или "Спросить" в зависимости от нажатого вызываем разные екшены
//    $(".frmQuestion").children(".submit").click(function() {
//        if ($(this).attr("name") == "btnSearch") {
//
//
//
//            $(".frmQuestion").attr('action','/questions/ask');
//        }
//    });

    // Нажатие на пункт категории
    $(".dvQuestCategory p").not("input[type=checkbox]").click(function() {
        var curr_checkbox, curr_div, temp;
        curr_checkbox = $(this).children();
        temp = curr_checkbox.attr("class");
        curr_div = $(".dvSeparateCategory."+temp);
        $(this).removeClass("silver").addClass("white");
        $(".dvQuestCategory p").not($(this)).removeClass("white").addClass("silver");
        curr_div.css("display","block");
        $(".dvSeparateCategory").not(curr_div).css("display","none");
    });

    $("input[type=checkbox]").click(function(){
        if ($(this).is(":checked") == false) {
        $("#"+$(this).attr("name")).remove();
        } else {
            $(".ololo").append("<div class='label' id='"+$(this).attr('name')+"'><p>"+$(this).parent().text()+"</p></div>");

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



    // Нажатие на кнопку поиска в ВиО
    $("form[name=frmQuestion] input[name=btnSearch]").click(function(){
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