/*
 * Скрипты которые необходимы на всем сайте
 */


//Проверка существует ли запись в поле(type) таблицы 'users' базы данных eduka
//type может быть 'login' или 'email',
//'id' это идентификатор элемента с которого необходимо считать значение (например с <input type="text" id="вот этот id">)
function isValueExist(id,type){
    var inputedValue,globalArray,isExist,neededAction;
    inputedValue= $("#"+id).val();//то значение которое необходимо проверить (выбираем по идишнику переданого елемента)
    globalArray =  "ckeckIsExist=";// в какую переменную глобального массива будем записывать
    isExist = false;//существует ли такая запись
    //если проверить нужно логин
    if (type == "login"){
        neededAction = "/user/uhid/getuserthlogin" //екшн который будет выполнятся если проверяем логин
    }
    //если проверить нужно емейл
    if (type == "email"){
        neededAction = '/user/uhid/getuserthemail' //екшн который будет выполнятся если проверяем емейл
    }
    //аякс запрос с синхронной передачей даных
    $.ajax({type:"POST", async:false, data: globalArray+inputedValue, url: neededAction, dataType:"json",
        success:function(data){
            if(data.isRegistered){//что нужно делать если найдена запись в базе
                //alert("This login already exist! Try another!");
                isExist = true;
            }
            if(!data.isRegistered){//что нужно делать если запись в базе не найдена
                //alert("You can use this login!");
                isExist = false;
            }
        },
        error:function(){
            alert('error in ajax query, when check login :(');
        }
    });
    return isExist;
}

// =========================================== Поиск ================================================================ //
// Парсинг результатов поиска
function result (googleResults) {
    var arr = [];

    // Парсим че гугл понасылал
    switch(googleResults.GsearchResultClass){
        case 'GwebSearch':

            arr = [
                '<div class="webResult">',
                '<p class="resultTitle"><a href="',googleResults.url,'">',googleResults.title,'</a></p>',
                '<p class="resultContent">',googleResults.content,'</p>',
                '<a class="resultUrl" href="',googleResults.url,'">',googleResults.visibleUrl,'</a>',
                '</div>'
            ];
            break;
    }
    this.toString = function () {
        return arr.join('');
    }
}

// Поиск
function googleSearch(resultObj, valueObj, settings) {

    //создаем начальный конфиг для поиска
    var resultObj, apiURL,  config = {
        siteURL     : '',   // По какому сайту ищем
        searchSite  : false, // false - не ищем по нашему сайту
        type        : 'web', // не картинки, видео, блоги, а обычный поиск
        append      : false,
        perPage     : 8,     //Количество записей на страницу (макс 8)
        page        : 0,      //Стартовая страница
        lang        : 'ru',
        gl         : 'UA',
        safe        :'on'
    }

    //Создаем блок для пагинации если его еще нет
    if (!$("#dvPagination").length) {
        resultObj.after("<div id='dvPagination' class='pagination'></div>");
    }
    // Если передали адресс сайта по которому искать
    if (settings != null && settings.siteURL != null) {
        config.siteURL = settings.siteURL;
        config.searchSite = true;
    } else {
        config.searchSite = false;
    }

    // Обьединение 2 обьектов в 1 (начальный конфиг + переданые настройки)
    settings = $.extend({},config,settings);
    settings.term = settings.term || valueObj.val();

    // Если ищем по определенному сайту
    if(settings.searchSite){
        settings.term = 'site:'+settings.siteURL+' '+settings.term;
    }

    /*Иконка загрузки результатов
    $("#dvContent").append("<img id='imgLoading' style='z-index: 1000;display: none; position: absolute;' src='../../stfile/img/2loading.gif'>");
    var some = $("#imgLoading"), a, b;
    some.show();
    a = $(window).height()/2;
    b = $(".pageContainer").width();
    alert(a+";"+b);
    some.offset({top:a,left:b});*/

    apiURL = 'http://ajax.googleapis.com/ajax/services/search/'+settings.type+'?v=1.0&callback=?';
    resultObj.css("opacity","0.5");

    //отправка запроса на сервер гугла
    $.getJSON(apiURL,{
        q	  : settings.term,
        gl    : settings.gl,
        rsz	  : settings.perPage,
        start : settings.page*settings.perPage,
        safe  : 'on'
    },function(googleResults){
        resultObj.css("opacity","1");
        //some.hide();
        var results = googleResults.responseData.results;
        if(results.length){

            //При выполнении нового поиска очищаем результаты прошлых лет
            resultObj.empty();

            //создаем блок для хранения страниц
            resultObj.append("<div class='pageContainer'></div>");
            var pageContainer = $(".pageContainer");
            pageContainer.append("<p class='searchTitle'> Результаты поиска </p><hr>");
            //Бежим циклом пока есть результат (заменить на while!)
            for(var i=0;i<results.length;i++){

                // Создаем новый обьект результатов
                pageContainer.append(new result(results[i]) + '');
            }
            pageContainer.append("<hr>"); // Добавляем полосочку для пущей красивости

            //пагинация
            var need_pages, current_page, bound_start, bound_stop;
            var cursor = googleResults.responseData.cursor;
            current_page = settings.page;
            need_pages = Math.ceil(cursor.estimatedResultCount/settings.perPage);

            bound_start = 1;
            bound_stop = 7;

            if (need_pages < 7) {
                bound_stop = need_pages;
            }

            if (!settings.append) {
                $("#dvPagination").empty();
                var pagination = '<ul>';
                for ( i = bound_start ; i <= bound_stop ; i++ ) {
                    if (bound_stop > 1) {
                        if(i == 1) {
                            pagination += "<li class='active'><a href='#'>" + i + "</a></li>";
                        } else {
                            pagination += "<li><a href='#'>" + i + "</a></li>";
                        }
                    }
                }
                pagination += '</ul>';
                $("#dvPagination").append(pagination);
                // Добавляем знак Powered by Google
                $("#dvPagination").append("<img src='../../stfile/img/questions/powered_by_google.gif' style='float: right; padding-top: 10px;'>");
            }
        }
        else {
            // Если ничего не нашли то очищаем предыдущие записи
            resultObj.empty();
            $("#dvPagination").empty();
            resultObj.append("<div class='pageContainer'><p class='searchTitle'>Извините но по даному запросу ничего не найдено.</p><hr></div>");
        }
    });

    //событие клика по кнопке с номером страници (динамическое!)
    $(".pagination li").live('click',function() {
        $(this).addClass("active");
        $(".pagination li").not($(this)).removeClass("active");

        settings.page = parseInt($(this).text())-1;
        settings.append = true;

        // И снова посылаем запрос гуглу
        googleSearch($("#searchResult"),$("#txtSearch"),settings);
    });

    return false;
}
// ------------------------------------------------------------------------------------------------------------------ //

