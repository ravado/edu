// Настройка поиска по всему интернету
google.load('search', '1', {language : 'ru', style : google.loader.themes.V2_DEFAULT});
google.setOnLoadCallback(function() {
    var customSearchOptions = {};
    var imageSearchOptions = {};
    imageSearchOptions['layout'] = google.search.ImageSearch.LAYOUT_CLASSIC;
    customSearchOptions['enableImageSearch'] = true;
    customSearchOptions['imageSearchOptions'] = imageSearchOptions;  var customSearchControl = new google.search.CustomSearchControl(
        '017974249376903738753:hixcuhvwd_4', customSearchOptions);
    customSearchControl.setResultSetSize(google.search.Search.LARGE_RESULTSET);
    customSearchControl.draw('dv-web-search');
}, true);

// Настройка поиска по сайту
google.load('search', '1', {language : 'ru', style : google.loader.themes.V2_DEFAULT});
google.setOnLoadCallback(function() {
    var customSearchOptions = {};
    var imageSearchOptions = {};
    imageSearchOptions['layout'] = google.search.ImageSearch.LAYOUT_CLASSIC;
    customSearchOptions['enableImageSearch'] = true;
    customSearchOptions['imageSearchOptions'] = imageSearchOptions;  var customSearchControl = new google.search.CustomSearchControl(
        '017974249376903738753:hixcuhvwd_4', customSearchOptions);
    customSearchControl.setResultSetSize(google.search.Search.LARGE_RESULTSET);
    customSearchControl.draw('dv-site-search');
}, true);


function searchIt(){

    googleSearch($("#searchResult"),$("#txtSearch"),{append:false});
    $("#dvSearch").animate({marginLeft:"0px", marginTop:"10px", marginBottom:"10px"},500, "swing");

}


/* Переключение между блоками поиска (по сайту/в интернете) @direction - 'site', 'web' */
function switchSearchDirection(direction) {
    var all_search_blocks = $(".search-block"),
        active_search_block = $(".search-block.active"),
        search_query, active_tab, active_tab_index,
        site_search_block, web_search_block, current_tabs, current_search_block;


    site_search_block = $("#dv-site-search");
    web_search_block = $("#dv-web-search");
    search_query = active_search_block.find('.gsc-input input').val();
    active_tab = active_search_block.find('.gsc-tabHeader.gsc-tabhActive');
    active_tab_index = active_tab.index();
    switch(direction) {
        case 'site': { current_search_block = site_search_block; break; }
        case 'web': { current_search_block = web_search_block; break; }
        default: { return false; }
    }

    // делаем все блоки с поиском неактивными (на всякий)
    all_search_blocks.removeClass('active');

    // выбраный блок делаем активным и записываем поисковый запрос в инпут
    current_search_block.addClass('active').find('.gsc-input input').val(search_query);

    // кликаем на кнопку поиска
    current_search_block.find('.gsc-search-button').click();

    // делаем клик на той вкладке с типом поиска что был на предыдущем блоке поиска
    current_search_block.find('.gsc-tabsArea > :eq(' + active_tab_index + ')').click();
    current_search_block.find('.gsc-tabsAreaInvisible > :eq(' + active_tab_index + ')').click();

    return true;

}

$(document).ready(function(){

    $(".gscb_a").live('click',function() {
        $(".gsc-tabsArea").addClass('gsc-tabsAreaInvisible').removeClass('gsc-tabsArea');
        $(".gsc-refinementsArea").addClass('gsc-refinementsAreaInvisible').removeClass('gsc-tabsArea');
        $(".gsc-above-wrapper-area").addClass('gsc-above-wrapper-area-invisible').removeClass('gsc-above-wrapper-area');
        $(".gsc-adBlock").addClass('gsc-adBlockInvisible').removeClass('gsc-adBlock');
        $(".gsc-resultsbox-visible").addClass('gsc-resultsbox-invisible').removeClass('gsc-resultsbox-visible');

    });

    // Выбор вида поиска (по сайту, в интернете)
    $(".search-way a").click(function() {

        if($(this).hasClass('by-site')) {
            if(switchSearchDirection('site')) {
                $(".search-way a.active").removeClass('active');
//                $("#dv-site-search").find('.gsc-search-button').click();
                $(this).addClass('active');
            }
        }
        if($(this).hasClass('by-web')) {
            if(switchSearchDirection('web')) {
                $(".search-way a.active").removeClass('active');
//                $("#dv-web-search").find('.gsc-search-button').click();
                $(this).addClass('active');
            }
        }
    });





    $("#txtSearch").keypress(function(e){
        if(e.keyCode == 13){
            searchIt();
        }
    });


    $("#submitSearch").click(function(){
        searchIt();
    });
});