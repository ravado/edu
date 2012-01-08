
function searchIt(){

    googleSearch($("#searchResult"),$("#txtSearch"),{append:false});
    $("#dvSearch").animate({marginLeft:"0px", marginTop:"10px", marginBottom:"10px"},500, "swing");

}

$(document).ready(function(){

    $("#txtSearch").focus();

    $("#txtSearch").keypress(function(e){
        if(e.keyCode == 13){
            searchIt();
        }
    });


    $("#submitSearch").click(function(){
        searchIt();
    });
});