//====================================== Валидация введенных данных ==================================================//

//jQueryObj (jQuery) это передаваемый обьект джиквери с которого необходимо взять даные и проверить их корректность
//validateKind (строковый) это тип проверяемых данных (login, email, password, firstname, lastname, capcha)
//ajaxCheck (булевый)необязательный параметр, который указывает необходимость проверки даных с БД
function validCheck(jQueryObj,validateKind,ajaxCheck) {
    var result;
    // Проверяем количество переданых параметров
    if (arguments.length >= 2) {
        //Если есть что проверять :)
        if (jQueryObj.val().length > 0) {
            //Если с 3-мя параметрами
            if (arguments.length == 3) {
                //Если с ajax запросом
                if (ajaxCheck) {
                    //В зависимости от того какой тип валидации проводить
                    switch (validateKind){
                        case 'login':{
                            break;
                        }
                        case 'email':{
                            break;
                        }
                        default: {
                            return 'not correct parametr';
                        }
                    }
                    //Проверяем проходит ли по регулярному выражению
                    if (getRegex(jQueryObj,validateKind)){
                        if(isValueExist(jQueryObj.attr('id'),validateKind)) {
                            return 'exist';
                        }
                        else {
                            return 'empty';
                        }
                    }
                    else {
                        return 'not correct';
                    }
                }
                // Без ajax запроса
                else {
                    if (getRegex(jQueryObj,validateKind)){
                        return 'correct';
                    }
                    else {
                        return 'not correct';
                    }
                }
            }
            //Если без 3-го параметра
            else {
                if (getRegex(jQueryObj,validateKind)){
                        return 'correct';
                }
                else {
                    return 'not correct';
                }
            }
        }
        //Если не введено символов
        else{
            return 'not enough symbols';
        }
    }
    else {
        return 'not enough parameter';
    }
    
    return result;
}
//--------------------------------------------------------------------------------------------------------------------//

//==============================Регулярные выражения==================================================================//
//функция возвращает регулярное выражение необходимое для валидации полей
//type это тип проверяемого выражения (может быть: email, login, password, name)

