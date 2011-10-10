/*
 * Скрипты главной страницы
 */

/*Функция вызывающаяся при нажатии кнопки ВОЙТИ*/
function auth(){
   var login = $("[name = login]").val(),
       password = $("[name = password]").val();
   if ((login.length >= 5) && (password.length >= 5)){
       $("[name = formAuth]").submit();
   }else{
       hints('error','Вы неправильно заполнили форму авторизации');
   }
}