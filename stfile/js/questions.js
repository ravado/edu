$(document).ready(function(){

    // Нажатие кнопки "Поиск" или "Спросить" в зависимости от нажатого вызываем разные екшены
    $(".frmQuestion").children(".submit").click(function() {
        if ($(this).attr("name") == "btnSearch") {
            $(".frmQuestion").attr('action','/questions/search');
        }
        else {
            $(".frmQuestion").attr('action','/questions/ask');
        }
    });




//======================================Слайдер боковой менюшки (справа)=======================================QuestCat//
$('#ulQuestCat ul').each(function(index) {
    $(this).prev().addClass('collapsible').click(function() {
      if ($(this).next().css('display') == 'none') {
        $(this).next().slideDown(200, function () {
          $(this).prev().removeClass('collapsed').addClass('expanded');
        });
      }else {
        $(this).next().slideUp(200, function () {
          $(this).prev().removeClass('expanded').addClass('collapsed');
          $(this).find('ul').each(function() {
            $(this).hide().prev().removeClass('expanded').addClass('collapsed');
          });
        });
      }
      return false;
    });
  });
//--------------------------------------------------------------------------------------------------------------------//


});