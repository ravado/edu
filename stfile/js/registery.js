$(document).ready(function(){

    /*-----РЕГИСТРАЦИЯ ПОЛЬЗОВАТЕЛЯ-----*/
    var reg_username = $("#frm_register input[name=username]"),
        reg_email = $("#frm_register input[name=email]");

    /*Првоеряем логин*/
    reg_username.keyup(function(){
        if(reg_username.val().length == 0){
            console.log('0');
            reg_username.removeClass('rc');
            $("#err_username").html('');
        }else{
            if(getRegex(reg_username,'login')){
                reg_username.addClass('rc');
                $("#err_username").html('');
            }else{
                reg_username.removeClass('rc');
                $("#err_username").html('Имя пользователя некорректно!');
            }
        }
        isRegReady();
    });

    /*Проверяем почту*/
    reg_email.keyup(function(){
        if(reg_email.val().length == 0){
            reg_email.removeClass('rc');
            $("#err_email").html('');
        }else{
            if(getRegex(reg_email,'email')){
                reg_email.addClass('rc');
                $("#err_email").html('');
            }else{
                reg_email.removeClass('rc');
                $("#err_email").html('Адрес почты некорректен!');
            }
        }
        isRegReady();
    });

    /*Смотрим оба поля, и делаем кнопку активной*/
    function isRegReady(){
        if((reg_username.is('.rc')) && (reg_email.is('.rc'))){
            $(".authrg_btn").removeClass('disabled');
        }else{
            $(".authrg_btn").addClass('disabled');
        }
    }

    /*Нажимаем на кноку РЕГИСТРАЦИЯ*/
    $("#reg_btn").click(function(){
        if(isValueExist(reg_username.val(),'login')){
            ulogin = false;
            $("#err_username").html("Такое имя уже занято!");
        }else{
            ulogin = true;
        }
        if(isValueExist(reg_email.val(),'email')){
            uemail = false;
            $("#err_email").html("Этот адрес уже используется!");
        }else{
            uemail = true;
        }
        if( ulogin && uemail){
            $("#frm_register").submit();
        }
    });
});


/*
 * Функция возвращает регулярное выражение необходимое для валидации полей
 * type это тип проверяемого выражения (может быть: email, login)
 */
function getRegex (jQueryObj,type){
    var currRagex;

    //Максимальные значения для полей
    var maxLogin = 15, minLogin = 5,
        maxEmail = 50;
    switch (type){
        case ('login'):{
            if ((jQueryObj.val().length > maxLogin) && (jQueryObj.val().length < minLogin)) {
                return false;
            }
            else {
                currRagex = new RegExp(/^\w+([\.-]?\w+){2,}$/);
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
        default:{
            return false;
        }
    }
}

/*
 * Проверяем используется ли такой логин или email
 * udata = данные которые нужно проверить
 * utype = (login || email)
 */
function isValueExist(udata,utype){
    var isExist = false, //показывает, сущестует ли такая запись в БД
        needAction; //экшн, который будет проверять данные

    if(utype == 'login'){
        needAction = "/user/hidden/getulogin";
    }
    if(utype == 'email'){
        needAction = "/user/hidden/getuemail";
    }

   /* $.ajax({
        type:"POST",
        async:false,
        data:'udata='+udata,
        url: needAction,
        dataType:"json",
        success:function(data){
            isExist = data;
        },
        error:function(){
            alert('Ошибка при выполнении AJAX-запроса!');
        }
    });*/
    return true;
}