/*
 * Скрипты которые необходимы на всем сайте
 */

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
    if (mShowed == true){
        hideAllHints();
    }
    if (mShowed == false){
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


//**************************************************начало ready******************************************************//
$(document).ready(function(){

//============================Хинты====================================//

    //Инициализация сообщений
    initializeHints();

    //Клик по выехавшему сообщению посылает его обратно :)
    $('.hint').click(function(){hideAllHints()});



//--------------------------------------------------------------------//

})


//*****************************************************конец ready****************************************************//