function getRegex (jQueryObj,type){
    var currRagex;

    //Максимальные значения для полей
    var maxLogin = 32,
          maxPassword = 64,
          maxEmail = 254,
          maxName = 20;
    switch (type){
        case ('login'):{
            if (jQueryObj.val().length > maxLogin) {
                return false;
            }
            else {
                currRagex = new RegExp(/^\w+([\.-]?\w+){2,}$/);
                return currRagex.test(jQueryObj.val());
            }
        }
        case ('password'):{
            if (jQueryObj.val().length > maxPassword) {
                return false;
            }
            else {
                currRagex = new RegExp(/^[^а-яА-Я]{5,}$/);
                return currRagex.test(jQueryObj.val());
            }
        }
        case ('email'):{
            if (jQueryObj.val().length > maxEmail) {
                return false;
            }
            else {
                currRagex = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/);
                return currRagex.test(jQueryObj.val());
            }
        }
        case ('name'):{
            if (jQueryObj.val().length > maxName) {
                return false;
            }
            else {
                currRagex = new RegExp(/^[a-zA-Zа-яА-Я]{3,}$/);
                return currRagex.test(jQueryObj.val());
            }                        
        }
        case ('number'):{
            if(jQueryObj.val() == '') {
                return false;
            } else {
                currRagex = new RegExp(/^\d+$/);
                return currRagex.test(jQueryObj.val());
            }
        }
        case ('comma'):{
            if(jQueryObj.val() == '') {
                return false;
            } else {
                currRagex = new RegExp(/,/m);
                return currRagex.test(jQueryObj.val());
            }
        }
        default:{
            return false;
        }
    }
}
//--------------------------------------------------------------------------------------------------------------------//
//======================ЭТО ВСЕ ЧТО ОТНОСИТЬСЯ К ВЫЕЖАЮЩИМ СВЕРХУ ХИНТАМ==============================================//

//===Флаги====//
var mShowed = false; //состояние сообщения, false - сообщение спрятано, true - показано
var mIsFirstRun = true;//впервые ли запущено?
//------------//

//Значение сообщений по умолчанию, если в функцию hint()не будет передано
//второго параметра именно эти сообщения будут выводиться
var defValueOfInfo = "This is <b>Info</b> message <br>";
var defValueOfWarning = "This is <b>Warning</b> message <br>";
var defValueOfError = "This is <b>Error</b> message <br>";
var defValueOfSuccess = "This is <b>Success</b> message <br>";
var hintTimer = null;//Создание переменной для таймера

//===========================Прячем=сообщения===================================//
function hideAllHints(){
    var hints = $('.hint');
    if (mIsFirstRun == false){
        hints.each(function(index,value){
            $(this).animate({top: -$(this).outerHeight()},200);
        })
    }
    if (mIsFirstRun == true){
        hints.each(function(index,value){
            $(this).css('top', -$(this).outerHeight());
        })
    }
    mShowed = false;
}
//------------------------------------------------------------------------------//

/*=========================Инициализация=сообщений==============================*/
function initializeHints(){
    var messageOnPage = $('.hint'); //Выбираем все сообщения на странице
    messageOnPage.each(function(index,value){
        //в зависимости от класса записываем значения по умолчанию
        switch ($(this).attr('class')){
            case 'hint info':{
                $(this).html(defValueOfInfo);
                break;
            }
            case 'hint warning':{
                $(this).html(defValueOfWarning);
                break;
            }
            case 'hint error':{
                $(this).html(defValueOfError);
                break;
            }
            case 'hint success':{
                $(this).html(defValueOfSuccess);
                break;
            }
        }
    })
    //После инициализации прячем сообщения
    hideAllHints();
    mIsFirstRun = false;
}
//------------------------------------------------------------------------------//

/*=================================Вывод=сообщений=============================*/
function showHint(hintKind){
    if (mShowed){
        hideAllHints();
    }
    if (!mShowed){
        $('.'+hintKind).animate({top:"0"},500);
        mShowed = true;
    }
    //если таймер уже задан то обнуляем его
    if (hintTimer){
        clearTimeout(hintTimer);
    }
    //задаем время отображения сообщений в милисекундах
    hintTimer = setTimeout(function(){hideAllHints()},5000);
}
//P.S. Эту функцию и функцию hints() можно обьединить в одну, но это немного геморно...
//...так что пока пускай так будет, работает ведь.
//------------------------------------------------------------------------------//

/*=====================Главная функция по выводу сообщений======================*/
//Принимает 2 параметра, тип сообщения и текст сообщения(необязательный)
function hints(hintKind, htmlValue){
    if (htmlValue == null){
        initializeHints();
        showHint(hintKind);
    }
    if(htmlValue != null){
        $('.' + hintKind).html(htmlValue);
        hideAllHints();
        showHint(hintKind);
    }
}

