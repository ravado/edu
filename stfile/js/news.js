$(document).ready(function(){
    $("#datepicker").datepicker({
            onSelect:function(){
                alert($(this).datepicker('getDate'));
            }
    });
});