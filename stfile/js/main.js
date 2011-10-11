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
        neededAction = "/hiddens/getuserthlogin" //екшн который будет выполнятся если проверяем логин
    }
    //если проверить нужно емейл
    if (type == "email"){
        neededAction = "/hiddens/getuserthemail" //екшн который будет выполнятся если проверяем емейл
    }
    //аякс запрос с синхронной передачей даных
    $.ajax({type:"POST", async:false, data: globalArray+inputedValue, url: neededAction, dataType:"json",
        success:function(data){
            if(data.isRegistered == true){//что нужно делать если найдена запись в базе
                //alert("This login already exist! Try another!");
                isExist = true;
            }
            if(data.isRegistered == false){//что нужно делать если запись в базе не найдена
                //alert("You can use this login!");
                isExist = false;
            }
        },
        error:function(){
            alert('error in ajax query, when check login :(');
        }
    })
    return isExist;
}

//==============================Регулярные выражения==================================================================//
//функция возвращает регулярное выражение необходимое для валидации полей
//type это тип проверяемого выражения (может быть: email, login, password, name)
function getRegex (type){
    switch (type){
        case ('login'):{
            return new RegExp(/^\w+([\.-]?\w+){2,}$/);
        }
        case ('password'):{
            current = new RegExp(/^[^а-яА-Я]{5,}$/);
            return current;
        }
        case ('email'):{
            current = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/);
            return  current;
        }
        case ('name'):{
            current = new RegExp(/^[a-zA-Zа-яА-Я]{3,}$/);
            return current;
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