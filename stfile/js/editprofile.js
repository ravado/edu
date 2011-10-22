/*Скрипт редактирования профиля пользователя*/

var ISVALIDU = {keyEmail:true,keyPass:true,keyPassConfirm:true,keyFirstName:true,keyLastName:true};



$(document).ready(function(){

//===================== Изменения данных пользователя (Валидация формы изменения профиля) ============================//
     var password = $("input[name='password']"),
         passwordConfirm = $("input[name='passwordConf']"),
         eMail = $("input[name='email']"),
         firstName = $("input[name='firstName']"),
         lastName = $("input[name='lastName']"),
         currEmailValue = eMail.val();

    //Проверка пароля
    password.blur(function(){
        switch (validCheck($(this) ,'password')){
            case 'correct':{
                //alert('correct');
                $(this).removeClass("Red").removeClass("uncorrect").addClass("correct");
                $("#spnSFPassword").html('<img src="../../stfile/img/success.png">');
                $("#spnPassword").css('visibility','hidden');
                //ISVALIDU['keyPass']=true;
                break;
            }
            case 'not correct':{
                //выводим иконку что все плохо
                $(this).addClass("Red").removeClass("correct").addClass("uncorrect");
                $("#spnSFPassword").html('<img src="../../stfile/img/failure.png">');
                $("#spnPassword").text('Вы ввели запрещенные символы или их меньше 5!');
                $("#spnPassword").css('visibility','visible');
                //ISVALIDU['keyPass']=false;
                break;
            }
            case 'not enough symbols':{
                $("#spnSFPassword").html('');
                $(this).removeClass("Red").removeClass("uncorrect").addClass("correct");;
                $("#spnPassword").css('visibility','hidden');
                //ISVALIDU['keyPass'] = true;
                break;
            }
        }
    });

    //Потверждение пароля
    passwordConfirm.blur(function(){
        switch (validCheck($(this) ,'password')){
            case 'correct':{
                if($(this).val() == password.val()){
                    password.removeClass("Red").removeClass("uncorrect").addClass("correct");;
                    passwordConfirm.removeClass("Red").removeClass("uncorrect").addClass("correct");;
                    $("#spnSFPasswordConfirm").html('<img src="../../stfile/img/success.png">');
                    $("#spnSFPassword").html('<img src="../../stfile/img/success.png">');
                    $("#spnPassword").css('visibility','hidden');
                    $("#spnPasswordConf").css('visibility','hidden');
                    //ISVALIDU['keyPassConfirm'] = true;
                    break;
                }
                //Пароли не совпадают
                else {
                    password.addClass("Red").removeClass("correct").addClass("uncorrect");;
                    passwordConfirm.addClass("Red").removeClass("correct").addClass("uncorrect");;
                    $("#spnSFPasswordConfirm").html('<img src="../../stfile/img/failure.png">');
                    $("#spnSFPassword").html('<img src="../../stfile/img/failure.png">');
                    $("#spnPassword").text('Пароли не совпадают!');
                    $("#spnPassword").css('visibility','visible');
                    $("#spnPasswordConf").text('Пароли не совпадают!');
                    $("#spnPasswordConf").css('visibility','visible');
                    //ISVALIDU['keyPassConfirm'] = false;
                    break;
                }
            }
            case 'not correct':{
                //выводим иконку что все плохо
                passwordConfirm.addClass("Red").removeClass("correct").addClass("uncorrect");
                $("#spnSFPasswordConfirm").html('<img src="../../stfile/img/failure.png">');
                $("#spnPasswordConf").text('Вы ввели запрещенные символы или их меньше 5!');
                $("#spnPasswordConf").css('visibility','visible');
                //ISVALIDU['keyPassConfirm'] = false;
                break;
            }
            case 'not enough symbols':{
                if (password.val().length == 0){
                $("#spnSFPasswordConfirm").html('');
                $("#spnSFPassword").html('');
                passwordConfirm.removeClass("Red").removeClass("uncorrect").addClass("correct");
                password.removeClass("Red").removeClass("uncorrect").addClass("correct");;
                $("#spnPasswordConf").css('visibility','hidden');
                $("#spnPassword").css('visibility','hidden');

                    //ISVALIDU['keyPassConfirm'] = true;
                }
                else {
                    password.addClass("Red").removeClass("correct").addClass("uncorrect");
                    passwordConfirm.addClass("Red").removeClass("correct").addClass("uncorrect");;
                    $("#spnSFPasswordConfirm").html('<img src="../../stfile/img/failure.png">');
                    $("#spnSFPassword").html('<img src="../../stfile/img/failure.png">');
                    $("#spnPassword").text('Пароли не совпадают!');
                    $("#spnPassword").css('visibility','visible');
                    $("#spnPasswordConf").text('Пароли не совпадают!');
                    $("#spnPasswordConf").css('visibility','visible');
                    //ISVALIDU['keyPassConfirm'] = false;
                }
                break;
            }
        }
    });

    //Прверка Email
    eMail.blur(function(){$("#spnSFEmail").html('<img src="../../stfile/img/loading.gif">');
        switch (validCheck($(this) ,'email', true)){
            //Если в базе не зарегистрировано пользователя с таким адресом
            case 'empty':{
                $(this).removeClass("Red").removeClass("uncorrect").addClass("correct");
                $("#spnSFEmail").html('<img src="../../stfile/img/success.png">');
                $("#spnEmail").css('visibility','hidden');
                //ISVALIDU['keyEmail']=true;
                break;
            }
            case 'not correct':{
                //выводим иконку что все плохо
                $(this).addClass("Red").removeClass("correct").addClass("uncorrect");
                $("#spnSFEmail").html('<img src="../../stfile/img/failure.png">');
                $("#spnEmail").text('Вы ввели запрещенные символы!');
                $("#spnEmail").css('visibility','visible');
                //ISVALIDU['keyEmail']=false;
                break;
            }
            case 'exist':{
                if (eMail.val() != currEmailValue) {
                    //выводим иконку что все плохо
                    $(this).addClass("Red").removeClass("correct").addClass("uncorrect");
                    $("#spnSFEmail").html('<img src="../../stfile/img/failure.png">');
                    $("#spnEmail").text('Такой email уже зарегистрирован');
                    $("#spnEmail").css('visibility','visible');
                    //ISVALIDU['keyEmail']=false;
                    break;
                }
                else {
                    $(this).removeClass("Red").removeClass("uncorrect").addClass("correct");
                    $("#spnSFEmail").html('<img src="../../stfile/img/success.png">');
                    $("#spnEmail").css('visibility','hidden');
                    //ISVALIDU['keyEmail']=true;
                    break;
                }
            }
            case 'not enough symbols':{
                $("#spnSFEmail").html('<img src="../../stfile/img/success.png">');
                $(this).removeClass("Red").removeClass("uncorrect").addClass("correct");
                $(this).val(currEmailValue);
                $("#spnEmail").css('visibility','hidden');
                //ISVALIDU['keyEmail']=false;
                break;
            }
        }
    });

    //Проверка Имени
    firstName.blur(function(){
        switch (validCheck($(this) ,'name')){
            case 'correct':{
                $(this).removeClass("Red").addClass("correct");
                $("#spnSFFirstName").html('<img src="../../stfile/img/success.png">');
                $("#spnFirstName").css('visibility','hidden');
                //ISVALIDU['keyFirstName']=true;
                break;
            }
            case 'not correct':{
                //выводим иконку что все плохо
                $(this).addClass("Red").removeClass("correct");
                $("#spnSFFirstName").html('<img src="../../stfile/img/failure.png">');
                $("#spnFirstName").text('Вы ввели запрещенные символы или их меньше 3!');
                $("#spnFirstName").css('visibility','visible');
                //ISVALIDU['keyFirstName']=false;
                break;
            }
            case 'not enough symbols':{
                $("#spnSFFirstName").html('');
                $(this).removeClass("Red").addClass("correct");
                $("#spnFirstName").css('visibility','hidden');
                //ISVALIDU['keyFirstName']=true;
                break;
            }
        }
    });

    //Проверка Фамилии
    lastName.blur(function(){
        switch (validCheck($(this),'name')){
            case 'correct':{
                $(this).removeClass("Red").addClass("correct");
                $("#spnSFLastName").html('<img src="../../stfile/img/success.png">');
                $("#spnLastName").css('visibility','hidden');
                //ISVALIDU['keyLastName']=true;
                break;
            }
            case 'not correct':{
                //выводим иконку что все плохо
                $(this).addClass("Red").removeClass("correct");
                $("#spnSFLastName").html('<img src="../../stfile/img/failure.png">');
                $("#spnLastName").text('Вы ввели запрещенные символы или их меньше 3!');
                $("#spnLastName").css('visibility','visible');
                //ISVALIDU['keyLastName']=false;
                break;
            }
            case 'not enough symbols':{
                $("#spnSFLastName").html('');
                $(this).removeClass("Red").addClass("correct");
                $("#spnLastName").css('visibility','hidden');
                //ISVALIDU['keyFirstName']=true;
                break;
            }
        }
    });


    $("#btnRegSubmit").click(function(){
        var allCheckInputs = $(".correct");
        if (allCheckInputs.length == 5) {
            eMail.blur();
            password.blur();
            passwordConfirm.blur();
            firstName.blur();
            lastName.blur();
            $("#spnSaveLoading").css('visibility','visible');
            //аякс запрос с синхронной передачей даных
            $.ajax({type:"POST", async:false, data: $("#editForm").serialize(), url: "/user/uhid/setinfo", dataType:"json",
                success:function(data){
                    if(data.correct){
                        hints('success','Ваши даные изменены.');
                        $("#spnSaveLoading").css('visibility','hidden');
                    }
                    if(!data.correct) {
                        hints('error','Возникла ошибка в аякс запросе, нам очень жаль');
                    }
                },
                error:function(){
                    alert('error in ajax query :(');
                }
            });

        }
        else{
            hints('error','Некорректно заполнены поля');
            $("input").blur();
        }
    })
//--------------------------------------------------------------------------------------------------------------------//
})