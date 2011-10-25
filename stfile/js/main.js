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
                        result = 'correct';
                    }
                    else {
                        result = 'not correct';
                    }
                }
            }
            //Если без 3-го параметра
            else {
                if (getRegex(jQueryObj,validateKind)){
                        result = 'correct';
                }
                else {
                    result = 'not correct';
                }
            }
        }
        //Если не введено символов
        else{
            result = 'not enough symbols';
        }
    }
    else {
        result = 'not enough parameter';
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

    //Плейсхолдеры для бл#@&*!го IE!!!
    $('[placeholder]').placeholder();

})


//*****************************************************конец ready****************************************************//