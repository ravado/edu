/*
 * Скрипт страницы регистрации
 */
$(document).ready(function(){

//=====================================Отображение различных подсказок по заполнению полей формы======================//
    var allTextInputs = $("table.#tblRegisterForm input"); //Выбираем все текстовые инпуты из формы
    allTextInputs.focusin(function(){
        var current = $("table.#tblRegisterForm input:focus") //Выбираем элемент который получил фокус
        switch (current.attr('name')){ //Сравниваем атрибуты name, если находим совпадение записываем в <P> подсказку, и прерываем выполнение
            case "login":{
                $('#dvRightInfo').html("<b>Имя пользователя</b> - это виртаульное имя которое отображается на сайте вместо ваших настоящих имени и фамилии. " +
                    "Постарайтесь выбирать осмысленное и легко запоминающееся имя. Поскольку его вы будете часто использовать.<br><br><b>Советы и предупредения:</b><ul><li>Имя это любое слово, состоящее из букв латинского алфавита и цифр;</li>" +
                    "<li>Минимальная длинна имени 5 символов;</li><li>Выбранное имя не должно содержать ненормативную лексику или любые другие ругательства;</li></ul><br/><b>Правильно:</b> Miha, Diana17, Ant12<br/><br/><b>Неправильно:</b> Anton Smirnov, D@m@sk");
                break;
            }
            case 'password':{
                $('#dvRightInfo').html("<b>Пароль</b> это ваш виртуальный ключ от сайта. Он защищает вашу учетную запись и все ваши данные от злоумышленников и других посторонних лиц.<br><br><b>Советы и предупредения:</b><ul><li>Для лучшей безопасности, пароль может содержать любые доступные символы;</li>" +
                    "<li>Пароль чувствителен к регистру: 'замок' и 'зАмОк' - это разные пароли;</li><li>Минимальная длинна пароля 5 символов;</li><li>Храните пароли в защищенном месте, доступ к которому имеете только вы;</li>" +
                    "<li>В случае потери пароля, вы сможете восстановить доступ к сайту;</li></ul><br/><b>Хорошо:</b> m12$lDbM_s, m^Bd#124kN<br/><br/><b>Плохо:</b> 12345, qwerty, пароль");
                break;
            }
            case 'passwordConf':{
                $('#dvRightInfo').html("<b>Пароль</b> это ваш виртуальный ключ от сайта. Он защищает вашу учетную запись и все ваши данные от злоумышленников и других посторонних лиц.<br><br><b>Советы и предупредения:</b><ul><li>Для лучшей безопасности, пароль может содержать любые доступные символы;</li>" +
                    "<li>Пароль чувствителен к регистру: 'замок' и 'зАмОк' - это разные пароли;</li><li>Минимальная длинна пароля 5 символов;</li><li>Храните пароли в защищенном месте, доступ к которому имеете только вы;</li>" +
                    "<li>В случае потери пароля, вы сможете восстановить доступ к сайту;</li></ul><br/><b>Хорошо:</b> m12$lDbM_s, m^Bd#124kN<br/><br/><b>Плохо:</b> 12345, qwerty, пароль");
                break;
            }
            case 'email':{
                $('#dvRightInfo').html("Это ваш <b>адрес электронной почты</b>. Вы должны ввести рабочий e-mail адрес, к которому вы имеете доступ, так как Вам придется подтвердить регистрацию. В противном случае аккаунт будет удален." +
                    "<br/><br/>Благодаря указаному  адресу, вы сможете востановить забытый пароль." +
                    "<br/><br/>Мы не занимаемся рассылкой рекламных объявлений, и не передаем полученые от вас почтовые адреса третим лицам.");
                break;
            }
            case 'firstName':{
                $('#dvRightInfo').html("<b>Что дает регистрация на сайте:</b>");
                break;
            }
            case 'lastName':{
                $('#dvRightInfo').html("<b>Что дает регистрация на сайте:</b>");
                break;
            }
            default:{
                break;
            }
        }
    })

  

//==============================Модальное окно с условиями соглашения=================================================//
    //При нажатии на ссылку с класом poplight и первым символом в ссылке(#)
    $("[class=poplight]").click(function() {
        var popID = $(this).attr('rel'); //Получаем имя popup`a
        var popURL = $(this).attr('href'); //Получаем href popup`a для определения размера

        //Pull Query & Variables from href URL
        var query= popURL.split('?');
        var dim= query[1].split('&');
        var popWidth = dim[0].split('=')[1]; //Gets the first query string value

        //Fade in the Popup and add close button
        $('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="../../stfile/img/user/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');

        //Define margin for center alignment (vertical   horizontal) - we add 80px to the height/width to accomodate for the padding  and border width defined in the css
        var popMargTop = ($('#' + popID).height() + 80) / 2;
        var popMargLeft = ($('#' + popID).width() + 80) / 2;

        //Apply Margin to Popup
        $('#' + popID).css({
            'margin-top' : -popMargTop,
            'margin-left' : -popMargLeft
        });
        //Fade in Background
        $('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
        $('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer - .css({'filter' : 'alpha(opacity=80)'}) is used to fix the IE Bug on fading transparencies

        return false;
    });

    //Закрыть модальное окно и спрятать слой
    $('a.close, #fade').live('click', function() { //При клике на кнопку Close...
        $('#fade , .popup_block').fadeOut(function() {
            $('#fade, a.close').remove();  //fade them both out
        });
        return false;
    });
//--------------------------------------------------------------------------------------------------------------------//
});