//--------------------------------------------------------------------------------------------------------------------//
function isTagsComplete() {
    if ($(".label-tags").length > 4) {
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
        $(".label-tags").each(function() {
            if ($(this).children('p').text() == string) {
                count = true;
            }
        })
    } else {count = true;}
    return count;
}

//**************************************************начало ready******************************************************//
$(document).ready(function(){

//============================Хинты====================================//
    //Инициализация сообщений
    initializeHints();

    //Клик по выехавшему сообщению посылает его обратно :)
    $('.hint').click(function(){hideAllHints()});
//--------------------------------------------------------------------//

    //Плейсхолдеры для бл#@&*!го IE!!!
    $('[placeholder]').placeholder();



//======================== Кнопка "еще" в хедере =====================//
        var mouse_inside = false;

    $('.more').hover(
        function(){mouse_inside=true;},
        function(){mouse_inside=false;}
    );

    $(".btnMore").click(function(){
        if ($(".more").hasClass("hide")){
            $(".more").css("display","inline");
            $(".more").addClass("expand");
            $(".more").removeClass("hide");
            return;
        }
        if ($(".more").hasClass("expand"))
        {
            $(".more").addClass("hide");
            $(".more").removeClass("expand");
            $(".more").css("display","none");
            return;
        }
    });

    $("html").mouseup(function(event){
        if(! mouse_inside && event.target.className !== "btnMore") {
            if ($(".more").hasClass("expand"))
            {
                $(".more").addClass("hide");
                $(".more").removeClass("expand");
                $(".more").css("display","none");
             }
        }
    });
//-------------------------------------------------------------------//

//=================  Клик по кнопке екстра меню =====================//
    $(".btnExtra").click(function() {
        var extra_content = $(this).closest($('.extraConfig')).find($('.extraContent'));
        extra_content.slideToggle(200);
    });
//-------------------------------------------------------------------//



//========  Выбор и добавление категорий при создании вопроса ======//
    //Отслеживаем ввод запятой для добавления категории
    $("#txtCategory").keyup(function(e) {
        var curr_value = $(this).val();
        if(getRegex($(this),'comma')) {
            console.log('key is comma');
            $(this).val(curr_value.replace(",", ""));
            $("#addNewCategory").click();
        } else {
            console.log('not comma');
        }

    });

    // При загрузке страницы снимем все галочки, а то некоторые (не будем показывать на ФФ) их сохраняют при перезагрузке
//    $(":checkbox").removeAttr("checked");

    $("#addNewCategory").click(function(){
        var str = $("#txtCategory").val().toLowerCase(), rand;
        var arr;// = str.split(/[,;\s]/);
        var tempstring;
        tempstring = str.replace(/[^A-Za-zА-Яа-яЁё0-9\s]/g,',');
        arr = tempstring.split(',');
//        alert(arr);
        var tagsCount = $(".label-tags").length;
        var i,j;
        for (i = tagsCount, j = 0; i < 6, j < arr.length; i++, j++) {
            if (i < 5 ) {
                if(isSimilar(arr[j])) {
                    i--;
//                    alert('is similar');
                } else {
                    rand = Math.random();
                    $(".dvCategoryLabel").append("<div class='label-tags' id='"+rand+"'><p><span>"+arr[j]+
                        "</span><span class='removeTag'></span></p><input type='hidden' name='tags["+rand+"]' value='"+arr[j]+"'></div>");
//                    alert(arr[j]);
                }
            } else {
//                alert('to much!');
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

    $("input[type=checkbox]").live('change', function(){
        if (!$(this).is(":checked")) {
            var curr_name;
            curr_name = $(this).attr("id");
            $(".label-tags#"+curr_name).remove();
            isTagsComplete();


        } else {
            $(".dvCategoryLabel").append("<div class='label-tags' id='"+$(this).attr('id')+"'><p><span>"+$(this).parent('').text()+"</span><span class='removeTag'></span></p></div>");
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
    $(".label-tags p").live('click',function(){
        var curr_div = $(this).parent('div');
        $("input#"+curr_div.attr('id')).removeAttr("checked");
        curr_div.remove();
        isTagsComplete();
    });
//-------------------------------------------------------------------//




    $("#vioSearchInput").focusin(function() {
        $(this).closest('fieldset').addClass('active');
        $(this).closest('fieldset').find('.btnFind').addClass('active');
        $(this).closest('fieldset').find('.btnAsk').addClass('active');
    });
    $("#vioSearchInput").focusout(function() {
        $(this).closest('fieldset').removeClass('active');
        $(this).closest('fieldset').find('.btnFind').removeClass('active');
        $(this).closest('fieldset').find('.btnAsk').removeClass('active');
    });
});

//*****************************************************конец ready****************************************************//